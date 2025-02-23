<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="#" class="app-brand-text demo menu-text fw-bolder ms-2">Admin</a>
            </div>
            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>                
                <li class="menu-item {{ request()->is('admin/pages/buses') ? '' : '' }}">
                    <a href="{{ route('admin.buses') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-bus"></i>
                        <div data-i18n="Analytics">Buses</div>
                    </a>
                </li>                
                <li class="menu-item {{ request()->is('admin/pages/seats') ? '' : '' }}">
                    <a href="{{ route('admin.seats') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-chair"></i>
                        <div data-i18n="Analytics">Seats</div>
                    </a>
                </li>                
                <li class="menu-item {{ request()->is('admin/pages/routes') ? '' : ''}}">
                    <a href="{{ route('admin.routes') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-map"></i> 
                        <div data-i18n="Analytics">Routes</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin/pages/customers') ? '' : '' }}">
                    <a href="{{ route('admin.customers') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-group"></i>
                        <div data-i18n="Analytics">Customers</div>
                    </a>
                </li>
            </ul>
        </aside>
</div>
