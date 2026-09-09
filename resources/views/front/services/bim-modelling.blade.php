@extends('layout.app')

@section('title', 'Structural BIM Services in Jaipur | 3D Modeling & Coordination | Stambha')
@section('meta_description', 'BIM modelling for structural projects in Jaipur — coordinated 3D structural models, clash detection, and fabrication-ready detailing that catch conflicts before they reach site.')

@section('content')
<!-- Hero Banner Section -->
<section class="service-hero" style="background-image: url('{{ asset('front/images/Drawings-Detailing.png') }}');">
    <div class="ym_container container py-5">
        <div class="row align-items-center">
            <div class="col-lg-8 text-start">
                <span class="section-eyebrow text-info">3D MODELING & COORDINATION</span>
                <h1 class="text-white display-4 fw-black mb-3">Structural BIM services in Jaipur</h1>
                <p class="text-white-50 fs-5 max-w-xl mb-4">
                    Coordinated 3D structural models for RCC, steel, and PEB projects — built to catch clashes and quantity errors before they become site problems.
                </p>
                <div class="d-flex gap-3 flex-wrap justify-content-start">
                    <a href="{{ route('contact') }}" class="com_btn text-decoration-none">Request a BIM Consultation</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: What It Is (Image on Left Side) -->
<section class="py-5 bg-white">
    <div class="ym_container container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="rounded-4 overflow-hidden shadow-lg">
                    <img src="{{ asset('front/images/Steel-Structure.png') }}" alt="Structural BIM 3D Modeling & Coordination" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-lg-6">
                <span class="section-eyebrow">WHAT IT IS</span>
                <h2 class="fw-bold text-dark mb-3">Engineering Data Behind Every 3D Element</h2>
                <p class="fs-5 text-secondary leading-relaxed mb-0">
                    Structural BIM is a 3D model of a building's structure where every beam, column, and connection carries real engineering data — material grade, size, load capacity — not just geometry. Unlike a 2D drawing set, the model updates everywhere at once when something changes, which is what makes coordination with architects, MEP, and contractors reliable instead of a manual cross-checking exercise.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: Why It Matters (Benefits Checklist) -->
<section class="py-5 bg-light">
    <div class="ym_container container">
        <div class="mb-4">
            <span class="section-eyebrow">WHY IT MATTERS</span>
            <h2 class="fw-bold text-dark">Key Advantages of Structural BIM</h2>
        </div>

        <div class="service-card-grid">
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/Clash-Detection.png') }}" alt="Clash Detection Before Site" height="48" width="48">
                </div>
                <h4>Clash Detection Before Site</h4>
                <p>Spatial conflicts between structure, MEP, and architecture get caught in the model, not discovered mid-construction.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/workflow.svg') }}" alt="Fewer Coordination Errors" height="48" width="48">
                </div>
                <h4>Fewer Coordination Errors</h4>
                <p>One model shared across disciplines instead of separate drawing sets that drift out of sync over project revisions.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/Accurate-Quantities.png') }}" alt="Accurate Quantities Early" height="48" width="48">
                </div>
                <h4>Accurate Quantities Early</h4>
                <p>Material takeoffs pulled directly from the model instead of manual estimation, useful for costing and DPR work.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/Fabrication-Ready-Detailing.png') }}" alt="Fabrication-Ready Detailing" height="48" width="48">
                </div>
                <h4>Fabrication-Ready Detailing</h4>
                <p>Detailed structural connections and steel member specifications that feed directly into fabrication workflows.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-refresh-ccw-icon lucide-refresh-ccw"><path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/><path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16"/><path d="M16 16h5v5"/></svg></div>
                <h4>Faster Design Iteration</h4>
                <p>Parametric updates allow structural adjustments to propagate across framing plans and sections automatically.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 5: What We Deliver — Stambha's BIM Capabilities -->
<section class="py-5 bg-white" id="bim-capabilities">
    <div class="ym_container container">
        <div class="mb-4">
            <span class="section-eyebrow">WHAT WE DELIVER</span>
            <h2 class="fw-bold text-dark">Stambha's Structural BIM Capabilities</h2>
        </div>

        <div class="service-card-grid">
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/3-d.png') }}" alt="3D Structural Models (RCC, Steel & PEB)" height="48" width="48">
                </div>
                <h4>3D Structural Models (RCC, Steel & PEB)</h4>
                <p>High-precision structural modeling carrying spatial, material, and section data for all structural elements.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/Clash-Detection.png') }}" alt="Clash Detection & Multi-Discipline Review" height="48" width="48">
                </div>
                <h4>Clash Detection & Multi-Discipline Review</h4>
                <p>Rigorous interference checks between structural frames, architectural features, and MEP service paths.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/Quantity-Takeoffs-&-BOQ-Support.png') }}" alt="Quantity Takeoffs & BOQ Support" height="48" width="48">
                </div>
                <h4>Quantity Takeoffs & BOQ Support</h4>
                <p>Automated material schedules for concrete volume, rebar tonnage, structural steel, and connection hardware.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/Fabrication-&-Shop-Drawings.png') }}" alt="Fabrication & Shop Drawings" height="48" width="48">
                </div>
                <h4>Fabrication & Shop Drawings</h4>
                <p>Detailed fabrication-ready drawings and structural connection detailing for PEB sheds and industrial plants.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/Construction.png') }}" alt="Construction Coordination Support" height="48" width="48">
                </div>
                <h4>Construction Coordination Support</h4>
                <p>Model-based query resolution, site verification support, and as-built updating during construction execution.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 6: Our BIM Process -->
