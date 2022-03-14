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

<div class="lqd-lp-contents lqd-overlay flex-column justify-content-between p-4 p-sm-5 pb-sm-7">

	<div class="lqd-lp-content-bg lqd-overlay"></div>

	<div class="lqd-lp-header-top pos-rel z-index-2 mb-5 mb-sm-0">

		<div class="lqd-lp-meta text-uppercase ltr-sp-1 font-weight-bold">
			<?php $this->entry_tags( 'lqd-lp-cat-solid reset-ul inline-nav' ); ?>
		</div>

	</div>

	<div class="lqd-lp-header-bottom pos-rel">

		<header class="lqd-lp-header">

			<div class="lqd-lp-author d-inline-flex flex-wrap align-items-center pos-rel z-index-2">

				<figure class="circle overflow-hidden">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), '50', get_option( 'avatar_default', 'mystery' ), get_the_author(), array( 'class' => 'circle' ) ); ?>
				</figure>

				<div class="lqd-lp-author-info pl-3">

					<h3 class="mt-0 mb-1"><a href="<?php echo esc_url( $author_url ); ?>"><?php echo get_the_author(); ?></a></h3>

					<div class="lqd-lp-meta">
						<time class="lqd-lp-date text-uppercase ltr-sp-1 font-weight-bold pos-rel z-index-2" datetime="<?php echo get_the_date( 'c' ); ?>"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'hub' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></time>
					</div>

				</div>
			</div>

			<?php $this->entry_title( 'mt-4 mb-2 h5 lh-15' ); ?>

		</header>
		
		<?php $this->entry_content( 'lqd-lp-excerpt' ); ?>

	</div>

</div>

<?php $this->overlay_link(); ?>



