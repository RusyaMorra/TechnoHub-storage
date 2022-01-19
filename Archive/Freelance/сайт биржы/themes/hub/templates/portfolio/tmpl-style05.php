<div class="carousel-item col-xs-12 col-sm-6 col-md-4 <?php $this->entry_term_classes() ?>">

	<div class="carousel-item-inner">
		<div class="carousel-item-content">

			<div class="lqd-pf-item lqd-pf-item-style-5 lqd-pf-light pos-rel h-vh-100">
				<div class="lqd-pf-item-inner pos-abs pos-tl w-100 h-100">
		
					<div class="lqd-pf-img overflow-hidden h-100">
						<?php $this->entry_thumbnail(); ?>
						<span class="lqd-pf-overlay-bg lqd-overlay">
						</span>
					</div>
		
					<div class="lqd-pf-details lqd-overlay py-9 py-md-6 px-4 px-sm-8">
						<div class="text-vertical">
							<?php the_title( '<h2 class="my-0 ml-1 h5">', '</h2>'  ); ?>
							<?php $this->entry_cats() ?>
						</div>
					</div>
		
					<?php $this->get_overlay_button(); ?>
		
				</div>
			</div>

		</div>
	</div>
	
</div>