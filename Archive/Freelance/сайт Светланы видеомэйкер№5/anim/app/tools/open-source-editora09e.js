
var $editor_box = $('#image_editor_box')
, $result_box = $('#image_result_box')
, $image , tools , POST = false ;


var url = String(window.location) , url = url.split('=');
if(url[1])scrollUp($editor_box); 


function tip(){
   $('.tolls').liTip({themClass:'liTipBlue'});
}

function isURL(a) {
    var b = /(^https?:\/\/)?[a-z0-9~_\-\.]+\.[a-z]{2,9}(\/|:|\?[!-~]*)?$/i;
    return b.test(a)
};

function isSupportImg(ext){
	 ext = ext.toLowerCase();
	 var Filter = /^(jpeg|jpg|png|gif)$/i;
    if (! Filter.test(ext)) return false ;
	 return true ;
};

function getDimensions(_src,_callback){
     var img = new Image();
     img.src=_src;
     img.onload = function () { _callback(img.width,img.height) };
}

function _number(x){
	return Number(x.replace (/[^0-9+]/, ''));
};


function imgDownload(a) {
    var link = document.getElementById("downloads");
    link.setAttribute("href", a);
    link.setAttribute("download", 'progif');
	if (typeof link.download != "undefined") link.click();
	else window.open(a);
};

function scrollUp(b){
	var scrollTop = b.offset().top;
	$('body, html').animate({ scrollTop: scrollTop }, 1100); 
	tip();
}

/*--------------------------------------------------------------

		обработка ошибки ввода

---------------------------------------------------------------*/

$editor_box.on('input','input[type="number"]',function(){
	
	var $number = $(this)
	, max = Number($number.attr('max'))
	, min = Number($number.attr('min'))
	, val = Number($number.val()) 
	, err = !/^\d+$/.test(val) 
	, $btn = $('#go_optimize');
	
	if(err || val > max || val < min ){
		$number.addClass('error');
		$btn.prop('disabled',true);
	} else {
		$number.removeClass('error');
		$btn.prop('disabled',false);
	}
	
});
/*------------------------------------------------------------------------------

			ЗАГРУЗКА ФАЙЛОВ НА СЕРВЕР URL

--------------------------------------------------------------------------------*/	


$('#btn_uplUrlImg').click(function(e) {
	
	$('.error-file').hide();
	
	if(POST) return;
	
 	var url = $.trim($('#uplUrlImg').val())
	, ext = url.split('.').pop()
	, $btn = $(this)
	, $filebtn = $('#input_uploud');
	
	
	if(!isURL(url)){$('#error_fileurl').show() ; return }
	
	if(!isSupportImg(ext) ){$('#error_filetype').show(); return}
	
	$filebtn.attr('disabled',true);
	
	POST = true;
	
	$btn.addClass('ico loder');
	
		$.post('/app/tools/uploud.php',{action:TOOLS,captcha:captcha,upl:'url',image:url},function(html) {
			$btn.removeClass('loder').prop('disabled',false);
			POST = false;
			$result_box.empty().append(html);
			$btn.removeClass('ico loder');
			
			$filebtn.attr('disabled',false);
			
			  scrollUp($editor_box);  
			  $result_box.empty();
			  $editor_box.empty().append(html);
			  $image = $('#image_master');

			
	   });
	
});
	
/*------------------------------------------------------------------------------

			ЗАГРУЗКА ФАЙЛОВ НА СЕРВЕР

--------------------------------------------------------------------------------*/	


