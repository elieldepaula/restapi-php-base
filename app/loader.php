<?php

require BASE_PATH . 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

// Eloquent
//===================================
$capsule = new Capsule;
$capsule->addConnection(DATABASE[ENVIRONMENT]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

// App
//===================================

$app = System\App::instance();
$app->request = System\Request::instance();
$app->route = System\Route::instance($app->request);
$route = $app->route;

// Routes
//===================================

$route->any('/', function() {
    echo 'Welcome to my API v1.0';
});

// TODO list
// - logon-cadastrar
// - logon-login
// - logon-logout

$route->get('/users', 'App\Controllers\LogonController@listUsers');
$route->post('/users', 'App\Controllers\LogonController@newUser');
$route->delete('/users/{id}', 'App\Controllers\LogonController@delUser');

$route->end();
