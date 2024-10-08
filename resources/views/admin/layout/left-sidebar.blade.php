<!-- get current url/page/route name-->
@php
$current_route=request()->route()->getName(); 
@endphp

<!-- Left Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/admin/dashboard" class="brand-link">
            <img src="{{ asset('images/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">e-Merkado</span>
        </a>
        
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="{{ route('profile.show') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin-dashboard') }}" class="nav-link {{ $current_route=='admin-dashboard'?'active':'' }}"> {{-- route('admin-dashboard') is the name route in web.php --}}
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            {{ __('Dashboard') }}
                        </p>
                    </a>
                </li>

                <li class="nav-item {{ in_array($current_route, ['pages.vendor', 'pages.buyer', 'pages.merchant', 'pages.create_merchant' ]) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ in_array($current_route, ['pages.vendor', 'pages.buyer', 'pages.merchant', 'pages.create_merchant']) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users nav-icon"></i>
                        <p>
                            {{ __('Users Management') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pages.vendor') }}" class="nav-link {{ $current_route=='pages.vendor'?'active':'' }}">
                                <i class="nav-icon fas fa-store"></i>
                                <p>Vendor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.merchant') }}" class="nav-link {{ $current_route == 'pages.merchant' || $current_route == 'pages.create_merchant' ? 'active':'' }}">
                                <i class="nav-icon fas fa-comments-dollar"></i>
                                <p>Merchant</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pages.buyer') }}" class="nav-link {{ $current_route=='pages.buyer'?'active':'' }}">
                                <i class="nav-icon fas fa-user-tie"></i>
                                <p>Buyer</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link">
                        <i class="nav-icon far fa-address-card"></i>
                        <p>
                            {{ __('About us') }}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    </aside>