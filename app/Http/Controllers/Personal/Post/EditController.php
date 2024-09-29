<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;


class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        Gate::authorize('update', $post);
        $categories = Category::all();
        return view('personal.post.edit', compact('post', 'categories'));
    }
}
