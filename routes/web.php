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
    return view('welcome');
});

Route::prefix('/admin')->group(function(){
    Route::get('admin','Admin\AdminController@admin')->middleware('login');
    Route::get('add','Admin\UserController@add')->middleware('login');
    Route::any('addHandel','Admin\UserController@addHandel')->middleware('login');
    Route::any('list','Admin\UserController@list')->middleware('login');
    Route::any('del/{id}','Admin\UserController@del')->middleware('login');
    Route::any('edit/{id}','Admin\UserController@edit')->middleware('login');
    Route::any('update/{id}','Admin\UserController@update')->middleware('login');
    Route::any('loginAdd','Admin\UserController@loginAdd');
    Route::any('loginHandel','Admin\UserController@loginHandel');
    Route::any('loginSave','Admin\UserController@loginSave');
    Route::any('saveAdd','Admin\UserController@saveAdd');
  });

Route::get('/','Index\indexController@index');
Route::any('/indexSave','Index\indexController@indexSave');
Route::any('/price','Index\indexController@price');
Route::any('/cart','Index\indexController@cart');
Route::any('/cartList','Index\indexController@cartList');
Route::any('/cartSave','Index\indexController@cartSave');
Route::any('/del/{c_id}','Index\indexController@del');
Route::any('/delete/{d_id}','Index\indexController@delete');
Route::any('/pay','Index\AliPayController@pay');

Route::any('/cartAdd','Index\indexController@cartAdd');
Route::any('/login','Index\loginController@login');
Route::any('/loginSave','Index\loginController@loginSave');
Route::any('/register','Index\registerController@register');
Route::any('/registerSave','Index\registerController@registerSave');

// 同步地址
Route::get('return_url','Index\AliPayController@aliReturn');

//异步地址
Route::post('notify_url','Index\AliPayController@aliNotify');