<?php

namespace App\Http\Controllers\Post;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Post $post)
    {
        // $post = Post::find(3);
        // $post->update([
        //     'title' => 'title is updated',
        //    'likes' => 100, //можно все данные обновить или только некоторые
        // ]);
        // dd("updated");
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'images' => 'string',
            'category_id' => '', //проверяет тип
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);
        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('posts.show', $post->id);
    }
}
