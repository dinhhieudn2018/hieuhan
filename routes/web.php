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
    return view('layout.client.master');
});

Route::group(['prefix' => 'admin'], function(){
	// localhost/admin/...
	Route::view('/','layout.admin.master')->name('admin.index');
	Route::resource('service','ServiceController');
	Route::resource('feedback','FeedbackController');
	Route::resource('image','ImageController');
	Route::resource('customer','CustomerController');

	Route::get('destroy/{id}',"ServiceController@destroy")->name('destroy.service');
	
});