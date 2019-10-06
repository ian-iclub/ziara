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

Route::get('/', "OfferController@frontendOffers")->name('home');

// Route::get('/', function () {
//     return view('index');
// })->name('home');
Route::get('/about-us', function () {
    return view('about-us');
})->name('about');

///// --- Book a XXX --- /////
// Route::get('/book-a-flight', function () {
//     return view('book');
// })->name('flight');
// Route::get('/book-a-hotel', function () {
//     return view('book');
// })->name('hotel');
// Route::get('/book-a-package', function () {
//     return view('book');
// })->name('package');
///// --- End Book a XXX --- /////

// Booking page centralised route
Route::get('/book', function () {
    return view('book');
})->name('book');
// Booking page centralised route

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

// Testing URL
// Route::get('/users', function () {
//     return view('admin/users/index');
// })->name('users');


Route::post('/contact-us', 'MailController@contactUs');

///// --- Post a Booking --- /////
Route::post('/book-a-flight', 'MailController@bookFlight');
Route::post('/book-a-hotel',  'MailController@bookHotel');
Route::post('/book-a-package', 'MailController@bookPackage');
///// --- End Post a Booking --- /////

Auth::routes();



//Route::get('/admin/places', 'AdminController@places')->name('places');
//Route::get('/admin/offers', 'AdminController@offers')->name('offers');

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin');

    Route::resource('places', 'PlaceController');
    Route::resource('offers', 'OfferController');

    Route::get('sliders', 'AdminController@sliderIndex')->name('sliders.index');
    Route::post('sliders', 'AdminController@sliderStore')->name('sliders.store');
    Route::get('sliders/{slider}/edit', 'AdminController@sliderEdit')->name('sliders.edit');
    Route::put('sliders/{slider}', 'AdminController@sliderUpdate')->name('sliders.update');
    Route::delete('sliders/{slider}', 'AdminController@sliderDestroy')->name('sliders.destroy');

    //  Users
    Route::get('users', 'AdminController@userIndex')->name('users.index');
    Route::post('users', 'AdminController@userStore')->name('users.store');
    Route::get('users/{user}/edit', 'AdminController@userEdit')->name('users.edit');
    Route::put('users/{user}', 'AdminController@userUpdate')->name('users.update');
    Route::delete('users/{user}', 'AdminController@userDestroy')->name('users.destroy');

    Route::post('offers/activate', 'OfferController@activate')->name('offers.activate');

    Route::post('offers_display/update', "SettingsController@update")->name('offers_display.edit');
});

