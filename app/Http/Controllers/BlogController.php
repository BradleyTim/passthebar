<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index ()
    {
        $blogs = Blog::latest()->get();
        return view('blog.index', ['blogs' => $blogs]);
    }

    public function show (Request $request)
    {
        $blog = Blog::findOrFail($request->id);
        return view('blog.show', ['blog' => $blog]);
    }

    public function create ()
    {
        return view('blog.create');
    }

    public function store (Request $request)
    {
        $validatedEntries = $request->validate([
            'title' => ['required', 'min:3', 'max:140'],
            'slug' => ['required', 'min:3', 'max:255'],
            'body' => ['required', 'min:3'],
        ]);

        Blog::create($validatedEntries);
        return back()->with('message', 'Blog created succesfully');
    }
}