<section class="py-5 bg-light">
    <div class="ym_container container">
        <div class="mb-4">
            <span class="section-eyebrow">PROCESS</span>
            <h2 class="fw-bold text-dark">Our Structural BIM Workflow</h2>
        </div>

        <div class="service-card-grid">
            <div class="service-card">
                <div class="card-icon">1️</div>
                <h4>Project Scoping & Requirements</h4>
                <p>Establishing Level of Detail (LOD), coordination parameters, client CAD standards, and discipline interfaces.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">2️</div>
                <h4>Structural Model Development</h4>
                <p>Building parametric 3D structural elements based on verified structural analysis and design calculations.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">3️</div>
                <h4>Coordination & Clash Review</h4>
                <p>Integrating architectural grids and MEP layers to highlight, resolve, and document spatial conflicts.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">4️</div>
                <h4>Model-Based Documentation</h4>
                <p>Extracting synchronized structural layout plans, elevation sections, rebar schedules, and BOQ estimates.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">5️</div>
                <h4>Construction Support</h4>
                <p>Providing construction-stage model support, RFI resolutions, and design adjustments during site build.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 7: Where We Use It — Applications (Cross-links) -->
<section class="py-5 bg-white">
    <div class="ym_container container">
        <div class="mb-4">
            <span class="section-eyebrow">APPLICATIONS</span>
            <h2 class="fw-bold text-dark">Where We Apply Structural BIM</h2>
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

<!-- Section 9: FAQ Accordion -->
<section class="py-5 bg-light">
    <div class="ym_container container">
        <div class="mb-4">
            <span class="section-eyebrow">FREQUENTLY ASKED QUESTIONS</span>
            <h2 class="fw-bold text-dark">Structural BIM FAQs</h2>
        </div>
        <div class="accordion service-faq" id="bimFaq">
            <div class="accordion-item">
                <h2 class="accordion-header" id="bimFaqHeading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bimFaqCollapse1" aria-expanded="true" aria-controls="bimFaqCollapse1">
                        What software do you use for structural BIM?
                    </button>
                </h2>
                <div id="bimFaqCollapse1" class="accordion-collapse collapse show" aria-labelledby="bimFaqHeading1" data-bs-parent="#bimFaq">
                    <div class="accordion-body">
                        We utilize industry-leading BIM and structural engineering software including Autodesk Revit, Tekla Structures, AutoCAD, and structural analysis engines like ETABS and STAAD.Pro to build coordinated, data-rich models.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="bimFaqHeading2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bimFaqCollapse2" aria-expanded="false" aria-controls="bimFaqCollapse2">
                        Is BIM worth it for smaller residential or commercial projects, or only large ones?
                    </button>
                </h2>
                <div id="bimFaqCollapse2" class="accordion-collapse collapse" aria-labelledby="bimFaqHeading2" data-bs-parent="#bimFaq">
                    <div class="accordion-body">
                        Yes, BIM provides substantial ROI on mid-sized residential and commercial projects by eliminating site clashes between structural columns, beams, and MEP ducts, ensuring precise rebar estimation, and speeding up client design approvals.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="bimFaqHeading3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bimFaqCollapse3" aria-expanded="false" aria-controls="bimFaqCollapse3">
                        How does BIM coordination work if the architect or contractor isn't using BIM?
                    </button>
                </h2>
                <div id="bimFaqCollapse3" class="accordion-collapse collapse" aria-labelledby="bimFaqHeading3" data-bs-parent="#bimFaq">
                    <div class="accordion-body">
                        We can model the structural frame in 3D using 2D architectural CAD drawings. We then issue coordinated 2D PDF/DWG drawing sets and export 3D IFC viewer files that non-BIM teams can easily review without specialized software.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="bimFaqHeading4">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bimFaqCollapse4" aria-expanded="false" aria-controls="bimFaqCollapse4">
                        What's the typical turnaround for a structural BIM model?
                    </button>
                </h2>
                <div id="bimFaqCollapse4" class="accordion-collapse collapse" aria-labelledby="bimFaqHeading4" data-bs-parent="#bimFaq">
                    <div class="accordion-body">
                        Turnaround depends on project scope and the required Level of Detail (LOD 200 to LOD 400). Typical timelines range from 1 to 3 weeks for preliminary coordination models and detailed fabrication drawing packages.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 10: CTA Panel -->
<section class="py-5 bg-white" id="bim-cta-form">
    <div class="ym_container container">
        <div class="dark-cta-panel">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <p class="lead-text">
                        Initiate 3D structural modeling, clash detection, or fabrication detailing for your project in Jaipur or across Rajasthan.
                    </p>
                    <ul class="trust-checklist">
                        <li><span class="icon">✓</span> 3D Structural Modeling & Clash Resolution</li>
                        <li><span class="icon">✓</span> Accurate Rebar & Steel Quantity Takeoffs</li>
                        <li><span class="icon">✓</span> Seamless Multi-Disciplinary Coordination</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="cta_box">
                        <span class="section-eyebrow text-info">MODEL INTEGRITY & COORDINATION</span>
                        <h2>Request a BIM Consultation</h2>
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
