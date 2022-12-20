<?php

namespace App\Http\Controllers\Post;


use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Post $post)
    {
        // $post = Post::find(3);
        // $post->update([
        //     'title' => 'title is updated',
        //    'likes' => 100, //можно все данные обновить или только некоторые
        // ]);
        // dd("updated");
        $data = $request->validate();
        $tags = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('posts.show', $post->id);
    }
}
