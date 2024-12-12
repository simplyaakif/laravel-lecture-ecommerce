<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('frontend.blogs.index', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        return view('frontend.blogs.show', compact('blog'));
    }
}
