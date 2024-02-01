<?php
/**
 * Case Study Color Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.ds
$id = 'block-' . $block['id'];
if( !empty($block['anchor']) ) {
   $id = $block['anchor'];
}
// Load values and assign defaults.
$section_id = get_field('section_id') ?: 'Section ID'; 
$top_margin = get_field('top_margin') ?: 'Top Margin'; 
$bottom_margin = get_field('bottom_margin') ?: 'Bottom Margin';
$top_padding = get_field('top_padding') ?: 'Top Padding'; 
$bottom_padding = get_field('bottom_padding') ?: 'Bottom Padding';
$background_color = get_field('background_color') ?: 'Section Background Color'; 
$quote_one_quote = get_field('quote') ?: 'Quote';
$quote_one_logo_width = get_field('quote_logo_width') ?: 'Logo Width';
$quote_one_logo = get_field('quote_logo') ?: 'Logo'; 
$quote_one_first_last_name = get_field('quote_first_last_name') ?: 'First and Last Name';
$quote_one_job_title = get_field('quote_job_title') ?: 'Job Title';
$quote_one_company = get_field('quote_company') ?: 'Company';
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl bg-common <?php if(get_field('background_color')) { echo '' . get_field('background_color') . ''; } ?> <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else { echo' pt5'; } ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else { echo' pb0'; } ?> fl clearfix">
	
	<?php if(get_field('background_color_filter')) { echo '<div class="color-overlay ' . get_field('background_color_filter') . ''; } ?><?php if((get_field('background_color_filter_opacity')) == true) { echo ' ' . get_field('background_color_filter_opacity') . ' '; } ?><?php if(get_field('background_color_filter')) { echo ' clearfix"></div>'; } ?>

	<div class="grid-10 fl clearfix">
		<?php if(get_field('cs_cb_headline') || get_field('cs_cb_subheadline') || get_field('cs_cb_section_label')) { echo '<div class="grid-10 fl clearfix"><div class="grid-page clearfix">'; } ?>
 
			<?php if((get_field('header_width') || get_field('header_alignment') || get_field('header_text_align')) == true ) { echo '<div class="' . get_field('header_width') . ''; } ?><?php if((get_field('header_alignment')) == true ) { echo ' ' . get_field('header_alignment') . ''; } ?><?php if((get_field('header_text_align')) == true ) { echo ' ' . get_field('header_text_align') . ''; } ?><?php if((get_field('header_width') || get_field('header_alignment') || get_field('header_text_align')) == true ) { echo ' mb30 clearfix">'; } ?>
			<?php if(get_field('cs_cb_section_label')) { echo '<p class="sp-small mt0 mb20'; } ?> 
			<?php if(get_field('cs_cb_section_label')) { ?>   
			<?php if((get_field('header_text_align')) == 'tac' ) { echo ' mauto pl1 '; } else { echo ' '; } ?>
			<?php if((get_field('header_text_align')) == 'tal' ) { echo ' fl '; } else { echo ' '; } ?>
			<?php if((get_field('header_text_align')) == 'tar' ) { echo 'tar '; } else { echo ' '; } ?>
			<?php if(get_field('cs_cb_section_label_text_color')) { echo ' ' . get_field('cs_cb_section_label_text_color') . ''; } ?>
			<?php } ?>
			<?php if(get_field('cs_cb_section_label')) { echo 'clearix">' . get_field('cs_cb_section_label') . '</p>'; } ?>   
			<?php if(get_field('cs_cb_headline')) { echo '<h2 class="block-headline_alt mt0 mb10 heavy ' . get_field('cs_cb_headline_text_color') . ' clearix">' . get_field('cs_cb_headline') . '</h2> '; } ?> 
			<?php if(get_field('cs_cb_subheadline')) { echo '<p class="block-subheadline pb0 pt0 mb0 mt0 ' . get_field('cs_cb_subheadline_text_color') . ' clearix">' . get_field('cs_cb_subheadline') . '</p> '; } ?>

			<?php if((get_field('header_width') || get_field('header_alignment') || get_field('header_text_align')) == true ) { echo '</div>'; } ?> 
		
		<?php if(get_field('cs_cb_headline') || get_field('cs_cb_subheadline') || get_field('cs_cb_section_label')) { echo '</div></div>'; } ?>

		<?php if(get_field('cs_cb_list')): $countp = 0; ?>
		<ul class="cscb-list fl clearfix">
		<?php while(has_sub_field('cs_cb_list')): $countp++; ?>
			<li class="bg-null-<?php echo $countp ?> cscb-rm<?php echo $countp ?> clearfix">
				<div class="cscb-left clearfix"> 		
				<!-- start conditional -->
				<?php if(get_sub_field('video_url')) { ?> 
						<div class="cscb-left-inner <?php if((get_sub_field('quote')) == true) { echo 'cscb-img-rm'; } ?> clearfix">  
							<div class="wp-block-cover overflow-hidden alignfull is-light pt0 pb0 pr0 pl0">
								<?php if((get_sub_field('hide_video_overlay')) == true) { echo ''; } else { echo '<span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span>';} ?>  

								<?php if(get_sub_field('video_url')) { echo '<video class="wp-block-cover__video-background intrinsic-ignore" style="height:100% !important;" autoplay="" muted="" loop="" playsinline="" src="' . get_sub_field('video_url') . '" data-object-fit="cover"></video>'; } ?>  
							</div>
						</div> 
				<?php  } else { ?>
						<style type="text/css">
						<?php if(get_sub_field('photo_webp')) { ?>
								.webp <?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } ?> .cscb-left-inner.bg-image<?php echo $countp ?> {
									background-image: url('<?php if(get_sub_field('photo_webp')) { echo '' . get_sub_field('photo_webp') . ''; } ?>');
								}
								.wp-toolbar <?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } ?> .cscb-left-inner.bg-image<?php echo $countp ?>, .no-webp <?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } ?> .cscb-left-inner.bg-image<?php echo $countp ?> {
									background-image: url('<?php if(get_sub_field('photo')) { echo '' . get_sub_field('photo') . ''; } ?>'); 
								} 
						<?php } else { ?> 
								<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } ?> .cscb-left-inner.bg-image<?php echo $countp ?> {
									background-image: url('<?php if(get_sub_field('photo')) { echo '' . get_sub_field('photo') . ''; } ?>'); 
								}
						<?php } ?>
						</style> 
					
						<div class="cscb-left-inner <?php echo $countp ?> bg-image<?php echo $countp ?> <?php if((get_sub_field('quote')) == true) { echo 'cscb-img-rm'; } ?> clearfix"></div>
						<?php if(get_sub_field('photo_color_filter')) { echo '<div class="color-overlay-exact z2 opacity50 ' . get_sub_field('photo_color_filter') . '"></div>'; }?>  
				<?php  } ?> 
				<!-- end conditional -->

							<!-- award code -->
							<?php if(get_sub_field('cs_award_recognition_bg_color')) { echo '<div class="grid-page mauto cscb-quote-rm2 hide-rm mt20 hide-mobile inset-offset"><div class="grid-8 fl"><div class="grid-10 tac ' . get_sub_field('cs_award_recognition_bg_color') . ' bs3 br10 mb30 ppt2 ppb2 ppr10 ppl10 clearfix">'; } ?>
							<?php
							// check if the flexible content field has rows of data
							if( have_rows('cs_award_recognition') ):
							while ( have_rows('cs_award_recognition') ) : the_row(); ?>  
							<?php // Text
							if( get_row_layout() == 'cs_award_text' ): ?> 
							<?php if(get_sub_field('p18')) { echo '<p class="fs18 cb mb0 '; } ?><?php if(get_sub_field('p18_text_color')) { echo ' ' . the_sub_field('p18_text_color') . ''; } ?><?php if(get_sub_field('p18')) { echo ' clearfix">'; } ?><?php if(get_sub_field('p18')) { echo ' ' . the_sub_field('p18') . ''; } ?><?php if(get_sub_field('p18')) { echo '</p>'; } ?>   
							<?php endif; ?>
							<?php // Headline 
							if( get_row_layout() == 'cs_award_headline' ): ?>  
							<?php if(get_sub_field('p26')) { echo '<p class="fs26 cb mb0 '; } ?><?php if(get_sub_field('p26_text_color')) { echo ' ' . get_sub_field('p26_text_color') . ''; } ?><?php if(get_sub_field('p26')) { echo ' clearfix"><strong>'; } ?><?php if(get_sub_field('p26')) { echo ' ' . the_sub_field('p26') . ''; } ?><?php if(get_sub_field('p26')) { echo '</strong></p>'; } ?>  
							<?php endif; ?>
							<?php // Subheadline 
							if( get_row_layout() == 'cs_award_subheadline' ): ?>  
							<?php if(get_sub_field('p26_subtext')) { echo '<p class="fs26 cb lh100 mb0 '; } ?><?php if(get_sub_field('p26_subtext_color')) { echo ' ' . get_sub_field('p26_subtext_color') . ''; } ?><?php if(get_sub_field('p26_subtext')) { echo ' clearfix">'; } ?><?php if(get_sub_field('p26_subtext')) { echo ' ' . the_sub_field('p26_subtext') . ''; } ?><?php if(get_sub_field('p26_subtext')) { echo '</p>'; } ?>  
							<?php endif; ?>
							<?php // Text 
							if( get_row_layout() == 'cs_award_icon' ): ?>			
							<?php $image = get_sub_field('award_photo_icon'); ?>
							<?php if( get_sub_field('award_photo_icon') ) { echo '<div class="'; } ?><?php if( get_sub_field('award_photo_icon_width') ) { echo '' . get_sub_field('award_photo_icon_width') . ''; } ?><?php if( get_sub_field('award_photo_icon') ) { echo ' mauto cb mb10 mt10"><img class="responsive-img two" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('award_photo_icon') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('award_photo_icon') ) { echo '" border="0"/></div>'; } ?> 
							<?php endif; ?>

							<?php endwhile; // end loop through the rows of data
							else :
							// no layouts found
							?> 
							<?php endif; ?><?php wp_reset_query(); ?>
							<?php if(get_sub_field('cs_award_recognition_bg_color')) { echo '</div></div></div>'; } ?>
							<!-- end award code -->

							<?php if(get_sub_field('quote')) { echo '<div class="grid-page mauto cscb-quote-rm2 hide-rm mt20 hide-mobile inset-offset"><div class="grid-8 fl bg-blur"><div class="blockquote-wrapper grid-10"><div class="blockquote mb0 mt0">'; } ?>
							<?php if(get_sub_field('quote')) { echo '<span class="quote purple"><span>' . get_sub_field('quote') . '</span></span>'; } ?>  
										<?php if(get_sub_field('quote')) { echo '<span class="citation-photo fl">'; } ?> 
										<?php $image = get_sub_field('quote_photo'); ?>
										<?php if( get_sub_field('quote_photo') ) { echo '<div class="'; } ?><?php if( get_sub_field('quote_photo') ) { echo 'grid-10 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('quote_photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('quote_photo') ) { echo '" border="0"/></div>'; } ?>
										<?php if(get_sub_field('quote')) { echo '</span> 
										<div class="grid-fixed-6b fl pl4">'; } ?>  
											<?php if(get_sub_field('quote_logo')) { echo '<span class="citation pt2">'; } ?>
											<?php $image = get_sub_field('quote_logo'); ?>
											<?php if( get_sub_field('quote_logo') ) { echo '<div class="'; } ?><?php if(get_sub_field('quote_logo_width') && get_sub_field('quote_logo')) { echo '' . get_sub_field('quote_logo_width') . ''; } ?><?php if( get_sub_field('quote_logo') ) { echo ' pr-cs-logo-width pb1 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('quote_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('quote_logo') ) { echo '" border="0"/></div>'; } ?>
											<?php if(get_sub_field('quote_logo')) { echo '</span>'; } ?>
											<?php if(get_sub_field('quote_first_and_last_name') || get_sub_field('quote_company') ) { echo '<span class="citation cite-text mt0 pt0 purple">'; } ?>
								<?php if(get_sub_field('quote_first_and_last_name')) { echo '' . get_sub_field('quote_first_and_last_name') . ''; } ?><?php if(get_sub_field('quote_job_title')) { echo ', ' . get_sub_field('quote_job_title') . '<br/>'; } ?><?php if(get_sub_field('quote_company')) { echo '<em>' . get_sub_field('quote_company') . '</em>'; } ?>
											<?php if(get_sub_field('quote_first_and_last_name') || get_sub_field('quote_company')) { echo '</span>'; } ?>
										<?php if(get_sub_field('quote')) { echo '</div>'; } ?>
							<?php if(get_sub_field('quote')) { echo '</div></div></div></div>'; } ?> 
					
				</div> <!-- end cscb-left -->

				<div class="cscb-right z2 clearfix">  
					<div class="rep-text-block fl bg-purple clearfix">
						<?php if(get_sub_field('headline') || get_sub_field('subheadline') || get_sub_field('description') || get_sub_field('client_logo')) { echo '<div class="grid-10 fl cscb-content-rm show-rm clearfix">'; } ?>  

							<?php $image = get_sub_field('client_logo'); ?>
							<?php if( get_sub_field('client_logo') ) { echo '<div class="grid-10 fl pb1 clearfix">'; } ?>
							<?php if(get_sub_field('client_logo_width')) { echo '<div class="' . get_sub_field('client_logo_width') . ' clearfix">'; } ?>
							<?php if( get_sub_field('client_logo') ) { echo '<img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('client_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('client_logo') ) { echo '" width="150" height="150" border="0"/>'; } ?>
							<?php if(get_sub_field('client_logo_width')) { echo '</div>'; } ?>
							<?php if( get_sub_field('client_logo') ) { echo '</div>'; } ?> 

							<?php if(get_sub_field('headline')) { echo '<h3 class="block-headline_cs mb10 mt0 pb0 pt1 cscb-headline-rm hide-mobile ' . get_sub_field('headline_text_color') . ''; } ?><?php if(get_sub_field('quote')) { echo ' cscb-hover-rm'; } else { echo ''; } ?><?php if(get_sub_field('headline')) { echo '">' . get_sub_field('headline') . '</h3>'; } ?>
							<?php if(get_sub_field('headline')) { echo '<h3 class="block-headline_cs pb2 pt1 hide-desktop2 ' . get_sub_field('headline_text_color') . '">' . get_sub_field('headline') . '</h3>'; } ?>
							<?php if(get_sub_field('subheadline')) { echo '<span class="block-subheadline pb2 pt0 ' . get_sub_field('subheadline_text_color') . '">' . get_sub_field('subheadline') . '</span>'; } ?>
							<?php if(get_sub_field('description')) { echo '<div class="fl bg-purple expand">'; } ?> 
							<?php if(get_sub_field('description')) { echo '<div class="sp pt1 cb ' . get_sub_field('description_text_color') . '">' . get_sub_field('description') . '</div>'; } ?> 
							<?php if(get_sub_field('description_more')) { echo '<div class="sp cb more ' . get_sub_field('description_text_color') . '">' . get_sub_field('description_more') . '</div><p class="read">Read More</p>'; } ?>
							<?php if(get_sub_field('description')) { echo '</div>'; } ?> 

							<!-- start repeater-list -->
							<?php if( have_rows('rectangle_buttons') ): $pr = 0;
							echo '<div class="mb0 mt0">';
							// loop through the rows of data
							while ( have_rows('rectangle_buttons') ) : the_row(); ?> 
							<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect mb0'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('button_color') && get_sub_field('link')) { echo '' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
							<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
							<?php if(get_sub_field('link')) { echo '>'; } ?>
							<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
							<div class="transition-rect"></div> 
							<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
							<?php endwhile; echo '</div>'; endif; ?>   
							<!-- end repeater-list -->  
						
							<!-- start repeater-list --> 
							<?php if( have_rows('buttons') ): $pr = 0;
							echo '<div class="grid-10 fl mb20">';
							// loop through the rows of data
							while ( have_rows('buttons') ) : the_row(); ?> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="grid-10 fl right-link'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('text_color')) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('arrow_color')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?> 
								<?php if(get_sub_field('target_blank') == true) { echo 'target="_blank"'; } ?>
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
							<?php endwhile; echo '</div>'; endif; ?> 
							<!-- end repeater-list -->  

							<!-- award code -->
							<?php if(get_sub_field('cs_award_recognition_bg_color')) { echo '<div class="grid-10 fl bg-white border20 mt30 mb40 pt2 pb0 hide-desktop clearfix"><div class="grid-page mauto"><div class="grid-10 tac ' . get_sub_field('cs_award_recognition_bg_color') . ' br10 mb30 ppt2 ppb2 ppr10 ppl10 clearfix">'; } ?>
							<?php
							// check if the flexible content field has rows of data
							if( have_rows('cs_award_recognition') ):
							while ( have_rows('cs_award_recognition') ) : the_row(); ?>
							<?php // Text
							if( get_row_layout() == 'cs_award_text' ): ?>
							<?php if(get_sub_field('p18')) { echo '<p class="fs18 cb mb0 '; } ?><?php if(get_sub_field('p18_text_color')) { echo ' ' . the_sub_field('p18_text_color') . ''; } ?><?php if(get_sub_field('p18')) { echo ' clearfix">'; } ?><?php if(get_sub_field('p18')) { echo ' ' . the_sub_field('p18') . ''; } ?><?php if(get_sub_field('p18')) { echo '</p>'; } ?>   
							<?php endif; ?>
							<?php // Headline
							if( get_row_layout() == 'cs_award_headline' ): ?>
							<?php if(get_sub_field('p26')) { echo '<p class="fs26 cb mb0 '; } ?><?php if(get_sub_field('p26_text_color')) { echo ' ' . get_sub_field('p26_text_color') . ''; } ?><?php if(get_sub_field('p26')) { echo ' clearfix"><strong>'; } ?><?php if(get_sub_field('p26')) { echo ' ' . the_sub_field('p26') . ''; } ?><?php if(get_sub_field('p26')) { echo '</strong></p>'; } ?>  
							<?php endif; ?>
							<?php // Subheadline
							if( get_row_layout() == 'cs_award_subheadline' ): ?>
							<?php if(get_sub_field('p26_subtext')) { echo '<p class="fs26 cb lh100 mb0 '; } ?><?php if(get_sub_field('p26_subtext_color')) { echo ' ' . get_sub_field('p26_subtext_color') . ''; } ?><?php if(get_sub_field('p26_subtext')) { echo ' clearfix">'; } ?><?php if(get_sub_field('p26_subtext')) { echo ' ' . the_sub_field('p26_subtext') . ''; } ?><?php if(get_sub_field('p26_subtext')) { echo '</p>'; } ?>  
							<?php endif; ?>
							<?php // Text
							if( get_row_layout() == 'cs_award_icon' ): ?>
							<?php $image = get_sub_field('award_photo_icon'); ?>
							<?php if( get_sub_field('award_photo_icon') ) { echo '<div class="'; } ?><?php if( get_sub_field('award_photo_icon_width') ) { echo '' . get_sub_field('award_photo_icon_width') . ''; } ?><?php if( get_sub_field('award_photo_icon') ) { echo ' mauto cb mb10 mt10"><img class="responsive-img two" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('award_photo_icon') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('award_photo_icon') ) { echo '" border="0"/></div>'; } ?> 
							<?php endif; ?>

							<?php endwhile; // end loop through the rows of data
							else :
							// no layouts found
							?> 
							<?php endif; ?><?php wp_reset_query(); ?>
							<?php if(get_sub_field('cs_award_recognition_bg_color')) { echo '</div></div></div>'; } ?>
							<!-- end award code -->
						
							<!-- start quote code --> 
							<?php if(get_sub_field('quote')) { echo '<div class="grid-10 fl bg-white border20 mt30 mb40 pt2 pb2 hide-desktop clearfix"><div class="grid-page mauto"><div class="blockquote-wrapper grid-10"><div class="blockquote mb0 mt0">'; } ?>
							<?php if(get_sub_field('quote')) { echo '<span class="quote purple"><span>' . get_sub_field('quote') . '</span></span>'; } ?>  
										<?php if(get_sub_field('quote')) { echo '<span class="citation-photo fl">'; } ?> 
										<?php $image = get_sub_field('quote_photo'); ?>
										<?php if( get_sub_field('quote_photo') ) { echo '<div class="'; } ?><?php if( get_sub_field('quote_photo') ) { echo 'grid-10 clearfix"><img class="responsive-img" src="'; } ?><?= (isset($image['url']) ? $image['url'] : ''); ?><?php if( get_sub_field('quote_photo') ) { echo '" alt="'; } ?><?= (isset($image['alt']) ? $image['alt'] : ''); ?><?php if (get_sub_field('quote_photo') ) { echo '" border="0"/></div>'; } ?>
										<?php if(get_sub_field('quote')) { echo '</span> 
										<div class="grid-fixed-6b fl pl4">'; } ?>  
											<?php if(get_sub_field('quote_logo')) { echo '<span class="citation pt2">'; } ?>
											<?php $image = get_sub_field('quote_logo'); ?>
											<?php if( get_sub_field('quote_logo') ) { echo '<div class="'; } ?><?php if(get_sub_field('quote_logo_width') && get_sub_field('quote_logo')) { echo '' . get_sub_field('quote_logo_width') . ''; } ?><?php if( get_sub_field('quote_logo') ) { echo ' pr-cs-logo-width pb1 clearfix"><img class="responsive-img" src="'; } ?><?= (isset($image['url']) ? $image['url'] : ''); ?><?php if( get_sub_field('quote_logo') ) { echo '" alt="'; } ?><?= (isset($image['alt']) ? $image['alt'] : ''); ?><?php if (get_sub_field('quote_logo') ) { echo '"  width="50" height="50" border="0"/></div>'; } ?>
											<?php if(get_sub_field('quote_logo')) { echo '</span>'; } ?>
											<?php if(get_sub_field('quote_first_and_last_name') || get_sub_field('quote_company') ) { echo '<span class="citation cite-text mt0 pt0 purple">'; } ?>
								<?php if(get_sub_field('quote_first_and_last_name')) { echo '' . get_sub_field('quote_first_and_last_name') . ''; } ?><?php if(get_sub_field('quote_job_title')) { echo ', ' . get_sub_field('quote_job_title') . '<br/>'; } ?><?php if(get_sub_field('quote_company')) { echo '<em>' . get_sub_field('quote_company') . '</em>'; } ?>
											<?php if(get_sub_field('quote_first_and_last_name') || get_sub_field('quote_company')) { echo '</span>'; } ?>
										<?php if(get_sub_field('quote')) { echo '</div>'; } ?>
							<?php if(get_sub_field('quote')) { echo '</div></div></div></div>'; } ?>  
						
						<?php if(get_sub_field('headline') || get_sub_field('subheadline') || get_sub_field('description') || get_sub_field('client_logo')) { echo '</div>'; } ?>  
						
					</div> <!-- end rep-text-block -->
				</div> <!-- end cscb-right -->
			</li> 
		<?php endwhile; ?>
		</ul> 
		<?php endif; ?>
		
	</div>
</section>
<style type="text/css">
		.cscb-list {display:block;margin:0 !important;padding:0;position:relative;width:100%;}
		.cscb-list li {display:block;margin:0 0 60px;padding:0;position:relative;width:100%;}
		.cscb-left{bottom:0;display:block;left:0;min-height:10px;position:absolute;top:0;width:60%;}
		.cscb-list li:nth-child(even) .cscb-left {left:auto;left:unset;right:0;}
		.cscb-list li:nth-child(even) .cscb-left .grid-8.fl {float:right;}

		.cscb-left-inner{background-size:cover;background-repeat:no-repeat;background-position:center;bottom:0;display:block;left:0;min-height:250px;position:absolute;right:0;top:0;width:100%;}
		.cscb-left-inner .grid-page {z-index:10;}
		.cscb-right{display:block;float:right;min-height:10px;left:-10%;position:relative;width:40%;}
		.cscb-list li:nth-child(even) .cscb-right {float:left;left:10%;}

		.rep-text-block {display:block;margin:50px 0;min-height:100px;padding:30px 60px 20px;width:100%;}

		.cscb-list .rb-line{background:rgb(175,35,28);background:linear-gradient(90deg, rgba(175,35,28,1) 0%, rgba(7,66,144,1) 100%);height:4px;left:-150px;margin-bottom:50px;position:relative;width:200px;}
		.cscb-list .label {color:#B9E2F8;display:block;font-family:'Lato', sans-serif !important;font-weight:400;font-size:12px;letter-spacing:1px;padding-bottom:10px;text-transform:uppercase;width:100%;}
		.cscb-list h2 {font-family:'Oswald', Helvetica, serif !important;font-size:36px !important;line-height:100%;margin-top:10px !important;}
		.cscb-list .desc {display:block;font-size:18px !important;font-family:'Oswald', sans-serif !important;font-weight:400;line-height:120%;padding:10px 0 30px;position:relative;width:100%;}
	.cscb-list .sp p, .cscb-list .sp p b, .cscb-list .sp p strong, .cscb-list .sp p em,.cscb-list .sp p i {font-size:18px !important;}
		.cscb-img-rm {height:auto;transition:all 0.5s ease-in-out;}
		.cscb-img-rm:hover {height:auto;transition:all 0.5s ease-in-out;}

		.wp-block-cover__inner-container p.hero-subtitle {color:#001466;}
		.wp-block-cover-image img.wp-block-cover__image-background, .wp-block-cover-image video.wp-block-cover__video-background, .wp-block-cover img.wp-block-cover__image-background, .wp-block-cover video.wp-block-cover__video-background {height:auto !important;}
		.wp-block-cover {overflow:hidden;}
		.wp-block-cover, .wp-block-cover-image {min-height:100% !important;}
		.hero-img .wp-block-cover__inner-container {padding:250px 0 30px;}
		.cscb-content-rm p b, .cscb-content-rm p strong {color:unset;} 
	
 		.bg-blur{background-color:#fff;background-position:center;background-repeat:no-repeat;background-size:cover;border-radius:30px;display:block;margin:0 auto;padding:20px;position:relative;}
		.inset-offset {top:15%;}
		.cscb-list .blockquote-wrapper .blockquote .quote::before {border:6px solid #fff;}
		.cscb-list .blockquote-wrapper .blockquote .quote {border: 2px solid #399ec7;line-height:100% !important;}
		.cscb-list .blockquote-wrapper .blockquote .quote::after {border:2px solid #399ec7;border-bottom:none !important;border-left:none !important;}
		.cscb-list .blockquote-wrapper .blockquote .quote span{font-size:18px !important;}
	
		.expand {left:0%;position:relative;width:100%;transition:all 0.5s ease-in-out;}
		.expand.expanded {left:0%;padding:20px;width:230%;transition:all 0.5s ease-in-out;} 
		.cscb-list li:nth-child(odd) .expand{left:0%;position:relative;width:100%;transition:all 0.5s ease-in-out;}
		.cscb-list li:nth-child(odd) .expand.expanded {left:-130%;padding:20px;width:230%;transition: all 0.5s ease-in-out;}
	
		.border20 {border-radius:20px;}
		@keyframes readreveal {
		  from {width:100%;}
		  to {width:230%;}
		}
		@keyframes readvanish {
		  from {width:230%;}
		  to {width:100%;}
		}  
		@media screen and (max-width: 1100px) {
			.cscb-right {left:-5%;width:50%;}
			.cscb-list li:nth-child(2n) .cscb-right {left:5%;width:50%;}
		}
		@media screen and (max-width: 767px) { 
			.hero-img .wp-block-cover__inner-container {padding:250px 0 30px;} 
			.cscb-left {bottom:unset;display:block;left:unset;position:relative;top:unset;width:100%;} 
			.cscb-left, .cscb-left-inner {height:300px;}
			.rep-text-block {display:block;margin:0;min-height:100px;padding:30px 60px 20px;width:100%;}
			.cscb-right {display:block;float:left;left:0;position:relative;width:100%;}
			.cscb-list li {margin:0;}
			.cscb-list li:nth-child(2n) .cscb-right {left:0%;width:100%;}
			.expand {position:relative;width:100%;transition:all 1.0s ease-in-out;animation-name:none;animation-duration:none;}
			.expand.expanded {padding:0px;width:100%;transition:all 1.0s ease-in-out;animation-name:none;animation-duration:1.0s;}
			.cscb-list li:nth-child(odd) .expand.expanded {left:0%;padding:0px;width:100%;animation-name:none;animation-duration:1.0s;transition: all 1.0s ease-in-out;} 
			.cscb-list li:nth-child(odd) .expand{position:relative;width:100%;transition:all 1.0s ease-in-out;animation-name:none;animation-duration:1.0s;} 
			.cscb-list .blockquote-wrapper .blockquote .quote.purple span {color:#3a357e !important;}
		} 
		@media screen and (max-width: 600px) { 
			.hero-img .wp-block-cover__inner-container {min-height:250px;padding:175px 0 20px !important;}
		}
		@media screen and (max-width: 500px) { 
			.cscb-list .blockquote-wrapper .blockquote .citation-photo {min-height:50px;}
			.cscb-list .blockquote-wrapper .blockquote .grid-fixed-6b.pl4 {float:left;padding-left:0;width:100% !important;}
		}
</style> 