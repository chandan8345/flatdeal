<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>FlatBasha | AdsDetails</title>
<link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">


<link rel="stylesheet" typeh="text/css" href="assets/css/nivo-lightbox.css">

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


<div class="page-header" style="background: url(assets/img/ii.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Ad Details</h2>
<ol class="breadcrumb">
<li><a href="#">Home /</a></li>
<li class="current">Ad Details</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<div class="section-padding">
<div class="container">

<div class="product-info row">
<div class="col-lg-7 col-md-12 col-xs-12">
<div class="details-box ads-details-wrapper">
<div id="owl-demo" class="owl-carousel owl-theme">
<?php $id=1;?>
@foreach($image as $row)    
<div class="item">
<div class="product-img">
<img class="img-fluid" src="{{ URL::to('/') }}/postimages/{{ $row->name }}" alt="">
</div>
<span class="price">{{ $id++ }}</span>
</div>
@endforeach
</div>
</div>
</div>
@foreach($post as $row)
<div class="col-lg-5 col-md-12 col-xs-12">
<div class="details-box">
<div class="ads-details-info">
<h2>{{ $row->title }}</h2>
<div class="details-meta">
        <span><a href="#"><i class="lni-alarm-clock md-2"></i> {{ $row->postingdate }}</a></span>
        <span><a href="#"><i class="lni-map-marker"></i> {{ $row->area }}</a></span>
        <span><a href="#"><i class="lni-eye"></i> {{ $row->floorno }}</a></span>
        </div>
<h5 class="title-small">Specification:</h5>
</div>
<ul class="advertisement mb-3">
<li>
<p><strong>Rooms :</strong> {{ $row->bedroom}}</p>
</li>
<li>
<p><strong>Washroom :</strong> {{ $row->washroom}}</p>
</li>
<li>
<p><strong>Kitchen :</strong> <a> {{ $row->kitchen}}</a></p>
</li>
<li>
<p><strong>Preferrd For :</strong> <a> {{ $row->adsfor}}</a></p>
</li>
</ul>
<ul class="advertisement mb-3">
<li>
<p><strong>Area Type</strong> {{ $row->areatype}}</p>
</li>
<li>
<p><strong>Condition</strong> {{ $row->condit}}</p>
</li>
<li>
<p><strong>Facing</strong> <a href="#"> {{ $row->facing}}</a></p>
</li>
</ul>
<div class="ads-btn mb-4">
<a class="btn btn-default" style="text-weight:bold;font-size:16px;"><i></i>৳ {{$row->rent}}</a>
<a class="btn btn-default" style="text-weight:bold;font-size:16px;"><i class="lni-phone-handset"></i> {{ $row->mobile }}</a>
<a class="btn btn-default" style="text-weight:bold;font-size:16px;"><i class="lni-alarm-clock"></i> {{ $row->month }}</a>
</div>
</div>
<div  id="facility" class="form-group">
        <strong>Inluded Utility bill on Rent</strong>
        <div class="tg-selectgroup">
        <span class="tg-radio">
        <input id="tg-sameuser"  type="checkbox" name="maintanence" <?php if($row->maintanence == 1){echo "checked";} ?> >
        <label for="tg-sameuser">Maintanence</label>
        </span>
        <span class="tg-radio">
        <input id="Electricity" type="checkbox" name="electricity" <?php if($row->electricity == 1){echo "checked";} ?> >
        <label for="Electricity">Electricity</label>
        </span>
        <span class="tg-radio">
        <input id="Gas" type="checkbox" name="gas" <?php if($row->gas == 1){echo "checked";} ?> >
        <label for="Gas">Gas</label>
        </span>
        <span class="tg-radio">
        <input id="Water" type="checkbox" name="water" <?php if($row->water == 1){echo "checked";} ?> >
        <label for="Water">Water</label>
        </span>
        <span class="tg-radio">
        <input id="Generator" type="checkbox" name="generator" <?php if($row->generator == 1){echo "checked";} ?> >
        <label for="Generator">Generator</label>
        </span>
        <span class="tg-radio">
                <input id="Parking" type="checkbox" name="parking" <?php if($row->parking == 1){echo "checked";} ?> >
                <label for="Parking">Parking</label>
                </span>
        <span class="tg-radio">
        <input id="lift" type="checkbox" name="lift" <?php if($row->lift == 1){echo "checked";} ?> >
        <label for="lift">Lift</label>
        </span>
        <span class="tg-radio">
        <input id="Internet" type="checkbox" name="internet" <?php if($row->internet == 1){echo "checked";} ?> >
        <label for="Internet">Internet</label>
        </span>
        </div>
        </div>
