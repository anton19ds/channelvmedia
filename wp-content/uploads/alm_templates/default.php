<li class="<?php echo $cat; ?> <?php if((get_field('press_size') == true) ){ echo 'half'; } ?> <?php if((get_field('press_align_right') == true) ){ echo 'right'; } ?> clearfix"> 
				<div class="press-shadow"></div>
<?php if( (get_field('news_url') == true) ) {
	echo '<a href="' . get_field('news_url') . '" target="_blank"';
} else { ?>
    <a href="<?php the_permalink(); ?>"
<?php } ?>
class="<?php if((get_field('press_featured') == true) ){ echo 'featured'; } ?>">
    
                    <div class="press-image"
                        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
                            echo 'style="background-image:url(' . $image[0] . ');"'; ?>
                        <?php endif; ?>
                    ></div> 
                    <div class="press-info fl clearfix">
                        <div class="grid-page">
                            <div class="press-category">
                                <?php $current_cat_id = the_category_ID(false);
                                echo '' . get_cat_name($current_cat_id) . '';
                                ?>
                            </div> 
                            <div class="press-date"><?php the_date(); ?></div>    
                            
                            <?php if(get_field('press_logo')): $i = 0; ?>
                            <?php while(has_sub_field('press_logo')): $i++; ?> 
                                <?php if( (get_sub_field('logo') == true) ){ echo '<div class="press-logo"'; } ?>
                                <?php if( (get_sub_field('width') == true) ){ echo 'style="width:'; } ?><?php the_sub_field('width'); ?><?php if( (get_sub_field('width') == true) ){ echo ';"'; } ?>
                                <?php if( (get_sub_field('logo') == true) ){ echo '><img class="repsonsive-img" src="'; } ?>
                                    <?php the_sub_field('logo'); ?>
                                <?php if( (get_sub_field('logo') == true) ){ echo '" alt="Logo" border="0"/></div>'; } ?> 
                            <?php endwhile; ?>
                            <?php endif; ?>                          
                            
                            <h1 class="press-headline"><?php the_title(); ?></h1> 
                        </div>
                    </div>
                </a>
				
				<div class="press-social <?php if((get_field('press_featured') == true) ){ echo 'featured'; } ?>"> 
                                <meta property="og:title" content="<?php the_title(); ?>"/>
                                <meta property="og:type" content="website"/>
                                <meta property="og:url" content="<?php the_permalink(); ?>"/>
                                <meta property="og:image" content="<?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
                            echo 'style="background-image:url(' . $image[0] . ');"'; ?>
                        <?php endif; ?>"/>
                                <meta property="og:description" content="<?php the_field('social_media_description'); ?>" />
                                <div id="social-bar-small-holder" class="clearfix"><?php my_socialbar(); ?></div>
                </div> <!-- end press-social -->
				
            </li>