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

Route::get('/', function () {
    return view('top_page');
});

Route::get('/aboutUs', 'RestaurantController@show')->name('restaurant.welcome');
Route::get('/menu', 'RestaurantController@menu')->name('restaurant.menu');
Route::get('/booking', 'RestaurantController@booking')->name('restaurant.booking');
Route::get('/enquiry', 'RestaurantController@enquiry')->name('restaurant.enquiry');


