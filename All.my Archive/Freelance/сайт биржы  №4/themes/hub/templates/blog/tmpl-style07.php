<?php

$author_url = get_author_posts_url( get_the_author_meta( 'ID' ) );
$format = get_post_format();

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

<?php $this->entry_thumbnail(); ?>

<header class="lqd-lp-header">

	<div class="lqd-lp-meta lqd-lp-meta-dot-between d-flex flex-wrap align-items-center text-uppercase ltr-sp-1 font-weight-bold">
		
		<?php $this->entry_tags( 'lqd-lp-cat lqd-lp-cat-solid reset-ul inline-nav pos-rel z-index-2' ); ?>

		<?php $this->entry_time(); ?>

	</div>

	<?php $this->entry_title( 'mt-3 mb-4 h5 lh-125' ); ?>

</header>

<?php $this->entry_content( 'lqd-lp-excerpt mb-5' ); ?>

<footer class="lqd-lp-footer">

	<div class="lqd-lp-meta pos-rel z-index-2">
		<div class="lqd-lp-author d-flex flex-wrap align-items-center">

			<figure class="mr-3">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), '50', get_option( 'avatar_default', 'mystery' ), get_the_author(), array( 'class' => 'circle' ) ); ?>
			</figure>

			<div class="lqd-lp-author-info">
				<h3 class="my-0 text-uppercase ltr-sp-1 font-weight-bold"><a href="<?php echo esc_url( $author_url ); ?>"><?php echo get_the_author(); ?></a></h3>
			</div>

		</div>
	</div>

</footer>

<?php $this->overlay_link(); ?>