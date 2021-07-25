<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// root(top)にGETリクエストが来たらPostsControllerのindexアクションを呼び出す
Route::get('/', 'PostsController@index')->name('top');

// postsにリクエストが来たら、PostsControllerの指定されたアクションを呼び出す
// Create -> POST, Read -> GET, Update -> PUT, Delete -> DELETE
Route::resource('posts', 'PostsController', ['only' =>['create', 'store', 'show', 'edit', 'update', 'destroy']]);