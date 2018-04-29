<?php

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

// This works too
// $router->get('/', 'PagesController@index');

// Default
//$router->get('/', function () use ($router) {
//    return $router->app->version();
//});

// Custom route
$router->get('/', [
    'uses' => 'PagesController@getIndex',
    'as' => 'pages.index'
]);

$router->get('/add-to-cart/{id}', [
    'uses' => 'PagesController@getAddToCart',
    'as' => 'pages.addToCart'
]);

$router->get('/shopping-cart/', [
    'uses' => 'PageController@getCart',
    'as' => 'pages.shoppingCart'
]);

$router->get('/subscribe/{email}', [
    'uses' => 'PagesController@getSubscribe',
    'as' => 'pages.subscribe'
]);