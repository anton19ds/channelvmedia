<?php
/**
 * Template Name: Expertise PR Service Sub
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
get_header(); ?> 

<section class="grid-10 clearfix">
	<main class="grid-10 clearfix">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>  
			<?php the_content();
				  wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
						'separator'   => '<span class="screen-reader-text">, </span>',
				) );
			?> 
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
						get_the_title()
					),
					'<footer class="entry-footer"><span class="edit-link fn bg-dark-purple mb0 pt2"><span class="fn mauto">',
					'</span></span></footer><!-- .entry-footer -->'
				);
			?> 
		<?php endwhile; ?>
	</main>
 
</section><!-- .grid-10 --> 

    
<?php get_footer(); ?>