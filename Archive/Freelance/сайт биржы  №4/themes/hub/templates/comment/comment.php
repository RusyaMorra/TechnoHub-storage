<li <?php liquid_helper()->attr( 'comment' ); ?>>
	<article id="div-comment-3" class="comment-body">
		<footer class="comment-meta">
			<div class="comment-author vcard flex-grow align-items-center">
				<h2 class="screen-reader-text"><?php echo esc_html__( 'Post comment', 'hub' ) ?></h2>
				<?php echo get_avatar( $comment, 70 ); ?>
				<div class="d-flex flex-column">
					<b <?php liquid_helper()->attr( 'comment-author' ); ?>><?php comment_author_link(); ?></b>
					<span class="says"><?php esc_html_e( 'says', 'hub' ) ?>:</span>
					<div class="comment-metadata">
						<a <?php liquid_helper()->attr( 'comment-permalink' ); ?>><time <?php liquid_helper()->attr( 'comment-published' ); ?>><?php printf( esc_html__( '%s ago', 'hub' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) ); ?></time></a>
					</div>
				</div>
			</div>
			
		</footer>
		
		<div class="comment-content">
			<?php comment_text(); ?>
		</div>
		
		<div class="comment-extras">
			<div class="reply">
				<?php liquid_comment_reply_link(); ?>
			</div>
			<?php if ( $comment->comment_approved == '0' ) { ?>
				<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'hub' ) ?></p>
			<?php } ?>
		</div>
	</article>
