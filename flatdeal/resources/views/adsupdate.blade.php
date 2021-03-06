@include('layouts.session')
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>FlatBasha | Ads-Update</title>
<link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png" />
<style>
.img {
    vertical-align: middle;
    border-style: none;
    margin-top: 10px;
}
</style>
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

<a href="/" class="navbar-brand"><img src="assets/img/logo.png" style="height:50px;" alt=""></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto"><!--
<li class="nav-item">
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
</ul>
</ul>

</nav>

</header>


<div class="page-header"  style="background: url(assets/img/ii.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
@if (Session::has('msg'))
<h2 class="product-title">{{ Session::get('msg') }}</h2>
@else
<h2 class="product-title">Update an Ads</h2>
@endif
<ol class="breadcrumb">
<li><a href="/">Home ></a></li>
<li class="current">Modify your Ads</li>
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
<!--
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
</nav>-->
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
<h2 class="dashbord-title">Ad Details</h2>
</div>
@foreach($data as $key)
<form enctype="multipart/form-data" method="post" action="/updatepost">
<input type ="hidden" id="token" name="_token" value ="<?php echo csrf_token(); ?>">
<input type ="hidden" id="token" name="id" value ="{{ $key->id }}">
<div class="dashboard-wrapper">
<div class="form-group mb-3">
<label class="control-label">Title*</label>
<input class="form-control input-md"  id="title"  name="title" placeholder="Title" type="text" value="{{ $key->title }}">
<p  id="titlemsg" style="color:red;display:none;"> please fill out this field</p>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Categories*</label>
<div class="tg-select form-control">
<select id="category" name="categories" onchange="myfunc()">
<option value="0">Select Categories</option>
@foreach($category as $row)
 <option value="{{ $row->name }}" <?php if($key->category == $row->name){ echo "selected";}  ?>>{{ $row->name }}</option>
 @endforeach
</select>
</div>
<p style="color:red;display:none;" id="categorymsg"> please select one item on this</p>
</div>
<div class="form-group mb-3">
<label class="control-label">Price*</label>
<input class="form-control input-md"  id="rent"  name="rent"  value="{{ $key->rent }}" placeholder="Ad your Price" type="text">
<p style="color:red;display:none;" id="rentmsg"> please fill out this field or check callforprice</p>
<div class="tg-checkbox">
<input type="checkbox" id="rentoncall" name="rentoncall" value="1" onchange="call()">
<label for="rentoncall">Call for Price</label>
</div>
</div>
<div class="form-group mb-3">
<label class="control-label">Area Size</label>
<input  id="size" class="form-control input-md" name="size" value="{{ $key->size }}" placeholder="Ad your area size" type="text">
<p style="color:red;display:none;" id="sizemsg"> please fill out this field</p>
</div>
<div class="form-group mb-3">
<label class="control-label">Available Month*</label>
<input  id="date" class="form-control input-md" value="{{ $key->month }}" name="month" type="date">
<p style="color:red;display:none;" id="datemsg"> please fill out this field</p>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Area Type*</label>
<div class="tg-select form-control">
<select id="areatype" name="areatype">
<option value="0">Select One</option>
@foreach($areatype as $row)
 <option value="{{ $row->name }}" <?php if($key->areatype == $row->name) echo "selected";  ?> >{{ $row->name }}</option>
 @endforeach
</select>
</div>
<p style="color:red;display:none;" id="areatypemsg"> please select one item on this</p>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">AdsFor*</label>
<div class="tg-select form-control">
<select id="adsfor" name="adsfor">
<option value="0">Select One</option>
@foreach($toletfor as $row)
 <option value="{{ $row->id }}" <?php if($key->adsfor == $row->name) echo "selected";  ?> >{{ $row->name }}</option>
 @endforeach
</select>
</select>
</div>
<p style="color:red;display:none;" id="adsformsg"> please select one item on this</p>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Condition*</label>
<div class="tg-select form-control">
<select id="condition" name="condition">
<option value="0">Select One</option>
@foreach($condition as $row)
 <option value="{{ $row->name }}" <?php if($key->condit == $row->name) echo "selected";  ?> >{{ $row->name }}</option>
 @endforeach
