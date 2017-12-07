<?php

Route::get('/', 'PageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');






// GET            /posts                   index                get all posts from db
// GET            /posts/create            create               get post create form
// POST           /posts                   store                posts create form to db and redirect
// GET            /posts/{post}            show                 get specific post from db
// GET            /posts/{post}/edit       edit                 get specific post from db to edit form
// PUT or PATCH   /posts/{post}            update               patch specific post in db and redirect
// DELETE         /posts/{post}            destroy              delete specific post from db and redirect