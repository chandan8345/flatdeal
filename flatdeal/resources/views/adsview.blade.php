<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.uideck.com/items/classially/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Nov 2018 14:22:34 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Easy Tolet | AdsView</title>

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
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="/">
Home
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/adsview">
all ads
</a>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Categories
</a>
<div class="dropdown-menu">
    @foreach($category as $row)
    <a class="dropdown-item" href="{{ $row->name }}">{{ $row->name }}</a>
    @endforeach
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Area
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="blog.html">Residential</a>
<a class="dropdown-item" href="blog-left-sidebar.html">Commercial</a>
<a class="dropdown-item" href="blog-grid-full-width.html">DOHS</a>
<a class="dropdown-item" href="single-post.html">Local</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" href="/signup">
Sign UP
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/faq">
FAQ
</a>
</li>
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
<li>
<a href="index-2.html">Home</a>
</li>
<li>
<a class="active" href="category.html">Categories</a>
</li>
<li>
<a href="#">
Listings
</a>
<ul class="dropdown">
<li><a href="adlistinggrid.html">Ad Grid</a></li>
<li><a href="adlistinglist.html">Ad Listing</a></li>
<li><a href="ads-details.html">Listing Detail</a></li>
</ul>
</li>
<li>
<a href="#">Pages</a>
<ul class="dropdown">
<li><a href="about.html">About Us</a></li>
<li><a href="services.html">Services</a></li>
<li><a href="ads-details.html">Ads Details</a></li>
<li><a href="post-ads.html">Ads Post</a></li>
<li><a href="pricing.html">Packages</a></li>
<li><a href="testimonial.html">Testimonial</a></li>
<li><a href="faq.html">FAQ</a></li>
<li><a href="404.html">404</a></li>
</ul>
</li>
<li>
<a href="#">Blog</a>
<ul class="dropdown">
<li><a href="blog.html">Blog - Right Sidebar</a></li>
<li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
<li><a href="blog-grid-full-width.html"> Blog full width </a></li>
<li><a href="single-post.html">Blog Details</a></li>
</ul>
</li>
<li>
<a href="contact.html">Contact Us</a>
</li>
<li>
<a>My Account</a>
<ul class="dropdown">
<li><a href="account-profile-setting.html"><i class="lni-home"></i> Account Home</a></li>
<li><a href="account-myads.html"><i class="lni-wallet"></i> My Ads</a></li>
<li><a href="account-favourite-ads.html"><i class="lni-heart"></i> Favourite ads</a></li>
<li><a href="account-archived-ads.html"><i class="lni-folder"></i> Archived</a></li>
<li><a href="login.html"><i class="lni-lock"></i> Log In</a></li>
<li><a href="signup.html"><i class="lni-user"></i> Signup</a></li>
<li><a href="forgot-password.html"><i class="lni-reload"></i> Forgot Password</a></li>
<li><a href="account-close.html"><i class="lni-close"></i>Account close</a></li>
</ul>
</li>
</ul>

</nav>


<div id="hero-area">
<div class="overlay"></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 text-center">
<div class="contents-ctg">
<div class="search-bar">
<fieldset>
<form class="search-form">
<div class="form-group tg-inputwithicon">
<i class="lni-map-marker"></i>
<div class="tg-select">
<select>
<option value="0">Select Divisions</option>
@foreach($devision as $row)
    <option value="{{ $row->id }}">{{ $row->name }}</option>
    @endforeach
</select>
</div>
</div>
<div class="form-group tg-inputwithicon">
<i class="lni-layers"></i>
<div class="tg-select">
<select>
<option value="0">Select City</option>
@foreach($city as $row)
    <option value="{{ $row->id }}">{{ $row->name }}</option>
    @endforeach
</select>
</div>
</div>

<div class="form-group tg-inputwithicon">
    <i class="lni-layers"></i>
    <div class="tg-select">
    <select>
    <option value="0">Select Categories</option>
    @foreach($category as $row)
    <option value="{{ $row->id }}">{{ $row->name }}</option>
    @endforeach
    </select>
    </div>
    </div>

<button class="btn btn-common" type="button"><i class="lni-search"></i></button>
</form>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>

</header>


<div class="main-container section-padding">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
<aside>

<div class="widget widget_search">
<form role="search" id="search-form">
<input type="search" class="form-control" autocomplete="off" name="s" placeholder="Search..." id="search-input" value="">
<button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
</form>
</div>

<div class="widget categories">
<h4 class="widget-title">All Categories</h4>
<ul class="categories-list">
<li>
<a href="#">
<i class="lni-dinner"></i>
Hotel & Travels <span class="category-counter">(5)</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-control-panel"></i>
Services <span class="category-counter">(8)</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-github"></i>
Pets <span class="category-counter">(2)</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-coffee-cup"></i>
Restaurants <span class="category-counter">(3)</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-home"></i>
Real Estate <span class="category-counter">(4)</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-pencil"></i>
Jobs <span class="category-counter">(5)</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-display"></i>
Electronics <span class="category-counter">(9)</span>
</a>
</li>
</ul>
</div>
<div class="widget">
<h4 class="widget-title">Advertisement</h4>
<div class="add-box">
<img class="img-fluid" src="assets/img/img1.jpg" alt="">
</div>
</div>
</aside>
</div>
<div class="col-lg-9 col-md-12 col-xs-12 page-content">

