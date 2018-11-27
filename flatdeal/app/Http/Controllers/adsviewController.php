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
        $subarea=DB::table('subarea')->get();
        return view('adsview')->with('devision',$devision)->with('category',$category)->with('city',$city)->with('area',$area)->with('subarea',$subarea);
    }
}