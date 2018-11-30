<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
use Input;

class adsviewController extends Controller
{
    public function index(){
        $devision=DB::table('devision')->get();
        $category=DB::table('category')->get();
        $city=DB::table('city')->get();
        $area=DB::table('area')->get();
        $areatype=DB::table('areatype')->get();
        $sql="select post.id,post.title,post.month,post.rent,postos.name as image,post.postingdate,users.name as username,users.mobile as usermobile,area.name as area from postos,post,users,area where post.id > 0 and post.id=postos.post_id and post.devision_id=1 and post.area_id=area.id and post.user_id=users.id and post.status=1";
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
        $sql="select post.id,post.title,post.month,post.rent,postos.name as image,post.postingdate,users.name as username,users.mobile as usermobile,area.name as area from postos,post,users,area where post.id > 0 and post.id=postos.post_id and post.area_id=area.id and post.user_id=users.id and post.status=1";
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
        $posts=DB::select($sql);
        return view('adsview',['d' => $d,'c' => $c,'cat' => $cat,'a' => $a,'s' => $s,'t' => $type])->with('posts',$posts)->with('devision',$devision)->with('category',$category)->with('city',$city)->with('area',$area)->with('areatype',$areatype);
    }
}
