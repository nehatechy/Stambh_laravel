<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()
            ->when(request('search'), fn($query) => $query->where('title', 'like', '%' . request('search') . '%'))
            ->when(request('status'), fn($query) => $query->where('status', request('status')))
            ->paginate(10)
            ->withQueryString();

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            // 'project_url' => 'required|string|max:255',
            'project_url' => 'nullable|string|max:255',
            'description' => 'required',
            'completion_date' => 'nullable|date',
            'duration' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'size' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->except(['image', 'images']);
        $data['slug'] = $this->generateUniqueSlug($request->title);

        if ($request->hasFile('image')) {
            $data['image'] = $this->storeImage($request->file('image'));
        }

        if ($request->hasFile('images')) {
            $data['images'] = $this->storeImages($request->file('images'));
        }

        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'project_url' => 'nullable|string|max:255',
            'description' => 'required',
            'completion_date' => 'nullable|date',
            'duration' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'size' => 'nullable|string|max:255',
            'year' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->except(['image', 'images']);
        $data['slug'] = $this->generateUniqueSlug($request->title, $project->id);

        if ($request->hasFile('image')) {
            $this->deleteImage($project->image);
            $data['image'] = $this->storeImage($request->file('image'));
        }

        if ($request->hasFile('images')) {
            $this->deleteImages($project->images);
            $data['images'] = $this->storeImages($request->file('images'));
        }

        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully');
    }

    public function updateStatus(Request $request, Project $project)
    {
        $request->validate([
            'status' => 'required|in:active,inactive',
        ]);

        $project->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Project status updated successfully');
    }

    public function destroy(Project $project)
    {
        $this->deleteImage($project->image);
        $this->deleteImages($project->images);

        $project->delete();
        return redirect()->back()->with('success', 'Project deleted successfully');
    }

    protected function storeImage($file): string
    {
        $destinationPath = public_path('uploads/projects');

        if (!is_dir($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        $fileName = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $file->getClientOriginalExtension();
        $file->move($destinationPath, $fileName);

        return 'uploads/projects/' . $fileName;
    }

    protected function storeImages(array $files): array
    {
        $paths = [];

        foreach ($files as $file) {
            $paths[] = $this->storeImage($file);
        }

        return $paths;
    }

    protected function deleteImage(?string $path): void
    {
        if ($path) {
            $fullPath = public_path($path);
            if (file_exists($fullPath)) {
                unlink($fullPath);
            }
        }
    }

    protected function deleteImages($images): void
    {
        if (empty($images)) {
            return;
        }

        $images = is_array($images) ? $images : json_decode($images, true) ?? [];

        foreach ($images as $image) {
            $this->deleteImage($image);
        }
    }

    protected function generateUniqueSlug(string $title, int $excludeId = null): string
    {
        $slug = Str::slug($title);
        $original = $slug;
        $count = 1;

        while (Project::where('slug', $slug)
            ->when($excludeId, fn($query) => $query->where('id', '!=', $excludeId))
            ->exists()) {
            $slug = $original . '-' . $count++;
        }

        return $slug;
    }
}