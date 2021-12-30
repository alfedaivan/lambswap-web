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


Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');
// Route::get('lang/{language}', [LocalizationController::class, 'switch'])->name('localization.switch');
// Route::get('/users', [LocalizationController::class, 'switch'])->name('localization.switch');;



// route user
Route::get('/', 'UserController@index');
Route::get('/product', 'UserController@product');
Route::get('/dex', 'UserController@dex');
Route::get('/game', 'UserController@games');
Route::get('/bounty', 'UserController@bounty');
Route::get('/help', 'UserController@help');
Route::get('/IDO', 'UserController@ido');
Route::get('/invoice', 'UserController@invoice');
Route::get('/IDO/detail', 'UserController@detailIdo');


Route::post('/action-trans', 'UserController@transaction')->name('transaction');


// route admin
Route::get('/dashboard', 'AdminController@index');

//auth
Route::get('/login', 'AuthController@viewAdmin')->name('auth');
Route::post('/signup', 'AuthController@register')->name('auth.register');
Route::post('/signin/member', 'AuthController@loginMember')->name('signin.member');
Route::post('/signin/admin', 'AuthController@loginAdmin')->name('signin.admin');
Route::get('/logout', 'AuthController@logout')->name('auth.logout');


// route ido
Route::get('/dashboard/ido', 'idoController@index');
Route::get('/dashboard/ido/add', 'idoController@addIDO');
