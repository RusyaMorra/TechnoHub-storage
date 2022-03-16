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

<div class="lqd-lp-img overflow-hidden">

	<?php $this->entry_thumbnail(); ?>

	<div class="lqd-lp-meta text-uppercase ltr-sp-1 font-weight-bold pos-rel z-index-2">
		<?php $this->entry_tags( 'lqd-lp-cat-solid reset-ul inline-nav' ); ?>
	</div>

</div>

<header class="lqd-lp-header p-5">

	<div class="lqd-lp-meta lqd-lp-meta-dot-between d-flex flex-wrap align-items-center text-uppercase ltr-sp-1 font-weight-bold">

		<div class="lqd-lp-author pos-rel z-index-2">
			<div class="lqd-lp-author-info">
				<h3 class="my-0"><a href="<?php echo esc_url( $author_url ); ?>"><?php echo get_the_author(); ?></a></h3>
			</div>
		</div>

		<?php $this->entry_time(); ?>

	</div>

	<?php $this->entry_title( 'mt-3 mb-0 h5 lh-135' ); ?>

</header>

<?php $this->overlay_link(); ?>
