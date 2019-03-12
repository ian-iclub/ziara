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
    return view('index');
})->name('home');
Route::get('/about-us', function () {
    return view('about-us');
})->name('about');

///// --- Book a XXX --- /////
Route::get('/book-a-flight', function () {
    return view('book');
})->name('flight');
Route::get('/book-a-hotel', function () {
    return view('book');
})->name('hotel');
Route::get('/book-a-package', function () {
    return view('book');
})->name('package');
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
})->name('contact');



///// --- Post a Booking --- /////
Route::post('/book-a-flight', 'MailController@bookFlight');
Route::post('/book-a-hotel',  'MailController@bookHotel');
Route::post('/book-a-package', 'MailController@bookPackage');
///// --- End Post a Booking --- /////