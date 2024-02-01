<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
?>
<script type="text/javascript" src="/wp-content/themes/cvm2016/js/revealer-head.js"></script> 
<?php get_template_part( 'template-parts/subscribe-form' ); ?>
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
			</div>
		
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
								<div class="grid-10 fl mt20 mb20 clearfix">
									<p class="author">
										<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>">Written by <?php the_author(); ?></a>
										<?php if((get_field('edited_by') && get_field('author_url') == true) ) { echo '<a href="' . get_field('author_url') . ''; } ?><?php if((get_field('edited_by') && get_field('author_url') == true) ){ echo '" title="' . get_field('edited_by') . '">'; } ?><?php if((get_field('edited_by') && get_field('author_url') == true) ){ echo 'Edited by ' . get_field('edited_by') . ''; } ?><?php if((get_field('edited_by') && get_field('author_url') == true) ){ echo '</a>'; } ?>
									</p>
								</div> 
							<?php } ?>
							           
							<div class="press-date fl mb20"> 
								<?php // the_date(); ?> <!-- / --> <?php echo do_shortcode('[rt_reading_time label="Reading Time:" postfix="minutes"]'); ?>
							</div>
							
						</div>  
					</div> 
				</div>  
			</div>
	</div>

	<section id="sticky-side" class="grid-10 fl clearfix" style="<?php if(get_field('padding_top')) { echo 'padding-top:' . get_field('padding_top') . ';'; } ?> <?php if(get_field('padding_bottom')) { echo 'padding-bottom:' . get_field('padding_bottom') . ';'; } ?>">
		<?php if(get_field('sticky_post_list')): $i = 0; ?>
		<ul class="sticky-post-list-flex">
			<?php while(has_sub_field('sticky_post_list')): $i++; ?>
			<li class="bg-white ">
				<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" role="link">'; } ?> 
				<?php if(get_sub_field('photo')) { echo '<span class="post-img"><span class="post-bg clearfix" style="background-image:url(' . get_sub_field('photo') . ');"><span class="color-overlay purple-pink-diagonal opacity30"></span></span></span>'; } ?>

				<span class="post-content">
					<?php if(get_sub_field('title')) { echo '<h3 class="post-name mt0 mb0">' . get_sub_field('title') . '</h3>'; } ?>
					<?php if(get_sub_field('desc')) { echo '<span class="post-desc">' . get_sub_field('desc') . '</span>'; } ?>
					<?php if((get_sub_field('button_text') && get_sub_field('link')) == true ) { echo '<span class="post-link">' . get_sub_field('button_text') . '</span>'; } ?>
				</span>
				<?php if(get_sub_field('link')) { echo '</a>'; } ?>
			</li>
			<?php endwhile; ?>
		</ul>
		<?php endif; ?> 
	</section>

	<div id="scene01" class="section single-post">  
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
				<div class="grid-press-post mauto pmt2 clearfix"> 
					<?php comments_template(); ?>
				</div>
			<?php endif; ?>
			
        </div> 
	</div> 
 
</article> 

<?php get_template_part( 'template-parts/related-posts' ); ?> 