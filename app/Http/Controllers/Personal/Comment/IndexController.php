<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Post;


class IndexController extends Controller
{
    public function __invoke()
    {
        return view('personal.comment.index');
    }
}
