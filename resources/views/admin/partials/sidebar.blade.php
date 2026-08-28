<aside class="sidebar" id="sidebar">
    <div class="brand">
        <i class="bi bi-grid-1x2-fill me-2"></i> Admin Panel
    </div>

    <nav class="nav flex-column py-2">
        <a href="{{ route('admin.dashboard') }}"
           class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>

        <div class="nav-section-title">Content</div>

        <a href="{{ route('admin.projects.index') }}"
           class="nav-link {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
            <i class="bi bi-kanban"></i> Projects
        </a>

        <a href="{{ route('admin.blog.index') }}"
           class="nav-link {{ request()->routeIs('admin.blog.*') ? 'active' : '' }}">
            <i class="bi bi-file-earmark-text"></i> Blog
        </a>

        <a href="{{ route('admin.career.index') }}"
           class="nav-link {{ request()->routeIs('admin.career.*') ? 'active' : '' }}">
            <i class="bi bi-briefcase"></i> Careers
        </a>
        <a href="{{ route('admin.career-applications.index') }}" class="nav-link {{ request()->routeIs('admin.career-applications.*') ? 'active' : '' }}">
            <i class="bi bi-file-earmark"></i> Career Applications
        </a>

        <div class="nav-section-title">Communication</div>

        <a href="{{ route('admin.contact-inquiries.index') }}"
           class="nav-link {{ request()->routeIs('admin.contact-inquiries.*') ? 'active' : '' }}">
            <i class="bi bi-envelope"></i> Contact Inquiries
            @if(isset($newInquiriesCount) && $newInquiriesCount > 0)
                <span class="badge bg-danger rounded-pill ms-auto">{{ $newInquiriesCount }}</span>
            @endif
        </a>

        <div class="nav-section-title">Account</div>

        <a href="#" class="nav-link">
            <i class="bi bi-gear"></i> Settings
        </a>

        <form action="" method="POST">
            @csrf
            <!-- <button type="submit" class="nav-link border-0 bg-transparent w-100 text-start">
                <i class="bi bi-box-arrow-right"></i> Logout
            </button> -->
        </form>
    </nav>
</aside>

<div class="sidebar-overlay" id="sidebarOverlay"></div>