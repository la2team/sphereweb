<?php
return [
    "PLUGIN_HIDE" => false,
    "PLUGIN_ENABLE" => true,
    "PLUGIN_NAME" => "sphere-launcher",
    "PLUGIN_VERSION" => "2.0.2",
    "PLUGIN_AUTHOR" => "Logan22",
    "PLUGIN_GITHUB" => "",
    "PLUGIN_DESCRIPTION" => "Official launcher of the Sphere project",
    "PLUGIN_ADMIN_PAGE" => "/admin/launcher",
    "PLUGIN_ADMIN_PAGE_NAME" => "Launcher",
    "PLUGIN_ADMIN_PAGE_ICON" => "fa fa-users",

    "PLUGIN_USER_PAGE" => "/launcher",
    "PLUGIN_USER_PAGE_NAME" => "Sphere-Launcher",
    "PLUGIN_USER_PAGE_ICON" => "fa fa-download text-danger",
    "PLUGIN_USER_PAGE_ACCESS" => ["guest", "user", "moderator", "admin"],
    "PLUGIN_USER_PANEL_SHOW" => ["MAIN_MENU"],
];
