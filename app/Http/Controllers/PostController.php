<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // TODO: Add your comments for each controller method
    public function index()
    {
        // TODO: posts should be posts => posts.index/posts.show...
        return view('posts.index', [
            'blogs' => Blog::all()
        ]);
    }

    public function show(Blog $blog)
    {
        return view('posts.show', [
            'blog' => $blog
        ]);
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);

        // Create a new Blog model object, mass-assign its attributes with
        // the validated data and store it to the database
        $blog = Blog::create($validated);

        // Redirect to the blog index page
        return redirect()->route('posts');
    }

    public function create(){
        return view('posts.create');
    }
}
