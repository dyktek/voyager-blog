<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class IndexController extends Controller
{
    public function index() {
        $posts = Post::paginate(2);

        return view('index.index', compact('posts'));
    }

    public function post(Post $post)
    {
        return view('index.post', compact('post'));
    }
}
