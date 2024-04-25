<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function post()
    {
        return view('post', [
            'title' => 'post',
            'activate' => 'post'
        ]);
    }

    public function move(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'file-input' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        

        $imagePath = $request->file('file-input')->store('public');
       
        $post = new Post;
        $post->title = $request->title;
        $post->image = $imagePath;

        $post->save();

        return redirect('/post')->with('success', 'New post created successfully');
    }
}
