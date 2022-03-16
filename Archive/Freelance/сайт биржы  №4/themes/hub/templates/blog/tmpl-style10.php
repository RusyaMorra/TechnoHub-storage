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

<header class="lqd-lp-header lqd-overlay flex-column justify-content-between p-4">

	<div class="lqd-lp-content-bg lqd-overlay"></div>
	<div class="lqd-lp-header-top pos-rel	">
		<div class="lqd-lp-meta text-uppercase ltr-sp-1 font-weight-bold pos-rel z-index-2">
			<?php $this->entry_tags( 'lqd-lp-cat-solid reset-ul inline-nav' ); ?>
		</div>
	</div>

	<div class="lqd-lp-header-bottom pos-rel">

		<time class="lqd-lp-date text-uppercase ltr-sp-1 font-weight-bold pos-rel z-index-2" datetime="<?php echo get_the_date( 'c' ); ?>"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'hub' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></time>

		<?php $this->entry_title( 'mt-2 mb-0 h5 lh-135' ); ?>
		
	</div>

</header>

<?php $this->overlay_link(); ?>