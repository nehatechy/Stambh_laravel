@extends('layout.app')
@section('title', 'Structural Engineering Projects | RCC, Steel & Industrial | Stambha Consultants')
@section('meta_description', 'RCC apartments, steel warehouses, industrial flooring, and structural retrofits designed by Stambha Consultants in Jaipur, Ajmer, and across Rajasthan. See the project scope and structure type for each.')
@section('content')
<style>
.w_fit{
    width:fit-content;
}
     /* ---------------- GRID WRAPPER ---------------- */
  .projects-grid{
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
  }
 
  @media (max-width: 900px){
    .projects-grid{
      grid-template-columns: 1fr;
    }
  }
 
  /* ---------------- CARD ---------------- */
  .product-card{
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    display: flex;
    flex-direction: row;
  }
 
  .card-image-col{
    width: 42%;
    flex-shrink: 0;
    position: relative;
    background: #000;
  }
 
  .card-image-col .slick-slide img{
    width: 100%;
    height: 280px;
    object-fit: cover;
    display: block;
  }
 
  .card-details-col{
    width: 58%;
    padding: 20px 22px;
    display: flex;
    flex-direction: column;
  }
 
  .sno-badge{
    display: inline-block;
    background: var(--tag-bg);
    color: var(--accent);
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.03em;
    padding: 3px 9px;
    border-radius: 20px;
    margin-bottom: 8px;
    width: fit-content;
  }
 
  .card-details-col h2{
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 10px;
    line-height: 1.35;
  }
 
  .card-meta{
    list-style: none;
    padding: 0;
    margin: 0 0 12px 0;
    font-size: 0.85rem;
    color: var(--dark);
  }
  .card-meta li{
    padding: 3px 0;
    display: flex;
    gap: 6px;
  }
  .card-meta li strong{
    color: var(--muted);
    font-weight: 500;
    flex-shrink: 0;
    width: 78px;
  }
 
  .card-details-col p.remarks{
    color: var(--muted);
    font-size: 0.85rem;
    line-height: 1.55;
    margin-bottom: 14px;
  }
 
  .view-more-btn{
    margin-top: auto;
    align-self: flex-start;
    background: var(--accent);
    color: #fff;
    border: none;
    padding: 9px 20px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 0.88rem;
    cursor: pointer;
    transition: background 0.2s ease;
  }
  .view-more-btn:hover{
    background: #1d4ed8;
    color:#fff;
  }
 
  /* ---------------- RESPONSIVE CARD ---------------- */
  @media (max-width: 640px){
    .product-card{
      flex-direction: column;
    }
    .card-image-col, .card-details-col{
      width: 100%;
    }
    .card-image-col .slick-slide img{
      height: 220px;
    }
  }
 
  /* ---------------- MODAL: FULL WIDTH/HEIGHT ---------------- */
  .full-modal .modal-dialog{
    max-width: 100%;
    width: 100%;
    height: 100%;
    margin: 0;
  }
 
  .full-modal .modal-content{
    height: 100vh;
    border-radius: 0;
    border: none;
    background: #000;
  }
 
  .full-modal .modal-body{
    padding: 0;
    height: 100%;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background: #000;
  }
 
  .modal-backdrop.show{
    opacity: 0.9;
    background-color: #000;
  }
 
  .modal-close-btn{
    position: absolute;
    top: 16px;
    right: 20px;
    z-index: 10;
    background: transparent;
    border: none;
    color: #fff;
    font-size: 2rem;
    line-height: 1;
    cursor: pointer;
    opacity: 0.9;
    transition: opacity 0.2s ease, transform 0.2s ease;
  }
  .modal-close-btn:hover{
    opacity: 1;
    transform: scale(1.1);
  }
 
  /* ---------------- MODAL SLIDER ---------------- */
  .modal-slider-wrap{
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }

  .modal-slider{
    width: 100%;
    max-width: 100%;
    position: relative;
  }
 
  .modal-slide-item{
    width: 100%;
    height: 100vh;
    display: flex !important;
    align-items: center;
    justify-content: center;
    background: #000;
  }
 
  .modal-slide-item img{
    max-width: 100%;
    max-height: 90vh;
    width: auto;
    height: auto;
    object-fit: contain;
    display: block;
    margin: 0 auto;
  }
 
  .modal-slider-wrap .slick-prev,
  .modal-slider-wrap .slick-next{
    width: 44px;
    height: 44px;
    z-index: 10;
  }
  .modal-slider-wrap .slick-prev{ left: 18px; }
  .modal-slider-wrap .slick-next{ right: 18px; }
 
  .modal-slider-wrap .slick-prev:before,
  .modal-slider-wrap .slick-next:before{
    font-size: 40px;
    opacity: 0.9;
    color: #ffffff;
  }
 
  .modal-slider-wrap .slick-dots{
    bottom: 22px;
    z-index: 10;
  }
  .modal-slider-wrap .slick-dots li button:before{
    color: #fff;
    opacity: 0.6;
    font-size: 10px;
  }
  .modal-slider-wrap .slick-dots li.slick-active button:before{
    opacity: 1;
    color: #fff;
  }
