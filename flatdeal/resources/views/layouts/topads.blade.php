<section class="featured section-padding" id="latest">
<div class="container" >
<h1 class="section-title">Latest Ads</h1>
<div class="row">
@foreach($latestads as $row)
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>
<div class="icon">
<i class="lni-heart"></i>
</div>
<a href="#"><img class="img-fluid" src="{{ URL::to('/') }}/postimages/{{ $row->image }}" alt=""></a>
</figure>
<div class="feature-content">
<div class="tg-product">
<a href="#">Category > {{ $row->category }}</a>
</div>
<h4><a href="ads-details.html">{{ $row->title }}</a></h4>
<span>Last Updated: 5 hours ago</span>
<ul class="address">
<li>
<a href="#"><i class="lni-map-marker"></i> {{ $row->area }}</a>
</li>
<li>
<a href="#"><i class="lni-alarm-clock"></i>Expire {{ $row->month }}</a>
</li>
<li>
<a href="#"><i class="lni-user"></i> {{ $row->name }}</a>
</li>
<li>
<a href="#"><i class="lni-mobile"></i> {{ $row->mobile }}</a>
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
</section>