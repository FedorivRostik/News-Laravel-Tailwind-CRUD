<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;

class CreateController
{
    public function __invoke()
    {

       return view("post.create");
    }
}
