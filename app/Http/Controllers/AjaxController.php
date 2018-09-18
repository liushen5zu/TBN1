<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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
}
