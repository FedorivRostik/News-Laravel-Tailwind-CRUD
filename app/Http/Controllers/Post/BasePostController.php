<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Services\Post\Service;

class BasePostController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
