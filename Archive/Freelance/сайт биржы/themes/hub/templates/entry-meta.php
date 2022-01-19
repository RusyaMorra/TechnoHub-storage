<div class="lqd-lp-meta lqd-lp-meta-dot-between d-flex flex-wrap align-items-center text-uppercase ltr-sp-1 font-weight-bold">
	<?php liquid_post_terms( array( 'taxonomy' => 'category', 'text' => esc_html__( '%s', 'hub' ), 'solid' => true ) ); ?>
	<?php liquid_post_terms( array( 'taxonomy' => 'post_tag', 'text' => esc_html__( '%s', 'hub' ), 'solid' => true ) ); ?>
	<a href="<?php the_permalink() ?>"><time class="lqd-lp-date" datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date( get_option( 'date_time' ) ); ?></time></a>
</div>