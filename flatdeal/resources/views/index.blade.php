<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="description" content="Bangladesh No.1 Best Property Dealing Marketplace, Sell | Rent | TO-LET your property very Smartly.">
<meta name="keywords" content="Flatbasha">
<meta name="author" content="Chandan Biswas">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>FlatBasha</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/fb.jpg" />

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">


<link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<style>
img {
    vertical-align: middle;
    border-style: none;
    margin-top: 10px;
}
</style>
</head>
<body>

@include('layouts.header1')

@include('layouts.menu')

@include('layouts.topads')
<!--
@include('layouts.feature')
-->

@include('layouts.info')

@include('layouts.counter')


<section class="testimonial section-padding">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div id="testimonials" class="owl-carousel">
<div class="item">
<div class="testimonial-item">
<div class="img-thumb">
<img src="assets/img/ak.png" style="width:80px;height:80px;" alt="Sak Azad">
</div>
<div class="content">
<h2><a href="#">Engr Abul Kalam Azad</a></h2>
<h3>CEO of <a href="www.touchandsolve.com">Touch & Solve IT</a></h3>
<p class="description">Adviser of Flatbasha</p>
<h3>Owner at of <a href="#">FlatBasha</a></h3>
</div>
</div>
</div>
<div class="item">
<div class="testimonial-item">
<div class="img-thumb">
<img src="assets/img/ck.png" style="width:80px;height:80px;" alt="chandan">
</div>
<div class="content">
<h2><a href="#">Chandan Kuamr Biswas</a></h2>
<h3>Founder of <a href="www.flatbasha.com">Flatbasha</a></h3>
<p class="description">Android & Web Developer</p>
<h3>Owner at of <a href="#">FlatBasha</a></h3>
</div>
</div>
</div>
<!--
<div class="item">
<div class="testimonial-item">
<div class="img-thumb">
<img src="assets/img/ck.png"  style="width:80px;height:80px;" alt="">
</div>
<div class="content">
<h2><a href="#">CK Biswas</a></h2>
<p class="description">Apps Developer & Web Developer</p>
<p class="description">Founder of Smart To-Let</p>
<h3>Developer at of <a href="">Smart To-Let</a></h3>
</div>
</div>
</div>-->
</div>
</div>
</div>
 </div>
</section>

<!--
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
-->
@include('layouts.fotter')

<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>

<div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;"><img src='demo_wait.gif' width="64" height="64" />


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/nivo-lightbox.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/click-scroll.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<script src="assets/js/summernote.js"></script>
<script>
$(document).ready(function(){
  $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
  });
  $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
  });
  $("button").click(function(){
    $("#txt").load("demo_ajax_load.asp");
  });
});
</script>
<script type="text/javascript">
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
<script type="text/javascript" src="assets/js/typewriting.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.novacancy.min.js"></script>
 <script>
$(document).ready( function(){
	setTimeout( function(){
		$('#terminal').typewriting( "Bangladesh No.1 Best Property Dealing Marketplace, Sell | Rent Your Property very Smartly.", {
			"typing_interval": 100,
			"blink_interval": "1s",
			"cursor_color": ""
		}, function() {
			//console.log( "END" );
		});
	
	}, 1000);
});

</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#1').novacancy({
				'reblinkProbability': 0.1,
				'blinkMin': 0.2,
				'blinkMax': 0.6,
				'loopMin': 8,
				'loopMax': 10,
				'color': '#ffffff',
				'glow': ['0 0 80px #ffffff', '0 0 30px #008000', '0 0 6px #0000ff']
			}); 

			$('#2').novacancy({
				'blink': 1,
				'off': 1,
				'color': '#00cc67',
				'glow': ['0 0 80px 00cc67', '0 0 30px 00cc67', '0 0 6px 00cc67']
			});
		});
	</script>
    
</body>
</html>
