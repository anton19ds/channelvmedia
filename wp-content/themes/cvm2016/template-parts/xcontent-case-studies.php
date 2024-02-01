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
 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
	<div class="section">
		<div class="text title-inner center center">

			<div class="grid-work content-single content-case-studies">
				<?php // Must be inside a loop.
				if ( has_post_thumbnail( $post->ID ) ) {
					  $attachment_meta = get_post(get_post_thumbnail_id());
					  $img_alt =  get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
					the_post_thumbnail('post-thumbnail', ['class' => 'responsive-img fl', 'alt' => ''.$img_alt.'']);
				} else {
					echo '<img class="responsive-img fl" src="' . $image[0] . '" alt="Featured Image" border="0"/>';
				} ?>
				<div class="color-overlay purple-pink-diagonal opacity20 "></div>
			</div>
			<div class="grid-work"> 
				<?php $thumbnail_id = get_post_thumbnail_id($post->ID);
				$thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));
				if ($thumbnail_image && isset($thumbnail_image[0])) {
					echo '<span class="caption">'.$thumbnail_image[0]->post_excerpt.'</span>';
				} ?>
			</div>
			
            <div class="grid-press-post mauto clearfix">

                <div class="grid-10 fl">
					<div class="grid-fixed-6 fl">
						<div class="press-category">
							<?php $current_cat_id = the_category_ID(false); echo '' . get_cat_name($current_cat_id) . ''; ?>
						</div>
					</div>
					<div class="grid-fixed-4 fr">
						<div id="social-bar-small-holder" class="clearfix" style="padding-top:15px;width:100% !important;"><?php my_socialbar(); ?></div>
					</div>   
				</div>   

                <div class="grid-10 fl">  
						<h1 class="press-title"><?php the_title(); ?></h1>
						<?php if( (get_field('press_subtitle') == true) ){ echo '<h4 class="pmt2">'; } ?><?php the_field('press_subtitle'); ?><?php if( (get_field('press_subtitle') == true) ){ echo '</h4>'; } ?>  
				</div>   
				
				<?php if( (get_field('press_byline') == true) ){ 
					echo '<div class="grid-10 fl clearfix"><p class="author">By ' . get_field('press_byline') . '</p></div>';  
				} else { ?>
					<div class="grid-10 fl clearfix"><p class="author">By <?php the_author(); ?></p></div>
				<?php } ?>
				
            	<div class="press-date fl"><?php the_date(); ?></div>   
			
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

<div class="grid-10 clearfix">
	<a href="/work/" class="press-back"> 
			<div class="grid-page clearfix">View All Case Studies <img src="https://channelvmedia.com/wp-content/uploads/2017/10/bullet-arrow.svg" width="20" height="auto" alt="Go" border="0" style="top:5px;"/></div> 
	</a>
</div>