<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();

Route::get('/', 'Home\IndexController@index');
Route::get('/index','Home\IndexController@index');
Route::get('/cplist','Home\IndexController@cplist');
Route::get('/cate','Home\IndexController@cate');

Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){
	Route::get('/', 'Admin\IndexController@index');
	
	Route::resource('cate', 'Admin\CateController');
	Route::get('cate/create_child/{id}', 'Admin\CateController@create_child');

	Route::resource('coupon', 'Admin\CouponController');

	Route::resource('busn', 'Admin\BusnController');
});