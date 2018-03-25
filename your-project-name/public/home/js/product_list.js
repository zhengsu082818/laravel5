$(function(){

	//去掉搜索框的value值
	$('.search_box .search').focus(function(){
		$(this).val("");
	})
	$('.search_box .search').blur(function(){
		$(this).val("男士面膜");
	})

	

  	
})
