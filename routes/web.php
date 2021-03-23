<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/posts', 'PostController@getPosts')->name('posts-all');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/my-posts', 'PostController@getMyPosts')->name('my-posts');
    Route::post('/post', 'PostController@createPost')->name('create-post');
    Route::view('/create-post', 'createPost')->name('create-post-form');
});
