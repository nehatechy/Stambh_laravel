@extends('layout.admin')

@section('content')
<h3>Edit Blog</h3>

<form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}">
    </div>

    <div class="form-group mb-3">
        <label>URL</label>
        <input type="text" name="slug" class="form-control" value="{{ old('slug', $blog->slug) }}" placeholder="blog-post-slug">
        <small class="text-muted">This becomes the public URL for the post, for example /blog/{{ '{slug}' }}.</small>
    </div>

    <div class="form-group mb-3">
        <label>Short Description</label>
        <textarea name="short_description" class="form-control">{{ old('short_description', $blog->short_description) }}</textarea>
    </div>

    <div class="form-group mb-3">
        <label>Description</label>
        <textarea name="content" class="form-control summernote" rows="8">{!! old('content', $blog->content) !!}</textarea>
        <small class="text-muted">Use the editor to add headings, paragraphs, code blocks, and lists for SEO-friendly formatted content.</small>
    </div>

    <div class="form-group mb-3">
        <label>Current Image</label><br>
        <div id="blog_image_preview">
            @if($blog->image)
                <img src="{{ asset($blog->image) }}" width="120" class="rounded">
            @endif
        </div>
        <label class="mt-2 d-block">Change Image (optional)</label>
        <input type="file" id="blog_image_input" name="image" class="form-control" onchange="previewFile(this, 'blog_image_preview')">
    </div>

    <div class="form-group mb-3">
        <label>Meta Title</label>
        <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $blog->meta_title) }}">
    </div>

    <div class="form-group mb-3">
        <label>Meta Description</label>
        <textarea name="meta_description" class="form-control">{{ old('meta_description', $blog->meta_description) }}</textarea>
    </div>

    <div class="form-group mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="active" {{ $blog->status == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ $blog->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update Blog</button>
</form>
@endsection