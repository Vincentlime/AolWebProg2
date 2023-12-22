<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\userController;
use App\Http\Controllers\productController;
use App\Http\Controllers\accountController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [homepageController::class, 'viewHomepage']);
Route::get('/aboutus', [homepageController::class, 'viewAboutUs']);

Route::get('/account', [accountController::class, 'viewSignUp'])->name('account');
Route::get('/login', [accountController::class, 'viewLogIn'])->name('login');
Route::post('/processForm', [accountController::class, 'processForm']);
Route::post('/processLogin',[accountController::class, 'processLogin'])->middleware('web');
Route::get('/showProfile', [accountController::class, 'showProfile'])->name('showProfile');
Route::get('/editProfile', [accountController::class, 'editProfile']);
Route::get('updateProfile', [accountController::class, 'updateProfile'])->name('updateProfile');
Route::post('/logout', [accountController::class, 'logout'])->name('logout');
Route::post('/logout', [accountController::class, 'logout'])->name('logout');


Route::get('/product', [productController::class, 'viewUserList']);
Route::get('/addproduct', [productController::class, 'addProduct']);
Route::get('/removeproduct', [productController::class, 'removeProduct']);
Route::get('/editproduct', [productController::class, 'editProduct']);
Route::get('/processProduct', [productController::class, 'processProduct']);


Route::get('/user', [userController::class, 'viewUserList']);
Route::get('/profile', [userController::class, 'profile']);