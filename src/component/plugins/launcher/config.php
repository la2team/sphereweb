<?php

return [
    'server' => [
        1 => [
            "chronicle" => "High Five",
            "name" => "MyGame",
            "application" => [
                [
                    "l2exe" => "/system/l2.exe",
                    "args" => "AutoLoginEnable=1 Login=%login% Pass=%pass% Server=Infinity x20 CharName=%player% SecPass=",
                    "background" => "src/component/plugins/launcher/tpl/img/l2_button.jpg",
                    "name" => [
                        "ru" => "Запустить игру",
                        "en" => "Launch game",
                        "es" => "Abrir juego",
                        "pt" => "Iniciar jogo",
                        "tr" => "Oyunu başlat"
                    ],
                    "description" => [
                        "ru" => "С графическими эффектами",
                        "en" => null,
                        "es" => null,
                        "pt" => null,
                        "tr" => null
                    ],
                ],
            ],
            "show_accounts" => false,
        ],
    ],
];