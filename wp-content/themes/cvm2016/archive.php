<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */

get_header(); ?>  

	<div id="primary" class="content-area">
		<main id="main" class="site-main clearfix" role="main"> 

			<div class="grid-work mauto"> 
				<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
			</div>

			<div class="grid-work clearfix">
				<div class="grid-10 fl clearfix"> 
					<?php the_archive_title( '<h1 class="block-headline_alt sp purple mt10 mb10">', '</h1>' ); ?> 
					<?php if ( $description ) : ?>
						<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
					<?php endif; ?> 
				</div> 
				
				<!-- ---------- BLOG POSTS ------ -->
				<ul class="blog-posts ppb2 pmt2 clearfix">
					<?php global $more; $more = 0; ?>
					<?php if ( have_posts() ) : ?>
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post(); ?>
					<li class="<?php echo $cat; ?> clearfix">
						<?php if( (get_field('news_url') == true) ) {
							echo '<a href="' . get_field('news_url') . '" target="_blank"';
						} else { ?>
						<a href="<?php the_permalink(); ?>"
							<?php } ?> class="<?php if((get_field('press_featured') == true) ){ echo 'featured'; } ?>"> 
							<div class="post-image">
								<div class="post-bg"
									 <?php if (has_post_thumbnail( $post->ID ) ): ?>
									 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
									 echo 'style="background-image:url(' . $image[0] . ');"'; ?>
									 <?php endif; ?>
									 >   
								</div>
								<div class="color-overlay purple-pink-diagonal opacity20 "></div>
							</div>
							<div class="blog-content-wrap mauto clearfix"> 
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

	</div><!-- .content-area -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
