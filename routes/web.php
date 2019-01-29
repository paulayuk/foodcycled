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
});
Route::get('/tickets', function () {
    return view('tickets');
});
Route::get('/pantries', function () {
    return view('pantries');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/programs', function () {
    return view('programs');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/donation', function(){
	return view('auth.donation');
});

Auth::routes();

//admin
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/all-pantries', 'DashboardController@allPantries')->name('all-pantries');
Route::get('/all-tickets', 'DashboardController@allDonatedTickets')->name('all-tickets');
Route::get('/all-users', 'DashboardController@allUsers')->name('all-users');
Route::get('/site-settings', 'DashboardController@siteSettings')->name('site-settings');
Route::get('/admin-settings','DashboardController@adminSettings')->name('admin-settings');

//user
Route::get('/redeem-tickets','DashboardController@redeemTickets')->name('redeem-tickets');
Route::get('/admin-settings','DashboardController@adminSettings')->name('admin-settings');

//donor
Route::get('/donate','DashboardController@donate')->name('donate');

//pantry
Route::get('/p-site-settings','DashboardController@pantrySiteSettings')->name('p-site-settings');
Route::get('/pantry-profile','DashboardController@pantryProfile')->name('pantry-profile');

//donation
Route::post('/donatetickets', 'DonationController@processDonation')->name('donatetickets');