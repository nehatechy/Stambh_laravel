@extends('layout.app')
@section('content', 'Structural Engineering Blog | IS Codes, Design & Site Insights | Stambha')
@section('meta_description', 'Practical structural engineering articles on IS codes, RCC and steel design, structural audits, and site execution, written by Stambha Consultants, Jaipur.')
   <main style="margin-top: 5rem;">
        
        <!-- Section 1: Hero Banner -->
        <section class="inner-banner position-relative overflow-hidden bg-primary-container text-white py-5 d-flex align-items-center" style="min-height: 300px;">
            <div class="blueprint-grid position-absolute top-0 start-0 w-100 h-100 opacity-10 pointer-events-none"></div>
            
            <div class="ym_container position-relative">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="text-white display-3 fw-black mb-3">The Tectonic Journal. <br><span class="font-serif-italic text-info">Insights & Research.</span></h1>
                        <p class="text-white-50 fs-5 max-w-xl">Deep structural analysis, seismic retrofitting research, and carbon-reduction design paradigms.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Blog Posts Grid and Control bar -->
        <section class="py-5" style="background-color: var(--surface-low); padding-top: 80px !important; padding-bottom: 120px !important;">
            <div class="ym_container">
                
                <!-- Search and Categories bar -->
                <div class="row align-items-center mb-5 g-4">
                    <div class="col-md-6">
                        <span class="label-blueprint mb-2 d-inline-block">Technical Archive</span>
                        <!-- <h3 class="fw-black fs-3 m-0">Recent Publications</h3> -->
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="d-flex justify-content-md-end">
                            <input type="text" class="form-control rounded-0 border-0 border-bottom bg-transparent py-2 px-0 text-dark" placeholder="Search publications..." style="border-bottom: 2px solid var(--outline-variant) !important; max-width: 300px; box-shadow: none;">
                        </div>
                    </div> -->
                </div>
                
                                <!-- Grid of Articles -->
                <div class="row g-4">
                    @forelse($blogs as $blog)
                        <div class="col-lg-4 col-md-6 d-flex">
                            <article class="bg-white w-100 d-flex flex-column justify-content-between p-0 shadow-sm border">
                                <div>
                                    <div class="overflow-hidden aspect-video">
                                        <img src="{{ $blog->image ? asset($blog->image) : 'https://via.placeholder.com/800x450?text=Blog+Image' }}" alt="{{ $blog->title }}" class="w-100 object-fit-cover transition-transform duration-500 hover-scale-105">
                                    </div>
                                    <div class="p-4 pb-0">
                                        <span class="label-blueprint mb-2 d-inline-block text-secondary" style="font-size: 0.65rem;">{{ ucfirst($blog->status) }} • {{ $blog->created_at->diffForHumans() }}</span>
                                        <h4 class="fs-5 fw-bold text-dark mb-3">{{ $blog->title }}</h4>
                                        <p class="text-muted fs-6 mb-4 line-clamp-2">{{ $blog->short_description ?: \Illuminate\Support\Str::limit(strip_tags($blog->content), 120) }}</p>
                                    </div>
                                </div>
                                <div class="p-4 pt-0">
                                    <a href="{{ route('blog.show', $blog->slug) }}" class="btn-tectonic-tertiary">Read Full Article</a>
                                </div>
                            </article>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-info">No published blog posts are available yet.</div>
                        </div>
                    @endforelse
                </div>

                <!-- Pagination Controls -->
                <div class="mt-5">
                    {{ $blogs->links() }}
                </div>
            
            </div>
        </section>

        

    </main>