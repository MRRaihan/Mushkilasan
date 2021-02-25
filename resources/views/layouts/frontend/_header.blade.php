@if(Auth::user()->user_type == 'agent')

<h1>User Dashboard</h1>

@else



<header class="header">
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
						<span class="bar-icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
            </a>
            <a href="{{ route('home') }}" class="navbar-brand logo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" style="height: auto; max-width: 100%; max-height: 75px;" class="img-fluid">
            </a>
            <a href="{{ route('home') }}" class="navbar-brand logo-small">
                <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="Logo">
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="index.html" class="menu-logo">
                    <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
            </div>
            <ul class="main-nav">
                {{--<li class="active">
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="categories.html">Categories</a>
                </li>
                <li class="has-submenu">
                    <a href="provider-dashboard.html">Providers</a>
                    <ul class="submenu">
                        <li><a href="provider-dashboard.html">Dashboard</a></li>
                        <li><a href="my-services.html">Services</a></li>
                        <li><a href="provider-bookings.html">Bookings</a></li>
                        <li><a href="provider-settings.html">Profile Settings</a></li>
                        <li><a href="provider-wallet.html">Wallet</a></li>
                        <li><a href="provider-subscription.html">Subscription</a></li>
                        <li><a href="provider-availability.html">Availability</a></li>
                        <li><a href="provider-reviews.html">Reviews</a></li>
                        <li><a href="provider-payment.html">Payment</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="user-dashboard.html">Customers</a>
                    <ul class="submenu">
                        <li><a href="user-dashboard.html">Dashboard</a></li>
                        <li><a href="user-bookings.html">Bookings</a></li>
                        <li><a href="user-settings.html">Profile Settings</a></li>
                        <li><a href="user-wallet.html">Wallet</a></li>
                        <li><a href="user-reviews.html">Reviews</a></li>
                        <li><a href="user-payment.html">Payment</a></li>
                    </ul>
                </li>--}}
                <li class="has-submenu">
                    <a href="#">Categories <i class="fas fa-chevron-down"></i></a>
                    {{--<ul class="submenu">
                        <li><a href="#">Search</a></li>
                    </ul>--}}
                        <ul class="submenu">
                            @foreach($categories as $category)
                             <li><a href="#">{{ $category->category_name }}</a></li>
                            @endforeach
                        </ul>

                </li>
                <li>
                    <a href="#">About Us</a>
                </li>
                <li>
                    <a href="#">Contack Us</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#provider-register">Become a Professional</a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#user-register">Become a User</a>
                </li>
                <li class="has-submenu">
                    <a href="user-dashboard.html">Language<i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="#">Bangla</a></li>
                        <li><a href="#">English</a></li>

                    </ul>
                </li>
            </ul>
        </div>
        <ul class="nav header-navbar-rht">
            <li class="nav-item">
                <a class="nav-link header-login" href="javascript:void(0);" data-toggle="modal" data-target="#login_modal">Login</a>
            </li>
        </ul>
    </nav>
</header>

@endif
