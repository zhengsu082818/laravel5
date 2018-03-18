$(function(){

	//手机app
	$(".box1 a:last").mouseover(function(){
		$('.app').show();
	})
	$(".box1 a:last").mouseout(function(){
		$('.app').hide();
	})

	//去掉搜索框的value值
	$('.search_box .search').focus(function(){
		$(this).val("");
	})
	$('.search_box .search').blur(function(){
		$(this).val("男士面膜");
	})

	// 上下滚动
	$(window).scroll(function(){
       	if($(window).scrollTop()>100){
             $('.sxgd').css('display','block');
             $('.sxgd').css('width','100%');
       	}else if($(window).scrollTop()<=30){
             $('.sxgd').css('display','none');
        }
  })

	// 轮播
	var time = null;
	var time1 = null;
	var index1 = 0;

	$('.banner-box ol li').click(function(){
		$(this).addClass('selected').siblings().removeClass('selected');
		var index = $(this).index();
		index1 = index;
		$('.banner-box ul li').eq(index).show().siblings().hide();
	})
	//自动轮播的实现
  function fade(){
 		if(index1 == 5){
    	    index1 = 0;
 		}else{
 			index1++;
 		}

    $('.banner-box ol li').eq(index1).addClass('selected').siblings().removeClass('selected');
    $('.banner-box ul li').eq(index1).show().siblings().hide();
  }
	//每隔3s切换图片
	time1 = setInterval(fade,3000);

	//鼠标移入每个小图片
	$('.banner-box ol li').mouseover(function(){
    	var _this = $(this);
    	//延迟0.3秒后执行
    	time = setTimeout(function(){
        _this.addClass('selected').siblings().removeClass('selected');
    	  var index = _this.index();
    	  index1 = index;
    	  $('.banner-box ul li').eq(index).show().siblings().hide();
    	},300)
    }).mouseout(function(){
    	//鼠标移出清楚延迟定时器
    	clearTimeout(time);
	})

    //左箭头的方法
	function fadeLeft(){
       if(index1 == 0){
          index1 = 5;
       }else{
       	 index1--;
       }
      $('.banner-box ol li').eq(index1).addClass('selected').siblings().removeClass('selected');
	  $('.banner-box ul li').eq(index1).show().siblings().hide();
	}

	//鼠标移入暂停，鼠标移出继续
  $('.banner-box').hover(function(){
      clearInterval(time1);
     
      $('.banner-box .arrow').css('display','block');
  },function(){
      time1 = setInterval(fade,3000);
     $('.banner-box .arrow').css('display','none');
  })

//点击左箭头的实现
  $('.banner-box .leftjt').click(function(){
  	fadeLeft();
  })
  //点击右箭头的实现
  $('.banner-box .right').click(function(){
  	fade();
  })


  //侧边栏
  $('.ce-box .cbl li').mouseover(function(){
  	 var zs = $(this);
  	 zs.css("background","#555 url(../images/index_images/bg-1.png) no-repeat").siblings().css("background", "rgba(15,15,15,0.82)");
    }).mouseout(function(){
	   var zs = $(this);
	   zs.css("background", "rgba(15,15,15,0.82)");
  })

  

  //热门品牌换一换
  var pinpai = 0;
  $('.day-title .hyh').click(function(){
    if(pinpai == $('.day-box .rm ul').length-1){
      pinpai = 0;
    }else{
      pinpai++;
    }
    $('.day-box .rm ul').eq(pinpai).show().siblings('.day-box .rm ul').hide();
  })

  //美妆换一换
  var mzhyh = 0;
  $('.mz-three-tit .hyh2').click(function(){
      if(mzhyh == $('.mz-three .mz-three-img').length-1){
       mzhyh = 0;
      }else{
        mzhyh++;
      }
      $('.mz-three .mz-three-img').eq(mzhyh).show().siblings('.mz-three .mz-three-img').hide();
  })

  //母婴换一换
  var myet = 0;
  $('.mz-three-tit .hyh3').click(function(){
      if(myet == $('.mz-three .myet').length-1){
       myet = 0;
      }else{
        myet++;
      }
      $('.mz-three .myet').eq(myet).show().siblings('.mz-three .myet').hide();
  })

  //手表配饰
  var sbps = 0;
  $('.mz-three-tit .hyh4').click(function(){

      if(sbps == $('.watch-three-box ul').length-1){
       sbps = 0;
      }else{
        sbps++;
      }
      $('.watch-three-box ul').eq(sbps).show().siblings('.watch-three-box ul').hide();
  })

  // ++++++++++++侧边栏切换效果+++++++++++++++++
    $('#side .block').hover(function(){
        $(this).children('p').toggle();
    })
    // ++++++++++++快速回顶部图标的隐藏和显示+++++++++++++++++
    $(window).scroll(function(){
        if($(window).scrollTop() > 1000){
            $('#side > .top').show();
        }else{
            $('#side > .top').hide();
        }
    })
})