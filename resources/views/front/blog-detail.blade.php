@extends('layout.app')

@section('content')
<style>
    h1{
        font-size:3rem;
        font-weight:700;
    }
    .blog-img{
        max-height:800px;
    }
</style>
 <section class="inner-banner position-relative overflow-hidden bg-primary-container text-white py-5 d-flex align-items-center d-none" style="min-height: 350px;">
        <div class="blueprint-grid position-absolute top-0 start-0 w-100 h-100 opacity-10 pointer-events-none"></div>

        <div class="ym_container position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <span class="chip-tectonic mb-3">Insight</span>
                    <h1 class="text-white display-3 fw-black mb-3">Shape the Future of <br><span class="font-serif-italic text-info">Tectonic Engineering.</span></h1>
                    <p class="text-white-50 fs-5 max-w-xl">We operate at the interface of advanced mathematics, material science, and computational design. Join a world-class team.</p>
                </div>
            </div>
        </div>
    </section>
<div style="margin-top: 5rem;">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <article class="mb-5">
                <h1 class="font-serif-italic mb-3">{{ $blog->title }}</h1>
                @if($blog->image)
                    <div class="mb-4">
                        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid blog-img rounded">
                    </div>
                @endif
                @if($blog->short_description)
                    <p class="lead text-muted">{{ $blog->short_description }}</p>
                @endif
                <div class="blog-content">
                    {!! $blog->content !!}
                </div>
            </article>
        </div>
    </div>
</div>
</div>
@endsection
