<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class ShowController extends BaseController
{

    public function __invoke(Post $post)
    {
        $category = $post->category->title;

        return view('posts.show', ['post' => $post, 'category' => $category, 'tags' => $post->tags]);
    }
}
