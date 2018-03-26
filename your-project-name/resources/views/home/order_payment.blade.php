@extends('home.public')

@section('title', '去支付-网易考拉海购')

@section('css')

	<link rel="stylesheet" href="{{asset('home/css/My receipt.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('home/css/payment.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('home/css/zfzzr.css')}}" type="text/css">
	<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
 @section('js')
            
@endsection
	
<body @section('class', 'bgcolor="#f7f7f7"')>

	@section('content')
	

	<!-- 支付 -->
	<div class="contents">
		<div class="con_con">
			<b></b><strong>订单提交成功，现在只差最后一步啦！</strong>
			<p>请您在提交订单后尽快支付,祝您购物愉快!</p>
			<hr/>
			@foreach($input['shopping'] as $k=>$v)
			<p>{{$v['product']}}</p>
			@endforeach
			@foreach($input['personals'] as $k=>$v)
			<p>收货信息：{{$v['shdz']}}</p>
			@endforeach
			<!-- 定位  我的订单> -->
			<div class="pos_dingdan">
				<a href="{{url('home/orderform')}}">我的订单></a>
			</div>
		</div>
	
		<div class="con_zhifu">
			<div class="zhifu_con">
				<p>支付金额
				<span>￥{{$input['alljg']}}</span>
				<a id="zfpassword" style="cursor:pointer">没有/忘记支付密码?</a>
					<div class="zf">
						<div class="zf_con">
							<h2 style="padding-top:20px;">设置/修改.支付密码!</h2>
							<div class="zf_content">
								
									
									<p>新密码:<input class="zfmm" name="zfpassword" type="password"  min="6" max="6" placeholder="输入支付密码"></p>
									<p>确认密码:<input class="zfmm" name="zfpassword" type="password" min="6" max="6" placeholder="再次输入支付密码"></p>
									<button class="none" style="margin-top:28px;margin-left:22px">确认</button>
								
							</div>
							
						</div>
					</div>
				</p>
				<hr/>
				<div class="cen">
					<div class="content">
					<!--  <div class="title">支付宝支付密码：</div> -->
					 <div class="box"></div>
					 <!-- <div class="forget">忘记密码？</div> -->
					 <div class="point">请输入6位数字密码</div>
					 <!-- <button class="getPasswordBtn">一键获取密码</button> -->
					 <div class="errorPoint">请输入数字！</div>
					 
					</div>
					
						
						<input type="hidden" class="ids" name='shoppingid' value="{{$input['ids']}}">
						<input class="zhifu_value" type="hidden" name="zhifu">
						<button id="zzr" class="getPasswordBtn">去支付</button>
				</div>
			</div>
			
		</div>
	</div>
	
	
	
	@endsection
	
</body>

@section('htmljs')

<script>

	/*动态生成*/
window.onload=function(){
	document.getElementById('zfpassword').onclick=function(){
		document.getElementsByClassName('zf')[0].style.display='block';
	}

	document.getElementsByClassName('none')[0].onclick=function(){


		var zfmm1=document.getElementsByClassName("zfmm")[1].value;
			$.ajaxSetup({
		                headers: {
		                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		                }
		            })

			$.ajax({
			   type: "post",
			   url: "/home/orderform",
			   data: {
			    'zfmm1':zfmm1
			   },
			   dataType: "json",
			   success: function(msg){
			   	
			   }
			})
		document.getElementsByClassName('zf')[0].style.display='none';
	}





var box=document.getElementsByClassName("box")[0];
function createDIV(num){
 for(var i=0;i<num;i++){
  var pawDiv=document.createElement("div");
  pawDiv.className="pawDiv";
  box.appendChild(pawDiv);
  var paw=document.createElement("input");
  paw.type="password";
  paw.className="paw";
  paw.maxLength="1";
  paw.readOnly="readonly";
  pawDiv.appendChild(paw);
 }
}
createDIV(6);
 
 
 
var pawDiv=document.getElementsByClassName("pawDiv");
var paw=document.getElementsByClassName("paw");
var pawDivCount=pawDiv.length;
/*设置第一个输入框默认选中*/
pawDiv[0].setAttribute("style","border: 2px solid deepskyblue;");
paw[0].readOnly=false;
paw[0].focus();
 
var errorPoint=document.getElementsByClassName("errorPoint")[0];
/*绑定pawDiv点击事件*/
 
function func(){
 for(var i=0;i<pawDivCount;i++){
  pawDiv[i].addEventListener("click",function(){
   pawDivClick(this);
  });
  paw[i].onkeyup=function(event){
   console.log(event.keyCode);
   if(event.keyCode>=48&&event.keyCode<=57){
    /*输入0-9*/
    changeDiv();
    errorPoint.style.display="none";
 
   }else if(event.keyCode=="8") {
    /*退格回删事件*/
    firstDiv();
 
   }else if(event.keyCode=="13"){
    /*回车事件*/
    getPassword();
 
   }else{
    /*输入非0-9*/
    errorPoint.style.display="block";
    this.value="";
   }
 
  };
 }
 
}
func();
 
 
/*定义pawDiv点击事件*/
var pawDivClick=function(e){
 for(var i=0;i<pawDivCount;i++){
  pawDiv[i].setAttribute("style","border:none");
 }
 e.setAttribute("style","border: 2px solid deepskyblue;");
};
 
 
/*定义自动选中下一个输入框事件*/
var changeDiv=function(){
 for(var i=0;i<pawDivCount;i++){
  if(paw[i].value.length=="1"){
   /*处理当前输入框*/
   paw[i].blur();
 
   /*处理上一个输入框*/
   paw[i+1].focus();
   paw[i+1].readOnly=false;
   pawDivClick(pawDiv[i+1]);
  }
 }
};
 
/*回删时选中上一个输入框事件*/
var firstDiv=function(){
 for(var i=0;i<pawDivCount;i++){
  console.log(i);
  if(paw[i].value.length=="0"){
   /*处理当前输入框*/
   console.log(i);
   paw[i].blur();
 
   /*处理上一个输入框*/
   paw[i-1].focus();
   paw[i-1].readOnly=false;
   paw[i-1].value="";
   pawDivClick(pawDiv[i-1]);
   break;
  }
 }
};
 
 
 
/*获取输入密码*/
var zhifu_valueO=document.getElementsByClassName('zhifu_value')[0];

var getPassword=function(){
 var n="";
 for(var i=0;i<pawDivCount;i++){
  n+=paw[i].value;
 }
 	zhifu_valueO.value=n;
};
var getPasswordBtn=document.getElementsByClassName("getPasswordBtn")[0];
 
getPasswordBtn.addEventListener("click",getPassword);

/*键盘事件*/
document.onkeyup=function(event){
 if(event.keyCode=="13") {
  /*回车事件*/
  getPassword();
 }
}

var zzr=document.getElementById("zzr")[0];



getPasswordBtn.onclick=function(){

var zhifu_v=document.getElementsByClassName('zhifu_value')[0].value;
var idsO=document.getElementsByClassName("ids")[0].value;
	$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

	$.ajax({
	   type: "post",
	   url: "/home/orderform",
	   data: {
	    'zhifu_value':zhifu_v,
	    'ids':idsO
	   },
	   dataType: "json",
	   success: function(msg){
	   	if(msg.error=='y'){
	   		window.location.href='{{url("/home/orderform")}}';
	   	}else{
	       alert(msg.error);

	   	}
	   }
	})

}
}

</script>

@endsection