<?php

namespace Ofey\Logan22\model\db;

use Exception;
use Ofey\Logan22\component\alert\board;
use Ofey\Logan22\component\alert\logs;
use Ofey\Logan22\component\redirect;
use PDO;
use PDOException;

class sql {

    /**
     * @var PDO
     */
    private static ?PDO $db = null;
    /**
     * @var null
     */
    protected static $instance = null;
    static public bool $error = false;
    private static int $rowCount = 0;

    /**
     * DB constructor.
     *
     * @throws Exception
     */
    public static function connect() {
        if(self::$db === null) {
            try {
                if(!file_exists('src/config/db.php')) {
                    return null;
                }
                self::$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD, [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4",
                ]);
            } catch(PDOException $e) {
                echo "Ошибка соединения с БД #1 - " . $e->getMessage();
                exit;
            }
        }
        return self::$db;
    }

    public static function query($stmt) {
        return self::$db->query($stmt);
    }

    public static function prepare($stmt) {
        return self::$db->prepare($stmt);
    }

    static public function exec($query) {
        return self::$db->exec($query);
    }

    static public function lastInsertId() {
        return self::$db->lastInsertId();
    }

    public static function debug_query($sql, $args = []){
        if (!empty($args)) {
            // Заменяем символ ? на значения аргументов
            $sql = preg_replace_callback('/\?/', function($matches) use (&$args) {
                return "'" . array_shift($args) . "'";
            }, $sql);
        }
        return $sql;
    }

    private static ?PDOException $exception;

    public static function exception(): ?PDOException {
        return self::$exception;
    }
    /**
     * @throws Exception
      */
    public static function run($query, $args = [], $showJson = false, $isBad = true) {
        if(self::connect()===null) {
            var_dump(debug_backtrace());
            exit('Необходимо установить движок.<br><a href="/install">Нажми чтоб перейти на страницу установки.</a>');
        }
        if(self::connect()===false) {
            echo 'Not connect to db';
            exit;
        }
        self::$exception = null;
        try {
            if(!$args) {
                return self::query($query);
            }
            $stmt = self::prepare($query);
            $stmt->execute($args);
            self::$rowCount = $stmt->rowCount();
            return $stmt;
        } catch(PDOException $e) {
            self::$exception = $e;
            logs::loggerSQL($query, $args, $e->getMessage());
            if($isBad) {
                return false;
            }
            if($showJson){
                board::notice(false, $e->getMessage());
            }
            echo "Ошибка выполнения запроса!<br>";
            echo "Запрос: {$query}<br>";
            if(is_array($args)){
                echo "Параметры: " . implode(", ", $args) . "<br>";
            }else{
                echo "Параметры: " .  $args  . "<br>";
            }
            echo "Ошибка: {$e->getMessage()}<br>";
            die();
        }
    }

    public static function rowCount(){
        $count = self::$rowCount;
        self::$rowCount = 0;
        return $count;
    }

    /**
     * @param       $query
     * @param array $args
     *
     * @return mixed
     */
    public static function getRow($query, array $args = []) {
        return self::run($query, $args)->fetch();
    }

    /**
     * @param       $query
     * @param array $args
     *
     * @return array
     */
    public static function getRows($query, array $args = []) {
        return self::run($query, $args)->fetchAll();
    }


    /**
     * @param       $query
     * @param array $args
     *
     * @return mixed
     */
    public static function getValue($query, $args = []) {
        $result = self::getRow($query, $args);
        if(!empty($result)) {
            $result = array_shift($result);
        }
        return $result;
    }
    /**
     * @param       $query
     * @param array $args
     *
     * @return array
     */
    public static function getColumn($query, $args = []) {
        return self::run($query, $args)->fetchAll(PDO::FETCH_COLUMN);
    }

    public static function sql($query, array $args = []) {
       return self::run($query, $args);
    }
}