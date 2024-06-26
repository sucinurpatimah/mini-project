<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    // add post
    public function addPost()
    {
        return view('post.addPost');
    }

    // store post
    public function storePost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'caption' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('post.addPost')
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

    public function seePost($id)
    {
        $posts = Post::find($id);
        return view('post.seePost', compact('posts'));
    }
}