<div class="product-filter">
<div class="short-name">
<span>Showing (1 - 12 products of 7371 products)</span>
</div>
<div class="Show-item">
<span>Show Items</span>
<form class="woocommerce-ordering" method="post">
<label>
<select name="order" class="orderby">
<option selected="selected" value="menu-order">49 items</option>
<option value="popularity">popularity</option>
<option value="popularity">Average ration</option>
<option value="popularity">newness</option>
<option value="popularity">price</option>
</select>
</label>
</form>
</div>
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#grid-view"><i class="lni-grid"></i></a>
</li>
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#list-view"><i class="lni-list"></i></a>
</li>
</ul>
</div>


<div class="adds-wrapper">
<div class="tab-content">
<div id="grid-view" class="tab-pane fade">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="featured-box">
<figure>
<div class="icon">
 <i class="lni-heart"></i>
</div>
<a href="#"><img class="img-fluid" src="assets/img/featured/img1.jpg" alt=""></a>
</figure>
<div class="feature-content">
<div class="tg-product">
<a href="#">Mobiles > Accessories</a>
</div>
<h4><a href="ads-details.html">Apple iPhone X</a></h4>
<span>Last Updated: 4 hours ago</span>
<ul class="address">
<li>
<a href="#"><i class="lni-map-marker"></i>New York</a>
</li>
<li>
<a href="#"><i class="lni-alarm-clock"></i> 7 Jan, 10:10 pm</a>
</li>
<li>
<a href="#"><i class="lni-user"></i> John Smith</a>
</li>
<li>
<a href="#"><i class="lni-tag"></i> Mobile</a>
</li>
</ul>
<div class="btn-list">
<a class="btn-price" href="#">$ 25</a>
<a class="btn btn-common" href="ads-details.html">
<i class="lni-list"></i>
View Details
</a>
</div>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div class="featured-box">
<figure>
<div class="icon">
<i class="lni-heart"></i>
</div>
<a href="#"><img class="img-fluid" src="assets/img/featured/img2.jpg" alt=""></a>
</figure>
<div class="feature-content">
<div class="tg-product">
<a href="#">Loptop > Accessories</a>
</div>
<h4><a href="ads-details.html">Brand New Macbook Pro</a></h4>
<span>Last Updated: 4 hours ago</span>
<ul class="address">
<li>
<a href="#"><i class="lni-map-marker"></i>New York</a>
</li>
<li>
<a href="#"><i class="lni-alarm-clock"></i> 7 Jan, 10:10 pm</a>
</li>
<li>
<a href="#"><i class="lni-user"></i> John Smith</a>
</li>
<li>
<a href="#"><i class="lni-tag"></i> Loptop</a>
</li>
</ul>
<div class="btn-list">
<a class="btn-price" href="#">$ 25</a>
<a class="btn btn-common" href="ads-details.html">
<i class="lni-list"></i>
View Details
</a>
</div>
</div>
</div>
</div>

</div>
</div>
<!--listview -->
<div id="list-view" class="tab-pane fade active show">
<div class="row">
<table id="table" class="table" style="width:100%">
    <tbody>
         <tr>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="featured-box">
<figure>
<div class="icon">
<i class="lni-heart"></i>
</div>
<a href="#"><img class="img-fluid" src="assets/img/featured/img1.jpg" alt=""></a>
 </figure>
<div class="feature-content">
<div class="tg-product">
<a href="#">Mobiles > Accessories</a>
</div>
<h4><a href="ads-details.html">Apple iPhone X</a></h4>
<span>Last Updated: 4 hours ago</span>
<ul class="address">
<li>
<a href="#"><i class="lni-map-marker"></i>New York</a>
</li>
<li>
<a href="#"><i class="lni-alarm-clock"></i> 7 Jan, 10:10 pm</a>
</li>
<li>
<a href="#"><i class="lni-user"></i> John Smith</a>
</li>
<li>
<a href="#"><i class="lni-tag"></i> Mobile</a>
</li>
</ul>
<div class="btn-list">
<a class="btn-price" href="#">$ 25</a>
<a class="btn btn-common" href="ads-details.html">
<i class="lni-list"></i>
View Details
</a>
</div>
</div>
</div>
</div>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>


<div class="pagination-bar">
<nav>
<ul class="pagination">
<li class="page-item"><a class="page-link active" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
</nav>
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
<strong>E-mail :</strong><span><a href="#"><span class="__cf_email__" data-cfemail="2e474048416e4b564f435e424b004d4143">[email&#160;protected]</span></a></span>
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


<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-min.js"></script>
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

<!-- Mirrored from preview.uideck.com/items/classially/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Nov 2018 14:22:34 GMT -->
</html>