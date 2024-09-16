<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Post\StoreRequest;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->update($data);
        return redirect()->route('personal.post.show', compact('post'));
    }
}

