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


Auth::routes();
//Web
Route::get('/', 'Web\PagesController@index')->name('home');
Route::get('blog','Web\PagesController@blog')->name('posts');
Route::get('articulos/{slug}','Web\PagesController@post')->name('post');
Route::get('/categoria/{slug}', 'Web\PagesController@category')->name('category');
Route::get('etiqueta/{slug}', 'Web\PagesController@tag')->name('tag');
//ADMIN

//Messages
Route::get('messages', 'Admin\MessagesController@index')->name('messages.index');
Route::post('messages', 'Admin\MessagesController@store')->name('messages.store');
Route::delete('messages/{message}', 'Admin\MessagesController@destroy')->name('messages.destroy');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');
