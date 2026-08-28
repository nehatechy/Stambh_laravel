<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    public function index()
    {
        $jobs = Career::latest()->get();
        return view('admin.career.index', compact('jobs'));
    }

    public function create()
    {
        return view('admin.career.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'job_type' => 'nullable|string|max:100',
            'experience_required' => 'nullable|string|max:255',
            'description' => 'required|string',
            'requirements' => 'nullable|string',
            'status' => 'required|string|in:active,inactive',
        ]);

        $data['slug'] = Str::slug($request->title);

        Career::create($data);

        return redirect()->route('admin.career.index')->with('success', 'Career created successfully');
    }

    public function edit(Career $job)
    {
        return view('admin.career.edit', ['career' => $job]);
    }

    public function update(Request $request, Career $job)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'job_type' => 'nullable|string|max:100',
            'experience_required' => 'nullable|string|max:255',
            'description' => 'required|string',
            'requirements' => 'nullable|string',
            'status' => 'required|string|in:active,inactive',
        ]);

        $data['slug'] = Str::slug($request->title);

        $job->update($data);

        return redirect()->route('admin.career.index')->with('success', 'Career updated successfully');
    }

    public function destroy(Career $job)
    {
        $job->delete();
        return redirect()->back()->with('success', 'Career deleted successfully');
    }
}
