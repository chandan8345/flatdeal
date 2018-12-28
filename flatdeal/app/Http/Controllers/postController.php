<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
use Input;

class postController extends Controller
{
    public function index(){
        $devision=DB::table('devision')->get();
        $category=DB::table('category')->get();
        $city=DB::table('city')->get();
        $area=DB::table('area')->get();
        return view('addpost')->with('devision',$devision)->with('category',$category)->with('city',$city)->with('area',$area);
    }
    public function addpost(Request $req){
        $title=$req->input('title');
        $category=$req->input('categories');
        $rent=$req->input('rent');
        $size=$req->input('size');
        $areatype=$req->input('areatype');
        $toletfor=$req->input('toletfor');
        $condition=$req->input('condition');
        $facing=$req->input('facing');
        $details=$req->input('details');
        $floor=$req->input('floor');
        $maintanence=$req->input('maintanence');
        $electricity=$req->input('electricity');
        $water=$req->input('water');
        $gas=$req->input('gas');
        $generator=$req->input('generator');
        $lift=$req->input('lift');
        $internet=$req->input('internet');
        $parking=$req->input('parking');
        $bedroom=$req->input('bedroom');
        $washroom=$req->input('washroom');
        $kitchen=$req->input('kitchen');
        $balcony=$req->input('balcony');
        $devision=$req->input('devision');
        $city=$req->input('city');
        $area=$req->input('area');
        $sortaddress=$req->input('sortaddress');
        $terms=$req->input('rule');
        $rentoncall=$req->input('rentoncall');
        $month=$req->input('month');
        $user_id=Session::get('user_id');
        $amount=0;
        if($terms == 1){
            if($rentoncall == 1){
                $data=array('title'=>$title,'category_id'=>$category,'rent'=>$amount,'size'=>$size,'area'=>$areatype,'floorno'=>$floor,'postingdate'=>date('d-m-Y'),'toletfor'=>$toletfor,'condit'=>$condition,'facing'=>$facing,'month'=>$month,'details'=>$details,'maintanence'=>$maintanence,'electricity'=>$electricity,'bedroom'=>$bedroom,'water'=>$water,'washroom'=>$washroom,'balcony'=>$balcony,'generator'=>$generator,'lift'=>$lift,'internet'=>$internet,'gas'=>$gas,'parking'=>$parking,'kitchen'=>$kitchen,'devision_id'=>$devision,'city_id'=>$city,'area_id'=>$area,'sortaddress'=>$sortaddress,'user_id'=>$user_id,'status'=>0);
               $id = DB::table('post')->insertGetId($data);
              // echo $id;
               if($req->file('image') != null){
               $files=$req->file('image');
               foreach($files as $file) {
                $image = $file->getClientOriginalName();
                $extention = $file->getClientOriginalExtension();
                $dp='postimages/'.$id.'_'.$image;
                $photo=array('post_id'=>$id,'name'=>$id.'_'.$image,'status'=>1);
                DB::table('postos')->insert($photo);
                $sp=$file->getPathName();
                move_uploaded_file($sp,$dp);
                 }
                }
                Session::flash('msg','Your Ads post successfully');
                return redirect('/ads-post');
            }else{
                $data=array('title'=>$title,'category_id'=>$category,'rent'=>$rent,'size'=>$size,'area'=>$areatype,'floorno'=>$floor,'postingdate'=>date('d-m-Y'),'toletfor'=>$toletfor,'condit'=>$condition,'facing'=>$facing,'month'=>$month,'details'=>$details,'maintanence'=>$maintanence,'electricity'=>$electricity,'bedroom'=>$bedroom,'water'=>$water,'washroom'=>$washroom,'balcony'=>$balcony,'generator'=>$generator,'lift'=>$lift,'internet'=>$internet,'gas'=>$gas,'parking'=>$parking,'kitchen'=>$kitchen,'devision_id'=>$devision,'city_id'=>$city,'area_id'=>$area,'sortaddress'=>$sortaddress,'user_id'=>$user_id,'status'=>0);
                $id = DB::table('post')->insertGetId($data);
                // echo $id;
                 if($req->file('image') != null){
                 $files=$req->file('image');
                 foreach($files as $file) {
                  $image = $file->getClientOriginalName();
                  $extention = $file->getClientOriginalExtension();
                  $dp='postimages/'.$id.'_'.$image;
                  $photo=array('post_id'=>$id,'name'=>$id.'_'.$image,'status'=>1);
                  DB::table('postos')->insert($photo);
                  $sp=$file->getPathName();
                  move_uploaded_file($sp,$dp);
                   }
                  }
                  Session::flash('msg','Your Ads post successfully');
                  return redirect('/ads-post');
            }
        }else{
            Session::flash('msg','please check our terms & conditions');
            return redirect('/ads-post');
        }
    }
}
