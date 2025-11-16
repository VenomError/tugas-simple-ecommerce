<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ url('/admin') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('dashboard/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('dashboard/assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>

        <!-- Light Logo-->
        <a href="{{ url('/admin') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('dashboard/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('dashboard/assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>

        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu"></div>

            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <!-- Dashboard -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('/admin') }}">
                        <i class="mdi mdi-speedometer"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <!-- Category -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('/admin/category') }}">
                        <i class="mdi mdi-shape-outline"></i>
                        <span data-key="t-category">Category</span>
                    </a>
                </li>

                <!-- Product -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('/admin/product') }}">
                        <i class="mdi mdi-view-grid-plus-outline"></i>
                        <span data-key="t-product">Product</span>
                    </a>
                </li>

                <!-- Order -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('/admin/order') }}">
                        <i class="mdi mdi-cart-outline"></i>
                        <span data-key="t-order">Order</span>
                    </a>
                </li>

                <!-- Customer -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('/admin/customer') }}">
                        <i class="mdi mdi-account-group-outline"></i>
                        <span data-key="t-customer">Customer</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <div class="sidebar-background"></div>
</div>