<?php

namespace App\Http\Controllers\Post;

class IndexController
{
public function __invoke()
{
return view('post.index');
}
}
