$(function() {

	if($.cookie('newcom')){
		var id = $.cookie('newcom') ;
        $.cookie('newcom', 0, { expires: -7, path: '/' });
		var $comm = $('#comm_row_'+id);
		if($comm.length)
		$('html,body').animate({
			scrollTop: $('#comm_row_'+id).offset().top - 50 },500,function(){
		 });
	}

$('#listComment').on('click','.previous_comm',function(){
	if(POST) return ;
	var $btn = $(this), $box = $btn.parent() , 
	next = $('.comm_parent').length , 
	page = $('#commentPage').val(), 
	url = $('#commentForm').attr('action') ;
	
	$btn.addClass('loder');
	
	POST = true;
	
	$.post(url,{
		Compage: page ,
		Comnext:next
	}, function(val) {
		POST = false ;
		$box.remove();
		$('#listComment').append(val);
		
	})

})

$('#commentForm').on("input",function(e){
	 
 var text =  $.trim($('#commenttext').val()) , $btn = $('#commentformbtn');
 if( text.length > 6 ) $btn.prop('disabled', false).removeClass('disabled');
 else $btn.prop('disabled', true).addClass('disabled');
 
})

checkFormComm = function (){
	$('#commcaptcha').val(captcha);
	$('#commentformbtn').addClass('loder');
	return true ;
}

$('#listComment').on('click','span.comAnsver',function(){
		var btn = $(this) , id = btn.attr('data-id'); 
		$('#commentextra_box').hide();
		$('#commentShowForm , #listComment div.comm-box-btn').show();
		$(' #comm-box-btn-'+id).hide();
		$('#commFor').val(id);
		$('#backFormBtn').show();
		$('#comm_parent_'+id).append( $('#commentForm') );
		
	})

   $('.backForm').click(function(e) {
	   $('#commFor').val('new');
	   $('.comm-box-btn , #commentextra_box').show();
	   $('#backFormBtn  , #commentShowForm').hide();
	   $('#commentFormBox').append( $('#commentForm') );
	   
	})

 $('.commtype').click(function(e) {
	 var $btn = $(this),
	 val = $btn.attr('id');
	 $('.commtype').removeClass('select');
	 $btn.addClass('select');
	 $('#commType').val(val);
 })


/*----------------------------------------------------------------------*/
})





