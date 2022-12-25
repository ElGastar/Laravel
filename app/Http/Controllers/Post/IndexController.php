<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends BaseController
{

    public function __invoke(Post $post)
    {
        $posts = Post::paginate(10);
        return view('posts.index', ['posts' => $posts]);
    }
}
