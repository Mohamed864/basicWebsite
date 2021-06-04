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

Route::get('/', 'App\Http\Controllers\PagesController@getHome');

Route::get('/about', 'App\Http\Controllers\PagesController@getAbout');

Route::get('/contact', 'App\Http\Controllers\PagesController@getContact');

Route::get('/user', 'App\Http\Controllers\PagesController@getUser');

Route::get('/messages', 'App\Http\Controllers\MessagesController@getMessages');

Route::post('/contact/submit', 'App\Http\Controllers\MessagesController@submit');

Route::post('/user/submit', 'App\Http\Controllers\MessagesController@submit0');