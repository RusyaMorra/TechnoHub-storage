<div class="<?php $this->get_grid_class() ?> px-0 masonry-item <?php $this->entry_term_classes() ?>">

	<article<?php echo liquid_helper()->html_attributes( $attributes ) ?>>

		<div class="ld-pf-inner">

			<div class="ld-pf-image">
				<?php $this->entry_thumbnail( 'liquid-grid-hover-classic', true ); ?>
			</div>

			<div class="ld-pf-details py-4" data-custom-animations="true" data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".split-inner", "startDelay": 0, "duration": 650, "delay": 200, "initValues": { "y": "150%" }, "animations": { "y": "0", "rotationX": 0 } }'>

				<div class="ld-pf-bg"></div>

				<div class="ld-pf-details-inner" data-custom-animations="true" data-ca-options='{ "triggerHandler": "mouseenter", "triggerTarget": ".ld-pf-item", "triggerRelation": "closest", "offTriggerHandler": "mouseleave", "animationTarget": ".ld-pf-btn", "startDelay": 0, "duration": 650, "delay": 100, "initValues": { "scale": "0" }, "animations": { "scale": "1" } }'>

					<div class="ld-pf-btns">

						<a href="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>" class="ld-pf-btn circle ld-pf-btn-brd ld-pf-btn-brd-thick zoom fresco" data-fresco-group="ld-pf">
							<span><i class="lqd-icn-ess icon-ld-search"></i></span>
						</a>

						<a href="<?php the_permalink() ?>" class="ld-pf-btn ra circle ld-pf-btn-brd ld-pf-btn-brd-thick ml-2">
							<span><i class="lqd-icn-ess icon-arrow-right-material"></i></span>
						</a>

					</div>

					<?php the_title( '<h3 class="ld-pf-title h4 font-weight-bold" data-split-text="true" data-split-options=\'{ "type": "lines" }\'>', '</h3>' ) ?>
					<?php $this->entry_cats() ?>

				</div>

			</div>

		</div>

	</article>

</div>