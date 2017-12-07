<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|min:5|max:15',
            'text' => 'required|string|min:15|max:1000',
        ]);

        Post::create($request->only(['title', 'text']));

        return redirect('/posts');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required|string|min:5|max:15',
            'text' => 'required|string|min:15|max:1000',
        ]);

        $post->update([
            'title' => $request->title,
            'text' => $request->text,
        ]);

        return redirect('/posts/' . $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts');
    }
}
