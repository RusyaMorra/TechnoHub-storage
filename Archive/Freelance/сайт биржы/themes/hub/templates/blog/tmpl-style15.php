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

<div class="lqd-lp-img mb-4">
	<?php $this->entry_thumbnail(); ?>
</div>

<header class="lqd-lp-header">
	<?php $this->entry_title( 'h3' ); ?>
</header>

<?php $this->entry_content( 'lqd-lp-excerpt' ); ?>

<footer class="lqd-lp-footer mt-3">	
	<?php $this->entry_tags( 'lqd-lp-cat lqd-lp-cat-border reset-ul inline-nav pos-rel z-index-3' ); ?>
</footer>

<?php $this->overlay_link(); ?>