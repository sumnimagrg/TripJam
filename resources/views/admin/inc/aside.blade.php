<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="#" class="app-brand-text demo menu-text fw-bolder ms-2">Admin</a>
            </div>
            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item ">
                    <a href="{{ route('admin.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>                
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-layout"></i>
                        <div data-i18n="Layouts">File Manager</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('file.create')}}" class="menu-link">
                                <div data-i18n="Without menu">Create</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('file.index')}}" class="menu-link">
                                <div data-i18n="Without navbar">Index</div>
                            </a>
                        </li>

                    </ul>
                </li>               
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-layout"></i>
                        <div data-i18n="Layouts">Bus Manager</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('bus.create')}}" class="menu-link">
                                <div data-i18n="Without menu">Create</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('bus.index')}}" class="menu-link">
                                <div data-i18n="Without navbar">Index</div>
                            </a>
                        </li>

                    </ul>
                </li>                
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-layout"></i>
                        <div data-i18n="Layouts">Route Manager</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('route.create')}}" class="menu-link">
                                <div data-i18n="Without menu">Create</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('route.index')}}" class="menu-link">
                                <div data-i18n="Without navbar">Index</div>
                            </a>
                        </li>

                    </ul>
                </li>                
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-layout"></i>
                        <div data-i18n="Layouts">Bus Route Manager</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('busRoute.create')}}" class="menu-link">
                                <div data-i18n="Without menu">Create</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('busRoute.index')}}" class="menu-link">
                                <div data-i18n="Without navbar">Index</div>
                            </a>
                        </li>

                    </ul>
                </li>                
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-layout"></i>
                        <div data-i18n="Layouts">Driver Manager</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('driver.create')}}" class="menu-link">
                                <div data-i18n="Without menu">Create</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('driver.index')}}" class="menu-link">
                                <div data-i18n="Without navbar">Index</div>
                            </a>
                        </li>

                    </ul>
                </li>                
               
            </ul>
        </aside>
</div>
