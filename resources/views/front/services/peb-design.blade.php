@extends('layout.app')

@section('title', 'PEB Structural Design & Optimisation Consultant | Jaipur')
@section('meta_description', 'Independent PEB structural design, optimisation, and proof checking for manufacturers, fabricators, and developers in Jaipur. Reduce steel weight without cutting into safety margin.')

@section('content')
    <!-- Hero Section -->
    <section class="service-hero" style="background-image: url('{{ asset('front/images/about-bg.webp') }}');">
        <div class="ym_container container py-5">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="section-eyebrow text-info">Steel Structure Engineering</span>
                    <h1 class="text-white display-4 fw-black mb-3">PEB structural design and optimisation</h1>
                    <p class="text-white-50 fs-5 max-w-xl mb-4">
                        Independent pre-engineered building design, structural weight optimisation, and proof checking for
                        developers, fabricators, and contractors across Jaipur and Rajasthan.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="{{ route('contact') }}" class="com_btn">Start Your Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: What It Is -->
    <section class="py-5 bg-white">
        <div class="ym_container container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="section-eyebrow">BEYOND STANDARD FRAMEWORKS</span>
                    <h2 class="fw-bold text-dark mb-3">Engineered Steel Efficiency</h2>
                    <p class="fs-5 text-secondary leading-relaxed mb-0">
                        Pre-engineered building (PEB) structural design covers primary and secondary steel framing, bracing,
                        connections, and foundation reactions for prefabricated steel structures. Stambha provides both
                        original PEB structural design and independent design optimisation or proof checking of designs
                        prepared by PEB manufacturers and fabricators.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden shadow-lg">
                        <img src="{{ asset('front/images/about-bg.webp') }}" alt="PEB Steel Erection"
                            class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Critical Difference Quote Block -->
    <section class="py-4 bg-light">
        <div class="ym_container container">
            <div class="quote-block">
                <h4 class="fw-bold text-dark mb-2">Where Generic PEB Design Goes Wrong</h4>
                <p>
                    Manufacturer-quoted PEB structures are often priced off standard load assumptions that don't reflect
                    actual project requirements. Crane loads, mezzanine additions, equipment vibration, and site-specific
                    wind or seismic conditions all change the required steel section, connection design, and foundation
                    reactions. Skipping independent load verification either overdesigns the structure—making you pay for
                    steel you don't need—or underdesigns it, creating a severe liability after construction.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 4: What We Do -->
    <section class="py-5 bg-white">
        <div class="ym_container container">
            <div class="mb-4">
                <span class="section-eyebrow">OUR PEB SERVICES</span>
                <h2 class="fw-bold text-dark">What We Do</h2>
            </div>
            <div class="service-card-grid">
                <div class="service-card">
                    <div class="card-icon">
                        <img src="{{ asset('front/images/services/Independent-PEB-Structural-Design.svg') }}" alt=""
                            class="img-fluid">
                    </div>
                    <h4>Independent PEB Structural Design</h4>
                    <p>Custom structural design built from project-specific operational loads, avoiding generic manufacturer
                        templates.</p>
                </div>
                <div class="service-card">
                    <div class="card-icon">
                        <img src="{{ asset('front/images/services/Steel-Weight-Optimisation.svg') }}" alt=""
                            class="img-fluid">
                    </div>
                    <h4>Steel Weight Optimisation</h4>
                    <p>Re-engineering existing PEB quotes to reduce structural steel tonnage while maintaining 100% IS code
                        safety factors.</p>
                </div>
                <div class="service-card">
                    <div class="card-icon">
                        <img src="{{ asset('front/images/services/Crane-Load-Integration.svg') }}" alt="" class="img-fluid">
                    </div>
                    <h4>Crane Load Integration</h4>
                    <p>Factoring wheel loads, longitudinal surge, and transverse forces seamlessly into portal frame and
                        column connections.</p>
                </div>
                <div class="service-card">
                    <div class="card-icon">
                        <img src="{{ asset('front/images/services/Matched-Foundation-Design.svg') }}" alt=""
                            class="img-fluid">
                    </div>
                    <h4>Matched Foundation Design</h4>
                    <p>Foundation reaction modeling designed specifically to actual PEB column moments and uplift forces.
                    </p>
                </div>
                <div class="service-card">
                    <div class="card-icon">
                        <img src="{{ asset('front/images/services/Independent-Proof-Checking.svg') }}" alt=""
                            class="img-fluid">
                    </div>
                    <h4>Independent Proof Checking</h4>
                    <p>Rigorous third-party verification of fabricator calculations and shop drawings prior to factory
                        fabrication.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Proof -->
    <section class="py-5 bg-light">
        <div class="ym_container container">
            <div class="mb-4">
                <span class="section-eyebrow">PROJECT PROOF</span>
                <h2 class="fw-bold text-dark">Proven Steel Tonnage Savings</h2>
            </div>
            <div class="proof-card">
                <div class="proof-card-img">
                    <img src="{{ asset('front/images/about-bg.webp') }}" alt="Tata Tiscon PEB Structure">
                </div>
                <div class="proof-card-body">
                    <span class="proof-meta">Mahindra SEZ, Jaipur • 35,000 sq ft • ~6 kg/sq ft Steel Consumption</span>
                    <h3>Tata Tiscon 35,000 sq ft PEB Facility</h3>
                    <p>
                        On recent PEB engineering projects, accurate load analysis and section-level beam/column
                        optimisation brought steel consumption down to roughly <strong>6 kg per sq ft</strong>, compared to
                        the industry benchmark of 8 to 10 kg per sq ft, while fully complying with Indian Standard (IS)
                        codes. The 35,000 sq ft Tata Tiscon crane-loaded warehouse stands as a prime example of
                        project-specific PEB optimization.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: FAQ Accordion -->
    <section class="py-5 bg-white">
        <div class="ym_container container">
            <div class="mb-4">
                <span class="section-eyebrow">FREQUENTLY ASKED QUESTIONS</span>
                <h2 class="fw-bold text-dark">PEB Design & Optimisation FAQs</h2>
            </div>
            <div class="accordion service-faq" id="pebFaq">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="pebFaqHeading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#pebFaqCollapse1" aria-expanded="true" aria-controls="pebFaqCollapse1">
                            Can Stambha optimise a PEB design a manufacturer already quoted?
                        </button>
                    </h2>
                    <div id="pebFaqCollapse1" class="accordion-collapse collapse show" aria-labelledby="pebFaqHeading1"
                        data-bs-parent="#pebFaq">
                        <div class="accordion-body">
                            Yes. We review the manufacturer's load assumptions, structural model, and section sizing, then
                            re-analyse the frame against actual site and operational loads to pinpoint where steel weight
                            can be trimmed without reducing code-required safety margins.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="pebFaqHeading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#pebFaqCollapse2" aria-expanded="false" aria-controls="pebFaqCollapse2">
                            What is PEB proof checking?
                        </button>
                    </h2>
                    <div id="pebFaqCollapse2" class="accordion-collapse collapse" aria-labelledby="pebFaqHeading2"
                        data-bs-parent="#pebFaq">
                        <div class="accordion-body">
                            PEB proof checking is an independent third-party audit and recalculation of critical steel
                            members, connections, base plates, and foundation reactions before steel fabrication begins,
                            giving owners and consultants full confidence in design safety.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 7: CTA Form Panel with Upload Dropzone -->
    <section class="py-5 bg-light" id="peb-cta-form">
        <div class="ym_container container">
            <div class="dark-cta-panel">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <p class="lead-text">
                            Upload your existing PEB drawings, quotation, or layout brief to receive an independent
                            structural optimization evaluation.
                        </p>
                        <ul class="trust-checklist">
                            <li><span class="icon">✓</span> Tonnage Reduction Analysis</li>
                            <li><span class="icon">✓</span> Full IS 800 / IS 875 Code Compliance Check</li>
                            <li><span class="icon">✓</span> Independent Third-Party Stamping Available</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="cta_box">
                            <span class="section-eyebrow text-info">OPTIMISE YOUR STEEL BILL</span>
                            <h2>Get a PEB Design Reviewed</h2>
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