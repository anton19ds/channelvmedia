<?php
/**
 * Two Column Block Template.
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

<section <?php if((get_field('two_col_section_id')) == true) { echo'id="' . get_field('two_col_section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl cta-post-banner <?php if(get_field('two_col_background_color')) { echo '' . get_field('two_col_background_color') . ''; } ?><?php if(get_field('two_col_top_margin')) { echo ' ' . get_field('two_col_top_margin') . ''; } ?><?php if(get_field('two_col_bottom_margin')) { echo ' ' . get_field('two_col_bottom_margin') . ''; } ?> <?php if(get_field('two_col_top_padding')) { echo ' ' . get_field('two_col_top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('two_col_bottom_padding')) { echo ' ' . get_field('two_col_bottom_padding') . ''; } else {echo' pb0';} ?> clearfix">
	
	<?php if((get_field('two_col_page_width')) == true) { echo'<div class="grid-page mauto"><div class="grid-fixed-8b mauto">'; } ?>
	 
	<?php if(get_field('two_col_background_photo')) { echo '<div class="color-overlay-exact bg-common clearfix'; } ?>
		<?php if((get_field('two_col_background_photo_opacity')) == true) { echo ' ' . get_field('two_col_background_photo_opacity') . ''; } ?>
		<?php if(get_field('two_col_background_photo')) { echo '" style="'; } ?>
		<?php if(get_field('two_col_background_photo')) { echo 'background-image:url(' . get_field('two_col_background_photo') . ');'; } ?><?php if((get_field('two_col_background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?>
	<?php if(get_field('two_col_background_photo')) { echo '"></div>'; } ?> 
 
	<?php if(get_field('two_col_background_color_filter')) { echo '<div class="color-overlay-exact ' . get_field('two_col_background_color_filter') . ''; } ?><?php if((get_field('two_col_background_color_filter_opacity')) == true) { echo ' ' . get_field('two_col_background_color_filter_opacity') . ' '; } ?><?php if(get_field('two_col_background_color_filter')) { echo ' clearfix"></div>'; } ?>

		<?php if((get_field('two_col_header_headline') || get_field('two_col_header_subheadline') || get_field('two_col_header_intro')) == true ) { echo '<div class="grid-page mauto"><div class="grid-10 fl clearfix">'; } ?>

			<?php if((get_field('two_col_header_width') || get_field('two_col_header_align') || get_field('two_col_header_text_align')) == true ) { echo '<div class="' . get_field('two_col_header_width') . ''; } ?><?php if((get_field('two_col_header_align')) == true ) { echo ' ' . get_field('two_col_header_align') . ''; } ?><?php if((get_field('two_col_header_text_align')) == true ) { echo ' ' . get_field('two_col_header_text_align') . ''; } ?><?php if((get_field('two_col_header_width') || get_field('two_col_header_align') || get_field('two_col_header_text_align')) == true ) { echo '">'; } ?>
		
			<?php if(get_field('two_col_header_label')) { echo '<p class="sp-small mt0 mb20'; } ?> 
			<?php if(get_field('two_col_header_label')) { ?>   
			<?php if((get_field('two_col_header_text_align')) == 'tac' ) { echo ' mauto pl1 '; } else { echo ' '; } ?>
			<?php if((get_field('two_col_header_text_align')) == 'tal' ) { echo ' fl '; } else { echo ' '; } ?>
			<?php if((get_field('two_col_header_text_align')) == 'tar' ) { echo 'tar '; } else { echo ' '; } ?>
			<?php if(get_field('two_col_header_label_color')) { echo ' ' . get_field('two_col_header_label_color') . ''; } ?>
			<?php } ?>
			<?php if(get_field('two_col_header_label')) { echo 'clearix">' . get_field('two_col_header_label') . '</p>'; } ?>  
		
			<?php if(get_field('two_col_header_headline')) { echo '<h2 class="block-headline_alt mt0 mb0 z1 '; } ?><?php if((get_field('two_col_header_headline') && get_field('two_col_header_headline_color')) == true ) { echo '' . get_field('two_col_header_headline_color') . ''; } else { echo ' '; } ?><?php if(get_field('two_col_header_headline')) { echo '">' . get_field('two_col_header_headline') . '</h2>'; } ?>
			<?php if(get_field('two_col_header_subheadline')) { echo '<span class="block-subheadline pt0 pb0 mb20 '; } ?><?php if((get_field('two_col_header_subheadline') && get_field('two_col_header_subheadline_color')) == true) { echo ' ' . get_field('two_col_header_subheadline_color') . ''; } ?><?php if(get_field('two_col_header_subheadline')) { echo '">' . get_field('two_col_header_subheadline') . '</span>'; } ?>
			<?php if(get_field('two_col_header_intro')) { echo '<span class="block-text '; } ?><?php if((get_field('two_col_header_intro_color') && get_field('two_col_header_intro')) == true ) { echo '' . get_field('two_col_header_intro_color') . ''; } ?><?php if(get_field('two_col_header_intro')) { echo '">' . get_field('two_col_header_intro') . '</span>'; } ?> 
		
			<?php if((get_field('two_col_header_width') || get_field('two_col_header_align') || get_field('two_col_header_text_align')) == true ) { echo '</div>'; } ?>
		
		<?php if((get_field('two_col_header_headline') || get_field('two_col_header_subheadline') || get_field('two_col_header_intro')) == true ) { echo '</div></div>'; } ?>
	
		<div class="grid-page mauto<?php if(get_field('two_col_content_top_padding')) { echo ' ' . get_field('two_col_content_top_padding') . ''; } ?><?php if(get_field('two_col_content_bottom_padding')) { echo ' ' . get_field('two_col_content_bottom_padding') . ''; } ?>"> 
			 
			<?php if(get_field('two_col_main_logo')) { echo '<div class="grid-10 fl clearfix"><div class="grid-5 fl'; } ?><?php if(get_field('two_col_main_logo_margin_top')) { echo ' ' . get_field('two_col_main_logo_margin_top') . ''; } ?><?php if(get_field('two_col_main_logo_margin_bottom')) { echo ' ' . get_field('two_col_main_logo_margin_bottom') . ''; } ?><?php if(get_field('two_col_main_logo')) { echo ' clearfix"><div class="grid-fixed-9 mauto">'; } ?> 
			<?php if(get_field('two_col_main_logo')) { ?>
			<?php if(get_field('two_col_main_logo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_field('two_col_main_logo_width')) { echo ' ' . get_field('two_col_main_logo_width') . ''; } ?><?php if(get_field('two_col_main_logo_align')) { echo ' ' . get_field('two_col_main_logo_align') . ''; } ?><?php if(get_field('two_col_main_logo')) { echo '">'; } ?>
			<?php $image = get_field('two_col_main_logo'); ?>
			<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="300" height="100"/>
			<?php if(get_field('two_col_main_logo')) { echo '</span>'; } ?>
			<?php } ?> 
			<?php if(get_field('two_col_main_logo')) { echo '</div></div></div>'; } ?>  
			 
		<!-- start column 1 -->	
			<div class="<?php if(get_field('two_col_one_width')) { echo '' . get_field('two_col_one_width') . ' '; } else { echo'grid-5 ';} ?><?php if(get_field('two_col_one_position')) { echo '' . get_field('two_col_one_position') . ' '; } else { echo'fl ';} ?>clearfix">
				<div class="grid-9 mauto">
				 <!-- START CONTENT -->
				<?php
				// check if the flexible content field has rows of data
				if( have_rows('two_col_headlines_content') ): ?> 
				<?php 
					 // loop through the rows of data
					while ( have_rows('two_col_headlines_content') ) : the_row(); ?>  
						<?php // Label
							if( get_row_layout() == 'two_col_content_label' ): ?> 
							<?php if(get_sub_field('two_col_label')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_label_top_margin')) { echo ' ' . get_sub_field('two_col_label_top_margin') . ''; } ?><?php if(get_sub_field('two_col_label_bottom_margin')) { echo ' ' . get_sub_field('two_col_label_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_label')) { echo ' clearfix">'; } ?>   

								<?php if(get_sub_field('two_col_label')) { echo '
									<p class="sp-small mt0 mb20'; } ?><?php if(get_sub_field('two_col_label_color')) { echo ' ' . get_sub_field('two_col_label_color') . ''; } ?><?php if(get_sub_field('two_col_label_shadow')) { echo ' ' . get_sub_field('two_col_label_shadow') . ''; } ?><?php if(get_sub_field('two_col_label_alignment')) { echo ' ' . get_sub_field('two_col_label_alignment') . ''; } ?><?php if(get_sub_field('two_col_label')) { echo '">' . get_sub_field('two_col_label') . '</p>'; } ?> 

							<?php if(get_sub_field('two_col_label')) { echo '</div>'; } ?>  
						<?php endif; ?>  
						<?php // Logo 
							if( get_row_layout() == 'two_col_content_logo' ): ?> 
							<?php if(get_sub_field('two_col_logo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_logo_top_margin')) { echo ' ' . get_sub_field('two_col_logo_top_margin') . ''; } ?><?php if(get_sub_field('two_col_logo_bottom_margin')) { echo ' ' . get_sub_field('two_col_logo_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_logo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('two_col_logo')) { ?>
									<?php if(get_sub_field('two_col_logo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('two_col_logo_width')) { echo ' ' . get_sub_field('two_col_logo_width') . ''; } ?><?php if(get_sub_field('two_col_logo_align')) { echo ' ' . get_sub_field('two_col_logo_align') . ''; } ?><?php if(get_sub_field('two_col_logo')) { echo '">'; } ?>
									<?php $image = get_sub_field('two_col_logo'); ?>
									<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php if(get_sub_field('two_col_logo')) { echo '</span>'; } ?>
								<?php } ?>

							<?php if(get_sub_field('two_col_logo')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						<?php // Photo 
							if( get_row_layout() == 'two_col_content_photo' ): ?> 
							<?php if(get_sub_field('two_col_photo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_photo_top_margin')) { echo ' ' . get_sub_field('two_col_photo_top_margin') . ''; } ?><?php if(get_sub_field('two_col_photo_bottom_margin')) { echo ' ' . get_sub_field('two_col_photo_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_photo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('two_col_photo')) { ?>
									<?php if(get_sub_field('two_col_photo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('two_col_photo_width')) { echo ' ' . get_sub_field('two_col_photo_width') . ''; } ?><?php if(get_sub_field('two_col_photo_align')) { echo ' ' . get_sub_field('two_col_photo_align') . ''; } ?><?php if(get_sub_field('two_col_photo')) { echo '">'; } ?>
									<?php $image = get_sub_field('two_col_photo'); ?>
									<img class="responsive-img<?php if((get_sub_field('two_col_photo_add_shadow')) == true) { echo ' ' . get_sub_field('two_col_photo_add_shadow') . ''; } ?><?php if((get_sub_field('two_col_photo_underline')) == true) { echo ' bb-lt-purple'; } ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="300" height="200"/>

									<?php if(get_sub_field('two_col_photo_color_filter')) { echo '<div class="color-overlay-exact ' . get_sub_field('two_col_photo_color_filter') . ''; } ?><?php if((get_sub_field('two_col_photo_color_filter_opacity')) == true) { echo ' ' . get_sub_field('two_col_photo_color_filter_opacity') . ' '; } ?><?php if(get_sub_field('two_col_photo_color_filter')) { echo ' clearfix"></div>'; } ?>
					
									<?php if(get_sub_field('two_col_photo')) { echo '</span>'; } ?>
								<?php } ?>
					
								<?php if(get_sub_field('two_col_photo') && get_sub_field('two_col_photo_caption')) { echo '<div class="grid-10 clearfix">'; } ?>  
									<?php if(get_sub_field('two_col_photo_caption')) { echo '<div class="cs-caption'; } ?><?php if(get_sub_field('two_col_photo_caption') && get_sub_field('two_col_photo_caption_color')) { echo ' ' . get_sub_field('two_col_photo_caption_color') . ''; } ?><?php if(get_sub_field('two_col_photo_caption')) { echo '">' . get_sub_field('two_col_photo_caption') . '</div>'; } ?>
								<?php if(get_sub_field('two_col_photo') && get_sub_field('two_col_photo_caption')) { echo '</div>'; } ?>

							<?php if(get_sub_field('two_col_photo')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						<?php // Headline 
							if( get_row_layout() == 'two_col_content_headline' ): ?> 
							<?php if(get_sub_field('two_col_headline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_headline_top_margin')) { echo ' ' . get_sub_field('two_col_headline_top_margin') . ''; } ?><?php if(get_sub_field('two_col_headline_bottom_margin')) { echo ' ' . get_sub_field('two_col_headline_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_headline')) { echo ' clearfix">'; } ?>
								<?php if((get_sub_field('two_col_headline') && get_sub_field('two_col_h1_tag')) == true ) { echo '<h1'; } else { echo '<h2'; } ?><?php if(get_sub_field('two_col_headline')) { echo ' class="block-headline_cs mb0 mt0 pb0'; } ?><?php if(get_sub_field('two_col_headline_color')) { echo ' ' . get_sub_field('two_col_headline_color') . ''; } ?><?php if(get_sub_field('two_col_headline_shadow')) { echo ' ' . get_sub_field('two_col_headline_shadow') . ''; } ?><?php if(get_sub_field('two_col_headline_align') && get_sub_field('two_col_headline')) { echo ' ' . get_sub_field('two_col_headline_align') . ''; } ?><?php if(get_sub_field('two_col_headline')) { echo '"'; } ?>><?php if(get_sub_field('two_col_headline')) { echo '' . get_sub_field('two_col_headline') . ''; } ?><?php if((get_sub_field('two_col_headline') && get_sub_field('two_col_h1_tag')) == true ) { echo '</h1>'; } else { echo '</h2>'; } ?>
							<?php if(get_sub_field('two_col_headline')) { echo '</div>'; } ?> 
						<?php endif; ?>
						<?php // Subeadline 
							if( get_row_layout() == 'two_col_content_subheadline' ): ?> 
							<?php if(get_sub_field('two_col_subheadline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_subheadline_top_margin')) { echo ' ' . get_sub_field('two_col_subheadline_top_margin') . ''; } ?><?php if(get_sub_field('two_col_subheadline_bottom_margin')) { echo ' ' . get_sub_field('two_col_subheadline_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_subheadline')) { echo ' clearfix">'; } ?> 
								<?php if(get_sub_field('two_col_subheadline')) { echo '
									<span class="block-subheadline pt0 pb0'; } ?><?php if(get_sub_field('two_col_subheadline_color')) { echo ' ' . get_sub_field('two_col_subheadline_color') . ''; } ?><?php if(get_sub_field('two_col_subheadline_shadow')) { echo ' ' . get_sub_field('two_col_subheadline_shadow') . ''; } ?><?php if(get_sub_field('two_col_subheadline_align') && get_sub_field('two_col_subheadline')) { echo ' ' . get_sub_field('two_col_subheadline_align') . ''; } ?><?php if(get_sub_field('two_col_subheadline')) { echo '">' . get_sub_field('two_col_subheadline') . '</span>'; } ?> 
							<?php if(get_sub_field('two_col_subheadline')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						 <?php // Text 
							if( get_row_layout() == 'two_col_content_text' ): ?> 
							<?php if(get_sub_field('two_col_description')) { echo '<div class="grid-10 fl overview-description'; } ?><?php if(get_sub_field('two_col_description_top_margin')) { echo ' ' . get_sub_field('two_col_description_top_margin') . ''; } ?><?php if(get_sub_field('two_col_description_bottom_margin')) { echo ' ' . get_sub_field('two_col_description_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_description')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('two_col_description')) { echo '
									<div class="'; } ?><?php if(get_sub_field('two_col_description_color')) { echo ' ' . get_sub_field('two_col_description_color') . ''; } ?><?php if(get_sub_field('two_col_description_shadow')) { echo ' ' . get_sub_field('two_col_description_shadow') . ''; } ?><?php if(get_sub_field('two_col_description')) { echo '">' . get_sub_field('two_col_description') . '</div>'; } ?> 

							<?php if(get_sub_field('two_col_description')) { echo '</div>'; } ?>  
						<?php endif; ?>

						<?php // Video
							if( get_row_layout() == 'two_col_video' ): ?>
							<?php if(get_sub_field('two_col_video_url')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_video_top_margin')) { echo ' ' . get_sub_field('two_col_video_top_margin') . ''; } ?><?php if(get_sub_field('two_col_video_bottom_margin')) { echo ' ' . get_sub_field('two_col_video_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_video_url')) { echo ' clearfix"><div class="iframe-container">'; } ?>

								<?php if(get_sub_field('two_col_video_url')) { echo '<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
									<div class="wp-block-embed__wrapper responsive-img">
										<iframe class="iframe-responsive"'; } ?> <?php if(get_sub_field('two_col_video_title')) { echo 'title="' . get_sub_field('two_col_video_title') . '"'; } ?> <?php if(get_sub_field('two_col_video_url')) { echo 'width="840" height="473" src="https://www.youtube.com/embed/' . get_sub_field('two_col_video_url') . '?feature=oembed&modestbranding=1&autohide=1&showinfo=0&rel=0&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" data-gtm-yt-inspected-7="true"></iframe>
									</div>'; } ?>
									<?php if(get_sub_field('two_col_video_caption')) { echo '<figcaption class="wp-element-caption">' . get_sub_field('two_col_video_caption') . '</figcaption>'; } ?>
									<?php if(get_sub_field('two_col_video_caption_color')) { echo '' . get_sub_field('two_col_video_caption_color') . '</figcaption>'; } ?>
									<?php if(get_sub_field('two_col_video_caption_shadow')) { echo '' . get_sub_field('two_col_video_caption_shadow') . '</figcaption>'; } ?>
								<?php if(get_sub_field('two_col_video_url')) { echo '</figure>'; } ?>

							<?php if(get_sub_field('two_col_video_url')) { echo '</div></div>'; } ?>
						<?php endif; ?>

						<?php // Buttons 
							if( get_row_layout() == 'two_col_buttons_text_links' ): ?> 
							<?php if(get_sub_field('two_col_buttons')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_buttons_top_margin')) { echo ' ' . get_sub_field('two_col_buttons_top_margin') . ''; } ?><?php if(get_sub_field('two_col_buttons_bottom_margin')) { echo ' ' . get_sub_field('two_col_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_buttons')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list --> 
								<?php if( have_rows('two_col_buttons') ): $pr = 0;
								echo '<p class="mt0 mb0 down-arrow-container">';
								// loop through the rows of data
								while ( have_rows('two_col_buttons') ) : the_row(); ?> 
									<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="right-link'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('text_shadow') && get_sub_field('link') ) { echo '' . get_sub_field('text_shadow') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
									<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
									<?php if(get_sub_field('link')) { echo '>'; } ?>
									<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
									<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</p>'; endif; ?> 
								<!-- end repeater-list --> 

							<?php if(get_sub_field('two_col_buttons')) { echo '</div>'; } ?>  
						<?php endif; ?>

						 <?php // Rectangle Buttons 
							if( get_row_layout() == 'two_col_rectangle_buttons' ): ?> 
							<?php if(get_sub_field('two_col_button_swipe_rect')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_rect_buttons_top_margin')) { echo ' ' . get_sub_field('two_col_rect_buttons_top_margin') . ''; } ?><?php if(get_sub_field('two_col_rect_buttons_bottom_margin')) { echo ' ' . get_sub_field('two_col_rect_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_button_swipe_rect')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list -->
								<?php if( have_rows('two_col_button_swipe_rect') ): $pr = 0;
								echo '<div class="mb0 mt0">';
								// loop through the rows of data
								while ( have_rows('two_col_button_swipe_rect') ) : the_row(); ?> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect '; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('button_color') && get_sub_field('link')) { echo '' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
								<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
								<div class="transition-rect"></div> 
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</div>'; endif; ?>   
								<!-- end repeater-list --> 

							<?php if(get_sub_field('two_col_button_swipe_rect')) { echo '</div>'; } ?>  
						<?php endif; ?>

						<?php endwhile; // end loop through the rows of data
							else :
							// no layouts found
						?> 
				<?php endif; ?><?php wp_reset_query(); ?>
				 <!-- END CONTENT -->
	  
			</div>
		</div><!-- close column 1 -->			
		<!-- start column 2 -->			
		<div class="<?php if(get_field('two_col_two_width')) { echo '' . get_field('two_col_two_width') . ' '; } else { echo'grid-5 ';} ?><?php if(get_field('two_col_two_position')) { echo '' . get_field('two_col_two_position') . ' '; } else { echo'fl ';} ?><?php if(get_field('two_col_two_content_position')) { echo '' . get_field('two_col_two_content_position') . ''; } ?> clearfix">
				<div class="grid-9 mauto">
				 <!-- START CONTENT -->
				<?php
				// check if the flexible content field has rows of data
				if( have_rows('two_col_two_headlines_content') ): ?> 
				<?php
					 // loop through the rows of data
					while ( have_rows('two_col_two_headlines_content') ) : the_row(); ?>  
						<?php // Label
							if( get_row_layout() == 'two_col_two_content_label' ): ?> 
							<?php if(get_sub_field('two_col_two_label')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_two_label_top_margin')) { echo ' ' . get_sub_field('two_col_two_label_top_margin') . ''; } ?><?php if(get_sub_field('two_col_two_label_bottom_margin')) { echo ' ' . get_sub_field('two_col_two_label_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_two_label')) { echo ' clearfix">'; } ?>   

								<?php if(get_sub_field('two_col_two_label')) { echo '
									<p class="sp-small mt0 mb20'; } ?><?php if(get_sub_field('two_col_two_label_color')) { echo ' ' . get_sub_field('two_col_two_label_color') . ''; } ?><?php if(get_sub_field('two_col_two_label_shadow')) { echo ' ' . get_sub_field('two_col_two_label_shadow') . ''; } ?><?php if(get_sub_field('two_col_two_label_alignment')) { echo ' ' . get_sub_field('two_col_two_label_alignment') . ''; } ?><?php if(get_sub_field('two_col_two_label')) { echo '">' . get_sub_field('two_col_two_label') . '</p>'; } ?> 

							<?php if(get_sub_field('two_col_two_label')) { echo '</div>'; } ?>  
						<?php endif; ?>  
						<?php // Logo 
							if( get_row_layout() == 'two_col_two_content_logo' ): ?> 
							<?php if(get_sub_field('two_col_two_logo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_two_logo_top_margin')) { echo ' ' . get_sub_field('two_col_two_logo_top_margin') . ''; } ?><?php if(get_sub_field('two_col_two_logo_bottom_margin')) { echo ' ' . get_sub_field('two_col_two_logo_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_two_logo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('two_col_two_logo')) { ?>
									<?php if(get_sub_field('two_col_two_logo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('two_col_two_logo_width')) { echo ' ' . get_sub_field('two_col_two_logo_width') . ''; } ?><?php if(get_sub_field('two_col_two_logo_align')) { echo ' ' . get_sub_field('two_col_two_logo_align') . ''; } ?><?php if(get_sub_field('two_col_two_logo')) { echo '">'; } ?>
									<?php $image = get_sub_field('two_col_two_logo'); ?>
									<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									<?php if(get_sub_field('two_col_two_logo')) { echo '</span>'; } ?>
								<?php } ?>

							<?php if(get_sub_field('two_col_two_logo')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						<?php // Photo 
							if( get_row_layout() == 'two_col_two_content_photo' ): ?> 
							<?php if(get_sub_field('two_col_two_photo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_two_photo_top_margin')) { echo ' ' . get_sub_field('two_col_two_photo_top_margin') . ''; } ?><?php if(get_sub_field('two_col_two_photo_bottom_margin')) { echo ' ' . get_sub_field('two_col_two_photo_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_two_photo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('two_col_two_photo')) { ?>
									<?php if(get_sub_field('two_col_two_photo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('two_col_two_photo_width')) { echo ' ' . get_sub_field('two_col_two_photo_width') . ''; } ?><?php if(get_sub_field('two_col_two_photo_align')) { echo ' ' . get_sub_field('two_col_two_photo_align') . ''; } ?><?php if(get_sub_field('two_col_two_photo')) { echo '">'; } ?>
									<?php $image = get_sub_field('two_col_two_photo'); ?>
									<img class="responsive-img<?php if((get_sub_field('two_col_two_photo_add_shadow')) == true) { echo ' ' . get_sub_field('two_col_two_photo_add_shadow') . ''; } ?><?php if((get_sub_field('two_col_two_photo_underline')) == true) { echo ' bb-lt-purple'; } ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="300" height="200"/>

									<?php if(get_sub_field('two_col_two_photo_color_filter')) { echo '<div class="color-overlay-exact ' . get_sub_field('two_col_two_photo_color_filter') . ''; } ?><?php if((get_sub_field('two_col_two_photo_color_filter_opacity')) == true) { echo ' ' . get_sub_field('two_col_two_photo_color_filter_opacity') . ' '; } ?><?php if(get_sub_field('two_col_two_photo_color_filter')) { echo ' clearfix"></div>'; } ?>
					
									<?php if(get_sub_field('two_col_two_photo')) { echo '</span>'; } ?>
								<?php } ?>
					
								<?php if(get_sub_field('two_col_two_photo') && get_sub_field('two_col_two_photo_caption')) { echo '<div class="grid-10 clearfix">'; } ?>  
									<?php if(get_sub_field('two_col_two_photo_caption')) { echo '<div class="cs-caption'; } ?><?php if(get_sub_field('two_col_two_photo_caption') && get_sub_field('two_col_two_photo_caption_color')) { echo ' ' . get_sub_field('two_col_two_photo_caption_color') . ''; } ?><?php if(get_sub_field('two_col_two_photo_caption')) { echo '">' . get_sub_field('two_col_two_photo_caption') . '</div>'; } ?>
								<?php if(get_sub_field('two_col_two_photo') && get_sub_field('two_col_two_photo_caption')) { echo '</div>'; } ?>

							<?php if(get_sub_field('two_col_two_photo')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						<?php // Headline
							if( get_row_layout() == 'two_col_two_content_headline' ): ?> 
							<?php if(get_sub_field('two_col_two_headline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_two_headline_top_margin')) { echo ' ' . get_sub_field('two_col_two_headline_top_margin') . ''; } ?><?php if(get_sub_field('two_col_two_headline_bottom_margin')) { echo ' ' . get_sub_field('two_col_two_headline_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_two_headline')) { echo ' clearfix">'; } ?>   
								<?php if((get_sub_field('two_col_two_headline') && get_sub_field('two_col_two_h1_tag')) == true ) { echo '<h1'; } else { echo '<h2'; } ?><?php if(get_sub_field('two_col_two_headline')) { echo ' class="block-headline_cs mb0 mt0 pb0 z1'; } ?><?php if(get_sub_field('two_col_two_headline_color')) { echo ' ' . get_sub_field('two_col_two_headline_color') . ''; } ?><?php if(get_sub_field('two_col_two_headline_shadow')) { echo ' ' . get_sub_field('two_col_two_headline_shadow') . ''; } ?><?php if(get_sub_field('two_col_two_headline_align') && get_sub_field('two_col_two_headline')) { echo ' ' . get_sub_field('two_col_two_headline_align') . ''; } ?><?php if(get_sub_field('two_col_two_headline')) { echo '"'; } ?>><?php if(get_sub_field('two_col_two_headline')) { echo '' . get_sub_field('two_col_two_headline') . ''; } ?><?php if((get_sub_field('two_col_two_headline') && get_sub_field('two_col_two_h1_tag')) == true ) { echo '</h1>'; } else { echo '</h2>'; } ?>  
							<?php if(get_sub_field('two_col_two_headline')) { echo '</div>'; } ?> 
						<?php endif; ?>
						<?php // Subheadline
							if( get_row_layout() == 'two_col_two_content_subheadline' ): ?> 
							<?php if(get_sub_field('two_col_two_subheadline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_two_subheadline_top_margin')) { echo ' ' . get_sub_field('two_col_two_subheadline_top_margin') . ''; } ?><?php if(get_sub_field('two_col_two_subheadline_bottom_margin')) { echo ' ' . get_sub_field('two_col_two_subheadline_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_two_subheadline')) { echo ' clearfix">'; } ?>  
								<?php if(get_sub_field('two_col_two_subheadline')) { echo '
									<span class="block-subheadline pb0 pt0'; } ?><?php if(get_sub_field('two_col_two_subheadline_color')) { echo ' ' . get_sub_field('two_col_two_subheadline_color') . ''; } ?><?php if(get_sub_field('two_col_two_subheadline_shadow')) { echo ' ' . get_sub_field('two_col_two_subheadline_shadow') . ''; } ?><?php if(get_sub_field('two_col_two_subheadline_align') && get_sub_field('two_col_two_subheadline')) { echo ' ' . get_sub_field('two_col_two_subheadline_align') . ''; } ?><?php if(get_sub_field('two_col_two_subheadline')) { echo '">' . get_sub_field('two_col_two_subheadline') . '</span>'; } ?> 
							<?php if(get_sub_field('two_col_two_subheadline')) { echo '</div>'; } ?> 
						<?php endif; ?> 
						 <?php // Text 
							if( get_row_layout() == 'two_col_two_content_text' ): ?> 
							<?php if(get_sub_field('two_col_two_description')) { echo '<div class="grid-10 fl overview-description'; } ?><?php if(get_sub_field('two_col_two_description_top_margin')) { echo ' ' . get_sub_field('two_col_two_description_top_margin') . ''; } ?><?php if(get_sub_field('two_col_two_description_bottom_margin')) { echo ' ' . get_sub_field('two_col_two_description_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_two_description')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('two_col_two_description')) { echo '
									<div class="'; } ?><?php if(get_sub_field('two_col_two_description_color')) { echo ' ' . get_sub_field('two_col_two_description_color') . ''; } ?><?php if(get_sub_field('two_col_two_description_shadow')) { echo ' ' . get_sub_field('two_col_two_description_shadow') . ''; } ?><?php if(get_sub_field('two_col_two_description')) { echo '">' . get_sub_field('two_col_two_description') . '</div>'; } ?> 

							<?php if(get_sub_field('two_col_two_description')) { echo '</div>'; } ?>  
						<?php endif; ?> 
					
						<?php // Video
							if( get_row_layout() == 'two_col_two_video' ): ?>
							<?php if(get_sub_field('two_col_two_video_url')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_two_video_top_margin')) { echo ' ' . get_sub_field('two_col_two_video_top_margin') . ''; } ?><?php if(get_sub_field('two_col_two_video_bottom_margin')) { echo ' ' . get_sub_field('two_col_two_video_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_two_video_url')) { echo ' clearfix"><div class="iframe-container">'; } ?>

								<?php if(get_sub_field('two_col_two_video_url')) { echo '<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
									<div class="wp-block-embed__wrapper responsive-img">
										<iframe class="iframe-responsive"'; } ?> <?php if(get_sub_field('two_col_two_video_title')) { echo 'title="' . get_sub_field('two_col_two_video_title') . '"'; } ?> <?php if(get_sub_field('two_col_two_video_url')) { echo 'width="840" height="473" src="https://www.youtube.com/embed/' . get_sub_field('two_col_two_video_url') . '?feature=oembed&modestbranding=1&autohide=1&showinfo=0&rel=0&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" data-gtm-yt-inspected-7="true"></iframe>
									</div>'; } ?>
									<?php if(get_sub_field('two_col_two_video_caption')) { echo '<figcaption class="wp-element-caption">' . get_sub_field('two_col_two_video_caption') . '</figcaption>'; } ?>
									<?php if(get_sub_field('two_col_two_video_caption_color')) { echo '' . get_sub_field('two_col_two_video_caption_color') . '</figcaption>'; } ?>
									<?php if(get_sub_field('two_col_two_video_caption_shadow')) { echo '' . get_sub_field('two_col_two_video_caption_shadow') . '</figcaption>'; } ?>
								<?php if(get_sub_field('two_col_two_video_url')) { echo '</figure>'; } ?>

							<?php if(get_sub_field('two_col_two_video_url')) { echo '</div></div>'; } ?>
						<?php endif; ?>
					
						<?php // Buttons 
							if( get_row_layout() == 'two_col_two_buttons_text_links' ): ?> 
							<?php if(get_sub_field('two_col_two_buttons')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_two_buttons_top_margin')) { echo ' ' . get_sub_field('two_col_two_buttons_top_margin') . ''; } ?><?php if(get_sub_field('two_col_two_buttons_bottom_margin')) { echo ' ' . get_sub_field('two_col_two_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_two_buttons')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list --> 
								<?php if( have_rows('two_col_two_buttons') ): $pr = 0;
								echo '<p class="mt0 mb0 down-arrow-container">';
								// loop through the rows of data
								while ( have_rows('two_col_two_buttons') ) : the_row(); ?> 
									<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="right-link'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('text_shadow') && get_sub_field('link') ) { echo '' . get_sub_field('text_shadow') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
									<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
									<?php if(get_sub_field('link')) { echo '>'; } ?>
									<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
									<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</p>'; endif; ?> 
								<!-- end repeater-list --> 

							<?php if(get_sub_field('two_col_two_buttons')) { echo '</div>'; } ?>  
						<?php endif; ?>

						<?php // Rectangle Buttons 
							if( get_row_layout() == 'two_col_two_rectangle_buttons' ): ?> 
							<?php if(get_sub_field('two_col_two_button_swipe_rect')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('two_col_two_rect_buttons_top_margin')) { echo ' ' . get_sub_field('two_col_two_rect_buttons_top_margin') . ''; } ?><?php if(get_sub_field('two_col_two_rect_buttons_bottom_margin')) { echo ' ' . get_sub_field('two_col_two_rect_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('two_col_two_button_swipe_rect')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list --> 
								<?php if( have_rows('two_col_two_button_swipe_rect') ): $pr = 0;
								echo '<div class="mb0 mt0">';
								// loop through the rows of data
								while ( have_rows('two_col_two_button_swipe_rect') ) : the_row(); ?> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect '; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('button_color') && get_sub_field('link')) { echo '' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
								<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
								<div class="transition-rect"></div> 
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</div>'; endif; ?>   
								<!-- end repeater-list --> 

							<?php if(get_sub_field('button_swipe_rect')) { echo '</div>'; } ?>  
						<?php endif; ?>

						<?php endwhile; // end loop through the rows of data
							else :
							// no layouts found
						?> 
				<?php endif; ?><?php wp_reset_query(); ?>
				 <!-- END CONTENT -->
	  
			</div>
		</div><!-- close column 2 -->
	</div> <!--grid-fixed-9 page -->
	
	<?php if((get_field('two_col_page_width')) == true) { echo'</div></div>'; } ?>
</section> 