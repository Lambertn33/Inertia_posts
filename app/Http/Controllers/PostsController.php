<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    public function index()
    {
        $userPosts = Auth::user()->posts()->get();
        return Inertia::render('posts/Index', [
            'posts' => $userPosts
        ]);
    }

    public function create()
    {
        return Inertia::render('posts/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required | min:10 | max: 50'
        ]);

        $newPost = [
            'id' => Str::uuid()->toString(),
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'description' => $request->description,
            'created_at' => now(),
            'updated_at' => now()
        ];

        Post::insert($newPost);
        return redirect('/posts');
    }

    public function destroy(Request $request)
    {
        Post::find($request->postId)->delete();
        return back();
    }
}
