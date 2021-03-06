<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
use Input;

class apiController extends Controller
{
    public function updateProfile(Request $req){
        $id=$req->input('id');
        $name=$req->input('name');
        $phone=$req->input('phone');
        $address=$req->input('address');
        $email=$req->input('email');
        $oldpass=$req->input('oldpass');
        $pass=$req->input('pass');
        $image=$req->input('image');
        if($pass){
        $data=array('name'=>$name,'mobile'=>$phone,'address'=>$address,'email'=>$email,'pass'=>$pass);
        }else{
            $data=array('name'=>$name,'mobile'=>$phone,'address'=>$address,'email'=>$email);    
        }
        $result=DB::table('users')->where('id',$id)->where('pass',$oldpass)->update($data);
        $dp='image/'.$id.".jpg";
        file_put_contents($dp,base64_decode($image));
        echo json_encode("ok");
    }
    public function getProfile(Request $req){
        $id=$req->input('id');
        $profile=DB::table('users')->where('id',$id)->get();
        echo json_encode($profile);
    }
    public function filterAds(Request $req){
        $division=$req->input('division');
        $city=$req->input('city');
        $area=$req->input('area');
        $areatype=$req->input('areatype');
        $purpose=$req->input('purpose');
        $adsfor=$req->input('adsfor');
        $min=$req->input('min');
        $max=$req->input('max');
        $category=$req->input('category');
        $sql="select post.id,post.title,post.month,post.rent,post.category as category,postos.id as image,post.postingdate,post.area as area,post.adsfor as toletfor from postos,post,users where post.id=postos.post_id and post.category='$category' and post.user_id=users.id and post.status=1";
        if(!empty($division)){
            $sql =$sql." and post.devision='$division'";
        }if(!empty($city)){
            $sql =$sql." and post.city='$city'";
        }if(!empty($area)){
            $sql =$sql." and post.area='$area'";
        }if(!empty($areatype)){
            $sql =$sql." and post.areatype='$areatype'";
        }if(!empty($purpose)){
            $sql =$sql." and post.adstype='$purpose'";
        }if(!empty($min) && !empty($max)){
            $sql =$sql." and post.rent between '$min' and '$max'";
        }
        $sql=$sql." group by postos.post_id ORDER BY post.id DESC";
        $ads=DB::select($sql);
        echo json_encode($ads);
    }
    public function postAd(Request $req){
        $data=array('title'=>$req->input('title'),'category'=>$req->input('category'),'rent'=>$req->input('rent'),'size'=>$req->input('size'),'areatype'=>$req->input('areatype'),'floorno'=>$req->input('floor'),'postingdate'=>date('d-m-Y'),'adsfor'=>$req->input('adsfor'),'condit'=>$req->input('condition'),'facing'=>$req->input('facing'),'month'=>$req->input('handover'),'details'=>$req->input('details'),'maintanence'=>$req->input('maintain'),'electricity'=>$req->input('electricity'),'bedroom'=>$req->input('room'),'water'=>$req->input('water'),'washroom'=>$req->input('washroom'),'balcony'=>$req->input('balcony'),'generator'=>$req->input('generator'),'lift'=>$req->input('lift'),'internet'=>$req->input('internet'),'gas'=>$req->input('gas'),'parking'=>$req->input('parking'),'security'=>$req->input('security'),'kitchen'=>$req->input('kitchen'),'devision'=>$req->input('devision'),'city'=>$req->input('city'),'area'=>$req->input('area'),'sortaddress'=>$req->input('address'),'user_id'=>$req->input('userid'),'adstype'=>$req->input('adstype'),'status'=>0);
        $id = DB::table('post')->insertGetId($data);
        echo json_encode($id);
    }
    public function postAdImages(Request $req){
        $image=$req->input('image');
        $data=array('post_id'=>$req->input('postid'));
        $id = DB::table('postos')->insertGetId($data);
        $dp='postimages/'.$id.".jpg";
        file_put_contents($dp,base64_decode($image));
    }
    public function category(){
        $category=DB::table('category')->where('status',1)->get();
        echo json_encode($category);
    }
    public function areatype(){
        $areatype=DB::table('areatype')->where('status',1)->get();
        echo json_encode($areatype);
    }
    public function area(Request $req){
        $city=$req->input('city');
        if($city != "Select City"){
            $query="SELECT DISTINCT area.name as name FROM city,area WHERE area.city='$city'";
            $area=DB::select($query);
            echo json_encode($area);
        }else{
            $area=DB::table('area')->where('status',1)->get();
            echo json_encode($area);
        }
    }
    public function city(Request $req){
        $devision=$req->input('devision');
        if($devision != "Select Devision"){
            $query="SELECT DISTINCT city.name as name FROM city,devision WHERE city.devision='$devision'";
            $city=DB::select($query);
            echo json_encode($city);
        }else{
            $city=DB::table('city')->where('status',1)->get();
            echo json_encode($city);
        }
    }
    public function condition(){
        $condition=DB::table('condit')->where('status',1)->get();
        echo json_encode($condition);
    }
    public function devision(){
        $devision=DB::table('devision')->where('status',1)->get();
        echo json_encode($devision);
    }
    public function facing(){
        $facing=DB::table('facing')->where('status',1)->get();
        echo json_encode($facing);
    }
    public function toletfor(){
        $toletfor=DB::table('toletfor')->where('status',1)->get();
        echo json_encode($toletfor);
    }
    public function register(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $address=$req->input('address');
        $pass=$req->input('password');
        $mobile=$req->input('phone');
        $image=$req->input('image');
        if($image){
            //$image = $req->file('image')->getClientOriginalName();
            //$extention = $req->file('image')->getClientOriginalExtension();
            $data=array('name'=>$name,'pass'=>$pass,'address'=>$address,'mobile'=>$mobile,'email'=>$email,'dateofjoin'=>date('d-m-Y'),'role'=>0,'status'=>0);
            $id=DB::table('users')->insertGetid($data);
            $dp='image/'.$id.'.jpg';
            //$sp=$req->file('image')->getPathName();
            file_put_contents($dp,base64_decode($image));
        }else{
            $data=array('name'=>$name,'pass'=>$pass,'address'=>$address,'mobile'=>$mobile,'email'=>$email,'dateofjoin'=>date('d-m-Y'),'role'=>0,'status'=>0);
            DB::table('users')->insert($data);
            echo json_encode("ok");
        }
    }

