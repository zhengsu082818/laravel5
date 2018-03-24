$(function(){
      $('label').click(function(){
      	$('input').each(function(a){
                  if($('input[type="checkbox"]').eq(a).prop('checked')){
                   	    $('input[type="checkbox"]').eq(a).removeProp('checked');
                        $('.close').find('a').css({cursor:'not-allowed',background:'#ccc'});
                  }else{
                   	  $('input[type="checkbox"]').eq(a).prop('checked',true);
                   	  $('.close').find('a').css({cursor:'pointer',background:'red'});

                  }
      	})
      })

     
})