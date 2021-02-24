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

/*Route::get('/', function () {
    return view('welcome');
});*/
// Frontend Route

Route::get('/', 'HomeController@index')->name('home');







//Admin Route
Route::get('admin', 'Admin\DashboardController@login')->name('admin.login');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=> 'admin'], function (){
    Route::get('dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('role', 'RoleController');
    Route::resource('category', 'CategoryController');
    Route::resource('subcategory', 'SubCategoryController');
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);


