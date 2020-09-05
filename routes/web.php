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

// view Routes 

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


Route::get('careers', function () {
    return view('careers');
});
/* =================  fronted routes  ================= */
// officeservices
Route::get('/manage_it_support', 'OfficecController@manageItSupport')->name('home');
Route::get('/office_setup', 'OfficecController@officeSetup')->name('officeSetup');
Route::get('/network_solutions', 'OfficecController@networkSolutions')->name('home');
Route::get('/it_management_services', 'OfficecController@itManagementServices')->name('home');
Route::get('/cloud_computing_servives', 'OfficecController@cloudComputingServives')->name('home');
Route::get('/news', 'OfficecController@viewNews');

/* =================  admin routes  ================= */
Route::match(['GET','POST'],'/check-email','UsersController@checkEmail');
Route::match(['get','post'],'/admin', 'AdminController@login'); 

Route::group(['middleware' => ['auth']],function(){
    Route::get('/admin/dashboard', 'AdminController@dashboard');
    Route::get('/admin/settings', 'AdminController@settings');
    Route::get('admin/check-pwd','AdminController@chkPassword');
    Route::post('admin/update-pwd','AdminController@updatAdminPwd');

    Route::match(['get','post'],'/admin/add-news', 'NewsController@addNews');
    Route::get('/admin/view-news', 'NewsController@viewNews');
    Route::match(['get','post'],'/admin/edit-news/{id}','NewsController@editNews');
    Route::get('/admin/delete-news-image/{id}','NewsController@deleteNewsImage');


    Route::match(['get','post'],'/admin/delete-news/{id}','NewsController@deleteNews');
    Route::match(['get','post'],'/admin/add-product', 'ProductsController@addProduct');
    Route::match(['get','post'],'/admin/edit-product/{id}', 'ProductsController@editProduct');
    Route::get('/admin/view-products','ProductsController@viewProducts');
    Route::get('/admin/delete-product/{id}', 'ProductsController@deleteProduct');
    Route::get('/admin/delete-alt-image/{id}','ProductsController@deleteAltImage');
    Route::match(['get','post'],'/admin/add-attributes/{id}', 'ProductsController@addAttributes');
    Route::match(['get','post'],'/admin/edit-attributes/{id}', 'ProductsController@editAttributes');
    Route::match(['get','post'],'/admin/add-images/{id}', 'ProductsController@addImages');
    Route::get('/admin/delete-attribute/{id}', 'ProductsController@deleteAttribute');
    Route::match(['get','post'],'/admin/add-coupon','CouponsController@addCoupon');
    Route::get('/admin/view-coupons', 'CouponsController@viewCoupons');
    Route::match(['get','post'],'/admin/edit-coupon/{id}','CouponsController@editCoupon');
    Route::get('/admin/delete-coupon/{id}','CouponsController@deleteCoupon');
    Route::get('/admin/view-orders', 'ProductsController@viewOrders');
    Route::get('/admin/view-order/{id}', 'ProductsController@viewOrderDetails');
    Route::post('/admin/update-order-status','ProductsController@updateOrderStatus');
});
Route::get('/logout', 'AdminController@logout');

// Auth::routes();