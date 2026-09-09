@extends('layout.app')

@section('title', 'DPR Preparation Services in Jaipur, Rajasthan | Stambha Consultants')
@section('meta_description', 'Detailed Project Report preparation for infrastructure and government-linked projects in Jaipur and Rajasthan. Technical design, BOQ, cost estimates, and PMC scope.')

@section('content')
<!-- Hero Section (Left-aligned) -->
<section class="service-hero" style="background-image: url('{{ asset('front/images/about-bg.webp') }}');">
    <div class="ym_container container py-5">
        <div class="row align-items-center">
            <div class="col-lg-8 text-start">
                <span class="section-eyebrow text-info">Expert Technical Advisory</span>
                <h1 class="text-white display-4 fw-black mb-3">DPR preparation services in Rajasthan</h1>
                <p class="text-white-50 fs-5 max-w-xl mb-4">
                    Technical design, Bill of Quantities (BOQ), structured cost estimation, and PMC framework for infrastructure and commercial projects across Rajasthan.
                </p>
                <div class="d-flex gap-3 flex-wrap justify-content-start">
                    <a href="{{ route('contact') }}" class="com_btn text-decoration-none">Request Consultation</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Defining the Blueprint -->
<section class="py-5 bg-white">
    <div class="ym_container container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-eyebrow">DEFINING THE BLUEPRINT</span>
                <h2 class="fw-bold text-dark mb-3">Report Architecture Designed for Approval</h2>
                <p class="fs-5 text-secondary leading-relaxed mb-0">
                    A Detailed Project Report (DPR) is the technical and financial document that gets an infrastructure or construction project approved, funded, and handed to contractors. Stambha prepares DPRs covering technical design, BOQ, cost estimates, and PMC scope for infrastructure and government-linked projects across Rajasthan.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="rounded-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('front/images/services/dpr-main.webp') }}" alt="Technical Planning & DPR Drafting" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Core Components of a DPR -->
<section class="py-5 bg-light" id="dpr-components">
    <div class="ym_container container">
        <div class="mb-4">
            <span class="section-eyebrow">DPR FRAMEWORK</span>
            <h2 class="fw-bold text-dark">Core Components of a Detailed Project Report</h2>
        </div>

        <div class="quote-block mb-4">
            <p>
                <strong>Critical Technical Insight:</strong> A weak DPR is one of the most common reasons infrastructure projects stall at the approval stage: incomplete technical sections, cost estimates that don't hold up to financial scrutiny, or a BOQ that doesn't match engineering drawings. Stambha builds each section to survive stringent multi-stage reviews.
            </p>
        </div>

        <div class="service-card-grid">
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/Project-Rationale-Justification.svg') }}" alt="DPR Preparation Services" height="48" width="48">
                </div>
                <h4>Project Rationale & Justification</h4>
                <p>Establishing background, necessity, public/economic utility, and demand forecasting for the infrastructure asset.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/Technical-Design-Structural-Scope.svg') }}" alt="DPR Preparation Services" height="48" width="48">
                </div>
                <h4>Technical Design & Structural Scope</h4>
                <p>Civil, structural, and architectural design drawings, structural modeling, material standards, and codes.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/Bill-of-Quantities.svg') }}" alt="DPR Preparation Services" height="48" width="48">
                </div>
                <h4>Bill of Quantities (BOQ)</h4>
                <p>Precise measurement itemization matching engineering drawings to prevent budget overruns during execution.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/Financial-Modeling-Cost-Estimates.svg') }}" alt="DPR Preparation Services" height="48" width="48">
                </div>
                <h4>Financial Modeling & Cost Estimates</h4>
                <p>Itemized cost estimations aligned with relevant state/national Schedule of Rates (SOR) or funding norms.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/PMC.svg') }}" alt="DPR Preparation Services" height="48" width="48">
                </div>
                <h4>PMC Scope & Contracting Framework</h4>
                <p>Defining Project Management Consultancy parameters, milestone schedules, and quality assurance protocols.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/Environmental-Statutory-Clearance.svg') }}" alt="DPR Preparation Services" height="48" width="48">
                </div>
                <h4>Environmental & Statutory Clearance</h4>
                <p>Addressing environmental impact assessments, regulatory compliance, and local municipal clearances.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Related Services (Cross-link cards) -->
