<?php

namespace App\Http\Services\Post;

use App\Models\Post;

class Service
{
    public function store($data)
    {
     return Post::create($data);
    }

    public function update($data,$post)
    {
        return $post->update($data);
    }
}
