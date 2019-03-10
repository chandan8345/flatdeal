<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
use Input;

class adsviewController extends Controller
{
    public function singleads(Request $req){
        $id=$req->input('id');
        $image=DB::table('postos')->where('post_id',$id)->get();
        $sql="select * from post,users where post.id=$id and users.id=post.user_id";
        //$sql="select post.title as title,post.postingdate as postingdate,post.rent as rent,post.size as size,areatype.name as areatype,toletfor.name as toletfor,condit.name as condit,facing.name as facing,post.floorno as floorno,post.month as handover,post.details as details,post.bedroom as room,post.washroom as washroom,post.kitchen as kitchen,post.balcony as balcony,post.sortaddress as sortaddress,post.maintanence as maintanence,
        //post.gas as gas,post.water as water,post.electricity as electricity,post.lift as lift,post.generator as generator,post.parking as parking,post.internet as internet,category.name as category,area.name as areaname,city.name as city,users.mobile as mobile from post,category,city,areatype,area,users,condit,facing,toletfor where post.id = $id and post.user_id = users.id and post.area=area.name and post.category =category.name and post.areatype = areatype.name and post.city=city.name and post.status = 1 and post.condit = condit.name and post.facing=facing.name and post.adsfor=toletfor.name";
        $post=DB::select($sql);
        return view('singleads')->with('post',$post)->with('image',$image);
    }
    public function index(){
        $devision=DB::table('devision')->get();
        $category=DB::table('category')->get();
        $city=DB::table('city')->get();
        $area=DB::table('area')->get();
        $areatype=DB::table('areatype')->get();
        $sql="select post.id,post.title,post.month,post.rent,category.name as category,postos.name as image,post.postingdate,users.name as username,users.mobile as usermobile,area.name as area from postos,post,users,area,category where post.id > 0 and post.id=postos.post_id and post.devision='Dhaka' and post.area=area.name and post.user_id=users.id and post.status=1 and post.category=category.name GROUP BY postos.post_id";
        $posts=DB::select($sql);
        return view('adsview')->with('posts',$posts)->with('devision',$devision)->with('category',$category)->with('city',$city)->with('area',$area)->with('areatype',$areatype);
    }
    public function getads(Request $req){
        $devision=$req->devision;
        $area=$req->area;
        $city=$req->city;
        $category=$req->category;
        $areatype=$req->areatype;
        $min=$req->min;
        $max=$req->max;
        $purpose=$req->purpose;
        $title=$req->title;
        // $devision=DB::table('devision')->get();
        // $category=DB::table('category')->get();
        // $city=DB::table('city')->get();
        // $area=DB::table('area')->get();
        // $areatype=DB::table('areatype')->get();
        $sql="select post.id,post.title,post.month,post.rent,post.category,postos.id as image,post.postingdate,users.name as username,users.mobile as usermobile,post.area from postos,post,users,category where post.id > 0 and post.id=postos.post_id and post.user_id=users.id and post.category=category.name and post.status=1";
        if(!empty($devision)){
            $sql =$sql." and post.devision='$devision'";
        }if(!empty($city)){
            $sql =$sql." and post.city='$city'";
        }if(!empty($category)){
            $sql =$sql." and post.category='$category'";
        }if(!empty($areatype)){
            $sql =$sql." and post.areatype='$areatype'";
        }if(!empty($area)){
            $sql =$sql." and post.area='$area'";
        }if(!empty($title) and $title != ""){
            $sql =$sql." and post.title like '%$title%'";
        }if(!empty($purpose)){
            $sql =$sql." and post.adstype='$purpose'";
        }if(!empty($min) && !empty($min)){
            $sql =$sql." and post.rent between $min and $max";
        }
        $sql=$sql." group by postos.post_id ORDER BY post.id DESC";
        $ads=DB::select($sql);
        sleep(2);
        if($ads){
            foreach($ads as $key => $row){
             echo '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 chandan">
<div class="featured-box">
<figure>
<a href=""><img class="img-fluid" src="/postimages/'.$row->image.'.jpg" alt=""></a>
 </figure>
<div class="feature-content">
<h4><a href="ads-details.html">'.$row->title.'</a></h4>
<div class="tg-product">
<a href="#">Category >'.$row->category.'</a>
</div>
<span>Last Updated: 4 hours ago</span>
<ul class="address">
<li>
<a href="#"><i class="lni-map-marker"></i>'.$row->area.'</a>
</li>
<li>
<a href="#"><i class="lni-alarm-clock"></i>'.$row->month.'</a>
</li>
<li>
<a href="#"><i class="lni-user"></i>'.$row->username.'</a>
</li>
<li>
<a href="#"><i class="lni-mobile"></i>'.$row->usermobile.'</a>
</li>
</ul>
<div class="btn-list">
<a class="btn-price" href="#">৳ '.$row->rent.'</a>
<a class="btn btn-common" href="/singleads?id='.$row->id.'">
<i class="lni-list"></i>
View Details
</a>
</div>
</div>
</div>
</div>';}
        }
  // return $sql;    
    }
    public function getad(Request $req){
        $devision=$req->devision;
        $area=$req->area;
        $city=$req->city;
        $category=$req->category;
        $areatype=$req->areatype;
        $min=$req->min;
        $max=$req->max;
        $purpose=$req->purpose;
        $title=$req->title;
        // $devision=DB::table('devision')->get();
        // $category=DB::table('category')->get();
        // $city=DB::table('city')->get();
        // $area=DB::table('area')->get();
        // $areatype=DB::table('areatype')->get();
        $sql="select post.id,post.title,post.month,post.rent,post.category,postos.id as image,post.postingdate,users.name as username,users.mobile as usermobile,post.area from postos,post,users,category where post.id > 0 and post.id=postos.post_id and post.user_id=users.id and post.category=category.name and post.status=1";
        if(!empty($devision)){
            $sql =$sql." and post.devision='$devision'";
        }if(!empty($city)){
            $sql =$sql." and post.city='$city'";
        }if(!empty($category)){
            $sql =$sql." and post.category='$category'";
        }if(!empty($areatype)){
            $sql =$sql." and post.areatype='$areatype'";
        }if(!empty($area)){
            $sql =$sql." and post.area='$area'";
        }if(!empty($title) and $title != ""){
            $sql =$sql." and post.title like '%$title%'";
        }if(!empty($purpose)){
            $sql =$sql." and post.adstype='$purpose'";
        }if(!empty($min) && !empty($min)){
            $sql =$sql." and post.rent between $min and $max";
        }
        $sql=$sql." group by postos.post_id ORDER BY post.id DESC";
        $ads=DB::select($sql);
        if($ads){
            foreach($ads as $key => $row){
             echo '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 chandan">
<div class="featured-box">
<figure>
<a href=""><img class="img-fluid" src="/postimages/'.$row->image.'.jpg" alt=""></a>
 </figure>
<div class="feature-content">
<h4><a href="ads-details.html">'.$row->title.'</a></h4>
<div class="tg-product">
<a href="#">Category >'.$row->category.'</a>
</div>
<span>Last Updated: 4 hours ago</span>
<ul class="address">
<li>
<a href="#"><i class="lni-map-marker"></i>'.$row->area.'</a>
</li>
<li>
<a href="#"><i class="lni-alarm-clock"></i>'.$row->month.'</a>
</li>
<li>
<a href="#"><i class="lni-user"></i>'.$row->username.'</a>
</li>
<li>
<a href="#"><i class="lni-mobile"></i>'.$row->usermobile.'</a>
</li>
</ul>
<div class="btn-list">
<a class="btn-price" href="#">৳ '.$row->rent.'</a>
<a class="btn btn-common" href="/singleads?id='.$row->id.'">
<i class="lni-list"></i>
View Details
</a>
</div>
</div>
</div>
</div>';}
        }
  // return $sql;    
    }
    public function category(Request $req){
        $id=$req->input('id');
        $devision=DB::table('devision')->get();
        $category=DB::table('category')->get();
        $city=DB::table('city')->get();
        $area=DB::table('area')->get();
        $areatype=DB::table('areatype')->get();
        $sql="select post.id,post.title,post.month,post.rent,category.name as category,postos.id as image,post.postingdate,users.name as username,users.mobile as usermobile,area.name as area from postos,post,users,area,category where post.id=postos.post_id and post.area=area.name and post.category=$id and post.user_id=users.id and post.status=1 and post.category=category.name";
        $sql=$sql." GROUP BY postos.post_id ORDER BY postos.id DESC";
        $posts=DB::select($sql);
        return view('adsview',['cat' => $id])->with('posts',$posts)->with('devision',$devision)->with('category',$category)->with('city',$city)->with('area',$area)->with('areatype',$areatype);
    }
}
