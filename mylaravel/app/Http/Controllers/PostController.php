<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function getData()
    {
        $posts = [
            [
                'title' => 'Post 1 Title',
                'content' => 'Post 1 Body'
            ],
        ];

        return response()->json($posts, 200, [], JSON_PRETTY_PRINT);
    }
}
