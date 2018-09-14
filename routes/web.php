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

Route::prefix('blog')->group(function () {
    Route::get('{post}', 'Post\PostController@show')->name('blog.show');
    Route::get('category/{category}', 'Category\CategoryController@index')->name('category');
    Route::get('author/{author}', 'Author\AuthorController@index')->name('author');
});




Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('home', 'Backend\Home\HomeController@index')->name('admin.home');
    Route::resource('article', 'Backend\Blog\BlogController');
    Route::put('article/restore/{article}', 'Backend\Blog\BlogController@restore')->name('admin.article.restore');
    Route::delete('article/force-destroy/{article}', 'Backend\Blog\BlogController@forceDestroy')->name('admin.article.force-destroy');
});