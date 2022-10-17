<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('authors', [
            'title' => 'Authors',
            'active' => 'authors',
            'authors' => User::all()
        ]);
    }

    public function show(User $user)
    {
        return view('posts', [
            'title' => "Posts by Author : $user->name",
            'posts' => $user->posts->load('category', 'user'),
        ]);
    }
}
