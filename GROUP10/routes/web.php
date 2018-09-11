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
Route::get('/pagestructure', function () {
    return view('homepage.pagestructure');
});
Route::get('/clients', function () {
    return view('clients.clients');
});
Route::get('/analyse', function () {
    return view('analyse.clientbase');
});
Route::get('/analyse', function () {
    return view('analyse.diseases');
});

Route::get('/analyse', function () {
    return view('analyse.income');
});