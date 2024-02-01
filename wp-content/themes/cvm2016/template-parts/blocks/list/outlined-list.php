<?php
/**
 * Outlined List Block Template.
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

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl<?php if((get_field('hightlight_on_case_study')) == true) { echo' on-cs'; } ?><?php if(get_field('highlight_background_color')) { echo ' ' . get_field('highlight_background_color') . ''; } ?> job-lists <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb5';} ?> clearfix"> 
	
	<?php if(get_field('highlight_background_photo')) { echo '<div class="color-overlay-exact bg-common'; } ?><?php if((get_field('highlight_background_photo') && get_field('highlight_background_photo_opacity')) == true) { echo ' ' . get_field('highlight_background_photo_opacity') . ''; } ?><?php if(get_field('highlight_background_photo')) { echo ' clearfix" style="background-image:url(' . get_field('highlight_background_photo') . ');'; } ?><?php if((get_field('highlight_background_photo') && get_field('highlight_background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?><?php if(get_field('highlight_background_photo')) { echo '"></div>'; } ?>

	<?php if(get_field('highlight_background_color_filter')) { echo '<div class="color-overlay-exact ' . get_field('highlight_background_color_filter') . ''; } ?><?php if((get_field('highlight_background_color_filter') && get_field('highlight_background_color_filter_opacity')) == true) { echo ' ' . get_field('highlight_background_color_filter_opacity') . ' '; } ?><?php if(get_field('highlight_background_color_filter')) { echo ' clearfix"></div>'; } ?>

	<div class="grid-page mauto">

		<div class="grid-10 fl <?php if(get_field('highlight_header_top_padding')) { echo ' ' . get_field('highlight_header_top_padding') . ''; } ?><?php if(get_field('highlight_header_bot_padding')) { echo ' ' . get_field('highlight_header_bot_padding') . ''; } ?> clearfix">

			<?php if((get_field('highlight_header_width')) == true ) { echo '<div class="' . get_field('highlight_header_width') . ''; } ?><?php if((get_field('highlight_header_align')) == true ) { echo ' ' . get_field('highlight_header_align') . ''; } ?><?php if((get_field('highlight_header_width')) == true ) { echo ' clearfix">'; } ?>

				<!-- START CONTENT -->
				<?php
				// check if the flexible content field has rows of data
				if( have_rows('highlight_headlines') ): ?> 
				<?php 
					 // loop through the rows of data
					while ( have_rows('highlight_headlines') ) : the_row(); ?>
						<?php // Logo
							if( get_row_layout() == 'highlight_headlines_logos' ): ?> 
							<?php if(get_sub_field('highlight_headlines_logo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('highlight_headlines_logo_top_margin')) { echo ' ' . get_sub_field('highlight_headlines_logo_top_margin') . ''; } ?><?php if(get_sub_field('highlight_headlines_logo_bot_margin')) { echo ' ' . get_sub_field('highlight_headlines_logo_bot_margin') . ''; } ?><?php if(get_sub_field('highlight_headlines_logo')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('highlight_headlines_logo')) { ?>
									<?php if(get_sub_field('highlight_headlines_logo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('highlight_headlines_logo_width')) { echo ' ' . get_sub_field('highlight_headlines_logo_width') . ''; } ?><?php if(get_sub_field('highlight_headlines_logo_align')) { echo ' ' . get_sub_field('highlight_headlines_logo_align') . ''; } ?><?php if(get_sub_field('highlight_headlines_logo')) { echo '">'; } ?>
									<?php $image = get_sub_field('highlight_headlines_logo'); ?>
									<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="300" height="200"/>
									<?php if(get_sub_field('highlight_headlines_logo')) { echo '</span>'; } ?>
								<?php } ?>

							<?php if(get_sub_field('highlight_headlines_logo')) { echo '</div>'; } ?>
						<?php endif; ?>
						 <?php // Label 
							if( get_row_layout() == 'highlight_headlines_label' ): ?> 
							<?php if(get_sub_field('label')) { echo '<div class="grid-10 fl overview-label'; } ?><?php if(get_sub_field('label_top_margin')) { echo ' ' . get_sub_field('label_top_margin') . ''; } ?><?php if(get_sub_field('label_bot_margin')) { echo ' ' . get_sub_field('label_bot_margin') . ''; } ?><?php if(get_sub_field('label')) { echo ' clearfix">'; } ?>
			
								<?php if(get_sub_field('label')) { echo '<p class="sp-small mt0 mb0 pt0 pb0'; } ?>
								<?php if(get_sub_field('label')) { ?>
								<?php if((get_sub_field('label_alignment')) == 'tac' ) { echo ' mauto '; } else { echo ' '; } ?>
								<?php if((get_sub_field('label_alignment')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
								<?php if((get_sub_field('label_alignment')) == 'tar' ) { echo ' tar '; } else { echo ' '; } ?>
								<?php if(get_sub_field('label_color')) { echo ' ' . get_sub_field('label_color') . ''; } ?>
								<?php if(get_sub_field('label_shadow')) { echo ' ' . get_sub_field('label_shadow') . ''; } ?>
								<?php } ?>
								<?php if(get_sub_field('label')) { echo 'clearfix">' . get_sub_field('label') . '</p>'; } ?>

							<?php if(get_sub_field('label')) { echo '</div>'; } ?>
						<?php endif; ?>  
						<?php // Headline
							if( get_row_layout() == 'highlight_headlines_headlines' ): ?> 
							<?php if(get_sub_field('highlight_headlines_headline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('highlight_headlines_top_margin')) { echo ' ' . get_sub_field('highlight_headlines_top_margin') . ''; } ?><?php if(get_sub_field('highlight_headlines_bot_margin')) { echo ' ' . get_sub_field('highlight_headlines_bot_margin') . ''; } ?><?php if(get_sub_field('highlight_headlines_headline')) { echo ' clearfix">'; } ?>  

								<?php if((get_sub_field('highlight_headlines_headline') && get_sub_field('highlight_headlines_h1')) == true ) { echo '<h1 class=" '; } else { echo '<h2 class=" '; } ?>
								<?php if(get_sub_field('highlight_headlines_headline')) { ?>   
								<?php if((get_sub_field('highlight_headlines_alignment')) == 'tac' ) { echo ' tac '; } else { echo ' '; } ?>
								<?php if((get_sub_field('highlight_headlines_alignment')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
								<?php if((get_sub_field('highlight_headlines_alignment')) == 'tar' ) { echo ' tar '; } else { echo ' '; } ?>
								<?php if(get_sub_field('highlight_headlines_color')) { echo ' ' . get_sub_field('highlight_headlines_color') . ''; } ?>
								<?php if(get_sub_field('highlight_headlines_shadow')) { echo ' ' . get_sub_field('highlight_headlines_shadow') . ''; } ?>
								<?php } ?>
								<?php if(get_sub_field('highlight_headlines_headline')) { echo ' block-headline_alt mt0 mb0 clearfix'; } ?>
								<?php if((get_sub_field('highlight_headlines_headline') && get_sub_field('highlight_headlines_h1')) == true ) { echo '">'; } else { echo '">'; } ?> 
								<?php if(get_sub_field('highlight_headlines_headline')) { echo '' . get_sub_field('highlight_headlines_headline') . ''; } ?>
								<?php if((get_sub_field('highlight_headlines_headline') && get_sub_field('highlight_headlines_h1')) == true ) { echo '</h1>'; } else { echo '</h2>'; } ?> 

							<?php if(get_sub_field('highlight_headlines_headline')) { echo '</div>'; } ?>  
						<?php endif; ?>  
						<?php // Subheadline
							if( get_row_layout() == 'highlight_headlines_subheadlines' ): ?> 
							<?php if(get_sub_field('highlight_headlines_subheadline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('highlight_headlines_subheadline_top_margin')) { echo ' ' . get_sub_field('highlight_headlines_subheadline_top_margin') . ''; } ?><?php if(get_sub_field('highlight_headlines_subheadline_bot_margin')) { echo ' ' . get_sub_field('highlight_headlines_subheadline_bot_margin') . ''; } ?><?php if(get_sub_field('highlight_headlines_subheadline')) { echo ' clearfix">'; } ?> 

								<?php if(get_sub_field('highlight_headlines_subheadline')) { echo '<span class="block-subheadline pb0 pt0'; } ?> 
								<?php if(get_sub_field('highlight_headlines_subheadline')) { ?>   
								<?php if((get_sub_field('highlight_headlines_subheadline_alignment')) == 'tac' ) { echo ' tac '; } else { echo ' '; } ?>
								<?php if((get_sub_field('highlight_headlines_subheadline_alignment')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
								<?php if((get_sub_field('highlight_headlines_subheadline_alignment')) == 'tar' ) { echo ' tar '; } else { echo ' '; } ?>
								<?php if(get_sub_field('highlight_headlines_subheadline_color')) { echo ' ' . get_sub_field('highlight_headlines_subheadline_color') . ''; } ?>
								<?php if(get_sub_field('highlight_headlines_subheadline_shadow')) { echo ' ' . get_sub_field('highlight_headlines_subheadline_shadow') . ''; } ?>
								<?php } ?>
								<?php if(get_sub_field('highlight_headlines_subheadline')) { echo 'clearfix"><strong>' . get_sub_field('highlight_headlines_subheadline') . '</strong></span>'; } ?> 

							<?php if(get_sub_field('highlight_headlines_subheadline')) { echo '</div>'; } ?>  
						<?php endif; ?>
						 <?php // Description 
							if( get_row_layout() == 'highlight_headlines_descriptions' ): ?> 
							<?php if(get_sub_field('highlight_headlines_description')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('highlight_headlines_description_top_margin')) { echo ' ' . get_sub_field('highlight_headlines_description_top_margin') . ''; } ?><?php if(get_sub_field('highlight_headlines_description_bot_margin')) { echo ' ' . get_sub_field('highlight_headlines_description_bot_margin') . ''; } ?><?php if(get_sub_field('highlight_headlines_description')) { echo ' clearfix">'; } ?>

								<?php if(get_sub_field('highlight_headlines_description')) { echo '<span class="block-text '; } ?>
								<?php if(get_sub_field('highlight_headlines_description')) { ?>
								<?php if((get_sub_field('highlight_headlines_description_alignment')) == 'tac' ) { echo ' tac '; } else { echo ' '; } ?>
								<?php if((get_sub_field('highlight_headlines_description_alignment')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
								<?php if((get_sub_field('highlight_headlines_description_alignment')) == 'tar' ) { echo ' tar '; } else { echo ' '; } ?>
								<?php if(get_sub_field('highlight_headlines_description_color')) { echo ' ' . get_sub_field('highlight_headlines_description_color') . ''; } ?>
								<?php if(get_sub_field('highlight_headlines_description_shadow')) { echo ' ' . get_sub_field('highlight_headlines_description_shadow') . ''; } ?>
								<?php } ?>
								<?php if(get_sub_field('highlight_headlines_description')) { echo 'clearfix">' . get_sub_field('highlight_headlines_description') . '</div>'; } ?>

							<?php if(get_sub_field('highlight_headlines_description')) { echo '</span>'; } ?>  
						<?php endif; ?>
						 <?php // Text Buttons
							if( get_row_layout() == 'highlight_headlines_text_btns' ): ?> 
							<?php if(get_sub_field('highlight_headlines_text_btn')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('highlight_headlines_text_btn_top_margin')) { echo ' ' . get_sub_field('highlight_headlines_text_btn_top_margin') . ''; } ?><?php if(get_sub_field('highlight_headlines_text_btn_bot_margin')) { echo ' ' . get_sub_field('highlight_headlines_text_btn_bot_margin') . ''; } ?><?php if(get_sub_field('highlight_headlines_text_btn')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list -->
								<?php if( have_rows('highlight_headlines_text_btn') ): $pr = 0;
								echo '<p class="mt0 mb0 down-arrow-container">';
								// loop through the rows of data
								while ( have_rows('highlight_headlines_text_btn') ) : the_row(); ?> 
									<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="right-link'; } ?> <?php if(get_sub_field('hubspot_pop_up_trigger')) { echo '' . get_sub_field('hubspot_pop_up_trigger') . ''; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('text_shadow') && get_sub_field('link') ) { echo '' . get_sub_field('text_shadow') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
									<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
									<?php if(get_sub_field('link')) { echo '>'; } ?>
									<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
									<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
								<?php endwhile; echo '</p>'; endif; ?> 
								<!-- end repeater-list -->

							<?php if(get_sub_field('highlight_headlines_text_btn')) { echo '</div>'; } ?>
						<?php endif; ?>

						 <?php // Rectangle Buttons 
							if( get_row_layout() == 'highlight_headlines_rectangle_btns' ): ?> 
							<?php if(get_sub_field('highlight_headlines_btn_swipe_rect')) { echo '<div class="grid-10 btn-rect fl'; } ?><?php if(get_sub_field('highlight_headlines_btn_swipe_rect_top_margin')) { echo ' ' . get_sub_field('highlight_headlines_btn_swipe_rect_top_margin') . ''; } ?><?php if(get_sub_field('highlight_headlines_btn_swipe_rect_bot_margin')) { echo ' ' . get_sub_field('highlight_headlines_btn_swipe_rect_bot_margin') . ''; } ?><?php if(get_sub_field('highlight_headlines_btn_swipe_rect')) { echo ' clearfix">'; } ?> 

								<!-- start repeater-list -->
								<?php if( have_rows('highlight_headlines_btn_swipe_rect') ): $pr = 0;
								echo '<div class="mb0 mt0">';
								// loop through the rows of data
								while ( have_rows('highlight_headlines_btn_swipe_rect') ) : the_row(); ?> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect bg-alt mb0'; } ?> <?php if(get_sub_field('hubspot_pop_up_trigger')) { echo '' . get_sub_field('hubspot_pop_up_trigger') . ''; } ?> 
								<?php if(get_sub_field('link')) { ?>  
									<?php if((get_sub_field('alignment')) == 'fl' ) { echo ' fl '; } else { echo ' '; } ?>
									<?php if((get_sub_field('alignment')) == 'mauto' ) { echo ' mauto '; } else { echo ' '; } ?>
									<?php if((get_sub_field('alignment')) == 'fr' ) { echo ' fr mr0 '; } else { echo ' '; } ?>
								<?php } ?><?php if(get_sub_field('button_color') && get_sub_field('link')) { echo ' ' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
								<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
								<div class="transition-rect"></div>
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>
								<?php endwhile; echo '</div>'; endif; ?>
								<!-- end repeater-list -->   

							<?php if(get_sub_field('highlight_headlines_btn_swipe_rect')) { echo '</div>'; } ?>  
						<?php endif; ?>

						<?php endwhile; // end loop through the rows of data
							else :
							// no layouts found
						?>   
				<?php endif; ?><?php wp_reset_query(); ?>
				 <!-- END CONTENT -->  
		
			<?php if((get_field('highlight_header_width')) == true ) { echo '</div> <!-- end width -->'; } ?>
		</div> <!-- end grid-10 wrap -->
		
		<?php if(get_field('highlight_list')): $i = 0; ?>
			<ul class="highlight-list-flex">
			<?php while(has_sub_field('highlight_list')): $i++; ?>
				<li class="bg-common<?php if(get_field('highlight_list_bm')) { echo ' mb0'; } ?><?php if(get_field('highlight_columns')) { echo ' ' . get_field('highlight_columns') . ''; } ?><?php if(get_field('highlight_list_border_color')) { echo ' ' . get_field('highlight_list_border_color') . ''; } ?><?php if(get_field('highlight_list_border_size')) { echo ' ' . get_field('highlight_list_border_size') . ''; } ?>" <?php if(get_sub_field('highlight_photo')) { echo 'style="background-image:url(' . get_sub_field('highlight_photo') . ');"'; } ?>> 

						<?php if(get_sub_field('highlight_photo_background_color_filter')) { echo '<div class="color-overlay-exact ' . get_sub_field('highlight_photo_background_color_filter') . ''; } ?><?php if((get_sub_field('highlight_photo_background_color_filter_opacity')) == true) { echo ' ' . get_sub_field('highlight_photo_background_color_filter_opacity') . ' '; } ?><?php if(get_sub_field('highlight_photo_background_color_filter')) { echo ' clearfix"></div>'; } ?>
					
							<?php if(get_sub_field('highlight_list_background_color')) { echo '<div class="color-overlay-inset br10 ' . get_sub_field('highlight_list_background_color') . ''; } ?><?php if((get_sub_field('highlight_list_background_color') && get_sub_field('highlight_list_background_opacity')) == true) { echo ' ' . get_sub_field('highlight_list_background_opacity') . ' '; } ?><?php if(get_sub_field('highlight_list_background_color')) { echo ' clearfix"></div>'; } ?>
					
					<span class="table-wide">
					<span class="post-content"> 
						<span class="grid-10 pt2 pb1 pr1 pl1 clearfix"> 	 
							
							<!-- START CONTENT -->
							<?php
							// check if the flexible content field has rows of data
							if( have_rows('highlight_highlight_contents') ): ?> 
							<?php 
								 // loop through the rows of data
								while ( have_rows('highlight_highlight_contents') ) : the_row(); ?>
									<?php // Photo 
										if( get_row_layout() == 'highlight_highlight_content_photo' ): ?> 
										<?php if(get_sub_field('photo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('photo_top_margin')) { echo ' ' . get_sub_field('photo_top_margin') . ''; } ?><?php if(get_sub_field('photo_bottom_margin')) { echo ' ' . get_sub_field('photo_bottom_margin') . ''; } ?><?php if(get_sub_field('photo')) { echo ' clearfix">'; } ?> 

											<?php if(get_sub_field('photo')) { ?>
												<?php if(get_sub_field('photo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('photo_width')) { echo ' ' . get_sub_field('photo_width') . ''; } ?><?php if(get_sub_field('photo_alignment')) { echo ' ' . get_sub_field('photo_alignment') . ''; } ?><?php if(get_sub_field('photo')) { echo '">'; } ?>
												<?php $image = get_sub_field('photo'); ?>
												<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="300" height="200"/>
												<?php if(get_sub_field('photo')) { echo '</span>'; } ?>
											<?php } ?>

										<?php if(get_sub_field('photo')) { echo '</div>'; } ?>
									<?php endif; ?>
									 <?php // Label 
										if( get_row_layout() == 'highlight_highlight_content_label' ): ?> 
										<?php if(get_sub_field('label')) { echo '<div class="grid-10 fl overview-label'; } ?><?php if(get_sub_field('label_top_margin')) { echo ' ' . get_sub_field('label_top_margin') . ''; } ?><?php if(get_sub_field('label_bottom_margin')) { echo ' ' . get_sub_field('label_bottom_margin') . ''; } ?><?php if(get_sub_field('label')) { echo ' clearfix">'; } ?>

											<?php if(get_sub_field('label')) { echo '<p class="small mt0 mb0 pt0 pb0'; } ?>
											<?php if(get_sub_field('label')) { ?>
											<?php if((get_sub_field('label_alignment')) == 'tac' ) { echo ' tac '; } else { echo ' '; } ?>
											<?php if((get_sub_field('label_alignment')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
											<?php if((get_sub_field('label_alignment')) == 'tar' ) { echo ' tar '; } else { echo ' '; } ?>
											<?php if(get_sub_field('label_color')) { echo ' ' . get_sub_field('label_color') . ''; } ?>
											<?php if(get_sub_field('label_shadow')) { echo ' ' . get_sub_field('label_shadow') . ''; } ?>
											<?php } ?>
											<?php if(get_sub_field('label')) { echo 'clearfix">' . get_sub_field('label') . '</p>'; } ?>

										<?php if(get_sub_field('label')) { echo '</div>'; } ?>
									<?php endif; ?>  
									<?php // Headline
										if( get_row_layout() == 'highlight_highlight_content_headline' ): ?> 
										<?php if(get_sub_field('headline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('headline_top_margin')) { echo ' ' . get_sub_field('headline_top_margin') . ''; } ?><?php if(get_sub_field('headline_bottom_margin')) { echo ' ' . get_sub_field('headline_bottom_margin') . ''; } ?><?php if(get_sub_field('headline')) { echo ' clearfix">'; } ?> 

											<?php if(get_sub_field('headline')) { echo '<h3 class="post-name mb0 mt0 pb0 pt0'; } ?> 
											<?php if(get_sub_field('headline')) { ?>   
											<?php if((get_sub_field('headline_alignment')) == 'tac' ) { echo ' tac '; } else { echo ' '; } ?>
											<?php if((get_sub_field('headline_alignment')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
											<?php if((get_sub_field('headline_alignment')) == 'tar' ) { echo ' tar '; } else { echo ' '; } ?>
											<?php if(get_sub_field('headline_color')) { echo ' ' . get_sub_field('headline_color') . ''; } ?>
											<?php if(get_sub_field('headline_shadow')) { echo ' ' . get_sub_field('headline_shadow') . ''; } ?>
											<?php } ?>
											<?php if(get_sub_field('headline')) { echo 'clearfix">' . get_sub_field('headline') . '</h3>'; } ?> 

										<?php if(get_sub_field('headline')) { echo '</div>'; } ?>  
									<?php endif; ?>  
									<?php // Subheadline
										if( get_row_layout() == 'highlight_highlight_content_subheadline' ): ?> 
										<?php if(get_sub_field('subheadline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('subheadline_top_margin')) { echo ' ' . get_sub_field('subheadline_top_margin') . ''; } ?><?php if(get_sub_field('subheadline_bottom_margin')) { echo ' ' . get_sub_field('subheadline_bottom_margin') . ''; } ?><?php if(get_sub_field('subheadline')) { echo ' clearfix">'; } ?> 

											<?php if(get_sub_field('subheadline')) { echo '<span class="post-subtext pb0 pt0'; } ?> 
											<?php if(get_sub_field('subheadline')) { ?>   
											<?php if((get_sub_field('subheadline_alignment')) == 'tac' ) { echo ' tac '; } else { echo ' '; } ?>
											<?php if((get_sub_field('subheadline_alignment')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
											<?php if((get_sub_field('subheadline_alignment')) == 'tar' ) { echo ' tar '; } else { echo ' '; } ?>
											<?php if(get_sub_field('subheadline_color')) { echo ' ' . get_sub_field('subheadline_color') . ''; } ?>
											<?php if(get_sub_field('subheadline_shadow')) { echo ' ' . get_sub_field('subheadline_shadow') . ''; } ?>
											<?php } ?>
											<?php if(get_sub_field('subheadline')) { echo 'clearfix"><strong>' . get_sub_field('subheadline') . '</strong></span>'; } ?> 

										<?php if(get_sub_field('subheadline')) { echo '</div>'; } ?>  
									<?php endif; ?>
									 <?php // Description 
										if( get_row_layout() == 'highlight_highlight_content_description' ): ?> 
										<?php if(get_sub_field('description')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('description_top_margin')) { echo ' ' . get_sub_field('description_top_margin') . ''; } ?><?php if(get_sub_field('description_bottom_margin')) { echo ' ' . get_sub_field('description_bottom_margin') . ''; } ?><?php if(get_sub_field('description')) { echo ' clearfix">'; } ?>

											<?php if(get_sub_field('description')) { echo '<div class="desc '; } ?>
											<?php if(get_sub_field('description')) { ?>
											<?php if((get_sub_field('description_alignment')) == 'tac' ) { echo ' tac '; } else { echo ' '; } ?>
											<?php if((get_sub_field('description_alignment')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
											<?php if((get_sub_field('description_alignment')) == 'tar' ) { echo ' tar '; } else { echo ' '; } ?>
											<?php if(get_sub_field('description_color')) { echo ' ' . get_sub_field('description_color') . ''; } ?>
											<?php if(get_sub_field('description_shadow')) { echo ' ' . get_sub_field('description_shadow') . ''; } ?>
											<?php } ?>
											<?php if(get_sub_field('description')) { echo 'clearfix">' . get_sub_field('description') . '</div>'; } ?>

										<?php if(get_sub_field('description')) { echo '</div>'; } ?>  
									<?php endif; ?>
									 <?php // Text Buttons
										if( get_row_layout() == 'highlight_highlight_content_links' ): ?> 
										<?php if(get_sub_field('text_button')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('text_button_top_margin')) { echo ' ' . get_sub_field('text_button_top_margin') . ''; } ?><?php if(get_sub_field('text_button_bottom_margin')) { echo ' ' . get_sub_field('text_button_bottom_margin') . ''; } ?><?php if(get_sub_field('text_button')) { echo ' clearfix">'; } ?> 

											<!-- start repeater-list -->
											<?php if( have_rows('text_button') ): $pr = 0;
											echo '<p class="mt0 mb0 down-arrow-container">';
											// loop through the rows of data
											while ( have_rows('text_button') ) : the_row(); ?> 
												<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="right-link'; } ?> <?php if(get_sub_field('hubspot_pop_up_trigger')) { echo '' . get_sub_field('hubspot_pop_up_trigger') . ''; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('text_shadow') && get_sub_field('link') ) { echo '' . get_sub_field('text_shadow') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
												<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
												<?php if(get_sub_field('link')) { echo '>'; } ?>
												<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
												<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
											<?php endwhile; echo '</p>'; endif; ?> 
											<!-- end repeater-list -->

										<?php if(get_sub_field('text_button')) { echo '</div>'; } ?>
									<?php endif; ?>

									 <?php // Rectangle Buttons 
										if( get_row_layout() == 'highlight_highlight_content_btn' ): ?> 
										<?php if(get_sub_field('rect_button')) { echo '<div class="grid-10 btn-rect fl'; } ?><?php if(get_sub_field('rect_button_top_margin')) { echo ' ' . get_sub_field('rect_button_top_margin') . ''; } ?><?php if(get_sub_field('rect_button_bottom_margin')) { echo ' ' . get_sub_field('rect_button_bottom_margin') . ''; } ?><?php if(get_sub_field('rect_button')) { echo ' clearfix">'; } ?> 

											<!-- start repeater-list -->
											<?php if( have_rows('rect_button') ): $pr = 0;
											echo '<div class="mb0 mt0">';
											// loop through the rows of data
											while ( have_rows('rect_button') ) : the_row(); ?> 
											<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect bg-alt mb0'; } ?> <?php if(get_sub_field('hubspot_pop_up_trigger')) { echo '' . get_sub_field('hubspot_pop_up_trigger') . ''; } ?> 
											<?php if(get_sub_field('link')) { ?>  
												<?php if((get_sub_field('alignment')) == 'fl' ) { echo ' fl '; } else { echo ' '; } ?>
												<?php if((get_sub_field('alignment')) == 'mauto' ) { echo ' mauto '; } else { echo ' '; } ?>
												<?php if((get_sub_field('alignment')) == 'fr' ) { echo ' fr mr0 '; } else { echo ' '; } ?>
											<?php } ?><?php if(get_sub_field('button_color') && get_sub_field('link')) { echo ' ' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
											<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
											<?php if(get_sub_field('link')) { echo '>'; } ?>
											<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
											<div class="transition-rect"></div>
											<?php if(get_sub_field('link')) { echo '</a>'; } ?>
											<?php endwhile; echo '</div>'; endif; ?>
											<!-- end repeater-list -->   

										<?php if(get_sub_field('rect_button')) { echo '</div>'; } ?>  
									<?php endif; ?>

									<?php endwhile; // end loop through the rows of data
										else :
										// no layouts found
									?> 
							<?php endif; ?><?php wp_reset_query(); ?>
							 <!-- END CONTENT --> 
 
						</span>
						</span>
					</span>
					 
 				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?> 

		<style type="text/css"> 
		.highlight-list-flex{display:flex;flex-flow:row wrap;float:left;gap:0%;margin:0px auto !important;padding:0 !important;position:relative;width:100%;max-width:1200px !important;}
		.highlight-list-flex li{border:4px solid #fff;border-radius:20px;box-shadow: 0 2px 10px rgba(0,0,0, 0.3);display:flex;flex-direction:column;flex-wrap:wrap;flex:1 0 auto;flex-grow:1;margin:0 3% 3% 0;overflow:hidden;padding:0;position:relative;width:14.16%;max-width:14.16%;}
		.highlight-list-flex li.six{width:14.16%;max-width:14.16%;}
		.highlight-list-flex li.five{width:17.6%;max-width:17.6%;}
		.highlight-list-flex li.four{width:22.75%;max-width:22.75%;}
		.highlight-list-flex li.three{margin:0 3% 3% 0;width:31.3%;max-width:31.3%;}
		.highlight-list-flex li.two{width:48.5%;max-width:48.5%;}

		.highlight-list-flex li.six:nth-child(6n+6){margin-right:0;}
		.highlight-list-flex li.five:nth-child(5n+5){margin-right:0%;}
		.highlight-list-flex li.five:nth-child(6n+6){margin-right:3%;}
		.highlight-list-flex li.four:nth-child(4n+4){margin-right:0%;}
		.highlight-list-flex li.four:nth-child(5n+5){margin-right:3%;} 
		.highlight-list-flex li.three:nth-child(3n+3){margin-right:0;}
		.highlight-list-flex li.two:nth-child(even){margin-right:0;} 

		.highlight-list-flex li .post-img {background-position:center center;background-repeat:no-repeat;background-size:cover;float:left;display:block;height:250px;margin:0 0 20px;overflow:hidden;padding:0;position:relative;width:100%;-moz-transition:all 0.5s ease;-webkit-transition:all 0.5s ease;-o-transition:all 0.5s ease;-ms-transition:all 0.5s ease;transition:all 0.5s ease;}
 		.highlight-list-flex li .post-img .post-bg {background-position:center center;background-repeat:no-repeat;background-size:cover;bottom:0;display:block;height:250px;left:0;margin:0;padding:0;position:absolute;right:0;top:0;width:100%;-moz-transition:all 3.0s ease;-webkit-transition:all 3.0s ease;-o-transition:all 3.0s ease;-ms-transition:all 3.0s ease;transition:all 3.0s ease;} 
 		.highlight-list-flex li .post-content {display:table-cell;margin:0;padding:0px 10px 5px;position:relative;vertical-align:middle;width:100%;}
		.highlight-list-flex li .post-name {color:#3A357E;display:block;float:left;font-family:'Oswald', sans-serif;font-weight:400;font-size:30px;line-height:90% !important;padding-bottom:10px;padding-top:5px;position:relative;width:100%;}
		
		.highlight-list-flex li .post-subtext {color:#3A357E;display:block;float:left;font-family:'Oswald', Helvetica, sans-serif;font-weight:400;font-size:24px;line-height:100% !important;padding-bottom:10px;padding-top:5px;position:relative;width:100%;}  

		.highlight-list-flex li .small {display:block;float:left;font-family:'Lato', sans-serif;font-size:13px;font-weight:400;letter-spacing:1px;line-height:110%;padding: 0 0 10px;position: relative;text-transform: uppercase;width:100%;}
		.highlight-list-flex li .desc {font-size:17px !important;line-height:110% !important;}
		.highlight-list-flex li .desc p {font-size:17px !important;margin:10px 0 !important;line-height:110% !important;}
		.highlight-list-flex li.four .post-name {font-size:40px;}
		.highlight-list-flex li.six .post-name, .highlight-list-flex li.five .post-name {font-size:38px;}
 		.highlight-list-flex li .position-desc {display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;font-size:18px;line-height:160%;margin:0;position:relative;transition:all .5s ease-in-out;width:100%;} 
		.highlight-list-flex li .position-desc p{color:#333;display:block;font-family:'Lato', sans-serif;font-weight:400;font-size:17px;line-height:160%;margin-bottom:0 !important;position:relative;width:100%;}
		.highlight-list-flex li .post-link {color:#3A357E;display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;font-size:18px;padding-bottom:20px;position:relative;text-align:left;width:100%;}
		.highlight-list-flex li .post-link::after {content: "→";margin-left:5px;}
			
		.on-cs .highlight-list-flex li .post-name {font-size:30px;} 
		.on-cs .highlight-list-flex li.four .post-name{font-size:30px;} 
		.on-cs .highlight-list-flex li.five .post-name,
		.on-cs .highlight-list-flex li.six .post-name{font-size:24px;} 
 		@media screen and (max-width: 1700px) {
			.on-cs .highlight-list-flex li.five,
			.on-cs .highlight-list-flex li.six{margin:0 3% 3% 0;width:48%;max-width:48%;}
			.on-cs .highlight-list-flex li.five:nth-child(even),
			.on-cs .highlight-list-flex li.six:nth-child(even){margin:0 0 3% 0;}
		}
 		@media screen and (max-width: 1600px) { 
			.on-cs .highlight-list-flex li .post-name {font-size:30px;}
			.on-cs .highlight-list-flex li.four .post-name,  
			.on-cs .highlight-list-flex li.five .post-name,
			.on-cs .highlight-list-flex li.six .post-name{font-size:30px;} 
		}
 		@media screen and (max-width: 1300px) {  
			.on-cs .highlight-list-flex li.four{margin:0 3% 3% 0;width:48%;max-width:48%;}
			.on-cs .highlight-list-flex li.four:nth-child(even){margin:0 0 3% 0;}
			 
			.on-cs .highlight-list-flex li.four .post-name,
			.on-cs .highlight-list-flex li.five .post-name,
			.on-cs .highlight-list-flex li.six .post-name{font-size:36px;}
		}  
 		@media screen and (max-width: 1200px) {
			.highlight-list-flex li.six{width:17.6%;max-width:17.6%;} /* 5 */
			.highlight-list-flex li.six:nth-child(6n+6){margin-right:3%;}
			.highlight-list-flex li.six:nth-child(5n+5){margin-right:0;}
			
			.on-cs .highlight-list-flex li .post-name {font-size:30px;}
			.on-cs .highlight-list-flex li.three{margin:0 0 3% 0;width:100%;max-width:100%;}
			.on-cs .highlight-list-flex li.three .post-name {font-size:36px;}
		}
 		@media screen and (max-width: 1100px) {   
			.highlight-list-flex li.six {width:22.75%;max-width:22.75%;} /* 4 */
			.highlight-list-flex li.six:nth-child(5n+5){margin-right:3%;}
			.highlight-list-flex li.six:nth-child(4n+4){margin-right:0;}
			
			.highlight-list-flex li.five{width:22.75%;max-width:22.75%;} /* 4 */
			.highlight-list-flex li.five:nth-child(5n+5){margin-right:3%;}
			.highlight-list-flex li.five:nth-child(4n+4){margin-right:0;} 
		} 
 		@media screen and (max-width: 1000px) { 
 		} 
 		@media screen and (max-width: 767px) { 
			.highlight-list-flex li{margin-bottom:5% !important;}
			.highlight-list-flex li.six, 
			.highlight-list-flex li.five,
			.highlight-list-flex li.four, 
			.highlight-list-flex li.three, 
			.highlight-list-flex li.two {width:47.5%;max-width:47.5%;} /* 2*/ 
			
			.highlight-list-flex li,
			.highlight-list-flex li.six:nth-child(3n+3),
			.highlight-list-flex li.five:nth-child(3n+3),
			.highlight-list-flex li.four:nth-child(odd),
			.highlight-list-flex li.three:nth-child(3n+3),
			.highlight-list-flex li.two:nth-child(odd){margin-right:5% !important;}
			
			.highlight-list-flex li.six:nth-child(2n+2),
			.highlight-list-flex li.five:nth-child(2n+2),
			.highlight-list-flex li.four:nth-child(even),
			.highlight-list-flex li.three:nth-child(even), 
			.highlight-list-flex li.two:nth-child(even){margin-right:0% !important;} 
			
			.on-cs .highlight-list-flex li .post-name,
			.on-cs .highlight-list-flex li.two .post-name,
			.on-cs .highlight-list-flex li.three .post-name,
			.on-cs .highlight-list-flex li.four .post-name,
			.on-cs .highlight-list-flex li.five .post-name,
			.on-cs .highlight-list-flex li.six .post-name{font-size:36px;}
			
			.on-cs .highlight-list-flex li.six, 
			.on-cs .highlight-list-flex li.five,
			.on-cs .highlight-list-flex li.four, 
			.on-cs .highlight-list-flex li.three, 
			.on-cs .highlight-list-flex li.two{margin:0 0 3% 0;width:100%;max-width:100%;}
			
			.on-cs .highlight-list-flex li.six:nth-child(even), 
			.on-cs .highlight-list-flex li.five:nth-child(even),
			.on-cs .highlight-list-flex li.four:nth-child(even), 
			.on-cs .highlight-list-flex li.three:nth-child(even), 
			.on-cs .highlight-list-flex li.two:nth-child(even){margin:0 0 3% 0;}
		} 
		@media screen and (max-width: 500px) { 
			.highlight-list-flex li {margin-bottom:10% !important;}
			.highlight-list-flex li.six,
			.highlight-list-flex li.five,
			.highlight-list-flex li.four,
			.highlight-list-flex li.three, 
			.highlight-list-flex li.two{width:100%;max-width:100%;}  
			.highlight-list-flex li.six:nth-child(3n+3),
			.highlight-list-flex li.six,
			.highlight-list-flex li.five:nth-child(3n+3),
			.highlight-list-flex li.five:nth-child(odd),
			.highlight-list-flex li.five:nth-child(even),			
			.highlight-list-flex li.four:nth-child(odd),
			.highlight-list-flex li.four:nth-child(even),
			.highlight-list-flex li.three:nth-child(3n+3),
			.highlight-list-flex li.three:nth-child(odd),
			.highlight-list-flex li.three:nth-child(even),
			.highlight-list-flex li.two:nth-child(odd),
			.highlight-list-flex li.two:nth-child(even){margin-right:0% !important;} 
		}
		</style> 
	</div>   
</section>