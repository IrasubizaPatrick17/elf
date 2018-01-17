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
Route::resource('invitation','InvitationController');
Route::resource('rlfserena','rlfserenaController');
Route::resource('nb','nbController');
Route::resource('nbtwo','nbtwoController');
Route::resource('confirmation','confirmationController');


Route::get('/', ['uses' => 'landingpageController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('agenda','AgendaController');
Route::resource('agendalist','AgendalistController');
Route::resource('speakers','speakersController');
Route::resource('sponsors','sponsorsController');
Route::resource('slide','slideController');
Route::resource('agendatwo','AgendatwoCOntroller');
Route::resource('welcomemessage','welcomeCOntroller');
Route::resource('introduction','introductionController');
Route::resource('listtwo','listtwoController');
Route::resource('list','ListController');
Route::resource('ticket','ticketController');
Route::resource('ticketserena','ticketserenaController');
Route::resource('close','closesController');

Route::get('import',function(){
            return view('rlf.list');
        });
Route::post('import', 'ListController@uploadCsv');

Route::get('importcsv',function(){
            return view('rlf.listtwo');
        });
Route::post('importcsv', 'ListtwoController@uploadCsv');


Route::post('subscribe',function (){
        $listId =   'ba2005b68c';
        $email  =request()->input('email');

        if(Mailchimp::check($listId,$email))
        {
            return " your email  {$email} is registered ";
        }

       Mailchimp::subscribe(

        $listId,
        $email,


        [], //merge fields

       false //confirm
       );

       return 'subscribe successfully';
   });

