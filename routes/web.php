<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;

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
Route::get('/my_page',[MyFirstController::class,"index"]);
