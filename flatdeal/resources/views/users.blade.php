@include('layouts.session')
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>FlatBasha | Manage Users</title>
<link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">


<link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<style>
.img {
    vertical-align: middle;
    border-style: none;
    margin-top: 10px;
}
</style>
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
<li><a href="/">Home /</a></li>
<li class="current">Manage Users</li>
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
<a href="/dashbord">
<i class="lni-dashboard"></i>
<span>Dashboard</span>
</a>
</li>
<li>
<a class="active" href="/users">
<i class="lni-cog"></i>
<span>Manage Users</span>
</a>
</li>
<li>
<a href="/profile">
<i class="lni-star"></i>
<span>Profile</span>
</a>
</li>
<li>
<a href="offermessages.html">
<i class="lni-wallet"></i>
<span>Payments</span>
</a>
</li>
<li>
<a href="payments.html">
<i class="lni-envelope"></i>
<span>Messages</span>
</a>
</li>
<li>
<a href="/logout">
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
<h2 class="dashbord-title">Manage Users</h2>
</div>
<div class="dashboard-wrapper">
<div class="dashboard-sections">
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 activeusers">
<div class="dashboardbox act">
<div class="icon"><i class="lni-add-files"></i></div>
<div class="contentbox">
<h2><a>Active Users</a></h2>
<h3 id="ta"></h3>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 inactiveusers">
<div class="dashboardbox inact">
<div class="icon"><i class="lni-support"></i></div>
<div class="contentbox">
<h2><a>Inactive Users</a></h2>
<h3 id="ti"></h3>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 expiredusers">
<div class="dashboardbox sell">
<div class="icon"><i class="lni-support"></i></div>
<div class="contentbox">
<h2><a>Expired Users</a></h2>
<h3 id="ts"></h3>
</div>
</div>
</div>
</div>
</div>
<table class="table dashboardtable tablemyads tableactiveusers">
<thead id="a">
<tr>
<th>Photo</th>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Address</th>
<th>Action</th>
</tr>
</thead>
<tbody class="activerow">

</tbody>
</table>
<table class="table dashboardtable tablemyads tableinactiveusers">
<thead id="h">
<tr>
<th>Photo</th>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Address</th>
<th>Action</th>
</tr>
</thead>
<tbody class="inactiverow">

</tbody>
</table>
<table class="table dashboardtable tablemyads tableexpiredusers">
        <thead id="s">
        <tr>
        <th>Photo</th>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
<th>Address</th>
<th>Action</th>
        </tr>
        </thead>
        <tbody class="expiredrow">
        
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
<p>All copyrights reserved &copy; 2018 - Designed by <a href="" rel="nofollow">UIdeck</a></p>
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
<script src="assets/js/userstable.js"></script>
<script type="text/javascript">
  $.ajax({
        type: "get",
        url: '/usersstatistics',
        success:function($result){
            var result=$result;
            var obj = JSON.parse(result);
            $("#ta").html(obj.totalactive + " Active Users");
            $("#ti").html(obj.totalinactive + " Users Unapproved");
            $("#ts").html(obj.totalsold + " Users Expired");
        }
});
function statistics(){
    $.ajax({
        type: "get",
        url: '/usersstatistics',
        success:function($result){
            var result=$result;
            var obj = JSON.parse(result);
            $("#ta").html(obj.totalactive + " Active Users");
            $("#ti").html(obj.totalinactive + " Users Unapproved");
            $("#ts").html(obj.totalsold + " Users Expired");
        }
});    
}
    function expired(key){
        $.ajax({
        type: "get",
        url: '/expired',
        data:{
            id:key
           },
        success:function(res){
            $.ajax({
        type: "get",
        url: '/activeusers',
        success:function(response){
        if(response != ""){
        $(".tableactiveusers thead tr").show();
        statistics();
        $(".activerow").html(response);
        }else{
            statistics();
            $(".tableactiveusers thead tr").hide();
            $(".tableactiveusers tbody tr").remove();
        }
    }
    });
        }
    });
    }
    function activeuser(key){
        $.ajax({
        type: "get",
        url: '/activeuser',
        data:{
            id:key
           },
        success:function(res){
            $.ajax({
        type: "get",
        url: '/waitingusers',
        success:function(response){
        if(response != ""){
        $(".tableinactiveusers thead tr").show();
        statistics();
        $(".inactiverow").html(response);
        }else{
            statistics();
        $(".tableinactiveusers thead tr").hide();
        $(".tableinactiveusers tbody tr").remove();
        }
    }
    });
        }
    });
    }
    function expiredactive(key){
        $.ajax({
        type: "get",
        url: '/expireduser',
        data:{
            id:key
           },
        success:function(res){
        $.ajax({
        type: "get",
        url: '/expiredusers',
        success:function(response){
        if(response != ""){
            $(".tableexpiredusers thead tr").show();
        statistics();
        $(".expiredrow").html(response);
        }else{
            statistics();
            $(".tableexpiredusers thead tr").hide();
            $(".tableexpiredusers tbody  tr").remove();
            }
    }
    });
        }
    });
    }
</script>
</body>

<!-- Mirrored from preview.uideck.com/items/classially/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Nov 2018 14:23:21 GMT -->
</html>