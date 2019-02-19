<!DOCTYPE html>
<html lang="en">

<head><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>FlatBasha | Error</title>
<link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>
<body>

<header id="header-wrap">

<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
                <div class="container">
                
                <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="lni-menu"></span>
                <span class="lni-menu"></span>
                <span class="lni-menu"></span>
                </button>
                <a href="/" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item"><!--
                <a class="nav-link" href="/"><i class="lni-chevron-left"></i>
                Home
                </a>
                </li>-->
                </ul>
                <ul class="sign-in">
                <li class="nav-item dropdown">
                @if(!empty(Session::get('user_name')))
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="lni-user"></i> {{ Session::get('user_name') }}</a>
                @else
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="lni-user"></i> My Account</a>
                @endif
                <div class="dropdown-menu">
                @if(!empty(Session::get('user_name')))
                <a class="dropdown-item" href="/dashbord"><i class="lni-home"></i> Account Home</a>
                @endif
                @if(empty(Session::get('user_name')))
                <a class="dropdown-item" href="/signin"><i class="lni-lock"></i> Log In</a>
                @endif
                @if(empty(Session::get('user_name')))
                <a class="dropdown-item" href="/signup"><i class="lni-user"></i> Signup</a>
                @endif
                <a class="dropdown-item" href="forgot-password.html"><i class="lni-reload"></i> Forgot Password</a>
                @if(!empty(Session::get('user_name')))
                <a class="dropdown-item" href="/logout"><i class="lni-close"></i>Log out</a>
                @endif
                </div>
                </li>
                </ul>
                @if(!empty(Session::get('user_name')))
                <a class="tg-btn" href="/ads-post">
                <i class="lni-pencil-alt"></i> Post An Ad
                </a>
                @endif
                </div>
                </div>
                
                <ul class="mobile-menu">
                <li class="nav-item">
                <a class="nav-link" href="/">
                Home
                </a>
                </li>
                <li class="nav-item dropdown">
                @if(!empty(Session::get('user_name')))
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="lni-user"></i> {{ Session::get('user_name') }}</a>
                @else
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="lni-user"></i> My Account</a>
                @endif
                <div class="dropdown-menu">
                @if(!empty(Session::get('user_name')))
                <a class="dropdown-item" href="/dashbord"><i class="lni-home"></i> Account Home</a>
                @endif
                @if(empty(Session::get('user_name')))
                <a class="dropdown-item" href="/signin"><i class="lni-lock"></i> Log In</a>
                @endif
                @if(empty(Session::get('user_name')))
                <a class="dropdown-item" href="/signup"><i class="lni-user"></i> Signup</a>
                @endif
                <a class="dropdown-item" href="forgot-password.html"><i class="lni-reload"></i> Forgot Password</a>
                @if(!empty(Session::get('user_name')))
                <a class="dropdown-item" href="/logout"><i class="lni-close"></i>Log out</a>
                @endif
                </div>
                </li>
                @if(!empty(Session::get('user_name')))
                <a class="tg-btn" href="/ads-post">
                <i class="lni-pencil-alt"></i> Post An Ad
                </a>
                @endif
                </ul>
                </ul>
                
                </nav>

</header>


<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">404</h2>
<ol class="breadcrumb">
<li><a href="/">Home /</a></li>
<li class="current">404</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<div class="error section-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
<div class="error-content">
<div class="error-message">
<h2>404</h2>
<h3><span>Ooooops!</span> Something Went Wrong...</h3>
</div>
<form class="form-error-search">
<input type="search" name="search" class="form-control" placeholder="Search Here">
<button class="btn btn-common btn-search" type="button">Search Now</button>
</form>
<div class="description">
<span>Or Goto <a href="/">Homepage</a></span>
</div>
</div>
</div>
</div>
</div>
</div>


<footer>

<section class="footer-Content">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">About Us</h3>
<div class="textwidget">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed, auctor ut purus.</p>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Useful Links</h3>
<ul class="menu">
<li><a href="#">How to Sell Faster</a></li>
<li><a href="#">Membership Details</a></li>
<li><a href="#">Why Choose</a></li>
<li><a href="#">Job Opennings</a></li>
<li><a href="#">Using This Platform</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Help & Support</h3>
<ul class="menu">
<li><a href="#">Live Chat</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Purchase Protection</a></li>
<li><a href="#">Support</a></li>
<li><a href="#">Contact us</a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Contact Information</h3>
<ul class="contact-footer">
<li>
<strong>Address :</strong><span>1900 Pico Blvd, New York</span>
</li>
<li>
<strong>Phone :</strong><span>+48 123 456 789</span>
</li>
<li>
<strong>E-mail :</strong><span><a href="#"><span class="__cf_email__" data-cfemail="81e8efe7eec1e4f9e0ecf1ede4afe2eeec">[email&#160;protected]</span></a></span>
</li>
</ul>
<ul class="footer-social">
<li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
<li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
<li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
<li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</section>


<div id="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="site-info float-left">
<p>All copyrights reserved &copy; 2018 - Designed by <a href="https://uideck.com/" rel="nofollow">UIdeck</a></p>
</div>
<div class="float-right">
<ul class="bottom-card">
<li>
<a href="#"><img src="assets/img/footer/card1.jpg" alt="card"></a>
</li>
<li>
<a href="#"><img src="assets/img/footer/card2.jpg" alt="card"></a>
</li>
<li>
<a href="#"><img src="assets/img/footer/card3.jpg" alt="card"></a>
</li>
<li>
<a href="#"><img src="assets/img/footer/card4.jpg" alt="card"></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>

</footer>


<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/color-switcher.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/nivo-lightbox.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<script src="assets/js/summernote.js"></script>
</body>

</html>