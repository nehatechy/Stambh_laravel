@extends('layout.admin')

@section('page-title', 'Contact Inquiries')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="card-title mb-0">Contact Inquiries</h5>
            <span class="text-muted">{{ $contactInquiries->total() }} total</span>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Project Type</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contactInquiries as $inquiry)
                        <tr>
                            <td>{{ $inquiry->full_name }}</td>
                            <td>{{ $inquiry->email }}</td>
                            <td>{{ $inquiry->contact_number }}</td>
                            <td>{{ $inquiry->project_type }}</td>
                            <td>{{ $inquiry->created_at->format('d M Y') }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.contact-inquiries.show', $inquiry) }}" class="btn btn-sm btn-outline-primary me-2">View</a>
                                <form action="{{ route('admin.contact-inquiries.destroy', $inquiry) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Delete this inquiry?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No contact inquiries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            {{ $contactInquiries->links() }}
        </div>
    </div>
</div>
@endsection
