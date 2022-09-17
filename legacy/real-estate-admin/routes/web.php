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
    return view('auth.login');
  });  

Route::get('/users', 'UserController@index');
Route::get('/user-edit/{userid}', 'UserController@edit')->name('user-edit');
Route::get('/companies', 'CompanyController@index');
Route::get('/company-edit/{companyid}', 'CompanyController@edit')->name('company-edit');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
