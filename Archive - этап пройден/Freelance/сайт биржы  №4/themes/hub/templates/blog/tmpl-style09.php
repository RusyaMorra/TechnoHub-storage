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
<div class="lqd-lp-img w-sm-35 w-100 mb-3">

	<figure class="pos-rel overflow-hidden border-radius-8">
		<?php $this->entry_thumbnail(); ?>
		<div class="lqd-overlay align-items-center justify-content-center">
			<i class="lqd-icn-ess icon-md-arrow-forward"></i>
		</div>
	</figure>
	
</div>

<div class="lqd-lp-contents w-sm-65 pl-sm-6">

	<header class="lqd-lp-header">

		<div class="lqd-lp-meta lqd-lp-meta-dot-between lqd-lp-meta-solid circle d-inline-flex align-items-center text-uppercase ltr-sp-1 font-weight-bold">
			
			<?php $this->entry_tags( 'reset-ul inline-nav pos-rel z-index-2' ); ?>

			<?php $this->entry_time(); ?>

		</div>

		<?php $this->entry_title( 'mt-3 mb-3 h5 lh-135' ); ?>

	</header>

	<?php $this->entry_content( 'lqd-lp-excerpt' ); ?>

</div>

<?php $this->overlay_link(); ?>