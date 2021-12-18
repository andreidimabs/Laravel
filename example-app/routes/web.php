<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MyController@index');

Route::get('/about', 'MyController@about');
Route::get('/service', 'MyController@services');

Route::resource('posts', 'PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
