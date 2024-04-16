<?php
return [
    "PLUGIN_HIDE" => false,
    "PLUGIN_ENABLE" => true,
    "PLUGIN_NAME" => "countdown",
    "PLUGIN_VERSION" => "1.0.0",
    "PLUGIN_AUTHOR" => "Logan22",
    "PLUGIN_GITHUB" => "",
    "PLUGIN_DESCRIPTION" => "Foundation plugin to the start of the server and display of time from the start",
    "PLUGIN_ADMIN_PAGE" => "/admin/plugin#",
    "PLUGIN_ADMIN_PAGE_NAME" => "countdown",
    "PLUGIN_ADMIN_PAGE_ICON" => "fa fa-users",

    "INCLUDES" => [
        "PLACE_IN_SPACE_HEADER_0" => "countdown_server/tpl/server_start.html",
    ],
];


