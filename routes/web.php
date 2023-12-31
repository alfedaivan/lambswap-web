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
Route::get('/NFT', 'UserController@product');
// Route::get('/dex', 'UserController@dex');
Route::get('/GameFi', 'UserController@games');
// Route::get('/bounty', 'UserController@bounty');
Route::get('/about', 'UserController@help');
Route::get('/about/team', 'UserController@team');
Route::get('/IDO', 'UserController@ido');
Route::get('/invoice', 'UserController@invoice');
Route::get('/IDO/detail', 'UserController@detailIdo');

Route::get('/docs', 'UserController@docs');


Route::post('/action-trans', 'UserController@transaction')->name('transaction');
Route::get('/sendEmai/{id}', 'UserController@sendEmail')->name('send.email');
// route admin
Route::get('/dashboard', 'AdminController@index');
Route::post('/change-status/{id}', 'AdminController@changeStatus')->name('change.status');
Route::get('/reject/{id}', 'AdminController@rejectTrans')->name('reject.trans');
Route::get('/correction/{id}', 'AdminController@correction')->name('correction.trans');


//auth
Route::get('/login', 'AuthController@viewAdmin')->name('auth');
Route::post('/signup', 'AuthController@register')->name('auth.register');
Route::post('/signin/member', 'AuthController@loginMember')->name('signin.member');
Route::post('/signin/admin', 'AuthController@loginAdmin')->name('signin.admin');
Route::get('/logout', 'AuthController@logout')->name('auth.logout');


// route ido
Route::get('/dashboard/ido', 'idoController@index')->name('ido');
Route::get('/dashboard/ido/edit/{id}', 'idoController@editIDO')->name('edit.ido');
Route::put('/dashboard/ido/edit/{id}', 'idoController@editIdoAction')->name('action.ido');
// Route::get('/dashboard/ido', 'idoController@index');
// Route::get('/dashboard/ido/add', 'idoController@addIDO');


//route history
Route::get('/dashboard/history', 'HistoryController@index')->name('history');

//route users
Route::get('/dashboard/user', 'AdminController@users')->name('users');
