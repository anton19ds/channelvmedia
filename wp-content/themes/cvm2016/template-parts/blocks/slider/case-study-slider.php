<?php
/**
 * Case Study Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.
$id = 'block-' . $block['id'];
if( !empty($block['anchor']) ) {
   $id = $block['anchor'];
}
// Create class attribute allowing for custom "className" and "align" values.
$className = '';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
} 
?>
<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php echo esc_attr($className); ?> <?php if(get_field('background_color')) { echo '' . get_field('background_color') . ''; } ?><?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb4';} ?> clearfix" style="display:none;">

	<?php if(get_field('background_photo')) { echo '<div class="color-overlay bg-common clearfix'; } ?>
		<?php if((get_field('background_photo_opacity')) == true) { echo ' ' . get_field('background_photo_opacity') . ''; } ?>
		<?php if(get_field('background_photo')) { echo '" style="'; } ?>
		<?php if(get_field('background_photo')) { echo 'background-image:url(' . get_field('background_photo') . ');'; } ?>
		<?php if((get_field('background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?>
	<?php if(get_field('background_photo')) { echo '"></div>'; } ?> 

	<?php if(get_field('background_color_filter')) { echo '<div class="color-overlay ' . get_field('background_color_filter') . ''; } ?><?php if((get_field('background_color_filter_opacity')) == true) { echo ' ' . get_field('background_color_filter_opacity') . ' '; } ?><?php if(get_field('background_color_filter')) { echo ' clearfix"></div>'; } ?>
	  
	<div class="grid-page clearfix">  
		<?php if(get_field('heading_content_width') || get_field('heading_content_top_padding') || get_field('heading_content_bottom_padding') || get_field('heading_content_position')) { echo '<div class="' . get_field('heading_content_width') . ''; } ?><?php if(get_field('heading_content_position')) { echo ' ' . get_field('heading_content_position') . ''; } else { echo' ';} ?><?php if(get_field('heading_content_top_padding')) { echo ' ' . get_field('heading_content_top_padding') . ''; } ?><?php if(get_field('heading_content_bottom_padding')) { echo ' ' . get_field('heading_content_bottom_padding') . ''; } ?><?php if(get_field('heading_content_width') || get_field('heading_content_top_padding') || get_field('heading_content_bottom_padding') || get_field('heading_content_position')) { echo ' clearfix">'; } ?>		
			<?php
            // check if the flexible content field has rows of data
            if( have_rows('headlines_content') ): ?>
            <?php 
                 // loop through the rows of data
                while ( have_rows('headlines_content') ) : the_row(); ?>  
					<?php // Label
						if( get_row_layout() == 'section_content_label' ): ?> 
						<?php if(get_sub_field('label')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('label_top_margin')) { echo ' ' . get_sub_field('label_top_margin') . ''; } ?><?php if(get_sub_field('label_bottom_margin')) { echo ' ' . get_sub_field('label_bottom_margin') . ''; } ?><?php if(get_sub_field('label')) { echo ' clearfix">'; } ?>   
 
							<?php if(get_sub_field('label')) { echo '
								<p class="sp-small mt0 mb20'; } ?><?php if(get_sub_field('label_color')) { echo ' ' . get_sub_field('label_color') . ''; } ?><?php if(get_sub_field('label_shadow')) { echo ' ' . get_sub_field('label_shadow') . ''; } ?><?php if(get_sub_field('label_alignment')) { echo ' ' . get_sub_field('label_alignment') . ''; } ?><?php if(get_sub_field('label')) { echo '">' . get_sub_field('label') . '</p>'; } ?> 
		
						<?php if(get_sub_field('label')) { echo '</div>'; } ?>  
					<?php endif; ?>  
                    <?php // Headlines 
						if( get_row_layout() == 'section_content_headlines' ): ?> 
						<?php if(get_sub_field('headline') || get_sub_field('subheadline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('headlines_top_margin')) { echo ' ' . get_sub_field('headlines_top_margin') . ''; } ?><?php if(get_sub_field('headlines_bottom_margin')) { echo ' ' . get_sub_field('headlines_bottom_margin') . ''; } ?><?php if(get_sub_field('headline') || get_sub_field('subheadline')) { echo ' clearfix">'; } ?>   
						
							<?php if(get_sub_field('headline')) { echo '
								<h2 class="block-headline_alt pb2'; } ?><?php if(get_sub_field('headline_color')) { echo ' ' . get_sub_field('headline_color') . ''; } ?><?php if(get_sub_field('headline_shadow')) { echo ' ' . get_sub_field('headline_shadow') . ''; } ?><?php if(get_sub_field('headlines_align') && get_sub_field('headline')) { echo ' ' . get_sub_field('headlines_align') . ''; } ?><?php if(get_sub_field('headline')) { echo '">' . get_sub_field('headline') . '</h2>'; } ?>

							<?php if(get_sub_field('subheadline')) { echo '
								<span class="block-subheadline pt0'; } ?><?php if(get_sub_field('subheadline_color')) { echo ' ' . get_sub_field('subheadline_color') . ''; } ?><?php if(get_sub_field('subheadline_shadow')) { echo ' ' . get_sub_field('subheadline_shadow') . ''; } ?><?php if(get_sub_field('headlines_align') && get_sub_field('subheadline')) { echo ' ' . get_sub_field('headlines_align') . ''; } ?><?php if(get_sub_field('subheadline')) { echo '">' . get_sub_field('subheadline') . '</span>'; } ?>

						<?php if(get_sub_field('headline') || get_sub_field('subheadline')) { echo '</div>'; } ?> 
                    <?php endif; ?>
                     <?php // Text 
						if( get_row_layout() == 'section_content_text' ): ?> 
						<?php if(get_sub_field('description')) { echo '<div class="grid-10 fl overview-description'; } ?><?php if(get_sub_field('description_top_margin')) { echo ' ' . get_sub_field('description_top_margin') . ''; } ?><?php if(get_sub_field('description_bottom_margin')) { echo ' ' . get_sub_field('description_bottom_margin') . ''; } ?><?php if(get_sub_field('description')) { echo ' clearfix">'; } ?> 

							<?php if(get_sub_field('description')) { echo '
								<div class="sp'; } ?><?php if(get_sub_field('description_color')) { echo ' ' . get_sub_field('description_color') . ''; } ?><?php if(get_sub_field('description_shadow')) { echo ' ' . get_sub_field('description_shadow') . ''; } ?><?php if(get_sub_field('description')) { echo '">' . get_sub_field('description') . '</div>'; } ?> 
		
						<?php if(get_sub_field('description')) { echo '</div>'; } ?>  
                    <?php endif; ?> 
                     <?php // Buttons 
						if( get_row_layout() == 'section_buttons_text_links' ): ?>
						<?php if(get_sub_field('buttons')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('buttons_top_margin')) { echo ' ' . get_sub_field('buttons_top_margin') . ''; } ?><?php if(get_sub_field('buttons_bottom_margin')) { echo ' ' . get_sub_field('buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('buttons')) { echo ' clearfix">'; } ?> 
	 
							<!-- start repeater-list --> 
							<?php if( have_rows('buttons') ): $pr = 0;
							echo '<p class="mt0 mb0 down-arrow-container">';
							// loop through the rows of data
							while ( have_rows('buttons') ) : the_row(); ?> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="right-link'; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('text_shadow') && get_sub_field('link') ) { echo '' . get_sub_field('text_shadow') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
								<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
							<?php endwhile; echo '</p>'; endif; ?> 
							<!-- end repeater-list --> 

						<?php if(get_sub_field('buttons')) { echo '</div>'; } ?>  
                    <?php endif; ?>
	                
					<?php endwhile; // end loop through the rows of data
						else :
						// no layouts found
             		?> 
            <?php endif; ?><?php wp_reset_query(); ?> 
		<?php if(get_field('heading_content_width') || get_field('heading_content_top_padding') || get_field('heading_content_bottom_padding') || get_field('heading_content_position')) { echo '</div>'; } ?>

	<?php if(get_field('pr_cs_study_slider')) { echo '<div class="grid-10 fl pt2 pb2 clearfix">
		<!-- START SWIPER -->
	<div class="swiper-container swiper2">
		<div class="swiper-wrapper">'; } ?>
				<!-- Swiper JS -->
				<?php
				// check if the flexible content field has rows of data
				if( have_rows('pr_cs_study_slider') ):
					// loop through the rows of data
					while ( have_rows('pr_cs_study_slider') ) : the_row();
						// check current row layout
						if( get_row_layout() == 'pr_cs_study_slides' ):
							// check if the nested repeater field has rows of data
							if( have_rows('pr_cs_study_slide') ): 
								// loop through the rows of data
								while ( have_rows('pr_cs_study_slide') ) : the_row(); ?>

								<div class="swiper-slide"><div class="grid-page mt20 mb20 clearfix">
										<?php $image = get_sub_field('photo'); ?>
										<?php if( get_sub_field('photo') ) { echo '<div class="grid-4b fl mb30 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('photo') ) { echo '" border="0"/></div>'; } ?>
										<?php if(get_sub_field('title') || get_sub_field('description')) { echo '<div class="grid-5 fr clearfix">'; } ?>
											<?php $image = get_sub_field('client_logo'); ?>

											<?php if( get_sub_field('client_logo') ) { echo '<div class="grid-10 fl pb2 clearfix">'; } ?>
											<?php if(get_sub_field('client_logo_width')) { echo '<div class="' . get_sub_field('client_logo_width') . ' clearfix">'; } ?>
											<?php if( get_sub_field('client_logo') ) { echo '<img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('client_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('client_logo') ) { echo '" border="0"/>'; } ?>
											<?php if(get_sub_field('client_logo_width')) { echo '</div>'; } ?>
											<?php if( get_sub_field('client_logo') ) { echo '</div>'; } ?>

											<?php if( get_sub_field('title') ) { echo '<h3 class="block-subheadline fl tal mt0 mb0 pt0 pb0'; } ?><?php if(get_sub_field('title_color')) { echo ' ' . get_sub_field('title_color') . ''; } ?><?php if(get_sub_field('title_shadow')) { echo ' ' . get_sub_field('title_shadow') . ''; } ?><?php if( get_sub_field('title') ) { echo ' clearfix">' . get_sub_field('title') . '</h3>'; } ?>
											<?php if( get_sub_field('description') ) { echo '<div class="grid-10 fl tal pt1'; } ?><?php if(get_sub_field('description_color')) { echo ' ' . get_sub_field('description_color') . ''; } ?><?php if(get_sub_field('description_shadow')) { echo ' ' . get_sub_field('description_shadow') . ''; } ?><?php if( get_sub_field('description') ) { echo ' clearfix">' . get_sub_field('description') . '</div>'; } ?> 

											<!-- start repeater-list --> 
											<?php if( have_rows('buttons') ): $pr = 0;
											echo '<div class="grid-10 fl mb50">';
											// loop through the rows of data
											while ( have_rows('buttons') ) : the_row(); ?> 
												<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="fl right-link'; } ?> <?php if(get_sub_field('text_color')) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('arrow_color')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
												<?php if(get_sub_field('target_blank') == true) { echo 'target="_blank"'; } ?> 
												<?php if(get_sub_field('link')) { echo '>'; } ?>
												<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
												<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
											<?php endwhile; echo '</div>'; endif; ?> 

										<?php if(get_sub_field('title') || get_sub_field('description')) { echo '</div>'; } ?>
								</div></div>
								<?php endwhile; 
							endif; 
						endif; 
					endwhile; 
				else : 
					// no layouts found 
				endif; 
				?>
				<!-- END SWIPER -->
	<?php if(get_field('pr_cs_study_slider')) { echo '</div> <!-- END swiper-wrapper -->
		<!-- Add Pagination -->
		<div class="swiper-pagination"></div>
		<!-- Add Pagination -->'; } ?> 
		<div class="swiper-button-next <?php if((get_field('slider_arrows_color')) == true) { echo 'swiper-button'; } else { echo'swiper-button-purple';} ?>"></div>
		<div class="swiper-button-prev <?php if((get_field('slider_arrows_color')) == true) { echo 'swiper-button'; } else { echo'swiper-button-purple';} ?>"></div> 
	<?php if(get_field('pr_cs_study_slider')) { echo '</div>
	<!-- END SWIPER swiper-container -->
	</div>'; } ?>
	</div>
	<style type="text/css">
	.swiper-button-prev, .swiper-container-rtl .swiper-button-next {left:0% !important;}
	.swiper-button-next, .swiper-container-rtl .swiper-button-prev {right:0% !important;}
	@media screen and (max-width: 800px) {
		.swiper-button-next, .swiper-container-rtl .swiper-button-prev {right: 0% !important;}
		.swiper-button-prev, .swiper-container-rtl .swiper-button-next {left:0% !important;}
	}
	</style>
</section>