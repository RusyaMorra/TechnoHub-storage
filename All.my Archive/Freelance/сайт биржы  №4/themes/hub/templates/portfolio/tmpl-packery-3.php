<div class="col-lg-<?php $this->get_column_class() ?> col-sm-6 masonry-item">
	<article<?php echo liquid_helper()->html_attributes( $attributes ) ?>>
		<div class="ld-pf-inner">

			<div class="ld-pf-image">
				<?php $this->entry_thumbnail( null, true ); ?>
			</div>

			<div class="ld-pf-details py-3">
				<div class="ld-pf-bg" data-custom-animations="true" data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": "this", "ease": "circ.out", "duration": 850, "initValues": { "scaleY": 0, "opacity": 1, "transformOrigin": "0 100% 0" }, "animations": { "scaleY": 1, "opacity": 1, "transformOrigin": "0 100% 0" } }'></div>

				<div class="ld-pf-details-inner py-1" data-custom-animations="true" data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".split-inner", "startDelay": 100, "duration": 650, "delay": 150, "initValues": { "y": "-100%" }, "animations": { "y": "0" } }'>
					<?php the_title( '<h3 class="ld-pf-title h4 ws-nowrap" data-split-text="true" data-split-options=\'{ "type": "lines" }\'>', '</h3>' ) ?>
				</div>

			</div>

			<?php $this->get_overlay_button(); ?>

		</div>
	</article>
</div>