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

Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
});

Route::get('/info', function () {
    return phpinfo();
});

$router->post('upload', 'UploadController@index');
$router->post('generate', 'UploadController@generate');
