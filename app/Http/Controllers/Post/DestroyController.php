<?php

namespace App\Http\Controllers\Post;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class DestroyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Post $post)
    {
        $post->delete(); // жесткое удаления , если не находит запись с id 3 выдает ошибку
        return redirect()->route('posts.index');
    }
}
