<?php

namespace App\Http\Controllers\Post;


use App\Http\Controllers\Post\BaseController;
use App\Http\Requests\Post\UpdateRequest;

use App\Models\Post;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Post $post)
    {
        // $post = Post::find(3);
        // $post->update([
        //     'title' => 'title is updated',
        //    'likes' => 100, //можно все данные обновить или только некоторые
        // ]);
        // dd("updated");

        $data = $request->validated();


        $this->service->update($post, $data);

        return redirect()->route('posts.show', $post->id);
    }
}
