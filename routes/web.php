<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FCController;

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

Route::resource('admin/foodcatergory', FCController::class);
// insret catergory
Route::post('foodcategory', 'App\Http\Controllers\Admin\FCController@store');
Route::get('/home','App\Http\Controllers\HomeController@getHome');
Route::post('/home','App\Http\Controllers\HomeController@postLogin');
Route::get('/menu','App\Http\Controllers\HomeController@getAll');
Route::get('/logout','App\Http\Controllers\HomeController@getLogout');
Route::get('/menu/{idcatergory}','App\Http\Controllers\HomeController@getMenu');
Route::get('/user/{getUser}','App\Http\Controllers\HomeController@getUser');
//login
Route::post('login', 'App\Http\Controllers\HomeController@postLogin');

Route::get('/admin/staff', 'App\Http\Controllers\AdminController@index')->name('Admin');
//thêm - sửa - xoá admin
// Route::get('/admin/foodcatergory','App\Http\Controllers\Admin\FCController@index');
// Route::post('/admin/foodcatergory/create','App\Http\Controllers\Admin\FCController@store');
// Route::get('/admin/foodcatergory/create','App\Http\Controllers\Admin\FCController@create');
// Route::post('/admin/foodcatergory/{id}/update','App\Http\Controllers\Admin\FCController@update');
// Route::get('/admin/foodcatergory/{id}/edit','App\Http\Controllers\Admin\FCController@edit');
// Route::post('/admin/foodcatergory/{id}/delete','App\Http\Controllers\Admin\FCController@destroy');


Route::get('/admin/food','App\Http\Controllers\Admin\FoodController@index');
Route::get('/admin/drink','App\Http\Controllers\Admin\DrinkController@index');
Route::get('/admin/drinkcatergory','App\Http\Controllers\Admin\DCController@index');
Route::get('/admin/staff','App\Http\Controllers\Admin\StaffController@index');
Route::get('/admin/user','App\Http\Controllers\Admin\UserController@index');
//register
Route::post('register', 'App\Http\Controllers\HomeController@postRegister');
?>
