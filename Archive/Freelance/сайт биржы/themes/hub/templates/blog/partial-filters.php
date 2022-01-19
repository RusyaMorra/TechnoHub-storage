<?php

extract( $atts );

if( function_exists( 'ld_helper' ) && !class_exists( 'Liquid_Elementor_Addons' )) {
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
	'liquid-filter-items',
	'align-items-center'
);

$filter_classnames = array(
	'filter-list',
	'filter-list-inline',
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

<div class="row">
	<div class="col-md-12">					
		<div class="<?php echo join( ' ', $filter_wrapper ); ?>">	
			<div class="liquid-filter-items">
				
				<?php if( !empty( $filter_title ) ) { ?>
					<span class="<?php echo join( ' ', $filter_title_classnames ); ?>"><?php echo wp_kses_post( $filter_title );  ?></span>
				<?php } ?>

				<ul class="<?php echo join( ' ', $filter_classnames ); ?> hidden-xs hidden-sm" id="<?php echo esc_attr( $filter_id ); ?>">
					<li class="active" data-filter="*"><span><?php echo esc_html( $filter_lbl_all ) ?></span></li>
					<?php foreach( $terms as $term ) {
						printf( '<li data-filter=".%s"><span>%s</span></li>', $term->slug, $term->name );
					} ?>
				</ul>

				<div class="lqd-filter-dropdown visible-xs visible-sm" data-form-options='{ "dropdownAppendTo": "self" }'>
					<select name="lqd-filter-dropdown-<?php echo esc_attr( $filter_id ); ?>" id="lqd-filter-dropdown-<?php echo esc_attr( $filter_id ); ?>">
						<option selected data-filter="*" value="*"><?php echo esc_html( $filter_lbl_all ) ?></option>
						<?php foreach( $terms as $term ) {
							printf( '<option data-filter=".%s" value=".%s">%s</option>', $term->slug, $term->slug, $term->name );
						} ?>
					</select>
				</div>
					
				<?php //$this->get_button()  ?>					
					
			</div>
		</div>
	</div>
</div>