$("#input_uploud").on('change', function(){ 
	
	if(POST) return;
	


 var $btn = $(this)
 , $label = $btn.parent()
 , file = $(this)[0].files[0]
 , file_size =parseFloat((file.size/1024/1024)).toFixed(2)
 , $error_filetype = $('#error_filetype')
 , $error_filesize = $('#error_filesize')
 , MAX_UPLOUD_SIZE = Number( $btn.attr('data-max') ) ;
 
 $('.error-file').hide();
 
 if ( ! file.type.match(/image\/(gif|jpeg|jpg|png)/) ){
	 
	$error_filetype.show();
	 return false ;
 };
 
 if( file_size > MAX_UPLOUD_SIZE){
	 
	$error_filesize.show();
	 return false ;
 };
 
 $btn.attr('disabled',true);
 $label.addClass('loder');

 POST = true;
 
 var formData = new FormData();
     formData.append('image', file);
     formData.append('action', TOOLS);
     formData.append('captcha', captcha);
     formData.append('upl', 'file');
 
	  $.ajax({
		  type: "POST",
		  url: '/app/tools/uploud.php',
		  cache: false,
		  contentType: false,
		  processData: false,
		  data: formData,
		  dataType : 'html',
		  success: function(html){
			  POST = false;
			  $btn.attr('disabled',false);
			  $label.removeClass('loder');
			  $btn.val('');
				  
			  scrollUp($editor_box);  
				
			  $result_box.empty();
			  $editor_box.empty().append(html);
			  
			  $image = $('#image_master');
			  
		  		  
		  },
		  error: function (xhr, status, error) {
			  var errorMessage = xhr.status + ': ' + status;
			  alert(errorMessage);
			  POST = false;
		  }
	  });
});


/*------------------------------------------------------------------------------

			ОПТИМИЗИРОВАТЬ

--------------------------------------------------------------------------------*/	

$editor_box.on('click','.optgif',function(){
	var $radio = $(this), $spoler = $radio.parent().parent().next();
	$('.opt-spoler').hide();
	$spoler.show();
});

$editor_box.on('click','#png_transparent',function(){
	if( $(this ).prop('checked')) $('#png_8_bit').prop('checked',false);
});
$editor_box.on('click','#png_8_bit',function(){
	if( $(this ).prop('checked')) $('#png_transparent').prop('checked',false);
});

$editor_box.on('click','#go_optimize',function(){
	
	if(POST)return;
	
	var  $btn = $(this) , ext = $btn.attr('data-opt'), opt = {};
	
switch (ext) {
  case 'jpg':
  case 'jpeg':
		var $quality = $('#number_jpg_quality')
		   , guality = $quality.val() 
		   , exif = $('#metaexif').prop('checked') ? 1 : 0;
		   opt = {guality:guality,exif:exif};
	
		break;
  case 'png':
		var png_8_bit = $('#png_8_bit').prop('checked') ? 1 : 0,
		    png_transparent = $('#png_transparent').prop('checked') ? 1 : 0;
		   opt = {png_8_bit:png_8_bit,png_transparent:png_transparent};
	
		break;
  case 'gif':
		var delframe = $('#delframe').prop('checked') ? 1 : 0
		, coalesce = $('#coalesce').prop('checked') ? 1 : 0
		, num_delframe = $('#num_delframe').val()
		, fuzz_frame = $('#fuzz_frame').prop('checked') ? 1 : 0
		, number_fuzz = $('#number_fuzz').val()
		, lzw_lossy = $('#lzw_lossy').prop('checked') ? 1 : 0
		, number_lossy = $('#number_lossy').val()
		, colors_frame = $('#colors_frame').prop('checked') ? 1 : 0
		, number_colors = $('#number_colors').val()
		, dither_frame = $('#dither_frame').prop('checked') ? 1 : 0
		
		
		, optimize = $('#optimize').prop('checked') ? 1 : 0 ;
		
		

		
		   opt = {
			   delframe:delframe
			   ,num_delframe:num_delframe
			   ,coalesce:coalesce
			   ,fuzz_frame:fuzz_frame
			   ,number_fuzz:number_fuzz
			   ,lzw_lossy:lzw_lossy
			   ,number_lossy:number_lossy
			   ,colors_frame:colors_frame
			   ,number_colors:number_colors
			   ,dither_frame:dither_frame
			   ,optimize:optimize
			   };
	
		break;
  default:      break;
}	
	
	
	$btn.addClass('loder').prop('disabled',true);
	POST = true;
		
	var c = { captcha:captcha };
    var data = Object.assign(c, opt);
		
	$.post('/app/tools/optimize.php',data ,function(data) {
			$btn.removeClass('loder').prop('disabled',false);
			POST = false;
			$result_box.empty().append(data);
			scrollUp($result_box);
	});
});

