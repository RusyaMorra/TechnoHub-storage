<div class="<?php $this->get_grid_class() ?> masonry-item <?php $this->entry_term_classes() ?>">
	<article<?php echo liquid_helper()->html_attributes( $attributes ) ?>>
		<div class="ld-pf-inner">

			<div class="ld-pf-image">				
				<?php $this->entry_thumbnail( 'liquid-portfolio', true ); ?>
			</div>

			<div class="ld-pf-bg"></div>

			<div class="ld-pf-details" data-custom-animations="true" data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".split-inner", "startDelay": 80, "duration": 650, "delay": 150, "initValues": { "y": "150%" }, "animations": { "y": "0", "rotationX": 0 } }'>

				<div class="ld-pf-details-inner">

					<?php the_title( '<h3 class="ld-pf-title h4 text-uppercase" data-split-text="true" data-split-options=\'{ "type": "lines" }\'>', '</h3>' ) ?>
					
					<?php $this->entry_cats() ?>

				</div>

			</div>

			<?php $this->get_overlay_button(); ?>

		</div>
	</article>
</div>