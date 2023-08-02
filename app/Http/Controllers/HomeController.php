<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $allPosts = Post::with('user')->paginate(5);
        return Inertia::render('Home', [
            'posts' => $allPosts
        ]);
    }
}
