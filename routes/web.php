<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AdminController;
//use App\Http\Controllers\CarrierController;
use App\Http\Controllers\Carrier\CarrierController;
use App\Http\Controllers\Carrier\FronttruckController;
use App\Http\Controllers\UserController;
use App\Models\Truck;

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

//Front page route
Route::get('/', [App\Http\Controllers\Front\FrontController::class, 'index'])->name('home');



//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('truck-view/{id?}', [App\Http\Controllers\Carrier\FronttruckController::class, 'truckView'])->name('tuck.view');
Route::get('truck', [App\Http\Controllers\Carrier\FronttruckController::class, 'truckList'])->name('tuck.list');


 Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function(){
	Route::match(['get','post'],'register', [AdminController::class, 'register'])->name('admin.register');
	Route::match(['get','post'],'login', [AdminController::class, 'login'])->name('admin.login');
	Route::match(['get','post'],'password-reset', [AdminController::class, 'passwordReset'])->name('admin.password.reset');
	Route::match(['get','post'],'password-reset-link', [AdminController::class, 'passwordResetLink'])->name('admin.password.link');
	Route::match(['get','post'],'confirm/{code}', [AdminController::class, 'confirmEmail'])->name('admin.confirm.email');
		
	
	Route::group(['middleware' => 'Admin'], function(){
		Route::Match(['get','post'],'dashboard', 'AdminController@admindashboard');
		Route::Match(['get','post'],'logout', 'AdminController@adminLogout')->name('admin.logout');
		Route::Match(['get','post'],'profile', 'AdminController@adminProfile')->name('admin.profile');
		Route::Match(['get','post'],'password-update', 'AdminController@adminPassword')->name('admin.password');
		Route::Match(['get','post'],'user-list', 'AdminController@usersList')->name('user.list');
		Route::Match(['get','post'],'carrier-update/{id?}', 'AdminController@carrierUpdate')->name('carrier.update');
		Route::Match(['get','post'],'carrier-delete/{id?}', 'AdminController@carrierDelete')->name('carrier.delete');
		Route::Match(['get','post'],'user-update/{id?}', 'AdminController@userUpdate')->name('user.update');
		Route::Match(['get','post'],'user-delete/{id?}', 'AdminController@userDelete')->name('user.delete');
	});
	
});


 Route::group(['namespace' => 'App\Http\Controllers\Carrier', 'prefix' => 'carrier'], function(){
	Route::match(['get','post'],'register', [CarrierController::class, 'register'])->name('carrier.register');
	Route::match(['get','post'],'login', [CarrierController::class, 'login'])->name('carrier.login');
	Route::match(['get','post'],'carrier-password', [CarrierController::class, 'passwordForget'])->name('carrier.password');
	
	Route::group(['middleware' => 'Carrier'], function(){
		Route::Match(['get','post'],'dashboard', 'CarrierController@carrierdashboard');
		Route::Match(['get','post'],'logout', 'CarrierController@carrierLogout')->name('carrier.logout');
		Route::get('truck', 'CarrierController@truck')->name('carrier.tuck');
		Route::post('add-truck', 'CarrierController@addTruck')->name('add.tuck');
		Route::get('truck-list', 'CarrierController@truckList')->name('tuck.list');
		Route::Match(['get','post'],'truck-edit/{id?}', 'CarrierController@truckEdit')->name('tuck.edit');
		Route::get('truck-delete/{id}', 'CarrierController@truckDelete')->name('tuck.delete');
		Route::match(['get','post'],'profile-update', 'CarrierController@profileUpdate')->name('carrier.profile');
	});
	
});

 Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'user'], function(){
	Route::match(['get','post'],'register', [UserController::class, 'register'])->name('user.register');
	Route::match(['get','post'],'login', [UserController::class, 'login'])->name('login');
	Route::match(['get','post'],'user-password', [UserController::class, 'passwordForget'])->name('user.password');
	
	Route::group(['middleware' => 'auth'], function(){
		Route::Match(['get','post'],'dashboard', 'UserController@userdashboard');
		Route::Match(['get','post'],'logout', 'UserController@userLogout')->name('user.logout');
		Route::match(['get','post'],'profile-update', 'UserController@profileUpdate')->name('user.profile');
	});
	
});