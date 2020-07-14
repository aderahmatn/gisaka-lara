<?php

namespace App\Http\Controllers;

use App\Post;


class PostController extends Controller
{
    public function index()
    {
        $post = Post::simplePaginate(6);
        return view('blog.show', compact('post'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.article', compact('post'));
    }
}
