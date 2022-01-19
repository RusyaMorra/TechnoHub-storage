<div class="<?php $this->get_grid_class() ?> masonry-item <?php $this->entry_term_classes() ?>">	
	<article<?php echo liquid_helper()->html_attributes( $attributes ) ?>>
		<div class="ld-pf-inner">
			
			<div class="ld-pf-image">
				<?php $this->entry_thumbnail( null, true ); ?>
			</div>
			
			<div class="ld-pf-bg"></div>
			
			<div class="ld-pf-details" data-custom-animations="true" data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".split-inner", "duration": 200, "delay": 35, "offDuration": 100, "ease": "power2.out", "initValues": { "x": 50, "rotation": -75, "opacity": 0, "transformOrigin": [0, "-100%", 0] }, "animations": { "x": 0, "rotation": 0, "opacity": 1, "transformOrigin": [0, "0%", 0] } }'>
				<div class="ld-pf-details-inner">
					<?php the_title( '<h3 class="ld-pf-title h4 font-weight-semibold" data-split-text="true" data-split-options=\'{ "type": "chars, words" }\'>', '</h3>' ) ?>
				</div>
			</div>
			
			<?php $this->get_overlay_button(); ?>
			
		</div>
	</article>
</div>