/*------------------------------------------------------------------------------

			Извлечь кадры GIF

--------------------------------------------------------------------------------*/	

$editor_box.on('click','#go_splitter',function(){
	
	if(POST)return;
	
	var  $btn = $(this), type = $('#typesplitter').val();
	   
		$btn.addClass('loder').prop('disabled',true);
		POST = true;
		$.post('/app/tools/splitter.php',{type:type,captcha:captcha},function(data) {
			$btn.removeClass('loder').prop('disabled',false);
			POST = false;
			$result_box.empty().append(data);
	   });
});


/*------------------------------------------------------------------------------

			Пропорционально размер изображения

--------------------------------------------------------------------------------*/	


$editor_box.on('input','.input-resize', function (e) {
	
	$image = $image || $('#image_master');
	
	var value = _number(this.value)
	, $i_width = $('#newWidthInput')
	, $i_height = $('#newHeightInput')
	, minWidth = Number($i_width.attr('min'))
	, minHeigh = Number($i_height.attr('min'))
	, maxWidth = Number($i_width.attr('max'))
	, maxHeigh = Number($i_height.attr('max'))
	, Width = Number($i_width.val())
	, Heigh = Number($i_height.val())
	, curWidth = Number($image.attr('width'))
	, curHeight = Number($image.attr('height'))

	, $input = $( this )
	, id = $input.attr('id')
	, resize_true = $('#resize_true').prop('checked');
	
	$('#defolt_size').show();
	
	if(resize_true){
	if(id == 'newWidthInput'){
		
		var ratio  =  curWidth / value ;
		
		var height =   Math.round( curHeight / ratio)  ; 
		
		$i_height.val(height); 
		
	}
	else {
		
		var ratio  =  curHeight / value ;
		
		var width =   Math.round( curWidth / ratio) ; 
		
		$i_width.val(width);
		
	}
	}
	
});

$editor_box.on('click','#defolt_size',function(){
		var width = Number($image.attr('width'))
	       , height = Number($image.attr('height')) ;
		   
		   $('#newWidthInput').val(width);
		   $('#newHeightInput').val(height);
		  
		    $('#defolt_size , #error_resize_number , .error-file').hide();
	});


$editor_box.on('click','#go_resize',function(){
	
	$('#defolt_size').hide();
	
	if(POST)return;
	
	var  $i_width = $('#newWidthInput')
		, $i_height = $('#newHeightInput')
		, width = $i_width.val()
		, height = $i_height.val()
		, $btn = $(this)
		, minWidth = Number($i_width.attr('min'))
		, minHeigh = Number($i_height.attr('min'))
		, maxWidth = Number($i_width.attr('max'))
		, maxHeigh = Number($i_height.attr('max'))
		, coalesce = $('#Coalesce').prop('checked') ? 1 : 0
		, thumbnail = $('#Thumbnail').prop('checked') ? 1 : 0
		, $error = $('#error_resize_number');
		
		if(width < minWidth || width > maxWidth || height < minHeigh || height > maxHeigh   ){
			$('#defolt_size').show();
			$error.show();
			return false;
		}
		else $error.hide();
	   
		$btn.addClass('loder').prop('disabled',true);
		POST = true;
		$.post('/app/tools/resize.php',{width:width,height:height,captcha:captcha,coalesce:coalesce,thumbnail:thumbnail},function(data) {
			$btn.removeClass('loder').prop('disabled',false);
			POST = false;
			$result_box.empty().append(data);
			scrollUp($result_box);

	   });

	
	
})









