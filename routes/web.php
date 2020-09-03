<?php

use Illuminate\Support\Facades\Route;

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
// HOME PAGE 
Route::get('/', function () {
    return view('welcome');
});
// HOME SERVICES ROUTES 
Route::get('homeservices', function () {
    return view('frontend.home.index');
});

Route::get('officeservices', function () {
    return view('frontend.office.index');
});

Route::get('contact', function () {
    return view('contact');
});
Route::get('about', function () {
    return view('aboutus');
});

Route::get('/admin', function () {
    return view('admin/dashbord');
});
Route::get('careers', function () {
    return view('careers');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// officeservices
Route::get('/manage_it_support', 'officecController@manageItSupport')->name('home');
Route::get('/office_setup', 'officecController@officeSetup')->name('officeSetup');
Route::get('/network_solutions', 'officecController@networkSolutions')->name('home');
Route::get('/it_management_services', 'officecController@itManagementServices')->name('home');
Route::get('/cloud_computing_servives', 'officecController@cloudComputingServives')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