</select>
</div>
<p style="color:red;display:none;" id="conditionmsg"> please select one item on this</p>
</div>
<div id="floor" class="form-group mb-3">
<label class="control-label">Floor No</label>
<input id="floorno" class="form-control input-md" name="floor" value="{{ $key->floorno }}" type="text" placeholder="Ground Floor">
<p style="color:red;display:none;" id="floormsg"> please fill out this field</p>
</div>
<div class="form-group md-5">
<label class="control-label">Details*</label>
<textarea id="details"  style="width:-webkit-fill-available;text-size:20px;" rows="7" placeholder=" write somthing about your tolet..." name="details">{{ $key->details }}</textarea>
<p style="color:red;display:none;" id="detailsmsg"> please fill out this field</p>
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
<div  id="facility" class="form-group mb-3">
<strong>Included Utility bill on Rent*</strong>
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
<input id="Generator" type="checkbox" name="generator" value="1">
<label for="Generator">Generator</label>
</span>
<span class="tg-radio">
<input id="Gas" type="checkbox" name="gas" value="1">
<label for="Gas">Gas</label>
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
<span class="tg-radio">
<input id="Security" type="checkbox" name="security" value="1">
<label for="Security">Security</label>
</span>
<span class="tg-radio">
<input id="Water" type="checkbox" name="water" value="1">
<label for="Water">Water</label>
</span>
</div>
</div>
<div id="room" class="form-group mb-3">
<label class="control-label">Room*</label>
<input id="bedroom" class="form-control input-md" name="bedroom" type="number"  value="{{ $key->bedroom }}">
<p style="color:red;display:none;" id="bedroommsg"> please fill out this field</p>
</div>
<div id="washroom" class="form-group mb-3">
<label class="control-label">Washroom*</label>
<input  id="bath" class="form-control input-md" name="washroom" type="number"  value="{{ $key->washroom }}">
<p style="color:red;display:none;" id="bathmsg"> please fill out this field</p>
</div>
<div id="kitchen" class="form-group mb-3">
<label id="lblkitchen" class="control-label">Kitchen*</label>
<input  id="ranna" class="form-control input-md" name="kitchen" type="number"  value="{{ $key->kitchen }}">
<p style="color:red;display:none;" id="rannamsg"> please fill out this field</p>
</div>
<div id="balcony" class="form-group mb-3">
<label id="lblbalcony" class="control-label">Balcony</label>
<input  id="baranda"  class="form-control input-md" name="balcony" type="number" value="{{ $key->balcony }}">
<p style="color:red;display:none;" id="barandamsg"> please fill out this field</p>
</div>
<div id="facing" class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Facing</label>
<div class="tg-select form-control">
<select id="face" name="facing">
<option value="0">Select One</option>
@foreach($facing as $row)
 <option value="{{ $row->name }}" <?php if($key->facing == $row->name) echo "selected";  ?> >{{ $row->name }}</option>
 @endforeach
</select>
</div>
<p style="color:red;display:none;" id="facemsg"> please select one item on this</p>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Devision*</label>
<div class="tg-select form-control">
<select id="devision" name="devision" onchange="getCity()">
<option value="0">Select One</option>
@foreach($devision as $row)
<option value="{{ $row->name }}"  <?php if($key->devision == $row->name) echo "selected";  ?> >{{ $row->name }}</option>
@endforeach
</select>
</div>
<p style="color:red;display:none;" id="devisionmsg"> please select one item on this</p>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">City*</label>
<div class="tg-select form-control">
<select id="city" onchange="getArea()" name="city">
<option value="0">Select One</option>
@foreach($city as $row)
<option value="{{ $row->name }}" <?php if($key->city == $row->name){ echo "selected";}  ?> >{{ $row->name }}</option>
@endforeach
</select>
</div>
<p style="color:red;display:none;" id="citymsg"> please select one item on this</p>
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Area*</label>
<div class="tg-select form-control">
<select id="area" name="area">
<option value="0">Select One</option>
@foreach($area as $row)
<option value="{{ $row->name }}"  <?php if($key->area == $row->name) echo "selected";  ?>>{{ $row->name }}</option>
@endforeach
</select>
</div>
<p style="color:red;display:none;" id="areamsg"> please select one item on this</p>
</div>
<div class="form-group md-5">
<label class="control-label">Sort Address*</label>
<textarea id="sortaddress" style="width:-webkit-fill-available;text-size:20px;" rows="2" placeholder=" write sort address.." name="sortaddress">{{ $key->sortaddress }}</textarea>
<p style="color:red;display:none;" id="sortaddressmsg"> please fill out this field</p>
</div>
<div class="form-group mb-3 tg-inputwithicon">
  <label class="control-label">Purpose*</label>
  <div class="tg-select form-control">
  <select  id="adstype" name="adstype">
  <option value="Rent" <?php if($key->adstype == 'Rent') echo "selected";  ?> >Rent</option>
  <option value="Sell" <?php if($key->adstype == 'Sell') echo "selected";  ?> >Sell</option>
  </select>
  </div>
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
<!--<input id="tg-agreetermsandrules" type="checkbox" name="rule" value="1">
<label for="tg-agreetermsandrules">I agree to all <a href="javascript:void(0);"   required>Terms of Use &amp; Posting Rules</a></label>
--></div>
<button type="button" class="btn btn-common" id="done">Update Ad</button>
<button class="btn btn-common" type="reset">Reset</button>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Notice Box</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure want to update this post ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="submit" type="sumbit" class="btn btn-common">Update</button>
      </div>
    </div>
  </div>
</div>
</form>
@endforeach
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

