<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', function () {
    return view('index');
});


//User Controller
Route::get('index', 'UserController@index')->name('index');
Route::get('detail', 'UserController@detail')->name('detail');
Route::get('contact', 'UserController@contact')->name('contact');
Route::get('booking', 'UserController@booking')->name('booking');




Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout')->name('home');
Route::post('admin_login', 'Auth\LoginController@login')->name('admin_login');





//Admin
Route::get('admin','AdminController@admin')->name('admin');
Route::get('create_trip_view','TripController@create_trip_view')->name('create_trip_view');
Route::get('login','AdminController@login')->name('login');

//Admin (Trip Controller)
Route::get('admin_index','TripController@index')->name('admin_index');
//create_trip
Route::post('create_trip','TripController@create_trip')->name('create_trip');
//show_trip
Route::get('show_trip','TripController@show_trip')->name('show_trip');
//delete_trip
Route::get('delete_trip/{id}','TripController@delete_trip')->name('delete_trip');
//edit_trip
Route::get('edit_trip/{id}','TripController@edit_trip')->name('edit_trip');
//update_trip
Route::post('update_trip','TripController@update_trip')->name('update_trip');

Route::post('search_trip','TripController@search_trip')->name('search_trip');


//Admin (Ticket Controller)
Route::get('admin_ticket','TicketController@admin_ticket')->name('admin_ticket');
//create ticket
Route::post('create_ticket','TicketController@create_ticket')->name('create_ticket');
//edit ticket
Route::get('edit_ticket/{id}','TicketController@edit_ticket')->name('edit_ticket');
//update ticket 
Route::post('update_ticket','TicketController@update_ticket')->name('update_ticket');
//delete ticket
Route::get('delete_ticket/{id}','TicketController@delete_ticket')->name('delete_ticket');

Route::get('admin_booking','TicketController@admin_booking')->name('admin_booking');



