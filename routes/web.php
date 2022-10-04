<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;
use App\Http\Controllers\PostController;

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

/**
 * Функция принимает два параметра первый url, второй анонимная функция
 * или класс контреллер
 * можно писать "MyFirstController@index" вместо массива [MyFirstController::class,"index"]
 * @return void
 *
*/
Route::get('/post',[PostController::class,"index"]);
Route::get('/post/create',[PostController::class,"create"]);
Route::get('/post/update',[PostController::class,"update"]);
Route::get('/post/delete',[PostController::class,"delete"]);
Route::get('/post/first_Or_Create',[PostController::class,"first_Or_Create"]);
Route::get('/post/update_Or_Create',[PostController::class,"update_Or_Create"]);

