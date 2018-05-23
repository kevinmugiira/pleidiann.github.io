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
    return view('index');
});


Route::resource ('master','MasterController');
Route::resource ('index','IndexController');
Route::resource ('about','AboutController');
Route::resource ('contact','ContactController');
Route::resource ('properties','PropertiesController');
Route::resource ('athi','AthiController');
Route::resource ('athioasis','AthioasisController');
Route::resource ('bypassmugetho','BypassmugethoController');
Route::resource ('gwakairu','gwakairuController');
Route::resource ('judah','JudahController');
Route::resource ('kwamurage','KwamurageController');
Route::resource ('murerabypass','MurerabypassController');
Route::resource ('mureramagomano','MureramagomanoController');
Route::resource ('mwireri','MwireriController');
Route::resource ('ndarasha','NdarashaController');
Route::resource ('ndurumo','NdurumoController');
Route::resource ('athi_bookings','Athi_bookingsController');
Route::resource ('athioasis_bookings','Athioasis_bookingsController');
Route::resource ('bypassmugetho_bookings','Bypassmugetho_bookingsController');
Route::resource ('gwakairu_bookings','Gwakairu_bookingsController');
Route::resource ('judah_bookings','Judah_bookingsController');
Route::resource ('kwamurage_bookings','Kwamurage_bookingsController');
Route::resource ('murerabypass_bookings','Murerabypass_bookingsController');
Route::resource ('mureramagomano_bookings','Mureramagomano_bookingsController');
Route::resource ('mwireri_bookings','Mwireri_bookingsController');
Route::resource ('ndarasha_bookings','Ndarasha_bookingsController');
Route::resource ('ndurumo_bookings','Ndurumo_bookingsController');
Route::resource ('main','MainController');
Route::resource ('athibook','AthibookController');
Route::resource ('athioasisbook','AthioasisbookController');
Route::resource ('bypassmugethobook','BypassmugethobookController');
Route::resource ('gwakairubook','GwakairubookController');
Route::resource ('judahbook','JudahbookController');
Route::resource ('kwamuragebook','KwamuragebookController');
Route::resource ('murerabypassbook','MurerabypassbookController');
Route::resource ('mureramagomanobook','MureramagomanobookController');
Route::resource ('mwireribook','MwireribookController');
Route::resource ('ndarashabook','NdarashabookController');
Route::resource ('ndurumobook','NdurumobookController');
Route::resource ('payment','PaymentController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/properties', 'PropertiesController@index')->name('properties');
Route::resource ('athi_form','Athi_formController');
