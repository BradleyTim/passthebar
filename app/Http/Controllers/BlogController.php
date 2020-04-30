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

    public function create ()
    {
        return view('blog.create');
    }

    public function store ()
    {
        $blog = new Blog();
        $blog->title = request('title');
        $blog->slug = request('slug');
        $blog->body = request('body');
        $blog->save();
        return redirect('/');
    }
}
