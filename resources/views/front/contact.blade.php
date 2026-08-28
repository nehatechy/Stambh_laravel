@extends('layout.app')
@section('title', 'Contact Stambha Consultants | Structural Engineers in Jaipur')
@section('meta_description', ' Get in touch with Stambha Consultants for structural design, audits, DPR, or industrial engineering consultation in Jaipur. Call, email, or send project details below.')
@section('content')

<style>
    .con_logo{
        height: 150px;
        text-align: center;
    }
</style>
     <main style="margin-top: 5rem;">
        
        <!-- Section 1: Hero Banner -->
        <section class="inner-banner position-relative overflow-hidden bg-primary-container text-white py-5 d-flex align-items-center" style="min-height: 350px;">
            <div class="blueprint-grid position-absolute top-0 start-0 w-100 h-100 opacity-10 pointer-events-none"></div>
            
            <div class="ym_container position-relative">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="text-white display-3 fw-black mb-3">Connect With Our <br><span class="font-serif-italic text-info">Global Offices.</span></h1>
                        <p class="text-white-50 fs-5 max-w-xl">Initiate structural collaborations, request engineering reviews, or reach our project management desks worldwide.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2: Split Forms & Contacts -->
        <section class="py-5 bg-white position-relative" style="padding-top: 100px !important; padding-bottom: 100px !important;">
            <div class="ym_container">
                <div class="row g-5 align-items-stretch">
                    
                    <!-- Left: Global Offices List -->
                    <div class="col-lg-5">
                        <div class="p-5 h-100 d-flex flex-column justify-content-between" style="background-color: var(--surface-low) !important;">
                            <span class="label-blueprint mb-3 d-inline-block">Location</span>
                            <h3 class="fw-black mb-2 fs-2">The Stambha Studio</h3>
                            <p>Stambha delivers engineering solutions across global development zones, with all technical leadership and coordination driven from one dedicated studio.</p>
                            <div>
                                <img src="{{ asset('front/images/LOGO.png') }}" class="img-fluid con_logo">
                            </div>
                            
                            <div class="mt-4 pt-4 border-top border-secondary-subtle">
                                <p class="text-dark fw-bold m-0">
                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.2132 27.8711C21.9796 28.1297 21.7335 28.3924 21.4751 28.6551C23.8982 28.9803 25.5581 29.6518 25.5581 30.4233C25.5581 31.516 22.2385 32.4001 18.1386 32.4001C14.039 32.4001 10.719 31.516 10.719 30.4233C10.719 29.6768 12.2705 29.026 14.56 28.6926C14.3014 28.434 14.0596 28.1754 13.826 27.917C10.5814 28.5344 8.3457 29.8232 8.3457 31.3161C8.3457 33.4055 12.7289 35.103 18.1384 35.103C23.5433 35.103 27.9311 33.4055 27.9311 31.3161C27.9354 29.7853 25.5872 28.4675 22.2132 27.8711Z" fill="#0b1c30"></path>
                                    <path d="M28.7902 11.6942C28.7902 5.73421 23.9607 0.904297 18.0011 0.904297C12.0415 0.904297 7.21191 5.73384 7.21191 11.6942C7.21191 16.6818 14.7795 26.8911 17.239 30.0774C17.6249 30.5773 18.3773 30.5773 18.7632 30.0774C21.2226 26.891 28.7902 16.6815 28.7902 11.6942ZM13.651 11.6942C13.651 9.29179 15.5987 7.34443 17.9968 7.34443C20.3992 7.34443 22.3465 9.29209 22.3465 11.6942C22.3465 14.0966 20.3989 16.04 17.9968 16.04C15.5984 16.04 13.651 14.0963 13.651 11.6942Z" fill="#0b1c30"></path>
                                    <defs>
                                        <linearGradient id="paint0_linear_907_2142" x1="-7.18112" y1="3.07312" x2="28.2735" y2="42.6184" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#97E0FF"></stop>
                                            <stop offset="1" stop-color="#1075FF"></stop>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_907_2142" x1="1.73123" y1="-4.91618" x2="37.1858" y2="34.6295" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#97E0FF"></stop>
                                            <stop offset="1" stop-color="#1075FF"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                                        <a href="https://maps.app.goo.gl/K8wqNCVMuNwfjJp38">157, santosh nagar, nirman nagar, Jaipur</a></p>
                                <p class="text-dark fw-bold m-0 my-3"><span>
                                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_907_2158)">
                                    <path d="M27.4611 23.4988C25.9532 22.2291 23.717 22.3909 22.4473 23.8988L21.02 25.6C20.7046 25.9865 20.117 26.0331 19.7387 25.7558C15.8929 22.8769 12.8219 19.1542 10.6974 14.8297C10.4849 14.3973 10.6832 13.8367 11.0694 13.5943L12.9868 12.505C14.692 11.541 15.3029 9.37775 14.3307 7.63442L11.6129 2.95929C10.7823 1.50426 8.83687 1.1653 7.55337 2.23794C2.71302 6.22635 0.605891 13.2929 10.0201 24.6568C19.4262 35.9827 26.7577 35.2439 31.5899 31.2174C32.8734 30.1448 32.8913 28.1887 31.6229 27.1066L27.4611 23.4988Z" fill="#0b1c30"></path>
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_907_2158" x1="-0.964601" y1="0.888575" x2="30.3212" y2="35.1745" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#97E0FF"></stop>
                                        <stop offset="1" stop-color="#1075FF"></stop>
                                    </linearGradient>
                                    <clipPath id="clip0_907_2158">
                                        <rect width="34" height="34" fill="white" transform="translate(1 0.757812)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                                </span><a tel:+919875803748>+91 9875803748</a></p>
                                <p class="text-dark fw-bold m-0"><span>
                                    <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.60164 6.17188C3.98449 6.17188 3.42682 6.38007 2.96582 6.7221L16.7736 19.9499C17.4205 20.5671 18.4243 20.5671 19.0712 19.9499L32.9534 6.64775C32.5147 6.35033 31.9867 6.17188 31.4142 6.17188L4.60164 6.17188Z" fill="#0b1c30"></path>
                                <path d="M34.1493 27.3284V8.90316C34.1493 8.43472 34.0229 7.99602 33.8073 7.60938L22.8398 18.1158L33.7998 28.6222C34.0155 28.2356 34.1493 27.7969 34.1493 27.3284Z" fill="#0b1c30"></path>
                                <path d="M19.9635 20.8761C19.3909 21.4263 18.6548 21.7014 17.9261 21.7014C17.1975 21.7014 16.4539 21.4263 15.8888 20.8761L13.9407 19.0098L2.96582 29.5162C3.42682 29.8582 3.98449 30.0664 4.60164 30.0664H31.4142C31.9867 30.0664 32.5147 29.888 32.9534 29.5905L21.9116 19.0098L19.9635 20.8761Z" fill="#0b1c30"></path>
                                <path d="M1.84863 8.90258V27.3204C1.84863 27.7517 1.96017 28.1532 2.13118 28.5101L12.9945 18.1152L2.13862 7.71289C1.96017 8.07723 1.84863 8.47875 1.84863 8.90258Z" fill="#0b1c30"></path>
                                <defs>
                                    <linearGradient id="paint0_linear_907_2148" x1="6.65469" y1="-5.70403" x2="37.9405" y2="28.5819" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#97E0FF"></stop>
                                        <stop offset="1" stop-color="#1075FF"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_907_2148" x1="9.23105" y1="-8.0608" x2="40.5168" y2="26.2248" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#97E0FF"></stop>
                                        <stop offset="1" stop-color="#1075FF"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_907_2148" x1="-4.73327" y1="4.68444" x2="26.5525" y2="38.97" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#97E0FF"></stop>
                                        <stop offset="1" stop-color="#1075FF"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_907_2148" x1="-7.30111" y1="7.0234" x2="23.9847" y2="41.3093" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#97E0FF"></stop>
                                        <stop offset="1" stop-color="#1075FF"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                                </span><a href="mailto:stambhaconsultants@gmail.com">stambhaconsultants@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right: Advanced Consultation Form -->
                    <div class="col-lg-7">
                        <div class="p-5 border h-100" style="border-color: var(--outline-variant) !important; background-color: var(--surface-lowest);">
                            <span class="label-blueprint mb-3 d-inline-block">Consultation</span>
                            <h3 class="fw-black mb-4 fs-2">Inquiry Form</h3>
                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                @if(session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="full_name" class="label-blueprint mb-2" style="font-size: 0.55rem;">Your Name</label>
                                            <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}" required 
                                            class="form-control rounded-0 border-0 border-bottom bg-transparent px-0 py-2" 
                                            placeholder="e.g. Frank Gehry" 
                                            style="border-bottom: 2px solid var(--outline-variant) !important;"
                                            pattern="^[a-zA-Z\s'-]{2,50}$"
                                            oninput="this.value = this.value.replace(/[^a-zA-Z\s'-]/g, '');"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="email" class="label-blueprint mb-2" style="font-size: 0.55rem;">Email</label>
                                            <input type="email" name="email" id="email" value="{{ old('email') }}" required 
                                            class="form-control rounded-0 border-0 border-bottom bg-transparent px-0 py-2" 
                                            placeholder="e.g. frank@studio.com" 
                                            style="border-bottom: 2px solid var(--outline-variant) !important;"
                                            pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                                            oninput="this.value = this.value.replace(/[^a-zA-Z0-9@._+-]/g, '');"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="contact_number" class="label-blueprint mb-2" style="font-size: 0.55rem;">Contact No.</label>
                                            <input type="text" name="contact_number" id="contact_number" value="{{ old('contact_number') }}" required 
                                            class="form-control rounded-0 border-0 border-bottom bg-transparent px-0 py-2" 
                                            placeholder="e.g. +1 (555) 123-4567" 
                                            style="border-bottom: 2px solid var(--outline-variant) !important;"
                                            pattern="^\+?[0-9\s()--]{7,20}$"
                                            oninput="this.value = this.value.replace(/[^0-9\s()+-]/g, '');"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="project_type" class="label-blueprint mb-2" style="font-size: 0.55rem;">Project type</label>
                                            <input type="text" name="project_type" id="project_type" value="{{ old('project_type') }}" required class="form-control rounded-0 border-0 border-bottom bg-transparent px-0 py-2" placeholder="e.g. Residential, Commercial, Industrial" style="border-bottom: 2px solid var(--outline-variant) !important;">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 mt-4">
                                    <label for="message" class="label-blueprint mb-2" style="font-size: 0.55rem;">Message</label>
                                    <textarea name="message" id="message" required rows="4" class="form-control rounded-0 border-0 border-bottom bg-transparent px-0 py-2" placeholder="Describe scope, height, spans, material specs, or auditing needs..." 
                                    style="border-bottom: 2px solid var(--outline-variant) !important; resize: none;"
                                    pattern="^(?!.*<script).*$"
                                    oninput="this.value = this.value.replace(/[<>\\`$]/g, '');"
                                    >{{ old('message') }}</textarea>
                                </div>
                                <button type="submit" class="btn-tectonic-primary w-100 py-3 mt-3">Submit Consultation Request</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- Section 3: FAQ Accordion Section -->
        <section class="py-5" style="background-color: var(--surface-low); padding-top: 100px !important; padding-bottom: 120px !important;">
            <div class="ym_container">
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-8 text-center">
                        <!--<span class="label-blueprint mb-3 d-inline-block">Information</span>-->
                        <h2 class="display-5 fw-black mb-4">Frequently Asked Questions</h2>
                        <p class="text-muted fs-6">Common questions about our process, timelines, and scope.</p>
                    </div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="accordion accordion-tectonic" id="faqAccordion">
                            
                            <!-- FAQ Item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       What regions do you serve?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body px-0 text-secondary fs-6 leading-relaxed">
                                        We currently serve clients across Jaipur and Rajasthan, working to Indian Standard codes (IS 456, IS 800, IS 1893, IS 2950).
                                    </div>
                                </div>
                            </div>
                            
                            <!-- FAQ Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Do you support contractors during construction?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body px-0 text-secondary fs-6 leading-relaxed">
                                        Yes — we provide structural drawings and detailing for site use, and our team is available for site coordination and clash resolution as construction progresses.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- FAQ Item 3 -->
                            <!--<div class="accordion-item">-->
                            <!--    <h2 class="accordion-header" id="headingThree">-->
                            <!--        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
                            <!--            How does your low-carbon concrete optimization workflow function?-->
                            <!--        </button>-->
                            <!--    </h2>-->
                            <!--    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">-->
                            <!--        <div class="accordion-body px-0 text-secondary fs-6 leading-relaxed">-->
                            <!--            We deploy custom parametric algorithms that run thousands of structural configurations. These models locate sections of excessive volume and reduce concrete mass without reducing safety parameters. This typically yields a 25% to 40% reduction in structural carbon output.-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                            <!-- FAQ Item 4 -->
                            <!--<div class="accordion-item">-->
                            <!--    <h2 class="accordion-header" id="headingFour">-->
                            <!--        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">-->
                            <!--            Do you provide support for general contractors during construction?-->
                            <!--        </button>-->
                            <!--    </h2>-->
                            <!--    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">-->
                            <!--        <div class="accordion-body px-0 text-secondary fs-6 leading-relaxed">-->
                            <!--            Yes. We provide full LOD 500 BIM models that integrate with general construction software. Our field engineers perform regular site assessments, coordinate with constructors to resolve clashes, and sign off on inspections immediately.-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
