<?php
/**
 * The template for displaying all single case studies posts
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */

get_header(); ?>  

<div id="primary" class="content-area single-cat-case-studies">
	<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); $do_not_duplicate = $post->ID;

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'case-study' ); 

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
		<?php endwhile; ?>
<?php wp_reset_query(); ?>   

<!-- ---------------------------- -->
<!-- ---------- RELATED POSTS --- -->
<!-- ---------------------------- -->
<div class="section-related grid-10 fl ppb2 ppt2 clearfix" style="display:none;">

	<h2 class="related purple">Explore More of Our Work</h2> 

	<div class="grid-page clearfix">
 		<ul class="related-post clearfix">  
		<?php query_posts('posts_per_page=4&orderby=rand'); ?> 
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); if( $post->ID == $do_not_duplicate ) continue; ?> 
 				<li class="">
						<a href="<?php the_permalink(); ?>"
							<?php if(get_field('background')): $i = 0; ?>
							<?php while(has_sub_field('background')): $i++; ?> 
									<?php if( (get_sub_field('photo') == true) ){ echo 'style="background-image:url('; } ?>
										<?php if( (get_sub_field('photo') == true) ){ ?>
											<?php if (has_post_thumbnail( $post->ID ) ): ?>
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
												echo '' . $image[0] . ''; ?>
											<?php endif; ?>
										 <?php } ?> 													
									<?php if( (get_sub_field('photo') == true) ){ echo ');background-size:cover;background-position:center-center;background-repeat:no-repeat;"'; } ?>
							<?php endwhile; ?>
							<?php endif; ?>
							<?php if(get_field('photo_box')): $i = 0; ?>
							<?php while(has_sub_field('photo_box')): $i++; ?> 
									<?php if( (get_sub_field('photo') == true) ){ echo 'style="background-image:url('; } ?>
										<?php if( (get_sub_field('photo') == true) ){ ?>
											<?php if (has_post_thumbnail( $post->ID ) ): ?>
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
												echo '' . $image[0] . ''; ?>
											<?php endif; ?>
										 <?php } ?> 													
									<?php if( (get_sub_field('photo') == true) ){ echo ');background-size:cover;background-position:center-center;background-repeat:no-repeat;"'; } ?>
							<?php endwhile; ?>
							<?php endif; ?>
						>

							<?php if(get_field('background')): $i = 0; ?>
							<?php while(has_sub_field('background')): $i++; ?> 
									<?php if( ((get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity'))  == true) ){ echo '<div class="color-overlay '; } ?>
										<?php the_sub_field('color_gradient'); ?> <?php the_sub_field('color_gradient_opacity'); ?>
									<?php if( ((get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity'))  == true) ){ echo '" style="display:none;"></div>'; } ?>
							<?php endwhile; ?>
							<?php endif; ?> 

							<div class="table"><div class="table-cell"> 
								<!-- End Category Icon --> 

							<?php if(get_field('post_title')): $i = 0; ?>
							<?php while(has_sub_field('post_title')): $i++; ?> 
									<h2 class ="white darwin fs26 tac bs"><?php the_title(); ?></h2>
							<?php endwhile; ?>
							<?php endif; ?> 

							</div></div>

						<div class="wl-overlay">
						<svg width="30" height="16" viewBox="0 0 24 13" xmlns="https://www.w3.org/2000/svg" class="link-icon"><path d="M21.453 5.643H0v.89h21.39l-5.132 4.996.915.76 6.397-6.213L17.21 0l-.954.708 5.197 4.935z" fill="#FFFFFF" fill-rule="evenodd"/></svg>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
						</div> 

					</a>  
				</li>
 			<?php endwhile; endif; ?><?php wp_reset_query(); ?> 
 		</ul>
	</div>
</div>  

	</main><!-- .site-main -->
	<?php // get_sidebar( 'content-bottom' ); ?> 
</div><!-- .content-area -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>