    public function logincheck(Request $req){
        $mobile=$req->input('mobile');
        $password=$req->input('password');
        $sql="select * from users where mobile='$mobile' and pass='$password'";
        $exe=DB::select($sql);
        echo json_encode($exe);
    }
    public function getpost(Request $req){
        $id=$req->input('id');
        //$sql="select post.id,post.title,post.month,post.rent,category.name as category,postos.id as image,post.postingdate,area.name as area,toletfor.name as adsfor from postos,post,users,area,category,toletfor where post.id=postos.post_id and post.area=area.name and post.category='$id' and post.user_id=users.id and post.adsfor=toletfor.name and post.status=1 and post.category=category.name";
        //$sql=$sql." GROUP BY postos.post_id ORDER BY postos.id DESC";
        //uporer code bad.
       $sql="select post.id,post.title,post.month,post.rent,post.category as category,postos.id as image,post.postingdate,post.area as area,post.adsfor as toletfor from postos,post,users where post.id=postos.post_id and post.category='$id' and post.user_id=users.id and post.status=1";
       $sql=$sql." GROUP BY postos.post_id ORDER BY postos.id DESC";
       $tolet=DB::select($sql);
       echo json_encode($tolet);
    }
    public function getuserpost(Request $req){
        $id=$req->input('id');
        //$sql="select post.id,post.title,post.month,post.rent,category.name as category,postos.id as image,post.postingdate,area.name as area,toletfor.name as adsfor from postos,post,users,area,category,toletfor where post.id=postos.post_id and post.area=area.name and post.category='$id' and post.user_id=users.id and post.adsfor=toletfor.name and post.status=1 and post.category=category.name";
        //$sql=$sql." GROUP BY postos.post_id ORDER BY postos.id DESC";
        //uporer code bad.
       $sql="select post.id,post.title,post.month,post.rent,category.name as category,postos.id as image,post.postingdate,area.name as area,toletfor.name as toletfor,post.status from postos,post,users,area,category,toletfor where post.id=postos.post_id and post.area=area.name and post.user_id=$id and post.adsfor=toletfor.name and post.category=category.name";
       $sql=$sql." GROUP BY postos.post_id ORDER BY postos.id DESC";
       $tolet=DB::select($sql);
       echo json_encode($tolet);
    }
    public function singleadsdata(Request $req){
        $id=$req->input('id');
        //$sql="select post.title as title,post.postingdate as postingdate,post.rent as rent,post.size as size,areatype.name as areatype,toletfor.name as toletfor,condit.name as condit,facing.name as facing,post.floorno as floorno,post.month as handover,post.details as details,post.bedroom as room,post.washroom as washroom,post.kitchen as kitchen,post.balcony as balcony,post.sortaddress as sortaddress,post.maintanence as maintanence,
        //post.gas as gas,post.water as water,post.electricity as electricity,post.lift as lift,post.generator as generator,post.parking as parking,post.internet as internet,category.name as category,area.name as areaname,city.name as city,users.mobile as mobile from post,category,city,areatype,area,users,condit,facing,toletfor where post.id = $id and post.user_id = users.id and post.area=area.name and post.category =category.name and post.areatype = areatype.name and post.city=city.name and post.status = 1 and post.condit = condit.name and post.facing=facing.id and post.adsfor=toletfor.name";
        //$post=DB::select($sql);
        $query="select * from post,users WHERE users.id=post.user_id and post.id='$id'";
        $post=DB::select($query);
        echo json_encode($post);
    }
    public function singleadsphotos(Request $req){
        $id=$req->input('id');
        $image=DB::table('postos')->where('post_id',$id)->get();
        echo json_encode($image);
    }
    public function getuser(Request $req){
        $id=$req->input('id');
        $image=DB::table('users')->where('id',$id)->get();
        echo json_encode($image);
    }
}