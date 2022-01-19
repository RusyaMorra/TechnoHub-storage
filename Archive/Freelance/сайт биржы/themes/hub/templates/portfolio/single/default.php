
<?php get_template_part( 'templates/portfolio/single/parts/part', 'head' ); ?>

<div class="pf-single-contents container">
	<div class="row">
		<div class="col-md-5 col-md-offset-1">
			<?php the_content() ?>
		</div>
		<div class="col-md-5 col-md-offset-1">
			<?php get_template_part( 'templates/portfolio/single/parts/part', 'meta' ); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<?php get_template_part( 'templates/portfolio/single/parts/part', 'nav' ); ?>
		</div>
	</div>
	
</div>