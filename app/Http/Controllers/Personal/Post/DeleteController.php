<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;


class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {
        Gate::authorize('delete', $post);
        $post->delete();
        return redirect()->route('personal.post.index');
    }
}
