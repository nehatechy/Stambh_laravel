@extends('layout.app')
@section('title', 'Structural Engineering Consultant in Jaipur | Stambha Consultants')
@section('meta_description', 'RCC, steel, PEB, industrial structures, structural audits and DPR consultancy in Jaipur. Design built around actual loads and site conditions, not blanket assumptions. Talk to Stambha Consultants.')
@section('content')
<main style="margin-top: 5rem;">

            <!-- Section 1: Hero Slider (Slick Slider) -->
            <section class="hero-slider-section w-100 overflow-hidden">

                <div class="hero-slider-container w-100">

                    <!-- Slide 1 -->
                    <div class="hero-slide">
                        <img src="{{ asset('front/images/banner-1.1.png') }}"
                            alt="Architectural masterwork"
                            class="w-100 h-100 object-fit-cover">
                        <div class="hero-slide-overlay"></div>
                        <div class="hero-slide-content ym_container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <!--<span-->
                                    <!--    class="chip-tectonic mb-4 slide-tag">Est.-->
                                    <!--    1974</span>-->
                                    <h1
                                        class="text-white display-2 fw-black mb-4 slide-title">Structural engineering consultants in Jaipur <br><span
                                            class="font-serif-italic text-info">By
                                            Design.</span></h1>
                                    <p
                                        class="text-white-50 fs-5 mb-5 max-w-xl slide-desc">RCC, steel, and industrial structural design built around the loads a structure 
                                        will actually carry, engineered to IS 456, IS 875, and IS 1893.</p>
                                    <!--<a href="#projects"-->
                                    <!--    class="btn-tectonic-primary text-decoration-none slide-desc">View-->
                                    <!--    Portfolio</a>-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="hero-slide">
                        <img src="{{ asset('front/images/banner-3.1.png') }}"
                            alt="The Zenith Tower Chicago">
                        <div class="hero-slide-overlay"></div>
                        <div class="hero-slide-content ym_container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <!--<span-->
                                    <!--    class="chip-tectonic mb-4 slide-tag">Landmarks</span>-->
                                    <h1
                                        class="text-white display-2 fw-black mb-4 slide-title">Precision in Every Load Path<br><span
                                            class="font-serif-italic text-info">From Foundation to Frame.</span></h1>
                                    <p
                                        class="text-white-50 fs-5 mb-5 max-w-xl slide-desc">Structural analysis, seismic design, and detailing for residential, commercial, 
                                        and industrial projects across Jaipur and Rajasthan.</p>
                                    <!--<a href="#about"-->
                                    <!--    class="btn-tectonic-primary text-decoration-none slide-desc">Our-->
                                    <!--    Philosophy</a>-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="hero-slide">
                        <img src="{{ asset('front/images/slider-2.png') }}"
                            alt="Modern Architectural Studio">
                        <div class="hero-slide-overlay"></div>
                        <div class="hero-slide-content ym_container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <!--<span-->
                                    <!--    class="chip-tectonic mb-4 slide-tag">Our-->
                                    <!--    Team</span>-->
                                    <h1
                                        class="text-white display-2 fw-black mb-4 slide-title">Built to Handle What Others Miss<br><span
                                            class="font-serif-italic text-info">Crane Loads. Industrial Floors. Real Site Conditions.</span></h1>
                                    <p
                                        class="text-white-50 fs-5 mb-5 max-w-xl slide-desc">From a 10-tonne crane-loaded steel warehouse to a mezzanine built inside a 
                                        running plant, we design for the operating conditions a generic brief overlooks.</p>
                                    <!--<a href="#contact"-->
                                    <!--    class="btn-tectonic-primary text-decoration-none slide-desc">Start-->
                                    <!--    Collaboration</a>-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Blueprint drafting coordinate overlays -->
                <!--<div-->
                <!--    class="blueprint-grid position-absolute top-0 start-0 w-100 h-100 opacity-25 pointer-events-none"-->
                <!--    style="z-index: 1;"></div>-->

                <!-- Custom arrows -->
                <div class="hero-slider-arrows ym_container">
                    <button class="hero-slider-arrow hero-arrow-prev"
                        aria-label="Previous Slide">
                        <span
                            class="material-symbols-outlined">arrow_back</span>
                    </button>
                    <button class="hero-slider-arrow hero-arrow-next"
                        aria-label="Next Slide">
                        <span
                            class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>

                <!-- Custom Dots Container -->
                <div class="hero-slider-dots-container"></div>

                <!-- Detail coordinates decorations -->
                <!--<div-->
                <!--    class="position-absolute bottom-0 end-0 m-5 d-none d-lg-block text-end font-monospace text-white-50 opacity-50"-->
                <!--    style="z-index: 10; font-size: 0.65rem;">-->
                <!--    REF_COORD: 40.7128° N, 74.0060° W<br>-->
                <!--    TOLERANCE: &lt;0.001mm<br>-->
                <!--    SYSTEM_SYS: V.4.09-->
                <!--</div>-->

            </section>

            <!-- Section 2: Grid Box (Left image, Right content) -->
            <section id="about" class="pad-5">
                <div class="ym_container">
                    <div class="row align-items-center g-5">

                        <!-- Left Side Image Column -->
                        <div class="col-lg-6">
                            <div class="position-relative">
                                <div>
                                    <img
                                        src="{{ asset('front/images/about3.png') }}"
                                        alt="Steel structural joints detailing"
                                        class="w-100 h-100 object-fit-cover transition-transform duration-700 hover-scale-105">
                                </div>

                                <!-- Design System Ornaments: Blueprint and outline details -->
                                <div
                                    class="blueprint-grid position-absolute bottom-0 right-0 w-25 h-25 opacity-25"
                                    style="transform: translate(1.5rem, 1.5rem); z-index: -1;"></div>
                                <div
                                    class="position-absolute top-0 start-0 w-25 h-25 border-top border-start"
                                    style="transform: translate(-1.5rem, -1.5rem); border-color: rgba(0, 15, 34, 0.15) !important; z-index: -1;"></div>
                            </div>
                        </div>

                        <!-- Right Side Content Column -->
                        <div class="col-lg-6">
                            <span
                                class="label-blueprint mb-3 d-inline-block">Heritage
                                & Precision</span>
                            <h2 class="display-5 fw-black mb-4">Building Strength Through Engineering Excellence</h2>

                            <p class="text-editorial-lead fs-5 mb-4">
                                "A structure should be sized for the loads it will actually carry, not the loads a template assumes it will carry."
                            </p>

                            <p class="text-secondary fs-6 mb-5">
                                 Stambha Consultants combines structural analysis, site-level 
                                construction knowledge, and project oversight. Every design starts with the 
                                same question: what will this structure carry, on this site, for the life of the 
                                building.</p>

                        </div>

                    </div>
                </div>
            </section>

            <!-- Section 3: Feature Section (Display Grid Layout) -->
            <section class="pad-5"
                style="background-color: var(--surface-low);">
                <div class="ym_container">

                    <!-- Title & Description Header -->
                    <div class="row mb-5 justify-content-center text-center">
                        <div class="col-lg-8">
                            <span
                                class="label-blueprint mb-3 d-inline-block">The
                                Stambha Advantage</span>
                            <h2 class="display-5 fw-black mb-4">The Foundation
                                of Reliable Structures</h2>
                            <p class="text-muted fs-6">
                                By centering our operations on advanced
                                mathematics and materials physics, we create
                                structures that endure, optimize budgets, and
                                push architectural boundaries.
                            </p>
                        </div>
                    </div>

                    <!-- Grid Cards using direct grid CSS -->
                    <div class="feature-grid-layout mt-4">

                        <!-- Card 1 -->
                        <div
                            class="card-tectonic-slab">
                            <div>
                                <!-- <span
                                    class="material-symbols-outlined text-primary fs-1 mb-4">architecture</span> -->
                                    <img src="{{ asset('front/images/gifs/proven-expertise.gif') }}" class="feature-icon" alt="Proven Expertise">
                                <h4
                                    class="fs-5 fw-bold mb-3 text-uppercase">Design Around Real Loads.</h4>
                                <p class="text-muted fs-6 mb-0">Structures sized for actual site conditions 
                                and operating requirements, not blanket assumptions.</p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div
                            class="card-tectonic-slab">
                            <div>
                                <!-- <span
                                    class="material-symbols-outlined text-primary fs-1 mb-4">construction</span> -->
                                    <img src="{{ asset('front/images/gifs/future-ready.gif') }}" class="feature-icon" alt="Future-Ready Solutions">
                                <h4
                                    class="fs-5 fw-bold mb-3 text-uppercase">Industrial Depth</h4>
                                <p class="text-muted fs-6 mb-0">Crane loads, machinery, industrial floors, and 
