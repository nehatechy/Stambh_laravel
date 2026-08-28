<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title', 'Dashboard') | Admin Panel</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.css" rel="stylesheet">
    <!-- Custom admin styles -->
     
    <link href="{{ asset('admin/css/admin.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>

    @include('admin.partials.sidebar')
     @include('admin.partials.topbar')

    <div class="main-wrapper" id="mainWrapper">

       

        <main class="content-area">

            {{-- Page heading + breadcrumb --}}
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
                <div>
                    <h4 class="mb-0">@yield('page-title', 'Dashboard')</h4>
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 small">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            @yield('breadcrumb')
                        </ol>
                    </nav> -->
                </div>
                <div>
                    @yield('page-actions')
                </div>
            </div>

            {{-- Flash messages --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

           
            @yield('content')

        </main>

        <footer class="text-center admin-footer text-muted small py-3 border-top bg-white">
            &copy; {{ date('Y') }} Your Company. All rights reserved.
        </footer>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.js"></script>

    <script>
        // Sidebar toggle for mobile/tablet and other admin helpers
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        const toggleBtn = document.getElementById('sidebarToggle');

        function openSidebar() {
            if (sidebar) sidebar.classList.add('show');
            if (overlay) overlay.classList.add('show');
        }
        function closeSidebar() {
            if (sidebar) sidebar.classList.remove('show');
            if (overlay) overlay.classList.remove('show');
        }

        if (toggleBtn) {
            toggleBtn.addEventListener('click', () => {
                if (sidebar && sidebar.classList.contains('show')) {
                    closeSidebar();
                } else {
                    openSidebar();
                }
            });
        }

        if (overlay) overlay.addEventListener('click', closeSidebar);

        // Close sidebar automatically on link click (mobile only)
        document.querySelectorAll('.sidebar .nav-link').forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 992) closeSidebar();
            });
        });

        // Generic file preview helper for admin forms
        function previewFile(input, previewId) {
            const file = input.files && input.files[0];
            const preview = document.getElementById(previewId);
            if (!preview) return;
            if (!file) {
                preview.innerHTML = '';
                return;
            }

            const type = file.type || '';
            preview.innerHTML = '';

            if (type.startsWith('image/')) {
                const img = document.createElement('img');
                img.src = URL.createObjectURL(file);
                img.style.maxWidth = '240px';
                img.style.maxHeight = '160px';
                img.className = 'img-preview rounded';
                preview.appendChild(img);
            } else {
                const a = document.createElement('a');
                a.href = URL.createObjectURL(file);
                a.target = '_blank';
                a.rel = 'noopener';
                a.textContent = file.name;
                a.className = 'd-inline-block';
                preview.appendChild(a);
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            if (window.jQuery && typeof $.fn.summernote !== 'undefined') {
                $('.summernote').summernote({
                    height: 300,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontname', ['fontname']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['link', 'picture', 'video', 'table', 'hr']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
            }
        });
    </script>

    @stack('scripts')
</body>
</html>