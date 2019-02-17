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
        $flat=0;$office=0;$factory=0;$plot=0;
        $retail=0;$rooms=0;$luxury=0;$garage=0;
        $devision=DB::table('devision')->get();
        $category=DB::table('category')->get();
        $city=DB::table('city')->get();
        $sql="SELECT post.category as category,count(post.id) total FROM post group by post.category";
        $categorywisetotal=DB::select($sql);
        foreach($categorywisetotal as $row){
            if($row->category == 1){
                $flat=$row->total;
            }
            if($row->category == 2){
                $office=$row->total;
            }
            if($row->category == 3){
                $factory=$row->total;
            }
            if($row->category == 4){
                $retail=$row->total;
            }
            if($row->category == 5){
                $plot=$row->total;
            }
            if($row->category == 6){
                $garage=$row->total;
            }
            if($row->category == 7){
                $rooms=$row->total;
            }
            if($row->category == 8){
                $luxury=$row->total;
            }
        }
        $query="select post.id,post.title,post.month,post.rent,category.name as category,postos.name as image,post.postingdate,users.name as username,users.mobile as usermobile,area.name as area from postos,post,users,area,category where post.id=postos.post_id and post.devision=1 and post.areatype=area.name and post.user_id=users.id and post.status=1 and post.category = category.name GROUP BY postos.post_id order by id desc limit 6";
        $latestads=DB::select($query);
        return view('index',['flat' => $flat,'office'=> $office,'retail'=>$retail,'factory'=>$factory,'plot'=>$plot,'rooms'=>$rooms,'garage'=>$garage,'luxury'=>$luxury])->with('latestads',$latestads)->with('devision',$devision)->with('category',$category)->with('city',$city);
    }
    public function faq(){
        return view('faq');
    }

    public function getcity(Request $req){
        $id=$req->id;
        if($id !=""){
        echo '<option value="0">Select City</option>';
        $city=DB::table('city')->where('devision',$id)->get();
        foreach($city as $row){
           echo '<option value="'.$row->name.'" >'.$row->name.'</option>';
        }
       }else{
           echo '<option value="0">Select City</option>';
       }
    }
    public function getarea(Request $req){
        $id=$req->id;
        if($id != ""){
        //echo '<option value="0">Select Area</option>';
        $area=DB::table('area')->where('city',$id)->get();
        foreach($area as $row){
         echo '<option value="'.$row->name.'" >'.$row->name.'</option>';
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
        $sql="select post.id,post.title,post.month,post.rent,category.name as category,postos.name as image,post.postingdate,users.name as username,users.mobile as usermobile,area.name as area from postos,post,users,area,category where post.id > 0 and post.id=postos.post_id and post.areatype=area.name and post.user_id=users.id and post.status=1 and post.category=category.name";
        if(!empty($d)){
          $sql =$sql." and post.devision='$d'";
        }if(!empty($c)){
          $sql =$sql." and post.city='$c'";
        }if(!empty($cat)){
          $sql =$sql." and post.category='$cat'";
        }
      $sql=$sql." GROUP BY postos.post_id ORDER BY postos.id DESC";
      //var_dump($sql);
      $posts=DB::select($sql);
      return view('adsview', ['d' => $d,'c' => $c,'cat' => $cat,'a' => $a,'t' => $t])->with('posts',$posts)->with('devision',$devision)->with('category',$category)->with('city',$city)->with('area',$area)->with('areatype',$areatype);
    }
}