mezzanines are regular project types here, not exceptions.</p>
                            </div>
                        </div>


                        <!-- Card 4 -->
                        <div
                            class="card-tectonic-slab">
                            <div>
                                    <!-- <span
                                        class="material-symbols-outlined text-primary fs-1 mb-4">groups</span> -->
                                    <img src="{{ asset('front/images/gifs/money-saving.gif') }}" class="feature-icon" alt="Cost Optimization">
                                <h4
                                    class="fs-5 fw-bold mb-3 text-uppercase"> RCC and Steel in One Practice </h4>
                                <p class="text-muted fs-6 mb-0">The ability to choose or combine 
structural systems based on the project, not a single specialization.</p>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div
                            class="card-tectonic-slab">
                            <div>
                                <!-- <span
                                    class="material-symbols-outlined text-primary fs-1 mb-4">diversity_3</span> -->
                                    <img src="{{ asset('front/images/gifs/morder-engineer.gif') }}" class="feature-icon" alt="Modern Engineering">
                                <h4
                                    class="fs-5 fw-bold mb-3 text-uppercase">Existing-Structure Capability</h4>
                                <p class="text-muted fs-6 mb-0">Structural audits, NDT testing, and 
retrofitting alongside new design work.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <!-- Section 4: Statistics Section (Display Grid of 4 Divs with Counters) -->
            <section class="pad-5"
                style="background-color: var(--primary);">
                <div class="ym_container">
                    <div class="row g-0 justify-content-center">

                        <!-- Stat 1 -->
                        <div class="col-lg-3 col-md-6 stats-div text-center">
                            <span
                                class="material-symbols-outlined text-info fs-1 mb-3">domain</span>
                            <div
                                class="stat-counter display-4 fw-black text-white mb-2"
                                data-target="500" data-suffix="+">0+</div>
                            <span class="label-blueprint text-white-50"
                                style="font-size: 0.65rem; letter-spacing: 0.25em;">Projects
                                Completed</span>
                        </div>

                        <!-- Stat 2 -->
                        <div class="col-lg-3 col-md-6 stats-div text-center">
                            <span
                                class="material-symbols-outlined text-info fs-1 mb-3">engineering</span>
                            <div
                                class="stat-counter display-4 fw-black text-white mb-2"
                                data-target="200" data-suffix="+">0+</div>
                            <span class="label-blueprint text-white-50"
                                style="font-size: 0.65rem; letter-spacing: 0.25em;">Expert
                                Engineers</span>
                        </div>

                        <!-- Stat 3 -->
                        <div class="col-lg-3 col-md-6 stats-div text-center">
                            <span
                                class="material-symbols-outlined text-info fs-1 mb-3">timeline</span>
                            <div
                                class="stat-counter display-4 fw-black text-white mb-2"
                                data-target="50" data-suffix="+">0+</div>
                            <span class="label-blueprint text-white-50"
                                style="font-size: 0.65rem; letter-spacing: 0.25em;">Years
                                in Industry</span>
                        </div>

                        <!-- Stat 4 -->
                        <div class="col-lg-3 col-md-6 stats-div text-center">
                            <span
                                class="material-symbols-outlined text-info fs-1 mb-3">military_tech</span>
                            <div
                                class="stat-counter display-4 fw-black text-white mb-2"
                                data-target="99" data-suffix="%">0%</div>
                            <span class="label-blueprint text-white-50"
                                style="font-size: 0.65rem; letter-spacing: 0.25em;">Client
                                Satisfaction</span>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Section 5: Projects Section (Images Gallery Grid) -->
            <section id="projects" class="pad-5"
                style="background-color: var(--surface-lowest);">
                <div class="ym_container">

                    <!-- Section Header -->
                    <div
                        class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5">
                        <div class="mb-4 mb-md-0">
                            <span
                                class="label-blueprint mb-3 d-inline-block">Portfolio</span>
                            <h2 class="display-5 fw-black m-0">Iconic
                                Landmarks.</h2>
                        </div>
                        <div>
                            <a href="{{ route('projects.list') }}"
                                class="com_btn">View Projects</a>
                        </div>
                    </div>

                    <!-- Project Gallery Grid -->
                   <div class="row g-4 mobile_slider">
                        @forelse($projects as $project)
                            <div class="col-lg-4 col-md-6 portfolio-item item-{{ $loop->iteration }}">
                                <div class="position-relative">
                                    <img
                                        src="{{ asset($project->image) }}"
                                        alt="{{ $project->title }}">
                                    <div class="portfolio-overlay">
                                        <!--<span class="label-blueprint text-white-50 mb-2">{{ $project->category }}</span>-->
                                        <h4 class="text-white fs-4 fw-black tracking-wide m-0">
                                            <a href="{{ route('projects.list') }}" class="text-white text-decoration-none">
                                                {{ $project->title }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="text-center text-white-50 py-5">
                                No projects available at the moment.
                            </div>
                        @endforelse
                    </div>

                </div>
            </section>

            <!-- Section 6: Blog Section (Journal and Insights with 2-line ellipses) -->
            <section id="blogs" class="pad-5"
                style="background-color: var(--surface-low);">
                <div class="ym_container">

                    <!-- Section Header -->
                    <div class="row mb-5">
                        <div class="col-lg-8">
                            <span
                                class="label-blueprint mb-3 d-inline-block">Journal</span>
                            <h2 class="display-5 fw-black mb-4">Technical
                                Insights & Industry Trends.</h2>
                            <p class="text-muted fs-6">Stay up to date with the
                                latest publications, seismic mitigation
                                findings, and carbon reduction methods in global
                                concrete structures.</p>
                        </div>
                    </div>

                    <!-- Blog Grid -->
                    <div class="row g-4 mt-2 mobile_slider">

                        @forelse($blogs as $blog)
                        <div class="col-lg-4 col-md-6 d-flex">
                            <article
                                class="bg-white w-100 d-flex flex-column justify-content-between p-0 shadow-sm"
                                style="border-radius: 0;">
                                <div class="blog_box">
                                    <div class="overflow-hidden aspect-video">
                                        <img
                                            src="{{ $blog->image ? asset($blog->image) : 'https://via.placeholder.com/800x450?text=Blog+Image' }}"
                                            alt="{{ $blog->title }}"
                                            class="w-100 h-100 object-fit-cover">
                                    </div>
                                    <div class="p-4 pb-0">
                                        <span
                                            class="label-blueprint mb-2 d-inline-block text-secondary"
                                            style="font-size: 0.65rem;">{{ $blog->created_at->format('F d, Y') }}</span>
                                        <h4
                                            class="fs-5 fw-bold text-dark mb-3 leading-tight">{{ $blog->title }}</h4>
                                        <!-- Two-line ellipsis description -->
                                        <p
                                            class="text-muted fs-6 mb-4 line-clamp-2">{{ $blog->short_description ?: \Illuminate\Support\Str::limit(strip_tags($blog->content), 120) }}</p>
                                    </div>
                                </div>
                                <div class="p-4 pt-0">
                                    <a href="{{ route('blog.show', $blog->slug) }}"
                                        class="btn-tectonic-tertiary">Read Full
                                        Article</a>
                                </div>
                            </article>
                        </div>
                        @empty
                        <div class="col-12 text-center">
                            <p class="text-muted">No recent articles available at the moment.</p>
                        </div>
                        @endforelse

                    </div>

                </div>
            </section>

            <!-- Section 7: Final CTA and Contact Form (Contact-Us) -->
            <section id="contact" class="pad-5 bg-white position-relative"
                style="padding-top: 120px !important;overflow: hidden;">

                <div
                    class="position-absolute top-0 start-0 w-100 h-100 opacity-10 pointer-events-none"></div>

                <div class="ym_container position-relative">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-lg-8">
                            <span
                                class="label-blueprint mb-3 d-inline-block">Connect</span>
                            <h2 class="display-5 fw-black mb-4">Start Your
                                Structural Collaboration</h2>
                            <p class="text-muted fs-6">Let's discuss auditing,
                                engineering consultation, or long-span planning.
                                Reach our global desks below.</p>
                        </div>
                    </div>

                    <!-- Contact Forms / details -->
                    <div class="row g-5 align-items-stretch">
                        <div class="col-lg-6">
                            <div class="home_contact h-100">
                                <div>
                                    <h3 class="fw-black mb-4">Office</h3>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.6681093274838!2d75.75667609999999!3d26.882283799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5cb75378789%3A0x39059d8200a3392!2sSmart%20Move%20Financiers%20Private%20Limited!5e0!3m2!1sen!2sin!4v1784954777787!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                                    
                                </div>

                                <div
                                    class="mt-4 pt-4 border-top border-white-50 d-none">
                                    <p class=" m-0">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 22C16 18 20 14.4182 20 10C20 5.58172 16.4183 2 12 2C7.58173 2 4 5.58172 4 10C4 14.4182 8 18 12 22Z" stroke="#0A2540" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M12.0006 12.0001C13.263 12.0001 14.2863 11.0052 14.2863 9.77789C14.2863 8.55059 13.263 7.55566 12.0006 7.55566C10.7382 7.55566 9.71484 8.55059 9.71484 9.77789C9.71484 11.0052 10.7382 12.0001 12.0006 12.0001Z" stroke="#0A2540" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                           <a href="https://maps.app.goo.gl/K8wqNCVMuNwfjJp38" class="text-dark fw-bold"> 157, santosh nagar, nirman nagar, Jaipur</a></p>
                                    <p class="text-dark fw-bold my-3"><span
                                            ><svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#0a2540" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></span>
                                        <a href="tel:+919875803748">+91 9875803748</a></p>
                                    <p class="text-dark fw-bold m-0"><span
                                            class="material-symbols-outlined align-middle me-2 text-dark">mail</span><a href="mailto:stambhaconsultants@gmail.com">stambhaconsultants@gmail.com</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="p-5 bg-white border border-light h-100"
                                style="border-color: var(--outline-variant) !important;">
                                <h3 class="fw-black mb-4">Inquiry Form</h3>
                                <form action="#" method="POST"
                                    onsubmit="event.preventDefault(); alert('Inquiry received. Our engineering leads will connect with you within 24 hours.');">
                                    <div class="mb-4">
                                        <label for="name"
                                            class="label-blueprint mb-2"
                                            style="font-size: 0.55rem;">Your
                                            Name</label>
                                        <input type="text" id="name" required
                                            class="form-control rounded-0 border-0 border-bottom bg-transparent px-0 py-2"
                                            placeholder="e.g. Architect Frank"
                                            style="border-bottom: 2px solid var(--outline-variant) !important;">
                                    </div>
                                    <div class="mb-4">
                                        <label for="email"
                                            class="label-blueprint mb-2"
                                            style="font-size: 0.55rem;">Corporate
                                            Email</label>
                                        <input type="email" id="email" required
                                            class="form-control rounded-0 border-0 border-bottom bg-transparent px-0 py-2"
                                            placeholder="e.g. frank@studio.com"
                                            style="border-bottom: 2px solid var(--outline-variant) !important;">
                                    </div>
                                    <div class="mb-4">
                                        <label for="message"
                                            class="label-blueprint mb-2"
                                            style="font-size: 0.55rem;">Project
                                            Details</label>
                                        <textarea id="message" required rows="1"
                                            class="form-control rounded-0 border-0 border-bottom bg-transparent px-0 py-2"
                                            placeholder="Tell us about the project scope, location, and structural parameters..."
                                            style="border-bottom: 2px solid var(--outline-variant) !important; resize: none;"></textarea>
                                    </div>
                                    <button type="submit"
                                        class="btn-tectonic-primary w-100 py-3 mt-3">Submit
                                        Project Details</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

@endsection