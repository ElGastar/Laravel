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
      // $posts = Post::all();// Возвращает тип Collection
      $posts=Post::where('is_published',1)->first()->get(); //get возвращет тип Collection

       foreach($posts as $post){
       dump($post->is_published);
       }
       dd("end");
   }
}
