<?php
/**
 * Three Column Block Template.
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

<section <?php if((get_field('three_section_id')) == true) { echo'id="' . get_field('three_section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl  <?php if(get_field('three_background_color')) { echo '' . get_field('three_background_color') . ''; } ?><?php if(get_field('three_top_margin')) { echo ' ' . get_field('three_top_margin') . ''; } ?><?php if(get_field('three_bottom_margin')) { echo ' ' . get_field('three_bottom_margin') . ''; } ?> <?php if(get_field('three_top_padding')) { echo ' ' . get_field('three_top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('three_bottom_padding')) { echo ' ' . get_field('three_bottom_padding') . ''; } else {echo' pb0';} ?> clearfix"> 
	 
	<?php if(get_field('three_background_photo')) { echo '<div class="color-overlay bg-common clearfix'; } ?>
		<?php if((get_field('three_background_photo_opacity')) == true) { echo ' ' . get_field('three_background_photo_opacity') . ''; } ?>
		<?php if(get_field('three_background_photo')) { echo '" style="'; } ?>
		<?php if(get_field('three_background_photo')) { echo 'background-image:url(' . get_field('three_background_photo') . ');'; } ?><?php if((get_field('three_background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?>
	<?php if(get_field('three_background_photo')) { echo '"></div>'; } ?> 
 
	
	<?php if(get_field('three_background_color_filter')) { echo '<div class="color-overlay ' . get_field('three_background_color_filter') . ''; } ?><?php if((get_field('three_background_color_filter_opacity')) == true) { echo ' ' . get_field('three_background_color_filter_opacity') . ' '; } ?><?php if(get_field('three_background_color_filter')) { echo ' clearfix"></div>'; } ?>

			<?php if((get_field('three_header_headline') || get_field('three_header_subheadline') || get_field('three_header_intro')) == true ) { echo '<div class="grid-page mauto"><div class="grid-10 fl clearfix">'; } ?>

			<?php if((get_field('three_header_width') || get_field('three_header_align') || get_field('three_header_text_align')) == true ) { echo '<div class="' . get_field('three_header_width') . ''; } ?><?php if((get_field('three_header_align')) == true ) { echo ' ' . get_field('three_header_align') . ''; } ?><?php if((get_field('three_header_text_align')) == true ) { echo ' ' . get_field('three_header_text_align') . ''; } ?><?php if((get_field('three_header_width') || get_field('three_header_align') || get_field('three_header_text_align')) == true ) { echo '">'; } ?>
		
			<?php if(get_field('three_header_label')) { echo '<p class="sp-small mt0 mb20'; } ?> 
			<?php if(get_field('three_header_label')) { ?>   
			<?php if((get_field('three_header_text_align')) == 'tac' ) { echo ' mauto pl1 '; } else { echo ' '; } ?>
			<?php if((get_field('three_header_text_align')) == 'tal' ) { echo ' fl '; } else { echo ' '; } ?>
			<?php if((get_field('three_header_text_align')) == 'tar' ) { echo 'tar '; } else { echo ' '; } ?>
			<?php if(get_field('three_header_label_color')) { echo ' ' . get_field('three_header_label_color') . ''; } ?>
			<?php } ?>
			<?php if(get_field('three_header_label')) { echo 'clearix">' . get_field('three_header_label') . '</p>'; } ?>  
		
			<?php if(get_field('three_header_headline')) { echo '<h2 class="block-headline_alt mt0 mb0 '; } ?><?php if((get_field('three_header_headline') && get_field('three_header_headline_color')) == true ) { echo '' . get_field('three_header_headline_color') . ''; } else { echo ' '; } ?><?php if(get_field('three_header_headline')) { echo '">' . get_field('three_header_headline') . '</h2>'; } ?>
			<?php if(get_field('three_header_subheadline')) { echo '<span class="block-subheadline pt0 pb0 mb20 '; } ?><?php if((get_field('three_header_subheadline') && get_field('three_header_subheadline_color')) == true) { echo ' ' . get_field('three_header_subheadline_color') . ''; } ?><?php if(get_field('three_header_subheadline')) { echo '">' . get_field('three_header_subheadline') . '</span>'; } ?>
			<?php if(get_field('three_header_intro')) { echo '<span class="block-text '; } ?><?php if((get_field('three_header_intro_color') && get_field('three_header_intro')) == true ) { echo '' . get_field('three_header_intro_color') . ''; } ?><?php if(get_field('three_header_intro')) { echo '">' . get_field('three_header_intro') . '</span>'; } ?> 
		
			<?php if((get_field('three_header_width') || get_field('three_header_align') || get_field('three_header_text_align')) == true ) { echo '</div>'; } ?>
		
		<?php if((get_field('three_header_headline') || get_field('three_header_subheadline') || get_field('three_header_intro')) == true ) { echo '</div></div>'; } ?>

	<?php if((get_field('three_page_width')) == true) { echo'<div class="grid-page mauto">'; } ?>
	 
	<div class="grid-10 mauto<?php if(get_field('three_content_top_padding')) { echo ' ' . get_field('three_content_top_padding') . ''; } ?><?php if(get_field('three_content_bottom_padding')) { echo ' ' . get_field('three_content_bottom_padding') . ''; } ?>">
	
<!-- start column 1 -->	 
			<div class="<?php if(get_field('three_one_width')) { echo '' . get_field('three_one_width') . ' '; } else { echo'grid-3 ';} ?><?php if(get_field('three_one_position')) { echo '' . get_field('three_one_position') . ' '; } else { echo'fl ';} ?>z1 clearfix">
				<div class="grid-9 mauto">
				 <!-- START CONTENT -->
				<?php
				// check if the flexible content field has rows of data
				if( have_rows('three_content_one') ): ?> 
				<?php 
					 // loop through the rows of data
					while ( have_rows('three_content_one') ) : the_row(); ?>  
						<?php // Label
							if( get_row_layout() == 'three_content_label' ): ?> 
							<?php if(get_sub_field('three_label')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('three_label_top_margin')) { echo ' ' . get_sub_field('three_label_top_margin') . ''; } ?><?php if(get_sub_field('three_label_bottom_margin')) { echo ' ' . get_sub_field('three_label_bottom_margin') . ''; } ?><?php if(get_sub_field('three_label')) { echo ' clearfix">'; } ?>
					
								<?php if(get_sub_field('three_label')) { echo '<p class="sp-small mt0 mb20'; } ?> 
								<?php if(get_sub_field('three_label')) { ?>   
								<?php if((get_sub_field('three_label_alignment')) == 'tac' ) { echo ' mauto pl1 '; } else { echo ' '; } ?>
								<?php if((get_sub_field('three_label_alignment')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
								<?php if((get_sub_field('three_label_alignment')) == 'tar' ) { echo 'tar '; } else { echo ' '; } ?>
								<?php if(get_sub_field('three_label_color')) { echo ' ' . get_sub_field('three_label_color') . ''; } ?>
								<?php if(get_sub_field('three_label_shadow')) { echo ' ' . get_sub_field('three_label_shadow') . ''; } ?>
								<?php } ?>
								<?php if(get_sub_field('three_label')) { echo 'clearix">' . get_sub_field('three_label') . '</p>'; } ?> 

							<?php if(get_sub_field('three_label')) { echo '</div>'; } ?>  
						<?php endif; ?>  
						<?php // Logo 
							if( get_row_layout() == 'three_content_logo' ): ?> 
							<?php if(get_sub_field('three_logo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('three_logo_top_margin')) { echo ' ' . get_sub_field('three_logo_top_margin') . ''; } ?><?php if(get_sub_field('three_logo_bottom_margin')) { echo ' ' . get_sub_field('three_logo_bottom_margin') . ''; } ?><?php if(get_sub_field('three_logo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('three_logo')) { ?>
									<?php if(get_sub_field('three_logo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('three_logo_width')) { echo ' ' . get_sub_field('three_logo_width') . ''; } ?><?php if(get_sub_field('three_logo_align')) { echo ' ' . get_sub_field('three_logo_align') . ''; } ?><?php if(get_sub_field('three_logo')) { echo '">'; } ?>
									<?php $image = get_sub_field('three_logo'); ?>
									<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php if(get_sub_field('three_logo')) { echo '</span>'; } ?>
								<?php } ?>

							<?php if(get_sub_field('three_logo')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						<?php // Photo 
							if( get_row_layout() == 'three_content_photo' ): ?>
							<?php if(get_sub_field('three_photo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('three_photo_top_margin')) { echo ' ' . get_sub_field('three_photo_top_margin') . ''; } ?><?php if(get_sub_field('three_photo_bottom_margin')) { echo ' ' . get_sub_field('three_photo_bottom_margin') . ''; } ?><?php if(get_sub_field('three_photo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('three_photo')) { ?>
									<?php if(get_sub_field('three_photo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('three_photo_width')) { echo ' ' . get_sub_field('three_photo_width') . ''; } ?><?php if(get_sub_field('three_photo_align')) { echo ' ' . get_sub_field('three_photo_align') . ''; } ?><?php if(get_sub_field('three_photo')) { echo '">'; } ?>
									<?php $image = get_sub_field('three_photo'); ?> 
									<img class="responsive-img<?php if((get_sub_field('three_photo_add_shadow')) == true) { echo ' ' . get_sub_field('three_photo_add_shadow') . ''; } ?><?php if((get_sub_field('three_photo_underline')) == true) { echo ' bb-lt-purple'; } ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="300" height="200"/> 

									<?php if(get_sub_field('three_photo_color_filter')) { echo '<div class="color-overlay-exact ' . get_sub_field('three_photo_color_filter') . ''; } ?><?php if((get_sub_field('three_photo_color_filter_opacity')) == true) { echo ' ' . get_sub_field('three_photo_color_filter_opacity') . ' '; } ?><?php if(get_sub_field('three_photo_color_filter')) { echo ' clearfix"></div>'; } ?>
					
									<?php if(get_sub_field('three_photo')) { echo '</span>'; } ?>
								<?php } ?> 
					
								<?php if(get_sub_field('three_photo') && get_sub_field('three_photo_caption')) { echo '<div class="grid-10 clearfix">'; } ?>  
									<?php if(get_sub_field('three_photo_caption')) { echo '<div class="cs-caption'; } ?><?php if(get_sub_field('three_photo_caption') && get_sub_field('three_photo_caption_color')) { echo ' ' . get_sub_field('three_photo_caption_color') . ''; } ?><?php if(get_sub_field('three_photo_caption')) { echo '">' . get_sub_field('three_photo_caption') . '</div>'; } ?>
								<?php if(get_sub_field('three_photo') && get_sub_field('three_photo_caption')) { echo '</div>'; } ?> 

							<?php if(get_sub_field('three_photo')) { echo '</div>'; } ?>
						<?php endif; ?> 
						<?php // Headline 
							if( get_row_layout() == 'three_content_headline' ): ?> 
							<?php if(get_sub_field('three_headline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('three_headline_top_margin')) { echo ' ' . get_sub_field('three_headline_top_margin') . ''; } ?><?php if(get_sub_field('three_headline_bottom_margin')) { echo ' ' . get_sub_field('three_headline_bottom_margin') . ''; } ?><?php if(get_sub_field('three_headline')) { echo ' clearfix">'; } ?> 
								<?php if(get_sub_field('three_headline')) { echo '
									<h2 class="block-headline_cs mt0 mb0'; } ?><?php if(get_sub_field('three_headline_color')) { echo ' ' . get_sub_field('three_headline_color') . ''; } ?><?php if(get_sub_field('three_headline_shadow')) { echo ' ' . get_sub_field('three_headline_shadow') . ''; } ?><?php if(get_sub_field('three_headline_align') && get_sub_field('three_headline')) { echo ' ' . get_sub_field('three_headline_align') . ''; } ?><?php if(get_sub_field('three_headline')) { echo '">' . get_sub_field('three_headline') . '</h2>'; } ?> 
							<?php if(get_sub_field('three_headline')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						 <?php // Text 
							if( get_row_layout() == 'three_content_text' ): ?> 
							<?php if(get_sub_field('three_description')) { echo '<div class="grid-10 fl overview-description'; } ?><?php if(get_sub_field('three_description_top_margin')) { echo ' ' . get_sub_field('three_description_top_margin') . ''; } ?><?php if(get_sub_field('three_description_bottom_margin')) { echo ' ' . get_sub_field('three_description_bottom_margin') . ''; } ?><?php if(get_sub_field('three_description')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('three_description')) { echo '
									<div class="'; } ?><?php if(get_sub_field('three_description_color')) { echo ' ' . get_sub_field('three_description_color') . ''; } ?><?php if(get_sub_field('three_description_shadow')) { echo ' ' . get_sub_field('three_description_shadow') . ''; } ?><?php if(get_sub_field('three_description')) { echo '">' . get_sub_field('three_description') . '</div>'; } ?> 

							<?php if(get_sub_field('three_description')) { echo '</div>'; } ?>  
						<?php endif; ?>
						 <?php // Buttons 
							if( get_row_layout() == 'three_buttons_text_links' ): ?> 
							<?php if(get_sub_field('three_buttons')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('three_buttons_top_margin')) { echo ' ' . get_sub_field('three_buttons_top_margin') . ''; } ?><?php if(get_sub_field('three_buttons_bottom_margin')) { echo ' ' . get_sub_field('three_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('three_buttons')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list --> 
								<?php if( have_rows('three_buttons') ): $pr = 0;
								echo '<p class="mt0 mb0 down-arrow-container">';
								// loop through the rows of data
								while ( have_rows('three_buttons') ) : the_row(); ?> 
									<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="right-link'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('text_shadow') && get_sub_field('link') ) { echo '' . get_sub_field('text_shadow') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
									<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
									<?php if(get_sub_field('link')) { echo '>'; } ?>
									<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
									<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</p>'; endif; ?> 
								<!-- end repeater-list --> 

							<?php if(get_sub_field('three_buttons')) { echo '</div>'; } ?>  
						<?php endif; ?>

						 <?php // Rectangle Buttons 
							if( get_row_layout() == 'three_rectangle_buttons' ): ?> 
							<?php if(get_sub_field('three_button_swipe_rect')) { echo '<div class="grid-10 btn-rect fl'; } ?><?php if(get_sub_field('three_rect_buttons_top_margin')) { echo ' ' . get_sub_field('three_rect_buttons_top_margin') . ''; } ?><?php if(get_sub_field('three_rect_buttons_bottom_margin')) { echo ' ' . get_sub_field('three_rect_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('three_button_swipe_rect')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list -->
								<?php if( have_rows('three_button_swipe_rect') ): $pr = 0;
								echo '<div class="mb0 mt0">';
								// loop through the rows of data
								while ( have_rows('three_button_swipe_rect') ) : the_row(); ?> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect bg-alt mb0'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('button_color') && get_sub_field('link')) { echo '' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
								<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
								<div class="transition-rect"></div> 
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</div>'; endif; ?>   
								<!-- end repeater-list --> 

							<?php if(get_sub_field('three_button_swipe_rect')) { echo '</div>'; } ?>  
						<?php endif; ?>

						 <?php // Hubspot CTA 
							if( get_row_layout() == 'three_hubspot_cta' ): ?>
							<?php if(get_sub_field('three_hubspot_cta_button')) { echo '<div class="clearfix'; } ?><?php if(get_sub_field('three_button_alignment')) { echo ' ' . get_sub_field('three_button_alignment') . ''; } ?><?php if(get_sub_field('three_hubspot_cta_button')) { echo '">' . get_sub_field('three_hubspot_cta_button') . '</div>'; } ?>
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
			<div class="<?php if(get_field('three_two_width')) { echo '' . get_field('three_two_width') . ' '; } else { echo'grid-3 ';} ?><?php if(get_field('three_two_position')) { echo '' . get_field('three_two_position') . ' '; } else { echo'fl ';} ?>z1 clearfix">
				<div class="grid-9 mauto">
				 <!-- START CONTENT -->
				<?php
				// check if the flexible content field has rows of data
				if( have_rows('three_content_two') ): ?> 
				<?php 
					 // loop through the rows of data
					while ( have_rows('three_content_two') ) : the_row(); ?> 
						<?php // Label
							if( get_row_layout() == 'three_content_two_label' ): ?> 
							<?php if(get_sub_field('three_label')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('three_label_top_margin')) { echo ' ' . get_sub_field('three_label_top_margin') . ''; } ?><?php if(get_sub_field('three_label_bottom_margin')) { echo ' ' . get_sub_field('three_label_bottom_margin') . ''; } ?><?php if(get_sub_field('three_label')) { echo ' clearfix">'; } ?>
					
								<?php if(get_sub_field('three_label')) { echo '<p class="sp-small mt0 mb20'; } ?> 
								<?php if(get_sub_field('three_label')) { ?>   
								<?php if((get_sub_field('three_label_alignment')) == 'tac' ) { echo ' mauto pl1 '; } else { echo ' '; } ?>
								<?php if((get_sub_field('three_label_alignment')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
								<?php if((get_sub_field('three_label_alignment')) == 'tar' ) { echo 'tar '; } else { echo ' '; } ?>
								<?php if(get_sub_field('three_label_color')) { echo ' ' . get_sub_field('three_label_color') . ''; } ?>
								<?php if(get_sub_field('three_label_shadow')) { echo ' ' . get_sub_field('three_label_shadow') . ''; } ?>
								<?php } ?>
								<?php if(get_sub_field('three_label')) { echo 'clearix">' . get_sub_field('three_label') . '</p>'; } ?> 

							<?php if(get_sub_field('three_label')) { echo '</div>'; } ?>  
						<?php endif; ?>  
						<?php // Logo 
							if( get_row_layout() == 'three_content_two_logo' ): ?> 
							<?php if(get_sub_field('three_logo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('three_logo_top_margin')) { echo ' ' . get_sub_field('three_logo_top_margin') . ''; } ?><?php if(get_sub_field('three_logo_bottom_margin')) { echo ' ' . get_sub_field('three_logo_bottom_margin') . ''; } ?><?php if(get_sub_field('three_logo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('three_logo')) { ?>
									<?php if(get_sub_field('three_logo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('three_logo_width')) { echo ' ' . get_sub_field('three_logo_width') . ''; } ?><?php if(get_sub_field('three_logo_align')) { echo ' ' . get_sub_field('three_logo_align') . ''; } ?><?php if(get_sub_field('three_logo')) { echo '">'; } ?>
									<?php $image = get_sub_field('three_logo'); ?>
									<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php if(get_sub_field('three_logo')) { echo '</span>'; } ?>
								<?php } ?>

							<?php if(get_sub_field('three_logo')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						<?php // Photo 
							if( get_row_layout() == 'three_content_two_photo' ): ?>
							<?php if(get_sub_field('three_photo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('three_photo_top_margin')) { echo ' ' . get_sub_field('three_photo_top_margin') . ''; } ?><?php if(get_sub_field('three_photo_bottom_margin')) { echo ' ' . get_sub_field('three_photo_bottom_margin') . ''; } ?><?php if(get_sub_field('three_photo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('three_photo')) { ?>
									<?php if(get_sub_field('three_photo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('three_photo_width')) { echo ' ' . get_sub_field('three_photo_width') . ''; } ?><?php if(get_sub_field('three_photo_align')) { echo ' ' . get_sub_field('three_photo_align') . ''; } ?><?php if(get_sub_field('three_photo')) { echo '">'; } ?>
									<?php $image = get_sub_field('three_photo'); ?> 
									<img class="responsive-img<?php if((get_sub_field('three_photo_add_shadow')) == true) { echo ' ' . get_sub_field('three_photo_add_shadow') . ''; } ?><?php if((get_sub_field('three_photo_underline')) == true) { echo ' bb-lt-purple'; } ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="300" height="200"/> 

									<?php if(get_sub_field('three_photo_color_filter')) { echo '<div class="color-overlay-exact ' . get_sub_field('three_photo_color_filter') . ''; } ?><?php if((get_sub_field('three_photo_color_filter_opacity')) == true) { echo ' ' . get_sub_field('three_photo_color_filter_opacity') . ' '; } ?><?php if(get_sub_field('three_photo_color_filter')) { echo ' clearfix"></div>'; } ?>
					
									<?php if(get_sub_field('three_photo')) { echo '</span>'; } ?>
								<?php } ?> 
					
								<?php if(get_sub_field('three_photo') && get_sub_field('three_photo_caption')) { echo '<div class="grid-10 clearfix">'; } ?>  
									<?php if(get_sub_field('three_photo_caption')) { echo '<div class="cs-caption'; } ?><?php if(get_sub_field('three_photo_caption') && get_sub_field('three_photo_caption_color')) { echo ' ' . get_sub_field('three_photo_caption_color') . ''; } ?><?php if(get_sub_field('three_photo_caption')) { echo '">' . get_sub_field('three_photo_caption') . '</div>'; } ?>
								<?php if(get_sub_field('three_photo') && get_sub_field('three_photo_caption')) { echo '</div>'; } ?> 

							<?php if(get_sub_field('three_photo')) { echo '</div>'; } ?>
						<?php endif; ?> 
						<?php // Headline 
							if( get_row_layout() == 'three_content_two_headline' ): ?> 
							<?php if(get_sub_field('three_headline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('three_headline_top_margin')) { echo ' ' . get_sub_field('three_headline_top_margin') . ''; } ?><?php if(get_sub_field('three_headline_bottom_margin')) { echo ' ' . get_sub_field('three_headline_bottom_margin') . ''; } ?><?php if(get_sub_field('three_headline')) { echo ' clearfix">'; } ?> 
								<?php if(get_sub_field('three_headline')) { echo '
									<h2 class="block-headline_cs mt0 mb0'; } ?><?php if(get_sub_field('three_headline_color')) { echo ' ' . get_sub_field('three_headline_color') . ''; } ?><?php if(get_sub_field('three_headline_shadow')) { echo ' ' . get_sub_field('three_headline_shadow') . ''; } ?><?php if(get_sub_field('three_headline_align') && get_sub_field('three_headline')) { echo ' ' . get_sub_field('three_headline_align') . ''; } ?><?php if(get_sub_field('three_headline')) { echo '">' . get_sub_field('three_headline') . '</h2>'; } ?> 
							<?php if(get_sub_field('three_headline')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						 <?php // Text 
							if( get_row_layout() == 'three_content_two_text' ): ?> 
							<?php if(get_sub_field('three_description')) { echo '<div class="grid-10 fl overview-description'; } ?><?php if(get_sub_field('three_description_top_margin')) { echo ' ' . get_sub_field('three_description_top_margin') . ''; } ?><?php if(get_sub_field('three_description_bottom_margin')) { echo ' ' . get_sub_field('three_description_bottom_margin') . ''; } ?><?php if(get_sub_field('three_description')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('three_description')) { echo '
									<div class="'; } ?><?php if(get_sub_field('three_description_color')) { echo ' ' . get_sub_field('three_description_color') . ''; } ?><?php if(get_sub_field('three_description_shadow')) { echo ' ' . get_sub_field('three_description_shadow') . ''; } ?><?php if(get_sub_field('three_description')) { echo '">' . get_sub_field('three_description') . '</div>'; } ?> 

							<?php if(get_sub_field('three_description')) { echo '</div>'; } ?>  
						<?php endif; ?>
						 <?php // Buttons 
							if( get_row_layout() == 'three_content_two_buttons_text_links' ): ?> 
							<?php if(get_sub_field('three_buttons')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('three_buttons_top_margin')) { echo ' ' . get_sub_field('three_buttons_top_margin') . ''; } ?><?php if(get_sub_field('three_buttons_bottom_margin')) { echo ' ' . get_sub_field('three_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('three_buttons')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list --> 
								<?php if( have_rows('three_buttons') ): $pr = 0;
								echo '<p class="mt0 mb0 down-arrow-container">';
								// loop through the rows of data
								while ( have_rows('three_buttons') ) : the_row(); ?> 
									<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="right-link'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('text_shadow') && get_sub_field('link') ) { echo '' . get_sub_field('text_shadow') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
									<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
									<?php if(get_sub_field('link')) { echo '>'; } ?>
									<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
									<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</p>'; endif; ?> 
								<!-- end repeater-list --> 

							<?php if(get_sub_field('three_buttons')) { echo '</div>'; } ?>  
						<?php endif; ?>

						 <?php // Rectangle Buttons 
							if( get_row_layout() == 'three_content_two_rectangle_buttons' ): ?> 
							<?php if(get_sub_field('three_button_swipe_rect')) { echo '<div class="grid-10 btn-rect fl'; } ?><?php if(get_sub_field('three_rect_buttons_top_margin')) { echo ' ' . get_sub_field('three_rect_buttons_top_margin') . ''; } ?><?php if(get_sub_field('three_rect_buttons_bottom_margin')) { echo ' ' . get_sub_field('three_rect_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('three_button_swipe_rect')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list -->
								<?php if( have_rows('three_button_swipe_rect') ): $pr = 0;
								echo '<div class="mb0 mt0">';
								// loop through the rows of data
								while ( have_rows('three_button_swipe_rect') ) : the_row(); ?> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect bg-alt mb0'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('button_color') && get_sub_field('link')) { echo '' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
								<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
								<div class="transition-rect"></div> 
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</div>'; endif; ?>   
								<!-- end repeater-list --> 

							<?php if(get_sub_field('three_button_swipe_rect')) { echo '</div>'; } ?>  
						<?php endif; ?>

						 <?php // Hubspot CTA 
							if( get_row_layout() == 'three_content_two_hubspot_cta' ): ?>
							<?php if(get_sub_field('three_hubspot_cta_button')) { echo '<div class="clearfix'; } ?><?php if(get_sub_field('three_button_alignment')) { echo ' ' . get_sub_field('three_button_alignment') . ''; } ?><?php if(get_sub_field('three_hubspot_cta_button')) { echo '">' . get_sub_field('three_hubspot_cta_button') . '</div>'; } ?>
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
			<div class="<?php if(get_field('three_three_width')) { echo '' . get_field('three_three_width') . ' '; } else { echo'grid-3 ';} ?><?php if(get_field('three_three_position')) { echo '' . get_field('three_three_position') . ' '; } else { echo'fl ';} ?>z1 clearfix">
				<div class="grid-9 mauto">
				 <!-- START CONTENT -->
				<?php
				// check if the flexible content field has rows of data
				if( have_rows('three_content_three') ): ?> 
				<?php 
					 // loop through the rows of data
					while ( have_rows('three_content_three') ) : the_row(); ?>  
						<?php // Label
							if( get_row_layout() == 'three_content_three_label' ): ?> 
							<?php if(get_sub_field('three_label')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('three_label_top_margin')) { echo ' ' . get_sub_field('three_label_top_margin') . ''; } ?><?php if(get_sub_field('three_label_bottom_margin')) { echo ' ' . get_sub_field('three_label_bottom_margin') . ''; } ?><?php if(get_sub_field('three_label')) { echo ' clearfix">'; } ?>
					
								<?php if(get_sub_field('three_label')) { echo '<p class="sp-small mt0 mb20'; } ?> 
								<?php if(get_sub_field('three_label')) { ?>   
								<?php if((get_sub_field('three_label_alignment')) == 'tac' ) { echo ' mauto pl1 '; } else { echo ' '; } ?>
								<?php if((get_sub_field('three_label_alignment')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
								<?php if((get_sub_field('three_label_alignment')) == 'tar' ) { echo 'tar '; } else { echo ' '; } ?>
								<?php if(get_sub_field('three_label_color')) { echo ' ' . get_sub_field('three_label_color') . ''; } ?>
								<?php if(get_sub_field('three_label_shadow')) { echo ' ' . get_sub_field('three_label_shadow') . ''; } ?>
								<?php } ?>
								<?php if(get_sub_field('three_label')) { echo 'clearix">' . get_sub_field('three_label') . '</p>'; } ?> 

							<?php if(get_sub_field('three_label')) { echo '</div>'; } ?>  
						<?php endif; ?>  
						<?php // Logo 
							if( get_row_layout() == 'three_content_three_logo' ): ?> 
							<?php if(get_sub_field('three_logo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('three_logo_top_margin')) { echo ' ' . get_sub_field('three_logo_top_margin') . ''; } ?><?php if(get_sub_field('three_logo_bottom_margin')) { echo ' ' . get_sub_field('three_logo_bottom_margin') . ''; } ?><?php if(get_sub_field('three_logo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('three_logo')) { ?>
									<?php if(get_sub_field('three_logo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('three_logo_width')) { echo ' ' . get_sub_field('three_logo_width') . ''; } ?><?php if(get_sub_field('three_logo_align')) { echo ' ' . get_sub_field('three_logo_align') . ''; } ?><?php if(get_sub_field('three_logo')) { echo '">'; } ?>
									<?php $image = get_sub_field('three_logo'); ?>
									<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php if(get_sub_field('three_logo')) { echo '</span>'; } ?>
								<?php } ?>

							<?php if(get_sub_field('three_logo')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						<?php // Photo 
							if( get_row_layout() == 'three_content_three_photo' ): ?>
							<?php if(get_sub_field('three_photo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('three_photo_top_margin')) { echo ' ' . get_sub_field('three_photo_top_margin') . ''; } ?><?php if(get_sub_field('three_photo_bottom_margin')) { echo ' ' . get_sub_field('three_photo_bottom_margin') . ''; } ?><?php if(get_sub_field('three_photo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('three_photo')) { ?>
									<?php if(get_sub_field('three_photo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('three_photo_width')) { echo ' ' . get_sub_field('three_photo_width') . ''; } ?><?php if(get_sub_field('three_photo_align')) { echo ' ' . get_sub_field('three_photo_align') . ''; } ?><?php if(get_sub_field('three_photo')) { echo '">'; } ?>
									<?php $image = get_sub_field('three_photo'); ?> 
									<img class="responsive-img<?php if((get_sub_field('three_photo_add_shadow')) == true) { echo ' ' . get_sub_field('three_photo_add_shadow') . ''; } ?><?php if((get_sub_field('three_photo_underline')) == true) { echo ' bb-lt-purple'; } ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="300" height="200"/> 

									<?php if(get_sub_field('three_photo_color_filter')) { echo '<div class="color-overlay-exact ' . get_sub_field('three_photo_color_filter') . ''; } ?><?php if((get_sub_field('three_photo_color_filter_opacity')) == true) { echo ' ' . get_sub_field('three_photo_color_filter_opacity') . ' '; } ?><?php if(get_sub_field('three_photo_color_filter')) { echo ' clearfix"></div>'; } ?>
					
									<?php if(get_sub_field('three_photo')) { echo '</span>'; } ?>
								<?php } ?> 
					
								<?php if(get_sub_field('three_photo') && get_sub_field('three_photo_caption')) { echo '<div class="grid-10 clearfix">'; } ?>  
									<?php if(get_sub_field('three_photo_caption')) { echo '<div class="cs-caption'; } ?><?php if(get_sub_field('three_photo_caption') && get_sub_field('three_photo_caption_color')) { echo ' ' . get_sub_field('three_photo_caption_color') . ''; } ?><?php if(get_sub_field('three_photo_caption')) { echo '">' . get_sub_field('three_photo_caption') . '</div>'; } ?>
								<?php if(get_sub_field('three_photo') && get_sub_field('three_photo_caption')) { echo '</div>'; } ?> 

							<?php if(get_sub_field('three_photo')) { echo '</div>'; } ?>
						<?php endif; ?> 
						<?php // Headline 
							if( get_row_layout() == 'three_content_three_headline' ): ?> 
							<?php if(get_sub_field('three_headline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('three_headline_top_margin')) { echo ' ' . get_sub_field('three_headline_top_margin') . ''; } ?><?php if(get_sub_field('three_headline_bottom_margin')) { echo ' ' . get_sub_field('three_headline_bottom_margin') . ''; } ?><?php if(get_sub_field('three_headline')) { echo ' clearfix">'; } ?> 
								<?php if(get_sub_field('three_headline')) { echo '
									<h2 class="block-headline_cs mt0 mb0'; } ?><?php if(get_sub_field('three_headline_color')) { echo ' ' . get_sub_field('three_headline_color') . ''; } ?><?php if(get_sub_field('three_headline_shadow')) { echo ' ' . get_sub_field('three_headline_shadow') . ''; } ?><?php if(get_sub_field('three_headline_align') && get_sub_field('three_headline')) { echo ' ' . get_sub_field('three_headline_align') . ''; } ?><?php if(get_sub_field('three_headline')) { echo '">' . get_sub_field('three_headline') . '</h2>'; } ?> 
							<?php if(get_sub_field('three_headline')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						 <?php // Text 
							if( get_row_layout() == 'three_content_three_text' ): ?> 
							<?php if(get_sub_field('three_description')) { echo '<div class="grid-10 fl overview-description'; } ?><?php if(get_sub_field('three_description_top_margin')) { echo ' ' . get_sub_field('three_description_top_margin') . ''; } ?><?php if(get_sub_field('three_description_bottom_margin')) { echo ' ' . get_sub_field('three_description_bottom_margin') . ''; } ?><?php if(get_sub_field('three_description')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('three_description')) { echo '
									<div class="'; } ?><?php if(get_sub_field('three_description_color')) { echo ' ' . get_sub_field('three_description_color') . ''; } ?><?php if(get_sub_field('three_description_shadow')) { echo ' ' . get_sub_field('three_description_shadow') . ''; } ?><?php if(get_sub_field('three_description')) { echo '">' . get_sub_field('three_description') . '</div>'; } ?> 

							<?php if(get_sub_field('three_description')) { echo '</div>'; } ?>  
						<?php endif; ?>
						 <?php // Buttons 
							if( get_row_layout() == 'three_content_three_buttons_text_links' ): ?> 
							<?php if(get_sub_field('three_buttons')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('three_buttons_top_margin')) { echo ' ' . get_sub_field('three_buttons_top_margin') . ''; } ?><?php if(get_sub_field('three_buttons_bottom_margin')) { echo ' ' . get_sub_field('three_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('three_buttons')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list --> 
								<?php if( have_rows('three_buttons') ): $pr = 0;
								echo '<p class="mt0 mb0 down-arrow-container">';
								// loop through the rows of data
								while ( have_rows('three_buttons') ) : the_row(); ?> 
									<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="right-link'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('text_shadow') && get_sub_field('link') ) { echo '' . get_sub_field('text_shadow') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
									<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
									<?php if(get_sub_field('link')) { echo '>'; } ?>
									<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
									<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</p>'; endif; ?> 
								<!-- end repeater-list --> 

							<?php if(get_sub_field('three_buttons')) { echo '</div>'; } ?>  
						<?php endif; ?>

						 <?php // Rectangle Buttons 
							if( get_row_layout() == 'three_content_three_rectangle_buttons' ): ?> 
							<?php if(get_sub_field('three_button_swipe_rect')) { echo '<div class="grid-10 btn-rect fl'; } ?><?php if(get_sub_field('three_rect_buttons_top_margin')) { echo ' ' . get_sub_field('three_rect_buttons_top_margin') . ''; } ?><?php if(get_sub_field('three_rect_buttons_bottom_margin')) { echo ' ' . get_sub_field('three_rect_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('three_button_swipe_rect')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list -->
								<?php if( have_rows('three_button_swipe_rect') ): $pr = 0;
								echo '<div class="mb0 mt0">';
								// loop through the rows of data
								while ( have_rows('three_button_swipe_rect') ) : the_row(); ?> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect bg-alt mb0'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('button_color') && get_sub_field('link')) { echo '' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
								<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
								<div class="transition-rect"></div> 
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</div>'; endif; ?>   
								<!-- end repeater-list --> 

							<?php if(get_sub_field('three_button_swipe_rect')) { echo '</div>'; } ?>  
						<?php endif; ?>

						 <?php // Hubspot CTA 
							if( get_row_layout() == 'three_content_three_hubspot_cta' ): ?>
							<?php if(get_sub_field('three_hubspot_cta_button')) { echo '<div class="clearfix'; } ?><?php if(get_sub_field('three_button_alignment')) { echo ' ' . get_sub_field('three_button_alignment') . ''; } ?><?php if(get_sub_field('three_hubspot_cta_button')) { echo '">' . get_sub_field('three_hubspot_cta_button') . '</div>'; } ?>
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
			 
	</div>
	<?php if((get_field('three_page_width')) == true) { echo'</div></div>'; } ?>
</section> 