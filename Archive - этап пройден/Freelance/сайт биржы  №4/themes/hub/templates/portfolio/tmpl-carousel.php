<?php

//Portfolio Carousel Template
	
?>
<div class="col-lg-<?php $this->get_column_class() ?> col-md-6 col-xs-12 carousel-item <?php $this->entry_term_classes() ?>">

	<div class="carousel-item-inner">
		<div class="carousel-item-content">

			<article<?php echo liquid_helper()->html_attributes( $attributes ) ?>>
				
				<div class="ld-pf-inner">
					
					<div class="ld-pf-image">
						<?php $this->entry_thumbnail( null, true ); ?>
					</div>
		
					<div class="ld-pf-bg"></div>
					
					<div class="ld-pf-details">
						<div class="ld-pf-details-inner">
							
							<?php the_title( '<h3 class="ld-pf-title h4 font-weight-semibold">', '</h3>' ); ?>
		
							<p class="ld-pf-category ld-pf-category-lined">
								
								<?php $this->entry_cats() ?>
									
								<span class="read-more color-primary text-uppercase font-weight-bold ltr-sp-05" data-split-text="true" data-split-options='{ "type": "chars, words" }' data-custom-animations="true" data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".split-inner", "duration": 150, "delay": 20, "startDelay": 100, "offDuration": 100, "ease": "circ.out", "initValues": { "y": 10, "opacity": 0 }, "animations": { "y": 0, "opacity": 1 } }'><?php esc_html_e( 'Discover More', 'hub' ); ?></span>
		
							</p>
		
						</div>
					</div>
					
					<?php $this->get_overlay_button(); ?>
					
				</div>
				
			</article>

		</div>
	</div>
	
</div>