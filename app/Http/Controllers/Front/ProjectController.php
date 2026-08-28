<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function list()
    {
        $projects = Project::where('status', 'active')->latest()->get();
        return view('front.project-list', compact('projects'));
    }

    public function detail($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        return view('front.project-detail', compact('project'));
    }
}