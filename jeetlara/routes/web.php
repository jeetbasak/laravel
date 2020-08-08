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
Route::get('/s', function () {
    return view('s');
});

Route::get('/', function () {
    return view('welcome');
});



Route::get('/form',"Main@ins");
Route::post('/submit',"Main@submit");

Route::get('/show',"Main@show");
Route::get('/show/{page}',"Main@show");

Route::get('/delete/{id}',"Main@delete");

Route::post('/search',"Main@search");

Route::get('/loginform',"Main@lgfrm");
Route::post('/lgck',"Main@lgck");

Route::get('/logout',"Main@logout");
Route::get('/imgform',"Main@imgform");
Route::post('/imgins',"Main@imgins");



Route::get('/showimg',"Main@showimg");


Route::get('/details/{id}',"Main@details");
Route::post('/like',"Main@like");
Route::post('/removelike',"Main@removelike");
Route::post('/bgins',"Main@bgins");
Route::get('/bgshow',"Main@bgshow");



// mail function

Route::get('/send',"Mailcontroller@send");
//Route::get('/sendmail',"Mailcontroller@sendmail");

//Route::post('/se',"Main@s");