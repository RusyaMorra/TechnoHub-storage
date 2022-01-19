<?php
/**
 * The template for displaying Author bios
 */

if ( class_exists( 'Liquid_Elementor_Addons' ) ){
	$page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
	$page_settings_model = $page_settings_manager->get_model( get_the_ID() );

	$style = $page_settings_model->get_settings( 'post_style' );
	$style = $style ? $style : liquid_helper()->get_option( 'post-style', 'classic' );
	$post_author_box_enable = $page_settings_model->get_settings( 'post_author_box_enable' );
	$post_author_box_enable = $post_author_box_enable ? $post_author_box_enable : liquid_helper()->get_option( 'post-author-box-enable' );
	$post_author_role_enable = $page_settings_model->get_settings( 'post_author_role_enable' );
	$post_author_role_enable = $post_author_role_enable ? $post_author_role_enable : liquid_helper()->get_option( 'post-author-role-enable' );
} else {
	$style = liquid_helper()->get_option( 'post-style', 'classic' );
	$post_author_box_enable = liquid_helper()->get_option( 'post-author-box-enable' );
	$post_author_role_enable = liquid_helper()->get_option( 'post-author-role-enable' );
}

if( 'off' ===  $post_author_box_enable ) {
	return;
}

// Initialize needed variables
global $authordata;
$author_id = is_object( $authordata ) ? $authordata->ID : -1;

$author_view = 'classic';

if( 'minimal' == $style ) {
	$author_view = 'img-overlay';
}
$description = get_the_author_meta( 'description' );
if( empty( $description ) ) {
	return;
}

?>

<div class="post-author post-author-<?php echo sanitize_html_class( $author_view ); ?>">

	<figure>
		<?php echo get_avatar( get_the_author_meta( 'user_email' ), 80 ); ?>
	</figure>

	<?php if ( $author_view === 'img-overlay' ) : ?>

		<h6><?php esc_html_e( 'About the Author', 'hub' ) ?></h6>
		<h3><?php liquid_author_link( array( 'before' => '', ) ); ?></h3>

	<?php endif; ?>

	<div class="post-author-info">

		<?php if ( $author_view === 'classic' ) : ?>
		<div class="post-author-info-head d-flex align-items-center justify-content-between">
			<div>
				<h3><?php liquid_author_link( array( 'before' => '', ) ); ?></h3>
				<?php if( 'on' === $post_author_role_enable ) { ?>
					<h6><?php echo liquid_author_role() ?></h6>
				<?php } ?>
			</div>
			<div>
				<a class="author-all-posts" href="<?php echo esc_url( get_author_posts_url( $authordata->ID ) ); ?>"><?php esc_html_e( 'See author’s other posts', 'hub' ); ?> <i class="lqd-icn-ess icon-md-arrow-forward"></i></a>
			</div>
		</div>
		<?php endif; ?>

		<p><?php the_author_meta( 'description' ); ?></p>

	</div>
</div>