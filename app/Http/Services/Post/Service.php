<?php

namespace App\Http\Services\Post;

use App\Models\Post;

class Service
{
    public function store($data)
    {
     return Post::create($data);
    }
}
