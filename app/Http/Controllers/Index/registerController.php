<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class registerController extends Controller
{
    public function register()
    {
        return view('Index.register');
    }
    
    public function registerSave()
    {
        $data=request()->all();
        $res=DB::table('login')->insert([
            'title'=>$data['title'],
            'pwd'=>$data['pwd']
        ]);
        if($res){
            return ['code'=>1];
        }else{
            return ['code'=>2];
        }
    }
}