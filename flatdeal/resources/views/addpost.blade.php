@include('layouts.session')
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Easy Tolet | Ads-Post</title>
<style>
.image-preview-input {
    position: relative;
	overflow: hidden;
	margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}
</style>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css">

<link rel="stylesheet" type="text/css" href="assets/css/summernote.css">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
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
<!--
<a href="index-2.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>-->
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="/">
Home
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="category.html">
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
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
FAQ
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="adlistinggrid.html">Ad Grid</a>
<a class="dropdown-item" href="adlistinglist.html">Ad Listing</a>
<a class="dropdown-item" href="ads-details.html">Listing Detail</a>
</div>
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
</div>
</div>
<ul class="mobile-menu">
<li>
<a href="/">Home</a>
</li>
<li>
<a href="category.html">Categories</a>
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
<a class="active" href="#">Pages</a>
<ul class="dropdown">
<li><a href="about.html">About Us</a></li>
<li><a href="services.html">Services</a></li>
<li><a href="ads-details.html">Ads Details</a></li>
<li><a class="active" href="post-ads.html">Ads Post</a></li>
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

</header>


<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
@if (Session::has('msg'))
<h2 class="product-title">{{ Session::get('msg') }}</h2>
@else
<h2 class="product-title">Post an Ad</h2>
@endif
<ol class="breadcrumb">
<li><a href="#">Home /</a></li>
<li class="current">Post you Ads</li>
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
<a href="#"><img src="assets/img/author/img1.jpg" alt=""></a>
</figure>
<div class="usercontent">
<h3>{{ Session::get('user_name') }}</h3>
<h4>{{ Session::get('user_role') }}</h4>
</div>
</div>
<nav class="navdashboard">
<ul>
<li>
<a href="dashboard.html">
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
<a href="#">
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
<a href="account-profile-setting.html">
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
<div class="row page-content">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title">Ad Detail</h2>
</div>
<form enctype="multipart/form-data" method="post" action="/addpost">
<input type ="hidden" id="token" name="_token" value ="<?php echo csrf_token(); ?>">
<div class="dashboard-wrapper">
<div class="form-group mb-3">
<label class="control-label">Tolet Title*</label>
<input class="form-control input-md" name="title" placeholder="Title" type="text"  required>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Tolet Categories*</label>
<div class="tg-select form-control">
<select name="categories">
<option value="0">Select Categories</option>
@foreach($category as $row)
 <option value="{{ $row->id }}">{{ $row->name }}</option>
 @endforeach
</select>
</div>
</div>
<div class="form-group mb-3">
<label class="control-label">Rent*</label>
<input class="form-control input-md" name="rent" placeholder="Ad your Price" type="text" required>
<div class="tg-checkbox">
<input id="tg-priceoncall" type="checkbox" name="rentoncall" value="1">
<label for="tg-priceoncall">Call for Rent</label>
</div>
</div>
<div class="form-group mb-3">
<label class="control-label">Area Size</label>
<input class="form-control input-md" name="size" placeholder="Ad your area size" type="text" required>
</div>
<div class="form-group mb-3">
<label class="control-label">Tolet Month*</label>
<input class="form-control input-md" id="datepicker" name="month" type="text" required>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Area Type*</label>
<div class="tg-select form-control">
<select name="area"  required>
<option value="0">Select One</option>
 <option value="Residential">Residential</option>
 <option value="Commercial">Commercial</option>
 <option value="DOHS">DOHS</option>
 <option value="Local Area">Local Area</option>
</select>
</div>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Tolet For*</label>
<div class="tg-select form-control">
<select name="toletfor" required>
<option value="0">Select One</option>
 <option value="Family">Family</option>
 <option value="Male">Male</option>
 <option value="FFemale">Female</option>
 <option value="Ask">Ask</option>
