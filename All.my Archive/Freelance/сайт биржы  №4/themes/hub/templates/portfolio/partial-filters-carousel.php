<?php

extract( $atts );

if( function_exists( 'ld_helper' ) ) {
	$filter_cats = ld_helper()->terms_are_ids_or_slugs( $filter_cats, 'liquid-portfolio-category' );
}

$terms = get_terms( array(
	'taxonomy'   => 'liquid-portfolio-category',
	'hide_empty' => false,
	'include'    => $filter_cats
) );

if( empty( $terms ) ) {
	return;
}


?>
<div class="col-md-4 col-xs-12">			
	<header class="lqd-pf-carousel-header mb-4 mb-md-9 pb-md-5">
		
		<?php if( !empty( $filter_title ) ) { ?>
		<h6 class="d-inline-flex mt-0 text-uppercase ltr-sp-1"><?php echo wp_kses_post( do_shortcode( $filter_title ) );  ?></h6>
		<?php } ?>
		
		<?php if( !empty( $filter_subtitle ) ) { ?>
		<h2 class="mt-2 mb-sm-8"><?php echo wp_kses_post( $filter_subtitle ); ?></h2>
		<?php } ?>

		<div class="liquid-filter-items align-items-start">
			<div class="liquid-filter-items-inner flex-sm-column">

				<ul class="filter-list filters-underline filters-underline-alt size-md hidden-xs hidden-sm" id="<?php echo esc_attr( $filter_id ); ?>">
					<li class="active" data-filter="*"><span><?php echo esc_html( $filter_lbl_all ) ?></span></li>
					<?php foreach( $terms as $term ) {
						printf( '<li data-filter=".%s"><span>%s</span></li>', $term->slug, $term->name );
					} ?>
				</ul>

				<div class="lqd-filter-dropdown visible-xs visible-sm" data-form-options='{ "dropdownAppendTo": "self" }'>
					<select name="lqd-filter-dropdown-<?php echo esc_attr( $filter_id ); ?>" id="lqd-filter-dropdown<?php echo esc_attr( $filter_id ); ?>">
						<option value="*" data-filter="*"><?php echo esc_html( $filter_lbl_all ) ?></option>
						<?php foreach( $terms as $term ) {
							printf( '<option value=".%s" data-filter=".%s">%s</option>', $term->slug, $term->slug, $term->name );
						} ?>
					</select>
				</div>

				<?php $this->get_button(); ?>

			</div>
		</div>

	</header>
</div>