
<!DOCTYPE html>
<html>




<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>TruelySell</title>
    <meta name="viewport" content="">
    <meta name="description" content="TruelySell">
    <meta name="keywords" content="TruelySell,bhhg">

    <meta name="robots" content="" />
    <meta name="googlebot" content="" />
    <meta http-equiv="content-language" content="">

    <META NAME="geo.position" CONTENT="">
    <META NAME="geo.placename" CONTENT="">
    <META NAME="geo.region" CONTENT="">

    <!--for fb-->
    <meta property="og:url" content="" />
    <meta property="og:type" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <!--for Google + -->
    <meta property="og:url" content="" />
    <meta property="og:type" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <!--for Twitter -->
    <meta property="og:url" content="" />
    <meta property="og:type" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />





    <meta name="author" content="Dreamguy's Technologies">
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/mushkilasan_codicnator/uploads/logo/1561615644_download.png">

    <link rel="stylesheet" href="http://localhost/mushkilasan_codicnator/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/mushkilasan_codicnator/assets/plugins/datatables/datatables.min.css">
    <link rel="stylesheet" href="http://localhost/mushkilasan_codicnator/assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="http://localhost/mushkilasan_codicnator/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="http://localhost/mushkilasan_codicnator/assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="http://localhost/mushkilasan_codicnator/assets/css/animate.min.css">
    <link rel="stylesheet" href="http://localhost/mushkilasan_codicnator/assets/css/cropper.min.css">
    <link rel="stylesheet" href="http://localhost/mushkilasan_codicnator/assets/css/avatar.css">
    <link rel="stylesheet" href="http://localhost/mushkilasan_codicnator/assets/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="http://localhost/mushkilasan_codicnator/assets/plugins/owlcarousel/owl.theme.default.min.css">

    <link rel="stylesheet" href="http://localhost/mushkilasan_codicnator/assets/plugins/jquery-ui/jquery-ui.min.css">



    <link rel="stylesheet" href="http://localhost/mushkilasan_codicnator/assets/plugins/toaster/toastr.min.css">

    <link rel="stylesheet" href="http://localhost/mushkilasan_codicnator/assets/css/style.css">







    <script src="http://localhost/mushkilasan_codicnator/assets/js/jquery-3.5.0.min.js"></script>
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
</head>





<body>
<div class="page-loading">
    <div class="preloader-inner">
        <div class="preloader-square-swapping">
            <div class="cssload-square-part cssload-square-green"></div>
            <div class="cssload-square-part cssload-square-pink"></div>
            <div class="cssload-square-blend"></div>
        </div>
    </div>
</div>

