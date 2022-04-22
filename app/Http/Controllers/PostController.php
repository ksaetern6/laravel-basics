<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() 
    {
        $posts = Post::latest()->paginate(10);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $posts) 
    {
        
        return view('posts.show', [
            'posts' => $posts
        ]);

    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:20',
            'body' => 'required|max:200'
        ]);

        Post::create($request->only('title','body'));

        return redirect()
            ->route('posts.index', 1)
            ->withStatus('Your post has been created');
    }
}
