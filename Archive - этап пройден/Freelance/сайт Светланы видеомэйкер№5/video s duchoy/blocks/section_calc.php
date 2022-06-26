	


 
 <script type="text/javascript">
$(function() {

  $(document).on('click', '.inputTN__bottom', function(){
    let total = $(this).prev().prev();
    if ( total.val() >= 1 ) {
      total.val(+total.val() - 1);
	  
	 
	  
    }
  });
  
  

  $(document).on('click', '.inputTN__top', function(){
    let total = $(this).prev()
    total.val(+total.val() + 1);
	
	
	
	
  });


});


</script> 



 


 
<div class="section_border   ">

 <div class="section_border-kontur   ">

	
		<div class="section_calc text-center "  onClick=" calculate();"   >


     
<div class="calc-block1">
  
<div class="calc"  >
 
	<p style="text-align: center;    "><span class= "th_c1">Цена&nbsp; </span></p><br>


 <!--
<p style="text-align: center;    "><span class= "th_c2">Цена</span></p>
-->
       <input class="colortext "  type="radio" id="manufacturer1" name="manufacturer" value="1" checked="checked" >
	        <label class="manufacturer-label"    for="manufacturer1">В рублях</label>
  
     <input class="colortext " type="radio" id="manufacturer2" name="manufacturer" value="2">
		<label class="manufacturer-label"  for="manufacturer2">В гривнах</label><br>



 

</div>
</div>

					
<div class="calc-block1">

	
  <div class="calc" >
  
  <p style="text-align: center;    "><span class= "th_c1">Сделать видео&nbsp; </span></p><br>
   
        <input class="colortext " type="radio" id="tip1" name="tip" value="1"  checked="checked"  >
		     <label class="manufacturer-label" for="tip1">Стандартное</label>
		         
        <input class="colortext " type="radio" id="tip2" name="tip" value="2">
		<label class="manufacturer-label"   for="tip2">От души</label>
        
        
   
        <input class="colortext " type="radio" id="vid1" name="vid" value="1"  checked="checked"  >
	    <label class="manufacturer-label" for="vid1">Нет своего видео</label>
		         
        <input class="colortext " type="radio" id="vid2" name="vid" value="2">
		<label class="manufacturer-label"   for="vid2">Есть свое видео</label>
        
			
</div>
</div>
<div class="calc-block1">

 <div class="calc" >
  
  <p style="text-align: center;    "><span class= "th_c1">Количество фото&nbsp; </span></p><br>
   
        <input class="colortext " type="radio" id="fotoN1" name="fotoN" value="1" checked="checked"  >
	    <label class="manufacturer-label" for="fotoN1">10-40 фото</label>
		         
        <input class="colortext " type="radio" id="fotoN2" name="fotoN" value="2">
		<label class="manufacturer-label"   for="fotoN2">45-60 фото</label>
		
        <input class="colortext " type="radio" id="fotoN3" name="fotoN" value="3">
		<label class="manufacturer-label" for="fotoN3">65-80 фото</label>

        <input class="colortext " type="radio" id="fotoN4" name="fotoN" value="4">
		<label class="manufacturer-label" for="fotoN4">85-120 фото</label>
                       
</div>

  
    
</div>
</div><br>

<p style="text-align: center;" ><span class= "th_c1">Стоимость вашего видео : <span id="price"  style="color: #E62C2C; font-weight: bold;"  ></span> </span></p>

		
		 <div class="btn-zakazat beg "  style="margin: 2% auto;" >
       
       <a href="#iw-modal"  style="  text-decoration:none">Узнать подробнее</a>
       <br>
	   </div>
	   </div>

 </div>
 

 <script type="text/javascript">
  
  function calculate() {
	window.setTimeout(func, 30);
}

  
  
        function func() {
		

		
        var price = 0;
        var money = 0;
        var tip = 0;
        var foto = 0;
        var vid = 0;
        
        
         
    var rad = document.getElementsByName('manufacturer');
    for (var i=0;i<rad.length; i++) {
        if (rad[i].checked) {
            
			 money = rad[i].value;
			
			break;
        }
    }
    
    var rad2 = document.getElementsByName('tip');
    for (var j=0;j<rad2.length; j++) {
        if (rad2[j].checked) {
            
			 tip = rad2[j].value;
			
			break;
        }
    }
    
    var rad3 = document.getElementsByName('fotoN');
    for (var k=0;k<rad3.length; k++) {
        if (rad3[k].checked) {
            
			 foto = rad3[k].value;
			
			break;
        }
    }
    
    var rad4 = document.getElementsByName('vid');
    for (var kk=0;kk<rad4.length; kk++) {
        if (rad4[kk].checked) {
            
			 vid = rad4[kk].value;
			
			break;
        }
    }
 
  
   if ((money == 1) && (tip == 1)){
       switch (foto) {
  case '1':{
    price = 1000;    
  }
    break;
  case '2':{
    price = 1500;    
  }
    break;
  case '3':{
    price = 2000;    
  }
    break;
   case '4':{ 
    price = 3000;    
  }
    break; 
    
   } 
   if (vid == '2')
          {price = price * 1 + 500 + ' руб.'}
     else {price = price + ' руб.'}
   }
   
   if ((money == 2) && (tip == 1 )) {
       switch (foto) {
  case '1':{
    price = 370;    
  }
    break;
  case '2':{
    price = 560;     
  }
    break;
  case '3':{
    price = 750;      
  }
    break;
   case '4':{
    price = 1500;    
  }
    break; 
   }
   if (vid == '2'){price = price * 1 + 200 + ' гривен'}
   else {price = price + ' гривен'}
   }
   
   if ((money == 1) && (tip == 2)){
       switch (foto) {
  case '1':{
    price = 1500;    
  }
    break;
  case '2':{
    price = 2000;    
  }
    break;
  case '3':{
    price = 3000;    
  }
    break;
   case '4':{
    price = 4000;    
  }
    break; 
   } 
   if (vid == 2){price = price * 1 + 500 + ' руб.'}
     else {price = price + ' руб.'}
   }
   
   if ((money == 2) && (tip == 2 )) {
       switch (foto) {
  case '1':{
    price = 560;    
  }
    break;
  case '2':{
    price = 750;     
  }
    break;
  case '3':{
    price = 1100;      
  }
    break;
    case '4':{
    price = 1500;    
  }
    break;
       } 
     if (vid == 2){price = price * 1 + 200 + ' гривен'}
   else {price = price + ' гривен'}  
   }
   
 
           document.getElementById('price').innerText = price ;
        
}

calculate ();


</script>    
