
<?php

extract( $atts );

if( function_exists( 'ld_helper' ) && !class_exists( 'Liquid_Elementor_Addons' ) ) {
	$filter_cats = ld_helper()->terms_are_ids_or_slugs( $filter_cats, 'product_cat' );
} else if ( function_exists( 'ld_helper' ) && class_exists( 'Liquid_Elementor_Addons' )){
	$filter_cats = $filter_cats ? ld_helper()->terms_slugs_to_ids( $filter_cats, 'product_cat' ) : '';
}

$terms = get_terms( array(
	'taxonomy'   => 'product_cat',
	'hide_empty' => true,
	'include'    => $filter_cats
) );

if( empty( $terms ) ) {
	return;
}


?>

<div class="liquid-filter-items align-items-center justify-content-start">
	<ul class="filter-list filter-list-inline size-md hidden-xs hidden-sm" id="<?php echo esc_attr( $filter_id ); ?>">
		<li class="active" data-filter="*"><span><?php echo esc_html( $filter_lbl_all ) ?></span></li>
		<?php foreach( $terms as $term ) {
			printf( '<li data-filter=".%s"><span>%s</span></li>', $term->slug, $term->name );
		} ?>
	</ul>
	<div class="lqd-filter-dropdown visible-xs visible-sm" data-form-options='{ "dropdownAppendTo": "self" }'>
		<select name="lqd-filter-dropdown-<?php echo esc_attr( $filter_id ); ?>" id="lqd-filter-dropdown-<?php echo esc_attr( $filter_id ); ?>">
			<option selected data-filter="*" value="*"><?php echo esc_html( $filter_lbl_all ) ?></option>
			<?php foreach( $terms as $term ) {
				printf( '<option data-filter=".%s" value=".%s">%s</option>', $term->slug, $term->slug, $term->name  );
			} ?>
		</select>
	</div>
</div>