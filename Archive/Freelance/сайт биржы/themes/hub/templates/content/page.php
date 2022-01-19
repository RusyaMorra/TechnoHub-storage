<?php
/**
 * The template used for displaying page content
 */
?>

<?php if( 1 == 2 ) : ?>
<header class="entry-header">
	<h1 <?php liquid_helper()->attr( 'entry-title' ); ?>><?php single_post_title(); ?></h1>
</header>
<?php endif; ?>

	<?php the_content(); ?>

	<?php
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'hub' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'hub' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
	?>
