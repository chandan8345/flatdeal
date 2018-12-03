<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Easy Tolet</title>

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

@include('layouts.header1')

@include('layouts.menu')

@include('layouts.topads')

@include('layouts.feature')

@include('layouts.info')

@include('layouts.counter');


<section class="testimonial section-padding">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div id="testimonials" class="owl-carousel">
<div class="item">
<div class="testimonial-item">
<div class="img-thumb">
<img src="assets/img/testimonial/img1.png" alt="">
</div>
<div class="content">
<h2><a href="#">John Doe</a></h2>
<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
<h3>Developer at of <a href="#">xyz company</a></h3>
</div>
</div>
</div>
<div class="item">
<div class="testimonial-item">
<div class="img-thumb">
<img src="assets/img/testimonial/img2.png" alt="">
</div>
<div class="content">
<h2><a href="#">Jessica</a></h2>
<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
<h3>Developer at of <a href="#">xyz company</a></h3>
</div>
</div>
</div>
<div class="item">
<div class="testimonial-item">
<div class="img-thumb">
<img src="assets/img/testimonial/img3.png" alt="">
</div>
<div class="content">
<h2><a href="#">Johnny Zeigler</a></h2>
<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
<h3>Developer at of <a href="#">xyz company</a></h3>
</div>
</div>
</div>
<div class="item">
<div class="testimonial-item">
<div class="img-thumb">
<img src="assets/img/testimonial/img1.png" alt="">
</div>
<div class="content">
<h2><a href="#">John Doe</a></h2>
<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
<h3>Developer at of <a href="#">xyz company</a></h3>
</div>
</div>
</div>
<div class="item">
<div class="testimonial-item">
<div class="img-thumb">
<img src="assets/img/testimonial/img2.png" alt="">
</div>
<div class="content">
<h2><a href="#">Jessica</a></h2>
<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem, excepturi facere magnam illum, at accusantium doloremque odio.</p>
<h3>Developer at of <a href="#">xyz company</a></h3>
</div>
</div>
</div>
</div>
</div>
</div>
 </div>
</section>


<section class="subscribes section-padding">
<div class="container">
<div class="row wrapper-sub">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<p>Join our 10,000+ subscribers and get access to the latest templates, freebies, announcements and resources!</p>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<form>
<div class="subscribe">
<input class="form-control" name="email" placeholder="Your email here" required="" type="email">
<button class="btn btn-common" type="submit">Subscribe</button>
</div>
</form>
</div>
</div>
</div>
</section>

@include('layouts.fotter')

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
<script type="text/javascript">
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
         // console.log(response);
          $("#city").html(response);
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
</body>
</html>
