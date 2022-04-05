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
Route::get('/logout','App\Http\Controllers\HomeController@getLogout');
Route::get('/menu/{idcatergory}','App\Http\Controllers\HomeController@getMenu');
//login
Route::post('login', 'App\Http\Controllers\HomeController@postLogin');

Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('Admin');
//thêm - sửa - xoá admin
//thêm http://localhost:8000/admin/adminfood/create/
Route::get('/admin/adminFood/create', 'App\Http\Controllers\Admin\FoodController@create');
Route::post('/admin/adminFood/store', 'App\Http\Controllers\Admin\FoodController@store');
//Index http://localhost:8000/admin/adminFood/
Route::get('/admin/adminFood/index', 'App\Http\Controllers\Admin\FoodController@index');

//Edit http://localhost:8000/admin/food/
Route::get('/admin/news/edit/{FoodCode}', 'App\Http\Controllers\Admin\FoodController@edit');
Route::PATCH('/admin/news/edit/{FoodCode}', 'App\Http\Controllers\Admin\FoodController>@update');
//Detail
Route::get('/admin/news/{FoodCode}', 'App\Http\Controllers\Admin\FoodController@show');

Route::DELETE('/admin/news/delete{FoodCode', 'App\Http\Controllers\Admin\FoodController@destroy');
//register
Route::post('register', 'App\Http\Controllers\HomeController@postRegister');
