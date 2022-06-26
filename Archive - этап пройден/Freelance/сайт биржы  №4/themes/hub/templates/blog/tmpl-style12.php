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
<header class="lqd-lp-header">

	<div class="lqd-lp-meta lqd-lp-meta-dot-between lqd-lp-meta-solid circle d-inline-flex align-items-center text-uppercase ltr-sp-1 font-weight-bold mb-1">
		
		<?php $this->entry_tags( 'reset-ul inline-nav pos-rel z-index-2' ); ?>

		<?php $this->entry_time(); ?>

	</div>
	<?php $this->entry_title( 'my-3 h5 lh-135' ); ?>

</header>

<?php $this->entry_content( 'lqd-lp-excerpt' ); ?>

<?php $this->overlay_link(); ?>