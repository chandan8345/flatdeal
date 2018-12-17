@include('layouts.session')
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Easy Tolet | Dashboard</title>
<link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">


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


<div class="page-header" style="background: url(assets/img/ii.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
@if (Session::has('user_name'))
<h2 class="product-title">Hi, {{ Session::get('user_name') }}</h2>
@endif
<ol class="breadcrumb">
<li><a href="#">Home /</a></li>
<li class="current">Dashboard</li>
</ol>
</div>
</div>
</div>
</div>
</div>


<div id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
<aside>
<div class="sidebar-box">
<div class="user">
<figure>
<a href="#"><img src="{{ URL::to('/') }}/image/{{ Session::get('image') }}" style="width:80px;height:80px;" alt=""></a>
</figure>
<div class="usercontent">
<h3>{{ Session::get('user_name') }}</h3>
<h4>{{ Session::get('user_role') }}</h4>
</div>
</div>
<nav class="navdashboard">
<ul>
<li>
<a class="active" href="dashboard.html">
<i class="lni-dashboard"></i>
<span>Dashboard</span>
</a>
</li>
<li>
<a href="account-profile-setting.html">
<i class="lni-cog"></i>
<span>Profile Settings</span>
</a>
</li>
<li>
<a href="account-myads.html">
<i class="lni-layers"></i>
<span>My Ads</span>
</a>
</li>
<li>
<a href="offermessages.html">
<i class="lni-envelope"></i>
<span>Offers/Messages</span>
</a>
</li>
<li>
<a href="payments.html">
<i class="lni-wallet"></i>
<span>Payments</span>
</a>
</li>
<li>
<a href="account-favourite-ads.html">
<i class="lni-heart"></i>
<span>My Favourites</span>
</a>
</li>
<li>
<a href="privacy-setting.html">
<i class="lni-star"></i>
<span>Privacy Settings</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-enter"></i>
<span>Logout</span>
</a>
</li>
</ul>
</nav>
</div>
<div class="widget">
<h4 class="widget-title">Advertisement</h4>
<div class="add-box">
<img class="img-fluid" src="assets/img/img1.jpg" alt="">
</div>
</div>
</aside>
</div>
<div class="col-sm-12 col-md-8 col-lg-9">
<div class="page-content">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title">Dashboard</h2>
</div>
<div class="dashboard-wrapper">
<div class="dashboard-sections">
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="dashboardbox">
<div class="icon"><i class="lni-add-files"></i></div>
<div class="contentbox">
<h2><a href="#">Active Ads</a></h2>
<h3>80 Ads Published</h3>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="dashboardbox">
<div class="icon"><i class="lni-support"></i></div>
<div class="contentbox">
<h2><a href="#">Inactive Ads</a></h2>
<h3>2040 Ads Inactive</h3>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="dashboardbox">
<div class="icon"><i class="lni-support"></i></div>
<div class="contentbox">
<h2><a href="#">Sold Ads</a></h2>
<h3>2040 Ads Sold</h3>
</div>
</div>
</div>
</div>
</div>
<table class="table dashboardtable tablemyads">
<thead>
<tr>
<th>
<span class="checkbox">
<input id="checkedall" type="checkbox" name="myads" value="checkall">
<label for="checkedall"></label>
</span>
</th>
<th>Photo</th>
<th>Title</th>
<th>Category</th>
<th>Ad Status</th>
<th>Price</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr data-category="active">
<td>
<span class="checkbox">
<input id="adone" type="checkbox" name="myads" value="myadone">
<label for="adone"></label>
</span>
</td>
<td class="photo"><img class="img-fluid" src="assets/img/product/img1.jpg" alt=""></td>
<td data-title="Title">
<h3>HP Laptop 6560b core i3 3nd generation</h3>
<span>Ad ID: ng3D5hAMHPajQrM</span>
</td>
<td data-title="Category"><span class="adcategories">Laptops & PCs</span></td>
<td data-title="Ad Status"><span class="adstatus adstatusactive">active</span></td>
<td data-title="Price">
<h3>139$</h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
</div>
</td>
</tr>
<tr data-category="active">
<td>
<span class="checkbox">
<input id="adtwo" type="checkbox" name="myads" value="myadtwo">
<label for="adtwo"></label>
</span>
</td>
<td class="photo"><img class="img-fluid" src="assets/img/product/img2.jpg" alt=""></td>
<td data-title="Title">
<h3>Jvc Haebr80b In-ear Sports Headphones</h3>
<span>Ad ID: ng3D5hAMHPajQrM</span>
</td>
<td data-title="Category">Electronics</td>
<td data-title="Ad Status"><span class="adstatus adstatusactive">Active</span></td>
<td data-title="Price">
<h3>$189</h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
</div>
</td>
</tr>
<tr data-category="inactive">
<td>
<span class="checkbox">
<input id="adthree" type="checkbox" name="myads" value="myadthree">
<label for="adthree"></label>
</span>
</td>
<td class="photo"><img class="img-fluid" src="assets/img/product/img3.jpg" alt=""></td>
<td data-title="Title">
<h3>Furniture Straps 4-Pack, TV Anti-Tip Metal Wall </h3>
<span>Ad ID: ng3D5hAMHPajQrM</span>
</td>
<td data-title="Category">Real Estate</td>
<td>
<span class="adstatus adstatusinactive">Inactive</span>
</td>
<td data-title="Price">
<h3>$69</h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
</div>
</td>
</tr>
<tr data-category="sold">
<td>
<span class="checkbox">
<input id="adfour" type="checkbox" name="myads" value="myadfour">
<label for="adfour"></label>
</span>
</td>
<td class="photo"><img class="img-fluid" src="assets/img/product/img4.jpg" alt=""></td>
<td data-title="Title">
<h3>Apple iPhone X, Fully Unlocked 5.8", 64 GB - Black</h3>
<span>Ad ID: ng3D5hAMHPajQrM</span>
</td>
<td data-title="Category">Mobile</td>
<td data-title="Ad Status"><span class="adstatus adstatussold">Sold</span></td>
<td data-title="Price">
<h3>$89</h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
</div>
</td>
</tr>
<tr data-category="active">
<td>
<span class="checkbox">
<input id="adfive" type="checkbox" name="myads" value="myadfive">
<label for="adfive"></label>
</span>
</td>
<td class="photo"><img class="img-fluid" src="assets/img/product/img5.jpg" alt=""></td>
<td data-title="Title">
<h3>Apple Macbook Pro 13 Inch with/without Touch Bar</h3>
<span>Ad ID: ng3D5hAMHPajQrM</span>
</td>
<td data-title="Category">Apple</td>
<td data-title="Ad Status"><span class="adstatus adstatusactive">Active</span></td>
<td data-title="Price">
<h3>$289</h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
</div>
</td>
</tr>
<tr data-category="sold">
<td>
<span class="checkbox">
<input id="adsix" type="checkbox" name="myads" value="myadsix">
<label for="adsix"></label>
</span>
</td>
<td class="photo"><img class="img-fluid" src="assets/img/product/img6.jpg" alt=""></td>
<td data-title="Title">
<h3>Apple MQDT2CL/A 10.5-Inch 64GB Wi-Fi iPad Pro</h3>
<span>Ad ID: ng3D5hAMHPajQrM</span>
</td>
<td data-title="Category">Apple iPad</td>
<td data-title="Ad Status"><span class="adstatus adstatussold">Sold</span></td>
<td data-title="Price">
<h3>$159</h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
</div>
</td>
</tr>
<tr data-category="expired">
<td>
<span class="checkbox">
<input id="adseven" type="checkbox" name="myads" value="myadseven">
<label for="adseven"></label>
</span>
</td>
<td class="photo"><img class="img-fluid" src="assets/img/product/img7.jpg" alt=""></td>
<td data-title="Title">
<h3>Essential Phone 8GB Unlocked with Dual Camera</h3>
<span>Ad ID: ng3D5hAMHPajQrM</span>
</td>
<td data-title="Category">Mobile</td>
<td data-title="Ad Status"><span class="adstatus adstatusexpired">Expired</span></td>
<td data-title="Price">
<h3>$89</h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
</div>
</td>
</tr>
<tr data-category="inactive">
<td>
<span class="checkbox">
<input id="adeight" type="checkbox" name="myads" value="myadeight">
<label for="adeight"></label>
</span>
</td>
<td class="photo"><img class="img-fluid" src="assets/img/product/img8.jpg" alt=""></td>
<td data-title="Title">
<h3>LG Nexus 5x LG-H791 32GB GSM Smartphone</h3>
<span>Ad ID: ng3D5hAMHPajQrM</span>
</td>
<td data-title="Category">Mobile</td>
<td>
<span class="adstatus adstatusinactive">Inactive</span>
</td>
<td data-title="Price">
<h3>$59</h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
</div>
</td>
</tr>
<tr data-category="expired">
<td>
<span class="checkbox">
<input id="adnine" type="checkbox" name="myads" value="myadnine">
<label for="adnine"></label>
</span>
</td>
<td class="photo"><img class="img-fluid" src="assets/img/product/img9.jpg" alt=""></td>
<td data-title="Title">
<h3>Samsung Galaxy G550T On5 GSM Unlocked Smartphone</h3>
<span>Ad ID: ng3D5hAMHPajQrM</span>
</td>
<td data-title="Category">Mobile</td>
<td data-title="Ad Status"><span class="adstatus adstatusexpired">Expired</span></td>
<td data-title="Price">
<h3>$129</h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
</div>
</td>
</tr>
<tr data-category="deleted">
<td>
<span class="checkbox">
<input id="adten" type="checkbox" name="myads" value="myadten">
<label for="adten"></label>
</span>
</td>
<td class="photo"><img class="img-fluid" src="assets/img/product/img10.jpg" alt=""></td>
<td data-title="Title">
<h3>Apple iMac Pro 27" All-in-One Desktop, Space Gray</h3>
<span>Ad ID: ng3D5hAMHPajQrM</span>
</td>
<td data-title="Category">Apple iMac</td>
<td data-title="Ad Status"><span class="adstatus adstatusdeleted">Deleted</span></td>
<td data-title="Price">
<h3>$389</h3>
</td>
<td data-title="Action">
<div class="btns-actions">
<a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
<a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
<a class="btn-action btn-delete" href="#"><i class="lni-trash"></i></a>
</div>
</td>
</tr>
</tbody>
</table>
</div>
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
<strong>E-mail :</strong><span><a href="#"><span class="__cf_email__" data-cfemail="462f28202906233e272b362a236825292b">[email&#160;protected]</span></a></span>
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

<!-- Mirrored from preview.uideck.com/items/classially/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Nov 2018 14:23:21 GMT -->
</html>