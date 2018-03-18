@extends('layouts.homemaster')

@section('title', '网易海购-美容彩妆_基础护肤_洁面')

@section('css js')
    <script type="text/javascript" src="{{asset('static/js/product_list.js')}}"></script>
    <link rel="stylesheet" href="{{asset('static/css/product_list.css')}}" type="text/css">
@endsection

 
    @section('content')
		
	@include('home.comment')

	<!-- 分类表头 -->
	<p class="fjx"></p>

	<!-- 内容区域 -->
	<div class="content-box">
		<div class="content1-box">
			<div>
				<a href=""><span>首页 ></span></a>
				<a href=""><span>美容彩妆 ></span></a>
				<a href=""><span>护肤</span></a>
			</div>
		</div>
		<div class="content2-box">
			<div class="content2-flbt">
				<div>
					<span>品牌&nbsp;&nbsp;:</span>
					<a href="">资生堂</a>
					<a href="">雅诗兰黛</a>
					<a href="">曼秀雷敦</a>
					<a href="">兰蔻</a>
					<a href="">玉兰油</a>
					<a href="">宝丽</a>
					<a href="">兰芝</a>
				</div>
				<div>
					<span>分类&nbsp;&nbsp;:</span>
					<a href="">洁面</a>
					<a href="">爽肤水</a>
					<a href="">面霜</a>
					<a href="">乳液/凝胶</a>
					<a href="">护肤套装</a>
					<a href="">唇部护理</a>
					<a href="">精油放疗</a>
					<a href="">手足护理</a>
					<a href="">眼部护理</a>
					<a href="">面部护肤</a>
					<a href="">班博</a>
				</div>
				<div>
					<span>功能&nbsp;&nbsp;:</span>
					<a href="">补水保湿</a>
					<a href="">提亮肤色</a>
					<a href="">滋润</a>
					<a href="">舒缓皮肤</a>
					<a href="">深度保湿</a>
					<a href="">深层清理</a>
					<a href="">提拉紧致</a>
					<a href="">美白</a>
					<a href="">修复</a>
				</div>
			</div>
			<div class="content2-xuanxiang">
				<div class="content2-list">
					<ul>
						<li>
							<a href="shopcar.html"><img src="../images/product_list/zonghe1.jpg"></a>
							<div class="list-one">
								<span>¥<b>59</b></span><del>¥98</del>
								<p><a href="">mandom 曼丹 眼唇专用卸妆液 145毫升 平价中的战斗机</a></p>
							</div>
							<div class="list-two">
								<img src="../images/product_list/comments.png">
								<a href=""><b>23616</b></a>
								<span>日本</span>
							</div>
							<div class="list-three">
								<span>网易考拉自营</span>
							</div>
						</li>
						<li>
							<a href=""><img src="../images/product_list/zonghe2.jpg"></a>
							<div class="list-one">
								<span>¥<b>176</b></span><del>¥258</del>
								<p><a href="">【报销税费】Papa recipe 春雨 蜂蜜补水保湿面膜 25克/片 10片装*2</a></p>
							</div>
							<div class="list-two">
								<img src="../images/product_list/comments.png">
								<a href=""><b>77635</b></a>
								<span>韩国</span>
							</div>
							<div class="list-three">
								<span>网易考拉自营</span>
							</div>
						</li>
						<li>
							<a href=""><img src="../images/product_list/zonghe3.jpg"></a>
							<div class="list-one">
								<span>¥<b>44</b></span><del>¥110</del>
								<p><a href="">SHISEIDO 资生堂 UNO 男士洗面奶 黑炭控油型 130克</a></p>
							</div>
							<div class="list-two">
								<img src="../images/product_list/comments.png">
								<a href=""><b>21393</b></a>
								<span>日本</span>
							</div>
							<div class="list-three">
								<span>网易考拉自营</span>
							</div>
						</li>
						<li>
							<a href=""><img src="../images/product_list/zonghe4.jpg"></a>
							<div class="list-one">
								<span>¥<b>55</b></span><del>¥99</del>
								<p><a href="">【空调房保湿必备 平价大碗不心疼】evian 依云 保湿舒缓矿泉水喷雾 300毫升</a></p>
							</div>
							<div class="list-two">
								<img src="../images/product_list/comments.png">
								<a href=""><b>12718</b></a>
								<span>法国</span>
							</div>
							<div class="list-three">
								<span>网易考拉自营</span>
							</div>
						</li>
						<li>
							<a href=""><img src="../images/product_list/zonghe5.jpg"></a>
							<div class="list-one">
								<span>¥<b>159</b></span><del>¥596</del>
								<p><a href="">A.H.C 第二代B5玻尿酸补水保湿控油爽肤水乳组合</a></p>
							</div>
							<div class="list-two">
								<img src="../images/product_list/comments.png">
								<a href=""><b>26298</b></a>
								<span>韩国</span>
							</div>
							<div class="list-three">
								<span>网易考拉自营</span>
							</div>
						</li>
						<li>
							<a href=""><img src="../images/product_list/zonghe6.jpg"></a>
							<div class="list-one">
								<span>¥<b>229</b></span><del>¥398</del>
								<p><a href="">2件装 | EltaMD 氨基酸泡沫卸妆洁面乳 207毫升</a></p>
							</div>
							<div class="list-two">
								<img src="../images/product_list/comments.png">
								<a href=""><b>8884</b></a>
								<span>美国</span>
							</div>
							<div class="list-three">
								<span>网易考拉自营</span>
							</div>
						</li>
						<li>
							<a href=""><img src="../images/product_list/zonghe7.jpg"></a>
							<div class="list-one">
								<span>¥<b>187</b></span><del>¥480</del>
								<p><a href="">Dr.Jart+ 蒂佳婷宛若新生水漾保湿急救面膜 5片/盒 3盒装</a></p>
							</div>
							<div class="list-two">
								<img src="../images/product_list/comments.png">
								<a href=""><b>25800</b></a>
								<span>韩国</span>
							</div>
							<div class="list-three">
								<span>网易考拉自营</span>
							</div>
						</li>
						<li>
							<a href=""><img src="../images/product_list/zonghe8.jpg"></a>
							<div class="list-one">
								<span>¥<b>169</b></span><del>¥395</del>
								<p><a href="">DoMeCare 欣兰 黑里透白冻膜 225g+城野医生水 100ml</a></p>
							</div>
							<div class="list-two">
								<img src="../images/product_list/comments.png">
								<a href=""><b>29216</b></a>
								<span>中国台湾</span>
							</div>
							<div class="list-three">
								<span>网易考拉自营</span>
							</div>
						</li>
						<li>
							<a href=""><img src="../images/product_list/zonghe9.jpg"></a>
							<div class="list-one">
								<span>¥<b>175</b></span><del>¥396</del>
								<p><a href="">【关晓彤同款】芭妮兰卸妆膏卸妆霜100毫升/罐2罐装</a></p>
							</div>
							<div class="list-two">
								<img src="../images/product_list/comments.png">
								<a href=""><b>20242</b></a>
								<span>韩国</span>
							</div>
							<div class="list-three">
								<span>网易考拉自营</span>
							</div>
						</li>
						<li>
							<a href=""><img src="../images/product_list/zonghe10.jpg"></a>
							<div class="list-one">
								<span>¥<b>92</b></span><del>¥198</del>
								<p><a href="">【关晓彤同款】banila co. 芭妮兰 致柔卸妆膏卸妆霜 100毫升</a></p>
							</div>
							<div class="list-two">
								<img src="../images/product_list/comments.png">
								<a href=""><b>41014</b></a>
								<span>韩国</span>
							</div>
							<div class="list-three">
								<span>网易考拉自营</span>
							</div>
						</li>
						<li>
							<a href=""><img src="../images/product_list/zonghe11.jpg"></a>
							<div class="list-one">
								<span>¥<b>198</b></span><del>¥320</del>
								<p><a href="">ORIGINS 悦木之源 灵芝焕能精华水 菌菇水 200毫升</a></p>
							</div>
							<div class="list-two">
								<img src="../images/product_list/comments.png">
								<a href=""><b>5813</b></a>
								<span>美国</span>
							</div>
							<div class="list-three">
								<span>网易考拉自营</span>
							</div>
						</li>
						<li>
							<a href=""><img src="../images/product_list/zonghe12.jpg"></a>
							<div class="list-one">
								<span>¥<b>147</b></span><del>¥398</del>
								<p><a href="">Dr. Ci:Labo 城野医生 卓效收敛化妆水 限量版 200毫升</a></p>
							</div>
							<div class="list-two">
								<img src="../images/product_list/comments.png">
								<a href=""><b>28991</b></a>
								<span>日本</span>
							</div>
							<div class="list-three">
								<span>网易考拉自营</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="content2-fenye">
					分页
				</div>
				<!-- 最近浏览 -->
				<div class="caicai">
					<div class="personal">
						<div class="personal-guess">
							<h3>最近浏览
								<span>你最近一段时间浏览的商品</span>
							</h3>
						</div>
						<div class="personal-commodity">
							<div class="commodity-one">
								<a href=""><img src="../images/personal_images/1.jpg"></a>
								<p><a href=""><span>4包装</span> | 【官方直采】moony 尤妮佳 M 64片/包 4包装 纸尿裤/尿</a></p>
								<p style="margin-top: 6px;"><b>¥316</b><del>¥784</del></p>
								<p><a href="" style="color:#aaa;">35567 人已评价</a></p>
							</div>
							<div class="commodity-two">
								<a href=""><img src="../images/personal_images/2.jpg"></a>
								<p><a href="">Skechers斯凯奇情侣男女新款熊猫鞋 D'lites时尚潮鞋运动鞋8888</a></p>
								<p style="margin-top: 6px;"><b>¥549</b><del>¥549</del></p>
								<p><a href="" style="color:#aaa;">157 人已评价</a></p>
							</div>
							<div class="commodity-three">
								<a href=""><img src="../images/personal_images/3.jpg"></a>
								<p><a href="">Apple 苹果 iPhone X 64GB 移动联通电信4G手机 国内行货</a></p>
								<p style="margin-top: 6px;"><b>¥8088</b><del>¥8300</del></p>
								<p><a href="" style="color:#aaa;">753 人已评价</a></p>
							</div>
							<div class="commodity-four">
								<a href=""><img src="../images/personal_images/4.jpg"></a>
								<p><a href="">JAYJUN 水光樱花童颜新生焕白面膜 三部曲 25毫升/片 10片/盒</a></p>
								<p style="margin-top: 6px;"><b>¥109</b><del>¥248</del></p>
								<p><a href="" style="color:#aaa;">32243 人已评价</a></p>
							</div>
							<div class="commodity-five">
								<a href=""><img src="../images/personal_images/5.jpg"></a>
								<p><a href="">【预售特价】化妆刷套刷日常妆容 5支装</a></p>
								<p style="margin-top: 6px;"><b>¥129</b><del>¥199</del></p>
								<p><a href="" style="color:#aaa;">535 人已评价</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	@endsection