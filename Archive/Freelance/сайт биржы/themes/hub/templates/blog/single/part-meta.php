<?php
/**
 * The template for displaying Author bios
 */

if ( class_exists( 'Liquid_Elementor_Addons' ) ){
	$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
	$page_settings_model = $page_settings_manager->get_model( get_the_ID() );

	$style = $page_settings_model->get_settings( 'post_style' );
	$style = $style ? $style : liquid_helper()->get_option( 'post-style' );
	$post_author_meta_enable = $page_settings_model->get_settings( 'post_author_meta_enable' );
	$read_time = $page_settings_model->get_settings( 'liquid_read_min_label' );

} else {
	$style = liquid_helper()->get_option( 'post-style' );
	$post_author_meta_enable = liquid_helper()->get_option( 'post-author-meta-enable' );
	$read_time = liquid_helper()->get_option( 'liquid-read-min-label' );
}

if( 'off' === $post_author_meta_enable ) {
	return;
}

global $post;

$style = !empty( $style ) ? $style : 'classic';

$cat_before_title = $meta_read_time = false;

if( 'minimal' == $style || 'classic' == $style || 'wide' == $style ) {
	$meta_read_time = $cat_before_title = true;
}
elseif( 'overlay' == $style ) {
	$meta_read_time = true;
}

?>

<div class="entry-meta d-flex flex-wrap align-items-center text-center text-md-left">
	<div class="byline">

		<figure>
			<?php echo get_avatar( get_the_author_meta( 'user_email' ), 57 ); ?>
		</figure>

		<span class="d-flex flex-column">
			<span><?php esc_html_e( 'Author', 'hub' ); ?></span>
			<?php liquid_author_link() ?>
		</span>

	</div>

	<div class="posted-on">
		<span><?php esc_html_e( 'Published on:', 'hub' ); ?></span>
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<?php
				$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
				printf( $time_string,
					esc_attr( get_the_date( 'c' ) ),
					get_the_date()
				);
			?>
		</a>
	</div>

	<?php if ( !$cat_before_title ) : ?>
	<div class="cat-links">
		<span><?php esc_html_e( 'Published in:', 'hub' ); ?></span>
		<?php liquid_get_category(); ?>
	</div>
	<?php endif; ?>

	<?php if ( $meta_read_time && !empty( $read_time ) ) : ?>
	<div class="read-time">
		<span><?php echo esc_html( $read_time ); ?></span>
	</div>

	<?php endif; ?>
</div>