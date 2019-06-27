<?php

namespace App\Http\Controllers\index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class indexController extends Controller
{
    //首页
    public function index()
    {
        $data=DB::table('user')->get();
        return view('index.index',['data'=>$data]);
    }
    //商品详情页
    public function indexSave()
    {
        $id=request()->id;
        $res=DB::table('user')->where(['id'=>$id])->get();
        return view('index.indexSave',['res'=>$res]);
    }
    //获取总价
    public function price()
    {
        $id=request()->id;
        $buy_num=request()->buy_num;
        $res=DB::table('user')->where('id',$id)->get();
        $count=$res[0]->price;
        $total=$buy_num*$count;
        echo $total;
        
    }
    //购物车展示
    public function cart()
    {
        $date=DB::table('cart')->join('user','cart.id','=','user.id')->orderBy('c_id','desc')->get();
        $total= 0;
        foreach($date->toArray() as $v){
                $total += $v->buy_num * $v->price;
        }
        return view('index.cart',['date'=>$date,'total'=>$total]);
    }
    //购物车添加
    public function cartSave()
    {
        $data=request()->all();
        $date=DB::table('cart')->where(['data'=>$data])->insert([
            'buy_num'=>$data['buy_num'],
            'id'=>$data['id']
        ]);
        if($date){
            return ['code'=>'1'];
        }else{
            return ['code'=>2];
        }
    }
    //加入购物车删除
    public function del($c_id)
    {
        $data=request()->all();
        $res=DB::table('cart')->where(['c_id'=>$c_id])->delete();
        if($res){
            return redirect('cart');
        }else{
            return redirect('cart');
        }
    }

    //订单列表
    public function cartList()
    {
        $date=DB::table('cart')->join('user','cart.id','=','user.id')->orderBy('c_id','desc')->get();
        $data=DB::table('ding')->join('cart','ding.c_id','=','cart.c_id')->orderBy('d_id','desc')->first();
        $total= 0;
        foreach($date->toArray() as $v){
                $total += $v->buy_num * $v->price;
        }
        return view('index.cartList',['data'=>$data,'total'=>$total]);
    }

    public function cartAdd()
    {
        $date=request()->all();
        $date['time']=time();
        $num= time().mt_rand(1000,1111);  //订单编号
        $data=DB::table('ding')->where(['date'=>$date])->insert([
            'c_id'=>$date['c_id'],
            'num'=>$num,
            'time'=>$date['time']
        ]);
        if($data){
            return ['code'=>1];
        }else{
            return ['code'=>2];
        }
    }

    public function delete($d_id)
    {
        $res=DB::table('ding')->where(['d_id'=>$d_id])->delete();
        if($res){
            return redirect('cart');
        }else{
            return redirect('cartList');
        }
    }
    
}