<section class="py-5 bg-white">
    <div class="ym_container container">
        <div class="mb-4">
            <span class="section-eyebrow">END-TO-END CONSULTANCY</span>
            <h2 class="fw-bold text-dark">Related Structural Engineering Services</h2>
        </div>
        <div class="service-card-grid">
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/factory.png') }}" alt="Industrial Structural Engineering" height="48" width="48">
                </div>
                <h4>Industrial Structural Engineering</h4>
                <p>Coordinating complex heavy structures around crane rails, equipment foundations, and mezzanines.</p>
                <a href="{{ route('services.industrial-structural') }}" class="com_btn">Explore Service →</a>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/PEB.svg') }}" alt="PEB Structural Design" height="48" width="48">
                </div>
                <h4>PEB Structural Design</h4>
                <p>Fabrication-ready models and steel tonnage optimisation for pre-engineered steel buildings.</p>
                <a href="{{ route('services.peb-design') }}" class="com_btn">Explore Service →</a>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/DPR.png') }}" alt="DPR Preparation Services" height="48" width="48">
                </div>
                <h4>DPR Preparation Services</h4>
                <p>Accurate BOQ quantities and clear technical 3D sections pulled directly from the model for project reports.</p>
                <a href="{{ route('services.dpr-preparation') }}" class="com_btn">Explore Service →</a>
            </div>
        </div>
    </div>
</section>

<!-- Section 5: FAQ Accordion -->
<section class="py-5 bg-light">
    <div class="ym_container container">
        <div class="mb-4">
            <span class="section-eyebrow">FREQUENTLY ASKED QUESTIONS</span>
            <h2 class="fw-bold text-dark">DPR Preparation FAQs</h2>
        </div>
        <div class="accordion service-faq" id="dprFaq">
            <div class="accordion-item">
                <h2 class="accordion-header" id="dprFaqHeading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#dprFaqCollapse1" aria-expanded="true" aria-controls="dprFaqCollapse1">
                        What is included in a Detailed Project Report?
                    </button>
                </h2>
                <div id="dprFaqCollapse1" class="accordion-collapse collapse show" aria-labelledby="dprFaqHeading1" data-bs-parent="#dprFaq">
                    <div class="accordion-body">
                        A DPR typically includes project background, technical design specs, structural drawings, Bill of Quantities (BOQ), financial cost estimates based on Schedule of Rates (SOR), PMC scope, and regulatory/environmental compliance frameworks.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="dprFaqHeading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dprFaqCollapse2" aria-expanded="false" aria-controls="dprFaqCollapse2">
                        Does Stambha handle DPRs for government or infrastructure projects specifically?
                    </button>
                </h2>
                <div id="dprFaqCollapse2" class="accordion-collapse collapse" aria-labelledby="dprFaqHeading2" data-bs-parent="#dprFaq">
                    <div class="accordion-body">
                        Yes. We handle DPR preparation for public sector infrastructure schemes, institutional developments, as well as private commercial infrastructure projects that require rigorous technical due diligence and structured cost documentation.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="dprFaqHeading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dprFaqCollapse3" aria-expanded="false" aria-controls="dprFaqCollapse3">
                        What preliminary data is needed to start DPR preparation?
                    </button>
                </h2>
                <div id="dprFaqCollapse3" class="accordion-collapse collapse" aria-labelledby="dprFaqHeading3" data-bs-parent="#dprFaq">
                    <div class="accordion-body">
                        Preliminary data includes site land availability/survey maps, proposed building footprint or capacity targets, scheme funding guidelines (if government-backed), and basic geotechnical/soil data.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="dprFaqHeading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dprFaqCollapse4" aria-expanded="false" aria-controls="dprFaqCollapse4">
                        How long does it take to prepare a DPR for an infrastructure project?
                    </button>
                </h2>
                <div id="dprFaqCollapse4" class="accordion-collapse collapse" aria-labelledby="dprFaqHeading4" data-bs-parent="#dprFaq">
                    <div class="accordion-body">
                        Preparation timelines range from 2 to 6 weeks depending on project complexity, environmental survey requirements, and the depth of structural design verification needed.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 6: CTA Form Panel -->
<section class="py-5 bg-white" id="dpr-cta-form">
    <div class="ym_container container">
        <div class="dark-cta-panel">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <span class="section-eyebrow text-info">STRUCTURED DOCUMENTATION</span>
                    <h2>Request a DPR Consultation</h2>
                    <p class="lead-text">
                        Initiate technical due diligence and DPR drafting for your upcoming infrastructure or commercial development.
                    </p>
                    <ul class="trust-checklist">
                        <li><span class="icon">✓</span> Multi-Stage Technical & Financial Verification</li>
                        <li><span class="icon">✓</span> Schedule of Rates (SOR) Compliant Estimates</li>
                        <li><span class="icon">✓</span> End-to-End Continuity from Report to Site PMC</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="cta_box">
                        <span class="section-eyebrow text-info">STRUCTURED DOCUMENTATION</span>
                        <h2>Request a DPR Consultation</h2>
                        <a href="{{ route('contact') }}" class="Btn3">Send Request 
                            <svg class="svg" viewBox="0 0 512 512">
                                <path d="M502.6 273.4L302.6 473.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L402.7 282.7H32c-17.7 0-32-14.3-32-32s14.3-32 32-32h370.7L257.4 83.9c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l200 200c12.5 12.5 12.5 32.8-.1 45.3z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
