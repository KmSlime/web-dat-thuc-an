<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FCController;
use App\Http\Controllers\Admin\DCController;
use App\Http\Controllers\Admin\DrinkController;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\CusController;
use App\Http\Controllers\Admin\UserController;


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
//them sua xoa
Route::resource('admin/foodcategory', FCController::class);
Route::resource('admin/food', FoodController::class);
Route::resource('admin/drinkcategory', DCController::class);
Route::resource('admin/drink', DrinkController::class);
Route::resource('admin/staff', StaffController::class);
Route::resource('admin/customer', CusController::class);
Route::resource('admin/user', UserController::class);


//register
Route::post('register', 'App\Http\Controllers\HomeController@postRegister');
?>
