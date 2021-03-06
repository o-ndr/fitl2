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


// This is a simple route with closure, usu for basic things.
Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});


// This is a route with a controller, usu for more complex things.
Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');

Route::post('pearls/store', 'PearlController@store');
Route::get('pearls/create', 'PearlController@create');
Route::get('pearls/{pearl}', 'PearlController@show');
Route::get('pearls', 'PearlController@index');