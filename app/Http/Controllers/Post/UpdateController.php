<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends  BasePostController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $validated= $request->validated();

         $this->service->update($validated,$post);

       return redirect()->route('posts.show',$post->id);
    }
}
