<?php

Route::get('/blog', 'Post\PostController@index')->name('home');
Route::get('/blog/', 'Post\PostController@index')->name('home');

Route::prefix('blog')->group(function () {
    Route::get('{post}', 'Post\PostController@show')->name('blog.show');
    Route::get('category/{category}', 'Category\CategoryController@index')->name('category');
    Route::get('author/{author}', 'Author\AuthorController@index')->name('author');
});


$this->get('blog/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('blog/admin/login', 'Auth\LoginController@login');
$this->post('blog/admin/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('blog/admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('blog/admin/register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('blog/admin/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('blog/admin/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('blog/admin/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('blog/admin/password/reset', 'Auth\ResetPasswordController@reset');

//Auth::routes();
Route::prefix('blog/admin')->group(function () {

    Route::get('home', 'Backend\Home\HomeController@index')->name('admin.home');
    Route::get('/edit-account', 'Backend\Home\HomeController@edit')->name('admin.account.edit');
    Route::put('/edit-account', 'Backend\Home\HomeController@update')->name('admin.account.update');

    Route::resource('article', 'Backend\Blog\BlogController');
    Route::put('article/restore/{article}', 'Backend\Blog\BlogController@restore')->name('admin.article.restore');
    Route::delete('article/force-destroy/{article}', 'Backend\Blog\BlogController@forceDestroy')->name('admin.article.force-destroy');

    Route::resource('category', 'Backend\Category\CategoryController');
    Route::resource('user', 'Backend\User\UserController');
    Route::get('user/confirm/{user}', 'Backend\User\UserController@confirm')->name('user.confirm');

    Route::resource('seo', 'Backend\FrontendPageSEO\FrontendPageSEOController');

    Route::resource('social', 'Backend\Social\SocialController');
});