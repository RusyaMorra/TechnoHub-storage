
<?php

$author_url = get_author_posts_url( get_the_author_meta( 'ID' ) );
$format = get_post_format();

if ( class_exists( 'Liquid_Elementor_Addons' ) && defined( 'ELEMENTOR_VERSION' )){
	$show_read_more_button = $this->entry_read_more_button();
} else {
	$show_read_more_button = 'yes';
}

if( 'audio' === $format ) {
	$this->entry_thumbnail();
}
/*
elseif( 'video' === $format ) {
?>
<div class="post-video">
	<?php $this->entry_thumbnail() ?>
	<?php $this->entry_tags() ?>
</div>
<?php
}
*/
?>

<div class="lqd-lp-img lqd-overlay">
	<?php $this->entry_thumbnail(); ?>
</div>

<div class="lqd-lp-inner lqd-overlay flex-column justify-content-end py-6 px-4 p-md-6">
	
	<div class="lqd-lp-content-bg lqd-overlay"></div>

	<header class="lqd-lp-header pos-rel z-index-2 mb-2">
		<div class="lqd-lp-meta">
			<?php $this->entry_tags( 'lqd-lp-cat reset-ul inline-nav pos-rel z-index-2' ); ?>
		</div>
		<div class="lqd-lp-header-bottom pos-rel">
			<?php $this->entry_title( 'mt-2 mb-0 h5' ); ?>
		</div>
	</header>

	<?php if( $show_read_more_button === 'yes' ) : ?>
		<footer class="lqd-lp-footer pos-rel z-index-2 pt-1">
			<a href="<?php the_permalink(); ?>" class="btn btn-naked text-uppercase ltr-sp-1 size-sm font-weight-bold lqd-lp-read-more">
				<span>
					<span class="btn-line btn-line-before"></span>
					<span class="btn-txt"><?php esc_html_e( 'Continue Reading', 'hub' ); ?></span>
					<span class="btn-line btn-line-after"></span>
				</span>
			</a>
		</footer>
	<?php endif; ?>
</div>

<?php $this->overlay_link(); ?>