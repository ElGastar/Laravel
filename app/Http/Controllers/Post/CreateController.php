<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Category;

class CreateController extends BaseController
{

    public function __invoke()
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
}
