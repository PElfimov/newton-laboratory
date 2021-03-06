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
//    return $router->app->version();
    return "Hello world!!";
});

$router->get('/test', 'ExampleController@test');

$router->get('/calculator', 'CalculatorController@calculation');

$router->group(
    ['prefix' => 'auth'],
    function () use ($router) {
        $router->post('/register', 'AuthController@register');
    }
);
