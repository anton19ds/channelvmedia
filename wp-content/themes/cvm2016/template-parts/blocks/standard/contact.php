<?php
/**
 * Contact Block Template.
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

<section <?php if((get_field('contact_section_id')) == true) { echo'id="' . get_field('contact_section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl cta-post-banner <?php if(get_field('contact_background_color')) { echo '' . get_field('contact_background_color') . ''; } ?><?php if(get_field('contact_top_margin')) { echo ' ' . get_field('contact_top_margin') . ''; } ?><?php if(get_field('contact_bottom_margin')) { echo ' ' . get_field('contact_bottom_margin') . ''; } ?> <?php if(get_field('contact_top_padding')) { echo ' ' . get_field('contact_top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('contact_bottom_padding')) { echo ' ' . get_field('contact_bottom_padding') . ''; } else {echo' pb0';} ?> clearfix"> 
	 
	<?php if(get_field('contact_background_photo')) { echo '<div class="color-overlay-exact bg-common clearfix'; } ?>
		<?php if((get_field('contact_background_photo_opacity')) == true) { echo ' ' . get_field('contact_background_photo_opacity') . ''; } ?>
		<?php if(get_field('contact_background_photo')) { echo '" style="'; } ?>
		<?php if(get_field('contact_background_photo')) { echo 'background-image:url(' . get_field('contact_background_photo') . ');'; } ?><?php if((get_field('contact_background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?>
	<?php if(get_field('contact_background_photo')) { echo '"></div>'; } ?> 
	
	<?php if(get_field('contact_background_color_filter')) { echo '<div class="color-overlay-exact ' . get_field('contact_background_color_filter') . ''; } ?><?php if((get_field('contact_background_color_filter_opacity')) == true) { echo ' ' . get_field('contact_background_color_filter_opacity') . ' '; } ?><?php if(get_field('contact_background_color_filter')) { echo ' clearfix"></div>'; } ?>
	
	<div class="grid-page mauto">
		<!-- start column 1 -->
		<div class="<?php if(get_field('contact_content_width')) { echo '' . get_field('contact_content_width') . ' '; } else { echo'grid-5 ';} ?><?php if(get_field('contact_content_position')) { echo '' . get_field('contact_content_position') . ' '; } else { echo'fl ';} ?><?php if(get_field('contact_content_top_padding')) { echo ' ' . get_field('contact_content_top_padding') . ''; } ?><?php if(get_field('contact_content_bottom_padding')) { echo ' ' . get_field('contact_content_bottom_padding') . ''; } ?> clearfix"> 
					
			<!-- START CONTENT REPEATER LIST -->  
			<?php if(get_field('contact_content_columns')): $i = 0; ?>
			<ul class="contact-list-flex">
			<?php while(has_sub_field('contact_content_columns')): $i++; ?>
				<li <?php if(get_field('contact_columns')) { echo 'class="' . get_field('contact_columns') . '"'; } ?>>
					<div class="table-wide">

						<!-- START FLEXIBLE CONTENT -->  
						<?php // check if the flexible content field has rows of data
						if( have_rows('contact_content') ): $i = 0; ?> 
						<?php // loop through the rows of data
							while ( have_rows('contact_content') ) : the_row(); $i++; ?>  

								<?php // Logo 
									if( get_row_layout() == 'contact_content_logo' ): ?> 
									<?php if(get_sub_field('logo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('logo_top_margin')) { echo ' ' . get_sub_field('logo_top_margin') . ''; } ?><?php if(get_sub_field('logo_bottom_margin')) { echo ' ' . get_sub_field('logo_bottom_margin') . ''; } ?><?php if(get_sub_field('logo')) { echo ' clearfix">'; } ?> 

										<?php if(get_sub_field('logo')) { ?>
											<?php if(get_sub_field('logo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('logo_width')) { echo ' ' . get_sub_field('logo_width') . ''; } ?><?php if(get_sub_field('logo_align')) { echo ' ' . get_sub_field('logo_align') . ''; } ?><?php if(get_sub_field('logo')) { echo '">'; } ?>
											<?php $image = get_sub_field('logo'); ?>
											<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											<?php if(get_sub_field('logo')) { echo '</span>'; } ?>
										<?php } ?>

									<?php if(get_sub_field('logo')) { echo '</div>'; } ?> 
								<?php endif; ?> 
								<?php // Photo 
									if( get_row_layout() == 'contact_content_photo' ): ?> 
									<?php if(get_sub_field('photo')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('photo_top_margin')) { echo ' ' . get_sub_field('photo_top_margin') . ''; } ?><?php if(get_sub_field('photo_bottom_margin')) { echo ' ' . get_sub_field('photo_bottom_margin') . ''; } ?><?php if(get_sub_field('photo')) { echo ' clearfix">'; } ?> 

										<?php if(get_sub_field('photo')) { ?>
											<?php if(get_sub_field('photo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('photo_width')) { echo ' ' . get_sub_field('photo_width') . ''; } ?><?php if(get_sub_field('photo_align')) { echo ' ' . get_sub_field('photo_align') . ''; } ?><?php if(get_sub_field('photo')) { echo '">'; } ?>
											<?php $image = get_sub_field('photo'); ?>
											<img class="responsive-img<?php if((get_sub_field('photo_add_shadow')) == true) { echo ' ' . get_sub_field('photo_add_shadow') . ''; } ?><?php if((get_sub_field('photo_underline')) == true) { echo ' bb-lt-purple'; } ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="300" height="200"/>

											<?php if(get_sub_field('photo_color_filter')) { echo '<div class="color-overlay-exact ' . get_sub_field('photo_color_filter') . ''; } ?><?php if((get_sub_field('photo_color_filter_opacity')) == true) { echo ' ' . get_sub_field('photo_color_filter_opacity') . ' '; } ?><?php if(get_sub_field('photo_color_filter')) { echo ' clearfix"></div>'; } ?>

											<?php if(get_sub_field('photo')) { echo '</span>'; } ?>
										<?php } ?>

										<?php if(get_sub_field('photo') && get_sub_field('photo_caption')) { echo '<div class="grid-10 clearfix">'; } ?>  
											<?php if(get_sub_field('photo_caption')) { echo '<div class="cs-caption'; } ?><?php if(get_sub_field('photo_caption') && get_sub_field('photo_caption_color')) { echo ' ' . get_sub_field('photo_caption_color') . ''; } ?><?php if(get_sub_field('photo_caption')) { echo '">' . get_sub_field('photo_caption') . '</div>'; } ?>
										<?php if(get_sub_field('photo') && get_sub_field('photo_caption')) { echo '</div>'; } ?>

									<?php if(get_sub_field('photo')) { echo '</div>'; } ?> 
								<?php endif; ?> 
								<?php // Label
									if( get_row_layout() == 'contact_content_label' ): ?> 
									<?php if(get_sub_field('label')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('label_top_margin')) { echo ' ' . get_sub_field('label_top_margin') . ''; } ?><?php if(get_sub_field('label_bottom_margin')) { echo ' ' . get_sub_field('label_bottom_margin') . ''; } ?><?php if(get_sub_field('label')) { echo ' clearfix">'; } ?>
						
										<?php if(get_sub_field('label')) { echo '<p class="sp-small contact-label mt0 mb10'; } ?>										
										<?php if(get_sub_field('label')) { ?>
											<?php if((get_sub_field('label_alignment')) == 'tac' ) { echo ' mauto '; } else { echo ' '; } ?>
											<?php if((get_sub_field('label_alignment')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
											<?php if((get_sub_field('label_alignment')) == 'tar' ) { echo 'tar '; } else { echo ' '; } ?> 
										<?php } ?>
										<?php if(get_sub_field('label_color')) { echo ' ' . get_sub_field('label_color') . ''; } ?>
										<?php if(get_sub_field('label_shadow')) { echo ' ' . get_sub_field('label_shadow') . ''; } ?>
										<?php if(get_sub_field('label')) { echo '">' . get_sub_field('label') . '</p>'; } ?> 

									<?php if(get_sub_field('label')) { echo '</div>'; } ?>  
								<?php endif; ?>  
								<?php // Headline 
									if( get_row_layout() == 'contact_content_headline' ): ?> 
									<?php if(get_sub_field('headline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('headline_top_margin')) { echo ' ' . get_sub_field('headline_top_margin') . ''; } ?><?php if(get_sub_field('headline_bottom_margin')) { echo ' ' . get_sub_field('headline_bottom_margin') . ''; } ?><?php if(get_sub_field('headline')) { echo ' clearfix">'; } ?>
										<?php if(get_sub_field('h_tag')) { echo '<h' . get_sub_field('h_tag') . ''; } ?><?php if(get_sub_field('headline')) { echo ' class="contact-head mb0 mt0'; } ?><?php if(get_sub_field('headline_color')) { echo ' ' . get_sub_field('headline_color') . ''; } ?><?php if(get_sub_field('headline_shadow')) { echo ' ' . get_sub_field('headline_shadow') . ''; } ?><?php if(get_sub_field('headline_align') && get_sub_field('headline')) { echo ' ' . get_sub_field('headline_align') . ''; } ?><?php if(get_sub_field('h_tag')) { echo '">'; } ?><?php if(get_sub_field('headline')) { echo '' . get_sub_field('headline') . ''; } ?><?php if(get_sub_field('h_tag')) { echo '</h' . get_sub_field('h_tag') . '>'; } ?>
									<?php if(get_sub_field('headline')) { echo '</div>'; } ?> 
								<?php endif; ?>
								<?php // Subeadline 
									if( get_row_layout() == 'contact_content_subheadline' ): ?> 
									<?php if(get_sub_field('subheadline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('subheadline_top_margin')) { echo ' ' . get_sub_field('subheadline_top_margin') . ''; } ?><?php if(get_sub_field('subheadline_bottom_margin')) { echo ' ' . get_sub_field('subheadline_bottom_margin') . ''; } ?><?php if(get_sub_field('subheadline')) { echo ' clearfix">'; } ?> 
										<?php if(get_sub_field('subheadline')) { echo '
											<span class="contact-sub mt0 mb0'; } ?><?php if(get_sub_field('subheadline_color')) { echo ' ' . get_sub_field('subheadline_color') . ''; } ?><?php if(get_sub_field('subheadline_shadow')) { echo ' ' . get_sub_field('subheadline_shadow') . ''; } ?><?php if(get_sub_field('subheadline_align') && get_sub_field('subheadline')) { echo ' ' . get_sub_field('subheadline_align') . ''; } ?><?php if(get_sub_field('subheadline')) { echo '">' . get_sub_field('subheadline') . '</span>'; } ?> 
									<?php if(get_sub_field('subheadline')) { echo '</div>'; } ?> 
								<?php endif; ?> 
								 <?php // Text 
									if( get_row_layout() == 'contact_content_text' ): ?> 
									<?php if(get_sub_field('description')) { echo '<div class="grid-10 fl contact-description'; } ?><?php if(get_sub_field('description_top_margin')) { echo ' ' . get_sub_field('description_top_margin') . ''; } ?><?php if(get_sub_field('description_bottom_margin')) { echo ' ' . get_sub_field('description_bottom_margin') . ''; } ?><?php if(get_sub_field('description_color')) { echo ' ' . get_sub_field('description_color') . ''; } ?><?php if(get_sub_field('description_shadow')) { echo ' ' . get_sub_field('description_shadow') . ''; } ?><?php if(get_sub_field('description')) { echo ' clearfix">'; } ?>
										<?php if(get_sub_field('description')) { echo '' . get_sub_field('description') . ''; } ?> 
									<?php if(get_sub_field('description')) { echo '</div>'; } ?>  
								<?php endif; ?> 
								 <?php // Buttons 
									if( get_row_layout() == 'contact_buttons_text_links' ): ?> 
									<?php if(get_sub_field('buttons')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('buttons_top_margin')) { echo ' ' . get_sub_field('buttons_top_margin') . ''; } ?><?php if(get_sub_field('buttons_bottom_margin')) { echo ' ' . get_sub_field('buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('buttons')) { echo ' clearfix">'; } ?> 

										<!-- start repeater-list --> 
										<?php if( have_rows('buttons') ): $pr = 0;
										echo '<p class="mt0 mb0 down-arrow-container">';
										// loop through the rows of data
										while ( have_rows('buttons') ) : the_row(); ?> 
											<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="right-link'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('text_shadow') && get_sub_field('link') ) { echo '' . get_sub_field('text_shadow') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
											<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
											<?php if(get_sub_field('link')) { echo '>'; } ?>
											<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
											<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
										<?php endwhile; echo '</p>'; endif; ?> 
										<!-- end repeater-list --> 

									<?php if(get_sub_field('buttons')) { echo '</div>'; } ?>  
								<?php endif; ?>
								 <?php // Rectangle Buttons 
									if( get_row_layout() == 'contact_rectangle_buttons' ): ?> 
									<?php if(get_sub_field('button_swipe_rect')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('rect_buttons_top_margin')) { echo ' ' . get_sub_field('rect_buttons_top_margin') . ''; } ?><?php if(get_sub_field('rect_buttons_bottom_margin')) { echo ' ' . get_sub_field('rect_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('button_swipe_rect')) { echo ' clearfix">'; } ?> 

										<!-- start repeater-list -->
										<?php if( have_rows('button_swipe_rect') ): $pr = 0;
										echo '<div class="mb0 mt0">';
										// loop through the rows of data
										while ( have_rows('button_swipe_rect') ) : the_row(); ?> 
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
								 <?php // Text Link 
									if( get_row_layout() == 'contact_text_link' ): ?>
									<?php if((get_sub_field('link') || get_sub_field('text')) == true ) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('top_margin')) { echo ' ' . get_sub_field('top_margin') . ''; } ?><?php if(get_sub_field('bottom_margin')) { echo ' ' . get_sub_field('bottom_margin') . ''; } ?><?php if((get_sub_field('link') && get_sub_field('text')) == true ) { echo ' clearfix">'; } ?> 

										<?php if(get_sub_field('link')) { echo '<a class="'; } ?> 
										<?php if(get_sub_field('align')) { ?>
											<?php if((get_sub_field('align')) == 'tac' ) { echo 'mauto'; } else { echo ' '; } ?>
											<?php if((get_sub_field('align')) == 'tal' ) { echo 'fl'; } else { echo ' '; } ?>
											<?php if((get_sub_field('align')) == 'tar' ) { echo 'fr'; } else { echo ' '; } ?> 
										<?php } ?>
										<?php if(get_sub_field('link')) { echo '" href="' . get_sub_field('link') . '" '; } ?><?php if((get_sub_field('link') && get_sub_field('target_link')) == true) { echo 'target="_blank"'; } ?><?php if(get_sub_field('link')) { echo '>'; } ?><?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?><?php if(get_sub_field('link')) { echo '</a>'; } ?>

									<?php if((get_sub_field('link') || get_sub_field('text')) == true ) { echo '</div>'; } ?>  
								<?php endif; ?>
								 <?php // Email Link 
									if( get_row_layout() == 'contact_email_link' ): ?> 
									<?php if(get_sub_field('email')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('top_margin')) { echo ' ' . get_sub_field('top_margin') . ''; } ?><?php if(get_sub_field('bottom_margin')) { echo ' ' . get_sub_field('bottom_margin') . ''; } ?><?php if(get_sub_field('email')) { echo ' clearfix">'; } ?> 

										<?php if(get_sub_field('email')) { echo '<a class="'; } ?> 
										<?php if(get_sub_field('align')) { ?>
											<?php if((get_sub_field('align')) == 'tac' ) { echo 'mauto'; } else { echo ' '; } ?>
											<?php if((get_sub_field('align')) == 'tal' ) { echo 'fl'; } else { echo ' '; } ?>
											<?php if((get_sub_field('align')) == 'tar' ) { echo 'fr'; } else { echo ' '; } ?> 
										<?php } ?>
										<?php if(get_sub_field('email')) { echo '" href="'; } ?>
										<?php if(get_sub_field('email')) { echo esc_url( 'mailto:' . antispambot( get_sub_field('email') ) ); } ?><?php if(get_sub_field('email') && get_sub_field('subject')) { echo '?subject=' . get_sub_field('subject') . ''; } ?><?php $btn_subject = get_sub_field('subject'); ?><?php if(empty($btn_subject) && get_sub_field('email')) { echo '?'; } ?><?php if(get_sub_field('email') && get_sub_field('body')) { echo '&body=' . get_sub_field('body') . ''; } ?><?php if(get_sub_field('email')) { echo '" class="fl'; } ?><?php if(get_sub_field('email') && get_sub_field('color')) { echo ' ' . get_sub_field('color') . ''; } ?><?php if(get_sub_field('email')) { echo '"'; } ?><?php if(get_sub_field('email')) { echo '>' . get_sub_field('email') . '</a>'; } ?> 

									<?php if(get_sub_field('email')) { echo '</div>'; } ?>  
								<?php endif; ?>
								 <?php // Phone Number Link 
									if( get_row_layout() == 'contact_phone_link' ): ?> 
									<?php if((get_sub_field('phone_area_code') || get_sub_field('phone_three') || get_sub_field('phone_four')) == true) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('top_margin')) { echo ' ' . get_sub_field('top_margin') . ''; } ?><?php if(get_sub_field('bottom_margin')) { echo ' ' . get_sub_field('bottom_margin') . ''; } ?><?php if((get_sub_field('phone_area_code') || get_sub_field('phone_three') || get_sub_field('phone_four')) == true) { echo ' clearfix">'; } ?>

										<?php if(get_sub_field('phone_area_code') && get_sub_field('phone_three') && get_sub_field('phone_four')) { echo '<a class="'; } ?> 
										<?php if(get_sub_field('align')) { ?>
											<?php if((get_sub_field('align')) == 'tac' ) { echo 'mauto'; } else { echo ' '; } ?>
											<?php if((get_sub_field('align')) == 'tal' ) { echo 'fl'; } else { echo ' '; } ?>
											<?php if((get_sub_field('align')) == 'tar' ) { echo 'fr'; } else { echo ' '; } ?> 
										<?php } ?>
										<?php if(get_sub_field('phone_area_code') && get_sub_field('phone_three') && get_sub_field('phone_four')) { echo '" href="tel:+1'; } ?><?php if(get_sub_field('phone_area_code')) { echo '' . get_sub_field('phone_area_code') . ''; } ?><?php if(get_sub_field('phone_three')) { echo '' . get_sub_field('phone_three') . ''; } ?><?php if(get_sub_field('phone_four')) { echo '' . get_sub_field('phone_four') . ''; } ?><?php if(get_sub_field('phone_area_code') && get_sub_field('phone_three') && get_sub_field('phone_four')) { echo '">'; } ?>	 
										<?php if(get_sub_field('phone_area_code')) { echo '' . get_sub_field('phone_area_code') . '.'; } ?><?php if(get_sub_field('phone_three')) { echo '' . get_sub_field('phone_three') . '.'; } ?><?php if(get_sub_field('phone_four')) { echo '' . get_sub_field('phone_four') . ''; } ?><?php if(get_sub_field('phone_area_code') && get_sub_field('phone_three') && get_sub_field('phone_four')) { echo '</a>'; } ?>	 

									<?php if((get_sub_field('phone_area_code') || get_sub_field('phone_three') || get_sub_field('phone_four')) == true) { echo '</div>'; } ?>  
								<?php endif; ?>
								 <?php // Social Links
									if( get_row_layout() == 'contact_social_link' ): ?>

									<div class="grid-10 fl<?php if(get_sub_field('top_margin')) { echo ' ' . get_sub_field('top_margin') . ''; } ?><?php if(get_sub_field('bottom_margin')) { echo ' ' . get_sub_field('bottom_margin') . ''; } ?> clearfix"> 
										<!-- Repeater Field -->
										<?php if(get_sub_field('social_link')): $i = 0; ?>
										<ul class="social-bar-small
										<?php if(get_sub_field('align')) { ?>
											<?php if((get_sub_field('align')) == 'tac' ) { echo 'mauto '; } else { echo ' '; } ?>
											<?php if((get_sub_field('align')) == 'tal' ) { echo 'fl '; } else { echo ' '; } ?>
											<?php if((get_sub_field('align')) == 'tar' ) { echo 'fr '; } else { echo ' '; } ?> 
										<?php } ?>cb">
										<?php while(has_sub_field('social_link')): $i++; ?>
											<?php $class = "odd"; if( $i % 2 == 0 ){ $class = "even"; } ?>
											<?php $classf = "first"; if( $i < 2 == 0 ){ $classf = ""; } ?>
											<li class="<?php echo $class; ?> <?php echo $classf; ?>">  
												<?php if((get_sub_field('outlet') || get_sub_field('link')) == true) { echo '<a target="_blank" href="'; } ?>
												<?php if(get_sub_field('link')) { echo '' . get_sub_field('link') . ''; } ?> 
												<?php if((get_sub_field('outlet') || get_sub_field('link')) == true) { echo '"'; } ?> 
												<?php if(get_sub_field('link')) { echo 'class="' . get_sub_field('outlet') . '"'; } ?> 
												<?php if((get_sub_field('outlet') || get_sub_field('link')) == true) { echo '>'; } ?> 
												<?php if((get_sub_field('outlet') || get_sub_field('link')) == true) { echo '</a>'; } ?> 
											</li>
										<?php endwhile; ?>
										</ul>
										<?php endif; ?> 
										<!-- End Repeater Field -->
									</div>						
								<?php endif; ?>

								<?php endwhile; // end loop through the rows of data
									else :
									// no layouts found
								?> 
						<?php endif; ?><?php wp_reset_query(); ?> <!-- END FLEXIBLE CONTENT -->
					</div> <!-- end table div -->
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?> <!-- END CONTENT REPEATER LIST -->

		</div><!-- close column 1 --> 
	</div>
	
	<style type="text/css">
	.contact-list-flex{display:flex;flex-flow:row wrap;gap:0%;margin:0px auto 20px !important;padding:0 !important;position:relative;width:100%;max-width:1200px !important;}
	.contact-list-flex li{display:flex;flex:1 0 auto;flex-grow:1;margin:0 3% 3% 0;padding:0;position:relative;width:14.16%;max-width:14.16%;}
	.contact-list-flex li.six{width:14.16%;max-width:14.16%;}
	.contact-list-flex li.five{width:17.6%;max-width:17.6%;}
	.contact-list-flex li.four{width:22.75%;max-width:22.75%;}
	.contact-list-flex li.three{width:31.3%;max-width:31.3%;}
	.contact-list-flex li.two{width:48.5%;max-width:48.5%;}

	.contact-list-flex li.six:nth-child(6n+6){margin-right:0;}

	.contact-list-flex li.five:nth-child(5n+5){margin-right:0%;}
	.contact-list-flex li.five:nth-child(6n+6){margin-right:3%;}

	.contact-list-flex li.four:nth-child(4n+4){margin-right:0%;}
	.contact-list-flex li.four:nth-child(5n+5){margin-right:3%;} 

	.contact-list-flex li.three:nth-child(3n+3){margin-right:0;}

	.contact-list-flex li.two:nth-child(even){margin-right:0;}
  
	.contact-head {font-family:'Oswald', sans-serif !important;font-size:20px;font-weight:400;line-height: 120% !important;margin:0;padding:0;position:relative;width:100%;}
	.contact-sub {font-family:'Oswald', sans-serif !important;font-size:16px;font-weight:400;line-height: 120% !important;margin:0;padding:0;position:relative;width:100%;}
	.contact-description p {font-size:16px;margin:0 0 5px !important;}

	.contact-list-flex li .social-bar-small {display:table !important;width:auto !important;}
	.contact-list-flex li .social-bar-small li {display:inline-block !important;position:relative !important;width:30px !important;max-width:30px !important;}
		
	@media screen and (max-width: 1200px) { 
		.contact-list-flex li.six {width:17.6%;max-width:17.6%;} /* 5 */
		.contact-list-flex li.six:nth-child(6n+6){margin-right:3%;}
		.contact-list-flex li.six:nth-child(5n+5){margin-right:0;} 
	}
	@media screen and (max-width: 1100px) { 
		.contact-list-flex li.six {width:22.75%;max-width:22.75%;} /* 4 */
		.contact-list-flex li.six:nth-child(5n+5){margin-right:3%;}
		.contact-list-flex li.six:nth-child(4n+4){margin-right:0;}

		.contact-list-flex li.five{width:22.75%;max-width:22.75%;} /* 4 */
		.contact-list-flex li.five:nth-child(5n+5){margin-right:3%;}
		.contact-list-flex li.five:nth-child(4n+4){margin-right:0;} 
	}
	@media screen and (max-width: 960px) { 
		.contact-list-flex li.six {width:31.3%;max-width:31.3%;} /* 3 */
		.contact-list-flex li.six:nth-child(4n+4){margin-right:3%;}
		.contact-list-flex li.six:nth-child(3n+3){margin-right:0;} 

		.contact-list-flex li.five{width:31.3%;max-width:31.3%;} /* 3 */ 
		.contact-list-flex li.five:nth-child(4n+4){margin-right:3%;}
		.contact-list-flex li.five:nth-child(3n+3){margin-right:0;}
		
		.contact-list-flex li.four, .contact-list-flex li.four a, .contact-list-flex li.four .contact-description p {font-size:14px;}  
	} 
	@media screen and (max-width: 767px) {
		.contact-list-flex li.six,
		.contact-list-flex li.five,
		.contact-list-flex li.four,
		.contact-list-flex li.three {width:48.5%;max-width:48.5%;} /* 2*/ 
		.contact-list-flex li.six:nth-child(3n+3){margin-right:3%;}
		.contact-list-flex li.six:nth-child(2n+2){margin-right:0;}

		.contact-list-flex li.five:nth-child(3n+3){margin-right:3%;}
		.contact-list-flex li.five:nth-child(2n+2){margin-right:0;}

		.contact-list-flex li.four:nth-child(3n+3){margin-right:3%;}
		.contact-list-flex li.four:nth-child(2n+2){margin-right:0%;}
		.contact-list-flex li.four, .contact-list-flex li.four a, .contact-list-flex li.four .contact-description p  {font-size:16px;} 

		.contact-list-flex li.three:nth-child(3n+3){margin-right:3%;}
		.contact-list-flex li.three:nth-child(even){margin-right:0;}
	}
	@media screen and (max-width: 400px) {  
	} 
	</style> 
</section> 