<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::latest()->paginate(10);
        return view('admin.blogs.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255|alpha_dash|unique:blogs,slug',
        'short_description' => 'nullable|string|max:500',
        'content' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'meta_title' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string|max:500',
    ]);

    $data = $request->except('image');

    $data['slug'] = $request->filled('slug')
        ? Str::slug($request->slug)
        : Str::slug($request->title);

    $data['content'] = strip_tags(
        $request->content,
        '<h1><h2><h3><h4><h5><h6><p><strong><b><em><i><u><ul><ol><li><br><hr><a><img><code><pre>'
    );

    if ($request->hasFile('image')) {

        $imageName = time() . '.' . $request->image->getClientOriginalExtension();

        $request->image->move(
            public_path('uploads/blogs'),
            $imageName
        );

        $data['image'] = 'uploads/blogs/' . $imageName;
    }

    Blog::create($data);

    return redirect()->route('admin.blog.index')
        ->with('success', 'Blog created successfully');
}

    // NOTE: variable is $post to match {post} in route, even though model is Blog
    public function edit(Blog $post)
    {
        return view('admin.blogs.edit', ['blog' => $post]);
    }

   public function update(Request $request, Blog $post)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255|alpha_dash|unique:blogs,slug,' . $post->id,
        'short_description' => 'nullable|string|max:500',
        'content' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'meta_title' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string|max:500',
    ]);

    $data = $request->except('image');

    $data['slug'] = $request->filled('slug')
        ? Str::slug($request->slug)
        : Str::slug($request->title);

    $data['content'] = strip_tags(
        $request->content,
        '<h1><h2><h3><h4><h5><h6><p><strong><b><em><i><u><ul><ol><li><br><hr><a><img><code><pre>'
    );

    if ($request->hasFile('image')) {

        $imageName = time() . '.' . $request->image->getClientOriginalExtension();

        $request->image->move(
            public_path('uploads/blogs'),
            $imageName
        );

        $data['image'] = 'uploads/blogs/' . $imageName;
    }

    $post->update($data);

    return redirect()->route('admin.blog.index')
        ->with('success', 'Blog updated successfully');
}

    public function destroy(Blog $post)
    {
        $post->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully');
    }
}