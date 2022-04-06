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
<<<<<<< HEAD
Route::get('/menu','App\Http\Controllers\HomeController@getAll');
Route::get('/menu/{idcatergory}','App\Http\Controllers\HomeController@getMenu');
//login
Route::post('login', 'App\Http\Controllers\HomeController@postLogin');

Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('Admin');
//thêm - sửa - xoá admin
//thêm http://localhost:8000/admin/food/create/
Route::get('/admin/food/create', 'App\Http\Controllers\Admin\AdminFoodsController@create');
Route::post('/admin/food/store', 'App\Http\Controllers\Admin\AdminFoodsController@store');
//Index http://localhost:8000/admin/food/
Route::get('/admin/food', 'App\Http\Controllers\Admin\AdminFoodsController@index');

//Edit http://localhost:8000/admin/food/
Route::get('/admin/news/edit/{FoodCode}', 'App\Http\Controllers\Admin\AdminFoodsController@edit');
Route::PATCH('/admin/news/edit/{FoodCode}', 'App\Http\Controllers\Admin\AdminFoodsController>@update');
//Detail
Route::get('/admin/news/{FoodCode}', 'App\Http\Controllers\Admin\AdminFoodsController@show');

Route::DELETE('/admin/news/delete{FoodCode', 'App\Http\Controllers\Admin\AdminFoodsController@destroy');
//register
Route::post('register', 'App\Http\Controllers\HomeController@postRegister');
=======

//thêm - sửa - xoá admin
Route::get('/admin/foodcatergory','App\Http\Controllers\Admin\FCController@index');
Route::get('/admin/food','App\Http\Controllers\Admin\FoodController@index');
Route::get('/admin/drink','App\Http\Controllers\Admin\DrinkController@index');
Route::get('/admin/drinkcatergory','App\Http\Controllers\Admin\DCController@index');
Route::get('/admin/staff','App\Http\Controllers\Admin\StaffController@index');
Route::get('/admin/user','App\Http\Controllers\Admin\UserController@index');

>>>>>>> 5175b9336a011ec76b7df2499d1004326d558502
