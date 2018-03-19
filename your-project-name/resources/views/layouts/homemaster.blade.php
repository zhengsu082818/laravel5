<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	
	<link rel="icon" href="{{asset('static/images/index_images/log_tb.jpg')}}">
	<script type="text/javascript" src="{{asset('static/js/jquery.js')}}"></script>
	
	@section('css js')
		
    @show
</head>
<body @yield('class')>

	 <!-- 内容 -->
    @section('content')
            
    @show

	
	<!-- 底部1 -->
	<div class="foot-one-box">
		<!--  正品保证-->
		<div class="zpbz-box">
			<ul>
				<li>
					<div class="zpbz-one-box">
						<img src="{{asset('static/images/index_images/zhp1.png')}}">
						<div class="zpbz-cont">
							<strong>100%正品</strong>
							<p>正品保障 假一赔十</p>
						</div>
					</div>
				</li>
				<li>
					<div class="zpbz-one-box">
						<img src="{{asset('static/images/index_images/zhp2.png')}}">
						<div class="zpbz-cont">
							<strong>低价保障</strong>
							<p>缩减中间环节 确保低价</p>
						</div>
					</div>
				</li>
				<li>
					<div class="zpbz-one-box">
						<img src="{{asset('static/images/index_images/zhp3.png')}}">
						<div class="zpbz-cont">
							<strong>30天无忧退货</strong>
							<p>国内退货 售后无忧</p>
						</div>
					</div>
				</li>
				<li>
					<div class="zpbz-one-box">
						<img src="{{asset('static/images/index_images/zhp4.png')}}">
						<div class="zpbz-cont">
							<strong>满88包邮</strong>
							<p>部分特殊商品除外</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<!-- 关于我们 -->
		<div class="about-box">
			<ul>
				<li class="about-one">
					<a href="">
						<img src="{{asset('static/images/logres_images/login.jpg')}}">
					</a>
					<div>
						<span>关注我们</span>
						<img src="{{asset('static/images/logres_images/weixin.png')}}">
					</div>
				</li>
				<li class="about-two">
					<dl>
						<dt>新手指南</dt>
						<dd>
							<a target="_blank" href="">购物流程</a>
						</dd>
						<dd>
							<a target="_blank" href="">支付方式</a>
						</dd>
						<dd>
							<a target="_blank" href="">常见问题</a>
						</dd>
					</dl>
				</li>
				<li class="about-two">
					<dl>
						<dt>售后服务</dt>
						<dd>
							<a target="_blank" href="">退货流程</a>
						</dd>
						<dd>
							<a target="_blank" href="">退货政策</a>
						</dd>
						<dd>
							<a target="_blank" href="">退款说明</a>
						</dd>
						<dd>
							<a target="_blank" href="">联系客服</a>
						</dd>
					</dl>
				</li>
				<li class="about-two">
					<dl>
						<dt>物流配送</dt>
						<dd>
							<a target="_blank" href="">配送方式</a>
						</dd>
						<dd>
							<a target="_blank" href="">配送服务</a>
						</dd>
						<dd>
							<a target="_blank" href="">物流跟踪</a>
						</dd>
						<dd>
							<a target="_blank" href="">运费标准</a>
						</dd>
					</dl>
				</li>
				<li class="about-two">
					<dl>
						<dt>关于我们</dt>
						<dd>
							<a target="_blank" href="">联系我们</a>
						</dd>
						<dd>
							<a target="_blank" href="">海购直销</a>
						</dd>
						<dd>
							<a target="_blank" href="">销售联盟</a>
						</dd>
						<dd>
							<a target="_blank" href="">招商合作</a>
						</dd>
					</dl>
				</li>
				<li class="about-two">
					<dl>
						<dt>关于我们</dt>
						<dd>
							<a target="_blank" href="">假一赔十</a>
						</dd>
						<dd>
							<a target="_blank" href="">廉正监督</a>
						</dd>
					</dl>
				</li>
				<li>
					<img src="{{asset('static/images/logres_images/ewm.jpg')}}">
					<p>扫描下载手机版</p>
				</li>
			</ul>
		</div>
	</div>

	<!-- 底部2 -->
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
				<img src="{{asset('static/images/logres_images/login6.jpg')}}">
				<img src="{{asset('static/images/logres_images/login7.jpg')}}">
				<img src="{{asset('static/images/logres_images/jinghui.png')}}">
			</div>
		</div>
	</div>

	
</body>
</html>

@section('srcjs')
		
@show