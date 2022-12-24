<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;

class DestroyController extends BaseController
{

    public function __invoke(Post $post)
    {
        $post->delete(); // жесткое удаления , если не находит запись с id 3 выдает ошибку
        return redirect()->route('posts.index');
    }
}
