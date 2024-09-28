<?php

namespace App\Http\Controllers\Post\Popular;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;


class  indexController extends Controller
{
    public function __invoke()
    {
        $popularPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(9);
        return view('post.popular.index', compact('popularPosts'));
    }
}
