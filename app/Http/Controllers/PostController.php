<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

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

    public function create()
    {       
        return view('blog.create');
    }

    public function store(Request $request)
    {       
        $post = new Post;
        $post->title = $request->title;
        $post->slug = \Str::slug($request->title);
        $post->body = $request->body;
        $post->save();
        return redirect()->to('blog');
    }
}
