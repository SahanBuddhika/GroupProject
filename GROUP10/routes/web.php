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
