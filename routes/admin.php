<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('/')->middleware(['guest:api'])->group(function () {
    Route::post('login', 'Auth\LoginController@login');
    Route::post('register', 'Auth\RegisterController@register');
});

Route::prefix('/')->middleware(['auth:api'])->group(function () {
    Route::get('user/profile', 'Admin\UserController@profile');
    Route::post('logout', 'Auth\LoginController@logout');

    Route::resource('user', 'Admin\UserController');
    Route::resource('tag', 'Admin\TagController');
    Route::resource('post', 'Admin\PostController');
    Route::resource('comment', 'Admin\CommentController');
    Route::resource('category', 'Admin\CategoryController');
    Route::resource('setting', 'Admin\SettingController');
    Route::get('statistics', 'Admin\PrismController@statistics');
});
