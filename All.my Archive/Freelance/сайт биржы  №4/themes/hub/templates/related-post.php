<?php

$col = '3';
if( '2' === $number_of_posts ) {
	$col = '6';
}
elseif( '3' === $number_of_posts ) {
	$col = '4';
}

if( empty( $related_posts_view ) ) {
	$related_posts_view = 'style-1';
}

?>
<div class="related-posts">
	
	<div class="container">
		
		<?php if( !empty( $heading ) ) { ?>
			<h3 class="related-posts-title"><?php echo esc_html( $heading ) ?></h3>
		<?php } ?>

		<div class="row">

			<?php while( $related_posts->have_posts() ): $related_posts->the_post(); ?>
	
				<div class="col-lg-<?php echo esc_attr( $col ) ?> col-sm-6 col-xs-12">
			
				<?php if ( $related_posts_view === 'style-1' ) { ?>
				<article class="lqd-lp lqd-lp-style-13 lqd-lp-hover-img-zoom pos-rel">
	
					<div class="lqd-lp-img pos-rel mb-4 overflow-hidden">

						<?php if( '' !== get_the_post_thumbnail() ) : ?>
							<figure class="pos-rel">
								<?php liquid_the_post_thumbnail( 'liquid-related-post', array( 'class' => 'w-100' ), false ); ?>
							</figure>
						<?php endif; ?>

						<div class="lqd-lp-meta lqd-lp-meta-solid pos-b-l d-flex align-items-center p-0">
							<span class="lqd-lp-date pos-rel z-index-2 py-2 px-3"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'hub' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
							<ul class="lqd-lp-cat reset-ul inline-nav pos-rel z-index-2 py-2 px-3">
								<li><?php echo liquid_get_category(); ?></li>
							</ul>
						</div>
					</div>
	
					<header class="lqd-lp-header mb-2">
						<h2 class="lqd-lp-title h5 m-0">
							<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						</h2>
					</header>
					
					<?php if( has_excerpt() ) { ?>
					<div class="lqd-lp-excerpt mb-3">
						<p><?php the_excerpt( ) ?></p>
					</div>
					<?php } ?>
	
					<a href="<?php the_permalink() ?>" class="lqd-lp-overlay-link lqd-overlay z-index-2"></a>
	
				</article>

				<?php } else if ( $related_posts_view === 'style-2' ) { ?>
				<article class="lqd-lp lqd-lp-style-20 lqd-lp-hover-img-zoom pos-rel">
					
					<?php if( '' !== get_the_post_thumbnail() ) : ?>
					<div class="lqd-lp-img pos-rel mb-3 overflow-hidden">
						<figure class="pos-rel">
							<?php liquid_the_post_thumbnail( 'liquid-related-post', array( 'class' => 'w-100' ), false ); ?>
						</figure>
					</div>
					<?php endif; ?>
	
					<div class="lqd-lp-meta mb-3">
						<ul class="lqd-lp-cat reset-ul inline-nav lqd-lp-cat-solid font-weight-bold">
							<li><?php echo liquid_get_category(); ?></li>
						</ul>
					</div>
					<header class="lqd-lp-header mb-3">
						<h2 class="lqd-lp-title h5 m-0">
							<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						</h2>
					</header>
	
					<?php if( has_excerpt() ) { ?>
					<div class="lqd-lp-excerpt mb-3">
						<p><?php the_excerpt( ) ?></p>
					</div>
					<?php } ?>
	
					<a href="<?php the_permalink() ?>" class="lqd-lp-overlay-link lqd-overlay z-index-2"></a>
	
				</article>

				<?php } else if ( $related_posts_view === 'style-3' ) { ?>
				<article class="lqd-lp lqd-lp-style-10 pos-rel d-flex flex-wrap round overflow-hidden h-pt-80 lqd-lp-hover-img-zoom">
	
					<?php if( '' !== get_the_post_thumbnail() ) : ?>
					<div class="lqd-lp-img lqd-overlay">
						<figure class="pos-rel bg-cover w-100" data-responsive-bg="true">
							<?php liquid_the_post_thumbnail( 'liquid-related-post', array( 'class' => 'w-100 invisible' ), false ); ?>
						</figure>
					</div>
					<?php endif; ?>
					
					<header class="lqd-lp-header lqd-overlay flex-column justify-content-between p-4">
						<div class="lqd-lp-content-bg lqd-overlay"></div>
						<div class="lqd-lp-header-top pos-rel	">
						</div>
						<div class="lqd-lp-header-bottom pos-rel">
							<span class="lqd-lp-date text-uppercase ltr-sp-1 font-weight-bold pos-rel z-index-2"><?php printf( _x( '%s ago', '%s = human-readable time difference', 'hub' ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?></span>
							<h2 class="lqd-lp-title mt-2 mb-0 h5 lh-135"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						</div>
					</header>
	
					<a href="<?php the_permalink() ?>" class="lqd-lp-overlay-link lqd-overlay z-index-2"></a>
	
				</article>
				<?php } ?>
	
			</div>
					
			<?php endwhile; ?>
	
		</div>
	</div>

</div>
<?php wp_reset_postdata();