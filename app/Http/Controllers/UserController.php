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
