<?php
use Illuminate\Support\Facades\DB;

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
	$tickets = DB::table('donatedtickets')->get();
    return view('index')->with('tickets', $tickets);
});

Route::get('/tickets', function () {
	$tickets = DB::table('donatedtickets')->get();
    return view('tickets')->with('tickets', $tickets);
});


Route::get('/ticket/{id}', function ($id) {
	$ticket = DB::table('donatedtickets')->where('id', $id)->first();
    return view('ticket')->with('ticket', $ticket);
});


Route::get('/pantries', function () {
	$pantries = DB::table('users')->where('category', 'pantry')->get();
    return view('pantries')->with('pantries', $pantries);
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

Route::get('/home', function(){ 
    return Redirect::to('/dashboard'); 
});

Auth::routes();

//admin
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/all-pantries', 'DashboardController@allPantries')->name('all-pantries');

Route::get('/all-users', 'DashboardController@allUsers')->name('all-users');
Route::get('/site-settings', 'DashboardController@siteSettings')->name('site-settings');
Route::get('/admin-settings','DashboardController@adminSettings')->name('admin-settings');

//user
Route::get('/redeem-tickets','DashboardController@redeemTickets')->name('redeem-tickets');
Route::get('/admin-settings','DashboardController@adminSettings')->name('admin-settings');


//pantry
Route::get('/p-site-settings','DashboardController@pantrySiteSettings')->name('p-site-settings');
Route::get('/pantry-profile','DashboardController@pantryProfile')->name('pantry-profile');

//donation
Route::post('/donatetickets', 'DonationController@processDonation')->name('donatetickets');
Route::get('/donate','DonationController@getAllDonatedTickets')->name('donate');
Route::get('/all-tickets', 'DonationController@allDonatedTickets')->name('all-tickets');
Route::post('/use-ticket', 'DonationController@useTicket')->name('useticket');

Route::domain('{pantry_name}.localhost')->group(function () {
   Route::get('/about', function () {
    return view('about');
});
});