<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $postFrom = Post::all();
        return view('index', ['posts' => $postFrom]);
    }

    public function show(Post $post)
    {
        return view('show', ['post' => $post]);
    }

    public function create()
    {
        $user = User::all();
        return view('create', ['user' => $user]);
    }

    public function store()
    {
        $title = request()->title;
        $description = request()->description;
        $user_id = request()->user_id;
        $post = Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $user_id
        ]);
        return redirect('/posts');
    }

    public function edit(Post $post)
    {
        $user = User::all();
        return view('edit', ['post' => $post,'user'=>$user]);
    }

    public function update(Post $post)
    {

        $post->update([
            'title' => request()->title,
            'description' => request()->description,
            'user_id' => request()->user_id


        ]);
        return redirect('/posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}
