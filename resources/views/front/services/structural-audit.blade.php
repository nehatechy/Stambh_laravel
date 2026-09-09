@extends('layout.app')

@section('title', 'Structural Audit Services in Jaipur | NDT Testing & Rehabilitation')
@section('meta_description', 'Structural audits, NDT testing, and building rehabilitation in Jaipur. Assess cracks, corrosion, and settlement, then strengthen the structure with an engineered plan.')

@section('content')
    <!-- Hero Section -->
    <section class="service-hero" style="background-image: url('{{ asset('front/images/about-bg.webp') }}');">
        <div class="ym_container container py-5">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="section-eyebrow text-info">Structural Engineering & Health Assessment</span>
                    <h1 class="text-white display-4 fw-black mb-3">Structural audit and rehabilitation services in Jaipur
                    </h1>
                    <p class="text-white-50 fs-5 max-w-xl mb-4">
                        Assess structural cracks, concrete corrosion, and settlement issues. We provide non-destructive
                        testing (NDT) and engineered strengthening plans across Jaipur and Rajasthan.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="{{ route('contact') }}" class="com_btn text-decoration-none">Request Audit</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: What It Is -->
    <section class="py-5 bg-white">
        <div class="ym_container container">
            <div class="row align-items-center g-4">
                <div class="col-lg-5">
                    <span class="section-eyebrow">WHAT IT IS</span>
                    <h2 class="fw-bold text-dark display-6">Engineering Assessment & Lifecycle Protection</h2>
                </div>
                <div class="col-lg-7">
                    <p class="fs-5 text-secondary leading-relaxed mb-0">
                        A structural audit is an engineering assessment of an existing building's condition and
                        load-carrying capacity, using visual inspection and non-destructive testing (NDT) to find cracking,
                        corrosion, settlement, or deterioration before they become safety risks. Stambha carries out audits
                        on residential, commercial, and industrial buildings across Jaipur and Rajasthan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: When It's Required -->
    <section class="py-5 bg-light">
        <div class="ym_container container">
            <div class="mb-4">
                <span class="section-eyebrow">WHEN IT'S REQUIRED</span>
                <h2 class="fw-bold text-dark">Key Triggers for a Building Audit</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="d-flex gap-3 p-3 bg-white border rounded-3 h-100">
                        <div class="text-primary fs-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg></div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">Visible Structural Cracks</h5>
                            <p class="text-muted small mb-0">Cracks occurring in structural walls, main support beams,
                                columns, or floor slabs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex gap-3 p-3 bg-white border rounded-3 h-100">
                        <div class="text-primary fs-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg></div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">Corrosion & Spalling Concrete</h5>
                            <p class="text-muted small mb-0">Signs of rusted steel reinforcement bars exposing flaky
                                concrete fragments.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex gap-3 p-3 bg-white border rounded-3 h-100">
                        <div class="text-primary fs-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg></div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">Uneven Foundation Settlement</h5>
                            <p class="text-muted small mb-0">Buildings showing signs of differential settlement or ground
                                movement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex gap-3 p-3 bg-white border rounded-3 h-100">
                        <div class="text-primary fs-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg></div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">Change in Building Occupancy</h5>
                            <p class="text-muted small mb-0">Modifications increasing design load (e.g. converting
                                residential spaces to commercial use).</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex gap-3 p-3 bg-white border rounded-3 h-100">
                        <div class="text-primary fs-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg></div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">Renovation & Floor Addition</h5>
                            <p class="text-muted small mb-0">Pre-requisite check before starting major extension or vertical
                                floor additions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex gap-3 p-3 bg-white border rounded-3 h-100">
                        <div class="text-primary fs-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg></div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">Aging Structures (25-30+ Years)</h5>
                            <p class="text-muted small mb-0">Mandatory health assessment for older structures without prior
                                engineering records.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex gap-3 p-3 bg-white border rounded-3 h-100">
                        <div class="text-primary fs-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg></div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">Post-Monsoon & Seismic Events</h5>
                            <p class="text-muted small mb-0">Precautionary inspection following extreme weather, flooding,
                                or seismic tremors.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: What We Check -->
    <section class="py-5 bg-white">
        <div class="ym_container container">
            <div class="mb-4">
                <span class="section-eyebrow">WHAT WE CHECK</span>
                <h2 class="fw-bold text-dark">NDT Testing & Diagnostics</h2>
            </div>
            <div class="service-card-grid">
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.7518 15L7.03553 26.7162C6.7893 26.9626 6.49697 27.158 6.17523 27.2913C5.85348 27.4246 5.50862 27.4933 5.16035 27.4933C4.45697 27.4935 3.78235 27.2142 3.2849 26.7169C2.78746 26.2196 2.50793 25.5451 2.50781 24.8417C2.5077 24.1383 2.787 23.4637 3.28428 22.9662L15.0018 11.25"
                                stroke="black" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22.5 18.75L27.5 13.75" stroke="black" stroke-width="2.25" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M26.875 14.375L24.4825 11.9825C24.0136 11.5138 23.7501 10.878 23.75 10.215V9.785C23.7499 9.12201 23.4864 8.48623 23.0175 8.0175L20.9462 5.94625C19.5402 4.54039 17.6333 3.75042 15.645 3.75H11.25L12.8038 5.30375C14.2099 6.71015 14.9999 8.61747 15 10.6062V12.5L17.5 15H18.965C19.628 15.0001 20.2638 15.2636 20.7325 15.7325L23.125 18.125"
                                stroke="black" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h4>Rebound Hammer Test</h4>
                    <p>Surface concrete compressive strength testing to evaluate uniformity and structural quality across
                        elements.</p>
                </div>
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 12.5V2.5" stroke="black" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M20 7.5L15 12.5L10 7.5" stroke="black" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M2.5 18.75C3.25 19.375 4 20 5.625 20C8.75 20 8.75 17.5 11.875 17.5C15.125 17.5 14.875 20 18.125 20C21.25 20 21.25 17.5 24.375 17.5C26 17.5 26.75 18.125 27.5 18.75"
                                stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M2.5 26.25C3.25 26.875 4 27.5 5.625 27.5C8.75 27.5 8.75 25 11.875 25C15.125 25 14.875 27.5 18.125 27.5C21.25 27.5 21.25 25 24.375 25C26 25 26.75 25.625 27.5 26.25"
                                stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h4>Ultrasonic Pulse Velocity (UPV)</h4>
                    <p>Determines internal concrete homogeneity, detecting hidden voids, honeycombing, and internal cracks.
                    </p>
                </div>
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.7985 3.59978C17.9467 2.49189 14.8007 2.3984 11.8882 3.33501C8.9757 4.27161 6.47389 6.18132 4.80246 8.74378C3.13103 11.3062 2.39166 14.3656 2.70838 17.4085C3.02511 20.4515 4.37867 23.2929 6.54198 25.4562C8.7053 27.6196 11.5468 28.9731 14.5897 29.2898C17.6327 29.6066 20.692 28.8672 23.2544 27.1958C25.8169 25.5243 27.7266 23.0225 28.6632 20.11C29.5998 17.1975 29.5063 14.0515 28.3985 11.1998"
                                stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M15.9987 18.6668C17.4715 18.6668 18.6654 17.4729 18.6654 16.0002C18.6654 14.5274 17.4715 13.3335 15.9987 13.3335C14.5259 13.3335 13.332 14.5274 13.332 16.0002C13.332 17.4729 14.5259 18.6668 15.9987 18.6668Z"
                                stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17.8672 14.1332L25.3339 6.6665" stroke="black" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h4>Half-Cell Potential Testing</h4>
                    <p>Measures electrical potential to assess active corrosion probability in underlying steel
                        reinforcement bars.</p>
                </div>
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.5 22.5C12.8315 22.5 13.1495 22.6317 13.3839 22.8661C13.6183 23.1005 13.75 23.4185 13.75 23.75V26.25C13.75 26.5815 13.6183 26.8995 13.3839 27.1339C13.1495 27.3683 12.8315 27.5 12.5 27.5H6.25C5.25544 27.5 4.30161 27.1049 3.59835 26.4017C2.89509 25.6984 2.5 24.7446 2.5 23.75C2.5 23.4185 2.6317 23.1005 2.86612 22.8661C3.10054 22.6317 3.41848 22.5 3.75 22.5H12.5Z"
                                stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M16.25 12.5H5C4.33696 12.5 3.70107 12.2366 3.23223 11.7678C2.76339 11.2989 2.5 10.663 2.5 10V5C2.5 4.33696 2.76339 3.70107 3.23223 3.23223C3.70107 2.76339 4.33696 2.5 5 2.5H16.25C16.5815 2.5 16.8995 2.6317 17.1339 2.86612C17.3683 3.10054 17.5 3.41848 17.5 3.75V11.25C17.5 11.5815 17.3683 11.8995 17.1339 12.1339C16.8995 12.3683 16.5815 12.5 16.25 12.5ZM16.25 12.5L15.2375 16.5525C15.17 16.823 15.014 17.0633 14.7943 17.2349C14.5746 17.4066 14.3038 17.4999 14.025 17.5H10"
                                stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M17.5 5H21.25C21.5815 5 21.8995 5.1317 22.1339 5.36612C22.3683 5.60054 22.5 5.91848 22.5 6.25V8.75C22.5 9.08152 22.3683 9.39946 22.1339 9.63388C21.8995 9.8683 21.5815 10 21.25 10H17.5"
                                stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M22.5 7.5H27.5" stroke="black" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M6.25 12.5L3.75 22.5" stroke="black" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M8.75 22.5L11.25 12.5" stroke="black" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h4>Core Extraction & Testing</h4>
                    <p>Direct lab testing of extracted concrete core samples for definitive compressive strength
                        verification.</p>
                </div>
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 8.75V27.5" stroke="black" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M2.5 15C2.49941 15.2391 2.5674 15.4733 2.6959 15.6749C2.8244 15.8766 3.00803 16.0371 3.225 16.1375L9.59125 19.0325"
                                stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M27.5017 15C27.5036 15.2426 27.4349 15.4805 27.304 15.6847C27.173 15.8889 26.9855 16.0505 26.7642 16.15L20.418 19.035"
                                stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M10.001 12.9626L3.25101 9.8876C3.02883 9.78996 2.83988 9.62976 2.70722 9.42655C2.57455 9.22334 2.50391 8.9859 2.50391 8.74322C2.50391 8.50054 2.57455 8.2631 2.70722 8.05989C2.83988 7.85668 3.02883 7.69648 3.25101 7.59885L13.9635 2.72385C14.2893 2.57548 14.6432 2.49881 15.0011 2.49902C15.3591 2.49924 15.7129 2.57634 16.0385 2.7251L26.776 7.6126C26.9982 7.71023 27.1871 7.87043 27.3198 8.07364C27.4525 8.27685 27.5231 8.51429 27.5231 8.75697C27.5231 8.99965 27.4525 9.23709 27.3198 9.4403C27.1871 9.64351 26.9982 9.80371 26.776 9.90135L20.036 12.9638"
                                stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M11.25 23.75L15 27.5L18.75 23.75" stroke="black" stroke-width="3"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h4>Carbonation Depth Testing</h4>
                    <p>Checks chemical degradation depth in concrete to determine loss of rebar corrosion protection.</p>
                </div>
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.5 18.75V15" stroke="black" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M17.5 18.75V15" stroke="black" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M22.5 18.75V15" stroke="black" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M2.5 10V5" stroke="black" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M27.5 7.5H2.5" stroke="black" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M27.5 10V5" stroke="black" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.5 18.75V15" stroke="black" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M25 15H5C3.61929 15 2.5 16.1193 2.5 17.5V22.5C2.5 23.8807 3.61929 25 5 25H25C26.3807 25 27.5 23.8807 27.5 22.5V17.5C27.5 16.1193 26.3807 15 25 15Z"
                                stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </div>
                    <h4>Structural Capacity Evaluation</h4>
                    <p>Structural modeling and distress mapping against present and proposed future loading scenarios.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Process -->
    <section class="py-5 bg-light">
        <div class="ym_container container">
            <div class="mb-4">
                <span class="section-eyebrow">PROCESS</span>
                <h2 class="fw-bold text-dark">Our Audit & Rehabilitation Workflow</h2>
            </div>
            <div class="process-timeline">
                <div class="timeline-step">
                    <div class="step-box">1</div>
                    <h5 class="step-title">Visual Inspection</h5>
                </div>
                <div class="timeline-step">
                    <div class="step-box">2</div>
                    <h5 class="step-title">NDT Testing</h5>
                </div>
                <div class="timeline-step">
                    <div class="step-box">3</div>
                    <h5 class="step-title">Core Extraction</h5>
                </div>
                <div class="timeline-step">
                    <div class="step-box">4</div>
                    <h5 class="step-title">Lab Analysis</h5>
                </div>
                <div class="timeline-step">
                    <div class="step-box">5</div>
                    <h5 class="step-title">Structural Modeling</h5>
                </div>
                <div class="timeline-step">
                    <div class="step-box">6</div>
                    <h5 class="step-title">Rehab Design</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: Project Proof -->
    <section class="py-5 bg-white">
        <div class="ym_container container">
            <div class="mb-4">
                <span class="section-eyebrow">PROJECT PROOF</span>
                <h2 class="fw-bold text-dark">Proven Engineering Outcomes</h2>
            </div>
            <div class="proof-card">
                <div class="proof-card-img">
                    <img src="{{ asset('front/images/services/Rajapark-Residential-Apartment-Refit.png') }}" alt="Rajapark Apartment Rehabilitation">
                </div>
                <div class="proof-card-body">
                    <span class="proof-meta">Rajapark, Jaipur • 17,860 sq ft</span>
                    <h3>Rajapark Residential Apartment Refit</h3>
                    <p>
                        Stambha assessed an existing 17,860 sq ft residential apartment building experiencing structural
                        distress. Our team designed a composite RCC and steel strengthening solution precisely sized to its
                        required loads, an engineered approach that completely avoided full structural demolition while
                        guaranteeing long-term safety compliance.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 7: FAQ Accordion -->
    <section class="py-5 bg-light">
        <div class="ym_container container">
            <div class="mb-4">
                <span class="section-eyebrow">FREQUENTLY ASKED QUESTIONS</span>
                <h2 class="fw-bold text-dark">Got Questions? We Have Answers.</h2>
            </div>
            <div class="accordion service-faq" id="auditFaq">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                            How much does a structural audit cost in Jaipur?
                        </button>
                    </h2>
                    <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1"
                        data-bs-parent="#auditFaq">
                        <div class="accordion-body">
                            Cost depends on building size, structure type, age, and the scope of NDT tests required. Share
                            your building's size and specific concerns through our form for a customized, transparent quote.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                            How long does a structural audit take?
                        </button>
                    </h2>
                    <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2"
                        data-bs-parent="#auditFaq">
                        <div class="accordion-body">
                            A typical residential or small commercial building audit takes 3 to 7 working days from site
                            inspection to final report submission, depending on NDT test volume and laboratory turnaround
                            times.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                            What is the difference between a structural audit and a structural peer review?
                        </button>
                    </h2>
                    <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3"
                        data-bs-parent="#auditFaq">
                        <div class="accordion-body">
                            An audit assesses an existing physical building's current condition and load capacity. A peer
                            review independently verifies structural calculations and engineering drawings for a new design
                            prior to construction. Stambha provides both services.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                            Can a building be strengthened instead of demolished?
                        </button>
                    </h2>
                    <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4"
                        data-bs-parent="#auditFaq">
                        <div class="accordion-body">
                            In most cases, yes. Engineered RCC jacketing, micro-sheathing, or steel section retrofits can
                            restore or increase load capacity safely. Audit findings determine whether retrofitting is
                            viable or if reconstruction is necessary.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 8: CTA Form Panel -->
    <section class="py-5 bg-white" id="audit-cta-form">
        <div class="ym_container container">
            <div class="dark-cta-panel">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <p class="lead-text">
                            Connect directly with our senior structural consultants in Jaipur. Tell us about your building
                            and receive an initial technical assessment strategy.
                        </p>
                        <ul class="trust-checklist">
                            <li><span class="icon">✓</span> Certified NDT Field Equipment & Analysis</li>
                            <li><span class="icon">✓</span> Licensed Structural Engineers in Rajasthan</li>
                            <li><span class="icon">✓</span> Actionable Repair & Retrofit Engineering</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="cta_box">
                            <span class="section-eyebrow text-info">ENGINEERED INTEGRITY</span>
                            <h2>Request a Structural Audit</h2>
                            <a href="{{ route('contact') }}" class="Btn3">Send Request
                                <svg class="svg" viewBox="0 0 512 512">
                                    <path
                                        d="M502.6 273.4L302.6 473.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L402.7 282.7H32c-17.7 0-32-14.3-32-32s14.3-32 32-32h370.7L257.4 83.9c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l200 200c12.5 12.5 12.5 32.8-.1 45.3z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection