<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class loginController extends Controller
{
    public function login()
    {
        return view('Index.login');
    }

    public function loginSave()
    {
        $title=request()->title;
        $pwd=request()->pwd;
        $res=DB::table('login')->where('title',$title)->where('pwd',$pwd)->first();
        if($res){
            return ['code'=>1];
        }else{
            return ['code'=>2];
        }
    }
}