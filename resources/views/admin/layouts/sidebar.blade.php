<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>
            <li class="menu-header">Starter</li>

            <li class="dropdown {{ setActive([
                'admin.category.*',
                'admin.sub-category.*',
                'admin.child-category.*',
            ]) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Manage Categorise</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActive(['admin.category.*']) }}">
                        <a class="nav-link" href="{{ route('admin.category.index') }}">Category</a>
                    </li>
                    <li class="{{ setActive(['admin.sub-category.*']) }}">
                        <a class="nav-link" href="{{ route('admin.sub-category.index') }}">Sub Category</a>
                    </li>
                    <li class="{{ setActive(['admin.child-category.*']) }}">
                        <a class="nav-link" href="{{ route('admin.child-category.index') }}">Child Category</a>
                    </li>
                </ul>
            </li>


            <li class="dropdown ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Orders</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="">All Orders</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">All Pending Orders</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">All Processed Orders</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">All Dropped Off Orders</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">All Shipped Orders</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">All Out For Delivery Orders</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">All Delivered Orders</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">All Canceled Orders</a>
                    </li>

                </ul>
            </li>

            <li class="">
                <a class="nav-link" href=""><i class="far fa-square"></i> <span>Transactions</span></a>
            </li>

            <li class="dropdown ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Manage Products</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="">Brands</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">Products</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">Seller Products</a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">Seller Pending
                            Products</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Ecommerce</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="">Flash Sale</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="">Coupons</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="">Shipping Rule</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="">Vendor Profile</a>
                    </li>

                    <li class="">
                        <a class="nav-link" href="">Payment Setting</a>
                    </li>

                </ul>
            </li>

            <li class="dropdown ">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Manage Website</span></a>
                <ul class="dropdown-menu">
                    <li class="">
                        <a class="nav-link" href="">Slider</a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a class="nav-link" href=""><i class="far fa-square"></i> <span>Settings</span></a>
            </li>


            {{--<li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Layout</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                    <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                    <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
            </li>--}}


            {{--<li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a>--}}
            {{--</li>--}}

        </ul>


        {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div> --}}
    </aside>
</div>