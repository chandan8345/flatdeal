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
    public function getsubarea(Request $req){
        $id=$req->id;
        if($id !=0){
        echo '<option value="0">Select Subarea</option>';
        $city=DB::table('city')->where('devisionid',$id)->get();
        foreach($city as $row){
           echo '<option value="'.$row->id.'">'.$row->name.'</option>';
        }
       }else{
           echo '<option value="0">Select City</option>';
       }
    }
    public function searchads(Request $req){
        $devision=$req->input('devision');
        $city=$req->input('city');
        $category=$req->input('category');
        echo $category.'_'.$devision.'_'.$city;
    }
}
