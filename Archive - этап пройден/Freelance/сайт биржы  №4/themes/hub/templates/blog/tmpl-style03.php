<?php
	$format = get_post_format();
	if( 'audio' === $format ) {
		$this->entry_thumbnail();
	}
?>
<?php $this->entry_thumbnail(); ?>
<header class="lqd-lp-header">
	<div class="lqd-lp-meta lqd-lp-meta-dot-between d-flex flex-wrap align-items-center text-uppercase ltr-sp-1 font-weight-bold">
		<?php $this->entry_tags( 'reset-ul inline-nav pos-rel z-index-2' ); ?>
		<?php $this->entry_time(); ?>
	</div>
	<?php $this->entry_title( 'h5 mt-3 mb-0' ); ?>
</header>
<?php $this->overlay_link(); ?>

