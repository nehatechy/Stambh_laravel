@extends('layout.admin')

@section('page-title', 'Blog Posts')

@section('breadcrumb')
    <li class="breadcrumb-item active">Blog</li>
@endsection

@section('page-actions')
    <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-lg me-1"></i> Add Blog Post
    </a>
@endsection

@section('content')

    <div class="card p-3">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
            <form class="d-flex gap-2" method="GET">
                <input type="text" name="search" class="form-control form-control-sm" placeholder="Search posts..." value="{{ request('search') }}">
                <select name="status" class="form-select form-select-sm">
                    <option value="">All Status</option>
                    <option value="published">Published</option>
                    <option value="draft">Draft</option>
                </select>
                <button class="btn btn-sm btn-outline-secondary" type="submit">Filter</button>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Cover</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Published</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($posts ?? [] as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset($post->image) }}" width="48" height="48" class="rounded object-fit-cover" alt=""></td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->author }}</td>
                            <td><span class="badge badge-status-{{ $post->status }}">{{ ucfirst($post->status) }}</span></td>
                            <td>{{ $post->published_at?->format('d M Y') ?? '-' }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.blog.edit', $post->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('admin.blog.destroy', $post->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this post?');">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>1</td>
                            <td><img src="{{ asset('storage/'.$blog->image) }}" class="rounded" alt=""></td>
                            <td>10 Tips to Improve Website Performance</td>
                            <td>Admin</td>
                            <td><span class="badge badge-status-published">Published</span></td>
                            <td>05 Jul 2026</td>
                            <td class="text-end">
                                <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="https://placehold.co/48x48" class="rounded" alt=""></td>
                            <td>Understanding Laravel Middleware</td>
                            <td>Admin</td>
                            <td><span class="badge badge-status-draft">Draft</span></td>
                            <td>-</td>
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
            <small class="text-muted">Showing {{ $posts->firstItem() ?? 1 }}-{{ $posts->lastItem() ?? 2 }} of {{ $posts->total() ?? 2 }}</small>
            {{ $posts->links() ?? '' }}
        </div>
    </div>


@endsection


