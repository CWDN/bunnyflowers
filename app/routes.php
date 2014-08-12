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
Route::get('/development', 'HomeController@index');
Route::get('/', 'MinecraftController@index');
Route::get('minecraft', 'MinecraftController@index');
Route::get('minecraft/tutorials', 'MinecraftController@tutorial');
Route::get('minecraft/tutorials/{tutorial}', 'MinecraftController@tutorials');
