<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

// Маршруты аутентификации...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Маршруты регистрации...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// Маршруты постов , удалить переделать
Route::get('/posts', 'PostController@index');
Route::post('/post', 'PostController@write');

//Рабочаю область , виртуальный стол
Route::get('/adventures', 'Table\AdventureController@index');
Route::get('/adventure/add', 'Table\AdventureController@form');
Route::get('/adventure/{adventure}', 'Table\AdventureController@show');
Route::get('/adventure/{adventure}/edit', 'Table\AdventureController@edit');
Route::post('/adventure/{adventure}/update', 'Table\AdventureController@update');


Route::post('/adventure/{adventure}/addpost', 'Table\PostController@write');




Route::post('/adventure/add', 'Table\AdventureController@write');


Route::post('/adventure', 'Table\AdventureController@write');

