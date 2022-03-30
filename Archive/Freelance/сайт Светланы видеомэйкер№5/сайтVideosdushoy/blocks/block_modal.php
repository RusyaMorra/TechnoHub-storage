



<div id="iw-modal" class="iw-modal">
       <div class="iw-modal-wrapper">
              
                 <div class="iw-modal-header   ">
                  	
                  	<a  href="#close" title="Закрыть" class="iw-close"  style='  color:#fff; '  > x
					
				 </a>
                 
		
      <form method="post" action="/mail.php">
	  <div class="title1" >Отправьте заявку мы свяжемся с Вами
						</div>
					
	  <div class="title2" >
						</div>
 
	  <input type="submit"  class="frectangle_5_3 " name="submit" value="Отправить" />
	  <input type="hidden" name="art" id="art" value="1"/>
              
            <div class=" frectangle_5  ">   
             <input type="text"  class="search_2" name="name" required="required"  size="18" placeholder="Имя *">
           </div>
            <div class=" frectangle_5_2  ">
			
			
              <input type="tel" class="search_2"  name="phone" required="required"   size="16" placeholder="Телефон *">
            </div>
			
          <div class=" frectangle_5_1  ">
		  
		 
             <input type="email" class="search_2" name="email"   size="18" placeholder="email">
         </div>
  <!--       
		 <div class=" fellipse_1_tsz ">
		
		*
		  
       </div>
         <div class=" fellipse_1_tsz1 ">
		
		*
		  
       </div>
	    <div class=" fellipse_1_tsz2 ">
		
		*
		  
       </div>
      
		 <div class=" fellipse_1_ts ">
		
		<p> Даю согласие на обработку персональных данных</p>
		  
       </div>
		<div class=" fellipse_1_t ">
		
		<a href="">  политика конфиденциальности </a>
		
		  
       </div> 
		
		
		<div class="fellipse_1 ">  
		 

           <label> <input type="checkbox"  name="pdate" id="soglas" required="required"   value="yes"
 checked  /> 
			<span>
			
			</span>
			</label> 
        </div>	
		<div class=" fellipse_1 ">
            <img  src="<?php echo get_template_directory_uri();?>/img/img-header/ellipse_f2.png" width="20" height="20" alt="картинка ">
       </div>
       	  
   -->       
          
	  <textarea name="comments" cols="50" rows="10" placeholder="Напишите нам..."></textarea>
    </form>
</div>

  	</div>	

<!-- 	
	  <div class="section_mo" id="comments">  
    <h3>Комментарии</h3>
	
    
	<a href="#iw-modal" style="color:#FFF; text-decoration:none" >Вернуться</a>
    </div>  -->
	

</div>

<div id="gl" ></div>
<script>
document.addEventListener("click", function(evt) {
if (evt.target.tagName == 'A') {


var res = evt.target.href.split('/').pop();


  if (res == '#iw-modal') { 
  	let link = evt.target.text;
    

document.getElementById('art').value = evt.target.text;

  }

}  



});
</script>


