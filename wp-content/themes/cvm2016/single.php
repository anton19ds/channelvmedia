<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */

get_header(); ?>  

<div id="primary" class="content-area single-post default">
	<main id="main" class="site-main" role="main">  

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); $do_not_duplicate = $post->ID;

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' ); 

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				// the_post_navigation( array(
					// 'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						// '<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						// '<span class="post-title">%title</span>' .
						// ' . the_post_thumbnail() . ',
					// 'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						// '<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						// '<span class="post-title">%title</span>',
				// ) );
			}
			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) {
				// comments_template();
			// } 
			// End of the loop.
 ?>    
		
		
	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<footer class="entry-footer"><div class="grid-10 clearfix"><div class="grid-page clearfix"><span class="edit-link bg-white">',
			'</span></div></div></footer><!-- .entry-footer -->'
		);
	?>
		
		
		<?php endwhile; ?>
<?php wp_reset_query(); ?> 
		
	</main><!-- .site-main -->
	<?php // get_sidebar( 'content-bottom' ); ?> 
</div><!-- .content-area -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>