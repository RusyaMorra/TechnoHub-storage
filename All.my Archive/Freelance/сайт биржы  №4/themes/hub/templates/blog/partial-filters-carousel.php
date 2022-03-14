<?php

extract( $atts );

if( function_exists( 'ld_helper' ) ) {
	$filter_cats = ld_helper()->terms_are_ids_or_slugs( $filter_cats, 'category' );
}

$terms = get_terms( array(
	'taxonomy'   => 'category',
	'hide_empty' => false,
	'include'    => $filter_cats
) );

if( empty( $terms ) ) {
	return;
}

$filter_wrapper = array(
	'liquid-filter-items'

);

$filter_classnames = array(
	'filter-list',
	'filter-list-style-1',
	'ltr-sp-1',
	'hidden-xs',
	'hidden-sm',
	$filter_color,
	$filter_size,
	$filter_decoration,
	$filter_transformation,
	$filter_weight,
);

$filter_title_classnames = array(
	'liquid-filter-items-label',
	$filter_title_size,
	$filter_title_weight,
	$filter_title_transformation
);
?>
<div class="col-lg-5 col-xs-12">
					
	<?php if( !empty( $filter_title ) ) { ?>
	<header class="fancy-title">
		<?php if( !empty( $filter_subtitle ) ) { ?>
			<h6 class="text-uppercase"><?php echo wp_kses_post( $filter_subtitle ); ?></h6>
		<?php } ?>
	</header>
	<?php } ?>
	
	<?php if( !empty( $filter_subtitle ) ) { ?>
	<h6 class="d-inline-flex mt-0 text-uppercase ltr-sp-1"><?php echo wp_kses_post( $filter_subtitle ); ?></h6>
	<?php } ?>
	<?php if( !empty( $filter_title ) ) { ?>
	<h2 class="mt-2 mb-sm-6"><?php echo wp_kses_post( do_shortcode( $filter_title ) ); ?></h2>
	<?php } ?>

	<div class="liquid-filter-items align-items-start">
		<div class="liquid-filter-items-inner flex-sm-column">

			<ul class="<?php echo join( ' ', $filter_classnames ); ?>" id="<?php echo esc_attr( $filter_id ); ?>">
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
			</div>

		</div>
	</div>
		
	<?php $this->get_button()  ?>

</div>