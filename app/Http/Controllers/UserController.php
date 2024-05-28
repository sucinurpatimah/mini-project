<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

    public function profile()
    {
        return view('user.profile');
    }

    // add post
    public function addPost()
    {
        return view('user.addPost');
    }

    // store post
    public function storePost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'caption' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('user.addPost')
                ->withErrors($validator)
                ->withInput();
        }

        $file = $request->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move('storage/post', $fileName);

        Post::create([
            'user_id' => Auth::user()->id,
            'image' => '/storage/post/' . $fileName,
            'caption' => $request->caption,
        ]);

        return redirect()->route('user.index')->with('success', 'Anda telah mengupload postingan baru!');
    }
}