<div class="main-wrapper">

    <header class="header sticktop">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                </a>
                <a href="http://localhost/mushkilasan_codicnator/" class="navbar-brand logo">
                    <img src="http://localhost/mushkilasan_codicnator/uploads/logo/1604774087_google-play-badge.png" class="img-fluid" alt="Logo">
                </a>
                <a href="http://localhost/mushkilasan_codicnator/" class="navbar-brand logo-small">
                    <img src="http://localhost/mushkilasan_codicnator/assets/img/logo-icon.png" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="http://localhost/mushkilasan_codicnator/" class="menu-logo">
                        <img src="http://localhost/mushkilasan_codicnator/uploads/logo/1604774087_google-play-badge.png" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">



                    <!--  <li><a href="http://localhost/mushkilasan_codicnator/">Home</a></li> -->
                    <li class="has-submenu">
                        <a href="http://localhost/mushkilasan_codicnator/all-categories">Categories <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                        </ul>
                    </li>

                    <li><a href="http://localhost/mushkilasan_codicnator/about-us">About US</a></li>

                    <li><a href="http://localhost/mushkilasan_codicnator/contact">Contact US</a></li>
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#modal-wizard">Become a Professional</a></li>

                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#modal-wizard1">Become a User</a></li>

                    <li class="login-link">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#tab_login_modal">Login</a>
                    </li>


                    <li class="has-submenu">
                        <a href="javascript:;">en<i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu lang-blk">

                            <li>

                                <input type="hidden" name="csrf_token_name" value="e0e81a09c920ab4f9f0e93602a25c977" id="csrf_lang"/>
                                <a href="javascript:;" onclick="change_language(this)" lang_tag="" lang="en"selected>
                                    English</a></li>
                            <li>

                                <input type="hidden" name="csrf_token_name" value="e0e81a09c920ab4f9f0e93602a25c977" id="csrf_lang"/>
                                <a href="javascript:;" onclick="change_language(this)" lang_tag="rtl" lang="ar">
                                    Arabic</a></li>
                            <li>

                                <input type="hidden" name="csrf_token_name" value="e0e81a09c920ab4f9f0e93602a25c977" id="csrf_lang"/>
                                <a href="javascript:;" onclick="change_language(this)" lang_tag="ltr" lang="ta">
                                    Tamil</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-login" href="javascript:void(0);" data-toggle="modal" data-target="#tab_login_modal">Login</a>
                </li>


            </ul>
        </nav>
    </header>

    <script>

    </script>

    <section class="hero-section">
        <div class="layer">
            <div class="home-banner"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-search">
                            <h3>World's Largest <span>Marketplace</span></h3>
                            <p>Search From 0 Awesome Verified Ads! </p>
                            <div class="search-box">
                                <form action="http://localhost/mushkilasan_codicnator/search" id="search_service" method="post">
                                    <input type="hidden" name="csrf_token_name" value="e0e81a09c920ab4f9f0e93602a25c977" />
                                    <div class="search-input line">
                                        <i class="fas fa-tv bficon"></i>
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control common_search" name="common_search" id="search-blk" placeholder="What are you looking for?" >
                                        </div>
                                    </div>
                                    <div class="search-input">
                                        <i class="fas fa-location-arrow bficon"></i>
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" value="" name="user_address" id="user_address" placeholder="Your Location">
                                            <input type="hidden" value="" name="user_latitude" id="user_latitude">
                                            <input type="hidden" value="" name="user_longitude" id="user_longitude">
                                            <a class="current-loc-icon current_location" data-id="1" href="javascript:void(0);"><i class="fas fa-crosshairs"></i></a>
                                        </div>
                                    </div>
                                    <div class="search-btn">
                                        <button class="btn search_service" name="search" value="search"  type="button">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="search-cat">
                                <i class="fas fa-circle"></i>
                                <span>Popular Searches</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="category-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading">
                                <h2>Featured Categories</h2>
                                <span>What do you need to find?</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="viewall">
                                <h4><a href="http://localhost/mushkilasan_codicnator/all-categories">View All <i class="fas fa-angle-right"></i></a></h4>
                                <span>Featured Categories</span>
                            </div>
                        </div>
                    </div>
                    <div class="catsec">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="category">
                                    No Categories Found
                                </div>
                            </div>                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading">
                                <h2>Most Popular Services</h2>
                                <span>Explore the greates our services. You won’t be disappointed</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="viewall">
                                <h4><a href="http://localhost/mushkilasan_codicnator/all-services">View All <i class="fas fa-angle-right"></i></a></h4>
                                <span>Most Popular</span>
                            </div>
                        </div>
                    </div>
                    <div class="service-carousel">
                        <div class="service-slider owl-carousel owl-theme">

                            <div>
                                <p class="mb-0">
                                    No Services Found
                                </p>
                            </div>                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading howitworks">
                        <h2>How It Works</h2>
                        <span>Aliquam lorem ante, dapibus in, viverra quis</span>
                    </div>
                    <div class="howworksec">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="howwork">
                                    <div class="iconround">
                                        <div class="steps">01</div>
                                        <img src="http://localhost/mushkilasan_codicnator/assets/img/icon-1.png">
                                    </div>
                                    <h3>Choose What To Do</h3>
                                    <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="howwork">
                                    <div class="iconround">
                                        <div class="steps">02</div>
                                        <img src="http://localhost/mushkilasan_codicnator/assets/img/icon-2.png">
                                    </div>
                                    <h3>Find What You Want</h3>
                                    <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="howwork">
                                    <div class="iconround">
                                        <div class="steps">03</div>
                                        <img src="http://localhost/mushkilasan_codicnator/assets/img/icon-3.png">
                                    </div>
                                    <h3>Amazing Places</h3>
                                    <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat Phasellus viverra nulla ut metus varius laoreet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>﻿
    <!-- Review Modal -->
    <div class="modal fade" id="myReview">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Write a review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Reviews</label>
                        <div class="star-rating rate">
                            <input class="rates" id="star5" type="radio" name="rates" value="5">
                            <label for="star5" title="5 stars">
                                <i class="active fas fa-star"></i>
                            </label>
                            <input class="rates" id="star4" type="radio" name="rates" value="4">
                            <label for="star4" title="4 stars">
                                <i class="active fas fa-star"></i>
                            </label>
                            <input class="rates" id="star3" type="radio" name="rates" value="3">
                            <label for="star3" title="3 stars">
                                <i class="active fas fa-star"></i>
                            </label>
                            <input class="rates" id="star2" type="radio" name="rates" value="2">
                            <label for="star2" title="2 stars">
                                <i class="active fas fa-star"></i>
                            </label>
                            <input class="rates" id="star1" type="radio" name="rates" value="1">
                            <label for="star1" title="1 star">
                                <i class="active fas fa-star"></i>
                            </label>
                        </div>
                    </div>
                    <p class="error_rating error" >Rating is required</p>
                    <input type="hidden" id="myInput">
                    <input type="hidden" id="booking_id">
                    <input type="hidden" id="provider_id">
                    <input type="hidden" id="user_id">
                    <input type="hidden" id="service_id">

                    <div class="form-group">
                        <label>Title of your review</label>
                        <select name="type" id="type" class="form-control">
                            <option value="1">Good</option>
                            <option value="2">Excellent</option>
                            <option value="3">Normal</option>
                            <option value="4">High</option>
                        </select>
                        <p class="error_type error" >Rating type is required</p>
                    </div>
                    <div class="form-group">
                        <label>Your review</label>
                        <textarea class="form-control" rows="4" id="review"></textarea>
                        <p class="error_review error">Review is required</p>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-theme py-2 px-4 text-white mx-auto" id="rate_booking" >Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Review Modal -->

    <!-- Cancel Modal -->
    <div class="modal fade" id="myCancel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reason for Cancel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="cancel_myInput">
                    <input type="hidden" id="cancel_booking_id">
                    <input type="hidden" id="cancel_provider_id">
                    <input type="hidden" id="cancel_user_id">
                    <input type="hidden" id="cancel_service_id">

                    <div class="form-group">
                        <label>Reason</label>
                        <textarea class="form-control" rows="5" id="cancel_review"></textarea>
                        <p class="error_cancel error" >Reason is required</p>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-theme py-2 px-4 text-white mx-auto" id="provider_cancel_booking">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Cancel Modal -->

    <!-- Alert Modal -->
    <div class="modal" id="account_alert">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Alert</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p></p>
                        <button type="button" class="btn btn-primary" id="go_user_settings">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Alert Modal -->

    <!-- Account Alert Modal -->
    <div class="modal" id="account_alert_provider">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Alert</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p></p>
                        <button type="button" class="btn btn-primary go_provider_availability">Ok</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Account Alert Modal -->

    <!-- Account Alert Modal -->
    <div class="modal" id="account_alert_provider_sub">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Alert</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p>Please Subscripe your Plan...</p>
                        <button type="button" class="btn btn-primary go_provider_availability" >Ok</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Account Alert Modal -->

    <div class="modal" id="account_alert_provider_avail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Alert</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <p>Please Fill Availability time.</p>

                        <button type="button" class="btn btn-primary go_provider_availability" >Ok</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <form class="modal account-modal fade multi-step" id="modal-wizard" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-block p-0 border-0 overflow-hidden">
                    <div class="m-progress">
                        <div class="m-progress-bar-wrapper">
                            <div class="m-progress-bar">
                            </div>
                        </div>
                        <div class="m-progress-stats">
						<span class="m-progress-current">
						</span>
                            /
                            <span class="m-progress-total">
						</span>
                        </div>
                        <div class="m-progress-complete">
                        </div>
                    </div>
                    <button type="button" class="close close_login m-0 position-absolute r-0" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body step-1" data-step="1">
                    <div class="account-content">
                        <div class="account-box">
                            <div class="login-right">
                                <div class="login-header">
                                    <h3>Join as a Professional</h3>
                                    <p class="text-muted">Registration for Provider</p>
                                </div>
                            </div>
                            <label>What Service do you Provide?</label>
                            <select class="form-control" title="Category" name="categorys" id="categorys">
                                <option value='' >Select your service here...</option>
                            </select>
                            <span class="category_error"></span>
                        </div>
                    </div>
                </div>

                <div class="modal-body step-2" data-step="2">
                    <div class="account-content">
                        <div class="account-box">
                            <div class="login-right">
                                <div class="login-header">
                                    <h3>Join as a Professional</h3>
                                    <p class="text-muted">Registration for Provider</p>
                                </div>
                            </div>
                            <form id="new_second_page">
                                <label>Choose the Sub Category</label>
                                <select class="form-control" title="Sub Category" name="subcategorys" id="subcategorys">
                                    <option value=''>Enter your sub category...</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="modal-body step-3" data-step="3">
                    <div class="account-content">
                        <div class="account-box">
                            <div class="login-right">
                                <div class="login-header">
                                    <h3>Join as a Professional</h3>
                                    <p class="text-muted">Registration for Provider</p>
                                </div>
                            </div>
                            <form action="" method='post' id="new_third_page">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="userName" id='userName'>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="userEmail" id='userEmail'>
                                    <input type="hidden" class="form-control" name="userLogintype" id='user_logintype' value="mobile" >
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <div class="row">
                                        <div class="col-4 pr-0">
                                            <select name="countryCode" id="countryCode" class="form-control countryCode final_provider_c_code">
                                                <option  data-countryCode="AL" value="355">Albania(+355)</option>
                                                <option  data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                <option  data-countryCode="AS" value="684">American Samoa(+684)</option>
                                                <option  data-countryCode="AD" value="376">Andorra (+376)</option>
                                                <option  data-countryCode="AO" value="244">Angola (+244)</option>
                                                <option  data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                <option  data-countryCode="AQ" value="672">Antarctica(+672)</option>
                                                <option  data-countryCode="AG" value="1268">Antigua & Barbuda (+1268)</option>
                                                <option  data-countryCode="AR" value="54">Argentina (+54)</option>
                                                <option  data-countryCode="AM" value="374">Armenia (+374)</option>
                                                <option  data-countryCode="AW" value="297">Aruba (+297)</option>
                                                <option  data-countryCode="AU" value="61">Australia (+61)</option>
                                                <option  data-countryCode="AT" value="43">Austria (+43)</option>
                                                <option  data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                <option  data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                <option  data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                <option  data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                <option  data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                <option  data-countryCode="BY" value="375">Belarus (+375)</option>
                                                <option  data-countryCode="BE" value="32">Belgium (+32)</option>
                                                <option  data-countryCode="BZ" value="501">Belize (+501)</option>
                                                <option  data-countryCode="BJ" value="229">Benin (+229)</option>
                                                <option  data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                <option  data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                <option  data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                <option  data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                <option  data-countryCode="BW" value="267">Botswana (+267)</option>
                                                <option  data-countryCode="BV" value="55">Bouvet Island(+55)</option>
                                                <option  data-countryCode="BR" value="55">Brazil (+55)</option>
                                                <option  data-countryCode="IO" value="246">British Indian Ocean Territory(+246)</option>
                                                <option  data-countryCode="BN" value="673">Brunei (+673)</option>
                                                <option  data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                <option  data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                <option  data-countryCode="BI" value="257">Burundi (+257)</option>
                                                <option  data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                <option  data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                <option  data-countryCode="CA" value="1">Canada (+1)</option>
                                                <option  data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                <option  data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                <option  data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                <option  data-countryCode="TD" value="235">Chad(+235)</option>
                                                <option  data-countryCode="CL" value="56">Chile (+56)</option>
                                                <option  data-countryCode="CN" value="86">China (+86)</option>
                                                <option  data-countryCode="CX" value="61">Christmas Island(+61)</option>
                                                <option  data-countryCode="CC" value="61">Cocos (Keeling) Islands(+61)</option>
                                                <option  data-countryCode="CO" value="57">Colombia (+57)</option>
                                                <option  data-countryCode="KM" value="269">Comoros (+269)</option>
                                                <option  data-countryCode="CG" value="242">Congo (+242)</option>
                                                <option  data-countryCode="CD" value="243">Congo The Democratic Republic Of The(+243)</option>
                                                <option  data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                <option  data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                <option  data-countryCode="CI" value="225">Cote D'Ivoire (Ivory Coast)(+225)</option>
                                                <option  data-countryCode="HR" value="385">Croatia (+385)</option>
                                                <option  data-countryCode="CU" value="53">Cuba (+53)</option>
                                                <option  data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                <option  data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                <option  data-countryCode="DK" value="45">Denmark (+45)</option>
                                                <option  data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                <option  data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                <option  data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                <option  data-countryCode="TP" value="670">East Timor(+670)</option>
                                                <option  data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                <option  data-countryCode="EG" value="20">Egypt (+20)</option>
                                                <option  data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                <option  data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                <option  data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                <option  data-countryCode="EE" value="372">Estonia (+372)</option>
                                                <option  data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                <option  data-countryCode="XA" value="672">External Territories of Australia(+672)</option>
                                                <option  data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                <option  data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                <option  data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                <option  data-countryCode="FI" value="358">Finland (+358)</option>
                                                <option  data-countryCode="FR" value="33">France (+33)</option>
                                                <option  data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                <option  data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                <option  data-countryCode="TF" value="262">French Southern Territories(262)</option>
                                                <option  data-countryCode="GA" value="241">Gabon (+241)</option>
                                                <option  data-countryCode="GM" value="220">Gambia (+220)</option>
                                                <option  data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                <option  data-countryCode="DE" value="49">Germany (+49)</option>
                                                <option  data-countryCode="GH" value="233">Ghana (+233)</option>
                                                <option  data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                <option  data-countryCode="GR" value="30">Greece (+30)</option>
                                                <option  data-countryCode="GL" value="299">Greenland (+299)</option>
                                                <option  data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                <option  data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                <option  data-countryCode="GU" value="671">Guam (+671)</option>
                                                <option  data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                <option  data-countryCode="XU" value="44">Guernsey and Alderney(44 1481)</option>
                                                <option  data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                <option  data-countryCode="GN" value="224">Guinea (+224)</option>
                                                <option  data-countryCode="GY" value="592">Guyana (+592)</option>
                                                <option  data-countryCode="HT" value="509">Haiti (+509)</option>
                                                <option  data-countryCode="HM" value="672">Heard and McDonald Islands</option>
                                                <option  data-countryCode="HN" value="504">Honduras (+504)</option>
                                                <option  data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                <option  data-countryCode="HU" value="36">Hungary (+36)</option>
                                                <option  data-countryCode="IS" value="354">Iceland (+354)</option>
                                                <option selected data-countryCode="IN" value="91">India (+91)</option>
                                                <option  data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                <option  data-countryCode="IR" value="98">Iran (+98)</option>
                                                <option  data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                <option  data-countryCode="IE" value="353">Ireland (+353)</option>
                                                <option  data-countryCode="IL" value="972">Israel (+972)</option>
                                                <option  data-countryCode="IT" value="39">Italy (+39)</option>
                                                <option  data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                <option  data-countryCode="JP" value="81">Japan (+81)</option>
                                                <option  data-countryCode="XJ" value="44">Jersey(+44)</option>
                                                <option  data-countryCode="JO" value="962">Jordan (+962)</option>
                                                <option  data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                <option  data-countryCode="KE" value="254">Kenya (+254)</option>
                                                <option  data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                <option  data-countryCode="KP" value="850">Korea North (+850)</option>
                                                <option  data-countryCode="KR" value="82">Korea South (+82)</option>
                                                <option  data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                <option  data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                <option  data-countryCode="LA" value="856">Laos (+856)</option>
                                                <option  data-countryCode="LV" value="371">Latvia (+371)</option>
                                                <option  data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                <option  data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                <option  data-countryCode="LR" value="231">Liberia (+231)</option>
                                                <option  data-countryCode="LY" value="218">Libya (+218)</option>
                                                <option  data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                <option  data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                <option  data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                <option  data-countryCode="MO" value="853">Macao (+853)</option>
                                                <option  data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                <option  data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                <option  data-countryCode="MW" value="265">Malawi (+265)</option>
                                                <option  data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                <option  data-countryCode="MV" value="960">Maldives (+960)</option>
                                                <option  data-countryCode="ML" value="223">Mali (+223)</option>
                                                <option  data-countryCode="MT" value="356">Malta (+356)</option>
                                                <option  data-countryCode="XM" value="44">Man (Isle of)(+44)</option>
                                                <option  data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                <option  data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                <option  data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                <option  data-countryCode="MU" value="230">Mauritius(+230)</option>
                                                <option  data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                <option  data-countryCode="MX" value="52">Mexico (+52)</option>
                                                <option  data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                <option  data-countryCode="MD" value="373">Moldova (+373)</option>
                                                <option  data-countryCode="MC" value="377">Monaco (+377)</option>
                                                <option  data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                <option  data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                <option  data-countryCode="MA" value="212">Morocco (+212)</option>
                                                <option  data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                <option  data-countryCode="MM" value="95">Myanmar(+95)</option>
                                                <option  data-countryCode="NA" value="264">Namibia (+264)</option>
                                                <option  data-countryCode="NR" value="674">Nauru (+674)</option>
                                                <option  data-countryCode="NP" value="977">Nepal (+977)</option>
                                                <option  data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                <option  data-countryCode="AN" value="599">Netherlands Antilles(+599)</option>
                                                <option  data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                <option  data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                <option  data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                <option  data-countryCode="NE" value="227">Niger (+227)</option>
                                                <option  data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                <option  data-countryCode="NU" value="683">Niue (+683)</option>
                                                <option  data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                <option  data-countryCode="MP" value="1">Northern Mariana Islands(+1)</option>
                                                <option  data-countryCode="NO" value="47">Norway (+47)</option>
                                                <option  data-countryCode="OM" value="968">Oman (+968)</option>
                                                <option  data-countryCode="PK" value="92">Pakistan(+92)</option>
                                                <option  data-countryCode="PW" value="680">Palau (+680)</option>
                                                <option  data-countryCode="PS" value="970">Palestinian Territory Occupied(+970)</option>
                                                <option  data-countryCode="PA" value="507">Panama (+507)</option>
                                                <option  data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                <option  data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                <option  data-countryCode="PE" value="51">Peru (+51)</option>
                                                <option  data-countryCode="PH" value="63">Philippines (+63)</option>
                                                <option  data-countryCode="PN" value="64">Pitcairn Island(+64)</option>
                                                <option  data-countryCode="PL" value="48">Poland (+48)</option>
                                                <option  data-countryCode="PT" value="351">Portugal (+351)</option>
                                                <option  data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                <option  data-countryCode="QA" value="974">Qatar (+974)</option>
                                                <option  data-countryCode="RE" value="262">Reunion (+262)</option>
                                                <option  data-countryCode="RO" value="40">Romania (+40)</option>
                                                <option  data-countryCode="RU" value="7">Russia (+7)</option>
                                                <option  data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                <option  data-countryCode="LC" value="1758">Saint Lucia(+1758)</option>
                                                <option  data-countryCode="PM" value="508">Saint Pierre and Miquelon(+508)</option>
                                                <option  data-countryCode="VC" value="1784">Saint Vincent And The Grenadines(+1784)</option>
                                                <option  data-countryCode="WS" value="685">Samoa(+685)</option>
                                                <option  data-countryCode="SM" value="378">San Marino (+378)</option>
                                                <option  data-countryCode="ST" value="239">Sao Tome & Principe (+239)</option>
                                                <option  data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                <option  data-countryCode="SN" value="221">Senegal (+221)</option>
                                                <option  data-countryCode="RS" value="381">Serbia(+381)</option>
                                                <option  data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                <option  data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                <option  data-countryCode="SG" value="65">Singapore (+65)</option>
                                                <option  data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                <option  data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                <option  data-countryCode="XG" value="44">Smaller Territories of the UK</option>
                                                <option  data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                <option  data-countryCode="SO" value="252">Somalia (+252)</option>
                                                <option  data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                <option  data-countryCode="GS" value="500">South Georgia(+500)</option>
                                                <option  data-countryCode="SS" value="211">South Sudan(+211)</option>
                                                <option  data-countryCode="ES" value="34">Spain (+34)</option>
                                                <option  data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                <option  data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                <option  data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                <option  data-countryCode="SD" value="249">Sudan (+249)</option>
                                                <option  data-countryCode="SR" value="597">Suriname (+597)</option>
                                                <option  data-countryCode="SJ" value="47">Svalbard And Jan Mayen Islands(+41)</option>
                                                <option  data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                <option  data-countryCode="SE" value="46">Sweden (+46)</option>
                                                <option  data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                <option  data-countryCode="SY" value="963">Syria(+963)</option>
                                                <option  data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                <option  data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                <option  data-countryCode="TZ" value="255">Tanzania(+255)</option>
                                                <option  data-countryCode="TH" value="66">Thailand (+66)</option>
                                                <option  data-countryCode="TG" value="228">Togo (+228)</option>
                                                <option  data-countryCode="TK" value="690">Tokelau(+690)</option>
                                                <option  data-countryCode="TO" value="676">Tonga (+676)</option>
                                                <option  data-countryCode="TT" value="1868">Trinidad & Tobago (+1868)</option>
                                                <option  data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                <option  data-countryCode="TR" value="90">Turkey (+90)</option>
                                                <option  data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                <option  data-countryCode="TC" value="1649">Turks & Caicos Islands (+1649)</option>
                                                <option  data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                <option  data-countryCode="UG" value="256">Uganda (+256)</option>
                                                <option  data-countryCode="GB" value="44">UK (+44)</option>
                                                <option  data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                <option  data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                <option  data-countryCode="UM" value="246">United States Minor Outlying Islands(+246)</option>
                                                <option  data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                <option  data-countryCode="US" value="1">USA (+1)</option>
                                                <option  data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                <option  data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                <option  data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                <option  data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                <option  data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                <option  data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                <option  data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                <option  data-countryCode="WF" value="681">Wallis & Futuna (+681)</option>
                                                <option  data-countryCode="EH" value="212">Western Sahara(+212)</option>
                                                <option  data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                <option  data-countryCode="YU" value="38">Yugoslavia(+38)</option>
                                                <option  data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                <option  data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                            </select>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control form-control-lg provider_final_no user_mobile" placeholder="Enter Mobile No" name="userMobile" id='userMobile' >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-control-xs custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="agreeCheckbox" id="agree_checkbox" value="1">
                                        <label class="custom-control-label" for="agree_checkbox">I agree to Truelysell</label> <a tabindex="-1" href="javascript:void(0);">Privacy Policy</a> &amp; <a tabindex="-1" href="javascript:void(0);"> Terms.</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button id="registration_submit" type="submit" class="btn login-btn">Register</button>
                                </div>
                                <div class="account-footer text-center">
                                    Already have an account? <a href="javascript:void(0);" data-dismiss="modal" data-toggle="modal" data-target="#tab_login_modal">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="modal-body step-4" data-step="4">
                    <div class="login-header">
                        <h3>OTP</h3>
                        <p class="text-muted">Verification your account</p>
                    </div>
                    <form action="http://localhost/mushkilasan_codicnator/user/login/send_otp_request" method='post' id="new_fourth_page">
                        <div class="form-group">
                            <input type="hidden" class="form-control form-control-lg" placeholder="Mobile Number" name='enteredMobile' id='enteredMobile'>
                        </div>
                        <div class="alert alert-success text-center" role="alert">
                            <strong>We Have Send SMS Via OTP</strong>
                            <strong>Registration for Provider </strong>
                        </div>
                        <div class="alert alert-danger text-center" role="alert">
                            We have used default otp for demo purpose.<br> <strong>Default OTP 1234</strong>
                        </div>
                        <div class="form-group">
                            <input  type="text" class="form-control form-control-lg no_only" maxlength="4" autocomplete="off" minlength="4" placeholder=" Enter OTP Here...." name="otp_number" id='otp_number'>
                            <span for='otp_number' id='otp_error_msg'>Please Check Your Registered Mobile Number</span>
                        </div>
                        <p class="resend-otp">Didn't receive the OTP? <a href="#" id="re_send_otp_provider" > Resend OTP</a></p>
                        <div>
                            <button id='registration_final_old' type="submit" class="login-btn" >Finish</button>
                        </div>
                        <div>
                            <button id='registration_resend_new' type="button" class="invisible login-btn" >Resend</button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer mx-auto">
                    <button type="button" class="btn btn-theme text-white px-5 py-2 mt-0 mb-4 step step-1" disabled="disabled" id='step1_footer' data-step="2">Continue</button>
                    <button type="button" class="btn btn-theme text-white px-5 py-2 mt-0 mb-4 step step-2"  id='step2_footer' data-step="1" >Back</button>
                    <button type="button" class="btn btn-theme text-white px-5 py-2 mt-0 mb-4 step step-2"  disabled="disabled" id='step3_footer' data-step="3" >Continue</button>
                </div>
            </div>
        </div>
    </form>

    <div class="modal account-modal fade multi-step" id="modal-wizard1" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="header-content-blk text-center">
                    <div class="alert alert-success text-center" id="flash_succ_message2" ></div>
                </div>
                <div class="modal-body step-1" data-step="1">

                    <div class="account-content">
                        <div class="account-box">
                            <div class="login-right">
                                <div class="login-header">
                                    <h3>Join as a User</h3>
                                    <p class="text-muted">Registration for Customer</p>
                                </div>

                                <form method='post' id="new_third_page_user">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="userName" id='user_name'>
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="userEmail" id='user_email'>
                                        <input type="hidden" class="form-control" name="userLogintype" id='user_logintype' value="mobile" >
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <div class="row">
                                            <div class="col-4 pr-0">
                                                <select name="countryCode" id="country_code" class="form-control countryCode final_country_code">
                                                    <option  data-countryCode="AL" value="355">Albania(+355)</option>
                                                    <option  data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                    <option  data-countryCode="AS" value="684">American Samoa(+684)</option>
                                                    <option  data-countryCode="AD" value="376">Andorra (+376)</option>
                                                    <option  data-countryCode="AO" value="244">Angola (+244)</option>
                                                    <option  data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                    <option  data-countryCode="AQ" value="672">Antarctica(+672)</option>
                                                    <option  data-countryCode="AG" value="1268">Antigua & Barbuda (+1268)</option>
                                                    <option  data-countryCode="AR" value="54">Argentina (+54)</option>
                                                    <option  data-countryCode="AM" value="374">Armenia (+374)</option>
                                                    <option  data-countryCode="AW" value="297">Aruba (+297)</option>
                                                    <option  data-countryCode="AU" value="61">Australia (+61)</option>
                                                    <option  data-countryCode="AT" value="43">Austria (+43)</option>
                                                    <option  data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                    <option  data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                    <option  data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                    <option  data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                    <option  data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                    <option  data-countryCode="BY" value="375">Belarus (+375)</option>
                                                    <option  data-countryCode="BE" value="32">Belgium (+32)</option>
                                                    <option  data-countryCode="BZ" value="501">Belize (+501)</option>
                                                    <option  data-countryCode="BJ" value="229">Benin (+229)</option>
                                                    <option  data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                    <option  data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                    <option  data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                    <option  data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                    <option  data-countryCode="BW" value="267">Botswana (+267)</option>
                                                    <option  data-countryCode="BV" value="55">Bouvet Island(+55)</option>
                                                    <option  data-countryCode="BR" value="55">Brazil (+55)</option>
                                                    <option  data-countryCode="IO" value="246">British Indian Ocean Territory(+246)</option>
                                                    <option  data-countryCode="BN" value="673">Brunei (+673)</option>
                                                    <option  data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                    <option  data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                    <option  data-countryCode="BI" value="257">Burundi (+257)</option>
                                                    <option  data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                    <option  data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                    <option  data-countryCode="CA" value="1">Canada (+1)</option>
                                                    <option  data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                    <option  data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                    <option  data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                    <option  data-countryCode="TD" value="235">Chad(+235)</option>
                                                    <option  data-countryCode="CL" value="56">Chile (+56)</option>
                                                    <option  data-countryCode="CN" value="86">China (+86)</option>
                                                    <option  data-countryCode="CX" value="61">Christmas Island(+61)</option>
                                                    <option  data-countryCode="CC" value="61">Cocos (Keeling) Islands(+61)</option>
                                                    <option  data-countryCode="CO" value="57">Colombia (+57)</option>
                                                    <option  data-countryCode="KM" value="269">Comoros (+269)</option>
                                                    <option  data-countryCode="CG" value="242">Congo (+242)</option>
                                                    <option  data-countryCode="CD" value="243">Congo The Democratic Republic Of The(+243)</option>
                                                    <option  data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                    <option  data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                    <option  data-countryCode="CI" value="225">Cote D'Ivoire (Ivory Coast)(+225)</option>
                                                    <option  data-countryCode="HR" value="385">Croatia (+385)</option>
                                                    <option  data-countryCode="CU" value="53">Cuba (+53)</option>
                                                    <option  data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                    <option  data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                    <option  data-countryCode="DK" value="45">Denmark (+45)</option>
                                                    <option  data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                    <option  data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                    <option  data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                    <option  data-countryCode="TP" value="670">East Timor(+670)</option>
                                                    <option  data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                    <option  data-countryCode="EG" value="20">Egypt (+20)</option>
                                                    <option  data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                    <option  data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                    <option  data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                    <option  data-countryCode="EE" value="372">Estonia (+372)</option>
                                                    <option  data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                    <option  data-countryCode="XA" value="672">External Territories of Australia(+672)</option>
                                                    <option  data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                    <option  data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                    <option  data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                    <option  data-countryCode="FI" value="358">Finland (+358)</option>
                                                    <option  data-countryCode="FR" value="33">France (+33)</option>
                                                    <option  data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                    <option  data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                    <option  data-countryCode="TF" value="262">French Southern Territories(262)</option>
                                                    <option  data-countryCode="GA" value="241">Gabon (+241)</option>
                                                    <option  data-countryCode="GM" value="220">Gambia (+220)</option>
                                                    <option  data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                    <option  data-countryCode="DE" value="49">Germany (+49)</option>
                                                    <option  data-countryCode="GH" value="233">Ghana (+233)</option>
                                                    <option  data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                    <option  data-countryCode="GR" value="30">Greece (+30)</option>
                                                    <option  data-countryCode="GL" value="299">Greenland (+299)</option>
                                                    <option  data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                    <option  data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                    <option  data-countryCode="GU" value="671">Guam (+671)</option>
                                                    <option  data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                    <option  data-countryCode="XU" value="44">Guernsey and Alderney(44 1481)</option>
                                                    <option  data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                    <option  data-countryCode="GN" value="224">Guinea (+224)</option>
                                                    <option  data-countryCode="GY" value="592">Guyana (+592)</option>
                                                    <option  data-countryCode="HT" value="509">Haiti (+509)</option>
                                                    <option  data-countryCode="HM" value="672">Heard and McDonald Islands</option>
                                                    <option  data-countryCode="HN" value="504">Honduras (+504)</option>
                                                    <option  data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                    <option  data-countryCode="HU" value="36">Hungary (+36)</option>
                                                    <option  data-countryCode="IS" value="354">Iceland (+354)</option>
                                                    <option selected data-countryCode="IN" value="91">India (+91)</option>
                                                    <option  data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                    <option  data-countryCode="IR" value="98">Iran (+98)</option>
                                                    <option  data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                    <option  data-countryCode="IE" value="353">Ireland (+353)</option>
                                                    <option  data-countryCode="IL" value="972">Israel (+972)</option>
                                                    <option  data-countryCode="IT" value="39">Italy (+39)</option>
                                                    <option  data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                    <option  data-countryCode="JP" value="81">Japan (+81)</option>
                                                    <option  data-countryCode="XJ" value="44">Jersey(+44)</option>
                                                    <option  data-countryCode="JO" value="962">Jordan (+962)</option>
                                                    <option  data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                    <option  data-countryCode="KE" value="254">Kenya (+254)</option>
                                                    <option  data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                    <option  data-countryCode="KP" value="850">Korea North (+850)</option>
                                                    <option  data-countryCode="KR" value="82">Korea South (+82)</option>
                                                    <option  data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                    <option  data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                    <option  data-countryCode="LA" value="856">Laos (+856)</option>
                                                    <option  data-countryCode="LV" value="371">Latvia (+371)</option>
                                                    <option  data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                    <option  data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                    <option  data-countryCode="LR" value="231">Liberia (+231)</option>
                                                    <option  data-countryCode="LY" value="218">Libya (+218)</option>
                                                    <option  data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                    <option  data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                    <option  data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                    <option  data-countryCode="MO" value="853">Macao (+853)</option>
                                                    <option  data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                    <option  data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                    <option  data-countryCode="MW" value="265">Malawi (+265)</option>
                                                    <option  data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                    <option  data-countryCode="MV" value="960">Maldives (+960)</option>
                                                    <option  data-countryCode="ML" value="223">Mali (+223)</option>
                                                    <option  data-countryCode="MT" value="356">Malta (+356)</option>
                                                    <option  data-countryCode="XM" value="44">Man (Isle of)(+44)</option>
                                                    <option  data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                    <option  data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                    <option  data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                    <option  data-countryCode="MU" value="230">Mauritius(+230)</option>
                                                    <option  data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                    <option  data-countryCode="MX" value="52">Mexico (+52)</option>
                                                    <option  data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                    <option  data-countryCode="MD" value="373">Moldova (+373)</option>
                                                    <option  data-countryCode="MC" value="377">Monaco (+377)</option>
                                                    <option  data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                    <option  data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                    <option  data-countryCode="MA" value="212">Morocco (+212)</option>
                                                    <option  data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                    <option  data-countryCode="MM" value="95">Myanmar(+95)</option>
                                                    <option  data-countryCode="NA" value="264">Namibia (+264)</option>
                                                    <option  data-countryCode="NR" value="674">Nauru (+674)</option>
                                                    <option  data-countryCode="NP" value="977">Nepal (+977)</option>
                                                    <option  data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                    <option  data-countryCode="AN" value="599">Netherlands Antilles(+599)</option>
                                                    <option  data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                    <option  data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                    <option  data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                    <option  data-countryCode="NE" value="227">Niger (+227)</option>
                                                    <option  data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                    <option  data-countryCode="NU" value="683">Niue (+683)</option>
                                                    <option  data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                    <option  data-countryCode="MP" value="1">Northern Mariana Islands(+1)</option>
                                                    <option  data-countryCode="NO" value="47">Norway (+47)</option>
                                                    <option  data-countryCode="OM" value="968">Oman (+968)</option>
                                                    <option  data-countryCode="PK" value="92">Pakistan(+92)</option>
                                                    <option  data-countryCode="PW" value="680">Palau (+680)</option>
                                                    <option  data-countryCode="PS" value="970">Palestinian Territory Occupied(+970)</option>
                                                    <option  data-countryCode="PA" value="507">Panama (+507)</option>
                                                    <option  data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                    <option  data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                    <option  data-countryCode="PE" value="51">Peru (+51)</option>
                                                    <option  data-countryCode="PH" value="63">Philippines (+63)</option>
                                                    <option  data-countryCode="PN" value="64">Pitcairn Island(+64)</option>
                                                    <option  data-countryCode="PL" value="48">Poland (+48)</option>
                                                    <option  data-countryCode="PT" value="351">Portugal (+351)</option>
                                                    <option  data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                    <option  data-countryCode="QA" value="974">Qatar (+974)</option>
                                                    <option  data-countryCode="RE" value="262">Reunion (+262)</option>
                                                    <option  data-countryCode="RO" value="40">Romania (+40)</option>
                                                    <option  data-countryCode="RU" value="7">Russia (+7)</option>
                                                    <option  data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                    <option  data-countryCode="LC" value="1758">Saint Lucia(+1758)</option>
                                                    <option  data-countryCode="PM" value="508">Saint Pierre and Miquelon(+508)</option>
                                                    <option  data-countryCode="VC" value="1784">Saint Vincent And The Grenadines(+1784)</option>
                                                    <option  data-countryCode="WS" value="685">Samoa(+685)</option>
                                                    <option  data-countryCode="SM" value="378">San Marino (+378)</option>
                                                    <option  data-countryCode="ST" value="239">Sao Tome & Principe (+239)</option>
                                                    <option  data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                    <option  data-countryCode="SN" value="221">Senegal (+221)</option>
                                                    <option  data-countryCode="RS" value="381">Serbia(+381)</option>
                                                    <option  data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                    <option  data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                    <option  data-countryCode="SG" value="65">Singapore (+65)</option>
                                                    <option  data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                    <option  data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                    <option  data-countryCode="XG" value="44">Smaller Territories of the UK</option>
                                                    <option  data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                    <option  data-countryCode="SO" value="252">Somalia (+252)</option>
                                                    <option  data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                    <option  data-countryCode="GS" value="500">South Georgia(+500)</option>
                                                    <option  data-countryCode="SS" value="211">South Sudan(+211)</option>
                                                    <option  data-countryCode="ES" value="34">Spain (+34)</option>
                                                    <option  data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                    <option  data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                    <option  data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                    <option  data-countryCode="SD" value="249">Sudan (+249)</option>
                                                    <option  data-countryCode="SR" value="597">Suriname (+597)</option>
                                                    <option  data-countryCode="SJ" value="47">Svalbard And Jan Mayen Islands(+41)</option>
                                                    <option  data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                    <option  data-countryCode="SE" value="46">Sweden (+46)</option>
                                                    <option  data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                    <option  data-countryCode="SY" value="963">Syria(+963)</option>
                                                    <option  data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                    <option  data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                    <option  data-countryCode="TZ" value="255">Tanzania(+255)</option>
                                                    <option  data-countryCode="TH" value="66">Thailand (+66)</option>
                                                    <option  data-countryCode="TG" value="228">Togo (+228)</option>
                                                    <option  data-countryCode="TK" value="690">Tokelau(+690)</option>
                                                    <option  data-countryCode="TO" value="676">Tonga (+676)</option>
                                                    <option  data-countryCode="TT" value="1868">Trinidad & Tobago (+1868)</option>
                                                    <option  data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                    <option  data-countryCode="TR" value="90">Turkey (+90)</option>
                                                    <option  data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                    <option  data-countryCode="TC" value="1649">Turks & Caicos Islands (+1649)</option>
                                                    <option  data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                    <option  data-countryCode="UG" value="256">Uganda (+256)</option>
                                                    <option  data-countryCode="GB" value="44">UK (+44)</option>
                                                    <option  data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                    <option  data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                    <option  data-countryCode="UM" value="246">United States Minor Outlying Islands(+246)</option>
                                                    <option  data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                    <option  data-countryCode="US" value="1">USA (+1)</option>
                                                    <option  data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                    <option  data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                    <option  data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                    <option  data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                    <option  data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                    <option  data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                    <option  data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                    <option  data-countryCode="WF" value="681">Wallis & Futuna (+681)</option>
                                                    <option  data-countryCode="EH" value="212">Western Sahara(+212)</option>
                                                    <option  data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                    <option  data-countryCode="YU" value="38">Yugoslavia(+38)</option>
                                                    <option  data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                    <option  data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                                </select>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control user_final_no user_mobile" placeholder="Enter Mobile No" name="userMobile" id='user_mobile'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="agreeCheckboxUser" id="agree_checkbox_user" value="1">
                                            <label class="custom-control-label" for="agree_checkbox_user">I agree to Truelysell</label> <a tabindex="-1" href="javascript:void(0);">Privacy Policy</a> &amp; <a tabindex="-1" href="javascript:void(0);"> Terms.</a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button id="registration_submit_user" type="submit" class="login-btn btn">Register</button>
                                    </div>
                                    <div class="account-footer text-center">
                                        Already have an account? <a href="javascript:void(0);" data-dismiss="modal" data-toggle="modal" data-target="#tab_login_modal">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-body step-2" data-step="2">
                    <div class="login-header">
                        <h3>OTP</h3>
                        <p class="text-muted">Verification your account</p>
                    </div>
                    <form action="http://localhost/mushkilasan_codicnator/user/login/send_otp_request_user" method='post' id="new_fourth_page_user">
                        <div class="form-group">
                            <input type="hidden" class="form-control form-control-lg" placeholder="Mobile Number" name='enteredMobile' id='enteredMobiles'>
                        </div>
                        <div class="form-group">
                            <div class="alert alert-success text-center" role="alert">
                                <strong>We Have Send SMS Via OTP</strong>
                                <strong>Please Check Your Registered Mobile Number </strong>
                            </div>
                            <div class="alert alert-danger text-center" role="alert">
                                We have used default otp for demo purpose.<br> <strong>Default OTP 1234</strong>
                            </div>
                            <input type="text" class="form-control form-control-lg no_only" autocomplete="off" maxlength="4" minlength="4" placeholder="Enter OTP Here.." name="otp_number" id='otp_number_user'>
                            <span for='otp_number' id='otp_error_msg'></span>
                        </div>

                        <p class="resend-otp">Didn't receive the OTP? <a href="#" id="re_send_otp_user"> Resend OTP</a></p>
                        <div>
                            <button id='registration_final' type="submit" class="login-btn" >Enter</button>
                        </div>
                        <div>
                            <button id='registration_resend' type="button" class="invisible login-btn" >Resend</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal account-modal fade multi-step" id="modal-wizardreset" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-0 border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="header-content-blk text-center">
                    <div class="alert alert-success text-center" id="flash_succ_message2" ></div>
                </div>
                <div class="modal-body step-1" data-step="1">

                    <div class="account-content">
                        <div class="account-box">
                            <div class="login-right">
                                <div class="login-header">
                                    <h3>Forgot Password </h3>
                                    <p class="text-muted">Reset Email ID</p>
                                </div>

                                <form method='post' id="forgetpwddiv">
                                    <div class="form-group">
                                        <label>Email ID</label>
                                        <input type="text" name="login_mode1" id="login_mode1" value="1">
                                        <input type="hidden" class="form-control" name="userLogintype" id='user_logintype' value="mobile" >
                                        <input type="text" class="form-control" name="forgot_mailid" id='forgot_mailid'>
                                    </div>
                                    <div class="form-group">
                                        <button id="forgotpwdmail" type="submit" class="login-btn btn">Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-body step-2" data-step="2">
                    <div class="login-header">
                        <h3>OTP</h3>
                        <p class="text-muted">Verification your account</p>
                    </div>
                    <form action="http://localhost/mushkilasan_codicnator/user/login/send_otp_request_user" method='post' id="new_fourth_page_user">
                        <div class="form-group">
                            <input type="hidden" class="form-control form-control-lg" placeholder="Mobile Number" name='enteredMobile' id='enteredMobiles'>
                        </div>
                        <div class="form-group">
                            <div class="alert alert-success text-center" role="alert">
                                <strong>We Have Send SMS Via OTP</strong>
                                <strong>Please Check Your Registered Mobile Number </strong>
                            </div>
                            <div class="alert alert-danger text-center" role="alert">
                                We have used default otp for demo purpose.<br> <strong>Default OTP 1234</strong>
                            </div>
                            <input type="text" class="form-control form-control-lg no_only" autocomplete="off" maxlength="4" minlength="4" placeholder="Enter OTP Here.." name="otp_number" id='otp_number_user'>
                            <span for='otp_number' id='otp_error_msg'></span>
                        </div>

                        <p class="resend-otp">Didn't receive the OTP? <a href="#" id="re_send_otp_user"> Resend OTP</a></p>
                        <div>
                            <button id='registration_final' type="submit" class="login-btn" >Enter</button>
                        </div>
                        <div>
                            <button id='registration_resend' type="button" class="invisible login-btn" >Resend</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">


        <input type="hidden" id="stripe_key" value="pk_test_AealxxOygZz84AruCGadWvUV00mJQZdLvr">
        <input type="hidden" id="logo_front" value="http://localhost/mushkilasan_codicnator/assets/img/logo.png">

        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">About us</h2>
                            <div class="footer-line">
                                <span></span>
                            </div>
                            <div class="about">
                                <div class="contactdet">
                                    <ul>
                                        <li class="color-grey"><p>asdda</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">Accueil</h2>
                            <div class="footer-line">
                                <span></span>
                            </div>
                            <div class="about">
                                <div class="contactdet">
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Footer Top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">

                <!-- Copyright -->
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="copyright-text">
                                <p class="mb-0">&copy; 2021 Truelysell</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">

                            <!-- Copyright Menu -->
                            <div class="copyright-menu">
                                <ul class="policy-menu">
                                    <li><a href="http://localhost/mushkilasan_codicnator/terms-conditions">Terms and Conditions</a></li>
                                    <li><a href="http://localhost/mushkilasan_codicnator/privacy">Privacy</a></li>
                                </ul>
                            </div>
                            <!-- /Copyright Menu -->

                        </div>
                    </div>
                </div>
                <!-- /Copyright -->

            </div>
        </div>
        <!-- /Footer Bottom -->

    </footer>
