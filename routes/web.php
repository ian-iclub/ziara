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
Route::get('/about-us', function () {
    return view('about_us');
});

///// --- Book a XXX --- /////
Route::get('/book-a-flight', function () {
    return view('book-a-flight');
});
Route::get('/book-a-hotel', function () {
    return view('book-a-hotel');
});
Route::get('/book-a-package', function () {
    return view('book-a-package');
});
///// --- End Book a XXX --- /////

Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/our-team', function () {
    return view('our-team');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});



///// --- Post a Booking --- /////
Route::get('/book-a-flight', 'MailController@bookFlight');
Route::get('/book-a-hotel',  'MailController@bookHotel');
Route::get('/book-a-package', 'MailController@bookPackage');
///// --- End Post a Booking --- /////