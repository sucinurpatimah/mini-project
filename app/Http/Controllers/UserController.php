<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    public function search(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $users = User::where('username', 'LIKE', '%' . $query . '%')->get();

            if ($users->isEmpty()) {
                $message = "Pencarian tidak ditemukan";
            } else {
                $message = null;
            }
        } else {
            $users = collect();
            $message = null;
        }

        return view('user.explore', compact('users', 'message'));
    }


    public function profile()
    {
        return view('user.profile');
    }
}