</div>
</div>


<div class="description-info">
<div class="row">
<div class="col-lg-8 col-md-6 col-xs-12">
<div class="description">
<h4>Description</h4>
<p>{{ $row->details}}</p>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="short-info">
<h4>To-Let Location</h4>
<ul>
<li><a href="#"><i class="lni-map-maker"></i><span> {{ $row->sortaddress }} </span></a></li>
</ul>
</div>
</div>
</div>
</div>

</div>
</div>
@endforeach
<!--
<section class="featured-lis section-padding">
<div class="container">
<h3 class="section-title">Featured Products</h3>
<div class="row">
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="assets/img/product/img1.jpg" alt="">
<div class="overlay">
</div>
<span class="price">89.00 $</span>
</div>
<div class="product-content">
<h3 class="product-title"><a href="ads-details.html">Laptop</a></h3>
<a href="#"><i class="lni-bookmark"></i> New York</a>
<a href="#"><i class="lni-map-marker"></i> California</a>
<div class="icon">
<i class="lni-heart"></i>
</div>
<div class="card-text">
<div class="meta">
<div class="float-left">
<span class="icon-wrap">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star"></i>
<i class="lni-star"></i>
</span>
<span class="count-review">
<span>1</span> Reviews
</span>
</div>
<div class="float-right">
<span class="btn-product bg-red"><a href="#">New</a></span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="assets/img/product/img2.jpg" alt="">
<div class="overlay">
</div>
<span class="price">89.00 $</span>
</div>
<div class="product-content">
<h3 class="product-title"><a href="ads-details.html">Headphones</a></h3>
<a href="#"><i class="lni-bookmark"></i> New York</a>
<a href="#"><i class="lni-map-marker"></i> California</a>
<div class="icon">
<i class="lni-heart"></i>
</div>
<div class="card-text">
<div class="meta">
<div class="float-left">
<span class="icon-wrap">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star"></i>
</span>
<span class="count-review">
<span>1</span> Reviews
</span>
</div>
<div class="float-right">
<span class="btn-product bg-yellow"><a href="#">Sale</a></span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-xs-12">
<div class="product-item">
<div class="carousel-thumb">
<img class="img-fluid" src="assets/img/product/img3.jpg" alt="">
<div class="overlay">
</div>
<span class="price">49.00 $</span>
</div>
<div class="product-content">
<h3 class="product-title"><a href="ads-details.html">Furniture</a></h3>
<a href="#"><i class="lni-bookmark"></i> New York</a>
<a href="#"><i class="lni-map-marker"></i> California</a>
<div class="icon">
<i class="lni-heart"></i>
</div>
<div class="card-text">
<div class="meta">
<div class="float-left">
<span class="icon-wrap">
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
<i class="lni-star-filled"></i>
</span>
<span class="count-review">
<span>1</span> Reviews
</span>
</div>
<div class="float-right">
<span class="btn-product bg-red"><a href="#">New</a></span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
-->

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
<strong>E-mail :</strong><span><a href="#"><span class="__cf_email__" data-cfemail="3c55525a537c59445d514c5059125f5351">[email&#160;protected]</span></a></span>
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

<!-- Mirrored from preview.uideck.com/items/classially/ads-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Nov 2018 14:20:21 GMT -->
</html>