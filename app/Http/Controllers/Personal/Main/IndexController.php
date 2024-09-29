<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;


class IndexController extends Controller
{
    public function __invoke()
    {
        $commentCount = auth()->user()->comments->count();
        $likedCount = auth()->user()->likedPosts->count();
        $postsCount = auth()->user()->posts->count();

        return view('personal.main.index', compact('postsCount', 'likedCount', 'commentCount'));
    }
}
