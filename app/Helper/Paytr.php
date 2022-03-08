<?php

namespace App\Helper;

use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Paytr
{
    public static function create($total, $order, $adress, $phone){
        $merchant_id    = setting('paytr_merchant_id');
        $merchant_key   = setting('paytr_merchant_key');
        $merchant_salt  = setting('paytr_merchant_salt');
        $email = Auth::user()->email;
        $payment_amount = $total*100;
        $merchant_oid = $order;
        $user_name = __('words.name_surname', ['name'=>Auth::user()->name, 'surname'=>Auth::user()->surname]);
        $user_address = $adress;
        $user_phone = $phone;
        $merchant_ok_url = route('web.accout.order');
        $merchant_fail_url = route('web.index');
        $cart_items = [];
        foreach (Cart::instance('cart')->content() as $c) {
            $product = [
                $c->name,
                $c->price,
                $c->qty
            ];
            array_push($cart_items, $product);
        }
        $user_basket = base64_encode(json_encode($cart_items));

        if( isset( $_SERVER["HTTP_CLIENT_IP"] ) ) {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        } elseif( isset( $_SERVER["HTTP_X_FORWARDED_FOR"] ) ) {
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else {
            $ip = $_SERVER["REMOTE_ADDR"];
        }
        $user_ip = $ip;
        $timeout_limit = "30";
        $debug_on = 1;
        $test_mode = 0;
        $no_installment = 0;
        $max_installment = 0;
        $currency = "TL";
        $hash_str = $merchant_id .$user_ip .$merchant_oid .$email .$payment_amount .$user_basket.$no_installment.$max_installment.$currency.$test_mode;
        $paytr_token=base64_encode(hash_hmac('sha256',$hash_str.$merchant_salt,$merchant_key,true));
        $post_vals=array(
                'merchant_id'=>$merchant_id,
                'user_ip'=>$user_ip,
                'merchant_oid'=>$merchant_oid,
                'email'=>$email,
                'payment_amount'=>$payment_amount,
                'paytr_token'=>$paytr_token,
                'user_basket'=>$user_basket,
                'debug_on'=>$debug_on,
                'no_installment'=>$no_installment,
                'max_installment'=>$max_installment,
                'user_name'=>$user_name,
                'user_address'=>$user_address,
                'user_phone'=>$user_phone,
                'merchant_ok_url'=>$merchant_ok_url,
                'merchant_fail_url'=>$merchant_fail_url,
                'timeout_limit'=>$timeout_limit,
                'currency'=>$currency,
                'test_mode'=>$test_mode
            );

        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.paytr.com/odeme/api/get-token");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1) ;
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_vals);
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = @curl_exec($ch);
        if(curl_errno($ch))
            die("PAYTR IFRAME connection error. err:".curl_error($ch));
        curl_close($ch);
        $result=json_decode($result,1);

        if($result['status']=='success'){
            $token=$result['token'];
        } else {
            die("PAYTR IFRAME failed. reason:".$result['reason']);
        }
        return $token;
    }

    public static function update(Request $request){
        $merchant_key   = setting('paytr_merchant_key');
        $merchant_salt  = setting('paytr_merchant_salt');
        $hash = base64_encode(hash_hmac('sha256', $request->merchant_oid.$merchant_salt.$request->status.$request->total_amount, $merchant_key, true));
        if( $hash != $request->hash )
            die('PAYTR notification failed: bad hash');
        if($request->status == 'success' ) {
            Order::whereId($request->merchant_oid)->update([
                'status'=>1
            ]);
        } else {
            return redirect()->route('web.index');
        }
        echo "OK";
        exit;
    }
}
