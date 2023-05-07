<?php

namespace App\Http\Controllers\Post;

use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class StoreController extends  BasePostController
{
    public function __invoke(StoreRequest $request)
    {
        $validated= $request->validated();

       $post= $this->service->store($validated);

       return redirect()->route('posts.show',$post->id);
    }
}
