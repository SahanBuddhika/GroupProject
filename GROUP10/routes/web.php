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
Route::get('/clientprofile', function () {
    return view('clientprofile.clientprofile');
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


//Working properly route get according to client id
Route::get('/client/{id}/{pid}', 'PostToPets@create');
Route::get('/client/{id}/{pid}/periodic', 'PostToPets@create1');


//this is add stock route
Route::get('/insert', 'Controller@insert');


//This is test route
Route::get('/test', function () {
    return view('test');
});


Route::get('/home', 'HomeController@index')->name('home');


//route  working properly 
Route::get('/clients', 'PostToClientList@index');


//This Route Will be Provided Pet Routes
Route::resource('pet','PostController');

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/in', function () {
    return view('pet.in');
});

Route::get('/create', 'PostToPets@create');

Route::post('/create', 'PostToPets@store');


Route::get('/create1', 'PostToPets1@create');

Route::post('/create1', 'PostToPets1@store');

Route::get('/test55', function () {
    return view('test55');
});

