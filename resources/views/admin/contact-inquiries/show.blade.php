@extends('layout.admin')

@section('page-title', 'Contact Inquiry Details')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="mb-4 d-flex justify-content-between align-items-center">
            <div>
                <h5 class="card-title mb-1">{{ $contactInquiry->full_name }}</h5>
                <p class="text-muted mb-0">Submitted on {{ $contactInquiry->created_at->format('d M Y H:i') }}</p>
            </div>
            <a href="{{ route('admin.contact-inquiries.index') }}" class="btn btn-sm btn-outline-secondary">Back</a>
        </div>

        <dl class="row">
            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $contactInquiry->email }}</dd>

            <dt class="col-sm-3">Contact Number</dt>
            <dd class="col-sm-9">{{ $contactInquiry->contact_number }}</dd>

            <dt class="col-sm-3">Project Type</dt>
            <dd class="col-sm-9">{{ $contactInquiry->project_type }}</dd>

            <dt class="col-sm-3">Message</dt>
            <dd class="col-sm-9"><div class="p-3 bg-light rounded">{!! nl2br(e($contactInquiry->message)) !!}</div></dd>
        </dl>

        <form action="{{ route('admin.contact-inquiries.destroy', $contactInquiry) }}" method="POST" onsubmit="return confirm('Delete this inquiry?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Inquiry</button>
        </form>
    </div>
</div>
@endsection
