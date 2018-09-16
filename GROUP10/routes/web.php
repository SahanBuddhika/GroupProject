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
Route::get('/', function () {
    return view('homepage.Loginregister');
});
Route::get('/homepage', function () {
    return view('homepage.pagestructure');
});
Route::get('/login', function () {
    return view('login.login');
});
Route::get('/register', function () {
    return view('register.register');
});
Route::get('/clients', function () {
    return view('clients.clients');
});

Route::get('/clientprofile', function () {
    return view('clientprofile.clientprofile');
});

Route::get('/petprofile', function () {
    return view('petprofile.petprofile');
});
Route::get('/analyse_clientbase', function () {
    return view('analyse_clientbase.clientbase');
});
Route::get('/analyse_diseases', function () {
    return view('analyse_diseases.diseases');
});

Route::get('/analyse_income', function () {
    return view('analyse_income.income');
});
Route::get('/appoinments', function () {
    return view('appoinments.appoinments');
});
Route::get('/stock', function () {
    return view('stock.stock');
});
Route::get('/dewarming', function () {
    return view('dewarming.dewarming');
});
Route::get('/other', function () {
    return view('other.other');
});
Route::get('/periodic', function () {
    return view('periodic.periodic');
});
Route::get('/treatments', function () {
    return view('treatments.treatments');
});
Route::get('/auth', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
