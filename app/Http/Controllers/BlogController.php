<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Tag;

class BlogController extends Controller
{
    public function index ()
    {
        if(request('tag')) {
            $blogs = Tag::where('name', request('tag'))->firstOrFail()->blogs;
        } else {
            $blogs = Blog::latest()->get();
        }
        return view('blog.index', ['blogs' => $blogs]);
    }

    public function show (Request $request, Blog $blog)
    {
        // $blog = Blog::findOrFail($request->id);
        return view('blog.show', ['blog' => $blog]);
    }

    public function create ()
    {
        return view('blog.create', ['tags' => Tag::all()]);
    }

    public function store (Request $request)
    {
        $blog = new Blog($this->blogValidate($request));

        $blog->user_id = auth()->user()->id;

        $blog->save();

        $blog->tags()->attach(request('tags'));

        return back()->with('message', 'Blog created succesfully');
    }

    public function edit (Blog $blog)
    {
        return view('blog.edit', ['blog' => $blog, 'tags' => Tag::all()]);
    }

    public function update (Request $request, Blog $blog)
    {
        $this->blogValidate($request);

        $blog = Blog::find($blog->id);

        // $blog->user_id = auth()->user()->id;

        $blog->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'user_id' => auth()->user()->id,
        ]);

        $blog->tags()->attach(request('tags'));
        return back()->with('message', 'Blog updated successfully');
    }

    public function destroy (Blog $blog)
    {
        $blog->delete();
        return back()->with('message', 'Blog deleted successfully');
    }

    public function blogValidate(Request $request)
    {
        $validatedEntries = $request->validate([
            'title' => ['required', 'min:3', 'max:140'],
            'slug' => ['required', 'min:3', 'max:255'],
            'body' => ['required', 'min:3'],
        ]);

        return $validatedEntries;
    }
}
