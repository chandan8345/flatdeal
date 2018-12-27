<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
use Input;

class userController extends Controller
{  
    public function index(){
        $devision=DB::table('devision')->get();
        $category=DB::table('category')->get();
        $city=DB::table('city')->get();
        return view ('dashbord')->with('devision',$devision)->with('category',$category)->with('city',$city);
    }
    public function delete(Request $request){
        $id = $request->id;
        DB::table('postos')->where('post_id', $id)->delete();
        DB::table('post')->where('id', $id)->delete();
       // echo $id;
    }
    public function sold(Request $request){
        $id = $request->id;
        DB::table('post')->where('id',$id)->update(['status' => 2]);
       // echo $id;
    }
    public function approvepost(Request $request){
        $id = $request->id;
        DB::table('post')->where('id',$id)->update(['status' => 1]);
    }
    public function activepost(){
        $user_id=Session::get('user_id');
        $user_role=Session::get('user_role');
        if($user_role == 'Administrator'){
        $query="select  post.id,post.title,post.rent,postos.name as image,post.month,category.name as category,users.mobile FROM post,postos,category,users
        where post.category_id=category.id and post.id=postos.post_id and post.status=1 and post.user_id=users.id GROUP BY postos.post_id";
        }else{
            $query="select  post.id,post.title,post.rent,postos.name as image,post.month,category.name as category,users.mobile FROM post,postos,category,users
            where post.category_id=category.id and post.id=postos.post_id and post.status=1 and post.user_id=$user_id GROUP BY postos.post_id";    
        }$data=DB::select($query);
        if($data){
            foreach($data as $key => $row){
            echo '<tr data-category="active">
            <td class="photo"><img class="img-fluid" src="/postimages/'. $row->image .'" alt=""></td>
            <td data-title="Title">
            <h3>'.$row->title.'</h3>
            <span>User Mobile: '.$row->mobile.'</span>
            </td>
            <td data-title="Category"><span class="adcategories">'.$row->category.'</span></td>
            <td data-title="Ad Status"><span class="adstatus adstatusactive">'.$row->month.'</span></td>
            <td data-title="Price">
            <h3>'.$row->rent.'</h3>
            </td>
            <td data-title="Action">
            <div class="btns-actions">
            <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
            <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
            <a class="btn-action btn-delete" onclick="sold('.$row->id.')"><i class="lni-trash"></i></a>
            </div>
            </td>
            </tr>';
         }
        }else{
            echo "null";
        }
    }
    public function waitingpost(){
        $user_id=Session::get('user_id');
        $user_role=Session::get('user_role');
        if($user_role == 'Administrator'){
            $query="select  post.id,post.title,post.rent,postos.name as image,post.month,category.name as category,users.mobile FROM post,postos,category,users
            where post.category_id=category.id and post.id=postos.post_id and post.status=0 and post.user_id=users.id GROUP BY postos.post_id";
            }else{
                $query="select post.id,post.title,post.rent,postos.name as image,post.month,category.name as category,users.mobile FROM post,postos,category,users
                where post.category_id=category.id and post.id=postos.post_id and post.status=0 and post.user_id=$user_id GROUP BY postos.post_id";    
            }
            $da=DB::select($query);
        if($da > 0){
            foreach($da as $key => $row){
                echo '<tr data-category="active">
                <td class="photo"><img class="img-fluid" src="/postimages/'. $row->image .'" alt=""></td>
                <td data-title="Title">
                <h3>'.$row->title.'</h3>
                <span>User Mobile: '.$row->mobile.'</span>
                </td>
                <td data-title="Category"><span class="adcategories">'.$row->category.'</span></td>
                <td data-title="Ad Status"><span class="adstatus adstatusactive">'.$row->month.'</span></td>
                <td data-title="Price">
                <h3>'.$row->rent.'</h3>
                </td>
                <td data-title="Action">
                <div class="btns-actions">
                <a class="btn-action btn-view" onclick="approve('.$row->id.')"><i class="lni-eye"></i></a>
                <a class="btn-action btn-edit"><i class="lni-pencil"></i></a>
                <a class="btn-action btn-delete" onclick="inactivedelete('.$row->id.')"><i class="lni-trash"></i></a>
                </div>
                </td>
                </tr>';
              }  
        }else{
        echo "null";
        }
    }
    public function soldpost(){
        $user_id=Session::get('user_id');
        $user_role=Session::get('user_role');
        if($user_role == 'Administrator'){
            $query="select  post.id,post.title,post.rent,postos.name as image,post.month,category.name as category,users.mobile FROM post,postos,category,users
            where post.category_id=category.id and post.id=postos.post_id and post.status=2 and post.user_id=users.id GROUP BY postos.post_id";
            }else{
                $query="select  post.id,post.title,post.rent,postos.name as image,post.month,category.name as category,users.mobile FROM post,postos,category,users
                where post.category_id=category.id and post.id=postos.post_id and post.status=2 and post.user_id=$user_id GROUP BY postos.post_id";  
            }
        $data=DB::select($query);
        if($data){
            foreach($data as $key => $row){
            echo '<tr data-category="active">
            <td class="photo"><img class="img-fluid" src="/postimages/'. $row->image .'" alt=""></td>
            <td data-title="Title">
            <h3>'.$row->title.'</h3>
            <span>User Mobile: '.$row->mobile.'</span>
            </td>
            <td data-title="Category"><span class="adcategories">'.$row->category.'</span></td>
            <td data-title="Ad Status"><span class="adstatus adstatusactive">'.$row->month.'</span></td>
            <td data-title="Price">
            <h3>'.$row->rent.'</h3>
            </td>
            <td data-title="Action">
            <div class="btns-actions">
            <a class="btn-action btn-view" href="#"><i class="lni-eye"></i></a>
            <a class="btn-action btn-edit" href="#"><i class="lni-pencil"></i></a>
            <a class="btn-action btn-delete" onclick="solddelete('.$row->id.')"><i class="lni-trash"></i></a>
            </div>
            </td>
            </tr>';
         }
        }else{
            echo "null";
        }
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
