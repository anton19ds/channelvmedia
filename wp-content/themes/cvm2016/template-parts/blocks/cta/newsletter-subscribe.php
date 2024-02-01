<?php
/**
 * Newsletter Subscribe Block Template.
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
?>

<section <?php if((get_field('banner_section_id')) == true) { echo'id="' . get_field('banner_section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl  <?php if(get_field('banner_background_color')) { echo '' . get_field('banner_background_color') . ''; } ?><?php if(get_field('banner_top_margin')) { echo ' ' . get_field('banner_top_margin') . ''; } ?><?php if(get_field('banner_bottom_margin')) { echo ' ' . get_field('banner_bottom_margin') . ''; } ?> <?php if(get_field('banner_top_padding')) { echo ' ' . get_field('banner_top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('banner_bottom_padding')) { echo ' ' . get_field('banner_bottom_padding') . ''; } else {echo' pb0';} ?> clearfix"> 
	 
	<?php if(get_field('banner_background_photo')) { echo '<div class="color-overlay bg-common clearfix'; } ?>
		<?php if((get_field('banner_background_photo_opacity')) == true) { echo ' ' . get_field('banner_background_photo_opacity') . ''; } ?>
		<?php if(get_field('banner_background_photo')) { echo '" style="'; } ?>
		<?php if(get_field('banner_background_photo')) { echo 'background-image:url(' . get_field('banner_background_photo') . ');'; } ?><?php if((get_field('banner_background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?>
	<?php if(get_field('banner_background_photo')) { echo '"></div>'; } ?> 
 
	
	<?php if(get_field('banner_background_color_filter')) { echo '<div class="color-overlay ' . get_field('banner_background_color_filter') . ''; } ?><?php if((get_field('banner_background_color_filter_opacity')) == true) { echo ' ' . get_field('banner_background_color_filter_opacity') . ' '; } ?><?php if(get_field('banner_background_color_filter')) { echo ' clearfix"></div>'; } ?>


	<?php if((get_field('banner_page_width')) == true) { echo'<div class="grid-page mauto"><div class="grid-10 mauto">'; } ?>
	
		<div class="grid-fixed-9 mauto">
<!-- start column 1 -->	
			<div class="<?php if(get_field('banner_one_width')) { echo '' . get_field('banner_one_width') . ' '; } else { echo'grid-4 ';} ?> border-right-white fl z1 clearfix">
				<div class="grid-fixed-9 mauto">
				 <!-- START CONTENT -->
				<?php
				// check if the flexible content field has rows of data
				if( have_rows('banner_content_one') ): ?> 
				<?php 
					 // loop through the rows of data
					while ( have_rows('banner_content_one') ) : the_row(); ?>  
						<?php // Label
							if( get_row_layout() == 'banner_content_label' ): ?> 
							<?php if(get_sub_field('banner_label')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('banner_label_top_margin')) { echo ' ' . get_sub_field('banner_label_top_margin') . ''; } ?><?php if(get_sub_field('banner_label_bottom_margin')) { echo ' ' . get_sub_field('banner_label_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_label')) { echo ' clearfix">'; } ?>
					
								<?php if(get_sub_field('banner_label')) { echo '<p class="sp-small mt0 mb20'; } ?> 
								<?php if(get_sub_field('banner_label')) { ?>   
								<?php if((get_sub_field('banner_label_alignment')) == 'tac' ) { echo ' mauto pl1 '; } else { echo ' '; } ?>
								<?php if((get_sub_field('banner_label_alignment')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
								<?php if((get_sub_field('banner_label_alignment')) == 'tar' ) { echo 'tar '; } else { echo ' '; } ?>
								<?php if(get_sub_field('banner_label_color')) { echo ' ' . get_sub_field('banner_label_color') . ''; } ?>
								<?php if(get_sub_field('banner_label_shadow')) { echo ' ' . get_sub_field('banner_label_shadow') . ''; } ?>
								<?php } ?>
								<?php if(get_sub_field('banner_label')) { echo 'clearix">' . get_sub_field('banner_label') . '</p>'; } ?> 

							<?php if(get_sub_field('banner_label')) { echo '</div>'; } ?>  
						<?php endif; ?>  
						<?php // Logo 
							if( get_row_layout() == 'banner_content_logo' ): ?> 
							<?php if(get_sub_field('banner_logo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('banner_logo_top_margin')) { echo ' ' . get_sub_field('banner_logo_top_margin') . ''; } ?><?php if(get_sub_field('banner_logo_bottom_margin')) { echo ' ' . get_sub_field('banner_logo_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_logo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('banner_logo')) { ?>
									<?php if(get_sub_field('banner_logo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('banner_logo_width')) { echo ' ' . get_sub_field('banner_logo_width') . ''; } ?><?php if(get_sub_field('banner_logo_align')) { echo ' ' . get_sub_field('banner_logo_align') . ''; } ?><?php if(get_sub_field('banner_logo')) { echo '">'; } ?>
									<?php $image = get_sub_field('banner_logo'); ?>
									<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php if(get_sub_field('banner_logo')) { echo '</span>'; } ?>
								<?php } ?>

							<?php if(get_sub_field('banner_logo')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						<?php // Photo 
							if( get_row_layout() == 'banner_content_photo' ): ?> 
							<?php if(get_sub_field('banner_photo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('banner_photo_top_margin')) { echo ' ' . get_sub_field('banner_photo_top_margin') . ''; } ?><?php if(get_sub_field('banner_photo_bottom_margin')) { echo ' ' . get_sub_field('banner_photo_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_photo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('banner_photo')) { ?>
									<?php if(get_sub_field('banner_photo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('banner_photo_width')) { echo ' ' . get_sub_field('banner_photo_width') . ''; } ?><?php if(get_sub_field('banner_photo_align')) { echo ' ' . get_sub_field('banner_photo_align') . ''; } ?><?php if(get_sub_field('banner_photo')) { echo '">'; } ?>
									<?php $image = get_sub_field('banner_photo'); ?>
									<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="300" height="200"/>
									<?php if(get_sub_field('banner_photo')) { echo '</span>'; } ?>
								<?php } ?>

							<?php if(get_sub_field('banner_photo')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						<?php // Headline 
							if( get_row_layout() == 'banner_content_headline' ): ?> 
							<?php if(get_sub_field('banner_headline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('banner_headline_top_margin')) { echo ' ' . get_sub_field('banner_headline_top_margin') . ''; } ?><?php if(get_sub_field('banner_headline_bottom_margin')) { echo ' ' . get_sub_field('banner_headline_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_headline')) { echo ' clearfix">'; } ?> 
								<?php if(get_sub_field('banner_headline')) { echo '
									<h2 class="block-headline_cs mt0 mb0'; } ?><?php if(get_sub_field('banner_headline_color')) { echo ' ' . get_sub_field('banner_headline_color') . ''; } ?><?php if(get_sub_field('banner_headline_shadow')) { echo ' ' . get_sub_field('banner_headline_shadow') . ''; } ?><?php if(get_sub_field('banner_headline_align') && get_sub_field('banner_headline')) { echo ' ' . get_sub_field('banner_headline_align') . ''; } ?><?php if(get_sub_field('banner_headline')) { echo '">' . get_sub_field('banner_headline') . '</h2>'; } ?> 
							<?php if(get_sub_field('banner_headline')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						 <?php // Text 
							if( get_row_layout() == 'banner_content_text' ): ?> 
							<?php if(get_sub_field('banner_description')) { echo '<div class="grid-10 fl overview-description'; } ?><?php if(get_sub_field('banner_description_top_margin')) { echo ' ' . get_sub_field('banner_description_top_margin') . ''; } ?><?php if(get_sub_field('banner_description_bottom_margin')) { echo ' ' . get_sub_field('banner_description_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_description')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('banner_description')) { echo '
									<div class="'; } ?><?php if(get_sub_field('banner_description_color')) { echo ' ' . get_sub_field('banner_description_color') . ''; } ?><?php if(get_sub_field('banner_description_shadow')) { echo ' ' . get_sub_field('banner_description_shadow') . ''; } ?><?php if(get_sub_field('banner_description')) { echo '">' . get_sub_field('banner_description') . '</div>'; } ?> 

							<?php if(get_sub_field('banner_description')) { echo '</div>'; } ?>  
						<?php endif; ?>
						 <?php // Buttons 
							if( get_row_layout() == 'banner_buttons_text_links' ): ?> 
							<?php if(get_sub_field('banner_buttons')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('banner_buttons_top_margin')) { echo ' ' . get_sub_field('banner_buttons_top_margin') . ''; } ?><?php if(get_sub_field('banner_buttons_bottom_margin')) { echo ' ' . get_sub_field('banner_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_buttons')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list --> 
								<?php if( have_rows('banner_buttons') ): $pr = 0;
								echo '<p class="mt0 mb0 down-arrow-container">';
								// loop through the rows of data
								while ( have_rows('banner_buttons') ) : the_row(); ?> 
									<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="right-link'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('text_shadow') && get_sub_field('link') ) { echo '' . get_sub_field('text_shadow') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
									<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
									<?php if(get_sub_field('link')) { echo '>'; } ?>
									<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
									<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</p>'; endif; ?> 
								<!-- end repeater-list --> 

							<?php if(get_sub_field('banner_buttons')) { echo '</div>'; } ?>  
						<?php endif; ?>

						 <?php // Rectangle Buttons 
							if( get_row_layout() == 'banner_rectangle_buttons' ): ?> 
							<?php if(get_sub_field('banner_button_swipe_rect')) { echo '<div class="grid-10 btn-rect fl'; } ?><?php if(get_sub_field('banner_rect_buttons_top_margin')) { echo ' ' . get_sub_field('banner_rect_buttons_top_margin') . ''; } ?><?php if(get_sub_field('banner_rect_buttons_bottom_margin')) { echo ' ' . get_sub_field('banner_rect_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_button_swipe_rect')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list -->
								<?php if( have_rows('banner_button_swipe_rect') ): $pr = 0;
								echo '<div class="mb0 mt0">';
								// loop through the rows of data
								while ( have_rows('banner_button_swipe_rect') ) : the_row(); ?> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect bg-alt mb0'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('button_color') && get_sub_field('link')) { echo '' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
								<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
								<div class="transition-rect"></div> 
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</div>'; endif; ?>   
								<!-- end repeater-list --> 

							<?php if(get_sub_field('banner_button_swipe_rect')) { echo '</div>'; } ?>  
						<?php endif; ?>

						 <?php // Rectangle Buttons 
							if( get_row_layout() == 'banner_hubspot_cta' ): ?>
							<?php if(get_sub_field('hubspot_cta_button')) { echo '<div class="clearfix'; } ?><?php if(get_sub_field('button_alignment')) { echo ' ' . get_sub_field('button_alignment') . ''; } ?><?php if(get_sub_field('hubspot_cta_button')) { echo '">' . get_sub_field('hubspot_cta_button') . '</div>'; } ?>
						<?php endif; ?> 

						<?php endwhile; // end loop through the rows of data
							else :
							// no layouts found
						?> 
				<?php endif; ?><?php wp_reset_query(); ?>
				 <!-- END CONTENT -->
	  
				</div>
			</div>
<!-- close column 1 -->
<!-- start column 2 -->	
			<div class="<?php if(get_field('banner_two_width')) { echo '' . get_field('banner_two_width') . ' '; } else { echo'grid-3 ';} ?> fl z1 clearfix">
				<div class="grid-fixed-9 mauto">
				 <!-- START CONTENT -->
				<?php
				// check if the flexible content field has rows of data
				if( have_rows('banner_content_two') ): ?> 
				<?php 
					 // loop through the rows of data
					while ( have_rows('banner_content_two') ) : the_row(); ?>  
						<?php // Label
							if( get_row_layout() == 'banner_content_label' ): ?> 
							<?php if(get_sub_field('banner_label')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('banner_label_top_margin')) { echo ' ' . get_sub_field('banner_label_top_margin') . ''; } ?><?php if(get_sub_field('banner_label_bottom_margin')) { echo ' ' . get_sub_field('banner_label_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_label')) { echo ' clearfix">'; } ?>  
					
								<?php if(get_sub_field('banner_label')) { echo '<p class="sp-small mt0 mb20'; } ?> 
								<?php if(get_sub_field('banner_label')) { ?>   
								<?php if((get_sub_field('banner_label_alignment')) == 'tac' ) { echo ' mauto pl1 '; } else { echo ' '; } ?>
								<?php if((get_sub_field('banner_label_alignment')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
								<?php if((get_sub_field('banner_label_alignment')) == 'tar' ) { echo 'tar '; } else { echo ' '; } ?>
								<?php if(get_sub_field('banner_label_color')) { echo ' ' . get_sub_field('banner_label_color') . ''; } ?>
								<?php if(get_sub_field('banner_label_shadow')) { echo ' ' . get_sub_field('banner_label_shadow') . ''; } ?>
								<?php } ?>
								<?php if(get_sub_field('banner_label')) { echo 'clearix">' . get_sub_field('banner_label') . '</p>'; } ?> 

							<?php if(get_sub_field('banner_label')) { echo '</div>'; } ?>  
						<?php endif; ?>  
						<?php // Logo 
							if( get_row_layout() == 'banner_content_logo' ): ?> 
							<?php if(get_sub_field('banner_logo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('banner_logo_top_margin')) { echo ' ' . get_sub_field('banner_logo_top_margin') . ''; } ?><?php if(get_sub_field('banner_logo_bottom_margin')) { echo ' ' . get_sub_field('banner_logo_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_logo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('banner_logo')) { ?>
									<?php if(get_sub_field('banner_logo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('banner_logo_width')) { echo ' ' . get_sub_field('banner_logo_width') . ''; } ?><?php if(get_sub_field('banner_logo_align')) { echo ' ' . get_sub_field('banner_logo_align') . ''; } ?><?php if(get_sub_field('banner_logo')) { echo '">'; } ?>
									<?php $image = get_sub_field('banner_logo'); ?>
									<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php if(get_sub_field('banner_logo')) { echo '</span>'; } ?>
								<?php } ?>

							<?php if(get_sub_field('banner_logo')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						<?php // Photo 
							if( get_row_layout() == 'banner_content_photo' ): ?> 
							<?php if(get_sub_field('banner_photo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('banner_photo_top_margin')) { echo ' ' . get_sub_field('banner_photo_top_margin') . ''; } ?><?php if(get_sub_field('banner_photo_bottom_margin')) { echo ' ' . get_sub_field('banner_photo_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_photo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('banner_photo')) { ?>
									<?php if(get_sub_field('banner_photo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('banner_photo_width')) { echo ' ' . get_sub_field('banner_photo_width') . ''; } ?><?php if(get_sub_field('banner_photo_align')) { echo ' ' . get_sub_field('banner_photo_align') . ''; } ?><?php if(get_sub_field('banner_photo')) { echo '">'; } ?>
									<?php $image = get_sub_field('banner_photo'); ?>
									<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="300" height="200"/>
									<?php if(get_sub_field('banner_photo')) { echo '</span>'; } ?>
								<?php } ?>

							<?php if(get_sub_field('banner_photo')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						<?php // Headline 
							if( get_row_layout() == 'banner_content_headline' ): ?> 
							<?php if(get_sub_field('banner_headline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('banner_headline_top_margin')) { echo ' ' . get_sub_field('banner_headline_top_margin') . ''; } ?><?php if(get_sub_field('banner_headline_bottom_margin')) { echo ' ' . get_sub_field('banner_headline_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_headline')) { echo ' clearfix">'; } ?> 
								<?php if(get_sub_field('banner_headline')) { echo '
									<h2 class="block-headline_cs mt0 mb0'; } ?><?php if(get_sub_field('banner_headline_color')) { echo ' ' . get_sub_field('banner_headline_color') . ''; } ?><?php if(get_sub_field('banner_headline_shadow')) { echo ' ' . get_sub_field('banner_headline_shadow') . ''; } ?><?php if(get_sub_field('banner_headline_align') && get_sub_field('banner_headline')) { echo ' ' . get_sub_field('banner_headline_align') . ''; } ?><?php if(get_sub_field('banner_headline')) { echo '">' . get_sub_field('banner_headline') . '</h2>'; } ?> 
							<?php if(get_sub_field('banner_headline')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						 <?php // Text 
							if( get_row_layout() == 'banner_content_text' ): ?> 
							<?php if(get_sub_field('banner_description')) { echo '<div class="grid-10 fl overview-description'; } ?><?php if(get_sub_field('banner_description_top_margin')) { echo ' ' . get_sub_field('banner_description_top_margin') . ''; } ?><?php if(get_sub_field('banner_description_bottom_margin')) { echo ' ' . get_sub_field('banner_description_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_description')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('banner_description')) { echo '
									<div class="'; } ?><?php if(get_sub_field('banner_description_color')) { echo ' ' . get_sub_field('banner_description_color') . ''; } ?><?php if(get_sub_field('banner_description_shadow')) { echo ' ' . get_sub_field('banner_description_shadow') . ''; } ?><?php if(get_sub_field('banner_description')) { echo '">' . get_sub_field('banner_description') . '</div>'; } ?> 

							<?php if(get_sub_field('banner_description')) { echo '</div>'; } ?>  
						<?php endif; ?>
						 <?php // Buttons 
							if( get_row_layout() == 'banner_buttons_text_links' ): ?> 
							<?php if(get_sub_field('banner_buttons')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('banner_buttons_top_margin')) { echo ' ' . get_sub_field('banner_buttons_top_margin') . ''; } ?><?php if(get_sub_field('banner_buttons_bottom_margin')) { echo ' ' . get_sub_field('banner_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_buttons')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list --> 
								<?php if( have_rows('banner_buttons') ): $pr = 0;
								echo '<p class="mt0 mb0 down-arrow-container">';
								// loop through the rows of data
								while ( have_rows('banner_buttons') ) : the_row(); ?> 
									<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="right-link'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('text_shadow') && get_sub_field('link') ) { echo '' . get_sub_field('text_shadow') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
									<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
									<?php if(get_sub_field('link')) { echo '>'; } ?>
									<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
									<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</p>'; endif; ?> 
								<!-- end repeater-list --> 

							<?php if(get_sub_field('banner_buttons')) { echo '</div>'; } ?>  
						<?php endif; ?>

						 <?php // Rectangle Buttons 
							if( get_row_layout() == 'banner_rectangle_buttons' ): ?> 
							<?php if(get_sub_field('banner_button_swipe_rect')) { echo '<div class="grid-10 btn-rect fl'; } ?><?php if(get_sub_field('banner_rect_buttons_top_margin')) { echo ' ' . get_sub_field('banner_rect_buttons_top_margin') . ''; } ?><?php if(get_sub_field('banner_rect_buttons_bottom_margin')) { echo ' ' . get_sub_field('banner_rect_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_button_swipe_rect')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list -->
								<?php if( have_rows('banner_button_swipe_rect') ): $pr = 0;
								echo '<div class="mb0 mt0">';
								// loop through the rows of data
								while ( have_rows('banner_button_swipe_rect') ) : the_row(); ?> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect bg-alt mb0'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('button_color') && get_sub_field('link')) { echo '' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
								<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
								<div class="transition-rect"></div> 
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</div>'; endif; ?>   
								<!-- end repeater-list --> 

							<?php if(get_sub_field('banner_button_swipe_rect')) { echo '</div>'; } ?>  
						<?php endif; ?>

						 <?php // Rectangle Buttons 
							if( get_row_layout() == 'banner_hubspot_cta' ): ?>
							<?php if(get_sub_field('hubspot_cta_button')) { echo '<div class="clearfix'; } ?><?php if(get_sub_field('button_alignment')) { echo ' ' . get_sub_field('button_alignment') . ''; } ?><?php if(get_sub_field('hubspot_cta_button')) { echo '">' . get_sub_field('hubspot_cta_button') . '</div>'; } ?>
						<?php endif; ?> 

						<?php endwhile; // end loop through the rows of data
							else :
							// no layouts found
						?> 
				<?php endif; ?><?php wp_reset_query(); ?>
				 <!-- END CONTENT -->
	  
				</div>
			</div>
<!-- close column 2 --> 
<!-- start column 3 -->	
			<div class="<?php if(get_field('banner_three_width')) { echo '' . get_field('banner_three_width') . ' '; } else { echo'grid-3 ';} ?> fl z1 clearfix">
				<div class="grid-fixed-9 mauto">
				 <!-- START CONTENT -->
				<?php
				// check if the flexible content field has rows of data
				if( have_rows('banner_content_three') ): ?> 
				<?php 
					 // loop through the rows of data
					while ( have_rows('banner_content_three') ) : the_row(); ?>  
						<?php // Label
							if( get_row_layout() == 'banner_content_label' ): ?> 
							<?php if(get_sub_field('banner_label')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('banner_label_top_margin')) { echo ' ' . get_sub_field('banner_label_top_margin') . ''; } ?><?php if(get_sub_field('banner_label_bottom_margin')) { echo ' ' . get_sub_field('banner_label_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_label')) { echo ' clearfix">'; } ?>  
					
								<?php if(get_sub_field('banner_label')) { echo '<p class="sp-small mt0 mb20'; } ?> 
								<?php if(get_sub_field('banner_label')) { ?>   
								<?php if((get_sub_field('banner_label_alignment')) == 'tac' ) { echo ' mauto pl1 '; } else { echo ' '; } ?>
								<?php if((get_sub_field('banner_label_alignment')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
								<?php if((get_sub_field('banner_label_alignment')) == 'tar' ) { echo 'tar '; } else { echo ' '; } ?>
								<?php if(get_sub_field('banner_label_color')) { echo ' ' . get_sub_field('banner_label_color') . ''; } ?>
								<?php if(get_sub_field('banner_label_shadow')) { echo ' ' . get_sub_field('banner_label_shadow') . ''; } ?>
								<?php } ?>
								<?php if(get_sub_field('banner_label')) { echo 'clearix">' . get_sub_field('banner_label') . '</p>'; } ?> 

							<?php if(get_sub_field('banner_label')) { echo '</div>'; } ?>  
						<?php endif; ?>  
						<?php // Logo 
							if( get_row_layout() == 'banner_content_logo' ): ?> 
							<?php if(get_sub_field('banner_logo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('banner_logo_top_margin')) { echo ' ' . get_sub_field('banner_logo_top_margin') . ''; } ?><?php if(get_sub_field('banner_logo_bottom_margin')) { echo ' ' . get_sub_field('banner_logo_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_logo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('banner_logo')) { ?>
									<?php if(get_sub_field('banner_logo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('banner_logo_width')) { echo ' ' . get_sub_field('banner_logo_width') . ''; } ?><?php if(get_sub_field('banner_logo_align')) { echo ' ' . get_sub_field('banner_logo_align') . ''; } ?><?php if(get_sub_field('banner_logo')) { echo '">'; } ?>
									<?php $image = get_sub_field('banner_logo'); ?>
									<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php if(get_sub_field('banner_logo')) { echo '</span>'; } ?>
								<?php } ?>

							<?php if(get_sub_field('banner_logo')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						<?php // Photo 
							if( get_row_layout() == 'banner_content_photo' ): ?> 
							<?php if(get_sub_field('banner_photo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('banner_photo_top_margin')) { echo ' ' . get_sub_field('banner_photo_top_margin') . ''; } ?><?php if(get_sub_field('banner_photo_bottom_margin')) { echo ' ' . get_sub_field('banner_photo_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_photo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('banner_photo')) { ?>
									<?php if(get_sub_field('banner_photo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('banner_photo_width')) { echo ' ' . get_sub_field('banner_photo_width') . ''; } ?><?php if(get_sub_field('banner_photo_align')) { echo ' ' . get_sub_field('banner_photo_align') . ''; } ?><?php if(get_sub_field('banner_photo')) { echo '">'; } ?>
									<?php $image = get_sub_field('banner_photo'); ?>
									<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="300" height="200"/>
									<?php if(get_sub_field('banner_photo')) { echo '</span>'; } ?>
								<?php } ?>

							<?php if(get_sub_field('banner_photo')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						<?php // Headline 
							if( get_row_layout() == 'banner_content_headline' ): ?> 
							<?php if(get_sub_field('banner_headline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('banner_headline_top_margin')) { echo ' ' . get_sub_field('banner_headline_top_margin') . ''; } ?><?php if(get_sub_field('banner_headline_bottom_margin')) { echo ' ' . get_sub_field('banner_headline_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_headline')) { echo ' clearfix">'; } ?> 
								<?php if(get_sub_field('banner_headline')) { echo '
									<h2 class="block-headline_cs mt0 mb0'; } ?><?php if(get_sub_field('banner_headline_color')) { echo ' ' . get_sub_field('banner_headline_color') . ''; } ?><?php if(get_sub_field('banner_headline_shadow')) { echo ' ' . get_sub_field('banner_headline_shadow') . ''; } ?><?php if(get_sub_field('banner_headline_align') && get_sub_field('banner_headline')) { echo ' ' . get_sub_field('banner_headline_align') . ''; } ?><?php if(get_sub_field('banner_headline')) { echo '">' . get_sub_field('banner_headline') . '</h2>'; } ?> 
							<?php if(get_sub_field('banner_headline')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						 <?php // Text 
							if( get_row_layout() == 'banner_content_text' ): ?> 
							<?php if(get_sub_field('banner_description')) { echo '<div class="grid-10 fl overview-description'; } ?><?php if(get_sub_field('banner_description_top_margin')) { echo ' ' . get_sub_field('banner_description_top_margin') . ''; } ?><?php if(get_sub_field('banner_description_bottom_margin')) { echo ' ' . get_sub_field('banner_description_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_description')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('banner_description')) { echo '
									<div class="'; } ?><?php if(get_sub_field('banner_description_color')) { echo ' ' . get_sub_field('banner_description_color') . ''; } ?><?php if(get_sub_field('banner_description_shadow')) { echo ' ' . get_sub_field('banner_description_shadow') . ''; } ?><?php if(get_sub_field('banner_description')) { echo '">' . get_sub_field('banner_description') . '</div>'; } ?> 

							<?php if(get_sub_field('banner_description')) { echo '</div>'; } ?>  
						<?php endif; ?>
						 <?php // Buttons 
							if( get_row_layout() == 'banner_buttons_text_links' ): ?> 
							<?php if(get_sub_field('banner_buttons')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('banner_buttons_top_margin')) { echo ' ' . get_sub_field('banner_buttons_top_margin') . ''; } ?><?php if(get_sub_field('banner_buttons_bottom_margin')) { echo ' ' . get_sub_field('banner_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_buttons')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list --> 
								<?php if( have_rows('banner_buttons') ): $pr = 0;
								echo '<p class="mt0 mb0 down-arrow-container">';
								// loop through the rows of data
								while ( have_rows('banner_buttons') ) : the_row(); ?> 
									<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="right-link'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('text_shadow') && get_sub_field('link') ) { echo '' . get_sub_field('text_shadow') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
									<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
									<?php if(get_sub_field('link')) { echo '>'; } ?>
									<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
									<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</p>'; endif; ?> 
								<!-- end repeater-list --> 

							<?php if(get_sub_field('banner_buttons')) { echo '</div>'; } ?>  
						<?php endif; ?>

						 <?php // Rectangle Buttons 
							if( get_row_layout() == 'banner_rectangle_buttons' ): ?> 
							<?php if(get_sub_field('banner_button_swipe_rect')) { echo '<div class="grid-10 btn-rect fl'; } ?><?php if(get_sub_field('banner_rect_buttons_top_margin')) { echo ' ' . get_sub_field('banner_rect_buttons_top_margin') . ''; } ?><?php if(get_sub_field('banner_rect_buttons_bottom_margin')) { echo ' ' . get_sub_field('banner_rect_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('banner_button_swipe_rect')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list -->
								<?php if( have_rows('banner_button_swipe_rect') ): $pr = 0;
								echo '<div class="mb0 mt0">';
								// loop through the rows of data
								while ( have_rows('banner_button_swipe_rect') ) : the_row(); ?> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect bg-alt mb0'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('button_color') && get_sub_field('link')) { echo '' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
								<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
								<div class="transition-rect"></div> 
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</div>'; endif; ?>   
								<!-- end repeater-list --> 

							<?php if(get_sub_field('banner_button_swipe_rect')) { echo '</div>'; } ?>  
						<?php endif; ?>

						 <?php // Rectangle Buttons 
							if( get_row_layout() == 'banner_hubspot_cta' ): ?>
							<?php if(get_sub_field('hubspot_cta_button')) { echo '<div class="clearfix'; } ?><?php if(get_sub_field('button_alignment')) { echo ' ' . get_sub_field('button_alignment') . ''; } ?><?php if(get_sub_field('hubspot_cta_button')) { echo '">' . get_sub_field('hubspot_cta_button') . '</div>'; } ?>
						<?php endif; ?> 

						<?php endwhile; // end loop through the rows of data
							else :
							// no layouts found
						?> 
				<?php endif; ?><?php wp_reset_query(); ?>
				 <!-- END CONTENT -->
	  
				</div>
			</div>
<!-- close column 3 --> 
			
	</div> <!--grid-fixed-9 page -->
	
	<?php if((get_field('banner_page_width')) == true) { echo'</div></div>'; } ?>
</section> 