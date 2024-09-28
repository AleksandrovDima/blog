<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;


class IndexController extends Controller
{
    public function __invoke()
    {
        $postsCount = Post::all()->count();
        $Count = Post::all()->count();
        $postsCount = Post::all()->count();
        return view('personal.main.index', compact('postsCount'));
    }
}