<script  src="assets/js/valid.js"></script>
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
  <script type="text/javascript">
    function myfunc(){
      var category=$("#category").val();
      //console.log(category);
      if(category == "Flat | Apartment"){
         $('#kitchen').show();
         $('#washroom').show();
         $('#balcony').show();
         $('#floor').show();
         $('#room').show();
         $('#facility').show();
         $('#facing').show();
         $('#ranna').val("");
         $('#bath').val("");
         $('#baranda').val("");
         $('#floor').val("");
         $('#bedroom').val("");
         $('#lblkitchen').text("Kitchen");
         $('#lblbalcony').text("Balcony");
      }else if(category == "Office Space"){
        $('#kitchen').show();
         $('#washroom').show();
         $('#balcony').show();
         $('#floor').show();
         $('#room').show();
         $('#facility').show();
         $('#facing').show(); 
         $('#ranna').val("");
         $('#bath').val("");
         $('#baranda').val("");
         $('#floor').val("");
         $('#bedroom').val("");
         $('#lblkitchen').text("Conference Room");
         $('#lblbalcony').text("Canteen");
      }else if(category == "Industry | Factory"){
        $('#lblkitchen').text("Kitchen");
         $('#lblbalcony').text("Balcony");
        $('#kitchen').hide();
         $('#washroom').show();
         $('#balcony').hide();
         $('#floor').show();
         $('#room').show();
         $('#facility').show();
         $('#facing').show();
         $('#ranna').val(0);
         $('#bath').val("");
         $('#baranda').val(0);
         $('#floor').val("");
         $('#bedroom').val("");
      }else if(category == "Retail Space"){
        $('#lblkitchen').text("Kitchen");
         $('#lblbalcony').text("Balcony");  
        $('#kitchen').hide();
         $('#washroom').show();
         $('#balcony').hide();
         $('#floor').show();
         $('#room').show();
         $('#facility').show();
         $('#facing').hide();
          $('#ranna').val(0);
         $('#bath').val("");
         $('#baranda').val(0);
         $('#floor').val("");
         $('#bedroom').val("");
      }else if(category == "Plot | Land"){
        $('#lblkitchen').text("Kitchen");
         $('#lblbalcony').text("Balcony");  
        $('#kitchen').hide();
         $('#washroom').hide();
         $('#balcony').hide();
         $('#floor').hide();
         $('#room').hide();
         $('#facility').hide();
         $('#facing').show();
         $('#ranna').val(0);
         $('#bath').val(0);
         $('#baranda').val(0);
         $('#floor').val(0);
         $('#bedroom').val(0);
      }else if(category == "Garage"){
        $('#lblkithchen').text("Kitchen");
         $('#lblbalcony').text("Balcony");
        $('#kitchen').hide();
         $('#washroom').hide();
         $('#balcony').hide();
         $('#floor').show();
         $('#room').show();
         $('#facility').show();
         $('#facing').show();
         $('#ranna').val(0);
         $('#bath').val(0);
         $('#baranda').val(0);
         $('#floor').val("");
         $('#bedroom').val("");
      }else if(category == "Rooms"){
        $('#lblkithchen').text("Kitchen");
         $('#lblbalcony').text("Balcony");
        $('#kitchen').show();
         $('#washroom').show();
         $('#balcony').show();
         $('#floor').show();
         $('#room').show();
         $('#facility').show();
         $('#facing').show();
         $('#ranna').val("");
         $('#bath').val("");
         $('#baranda').val("");
         $('#floor').val("");
         $('#bedroom').val("");
      }else if(category == "Luxury House"){
        $('#lblkithchen').text("Kitchen");
         $('#lblbalcony').text("Balcony");
        $('#kitchen').show();
         $('#washroom').show();
         $('#balcony').show();
         $('#floor').show();
         $('#room').show();
         $('#facility').show();
         $('#facing').show();
         $('#ranna').val("");
         $('#bath').val("");
         $('#baranda').val("");
         $('#floor').val("");
         $('#bedroom').val("");
      }
  }
  </script>
<!-- <script type="text/javascript">
  var c= $("#devision").val();
  //console.log(c);
  $.ajax({
      type: "GET",
      url: '{{ URL::to("/getcity") }}',
      data:{
            id:$("#devision").val(),
            _token:$("#token").val()
           },
      success: function(response){
          //console.log(response);
          $("#city").html(response);
     }
});
</script> -->

<script type="text/javascript">
function getCity(){
    $.ajax({
      type: "GET",
      url: '{{ URL::to("/getcity") }}',
      data:{
            id:$("#devision").val(),
            _token:$("#token").val()
           },
      success: function(response){
          console.log(response);
       $("#city").html(response);
     }
});
}
</script>
<script type="text/javascript">
function getArea(){
    $.ajax({
      type: "GET",
      url: '{{ URL::to("/getarea") }}',
      data:{
            id:$("#city").val(),
            _token:$("#token").val()
           },
      success: function(response){
      // console.log(response);
       $("#area").html(response);
     }
});
}
</script>
<script type="text/javascript">
function call(){
    var call=$("#rentoncall").val();
    var rent= $("#rent").val();
    if(call == 1){
      $("#rent").val(0);
      $("#rentoncall").val(0);
    }else{
      $("#rent").val("");
      $("#rentoncall").val(1);
    }
}
  </script>
</body>

</html>