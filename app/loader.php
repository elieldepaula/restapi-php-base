<?php

require BASE_PATH.'vendor/autoload.php';

Phormium\DB::configure(DATABASE);

$app = System\App::instance();
$app->request = System\Request::instance();
$app->route = System\Route::instance($app->request);
$route = $app->route;

// Routes
//===================================

$route->any('/', function() {
    echo 'Bem vindo a API v1.0';
});

$route->get('/{name}/{sobrenome}', 'App\Controllers\HomeController@index');
$route->get('/usuarios', 'App\Controllers\HomeController@lista_usuarios');
$route->post('/usuarios', 'App\Controllers\HomeController@cadastra_usuario');
$route->delete('/usuarios/{id}', 'App\Controllers\HomeController@deleta_usuario');

$route->end();