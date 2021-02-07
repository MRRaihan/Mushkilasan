<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-logo">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('assets/img/logo-icon.png') }}" style="max-width: 100%;max-height: 75px;height: auto;" class="img-fluid" alt="" >
        </a>
    </div>
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="{{ route('admin.dashboard') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-user"></i> <span>Admin</span></a>
                </li>
                <li>
                    <a href="{{ route('role.index') }}"><i class="fas fa-user"></i> <span>Role</span></a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}"><i class="fas fa-layer-group"></i> <span>Categories</span></a>
                </li>
                <li>
                    <a href="subcategories.html"><i class="fab fa-buffer"></i> <span>Sub Categories</span></a>
                </li>
                <li>
                    <a href="service-list.html"><i class="fas fa-bullhorn"></i> <span> Services</span></a>
                </li>
                <li>
                    <a href="total-report.html"><i class="far fa-calendar-check"></i> <span> Booking List</span></a>
                </li>
                <li>
                    <a href="payment_list.html"><i class="fas fa-hashtag"></i> <span>Payments</span></a>
                </li>
                <li>
                    <a href="ratingstype.html"><i class="fas fa-star-half-alt"></i> <span>Rating Type</span></a>
                </li>
                <li>
                    <a href="review-reports.html"><i class="fas fa-star"></i> <span>Ratings</span></a>
                </li>
                <li>
                    <a href="subscriptions.html"><i class="far fa-calendar-alt"></i> <span>Subscriptions</span></a>
                </li>
                <li>
                    <a href="wallet.html"><i class="fas fa-wallet"></i> <span> Wallet</span></a>
                </li>
                <li>
                    <a href="service-providers.html"><i class="fas fa-user-tie"></i> <span> Service Providers</span></a>
                </li>
                <li>
                    <a href="users.html"><i class="fas fa-user"></i> <span>Users</span></a>
                </li>
                <li>
                    <a href="settings.html"><i class="fas fa-cog"></i> <span> Settings</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