</style>
<main style="margin-top: 5rem;">

    <!-- Section 1: Hero Banner -->
    <section class="inner-banner position-relative overflow-hidden bg-primary-container text-white py-5 d-flex align-items-center" style="min-height: 350px;">
        <div class="blueprint-grid position-absolute top-0 start-0 w-100 h-100 opacity-10 pointer-events-none"></div>

        <div class="ym_container position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="text-white display-3 fw-black mb-3">Iconic Landmarks. <br><span class="font-serif-italic text-info">Proven Engineering.</span></h1>
                    <p class="text-white-50 fs-5 max-w-xl">Explore our structural milestone portfolio. We solve high-complexity urban building and infrastructure challenges globally.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Portfolio Grid and Filter -->
    <!-- <section class="py-5 bg-white" style="padding-top: 80px !important; padding-bottom: 120px !important;">
        <div class="ym_container">

            <div class="project-filters">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="high-rise">High-Rise</button>
                <button class="filter-btn" data-filter="bridges">Bridges & Spans</button>
                <button class="filter-btn" data-filter="civic">Civic & Cultural</button>
                <button class="filter-btn" data-filter="sustainability">Sustainability</button>
            </div>

            
             <div class="container">
            <div class="row g-4 mt-2">

                @forelse($projects as $project)
                <div class="col-lg-4 col-md-6 project-card-wrapper">
                    <div class="portfolio-item w-100" data-category="{{ $project->category }}" style="height: 380px;">
                        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="w-100 h-100 object-fit-cover grayscale transition-all duration-700">
                        <div class="portfolio-overlay">
                            <span class="label-blueprint text-white-50 mb-1">{{ $project->client_name }}</span>
                            <h4 class="text-white fs-5 fw-black text-uppercase tracking-wide mb-2">
                                <a href="{{ route('projects.detail', $project->slug) }}" class="text-white text-decoration-none">
                                    {{ $project->title }}
                                </a>
                            </h4>
                           
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-center">No projects found.</p>
                @endforelse

            </div>
          </div>
        </div>
    </section> -->

    <!-- Section 3: Call to Action -->
    <section class="py-5 d-none" style="background-color: var(--primary); padding-top: 100px !important; padding-bottom: 100px !important;">
        <div class="ym_container text-center">
            <span class="label-blueprint text-info mb-3 d-inline-block">Next Phase</span>
            <h2 class="display-5 fw-black text-white mb-4">Have a Complex Project in Mind?</h2>
            <p class="text-white-50 fs-6 max-w-xl mx-auto mb-5">
                Our structural engineers deploy custom analytical tools to resolve height, wind, and carbon constraints on major designs.
            </p>
            <a href="{{ route('contact') }}" class="btn-tectonic-secondary text-decoration-none">Initiate Structural Audit</a>
        </div>
    </section>
    
    <section class="pad-5">
        <div class="container">
            <!-- ==================== GRID WRAPPER ==================== -->
            <div class="projects-grid">
                @forelse($projects as $project)
                    @php
                        $projectImages = []; 
                        if (!empty($project->images) && is_array($project->images)) {
                            $projectImages = $project->images;
                        } elseif ($project->image) {
                            $projectImages[] = $project->image;
                        }

                        $projectType = $project->type ?? ($project->category ? ucfirst(str_replace('-', ' ', $project->category)) : '-');
                        $projectQuantity = $project->size ?? $project->quantity ?? $project->duration ?? '-';
                        $projectCategory = $project->category ? ucfirst(str_replace('-', ' ', $project->category)) : '-';
                    @endphp

                    <div class="product-card">
                        <div class="card-image-col">
                            <div class="card-slider" data-slider-id="{{ $project->id }}">
                                @foreach($projectImages as $image)
                                    <div><img src="{{ asset($image) }}" alt="{{ $project->title }}" loading="lazy"></div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-details-col">
                            <span class="sno-badge">Project {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <h2>{{ $project->title }}</h2>
                            <ul class="card-meta">
                                <li><strong>Location</strong> {{ $project->location ?? '-' }}</li>
                                <li><strong>Size</strong> {{ $projectQuantity }}</li>
                                <!--<li><strong>Type</strong> {{ $projectType }}</li>-->
                                <!--<li><strong>Category</strong> {{ $projectCategory }}</li>-->
                            </ul>
                            <p class="remarks">{{ $project->description ?? 'Project details available in the project overview.' }}</p>
                            <!--<button type="button" class="view-more-btn" >View More</button>-->
                            <a data-bs-toggle="modal" data-bs-target="#projectModal{{ $project->id }}" class="com_btn w_fit"> View More</a>
                        </div>
                    </div>

                    <div class="modal full-modal fade" id="projectModal{{ $project->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="modal-close-btn" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                                    <div class="modal-slider-wrap">
                                        <div class="modal-slider">
                                            @foreach($projectImages as $image)
                                                <div class="modal-slide-item"><img src="{{ asset($image) }}" alt="{{ $project->title }}" /></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">No projects found.</div>
                @endforelse
            </div>
        </div>
    </section>

</main>

@endsection
