<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Post;

class EditController extends BaseController
{

    public function __invoke(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();


        return view('posts.edit', ['post' => $post, 'categories' => $categories, 'tags' => $tags]);
    }
}
