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
})->name('/');

Route::group(['prefix' => 'admin'], function(){
	// localhost/admin/...
	Route::view('/','layout.admin.index')->name('admin.index');
	Route::resource('service','ServiceController');
	Route::resource('feedback','FeedbackController');
	Route::resource('image','ImageController');
	Route::resource('customer','CustomerController');

	Route::get('svdestroy/{id}',"ServiceController@destroy")->name('destroy.service');
	Route::get('fbdestroy/{id}',"FeedbackController@destroy")->name('feedback.destroy');
	Route::get('imgdestroy/{id}',"ImageController@destroy")->name('img.destroy');
	Route::get('cusdestroy/{id}',"CustomerController@destroy")->name('cus.destroy');
});