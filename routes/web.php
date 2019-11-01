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

// 首页
Route::get('/', 'HomeController@home');

// 作者页
Route::get('author/{slug}', 'AuthorController@show')->name('author.show');

// 标签页
Route::get('tags', 'TagController@index')->name('tag.index');
Route::get('tag/{slug}', 'TagController@show')->name('tag.show');

// 专题页
Route::get('topics', 'TopicController@index')->name('topic.index');
Route::get('topic/{slug}', 'TopicController@show')->name('topic.show');

// 分类页
Route::get('categories', 'CategoryController@index')->name('category.index');
Route::get('category/{slug}', 'CategoryController@show')->name('category.show');

// 文章页
Route::get('{slug}.html', 'PostController@show')->name('post.show');
Route::get('random-post', 'PostController@random')->name('post.random');
Route::post('post-like', 'PostController@like')->name('post.like');
Route::post('post-favorite', 'PostController@favorite')->name('post.favorite');

// 浏览历史
Route::get('history', 'UserController@history')->name('history');

// 搜索
Route::get('search', 'HomeController@search')->name('search');

Route::get('qrcode', 'HomeController@qrCode')->name('qrcode');

// 用户中心
Route::group(['middleware' => ['auth']], function () {

    Route::get('admin', 'AdminController@dashboard')->name('dashboard');
    Route::get('admin/{any}', 'AdminController@dashboard')->where('any', '.*');

    Route::get('user', 'UserController@home')->name('user.home');
    Route::get('user/posts', 'UserController@posts')->name('user.posts');
    Route::get('user/favorites', 'UserController@favorites')->name('user.favorites');
    Route::get('user/comments', 'UserController@comments')->name('user.comments');
    Route::get('profile', 'UserController@showProfile')->name('user.profile');

});

// User Center
Route::group(['middleware' => ['auth'], 'prefix' => 'api', 'namespace' => 'Api'], function () {

    Route::get('me', 'UserController@me');
    Route::post('profile', 'UserController@profile');
});

Route::group(['prefix' => 'api', 'namespace' => 'Api'], function () {
});
