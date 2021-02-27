@extends('user.master')
@section('content_section')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-4">
                    <div class="mb-4">
                        <div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">
                            <img alt="profile image" src="{{url('/assets')}}/img/customer/user-01.jpg" class="avatar-lg rounded-circle">
                            <div class="ml-sm-3 ml-md-0 ml-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                                <h6 class="mb-0">Jeffrey Akridge</h6>
                                <p class="text-muted mb-0">Member Since Apr 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="widget settings-menu">
                        <ul role="tablist" class="nav nav-tabs">
                            <li class="nav-item current">
                                <a href="{{route('user.dashboard')}}" class="nav-link active">
                                    <i class="fas fa-chart-line"></i> <span>Service Provider Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item current">
                                <a href="user-bookings.html" class="nav-link">
                                    <i class="far fa-calendar-check"></i> <span>My Bookings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="user-settings.html" class="nav-link">
                                    <i class="far fa-user"></i> <span>Profile Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="user-wallet.html" class="nav-link">
                                    <i class="far fa-money-bill-alt"></i> <span>Wallet</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="user-reviews.html" class="nav-link">
                                    <i class="far fa-star"></i> <span>Reviews</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="user-payment.html" class="nav-link">
                                    <i class="fas fa-hashtag"></i> <span>Payment</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <a class="nav-link">
                                        <i class="fas fa-hashtag"></i> <span><button>Logout</button></span>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-md-8">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="user-bookings.html" class="dash-widget dash-bg-1">
                                <span class="dash-widget-icon">223</span>
                                <div class="dash-widget-info">
                                    <span>Bookings</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="user-reviews.html" class="dash-widget dash-bg-2">
                                <span class="dash-widget-icon">16</span>
                                <div class="dash-widget-info">
                                    <span>Reviews</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="notifications.html" class="dash-widget dash-bg-3">
                                <span class="dash-widget-icon">1</span>
                                <div class="dash-widget-info">
                                    <span>Notification</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
