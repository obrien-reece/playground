<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create() {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'string|required|min:2',
            'category_id' => 'required'
        ]);

        Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'category_id' => $request->input('category_id'),
            'user_id' => auth()->id()
        ]);

        return redirect('home');
    }
}
