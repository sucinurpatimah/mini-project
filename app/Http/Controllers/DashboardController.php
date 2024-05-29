<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('dashboard', compact('posts'));
    }

    public function users()
    {
        $posts = Post::with('user')->get();
        return view('user.index', ['posts' => $posts]);
    }
}
