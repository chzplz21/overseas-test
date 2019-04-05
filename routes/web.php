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


//Front Page
Route::get('/', 'HotelController@hotels')->name('home');;
Route::get('/getRooms', 'HotelController@rooms');
Route::get('/getRoomDetails', 'HotelController@roomDetails');
Route::get('/logClick', 'HotelController@logClick');
Route::post('/selectRoom', 'BookRoomController@store');

