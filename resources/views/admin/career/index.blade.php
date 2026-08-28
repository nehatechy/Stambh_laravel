@extends('layout.admin')

@section('page-title', 'Careers')

@section('breadcrumb')
    <li class="breadcrumb-item active">Careers</li>
@endsection

@section('page-actions')
    <a href="{{ route('admin.career.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg me-1"></i> Add Job Opening
    </a>
@endsection

@section('content')

    <ul class="nav nav-tabs mb-3" role="tablist">
        <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#jobs-pane">Job Openings</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#applications-pane">Applications</button>
        </li>
    </ul>

    <div class="tab-content">

        {{-- Job Openings --}}
        <div class="tab-pane fade show active" id="jobs-pane">
            <div class="card p-3">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Type</th>
                                <th>Experience</th>
                                <th>Status</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($jobs ?? [] as $job)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $job->title }}</td>
                                    <td>{{ $job->location }}</td>
                                    <td>{{ $job->job_type }}</td>
                                    <td>{{ $job->experience_required }}</td>
                                    <td><span class="badge badge-status-{{ $job->status }}">{{ ucfirst($job->status) }}</span></td>
                                    <td class="text-end">
                                        <a href="{{ route('admin.career.edit', $job->id) }}" class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('admin.career.destroy', $job->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this job?');">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>1</td>
                                    <td>Frontend Developer</td>
                                    <td>Mumbai (Hybrid)</td>
                                    <td>Full-time</td>
                                    <td>2-3 years</td>
                                    <td><span class="badge badge-status-open">Open</span></td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>UI/UX Designer</td>
                                    <td>Remote</td>
                                    <td>Contract</td>
                                    <td>1-2 years</td>
                                    <td><span class="badge badge-status-closed">Closed</span></td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Applications --}}
        <div class="tab-pane fade" id="applications-pane">
            <div class="card p-3">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Applicant</th>
                                <th>Applied For</th>
                                <th>Email</th>
                                <th>Resume</th>
                                <th>Applied On</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($applications ?? [] as $app)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $app->name }}</td>
                                    <td>{{ $app->job_title }}</td>
                                    <td>{{ $app->email }}</td>
                                    <td><a href="{{ $app->resume_url }}" target="_blank">View</a></td>
                                    <td>{{ $app->created_at->format('d M Y') }}</td>
                                    <td class="text-end">
                                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-eye"></i></button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>1</td>
                                    <td>Aarav Shah</td>
                                    <td>Frontend Developer</td>
                                    <td>aarav@example.com</td>
                                    <td><a href="#">View</a></td>
                                    <td>09 Jul 2026</td>
                                    <td class="text-end"><button class="btn btn-sm btn-outline-secondary"><i class="bi bi-eye"></i></button></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Add / Edit Job Modal --}}

@endsection