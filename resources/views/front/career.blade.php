@extends('layout.app')

@section('title', 'Careers at Stambha Consultants | Structural Engineering Jobs in Jaipur')
@section('meta_description', 'Stambha Consultants is hiring structural design engineers, draftsmen, and site engineers in Jaipur. Work on RCC, steel, and industrial structural projects. See open roles.')

@section('content')

<main style="margin-top: 5rem;">

    <!-- Section 1: Hero Banner -->
    <section class="inner-banner position-relative overflow-hidden bg-primary-container text-white py-5 d-flex align-items-center" style="min-height: 350px;">
        <div class="blueprint-grid position-absolute top-0 start-0 w-100 h-100 opacity-10 pointer-events-none"></div>

        <div class="ym_container position-relative">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="text-white display-3 fw-black mb-3">Build Your Career in <br><span class="font-serif-italic text-info">Structural Engineering.</span></h1>
                    <p class="text-white-50 fs-5 max-w-xl">Join a Jaipur-based structural engineering team working on RCC, steel, and seismic design across Rajasthan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Employee Benefits (static content, unchanged) -->
    <section class="py-5 bg-white" style="padding-top: 100px !important; padding-bottom: 100px !important;">
        <div class="ym_container">
            <div class="row mb-5 text-center justify-content-center">
                <div class="col-lg-8">
                    <span class="label-blueprint mb-3 d-inline-block">Our Culture</span>
                    <h2 class="display-5 fw-black mb-4">Learn on Real Projects</h2>
                    <p class="text-muted fs-6">You'll work directly on live structural design, analysis, and site coordination — with senior engineers who review and mentor as you go.</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card-tectonic-slab h-100 p-5 d-flex flex-column justify-content-between" style="background-color: var(--surface-low) !important;">
                        <div>
                            <span class="material-symbols-outlined text-primary fs-1 mb-4">public</span>
                            <h4 class="fs-5 fw-bold mb-3 text-uppercase">Hands-On Project Exposure</h4>
                            <p class="text-muted fs-6 mb-0">Work across residential, commercial, and industrial structural projects from design through site execution.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card-tectonic-slab h-100 p-5 d-flex flex-column justify-content-between" style="background-color: var(--surface-low) !important;">
                        <div>
                            <span class="material-symbols-outlined text-primary fs-1 mb-4">science</span>
                            <h4 class="fs-5 fw-bold mb-3 text-uppercase">Skill Development</h4>
                            <p class="text-muted fs-6 mb-0">Support for relevant certifications and software training (STAAD Pro, ETABS, AutoCAD) as you grow with the team.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card-tectonic-slab h-100 p-5 d-flex flex-column justify-content-between" style="background-color: var(--surface-low) !important;">
                        <div>
                            <span class="material-symbols-outlined text-primary fs-1 mb-4">health_and_safety</span>
                            <h4 class="fs-5 fw-bold mb-3 text-uppercase">Wellness & Learn</h4>
                            <p class="text-muted fs-6 mb-0">Comprehensive health coverage, hybrid working setups, structure exam subventions, and fully paid professional training programs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-white">
        <div class="ym_container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <span class="label-blueprint mb-3 d-inline-block">Why Join Us</span>
                    <h2 class="display-5 fw-black mb-4">Precision. People. Purpose.</h2>
                </div>
                <div class="col-lg-12">
                    <div class="career-grid">
                        <div class="carrer-box">
                            <div><h2>01</h2></div>
                            <div>
                                <h6>Continuous Learning</h6>
                                <p class="mb-0">Access advanced training programs, certifications, and international exposure to the latest metallurgical technologies.</p>
                            </div>
                        </div>
                        <div class="carrer-box">
                            <div><h2>02</h2></div>
                            <div>
                                <h6>Real Responsibility</h6>
                                <p class="mb-0">Take ownership of structural calculations and detailing on real client projects, not just supporting senior staff.</p>
                            </div>
                        </div>
                        <div class="carrer-box">
                            <div><h2>03</h2></div>
                            <div>
                                <h6>Global Exposure</h6>
                                <p class="mb-0">Opportunity to work with international clients and world-renowned EPC contractors on critical energy and petrochemical projects.</p>
                            </div>
                        </div>
                        <div class="carrer-box">
                            <div><h2>04</h2></div>
                            <div>
                                <h6>Innovation Culture</h6>
                                <p class="mb-0">Work in state-of-the-art R&D facilities with a focus on continuous process improvement and industry leadership.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Open Positions Board (DYNAMIC) -->
    <section class="py-5" style="background-color: var(--surface-low); padding-top: 100px !important; padding-bottom: 120px !important;">
        <div class="ym_container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <span class="label-blueprint mb-3 d-inline-block">Open Roles</span>
                    <h2 class="display-5 fw-black mb-4">Available Opportunities</h2>
                    <p class="text-muted fs-6">Find your discipline match. We are expanding across multiple regional offices.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="accordion accordion-tectonic" id="positionsAccordion">

                        @forelse($careers as $career)
                        <div class="accordion-item bg-white p-4 mb-3 border shadow-sm">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                                <div>
                                    <span class="chip-tectonic mb-2">{{ $career->location }}</span>
                                    <h4 class="m-0 fw-black text-uppercase fs-5 text-dark">{{ $career->title }}</h4>
                                </div>
                                <div>
                                    <button class="btn-tectonic-tertiary text-uppercase font-bold fs-6 border-0 bg-transparent text-primary p-0 me-4"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#roleCollapse{{ $career->id }}" aria-expanded="false">
                                        View Details
                                    </button>
                                    <button class="btn-tectonic-primary py-2 px-4"
                                            data-bs-toggle="modal" data-bs-target="#applyModal"
                                            data-career-id="{{ $career->id }}"
                                            data-role="{{ $career->title }}">
                                        Apply Now
                                    </button>
                                </div>
                            </div>
                            <div id="roleCollapse{{ $career->id }}" class="accordion-collapse collapse" data-bs-parent="#positionsAccordion">
                                <div class="accordion-body px-0 pt-4 pb-0 text-secondary fs-6 border-top mt-3" style="border-color: var(--outline-variant) !important;">
                                    <h6 class="fw-bold text-dark text-uppercase fs-6 tracking-wide mb-2">Job Description:</h6>
                                    <p class="text-muted">{{ $career->description }}</p>
                                    <h6 class="fw-bold text-dark text-uppercase fs-6 tracking-wide mt-3 mb-2">Requirements:</h6>
                                    <p class="text-muted">{{ $career->requirements }}</p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p class="text-center text-muted">No open positions right now. Check back soon.</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Apply Now Modal (shared, filled dynamically via JS) -->
    <div class="modal fade" id="applyModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('careers.apply') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header align-items-start">
                        <h5 class="modal-title text-center">Application for<br><span class="text-dark" id="modalJobTitle"></span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="career_id" id="career_id">
                        <input type="hidden" name="applied_for" id="applied_for">

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cover Message</label>
                            <textarea name="cover_message" class="form-control" rows="4"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Upload Resume (PDF/DOC)</label>
                            <input type="file" name="resume" class="form-control" accept=".pdf,.doc,.docx" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-dark" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn-tectonic-primary py-2 px-4">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>

<script>
    // Fill modal with the correct job title + id when "Apply Now" is clicked
    document.addEventListener('DOMContentLoaded', function () {
        var applyModal = document.getElementById('applyModal');
        applyModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var careerId = button.getAttribute('data-career-id');
            var role = button.getAttribute('data-role');

            document.getElementById('career_id').value = careerId;
            document.getElementById('applied_for').value = role;
            document.getElementById('modalJobTitle').innerText = role;
        });
    });
</script>
@endsection
@section('scripts')
