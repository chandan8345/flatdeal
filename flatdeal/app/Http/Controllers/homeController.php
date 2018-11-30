<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
use Input;

class homeController extends Controller
{
    public function index(){
        $devision=DB::table('devision')->get();
        $category=DB::table('category')->get();
        $city=DB::table('city')->get();
        return view('index')->with('devision',$devision)->with('category',$category)->with('city',$city);
    }
    public function faq(){
        return view('faq');
    }

    public function getcity(Request $req){
        $id=$req->id;
        if($id !=0){
        echo '<option value="0">Select City</option>';
        $city=DB::table('city')->where('devisionid',$id)->get();
        foreach($city as $row){
           echo '<option value="'.$row->id.'" >'.$row->name.'</option>';
        }
       }else{
           echo '<option value="0">Select City</option>';
       }
    }
    public function getarea(Request $req){
        $id=$req->id;
        if($id !=0){
         echo '<option value="0">Select Area</option>';
        $area=DB::table('area')->where('cityid',$id)->get();
        foreach($area as $row){
         echo '<option value="'.$row->id.'" >'.$row->name.'</option>';
        }
       }else{
           echo '<option value="0">Select Area</option>';
       }
    }

    public function searchads(Request $req){
        $d=$req->input('devision');
        $c=$req->input('city');
        $cat=$req->input('category');
        $a=0;$t="Select One";
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
      }
       $posts=DB::select($sql);
    return view('adsview', ['d' => $d,'c' => $c,'cat' => $cat,'a' => $a,'t' => $t])->with('posts',$posts)->with('devision',$devision)->with('category',$category)->with('city',$city)->with('area',$area)->with('areatype',$areatype);
    }
    public function category($id){
        $devision=DB::table('devision')->get();
        $category=DB::table('category')->get();
        $city=DB::table('city')->get();
        $area=DB::table('area')->get();
        $areatype=DB::table('areatype')->get();
        $sql="select post.id,post.title,post.month,post.rent,postos.name as image,post.postingdate,users.name as username,users.mobile as usermobile,area.name as area from postos,post,users,area where post.id=postos.post_id and post.area_id=area.id and post.category_id=$id and post.user_id=users.id and post.status=1";
         $posts=DB::select($sql);
       return view('adsview')->with('posts',$posts)->with('devision',$devision)->with('category',$category)->with('city',$city)->with('area',$area)->with('areatype',$areatype);
    }
}