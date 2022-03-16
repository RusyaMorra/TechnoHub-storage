<?php

$prev_post_obj   = get_adjacent_post( '', '', true );
$prev_post_ID    = isset( $prev_post_obj->ID ) ? $prev_post_obj->ID : '';
$prev_post_link  = get_permalink( $prev_post_ID );
$prev_post_title = get_the_title( $prev_post_ID );
	
$next_post_obj   = get_adjacent_post( '', '', false );
$next_post_ID    = isset( $next_post_obj->ID ) ? $next_post_obj->ID : '';
$next_post_link  = get_permalink( $next_post_ID );
$next_post_title = get_the_title( $next_post_ID );

if ($prev_post_ID || $next_post_ID):
?>
<nav class="post-nav align-items-center h5">
					
	<?php if( $prev_post_ID ) { ?>
	<div class="nav-previous">
		<a href="<?php echo esc_url( $prev_post_link ); ?>" rel="prev">
			<span class="screen-reader-text"><?php esc_html_e( 'Previous Article', 'hub' ); ?></span>
			<span aria-hidden="true" class="nav-subtitle">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" stroke="#444" stroke-width="2" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve" width="24" height="24">
					<g>
						<line stroke-miterlimit="10" x1="22" y1="12" x2="2" y2="12" stroke-linejoin="miter" stroke-linecap="butt"></line>
						<polyline stroke-linecap="square" stroke-miterlimit="10" points="9,19 2,12 9,5 " stroke-linejoin="miter"></polyline>
					</g>
				</svg>
				<?php esc_html_e( 'Previous Article', 'hub' ); ?>
			</span>
			<span class="nav-title"><?php echo wp_kses_post( $prev_post_title ); ?></span>
		</a>
	</div>
	<?php } ?>
	
	<?php if( function_exists( 'liquid_blog_archive_link' ) ) { ?>
		<?php liquid_blog_archive_link(); ?>
	<?php } ?>
	
	<?php if( $next_post_ID ) { ?>
	<div class="nav-next">
		<a href="<?php echo esc_url( $next_post_link ); ?>" rel="next">
			<span class="screen-reader-text"><?php esc_html_e( 'Next Article', 'hub' ); ?></span>
			<span aria-hidden="true" class="nav-subtitle">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" stroke="#444" stroke-width="2" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve" width="24" height="24">
					<g transform="rotate(180 12,12) ">
						<line stroke-miterlimit="10" x1="22" y1="12" x2="2" y2="12" stroke-linejoin="miter" stroke-linecap="butt"></line>
						<polyline stroke-linecap="square" stroke-miterlimit="10" points="9,19 2,12 9,5 " stroke-linejoin="miter"></polyline>
					</g>
				</svg>
				<?php esc_html_e( 'Next Article', 'hub' ); ?>
			</span>
			<span class="nav-title"><?php echo wp_kses_post( $next_post_title ); ?></span>
		</a>
	</div>
	<?php } ?>
	
</nav>
<?php endif; ?>