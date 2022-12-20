<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\PostTag;

/**
 * this controller created with command - php artisan make:controlller MyFirstControlle
 */
class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();// Возвращает тип Collection

    }

    public function create()
    {
        $arrayItem = [
            0 => [
                'title'        => 'new title',
                'images'       => 'new image',
                'content'      => 'new content',
                'likes'        => 4,
                'is_published' => 1,

            ],
            1 => [
                'title'        => ' another new title',
                'images'       => ' another new image',
                'content'      => 'another new content',
                'likes'        => 6,
                'is_published' => 1,

            ],
        ];

        // foreach($arrayItem as $item){
        //     Post::create($item);// добавляет в таблицу данные указанные в  массиве
        // };
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create', ['categories' => $categories, 'tags' => $tags]);
    }
    /**
     *нейминг инпутоd формы в файле create.blade
     *должный совподать с именами колонок в талице posts
     */
    public function store()
    {

    }
    public function show(Post $post)
    {

    }
    public function edit(Post $post)
    {


    }

    public function update(Post $post)
    {

    }


    public function delete()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore(); // жесткое удаления , если не находит запись с id 3 выдает ошибку
        dd("deleted");
    }
    public function destroy(Post $post)
    {

    }
    /**
     * первый параметр ищет сответствующий запись , если не находит, создает новий запись соответствующий второму параметру
     */
    public function first_Or_Create()
    {

        $post = Post::firstOrCreate(
            [
                'title' => 'title'
            ],
            [
                'title'        => ' an new title',
                'images'       => ' annew image',
                'content'      => 'an new content',
                'likes'        => 0,
                'is_published' => 1,
            ]
        );
        dd("Created");
    }


    public function update_Or_Create()
    {
        /**
         * обновляет запись если находит , если нет то создает
         */
        $post = Post::updateOrCreate(
            [
                'title' => 'new title'
            ],
            [
                'title'        => ' updated',
                'images'       => ' updated image',
                'content'      => 'updated content',
                'likes'        => 0,
                'is_published' => 1,
            ]
        );
        dd("Created");
    }
}
