<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, Post $post)
    {
        try {
            $data = $request->validated();
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            $post->update($data);
        } catch (\Exception $exception) {
            abort('404');
        }
        return redirect()->route('personal.post.show', compact('post'));
    }
}

