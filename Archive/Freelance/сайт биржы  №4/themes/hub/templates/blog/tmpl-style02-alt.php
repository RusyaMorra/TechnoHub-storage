<?php

$author_url = get_author_posts_url( get_the_author_meta( 'ID' ) );
$format = get_post_format();

/*
if( 'audio' === $format ) {
	$this->entry_thumbnail();
}
*/
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
$this->entry_thumbnail();
?>
<header class="lqd-lp-header mb-9 z-index-2">

	<div class="lqd-lp-meta lqd-lp-meta-dot-between d-flex flex-wrap align-items-center text-uppercase ltr-sp-1 font-weight-bold">

		<?php $this->entry_tags( 'lqd-lp-cat-solid reset-ul inline-nav pos-rel z-index-2' ); ?>

		<?php $this->entry_time(); ?>

	</div>
	
	<?php $this->entry_title( 'h5 mt-4 lh-135 font-weight-normal' ); ?>

</header>

<footer class="lqd-lp-footer mt-5">

	<div class="lqd-lp-meta">

		<div class="lqd-lp-author d-flex flex-wrap align-items-center pos-rel z-index-2">
			<a href="<?php echo esc_url( $author_url ); ?>" class="lqd-overlay"></a>
			<figure class="circle overflow-hidden mr-4">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), '50', get_option( 'avatar_default', 'mystery' ), get_the_author() ); ?>
			</figure>
			<div class="lqd-lp-author-info">
				<h3 class="mt-0 mb-2 font-weight-medium"><?php echo get_the_author(); ?></h3>
				
			</div>
		</div>

	</div>
</footer>

<?php $this->overlay_link(); ?>