@extends('layout.app')

@section('content')
<main style="margin-top: 5rem;">
    <section class="pjd_header">
        <div class="ym_container">
            <span class="label-blueprint mb-3 d-inline-block">
                {{ $project->category ? ucfirst(str_replace('-', ' ', $project->category)) : '' }}
            </span>
            <h1 class="text-white display-2 fw-black mb-4">
                <span class="font-serif-italic text-dark">{{ $project->title }}</span>
            </h1>
            @if($project->image)
                <div class="mt-3">
                    <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="img-fluid w-100">
                </div>
            @endif
        </div>
    </section>

    <section class="pjd_desc">
        <div class="ym_container">
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="display-2 fw-black mb-4">
                        <span class="font-serif-italic text-info">{{ $project->title }}</span>
                    </h2>
                    <p>Client Name: <strong>{{ $project->client_name ?? '-' }}</strong></p>
                </div>
                <div class="col-lg-8">
                    <p>{!! nl2br(e($project->description)) !!}</p>

                    <table class="details-table">
                        <tr>
                            <td class="label">Location</td>
                            <td class="value">{{ $project->location ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Duration</td>
                            <td class="value">{{ $project->duration ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Size</td>
                            <td class="value">{{ $project->size ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Year</td>
                            <td class="value">{{ $project->year ?? '-' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Category</td>
                            <td class="value">{{ $project->category ? ucfirst(str_replace('-', ' ', $project->category)) : '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="pjd_gallery">
        <div class="ym_container">
            <h2 class="display-5 fw-black m-0 text-center">Gallery</h2>
            <div class="pjd_grid">
                @php
                    $galleryImages = [];
                    if (!empty($project->images) && is_array($project->images)) {
                        $galleryImages = $project->images;
                    } elseif ($project->image) {
                        $galleryImages[] = $project->image;
                    }
                @endphp

                @forelse($galleryImages as $image)
                    <img src="{{ asset($image) }}" alt="{{ $project->title }}" class="img-fluid">
                @empty
                    <p class="text-center w-100">No gallery images available.</p>
                @endforelse
            </div>
        </div>
    </section>
</main>
@endsection