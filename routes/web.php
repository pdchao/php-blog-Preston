<?php


//Route::get('/tasks', 'TasksController@index');
//Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');

//controller => PostsController
//Eloquent model => Post
//migration => create.posts.table

/*
 * GET /posts
 * GET /posts/create
 * POST /posts
 * GET /posts{id}/edit
 * GET /posts{id}
 * PATCH /posts/{id}
 * DELETE /posts/{id}
 * */
 
