<?php  do_action( 'liquid_before_single_article' ); ?>

<?php do_action( 'liquid_start_single_post_container' ); ?>

<article <?php liquid_helper()->attr( 'post', array( 'class' => 'lqd-post-content pos-rel' ) ) ?>>

	<div class="entry-content lqd-single-post-content clearfix pos-rel">
		<?php do_action( 'liquid_before_single_article_content' ); ?>

		<?php
			the_content( sprintf(
				esc_html__( 'Continue reading %s', 'hub' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
				) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'hub' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'hub' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
		
	</div>
	<?php do_action( 'liquid_after_single_article_content' ); ?>
	
	<?php do_action( 'liquid_before_single_article_footer' ); ?>

	<?php if ( get_post_type() !== 'ld-product-layout' ): ?>
	<footer class="blog-post-footer entry-footer">
		
		<?php if ( has_tag() || function_exists( 'liquid_portfolio_share' ) ): ?> 
		
		<div class="d-flex justify-content-between">

		<?php the_tags( '<span class="tags-links d-flex flex-wrap align-items-center pr-md-2"><span>' . esc_html__( 'Tags:', 'hub' ) . '</span>', esc_html_x( ' ', 'Used between list items, there is a space', 'hub' ), '</span>' ); ?>
		
		<?php if( function_exists( 'liquid_portfolio_share' ) ) : ?>
			<?php liquid_portfolio_share( get_post_type(), array(
				'class' => 'social-icon',
				'before' => '<span class="share-links d-flex align-items-center"><span class="text-uppercase ltr-sp-1">'. esc_html__( 'Share On', 'hub' ) .'</span>',
				'after' => '</span>'
			) ); ?>
		<?php endif; ?>

		</div>
		
		<?php endif; ?>
		
		<?php get_template_part( 'templates/blog/single/part', 'author' ) ?>
		<?php liquid_render_post_nav() ?>

		<?php do_action( 'liquid_single_article_footer' ); ?>
		

	</footer>
	<?php endif; ?>

	<?php do_action( 'liquid_after_single_article_footer' ); ?>
	

</article>

<?php liquid_render_related_posts( get_post_type() ) ?>	
<?php

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif; 
	
?>

<?php do_action( 'liquid_end_single_post_container' ); ?>

<?php do_action( 'liquid_single_post_sidebar' ); ?>

<?php do_action( 'liquid_after_single_article' ); ?>