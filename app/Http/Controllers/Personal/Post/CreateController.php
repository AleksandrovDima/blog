<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;


class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('personal.post.create', compact('categories'));
    }
}
