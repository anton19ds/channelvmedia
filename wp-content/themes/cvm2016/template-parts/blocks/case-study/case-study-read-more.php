<?php
/**
 * Case Study Read More Block Template.
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

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl bg-common <?php if(get_field('background_color')) { echo '' . get_field('background_color') . ''; } ?> <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb4';} ?> fl clearfix">
	
		<?php if(get_field('background_photo')) { echo '<div class="color-overlay bg-common clearfix'; } ?><?php if((get_field('background_photo_opacity')) == true) { echo ' ' . get_field('background_photo_opacity') . ''; } ?><?php if(get_field('background_photo')) { echo '" style="background-image:url(' . get_field('background_photo') . ');'; } ?><?php if((get_field('background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?><?php if(get_field('background_photo')) { echo '"></div>'; } ?>  

	<?php if(get_field('background_color_filter')) { echo '<div class="color-overlay ' . get_field('background_color_filter') . ''; } ?><?php if((get_field('background_color_filter_opacity')) == true) { echo ' ' . get_field('background_color_filter_opacity') . ' '; } ?><?php if(get_field('background_color_filter')) { echo ' clearfix"></div>'; } ?>

	<div class="grid-10 fl pb0 ex-pr-cs-list clearfix">
		<?php if(get_field('expertise_pr_cs_headline') || get_field('expertise_pr_cs_subheadline') || get_field('expertise_pr_cs_section_label')) { echo '<div class="grid-10 fl clearfix"><div class="grid-page clearfix"><div class="grid-7 fl clearfix">'; } ?> 

			<?php if(get_field('expertise_pr_cs_section_label')) { echo '<p class="sp-small mt0 ' . get_field('expertise_pr_cs_section_label_text_color') . ' clearix">' . get_field('expertise_pr_cs_section_label') . '</p>'; } ?> 
			<?php if(get_field('expertise_pr_cs_headline')) { echo '<h2 class="block-headline_cs heavy ' . get_field('expertise_pr_cs_headline_text_color') . ' clearix">' . get_field('expertise_pr_cs_headline') . '</h2> '; } ?> 
			<?php if(get_field('expertise_pr_cs_subheadline')) { echo '<p class="block-subheadline ' . get_field('expertise_pr_cs_subheadline_text_color') . ' clearix">' . get_field('expertise_pr_cs_subheadline') . '</p> '; } ?> 
		<?php if(get_field('expertise_pr_cs_headline') || get_field('expertise_pr_cs_subheadline') || get_field('expertise_pr_cs_section_label')) { echo '</div></div></div>'; } ?>

		<!-- start repeater-list --> 
		<?php if( have_rows('expertise_pr_cs_steps') ):
		echo ' ';
		// loop through the rows of data
		$countp = 0; while ( have_rows('expertise_pr_cs_steps') ) : the_row(); $countp++; ?> 
		<div class="grid-10 fl pt5 pb5 bg-null-<?php echo $countp ?> cs-rm<?php echo $countp ?> clearfix"><div class="grid-page mauto clearfix"> 

		<?php if(get_sub_field('photo')) { echo '<div class="grid-4b mb20'; }?>
				<?php if((get_sub_field('photo') && get_sub_field('photo_position_right')) == true) { echo 'fr'; } else { echo 'fl'; }?>
				<?php if(get_sub_field('photo')) { echo 'clearfix">'; } ?> 

						<!-- award code -->
						<?php if(get_sub_field('cs_award_recognition_bg_color')) { echo '<div class="grid-10 fl cs-quote-rm">'; } ?>

						<?php if(get_sub_field('cs_award_recognition_bg_color')) { echo '<div class="grid-10 tac ' . get_sub_field('cs_award_recognition_bg_color') . ' bs3 br10 mb30 ppt7 ppb6 ppr10 ppl10 clearfix">'; } ?>
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
						<?php if(get_sub_field('cs_award_recognition_bg_color')) { echo '</div></div>'; } ?>
						<!-- end award code -->
			
					<?php if(get_sub_field('quote')) { echo '<div class="grid-10 fl cs-quote-rm">'; } ?> 
					<?php if(get_sub_field('quote')) { echo '<div class="blockquote-wrapper grid-10"><div class="blockquote mt0">'; } ?>
						<?php if(get_sub_field('quote')) { echo '<span class="quote purple"><span>' . get_sub_field('quote') . '</span></span>'; } ?> 
						<?php if(get_sub_field('quote')) { echo '<span class="citation-photo fl">'; } ?> 
						<?php $image = get_sub_field('quote_photo'); ?>
						<?php if( get_sub_field('quote_photo') ) { echo '<div class="'; } ?><?php if( get_sub_field('quote_photo') ) { echo 'grid-10 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('quote_photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('quote_photo') ) { echo '" border="0"/></div>'; } ?>
						<?php if(get_sub_field('quote')) { echo '</span> 
					  	<div class="grid-fixed-7 fl pl4">'; } ?>  
							<?php if(get_sub_field('quote_logo')) { echo '<span class="citation pt2">'; } ?>
							<?php $image = get_sub_field('quote_logo'); ?>
							<?php if( get_sub_field('quote_logo') ) { echo '<div class="'; } ?><?php if(get_sub_field('quote_logo_width') && get_sub_field('quote_logo')) { echo '' . get_sub_field('quote_logo_width') . ''; } ?><?php if( get_sub_field('quote_logo') ) { echo ' pr-cs-logo-width pb1 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('quote_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('quote_logo') ) { echo '" border="0"/></div>'; } ?>
							<?php if(get_sub_field('quote_logo')) { echo '</span>'; } ?>
							<?php if(get_sub_field('quote_first_and_last_name') || get_sub_field('quote_company') ) { echo '<span class="citation cite-text mt0 pt0 purple">'; } ?>
				<?php if(get_sub_field('quote_first_and_last_name')) { echo '' . get_sub_field('quote_first_and_last_name') . ''; } ?><?php if(get_sub_field('quote_job_title')) { echo ', ' . get_sub_field('quote_job_title') . '<br/>'; } ?><?php if(get_sub_field('quote_company')) { echo '<em>' . get_sub_field('quote_company') . '</em>'; } ?>
							<?php if(get_sub_field('quote_first_and_last_name') || get_sub_field('quote_company')) { echo '</span>'; } ?>
						<?php if(get_sub_field('quote')) { echo '</div>'; } ?>
					<?php if(get_sub_field('quote')) { echo '</div></div></div>'; } ?> 
			
					<?php if(get_sub_field('photo')) { echo '<div class="color-overlay ' . get_field('background_color') . ''; } ?>
						<?php if((get_sub_field('photo') && get_sub_field('photo_position_right')) == true) { echo 'slide-left'; } else { echo 'slide-right'; }?>
					<?php if(get_sub_field('photo')) { echo 'z11" style="display:none;"></div>'; } ?>

					<?php $image = get_sub_field('photo');
					if( !empty( $image ) ): ?>
						<img class="responsive-img <?php if( get_sub_field('photo_shadow') ) { echo ' ' . get_sub_field('photo_shadow') . ''; } ?>
			<?php if(get_sub_field('photo_underline') == true) { echo ' bb-lt-purple'; } ?><?php if((get_sub_field('quote') || get_sub_field('cs_award_recognition_bg_color')) == true) { echo ' cs-img-rm'; } else { echo ''; } ?> z1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>

					<?php if(get_sub_field('photo_color_filter')) { echo '<div class="color-overlay-exact z2 opacity50 ' . get_sub_field('photo_color_filter') . '"></div>'; }?>  

		<?php if(get_sub_field('photo')) { echo '</div>'; } ?> 			
		 
			<!-- award code 112 -->
			<?php if(get_sub_field('cs_award_recognition_bg_color')) { echo '<div class="grid-5 fr cs-quote-rm2"'; } ?><?php if((get_sub_field('photo') && get_sub_field('photo_position_right') && get_sub_field('cs_award_recognition_bg_color')) == true) { echo ' style="float:left;clear:left;"'; }?><?php if(get_sub_field('cs_award_recognition_bg_color')) { echo '>'; }?>
			
			<?php if(get_sub_field('cs_award_recognition_bg_color')) { echo '<div class="grid-10 tac ' . get_sub_field('cs_award_recognition_bg_color') . ' bs3 br10 mb30 ppt7 ppb6 ppr10 ppl10 clearfix">'; } ?>
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
			<?php if(get_sub_field('cs_award_recognition_bg_color')) { echo '</div></div>'; } ?>
			<!-- end award code -->
			
			<!-- 146 -->
			<?php if(get_sub_field('quote')) { echo '<div class="grid-5 fr cs-quote-rm2"'; } ?><?php if((get_sub_field('photo') && get_sub_field('photo_position_right') && get_sub_field('quote')) == true) { echo ' style="float:left;clear:left;"'; }?>
			<?php if(get_sub_field('quote')) { echo '><div class="blockquote-wrapper grid-10"><div class="blockquote mt0">'; } ?>
			
			<?php if(get_sub_field('quote')) { echo '<span class="quote purple"><span>' . get_sub_field('quote') . '</span></span>'; } ?>  
			<?php if(get_sub_field('quote')) { echo '<span class="citation-photo fl">'; } ?>
				<?php $image = get_sub_field('quote_photo'); ?>
				<?php if( get_sub_field('quote_photo') ) { echo '<div class="'; } ?><?php if( get_sub_field('quote_photo') ) { echo 'grid-10 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('quote_photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('quote_photo') ) { echo '" border="0"/></div>'; } ?>
			<?php if(get_sub_field('quote')) { echo '</span> 
			<div class="grid-fixed-7 fl pl4">'; } ?>
				<?php if(get_sub_field('quote_logo')) { echo '<span class="citation pt2">'; } ?>
				<?php $image = get_sub_field('quote_logo'); ?>
				<?php if( get_sub_field('quote_logo') ) { echo '<div class="'; } ?><?php if(get_sub_field('quote_logo_width') && get_sub_field('quote_logo')) { echo '' . get_sub_field('quote_logo_width') . ''; } ?><?php if( get_sub_field('quote_logo') ) { echo ' pr-cs-logo-width pb1 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('quote_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('quote_logo') ) { echo '" border="0"/></div>'; } ?>
				<?php if(get_sub_field('quote_logo')) { echo '</span>'; } ?>
				<?php if(get_sub_field('quote_first_and_last_name') || get_sub_field('quote_company') ) { echo '<span class="citation cite-text mt0 pt0 purple">'; } ?>
				<?php if(get_sub_field('quote_first_and_last_name')) { echo '' . get_sub_field('quote_first_and_last_name') . ''; } ?><?php if(get_sub_field('quote_job_title')) { echo ', ' . get_sub_field('quote_job_title') . '<br/>'; } ?><?php if(get_sub_field('quote_company')) { echo '<em>' . get_sub_field('quote_company') . '</em>'; } ?>
				<?php if(get_sub_field('quote_first_and_last_name') || get_sub_field('quote_company')) { echo '</span>'; } ?>
			<?php if(get_sub_field('quote')) { echo '</div>'; } ?>
		<?php if(get_sub_field('quote')) { echo '</div></div></div>'; } ?>
		 
		<?php if(get_sub_field('headline') || get_sub_field('subheadline') || get_sub_field('description') || get_sub_field('client_logo')) { echo '<div class="grid-4b fl cs-content-rm clearfix"><div class="grid-page-mod mauto clearfix">'; } ?>  
			
			<?php $image = get_sub_field('client_logo'); ?>
			<?php if( get_sub_field('client_logo') ) { echo '<div class="grid-10 fl pb3 clearfix">'; } ?>
			<?php if(get_sub_field('client_logo_width')) { echo '<div class="' . get_sub_field('client_logo_width') . ' clearfix">'; } ?>
			<?php if( get_sub_field('client_logo') ) { echo '<img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('client_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('client_logo') ) { echo '" border="0"/>'; } ?>
			<?php if(get_sub_field('client_logo_width')) { echo '</div>'; } ?>
			<?php if( get_sub_field('client_logo') ) { echo '</div>'; } ?> 
			
			<?php if(get_sub_field('headline')) { echo '<h3 class="block-headline_cs mb20 mt0 pb1 pt1 cs-headline-rm hide-mobile ' . get_sub_field('headline_text_color') . ''; } ?><?php if(get_sub_field('quote')) { echo ' cs-hover-rm'; } else { echo ''; } ?><?php if(get_sub_field('headline')) { echo '">' . get_sub_field('headline') . '</h3>'; } ?>
			<?php if(get_sub_field('headline')) { echo '<h3 class="block-headline_cs pb1 pt1 hide-desktop2 ' . get_sub_field('headline_text_color') . '">' . get_sub_field('headline') . '</h3>'; } ?>
			<?php if(get_sub_field('subheadline')) { echo '<span class="block-subheadline pb2 pt0 ' . get_sub_field('subheadline_text_color') . '">' . get_sub_field('subheadline') . '</span>'; } ?>
			<?php if(get_sub_field('description')) { echo '<div class="sp cb a '; } ?><?php if((get_sub_field('description') && get_sub_field('description_text_color')) == true) { echo ' ' . get_sub_field('description_text_color') . ''; } ?><?php if(get_sub_field('description')) { echo '">' . get_sub_field('description') . '</div>'; } ?> 
			<?php if(get_sub_field('description_more')) { echo '<div class="sp cb more '; } ?><?php if((get_sub_field('description_more') && get_sub_field('description_text_color')) == true) { echo ' ' . get_sub_field('description_text_color') . ''; } ?><?php if(get_sub_field('description_more')) { echo '' . get_sub_field('description_more') . '</div><p class="read">Read More</p>'; } ?>

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
			<?php if(get_sub_field('cs_award_recognition_bg_color')) { echo '<div class="grid-10 fl cs-quote-rm-mobile mt20 hide-desktop"><div class="grid-10 tac ' . get_sub_field('cs_award_recognition_bg_color') . ' bs3 br10 mb30 ppt7 ppb6 ppr10 ppl10 clearfix">'; } ?>
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
			<?php if(get_sub_field('cs_award_recognition_bg_color')) { echo '</div></div>'; } ?>
			<!-- end award code -->

			<?php if(get_sub_field('quote')) { echo '<div class="grid-10 fl cs-quote-rm-mobile mt20 hide-desktop"><div class="blockquote-wrapper grid-10"><div class="blockquote mt0">'; } ?>
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
			<?php if(get_sub_field('quote')) { echo '</div></div></div>'; } ?>
			
		<?php if(get_sub_field('headline') || get_sub_field('subheadline') || get_sub_field('description') || get_sub_field('client_logo')) { echo '</div></div>'; } ?>
		</div></div>
		<?php endwhile; echo ''; endif; ?>
		<!-- end repeater-list --> 
	</div>
</section>