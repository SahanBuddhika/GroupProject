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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('auth.login');
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
 Route::get('/edit', function () {
     return view('petprofile.create');
 });


//this link is being worked properly
Route::get('/petprofile/{id}', 'PostToPets@show');


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
Route::get('/addstock', function () {
    return view('addstock.addstock');
});
Route::get('/updatestock', function () {
    return view('updatestock.updatestock');
});
Route::get('/viewstock', function () {
    return view('viewstock.viewstock');
});

Auth::routes();

//Working properly route get according to client id
Route::get('/client/{id}', 'PostToClientList@show');




//This is test route
Route::get('/show', function () {
    return view('pet.show');
});


Route::get('/home', 'HomeController@index')->name('home');


//route  working properly 
Route::get('/clients', 'PostToClientList@index');


//This Route Will be Provide Pet Routes
Route::resource('pet','PostController');

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/in', function () {
    return view('pet.in');
});