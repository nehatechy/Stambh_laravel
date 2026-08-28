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
                        <ul class="navbar-nav gap-4">
                            <li class="nav-item">
                                <a
                                    href="{{ route('about') }}" data-text="About Us">
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    href="{{ route('projects.list') }}" data-text="Projects">
                                    <span>Projects</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    href="{{ route('careers.list') }}" data-text="Careers">
                                    <span>Careers</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    href="{{ route('blogs') }}" data-text="Blogs">
                                    <span>Blogs</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    href="{{ route('contact') }}" data-text="Contact Us">
                                    <span>Contact Us</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Right CTA Button -->
                    <div class="d-none d-lg-block">
                        <a href="{{ route('contact') }}"
                             class="com_btn">Get
                            In Touch</a>
                    </div>

                    <!-- Hamburger Button (Mobile only) -->
                    <button class="border-0 bg-transparent d-lg-none"
                        type="button" id="mobile-nav-toggle"
                        aria-label="Toggle navigation">
                        <span
                            class="material-symbols-outlined text-dark fs-2">menu</span>
                    </button>

                </div>
                <!-- Mobile Dropdown Nav panel -->
            <div class="mobile-nav-panel">
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('projects.list') }}">Projects</a>
                <a href="{{ route('careers.list') }}">Careers</a>
                <a href="{{ route('blogs') }}">Blogs</a>
                <a href="{{ route('contact') }}">Contact Us</a>
                <div class="mt-4 pt-3 border-top">
                    <a href="{{ route('contact') }}"
                        class="btn-tectonic-primary text-center text-white w-100 mb-0">Get
                        In Touch</a>
                </div>
            </div>
            </nav>

        </header>