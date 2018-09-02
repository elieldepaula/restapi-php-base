<?php

// Environment
//===================================

define('ENVIRONMENT', 'development');

// Path
//===================================

define('DS', DIRECTORY_SEPARATOR, TRUE);
define('BASE_PATH', __DIR__ . DS . '..' . DS, TRUE);

// Show errors
//===================================

switch (ENVIRONMENT) {
    case 'development':
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        break;
    case 'production':
        ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        error_reporting(0);
        break;
}


// Database
//===================================

define('DATABASE', array(
    'development' => array(
       'driver'    => 'mysql',
       'host'      => 'localhost',
       'database'  => 'lojanuvem',
       'username'  => 'root',
       'password'  => 'root',
       'charset'   => 'utf8',
       'collation' => 'utf8_general_ci',
       'prefix'    => ''
    ),
    'production' => array(
       'driver'    => 'mysql',
       'host'      => 'localhost',
       'database'  => '',
       'username'  => '',
       'password'  => '',
       'charset'   => 'utf8',
       'collation' => 'utf8_general_ci',
       'prefix'    => ''
    )
));

// Loader
//===================================

require BASE_PATH.'app/loader.php';
