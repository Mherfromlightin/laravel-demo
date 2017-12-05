<?php

Route::get('/', 'PageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductController@index');
Route::get('/products/{id}', 'ProductController@show');

Route::get('/cars', 'CarsController@index');
Route::get('/cars/{id}', 'CarsController@show');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/schools', 'SchoolsController@index');
Route::get('/schools/{school}', 'SchoolsController@show');
