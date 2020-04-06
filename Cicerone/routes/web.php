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

Auth::routes(['verify'=> true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('register', 'PagesController@register')->name('register');

Route::resource('profile', 'ProfileController');

Route::resource('activityplannings', 'ActivityPlanningsController');

Route::resource('evaluations', 'EvaluationsController');

Route::resource('enrollments', 'ActivityEnrollmentsController');

Route::get('/activityplannings/create/{activitum}','ActivityPlanningsController@create');

Route::get('attivita/{activitum}/showplans','ActivityPlanningsController@controlplans');

Route::put('/attivita/searching','AttivitaController@search')->name('searching');

Route::put('/profile/{id}/charge','ProfileController@charge')->name('charging');

Route::resource('/attivita', 'AttivitaController');

Route::get('/profile', 'PagesController@profile')->name('profile');

Route::get('mieattivita', 'AttivitaController@myactivity');

Route::get('/ChiSiamo', 'PagesController@whoAreWe')->name('whoAreWe');

Route::get('/FAQ', 'PagesController@FAQ')->name('FAQ');

Route::delete('/profile/{profile}/destroyimg', 'ProfileController@destroyImg');


