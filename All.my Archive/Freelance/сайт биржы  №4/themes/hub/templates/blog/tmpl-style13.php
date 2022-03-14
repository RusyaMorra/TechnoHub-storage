
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

<div class="lqd-lp-img pos-rel mb-4">

	<?php $this->entry_thumbnail( 'liquid-style13-lb' ); ?>

	<div class="lqd-lp-meta lqd-lp-meta-solid pos-b-l d-flex align-items-center p-0">

		<time class="lqd-lp-date pos-rel z-index-2 py-2 px-3" datetime="<?php echo get_the_date( 'c' ); ?>"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'hub' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></time>
		
		<?php $this->entry_tags( 'reset-ul inline-nav pos-rel z-index-2 py-2 px-3' ); ?>

	</div>

</div>

<header class="lqd-lp-header mb-2">
	<h2 class="lqd-lp-title h5 m-0">
		<a href="<?php the_permalink(); ?>" data-split-text="true" data-split-options='{"type": "lines", "disableOnMobile": true}'><?php the_title(); ?></a>
	</h2>
</header>

<?php $this->entry_content( 'lqd-lp-excerpt' ); ?>

<?php if( $show_read_more_button === 'yes' ) : ?>
<footer class="lqd-lp-footer pos-rel z-index-2 mt-3">
	<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-naked btn-hover-swp">
		<span>
			<span class="btn-txt"><?php esc_html_e( 'read more', 'hub' ); ?></span>
			<span class="btn-icon">
				<i class="lqd-icn-ess icon-md-arrow-round-forward"></i>
			</span>
			<span class="btn-icon">
				<i class="lqd-icn-ess icon-md-arrow-round-forward"></i>
			</span>
		</span>
	</a>
</footer>
<?php endif; ?>

<?php $this->overlay_link(); ?>