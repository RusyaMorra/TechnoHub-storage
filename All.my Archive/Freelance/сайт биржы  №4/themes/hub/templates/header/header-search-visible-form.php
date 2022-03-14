<div class="ld-module-search ld-module-search-visible-form">

<?php 
	$search_id = uniqid( 'search-' ); 

	if ( !isset($search_type) ){
		if( class_exists( 'WooCommerce' ) ) $search_type = "product"; else $search_type = "post"; 
	} 
?>
	
	<div class="ld-search-form-container">
		<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ) ?>" class="ld-search-form">
			<input type="search" placeholder="<?php echo esc_attr_x( 'Start searching', 'placeholder', 'hub' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
			<span class="input-icon" data-toggle="collapse" data-target="<?php echo '#' . esc_attr( $search_id ); ?>" aria-controls="<?php echo esc_attr( $search_id ) ?>" aria-expanded="false"><i class="lqd-icn-ess icon-ld-search"></i></span>
			<input type="hidden" name="post_type" value="<?php echo esc_attr( $search_type ); ?>" />
		</form>
	</div>
	
</div>