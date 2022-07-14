<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function RequestAuthor(\App\Models\User $author)
    {
        return view('author', ['posts' => $author->posts->load('category', 'user'), 'name' => $author->name]);
    }
}