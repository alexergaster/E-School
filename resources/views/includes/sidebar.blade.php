<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home.index') }}" class="brand-link">
        <img src="{{ asset('images/misc/logo.png') }}" alt="E-School Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">E-School</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                E-School Admin
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item {{ request()->routeIs('admin.programs.index') ? 'menu-open': '' }}">
                    <a href="{{ route('admin.programs.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Програми</p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.staff.index') ? 'menu-open': '' }}">
                    <a href="{{ route('admin.staff.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Вчителі</p>
                    </a>
                </li><li class="nav-item {{ request()->routeIs('admin.mc.index') ? 'menu-open': '' }}">
                    <a href="{{ route('admin.mc.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Майстер класи</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
