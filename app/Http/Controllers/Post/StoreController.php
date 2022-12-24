<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Post\BaseController;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, Post $post)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('posts.index');
    }
}
