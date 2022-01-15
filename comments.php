<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cooper
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$cooper_comment_count = get_comments_number();
			if ( '1' === $cooper_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'cooper' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $cooper_comment_count, 'comments title', 'cooper' ) ),
					number_format_i18n( $cooper_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'cooper' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	$comment_args = array(
		'class_submit' => 'btn btn-dark submit',
		'comment_field' => '<div class="comment-form-comment mb-3"><label for="comment" class="form-label">' . __( 'Your Comment', 'cooper' ) . '</label> <textarea id="comment" name="comment" class="form-control" cols="45" rows="8" aria-required="true" required="required"></textarea></div>',
		'fields' => array(
			'author' => '<div class="comment-form-author mb-3">' . '<label for="author" class="form-label">' . __( 'Your Name', 'cooper' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			'<input id="author" name="author" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . ' /></div>',
			'email'  => '<div class="comment-form-email mb-3"><label for="email" class="form-label">' . __( 'Email', 'cooper' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			'<input id="email" name="email" class="form-control" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"'  . ' /></div>',
			'url'    => '<div class="comment-form-url mb-3"><label for="url" class="form-label">' . __( 'Website', 'cooper' ) . '</label> ' .
			'<input id="url" name="url" class="form-control" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>',
			)
	);
	comment_form($comment_args);

	?>

</div><!-- #comments -->
