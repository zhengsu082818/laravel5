<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="../home/css/register.css">
</head>
<body>
  <form method="post" action="{{url('http://106.ihuyi.com/webservice/sms.php?method=Submit')}}">
  		{{ csrf_field() }}
	<div class="logo">
		<a href="index.html"><img class="one" src="../home/images/logres_images/login1.jpg"></a>
		<img class="two" src="../home/images/logres_images/login2.jpg">
	</div>
	<div class="content">
		<div>
			<a href="index.html"><img src="../home/images/logres_images/login3.jpg"></a>
			<div class="login">
				<div>
					<h3>找回密码
					</h3>
				</div>
				<div class="Login_yan">
					<div class="Login_yanzheng">
						<input  type="text" name="phone"  placeholder="请输入手机号">
						<!-- <input type="password" name="password" placeholder="请输入密码">
						<input type="password" name="password_confirmation" placeholder="请再次输入密码"> -->
						<input class="erge"  type="text" name="captcha"  placeholder="请输入短信验证码" style="float: left;width: 40%">
						<input id="zphone" type="button" value=" 发送手机验证码 " style="width: 50%;height: 35px;margin-left: 10px;">
						<button class="denglu" >注册</button>
						<p>我同意<a href=""><<服务条款>></a>和<a href=""><<网易隐私政策>></a></p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 底 -->
	<div class="foot-two-box">
		<div class="foot-two-cont">
			<p>
				<a href="">About NetEase -</a>
				<a href="">公司简介 -</a>
				<a href="">联系方法 -</a>
				<a href="">友情链接 -</a>
				<a href="">招聘信息 -</a>			
				<a href="">客户服务 -</a>
				<a href="">隐私政策 -</a>			
				<a href="">网络营销 -</a>			
				<a href="">网站新闻</a>
			</p>
			<p>
				<span>
					网络文化经营许可证：浙网文[2016]0155-055号
				</span>
				<span> 
					增值电信业务经营许可证：浙B2-20160288 
				</span>
				<span>自营经营者信息</span>
			</p>
			<p>
				<a href="">
					浙公网安备 33010802002216号
				</a>
				<span> 
					网易公司版权所有©1997-2018 
				</span>
				<a href="">互联网药品信息服务资格证书编号（浙）-2017-0027</a>
			</p>
			<div>
				<img src="../home/images/logres_images/login6.jpg">
				<img src="../home/images/logres_images/login7.jpg">
				<img src="../home/images/logres_images/jinghui.png">
			</div>
		</div>
	</div>
 </form>
</body>
</html>