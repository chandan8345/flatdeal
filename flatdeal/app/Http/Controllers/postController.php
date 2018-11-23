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
        $subarea=DB::table('subarea')->get();
        return view('addpost')->with('devision',$devision)->with('category',$category)->with('city',$city)->with('subarea',$subarea);
    }
    public function addpost(Request $req){
        $title=$req->input('title');
        $category=$req->input('categories');
        $rent=$req->input('rent');
        $size=$req->input('size');
        $area=$req->input('area');
        $toletfor=$req->input('toletfor');
        $condition=$req->input('condition');
        $facing=$req->input('facing');
        $details=$req->input('details');
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
        $subarea=$req->input('subarea');
        $sortaddress=$req->input('sortaddress');
        $terms=$req->input('rule');
        $rentoncall=$req->input('rentoncall');
        $month=$req->input('month');
        $user_id=Session::get('user_id');
        $amount=0;
        if($terms == 1){
            if($rentoncall == 1){
                $data=array('title'=>$title,'category_id'=>$category,'rent'=>$amount,'size'=>$size,'area'=>$area,'postingdate'=>date('d-m-Y'),'toletfor'=>$toletfor,'condit'=>$condition,'facing'=>$facing,'month'=>$month,'details'=>$details,'maintanence'=>$maintanence,'electricity'=>$electricity,'bedroom'=>$bedroom,'water'=>$water,'washroom'=>$washroom,'balcony'=>$balcony,'generator'=>$generator,'lift'=>$lift,'internet'=>$internet,'gas'=>$gas,'parking'=>$parking,'kitchen'=>$kitchen,'devision_id'=>$devision,'city_id'=>$city,'subarea_id'=>$subarea,'sortaddress'=>$sortaddress,'user_id'=>$user_id,'status'=>1);
               $id = DB::table('post')->insertGetId($data);
              // echo $id;
               if($req->file('image') != null){
               $files=$req->file('image');
               foreach($files as $file) {
                $image = $file->getClientOriginalName();
                $extention = $file->getClientOriginalExtension();
                $dp='postimages/'.$id.'_'.$image.'.'.$extention;
                $photo=array('post_id'=>$id,'name'=>$id.'_'.$image,'status'=>1);
                DB::table('postos')->insert($photo);
                $sp=$file->getPathName();
                move_uploaded_file($sp,$dp);
                 }
                }
                Session::flash('msg','Your Ads post successfully');
                return redirect('/ads-post');
            }else{
                $data=array('title'=>$title,'category_id'=>$category,'rent'=>$rent,'size'=>$size,'area'=>$area,'postingdate'=>date('d-m-Y'),'toletfor'=>$toletfor,'condit'=>$condition,'facing'=>$facing,'month'=>$month,'details'=>$details,'maintanence'=>$maintanence,'electricity'=>$electricity,'bedroom'=>$bedroom,'water'=>$water,'washroom'=>$washroom,'balcony'=>$balcony,'generator'=>$generator,'lift'=>$lift,'internet'=>$internet,'gas'=>$gas,'parking'=>$parking,'kitchen'=>$kitchen,'devision_id'=>$devision,'city_id'=>$city,'subarea_id'=>$subarea,'sortaddress'=>$sortaddress,'user_id'=>$user_id,'status'=>1);
                $id = DB::table('post')->insertGetId($data);
                // echo $id;
                 if($req->file('image') != null){
                 $files=$req->file('image');
                 foreach($files as $file) {
                  $image = $file->getClientOriginalName();
                  $extention = $file->getClientOriginalExtension();
                  $dp='postimages/'.$id.'_'.$image.'.'.$extention;
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
