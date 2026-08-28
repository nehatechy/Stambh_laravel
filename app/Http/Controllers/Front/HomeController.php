<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::where('status', 'active')->latest()->get();
        $blogs = Blog::where('status', 'active')->latest()->take(3)->get();

        return view('front.index', compact('projects','blogs'));
    }
}
