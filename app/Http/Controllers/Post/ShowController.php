<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;

class ShowController
{
    public function __invoke(Post $post)
    {

        return view('post.show', compact('post'));
    }
}
