<div class="carousel-item col-lg-<?php $this->get_column_class() ?> col-md-6 col-xs-12 <?php $this->entry_term_classes() ?>">

	<div class="carousel-item-inner">
		<div class="carousel-item-content">
			
			<article<?php echo liquid_helper()->html_attributes( $attributes ) ?>>
				<div class="lqd-pf-item-inner">
		
					<div class="lqd-pf-img overflow-hidden border-radius-5 pos-rel mb-5">
						<figure>
							<?php $this->entry_thumbnail( 'liquid-style3-pf', false ); ?>
						</figure>
		
						<span class="lqd-pf-overlay-bg lqd-overlay align-items-center justify-content-center">
							<i class="lqd-icn-ess icon-md-arrow-forward"></i>
						</span>
		
					</div>
		
					<div class="lqd-pf-details">
						<?php the_title( '<h2 class="mt-0 mb-1 h5">', '</h2>'  ) ?>
						<?php $this->entry_cats() ?>
					</div>
		
					<?php $this->get_overlay_button(); ?>
		
				</div>
			</article>

		</div>
	</div>
	
</div>