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
           echo '<option value="'.$row->id.'">'.$row->name.'</option>';
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
           echo '<option value="'.$row->id.'">'.$row->name.'</option>';
        }
       }else{
           echo '<option value="0">Select Area</option>';
       }
    }
    public function getsubarea(Request $req){
        $id=$req->id;
        if($id !=0){
        echo '<option value="0">Select Subarea</option>';
        $subarea=DB::table('subarea')->where('areaid',$id)->get();
        foreach($subarea as $row){
           echo '<option value="'.$row->id.'">'.$row->name.'</option>';
        }
       }else{
           echo '<option value="0">Select Subarea</option>';
       }
    }
    public function searchads(Request $req){
        $d=$req->input('devision');
        $c=$req->input('city');
        $cat=$req->input('category');
        //echo $category.'_'.$devision.'_'.$city;
        $devision=DB::table('devision')->get();
        $category=DB::table('category')->get();
        $city=DB::table('city')->get();
        $area=DB::table('area')->get();
        $subarea=DB::table('subarea')->get();
        return view('adsview', ['d' => $d,'c' => $c,'cat' => $cat])->with('devision',$devision)->with('category',$category)->with('city',$city)->with('area',$area)->with('subarea',$subarea);
    }
}
