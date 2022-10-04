<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
/**
 * this controller created with command - php artisan make:controlller MyFirstControlle
*/
class PostController extends Controller
{
   public function index(){
       $post = Post::find('1');
       dd($post->id);// id называния колонки таблицы в бд
   }
}
