@extends('layout.admin')

@section('content')
<h3>Add New Project</h3>

<form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- <div class="form-group mb-3">
    <label>Category</label>
    <select name="category" class="form-control">
        <option value="high-rise" {{ old('category') == 'high-rise' ? 'selected' : '' }}>High-Rise</option>
        <option value="bridges" {{ old('category') == 'bridges' ? 'selected' : '' }}>Bridges & Spans</option>
        <option value="civic" {{ old('category') == 'civic' ? 'selected' : '' }}>Civic & Cultural</option>
        <option value="sustainability" {{ old('category') == 'sustainability' ? 'selected' : '' }}>Sustainability</option>
    </select>
</div> -->
    <div class="form-group mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="form-group mb-3">
        <label>Client Name</label>
        <input type="text" name="client_name" class="form-control" value="{{ old('client_name') }}">
        @error('client_name') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
    <div class="form-group mb-3">
        <label>Duration</label>
        <input type="text" name="duration" class="form-control" value="{{ old('duration') }}" placeholder="e.g. 24 months">
    </div>

    <div class="form-group mb-3">
        <label>Location</label>
        <input type="text" name="location" class="form-control" value="{{ old('location') }}" placeholder="e.g. Dubai, UAE">
    </div>

    <div class="form-group mb-3">
        <label>Size</label>
        <input type="text" name="size" class="form-control" value="{{ old('size') }}" placeholder="e.g. 45,000 sqm">
    </div>

    <div class="form-group mb-3">
        <label>Year</label>
        <input type="text" name="year" class="form-control" value="{{ old('year') }}" placeholder="e.g. 2024">
    </div>

    <div class="form-group mb-3">
        <label>Project URL or Slug</label>
        <input type="text" name="project_url" class="form-control" value="{{ old('project_url') }}" placeholder="example-project-slug or https://example.com/project-link">
        @error('project_url') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <!-- <div class="form-group mb-3">
        <label>Completion Date</label>
        <input type="date" name="completion_date" class="form-control" value="{{ old('completion_date') }}">
        @error('completion_date') <small class="text-danger">{{ $message }}</small> @enderror
    </div> -->

    <!-- <div class="form-group mb-3">
        <label>Short Description</label>
        <textarea name="short_description" class="form-control">{{ old('short_description') }}</textarea>
        @error('short_description') <small class="text-danger">{{ $message }}</small> @enderror
    </div> -->

    <div class="form-group mb-3">
        <label>Full Description</label>
        
        <textarea name="description" class="form-control summernote" rows="8">{{ old('description') }}</textarea>
        @error('description') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="form-group mb-3">
        <label>Project Image</label>
        <input type="file" id="project_image_input" name="image" class="form-control" onchange="previewFile(this, 'project_image_preview')">
        <div id="project_image_preview" class="mt-2"></div>
    </div>
    
    <div class="form-group mb-3">
        <label>Additional Project Images</label>
        <input type="file" name="images[]" class="form-control" multiple>
        <small class="text-muted">You can select multiple images at once.</small>
    </div>

    <div class="form-group mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
        @error('status') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Save Project</button>
</form>
@endsection