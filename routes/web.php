<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ['uses' => 'landingpageController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('agenda','AgendaController');
Route::resource('agendalist','AgendalistController');
Route::resource('speakers','speakersController');
Route::resource('sponsors','sponsorsController');
Route::resource('slide','slideController');
Route::get('manageMailChimp', 'MailChimpController@manageMailChimp');
Route::post('subscribe',['as'=>'subscribe','uses'=>'MailChimpController@subscribe']);
Route::post('sendCompaign',['as'=>'sendCompaign','uses'=>'MailChimpController@sendCompaign']);

