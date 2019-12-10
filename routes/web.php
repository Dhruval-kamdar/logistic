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

Route::match(['get', 'post'], '/', ['as' => 'home', 'uses' => 'frontend\HomeController@home']);
Route::match(['get', 'post'], 'AboutUs', ['as' => 'AboutUs', 'uses' => 'frontend\AboutUsController@aboutus']);
Route::match(['get', 'post'], 'ContactUs', ['as' => 'ContactUs', 'uses' => 'frontend\ContactUsController@ContactUs']);