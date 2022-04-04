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

Route::get('/','HomeController@index');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('Home');
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('Admin');

//Route Thêm- Sửa- Xoá
Route::get('/admin/food/create', 'Admin\AdminNewsFoodController@create');
Route::post('/admin/food/store', 'Admin\AdminNewsFoodController@store');
Route::get('/admin/food', 'Admin\AdminNewsFoodController@index');
Route::get('/admin/food/edit/{FoodCode}', 'Admin\AdminNewsFoodController@edit');
Route::PATCH('/admin/food/update/{FoodCode}', 'Admin\AdminNewsFoodController@update');Route::DELETE('/admin/food/delete/{FoodCode}', 'Admin\Admin\AdminNewsFoodController@destroy');

//Route Xác thực-  Validate
Route::get('/admin/food/create', 'Admin\PostController@showform');
Route::post('/admin/food/create', 'Admin\PostController@validationform');