@extends('layout.app')

@section('title', 'Industrial Structural Engineering Consultant | Jaipur | Stambha')
@section('meta_description', 'Industrial structural design for warehouses, crane-loaded buildings, mezzanines, and industrial floors in Jaipur. Engineered around plant operations, not a generic shed brief.')

@section('content')
<!-- Hero Section -->
<section class="service-hero" style="background-image: url('{{ asset('front/images/about-bg.webp') }}');">
    <div class="ym_container container py-5">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="section-eyebrow text-info">Structural Engineering Division</span>
                <h1 class="text-white display-4 fw-black mb-3">Industrial structural engineering in Jaipur</h1>
                <p class="text-white-50 fs-5 max-w-xl mb-4">
                    Custom structural design for warehouses, crane-loaded manufacturing plants, industrial floors, and mezzanines. Engineered around your plant operations, not a generic shed brief.
                </p>
                <div class="d-flex gap-3 flex-wrap">
                    <a href="{{ route('contact') }}" class="com_btn text-decoration-none">Start Design Brief</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Core Expertise -->
<section class="py-5 bg-white">
    <div class="ym_container container">
        <div class="row align-items-center g-4">
            <div class="col-lg-5">
                <span class="section-eyebrow">CORE EXPERTISE</span>
                <h2 class="fw-bold text-dark display-6">Engineered Around Plant Operations</h2>
            </div>
            <div class="col-lg-7">
                <p class="fs-5 text-secondary leading-relaxed mb-0">
                    Industrial structural engineering covers the design of warehouses, manufacturing facilities, crane-loaded buildings, industrial floors, and mezzanines, where the structure has to work around plant operations rather than the other way round. Stambha designs these structures starting from how the facility actually runs: what's on the crane, what's on the floor, and what might be added later.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Technical Insight Quote Block -->
<section class="py-4 bg-light">
    <div class="ym_container container">
        <div class="quote-block">
            <h4 class="fw-bold text-dark mb-2">Why a Standard PEB Brief Isn't Enough</h4>
            <p>
                A pre-engineered building quoted off a generic spec sheet assumes generic loads. Once a project has crane loads, machinery vibration, rack loads, forklift traffic, or a future mezzanine, that assumption breaks down. A warehouse built to carry a 10-tonne crane needs different bracing, connections, and foundation reactions than one that doesn't, even if both get sold as the same "PEB structure."
            </p>
        </div>
    </div>
</section>

<!-- Section 4: What We Design For -->
<section class="py-5 bg-white">
    <div class="ym_container container">
        <div class="mb-4">
            <span class="section-eyebrow">DESIGN PARAMETERS</span>
            <h2 class="fw-bold text-dark">What We Design For</h2>
        </div>
        <div class="service-card-grid">
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/site-environmental-loads.svg') }}" alt="" class="img-fluid">
                </div>
                <h4>Site-Specific Environmental Loads</h4>
                <p>Dead, live, wind, and seismic load analyses engineered specifically for your facility site parameters.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/crane-loads-surge-forces.svg') }}" alt="" class="img-fluid">
                </div>
                <h4>Crane Loads & Surge Forces</h4>
                <p>Crane wheel loads, longitudinal surge, and transverse forces built into primary frame calculations.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/machinery-dynamic-loads.svg') }}" alt="" class="img-fluid">
                </div>
                <h4>Machinery Dynamic Loads</h4>
                <p>Dynamic impact and operational vibration mitigation for heavy plant machinery.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/cyclic-fatigue-analysis.svg') }}" alt="" class="img-fluid">
                </div>
                <h4>Cyclic & Fatigue Analysis</h4>
                <p>Fatigue analysis in structural members and bolted/welded connections under repeated load cycles.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/heavy-industrial-flooring.svg') }}" alt="" class="img-fluid">
                </div>
                <h4>Heavy Industrial Flooring</h4>
                <p>Floor design for concentrated equipment loads, high forklift traffic, and joint placement to European standards.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/operational-mezzanines.svg') }}" alt="" class="img-fluid">
                </div>
                <h4>Operational Mezzanines</h4>
                <p>Mezzanines added to existing or new industrial buildings, engineered for installation inside running plants.</p>
            </div>
            <div class="service-card">
                <div class="card-icon">
                    <img src="{{ asset('front/images/services/Bracing-Base-Plate-Reaction.svg') }}" alt="" class="img-fluid">
                </div>
                <h4>Bracing & Base Plate Reaction</h4>
                <p>Custom bracing, base plates, connection details, and foundation reactions sized to the true load path.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 5: Project Proof Stacked Cards -->
