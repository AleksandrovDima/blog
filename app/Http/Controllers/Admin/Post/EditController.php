<?php

namespace App\Http\Controllers\Admin\Post;

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
        return view('Admin.post.edit', compact('post', 'categories'));
    }
}
