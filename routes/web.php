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

//Route::get('/test', function () {
//    return view('frontend.layout.category');
//});


Route::get('/', 'Post\PostController@index')->name('home');

Route::get('/blog/{post}', 'Post\PostController@show')->name('blog.show');
Route::get('/blog/category/{category}', 'Category\CategoryController@index')->name('category');




