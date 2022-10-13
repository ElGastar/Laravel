<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

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
Route::get('/posts',[PostController::class,"index"])->name('posts.index');
Route::get('/posts/create',[PostController::class,"create"])->name('posts.create');
Route::post('/posts',[PostController::class,"store"])->name('posts.store');
Route::get('/posts/{post}',[PostController::class,"show"])->name('posts.show');

Route::get('/posts/delete',[PostController::class,"delete"]);
Route::get('/posts/first_Or_Create',[PostController::class,"first_Or_Create"]);
Route::get('/posts/update_Or_Create',[PostController::class,"update_Or_Create"]);

Route::get('/main',[MainController::class,"index"])->name('main.index');
Route::get('/about',[AboutController::class,"index"])->name('about.index');
Route::get('/contacts',[ContactController::class,"index"])->name('contacts.index');


