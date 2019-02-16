<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
use Input;
use Mail;

class securityController extends Controller
{
    public function indexLogin()
    {
        return view('login');
    }

    public function indexSignup()
    {
        return view('signup');
    }

    public function signup(Request $request){
        $name=$request->input('name');
        $mobile=$request->input('mobile');
        $address=$request->input('address');
        $email=strtolower($request->input('email'));
        $pass=$request->input('pass');
        $repass=$request->input('repass');
        if($pass == $repass){
            if($request->file('image') !=null){
                $image = $request->file('image')->getClientOriginalName();
                $extention = $request->file('image')->getClientOriginalExtension();
                $data=array('name'=>$name,'pass'=>$pass,'address'=>$address,'mobile'=>$mobile,'email'=>$email,'dateofjoin'=>date('d-m-Y'),'role'=>1,'status'=>1);
                $id=DB::table('users')->insertGetid($data);
                $dp='image/'.$id.'.'.$extention;
                $sp=$request->file('image')->getPathName();
                move_uploaded_file($sp,$dp);
                Session::flash('msg','Account create successfully');
                return redirect('/signup');
            }else{
                $data=array('name'=>$name,'pass'=>$pass,'address'=>$address,'mobile'=>$mobile,'email'=>$email,'role'=>1,'status'=>1);
                DB::table('users')->insert($data);
                return redirect('/signup');
            }
        }else{
            Session::flash('msg','Sorry, password mismatch');
            return redirect('/signup');
        }
        
    }

    public function logincheck(Request $request){
        $mobile = $request->mobile;
        $pass = $request->pass;
        //$role = $request->role;
        $u=0;$p=0;
        $db=DB::table('users')->get();
        foreach($db as $row){
            if($row->status == 1){
               // if($row->role == $role){
                    if($row->mobile == $mobile){
                        $u++;
                    }
                    if($row->pass == $pass){
                        $p++;
                    }
                    if($row->mobile == $mobile && $row->pass == $pass){
                        Session::put('user_id',$row->id);
                        Session::put('user_name',$row->name);
                        Session::put('image',$row->image);
                        if($row->role == 1){
                        Session::put('user_role','Administrator');
                        }else{
                        Session::put('user_role','Local User');
                        }
                    }
               // }
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
         Session::forget('user_role');
         Session::forget('image');
         Session::flush();
         return redirect('/');
    }

}
