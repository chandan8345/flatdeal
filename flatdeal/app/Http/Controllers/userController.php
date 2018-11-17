<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
use Input;

class userController extends Controller
{

    public function indexLogin()
    {
        return view('login');
    }

    public function indexSignup()
    {
        return view('signup');
    }

    public function logincheck(Request $request){
        $mobile = $request->mobile;
        $pass = $request->pass;
        $role = $request->role;
        $u=0;$p=0;
        $db=DB::table('users')->get();
        foreach($db as $row){
            if($row->status == 1){
                if($row->role == $role){
                    if($row->mobile == $mobile){
                        $u++;
                    }
                    if($row->pass == $pass){
                        $p++;
                    }
                    if($row->mobile == $mobile && $row->pass == $pass){
                        Session::put('user_id',$row->id);
                        Session::put('user_name',$row->name);
                    }
                }
            }       
      }
        if($u==0 && $p==0){
            echo "Enter right information below";
        }else if($u==0 || $p==0){
        if($u != 0){
            echo "Sorry, Password wrong.";
            $p=0;$u=0;
        }else if($p !=0){
            echo "Sorry, .'$mobile'. no was wrong.";
            $p=0;$u=0;
        }}else{
           echo "login";  
        }
    }
      
    public function logout(Request $request)
    {
         Session::forget('user_name');
         Session::forget('user_id');
         Session::flush();
         return redirect('/');
    }

    public function signup(Request $req){

    }


    public function create()
    {
         
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
