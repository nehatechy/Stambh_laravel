@extends('layout.admin')

@section('content')
<h3>Add New Blog</h3>

<form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="form-group mb-3">
        <label>URL</label>
        <input type="text" name="slug" class="form-control" value="{{ old('slug') }}" placeholder="blog-post-slug">
        <small class="text-muted">This becomes the public URL for the post, for example /blog/{{ '{slug}' }}.</small>
        @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="form-group mb-3">
        <label>Short Description</label>
        <textarea name="short_description" class="form-control">{{ old('short_description') }}</textarea>
    </div>

    <div class="form-group mb-3">
        <label>Description</label>
        <textarea name="content" class="form-control summernote" rows="8">{!! old('content') !!}</textarea>
        <small class="text-muted">Use the editor to add headings, paragraphs, code blocks, and lists for SEO-friendly formatted content.</small>
        @error('content') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="form-group mb-3">
        <label>Image</label>
        <input type="file" id="blog_image_input" name="image" class="form-control" onchange="previewFile(this, 'blog_image_preview')">
        <div id="blog_image_preview" class="mt-2"></div>
    </div>

    <div class="form-group mb-3">
        <label>Meta Title</label>
        <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title') }}">
    </div>

    <div class="form-group mb-3">
        <label>Meta Description</label>
        <textarea name="meta_description" class="form-control">{{ old('meta_description') }}</textarea>
    </div>

    <div class="form-group mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Save Blog</button>
</form>
@endsection