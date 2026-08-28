@extends('layout.admin')

@section('content')
  <div class="card p-3">
<h3>Career Applications</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Applied For</th>
            <th>Resume</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($applications as $index => $app)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $app->name }}</td>
            <td>{{ $app->email }}</td>
            <td>{{ $app->phone }}</td>
            <td>{{ $app->applied_for }}</td>
                <td>
                    @if($app->resume)
                        <a href="{{ asset('storage/'.$app->resume) }}" target="_blank" class="d-inline-flex align-items-center">
                            <i class="bi bi-file-earmark-arrow-up me-1"></i> {{ basename($app->resume) }}
                        </a>
                    @else
                        -
                    @endif
                </td>
            <td>{{ $app->created_at->format('d M Y') }}</td>
            <td>
                <a href="{{ route('admin.career-applications.show', $app->id) }}" class="btn btn-sm btn-info">View</a>
                <form action="{{ route('admin.career-applications.destroy', $app->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Delete this application?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection