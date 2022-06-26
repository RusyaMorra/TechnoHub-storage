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

<header class="lqd-lp-header">	

	<div class="lqd-lp-meta">

		<div class="lqd-lp-author d-flex flex-wrap align-items-center">
			
			<figure class="mr-4">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), '50', get_option( 'avatar_default', 'mystery' ), get_the_author(), array( 'class' => 'circle w-100' ) ); ?>
			</figure>

			<div class="lqd-lp-author-info text-uppercase ltr-sp-1 font-weight-bold">

				<h3 class="mt-0 mb-2 pos-rel z-index-2"><a href="<?php echo esc_url( $author_url ); ?>"><?php echo get_the_author(); ?></a></h3>

				<div class="lqd-lp-meta lqd-lp-meta-dot-between d-flex align-items-center">
					
					<?php $this->entry_tags( 'reset-ul inline-nav pos-rel z-index-2' ); ?>

					<?php $this->entry_time(); ?>
				</div>
			</div>

		</div>
	</div>

	<?php $this->entry_title( 'mt-5 mb-3 h5 lh-135' ); ?>

</header>

<?php $this->entry_content( 'lqd-lp-excerpt' ); ?>

<?php if( $show_read_more_button === 'yes' ) : ?>
<footer class="lqd-lp-footer mt-3">
	<i class="lqd-icn-ess icon-md-arrow-forward"></i>
</footer>
<?php endif; ?>

<?php $this->overlay_link(); ?>
