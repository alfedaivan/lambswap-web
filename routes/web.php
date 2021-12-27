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

// route user
Route::get('/', 'App\Http\Controllers\UserController@index');
Route::get('/product', 'App\Http\Controllers\UserController@product');
Route::get('/game', 'App\Http\Controllers\UserController@games');
Route::get('/bounty', 'App\Http\Controllers\UserController@bounty');
Route::get('/help', 'App\Http\Controllers\UserController@help');
Route::get('/IDO', 'App\Http\Controllers\UserController@ido');
Route::get('/IDO/detail', 'App\Http\Controllers\UserController@detailIdo');


// route admin
Route::get('/dashboard', 'App\Http\Controllers\AdminController@index');

//auth
Route::get('/login', 'App\Http\Controllers\AuthController@viewAdmin')->name('auth');
Route::post('/signup', 'App\Http\Controllers\AuthController@register')->name('auth.register');
Route::post('/signin/member', 'App\Http\Controllers\AuthController@loginMember')->name('signin.member');
Route::post('/signin/admin', 'App\Http\Controllers\AuthController@loginAdmin')->name('signin.admin');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('auth.logout');

