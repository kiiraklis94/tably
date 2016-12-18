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


Route::get('/', 'HomeController@index')->name('home');


Route::get('/crm', function ()  {
    return view('crm');
})->name('crm');


Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::post('/getCustomers', 'CrmController@getAllCustomers');

Route::post('/getCustomerInfo', 'CrmController@getCustomerInfo');

