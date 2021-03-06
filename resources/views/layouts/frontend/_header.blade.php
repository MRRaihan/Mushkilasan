
@guest
    {{ 'minar'}}
@else
{{'no'}}
@endguest





<!-- Header -->
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
            <a href="index.html" class="navbar-brand logo">
                <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
            </a>
            <a href="index.html" class="navbar-brand logo-small">
                <img src="assets/img/logo-icon.png" class="img-fluid" alt="Logo">
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
                <li>
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
                <li class="has-submenu active">
                    <a href="user-dashboard.html">Customers</a>
                    <ul class="submenu">
                        <li class="active"><a href="user-dashboard.html">Dashboard</a></li>
                        <li><a href="user-bookings.html">Bookings</a></li>
                        <li><a href="user-settings.html">Profile Settings</a></li>
                        <li><a href="user-wallet.html">Wallet</a></li>
                        <li><a href="user-reviews.html">Reviews</a></li>
                        <li><a href="user-payment.html">Payment</a></li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="user-dashboard.html#">Pages <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="search.html">Search</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                        <li><a href="add-service.html">Add Service</a></li>
                        <li><a href="edit-service.html">Edit Service</a></li>
                        <li><a href="chat.html">Chat</a></li>
                        <li><a href="notifications.html">Notifications</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="user-dashboard.html#">Terms & Conditions</a></li>
                        <li><a href="user-dashboard.html#">Privacy Policy</a></li>
                    </ul>
                </li>
                <li>
                    <a href="admin/index.html" target="_blank">Admin</a>
                </li>
            </ul>
        </div>
        
        <ul class="nav header-navbar-rht">
            <li class="nav-item desc-list wallet-menu">
                <a href="user-wallet.html" class="nav-link header-login">
                    <img src="assets/img/wallet.png" alt="" class="mr-2 wallet-img"><span>Wallet:</span> $1875
                </a>
            </li>

            <!-- Notifications -->
            <li class="nav-item dropdown logged-item">
                <a href="user-dashboard.html#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bell"></i> <span class="badge badge-pill bg-yellow">2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="notifications.html">
                                    <div class="media">
                                        <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-01.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"> <span class="noti-title">Thomas Herzberg  has rejected the service</span></p>
                                            <p class="noti-time"><span class="notification-time">Today 01:00 AM</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="notification-message">
                                <a href="notifications.html">
                                    <div class="media">
                                        <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-02.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"> <span class="noti-title">Matthew Garcia have completed the service</span></p>
                                            <p class="noti-time"><span class="notification-time">Today 11:07 AM</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="notification-message">
                                <a href="notifications.html">
                                    <div class="media">
                                        <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-03.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"> <span class="noti-title">Yolanda Potter have inprogress the service</span></p>
                                            <p class="noti-time"><span class="notification-time">17 Sep 2020 9:00 PM</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="notification-message">
                                <a href="notifications.html">
                                    <div class="media">
                                        <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-04.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"> <span class="noti-title">Ricardo Flemings have completed the service</span></p>
                                            <p class="noti-time"><span class="notification-time">16 Sep 2020 12:00 PM</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="notification-message">
                                <a href="notifications.html">
                                    <div class="media">
                                        <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-05.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"> <span class="noti-title">Maritza Wasson have inprogress the service</span></p>
                                            <p class="noti-time"><span class="notification-time">15 Sep 2020 5:32 PM</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="notifications.html">View all Notifications</a>
                    </div>
                </div>
            </li>
            <!-- /Notifications -->

            <!-- chat -->
            <li class="nav-item logged-item">
                <a href="chat.html" class="nav-link">
                    <i class="fa fa-comments" aria-hidden="true"></i>
                </a>
            </li>
            <!-- /chat -->
            
            <li class="nav-item dropdown has-arrow logged-item">
                <a href="user-dashboard.html#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                    <span class="user-img">
                        <img class="rounded-circle" src="assets/img/customer/user-01.jpg" alt="">
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img class="avatar-img rounded-circle" src="assets/img/customer/user-01.jpg" alt="">
                        </div>
                        <div class="user-text">
                            <h6>Jeffrey Akridge</h6>
                            <p class="text-muted mb-0">User</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="user-dashboard.html">Dashboard</a>
                    <a class="dropdown-item" href="user-bookings.html">My Bookings</a>
                    <a class="dropdown-item" href="user-settings.html">Profile Settings</a>
                    <a class="dropdown-item" href="https://truelysell-html.dreamguystech.com/template/all-services.html">Book Services</a>
                    <a class="dropdown-item" href="chat.html">Chat</a>
                    <a class="dropdown-item" href="index.html">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
</header>
<!-- /Header -->



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
