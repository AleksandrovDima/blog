<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        Gate::authorize('view', $post);
        return view('admin.post.show', compact('post'));
    }
}
