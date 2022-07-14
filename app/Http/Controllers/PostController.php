<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('welcome', ['posts' => \App\Models\Post::with(['user', 'category'])->latest()->get()]);
    }

    public function RequestPost(\App\Models\Post $post)
    {
        //? find a post by its id and pass it to a view called "post";
        // $post = \App\Models\Post::find($id);

        //? route binding
        return view('post', ['post' => $post]);
    }
}