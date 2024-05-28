<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('user.index', compact('posts'));
    }

    public function explore()
    {
        return view('user.explore');
    }
}
