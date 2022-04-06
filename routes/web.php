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


Route::get('/home','App\Http\Controllers\HomeController@getHome');
Route::post('/home','App\Http\Controllers\HomeController@postLogin');

//thêm - sửa - xoá admin
Route::get('/admin/foodcatergory','App\Http\Controllers\Admin\FCController@index');
Route::get('/admin/food','App\Http\Controllers\Admin\FoodController@index');
Route::get('/admin/drink','App\Http\Controllers\Admin\DrinkController@index');
Route::get('/admin/drinkcatergory','App\Http\Controllers\Admin\DCController@index');
Route::get('/admin/staff','App\Http\Controllers\Admin\StaffController@index');
Route::get('/admin/user','App\Http\Controllers\Admin\UserController@index');