<section class="py-5 bg-light">
    <div class="ym_container container">
        <div class="mb-4">
            <span class="section-eyebrow">PROJECT PROOF</span>
            <h2 class="fw-bold text-dark">Delivered Industrial Facilities</h2>
        </div>

        <div class="sticky-cards-stack">
            <div class="proof-card sticky-proof-card" style="--card-index: 1;">
                <div class="proof-card-img">
                    <img src="{{ asset('front/images/services/Tata-Tiscon-Prefab-2.webp') }}" alt="Tata Tiscon Warehouse">
                </div>
                <div class="proof-card-body">
                    <span class="proof-meta">Mahindra SEZ, Jaipur • 35,000 sq ft</span>
                    <h3>Tata Tiscon Prefab Steel Warehouse</h3>
                    <p>
                        Comprehensive structural design for a 35,000 sq ft prefabricated steel warehouse facility engineered specifically to support heavy 10-tonne crane operations per bay segment, with optimized steel weight and precise foundation reactions.
                    </p>
                </div>
            </div>

            <div class="proof-card sticky-proof-card" style="--card-index: 2;">
                <div class="proof-card-img">
                    <img src="{{ asset('front/images/services/High-Load-Industrial-Floor-Slab-2.webp') }}" alt="Industrial Flooring Mahindra SEZ">
                </div>
                <div class="proof-card-body">
                    <span class="proof-meta">Mahindra SEZ, Jaipur • 39,812 sq ft</span>
                    <h3>High-Load Industrial Floor Slab</h3>
                    <p>
                        Full structural design, specification, and PMC supervision for a 39,812 sq ft heavy-duty industrial floor, meeting stringent Indian and European flatness and durability standards under high forklift traffic.
                    </p>
                </div>
            </div>

            <div class="proof-card sticky-proof-card" style="--card-index: 3;">
                <div class="proof-card-img">
                    <img src="{{ asset('front/images/services/Operational-Plant-Mezzanine-Expansion-2.webp') }}" alt="Industrial Mezzanine Mahindra SEZ">
                </div>
                <div class="proof-card-body">
                    <span class="proof-meta">Mahindra SEZ, Jaipur • Active Facility</span>
                    <h3>Operational Plant Mezzanine Expansion</h3>
                    <p>
                        Turnkey EPC structural engineering of a heavy industrial mezzanine floor erected inside an operational plant environment, executed seamlessly without halting daily manufacturing operations.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 6: FAQ Accordion -->
<section class="py-5 bg-white">
    <div class="ym_container container">
        <div class="mb-4">
            <span class="section-eyebrow">FREQUENTLY ASKED QUESTIONS</span>
            <h2 class="fw-bold text-dark">Industrial Structural Engineering Insights</h2>
        </div>
        <div class="accordion service-faq" id="industrialFaq">
            <div class="accordion-item">
                <h2 class="accordion-header" id="indFaq1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#indCollapse1" aria-expanded="true" aria-controls="indCollapse1">
                        Can Stambha design a mezzanine inside an existing running plant?
                    </button>
                </h2>
                <div id="indCollapse1" class="accordion-collapse collapse show" aria-labelledby="indFaq1" data-bs-parent="#industrialFaq">
                    <div class="accordion-body">
                        Yes. Our Mahindra SEZ industrial mezzanine project was engineered, procured, and constructed inside an active facility that stayed fully operational throughout construction, requiring specialized site sequencing around production schedules.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="indFaq2">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#indCollapse2" aria-expanded="false" aria-controls="indCollapse2">
                        Does Stambha optimise PEB designs to reduce steel weight?
                    </button>
                </h2>
                <div id="indCollapse2" class="accordion-collapse collapse" aria-labelledby="indFaq2" data-bs-parent="#industrialFaq">
                    <div class="accordion-body">
                        Yes. Through accurate load analysis, correct load combinations, and member-level section optimization, our design work has brought steel consumption down to ~6 kg per sq ft compared to the typical 8 to 10 kg per sq ft industry benchmark, while fully honoring IS code safety margins.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="indFaq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#indCollapse3" aria-expanded="false" aria-controls="indCollapse3">
                        What information do you need to quote an industrial structural design?
                    </button>
                </h2>
                <div id="indCollapse3" class="accordion-collapse collapse" aria-labelledby="indFaq3" data-bs-parent="#industrialFaq">
                    <div class="accordion-body">
                        We require the site location, planned facility footprint, crane capacities (if any), major equipment or floor loading specs, and any future expansion plans (such as future mezzanines or solar installation).
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 7: CTA Form Panel -->
<section class="py-5 bg-light" id="industrial-cta-form">
    <div class="ym_container container">
        <div class="dark-cta-panel">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <span class="section-eyebrow text-info">TAILORED INDUSTRIAL DESIGN</span>
                    <h2>Discuss Your Industrial Project</h2>
                    <p class="lead-text">
                        Get direct structural design guidance for your manufacturing facility, PEB shed, crane building, or industrial floor.
                    </p>
                    <ul class="trust-checklist">
                        <li><span class="icon">✓</span> IS Code Compliant Steel & Foundation Design</li>
                        <li><span class="icon">✓</span> Up to 25%+ Reduction in Steel Consumption</li>
                        <li><span class="icon">✓</span> Proven Live-Plant Execution Capability</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="cta_box">
                        <span class="section-eyebrow text-info">TAILORED INDUSTRIAL DESIGN</span>
                        <h2>Discuss Your Industrial Project</h2>
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
