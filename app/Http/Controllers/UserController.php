<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $products = Post::all();
        return view('user.index');
    }

    public function explore()
    {
        return view('user.explore');
    }
}
