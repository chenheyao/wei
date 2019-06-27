<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
 
class UserController extends Controller
{
public function loginAdd()
{
  return view('admin.loginAdd');
}

public function loginHandel()
{
  $title=request()->title;
  $pwd=request()->pwd;
  $data=DB::table('login')->where('title',$title)->where('pwd',$pwd)->first();
  if($data){
    session(['id'=>$data->id]);
    return ['code'=>'1'];
  }else{
    return ['code'=>'2'];
  }
}

public function loginSave()
{
  return view('admin.loginSave');
}

public function saveAdd()
{
  $data=request()->all();
  $date=DB::table('login')->insert([
    'title' =>$data['title'],
    'pwd' =>$data['pwd']
  ]);
  if($date){
    return redirect('admin/loginAdd');
  }
  
}

  public function add()
  {
    $redis= new \Redis();
    $redis->connect('127.0.0.1','6379');
    $redis->incr('num');
    $num =$redis->get('num');
    echo $num."<br/>";
  
      return view('admin.add');
  }

  public function addHandel(Request $request)
  {
       $data =request()->all();
       //dd($data);
       $data['time']=time();
      $path = $request->file('file')->store('public');
      $img=asset('storage'.'/'.$path);
      $date =DB::table('user')->insert([
        'username' =>$data['username'],
        'num' =>$data['num'],
        'time' =>$data['time'],
        'file' =>$img,
        'price' =>$data['price']
      ]);
      if($date){
          return redirect('admin/list');
      }     
  }

  public function list()
  { 
    $query =request()->all();
    $where=[];
    if($query['username']??''){
      $where[]=['username','like',"%$query[username]%"];
    }
      $data=DB::table('user')->where($where)->paginate(2);
       return view('admin.list',['data'=>$data,'query'=>$query]); 
  }
  public function del($id)
  {
    $date=DB::table('user')->where(['id'=>$id])->delete();
    if($date){
        return redirect('admin/list');
    }
  }

  public function edit($id)
  {
      $res=request()->all();
      $data=DB::table('user')->where(['id'=>$id])->first();
    return view('admin.edit',['data'=>$data]);
  }

  public function update(Request $request,$id)
  {
    $data =request()->all();
    $path = $request->file('file')->store('public');
    $img=asset('storage'.'/'.$path);
    $date=DB::table('user')->where(['id'=>$id])->update([
      'username' =>$data['username'],
      'num' =>$data['num'],
      'file' =>$img,
      'price' =>$data['price']
    ]);
    if($date){
        return redirect('admin/list');
    }else{
      return redirect('admin/list');
    }
  }
}
