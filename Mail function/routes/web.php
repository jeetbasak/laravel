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
Route::get('/jj', "Test@abc");
Route::post('/1stpage', "Test@xyz");



Route::post('/send',"Test@send");

Route::get('/email',"Test@email");

// resource route

Route::resource('song',"Songcontroller");