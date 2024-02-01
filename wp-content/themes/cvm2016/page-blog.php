<?php
/**
 * Template Name: Blog
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
get_header(); ?>   

			<?php get_template_part( 'template-parts/subscribe-form' ); ?>  

			<!-- ---------- BLOG CATEGORIES - --> 
			<div class="grid-10 fl press-hero-section bg-white conditional-archive-and-paged pb0 pt0 mb10 clearfix"> 
				<div class="grid-work mauto clearfix"> 
					<?php wp_nav_menu( array('menu' => 'Blog Category Menu' )); ?>  
				</div>
			</div>

			<div class="grid-work mauto">
				<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
			</div>

			<!-- start Search THIS IS HIDDEN WITH CSS -->
			<div class="grid-work mauto search-wrap">
				<div class="search-nac-icon"></div>
				<!-- start Search -->
				<div class="grid-10 fl nac-search-wrap">
					<div class="search-nac-close"></div>
					<form role="search" method="get" class="search-form" action="<?php echo site_url(); ?>">
						<input type="submit" class="search-nac" value="Go"> 
						<label>
							<input type="search" class="input-nac search-field" placeholder="Search" value="<?php echo trim( get_search_query() ); ?>" name="s" id="s">  
						</label> 
						<input type="hidden" value="post" name="post_type" id="post_type" />
						<input type="hidden" value="7, 50, 51, 52" name="cat" id="scat" /> 
						
					</form>
				</div>   
			</div>
			<!-- end Search -->  

			<!-- start query if is blog and not paged --> 
			<?php global $wp_query;
			if ( is_page('blog') && !is_paged() ) : ?> 
				<!-- start featured blog template -->  
				<?php query_posts('showposts=1&cat=20&orderby=date&order=DESC'); $countfeaturedposts = 1;   
					while (have_posts()) : the_post(); $do_not_duplicate = $post->ID; $countfeaturedposts++; ?> 
					<div class="grid-work mauto blog-hero-wrap mb30 clearfix"> 
						<a href="<?php the_permalink(); ?>" class="<?php echo $countfeaturedposts ?>">
							<div class="grid-7 fr post-image-hero clearfix"> 
								<div class="post-bg clearfix"
									 <?php if (has_post_thumbnail( $post->ID ) ): ?>
									 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
									 echo 'style="background-image:url(' . $image[0] . ');"'; ?>
									 <?php endif; ?>
									 >
								</div> <!-- end post-bg -->
								<div class="color-overlay purple-pink-diagonal opacity20 "></div>
							</div> <!-- end post-image-hero -->
							<div class="grid-3 fl clearfix"> 
								<div class="blog-hero-content bg-white clearfix">  
									<div class="table-blog-hero"> 
										<div class="table-cell">
											<h2 class="blog-headline pt20"><?php the_title(); ?></h2> 
											<span class="blog-link">Read More</span>
										</div>  
									</div> 
								</div>  
							</div>  
						</a>
					</div> <!-- end grid-work --> 
				<?php endwhile; ?>
				<!-- end featured blog template -->  
			<!-- end query if is blog and not paged -->  
			<?php wp_reset_query(); endif; ?> 

			<div class="grid-10 fl clearfix">
				<main class="grid-work clearfix"> 
			<!-- ---------------------------- -->
			<!-- ---------- BLOG POSTS ------ -->
			<!-- ---------------------------- --> 
					<ul class="blog-posts ppb2 pmt2 clearfix">   
						<?php if (is_page('blog') && !is_paged()) { /* conditional for 1st paginated page */?>
							<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("cat=-2,-3&order=desc&posts_per_page=12&paged=$paged"); $countposts = -1; ?> 
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
								<div class="post-image"> 
									<div class="post-bg clearfix"
										 <?php if (has_post_thumbnail( $post->ID ) ) { ?>
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
											echo 'style="background-image:url(' . $image[0] . ');"'; ?>
										<?php } else {
											echo 'style="background-image:url(https://channelvmedia.com/wp-content/uploads/2016/12/cvm-home-1000.jpg);"';
										} ?> 
									> 
									<div class="color-overlay purple-pink-diagonal opacity20 "></div>
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

						<?php endwhile; endif;

						// Previous/next page navigation.
						the_posts_pagination( array(
							'prev_text'          => __( 'Previous page', 'twentysixteen' ),
							'next_text'          => __( 'Next page', 'twentysixteen' ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
						) );
						?> 
					</ul> <!-- end pressroom-posts-lst -->   
					
					<?php wp_reset_query(); ?> 
				</main>
			</div><!-- .grid-10 -->

<?php get_footer(); ?>