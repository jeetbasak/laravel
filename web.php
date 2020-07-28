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
    return view('welcome');
});



Route::get('/form',"Main@ins");
Route::post('/submit',"Main@submit");

Route::get('/show',"Main@show");

Route::get('/delete/{id}',"Main@delete");

Route::post('/search',"Main@search");

Route::get('/loginform',"Main@lgfrm");
Route::post('/lgck',"Main@lgck");

Route::get('/logout',"Main@logout");