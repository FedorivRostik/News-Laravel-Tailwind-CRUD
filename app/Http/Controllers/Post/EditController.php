<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class EditController extends  BasePostController
{
    public function __invoke(Post $post)
    {
       return view('post.edit',compact('post'));
    }
}
