<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;

class IndexController
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        return view('post.index', compact('posts'));
    }
}
