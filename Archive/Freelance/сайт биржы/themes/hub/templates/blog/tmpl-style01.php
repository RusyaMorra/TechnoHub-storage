<?php

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
<header class="lqd-lp-header mb-6">
	
	<div class="lqd-lp-meta text-uppercase ltr-sp-1 font-weight-medium">
		<?php $this->entry_tags( 'lqd-lp-cat-solid reset-ul inline-nav pos-rel z-index-2' ); ?>
	</div>

	<?php $this->entry_title( 'mt-3 mb-3 h5 lh-135' ); ?>

	<div class="lqd-lp-meta">
		<time class="lqd-lp-date d-inline-flex align-items-center pos-rel z-index-2" datetime="<?php echo get_the_date( 'c' ); ?>"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'hub' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></time>
	</div>
</header>
<?php $this->entry_thumbnail(); ?>
<?php $this->overlay_link(); ?>