</div>
<input type="hidden" id="base_url" value="http://localhost/mushkilasan_codicnator/">
<input type="hidden" id="site_name" value="Truelysell">
<input type="hidden" id="csrf_token" value="e0e81a09c920ab4f9f0e93602a25c977">
<input type="hidden" id="csrfName" value="csrf_token_name">
<input type="hidden" id="csrfHash" value="e0e81a09c920ab4f9f0e93602a25c977">

<script src="http://localhost/mushkilasan_codicnator/assets/js/moment.min.js"></script>
<script src="http://localhost/mushkilasan_codicnator/assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="http://localhost/mushkilasan_codicnator/assets/js/popper.min.js"></script>

<script src="http://localhost/mushkilasan_codicnator/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="http://localhost/mushkilasan_codicnator/assets/js/sweetalert.min.js"></script>
<script src="http://localhost/mushkilasan_codicnator/assets/plugins/datatables/datatables.min.js"></script>
<script src="http://localhost/mushkilasan_codicnator/assets/js/cropper_profile_provider.js"></script>
<script src="http://localhost/mushkilasan_codicnator/assets/js/cropper.min.js"></script>
<script src="http://localhost/mushkilasan_codicnator/assets/js/script_crop.js"></script>
<script src="http://localhost/mushkilasan_codicnator/assets/js/bootstrapValidator.min.js"></script>
<!-- Sticky Sidebar JS -->
<script src="http://localhost/mushkilasan_codicnator/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="http://localhost/mushkilasan_codicnator/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
<!-- Toaster -->
<script src="http://localhost/mushkilasan_codicnator/assets/plugins/toaster/toastr.min.js"></script>
<script src="http://localhost/mushkilasan_codicnator/assets/plugins/owlcarousel/owl.carousel.min.js"></script>
<script src="http://localhost/mushkilasan_codicnator/assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=&v=3.exp&libraries=places"></script>

