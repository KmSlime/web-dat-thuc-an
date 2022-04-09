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
//create food
Route::get('/admin/createfood','App\Http\Controllers\HomeController@getCreateFood');
Route::get('/admin/postCreatefood', 'App\Http\Controllers\HomeController@postCreatefood');
//thêm http://localhost:8000/admin/food/create/
Route::post('register', 'App\Http\Controllers\HomeController@postRegister');
Route::get('/admin','App\Http\Controllers\HomeController@getAdmin');
