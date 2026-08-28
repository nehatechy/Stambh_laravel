@extends('layout.admin')

@section('content')
<h3>Application Details</h3>

<table class="table table-bordered">
    <tr><th>Name</th><td>{{ $application->name }}</td></tr>
    <tr><th>Email</th><td>{{ $application->email }}</td></tr>
    <tr><th>Phone</th><td>{{ $application->phone }}</td></tr>
    <tr><th>Applied For</th><td>{{ $application->applied_for }}</td></tr>
    <tr><th>Cover Message</th><td>{{ $application->cover_message }}</td></tr>
    <tr><th>Resume</th><td><a href="{{ asset('storage/'.$application->resume) }}" target="_blank">Download Resume</a></td></tr>
    <tr><th>Applied On</th><td>{{ $application->created_at->format('d M Y, h:i A') }}</td></tr>
</table>

<a href="{{ route('admin.career-applications.index') }}" class="btn btn-secondary">Back</a>
@endsection