
@extends('layout.admin')

@section('page-title', 'Create Job Opening')

@section('content')

<!-- <h3>Add New Job Opening</h3> -->

<form action="{{ route('admin.career.store') }}" method="POST">
    @csrf

    <div class="form-group mb-3">
        <label>Job Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="form-group mb-3">
        <label>Location</label>
        <input type="text" name="location" class="form-control" value="{{ old('location') }}">
    </div>

    <div class="form-group mb-3">
        <label>Job Type</label>
        <select name="job_type" class="form-control">
            <option value="full-time">Full-time</option>
            <option value="part-time">Part-time</option>
            <option value="remote">Remote</option>
            <option value="internship">Internship</option>
        </select>
    </div>

    <div class="form-group mb-3">
        <label>Experience Required</label>
        <input type="text" name="experience_required" class="form-control" placeholder="e.g. 2-3 years" value="{{ old('experience_required') }}">
    </div>

    <div class="form-group mb-3">
        <label>Job Description</label>
        <textarea name="description" class="form-control" rows="6">{{ old('description') }}</textarea>
        @error('description') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="form-group mb-3">
        <label>Requirements</label>
        <textarea name="requirements" class="form-control" rows="5">{{ old('requirements') }}</textarea>
        @error('requirements') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="form-group mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Save Job Opening</button>
</form>
@endsection