<input type="hidden" id="modules_page" value="home">
<input type="hidden" id="current_page" value="">

<input type="hidden" id="service_location" class="asf">




<input type="hidden" id="user_address_values" value="">
<input type="hidden" id="user_latitude_values" value="">
<input type="hidden" id="user_longitude_values" value="">

<script src="http://localhost/mushkilasan_codicnator/assets/js/place.js"></script>

<script src="http://localhost/mushkilasan_codicnator/assets/js/multi-step-modal.js"></script>
<link rel="stylesheet" href="http://localhost/mushkilasan_codicnator/assets/plugins/jquery-confirm/jquery-confirm.min.css">
<script src="http://localhost/mushkilasan_codicnator/assets/plugins/jquery-confirm/jquery-confirm.min.js"></script>
<script src="http://localhost/mushkilasan_codicnator/assets/js/functions.js"></script>
<input type="hidden" id="user_type" value="">

<!-- login -->
<script src="http://localhost/mushkilasan_codicnator/assets/js/login.js"></script>

<script src="http://localhost/mushkilasan_codicnator/assets/js/script.js"></script>

<!-- External js-->

<!---External js end-->


<div class="modal account-modal fade" id="tab_login_modal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header p-0 border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger text-center"  id="flash_error_message1" ></div>
                <div id="login_form_div">
                    <div class="account-content">
                        <div class="account-box">
                            <div class="login-right">
                                <div class="login-header">
                                    <h3>Login</h3>
                                    <p class="text-muted">Access to our Truelysell</p>
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <div class="row">
                                        <div class="col-4 pr-0">
                                            <input type="hidden" name="login_mode" id="login_mode" value="1">
                                            <input type="hidden" name="csrf_token_name" value="e0e81a09c920ab4f9f0e93602a25c977" id="login_csrf">
                                            <select name="countryCode" id="login_country_code" class="form-control login_country_code">
                                                <option  data-countryCode="AL" value="355">Albania(+355)</option>
                                                <option  data-countryCode="DZ" value="213">Algeria (+213)</option>
                                                <option  data-countryCode="AS" value="684">American Samoa(+684)</option>
                                                <option  data-countryCode="AD" value="376">Andorra (+376)</option>
                                                <option  data-countryCode="AO" value="244">Angola (+244)</option>
                                                <option  data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                                <option  data-countryCode="AQ" value="672">Antarctica(+672)</option>
                                                <option  data-countryCode="AG" value="1268">Antigua & Barbuda (+1268)</option>
                                                <option  data-countryCode="AR" value="54">Argentina (+54)</option>
                                                <option  data-countryCode="AM" value="374">Armenia (+374)</option>
                                                <option  data-countryCode="AW" value="297">Aruba (+297)</option>
                                                <option  data-countryCode="AU" value="61">Australia (+61)</option>
                                                <option  data-countryCode="AT" value="43">Austria (+43)</option>
                                                <option  data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                                <option  data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                                <option  data-countryCode="BH" value="973">Bahrain (+973)</option>
                                                <option  data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                                <option  data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                                <option  data-countryCode="BY" value="375">Belarus (+375)</option>
                                                <option  data-countryCode="BE" value="32">Belgium (+32)</option>
                                                <option  data-countryCode="BZ" value="501">Belize (+501)</option>
                                                <option  data-countryCode="BJ" value="229">Benin (+229)</option>
                                                <option  data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                                <option  data-countryCode="BT" value="975">Bhutan (+975)</option>
                                                <option  data-countryCode="BO" value="591">Bolivia (+591)</option>
                                                <option  data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                                <option  data-countryCode="BW" value="267">Botswana (+267)</option>
                                                <option  data-countryCode="BV" value="55">Bouvet Island(+55)</option>
                                                <option  data-countryCode="BR" value="55">Brazil (+55)</option>
                                                <option  data-countryCode="IO" value="246">British Indian Ocean Territory(+246)</option>
                                                <option  data-countryCode="BN" value="673">Brunei (+673)</option>
                                                <option  data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                                <option  data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                                <option  data-countryCode="BI" value="257">Burundi (+257)</option>
                                                <option  data-countryCode="KH" value="855">Cambodia (+855)</option>
                                                <option  data-countryCode="CM" value="237">Cameroon (+237)</option>
                                                <option  data-countryCode="CA" value="1">Canada (+1)</option>
                                                <option  data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                                <option  data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                                <option  data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                                <option  data-countryCode="TD" value="235">Chad(+235)</option>
                                                <option  data-countryCode="CL" value="56">Chile (+56)</option>
                                                <option  data-countryCode="CN" value="86">China (+86)</option>
                                                <option  data-countryCode="CX" value="61">Christmas Island(+61)</option>
                                                <option  data-countryCode="CC" value="61">Cocos (Keeling) Islands(+61)</option>
                                                <option  data-countryCode="CO" value="57">Colombia (+57)</option>
                                                <option  data-countryCode="KM" value="269">Comoros (+269)</option>
                                                <option  data-countryCode="CG" value="242">Congo (+242)</option>
                                                <option  data-countryCode="CD" value="243">Congo The Democratic Republic Of The(+243)</option>
                                                <option  data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                                <option  data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                                <option  data-countryCode="CI" value="225">Cote D'Ivoire (Ivory Coast)(+225)</option>
                                                <option  data-countryCode="HR" value="385">Croatia (+385)</option>
                                                <option  data-countryCode="CU" value="53">Cuba (+53)</option>
                                                <option  data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                                <option  data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                                <option  data-countryCode="DK" value="45">Denmark (+45)</option>
                                                <option  data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                                <option  data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                                <option  data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                                <option  data-countryCode="TP" value="670">East Timor(+670)</option>
                                                <option  data-countryCode="EC" value="593">Ecuador (+593)</option>
                                                <option  data-countryCode="EG" value="20">Egypt (+20)</option>
                                                <option  data-countryCode="SV" value="503">El Salvador (+503)</option>
                                                <option  data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                                <option  data-countryCode="ER" value="291">Eritrea (+291)</option>
                                                <option  data-countryCode="EE" value="372">Estonia (+372)</option>
                                                <option  data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                                <option  data-countryCode="XA" value="672">External Territories of Australia(+672)</option>
                                                <option  data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                                <option  data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                                <option  data-countryCode="FJ" value="679">Fiji (+679)</option>
                                                <option  data-countryCode="FI" value="358">Finland (+358)</option>
                                                <option  data-countryCode="FR" value="33">France (+33)</option>
                                                <option  data-countryCode="GF" value="594">French Guiana (+594)</option>
                                                <option  data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                                <option  data-countryCode="TF" value="262">French Southern Territories(262)</option>
                                                <option  data-countryCode="GA" value="241">Gabon (+241)</option>
                                                <option  data-countryCode="GM" value="220">Gambia (+220)</option>
                                                <option  data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                                <option  data-countryCode="DE" value="49">Germany (+49)</option>
                                                <option  data-countryCode="GH" value="233">Ghana (+233)</option>
                                                <option  data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                                <option  data-countryCode="GR" value="30">Greece (+30)</option>
                                                <option  data-countryCode="GL" value="299">Greenland (+299)</option>
                                                <option  data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                                <option  data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                                <option  data-countryCode="GU" value="671">Guam (+671)</option>
                                                <option  data-countryCode="GT" value="502">Guatemala (+502)</option>
                                                <option  data-countryCode="XU" value="44">Guernsey and Alderney(44 1481)</option>
                                                <option  data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                                <option  data-countryCode="GN" value="224">Guinea (+224)</option>
                                                <option  data-countryCode="GY" value="592">Guyana (+592)</option>
                                                <option  data-countryCode="HT" value="509">Haiti (+509)</option>
                                                <option  data-countryCode="HM" value="672">Heard and McDonald Islands</option>
                                                <option  data-countryCode="HN" value="504">Honduras (+504)</option>
                                                <option  data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                                <option  data-countryCode="HU" value="36">Hungary (+36)</option>
                                                <option  data-countryCode="IS" value="354">Iceland (+354)</option>
                                                <option selected data-countryCode="IN" value="91">India (+91)</option>
                                                <option  data-countryCode="ID" value="62">Indonesia (+62)</option>
                                                <option  data-countryCode="IR" value="98">Iran (+98)</option>
                                                <option  data-countryCode="IQ" value="964">Iraq (+964)</option>
                                                <option  data-countryCode="IE" value="353">Ireland (+353)</option>
                                                <option  data-countryCode="IL" value="972">Israel (+972)</option>
                                                <option  data-countryCode="IT" value="39">Italy (+39)</option>
                                                <option  data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                                <option  data-countryCode="JP" value="81">Japan (+81)</option>
                                                <option  data-countryCode="XJ" value="44">Jersey(+44)</option>
                                                <option  data-countryCode="JO" value="962">Jordan (+962)</option>
                                                <option  data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                                <option  data-countryCode="KE" value="254">Kenya (+254)</option>
                                                <option  data-countryCode="KI" value="686">Kiribati (+686)</option>
                                                <option  data-countryCode="KP" value="850">Korea North (+850)</option>
                                                <option  data-countryCode="KR" value="82">Korea South (+82)</option>
                                                <option  data-countryCode="KW" value="965">Kuwait (+965)</option>
                                                <option  data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                                <option  data-countryCode="LA" value="856">Laos (+856)</option>
                                                <option  data-countryCode="LV" value="371">Latvia (+371)</option>
                                                <option  data-countryCode="LB" value="961">Lebanon (+961)</option>
                                                <option  data-countryCode="LS" value="266">Lesotho (+266)</option>
                                                <option  data-countryCode="LR" value="231">Liberia (+231)</option>
                                                <option  data-countryCode="LY" value="218">Libya (+218)</option>
                                                <option  data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                                <option  data-countryCode="LT" value="370">Lithuania (+370)</option>
                                                <option  data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                                <option  data-countryCode="MO" value="853">Macao (+853)</option>
                                                <option  data-countryCode="MK" value="389">Macedonia (+389)</option>
                                                <option  data-countryCode="MG" value="261">Madagascar (+261)</option>
                                                <option  data-countryCode="MW" value="265">Malawi (+265)</option>
                                                <option  data-countryCode="MY" value="60">Malaysia (+60)</option>
                                                <option  data-countryCode="MV" value="960">Maldives (+960)</option>
                                                <option  data-countryCode="ML" value="223">Mali (+223)</option>
                                                <option  data-countryCode="MT" value="356">Malta (+356)</option>
                                                <option  data-countryCode="XM" value="44">Man (Isle of)(+44)</option>
                                                <option  data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                                <option  data-countryCode="MQ" value="596">Martinique (+596)</option>
                                                <option  data-countryCode="MR" value="222">Mauritania (+222)</option>
                                                <option  data-countryCode="MU" value="230">Mauritius(+230)</option>
                                                <option  data-countryCode="YT" value="269">Mayotte (+269)</option>
                                                <option  data-countryCode="MX" value="52">Mexico (+52)</option>
                                                <option  data-countryCode="FM" value="691">Micronesia (+691)</option>
                                                <option  data-countryCode="MD" value="373">Moldova (+373)</option>
                                                <option  data-countryCode="MC" value="377">Monaco (+377)</option>
                                                <option  data-countryCode="MN" value="976">Mongolia (+976)</option>
                                                <option  data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                                <option  data-countryCode="MA" value="212">Morocco (+212)</option>
                                                <option  data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                                <option  data-countryCode="MM" value="95">Myanmar(+95)</option>
                                                <option  data-countryCode="NA" value="264">Namibia (+264)</option>
                                                <option  data-countryCode="NR" value="674">Nauru (+674)</option>
                                                <option  data-countryCode="NP" value="977">Nepal (+977)</option>
                                                <option  data-countryCode="NL" value="31">Netherlands (+31)</option>
                                                <option  data-countryCode="AN" value="599">Netherlands Antilles(+599)</option>
                                                <option  data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                                <option  data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                                <option  data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                                <option  data-countryCode="NE" value="227">Niger (+227)</option>
                                                <option  data-countryCode="NG" value="234">Nigeria (+234)</option>
                                                <option  data-countryCode="NU" value="683">Niue (+683)</option>
                                                <option  data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                                <option  data-countryCode="MP" value="1">Northern Mariana Islands(+1)</option>
                                                <option  data-countryCode="NO" value="47">Norway (+47)</option>
                                                <option  data-countryCode="OM" value="968">Oman (+968)</option>
                                                <option  data-countryCode="PK" value="92">Pakistan(+92)</option>
                                                <option  data-countryCode="PW" value="680">Palau (+680)</option>
                                                <option  data-countryCode="PS" value="970">Palestinian Territory Occupied(+970)</option>
                                                <option  data-countryCode="PA" value="507">Panama (+507)</option>
                                                <option  data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                                <option  data-countryCode="PY" value="595">Paraguay (+595)</option>
                                                <option  data-countryCode="PE" value="51">Peru (+51)</option>
                                                <option  data-countryCode="PH" value="63">Philippines (+63)</option>
                                                <option  data-countryCode="PN" value="64">Pitcairn Island(+64)</option>
                                                <option  data-countryCode="PL" value="48">Poland (+48)</option>
                                                <option  data-countryCode="PT" value="351">Portugal (+351)</option>
                                                <option  data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                                <option  data-countryCode="QA" value="974">Qatar (+974)</option>
                                                <option  data-countryCode="RE" value="262">Reunion (+262)</option>
                                                <option  data-countryCode="RO" value="40">Romania (+40)</option>
                                                <option  data-countryCode="RU" value="7">Russia (+7)</option>
                                                <option  data-countryCode="RW" value="250">Rwanda (+250)</option>
                                                <option  data-countryCode="LC" value="1758">Saint Lucia(+1758)</option>
                                                <option  data-countryCode="PM" value="508">Saint Pierre and Miquelon(+508)</option>
                                                <option  data-countryCode="VC" value="1784">Saint Vincent And The Grenadines(+1784)</option>
                                                <option  data-countryCode="WS" value="685">Samoa(+685)</option>
                                                <option  data-countryCode="SM" value="378">San Marino (+378)</option>
                                                <option  data-countryCode="ST" value="239">Sao Tome & Principe (+239)</option>
                                                <option  data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                                <option  data-countryCode="SN" value="221">Senegal (+221)</option>
                                                <option  data-countryCode="RS" value="381">Serbia(+381)</option>
                                                <option  data-countryCode="SC" value="248">Seychelles (+248)</option>
                                                <option  data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                                <option  data-countryCode="SG" value="65">Singapore (+65)</option>
                                                <option  data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                                <option  data-countryCode="SI" value="386">Slovenia (+386)</option>
                                                <option  data-countryCode="XG" value="44">Smaller Territories of the UK</option>
                                                <option  data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                                <option  data-countryCode="SO" value="252">Somalia (+252)</option>
                                                <option  data-countryCode="ZA" value="27">South Africa (+27)</option>
                                                <option  data-countryCode="GS" value="500">South Georgia(+500)</option>
                                                <option  data-countryCode="SS" value="211">South Sudan(+211)</option>
                                                <option  data-countryCode="ES" value="34">Spain (+34)</option>
                                                <option  data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                                <option  data-countryCode="SH" value="290">St. Helena (+290)</option>
                                                <option  data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                                <option  data-countryCode="SD" value="249">Sudan (+249)</option>
                                                <option  data-countryCode="SR" value="597">Suriname (+597)</option>
                                                <option  data-countryCode="SJ" value="47">Svalbard And Jan Mayen Islands(+41)</option>
                                                <option  data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                                <option  data-countryCode="SE" value="46">Sweden (+46)</option>
                                                <option  data-countryCode="CH" value="41">Switzerland (+41)</option>
                                                <option  data-countryCode="SY" value="963">Syria(+963)</option>
                                                <option  data-countryCode="TW" value="886">Taiwan (+886)</option>
                                                <option  data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                                <option  data-countryCode="TZ" value="255">Tanzania(+255)</option>
                                                <option  data-countryCode="TH" value="66">Thailand (+66)</option>
                                                <option  data-countryCode="TG" value="228">Togo (+228)</option>
                                                <option  data-countryCode="TK" value="690">Tokelau(+690)</option>
                                                <option  data-countryCode="TO" value="676">Tonga (+676)</option>
                                                <option  data-countryCode="TT" value="1868">Trinidad & Tobago (+1868)</option>
                                                <option  data-countryCode="TN" value="216">Tunisia (+216)</option>
                                                <option  data-countryCode="TR" value="90">Turkey (+90)</option>
                                                <option  data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                                <option  data-countryCode="TC" value="1649">Turks & Caicos Islands (+1649)</option>
                                                <option  data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                                <option  data-countryCode="UG" value="256">Uganda (+256)</option>
                                                <option  data-countryCode="GB" value="44">UK (+44)</option>
                                                <option  data-countryCode="UA" value="380">Ukraine (+380)</option>
                                                <option  data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                                <option  data-countryCode="UM" value="246">United States Minor Outlying Islands(+246)</option>
                                                <option  data-countryCode="UY" value="598">Uruguay (+598)</option>
                                                <option  data-countryCode="US" value="1">USA (+1)</option>
                                                <option  data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                                <option  data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                                <option  data-countryCode="VA" value="379">Vatican City (+379)</option>
                                                <option  data-countryCode="VE" value="58">Venezuela (+58)</option>
                                                <option  data-countryCode="VN" value="84">Vietnam (+84)</option>
                                                <option  data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                                <option  data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                                <option  data-countryCode="WF" value="681">Wallis & Futuna (+681)</option>
                                                <option  data-countryCode="EH" value="212">Western Sahara(+212)</option>
                                                <option  data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                                <option  data-countryCode="YU" value="38">Yugoslavia(+38)</option>
                                                <option  data-countryCode="ZM" value="260">Zambia (+260)</option>
                                                <option  data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                            </select>
                                        </div>
                                        <div class="col-8">
                                            <input class="form-control login_mobile" type="text" name="login_mobile" id="login_mobile" placeholder="Enter Mobile No" min="10" max="10">
                                            <span id="mobile_no_error"></span>
                                        </div>
                                    </div>
                                </div>
                                <button class="login-btn" id="login_submit" type="submit">Login</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="step-2" data-step="2" id="otp_final_div" >
                    <div class="login-header">
                        <h3>OTP</h3>
                        <p class="text-muted">Verification your account</p>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="" id="login_country_code_hide">
                        <input type="hidden" name="" id="login_mobile_hide">
                        <input type="hidden" name="" id="login_mode_hide">
                    </div>
                    <div class="form-group">
                        <div class="alert alert-success text-center" role="alert">
                            <strong>We Have Send SMS Via OTP</strong>
                            <strong>Please Check Your Registered Mobile Number </strong>
                        </div>
                        <div class="alert alert-danger text-center" role="alert">
                            We have used default otp for demo purpose.<br> <strong>Default OTP 1234</strong>
                        </div>
                        <input type="text" class="form-control form-control-lg no_only" autocomplete="off" maxlength="4" minlength="4" placeholder="Enter OTP Here.." name="otp_numbers" id='login_otp'>
                        <span for='otp_number' id='otp_error_msg_login'></span>
                    </div>
                    <p class="resend-otp">Didn't receive the OTP? <a href="#" id="login_resend_otp"> Resend OTP</a></p>
                    <div>
                        <button id='registration_finals' type="button" class="login-btn" >Enter</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cancel Modal -->
<div id="cancelModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cancelation Reason</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="cancel_reason"></p>
            </div>
        </div>
    </div>
</div>
<!-- Cancel Modal -->
<span id="success_message"></span>
<span id="error_message"></span>

</body>

</html>

<script>
    function change_language(e){
        var lg =  $(e).attr('lang');
        var tag =  $(e).attr('lang_tag');

        var csrf_token = $('#csrf_lang').val();

//        alert(csrf_token);

        $.post(
            'http://localhost/mushkilasan_codicnator/admin/language/change_language',
            {
                lg:lg,
                tag:tag,
                csrf_token_name: csrf_token
            },
            function(res){
                location.reload();
            })

    }

    function user_currency(code){

        if(code!=""){

            var csrf_token = $('#csrf_lang').val();
            $.ajax({
                type:'POST',
                url: 'http://localhost/mushkilasan_codicnator/ajax/add_user_currency',
                data :  {code:code,csrf_token_name: csrf_token},
                dataType:'json',
                success:function(response)
                {
                    if(response.success)
                    {

                        location.reload();
                    }
                    else {

                        location.reload();
                    }
                }
            });
        }
    }
</script>
