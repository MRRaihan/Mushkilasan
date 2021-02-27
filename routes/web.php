<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

// Frontend Route
Route::get('/', 'HomeController@index')->name('home');
Route::post('user/login', 'Frontend\LoginController@login')->name('user.login');

//Admin Route with Middleware
Route::get('admin', 'Admin\DashboardController@login')->name('admin.login');
Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=> 'admin'], function (){
    Route::get('dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('role', 'RoleController');
    Route::resource('category', 'CategoryController');
    Route::resource('subcategory', 'SubCategoryController');
});

//Agent Route with Middleware
Route::group( ['prefix' => 'agent', 'middleware' =>['agent', 'auth'], 'namespace'=> 'user'], function(){
    Route::get('dashboard', 'AgentController@index')->name('agent.dashboard');
});

//Normal-user Route with Middleware
Route::group( ['prefix' => 'user', 'middleware' =>['user', 'auth'], 'namespace'=> 'user'], function(){
    Route::get('dashboard', 'UserController@index')->name('user.dashboard');
});

//Corporate Route with Middleware
Route::group( ['prefix' => 'corporate', 'middleware' =>['corporate', 'auth'], 'namespace'=> 'user'], function(){
    Route::get('dashboard', 'CorporateController@index')->name('corporate.dashboard');
});

//Corporate Route with Middleware
Route::group( ['prefix' => 'serviceprovider', 'middleware' =>['serviceprovider', 'auth'], 'namespace'=> 'user'], function(){
    Route::get('dashboard', 'ServiceProviderController@index')->name('serviceprovider.dashboard');
});


