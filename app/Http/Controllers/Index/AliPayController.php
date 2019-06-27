<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AliPayController extends Controller
{
    public $app_id;
    public $gate_way;
    public $notify_url;
    public $return_url;
    public $rsaPrivateKeyFilePath = '';  //路径
    public $aliPubKey = '';  //路径
    public $privateKey = 'MIIEpQIBAAKCAQEAy1W/IjjB8ouu+vGZYkvW2miQsdyDGUuZuZoJcYkL4+9RiFp0qERu2TspGWpLbv0KqGJSq/rQ248vDfEiTUjPzPGCTKd6Uppg+/to6fcVNrUoklh1K3s1j5qWWAW2EBZbgDYm7nMNaBaqU0KQK2CyA0Av9uyzZ2TPdQ1cZvEcXzD9T8wPtDSqvvTt5ws48tE444+OWegs5o2F5VM+8EKOgZJkIPyXUXcR4P34witinp/jzief656GkIXFQLCJ8CNt6nRUoZnzh3lfktwjknDqKQOP/Q++8lrkrarVe+FNjMpV5uh8EerTvSOqd7oGNlt95QTxGClo6mJPhF2scC8XWwIDAQABAoIBAQCCau4cEhF781H5TMsXvBMDpXvhSNGhgNcJr54M/1zsBszhyzr1zmbW2FZFIeNePdj/JYlnG4mouc7xf0+ECIaYKfNsHSOdJb29AYVKQ5uMqmdqbmhAylcRU5LIxGkBKoXn11PjL1JTB+6ZVqFH4U5sPVhGZY2wbH2P01EICfArsQc68ACTZYJX6WVOJMIUiHXImg03UZ33oJimZxVjjqPQuUH/dU11ev2BmeCl26DRbmbfj8p4xQFIDEGtRzfz0Penq0HMPgc4BuoELvFIj0Xlf8Gi74b8/pP7/9YKH0aweSvjkAhI9tybOq8HlTIaaclwuwm4jiIsX1Li4erY05wpAoGBAPvu1G6V+viSQ65leTJKPiVhs+lwQ+E5Xheb6PY6+YwImiCp1AOwd/jxC6wbPDqKPsMQi6wgyxxTtmwFSPBwuvPXOtx3riVl/52ZK+wX1X5yAl/m19PCFYoDBQffG6mo8ECwrfDPYtzCONJiQ4rjuDUCwEV87WM2+Ai1p1/6oDc/AoGBAM6eExfGwHkO98bkrN0uxiiXTW2FN0xYTaFXMua+dPEbdgJCg2fnIMg9MRf0nNA9pq6JxANhM4R3sUVbSY4wI5ggTPR/Wt/xtB0HXfp4gKuETNCNYjchNNy00b/iqrqaDugfM8dbjgCzEeehYghqfmETsW6K9NLmU2y6ytk5A1TlAoGBANVMpSEn7IAOXi1GjrFMeIdvzEJloaMLziVRBJGM5wFvuwbSosWo4Dqt4wMJYBn0OCUxWgAXF8BZBAc7BkFEQJT48kX9Mj1JuXz2VWCj4UcYQfhuWudX2KKr4dODS0l+1kL/E5XiEEL2UeOV/LeYC7seJCnxFo+8142QNzCk4odDAoGAGqMUcQ9FhxXf6btXcdhy4Y7IA6OWAnir4W39ePP63Y6dwyLSEBYjCs2gw6bchJg+IehO5eSlIKHRr9BaBkO8gwM/CJJWo+JkRw3JFt5sMDCJOqXPkK3uQ7noBKXzPsVXwKMtKLlr8DklyMfsfItGKbvBNzAg6gOZo73dIu4PuOUCgYEA6UcRIBcsTowAarzbWOfhyfjAno0OuAgXp4ed3YA57lmj0xMbYtv1YuAqJDvOkmsJtjNMVllHF7mkVM5E9Fq49IKK7J5y1mBuAKn661uNRWyrgisH7MUGyj8D1NBcIcryT9jORPN0wDkPRGXnEZVlLKkRiWtu6fFqHenJw7MOynE=';
    public $publicKey = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAkjQeigD7npS8XS3lYtG4TBTAa9KH+CK+uG08irkU9EJq2SteSKoeGAVtref9H0jWCdWR6qvfuOeEKyoCAM02AxPGdstQaU5ofHghD1/qvQqSAOB3fZVn3uODelGPHT631TmoXQu/qQfjFVIZ107e6efQ696LPkLGfnZteJeTNoWxh/RY+OeES7pG+f0cqlDzSRL7sCv9v89wh1JN5BhzhaGgJ7lIbK7JNF3eKMXjdodLZISWp8RErKaNBp5BIz8lgw+cpNNi7r7E+C6gGVDF4dZ6iOky+SibdgQDQJ28RemQ/uvXaCuPosXUAuQfIc50pdiztlY7aKVnsPGeWw7nwIDAQAB';
    public function __construct()
    {
        $this->app_id = '2016100100636271';
        $this->gate_way = 'https://openapi.alipaydev.com/gateway.do';
        $this->notify_url = env('APP_URL').'/notify_url';
        $this->return_url = env('APP_URL').'/return_url';
    }
    
    
    /**
     * 订单支付
     * @param $oid
     */
    public function pay()
    {
        

    	// file_put_contents(storage_path('logs/alipay.log'),"\nqqqq\n",FILE_APPEND);
    	// die();
        //验证订单状态 是否已支付 是否是有效订单
        //$order_info = OrderModel::where(['oid'=>$oid])->first()->toArray();
        //判断订单是否已被支付
        // if($order_info['is_pay']==1){
        //     die("订单已支付，请勿重复支付");
        // }
        //判断订单是否已被删除
        // if($order_info['is_delete']==1){
        //     die("订单已被删除，无法支付");
        // } 
        $res =DB::table('ding')->get();  //订单编号
        $oid=0;
        foreach($res->toArray() as $v){
            $oid=$v->num;
        }
        $date=DB::table('cart')->join('user','cart.id','=','user.id')->orderBy('c_id','desc')->get();
        $total= 0;
        foreach($date->toArray() as $v){
                $total += $v->buy_num * $v->price;
        }
        //业务参数
        $bizcont = [
            'subject'           => 'Lening-Order: ' .$oid,
            'out_trade_no'      => $oid,
            'total_amount'      =>$total,
            'product_code'      => 'FAST_INSTANT_TRADE_PAY',
        ];
        //公共参数
        $data = [
            'app_id'   => $this->app_id,                                            
            'method'   => 'alipay.trade.page.pay',
            'format'   => 'JSON',
            'charset'   => 'utf-8',
            'sign_type'   => 'RSA2',
            'timestamp'   => date('Y-m-d H:i:s'),
            'version'   => '1.0',
            'notify_url'   => $this->notify_url,        //异步通知地址
            'return_url'   => $this->return_url,        // 同步通知地址
            'biz_content'   => json_encode($bizcont),
        ];
        //签名
        $sign = $this->rsaSign($data);
        $data['sign'] = $sign;
        $param_str = '?';
        foreach($data as $k=>$v){
            $param_str .= $k.'='.urlencode($v) . '&';
        }
        $url = rtrim($param_str,'&');
        $url = $this->gate_way . $url;
        
        header("Location:".$url);
    }
    public function rsaSign($params) {
        return $this->sign($this->getSignContent($params));
    }
    protected function sign($data) {
    	if($this->checkEmpty($this->rsaPrivateKeyFilePath)){
    		$priKey=$this->privateKey;
			$res = "-----BEGIN RSA PRIVATE KEY-----\n" .
				wordwrap($priKey, 64, "\n", true) .
				"\n-----END RSA PRIVATE KEY-----";
    	}else{
    		$priKey = file_get_contents($this->rsaPrivateKeyFilePath);
            $res = openssl_get_privatekey($priKey);
    	}
        
        ($res) or die('您使用的私钥格式错误，请检查RSA私钥配置');
        openssl_sign($data, $sign, $res, OPENSSL_ALGO_SHA256);
        if(!$this->checkEmpty($this->rsaPrivateKeyFilePath)){
            openssl_free_key($res);
        }
        $sign = base64_encode($sign);
        return $sign;
    }
    public function getSignContent($params) {
        ksort($params);
        $stringToBeSigned = "";
        $i = 0;
        foreach ($params as $k => $v) {
            if (false === $this->checkEmpty($v) && "@" != substr($v, 0, 1)) {
                // 转换成目标字符集
                $v = $this->characet($v, 'UTF-8');
                if ($i == 0) {
                    $stringToBeSigned .= "$k" . "=" . "$v";
                } else {
                    $stringToBeSigned .= "&" . "$k" . "=" . "$v";
                }
                $i++;
            }
        }
        unset ($k, $v);
        return $stringToBeSigned;
    }
    protected function checkEmpty($value) {
        if (!isset($value))
            return true;
        if ($value === null)
            return true;
        if (trim($value) === "")
            return true;
        return false;
    }
    /**
     * 转换字符集编码
     * @param $data
     * @param $targetCharset
     * @return string
     */
    function characet($data, $targetCharset) {
        if (!empty($data)) {
            $fileType = 'UTF-8';
            if (strcasecmp($fileType, $targetCharset) != 0) {
                $data = mb_convert_encoding($data, $targetCharset, $fileType);
            }
        }
        return $data;
    }
    /**
     * 支付宝同步通知回调
     */
    public function aliReturn(Request $request)
    {
        // header('Refresh:2;url=/order/list');
        // $res = $request->all();
        echo "订单： ".$_GET['out_trade_no'] . ' 支付成功，正在跳转';
//        echo '<pre>';print_r($_GET);echo '</pre>';die;
//        //验签 支付宝的公钥
//        if(!$this->verify($_GET)){
//            die('簽名失敗');
//        }
//
//        //验证交易状态
////        if($_GET['']){
////
////        }
////
//
//        //处理订单逻辑
//        $this->dealOrder($_GET);
    }
    /**
     * 支付宝异步通知
     */
    public function aliNotify()
    {
        $data = json_encode($_POST);
        $log_str = '>>>> '.date('Y-m-d H:i:s') . $data . "<<<<\n\n";
        //记录日志
        file_put_contents('logs/alipay.log',$log_str,FILE_APPEND);
        //验签
        $res = $this->verify($_POST);
        $log_str = '>>>> ' . date('Y-m-d H:i:s');
        if($res){
            //记录日志 验签失败
            $log_str .= " Sign Failed!<<<<< \n\n";
            file_put_contents('logs/alipay.log',$log_str,FILE_APPEND);
        }else{
            $log_str .= " Sign OK!<<<<< \n\n";
            file_put_contents('logs/alipay.log',$log_str,FILE_APPEND);
        }
        //验证订单交易状态
        if($_POST['trade_status']=='TRADE_SUCCESS'){
            //更新订单状态
            $oid = $_POST['out_trade_no'];     //商户订单号
            $info = [
                'is_pay'        => 1,       //支付状态  0未支付 1已支付
                'pay_amount'    => $_POST['total_amount'] * 100,    //支付金额
                'pay_time'      => strtotime($_POST['gmt_payment']), //支付时间
                'plat_oid'      => $_POST['trade_no'],      //支付宝订单号
                'plat'          => 1,      //平台编号 1支付宝 2微信 
            ];
           // OrderModel::where(['oid'=>$oid])->update($info);
        }
        //处理订单逻辑
        $this->dealOrder($_POST);
        echo 'success';
    }
    //验签
    function verify($params) {
        $sign = $params['sign'];
        // $params['sign_type'] = null;
        // $params['sign'] = null;

        if($this->checkEmpty($this->aliPubKey)){
            $pubKey= $this->publicKey;
            $res = "-----BEGIN PUBLIC KEY-----\n" .
                wordwrap($pubKey, 64, "\n", true) .
                "\n-----END PUBLIC KEY-----";
        }else {
            //读取公钥文件
            $pubKey = file_get_contents($this->aliPubKey);
            //转换为openssl格式密钥
            $res = openssl_get_publickey($pubKey);
        }
        
       
        
        //转换为openssl格式密钥
        $res = openssl_get_publickey($pubKey);
        ($res) or die('支付宝RSA公钥错误。请检查公钥文件格式是否正确');
        //调用openssl内置方法验签，返回bool值
        $result = (openssl_verify($this->getSignContent($params), base64_decode($sign), $res, OPENSSL_ALGO_SHA256)===1);
        openssl_free_key($res);
        return $result;
    }
    /**
     * 处理订单逻辑 更新订单 支付状态 更新订单支付金额 支付时间
     * @param $data
     */
    public function dealOrder($data)
    {
        //加积分
        //减库存
    }
}
