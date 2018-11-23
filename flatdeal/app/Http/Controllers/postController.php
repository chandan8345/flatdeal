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
        $devision=$req->input('devition');
        $city=$req->input('city');
        $subarea=$req->input('subarea');
        $sortaddress=$req->input('sortaddress');
        $terms=$req->input('rule');
        $rentoncall=$req->input('rentoncall');
        $month=$req->input('month');
        $data=array('name'=>$name,'pass'=>$pass,'address'=>$address,'mobile'=>$mobile,'email'=>$email,'dateofjoin'=>date('d-m-Y'),'image'=>$mobile.'.'.$extention,'role'=>1,'status'=>1);
        //DB::table('users')->insert($data);
    }
}
