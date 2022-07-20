<?php

use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Main\StoreController;
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


Route::get('/hello', function(){
 return view('hello');
});

Route::get('/', IndexController::class)->name('main.index');
Route::get('/store', StoreController::class)->name('main.store');

Route::group(['prefix' => 'admin'], function(){
Route::resource('news',NewsController::class);
});

