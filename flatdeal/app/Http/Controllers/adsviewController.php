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
        $sql="select post.title as title,post.postingdate as postingdate,post.rent as rent,post.size as size,areatype.name as areatype,toletfor.name as toletfor,condit.name as condit,facing.name as facing,post.floorno as floorno,post.month as handover,post.details as details,post.bedroom as room,post.washroom as washroom,post.kitchen as kitchen,post.balcony as balcony,post.sortaddress as sortaddress,post.maintanence as maintanence,
        post.gas as gas,post.water as water,post.electricity as electricity,post.lift as lift,post.generator as generator,post.parking as parking,post.internet as internet,category.name as category,area.name as areaname,city.name as city,users.mobile as mobile from post,category,city,areatype,area,users,condit,facing,toletfor where post.id = $id and post.user_id = users.id and post.area_id=area.id and post.category_id =category.id and post.area = areatype.id and post.city_id=city.id and post.status = 1 and post.condit = condit.id and post.facing=facing.id and post.toletfor=toletfor.id";
        $post=DB::select($sql);
        return view('singleads')->with('post',$post)->with('image',$image);
    }
    public function index(){
        $devision=DB::table('devision')->get();
        $category=DB::table('category')->get();
        $city=DB::table('city')->get();
        $area=DB::table('area')->get();
        $areatype=DB::table('areatype')->get();
        $sql="select post.id,post.title,post.month,post.rent,category.name as category,postos.name as image,post.postingdate,users.name as username,users.mobile as usermobile,area.name as area from postos,post,users,area,category where post.id > 0 and post.id=postos.post_id and post.devision_id=1 and post.area_id=area.id and post.user_id=users.id and post.status=1 and post.category_id=category.id GROUP BY postos.post_id";
        $posts=DB::select($sql);
        return view('adsview')->with('posts',$posts)->with('devision',$devision)->with('category',$category)->with('city',$city)->with('area',$area)->with('areatype',$areatype);
    }
    public function getads(Request $req){
        $d=$req->input('devision');
        $s=$req->input('subarea');
        $a=$req->input('area');
        $c=$req->input('city');
        $cat=$req->input('category');
        $type=$req->input('areatype');
        $devision=DB::table('devision')->get();
        $category=DB::table('category')->get();
        $city=DB::table('city')->get();
        $area=DB::table('area')->get();
        $areatype=DB::table('areatype')->get();
        $sql="select post.id,post.title,post.month,post.rent,category.name as category,postos.name as image,post.postingdate,users.name as username,users.mobile as usermobile,area.name as area from postos,post,users,area,category where post.id > 0 and post.id=postos.post_id and post.area_id=area.id and post.user_id=users.id and post.status=1 and post.category_id=category.id";
        if(!empty($d)){
            $sql =$sql." and post.devision_id='$d'";
        }if(!empty($c)){
            $sql =$sql." and post.city_id='$c'";
        }if(!empty($cat)){
            $sql =$sql." and post.category_id='$cat'";
        }if(!empty($a)){
            $sql =$sql." and post.area_id='$a'";
        }if(!empty($type)){
            $sql =$sql." and post.area='$type'";
        }if(!empty($s)){
            $sql =$sql." and post.subarea_id='$s'";
        }
        $sql=$sql." group by postos.post_id ORDER BY post.id DESC";
        $posts=DB::select($sql);
        return view('adsview',['d' => $d,'c' => $c,'cat' => $cat,'a' => $a,'s' => $s,'t' => $type])->with('posts',$posts)->with('devision',$devision)->with('category',$category)->with('city',$city)->with('area',$area)->with('areatype',$areatype);
    }
    public function category(Request $req){
        $id=$req->input('id');
        $devision=DB::table('devision')->get();
        $category=DB::table('category')->get();
        $city=DB::table('city')->get();
        $area=DB::table('area')->get();
        $areatype=DB::table('areatype')->get();
        $sql="select post.id,post.title,post.month,post.rent,category.name as category,postos.name as image,post.postingdate,users.name as username,users.mobile as usermobile,area.name as area from postos,post,users,area,category where post.id=postos.post_id and post.area_id=area.id and post.category_id=$id and post.user_id=users.id and post.status=1 and post.category_id=category.id";
        $sql=$sql." GROUP BY postos.post_id ORDER BY postos.id DESC";
        $posts=DB::select($sql);
        return view('adsview',['cat' => $id])->with('posts',$posts)->with('devision',$devision)->with('category',$category)->with('city',$city)->with('area',$area)->with('areatype',$areatype);
    }
}
