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
});

Route::get('/interior', 'InteriorPagesController@interior');

Route::get('/laundry', 'laundryPagesController@laundry');

Route::get('/general', 'generalPagesController@general');

Route::get('/contact', 'contactpagesController@contact');

Route::get('/about', 'AboutPagesController@about');



