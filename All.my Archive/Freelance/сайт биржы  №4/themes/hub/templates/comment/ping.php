<li <?php liquid_helper()->attr( 'comment' ); ?>>

	<header class="comment-meta">

		<cite <?php liquid_helper()->attr( 'comment-author' ); ?>><?php comment_author_link(); ?></cite><br />

		<time <?php liquid_helper()->attr( 'comment-published' ); ?>><?php printf( esc_html__( '%s ago', 'hub' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) ); ?></time>

		<a <?php liquid_helper()->attr( 'comment-permalink' ); ?>><?php esc_html_e( 'Permalink', 'hub' ); ?></a>

		<?php edit_comment_link(); ?>

	</header>

<?php // No closing </li> is needed.  WordPress will know where to add it. ?>
