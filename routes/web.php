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

Route::get('/', 'IndexController@index');

Route::get('/user/edit/{user_id}', 'IndexController@editUser');
Route::post('/user/edit/{user_id}', 'IndexController@updateUser');
Route::get('/user/delete/{user_id}', 'IndexController@deleteUser');


Route::post('/software/store', 'IndexController@storeSoftware')->name('uploadSoftware');
Route::get('/software/download/{software_id}', 'IndexController@downloadSoftware')->name('downloadSoftware')->middleware('auth');

Route::get('/software/delete/{software_id}', 'IndexController@deleteSoftware');

Auth::routes();