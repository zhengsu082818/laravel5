@extends('layouts.homemaster')

@section('title', '网易考拉海购-提交订单')

@section('css js')

	<link rel="stylesheet" href="{{asset('static/css/Purchase page.css')}}" type="text/css">
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="keywords" content="jQuery省市区三级联动" />
	<meta name="description" content="jQuery实现省、市、区三级联动的代码网上应该已经挺多了，今天群里一名成员投了篇关于省、市、区三级联动的实现代码，不同的一点是他将代码片段封装成了jQuery插件。" />

	<link href="{{asset('static/css/Province_css/city.css')}}" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="{{asset('static/js/My Receiving address.js/jquery.min_1.js')}}"></script>
	<script type="text/javascript" src="{{asset('static/js/My Receiving address.js/city.min.js')}}"></script>
	
@endsection


	@section('content')
	
	<!-- 标头 -->
	<div class="header">
		<div class="header-cont">
			<div class="hc-box1">
				<span>您好,137****9028</span>
				<b>丨</b>
				<a href="login.html">退出</a>
			</div>
			<div class="hc-box2">
				<img src="../images/index_images/phone2.png" class="shouji">
				<a href="">手机考拉海购</a>
				<div class="app">
					<img src="../images/index_images/erweima.jpg">
				</div>
			</div>
			<ul>
				<li class="default">
					<a href="My orders.html">我的订单</a>
				</li>
				<span>丨</span>
				<li class="second">
					<a href="My orders.html">个人中心</a>
					<img src="../images/index_images/sanjiao.png">
					<div class="per_cen">
						<a href="My Account management.html">完善个人信息</a>
						<a href="My Receiving address.html">管理收货地址</a>
					</div>
				</li>
				<span>丨</span>
				<li class="third">
					<a href="">客户服务</a>
					<img src="../images/index_images/sanjiao.png">
					<div class="per_cen">
						<a href="">联系客服</a>
						<a href="">帮助中心</a>
					</div>
				</li>
				<span>丨</span>
				<li>
					<a href="">消费者告知书</a>
				</li>
				<span>丨</span>
				<li class="lastli">
					<a href="">更多</a>
					<img src="../images/index_images/sanjiao.png">
					<div class="per_more">
						<a href="">关于我们</a>
						<a href="">品牌招商</a>
						<a href="">考拉招聘</a>
						<a href="">官方博客</a>
					</div>
				</li>
			</ul>
		</div>	
	</div>
	<!-- login-->
	<div class="log-box">
		<div class="login">
			<a href="index.html">
				<img src="../images/logres_images/login.jpg">
			</a>
		</div>
	</div>
	<!-- 选择收货地址 -->
	<div class="address">
		<div class="address-one">
			<h3 style="color:#000;">选择收货地址</h3>
		</div>
		<div class="xzshdi">
				<div style="margin-left: 96px;">
					<span>
						<b>*</b> 所在地区
			            <div class="infolist" style="margin-left:20px; margin-top: -14px;">
			                <div class="liststyle" style="margin-left:0;">
			                    <span id="Province" >
			                        <i>请选择省份</i>
			                        <ul style="height:200px;overflow:auto;">
			                            <li><a href="javascript:void(0)" alt="请选择省份">请选择省份</a></li>
			                        </ul>
			                        <input type="hidden" name="cho_Province" value="请选择省份">
			                    </span>
			                    <span id="City">
			                        <i>请选择城市</i>
			                       <ul style="height:200px;overflow:auto;">
			                            <li><a href="javascript:void(0)" alt="请选择城市">请选择城市</a></li>
			                        </ul>
			                        <input type="hidden" name="cho_City" value="请选择城市">
			                    </span>
			                    <span id="Area">
			                        <i>请选择地区</i>
			                        <ul style="height:200px;overflow:auto;">
			                            <li><a href="javascript:void(0)" alt="请选择地区">请选择地区</a></li>
			                        </ul>
			                        <input type="hidden" name="cho_Area" value="请选择地区">
			                    </span>
			                </div>
			            </div>
					</span>
				</div>
				<div style="margin-left: 94px;">
					<span class="ziti">
						<b>*</b> 详细地址<input type="text" style="height: 70px;" placeholder="请填写详细地址信息">
					</span>
				</div>
				<div>
					<span class="ziti">
						<b>*</b> 收货人姓名<input type="text" placeholder="请使用真实姓名">
					</span>
				</div>
				<div style="margin-left: 94px;">
					<span class="ziti">
						<b>*</b> 手机号码<input type="text" placeholder="手机号码必须填">
					</span>
				</div>
				<div style="margin-left: 132px;">
					<span class="ziti">
						邮箱<input type="text" placeholder="接受订单提醒邮件，便于您及时了解订单状态">
					</span>
				</div>
				<a href=""><button>保存新地址</button></a>
			</div>
	</div>
	<!-- 确定商品信息 -->
	<div class="information">
		<div class="information-one">
			<h3 style="color:#000;">确认商品信息</h3>
		</div>
		<div class="information-two">
			<span style="width: 400px; margin-left: 30px;">商品信息</span>
			
			<span style="width: 200px;">单价(元)</span>
			<span style="width: 200px;">数量</span>
			<span style="width: 200px;">金额(元)</span>
		</div>
		
		
		<div class="information-five" >
			<div style="width: 400px; margin-left: 30px;">
				<img src="../images/product_details/details2.jpg">
				<p style="margin-top: 24px;">Avène 雅漾 舒护活泉水喷雾 300毫升 大喷 人手一只</p>
				<p> 支持7天无忧退货</p>
			</div>
			
			<div style="width: 200px;margin-top: 24px;">
				<p>98.00</p>
			</div>
			<div style="width: 200px;margin-top: 24px;">
				<p>1</p>
			</div>
			<div style="width: 200px;margin-top: 24px;">
				<p><b>98.00</b></p>
			</div>
		</div>
	</div>
	<!-- 提交订单 -->
	<div class="Submit">
		<div class="Submit-one" style="margin-top: 30px;">
			<p>商品应付总计金额：</p><p>¥98.00</p>
		</div>
		
		<div class="Submit-one">
			<p style="margin-top: 6px;">总计金额：</p><b>¥98.00</b>
		</div>
		<div class="Submit-two">
			<a href="shopcar.html"><span>返回购物车修改</span></a>
			<button><a href="">提交订单</a></button>
		</div>
	</div>
	<!-- 底部1 -->
	<div class="foot-one-box" style="margin-top: 50px">
		<!--  正品保证-->
		<div class="zpbz-box">
			<ul>
				<li>
					<div class="zpbz-one-box">
						<img src="../images/index_images/zhp1.png">
						<div class="zpbz-cont">
							<strong>100%正品</strong>
							<p>正品保障 假一赔十</p>
						</div>
					</div>
				</li>
				<li>
					<div class="zpbz-one-box">
						<img src="../images/index_images/zhp2.png">
						<div class="zpbz-cont">
							<strong>低价保障</strong>
							<p>缩减中间环节 确保低价</p>
						</div>
					</div>
				</li>
				<li>
					<div class="zpbz-one-box">
						<img src="../images/index_images/zhp3.png">
						<div class="zpbz-cont">
							<strong>30天无忧退货</strong>
							<p>国内退货 售后无忧</p>
						</div>
					</div>
				</li>
				<li>
					<div class="zpbz-one-box">
						<img src="../images/index_images/zhp4.png">
						<div class="zpbz-cont">
							<strong>满88包邮</strong>
							<p>部分特殊商品除外</p>
						</div>
					</div>
				</li>
			</ul>
		</div>

		<!-- 关于我们 -->
		<div class="about-box" style="margin-top: 100px">
			<ul>
				<li class="about-one">
					<a href="">
						<img src="../images/logres_images/login.jpg">
					</a>
					<div>
						<span>关注我们</span>
						<img src="../images/logres_images/weixin.png">
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
					<img src="../images/logres_images/ewm.jpg">
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
				<img src="../images/logres_images/login6.jpg">
				<img src="../images/logres_images/login7.jpg">
				<img src="../images/logres_images/jinghui.png">
			</div>
		</div>
	</div>
	
	@endsection