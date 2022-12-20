<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;

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
Route::group(['namespace'=>'Post'],function(){
    Route::get('/posts','IndexController')->name('posts.index');
    Route::get('/posts/create','CreateController')->name('posts.create');
    Route::post('/posts','StoreController')->name('posts.store');
    Route::get('/posts/{post}','ShowController')->name('posts.show');
    Route::get('/posts/{post}/edit','EditController')->name('posts.edit');
    Route::patch('/posts/{post}','UpdateController')->name('posts.update');
    Route::delete('/posts/{post}','DestroyController')->name('posts.destroy');
});



Route::get('/posts/delete',[PostController::class,"delete"]);
Route::get('/posts/first_Or_Create',[PostController::class,"first_Or_Create"]);
Route::get('/posts/update_Or_Create',[PostController::class,"update_Or_Create"]);

Route::get('/main',[MainController::class,"index"])->name('main.index');
Route::get('/about',[AboutController::class,"index"])->name('about.index');
Route::get('/contacts',[ContactController::class,"index"])->name('contacts.index');


