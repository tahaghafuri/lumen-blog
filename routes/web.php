<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/users/list', function () use ($router) {
    return [
        'username' => ['sara','seyed','ali','amir'],
        'password' => ['123','456','789','012'],
        'email' => ['s@l','s@l','a@l','a@l']
    ];
});