<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Testing\Concerns\session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AjaxController extends Controller
{
     public function password(Request $request)
    {
            //获取请求的参数
         $password=$request->old_password;
          $old_password=User::find(session('id'))->value('password');
          if($password==$old_password){
            echo '1';
          }else{
            echo '0';
          }
    }   
    public function zc_username(Request $request)
    {
            //获取请求的参数
         $username=$request->username;
           $old_password=User::where('username','=',$username)->first();
          if(empty($old_password)){
            echo '1';
          }else{
            echo '0';
          }
    }
    public function phone_code(Request $request)
    {
       $code=session('code');
       $user_code=$request ->code;
       if($code!=$user_code){
            echo '1';
          }else{
            echo '0';
          }
    }             
}
