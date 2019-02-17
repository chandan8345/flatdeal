<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Smart Tolet | AdsView</title>
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
.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #00cc67;
    border-color: #00cc67;
}
</style>
</head>
<body>

<header id="header-wrap">

<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar" >
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
</ul>
</ul>

</nav>

<div id="hero-area" style="background: url(assets/img/ii.jpg);">
<div class="overlay"></div>
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 text-center">
<div class="contents-ctg">
<div class="search-bar">
<fieldset>
<form method="post" action="/getads" id="form">
<input type ="hidden" id="token" name="_token" value ="<?php echo csrf_token(); ?>">
<input type ="hidden" id="citydata" name="" value ="<?php if(isset($c)){echo $c;} ?>">
<input type ="hidden" id="areadata" name="" value ="<?php if(isset($a)){echo $a;} ?>">
<input type ="hidden" id="subareadata" name="" value ="<?php if(isset($s)){echo $s;} ?>">
<input type ="hidden" id="typedata" name="" value ="<?php if(isset($t)){echo $t;} ?>">
<div class="form-group tg-inputwithicon">
<i class="lni-map-marker"></i>
<div class="tg-select">
<select id="devision" onchange="getCity()" name="devision">
<option value="0">Select Divisions</option>
@foreach($devision as $row)
<option value="{{ $row->name }}"  <?php if(isset($d)){if($row->name == $d){ echo "selected";}} ?>>{{ $row->name }}</option>
@endforeach
</select>
</div>
</div>
<div class="form-group tg-inputwithicon">
<i class="lni-layers"></i>
<div class="tg-select">
<select id="city" name="city" onchange="getArea()">
<option value="0">Select City</option>
@foreach($city as $row)
 <option value="{{ $row->name }}" <?php if(isset($c)){if($row->name == $c){echo "selected";} }else if($row->name == "Dhaka"){ echo "selected";
 } ?> >{{ $row->name }}</option>
@endforeach
</select>
</div>
</div>

<div class="form-group tg-inputwithicon">
    <i class="lni-layers"></i>
    <div class="tg-select">
    <select name="category"> 
    <option value="0">Select Categories</option>
    @foreach($category as $row)
    <option value="{{ $row->name }}"  <?php if(isset($cat)){if($row->name== $cat){ echo "selected";}} ?>>{{ $row->name }}</option>
    @endforeach
    </select>
    </div>
    </div>

<button class="btn btn-common" onclick="load()" type="submit"><i class="lni-search"></i></button>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>

</header>

<div class="main-container section-padding" id="ads">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
<aside>
<!--
<div class="widget widget_search">
<input type="search" class="form-control" autocomplete="off" name="s" placeholder="Search..." id="search-input" value="">
<button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
</div>
-->
<div class="widget categories">
<h4 class="widget-title" style="font-size:16px;border-bottom: 0px solid #f1f1f1;">Dist Area</h4>
<div class="form-group mb-3 tg-inputwithicon" style="margin-left:24px;margin-right: 5px;">
<div class="tg-select form-control">
<select id="area" name="area">
<option value="0">Select Area</option>
@foreach($area as $row)
<option value="{{ $row->name }}" <?php if(isset($a)){if($row->name == $a){ echo "selected";}} ?>>{{ $row->name }}</option>
@endforeach
</select>
</div>
</div>
</div>
<div class="widget categories">
<h4 class="widget-title" style="font-size:16px;border-bottom: 0px solid #f1f1f1;">Area Type</h4>
<div class="form-group mb-3 tg-inputwithicon" style="margin-left:24px;margin-right: 5px;">
<div class="tg-select form-control">
<select name="areatype">
<option value="0">Select One</option>
@foreach($areatype as $row)
<option value="{{ $row->name }}" <?php if(isset($t)){if($row->name == $t){ echo "selected";}} ?>>{{ $row->name }}</option>
@endforeach
</select>
</div>
</div>
</div>
</form>
<!--
<div class="widget">
<h4 class="widget-title">Advertisement</h4>
<div class="add-box">
<img class="img-fluid" src="assets/img/img1.jpg" alt="">
</div>
</div>-->
</aside>
</div>
<div class="col-lg-9 col-md-12 col-xs-12 page-content">

