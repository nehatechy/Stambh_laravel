@extends('layout.admin')

@section('page-title', 'Dashboard')

@section('content')
<div class="main-content">
<div class="container">
        <div class="row g-3 mb-4">
        <div class="col-6 col-md-6">
            <div class="stat-card h-100 p-3">
                <div class="d-flex align-items-center gap-3">
                    <div class="stat-icon" style="background:#4f46e5;">
                        <i class="bi bi-kanban"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Projects</div>
                        <h4 class="mb-0">{{ $projectsCount ?? 24 }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-6">
            <div class="stat-card h-100 p-3">
                <div class="d-flex align-items-center gap-3">
                    <div class="stat-icon" style="background:#0ea5e9;">
                        <i class="bi bi-file-earmark-text"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Blog Posts</div>
                        <h4 class="mb-0">{{ $blogCount ?? 38 }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-6">
            <div class="stat-card h-100 p-3">
                <div class="d-flex align-items-center gap-3">
                    <div class="stat-icon" style="background:#f59e0b;">
                        <i class="bi bi-briefcase"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Open Careers</div>
                        <h4 class="mb-0">{{ $careerCount ?? 6 }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-6">
            <div class="stat-card h-100 p-3">
                <div class="d-flex align-items-center gap-3">
                    <div class="stat-icon" style="background:#ef4444;">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div>
                        <div class="text-muted small">New Inquiries</div>
                        <h4 class="mb-0">{{ $newInquiriesCount ?? 5 }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row g-3">
        <div class="col-lg-7">
           
                <h6 class="mb-3">Recent Contact Inquiries</h6>
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($recentInquiries ?? [] as $inquiry)
                                <tr>
                                    <td>{{ $inquiry->name }}</td>
                                    <td>{{ $inquiry->subject }}</td>
                                    <td>{{ $inquiry->created_at->format('d M Y') }}</td>
                                    <td>
                                        <span class="badge badge-status-{{ $inquiry->status }}">
                                            {{ ucfirst($inquiry->status) }}
                                        </span>
                                    </td>
                                </tr>
                            @empty
                                <tr><td>John Doe</td><td>Project Quote Request</td><td>12 Jul 2026</td><td><span class="badge badge-status-new">New</span></td></tr>
                                <tr><td>Sarah Khan</td><td>Partnership Inquiry</td><td>11 Jul 2026</td><td><span class="badge badge-status-read">Read</span></td></tr>
                                <tr><td>Mike Ross</td><td>Support Question</td><td>10 Jul 2026</td><td><span class="badge badge-status-new">New</span></td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            
        </div>

        <div class="col-lg-5">
            
                <h6 class="mb-3">Latest Job Applications</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        Frontend Developer <span class="badge badge-status-open">Open</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        UI/UX Designer <span class="badge badge-status-open">Open</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                        Backend Engineer <span class="badge badge-status-closed">Closed</span>
                    </li>
                </ul>
            
        </div>
    </div> -->

</div>
</div>
@endsection