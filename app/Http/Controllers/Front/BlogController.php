<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', 'active')
            ->latest()
            ->paginate(9);

        return view('front.blog-listing', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 'active')
            ->firstOrFail();

        return view('front.blog-detail', compact('blog'));
    }
}
