<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */

get_header(); ?>
 
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main"> 

			<div class="grid-work clearfix">
				<!-- ---------------------------- -->
				<!-- ---------- BLOG POSTS ------ -->
				<!-- ---------------------------- -->
					<ul class="blog-posts ppb2 pmt2 clearfix">   
						<?php if (is_page('blog') && !is_paged()) { ?>
							<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("cat=-2,-3&order=desc&posts_per_page=13&paged=$paged"); $countposts = -1; ?> 
						<?php } else { ?>
						   <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("cat=-2,-3&order=desc&posts_per_page=12&paged=$paged"); $countposts = -1; ?> 
						<?php } ?>  
 						<?php if (have_posts()) : while(have_posts()) : the_post(); $countposts++; if( $post->ID == $do_not_duplicate ) continue; ?>  
							 
						<li class="<?php echo $cat; ?> <?php echo $countposts ?> clearfix">
								<?php if( (get_field('news_url') == true) ) {
									echo '<a href="' . get_field('news_url') . '" target="_blank"';
								} else { ?>
									<a href="<?php the_permalink(); ?>"
								<?php } ?> class="<?php if((get_field('press_featured') == true) ){ echo 'featured'; } ?>">
								<div class="post-image here"> 
									<div class="post-bg clearfix"
										 <?php if (has_post_thumbnail( $post->ID ) ) { ?>
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
											echo 'style="background-image:url(' . $image[0] . ');"'; ?>
										<?php } else {
											echo 'style="background-image:url(https://channelvmedia.com/wp-content/uploads/2016/12/cvm-home-1000.jpg);"';
										} ?> 
									> 
								</div></div>
								<div class="blog-content-wrap mauto clearfix">
									<div class="blog-info clearfix" style="display:none;">
										<?php // echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>  
										<div class="blog-category">
											<?php // $current_cat_id = the_category_ID(false); echo '' . get_cat_name($current_cat_id) . ''; ?>
											<?php // $categories = get_the_category();
												// if ( ! empty( $categories ) ) { echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';} ?> 
										</div>
									</div> 
									<h2 class="blog-headline pt1"><?php the_title(); ?></h2>
									<div class="blog-content"><?php echo excerpt(15); ?></div> 
									<span class="blog-link">Read More</span> 
								</div>  
							</a> 
						</li> 
					<?php endwhile;

					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentysixteen' ),
						'next_text'          => __( 'Next page', 'twentysixteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
					) );

					// If no content, include the "No posts found" template.
					else :
						get_template_part( 'template-parts/content', 'none' );

					endif;
					?> 
				</ul> <!-- end pressroom-posts-lst -->   
				
				 
			</div> 
<?php wp_reset_query(); ?>
			
			 

		</main><!-- .site-main -->
	</section><!-- .content-area -->

 <?php get_footer(); ?>
