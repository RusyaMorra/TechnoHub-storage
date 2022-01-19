<?php get_header() ?>

<main id="panel"  class="site-main" style="background-color=black; height=100%; width=100%;">

<section class="error-404 not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'just-topic' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<p class="p404"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'just-topic' ); ?></p>

	</div><!-- .page-content -->
</section><!-- .error-404 -->

</main><!-- #main -->

<?php get_footer();?>