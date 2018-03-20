@extends('home.public')

@section('title', '购物车-网易考拉海购')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('home/css/payment.css')}}" type="text/css">
@show

     <!-- 导入外部js -->
@section('js')
    
    
@endsection

@section('content')
<!-- 支付 -->
    <div class="contents">
        <div class="con_con">
            <b></b><strong>订单提交成功，现在只差最后一步啦！</strong>
            <p>请您尽快完成支付，祝您购物愉快！</p>
            <hr/>
            <p>ACQUA ALLE ROSE 玫瑰爽肤水 300毫升</p>
            <p>收货信息：山西省,太原市,小店区,山西太原市小店区,zzr，手机：132****7856</p>

            <!-- 定位  我的订单> -->
            <div class="pos_dingdan">
                <a href="">我的订单></a>
            </div>
        </div>
    
        <div class="con_zhifu">
            <div class="zhifu_con">
                <form action='{{url("home/shopping")}}' method="post">
                  {{ csrf_field() }}
                    <p>支付金额
                    <span>￥{{$list['alljg']}}</span>
                    <a href="">没有/忘记支付密码?</a>
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
                        @if (Session::get('mes'))
                          <h3 style="color:red;margin:0 auto;">支付密码错误,请重试...</h3>
                        @endif
                            <input class="zhifuvalue" type="hidden" name="zhifu">
                            <input class="idsvalue" type="hidden" value="{{$list['ids']}}" name="ids">
                            <button onclick="getPassword();" class="getPasswordBtn">去支付</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

    <!-- 底部结束 -->
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
    <!-- 侧边栏 -->
    <div id="side">
        <div class="erweima block">
            <img src="../images/index_images/phone.png" width="25">
            <p>
                <img src="../images/index_images/ewm.jpg">
            </p>
        </div>
        <div class="service block">
            <img src="../images/index_images/service.png" width="25">
            <p>
                <span class="txt">客服电话</span>
                <span class="phone">400-800-8820</span>
                <span class="line"></span>
                <a href="javascript:;" class="btn">在线客服</a>
            </p>
        </div>
        <div class="top block" style="display: none;"><a href="#"><img src="../images/index_images/top.png" width="21"></a></div>
    </div>
@endsection


<!--  内外部js -->
@section('htmljs')
<script>
    /*动态生成*/
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
    var zhifu_valueO=document.getElementsByClassName('zhifuvalue')[0];

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
    };
</script>
@show

