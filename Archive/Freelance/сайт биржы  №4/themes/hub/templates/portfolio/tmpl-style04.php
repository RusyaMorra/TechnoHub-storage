<div class="carousel-item col-sm-12 <?php $this->entry_term_classes() ?>">

	<div class="carousel-item-inner">
		<div class="carousel-item-content">

			<div class="lqd-pf-item lqd-pf-item-style-4 lqd-pf-light overflow-hidden border-radius-5 pos-rel">
				<div class="lqd-pf-item-inner">
		
					<div class="lqd-pf-img overflow-hidden pos-rel">
						<figure>
							<?php $this->entry_thumbnail( 'liquid-style4-pf', false ); ?>
						</figure>
						<span class="lqd-pf-overlay-bg lqd-overlay">
						</span>
					</div>
		
					<div class="lqd-pf-details lqd-overlay justify-content-end">
						<div class="text-vertical p-4 p-sm-6">
							<?php the_title( '<h2 class="my-0 h5">', '</h2>'  ); ?>
							<?php $this->entry_content(); ?>
						</div>
					</div>
		
					<?php $this->get_overlay_button(); ?>
		
				</div>
			</div>

		</div>
	</div>
	
</div>