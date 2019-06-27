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





  Route::get('https://iearuko.herokuapp.com/', 'RoomsController@index');

    Route::get('https://iearuko.herokuapp.com/rooms', 'RoomsController@index');

    Route::get('https://iearuko.herokuapp.com/rooms/search', 'RoomsController@search');

    Route::get('https://iearuko.herokuapp.com/rooms/story', 'RoomsController@story');

    Route::get('https://iearuko.herokuapp.com/rooms/search/{id}', 'RoomsController@show');