</select>
</div>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Condition*</label>
<div class="tg-select form-control">
<select name="condition"  required>
<option value="0">Select One</option>
<option value="Plug & Play">Plug & Play</option>
<option value="Semi Furnished">Semi Furnished</option>
<option value="Non Furnished">Non Furnished</option>
<option value="Non Paint">Non Paint</option>
</select>
</div>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Facing</label>
<div class="tg-select form-control">
<select name="facing"  required>
<option value="0">Select One</option>
<option value="East">East</option>
<option value="West">West</option>
<option value="North">North</option>
<option value="South">South</option>
<option value="Road">Road</option>
<option value="Ask">Ask</option>
</select>
</div>
</div>
<div class="form-group md-5">
<label class="control-label">Details*</label>
<textarea style="width:-webkit-fill-available;text-size:20px;" rows="7" placeholder=" write somthing about your tolet..." name="details"  required></textarea>
</div>
<!--<div class="form-group md-5">
<label class="control-label">Location</label>
<textarea style="width:-webkit-fill-available;text-size:20px;" rows="5" placeholder="write full address here..."></textarea>
</div>-->
<!---->
</div>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
<div class="inner-box">
<div class="tg-contactdetail"><!--
<div class="dashboard-box">
<h2 class="dashbord-title">Contact Detail</h2>
</div>-->
<div class="dashboard-wrapper">
<div class="form-group mb-3">
<strong>Inluded Utility bill on Rent*</strong>
<div class="tg-selectgroup">
<span class="tg-radio">
<input id="tg-sameuser"  type="checkbox" name="maintanence" value="1">
<label for="tg-sameuser">Maintanence</label>
</span>
<span class="tg-radio">
<input id="Electricity" type="checkbox" name="electricity" value="1">
<label for="Electricity">Electricity</label>
</span>
<span class="tg-radio">
<input id="Gas" type="checkbox" name="gas" value="1">
<label for="Gas">Gas</label>
</span>
<span class="tg-radio">
<input id="Water" type="checkbox" name="water" value="1">
<label for="Water">Water</label>
</span>
<span class="tg-radio">
<input id="Generator" type="checkbox" name="generator" value="1">
<label for="Generator">Generator</label>
</span>
<span class="tg-radio">
<input id="lift" type="checkbox" name="lift" value="1">
<label for="lift">Lift</label>
</span>
<span class="tg-radio">
<input id="Internet" type="checkbox" name="internet" value="1">
<label for="Internet">Internet</label>
</span>
<span class="tg-radio">
<input id="Parking" type="checkbox" name="parking" value="1">
<label for="Parking">Parking</label>
</span>
</div>
</div>
<div class="form-group mb-3">
<label class="control-label">Bedroom*</label>
<input class="form-control input-md" name="bedroom" type="number" required>
</div>
<div class="form-group mb-3">
<label class="control-label">Washroom*</label>
<input class="form-control input-md" name="washroom" type="number" required>
</div>
<div class="form-group mb-3">
<label class="control-label">Kitchen*</label>
<input class="form-control input-md" name="kitchen" type="number" required>
</div>
<div class="form-group mb-3">
<label class="control-label">Balcony</label>
<input class="form-control input-md" name="balcony" type="number" required>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Devision*</label>
<div class="tg-select form-control">
<select name="devision"  required>
<option value="0"   required>Select One</option>
@foreach($devision as $row)
<option value="{{ $row->id }}">{{ $row->name }}</option>
@endforeach
</select>
</div>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">City*</label>
<div class="tg-select form-control">
<select name="city"  required>
<option value="0">Select One</option>
@foreach($city as $row)
<option value="{{ $row->id }}">{{ $row->name }}</option>
@endforeach
</select>
</div>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Subarea*</label>
<div class="tg-select form-control">
<select name="subarea"  required>
<option value="0">Select One</option>
@foreach($subarea as $row)
<option value="{{ $row->id }}">{{ $row->name }}</option>
@endforeach
</select>
</div>
</div>
<div class="form-group md-5">
<label class="control-label">Sort Address*</label>
<textarea style="width:-webkit-fill-available;text-size:20px;" rows="2" placeholder=" write sort address.." name="sortaddress" required></textarea>
</div>
<label class="control-label">Photos</label>
<div class="row">    
        <div class="col-xs-12 col-md-12">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled" placeholder="Click browse >>"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title" style="background-color:#00cc67;padding:12px;color:white;">Browse</span>
                        <input type="file" id="image" name="image[]" accept="image/png, image/jpeg, image/gif" multiple/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]-->
        </div>
    </div>
</br>   
<div class="tg-checkbox">
<input id="tg-agreetermsandrules" type="checkbox" name="rule" value="1">
<label for="tg-agreetermsandrules">I agree to all <a href="javascript:void(0);"   required>Terms of Use &amp; Posting Rules</a></label>
</div>
<button class="btn btn-common" type="submit">Post Ad</button>
<button class="btn btn-common" type="reset">Reset</button>
</form>
</div>
</div>
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
<strong>E-mail :</strong><span><a href="#"><span class="__cf_email__" data-cfemail="533a3d353c13362b323e233f367d303c3e">[email&#160;protected]</span></a></span>
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
<script>
$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</body>

</html>