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

//サイトの画面遷移
Route::get('/aboutUs', 'RestaurantController@show')->name('restaurant.about_us');
Route::get('/menu', 'RestaurantController@menu')->name('restaurant.menu');
Route::get('/booking', 'RestaurantController@booking')->name('restaurant.booking');
Route::get('/contact', 'RestaurantController@contact')->name('restaurant.contact');

//カレンダーページの遷移
Route::get('/booking', 'CalendarController@index')->name('restaurant.booking');

//URL直だたきの場合の遷移
Route::get('/bookingThanks', 'BookingInputController@thanks');

//入力内容を保持したまま遷移
Route::post('/bookingInput', 'BookingInputController@back')->name('restaurant.booking_input');
Route::post('/bookingConfirm', 'BookingInputController@post')->name('restaurant.booking_confirm');
Route::post('/bookingThanks', 'BookingInputController@send')->name('restaurant.booking_thanks');

//直だたきの場合、エラーページを表示
Route::get('/bookingConfirm', 'BookingInputController@error');

//テーブル残数をカウント
Route::get('/bookingInput', 'BookingInputController@vacancy');
