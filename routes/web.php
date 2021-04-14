<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route:: get("/","Users\LandingPagesController@index");
Route::resource('contact','Users\ContactsController');


Auth::routes(['register' => false]);

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('dashboard','Admin\DashboardsController');
Route::resource('business','Admin\BusinessesController');
Route::resource('partner','Admin\PartnersController');
Route::resource('account','Admin\AccountsController');
Route::resource('profile','Admin\ProfilesController');
Route::resource('contactadmin','Admin\ContactsController');