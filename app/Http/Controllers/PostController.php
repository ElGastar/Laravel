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

   public function create(){
        $arrayItem = [
            0 => [
                'title'        => 'new title',
                'images'       => 'new image',
                'content'      => 'new content',
                'likes'        => 4,
                'is_published' =>1,

            ],
            1 => [
                'title'        => ' another new title',
                'images'       => ' another new image',
                'content'      => 'another new content',
                'likes'        => 6,
                'is_published' =>1,

            ],
        ];

        foreach($arrayItem as $item){
            Post::create($item);// добавляет в таблицу данные указанные в  массиве
        };
        dd('created');

   }
   public function update(){
       $post=Post::find(3);
       $post->update([
           'title' => 'title is updated',
           'likes' => 100, //можно все данные обновить или только некоторые
       ]);
       dd("updated");
   }
   public function delete(){
       $post = Post::withTrashed()->find(2);
       $post->restore();// жесткое удаления , если не находит запись с id 3 выдает ошибку
       dd("deleted");
   }
}
