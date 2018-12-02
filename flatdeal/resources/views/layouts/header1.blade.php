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
<a href="index-2.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
-->
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link scroll" href="#home">
Home
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/adsview">
all ads
</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link" href="#category">
Categories
</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link" href="#latest">
latest Ads
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#feature">
Feature
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#contact">
Contact us
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
<a class="dropdown-item" href="/signup"><i class="lni-user"></i> Registration</a>
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
<a class="active" href="index-2.html">Home</a>
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
<div class="container" id="home">
<div class="row">
<div class="col-md-12 col-lg-12 col-xs-12 text-center">
<div class="contents">
<h1 class="head-title">Welcome to <span class="year">Easy To-Let</span></h1>
<p>Bangladesh No.1 Best TO-LET Dealing Website, <br> Create Account & Enjoy the Best Selling Experience with us.</p>

<div class="search-bar">
<fieldset>
<form method="get" action="/searchads" class="search-form">
<!--
<div class="form-group tg-inputwithicon">
<i class="lni-tag"></i>
<input type="text" name="customword" class="form-control" placeholder="What are you looking for">
</div> -->
<div class="form-group tg-inputwithicon">
<i class="lni-map-marker"></i>
<div class="tg-select">
<select id="devision" onchange="getCity()" name="devision">
<option value="0">Select Divisions</option>
@foreach($devision as $row)
    <option value="{{ $row->id }}" <?php if($row->name == "Dhaka"){ echo "selected";}  ?> >{{ $row->name }}</option>
@endforeach
</select>
</div>
</div>
<div class="form-group tg-inputwithicon">
<i class="lni-layers"></i>
<div class="tg-select">
<select id="city" name="city">
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
    <select id="category" name="category">
    <option value="0">Select Categories</option>
    @foreach($category as $row)
    <option value="{{ $row->id }}">{{ $row->name }}</option>
    @endforeach
    </select>
    </div>
    </div>

<button type="submit" class="btn btn-common" type="button"><i class="lni-search"></i></button>
</form>
</fieldset>
</div>
</div>
</div>
</div>
</div>
</div>

</header>