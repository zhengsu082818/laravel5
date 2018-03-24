$(function(){

	//去掉搜索框的value值
	$('.search_box .search').focus(function(){
		$(this).val("");
	})
	

	 $('.content2-box .content2-flbt div a').click(function(){
           $(this).addClass('selected').siblings('.content2-box .content2-flbt div a').removeClass('selected');
      })
  	
})
