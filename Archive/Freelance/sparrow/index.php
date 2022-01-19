
<?php get_header();?>
   <!-- Intro Section
   ================================================== -->
   <section id="intro">

      <!-- Flexslider Start-->
	   <div id="intro-slider" class="flexslider">

		   <ul class="slides">

			   <!-- Slide -->
			   <li>
				   <div class="row">
					   <div class="twelve columns">
						   <div class="slider-text">
							   <h1>Free amazing site template<span>.</span></h1>
							   <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                        enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                        enim tellus ultrices elit.</p>
						   </div>
                     <div class="slider-image">
                        <img src="images/sliders/home-slider-image-01.png" alt="" />
                     </div>
					   </div>
				   </div>
			   </li>

            <!-- Slide -->
			   <li>
				   <div class="row">
					   <div class="twelve columns">
						   <div class="slider-text">
							   <h1>Responsive + HTML5 + CSS3<span>.</span></h1>
							   <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        deleniti eos et accusamus. amet consequat enim elit noneas sit amet luctu. lacus sit amet luctus lobortis.
                        Aenean condimentum, lacus sit amet luctus.</p>
						   </div>
                     <div class="slider-image">
                        <img src="images/sliders/home-slider-image-02.png" alt="" />
                     </div>
					   </div>
				   </div>
			   </li>

		   </ul>

	   </div> <!-- Flexslider End-->

   </section> <!-- Intro Section End-->

   <!-- Info Section
   ================================================== -->
   <section id="info">

      <div class="row">

         <div class="bgrid-quarters s-bgrid-halves">

           <div class="columns">
              <h2>Clean & Modern.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           <div class="columns">
              <h2>Responsive.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           <div class="columns s-first">
              <h2>HTML5 + CSS3.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           <div class="columns">
              <h2>Free of Charge.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           </div>

      </div>

   </section> <!-- Info Section End-->

   <!-- Works Section
   ================================================== -->
   <section id="works">

      <div class="row">

         <div class="twelve columns align-center">
            <h1>Some of our recent works.</h1>
         </div>

         <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-halves">

    		   <div class="columns portfolio-item">
               <div class="item-wrap">
    				   <a href="portfolio.html">
                     <img alt="" src="images/portfolio/geometrics.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="portfolio.html">Geometrics</a></h5>
                     <p>Illustration</p>
    					</div>
               </div>
    			</div>

            <div class="columns portfolio-item">
               <div class="item-wrap">
    				   <a href="portfolio.html">
                     <img alt="" src="images/portfolio/console.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="portfolio.html">Console</a></h5>
                     <p>Web Development</p>
    					</div>
               </div>
    			</div>

            <div class="columns portfolio-item s-first">
               <div class="item-wrap">
    				   <a href="portfolio.html">
                     <img alt="" src="images/portfolio/camera-man.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="portfolio.html">Camera Man</a></h5>
                     <p>Photography</p>
    					</div>
               </div>
    			</div>

            <div class="columns portfolio-item">
               <div class="item-wrap">
    				   <a href="portfolio.html">
                     <img alt="" src="images/portfolio/into-the-light.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="portfolio.html">Into The Light</a></h5>
                     <p>Branding</p>
    					</div>
               </div>
    			</div>

         </div>

      </div>

   </section> <!-- Works Section End-->

   <!-- Journal Section
   ================================================== -->
   <section id="journal">

      <div class="row">
         <div class="twelve columns align-center">
            <h1>Our latest posts and rants.</h1>
         </div>
      </div>

      <div class="blog-entries">

                  <?php
                        // параметры по умолчанию
                  $posts = get_posts( array(
                     'numberposts' => 3,
                   //  'category'    => 0,
                     'orderby'     => 'date',
                    'order'       => 'ASC',
                   //  'include'     => array(),
                   //  'exclude'     => array(),
                    // 'meta_key'    => '',
                    // 'meta_value'  =>'',
                    // 'post_type'   => 'post',
                     //'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                  ) );
                                     // setup_postdata($post);
                                    // формат вывода the_title() ...
                  foreach( $posts as $post ){setup_postdata($post) ?>
                                             
                                       <!-- Entry -->
                        <article class="row entry">

                           <div class="entry-header">

                              <div class="permalink">
                                 <a href="<?php the_permalink();  ?>"><i class="fa fa-link"></i></a>
                              </div>

                              <div class="ten columns entry-title pull-right">
                                 <h3><a href="<?php the_permalink();  ?>"><?php the_title();  ?></a></h3>
                              </div>

                              <div class="two columns post-meta end">
                                 <p>
                                 <time datetime="2014-01-31" class="post-date" pubdate=""><?php the_time('F jS, Y');  ?></time>
                                 <span class="dauthor"><?php the_author(); ?></span>
                                 </p>
                              </div>

                           </div>

                           <div class="ten columns offset-2 post-content">
                              <p><?php the_excerpt()?> 
                              <a class="more-link" href="<?php the_permalink();  ?>">Read More<i class="fa fa-arrow-circle-o-right"></i></a></p>
                           </div>

                           </article> <!-- Entry End -->

            
            
                   <?php  }

                      wp_reset_postdata(); // сброс
                   ?>
       


      </div> <!-- Entries End -->

   </section> <!-- Journal Section End-->

   <!-- Call-To-Action Section
   ================================================== -->
   <section id="call-to-action">

      <div class="row">

         <div class="eight columns offset-1">

            <h1><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Host This Template on Dreamhost.</a></h1>
            <p>Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT"><span>DreamHost</span></a>.
					Get <span>$50 off</span> when you sign up with the promocode <span>STYLESHOUT</span>. 
					<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. --></p>

         </div>

         <div class="three columns action">

            <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT" class="button">Sign Up Now</a>

         </div>

      </div>

   </section> <!-- Call-To-Action Section End-->

   <!-- Tweets Section
   ================================================== -->
   <section id="tweets">

      <div class="row">

         <div class="tweeter-icon align-center">
            <i class="fa fa-twitter"></i>
         </div>

         <ul id="twitter" class="align-center">
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">2 Days Ago</a></b>
            </li>
            <!--
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">3 Days Ago</a></b>
            </li>
            -->
         </ul>

         <p class="align-center"><a href="#" class="button">Follow us</a></p>

      </div>

   </section> <!-- Tweet Section End-->



   <?php get_footer();?>