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
}
