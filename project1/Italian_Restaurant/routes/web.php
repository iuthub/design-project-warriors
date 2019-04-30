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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Routing Italian Restaurant/index.blade.php page
Route::get('/',"PagesController@index");
//Routing Menu/menu.blade.php page
Route::get('/menu', "PagesController@menu");
//Routing Book a table/booking.blade.php 
Route::get('/booking', "PagesController@booking");
//Routing Contact us page/contact.blade.php
Route::get('/contact', "PagesController@contact");

