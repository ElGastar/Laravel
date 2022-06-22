<?php

use App\Http\Controllers\indexController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
 return view('hello');
});

Route::get('/withParam/{name}', function($name){
    return view('hello');
});

Route::group(['prefix' => 'news'], function(){
Route::get('/',[indexController::class,'index'])->name("news.index");
Route::get('/create',[indexController::class,'create'])->name("news.create");
Route::get('/edit/{id}',[indexController::class,'edit'])->where('id','\d+')->name("news.edit");//where проверяет id,должен быть целым числом
Route::get('/delete/{id}',[indexController::class,'delete'])->name("news.delete");
});

