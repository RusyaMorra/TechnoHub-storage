<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Hub theme
 */

get_header();

$data_content = liquid_helper()->get_option( 'error-404-content', 'post', '', 'options' );

?>
<article id="post-404" <?php post_class( 'page-404 error-404 not-found entry' ); ?>>
	
	<div class="container">
		<div class="row">	
			<div class="col-md-8 col-md-offset-2 text-center">
	
				<div class="text-404">
		
					<h1 data-fittext="true" data-fittext-options='{ "compressor": 0.25, "minFontSize": 150, "maxFontSize": 200 }' class="liquid-counter-element text-primary">
						<!--/.THIS IS NOT TRANSLATABLE OR DYNAMIC THING, IT NEEDS FOR THE EFFECTS -->
						<span>404</span>
					</h1>
	
				</div>
	
				<?php if( !class_exists( 'ReduxFramework' ) ) : ?>

					<h3 class="font-weight-normal mb-3"><?php esc_html_e( 'Looks like you are lost.', 'hub' ); ?></h3>
					<p class="mb-3"><?php esc_html_e( 'We can’t seem to find the page you’re looking for.', 'hub' ) ?></p>					
					<a href="<?php echo esc_url( home_url('/') ) ?>" class="btn btn-md btn-bordered circle btn-hover-reveal wide lh-135 px-3">
						<span>
							<span class="btn-txt"><?php esc_html_e( 'Go Home!', 'hub' ); ?></span>
							<span class="btn-icon">
								<i class="lqd-icn-ess icon-md-arrow-forward"></i>
							</span>
						</span>
					</a>

				<?php else : ?>

					<h3 class="font-weight-normal mb-3"><?php esc_html(liquid_helper()->get_option_echo( 'error-404-subtitle', 'html', '', 'options' )) ?></h3>
					<?php if( !empty( $data_content ) ) : ?>
						<p><?php echo wp_kses_post(  $data_content ); ?></p>
					<?php endif ?>
					<?php if( 'on' === liquid_helper()->get_option( 'error-404-enable-btn', 'raw', '', 'options' ) ) { ?>
						<a href="<?php echo esc_url( home_url('/') ) ?>" class="btn btn-md btn-bordered circle btn-hover-reveal wide lh-135 px-3">
						<span>
							<span class="btn-txt"><?php esc_html(liquid_helper()->get_option_echo( 'error-404-btn-title', 'html', '', 'options' )) ?></span>
							<span class="btn-icon">
								<i class="lqd-icn-ess icon-md-arrow-forward"></i>
							</span>
						</span>
					</a>
					<?php } ?>
				<?php endif; ?>
				
			</div>
	
		</div>
	
	</div>
	
</article>

<?php get_footer();