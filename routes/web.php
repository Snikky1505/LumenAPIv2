<?php

/*
 * php -S localhost:8000 -t public
 * composer create-project Lumen
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
//
//$router->get('/', function () use ($router) {
//    return $router->app->version();
//});

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api){
    $api->get('/', function(){
        throw new
        Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException([], "Method Not Allowed");
    });

    //categories
    $api->get('categories','App\Http\Controllers\CategoryController@index');
    $api->post('categories','App\Http\Controllers\CategoryController@store');
    $api->put('categories/{id}','App\Http\Controllers\CategoryController@update');
    $api->get('categories/{id}','App\Http\Controllers\CategoryController@show');
    $api->delete('categories/{id}','App\Http\Controllers\CategoryController@destroy');

    //book
    $api->get('books','App\Http\Controllers\BookController@index');
    $api->post('books','App\Http\Controllers\BookController@store');
    $api->put('books/{id}','App\Http\Controllers\BookController@update');
    $api->get('books/{id}','App\Http\Controllers\BookController@show');
    $api->delete('books/{id}','App\Http\Controllers\BookController@destroy');
});

