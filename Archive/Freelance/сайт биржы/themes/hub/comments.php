<?php

/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Hub
 */

// If a post password is required or no comments are given and comments/pings are closed, return.
if ( post_password_required() ) {
	return;
}

?>
<div id="comments" class="comments-area clearfix mt-6">
			
	<?php 
		
		$req      = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );
			$html_req = ( $req ? " required='required'" : '' );
			$html5    = true;
		$fields   =  array(
			'author' => '<div class="col-md-4 col-sm-6"><p class="comment-form-author"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="' . esc_attr__( 'Name', 'hub' ) . ( $req ? '*' : '' ) . '" size="30" maxlength="245"' .  $aria_req . $html_req . ' /></p></div>',
									
			'email'  => '<div class="col-md-4 col-sm-6"><p class="comment-form-email"><input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="' . esc_attr__( 'Email', 'hub' ) . ( $req ? '*' : '' ) . '" size="30" maxlength="100" ' . $html_req  . ' /></p></div>',
									
			'url'    => '<div class="col-md-4 col-sm-6"><p class="comment-form-url"><input id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="' . esc_attr__( 'Website', 'hub' ) . '" size="30" maxlength="200" /></p></div>',
		);
	?>
	<?php comment_form( array(

			'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title mt-0">',
			'title_reply' => esc_html__( 'Leave a comment', 'hub' ),
			'title_reply_after' => '</h3>',

			'fields' => $fields,
			
			'comment_field' => '<div class="col-sm-12"><p class="comment-form-comment"><textarea id="comment" name="comment" rows="6" placeholder="'. esc_attr__( 'Comment', 'hub' ) .'" required="required"></textarea></p></div>',
			
			'comment_notes_before' => '',
			'label_submit' => esc_attr__( 'Submit', 'hub' ),
			'submit_field' => '<div class="col-sm-12"><p class="form-submit">%1$s %2$s</p></div>',
	) ); ?>	
			
	<?php if ( have_comments() ) : ?>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style' => 'ol',
					'callback' => 'liquid_comments_callback'
				) );
			?>
		</ol>		
	<?php

	get_template_part( 'templates/comment/nav' );

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'hub' ); ?></p>

	<?php endif; ?>

</div>