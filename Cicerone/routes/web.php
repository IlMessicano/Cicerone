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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('register', 'PagesController@register')->name('register');

Route::resource('profile', 'ProfileController');

Route::resource('/attivita', 'AttivitaController');

Route::get('/profile', 'PagesController@profile')->name('profile');

Route::get('mieattivita', 'AttivitaController@myactivity');

Route::get('/ChiSiamo', 'PagesController@whoAreWe')->name('whoAreWe');

Route::get('/FAQ', 'PagesController@FAQ')->name('FAQ');


