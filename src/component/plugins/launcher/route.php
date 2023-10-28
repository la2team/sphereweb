<?php
use Ofey\Logan22\component\plugins\launcher;
$routes = [
       [
            "method"  => "GET",
            "pattern" => "/launcher",
            "file"    => "launcher.php",
            "call"    => function() {
                (new launcher\launcher())->show();
            },
       ],

        [
            "method"  => "GET",
            "pattern" => "/admin/launcher/add",
            "file"    => "launcher.php",
            "call"    => function() {
                (new launcher\launcher())->add();
            },
        ]

];