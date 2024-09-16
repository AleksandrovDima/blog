<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Post\StoreRequest;
use App\Models\Post;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Post::firstOrCreate($data);
        return redirect()->route('personal.post.index');
    }
}
