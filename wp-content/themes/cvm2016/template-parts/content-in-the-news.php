<?php
/**
 * The template part for displaying in the news posts
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
?>
<?php get_template_part( 'template-parts/subscribe-form' ); ?>
<!-- ---------- HERO ---------------- -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="grid-work mauto blog-hero-wrap mb0 clearfix"> 
			<div class="grid-6b fr post-image-hero clearfix"> 
				<div class="post-bg clearfix"
					 <?php if (has_post_thumbnail( $post->ID ) ): ?>
					 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
					 echo 'style="background-image:url(' . $image[0] . ');"'; ?>
					 <?php endif; ?>
					 > 
				</div> <!-- end post-bg --> 
				<div class="grid-work">
					<?php $thumbnail_id = get_post_thumbnail_id($post->ID);
					$thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));
					if ($thumbnail_image && isset($thumbnail_image[0])) {
						echo '<span class="caption">'.$thumbnail_image[0]->post_excerpt.'</span>';
					} ?>
				</div>
				<div class="color-overlay purple-pink-diagonal opacity20 "></div>
			</div> <!-- end post-image-hero -->
			<div class="grid-3b fl clearfix"> 
				<div class="blog-hero-content bg-white clearfix">  
					<div class="table-blog-hero"> 
						<div class="table-cell">
							<div class="press-category">
								<?php $current_cat_id = the_category_ID(false); echo '' . get_cat_name($current_cat_id) . ''; ?>
							</div>             
							<h1 class="press-title"><?php the_title(); ?></h1>
							<?php if( (get_field('press_subtitle') == true) ){ echo '<h4 class="mt10 mb0">'; } ?><?php the_field('press_subtitle'); ?><?php if( (get_field('press_subtitle') == true) ){ echo '</h4>'; } ?>
							
							<?php if( (get_field('press_byline') == true) ){ ?>
								<div class="grid-10 fl mt20 mb20 clearfix"><p class="author">  
								<?php if((get_field('news_url') == true)){ echo'<a target="blank" href="' . get_field('news_url') . '">'; } ?>
								<?php if( (get_field('press_byline') == true) ){ echo 'By ' . get_field('press_byline') . ''; } ?>
								<?php if((get_field('news_url') == true)){ echo'</a>';} ?>
								</p></div>
							<?php } else { ?>
								<div class="grid-10 fl mt20 mb20 clearfix"><p class="author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>">By <?php the_author(); ?></a></p></div> 
							<?php } ?>
							           
							<div class="press-date fl mb20"> 
								<?php // the_date(); ?> <!-- / --> <?php echo do_shortcode('[rt_reading_time label="Reading Time:" postfix="minutes"]'); ?>
							</div>
							
						</div>  
					</div> 
				</div>  
			</div>
	</div>
	
	<div class="section single-post">  
		<div class="text title-inner center center">  
            <div class="grid-press-post mauto clearfix">
			
                <div class="grid-10 fl">
					<div class="grid-4 fr"> 
						<div id="social-bar-small-holder" class="clearfix" style="width:100% !important;"><?php my_socialbar(); ?></div>
					</div>  
					<?php if(get_field('press_logo')): $i = 0; ?> 
					<div class="grid-3 fl">  
						<div class="press-logo-post clearfix">
						<?php while(has_sub_field('press_logo')): $i++; ?> 
							<?php if( (get_sub_field('logo') == true) ){ echo '<div class="press-logo fl"'; } ?>
								<?php if( (get_sub_field('width') == true) ){ echo 'style="width:'; } ?><?php the_sub_field('width'); ?><?php if( (get_sub_field('width') == true) ){ echo ';">'; } ?> 
								<?php $image = get_sub_field('logo'); ?>
								<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" border="0"/> 
							<?php if( (get_sub_field('logo') == true) ){ echo '</div>'; } ?>
							<?php endwhile; ?> 
						</div>    
					</div>   
					<?php endif; ?>  
				</div>   
			
 			</div> 
			
 				
            <div class="grid-press-post mauto clearfix">
				<div class="grid-10 clearfix"><?php the_content(); ?></div>
            </div> <!-- end grid-press-post --> 
 
			<?php if ( comments_open() || get_comments_number() ) : ?>
				<div class="grid-press-post mauto pmt4 clearfix"> 
					<?php comments_template(); ?>
				</div>
			<?php endif; ?>
			
        </div> 
	</div> 
 
</article>

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<footer class="entry-footer"><div class="grid-10 clearfix"><div class="grid-page clearfix"><span class="edit-link">',
			'</span></div></div></footer><!-- .entry-footer -->'
		);
	?>  