<div class="product-filter">
<!--
<div class="short-name">
<span>Showing (1 - 12 products of 7371 products)</span>
</div>-->
<!--<div class="Show-item">
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
</div>-->
<div class="Show-item">
<div class="widget widget_search">
<input type="search" class="form-control" autocomplete="off" name="s" placeholder="Search..." id="search-input" value="">
</div>
</div>
<!--
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#grid-view"><i class="lni-grid"></i></a>
</li>
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#list-view"><i class="lni-list"></i></a>
</li>
</ul>-->
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
<div class="row" id="datalist">
@foreach($posts as $row)
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 chandan">
<div class="featured-box">
<figure>
<div class="icon">
<i class="lni-heart"></i>
</div>
<a href=""><img class="img-fluid" src="{{ URL::to('/') }}/postimages/{{ $row->image }}" alt=""></a>
 </figure>
<div class="feature-content">
<h4><a href="ads-details.html">{{ $row->title }}</a></h4>
<div class="tg-product">
<a href="#">Category >  {{ $row->category }}</a>
</div>
<span>Last Updated: 4 hours ago</span>
<ul class="address">
<li>
<a href="#"><i class="lni-map-marker"></i>{{ $row->area }}</a>
</li>
<li>
<a href="#"><i class="lni-alarm-clock"></i>{{ $row->month }}</a>
</li>
<li>
<a href="#"><i class="lni-user"></i> {{ $row->username }}</a>
</li>
<li>
<a href="#"><i class="lni-mobile"></i> {{ $row->usermobile }}</a>
</li>
</ul>
<div class="btn-list">
<a class="btn-price" href="#">৳ {{ $row->rent}}</a>
<a class="btn btn-common" href="/singleads?id={{ $row->id }}">
<i class="lni-list"></i>
View Details
</a>
</div>
</div>
</div>
</div>
@endforeach
</div>
</div>
</div>
</div>

<div class="pagination-bar">
<nav>
<ul class="pagination">

<li class="page-item back-page"><a class="page-link" href="javascript:void(0)">Back</a></li>
 <!-- 
<li class="page-item"><a class="page-link active" href="javascript:void(0)">1</a></li>
<li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
-->
</ul>
</nav>
</div>

</div>
</div>
 </div>
</div>


<footer id="contact">

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

<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/nivo-lightbox.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/paginate.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<script src="assets/js/summernote.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  
  var scrollLink = $('.scroll');
  
  // Smooth scrolling
  scrollLink.click(function(e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000 );
  });
  
  // Active link switching
  $(window).scroll(function() {
    var scrollbarLocation = $(this).scrollTop();
    
    scrollLink.each(function() {
      
      var sectionOffset = $(this.hash).offset().top - 20;
      
      if ( sectionOffset <= scrollbarLocation ) {
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
      }
    })
    
  })
  
})
});
</script>
<script type="text/javascript">
  var citydata=$("#citydata").val();
  //console.log(citydata);
  if(citydata == 0){
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
}else if(citydata > 0){
     $.ajax({
      type: "GET",
      url: '{{ URL::to("/getcity") }}',
      data:{
            id:$("#devision").val(),
            _token:$("#token").val()
           },
      success: function(response){
          $("#city").html(response);
          $("#city").val(citydata).change();
      }
});     
}
</script>
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
          //console.log(response);
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
       console.log(response);
       $("#area").html(response);
     }
});
}
</script>
<script type="text/javascript">
var area=$("#areadata").val();
  if(area == 0){
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
         // $("#area option[value=area]").attr('selected', 'selected');
     }
});
}else if(area > 0){
     $.ajax({
      type: "GET",
      url: '{{ URL::to("/getarea") }}',
      data:{
            id:$("#city").val(),
            _token:$("#token").val()
           },
      success: function($response){
          $("#area").html(response);
    }
    
});
}
</script>
</body>

<!-- Mirrored from preview.uideck.com/items/classially/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Nov 2018 14:22:34 GMT -->
</html>