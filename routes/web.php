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

$router->get('/',[ 'as' => 'home', function () use ($router) {
    return view("main");
}]);
$router->get('/sucess',[ 'as' => 'success', function () use ($router) {
    return view("success");
}]);
$router->post('contact', 'MailController@sendMail');
