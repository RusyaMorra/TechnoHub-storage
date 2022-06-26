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

<div class="lqd-lp-content pl-md-8 w-md-50 w-100">

	<header class="lqd-lp-header">

		<div class="lqd-lp-meta d-flex align-items-center text-uppercase ltr-sp-1 font-weight-bold">
		
			<?php $this->entry_tags( 'lqd-lp-cat-border reset-ul inline-nav pos-rel z-index-2' ); ?>

			<time class="lqd-lp-date pos-rel z-index-2 ml-4" datetime="<?php echo get_the_date( 'c' ); ?>"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'hub' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></time>

		</div>

		<?php $this->entry_title( 'mt-3 mb-4 h5 lh-125 w-sm-90' ); ?>

	</header>

	<?php $this->entry_content(); ?>

	<footer class="lqd-lp-footer mt-4">

		<div class="lqd-lp-meta">
			<div class="lqd-lp-author d-flex flex-wrap align-items-center pos-rel">
				<a href="<?php echo esc_url( $author_url ); ?>" class="lqd-overlay z-index-2"></a>
				<figure class="mr-3">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), '50', get_option( 'avatar_default', 'mystery' ), get_the_author(), array( 'class' => 'circle' ) ); ?>
				</figure>
				<div class="lqd-lp-author-info">
					<h3 class="my-0 text-uppercase ltr-sp-1 font-weight-bold"><?php echo get_the_author(); ?></h3>
				</div>
			</div>
		</div>
	</footer>

</div>

<?php $this->overlay_link(); ?>
