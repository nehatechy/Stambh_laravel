 <!-- Header / Navbar (Sticky Glassmorphic Navbar) -->
        <header>
            <nav class="navbar navbar-expand-lg fixed-top glass-navbar py-3">
                <div
                    class="ym_container d-flex justify-content-between align-items-center">

                    <!-- Logo -->
                    <a
                        class="navbar-brand"
                        href="{{ url('/') }}"
                        >
                        <img src="{{ asset('front/images/Text-logo.svg') }}"
                            alt="Stambha Consultants" height="50">
                    </a>

                    <!-- Center Links (Desktop only) -->
                    <div
                        class="collapse navbar-collapse d-none d-lg-flex justify-content-center"
                        id="navbarNav">
                        <ul class="navbar-nav gap-4 align-items-center">
                            <li class="nav-item">
                                <a href="{{ route('about') }}" data-text="About">
                                    <span>About</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('projects.list') }}" data-text="Projects">
                                    <span>Projects</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown nav-item-hover-dropdown">
                                <a href="javascript:void(0)" class="d-inline-flex align-items-center" data-text="Services">
                                    <span>Services</span>
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ms-1" style="margin-top: 2px;"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                </a>
                                <ul class="dropdown-menu border-0 shadow-lg p-2" style="background: rgba(11, 19, 41, 0.95); backdrop-filter: blur(10px); border-radius: 10px;">
                                    <li><a class="dropdown-item text-white py-2 px-3 rounded hover-bg-primary" href="{{ route('services.structural-audit') }}">Structural Audit & Rehabilitation</a></li>
                                    <li><a class="dropdown-item text-white py-2 px-3 rounded hover-bg-primary" href="{{ route('services.industrial-structural') }}">Industrial Structural Engineering</a></li>
                                    <li><a class="dropdown-item text-white py-2 px-3 rounded hover-bg-primary" href="{{ route('services.peb-design') }}">PEB Design & Optimisation</a></li>
                                    <li><a class="dropdown-item text-white py-2 px-3 rounded hover-bg-primary" href="{{ route('services.dpr-preparation') }}">DPR Preparation Services</a></li>
                                    <li><a class="dropdown-item text-white py-2 px-3 rounded hover-bg-primary" href="{{ route('services.bim-modelling') }}">Structural BIM Services</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('blogs') }}" data-text="Blogs">
                                    <span>Blogs</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Right CTA Button -->
                    <div class="d-none d-lg-block">
                        <a href="{{ route('contact') }}" class="com_btn">Get In Touch</a>
                    </div>

                    <!-- Hamburger Button (Mobile only) -->
                    <button class="border-0 bg-transparent d-lg-none"
                        type="button" id="mobile-nav-toggle"
                        aria-label="Toggle navigation">
                        <span class="material-symbols-outlined text-dark fs-2">menu</span>
                    </button>

                </div>
                <!-- Mobile Dropdown Nav panel -->
            <div class="mobile-nav-panel">
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('projects.list') }}">Projects</a>
                <div class="mobile-dropdown-item my-2">
                    <button type="button" class="mobile-dropdown-toggle" id="mobile-services-toggle" aria-expanded="false">
                        <span>Services</span>
                        <svg class="mobile-dropdown-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                    <div class="mobile-dropdown-menu ps-3" id="mobile-services-menu" style="display: none;">
                        <a href="{{ route('services.structural-audit') }}" class="mobile-subnav-link">Structural Audit & Rehabilitation</a>
                        <a href="{{ route('services.industrial-structural') }}" class="mobile-subnav-link">Industrial Structural Engineering</a>
                        <a href="{{ route('services.peb-design') }}" class="mobile-subnav-link">PEB Design & Optimisation</a>
                        <a href="{{ route('services.dpr-preparation') }}" class="mobile-subnav-link">DPR Preparation Services</a>
                        <a href="{{ route('services.bim-modelling') }}" class="mobile-subnav-link">Structural BIM Services</a>
                    </div>
                </div>
                <a href="{{ route('blogs') }}">Blogs</a>
                <a href="{{ route('contact') }}">Contact Us</a>
                <div class="mt-4 pt-3 border-top">
                    <a href="{{ route('contact') }}"
                        class="btn-tectonic-primary text-center text-white w-100 mb-0">Get In Touch</a>
                </div>
            </div>
            </nav>

        </header>