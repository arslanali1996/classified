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

Route::get('/',function(){ return view('welcome'); });

Route::get('/welcome/{xyz?}','myController@welcome');
Route::any('/login','myController@login');
Route::any('/forgot-password','myController@forgotPassword');
Route::get('/a', function(){ return view('welcome'); });
Route::get('/home', 'HomeController@index')->name('home');
Route::any('/get-data', function(){ return 'yes'; });
Route::any('/test/factory', 'testController@factory');
Route::any('/test/db', 'testController@testDb');
Route::any('/test/addUser', 'testController@addDb');
Route::any('/test/getUser', 'testController@getDb');

//app final
Route::any('/','myController@main');
Route::get('/user', 'userController@loadDashboard');
Route::get('/ad-form', 'userController@loadAdForm');
Route::get('/ad', 'userController@submitAd');

Route::get('/admin', 'adminController@loadDashboard');

Route::get('/category', 'adminController@loadCategory');
Route::get('/addCategory', 'adminController@loadCategoryAddForm');
Route::get('/addSubCategory', 'adminController@loadSubCategoryAddForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
