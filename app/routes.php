<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'MinecraftController@index');
Route::get('mc', 'MinecraftController@index');
Route::get('mc/tutorials', 'MinecraftController@tutorial');
Route::get('mc/tutorials/{tutorial}', 'MinecraftController@tutorials');
