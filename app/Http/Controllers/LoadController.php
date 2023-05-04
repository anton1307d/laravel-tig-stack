<?php

namespace App\Http\Controllers;

use App\Models\Post;

class LoadController extends Controller
{
    public function index()
    {
        Post::factory(100)->create();

        return Post::query()->paginate(15);
    }
}
