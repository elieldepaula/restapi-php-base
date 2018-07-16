<?php

// Path
//===================================

define('DS', DIRECTORY_SEPARATOR, true);
define('BASE_PATH', __DIR__ . DS . '..' . DS, TRUE);

// Show errors
//===================================

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database
//===================================

define('DATABASE', [
    "databases" => [
        "db1" => [
            "dsn" => "mysql:host=localhost;dbname=restapi-teste",
            "username" => "root",
            "password" => "root"
        ]
    ]
]);

// Loader
//===================================

require BASE_PATH.'app/loader.php';
