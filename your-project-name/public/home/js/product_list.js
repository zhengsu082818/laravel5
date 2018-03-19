$(function(){

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
