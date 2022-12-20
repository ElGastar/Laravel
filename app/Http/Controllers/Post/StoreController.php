<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Post $post)
    {
        $data = $request->validate();
        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);
        $post->tags()->attach($tags);
        return redirect()->route('posts.index');
    }
}
