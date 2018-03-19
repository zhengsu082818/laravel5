<?php
namespace App\Jobs;

class SendSMS {

	public $target = 'http://106.ihuyi.cn/webservice/sms.php?method=Submit';
	public $account = 'C72915564';
	public $passwd = '7c68e5812cd067550760fca4d2dc9668';

	public function send()
	{
		$mobile =$_POST['mobile']; //;
		$mobile_code = $this->random(4,1);
		$post_data = "account=".$this->account."&password=".$this->passwd."&mobile=".$mobile."&content=".rawurlencode("您的验证码是：".$mobile_code."。请不要把验证码泄露给其他人。");

		$gets =  $this->xml_to_array($this->post($post_data, $this->target));
		if($gets['SubmitResult']['code']==2){
		    $_SESSION['mobile'] = $mobile;
		    $_SESSION['mobile_code'] = $mobile_code;
		    return '验证码发送成功';
		}else{
			return '验证码发送失败';	
		}
	}


	public function post($curlPost,$url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_NOBODY, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
        $return_str = curl_exec($curl);
        curl_close($curl);
        return $return_str;
	}

	public function xml_to_array($xml){
	    $reg = "/<(\w+)[^>]*>([\\x00-\\xFF]*)<\\/\\1>/";
	    if(preg_match_all($reg, $xml, $matches)){
	        $count = count($matches[0]);
	        for($i = 0; $i < $count; $i++){
	        $subxml= $matches[2][$i];
	        $key = $matches[1][$i];
	            if(preg_match( $reg, $subxml )){
	                $arr[$key] = $this->xml_to_array( $subxml );
	            }else{
	                $arr[$key] = $subxml;
	            }
	        }
	    }
	    return $arr;
	}

	public function random($length = 6 , $numeric = 0) {
	    PHP_VERSION < '4.2.0' && mt_srand((double)microtime() * 1000000);
	    if($numeric) {
	        $hash = sprintf('%0'.$length.'d', mt_rand(0, pow(10, $length) - 1));
	    } else {
	        $hash = '';
	        $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
	        $max = strlen($chars) - 1;
	        for($i = 0; $i < $length; $i++) {
	            $hash .= $chars[mt_rand(0, $max)];
	        }
	    }
	    return $hash;
	}
}