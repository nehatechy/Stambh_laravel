@extends('layout.admin')

@section('page-title', 'Edit Career')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.career.index') }}">Careers</a></li>
    <li class="breadcrumb-item active">Edit Job Opening</li>
@endsection

@section('content')
<div class="">
<!-- <h3 class="mb-4">Edit Job Opening</h3> -->

<form action="{{ route('admin.career.update', $career->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Job Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $career->title) }}">
        </div>
        <div class="col-md-6">
            <label class="form-label">Location</label>
            <input type="text" name="location" class="form-control" value="{{ old('location', $career->location) }}">
        </div>
        <div class="col-md-4">
            <label class="form-label">Job Type</label>
            <select name="job_type" class="form-select">
                <option value="full-time" {{ old('job_type', $career->job_type) == 'full-time' ? 'selected' : '' }}>Full-time</option>
                <option value="part-time" {{ old('job_type', $career->job_type) == 'part-time' ? 'selected' : '' }}>Part-time</option>
                <option value="remote" {{ old('job_type', $career->job_type) == 'remote' ? 'selected' : '' }}>Remote</option>
                <option value="internship" {{ old('job_type', $career->job_type) == 'internship' ? 'selected' : '' }}>Internship</option>
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label">Experience Required</label>
            <input type="text" name="experience_required" class="form-control" value="{{ old('experience_required', $career->experience_required) }}">
        </div>
        <div class="col-md-4">
            <label class="form-label">Status</label>
            <select name="status" class="form-select">
                <option value="active" {{ old('status', $career->status) == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ old('status', $career->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <div class="col-12">
            <label class="form-label">Job Description</label>
            <textarea name="description" class="form-control" rows="6">{{ old('description', $career->description) }}</textarea>
        </div>

        <div class="col-12">
            <label class="form-label">Requirements</label>
            <textarea name="requirements" class="form-control" rows="5">{{ old('requirements', $career->requirements) }}</textarea>
        </div>
    </div>

    <div class="mt-4">
        <button type="submit" class="btn btn-primary">Update Job Opening</button>
    </div>
</form>
</div>
@endsection