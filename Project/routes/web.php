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

// Authentication routes
//Route::get('auth/login', 'Auth\LoginController@getLogin');
//Route::post('auth/login', 'Auth\LoginController@postLogin');
//Route::get('auth/logout', 'Auth\LoginController@getLogout');

// Registration routes
//Route::get('auth/register', 'Auth\LoginController@getRegister');
//Route::post('auth/register', 'Auth\LoginController@postRegister');

Route::get('/blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@GetSingle'])->where('slug','[\w\d\-\_]+');
Route::get('/blog', ['as' => 'blog.index', 'uses' => 'BlogController@GetIndex']);
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');
Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
