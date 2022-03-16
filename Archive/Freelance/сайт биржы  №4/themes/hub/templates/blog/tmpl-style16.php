
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

<div class="lqd-lp-img round overflow-hidden pos-rel mb-5">
	<?php $this->entry_thumbnail( 'liquid-style16-lb' ); ?>
</div>

<header class="lqd-lp-header mb-3 w-md-85">
	<?php $this->entry_title( 'h5 m-0' ); ?>
</header>

<?php $this->entry_content( 'lqd-lp-excerpt mb-3 w-md-85' ); ?>

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

<?php $this->overlay_link(); ?>

