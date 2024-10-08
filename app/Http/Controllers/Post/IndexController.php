<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $posts = Post::paginate(6);
        $randomPostsCount = $posts->count() < 4 ? $posts->count() : 4;
        $randomPosts = Post::get()->random($randomPostsCount);
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
        return view('post.index', compact('posts', 'randomPosts', 'likedPosts', 'categories'));
    }
}
