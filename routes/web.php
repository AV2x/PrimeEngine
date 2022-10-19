<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;

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

Route::get('/', [SiteController::class, 'index']);

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

 Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function (){
     Route::get('/', function (){
         return redirect()->route('orders.index');
     });
     Route::resource('orders', OrderController::class);
     Route::resource('users', UserController::class);
     Route::resource('categories', CategoryController::class);
     Route::resource('services', ServiceController::class);
 });
