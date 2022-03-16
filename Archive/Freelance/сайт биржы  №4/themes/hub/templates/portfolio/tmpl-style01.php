<div class="lqd-pf-column col-md-<?php $this->get_column_class() ?> col-sm-6 col-xs-12 masonry-item <?php $this->entry_term_classes() ?>">

	<article<?php echo liquid_helper()->html_attributes( $attributes ) ?>>
		<div class="lqd-pf-item-inner">

			<div class="lqd-pf-img">
				<figure>
					<?php $this->entry_thumbnail(); ?>
				</figure>
			</div>

			<div class="lqd-pf-details d-flex flex-wrap align-items-stretch pos-rel round">
				<span class="lqd-pf-overlay-bg lqd-overlay"></span>
				<div class="lqd-pf-info d-flex w-100 flex-wrap align-items-center justify-content-between px-4 py-4">
					<?php the_title( '<h2 class="my-0 h5">', '</h2>'  ) ?>
					<?php $this->entry_cats() ?>
				</div>
			</div>

			<?php $this->get_overlay_button(); ?>

		</div>
	</article>

</div>