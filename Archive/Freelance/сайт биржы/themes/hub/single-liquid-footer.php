<?php
/**
 * The template for displaying all single posts.
 *
 * @package base-theme
 */
get_header();

	while ( have_posts() ) : the_post();

		the_content();

	endwhile;

get_footer();
