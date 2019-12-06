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
use App\ContactForm;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});
Route::get('/welcome', function () {
    return view('welcome');
});

/**
 * Contact Form Routes
 */
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact','ContactController@index');
Route::post('/contact','ContactController@store');
Route::get('/contact','ContactController@create');

/**
 * Delete Task
 */


Route::get('/home', function () {
    return view('home');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/login', function () {
    return view('login');
});
