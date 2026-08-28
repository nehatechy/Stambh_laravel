@extends('layout.admin')

@section('content')
<h3>Edit Project</h3>

<form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<!-- <div class="form-group mb-3">
    <label>Category</label>
    <select name="category" class="form-control">
        <option value="high-rise" {{ old('category', $project->category) == 'high-rise' ? 'selected' : '' }}>High-Rise</option>
        <option value="bridges" {{ old('category', $project->category) == 'bridges' ? 'selected' : '' }}>Bridges & Spans</option>
        <option value="civic" {{ old('category', $project->category) == 'civic' ? 'selected' : '' }}>Civic & Cultural</option>
        <option value="sustainability" {{ old('category', $project->category) == 'sustainability' ? 'selected' : '' }}>Sustainability</option>
    </select>
</div> -->
    <div class="form-group mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $project->title) }}">
    </div>

    <div class="form-group mb-3">
        <label>Client Name</label>
        <input type="text" name="client_name" class="form-control" value="{{ old('client_name', $project->client_name) }}">
    </div>
    <div class="form-group mb-3">
        <label>Duration</label>
        <input type="text" name="duration" class="form-control" value="{{ old('duration', $project->duration) }}" placeholder="e.g. 24 months">
    </div>

    <div class="form-group mb-3">
        <label>Location</label>
        <input type="text" name="location" class="form-control" value="{{ old('location', $project->location) }}" placeholder="e.g. Dubai, UAE">
    </div>

    <div class="form-group mb-3">
        <label>Size</label>
        <input type="text" name="size" class="form-control" value="{{ old('size', $project->size) }}" placeholder="e.g. 45,000 sqm">
    </div>

    <div class="form-group mb-3">
        <label>Year</label>
        <input type="text" name="year" class="form-control" value="{{ old('year', $project->year) }}" placeholder="e.g. 2024">
    </div>


    <div class="form-group mb-3">
        <label>Project URL or Slug</label>
        <input type="text" name="project_url" class="form-control" value="{{ old('project_url', $project->project_url) }}" placeholder="example-project-slug or https://example.com/project-link">
        @error('project_url') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <!-- <div class="form-group mb-3">
        <label>Completion Date</label>
        <input type="date" name="completion_date" class="form-control" value="{{ old('completion_date', $project->completion_date) }}">
    </div> -->

    <!-- <div class="form-group mb-3">
        <label>Short Description</label>
        <textarea name="short_description" class="form-control">{{ old('short_description', $project->short_description) }}</textarea>
    </div> -->

    <div class="form-group mb-3">
        <label>Full Description</label>
        <textarea name="description" class="form-control summernote" rows="6">{!! old('description', $project->description) !!}</textarea>
    </div>

    <div class="form-group mb-3">
        <label>Current Image</label>
        <div id="project_image_preview">
            @if($project->image)
                <img src="{{ asset($project->image) }}" width="120" class="rounded">
            @endif
        </div>
        <label class="mt-2 d-block">Change Project Image (optional)</label>
        <input type="file" id="project_image_input" name="image" class="form-control" onchange="previewFile(this, 'project_image_preview')">
    </div>
    
    <div class="form-group mb-3">
        <label>Additional Project Images</label>
        @if(!empty($project->images))
            <div class="d-flex flex-wrap gap-2 mt-2">
                @foreach($project->images as $image)
                    <img src="{{ asset($image) }}" width="80" class="rounded">
                @endforeach
            </div>
        @endif
        <input type="file" name="images[]" class="form-control mt-2" multiple>
        <small class="text-muted">Select new images to replace the existing gallery.</small>
    </div>

    <div class="form-group mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="active" {{ $project->status == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ $project->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update Project</button>
</form>
@endsection