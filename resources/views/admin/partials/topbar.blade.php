<header class="topbar">
    <div class="d-flex align-items-center gap-2">
        <button id="sidebarToggle" type="button" aria-label="Toggle sidebar">
            <i class="bi bi-list"></i>
        </button>
        <h5 class="mb-0 d-none d-sm-block">@yield('page-title', 'Dashboard')</h5>
    </div>

    <div class="d-flex align-items-center gap-3">
        <div class="dropdown">
            <button class="btn btn-light position-relative" type="button" data-bs-toggle="dropdown">
                <i class="bi bi-bell"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    3
                </span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><h6 class="dropdown-header">Notifications</h6></li>
                <li><a class="dropdown-item small" href="#">New contact inquiry received</a></li>
                <li><a class="dropdown-item small" href="#">New job application submitted</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item small text-center" href="#">View all</a></li>
            </ul>
        </div>

        <div class="dropdown">
            <button class="btn d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown">
                <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name ?? 'Admin' }}&background=4f46e5&color=fff"
                     class="rounded-circle" width="32" height="32" alt="Avatar">
                <span class="d-none d-md-inline">{{ auth()->user()->name ?? 'Admin' }}</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                   
                </li>
            </ul>
        </div>
    </div>
</header>