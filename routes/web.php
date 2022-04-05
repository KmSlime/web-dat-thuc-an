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
