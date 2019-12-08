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


Route::get('/home', function () {
    return view('home');
});
Route::get('/','HomeController@index');
Route::get('/home','HomeController@index');

/**
 * fragrance routing
 */
Route::get('/fragrance', function () {
    return view('fragrance');
});
Route::get('/fragrance','FragranceController@index');

/**
 * makeup routing
 */
Route::get('/make-up', function () {
    return view('make-up');
});
Route::get('/make-up','MakeUpController@index');


/**
 * skincare routing
 */
Route::get('/skin-care', function () {
    return view('make-up');
});
Route::get('/skin-care','SkinCareController@index');

/**
 * product routing
 */
Route::get('/product/{id}','ProductController@show');

/**
 * search routing
 */
Route::any('/search','SearchController@index');


/**
 * cart routing
 */

Route::post('/cart','CartController@index');
Route::get('/cart','CartController@show');
Route::delete('/cart','CartController@delete');





Route::get('/login', function () {
    return view('login');
});
