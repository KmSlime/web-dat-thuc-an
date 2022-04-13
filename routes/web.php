<?php
use Illuminate\Support\Facades\Route;
use Admin\FCController;
use Admin\DCController;
use Admin\DrinkController;
use Admin\FoodController;
use Admin\StaffController;
use Admin\CusController;
use Admin\UserController;



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
Route::get('/home','HomeController@getHome')->name('home');
Route::post('/home','HomeController@postLogin');
Route::get('/menu','HomeController@getAll');
Route::get('/logout','HomeController@getLogout');
Route::get('/menu/{idcatergory}','HomeController@getMenu');
Route::get('/user/{getUser}','HomeController@getUser');
//login
Route::post('login', 'HomeController@postLogin');
//chi tiet san pham
Route::get('/home/food','Food\FoodDetailController@getFood');
Route::get('/home/food/{ID_Food}','Food\FoodDetailController@getFoodID');
//them vao gio hang
Route::get('/home/food/cart/{ID_Food}','Food\CartFoodController@CartFood');
//lay ra gio hang
Route::get('/home/cart/{getUser}','Food\CartFoodController@GetCartUser');
//Thanh toan
Route::get('/home/CartSubmit','Food\CartFoodController@getCartSubmit');
//xoa cart
Route::get('/home/CartSubmit/{getIDFood}','Food\CartFoodController@getDeleteCartRowID');
//them sua xoa GetCart
Route::get('/home/cart','Food\CartFoodController@GetCart');
Route::resource('admin/foodcategory', FCController::class);
Route::resource('admin/food', FoodController::class);
Route::resource('admin/drinkcategory', DCController::class);
Route::resource('admin/drink', DrinkController::class);
Route::resource('admin/staff', StaffController::class);
Route::resource('admin/customer', CusController::class);
Route::resource('admin/user', UserController::class);


//register
Route::post('register', 'HomeController@postRegister');
?>
