@extends('layout.admin')

@section('page-title', 'Projects')

@section('breadcrumb')
    <li class="breadcrumb-item active">Projects</li>
@endsection

@section('page-actions')
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg me-1"></i> Add Project
    </a>
@endsection

@section('content')

    <div class="card p-3">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
            <form class="d-flex gap-2" method="GET">
                <input type="text" name="search" class="form-control form-control-sm" placeholder="Search projects..." value="{{ request('search') }}">
                <select name="status" class="form-select form-select-sm">
                    <option value="">All Status</option>
                    <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
                <button class="btn btn-sm btn-outline-secondary" type="submit">Filter</button>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Thumbnail</th>
                        <th>Title</th>
                        <!-- <th>Category</th> -->
                        <th>Status</th>
                        <!-- <th>Created</th> -->
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projects ?? [] as $project)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset($project->image) }}" width="48" height="48" class="rounded object-fit-cover" alt=""></td>
                            <td>{{ $project->title }}</td>
                            <!-- <td>{{ $project->category }}</td> -->
                            <td>
                                <form action="{{ route('admin.projects.updateStatus', $project->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                                        <option value="active" {{ $project->status == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $project->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </form>
                            </td>
                            <!-- <td>{{ $project->created_at->format('d M Y') }}</td> -->
                            <td class="text-end">
                                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this project?');">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        {{-- Sample rows for preview --}}
                        <tr>
                            <td>1</td>
                            <td><img src="https://placehold.co/48x48" class="rounded" alt=""></td>
                            <td>E-commerce Platform Redesign</td>
                            <td>Web Development</td>
                            <td><span class="badge badge-status-published">Published</span></td>
                            <td>10 Jul 2026</td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="https://placehold.co/48x48" class="rounded" alt=""></td>
                            <td>Mobile Banking App</td>
                            <td>Mobile App</td>
                            <td><span class="badge badge-status-draft">Draft</span></td>
                            <td>08 Jul 2026</td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
            <small class="text-muted">Showing {{ $projects->firstItem() ?? 1 }}-{{ $projects->lastItem() ?? 2 }} of {{ $projects->total() ?? 2 }}</small>
            {{ $projects->links() ?? '' }}
        </div>
    </div>


@endsection



