<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;


class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        return view('personal.post.edit', compact('post'));
    }
}
