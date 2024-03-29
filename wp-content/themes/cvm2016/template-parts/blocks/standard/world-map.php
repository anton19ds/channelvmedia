<?php
/**
 * World Map Block Template.
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
<section <?php if((get_field('overview_section_id')) == true) { echo'id="' . get_field('overview_section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php if(get_field('overview_background_color')) { echo '' . get_field('overview_background_color') . ''; } ?><?php if(get_field('overview_top_margin')) { echo ' ' . get_field('overview_top_margin') . ''; } ?><?php if(get_field('overview_bottom_margin')) { echo ' ' . get_field('overview_bottom_margin') . ''; } ?> <?php if(get_field('overview_top_padding')) { echo ' ' . get_field('overview_top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('overview_bottom_padding')) { echo ' ' . get_field('overview_bottom_padding') . ''; } else {echo' pb4';} ?> clearfix">
	
	<?php if(get_field('overview_background_photo')) { echo '<div class="color-overlay bg-common clearfix'; } ?>
		<?php if((get_field('overview_background_photo_opacity')) == true) { echo ' ' . get_field('overview_background_photo_opacity') . ''; } ?>
		<?php if(get_field('overview_background_photo')) { echo '" style="'; } ?>
		<?php if(get_field('overview_background_photo')) { echo 'background-image:url(' . get_field('overview_background_photo') . ');'; } ?><?php if((get_field('overview_background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?>
	<?php if(get_field('overview_background_photo')) { echo '"></div>'; } ?> 
	
	<?php if(get_field('overview_background_color_filter')) { echo '<div class="color-overlay ' . get_field('overview_background_color_filter') . ''; } ?><?php if((get_field('overview_background_color_filter_opacity')) == true) { echo ' ' . get_field('overview_background_color_filter_opacity') . ' '; } ?><?php if(get_field('overview_background_color_filter')) { echo ' clearfix"></div>'; } ?>
	
	<?php if(get_field('overview_line_element')) { echo '<div class="sp-header-circle'; } ?><?php if(get_field('overview_line_element_circle_color')) { echo ' ' . get_field('overview_line_element_circle_color') . ''; } ?><?php if(get_field('overview_line_element')) { echo ' clearfix"></div><div class="' . get_field('overview_line_element') . ''; } ?><?php if(get_field('overview_line_element_line_color')) { echo ' ' . get_field('overview_line_element_line_color') . ''; } ?><?php if(get_field('overview_line_element')) { echo ' clearfix"></div>'; } ?>

		<div class="grid-page z2 clearfix">  
			
			<?php if(get_field('overview_content_width') || get_field('overview_content_top_padding') || get_field('overview_content_bottom_padding') || get_field('overview_content_position')) { echo '<div class="' . get_field('overview_content_width') . ''; } ?><?php if(get_field('overview_content_position')) { echo ' ' . get_field('overview_content_position') . ''; } ?><?php if(get_field('overview_content_top_padding')) { echo ' ' . get_field('overview_content_top_padding') . ''; } ?><?php if(get_field('overview_content_bottom_padding')) { echo ' ' . get_field('overview_content_bottom_padding') . ''; } ?><?php if(get_field('overview_content_width') || get_field('overview_content_top_padding') || get_field('overview_content_bottom_padding') || get_field('overview_content_position')) { echo ' clearfix">'; } ?>
			 <!-- START CONTENT -->
            <?php
            // check if the flexible content field has rows of data
            if( have_rows('overview_headlines_content') ): ?> 
            <?php 
                 // loop through the rows of data
                while ( have_rows('overview_headlines_content') ) : the_row(); ?>  
					<?php // Label
						if( get_row_layout() == 'overview_content_label' ): ?> 
						<?php if(get_sub_field('overview_label')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('overview_label_top_margin')) { echo ' ' . get_sub_field('overview_label_top_margin') . ''; } ?><?php if(get_sub_field('overview_label_bottom_margin')) { echo ' ' . get_sub_field('overview_label_bottom_margin') . ''; } ?><?php if(get_sub_field('overview_label')) { echo ' clearfix">'; } ?>   
 
							<?php if(get_sub_field('overview_label')) { echo '
								<p class="sp-small mt0 mb20'; } ?><?php if(get_sub_field('overview_label_color')) { echo ' ' . get_sub_field('overview_label_color') . ''; } ?><?php if(get_sub_field('overview_label_shadow')) { echo ' ' . get_sub_field('overview_label_shadow') . ''; } ?><?php if(get_sub_field('overview_label_alignment')) { echo ' ' . get_sub_field('overview_label_alignment') . ''; } ?><?php if(get_sub_field('overview_label')) { echo '">' . get_sub_field('overview_label') . '</p>'; } ?> 
		
						<?php if(get_sub_field('overview_label')) { echo '</div>'; } ?>  
					<?php endif; ?>  
                    <?php // Logo 
						if( get_row_layout() == 'overview_content_logo' ): ?> 
						<?php if(get_sub_field('overview_logo')) { echo '<div class="grid-10 fl mb30'; } ?><?php if(get_sub_field('overview_logo_top_margin')) { echo ' ' . get_sub_field('overview_logo_top_margin') . ''; } ?><?php if(get_sub_field('overview_logo_bottom_margin')) { echo ' ' . get_sub_field('overview_logo_bottom_margin') . ''; } ?><?php if(get_sub_field('overview_logo')) { echo ' clearfix">'; } ?> 
		
							<?php if(get_sub_field('overview_logo')) { ?>
								<?php if(get_sub_field('overview_logo')) { echo '<span class="overview-logo-img'; } ?><?php if(get_sub_field('overview_logo_width')) { echo ' ' . get_sub_field('overview_logo_width') . ''; } ?><?php if(get_sub_field('overview_logo_align')) { echo ' ' . get_sub_field('overview_logo_align') . ''; } ?><?php if(get_sub_field('overview_logo')) { echo '">'; } ?>
								<?php $image = get_sub_field('overview_logo'); ?>
								<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php if(get_sub_field('overview_logo')) { echo '</span>'; } ?>
							<?php } ?>
		
						<?php if(get_sub_field('overview_logo')) { echo '</div>'; } ?> 
                    <?php endif; ?> 
                    <?php // Headlines 
						if( get_row_layout() == 'overview_content_headlines' ): ?> 
						<?php if(get_sub_field('overview_headline') || get_sub_field('overview_subheadline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('overview_headlines_top_margin')) { echo ' ' . get_sub_field('overview_headlines_top_margin') . ''; } ?><?php if(get_sub_field('overview_headlines_bottom_margin')) { echo ' ' . get_sub_field('overview_headlines_bottom_margin') . ''; } ?><?php if(get_sub_field('overview_headline') || get_sub_field('overview_subheadline')) { echo ' clearfix">'; } ?>   
							<?php if((get_sub_field('overview_headline') && get_sub_field('overview_h1_tag')) == true ) { echo '<h1'; } else { echo '<h2'; } ?><?php if(get_sub_field('overview_headline')) { echo ' class="block-headline_alt mb0 pb0'; } ?><?php if(get_sub_field('overview_headline_color')) { echo ' ' . get_sub_field('overview_headline_color') . ''; } ?><?php if(get_sub_field('overview_headline_shadow')) { echo ' ' . get_sub_field('overview_headline_shadow') . ''; } ?><?php if(get_sub_field('overview_headlines_align') && get_sub_field('overview_headline')) { echo ' ' . get_sub_field('overview_headlines_align') . ''; } ?><?php if(get_sub_field('overview_headline')) { echo '"'; } ?>><?php if(get_sub_field('overview_headline')) { echo '' . get_sub_field('overview_headline') . ''; } ?><?php if((get_sub_field('overview_headline') && get_sub_field('overview_h1_tag')) == true ) { echo '</h1>'; } else { echo '</h2>'; } ?>

							<?php if(get_sub_field('overview_subheadline')) { echo '
								<span class="block-subheadline'; } ?><?php if(get_sub_field('overview_subheadline_color')) { echo ' ' . get_sub_field('overview_subheadline_color') . ''; } ?><?php if(get_sub_field('overview_subheadline_shadow')) { echo ' ' . get_sub_field('overview_subheadline_shadow') . ''; } ?><?php if(get_sub_field('overview_headlines_align') && get_sub_field('overview_subheadline')) { echo ' ' . get_sub_field('overview_headlines_align') . ''; } ?><?php if(get_sub_field('overview_subheadline')) { echo '">' . get_sub_field('overview_subheadline') . '</span>'; } ?>

						<?php if(get_sub_field('overview_headline') || get_sub_field('overview_subheadline')) { echo '</div>'; } ?> 
                    <?php endif; ?>
                     <?php // Text 
						if( get_row_layout() == 'overview_content_text' ): ?> 
						<?php if(get_sub_field('overview_description')) { echo '<div class="grid-10 fl overview-description'; } ?><?php if(get_sub_field('overview_description_top_margin')) { echo ' ' . get_sub_field('overview_description_top_margin') . ''; } ?><?php if(get_sub_field('overview_description_bottom_margin')) { echo ' ' . get_sub_field('overview_description_bottom_margin') . ''; } ?><?php if(get_sub_field('overview_description')) { echo ' clearfix">'; } ?> 

							<?php if(get_sub_field('overview_description')) { echo '
								<div class="sp'; } ?><?php if(get_sub_field('overview_description_color')) { echo ' ' . get_sub_field('overview_description_color') . ''; } ?><?php if(get_sub_field('overview_description_shadow')) { echo ' ' . get_sub_field('overview_description_shadow') . ''; } ?><?php if(get_sub_field('overview_description')) { echo '">' . get_sub_field('overview_description') . '</div>'; } ?> 
		
						<?php if(get_sub_field('overview_description')) { echo '</div>'; } ?>  
                    <?php endif; ?> 
                     <?php // Buttons 
						if( get_row_layout() == 'overview_buttons_text_links' ): ?> 
						<?php if(get_sub_field('overview_buttons')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('overview_buttons_top_margin')) { echo ' ' . get_sub_field('overview_buttons_top_margin') . ''; } ?><?php if(get_sub_field('overview_buttons_bottom_margin')) { echo ' ' . get_sub_field('overview_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('overview_buttons')) { echo ' clearfix">'; } ?> 
	 
							<!-- start repeater-list --> 
							<?php if( have_rows('overview_buttons') ): $pr = 0;
							echo '<p class="mt0 mb0 down-arrow-container">';
							// loop through the rows of data
							while ( have_rows('overview_buttons') ) : the_row(); ?> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="right-link'; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('text_shadow') && get_sub_field('link') ) { echo '' . get_sub_field('text_shadow') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
								<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
							<?php endwhile; echo '</p>'; endif; ?> 
							<!-- end repeater-list --> 

						<?php if(get_sub_field('overview_buttons')) { echo '</div>'; } ?>  
                    <?php endif; ?>

                     <?php // Rectangle Buttons 
						if( get_row_layout() == 'rectangle_buttons' ): ?> 
						<?php if(get_sub_field('button_swipe_rect')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('rect_buttons_top_margin')) { echo ' ' . get_sub_field('rect_buttons_top_margin') . ''; } ?><?php if(get_sub_field('rect_buttons_bottom_margin')) { echo ' ' . get_sub_field('rect_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('button_swipe_rect')) { echo ' clearfix">'; } ?> 
			
							<!-- start repeater-list --> 
							<?php if( have_rows('button_swipe_rect') ): $pr = 0;
							echo '<div class="mb0 mt0">';
							// loop through the rows of data
							while ( have_rows('button_swipe_rect') ) : the_row(); ?> 
							<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect '; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('button_color') && get_sub_field('link')) { echo '' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
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
	  
		<?php if(get_field('overview_content_width') || get_field('overview_content_top_padding') || get_field('overview_content_bottom_padding') || get_field('overview_content_position')) { echo '</div>'; } ?>
		
		</div> <!--grid-page --> 
	
		<div class="grid-10 svg-map-container clearfix" style="padding-bottom:30%">
		<svg id="interactive-map" class="bt-lt-purple" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 367.43 188.03"> 
		<g id="OBJECTS">
			<g>
				<polygon class="st0" points="73.54,144.93 73.79,144.99 73.73,144.97 		"/>
				<polygon class="st0" points="64.86,120.61 64.96,120.6 64.86,120.61 		"/>
				<polygon class="st0" points="165.93,105.27 165.82,104.9 165.82,104.9 		"/>
				<polygon class="st0" points="84.91,110.44 85.27,110.46 85.5,110.63 85.27,110.45 		"/>
				<polygon class="st0" points="189.95,47.42 189.87,47.07 189.95,47.44 		"/>
				<polygon class="st0" points="81.16,117.45 80.85,117.59 80.22,117.72 80.85,117.59 		"/>
				<polygon class="st0" points="94.7,156.07 94.46,156.23 94.39,156.28 		"/>
				<polygon class="st0" points="172.18,44.37 172.44,44.45 172.41,44.44 		"/>
				<polygon class="st0" points="174.96,50.26 174.53,50.39 174.96,50.26 		"/>
				<polygon class="st0" points="239.57,92.54 230.62,95.22 235.73,93.69 		"/>
				<polygon class="st0" points="212.39,74.48 212.4,74.64 212.4,74.73 		"/>
				<polygon class="st0" points="212.32,76.09 212.27,76.68 212.37,75.58 		"/>
				<polygon class="st0" points="212.43,74.49 212.39,74.48 212.5,74.5 		"/>
				<polygon class="st0" points="68.27,107.77 68.38,107.78 68.91,108.76 68.38,107.78 		"/>
				<polygon class="st0" points="212.89,74.22 212.77,74.21 212.75,74.21 		"/>
				<polygon class="st0" points="68.24,106.77 68.2,107.21 68,107.65 68.2,107.21 		"/>
				<polygon class="st0" points="69.02,110.2 69.33,110.46 69.54,110.55 69.33,110.46 		"/>
				<polygon class="st0" points="154.49,81.96 154.49,81.95 154.48,82.34 		"/>
				<polygon class="st0" points="67.97,107.79 68.14,107.77 68.14,107.77 		"/>
				<polygon class="st0" points="194.22,42.81 194.24,42.58 194.25,42.45 		"/>
				<polygon class="st0" points="193.5,38.58 193.74,38.96 193.67,38.86 		"/>
				<polygon class="st0" points="197.98,32.02 197.71,31.98 197.31,31.92 		"/>
				<polygon class="st0" points="73.77,111.83 73.88,111.79 73.77,111.83 		"/>
				<polygon class="st0" points="70.54,30.59 70.63,30.56 70.79,30.34 70.94,30.02 70.58,30.38 		"/>
				<polygon class="st0" points="188.97,53.33 189.14,53.42 189.11,53.41 		"/>
				<polygon class="st0" points="186.47,48.4 186.54,48.42 185.95,48.28 		"/>
				<polygon class="st0" points="193.25,47.46 193.5,47.47 193.21,47.45 		"/>
				<polygon class="st0" points="192.85,48.54 192.91,48.51 192.55,48.74 		"/>
				<polygon class="st0" points="198.41,49.12 198.1,49.18 198.94,49.03 		"/>
				<polygon class="st0" points="201.11,53.77 200.9,53.39 200.88,53.36 		"/>
				<polygon class="st0" points="204.23,41.84 204.02,41.78 203.98,41.78 		"/>
				<polygon class="st0" points="79.6,116.21 79.6,116.21 79.98,115.63 		"/>
				<polygon class="st0" points="81.43,114.97 80.83,115.05 81.43,114.97 		"/>
				<polygon class="st0" points="191.02,58.59 191.02,58.58 191.06,58.45 		"/>
				<polygon class="st0" points="186.52,49.41 186.44,48.83 186.55,49.59 		"/>
				<polygon class="st0" points="186.27,52.52 186.26,52.46 186.21,52.01 		"/>
				<polygon class="st0" points="194.03,55.8 193.95,55.52 194.11,56.06 		"/>
				<polygon class="st0" points="82.92,151.29 83.21,151.56 83.17,151.52 		"/>
				<polygon class="st0" points="227.31,79.42 224.77,79.38 227.5,79.42 		"/>
				<polygon class="st0" points="212.58,73.23 212.39,73.24 212.53,73.23 212.54,73.23 		"/>
				<polygon class="st0" points="186.93,87.76 184.19,88.89 185.4,88.39 		"/>
				<polygon class="st0" points="205.77,122.19 205.41,122.52 205.71,122.25 		"/>
				<polygon class="st0" points="166.65,99.6 166.61,99.68 166.56,99.79 		"/>
				<polygon class="st0" points="206.58,142.33 206.54,141.7 206.55,141.84 		"/>
				<polygon class="st0" points="210.25,133.2 210.24,133.18 210.32,133.4 		"/>
				<polygon class="st0" points="275.17,43.33 275.18,43.37 275.18,43.37 		"/>
				<polygon class="st0" points="311.39,38.56 311.26,38.43 311.39,38.56 		"/>
				<polygon class="st0" points="207.58,131.86 207.13,131.64 206.94,131.55 		"/>
				<polygon class="st0" points="209,121.77 210.82,121.67 209.53,121.75 		"/>
				<polygon class="st0" points="207.36,121.78 209,121.77 208.49,121.77 		"/>
				<polygon class="st0" points="183.46,117.52 185.19,117.55 183.47,117.52 		"/>
				<polygon class="st0" points="187.65,117.09 188.29,116.03 187.68,117.03 		"/>
				<polygon class="st0" points="149.72,99.94 149.91,100.1 149.73,99.94 		"/>
				<polygon class="st0" points="147.66,103.25 147.61,102.82 147.61,102.84 		"/>
				<polygon class="st0" points="162.67,106.91 162.65,106.41 162.66,106.81 		"/>
				<polygon class="st0" points="155.72,106.12 156.23,105.84 155.83,106.06 		"/>
				<polygon class="st0" points="220.44,67.17 220.6,67.31 220.54,67.26 		"/>
				<polygon class="st0" points="223.91,105.27 223.87,105.32 223.79,105.47 		"/>
				<polygon class="st0" points="46.47,100.47 46.52,100.44 46.16,100.71 		"/>
				<polygon class="st0" points="213.57,112.92 213.11,113.43 213.67,112.81 		"/>
				<polygon class="st0" points="212.3,136.14 212.03,137.1 211.97,137.35 		"/>
				<polygon class="st0" points="80.28,117.14 80.71,117.09 80.28,117.14 		"/>
				<polygon class="st0" points="223.44,67.27 223.14,67.36 223.47,67.26 		"/>
				<path class="fill-water" d="M227.99,59.2l0.42,0.54V60l0.18,0.38l0.46,0.32v0.22l0.29,0.22h0.36l0.35,0.15l0.19,0.28h-0.2l-0.19,0.14
					h-0.36l-0.4,0.34v0.35l0.05,0.28l-0.12,0.17v0.24l0.08,0.15v0.19l-0.12,0.12v0.46l-0.08,0.18l-0.09-0.16l0.09-0.29l-0.19-0.19
					l-0.1,0.1l-0.08,0.21l0.1,0.35v0.21l0.07,0.12v0.6l0.19,0.28v0.32l-0.06,0.31l0.09,0.13h0.2l0.27,0.28h0.32l0.22,0.08l0.32-0.12
					l0.31,0.2h0.2l0.09,0.3l0.2,0.25l0.68,0.27h0.31l0.81,0.23h0.4l0.9-0.25l0.67-0.09l0.78,0.07l0.3,0.06l0.1-0.35l-0.21-0.3
					l-0.13-0.35l-0.25-0.67l-0.12-0.48v-0.69V64.4v-0.39l-0.09-0.27l-0.36-0.18l-0.15-0.26h-0.2l-0.12-0.08h-0.15v0.32l-0.15-0.23
					v-0.24l0.25-0.21l0.12,0.11h0.16l0.22,0.07l0.08-0.11l-0.18-0.23l-0.16,0.07l-0.08-0.28l0.07-0.28l-0.11-0.09l-0.19,0.12
					l-0.39-0.07l-0.08,0.09l0.14,0.17v0.17l-0.46-0.44l-0.07-0.2l-0.16-0.21l-0.06-0.68l0.17-0.28l0.06-0.4l-0.29-0.45l-0.08-0.24
					l-0.22-0.17l-0.09-0.2l-0.21-0.21v-0.11v-0.35l-0.07-0.31l0.15-0.38l0.05-0.38v-0.13v-0.1l-0.09-0.06h-0.3l-0.21-0.09l-0.25-0.06
					l-0.2,0.09h-0.11l-0.11-0.23l-0.11-0.11l-0.12-0.22l-0.01-0.08h-0.09l-0.25,0.06h-0.12v-0.33v-0.27l-0.38-0.44l-0.07-0.16h-0.11
					l-0.09-0.29l-0.16-0.09l-0.09-0.21l-0.24-0.09h-0.21l-0.19-0.18v-0.13l0.11-0.14h0.15h0.39l0.11,0.06h0.16l0.11,0.06l0.14-0.12
					l0.13-0.06l0.22,0.09l0.07-0.06l-0.06-0.14h-0.27l-0.08-0.06v-0.19l-0.26-0.31v-0.14l0.13-0.08v-0.21v-0.13l0.16-0.17l0.29-0.08
					l0.24-0.09l0.2,0.1l0.27-0.07h0.22l0.12,0.1l0.12-0.07h0.18L232.2,53h0.22l0.28-0.14v-0.12l-0.19-0.07l-0.28-0.07l-0.18-0.36
					l0.05-0.3l0.17-0.08l0.11-0.12l-0.09-0.09l-0.09-0.12v-0.12l0.15-0.28v-0.2l-0.22-0.23l-0.07-0.15l0.12-0.17V50.3H232l-0.11-0.18
					V50h-0.46h-0.17l-0.18,0.05v0.09l-0.15,0.08v0.13l-0.13,0.08l-0.19-0.08v-0.11h-0.16l-0.09,0.09l-0.12-0.16v-0.2l-0.06-0.07
					l-0.1,0.09h-0.18l-0.12-0.09h-0.35l-0.19,0.2l-0.07,0.19h-0.07l-0.09-0.08h-0.13l-0.16,0.22h-0.14l-0.11,0.17l-0.23,0.19h-0.13
					v0.16l-0.11,0.1l-0.09-0.1h-0.12l-0.08,0.14h-0.19l-0.07-0.14h-0.09l-0.34-0.22l0.33,0.21l0,0v0.11v0.14h-0.2l0.11,0.11v0.15
					h-0.15l0.13,0.08v0.16h-0.22h-0.09l-0.25-0.07h-0.18l0.39,0.23V52l-0.09,0.09l-0.13-0.13h-0.21c-0.04,0.01-0.08,0.01-0.12,0h-0.21
					l0.2,0.07v0.11l-0.19,0.14h-0.18l-0.13,0.1l-0.11-0.11l-0.06,0.16l-0.11,0.06l-0.13-0.11l-0.14-0.05v0.17l-0.12,0.21l-0.06,0.31
					l-0.14,0.09l-0.09,0.29l-0.11,0.21v0.5l-0.14,0.1l-0.09,0.25l0.12,0.46h0.23h0.16l0.18,0.21l0.25,0.08v0.39l0.31,0.19l0.14-0.13
					h0.16l-0.11,0.23l-0.07,0.25l-0.14-0.06v0.24h0.18v0.14l0.08,0.19v0.39l0.2,0.23l0.09,0.39l0.51,0.62l0.72,0.59l0.12,0.08l0,0
					L227.99,59.2z"/>
				<polygon class="st0" points="223.39,103.44 223.09,103.53 222.83,103.6 		"/>
				<polygon class="st0" points="177.48,75.23 178.32,77.94 178.32,77.93 		"/>
				<polygon class="st0" points="307.96,100.22 308.13,100.14 308.28,100.06 		"/>
				<polygon class="st0" points="194.74,145.17 198.14,144.4 196.86,144.69 		"/>
				<polygon class="st0" points="207.4,151.45 207.36,151.42 207.15,151.23 		"/>
				<polygon class="st0" points="191.83,159.78 192.01,154.88 192.01,154.89 		"/>
				<polygon class="st0" points="274.79,43.27 274.62,43.27 274.56,43.19 274.62,43.27 		"/>
				<polygon class="st0" points="44.44,95.72 46.78,95.76 46.78,95.76 		"/>
				<polygon class="st0" points="208.21,157.38 208.08,157.4 207.99,157.43 		"/>
				<polygon class="st0" points="174.14,53.2 174.45,53.32 174.16,53.21 		"/>
				<polygon class="st1" points="6.23,24.5 6.08,24.64 6.28,24.77 6.53,24.53 6.39,24.22 6.17,24.31 		"/>
				<polygon class="st1" points="6.18,21.9 6.32,21.76 6.32,21.58 5.88,21.86 5.84,22.08 6.04,22.12 		"/>
				<polygon class="st1" points="5.7,19.62 5.43,19.32 5.09,19.33 5.06,19.5 5.17,19.66 5.11,19.88 5.35,19.98 5.23,20.17 5.06,20.78 
					5.05,21.11 5.23,21.15 5.38,20.95 5.49,21.04 5.67,20.93 5.52,20.7 5.63,20.59 5.63,20.29 5.77,20.23 5.81,20.59 5.94,20.55 
					6.14,20.2 6.14,19.86 5.96,19.62 		"/>
				<polygon class="st1" points="6.37,22.3 6.37,22.02 6.22,21.98 6.03,22.39 6.17,22.43 		"/>
				<polygon class="st1" points="6.18,21.4 6.22,21.23 5.79,21.19 5.57,21.41 5.7,21.63 5.93,21.72 		"/>
				<polygon class="st1" points="6.07,25.04 6.31,25.22 6.49,25 6.3,24.88 		"/>
				<polygon class="st1" points="6,23.85 6.11,23.98 6.08,24.22 6.32,24 6.11,23.71 		"/>
				<polygon class="st1" points="2.98,19.1 3.2,19.03 3.24,18.75 3.3,18.56 3.22,18.36 3.05,18.5 3.02,18.72 3.08,18.8 2.93,18.96 		
					"/>
				<polygon class="st1" points="3.18,16.72 3.04,16.98 3.22,17.33 3.15,17.59 3.32,17.72 3.16,17.93 3.39,18.21 3.63,18.23 
					3.8,18.02 3.79,17.73 3.62,17.35 3.68,17.09 4,17.66 4.01,17.93 4.27,18.22 4.44,18.19 4.46,17.81 4.59,17.67 4.46,17.46 
					4.17,17.42 4.17,17.21 3.83,16.68 3.85,16.61 4.17,16.89 4.36,17.19 4.55,17.25 4.7,17.1 4.62,16.93 4.87,16.88 4.87,16.67 
					4.58,16.44 4.36,16.52 4.25,16.67 4.17,16.5 4.3,16.33 4.3,16.12 4.03,15.97 3.67,16.05 3.62,16.19 3.48,16.24 3.37,15.98 
					3.24,16.27 3.28,16.59 3.44,16.7 3.33,16.86 		"/>
				<polygon class="st1" points="6.45,23.83 6.95,23.58 6.95,23.7 6.68,23.9 6.5,24.2 6.63,24.33 7.04,24 7.39,23.5 7.3,23.27 
					7.41,22.97 7.3,22.69 6.99,22.7 6.98,22.83 6.71,22.95 6.57,23.32 6.59,23.45 6.37,23.67 		"/>
				<polygon class="st1" points="6.19,20.37 5.94,20.75 5.94,20.92 6.04,21.04 6.36,20.95 6.52,20.7 6.39,20.27 		"/>
				<polygon class="st1" points="5.34,15.94 5.16,16.3 5.1,17.14 4.84,17.5 4.79,17.95 5.01,18.06 4.89,18.23 4.98,18.39 4.67,18.39 
					4.5,18.55 4.48,18.85 4.33,19.14 4.47,19.33 4.69,19.13 5.08,18.9 5.15,18.5 5.35,18.59 5.49,18.47 5.52,18.24 5.6,18.07 
					5.62,17.15 5.68,16.89 5.79,17.45 5.73,18.05 5.85,18.14 6.01,17.75 5.94,16.77 5.77,16.55 5.43,16.33 5.43,16.08 		"/>
				<polygon class="st1" points="3.97,15.55 3.72,15.77 3.87,15.85 4.06,15.7 		"/>
				<polygon class="st1" points="4.39,18.39 4.19,18.38 4.32,18.58 		"/>
				<polygon class="st1" points="4.67,24.41 4.57,24.26 4.51,24.44 4.6,24.56 		"/>
				<polygon class="st1" points="4.37,20.72 4.36,20.9 4.22,21.04 4.07,20.92 3.96,21.11 3.98,21.26 3.86,21.47 3.83,21.66 
					3.93,21.79 4.09,21.32 4.17,21.46 4.08,21.71 4.35,21.63 4.48,21.43 4.48,21.2 4.88,20.78 5.08,20.24 4.99,20.11 4.86,20.26 
					4.83,20.1 4.93,19.88 4.7,19.56 4.58,19.56 4.58,19.84 4.35,19.74 4.24,19.9 4.21,20.18 4.35,20.3 4.16,20.57 		"/>
				<polygon class="st1" points="5.77,23.88 5.64,23.64 5.33,23.43 5.45,23.18 5.52,23.24 5.71,23.22 5.71,23.03 5.49,22.79 
					5.67,22.77 5.67,22.37 5.36,22.19 5.29,22.23 5.14,22.07 5.2,21.91 5.37,21.66 5.2,21.37 4.97,21.32 4.82,21.46 5,21.68 
					5.07,21.94 4.94,22.31 4.96,22.51 4.9,22.77 4.64,22.83 4.57,22.95 4.63,23.06 4.79,23.01 4.94,23.05 4.94,23.18 4.67,23.38 
					4.67,23.5 4.6,23.68 4.46,23.68 4.36,23.83 4.44,23.96 4.63,23.96 4.74,24.09 4.82,23.95 4.99,23.91 5.1,24.04 4.91,24.16 
					4.86,24.3 5,24.47 4.83,24.63 4.79,24.83 5.04,25.03 4.96,25.26 5.09,25.37 5.32,25.36 5.46,25.22 5.35,25.03 5.47,24.92 
					5.36,24.78 5.25,24.77 5.36,24.56 5.52,24.52 5.76,24.35 5.76,24.16 5.66,24.1 5.47,24.13 5.5,24.04 		"/>
				<polygon class="st1" points="8.6,22.79 8.7,22.74 8.69,22.61 8.75,22.51 8.69,22.36 8.55,22.29 8.53,22.02 8.39,21.76 8.11,21.56 
					7.93,21.43 7.87,21.25 7.62,20.91 7.43,20.83 7.2,20.83 7.2,20.73 7.29,20.6 7.25,20.4 7.13,20.29 7.07,20.13 7.22,20 7.32,19.97 
					7.28,19.85 7.13,19.75 6.98,19.74 6.98,19.59 7.2,19.43 7.16,18.45 7.17,17.49 7.26,16.71 7.19,16.48 7.16,16.23 7.28,15.98 
					7.24,15.74 7.12,15.52 7.07,15.04 6.77,14.7 6.67,14.2 6.74,13.97 6.46,13.19 6.51,13 6.72,12.64 6.65,12.44 6.64,12.19 
					6.36,11.96 5.95,11.99 5.48,12.13 5.38,12.19 4.89,12.35 4.59,12.65 4.21,13.22 3.88,13.39 3.44,13.45 2.92,13.54 2.82,13.56 
					2.83,13.34 3.08,12.98 2.94,12.63 2.55,11.08 2.31,10.38 2.2,10.05 2.48,9.46 1.81,9.37 1.29,9.65 1.01,9.51 0.13,9.5 0.13,10.85 
					0.43,10.95 0.92,10.83 1.14,10.75 1.21,10.89 1.36,10.68 1.71,10.43 1.85,10.44 1.74,10.6 1.49,10.8 1.44,11.27 1.32,11.55 
					1.15,11.58 0.86,11.42 0.77,11.46 0.95,11.78 1.02,12.04 1.19,12.17 1.41,12.1 1.57,12.19 1.49,12.36 1.33,12.36 1.33,12.46 
					1.72,12.83 1.85,12.76 2.15,12.79 2.28,12.53 2.59,11.97 2.44,12.41 2.44,12.71 2.38,12.89 2.23,12.98 2.04,13.2 2.08,13.35 
					2.29,13.5 2.19,13.64 2.18,14.26 2.32,14.39 2.5,14.4 2.43,14.63 2.51,14.86 2.91,15.32 3.06,15.39 3.08,15.53 3.23,15.41 
					3.38,15.6 3.57,15.53 3.48,15.41 3.56,15.3 3.67,15.43 3.83,15.46 3.92,15.25 3.77,14.87 3.62,14.88 3.52,14.94 3.44,14.85 
					3.62,14.61 3.6,14.43 3.52,14.25 3.34,14.17 3.33,14.03 3.43,13.91 3.46,13.6 3.62,13.62 3.64,13.9 3.73,14.06 3.88,13.81 
					3.96,13.96 4.06,14.15 3.96,14.41 4.02,14.62 4.17,14.65 4.4,14.43 4.52,14.41 4.44,14.63 4.24,14.8 4.25,15.01 4.32,15.25 
					4.22,15.53 4.3,15.67 4.58,15.75 4.62,15.63 4.76,15.41 4.79,15.61 4.71,15.71 4.8,16.05 4.97,16.17 5.21,15.73 5.24,15.39 
					5.33,15.19 5.38,14.54 5.58,13.96 5.58,13.4 5.51,13.01 5.41,12.81 5.43,12.77 5.53,12.81 5.66,13.15 5.8,13.2 5.94,12.87 
					6.22,12.67 6.04,13.04 5.93,13.51 6.01,13.89 5.75,14.38 5.72,14.7 5.81,14.87 5.64,15.03 5.62,15.43 5.67,15.65 5.72,15.92 
					5.96,16.14 6,16.46 6.12,16.46 6.14,16.75 6.34,16.91 6.48,16.81 6.63,16.89 6.85,16.8 7.18,16.78 7.17,16.86 6.81,17.09 
					6.68,17.15 6.68,17.27 6.85,17.4 6.74,17.5 6.53,17.53 6.55,17.67 6.74,17.98 6.74,18.24 6.63,18.29 6.42,18.13 6.33,17.92 
					6.26,18.01 6.33,18.18 6.19,18.39 6.2,18.68 6.27,18.77 6.18,18.91 6,18.94 5.88,19.14 5.92,19.25 6.08,19.27 6.23,19.25 
					6.3,19.47 6.48,19.64 6.64,19.62 6.78,19.73 6.79,19.82 6.57,19.8 6.48,19.88 6.53,20.02 6.72,20.15 6.81,20.38 7.03,20.57 
					7.16,20.57 7,20.64 6.84,20.66 6.68,20.88 6.71,21.17 6.94,21.56 7.14,21.7 7.44,21.7 7.59,21.75 7.31,21.91 7.02,21.85 
					6.83,21.9 6.67,22.25 6.26,22.69 5.96,22.93 5.96,23.19 6.06,23.45 6.35,23.2 6.51,22.82 6.53,22.71 6.75,22.66 7.06,22.35 
					7.12,22.45 7.32,22.43 7.65,22.41 7.45,22.64 7.49,22.73 7.8,22.74 7.8,22.84 7.53,23.1 7.53,23.33 7.57,23.51 7.39,23.82 
					7.3,24.01 7.37,24.15 7.43,24.28 7.24,24.25 7,24.27 6.81,24.48 6.82,24.58 7.03,24.61 7.15,24.55 7.41,24.56 7.43,24.64 
					7.21,24.83 7.03,24.81 6.89,24.82 6.76,24.93 6.69,25.24 6.83,25.51 7,25.41 7.03,25.23 7.21,25.26 7.45,25.16 7.79,24.77 
					8.07,24.35 8.18,23.8 8.48,23.16 8.59,23.08 8.59,23.08 8.6,23 		"/>
				<polygon class="st1" points="3.59,19.23 3.46,19.41 3.23,19.45 3.22,19.57 3.51,19.65 3.45,19.77 3.33,19.84 3.35,20.01 
					3.47,20.01 3.63,19.92 3.66,20.05 3.53,20.16 3.35,20.19 3.24,20.4 3.32,20.75 3.45,20.85 3.4,21.06 3.43,21.25 3.55,21.19 
					3.62,20.98 3.66,20.65 3.77,20.3 3.92,20.13 3.99,19.66 4.11,19.54 4.19,19.1 4.16,18.63 4.05,18.27 3.9,18.21 3.78,18.36 
					3.54,18.45 3.58,18.62 3.78,18.8 3.62,18.96 		"/>
				<polygon class="st1" points="4.79,22.04 4.94,21.87 4.77,21.72 4.54,21.8 4.33,22.11 4.46,22.17 4.64,22.04 		"/>
				<polygon class="st1" points="0.13,0.36 0.13,9.5 5.13,0.36 		"/>
				<polygon class="st1" points="3.71,23.45 3.68,23.8 3.91,23.52 		"/>
				<polygon class="st1" points="3.52,21.98 3.58,22.19 3.72,22.07 		"/>
				<polygon class="st1" points="4.08,23.65 3.9,23.86 4.09,23.95 		"/>
				<polygon class="st1" points="4.13,24.09 4.02,24.15 4.12,24.4 4.34,24.31 4.26,24.11 		"/>
				<polygon class="st1" points="4.53,22.59 4.43,22.43 4.27,22.53 4.39,22.69 		"/>
				<polygon class="st1" points="4.12,25.28 4.21,25.39 4.42,25.06 4.23,24.74 4.27,24.59 4.09,24.48 3.98,24.52 3.91,24.7 
					4.11,25.03 		"/>
				<polygon class="st1" points="6.56,22.05 6.72,21.86 6.73,21.57 6.64,21.49 6.51,21.71 6.42,21.85 		"/>
				<polygon class="st1" points="226.55,138.35 226.81,137.94 226.65,137.73 226.49,137.77 226.52,137.99 226.47,138.23 		"/>
				<polygon class="st1" points="225.77,137.38 225.88,137.24 225.75,136.97 225.63,137.08 225.42,137.13 225.59,137.22 		"/>
				<polygon class="st1" points="224.38,137.37 224.62,137.39 224.5,137.23 224.35,137.21 224.29,137.28 		"/>
				<polygon class="st1" points="224.21,135.85 224.06,135.84 223.86,136.17 223.93,136.34 223.96,136.65 224.09,136.7 224.22,136.67 
					224.32,136.52 224.23,136.26 224.34,136.12 		"/>
				<polygon class="st1" points="228.6,133.14 228.4,133.06 228.25,133.24 228.39,133.31 228.66,133.26 228.72,133.17 		"/>
				<polygon class="st1" points="240.7,126.97 240.86,127.14 241.15,127.04 241.07,126.89 240.84,126.79 		"/>
				<polygon class="st1" points="228.63,133.75 228.69,133.63 228.6,133.64 		"/>
				<path class="st1" d="M293.13,110.95l0.11,0.28l0.15-0.19l-0.08-0.23v-0.21l-0.15-0.14l-0.19,0.19v0.26L293.13,110.95z"/>
				<path class="st1" d="M291,105.81v0.24h0.26l0.14-0.35l-0.09-0.31l-0.28,0.14L291,105.81z"/>
				<polygon class="st1" points="290.81,104.6 290.7,104.41 290.51,104.52 		"/>
				<polygon class="st1" points="291.55,103.52 291.55,103.39 291.18,103.52 291.18,103.91 291.09,104.08 291.24,104.39 
					291.16,104.62 291.24,104.8 291.44,104.37 291.4,104.12 291.31,103.94 291.39,103.65 		"/>
				<polygon class="st1" points="292.93,109.25 292.92,109.04 292.82,108.94 292.71,109.17 292.82,109.36 		"/>
				<polygon class="st1" points="292.43,109.47 292.49,109.65 292.67,109.77 292.8,109.68 292.66,109.42 		"/>
				<polygon class="st1" points="293.17,110.1 293.02,110.09 292.87,110.27 292.96,110.35 		"/>
				<polygon class="st1" points="291.78,107.69 291.53,107.77 291.7,107.86 		"/>
				<polygon class="st1" points="291.39,103.22 291.69,102.99 291.69,102.61 291.5,102.49 291.71,102.19 291.72,101.91 291.63,101.81 
					291.72,101.59 291.66,101.43 291.39,101.73 291.44,102.18 291.37,102.34 291.41,102.52 291.26,103.11 		"/>
				<path class="st1" d="M292.13,108.77l0.08,0.2l0.22,0.21l-0.11-0.36L292.13,108.77z"/>
				<polygon class="st1" points="362.49,100.44 362.4,100.27 362.16,100.42 362.33,100.46 		"/>
				<polygon class="st1" points="361.9,101.26 361.81,101.19 361.54,101.26 361.42,101.48 361.37,101.65 361.48,101.74 361.67,101.69 
							"/>
				<polygon class="st1" points="362.91,98.51 362.65,98.72 362.86,99.11 362.85,98.83 362.99,98.66 		"/>
				<polygon class="st1" points="225.38,3.52 225.42,3.39 225.22,3.28 225.09,3.37 225.21,3.52 		"/>
				<polygon class="st1" points="216.74,4.48 216.83,4.42 217.03,4.53 216.96,4.72 217.16,4.72 217.37,4.53 217.65,4.51 218.01,4.21 
					218.25,3.91 218.25,3.44 218.42,3.27 218.52,3.5 218.44,3.87 218.63,3.53 218.63,3.22 218.38,2.93 217.41,2.52 216.96,2.44 
					216.68,2.62 216.51,3.17 216.5,3.84 216.67,4.14 		"/>
				<polygon class="st1" points="219.96,4.96 220.26,4.9 220.4,4.8 220.06,4.76 219.81,4.89 219.79,5.04 219.89,5.04 		"/>
				<polygon class="st1" points="223.78,5.06 223.97,4.81 223.96,4.61 223.78,4.65 223.68,4.82 223.69,4.96 		"/>
				<polygon class="st1" points="228.26,0.79 228.61,0.85 228.75,0.67 229.03,0.74 229.17,0.48 229.15,0.36 228.11,0.36 228.16,0.52 
					228.11,0.64 		"/>
				<path class="st1" d="M228.58,2.45c0.05-0.07,0.11-0.14,0.17-0.21h-0.22L228.58,2.45z"/>
				<polygon class="st1" points="224.06,3.42 224.18,3.27 224.05,3.23 223.86,3.33 223.9,3.41 		"/>
				<polygon class="st1" points="353.56,47.01 353.68,47.05 353.92,46.89 353.96,46.69 353.76,46.77 		"/>
				<polygon class="st1" points="226.65,3.57 227.03,3.45 227.13,3.32 226.88,3.25 226.53,3.43 226.39,3.65 226.5,3.69 		"/>
				<polygon class="st1" points="224.57,3.49 224.82,3.55 224.71,3.28 224.47,3.18 224.27,3.31 224.45,3.37 		"/>
				<polygon class="st1" points="228.34,2.05 228.29,1.75 227.86,1.52 227.69,1.34 227.63,1.48 227.9,1.74 		"/>
				<polygon class="st1" points="227.41,1.1 227.27,1.03 227.26,1.36 227.37,1.31 		"/>
				<polygon class="st1" points="223.17,5.01 223.37,5.04 223.49,4.88 223.4,4.75 223.26,4.8 		"/>
				<polygon class="st1" points="212.06,10.38 212.04,10.24 211.9,10.07 211.76,10.09 211.75,10.23 211.93,10.4 		"/>
				<polygon class="st1" points="204.86,14.35 204.69,14.31 204.51,14.49 204.52,14.68 204.72,14.86 204.78,14.98 204.9,14.97 
					204.93,14.85 204.8,14.62 204.89,14.51 		"/>
				<path class="st1" d="M198.51,25.94l-0.25-0.24c-0.04,0.08-0.07,0.16-0.1,0.24l0.27,0.14L198.51,25.94z"/>
				<polygon class="st1" points="241.71,7.13 241.52,7.06 241.34,7.06 241.36,7.18 241.54,7.24 241.56,7.4 241.85,7.59 242.13,7.5 
					242.23,7.38 242.13,7.13 241.92,7.07 		"/>
				<polygon class="st1" points="358.49,39.4 358.53,38.95 358.44,38.93 358.41,39.16 358.3,39.51 358.39,39.54 		"/>
				<polygon class="st1" points="358.79,38.4 358.66,38.34 358.61,38.4 358.64,38.5 358.76,38.54 		"/>
				<polygon class="st1" points="356.48,42.38 356.68,42.05 356.85,41.93 356.86,41.66 356.94,41.37 357.22,40.99 357.08,41.06 
					356.81,41.11 356.68,41.38 356.57,41.48 356.49,41.73 356.39,41.84 356.34,42 356.14,42.22 356.05,42.61 356.19,42.66 		"/>
				<polygon class="st1" points="359.41,34.78 359.36,35.12 359.45,35.06 359.56,34.93 359.57,34.69 359.49,34.58 		"/>
				<polygon class="st1" points="360.63,30.02 360.73,29.89 360.68,29.66 360.53,29.49 360.34,29.64 360.34,29.82 360.51,30.02 		"/>
				<polygon class="st1" points="359.74,30.83 359.59,31.09 359.43,31.1 359.4,31.18 359.61,31.42 359.61,31.62 359.45,31.71 
					359.51,31.79 359.76,31.78 359.85,31.92 359.94,31.94 359.95,31.63 359.99,31.42 360.21,31.3 360.36,31.06 360.35,30.78 
					360.39,30.56 360.54,30.43 360.46,30.17 360.02,29.79 359.97,30.01 360.01,30.48 359.97,30.75 		"/>
				<polygon class="st1" points="359.78,34.05 359.74,33.88 359.54,33.81 359.46,33.86 359.51,33.98 359.65,34.1 		"/>
				<polygon class="st1" points="353.29,11.5 353.02,11.75 353.04,11.94 353.39,11.94 353.9,12.65 353.87,13.31 353.76,13.48 
					353.91,13.66 353.69,13.74 353.62,14.21 353.32,14.57 353.26,15.12 353.49,15.6 353.61,16.54 353.98,17.13 353.98,17.6 
					354.57,18.95 355.29,20.39 356.04,21.56 356.38,21.95 356.4,22.36 357.36,23.48 358.4,25.36 358.88,25.61 359.24,25.62 
					359.45,25.52 359.35,25.74 359.12,25.86 358.93,25.84 359.28,26.4 359.8,27.55 359.86,28.03 360.15,28.45 360.68,28.51 
					360.76,28.7 360.75,28.97 360.82,29.18 360.77,29.46 361.06,28.84 361.2,28.25 361.28,28.2 361.31,27.92 361.64,27.63 
					361.7,27.39 361.64,27.27 361.75,27.04 361.84,26.46 361.69,26.21 361.72,25.81 361.94,25.61 361.7,25.35 361.55,25.44 
					361.37,25.39 361.46,25.19 361.28,24.8 361.43,24.85 361.54,24.72 361.27,24.45 361.33,24.28 361.4,23.98 361.12,24 360.95,23.86 
					361.1,23.6 361.36,23.81 361.76,23.44 361.96,23.48 362.19,23.27 362.44,23.11 362.54,23.2 362.84,23.23 362.65,22.96 
					362.26,22.77 362.28,22.43 361.91,22.23 361.66,21.45 361.82,20.77 361.6,20.53 361.77,20.37 361.82,20.01 362.07,19.49 
					361.95,19.35 362.16,19.41 362.6,19.13 362.66,19.27 363.46,18.97 363.43,18.62 363.61,18.4 363.3,18.23 362.84,17.59 
					362.64,17.59 361.94,16.55 361.96,16.33 361.77,16.13 361.74,15.18 361.8,15.06 361.69,14.63 361.88,14.32 361.88,14.05 
					361.57,14.12 361.49,13.96 361.75,13.58 362.02,13.53 362.02,13.32 361.92,13.22 362.1,13.06 362.17,13.31 362.14,13.65 
					362.02,13.93 362.05,14.31 362.45,14.47 362.8,14.72 362.99,14.65 363.01,14.28 363.13,14.11 362.92,13.68 362.31,13.15 
					362.32,12.53 362.04,12.38 361.96,12.31 361.88,12.42 361.67,12.59 361.68,12.73 361.54,12.83 361.25,12.63 361.27,12.15 
					361.07,11.85 360.83,11.35 361.02,11.12 361.12,11.03 361.04,10.81 361.21,10.56 361.04,10.36 361.1,10.2 361.09,9.96 360.9,9.86 
					360.67,9.91 360.21,9.56 359.93,9.54 359.74,9.7 359.76,9.89 360.1,10.27 360.06,10.51 359.94,10.6 359.61,10.45 359.25,9.97 
					359.01,9.72 358.8,9.58 358.9,9.44 358.69,8.96 358.68,8.68 358.69,8.52 358.55,8.24 358.65,8.05 358.51,7.65 358.68,7.43 
					358.65,7.19 358.73,6.88 358.73,6.6 358.58,6.69 358.32,6.4 358.35,6.29 358.54,6.22 358.79,6.39 358.81,6.27 358.61,6.11 
					358.39,5.91 358.48,5.73 358.58,5.73 358.53,5.56 358.33,5.34 358.05,5.25 357.98,5.07 358.11,5.02 358.05,4.7 357.8,4.42 
					357.84,4.2 357.93,3.96 358.06,3.86 357.88,3.6 357.92,3.42 358.11,3.42 358.39,3.57 358.54,3.52 358.65,3.13 358.86,3.1 
					358.99,3.3 359.13,3.31 359.34,3.6 359.62,3 359.33,2.89 359.38,2.62 359.59,2.49 359.92,1.92 359.95,1.61 360.15,1.88 
					360.4,2.01 360.42,2.3 360.75,3.17 360.92,3.39 361.06,3.27 361.15,2.56 361.24,2.33 361.18,2.02 361.33,1.79 361.13,1.43 
					361.39,1.57 361.58,1.39 361.71,0.89 361.98,0.88 362.26,0.52 362.55,0.43 362.69,0.55 362.98,0.36 356.04,0.36 356,0.44 
					355.99,0.96 356.2,1.12 356.38,1.01 356.63,1.04 356.7,1.15 356.64,1.32 356.48,1.32 356.23,1.51 356.14,1.51 355.81,1.83 
					355.77,2.09 355.46,2.28 355.41,2.41 355.2,2.49 355.17,2.75 355.02,2.96 355.13,3.29 355.33,3.23 355.31,3.6 355.07,4.02 
					355.12,4.2 355.26,4.28 355.17,4.86 355.26,5.29 355.13,5.48 354.82,5.6 354.78,5.87 354.9,5.97 354.83,6.49 354.75,6.62 
					354.8,6.83 355.05,7.08 354.84,7.08 354.76,7.53 354.85,7.68 354.85,8.02 354.63,8.26 354.79,8.55 354.78,9.08 354.95,9.58 
					354.53,10.39 354.76,10.71 354.5,10.63 354.04,10.7 354.04,11.22 354.11,11.43 353.82,11.76 		"/>
				<path class="st1" d="M219.03,60.05l0.13-0.16l0.35,0.13h0.16l0.2-0.17l0.22,0.06l0.57,0.48h0.24l0,0l0.42-0.15l0.6-0.13h0.18h0.76
					l0.08,0.07v-0.22l0.51-0.2l0.76,0.43h0.5l0.49,0.26l0.08-0.49l-0.2-0.27l-0.35-0.22l0.14-0.49h0.39l0.62,0.51l0.18,0.33l0.62,0.06
					l0.12-0.23l0.39-0.22l0.46-0.55l0,0l-0.12-0.08l-0.72-0.59l-0.51-0.62l-0.09-0.39l-0.2-0.23v-0.39l-0.08-0.19v-0.14h-0.18v-0.24
					l0.14,0.06l0.07-0.25l0.11-0.23h-0.16l-0.14,0.13l-0.31-0.19v-0.45L225.21,55l-0.18-0.21h-0.16h-0.23l-0.12-0.46l0.09-0.25
					l0.14-0.1V53.6l0.11-0.21l0.09-0.29l0.14-0.09l0.06-0.31l0.12-0.21v-0.17l0.14,0.05l0.13,0.11l0.11-0.06l0.06-0.16l0.11,0.11
					l0.13-0.1h0.18l0.19-0.14v-0.11l-0.2-0.07h0.13c0.04,0.01,0.08,0.01,0.12,0h0.21l0.13,0.13l0.09-0.09v-0.15l-0.47-0.24h0.18
					l0.25,0.07h0.09h0.22v-0.16l-0.13-0.08h0.19v-0.15l-0.11-0.11h0.2v-0.14v-0.11l0,0l-0.33-0.21l-0.35,0.11l-0.5-0.33v-0.22h0.52
					l-0.55-0.92l-0.62-0.58l-0.88-0.24l-0.1,0.2l-0.44-0.37l0.08-0.2l-0.23-0.38l-0.55-0.22l0.2-0.46l0.12-0.84l-0.21-0.21l-0.07-0.66
					l0.27-0.13l0.36-0.44v-0.34l0.19-0.26l0.72,0.66l0.09,0.24l0.41,0.25h0.42v-0.41l0.16-0.13l-0.34-1.23h0.42h0.44v-0.32l-0.2-0.25
					l0.09-0.31l0.4-0.25h0.19l0.12-0.36l0.21-0.16l0.28,0.08v-0.24l-0.07-0.25l0.07-0.17l0.4,0.23l0.32,0.14v0.17l-0.18,0.23
					l0.13,0.13l0.26-0.14l0.06-0.21l0.19-0.11v0.23l0.17-0.19v-0.16h0.27l0.28-0.19h0.24l0.15,0.36l0.3,0.2l0.49-0.15h0.22l0.14,0.21
					h0.15l0.28,0.35h0.29l0.21,0.28l0.38,0.28h0.22l0.1,0.19v0.31l0.16,0.05l0.17-0.26v-0.34l0.27-0.16l0.18,0.26l0.52,0.08l0.15,0.25
					l0.22,0.09l0.33-0.25v-0.51h0.28v-0.25l0.21-0.07l0.16,0.21l0.12-0.23l0.31-0.05l0.39,0.36l0.08,0.15h0.38l-0.05-0.33l0.21-0.07
					h0.3l0.15-0.19l0.32,0.18l0.19,0.1l-0.08,0.18l-0.21,0.11l0.27,0.31l0.24,0.08l0.12-0.08l0.18,0.11h0.41l0.48,0.26l0.3-0.06
					l0.14-0.28v-0.26l0.13-0.13l0.42,0.25h0.38l0.46-0.15l0.23-0.29l-0.06-1l-0.13-0.09h-0.4l-0.25-0.21v-0.14l-0.3-0.07l-0.19-0.18
					h-0.32v-0.17l-0.09-0.17v-0.14h0.24l0.05-0.29l0.21-0.24l-0.07-0.31h-0.2V39.3l0.3-0.44l0.31-0.28l0.56-0.06l0.23,0.08l0.15-0.11
					v-0.27l-0.26-0.08l-0.21-0.22h-0.22l-0.16,0.13l-0.28-0.12h-0.34v-0.17l0.12-0.11h0.31l-0.11-0.29h-0.34l-0.24-0.07l0.13-0.14
					l-0.15-0.32l0.1-0.09h0.29l0.14-0.16h0.18l0.09,0.14h0.31l0.24,0.17l0.11-0.14v-0.16l0.23-0.15h0.25l0.15,0.25l0.13-0.18v-0.19
					l0.47-0.15h0.31l0.34-0.16h0.36l0.07-0.12l0.36-0.22h0.33l0.21-0.15h0.2l0.18,0.08l0.11-0.1v-0.28l0.16-0.14h0.29v-0.17l0.17-0.15
					l0.15,0.14h0.19l0.26-0.15l0.3-0.1l0.57-0.39h0.13l0.13-0.08l0.32-0.06l0.18-0.25l0.18,0.05l0.36-0.08V33.5l-0.13-0.2l0.15-0.08
					h0.36l0.08-0.27l0.24-0.13h0.17l0.2-0.07l0.33,0.14h0.37l0.33,0.22h0.32l0.29-0.13h0.28l0.12,0.33l0.1,0.08l0.1,0.28l0.19,0.24
					l0.18,0.09v0.16l-0.06,0.23v0.25v0.11l-0.21,0.06l0.12,0.25l0.16,0.12l0.3-0.18l0.21,0.17l0.15-0.06l0.05-0.26l0.17-0.07
					l0.08,0.27h0.17v-0.21l-0.11-0.27l0.09-0.06l0.46,0.34l0.06,0.43l0.17,0.34h0.16l0.2-0.21l-0.15-0.07l-0.08-0.15l0.3-0.07
					l0.51,0.25h0.18l0.2-0.17l0.15,0.08l-0.12,0.27l-0.16,0.15v0.35l0.18,0.24h0.19l0.15-0.19l0.31-0.08l0.54,0.13l0.14,0.09
					l0.16-0.12l-0.05-0.31l0.25-0.09h0.4l0.25-0.18l0.11-0.23l0.21-0.17v-0.2l0.3-0.29l0.22-0.08l0.2-0.21l0.3-0.08l0.34-0.11
					l0.16,0.09v0.24l-0.22,0.25l-0.21,0.06l0.1,0.2l2.43,1.82l3.32,4.16l0.33-0.06l0.22-0.14l0.06-0.16l-0.07-0.06v-0.3l0.21-0.1
					l0.39,0.18v0.19v0.18l0.3,0.09l0.2,0.2h0.24l0.18-0.12h0.23l0.35,0.19l0.29-0.13l0.22,0.05l0.27-0.1l0.06-0.13l-0.09-0.14
					l0.05-0.14l0.45-0.06h0.48l0.41,0.1l0.4,0.3l0.22,0.39l0.14,0.31h0.13l0.29,0.08l0.31,0.2h0.1l0.2,0.09v0.16l-0.05,0.13v0.22
					l0.08,0.18l0.13,0.12v0.07h0.13l0.27,0.11l0.2,0.1l0.07-0.13l0.22-0.11l0.64-0.05l0.29-0.08l0.14-0.24l0.26-0.14l0.15,0.07
					l-0.12,0.33l0.08,0.22h0.19l0.3,0.26l0.4,0.14l0.07,0.08h0.17l0.27,0.1H275l0,0l0.21-0.49l0.24-0.13h0.63l0.08-0.14l0.24-0.25
					l0.43-0.15V42l0.09-0.27l0.35-0.17V41.3l0.23-0.22h0.22l0.19-0.27l0.11-0.1l0.11-0.11v-0.2l0.09-0.11l0.44,0.12l0.19-0.09
					l0.13-0.35l0.22-0.09l0.48-0.06l0.26-0.07h0.19h0.32l0.2-0.12h0.07l0.16,0.22v0.16l0.16,0.16h0.28l0.15-0.05h0.24l0.2-0.13h0.43
					l0.09,0.21l0.05,0.22l0.08,0.18l0.66,0.38l0.25,0.2l0.49,0.23l0.17-0.1l0.28-0.1L284.7,41h0.23l0.26,0.07l0.2,0.14l0.21-0.06h0.59
					l0.22,0.1h0.26l0.05-0.06h0.26l0.46-0.05l0.25-0.41l-0.15-0.17l-0.27-0.18V39.9l0.08-0.44l-0.05-0.18l-0.25-0.08l-0.14-0.18
					l-0.4-0.11l-0.1-0.33v-0.66l0.27-0.31V37.4l0.14-0.22l0.23-0.08h0.13l0.1-0.22l-0.08-0.23v-0.21l0.17-0.15h0.26l0.18,0.13
					l0.36,0.09l0.36,0.17v0.09l0.31,0.11h0.34h0.49l0.18,0.12l0.13,0.12h0.34l0.19,0.1h0.24h0.57l0.21,0.08l0.1,0.22v0.17l0.14,0.19
					v0.19l0.12,0.15l0.14,0.3v0.24l0.16,0.14h0.17l0.27,0.24l0.08,0.15l0.4,0.11l0.41,0.22h0.19l0.1-0.09h0.41l0.19-0.13h0.2
					l0.16,0.06l0.18-0.06l0.23-0.25l0.39-0.12h0.53l0.28-0.17h0.35l0.34-0.1l0.3,0.17h0.4h0.53l0.27,0.39l0.48,0.18h0.39l0.28-0.06
					l0.14,0.12l0.14,0.43l0.28,0.19l0.16,0.09h0.18l0.23,0.26h0.28h0.61l0.53,0.15h0.86l0.34-0.05l0.14-0.1h0.3l0.26,0.13h0.15
					l0.22-0.33l0.5-0.29h0.31l0.22-0.25h0.22h0.62l0.27-0.25l0.08-0.26v-0.12l0.17-0.27l0.28-0.12l0.2-0.21l0.1-0.28l0.21-0.2h0.23
					l0.09,0.08l0.4-0.11h0.25l0.32,0.21l0.12,0.34l0.2,0.08l0.26-0.14l0.13,0.11h0.25l0.3-0.17v-0.14l0.45-0.08l0.5,0.16l0.13,0.13
					l0.15-0.05h0.19v0.1h0.24l0.4,0.06l0.19,0.16h0.15l0.65-0.61l0.3-0.22l0.49-0.08l0.21-0.21l0.07-0.26l-0.05-0.27l-0.1-0.07
					l-0.11,0.08l-0.1-0.08h-0.13v-0.38l0.08-0.11v-0.39l-0.1-0.24l0.05-0.16l0.16-0.09v-0.25l-0.16-0.17v-0.29l0.05-0.15l-0.14-0.22
					v-0.22l0.16-0.28l0.16-0.13l0.06-0.31l0.18-0.27l0.16-0.12v-0.33l-0.05-0.16V32.6l-0.2-0.15l-0.11-0.25l-0.19-0.33h-0.17
					l-0.18,0.08l-0.31,0.19h-0.13l-0.09-0.11V31.6l0.09-0.12v-0.13l0.11-0.14l0.07-0.25l0.2-0.24V30.6l0.14-0.13h0.36l0.16-0.06h0.18
					l0,0h0.2l0.2-0.09l0.11-0.21h0.23l0.16-0.17l0.29,0.05h0.17h0.28l0.12-0.11h0.1l0.08-0.2h0.39h0.07H317h0.21l0.18,0.13h0.43
					l0.18,0.15l0.05,0.11h0.31l0.17-0.05l0.09,0.08l0.25,0.12l0.1-0.05v-0.16l0.13-0.08l0.12,0.05h0.19l0.1-0.05l0.14,0.15h0.13
					l0.18,0.07l0.08,0.12v0.14v0.14h0.15l0.07,0.1l0.13-0.1h0.19v0.13l-0.07,0.13l0.06,0.12l0.23,0.06h0.13l0.09,0.09v0.13l0.13,0.07
					l0.09,0.16v0.18l0.06,0.16v0.13l0.06,0.09h0.34v0.15l-0.07,0.18v0.15l0.3,0.19l0.12,0.22l0.16,0.21l0.05,0.2l0.14,0.07l0.08,0.22
					l0.17,0.13v0.11v0.16h0.08l0.14-0.06l0.12,0.21v0.16l0.25,0.35l0.49,0.31l0.09,0.25l0.05,0.28l0.1,0.09v0.27l0.16,0.08h0.15
					l0.05,0.24v0.18l0.14,0.27l0.3,0.31l0.23,0.08l0.09,0.17h0.18l0.14-0.05l0.13,0.08l0.11-0.06h0.28l0.15-0.12h0.18v0.07l-0.1,0.12
					l0.08,0.08h0.31l0.13,0.07l0.09,0.11l0.17,0.11v-0.11l0.14-0.05h0.14v-0.16h0.14l0.1,0.09l0.06,0.15l0.14,0.17h0.14v0.13
					l0.15,0.11h0.07l0.12,0.13v0.13l0.3,0.13l0.06,0.06h0.14l0.49,0.23h0.19h0.14h0.16l0.14-0.11h0.11h0.1v0.17l-0.11,0.17v0.19v0.15
					h0.27l0.06,0.24l0.08,0.22v0.25l-0.07,0.08v0.19l0.26,0.33l0.12,0.07l0.21,0.27l0.07,0.14l0.21-0.06l0.18-0.13h0.19l0.13,0.17
					l0.06,0.18l0.17-0.06l0.11-0.11L332.1,41l0.13-0.05l0.38-0.07l0.17-0.16l0.15-0.06v-0.15l0.06-0.25l0.18-0.09v-0.22l0.08-0.19
					h0.17h0.27l0.08-0.28h0.14h0.13v-0.21l0.15-0.13h0.22l0.14-0.14l0.25,0.1l0.15,0.12h0.18l0.08,0.14l0.13,0.25l-0.13,0.12
					l0.05,0.14l0.22,0.24v0.2l0.13,0.13l0.16,0.1l-0.06,0.29v0.23v0.1h-0.2l-0.19,0.23v0.12l0.12,0.17l0.06,0.06v0.23l-0.08,0.2
					l0.09,0.12l0.12,0.08v0.15l0.06,0.09v0.11l-0.06,0.06h-0.08v0.32l0.1,0.28l0.07,0.14v0.08l-0.13,0.1l-0.06,0.18l0.09,0.15v0.15
					l0.07,0.12l-0.18,0.1v0.07l0.08,0.14v0.21l-0.09,0.1l-0.12,0.27v0.15l0.05,0.14l-0.05,0.1v0.15l0.08,0.15v0.2l-0.1,0.13h-0.15
					h-0.14l-0.86-0.16l-0.16-0.06l-0.22-0.06h-0.11l-0.25,0.38l-0.05,0.18l-0.13,0.17h-0.16l-0.16,0.11l-0.06,0.12l0.1,0.22l0.31,0.5
					l0.07,0.2l0.08,0.16l0.18,0.23v0.25v0.32V49v0.46l0.16,0.12v0.24v0.24l-0.07,0.13v0.18v0.14v0.23h-0.09h-0.33l-0.15,0.1v0.1v0.23
					l0.1,0.07v0.15v0.07l0.23,0.33h0.08l0.09-0.4l0.35-0.06l0.11,0.12l0.11-0.45l0.18-0.12v-0.49l0.24-0.2v-0.24l0.08-0.15l0.29,0.19
					l0.33-0.14l0.15,0.13v0.48l0.62,0.14l0.42,0.27l0.15-0.16l0.17,0.18l0.26-0.29l0.38-0.06l0.05-0.19h0.2l0.2-0.34l0.45-0.56
					l-0.08-0.14l0.31-0.14v-0.32l-0.1-0.28l0.21,0.06v0.07l0.31-0.45l-0.13-0.26h0.14v-0.42l0.25-0.13v-0.28l0.37-0.24v-0.13
					l-0.11-0.11v-0.31l0.15-0.09l0.26-1.16l0.27-0.36v-0.24l0.28-0.25l0.06-0.32l0.33-0.39v-0.28h-0.14l-0.09-0.36l0.29-0.28
					l-0.14-0.61l0.23-0.28v-0.21h-0.11l0.19-0.44v-0.5l0.26-0.24v-0.4h-0.07v-0.45l0.17-0.43v-0.39l0.39-0.41v-0.35l-0.13-0.26v-0.41
					l0.1-0.1v-0.32h-0.21l-0.09-0.65v-0.18l-0.09-0.18v-0.51l-0.38-0.42h0.02L341,34.67l0.11-0.13l0.2-0.35v-0.12l-0.24,0.18h-0.22
					l-0.27-0.89v-0.23v-0.19l-0.06-0.5l0.1-0.19l-0.22-0.64l0.17-0.2l-0.15-0.09l0.06-0.13V31l-0.11-0.09l0.14-0.27l-0.11-0.24v-0.19
					l0.17-0.14l-0.23-0.2v-0.33l0.12-0.15l-0.05-0.24l-0.17,0.16l-0.23-0.06l-0.27-0.24V28.6l0.15-0.18v-0.24l-0.36-0.46h-0.19
					l-0.27-0.3l0.19-0.11v-0.23l0.14-0.22l-0.22-0.43h-0.16l-0.18-0.22h-0.21l-0.08-0.18l-0.59-0.22l-0.13-0.18h-0.38l-0.16-0.11
					l-0.15-0.33l-0.2-0.18h-0.31l-0.31-0.25L336.01,25h-0.26l-0.11,0.17h-0.16l-0.1-0.13v-0.12l-0.25-0.15h-0.27l0.14,0.46l0.23,0.25
					l-0.12,0.24l0.15,0.45l-0.1,0.37l-0.18,0.11v-0.33l0.06-0.34l-0.17-0.37l-0.1,0.19l0.05,0.27l-0.11,0.41l-0.32,0.19l-0.6,0.09
					l-0.08-0.12l0.21-0.2h0.21v-0.39l0.12-0.21l0.11-0.11h-0.3l-0.15,0.14l-0.1-0.15l-0.19,0.07l-0.12,0.27l-0.16,0.11h-0.07
					l-0.19,0.23l-0.35-0.3l0.06-0.35l-0.12-0.42l-0.3-0.41v-0.69l-0.3,0.08h-0.12l-0.23,0.15l-0.2,0.07l-0.34,0.25h-0.27l-0.22-0.21
					l-0.26,0.1l-0.3-0.27l-0.15-0.25l0.14-0.24l0.01-0.31l0.27-0.41v-0.21l0.37-0.34v-0.45l0.41-0.34V21.5l0.14-0.05v-0.14l0.25-0.4
					V20.6l0.2-0.29L331.65,20l0.1-0.16v-0.5l0.15-0.65h0.1l0.07-0.5l0.22-0.11l-0.06-0.3l0.36-0.45l0.05-0.35l0.26-0.19l-0.15-0.46
					l0.13-0.1v-0.32l0.17-0.1h0.13V15.6l-0.13-0.2v-0.53l-0.08-0.34l0.2-0.43l0.4-0.45l0.09-0.52l-0.35-0.54l0.05-0.31l0.26-0.24
					l0.07-0.28l0.49-0.37l0.07-0.27h0.17l0.19,0.2l0.28-0.05l0.47-0.38h0.4l0.4-0.25h0.28l0.27-0.19h0.24h0.23l0.13-0.21l0.23,0.16
					l-0.11,0.29l0.19,0.08l0.25,0.23l0.13-0.26l0.22-0.19l-0.39-0.3v-0.22l0.3-0.16l0.53,0.07l0.22-0.13h0.55l0.1,0.19h0.13l0.15-0.16
					h0.21l-0.08-0.23l0.17-0.12h0.44l0.18,0.23l0.52-0.21v-0.2l-0.16-0.09l-0.11,0.09l-0.33-0.18l0.2-0.31l0.06,0.19l0.39-0.15
					l-0.35-0.23V8.54h0.17l0.36-0.43h0.39l0.2,0.15l0.21-0.11l0.49,0.12h0.36v0.14l0.18,0.12h0.17l-0.11-0.2h0.4l0.39,0.07h0.24
					l0.26,0.19v0.12l0.33,0.06l0.24-0.22h0.21l0.06,0.16l-0.47,0.35h-0.41l-0.11,0.14v0.28h-0.22l-0.07,0.13l0.11,0.07h0.21l0.36,0.49
					l0.11-0.13l0.41-0.12l0.18-0.23l-0.06-0.1l0.27-0.13l-0.2-0.29h0.16l0.34,0.35h0.19l0.13-0.17l-0.13-0.13l0.18-0.13l0.13-0.18
					h0.09V8.7V8.52l0.18-0.07l0.25,0.15l0.18-0.11l0.15,0.12v0.21l0.19,0.1L348,8.57l-0.16-0.15V8.34l0.2-0.13l0.19,0.07l0.17-0.11
					h0.18l0.05-0.13l-0.23-0.26l0.05-0.09V7.54l-0.28-0.11l-0.15-0.1v0.06V7.5h-0.15l-0.24-0.13h-0.07v0.14h-0.25l-0.11,0.1
					l-0.22-0.12l0.08-0.23l0.12-0.07l-0.36-0.5l0.31-0.09l-0.25-0.34L347,5.79v-0.3l0.2-0.25V4.83l0.26-0.27V4.2h-0.07l0.27-0.1
					l-0.34-0.39l0.14-0.94l0.22-0.19l-0.27-0.38l-0.06-0.36l-0.22-0.17V1.54l0.24-0.18V0.99l0.16-0.1l0.3-0.48h0.32l0.13-0.09h-99.73
					l0.07,0.09v0.21l0.41,0.24l0.1,0.21h0.08l0.06,0.22l0.19,0.15l-0.21,0.18l-0.27,0.08v0.45l0.15,0.45l0.16,0.11l-0.09,0.22
					l0.16,0.25h0.31l0.17,0.24h0.39l0.2-0.35l0.1,0.21l0.26-0.07l0.19,0.07l-0.16,0.09l-0.09,0.15l-0.41,0.05l-0.22,0.07l-0.37,0.08
					l-0.36-0.26h-0.33l-0.2-0.3l0.13-0.13V2.7l-0.25-0.32l-0.08-0.31l-0.23-0.15V1.59l-0.28-0.42h-0.12l-0.11-0.2l-0.44-0.22V0.39l0,0
					h-1.17l-0.16,0.13l-0.4,0.08l-0.21,0.32l-0.39,0.29v0.78l0.16,0.24l0.56,0.32l0.41,1V3.8l-0.42,0.74l-0.07,0.45l0.24,0.39
					l-0.24,0.64v0.24l-0.44,0.34v0.2l-0.25,0.12l-0.18,0.23v0.34l0.17,0.2v0.26l-0.41,0.24l-0.53-0.09l-0.1-0.14h-0.47l-0.5,0.08
					l-0.43-0.12l-1-0.16l-0.36-0.34l-0.14-0.26l-0.42,0.08l-0.15,0.26l-0.09-0.1h-0.19l0.2-0.36h0.4l0.76-0.1l0.14-0.18l0.61,0.35
					h0.19l0.08-0.17h0.28v0.2l-0.41,0.23l0.26,0.21h0.5l0.2-0.27l0.29-0.13v-0.2l-0.3-0.38V6.38l0.34,0.16l0.12-0.17V5.8l0.32-0.18
					V5.47h-0.21l-0.06-0.12l0.3-0.15V4.67l-0.16-0.15l0.18-0.23V4.16l0.25-0.22V3.52l-0.31-0.3l-0.18-0.51l0.08-0.37v-0.3l0.13,0.05
					V1.88l-0.41-0.4h-0.19l-0.19-0.23l-0.43-0.14l-0.54-0.69h-5.06V0.6l0.21,0.26h0.15l0.55,0.65l0.28,0.08l0.2-0.13h0.28V1.6h0.24
					l-0.24,0.2v0.72l-0.08,0.19l0.18,0.28l-0.06,0.15h-0.16l0.07,0.37v0.18l-0.29-0.09l-0.32-0.61l-0.34-0.24l-0.42-0.08l-0.18-0.38
					l-0.28-0.24l-0.72-0.06l-0.77-0.39l-0.44-0.1l-0.06-0.26h-0.2l-0.22-0.2l-0.39,0.14l-0.26,0.23l-0.13-0.3l0.07-0.16V0.76
					l-0.86-0.31l-0.14-0.08h-3.8l0.07,0.14v0.22l-0.27,0.11v0.11l0.2,0.3l0.18,0.11l0.14,0.49l0.13,0.22l0.06-0.23H230l0.23,0.44v0.24
					l0.3,0.08L230.9,3l-0.36-0.06l-0.12-0.11h-0.2l-0.12,0.45l-0.25,0.17l-0.37-0.16l-0.19,0.15v0.15l0.28,0.34l0.11,0.1v0.16
					l-0.14,0.16h-0.69l-0.15-0.2V3.94l-0.13-0.27l0.22-0.2V3.33l-0.27-0.26l-0.21-0.08l0.2-0.24V2.66l-0.2,0.11h-0.18l-0.36,0.35
					h-0.21l-0.25,0.22v0.15h-0.33l-0.14,0.16V3.9l-0.21,0.16h-0.59l-0.2-0.08l-0.12,0.07h-0.18l-0.16-0.13l-0.35,0.23l-0.08,0.14
					h-0.27l-0.25,0.31v0.1l0.2,0.14l-0.07,0.17l0.06,0.16l-0.09,0.11l-0.22-0.16l-0.11-0.19h-0.14l-0.28,0.33l-0.13,0.33v-0.3
					l-0.28-0.11l-0.19,0.12H223h-0.17h-0.23l-0.06-0.22l0.28-0.26h0.31l0.11-0.19l-0.18-0.29l0.06-0.11l0.17-0.09l-0.31-0.29
					l-0.15,0.08h-0.18l-0.1-0.13l0.5-0.24h0.21l0.27-0.14l-0.05-0.1l-0.49,0.07l-0.71,0.3l-0.21,0.18l0.09,0.12l0.08,0.25l0.1,0.16
					l-0.15,0.2l-0.16,0.05l-0.25-0.28l0.09-0.13l0.09-0.05V4.02h-0.08l-0.5,0.5v0.12l0.2,0.2l0.15,0.08v0.19l-0.31,0.31l-0.15-0.11
					l0.1-0.16v-0.2h-0.24V4.74l-0.52,0.16l-0.07,0.18l-0.36,0.17h-0.3l-0.16,0.08v0.15l-0.56,0.68h-0.15l-0.5,0.61l-0.22,0.13
					l-0.21-0.2h-0.13l0.11,0.27l0.36,0.26l0.06,0.21l-0.44-0.17l-0.11,0.16l-0.73,0.09l-0.14,0.1l0.2,0.26v0.24l-0.17,0.31l0.12,0.41
					l-0.09,0.28l-0.48,0.22l-0.07,0.14h-0.29l-0.15,0.12l-0.16-0.3l-0.36,0.25h-0.25l-0.54-0.7l-0.56-0.47l-0.19-0.1v-0.4l0.07-0.16
					l0.14,0.09l0.11-0.2V7.46l0.14-0.14h0.41l0.13-0.19h0.48l0.05-0.2l-0.38-0.48l-0.09-0.25h-0.31l-0.28-0.34V5.6l-0.34-0.22
					l-0.73-0.07h-0.5l-0.21,0.12h-0.33l-0.55-0.37h-0.31V5.2l0.67,0.54l0.38,0.28l0.21,0.57V6.9l0.14,0.18l-0.11,0.09v0.26l0.06,0.19
					l-0.1,0.09v0.61l-0.1,0.35L212.83,9h0.4l0.29,0.18l0.2,0.21v0.13v0.19v0.13V10l0.12,0.1l-0.09,0.19v0.62l-0.11,0.16l0.18,0.36
					v0.49l-0.17-0.16l-0.11-0.33l-0.33-0.26l-0.33,0.31v-0.29l-0.14-0.18l-0.42-0.06l-0.39,0.06l-0.26-0.22h-0.34l-0.19,0.14
					l-0.3,0.66l-0.44,0.36l-0.32,0.06l-0.22,0.21l-0.09,0.35l-0.29,0.4l-0.37,0.29v0.24l0.14,0.4l0.6,0.61l0.35,0.53l-0.2,0.24h-0.21
					v0.28l-0.23,0.2l-0.14,0.22l-0.29-0.38l-0.86-0.41h-0.3l-0.09-0.18h-0.47l-0.24-0.2l-0.19-0.29l-0.38-0.07l-0.3-0.2h-0.31
					l-0.06,0.17l0.08,0.17l-0.06,0.16l0.09,0.14l-0.17,0.17h-0.27l0.2,0.37l0.07,0.3l0.37,0.17l0.23,0.32l0.33,0.16l0.25-0.11h0.16
					l0.21-0.15v0.21l0.3,0.11v0.11l-0.09,0.13l0.21,0.18v0.42l-0.17,0.07h-0.22l-0.29,0.32h-0.15l-0.24-0.23h-0.39l-0.17-0.15h-0.42
					l-0.12-0.1v-0.33l-0.24-0.15l-0.18-0.25h-0.12l-0.25,0.2l-0.54-0.2l-0.12-0.21l-0.13-0.14l0.11-0.21l-0.05-0.32v-0.25l-0.27-0.2
					v-0.22l-0.36-0.36v-0.3l-0.22-0.07l0.05-0.23l0.21-0.07v-0.43v-0.27h-0.09V13l0.09-0.17h-0.14l-0.3-0.41l-0.61-0.25l-0.17,0.12
					l-0.13-0.14h-0.22l-0.11,0.08h-0.32l0.12-0.15l0.26-0.05l0.07-0.2h-0.29V11.6l0.19-0.08l-0.18-0.14l-0.18,0.13l-0.42,0.09v-0.1
					l0.13-0.17l0.26-0.13l-0.08-0.09l-0.4-0.09l-0.07-0.21l-0.32-0.2l-0.06-0.39l-0.28-0.2l0.06-0.08h0.24l0.07,0.08h0.35l0.05,0.25
					l0.59,0.48h0.18l0.05-0.09l0.28,0.19h0.44l0.05-0.11l0.17,0.2l-0.16,0.11l0.1,0.08v0.15h0.26l0.13-0.13h0.43l-0.12,0.06h0.24h0.26
					v0.17l0.33,0.32l0.21-0.14l0.22,0.07l0.05,0.13h0.34l0.23,0.06l0.2-0.14l0.32,0.23l0.44,0.13h0.78l0.62-0.07l0.08-0.11h0.4
					l0.19-0.16l0.44-0.08l0.37-0.19l0.51-0.7l0.05-0.18l0.3-0.38V10.1l0.09-0.21l0.06-0.4V8.84l-0.1-0.1h-0.1l-0.22-0.34l-0.16-0.1
					l-0.09-0.34l-0.29-0.3h-0.24l-0.06,0.13l-0.3-0.15V7.47l-0.52-0.4V6.82l-0.29-0.29h-0.14l0.06,0.13l0.21,0.32l-0.19,0.08
					l-0.34-0.31h-0.21l-0.39-0.35h-0.14v0.11l0.06,0.15h-0.21l-0.31-0.47l-0.26-0.08l-0.19-0.23l-0.94-0.61l-1.38-0.74l-0.34-0.2v0.11
					l-0.29-0.17l-0.33-0.07v0.13l-0.21,0.11l-0.27-0.1h-0.38l-0.18-0.23l-0.25-0.12v0.08l0.14,0.19v0.12l-0.23-0.15h-0.27l-0.1,0.1
					l0.05,0.18l-0.18,0.32h-0.28l0.16-0.25l0.16-0.1l-0.09-0.12h-0.2l0.05-0.15l0.07-0.1l-0.11-0.06l-0.12,0.12l-0.23,0.29V4.34v-0.1
					l-0.07-0.08l-0.12,0.16h-0.07v-0.2l-0.22-0.07l-0.21,0.18l-0.07-0.24l-0.11-0.08l-0.18,0.18l-0.08-0.24V3.6l0.14-0.19l0.08,0.19
					l0.2,0.2h0.32l0.2,0.1l0.23-0.19V3.57l-0.16-0.1l-0.07-0.09l-0.2-0.09l-0.11,0.1l-0.14-0.12l-0.14-0.2l-0.27-0.13h-0.26v0.08
					l0.09,0.16h0.08v0.1h-0.16h-0.16v0.1l0.23,0.16l-0.12,0.06h-0.18l-0.1,0.18v0.33l-0.28-0.25V3.6l-0.11-0.1h-0.3l0,0v0.28
					l-0.16,0.21l-0.28-0.11h-0.23v0.38l-0.21,0.29h-0.32l-0.36,0.35v0.47H196l0,0l-0.36,0.14l-0.22,0.15l0.22,0.08l-0.06,0.36
					l-0.1,0.45l0.19,0.23l0.23,0.61h0.19l0.37,0.21l0.2,0.31l0.11,0.25l0.61,0.39l0.17,0.16l-0.13,0.4l-0.27,0.43l-0.23,0.65
					l0.33,0.35l0.11,0.38l0.56,1l0.6,1.4l-0.24,0.06l-0.06,0.88v0.34l0.26,0.07l-0.18,0.24v0.45l0.17,0.22l0.33,0.06l0.12,0.25
					l-0.11,0.13v0.5l0.15,0.31l0.41,0.28v0.4l-0.26,0.35l-0.1,0.4l0.62,0.88l0.35,0.11l0.59,0.68l0.08,0.4l-0.39,1l-0.54,0.92
					l-0.28,0.68l-0.38,0.56l-0.37,0.64l-0.32,0.16l-0.62,0.59l0.05,0.37l0,0c0.02-0.03,0.04-0.06,0.07-0.08c0.06,0,0.37-0.2,0.37-0.2
					l0.3-0.05l-0.19,0.16l0.09,0.17v0.24l-0.3-0.25l-0.05,0.18l0.32,0.35h0.32l0.17,0.25h0.31l0.12-0.05h0.21l0.24,0.34l-0.17,0.2
					l-0.39-0.13l-0.17,0.06l-0.07,0.24l-0.33,0.24l-0.26-0.16l-0.16,0.12v0.27l-0.24,0.08L197.88,27h-0.13v0.16l0.13,0.2l-0.09,0.3
					l0,0l0.12,0.21v0.05V28l-0.21,0.27l-0.09,0.39l-0.16,0.11l-0.1,1l0.62,1.13v0.27l-0.21,0.19v0.25l-0.2,0.3h0.27v0.23l-0.06,0.13
					l0.12,0.11l0.07,0.22v0.18l0.18,0.33l0.09,0.12l0.14,0.39l0.19,0.26v0.38h0.11l0.24,0.16l0.29-0.18l0.27,0.43l0.33-0.15h0.3
					l0.25,0.44l0.35-0.27l0.39-0.12l0.16,0.2h0.19l0.59,0.21l0.07,0.32l-0.09,0.35l0.23,0.27v0.41l0.31,0.33l0.16,0.37l0.35,0.49
					l0.27,0.19l0.12,0.45l0.45,0.12l0.51,0.45v0.25l0.36,0.24l-0.16,0.13l-0.27,0.45l-0.7,0.1l-0.3-0.27l-0.11,0.21v0.33l0.28,0.43
					v0.37l0.31,0.35v0.34h0.22l0.31-0.06v-0.29l0.2-0.18l0.68,0.22h0.9l0.34-0.18h0.31l0.21,0.62l0.28,0.23l-0.16,0.31l0.37,0.48
					l0.75-0.1l0.27,0.23v0.28h0.26v0.37l0.14,0.44l0.62,0.59l0.24-0.27l0.38,0.21l0.31-0.09l0.29,0.06l0.46-0.35h0.22l0.3,0.66
					l0.42,0.26l0.12,0.26l0.19-0.18l0.48,0.11h0.36l0.26,0.15h0.29l0.35,0.22l0.41,0.08l0.2-0.21l0.12,0.31l0.19,0.11v0.36l-0.23,0.3
					l-0.28,0.06l-0.09,0.58l0.39,0.28l0.06,0.39l-0.17,0.49l0.05,0.34l-0.24,0.19h-0.65l-0.3,0.47l-0.17,0.07l-0.08,0.61l0,0h0.05
					l0.28,0.05l0.3-0.21l0.35-0.05l0.08,0.15l-0.07,0.2l-0.7,0.38l-0.3,0.2l0.13,0.14h0.18l-0.18,0.19l-0.32-0.06l-0.46,0.06l0.18,0.4
					l0.19,0.19l0.15-0.12l0.07,0.14l0.28,0.09v0.11h-0.18l-0.11,0.16h-0.18l-0.12,0.1v0.11l-0.28,0.28v0.28l0.13,0.09l-0.06,0.39
					h-0.27h-0.06l-0.21-0.16l-0.3-0.08v0.13l0.1,0.19l-0.2,0.09l-0.19,0.16H212h0.13l0.37,0.3v0.21l0.3,0.3h0.5l0.52,0.32l0.36,0.09
					l0.87,0.64l0.17,0.32l0.25,0.08l0.08,0.17l0.21,0.18h0.22l0.08,0.19l0.25,0.1h0.15l0.21,0.32h0.27l0.13,0.07l0.14-0.09l0.35,0.29
					v0.18h0.33l0.29,0.45l0.16,0.2l0.07,0.56l0.24,0.43l-0.1,0.16l0.07,0.23v0.06l0,0h0.17l0.05,0.24L219.03,60.05z"/>
				<polygon class="st1" points="364.29,0.99 364.49,1.02 364.73,0.96 364.86,1.04 364.73,1.13 365.12,1.57 365.27,1.44 365.5,1.67 
					365.82,1.62 366.03,1.69 366.02,1.47 365.62,0.94 365.73,0.78 365.64,0.62 365.47,0.56 365.49,0.36 363.57,0.36 364.23,0.75 		"/>
				<polygon class="st1" points="348.54,0.36 348.39,0.36 348.51,0.41 		"/>
				<polygon class="st1" points="351.51,0.67 351.59,0.96 351.51,0.98 351.51,1.19 351.59,1.3 351.47,1.47 351.39,1.58 351.48,1.71 
					351.71,1.49 351.8,1.68 352.07,1.75 352.12,2.23 352.26,2.12 352.27,1.91 352.51,1.69 352.69,1.71 352.81,1.86 352.58,2.26 
					352.82,2.47 352.91,2.77 353.07,2.37 353.27,2.25 353.27,2.08 353.38,1.92 353.39,1.24 353.57,1.05 353.38,0.88 353.61,0.66 
					353.62,0.45 353.52,0.38 353.52,0.36 351.55,0.36 351.57,0.4 351.39,0.6 		"/>
				<polygon class="st1" points="333.29,24.47 333.29,24.63 333.4,24.8 333.45,24.67 333.44,24.47 333.37,24.41 		"/>
				<polygon class="st1" points="333.36,25.06 333.14,25.37 333.17,25.57 333.36,25.71 333.52,25.46 333.66,25.42 333.75,25.21 
					333.69,25.13 333.76,24.96 		"/>
				<polygon class="st1" points="333.34,23.11 333.27,23.05 332.98,23.11 332.8,23.01 332.65,23.14 332.57,23.39 332.4,23.54 
					332.4,23.74 332.62,24.1 332.71,24.06 332.74,23.93 332.82,23.84 332.95,23.88 333.12,24.07 333.34,24.13 333.49,23.98 
					333.57,23.82 333.47,23.68 333.48,23.51 333.63,23.37 333.68,23.24 333.46,23.24 333.42,23.36 333.27,23.45 333.21,23.38 
					333.33,23.21 		"/>
				<polygon class="st1" points="333.84,24.57 333.7,24.45 333.66,24.51 333.68,24.61 333.58,24.79 333.63,24.86 333.79,24.74 		"/>
				<polygon class="st1" points="332.13,23.2 332.04,23.21 331.89,23.39 331.63,23.49 331.62,23.71 331.73,23.89 331.83,23.85 
					331.83,23.78 331.91,23.69 332.07,23.79 332.16,23.72 332.08,23.53 332.19,23.37 		"/>
				<polygon class="st1" points="358.9,38.1 358.99,37.94 358.85,37.93 		"/>
				<polygon class="st1" points="359.17,34.49 359.25,34.46 359.2,34.37 359.1,34.33 359.04,34.45 		"/>
				<polygon class="st1" points="358.89,36.66 359,36.77 359.11,36.7 358.98,36.61 		"/>
				<polygon class="st1" points="359.1,29.66 359.08,29.88 359.19,29.99 359.47,29.97 359.51,29.78 359.25,29.57 		"/>
				<polygon class="st1" points="358.92,37.73 359,37.52 358.94,37.38 358.85,37.5 		"/>
				<polygon class="st1" points="360.25,7.35 360.39,7.03 360.6,6.79 360.93,6.55 361.06,6.48 360.99,6.19 360.85,5.85 360.53,5.49 
					360.38,5.44 360.24,5.59 360.2,5.73 360.09,5.8 359.76,6.19 359.63,6.25 359.46,6.51 359.62,6.5 359.86,6.4 359.9,6.44 
					359.82,6.68 359.91,7.11 360.06,7.31 360.07,7.61 359.95,7.78 360,7.93 360.24,8.19 360.33,8.22 360.29,7.92 360.17,7.67 
					360.25,7.54 		"/>
				<path class="st1" d="M359.72,33.41l-0.12-0.26v-0.23h-0.08v0.24l-0.09,0.27l0.18,0.19L359.72,33.41z"/>
				<polygon class="st1" points="353.45,45.29 353.52,45.59 353.65,45.53 353.73,45.25 353.92,45.08 353.88,44.73 354.01,44.61 
					354.02,44.47 354.15,44.37 354.29,44.43 354.48,44.25 354.67,43.85 354.94,43.53 355.24,43.5 355.45,43.37 355.43,43.09 
					355.34,42.83 355.17,42.88 354.88,43.21 354.83,43.42 354.66,43.43 354.47,43.56 354.33,43.51 354.24,43.3 354.17,43.34 
					354.08,43.56 354.16,43.71 354.06,43.89 353.9,44.17 353.78,44.16 353.8,44.31 353.73,44.58 353.51,44.69 353.48,44.85 
					353.61,44.99 353.5,45.08 		"/>
				<polygon class="st1" points="341.82,30.9 342.05,30.98 342.36,31.44 342.44,31.89 342.42,32.24 342.63,32.6 342.63,32.87 
					342.86,33.02 343.11,33.31 343.03,33.38 343.06,33.59 343.36,34.07 343.43,34.37 343.57,34.74 343.6,35.23 343.7,35.41 
					343.66,35.67 343.72,36.12 343.94,36.65 343.88,36.84 343.92,37.2 344.18,37.44 344.68,38.06 344.68,38.32 344.88,38.69 
					344.83,39.26 344.9,39.7 345.12,40.12 345.19,40.41 345.55,40.87 345.59,41.08 345.51,41.51 345.47,42.07 345.59,42.41 
					345.87,42.62 346.07,43.02 346.41,43.23 346.37,42.93 346.42,42.64 346.3,42.38 346.21,42.07 346.27,41.63 346.51,41.42 
					346.64,41.48 346.64,41.67 346.8,41.78 347.32,41.73 347.38,41.6 347.51,41.57 347.6,41.71 347.53,41.81 347.55,42.01 
					347.83,42.31 347.87,42.56 348.02,42.72 348.03,42.54 347.98,42.39 348,42.11 348,41.8 347.74,41.58 347.67,41.22 347.58,41 
					347.38,41.1 347.21,41.1 346.84,40.86 346.78,40.46 346.6,40.15 346.27,39.86 346.07,39.81 345.85,39.55 345.74,39.08 
					345.53,38.73 345.43,38.4 345.44,37.96 345.4,37.44 345.23,37.16 345.29,36.71 345.27,36.44 345.08,36.1 345.2,35.92 
					345.25,35.72 345.25,35.57 345.38,35.55 345.53,35.58 345.85,35.51 346.16,35.55 346.45,35.74 346.64,36.12 346.92,36.23 
					347.17,36.39 347.41,36.77 347.56,36.84 347.43,36.49 347.16,36.15 346.77,35.87 346.56,35.5 346.32,35.17 346.32,34.99 
					346.16,34.85 345.91,34.38 345.8,34.07 345.61,33.97 345.57,33.71 345.17,33.23 344.8,32.57 344.71,32.24 344.24,31.6 
					343.99,31.14 343.8,31 343.8,30.72 343.64,30.46 343.47,30.4 343.46,30.51 343.29,30.49 343.23,30.39 343.29,30.16 343.21,29.97 
					342.96,29.81 342.72,29.52 342.58,29.15 342.44,28.94 342.41,28.65 342.47,28.44 342.53,28.49 342.46,28.1 342.41,27.66 
					342.34,27.36 342.07,27.24 341.78,26.93 341.75,26.75 341.61,26.61 341.61,26.47 341.73,26.44 341.98,26.7 342.23,27.07 
					342.11,26.73 341.8,26.26 341.49,25.93 341.37,25.93 341.3,25.69 340.75,25.25 340.57,24.95 340.58,24.5 340.43,24.33 
					340.02,24.17 339.84,23.79 339.74,23.68 339.64,23.81 339.74,23.93 339.75,24.13 339.59,24.18 339.4,24.05 339.17,24.07 
					339.52,24.44 339.99,24.71 340.13,24.92 340.09,25.23 340.21,25.11 340.37,25.09 340.44,25.27 340.33,25.4 340.15,25.48 
					340.19,25.65 340.4,25.66 340.47,25.94 340.25,26.06 340.05,26.02 339.88,25.8 339.71,25.96 339.56,26.32 339.81,26.6 
					339.88,26.92 340.16,27.25 340.39,27.68 340.42,28.25 340.52,28.38 340.57,28.81 340.75,29.45 340.96,29.88 341.26,30.04 
					341.29,30.16 341.16,30.25 		"/>
				<path class="st1" d="M352.54,46.36l0.11-0.06l0.34-0.31l0.06-0.3h-0.08h-0.2h-0.14l-0.14-0.12l-0.08,0.09v0.33l-0.07,0.28v0.4
					l-0.14,0.26l0.06,0.17l0.24,0.28V47L352.54,46.36z"/>
				<polygon class="st1" points="344.02,9.65 344.04,9.46 343.87,9.49 343.73,9.7 343.71,9.91 343.83,9.92 		"/>
				<polygon class="st1" points="325.71,83.21 325.72,83.02 325.62,82.91 325.51,82.96 325.57,83.26 		"/>
				<polygon class="st1" points="327.17,84.71 326.88,85.23 326.73,85.77 326.63,85.84 326.72,85.97 326.73,86.5 326.77,87.04 
					326.91,87.13 326.95,87.28 326.89,87.3 326.88,87.47 327.02,87.69 327.17,87.73 327.21,87.91 327.59,88.03 327.78,88.33 
					327.76,88.64 327.78,88.86 327.98,88.79 328.17,88.86 328.12,88.59 328.18,88.27 328.05,87.87 328.27,87.57 328.61,87.05 
					328.62,86.72 328.72,86.62 328.59,86.57 328.67,86.06 328.7,85.7 328.64,85.31 328.79,85.02 328.86,84.32 328.94,83.96 
					329.04,83.94 328.99,83.71 328.76,83.53 328.67,83.53 328.52,83.23 328.22,83.13 328.05,83.22 328.08,83.41 327.83,83.5 
					327.54,83.83 327.27,84.3 327.34,84.42 327.29,84.61 		"/>
				<polygon class="st1" points="327.57,56.54 327.73,56.19 327.73,55.95 328.08,55.72 328.31,55.27 328.56,55.15 328.78,54.49 
					328.9,54.26 328.88,54.12 328.9,53.67 329.15,53.36 329.4,53.75 329.62,53.87 329.81,54.04 330.05,53.94 330.34,54.06 330.89,54 
					331.24,54.06 331.41,53.69 331.39,53.5 331.1,53.2 330.81,52.99 331.04,52.85 331.36,52.81 331.88,52.38 331.88,52.09 332.1,51.8 
					332.37,51.76 332.47,51.51 332.37,51.31 332.39,51.04 332.39,50.74 332.56,50.67 332.8,50.86 332.8,51.14 332.91,51.27 
					333.34,51.37 333.41,51.46 333.44,51.39 333.44,51.24 333.34,51.17 333.29,50.94 333.31,50.84 333.46,50.74 333.78,50.78 
					333.88,50.75 333.88,50.52 333.84,50.38 333.85,50.2 333.92,50.07 333.91,49.83 333.89,49.59 333.73,49.47 333.73,49.01 
					333.7,48.78 333.68,48.46 333.69,48.21 333.51,47.98 333.42,47.82 333.36,47.62 333.04,47.12 332.94,46.9 333,46.78 333.17,46.67 
					333.32,46.65 333.45,46.48 333.51,46.3 333.76,45.91 333.86,45.89 334.08,45.95 334.25,46.01 335.11,46.17 335.24,46.21 
					335.39,46.21 335.5,46.08 335.47,45.88 335.38,45.73 335.36,45.58 335.41,45.48 335.36,45.34 335.33,45.19 335.44,44.92 
					335.53,44.82 335.49,44.61 335.41,44.48 335.45,44.4 335.64,44.3 335.57,44.18 335.57,44.02 335.48,43.88 335.53,43.7 
					335.67,43.6 335.67,43.5 335.59,43.36 335.49,43.08 335.47,42.76 335.56,42.73 335.62,42.67 335.61,42.56 335.55,42.47 
					335.56,42.32 335.44,42.24 335.36,42.12 335.44,41.92 335.46,41.7 335.39,41.63 335.27,41.46 335.27,41.34 335.46,41.11 
					335.67,41.07 335.72,40.97 335.73,40.73 335.79,40.45 335.62,40.35 335.5,40.22 335.47,40.02 335.24,39.78 335.19,39.64 
					335.33,39.52 335.19,39.27 335.12,39.13 334.89,39.12 334.75,39 334.49,38.91 334.35,39.04 334.13,39.07 333.98,39.2 
					333.95,39.41 333.81,39.45 333.67,39.48 333.6,39.76 333.32,39.76 333.15,39.78 333.07,39.98 333.07,40.19 332.9,40.28 
					332.83,40.53 332.85,40.68 332.71,40.74 332.54,40.9 332.16,40.97 332.03,41.02 331.84,40.97 331.72,41.08 331.56,41.14 
					331.49,40.96 331.37,40.79 331.18,40.78 331,40.91 330.79,40.97 330.72,40.84 330.5,40.56 330.39,40.49 330.13,40.16 
					330.13,39.97 330.19,39.89 330.24,39.64 330.15,39.42 330.1,39.18 329.88,39.19 329.85,39.04 329.84,38.85 329.96,38.69 
					329.99,38.51 329.88,38.46 329.78,38.48 329.64,38.59 329.48,38.61 329.33,38.65 329.15,38.62 329.01,38.51 328.88,38.49 
					328.81,38.43 328.52,38.3 328.48,38.17 328.36,38.04 328.29,38.05 328.15,37.93 328.11,37.8 327.96,37.78 327.82,37.62 
					327.77,37.46 327.67,37.37 327.53,37.38 327.48,37.55 327.33,37.51 327.2,37.56 327.16,37.67 326.99,37.56 326.91,37.45 
					326.77,37.38 326.47,37.36 326.38,37.28 326.49,37.16 326.49,37.09 326.3,37.09 326.16,37.21 325.88,37.17 325.77,37.23 
					325.63,37.15 325.5,37.2 325.32,37.17 325.22,37 325,36.92 324.7,36.61 324.55,36.34 324.58,36.16 324.52,35.92 324.38,35.9 
					324.22,35.81 324.2,35.53 324.1,35.45 324.05,35.17 323.97,34.92 323.48,34.61 323.22,34.26 323.19,34.1 323.06,33.89 
					322.93,33.95 322.85,33.91 322.89,33.76 322.9,33.64 322.73,33.51 322.64,33.29 322.5,33.22 322.45,33.02 322.29,32.81 
					322.18,32.59 321.87,32.4 321.84,32.26 321.92,32.07 321.88,31.92 321.53,31.9 321.48,31.82 321.48,31.68 321.41,31.52 
					321.4,31.34 321.3,31.18 321.17,31.11 321.17,30.98 321.07,30.89 320.94,30.91 320.72,30.85 320.65,30.73 320.73,30.6 
					320.68,30.47 320.5,30.44 320.36,30.55 320.3,30.44 320.15,30.44 320.1,30.3 320.14,30.16 320.06,30.04 319.88,29.97 
					319.74,29.98 319.6,29.83 319.51,29.88 319.31,29.88 319.19,29.83 319.07,29.91 319.09,30.07 318.98,30.12 318.74,30 
					318.65,29.92 318.48,29.98 318.16,29.98 318.11,29.86 317.94,29.71 317.51,29.67 317.32,29.54 317.11,29.52 316.95,29.48 
					316.89,29.52 316.5,29.57 316.42,29.77 316.31,29.77 316.19,29.88 315.91,29.87 315.75,29.9 315.45,29.85 315.3,30.02 
					315.07,30.02 314.96,30.23 314.75,30.32 314.56,30.3 314.51,30.34 314.34,30.36 314.17,30.41 313.82,30.45 313.67,30.58 
					313.67,30.74 313.48,30.98 313.4,31.23 313.29,31.37 313.29,31.5 313.21,31.62 313.21,31.95 313.29,32.06 313.43,32.08 
					313.73,31.89 313.92,31.82 314.08,31.85 314.28,32.18 314.38,32.43 314.58,32.58 314.58,32.78 314.64,32.95 314.62,33.27 
					314.45,33.39 314.28,33.66 314.22,33.97 314.05,34.1 313.9,34.38 313.88,34.6 314.01,34.82 313.97,34.97 314,35.27 314.17,35.43 
					314.14,35.69 313.98,35.77 313.93,35.93 314.02,36.17 314.03,36.56 313.96,36.67 313.98,37.05 314.12,37.07 314.22,37.15 
					314.32,37.07 314.43,37.14 314.48,37.41 314.4,37.67 314.19,37.88 313.71,37.96 313.4,38.18 312.76,38.79 312.61,38.81 
					312.41,38.65 312.01,38.59 311.77,38.64 311.73,38.54 311.54,38.51 311.39,38.56 311.39,38.56 311.39,38.56 311.4,38.58 
					311.11,40.68 311.17,41.13 311.05,41.52 311.09,41.79 310.92,42.38 311.13,42.81 311.77,43.12 312.2,42.79 312.75,42.79 
					313.33,42.89 313.61,43.16 313.94,42.65 313.9,42.36 313.92,42.1 314.29,41.99 314.43,41.87 315.03,42.03 315.38,42.46 
					315.87,42.91 316.26,43.39 316.76,43.75 316.77,43.99 316.87,44.17 316.86,44.41 316.76,44.56 316.75,44.75 316.64,44.91 
					316.44,44.86 316.31,44.74 316.03,44.78 315.87,44.88 315.5,44.72 315.26,44.77 315.02,45.11 314.65,45.4 314.43,45.53 
					314.19,45.36 314.08,45.39 314.07,45.64 313.98,45.79 313.79,45.82 313.64,45.79 313.54,45.95 313.3,46.31 313.25,46.72 
					313.26,47.01 313.12,47.18 312.84,47.25 312.23,47.66 311.91,47.66 311.58,47.59 311.43,47.71 311.17,48.24 310.92,48.43 
					310.62,48.65 310.43,48.85 310.35,49.06 310.22,49.09 309.94,48.95 309.6,48.88 309.19,48.74 308.86,48.51 308.53,48.49 
					308.01,48.6 307.69,48.84 307.5,49.12 307.48,49.71 307.51,50 307.49,50.19 308.1,50.59 308.65,50.93 308.65,51.1 308.51,51.35 
					308.34,51.61 307.74,52.27 307.39,52.85 307.2,53.3 306.97,53.3 306.55,53.43 306.23,53.45 305.86,53.7 305.49,53.97 
					305.12,53.99 304.56,54.05 304.18,54.17 303.74,54.3 302.78,54.64 302.02,54.89 301.64,55.32 301.05,55.79 300.81,55.99 
					300.49,56 300.09,55.89 300.09,55.74 300.04,55.54 299.47,55.7 299,55.77 298.51,55.52 298.12,55.48 297.27,55.16 296.42,54.77 
					295.97,54.33 295.61,54.32 294.64,54.21 293.82,54.23 293.61,54.18 293.46,54.28 293.38,54.43 292.93,54.59 292.29,54.66 
					291.17,54.56 290.35,54.61 289.73,54.57 289.19,54.63 288.92,54.66 288.69,54.58 288.39,54 288.27,53.7 287.99,53.29 287.75,53 
					287.6,52.61 287.57,52.44 287.38,52.23 287.18,52.16 287.04,52.14 286.99,51.99 286.95,51.75 286.86,51.71 286.74,51.74 
					286.36,51.74 286.03,51.55 285.54,51.2 285.37,51.16 285.24,51.16 285,51.12 284.89,50.96 284.47,50.7 283.56,50.48 283.46,50.51 
					283.35,50.61 282.98,50.65 282.39,50.66 281.07,50.37 280.77,50.2 280.47,49.74 280.42,49.53 280.42,49.33 280.51,49.19 
					280.7,49.03 280.78,48.79 280.63,48.61 280.57,48.29 280.63,48.12 280.61,47.82 280.5,47.65 280.33,47.37 280.13,47.27 
					279.92,47.1 279.83,46.86 279.69,46.66 279.61,46.42 279.57,46.21 279.42,45.99 279.21,45.82 279.01,45.76 278.91,45.59 
					278.68,45.51 278.48,45.52 278.35,45.65 278.2,45.72 278.06,45.66 277.84,45.42 277.77,45.3 277.52,45.31 277.25,45.43 
					277.15,45.55 277.1,45.71 276.98,45.71 276.71,45.54 276.64,45.34 276.63,45.25 276.44,45.01 276.17,44.84 275.97,44.61 
					275.81,44.55 275.67,44.42 275.61,44.24 275.6,44.07 275.52,43.93 275.48,43.95 275.46,44.03 275.37,44.05 275.27,43.88 
					275.19,43.8 275.2,43.49 275.18,43.37 275.18,43.37 275.18,43.37 275.06,43.37 274.79,43.27 274.62,43.27 274.65,43.3 
					274.41,43.57 274.2,43.69 273.84,44.06 273.83,44.28 273.91,44.42 273.74,44.72 273.34,44.86 273.1,45.04 273.05,45.35 
					273.07,45.92 273.33,46.46 273.58,46.8 273.55,46.99 273.2,47.37 272.91,47.47 272.68,47.75 272.48,47.81 272.36,47.77 
					272.29,47.61 272.06,47.61 271.53,47.73 271.17,47.7 270.64,47.51 270.33,47.47 270.18,47.49 270.06,48.11 269.94,48.49 
					269.92,48.8 269.8,49.58 269.8,50.18 269.73,50.38 269.88,50.5 270.19,50.64 270.07,50.91 270.04,51.13 269.86,51.13 
					269.71,51.22 269.49,51.22 269.34,51.09 269.16,51.16 268.84,51.24 268.25,51.36 267.83,51.52 267.64,51.52 267.47,51.44 
					267.25,51.53 267,51.76 267,51.95 267.23,52.13 267.6,52.1 267.92,52.14 267.92,52.27 267.73,52.46 267.86,52.86 267.88,53.06 
					268,53.24 268.04,53.52 268.3,53.93 268.35,54.15 268.64,54.37 268.74,54.92 268.58,55.07 268.49,55.31 268.72,55.58 268.6,55.64 
					268.56,55.8 268.31,55.97 268.32,56.33 268.06,56.47 267.46,56.31 266.88,55.65 266.64,55.71 266.08,55.49 265.25,55.44 
					264.84,55.59 264.15,55.4 263.51,55.55 263.18,55.6 262.86,55.51 262.62,55.72 262.37,55.83 261.63,55.73 261.08,55.59 
					260.8,55.42 260.37,55.43 260.23,55.5 259.9,55.48 259.65,55.43 259.49,55.52 259.52,55.81 259.6,56.11 259.61,56.47 
					259.19,56.54 258.35,56.56 257.36,56.46 257.12,56.32 256.68,56.27 256.42,56.54 256.52,56.69 256.22,56.88 256.18,57.01 
					256.32,57.02 256.34,57.31 255.91,57.97 255.71,58.31 255.96,58.47 256.56,58.64 256.81,58.88 257.05,58.96 257.28,58.71 
					257.32,58.33 257.5,58.37 258.16,58.89 258.23,59.16 257.85,59.59 257.38,59.56 256.72,59.66 256.61,59.47 256.32,59.17 
					255.89,59.61 255.62,59.59 255.26,59.85 254.92,59.98 254.9,60.3 255.32,60.5 255.31,60.77 254.85,60.97 254.27,61.1 
					254.38,61.21 254.47,61.43 253.94,61.61 253.9,61.92 253.66,61.99 253.06,61.9 252.78,62.12 252.79,62.54 253.15,63.04 
					253.38,62.92 253.76,62.91 253.83,63.21 253.7,63.48 253.85,63.86 254.12,63.98 254.16,64.35 254.03,64.5 253.75,65.17 
					253.65,66.02 253.53,65.87 253.83,66.25 254.03,66.33 254.48,66.24 254.77,66.07 254.92,65.86 255.07,65.83 255.23,65.68 
					255.37,65.78 255.51,65.97 255.98,66.01 255.97,65.8 255.84,65.67 255.86,65.49 256.15,65.41 256.26,65.26 256.4,65.26 
					256.44,65.41 256.73,65.38 256.91,65.09 256.85,64.72 256.96,64.53 257.13,64.39 257.18,64 257.31,63.75 257.63,63.75 
					257.87,63.92 258.11,64.05 258.11,64.26 258.05,64.57 258.13,64.83 258.36,64.82 258.45,65.07 258.43,65.41 258.47,65.68 
					258.49,66.21 258.69,66.48 258.69,66.67 258.94,66.76 259.28,66.76 259.51,66.59 259.56,66.45 260.03,66.24 260.25,66.04 
					260.31,65.79 260.49,65.63 261.1,65.24 261.49,65.16 261.56,65.44 262.06,65.38 262.24,65.17 262.81,65.17 262.88,65.39 
					262.47,65.74 262.68,65.8 262.67,65.8 262.8,65.72 262.98,65.67 263.23,65.9 263.37,65.8 263.59,65.82 263.75,65.71 263.88,65.58 
					264.04,65.58 264.25,65.78 264.39,66.21 265.01,67.08 265.37,67.33 265.38,67.69 265.61,67.85 265.75,68.04 266.29,68.11 
					266.83,68.1 267.08,68.17 267.14,68.48 267.66,68.65 268.1,68.89 268.34,69.55 268.69,69.96 269.14,70.18 269.34,70.52 
					269.31,71.16 269.57,71.77 269.92,71.86 270.08,72.45 270.17,72.94 269.99,73.22 269.94,73.03 269.72,72.96 269.32,73.38 
					269.33,73.37 269.42,73.54 269.44,73.76 269.8,73.95 269.74,74.47 269.88,74.73 269.8,74.89 269.94,74.99 270.11,75.22 
					270.11,75.43 270.23,75.47 270.32,75.76 270.62,75.91 270.78,75.65 271.08,75.66 271.21,75.81 271.52,75.86 271.78,76.14 
					271.99,76.21 272.14,76.53 272.38,76.57 272.47,76.79 272.5,76.76 272.55,76.69 272.95,76.89 273.05,77.04 273.32,77.03 
					273.47,77.09 273.63,76.85 273.96,76.82 274.46,77.01 274.6,77.14 274.92,77.16 275.12,77.31 275.52,77.73 275.83,77.74 
					276.13,77.88 276.23,78.06 276.48,78.34 276.59,78.63 276.73,78.58 276.76,78.17 276.91,78.03 277.01,78.15 277.3,78.15 
					277.58,78.32 277.62,78.69 277.95,78.98 278.38,78.87 278.72,78.92 278.64,79.47 278.79,79.78 279.02,79.73 279.4,79.92 
					279.56,79.77 279.86,79.69 280.1,79.41 280.61,79.47 280.94,79.64 281.01,79.96 281.41,80.11 281.69,80.48 281.92,80.54 
					282.26,80.4 282.4,80.45 282.77,80.34 283.01,80.35 283.05,80.36 283.29,80.14 283.61,80.1 283.76,80.39 283.78,80.73 
					284.04,80.92 284.06,80.91 284.32,80.78 284.63,80.19 285.29,79.8 285.72,79.74 285.86,79.97 286.51,80.03 286.76,80.15 
					287.11,80.02 287.45,80.03 287.68,80.32 287.73,80.31 287.92,80.3 288.42,80.18 288.63,80.16 288.77,79.83 288.97,79.68 
					289.18,79.75 289.19,79.58 289.47,79.5 289.56,79.22 289.79,78.94 290.08,78.9 290.58,78.78 290.88,78.4 290.86,78.11 
					291.05,78.07 291.36,77.85 291.6,78.2 291.95,78.11 292.47,78.27 292.61,78.14 292.57,77.89 293.16,77.55 293.37,77.62 
					293.52,77.81 293.7,77.77 293.76,77.89 293.57,78.26 293.67,78.48 293.84,78.43 294.01,78.38 294.07,78.58 294.27,78.85 
					294.27,79.03 294.05,79.27 294.12,79.49 294.41,79.54 294.58,79.47 294.83,79.58 295.11,79.86 295.04,79.8 295.27,79.69 
					295.58,79.82 295.79,79.7 296.1,79.71 296.27,80.07 296.54,80.27 296.61,80.69 296.85,80.68 297.09,80.95 297.09,81.36 
					297.31,81.82 297.34,82.23 297.27,82.8 297.27,83.07 297.21,83.24 296.95,83.36 296.93,83.61 296.8,83.65 296.73,83.83 
					296.85,84.1 296.74,84.25 296.56,84.18 296.38,84.38 296.27,84.61 296.39,84.79 296.26,84.99 296.26,85.22 296.49,85.31 
					296.59,85.49 296.78,85.66 296.74,85.98 296.87,86.3 297.19,86.06 297.8,85.94 297.86,86.15 297.77,86.32 297.94,86.45 
					298.29,86.36 298.36,86.6 298.27,86.83 298.43,87.05 298.77,87.12 298.71,87.25 298.81,87.43 298.86,87.32 299.24,87.27 
					299.52,87.45 299.52,87.65 299.4,87.88 299.41,88.08 299.1,88.52 298.84,88.77 298.89,88.95 299.1,88.86 299.52,88.91 
					299.59,88.98 299.8,88.8 299.98,89.04 299.9,89.4 299.99,89.66 300.3,89.81 300.49,89.64 300.79,89.64 301.4,89.37 301.67,89.46 
					301.64,89.72 301.26,90.05 301.52,89.81 301.7,89.94 301.81,90.16 302.16,90.06 302.4,90.11 302.32,89.77 302.3,89.45 
					302.2,89.17 302.18,88.71 302.37,88.59 302.37,88.39 302.87,88.37 302.88,88.39 302.98,88.31 303.09,88.29 303.16,88.16 
					303.31,88.03 303.59,87.91 303.77,87.94 303.75,88.14 303.87,88.24 304.06,88.24 304.11,87.98 304.31,87.83 304.58,88.1 
					304.72,87.91 304.88,87.92 304.94,88.11 305.24,87.97 305.29,87.77 305.63,87.67 305.89,87.82 306.34,87.67 306.32,87.25 
					306.61,87.08 306.94,87.08 307.13,86.9 307.42,87.14 307.42,87.31 307.73,87.37 307.84,87.54 308.45,87.53 308.56,87.67 
					308.92,87.52 309.15,87.71 309.11,87.97 308.91,88 308.78,88.5 308.93,88.56 309.01,88.84 309.56,89.03 309.63,89.23 309.9,89.34 
					310.17,89.48 310.44,89.4 310.56,89.49 310.73,89.44 310.96,89.56 311.04,89.58 311.14,89.53 311.3,89.6 311.52,89.51 
					311.51,89.36 311.57,89.1 311.71,89.34 311.95,89.6 312.09,89.55 312.42,89.83 312.56,89.78 312.75,89.8 312.88,89.56 
					313.08,89.74 313.27,89.68 313.41,89.74 313.43,89.83 313.23,89.86 313.18,90.09 312.99,90.33 312.99,90.49 313.32,90.94 
					313.51,91.06 313.5,91.18 313.54,91.47 313.6,91.42 313.7,91.23 314,91.29 314,91.36 314.16,91.36 314.39,91.07 314.32,90.95 
					314.22,90.93 314.22,90.85 314.07,90.58 313.92,90.58 313.82,90.33 313.88,90.22 314.06,90.07 314.11,89.89 314.07,89.75 
					314.14,89.74 314.23,89.64 314.25,89.72 314.31,89.82 314.39,89.82 314.34,89.86 314.36,89.92 314.48,89.94 314.42,90.01 
					314.49,90.02 314.64,89.87 314.9,89.83 315,89.63 315.22,89.72 315.46,89.63 315.75,89.47 315.65,89.29 315.88,89.3 316.14,89.22 
					316.4,89.31 316.56,89.27 316.86,89.12 317.12,88.86 317.29,88.63 317.32,88.52 317.39,88.59 317.5,88.68 317.63,88.58 
					317.75,88.38 317.96,88.27 317.92,87.94 317.86,87.7 317.88,87.51 317.82,87.36 317.95,87.48 318.29,87.65 318.32,87.82 
					318.6,88.09 318.78,88.04 318.65,88.24 318.47,88.32 318.5,88.43 318.98,88.2 319.01,87.93 319.26,87.85 319.38,87.74 
					319.6,87.86 319.81,87.81 319.83,87.62 320.05,87.57 320.11,87.44 320.21,87.6 320.41,87.83 320.55,87.72 320.59,87.48 
					320.73,87.48 320.75,87.56 320.98,87.56 321.01,87.43 321.31,87.39 321.48,87.23 321.6,87.11 321.63,87.27 321.72,87.14 
					321.87,87.18 322.09,87.08 321.99,86.91 322.1,86.74 322.19,86.46 322.07,86.18 322.2,86.22 322.3,86.08 322.63,86.03 
					322.66,86.15 322.92,86.15 322.98,85.83 323.11,85.83 323.15,85.62 323.27,85.61 323.3,85.72 323.38,85.67 323.54,85.43 
					323.69,85.61 323.74,85.33 323.89,85.31 323.99,85.1 323.76,85.05 323.56,85.12 323.23,84.86 323.68,84.84 323.88,84.56 
					323.98,84.66 324.12,84.53 324.49,84.75 324.6,84.47 324.37,84.39 324.28,84.26 324.32,84.09 324.6,84.28 324.75,84.1 
					324.72,84.03 324.53,84.03 324.49,83.78 324.35,83.67 324.54,83.62 324.65,83.75 324.78,83.75 324.87,83.88 324.88,83.66 
					324.65,83.48 324.67,83.27 324.81,83.27 324.9,83.11 325.11,83.29 325.11,83.47 325.25,83.47 325.39,83.7 325.41,83.37 
					325.31,83.18 325.18,83.18 325.13,83.02 325.31,82.97 325.34,82.79 325.12,82.72 325.43,82.46 325.28,82.31 325.07,82.33 
					324.97,82.43 325.01,82.22 325.29,82.02 325.74,81.83 325.6,81.67 325.43,81.83 325.11,81.54 325.39,81.54 325.21,81.3 
					324.99,81.28 325.14,81.15 325.02,81.01 325.2,81.05 325.25,80.83 325.33,80.85 325.47,80.83 325.45,81.09 325.63,81.09 
					325.96,80.73 325.98,80.57 326.29,80.59 326.11,80.37 325.9,80.35 325.96,80.11 326.15,80.31 326.37,80.19 326.36,79.96 
					326.45,79.86 326.34,79.7 326.36,79.52 326.52,79.42 326.41,79.25 326.41,79.11 326.15,78.96 326.53,79.08 326.68,78.96 
					326.88,78.48 327.1,78.45 327.15,78.67 327.22,78.76 327.27,78.49 327.46,78.37 327.31,78.12 327.06,78.1 326.94,77.99 
					327.05,77.9 327.24,77.93 327.39,77.79 327.27,77.66 327.1,77.57 327.28,77.4 327.37,77.42 327.41,77.31 327.26,77.17 
					326.82,77.19 326.84,77.07 327.13,76.83 327.39,76.89 327.47,76.83 327.5,76.69 327.67,76.78 327.68,76.88 327.85,76.75 
					327.77,76.58 327.73,76.18 327.59,76.08 327.43,76.25 327.48,76.32 327.48,76.44 327.19,76.38 326.84,76.68 326.66,76.65 
					326.66,76.4 327.03,76.33 327.63,75.77 327.59,75.69 327.32,75.69 327.21,75.54 327.14,75.67 326.7,75.1 326.38,75.05 
					325.96,75.41 325.75,75.34 325.47,74.94 325.2,75 324.92,75.22 324.84,75.46 324.87,75.14 325.18,74.89 325.35,74.9 325.54,74.77 
					325.86,74.93 326.1,74.82 326.12,74.58 326.25,74.46 326.41,74.48 326.73,74.11 327.1,74.07 327.11,73.88 326.78,73.34 
					326.09,72.92 325.64,72.66 325.1,72.13 324.83,72.12 324.39,72.42 324.18,72.37 323.83,72.06 323.82,71.91 323.68,71.85 
					323.37,71.97 323.02,71.93 322.72,72.04 322.35,72.5 322.66,71.88 322.91,71.76 323.07,71.81 323.25,71.81 323.32,71.73 
					323.52,71.81 323.88,71.67 324.04,72.08 324.22,72.22 324.48,72.22 324.66,71.98 325.08,72.05 325.38,72.25 325.59,72.26 
					325.85,72.54 326.24,72.31 326.79,72.52 326.94,72.42 326.75,72.04 326.58,71.96 326.26,71.58 326.26,71.47 326.12,71.36 
					325.84,71.38 325.58,71.27 325.22,70.76 325.21,70.36 324.71,69.99 324.68,69.59 324.41,69.5 324.54,69.18 324.45,69.16 
					324.04,68.31 323.3,67.94 323.1,68.05 323.1,67.86 322.41,67.53 322.31,67.54 322.3,66.86 322.41,66.4 322.3,66.1 322.37,65.71 
					322.46,65.77 322.65,65.71 322.9,65.31 323.03,65.39 323.27,65.11 323.02,64.95 322.9,64.79 323.11,64.55 323.52,64.57 
					323.53,64.29 323.87,64.23 323.84,64.01 323.53,63.82 323.84,63.78 324.06,63.95 324.12,63.79 324.37,63.8 324.61,63.59 
					324.79,63.59 325.07,63.21 325.18,63.38 325.3,63.23 325.33,63.37 325.66,63.59 326,63.31 326,63.18 325.78,63.14 325.75,62.86 
					325.92,62.77 326.07,62.77 325.84,62.45 325.86,62.3 326.16,62.2 325.98,62.12 325.67,62.18 325.29,62.19 325.31,62.08 
					325.01,62.09 324.9,62.21 324.04,62.24 323.87,62.09 323.7,62.02 323.55,61.78 323.4,61.72 323.32,61.61 322.7,61.9 322.38,61.91 
					322.49,62 322.49,62.24 322.31,62.4 321.94,62.54 322,62.58 322.12,62.74 321.98,63 321.86,63.11 321.59,63.01 321.33,63.16 
					320.98,63.15 320.61,62.44 320.61,62.07 320.55,61.81 320.19,61.82 320.05,61.91 320.02,61.77 319.87,61.77 319.76,61.94 
					319.67,61.79 319.66,61.92 319.45,61.57 319.4,61.41 318.95,61.1 318.67,60.94 318.63,60.64 318.49,60.32 318.61,60.21 
					318.61,60.08 318.65,59.93 318.68,59.66 318.84,59.53 318.87,59.38 319.38,59.57 319.82,59.56 320.17,59.55 320.3,59.26 
					320.22,59.13 320.41,59.13 320.36,58.8 320.28,58.73 320.38,58.57 320.53,57.89 321.01,57.62 321.29,57.61 321.51,57.24 
					321.65,57.21 321.68,56.68 321.96,56.38 322.01,56.07 322.12,56.01 322.3,55.71 322.6,55.7 322.72,55.78 322.96,55.78 
					323.05,55.52 323.47,56.02 324.07,56.38 324.1,56.6 323.94,56.69 323.88,56.88 323.59,57.24 323.56,57.58 323.31,57.59 
					323.34,57.7 323.27,58.04 323.57,58.34 323.55,58.52 323.44,58.57 323.44,58.74 323.56,58.88 323.86,58.78 324.18,58.53 
					324.05,58.78 323.8,58.95 323.83,59.09 323.98,59.12 323.95,59.27 323.84,59.35 323.53,59.31 323.4,59.5 323.18,59.51 
					323.06,59.71 323.28,59.86 323.31,60.07 323.48,60.05 323.64,59.84 323.8,59.84 324.02,59.51 324.4,59.35 324.44,59.24 
					324.33,58.97 324.67,58.72 325.26,58.27 325.43,58.29 325.48,58.01 325.79,58.01 326.15,57.76 326.29,57.88 326.44,57.83 
					326.74,57.81 327.13,57.36 327.22,57.59 327.22,56.83 		"/>
				<path class="st1" d="M312.54,94.25h0.28l0.19,0.14h0.19l0.25,0.17l0.16-0.09l0.07-0.24h0.21l0.23,0.06l0.16-0.22v-0.15h0.26
					l0.19-0.21l-0.05-0.23l0.14-0.42l0.13-0.11l0.06-0.19l0.21-0.33l-0.12-0.35l-0.28-0.19l-0.29-0.1l-0.2,0.13l-0.14-0.11l-0.28,0.06
					h-0.14l-0.19,0.12h-0.25l-0.26,0.14h-0.25l-0.06,0.25l-0.4,0.24L312,92.99l0.13,0.22v0.39l0.16,0.27v0.15L312.54,94.25z"/>
				<polygon class="st1" points="328.13,75.36 327.87,75.2 327.72,75.22 327.61,75.18 327.67,75.36 327.94,75.45 328.13,75.58 		"/>
				<rect x="310.95" y="89.57" class="st1" width="0" height="0.01"/>
				<polygon class="st1" points="326.46,72.58 326.13,72.53 326.1,72.64 326.26,72.8 326.55,72.81 326.84,72.94 326.8,72.65 
					326.58,72.66 		"/>
				<polygon class="st1" points="261.81,66.52 260.46,66.8 260.85,66.72 		"/>
				<polygon class="st1" points="252.44,65.66 252.05,65.77 252,65.78 		"/>
				<polygon class="st1" points="322.91,86.6 323,86.52 322.83,86.36 322.63,86.46 322.67,86.59 		"/>
				<polygon class="st1" points="314.73,90.39 314.48,90.29 314.16,90.34 314.27,90.47 314.46,90.46 314.73,90.51 		"/>
				<polygon class="st1" points="311.54,38.51 311.39,38.56 311.39,38.56 		"/>
				<polygon class="st1" points="275.18,43.37 275.06,43.37 275.18,43.37 		"/>
				<polygon class="st1" points="337.66,71.08 337.55,71.2 337.64,71.28 337.74,71.12 		"/>
				<polygon class="st1" points="337.94,70.59 337.84,70.54 337.76,70.63 337.78,70.77 337.92,70.76 		"/>
				<polygon class="st1" points="337.51,70.51 337.45,70.5 337.35,70.63 337.38,70.89 337.48,71.07 337.61,71.08 337.66,70.85 
					337.51,70.59 		"/>
				<polygon class="st1" points="332.14,85.05 332.29,85.09 332.36,84.84 332.23,84.73 332.09,84.88 		"/>
				<polygon class="st1" points="331.82,85.2 331.91,85.11 331.84,84.94 331.69,84.95 331.63,85.2 		"/>
				<polygon class="st1" points="333.67,84.1 333.35,83.96 333.32,84.24 333.43,84.34 333.62,84.36 		"/>
				<polygon class="st1" points="336.19,69.85 336.25,69.77 336.09,69.8 		"/>
				<polygon class="st1" points="335.63,70.32 335.73,70.61 335.9,70.63 336.06,70.51 335.96,70.32 335.8,70.24 335.78,70.08 
					335.64,70.14 		"/>
				<polygon class="st1" points="335.95,70.06 336.11,69.97 335.92,69.94 		"/>
				<polygon class="st1" points="337.46,78.94 337.47,79.11 337.67,79.27 337.75,79.21 337.7,78.99 337.52,78.85 		"/>
				<polygon class="st1" points="347.75,45.13 347.57,44.77 347.2,44.7 346.76,44.34 346.66,44.13 346.36,44.13 346.39,44.25 
					346.25,44.41 346.13,44.41 346.06,44.5 346.18,44.68 346.25,45 346.72,45.72 346.83,46.03 346.86,46.54 346.81,46.72 
					346.94,47.13 347.05,47.4 347.02,47.51 346.91,47.52 346.7,47.76 346.78,48.01 346.93,48.25 346.98,48.38 347.1,48.45 
					347.19,48.64 347.1,48.73 347.08,48.93 346.93,49.05 346.48,48.98 346.05,48.74 345.86,48.79 345.76,48.99 345.84,49.09 
					345.94,49.11 346.21,49.31 346.24,49.43 346.14,49.56 346.03,49.83 345.85,49.86 345.8,49.99 345.65,50.07 345.55,50.29 
					345.62,50.56 345.59,50.93 345.62,51.11 345.79,51.11 346.01,51.27 346.22,51.46 346.38,51.92 346.47,52.41 346.38,52.47 
					346.49,52.69 346.71,52.83 347.03,52.47 347.13,52.24 347.1,52.05 347.24,51.95 347.6,51.97 347.78,52.12 347.85,51.92 
					348.06,51.65 347.95,51.49 347.64,51.49 347.35,51.41 347,51.04 346.71,51.11 346.43,50.96 346.34,50.74 346.34,50.48 
					346.52,50.33 346.7,50.3 347.04,50.52 347.18,50.61 347.5,50.17 347.8,49.95 348.06,49.95 348.16,50.06 348.38,50.11 
					348.62,50.07 348.86,50.33 349.21,50.66 349.62,50.87 350.04,50.98 350.18,51.16 350.41,51.26 350.39,51.05 350.44,50.83 
					350.36,50.53 350.42,50.08 350.56,49.54 350.92,49.03 351.14,48.96 351.4,49.03 351.75,49.03 351.73,48.89 351.91,48.75 
					352.01,48.83 352.19,48.82 352.29,48.67 352.34,48.47 352.57,48.37 352.74,48.24 352.76,47.98 352.89,47.9 352.97,47.71 
					352.81,47.73 352.61,47.91 352.49,48.11 352.28,48.11 352.31,47.98 352.29,47.77 352.07,47.49 351.74,47.29 351.65,47.16 
					351.65,46.8 351.79,46.39 351.79,46.16 351.72,46.05 351.66,46.13 351.6,46.37 351.38,46.66 350.95,46.96 350.61,47 350.51,46.94 
					350.31,46.98 350.04,46.72 349.71,46.68 349.31,46.49 349.08,46.23 348.82,46.18 348.71,45.98 348.37,45.74 		"/>
				<polygon class="st1" points="343.38,66.58 343.24,66.6 343.15,66.75 343.14,66.96 343.26,67.23 343.4,67.23 343.44,67.06 
					343.4,66.94 343.43,66.75 		"/>
				<polygon class="st1" points="346.33,59.24 346.24,59.33 346.13,59.78 346.15,59.95 346.32,59.85 346.37,59.89 346.29,60.05 
					346.28,60.31 346.37,60.27 346.52,60.13 346.59,59.83 346.55,59.68 346.36,59.63 346.38,59.43 		"/>
				<polygon class="st1" points="338.28,77.79 338.13,77.8 338.08,77.88 338,77.9 337.77,78 337.68,78.2 337.75,78.25 337.97,78.26 
					338.08,78.35 338.14,78.27 338.16,78.11 338.4,77.95 338.56,77.68 338.36,77.73 		"/>
				<polygon class="st1" points="341.82,67.45 341.82,67.62 341.7,67.81 341.45,67.89 341.25,68.04 341.12,68 340.97,67.64 
					340.84,67.65 340.48,68.06 340.47,68.3 340.24,68.46 340.18,68.74 340.56,68.83 340.63,69.1 340.55,69.17 340.55,69.31 
					340.76,69.63 341.1,69.67 341.07,69.84 341.18,69.89 341.27,69.79 341.44,69.85 341.56,69.81 341.54,69.64 341.3,69.38 
					341.42,69.15 341.53,68.76 341.86,68.56 341.94,68.42 342.24,68.45 342.62,68.7 342.73,68.88 342.9,68.81 343.02,68.33 
					343.32,68.05 343.35,67.87 343.26,67.77 343.2,67.59 342.91,67.35 342.7,67.34 342.51,67.2 342.15,67.18 		"/>
				<polygon class="st1" points="344.94,51.16 344.97,51.36 345.09,51.5 345.24,51.38 345.25,51.16 345.31,50.91 345.16,50.96 		"/>
				<polygon class="st1" points="339.15,74.21 338.98,74.25 338.92,74.41 339.07,74.68 339.3,74.72 339.36,74.6 339.32,74.42 		"/>
				<polygon class="st1" points="339.67,73.86 339.64,73.63 339.49,73.5 339.48,73.68 339.54,74.12 339.6,74.04 		"/>
				<polygon class="st1" points="342.69,66.83 342.52,66.79 342.3,66.99 342.5,67.05 342.68,66.96 		"/>
				<polygon class="st1" points="336.29,69.71 336.34,69.65 336.25,69.64 		"/>
				<polygon class="st1" points="336.29,81.58 336.43,81.53 336.44,81.29 336.77,81.08 336.78,80.85 336.91,80.68 336.79,80.41 
					336.65,80.68 336.42,80.82 336.48,80.92 336.44,81.04 336.19,81.22 		"/>
				<polygon class="st1" points="340.62,63.76 340.58,63.55 340.42,63.57 340.31,63.75 340.39,63.86 340.51,63.87 		"/>
				<polygon class="st1" points="338.06,68.18 337.77,68.4 337.7,68.56 337.52,68.69 337.27,68.97 337.18,69.18 336.95,69.18 
					336.71,69.32 336.83,69.32 336.96,69.33 337.05,69.57 337.17,69.89 337.08,69.98 337.03,69.77 336.92,69.61 336.86,69.82 
					336.93,70.07 337.1,70.14 337.13,70.3 337.04,70.47 337.17,70.39 337.26,70.21 337.47,70.14 337.6,70.19 337.5,70.29 
					337.59,70.36 337.8,70.3 337.78,70.05 337.63,69.92 337.39,69.98 337.4,69.88 337.47,69.76 337.41,69.55 337.52,69.41 
					337.75,69.5 337.98,69.9 338.02,70.19 338.13,70.33 338.15,70.79 337.95,71.22 337.72,71.24 337.78,71.39 337.98,71.75 
					338.07,72.22 338.3,72.48 338.29,72.71 338.18,72.86 338.35,73.07 338.56,73.04 338.74,73.14 338.83,73.04 338.83,72.9 
					338.63,72.59 338.63,72.16 338.75,72.02 338.89,72.13 338.81,72.25 338.81,72.38 339.01,72.59 339.1,72.95 339.03,73.17 
					339.06,73.36 339.31,73.21 339.57,72.84 339.33,72.59 339.32,72.45 339.45,72.39 339.64,72.45 339.76,72.53 339.83,72.26 
					339.82,71.83 339.74,71.62 339.76,70.85 339.73,70.44 339.88,70.2 340.13,69.94 340.07,69.74 339.94,69.7 339.93,69.45 
					339.78,69.42 339.83,69.24 339.38,69.25 339.32,69.15 339.54,69.02 339.61,68.85 339.54,68.5 339.36,68.39 339.15,68.43 
					339.15,68.52 338.97,68.65 338.78,68.62 338.48,68.3 338.52,68.11 338.94,67.9 339.31,67.83 339.71,67.97 339.92,68.06 
					339.95,67.95 339.94,67.77 339.96,67.49 339.93,67.31 340,67.16 340.19,67.14 340.3,67.31 340.47,67.32 340.7,67.19 341.14,67.11 
					341.56,66.97 341.84,66.96 341.94,67.01 342.09,66.94 342.1,66.85 342.38,66.69 342.45,66.55 342.76,66.29 343.08,66.18 
					343.49,66.25 343.72,66.19 343.83,66.29 343.83,66.51 343.63,66.8 343.57,67.03 343.69,67.11 343.72,67.36 343.74,67.61 
					343.7,67.72 343.77,67.97 344.04,68.09 344.42,68.44 344.67,68.52 344.84,68.43 345.1,68.03 345.13,67.78 345.27,67.68 
					345.31,67.55 345.26,67.37 345.43,67.04 345.67,67.01 345.88,67.01 345.95,66.87 345.89,66.77 345.83,66.5 345.35,66.28 
					345.28,66.15 345.39,65.79 345.54,65.65 345.65,65.62 345.59,65.73 345.62,66.02 345.72,66.1 345.84,66.02 345.9,65.94 
					346.08,65.98 346.22,66.07 346.36,66.03 346.45,66.06 346.4,66.17 346.15,66.23 346.13,66.3 346.21,66.34 346.42,66.28 
					346.75,66.11 347.43,66.17 347.78,66.13 347.69,66.04 347.62,65.77 347.69,65.46 347.98,65.31 348.2,65.35 348.25,65.62 
					348.17,65.88 348.28,66.07 348.49,66.05 348.69,65.77 348.53,65.3 348.61,65.01 348.94,64.75 349.13,64.75 349.19,64.62 
					349.06,64.46 349.13,64.14 349.29,64.03 349.55,64.08 349.61,64.23 349.48,64.41 349.41,64.78 349.49,65.55 349.61,65.61 
					349.79,65.5 349.91,65.24 350.13,65.22 350.38,64.95 350.48,64.6 350.42,64.38 350.71,64.1 350.68,63.93 350.53,63.79 
					350.22,63.36 350.11,63.04 350.02,62.39 350.12,61.63 350.14,61.11 349.91,60.17 349.57,59.72 349.55,59.37 349.62,58.93 
					350.04,58.74 350.25,58.74 350.35,58.92 350.43,58.83 350.36,58.51 350.32,58.31 350.23,58.2 350.16,57.94 350.18,57.8 
					350.17,57.59 350.27,57.43 350.27,57.34 350.3,57.13 350.22,57.02 350.2,56.68 350.26,56.52 350.15,56.32 350.07,55.8 
					349.83,55.37 349.69,55.37 349.55,55.29 349.52,54.72 349.26,54.48 348.72,53.87 348.56,53.59 348.46,53.17 348.43,52.76 
					348.45,52.62 348.29,52.72 348.17,52.74 348.11,52.66 347.87,52.55 347.74,52.54 347.75,52.62 347.62,52.95 347.63,53.18 
					347.75,53.29 347.87,53.23 348.18,52.97 348.31,53.3 348.21,53.55 348.05,53.65 347.87,53.52 347.81,53.52 347.89,53.84 
					347.77,53.96 347.58,53.89 347.54,53.66 347.49,53.38 347.41,53.24 347.24,53.3 347.1,53.22 347.04,53.43 347.14,53.83 
					347.15,54.1 346.99,54.16 346.83,54.4 346.83,54.55 347.17,54.9 347.28,55.1 347.16,55.47 346.98,55.59 346.77,55.54 
					346.73,55.69 346.93,55.94 347.13,55.89 347.31,55.69 347.57,56.28 347.67,56.94 347.61,57.3 347.64,57.94 347.4,58.88 
					347.47,59.24 347.36,59.65 347.03,59.83 346.89,60.23 346.91,60.67 346.74,60.94 346.69,61.21 346.37,61.52 345.73,61.9 
					345.47,61.98 345.35,62.23 345.02,62.05 344.7,61.66 344.71,61.49 344.85,61.42 344.99,61.17 344.97,61.03 345.14,60.86 
					345.12,60.79 344.81,60.87 344.58,61.1 344.3,61.21 344.24,61.47 344.43,61.79 344.47,62.42 344.43,62.73 344.12,63.05 
					344.12,63.23 344,63.36 343.96,63.83 344.08,63.96 344.1,64.16 344.01,64.23 344.07,64.31 344,64.48 343.87,64.49 343.95,64.61 
					343.75,64.7 343.61,64.59 343.41,64.74 343.3,64.69 343.25,64.4 343.17,64.37 342.99,64.5 342.83,64.5 342.75,64.44 342.16,64.65 
					341.85,64.77 341.55,64.87 341.2,64.9 340.87,65 340.75,64.93 340.47,64.96 339.96,65.31 339.87,65.63 339.68,65.76 339.64,65.95 
					339.27,66.37 339.04,66.46 338.84,66.73 338.78,66.91 338.58,67.11 338.22,67.18 338.1,67.37 338.18,67.79 338.32,67.87 
					338.37,68.02 338.28,68.17 		"/>
				<polygon class="st1" points="336.55,69.52 336.38,69.41 336.31,69.41 336.32,69.46 336.46,69.57 		"/>
				<polygon class="st1" points="340.16,63.84 340.11,63.99 340.18,64.03 340.28,63.97 		"/>
				<polygon class="st1" points="336.03,66.88 335.9,66.96 335.83,67.13 335.83,67.36 335.89,67.55 335.99,67.45 336.13,67.18 
					336.08,66.99 		"/>
				<polygon class="st1" points="335.77,68 335.87,67.99 335.99,67.88 336.06,67.7 335.85,67.68 335.74,67.85 		"/>
				<polygon class="st1" points="334.9,66.7 334.99,66.56 334.97,66.32 334.87,66.25 334.67,66.41 334.69,66.56 334.76,66.74 		"/>
				<polygon class="st1" points="333.84,66.61 333.71,66.69 333.77,66.82 333.98,66.74 		"/>
				<polygon class="st1" points="331.43,60.11 330.94,60.54 330.48,60.65 330.07,61.06 329.97,61.37 330.01,61.41 330.23,61.25 
					330.64,61.26 330.44,61.36 330.98,61.81 331.32,62.31 331.51,62.35 331.42,62.49 331.61,62.77 331.72,63.01 331.27,62.85 
					331.18,62.72 331.09,62.95 330.89,62.9 330.62,63.29 331.21,63.57 331.37,63.52 331.5,63.81 331.51,64.38 331.66,64.48 
					331.76,64.39 332,64.84 331.56,65.14 331.55,65.29 331.73,65.44 331.74,65.67 331.58,65.77 331.58,66.02 331.72,66.28 
					331.55,66.29 331.88,66.92 332.07,66.94 332.13,67.25 332.23,67.33 332.22,67.56 332.42,67.42 332.44,67.07 332.56,67.24 
					332.76,66.96 333.36,66.44 333.6,66.39 333.64,66.53 333.83,66.31 333.97,66.33 334.11,66.59 334.36,66.49 334.46,66.61 
					334.6,66.52 334.49,66.33 334.82,66.12 335.13,66.12 335.49,65.65 335.41,65.51 335.6,65.37 335.52,64.33 335.43,64.33 
					335.34,64.44 335.33,64.12 335.15,63.17 334.94,62.95 334.92,62.35 334.13,61.35 333.4,60.59 332.9,59.68 332.37,60.03 		"/>
				<polygon class="st1" points="331.9,67.61 332,67.61 331.98,67.38 331.91,67.23 331.82,67.39 331.73,67.39 331.68,67.49 
					331.79,67.68 		"/>
				<polygon class="st1" points="332.89,69.42 333.06,69.11 333.04,68.93 332.78,68.88 332.2,69.06 332.05,69.25 332.15,69.46 
					332.41,69.51 		"/>
				<polygon class="st1" points="333.61,51.75 333.38,51.54 332.21,52.46 331.86,54.53 327.92,57.3 327.26,57.61 327.23,57.61 
					327.22,57.59 327.22,57.61 327.26,57.7 327.32,57.67 327.44,58.15 327.64,58.02 327.65,57.81 327.95,57.98 328.07,58.15 
					328.51,58.09 328.66,57.91 328.83,57.88 328.76,58.12 328.57,58.24 328.75,58.5 328.42,59.03 328.44,59.67 328.53,59.78 
					329.04,59.8 329.3,59.66 329.01,59.93 328.67,59.96 328.48,60.34 328.46,60.9 328.39,61.15 328.51,61.18 328.75,61.04 
					329.04,61.15 328.79,61.53 328.9,61.72 329.18,61.49 329.34,61.6 329.59,61.29 329.52,61.15 329.67,61.04 329.97,61.37 
					330.07,61.06 330.48,60.65 330.94,60.54 331.43,60.11 332.37,60.03 332.9,59.68 332.75,59.39 331.75,58.81 331.61,58.59 
					331.12,58.5 331.04,58.14 331.17,58 331.07,57.69 331.07,57.35 331.43,57.13 331.54,56.83 331.81,56.66 332.08,56.67 
					332.14,56.52 332.34,56.35 332.25,56.15 332.93,55.44 332.86,55.34 333.2,55.04 333.32,54.73 333.1,54.56 333.09,53.86 
					332.82,53.64 332.8,53.25 332.98,52.58 332.99,52.25 333.15,52.28 333.59,51.79 333.65,51.8 333.64,51.79 333.63,51.79 		"/>
				<polygon class="st1" points="333.38,51.53 333.38,51.54 333.61,51.75 333.63,51.79 333.64,51.79 333.41,51.46 		"/>
				<polygon class="st1" points="327.26,57.61 327.92,57.3 331.86,54.53 332.21,52.46 333.38,51.54 333.38,51.54 333.38,51.53 
					333.41,51.46 333.34,51.37 332.91,51.27 332.8,51.14 332.8,50.86 332.56,50.67 332.39,50.74 332.39,51.04 332.37,51.31 
					332.47,51.51 332.37,51.76 332.1,51.8 331.88,52.09 331.88,52.38 331.36,52.81 331.04,52.85 330.81,52.99 331.1,53.2 331.39,53.5 
					331.41,53.69 331.24,54.06 330.89,54 330.34,54.06 330.05,53.94 329.81,54.04 329.62,53.87 329.4,53.75 329.15,53.36 328.9,53.67 
					328.88,54.12 328.9,54.26 328.78,54.49 328.56,55.15 328.31,55.27 328.08,55.72 327.73,55.95 327.73,56.19 327.57,56.54 
					327.22,56.83 327.22,57.59 327.23,57.61 		"/>
				<polygon class="st1" points="333.38,51.54 333.38,51.53 333.38,51.54 		"/>
				<polygon class="st1" points="316.77,43.99 316.76,43.75 316.26,43.39 315.87,42.91 315.38,42.46 315.03,42.03 314.43,41.87 
					314.29,41.99 313.92,42.1 313.9,42.36 313.94,42.65 313.61,43.16 313.33,42.89 312.75,42.79 312.2,42.79 311.77,43.12 
					311.13,42.81 310.92,42.38 311.09,41.79 311.05,41.52 311.17,41.13 311.11,40.68 311.4,38.58 311.39,38.56 311.26,38.43 
					310.75,38.27 310.3,38.35 310.3,38.48 309.99,38.66 309.75,38.67 309.61,38.56 309.36,38.7 309.15,38.62 309,38.39 308.68,38.18 
					308.43,38.15 308.02,38.26 307.94,38.18 307.7,38.18 307.5,38.38 307.39,38.66 307.2,38.87 306.92,38.99 306.75,39.26 
					306.75,39.38 306.66,39.64 306.4,39.89 305.78,39.88 305.55,39.91 305.34,40.16 305.03,40.15 304.52,40.44 304.31,40.77 
					304.15,40.79 303.9,40.66 303.6,40.66 303.46,40.76 303.12,40.81 302.31,40.82 301.77,40.67 301.16,40.73 300.96,40.72 
					300.72,40.46 300.55,40.42 300.38,40.33 300.11,40.14 299.96,39.71 299.83,39.59 299.54,39.65 299.15,39.66 298.68,39.48 
					298.4,39.09 297.88,39.1 297.48,39.06 297.18,38.89 296.84,38.99 296.49,39 296.21,39.17 295.67,39.21 295.29,39.33 295.05,39.58 
					294.88,39.64 294.71,39.58 294.51,39.57 294.33,39.7 293.92,39.68 293.82,39.77 293.63,39.76 293.21,39.55 292.82,39.43 
					292.74,39.28 292.47,39.04 292.3,39.03 292.13,38.89 292.14,38.65 292.01,38.35 291.88,38.2 291.88,38.01 291.75,37.82 
					291.75,37.65 291.65,37.43 291.43,37.35 290.86,37.37 290.63,37.33 290.44,37.23 290.09,37.2 289.97,37.08 289.78,36.96 
					289.29,36.97 288.96,36.94 288.64,36.83 288.6,36.74 288.23,36.57 287.88,36.48 287.7,36.35 287.43,36.34 287.26,36.49 
					287.22,36.7 287.31,36.93 287.21,37.15 287.07,37.1 286.85,37.18 286.71,37.4 286.71,37.61 286.44,37.92 286.43,38.58 
					286.52,38.91 286.93,39.02 287.06,39.2 287.31,39.28 287.36,39.46 287.29,39.9 287.27,40.31 287.55,40.49 287.69,40.66 
					287.44,41.07 286.98,41.13 286.73,41.08 286.67,41.14 286.42,41.17 286.19,41.07 285.61,41.06 285.4,41.13 285.19,40.98 
					284.94,40.91 284.7,40.94 284.41,41.15 284.14,41.25 283.96,41.35 283.48,41.13 283.23,40.92 282.56,40.54 282.48,40.36 
					282.44,40.14 282.35,39.93 281.92,39.96 281.71,40.09 281.47,40.07 281.32,40.12 281.04,40.14 280.89,39.98 280.86,39.82 
					280.69,39.59 280.63,39.59 280.42,39.71 280.11,39.69 279.88,39.7 279.62,39.77 279.14,39.83 278.93,39.92 278.79,40.27 
					278.61,40.36 278.16,40.24 278.07,40.35 278.08,40.55 278.23,40.66 278.11,40.76 277.93,41.03 277.7,41.09 277.48,41.3 
					277.47,41.48 277.12,41.65 277.02,41.92 277,42.2 276.57,42.35 276.34,42.6 276.25,42.74 275.63,42.71 275.39,42.84 275.17,43.33 
					275.18,43.37 275.2,43.49 275.19,43.8 275.27,43.88 275.37,44.05 275.46,44.03 275.48,43.95 275.52,43.93 275.6,44.07 
					275.61,44.24 275.67,44.42 275.81,44.55 275.97,44.61 276.17,44.84 276.44,45.01 276.63,45.25 276.64,45.34 276.71,45.54 
					276.98,45.71 277.1,45.71 277.15,45.55 277.25,45.43 277.52,45.31 277.77,45.3 277.84,45.42 278.06,45.66 278.2,45.72 
					278.35,45.65 278.48,45.52 278.68,45.51 278.91,45.59 279.01,45.76 279.21,45.82 279.42,45.99 279.57,46.21 279.61,46.42 
					279.69,46.66 279.83,46.86 279.92,47.1 280.13,47.27 280.33,47.37 280.5,47.65 280.61,47.82 280.63,48.12 280.57,48.29 
					280.63,48.61 280.78,48.79 280.7,49.03 280.51,49.19 280.42,49.33 280.42,49.53 280.47,49.74 280.77,50.2 281.07,50.37 
					282.39,50.66 282.98,50.65 283.35,50.61 283.46,50.51 283.56,50.48 284.47,50.7 284.89,50.96 285,51.12 285.24,51.16 
					285.37,51.16 285.54,51.2 286.03,51.55 286.36,51.74 286.74,51.74 286.86,51.71 286.95,51.75 286.99,51.99 287.04,52.14 
					287.18,52.16 287.38,52.23 287.57,52.44 287.6,52.61 287.75,53 287.99,53.29 288.27,53.7 288.39,54 288.69,54.58 288.92,54.66 
					289.19,54.63 289.73,54.57 290.35,54.61 291.17,54.56 292.29,54.66 292.93,54.59 293.38,54.43 293.46,54.28 293.61,54.18 
					293.82,54.23 294.64,54.21 295.61,54.32 295.97,54.33 296.42,54.77 297.27,55.16 298.12,55.48 298.51,55.52 299,55.77 
					299.47,55.7 300.04,55.54 300.09,55.74 300.09,55.89 300.49,56 300.81,55.99 301.05,55.79 301.64,55.32 302.02,54.89 
					302.78,54.64 303.74,54.3 304.18,54.17 304.56,54.05 305.12,53.99 305.49,53.97 305.86,53.7 306.23,53.45 306.55,53.43 
					306.97,53.3 307.2,53.3 307.39,52.85 307.74,52.27 308.34,51.61 308.51,51.35 308.65,51.1 308.65,50.93 308.1,50.59 307.49,50.19 
					307.51,50 307.48,49.71 307.5,49.12 307.69,48.84 308.01,48.6 308.53,48.49 308.86,48.51 309.19,48.74 309.6,48.88 309.94,48.95 
					310.22,49.09 310.35,49.06 310.43,48.85 310.62,48.65 310.92,48.43 311.17,48.24 311.43,47.71 311.58,47.59 311.91,47.66 
					312.23,47.66 312.84,47.25 313.12,47.18 313.26,47.01 313.25,46.72 313.3,46.31 313.54,45.95 313.64,45.79 313.79,45.82 
					313.98,45.79 314.07,45.64 314.08,45.39 314.19,45.36 314.43,45.53 314.65,45.4 315.02,45.11 315.26,44.77 315.5,44.72 
					315.87,44.88 316.03,44.78 316.31,44.74 316.44,44.86 316.64,44.91 316.75,44.75 316.76,44.56 316.86,44.41 316.87,44.17 		"/>
				<polygon class="st1" points="240.33,52.72 240,52.49 240.33,52.72 		"/>
				<polygon class="st1" points="238.4,52.79 238.4,52.79 240,52.49 		"/>
				<polygon class="st1" points="274.62,43.27 274.56,43.19 274.16,43.05 273.86,42.79 273.66,42.74 273.58,42.52 273.7,42.19 
					273.56,42.12 273.29,42.26 273.15,42.5 272.86,42.59 272.22,42.63 272.01,42.74 271.94,42.87 271.73,42.77 271.46,42.66 
					271.34,42.66 271.28,42.59 271.15,42.47 271.08,42.29 271.07,42.07 271.12,41.94 271.11,41.78 270.91,41.69 270.81,41.69 
					270.49,41.49 270.21,41.41 270.08,41.4 269.94,41.09 269.72,40.7 269.32,40.41 268.91,40.3 268.43,40.3 267.98,40.36 267.93,40.5 
					268.02,40.64 267.95,40.77 267.69,40.87 267.46,40.82 267.17,40.95 266.82,40.76 266.6,40.8 266.41,40.92 266.17,40.92 
					265.98,40.72 265.67,40.63 265.65,40.45 265.69,40.26 265.3,40.08 265.09,40.18 265.1,40.48 265.16,40.54 265.11,40.7 
					264.89,40.84 264.56,40.9 261.24,36.74 258.81,34.92 258.7,34.72 258.91,34.66 259.14,34.41 259.15,34.17 259,34.08 258.65,34.19 
					258.36,34.27 258.15,34.48 257.94,34.56 257.64,34.85 257.61,35.05 257.41,35.22 257.3,35.45 257.04,35.63 256.65,35.68 
					256.39,35.77 256.45,36.08 256.28,36.2 256.15,36.11 255.61,35.98 255.3,36.06 255.15,36.25 254.96,36.27 254.78,36.03 
					254.78,35.67 254.95,35.53 255.06,35.27 254.91,35.18 254.71,35.35 254.53,35.35 254.03,35.1 253.73,35.17 253.8,35.32 
					253.95,35.39 253.76,35.6 253.6,35.61 253.42,35.27 253.37,34.84 252.91,34.5 252.82,34.56 252.92,34.84 252.88,35.05 
					252.72,35.05 252.63,34.77 252.46,34.84 252.41,35.1 252.26,35.16 252.05,34.99 251.75,35.17 251.59,35.05 251.47,34.8 
					251.68,34.74 251.69,34.63 251.64,34.38 251.71,34.15 251.68,33.99 251.5,33.9 251.31,33.66 251.22,33.38 251.11,33.3 251,32.97 
					250.72,32.94 250.42,33.07 250.1,33.08 249.78,32.86 249.41,32.9 249.07,32.76 248.87,32.83 248.71,32.8 248.46,32.94 
					248.38,33.2 248.02,33.22 247.88,33.3 248,33.5 248.01,33.69 247.65,33.77 247.48,33.72 247.29,33.97 246.97,34.03 246.84,34.11 
					246.72,34.11 246.15,34.5 245.84,34.6 245.59,34.75 245.4,34.71 245.25,34.57 245.07,34.72 245.03,34.89 244.74,34.89 
					244.59,35.03 244.6,35.31 244.49,35.41 244.3,35.33 244.11,35.35 243.9,35.5 243.56,35.51 243.2,35.73 243.14,35.85 242.77,35.88 
					242.43,36.04 242.12,36.07 241.66,36.22 241.63,36.41 241.5,36.59 241.34,36.34 241.1,36.33 240.87,36.48 240.87,36.65 
					240.76,36.78 240.52,36.61 240.2,36.65 240.12,36.5 239.92,36.49 239.78,36.66 239.49,36.67 239.4,36.76 239.54,37.08 
					239.41,37.22 239.66,37.29 240,37.24 240.11,37.53 239.75,37.54 239.63,37.65 239.66,37.82 240,37.83 240.27,37.95 240.44,37.82 
					240.65,37.81 240.87,38.03 241.13,38.11 241.12,38.38 240.96,38.48 240.74,38.41 240.18,38.47 239.86,38.75 239.56,39.19 
					239.58,39.48 239.78,39.51 239.85,39.82 239.65,40.06 239.6,40.34 239.36,40.38 239.32,40.51 239.41,40.68 239.43,40.85 
					239.75,40.85 239.93,41.03 240.23,41.09 240.28,41.24 240.53,41.45 240.94,41.46 241.06,41.55 241.13,42.61 241,42.84 
					240.54,42.99 240.16,42.95 239.75,42.7 239.61,42.83 239.59,43.09 239.45,43.37 239.15,43.43 238.68,43.17 238.27,43.19 
					238.08,43.08 237.97,43.16 237.72,43.08 237.46,42.77 237.66,42.66 237.75,42.48 237.56,42.38 237.23,42.2 237.09,42.39 
					236.79,42.36 236.57,42.43 236.62,42.76 236.24,42.8 236.16,42.65 235.77,42.29 235.46,42.34 235.35,42.56 235.19,42.36 
					234.98,42.43 234.96,42.68 234.67,42.71 234.64,43.22 234.31,43.47 234.1,43.38 233.94,43.13 233.43,43.05 233.24,42.79 
					232.98,42.95 233.01,43.29 232.83,43.55 232.68,43.5 232.66,43.19 232.55,43 232.34,42.98 231.96,42.7 231.74,42.42 231.45,42.42 
					231.18,42.07 231.02,42.06 230.88,41.85 230.66,41.84 230.18,42 229.87,41.8 229.73,41.44 229.48,41.45 229.2,41.64 228.94,41.67 
					228.9,41.84 228.72,42.02 228.71,41.79 228.53,41.9 228.46,42.11 228.21,42.25 228.07,42.12 228.26,41.89 228.29,41.72 
					227.97,41.58 227.57,41.35 227.51,41.52 227.57,41.77 227.53,42.01 227.25,41.93 227.05,42.09 226.92,42.45 226.74,42.46 
					226.34,42.71 226.25,43.02 226.44,43.27 226.44,43.59 226.01,43.59 225.59,43.64 225.9,44.72 225.73,44.85 225.78,45.26 
					225.36,45.3 224.96,45.05 224.87,44.8 224.15,44.15 223.95,44.41 223.95,44.75 223.59,45.19 223.33,45.32 223.4,45.98 
					223.6,46.19 223.48,47.02 223.28,47.49 223.84,47.71 224.07,48.09 223.98,48.29 224.42,48.66 224.53,48.46 225.4,48.7 
					226.03,49.28 226.57,50.2 226.06,50.2 226.03,50.42 226.52,50.76 226.87,50.64 227.22,50.86 227.31,50.85 227.38,50.99 
					227.56,50.99 227.65,50.85 227.77,50.86 227.86,50.96 227.96,50.86 228,50.7 228.13,50.72 228.36,50.53 228.47,50.36 
					228.62,50.38 228.78,50.16 228.9,50.16 229,50.24 229.07,50.2 229.13,50.01 229.32,49.81 229.67,49.81 229.8,49.9 229.97,49.9 
					230.07,49.81 230.14,49.88 230.12,50.08 230.25,50.24 230.34,50.15 230.5,50.14 230.52,50.26 230.71,50.33 230.84,50.26 
					230.85,50.12 231,50.04 231.02,49.95 231.2,49.9 231.38,49.94 231.84,49.96 231.88,50.08 231.98,50.26 232.16,50.3 232.17,50.38 
					232.06,50.55 232.12,50.7 232.33,50.91 232.31,51.11 232.16,51.39 232.2,51.52 232.29,51.63 232.37,51.72 232.27,51.84 
					232.09,51.92 232.05,52.22 232.22,52.58 232.48,52.64 232.68,52.71 232.63,52.83 232.35,52.97 232.14,52.97 231.92,52.73 
					231.73,52.73 231.62,52.8 231.5,52.7 231.27,52.73 231.01,52.8 230.81,52.7 230.57,52.78 230.27,52.87 230.11,53.04 230.15,53.17 
					230.15,53.38 230.02,53.47 230.04,53.6 230.31,53.91 230.31,54.1 230.38,54.16 230.65,54.14 230.72,54.27 230.65,54.34 
					230.42,54.25 230.3,54.31 230.15,54.43 230.04,54.37 229.88,54.38 229.77,54.32 229.38,54.35 229.24,54.3 229.13,54.44 
					229.11,54.56 229.27,54.77 229.49,54.78 229.72,54.87 229.82,55.08 229.97,55.17 230.07,55.46 230.18,55.5 230.25,55.66 
					230.63,56.1 230.65,56.37 230.63,56.7 230.74,56.7 230.99,56.65 231.08,56.6 231.2,56.66 231.32,56.88 231.43,56.99 231.54,57.22 
					231.66,57.26 231.86,57.17 232.1,57.23 232.32,57.32 232.61,57.31 232.71,57.37 232.66,57.47 232.68,57.6 232.63,57.98 
					232.47,58.35 232.55,58.67 232.58,59.02 233.41,58.27 234.07,58.04 234.95,58.18 235.9,58.72 236.78,59.74 237.33,59.62 
					237.53,59.6 236.43,53.16 238.4,52.79 240,52.49 240.33,52.72 242.15,54 242.98,54.31 244.12,55 246.13,54.78 248.34,54.78 
					248.84,55.15 249.03,55.29 249.38,56.11 249.84,55.96 249.89,57.87 250.85,58 251.41,59.56 251.69,59.58 252.3,59.26 252.7,59.18 
					253.16,59.24 253.77,59.54 253.9,59.65 254.45,59.14 254.72,58.63 254.88,58.45 255.06,58.08 255.59,57.44 255.82,57.35 256.1,57 
					256.18,57.01 256.22,56.88 256.52,56.69 256.42,56.54 256.68,56.27 257.12,56.32 257.36,56.46 258.35,56.56 259.19,56.54 
					259.61,56.47 259.6,56.11 259.52,55.81 259.49,55.52 259.65,55.43 259.9,55.48 260.23,55.5 260.37,55.43 260.8,55.42 
					261.08,55.59 261.63,55.73 262.37,55.83 262.62,55.72 262.86,55.51 263.18,55.6 263.51,55.55 264.15,55.4 264.84,55.59 
					265.25,55.44 266.08,55.49 266.64,55.71 266.88,55.65 267.46,56.31 268.06,56.47 268.32,56.33 268.31,55.97 268.56,55.8 
					268.6,55.64 268.72,55.58 268.49,55.31 268.58,55.07 268.74,54.92 268.64,54.37 268.35,54.15 268.3,53.93 268.04,53.52 268,53.24 
					267.88,53.06 267.86,52.86 267.73,52.46 267.92,52.27 267.92,52.14 267.6,52.1 267.23,52.13 267,51.95 267,51.76 267.25,51.53 
					267.47,51.44 267.64,51.52 267.83,51.52 268.25,51.36 268.84,51.24 269.16,51.16 269.34,51.09 269.49,51.22 269.71,51.22 
					269.86,51.13 270.04,51.13 270.07,50.91 270.19,50.64 269.88,50.5 269.73,50.38 269.8,50.18 269.8,49.58 269.92,48.8 
					269.94,48.49 270.06,48.11 270.18,47.49 270.33,47.47 270.64,47.51 271.17,47.7 271.53,47.73 272.06,47.61 272.29,47.61 
					272.36,47.77 272.48,47.81 272.68,47.75 272.91,47.47 273.2,47.37 273.55,46.99 273.58,46.8 273.33,46.46 273.07,45.92 
					273.05,45.35 273.1,45.04 273.34,44.86 273.74,44.72 273.91,44.42 273.83,44.28 273.84,44.06 274.2,43.69 274.41,43.57 
					274.65,43.3 		"/>
				<polygon class="st1" points="240,52.49 238.4,52.79 240.33,52.72 		"/>
				<polygon class="st1" points="258.16,58.89 257.5,58.37 257.32,58.33 257.28,58.71 257.05,58.96 256.81,58.88 256.56,58.64 
					255.96,58.47 255.71,58.31 255.91,57.97 256.34,57.31 256.32,57.02 256.18,57.01 256.1,57 255.82,57.35 255.59,57.44 
					255.06,58.08 254.88,58.45 254.72,58.63 254.45,59.14 253.9,59.65 253.77,59.54 253.16,59.24 252.7,59.18 252.3,59.26 
					251.69,59.58 251.41,59.56 250.85,58 249.89,57.87 249.84,55.96 249.38,56.11 249.03,55.29 248.84,55.15 248.34,54.78 
					246.13,54.78 244.12,55 242.98,54.31 242.15,54 240.33,52.72 238.4,52.79 236.43,53.16 237.53,59.6 238.15,59.54 238.71,59.64 
					238.85,59.33 238.62,59.09 238.52,58.6 238.81,58.02 239.22,57.98 239.44,57.65 239.75,57.48 240.08,57.65 240.23,57.55 
					240,57.22 240.62,57.28 241.54,57.73 242.32,58.2 242.42,58.51 243.43,59.05 244.23,59.46 244.45,59.33 244.72,59.37 
					245.28,59.77 245.52,60.58 245.79,60.77 245.89,61.12 246.2,61.69 246.67,61.9 247.57,62.47 248.09,62.85 248.47,63.13 
					249.48,63.58 250.4,64.2 251.12,64.32 251.27,64.5 251.49,64.46 252,64.81 251.97,65.16 252.05,65.77 252.44,65.66 252.73,65.8 
					252.89,66.04 253.08,66.05 253.3,65.85 253.53,65.87 253.65,66.02 253.75,65.17 254.03,64.5 254.16,64.35 254.12,63.98 
					253.85,63.86 253.7,63.48 253.83,63.21 253.76,62.91 253.38,62.92 253.15,63.04 252.79,62.54 252.78,62.12 253.06,61.9 
					253.66,61.99 253.9,61.92 253.94,61.61 254.47,61.43 254.38,61.21 254.27,61.1 254.85,60.97 255.31,60.77 255.32,60.5 254.9,60.3 
					254.92,59.98 255.26,59.85 255.62,59.59 255.89,59.61 256.32,59.17 256.61,59.47 256.72,59.66 257.38,59.56 257.85,59.59 
					258.23,59.16 		"/>
				<polygon class="st1" points="256.18,57.01 256.18,57.01 256.1,57 		"/>
				<polygon class="st1" points="251.97,65.16 252,64.81 251.49,64.46 251.27,64.5 251.12,64.32 250.4,64.2 249.48,63.58 
					248.47,63.13 248.09,62.85 247.57,62.47 246.67,61.9 246.2,61.69 245.89,61.12 245.79,60.77 245.52,60.58 245.28,59.77 
					244.72,59.37 244.45,59.33 244.23,59.46 243.43,59.05 242.42,58.51 242.32,58.2 241.54,57.73 240.62,57.28 240,57.22 
					240.23,57.55 240.08,57.65 239.75,57.48 239.44,57.65 239.22,57.98 238.81,58.02 238.52,58.6 238.62,59.09 238.85,59.33 
					238.71,59.64 238.15,59.54 237.53,59.6 237.33,59.62 236.78,59.74 235.9,58.72 234.95,58.18 234.07,58.04 233.41,58.27 
					232.58,59.02 232.59,59.13 232.79,59.34 232.88,59.54 233.1,59.71 233.18,59.95 233.47,60.4 233.41,60.8 233.25,61.08 
					233.31,61.77 233.46,61.97 233.53,62.17 234,62.61 233.97,62.44 233.82,62.27 233.9,62.18 234.3,62.25 234.49,62.13 234.59,62.22 
					234.52,62.5 234.6,62.78 234.77,62.71 234.94,62.94 234.87,63.05 234.64,62.98 234.49,63.02 234.37,62.91 234.12,63.12 
					234.13,63.36 234.28,63.59 234.25,63.27 234.41,63.24 234.52,63.32 234.73,63.35 234.87,63.61 235.24,63.79 235.32,64.06 
					235.31,64.45 235.35,64.67 235.33,65.36 235.46,65.84 235.71,66.51 235.99,66.34 236.65,66.31 236.77,65.94 236.94,65.72 
					237.17,65.7 237.73,65.22 238.31,65.12 238.81,65.22 238.91,64.9 239.18,64.83 239.44,64.94 239.75,64.93 240.23,65.32 
					240.65,65.44 241.44,65.94 241.66,65.93 241.87,65.78 242.41,66 242.7,66.05 242.77,66.45 242.9,66.55 243.18,66.48 243.69,66.6 
					244.24,67.36 244.83,67.41 245.17,67.55 245.38,67.93 245.29,68.14 245.4,68.47 245.4,68.67 245.5,68.88 245.64,68.84 
					245.94,68.92 246.15,69.08 246.38,69.08 246.55,68.92 246.79,68.92 247.09,69.14 247.17,69.33 247.28,69.44 247.42,69.3 
					247.81,69.24 248,69.01 248.04,68.84 248.22,68.68 248.15,68.5 248.57,68.27 249.09,68.17 249.14,68.03 249.35,67.86 
					249.56,67.81 249.63,67.52 249.65,67.45 249.66,67.11 249.97,66.78 249.97,66.5 249.84,66.4 249.87,66.23 250,66.17 250.15,66.07 
					250.5,65.97 250.61,65.98 251.02,65.68 251.33,65.58 251.61,65.75 251.9,65.68 252,65.78 252.05,65.77 		"/>
				<polygon class="st1" points="237.53,59.6 237.33,59.62 237.53,59.6 		"/>
				<polygon class="st1" points="238.15,59.54 237.53,59.6 237.53,59.6 		"/>
				<polygon class="st1" points="361.12,131.92 361.04,131.64 360.89,131.78 360.88,131.9 360.99,132.04 361.09,132.03 		"/>
				<polygon class="st1" points="365.85,128.06 365.68,127.94 365.57,128.16 365.68,128.33 365.85,128.29 		"/>
				<polygon class="st1" points="366.83,128.84 366.9,128.71 366.83,128.47 366.62,128.29 366.45,128.47 366.6,128.69 		"/>
				<path class="st1" d="M365.78,123.44l-0.17-0.12l-0.22,0.07h-0.22l-0.08,0.07l0.08,0.2h0.22l0.11,0.11h0.34l0.3-0.24l-0.16-0.12
					L365.78,123.44z"/>
				<polygon class="st1" points="361.81,131.46 361.79,131.6 361.95,131.63 361.93,131.55 		"/>
				<polygon class="st1" points="361.27,131.64 361.15,131.54 361.26,131.76 361.36,131.79 		"/>
				<polygon class="st1" points="362.03,131.25 361.95,131.4 362.13,131.58 362.11,131.46 362.17,131.27 		"/>
				<path class="st1" d="M360.84,133.12l-0.18-0.21l-0.38-0.16L360.84,133.12z"/>
				<polygon class="st1" points="362.18,131.47 362.22,131.57 362.29,131.45 		"/>
				<polygon class="st1" points="360.79,132.87 360.75,132.75 360.68,132.79 		"/>
				<polygon class="st1" points="360.37,132.64 360.53,132.72 360.6,132.63 		"/>
				<path class="st1" d="M362.68,131.6l0.09,0.14v-0.2L362.68,131.6z"/>
				<path class="st1" d="M361,132.6l0.07-0.12h-0.21l-0.15,0.15C360.81,132.62,360.9,132.61,361,132.6z"/>
				<polygon class="st1" points="360.65,132.09 360.69,132.17 360.83,132.2 360.89,132.14 		"/>
				<polygon class="st1" points="364.35,127.07 364.05,127.19 364.14,127.39 364.32,127.24 		"/>
				<polygon class="st1" points="332.39,101.88 332.29,101.91 332.28,102.06 332.64,102.44 332.7,102.31 332.66,102.16 		"/>
				<polygon class="st1" points="335.28,105.39 335.23,104.98 335.08,104.65 335.04,104.53 334.76,104.63 334.52,104.52 
					334.34,104.53 334.44,104.78 334.44,105.06 334.61,105.22 334.74,105.09 334.9,105.23 334.88,105.58 335.01,105.83 335.05,106.22 
					335.27,106.37 335.29,106 335.44,106.2 335.68,106.14 335.7,105.92 335.46,105.52 		"/>
				<polygon class="st1" points="334.24,104.27 334.43,104.4 334.64,104.37 334.7,104.12 334.38,104.16 		"/>
				<polygon class="st1" points="330.76,101.19 330.62,101.39 330.66,101.59 330.98,101.8 331.04,101.65 331.15,101.52 331.01,101.29 
							"/>
				<polygon class="st1" points="336.25,105.5 336.34,105.57 336.4,105.46 336.24,105.35 		"/>
				<polygon class="st1" points="336.08,106.13 336.23,106.46 336.19,106.62 336.25,106.75 336.35,106.77 336.42,106.46 
					336.24,106.24 336.23,105.98 336.33,105.92 336.26,105.77 336.13,105.83 		"/>
				<polygon class="st1" points="334.36,105.63 334.37,105.37 334.27,105.5 		"/>
				<polygon class="st1" points="336.41,105.08 336.31,105.1 336.36,105.2 336.49,105.17 		"/>
				<polygon class="st1" points="328.9,93.1 329.15,93.05 328.97,92.88 		"/>
				<polygon class="st1" points="325.02,109.06 324.96,108.89 324.88,108.98 		"/>
				<polygon class="st1" points="324.81,108.96 324.83,108.85 324.69,108.98 		"/>
				<polygon class="st1" points="337.07,106.77 336.97,106.51 336.84,106.26 336.79,106.55 336.74,106.66 336.88,106.83 		"/>
				<polygon class="st1" points="329.27,93.58 329.48,93.46 329.14,93.46 		"/>
				<polygon class="st1" points="336.62,107.01 336.74,107.14 336.78,106.97 336.65,106.86 		"/>
				<polygon class="st1" points="329.5,92.8 329.54,92.51 329.34,92.65 		"/>
				<polygon class="st1" points="331.39,111.31 331.15,111.32 331.17,111.46 331.33,111.7 331.48,111.75 331.82,111.44 331.85,111.34 
					331.7,111.29 331.53,111.18 		"/>
				<polygon class="st1" points="331.42,103.91 331.17,103.65 330.89,103.72 330.83,103.89 331.11,103.99 331.24,104.02 
					331.24,104.28 331.18,104.53 331.19,105 331.09,105.32 331.2,105.77 331.32,105.72 331.41,105.61 331.71,105.42 331.88,105.43 
					331.92,105.34 332.06,105.34 332.17,105.17 332.49,104.9 332.62,104.61 332.77,104.5 332.81,104.27 332.69,104.07 332.53,104.17 
					332.35,104.39 332.19,104.14 332,104.09 331.72,104.11 331.57,104.1 331.62,103.99 		"/>
				<polygon class="st1" points="332.17,105.67 332.18,105.5 332.08,105.43 331.86,105.5 331.77,105.77 331.93,105.91 		"/>
				<polygon class="st1" points="331.99,103.06 332.01,102.93 331.82,102.83 331.7,102.92 331.74,103.08 		"/>
				<polygon class="st1" points="332.67,103.49 332.73,103.65 332.95,103.29 333.15,103.27 333.44,103.64 333.77,103.78 
					333.98,103.75 333.98,103.59 333.82,103.38 333.41,103.11 333.23,103.08 332.99,102.86 332.89,102.87 332.92,102.78 
					332.73,102.72 332.74,103.01 332.79,103.23 332.68,103.33 		"/>
				<polygon class="st1" points="331.84,107.11 332.02,107.14 332.34,107.34 332.61,107.36 332.62,107.67 332.82,107.77 
					333.07,107.63 333.07,107.39 332.9,107.04 332.86,106.52 333.03,105.75 333.27,105.5 333.28,105.27 333.07,105.12 332.95,105.19 
					332.77,105.11 332.56,105.25 332.56,105.5 332.4,105.75 332.45,106.11 332.31,106.42 331.88,106.53 331.76,106.69 		"/>
				<polygon class="st1" points="333.97,104.75 333.82,104.81 333.74,105.3 333.48,105.71 333.45,106.02 333.34,106.41 333.13,106.66 
					333.12,106.95 333.18,107.17 333.39,106.94 333.48,106.36 333.85,105.94 333.92,105.68 333.88,105.44 333.98,105.27 		"/>
				<polygon class="st1" points="333.78,106.73 333.92,106.91 333.89,107.04 334.23,107.02 334.63,106.83 334.74,106.65 
					334.71,106.36 334.57,106.23 334.41,106.23 333.94,106.51 		"/>
				<polygon class="st1" points="331.19,102.61 331.08,102.87 330.92,103.1 331.06,103.45 331.22,103.4 331.33,103.06 331.23,102.82 
					331.3,102.52 		"/>
				<polygon class="st1" points="333.47,103.02 333.58,103.02 333.36,102.73 333.17,102.67 333.25,102.81 		"/>
				<polygon class="st1" points="333.25,107.67 333.42,107.79 333.64,107.7 333.66,107.55 333.58,107.48 333.33,107.51 		"/>
				<polygon class="st1" points="335.12,107.54 334.88,107.35 334.83,107.49 334.89,107.65 335.08,107.78 		"/>
				<polygon class="st1" points="328.08,104.13 328.17,104 328.27,103.94 328.18,103.73 327.9,103.66 327.88,103.82 327.95,104.13 		
					"/>
				<polygon class="st1" points="335.81,107.6 335.71,107.62 335.71,107.97 335.65,108.1 335.48,107.97 335.19,107.85 335.05,108.38 
					335.16,108.45 335.13,108.67 334.96,108.75 334.83,108.45 334.55,108.56 334.4,109.02 334.09,109.18 333.83,109.25 333.59,109.48 
					333.87,109.06 333.85,108.61 333.49,108.31 333.28,108.33 333.12,108.56 332.81,108.7 332.69,108.94 332.8,109.17 332.42,109.24 
					332.17,109.17 331.98,109.36 331.71,109.43 331.47,109.72 331.56,109.92 331.48,110.31 331.29,110.69 331.57,110.99 
					331.69,110.81 331.89,110.24 332.05,110.11 332.19,109.77 332.34,109.7 332.52,109.88 332.46,110.15 332.54,110.23 332.66,110.16 
					332.8,110.25 332.82,110 332.92,109.92 333.06,109.97 332.99,110.14 333.13,110.12 333.34,110.28 333.45,110.29 333.31,110.08 
					333.4,109.96 333.34,109.84 333.45,109.73 333.57,109.73 333.83,109.95 334.06,110 334.31,110.21 334.37,110.44 334.58,110.65 
					334.35,110.56 334.24,110.62 334.25,110.76 334.13,110.92 334.26,111.07 334.29,111.28 334.23,111.45 334.42,111.7 334.46,111.92 
					334.72,112.22 335.02,112.22 335.25,112.43 335.53,112.55 335.75,112.42 335.79,112.28 335.92,112.17 336.01,112.29 
					335.91,112.44 336,112.69 336.08,112.8 336.27,112.66 336.65,112.18 336.66,111.91 336.54,111.73 336.39,111.38 336.16,111.2 
					336.21,110.98 336.54,110.41 336.73,110.3 336.92,110.57 336.98,110.84 337.11,111.04 337.1,111.29 337.22,111.69 337.31,111.88 
					337.32,111.69 337.35,111.39 337.25,111 337.3,110.84 337.45,110.81 337.55,110.99 337.54,110.82 337.65,110.83 337.79,110.47 
					337.74,110.03 337.58,109.78 337.44,109.56 337.44,109.25 337.4,108.94 337.3,109.1 337.29,108.78 337.31,108.61 337.2,108.6 
					337.05,108.41 337.09,108.26 337.27,108.29 337.27,107.95 337.08,107.66 337.09,107.45 336.91,107.61 336.65,107.35 
					336.28,107.04 336.22,106.82 336.13,106.84 335.92,106.79 335.91,107.09 336.02,107.62 336.02,107.82 		"/>
				<polygon class="st1" points="335.65,106.27 335.6,106.51 335.78,106.72 335.78,106.52 		"/>
				<polygon class="st1" points="330.29,101.94 330.02,101.83 329.45,101.34 329.13,101.42 328.82,101.3 328.58,101.43 328.64,101.55 
					328.82,101.54 328.89,101.86 329.07,101.93 329.25,102.17 329.25,102.58 329.46,102.71 329.47,102.95 329.74,103.28 
					329.96,103.31 330.2,103.11 330.2,102.9 330.33,102.81 330.33,102.57 330.19,102.37 330.29,102.19 		"/>
				<polygon class="st1" points="328.54,101.1 328.29,100.84 328.11,100.84 328.14,101.03 328.47,101.17 		"/>
				<polygon class="st1" points="327.86,103.19 327.95,103.39 328.07,103.53 328.36,103.56 328.54,103.63 328.65,103.5 328.6,103.35 
					328.32,103.3 328.16,103.11 327.94,103.08 		"/>
				<polygon class="st1" points="328.3,105.63 328.22,105.51 328.18,105.62 328.08,105.7 328.01,105.86 328.2,105.88 328.4,105.87 
					328.41,105.72 		"/>
				<polygon class="st1" points="333.81,101.31 334.17,101.24 334.26,100.96 334.14,100.69 333.94,100.48 333.81,100.58 
					333.86,100.89 333.78,101.09 333.69,101.17 		"/>
				<polygon class="st1" points="330.78,100.37 330.98,100.49 330.93,100.28 330.74,100.15 		"/>
				<polygon class="st1" points="334.32,102.77 334.2,102.72 334.2,102.9 334.41,103.33 334.75,103.6 335.06,103.96 335.19,104.05 
					335.16,104.17 335.03,104.33 334.99,104.4 335.12,104.35 335.17,104.42 335.26,104.5 335.48,104.63 335.56,104.82 335.96,104.84 
					336.04,104.88 336.1,104.81 336.25,104.88 336.12,104.71 336.04,104.47 335.89,104.33 335.91,103.95 335.86,103.47 335.89,103.32 
					335.78,103.24 335.55,102.93 335.41,102.68 335.25,102.67 335.16,102.71 335.04,102.65 334.89,102.68 334.8,102.77 334.53,102.76 
							"/>
				<polygon class="st1" points="325.21,107.97 324.82,108.47 324.75,108.61 324.78,108.71 325.04,108.5 325.22,108.47 325.4,108.28 
					325.69,108.17 325.99,107.72 326.3,107.61 326.51,107.42 326.53,107.29 326.72,107.06 326.72,106.65 326.87,106.47 327.28,106.44 
					327.38,106.17 327.57,105.97 327.79,105.94 327.9,105.71 327.76,105.38 327.56,105.14 327.58,104.88 327.56,104.49 327.44,104.54 
					327.38,104.96 327.42,105.35 327.21,105.22 327.38,105.49 327.37,105.68 327.14,105.94 326.97,105.92 326.73,106.21 
					326.71,106.41 326.43,106.57 326.16,107.14 325.77,107.52 325.56,107.55 325.36,107.92 		"/>
				<polygon class="st1" points="330.83,98.94 330.5,99.13 330.64,99.49 330.6,99.6 330.65,99.79 330.84,99.61 330.86,99.2 331,99.07 
							"/>
				<polygon class="st1" points="329.75,94.34 329.56,94.21 329.34,93.96 328.82,93.86 328.43,94 328.38,94.3 328.11,94.84 
					328.19,95.17 328.2,95.73 328.04,96.4 327.91,96.72 328.13,97.17 328.13,97.35 327.93,97.45 327.7,97.41 327.51,97.19 
					327.48,97.52 327.54,97.81 327.7,97.82 327.75,97.92 327.65,98.1 327.75,98.5 327.95,98.86 327.96,99.35 328.08,99.44 
					328.18,99.36 328.28,99.4 328.3,99.67 328.56,100.01 328.73,100.02 328.89,99.82 328.74,99.66 328.75,99.5 329.04,99.53 
					329.28,99.7 328.99,100.08 328.84,100.26 328.87,100.41 328.84,100.73 329.01,101.04 329.09,100.76 329.25,100.7 329.36,100.94 
					329.23,101.16 329.44,101.11 329.63,100.95 329.94,101.26 330.19,101.1 330.14,100.92 330.25,100.74 330.56,100.72 331.12,100.94 
					331.23,101.14 331.53,101.36 331.79,101.81 331.9,101.79 331.81,101.34 331.53,100.84 331.57,100.7 331.71,100.73 331.87,100.89 
					332.04,100.98 332.22,101.29 332.61,101.44 332.71,101.69 332.71,101.98 332.92,102.05 333.22,102.4 333.45,102.33 333.44,102.23 
					333.67,102.28 333.65,102.42 333.44,102.55 333.66,102.82 333.89,102.9 333.99,102.51 333.96,102.34 334.08,102.22 333.97,102.08 
					333.75,102.09 333.55,101.99 333.28,101.99 333.29,101.81 333.11,101.33 333.05,101.1 333.18,101.01 333.32,101.09 333.51,101.06 
					333.46,100.97 333.19,100.79 332.87,100.78 332.72,100.52 332.6,100.62 332.62,100.88 332.44,101 332.31,100.86 332.35,100.58 
					332.19,100.26 331.79,100.01 331.52,100.01 331.16,100.3 331.1,100.52 330.89,100.59 330.58,100.48 330.45,100.22 330.24,100.05 
					330.24,99.76 330.35,99.6 330.17,99.41 330.04,99.06 329.89,98.94 329.94,98.61 330.07,98.41 330.05,98.1 330.14,97.86 
					330.56,97.46 330.73,97.36 330.64,97.56 330.66,97.7 330.88,97.34 330.81,97.02 330.97,96.63 331.1,95.99 330.96,95.83 
					330.88,95.48 330.72,95.43 330.48,95.01 330.53,94.48 330.69,94.3 330.71,94.1 330.53,93.87 330.41,93.92 330.39,94.05 
					330.2,94.2 329.82,94.2 		"/>
				<path class="st1" d="M330.13,93.18l-0.17,0.2l0.16,0.13l0.11-0.2C330.19,93.27,330.16,93.23,330.13,93.18z"/>
				<polygon class="st1" points="324.34,109.3 324.33,109.48 324.49,109.73 324.62,109.73 324.63,109.39 324.67,109.28 324.58,109.21 
							"/>
				<polygon class="st1" points="308.93,130.04 308.94,129.92 308.8,129.92 308.83,130.05 		"/>
				<polygon class="st1" points="298.03,117.77 297.83,117.84 298.15,117.94 		"/>
				<polygon class="st1" points="341.63,130.03 341.49,130.13 341.68,130.14 		"/>
				<polygon class="st1" points="295.99,116.65 295.89,116.76 295.81,116.93 296.07,117.09 296.38,117.05 296.2,116.8 		"/>
				<polygon class="st1" points="313.87,119.78 313.91,120.29 314.31,120.79 314.43,121 314.27,120.92 314.19,121 314.36,121.31 
					314.64,121.4 314.81,121.36 315.23,121.3 315.59,121.07 315.84,121.14 315.58,121.13 315.26,121.37 314.79,121.48 314.58,121.67 
					314.33,121.7 314.34,121.81 314.66,121.88 314.99,122.08 315.38,122.46 315.51,122.7 315.55,122.94 315.36,123.21 315.21,123.39 
					315.28,123.55 315.51,123.7 315.58,124.31 315.59,124.63 315.75,125.01 315.9,125.01 316.11,124.83 316.19,125 316.47,125.02 
					316.68,125.09 317.02,125.07 317.25,124.9 317.42,125.02 317.59,124.91 317.71,124.65 317.69,124.5 317.77,124.68 317.71,124.92 
					317.83,125.25 317.87,125.7 317.84,125.92 318.03,125.92 318.35,125.53 318.5,125.49 318.64,125.62 318.84,125.59 318.9,125.46 
					319.23,125.41 319.43,125.18 319.58,125.16 319.82,125.31 319.98,125.21 320.13,125.34 320.13,125.55 320.23,125.69 
					320.48,125.76 320.39,125.58 320.49,125.37 320.6,125.58 320.82,125.64 320.94,125.57 321.09,125.77 321.22,125.71 321.26,125.81 
					321.4,126.01 321.35,126.22 321.43,126.59 321.69,126.55 322.25,126.28 322.64,126.22 323.1,125.9 323.38,125.39 323.38,125.2 
					323.46,124.86 323.51,124.97 323.66,124.97 323.86,124.53 323.78,124.46 323.66,124.34 323.67,124.23 323.71,124.29 
					323.92,124.35 324.01,124.14 323.97,123.95 323.82,123.97 323.73,123.91 323.89,123.8 323.92,123.56 323.87,123.5 323.54,123.52 
					323.65,123.37 323.6,123.25 323.8,123.28 324.03,123.18 324.07,122.94 324.3,122.68 324.32,122.39 324.25,122.21 324.38,122.28 
					324.5,122.53 324.73,122.29 324.9,122.05 324.76,121.7 325.12,121.42 325.22,120.95 325.33,120.76 325.38,120.25 325.51,120.1 
					325.51,119.91 325.79,119.62 325.92,119.79 326,119.65 325.91,119.29 326.35,119.72 326.66,119.76 326.86,119.61 327.04,119.68 
					327.2,119.61 327.27,119.37 327.06,119.32 326.98,119.16 326.76,118.9 326.56,118.9 325.99,118.37 325.78,118.25 325.72,118.02 
					325.61,117.92 325.65,117.75 326.01,117.68 326.14,117.42 325.94,117.24 325.49,116.77 325.4,116.49 325.18,116.29 325.28,116.09 
					325.39,116.06 325.36,115.91 325.25,115.85 325.03,115.59 325.16,115.52 325.46,115.56 325.76,115.48 325.5,115.17 325.22,115.07 
					325.31,114.93 325.29,114.8 325.42,114.77 325.44,114.7 325.14,114.61 324.76,114.62 324.62,114.52 324.02,114.51 323.6,114.55 
					323.37,114.45 323.09,114.79 323.11,114.96 322.97,115.2 322.97,115.4 322.68,116.44 322.27,117.06 322.06,117.63 321.52,118.44 
					321.56,118.64 320.92,118.74 320.36,119.04 320.04,119.05 319.94,118.89 319.59,118.72 318.94,118.74 318.74,118.92 
					317.99,119.22 317.25,119.18 317.06,119.28 316.72,119.26 316.67,119.41 316.28,119.52 316.08,119.5 315.97,119.27 315.67,118.98 
					315.62,118.87 315.19,118.56 314.91,118.07 314.7,118.13 314.57,118.34 314.24,118.77 314.03,119.14 314.02,119.32 314.08,119.51 
					314.06,119.67 		"/>
				<polygon class="st1" points="299.46,121.71 299.62,121.9 299.81,121.71 299.81,121.51 299.6,121.42 		"/>
				<polygon class="st1" points="341.86,131.95 342.06,131.91 342.01,131.69 341.83,131.59 341.67,131.67 341.69,131.81 		"/>
				<polygon class="st1" points="302.41,125.21 302.43,124.98 302.14,124.77 301.97,125.01 302.46,125.47 		"/>
				<polygon class="st1" points="300.21,120.77 300.24,120.6 299.93,120.49 299.78,120.69 300.1,120.69 		"/>
				<polygon class="st1" points="301.78,124.8 301.99,124.61 301.74,124.51 		"/>
				<polygon class="st1" points="311.81,124.83 311.72,124.97 311.94,124.98 311.93,124.89 312.11,124.8 312.1,125.18 312.3,125.39 
					312.53,125.03 312.67,125.25 312.88,125.29 312.96,125.1 313.17,125 313.05,124.73 312.59,124.44 312.14,124.36 312,124.4 
					312.1,124.63 312.09,124.77 		"/>
				<polygon class="st1" points="301.11,123.81 301.27,124.01 301.57,124.11 301.25,123.65 		"/>
				<polygon class="st1" points="300.42,123.27 300.76,123.38 300.76,122.87 300.36,122.3 300.06,122.2 299.78,122.42 299.78,122.64 
					300.07,122.75 		"/>
				<polygon class="st1" points="342.12,132.07 341.85,132.21 342.01,132.21 		"/>
				<polygon class="st1" points="305.72,119.77 306.03,119.92 306.14,119.84 306.05,119.45 305.75,119.19 305.4,119.12 305.2,119.46 
					305.25,119.71 		"/>
				<polygon class="st1" points="304.78,118.7 304.64,118.71 304.98,119.21 305.11,119.32 305.27,119.03 305.13,118.83 		"/>
				<polygon class="st1" points="335.8,123.44 336.01,123.47 336,123.24 335.83,123.17 335.65,123.3 335.48,123.21 335.21,123.14 
					335.05,123.21 334.92,123.17 334.74,123.35 334.72,123.48 334.82,123.63 335.07,123.68 335.37,123.5 335.56,123.55 		"/>
				<polygon class="st1" points="310.23,115.76 310.25,116 310.4,115.84 		"/>
				<polygon class="st1" points="307.75,121.7 307.97,121.91 308.2,121.77 308.12,121.52 307.89,121.52 		"/>
				<polygon class="st1" points="310.25,116.78 310.4,116.7 310.26,116.56 		"/>
				<polygon class="st1" points="307.49,118.98 307.12,119.35 307.41,119.44 307.54,119.18 		"/>
				<polygon class="st1" points="304.1,118.41 304.34,118.14 304.1,117.86 303.94,118 303.71,118.05 303.85,118.45 		"/>
				<polygon class="st1" points="308.12,118.99 307.99,119.11 307.78,119.09 307.66,119.37 307.95,119.45 308.03,119.78 
					308.21,119.72 308.29,119.31 308.16,119.17 308.27,118.96 		"/>
				<polygon class="st1" points="309.82,116.42 309.6,116.33 309.44,116.37 309.41,116.61 309.56,116.7 		"/>
				<polygon class="st1" points="311.13,124.91 311.09,125.14 311.25,125 		"/>
				<polygon class="st1" points="336.15,132.34 336.08,132.25 336,132.36 336.05,132.42 		"/>
				<polygon class="st1" points="322.67,132.46 322.37,132.11 322.01,132.03 321.64,132.15 321.34,132.08 321.04,132.16 
					321.04,132.37 321.17,132.54 321.54,132.62 321.87,132.88 321.94,133.03 322.05,132.87 322.27,132.76 322.36,132.66 322.6,132.61 
							"/>
				<polygon class="st1" points="322.4,133.09 322.55,133.01 322.46,132.87 322.33,133 		"/>
				<polygon class="st1" points="322.35,130.5 322.48,130.52 322.57,130.52 322.52,130.45 322.35,130.37 322.1,130.34 321.99,130.44 
					322,130.52 322.18,130.69 		"/>
				<polygon class="st1" points="310.38,116.3 310.29,116.12 310.2,116.28 		"/>
				<polygon class="st1" points="313.07,115.38 313.18,115 312.87,114.58 312.64,114.72 312.51,114.91 312.77,115.17 312.93,115.17 
					312.87,115.38 		"/>
				<polygon class="st1" points="309.19,123.18 309.18,123.4 308.93,123.59 309.1,123.81 309.59,123.85 309.72,123.98 309.73,124.25 
					309.88,124.35 309.96,124.71 310.27,124.9 310.53,124.87 310.62,125.14 310.75,125.25 310.89,125.04 310.8,124.77 310.94,124.44 
					310.49,124.34 310.2,124.02 310.1,123.41 309.99,123.31 309.95,123.08 309.76,122.99 309.59,122.99 309.61,123.23 309.71,123.4 
					309.45,123.31 309.28,123.13 		"/>
				<polygon class="st1" points="298.23,119.48 298.42,119.53 298.67,120 298.79,119.94 298.85,119.59 298.93,119.4 298.62,119.16 
					298.42,118.78 298.24,118.71 298.11,118.85 297.85,118.86 298.16,119.18 		"/>
				<polygon class="st1" points="323.64,126.1 323.62,125.63 323.56,125.52 323.43,125.6 323.29,125.99 323.25,126.38 323.36,126.51 
					323.57,126.37 		"/>
				<polygon class="st1" points="332.86,135.89 332.95,135.68 332.88,135.52 332.63,135.64 332.68,135.69 332.26,135.89 
					332.05,136.08 332.25,136.15 		"/>
				<polygon class="st1" points="323.91,132.51 323.49,132.37 323.2,132.57 323.14,132.94 322.9,132.93 322.79,133 322.87,133.13 
					323.31,133.26 323.57,133.15 323.75,133.22 323.73,133 323.85,132.82 		"/>
				<polygon class="st1" points="323.04,130.92 322.98,130.93 322.78,130.92 322.83,130.99 323.02,131 		"/>
				<polygon class="st1" points="332.44,132.99 332.6,132.83 332.82,132.72 332.54,132.77 		"/>
				<polygon class="st1" points="338.68,121.45 338.68,121.31 338.53,121.3 338.44,121.56 338.61,121.63 		"/>
				<polygon class="st1" points="332.96,132.32 332.78,132.47 332.92,132.55 333,132.43 		"/>
				<polygon class="st1" points="332.85,135.06 332.71,135.28 332.85,135.33 332.95,135.06 		"/>
				<path class="st1" d="M324.13,133.43l0.25,0.11l0.35-0.08l0.19,0.08l0.29-0.1l0.12-0.16l0.24,0.09l0.3-0.12h0.27l0.29-0.25
					l0.09,0.19h0.25h0.38l-0.17-0.15h0.35v-0.29l-0.1,0.11l-0.08-0.24v-0.2l-0.28-0.08v0.21l-0.14,0.06v-0.23l-0.27-0.17l-0.27,0.1
					l-0.26-0.16l-0.22-0.09l-0.33,0.2v0.15l0.54,0.2l0.22,0.22h-0.36l-0.22,0.1l-0.32-0.2l-0.07-0.24h-0.18l-0.23,0.06l-0.24-0.06
					l-0.39,0.15c-0.06,0.07-0.12,0.14-0.17,0.22v0.16l0.09,0.1l-0.07,0.11L324.13,133.43z"/>
				<polygon class="st1" points="325.5,115.06 325.64,115.12 325.56,114.98 		"/>
				<polygon class="st1" points="342.44,129.51 342.3,129.44 342.25,129.62 		"/>
				<polygon class="st1" points="310.28,130.99 310.4,131.11 310.76,131.17 311.08,131.28 311.32,131.13 311.51,131.23 311.92,131.26 
					312.34,131.58 312.94,131.75 313.19,131.46 313.37,131.45 313.57,131.66 313.83,131.71 313.99,131.52 314.19,131.51 
					314.51,131.73 314.94,131.72 315.59,132.13 316.3,132.4 316.58,132.25 317.05,132.28 317.39,132.52 317.7,132.26 318.08,132.34 
					318.42,132.53 318.83,132.51 319.21,132.31 319.42,132.32 319.68,132.59 319.95,132.66 320.3,132.96 320.6,132.92 320.8,133.13 
					320.96,133.08 320.89,132.67 320.74,132.57 320.87,132.4 320.95,131.81 320.8,131.64 320.57,131.6 320.51,131.51 320.29,131.52 
					320.11,131.63 319.89,131.64 319.68,131.51 319.39,131.62 319.09,131.48 318.9,131.27 318.88,131.07 318.62,130.73 318.61,130.37 
					318.25,130.36 318.07,130.45 317.88,130.24 317.65,130.25 317.36,130 317.18,129.89 316.94,129.94 316.72,129.94 316.39,129.59 
					316.13,129.6 316.06,130.13 315.89,130.35 315.28,130.46 314.56,130.34 313.74,130.35 313.28,130.15 313.17,130.03 313.22,129.77 
					313.06,129.49 312.47,129.42 311.99,129.31 311.73,129.09 311.31,129.07 311.19,129.21 311.08,129.31 310.87,129.14 
					310.44,129.07 310.12,129.07 310,128.95 309.73,129.27 309.75,129.55 309.62,129.83 309.33,129.87 309.31,130.15 309.11,130.22 
					309,130.1 308.91,130.12 308.92,130.28 309.09,130.38 309.64,130.39 309.93,130.27 310.05,130.51 310.23,130.62 310.39,130.53 
					310.58,130.54 310.47,130.65 		"/>
				<polygon class="st1" points="325.72,115.58 325.44,115.65 325.65,115.71 		"/>
				<polygon class="st1" points="325.47,116.15 325.56,116.18 325.56,115.94 325.43,115.86 		"/>
				<polygon class="st1" points="323.81,125.68 323.74,125.61 323.69,125.72 323.7,126.06 323.78,126.04 		"/>
				<polygon class="st1" points="327.52,134.49 327.83,134.44 328.04,134.71 328.27,134.75 328.49,135.07 328.8,135.21 329.18,135.17 
					329.52,135 329.51,134.82 329.29,134.61 329.06,134.27 328.8,134.27 328.71,134.02 328.39,133.87 328.15,134.01 327.9,134.01 
					327.54,133.72 326.96,134.02 326.94,134.22 327.15,134.41 		"/>
				<polygon class="st1" points="325.86,115.03 325.86,114.94 325.57,114.83 325.56,114.89 325.64,115.02 		"/>
				<polygon class="st1" points="339.5,124.97 339.63,124.97 339.68,124.84 339.44,124.86 		"/>
				<polygon class="st1" points="339.25,123.29 339.43,123.25 339.65,123.25 339.82,123.25 339.9,123.1 339.56,122.76 339.24,122.75 
					338.86,123.03 339.01,123.19 		"/>
				<polygon class="st1" points="338.97,132.22 338.78,132.28 338.96,132.37 		"/>
				<polygon class="st1" points="338.69,121.85 338.61,121.78 338.51,121.96 338.79,122.05 		"/>
				<polygon class="st1" points="339.46,132.4 339.78,132.29 339.78,132.15 339.56,132.19 339.16,132.16 339.2,132.28 		"/>
				<polygon class="st1" points="339.38,125.28 339.39,125.12 339.23,125.26 		"/>
				<polygon class="st1" points="333.04,128 332.82,127.95 332.77,127.75 332.85,127.65 333.01,127.52 333.05,127.4 333.12,127.51 
					333.13,127.38 333.05,127.2 333.04,127.03 332.85,127 332.74,127.1 332.71,127.53 332.59,127.94 332.36,128.34 332.33,128.54 
					332.51,128.64 332.68,128.55 332.83,128.29 332.99,128.24 333.08,128.13 		"/>
				<path class="st1" d="M331.58,133.03l0.2,0.07l0.11-0.13h0.29l0.2-0.26l0.17-0.08l0.13-0.22v-0.25l-0.28-0.11l-0.23,0.15l0.1,0.06
					l-0.15,0.24l-0.25,0.08l-0.15,0.18h-0.3l-0.18-0.14h-0.39l-0.28,0.12l-0.37-0.23l-0.35-0.09l-0.19,0.05l-0.33-0.17l-0.66,0.15
					l-0.41,0.22c0,0-0.08,0.23-0.06,0.25l0.07,0.23h0.23h0.18h0.2h0.2h0.2l0.16,0.13l0.24-0.1l0.16,0.08h0.19l0.06-0.07l0.3-0.12
					l0.43,0.08l0.38-0.18L331.58,133.03z"/>
				<polygon class="st1" points="339.92,126.11 340.08,125.82 339.94,125.75 339.8,125.85 339.49,125.94 339.67,126.1 339.87,125.98 
							"/>
				<polygon class="st1" points="338.18,126.15 338.45,125.9 338.67,125.91 338.69,125.71 338.46,125.44 338.44,125.28 338.06,125.13 
					337.55,125.1 337.33,125.28 337.08,125.17 336.85,125.33 336.81,125.67 337.03,125.96 337.43,126.04 337.55,126.15 337.87,126.12 
							"/>
				<polygon class="st1" points="338.48,132.21 338.34,132.1 338.17,132.19 338.31,132.3 		"/>
				<polygon class="st1" points="336.82,131.71 337.25,131.8 337.39,131.92 337.46,131.8 337.65,131.65 337.86,131.54 337.81,131.39 
					337.58,131.3 337.37,131.46 336.92,131.5 336.78,131.38 336.57,131.48 336.47,131.76 336.53,131.88 		"/>
				<polygon class="st1" points="338.54,131.14 338.43,131.24 338.44,131.4 338.7,131.22 		"/>
				<polygon class="st1" points="330.76,135.55 330.63,135.77 330.88,135.78 331.05,135.69 331.02,135.56 330.87,135.47 		"/>
				<polygon class="st1" points="336.2,123.5 336.49,123.58 337.08,123.44 337.4,123.36 337.13,123.31 336.62,123.25 336.43,123.33 
					336.23,123.26 336.08,123.33 336.19,123.39 		"/>
				<polygon class="st1" points="336.73,123.7 336.78,123.93 336.9,124.25 337,124.3 337.01,124.17 336.83,123.87 336.83,123.65 		"/>
				<polygon class="st1" points="333.37,122.9 333.44,123 333.69,122.94 333.74,122.74 333.54,122.59 333.44,122.76 333.24,122.81 
					333.33,122.65 333.3,122.53 332.93,122.5 332.63,122.69 332.64,122.93 332.84,123.08 333.02,122.92 333.24,123.09 		"/>
				<polygon class="st1" points="347.99,128.72 347.95,128.81 348.06,128.81 348.06,128.72 		"/>
				<polygon class="st1" points="340.4,130.86 340.47,130.75 340.33,130.65 340.21,130.75 340.26,130.85 		"/>
				<polygon class="st1" points="308.62,121.45 308.73,121.36 308.32,120.98 308.1,120.93 307.95,121.19 308.09,121.36 308.31,121.29 
							"/>
				<polygon class="st1" points="338.82,121.53 338.84,121.69 338.99,121.92 339.22,121.92 339.36,122.05 339.49,121.92 
					339.42,121.81 339.23,121.73 339.24,121.53 339.09,121.42 338.9,121.46 		"/>
				<polygon class="st1" points="320.05,130.55 319.85,130.48 319.12,130.46 318.98,130.36 318.78,130.64 319.06,130.92 
					319.26,130.95 319.43,130.84 319.89,130.87 320.13,130.76 320.43,130.72 320.55,130.56 320.41,130.5 		"/>
				<polygon class="st1" points="348.31,128.4 348.19,128.6 348.07,128.64 348.21,128.68 348.23,128.78 348.36,128.76 348.17,128.89 
					348.21,129.05 348.31,129.04 348.5,128.91 348.65,128.92 348.71,128.79 348.7,128.56 348.6,128.54 348.44,128.42 		"/>
				<path class="st1" d="M348.46,129.6l-0.08,0.06v0.13l0.11,0.08h0.14l-0.05-0.14L348.46,129.6z"/>
				<polygon class="st1" points="348.66,129.03 348.58,129.01 348.36,129.1 348.17,129.27 348.21,129.34 348.5,129.5 348.61,129.57 
					348.75,129.41 348.77,129.26 348.72,129.22 348.74,129.15 		"/>
				<polygon class="st1" points="348.71,128.48 348.6,128.32 348.49,128.33 348.61,128.48 		"/>
				<polygon class="st1" points="340.6,125.87 340.58,125.77 340.43,125.79 340.49,125.9 		"/>
				<polygon class="st1" points="347.9,129.31 348.11,129.54 348.27,129.62 348.35,129.57 348.12,129.36 348.08,129.21 347.93,129.18 
							"/>
				<polygon class="st1" points="340.88,132.38 340.77,132.31 340.52,132.33 340.66,132.4 		"/>
				<polygon class="st1" points="308.11,128.48 308.64,128.97 308.74,128.88 308.75,128.53 308.86,128.34 309.08,128.39 
					309.33,128.77 309.48,128.84 309.67,128.65 309.64,128.05 309.78,127.31 309.63,126.81 309.86,126.28 309.74,126.07 
					309.76,125.65 310,125.54 310.11,125.34 310.07,125.09 309.87,124.99 309.62,124.8 309.51,124.49 309.35,124.4 309.27,124.19 
					309.02,124.08 308.61,124.13 308.35,124.09 308.31,123.69 308.11,123.43 307.94,123.53 308.06,123.27 307.96,122.98 
					307.92,122.32 307.6,122.44 307.46,122.32 306.93,122.31 306.48,121.99 306.49,121.77 306.76,121.64 307.07,121.47 306.87,121.36 
					306.57,121.41 306.41,121.34 306.12,121.45 306.33,121.26 306.65,121.02 307.05,120.95 306.97,120.68 306.56,120.22 
					306.32,120.19 306.01,120.4 305.73,120.57 305.39,120.59 305.58,120.55 305.71,120.43 305.84,120.4 305.97,120.21 305.91,120.04 
					305.6,119.89 305.13,119.91 304.79,119.63 304.79,119.45 304.75,119.1 304.18,118.54 303.99,118.5 303.82,118.56 303.6,118.39 
					303.54,117.89 303.15,117.5 302.64,117.21 302.32,117.19 302.25,117.32 302.1,117.21 302.02,116.85 301.83,117.04 301.7,116.84 
					301.68,116.44 301.43,116.13 301.14,116.07 301.03,115.89 300.25,115.37 299.99,115.34 299.67,114.98 299.35,114.94 
					299.26,114.73 299.19,114.3 298.92,114.16 298.76,113.83 298.65,113.79 298.45,113.44 298.14,113.32 297.86,113.32 297.67,113.39 
					297.53,113.29 297.19,113.28 296.79,113.39 296.59,113.26 295.97,112.83 295.42,112.75 295.22,112.85 295.16,113 295.23,113.39 
					295.57,114.13 295.79,114.22 296.37,114.87 296.55,114.87 296.9,115.31 297.11,115.39 297.29,115.33 297.72,115.69 298.2,116.45 
					298.68,116.91 298.81,116.91 298.81,117.26 298.94,117.37 298.99,117.72 299.16,117.87 299.44,117.87 299.8,118.32 299.99,118.43 
					300.15,118.4 300.2,118.55 300.09,118.74 300.26,118.93 300.39,119.27 300.38,119.36 300.65,120.08 300.78,120.47 301.13,120.57 
					301.53,120.85 301.53,121.08 301.86,121.66 302.17,121.9 302.23,122.56 302.74,123.49 302.71,123.87 302.83,124.22 303.32,124.58 
					303.82,125.2 303.95,125.53 304.33,125.61 304.47,125.76 304.8,125.98 304.85,126.37 305.14,126.55 305.49,126.94 306.1,127.32 
					306.23,127.61 306.62,127.72 307.42,128.42 307.49,128.7 307.66,128.78 307.85,129.09 307.95,128.98 307.95,128.71 307.87,128.58 
					307.87,128.43 		"/>
				<polygon class="st1" points="345,130.83 344.9,130.69 344.66,130.66 		"/>
				<polygon class="st1" points="342.76,123.15 342.26,123.27 342.08,123.39 342.2,123.5 342.63,123.64 343,123.53 342.9,123.47 
					342.88,123.27 		"/>
				<polygon class="st1" points="340.32,125.81 340.18,125.81 340.21,125.93 340.34,125.93 		"/>
				<polygon class="st1" points="340.11,118.05 340.26,117.92 340.46,117.94 340.66,117.75 340.58,117.53 340.4,117.42 340.23,117.55 
					340.03,117.62 		"/>
				<polygon class="st1" points="348.72,130.18 348.79,130.12 348.76,130.01 348.65,130.12 		"/>
				<polygon class="st1" points="348.87,122.1 349.02,122.26 349.2,122.22 349.03,122.05 		"/>
				<polygon class="st1" points="343.96,122.11 343.75,122.03 343.47,122.23 343.48,122.6 343.77,122.66 343.89,122.57 		"/>
				<polygon class="st1" points="339.14,118.5 339.17,118.84 339,118.97 338.92,119.31 339.05,119.49 339.21,119.77 339.1,119.94 
					339.05,120.22 339.32,120.43 339.28,120.6 339.33,120.75 339.22,121.04 339.39,121.34 339.68,121.51 339.89,121.95 340.13,122.05 
					340.18,122.26 340.2,122.1 340.31,122.06 340.23,121.93 339.88,121.62 339.77,121.24 339.55,120.8 339.55,120.3 339.75,120.23 
					340.06,120.33 340.41,120.33 340.59,120.48 340.86,120.46 340.73,120.35 340.68,120.16 340.34,119.92 340.16,119.9 340.06,119.71 
					340.23,119.51 340.72,119.34 340.92,118.86 340.9,118.67 340.75,118.5 340.32,118.66 339.91,118.86 339.88,119.05 340.02,119.06 
					339.9,119.19 339.67,119.3 339.58,119.52 339.42,119.55 339.31,119.32 339.5,119.13 339.71,119.12 339.82,118.78 339.82,118.37 
					339.59,118.27 339.54,118.12 339.75,117.89 339.77,117.68 339.64,117.72 339.23,118.11 		"/>
				<polygon class="st1" points="343.66,131.17 343.8,131.14 343.84,131.07 343.49,131.1 		"/>
				<polygon class="st1" points="345.04,130.39 344.89,130.54 345.11,130.43 		"/>
				<path class="st1" d="M343.46,131.31c0,0,0.05-0.1,0.05-0.08l-0.16,0.06L343.46,131.31z"/>
				<polygon class="st1" points="349.47,122.97 349.63,122.9 349.28,122.9 		"/>
				<polygon class="st1" points="343.62,132.28 343.8,132.14 343.86,132.06 343.71,132.04 343.47,132.21 343.43,132.31 		"/>
				<polygon class="st1" points="354.12,132.06 353.98,132.15 353.87,132.36 353.98,132.38 354.23,132.47 354.31,132.39 
					354.21,132.09 		"/>
				<path class="st1" d="M350.33,123.17l-0.49-0.18c0.03,0.03,0.06,0.07,0.09,0.11l0.42,0.17l0.63,0.09l0.56-0.09l0.16-0.08l-0.46-0.1
					l-0.22,0.06l-0.41-0.12L350.33,123.17z"/>
				<polygon class="st1" points="341.53,120.87 341.89,121.07 341.86,120.94 341.34,120.68 		"/>
				<polygon class="st1" points="343.81,131.81 344,131.98 344.18,131.93 344.48,131.54 344.59,131.21 344.53,131.02 344.61,130.88 
					344.58,130.78 344.43,130.74 344.3,130.84 344.29,130.94 343.93,131.27 343.91,131.4 343.96,131.49 343.81,131.61 		"/>
				<polygon class="st1" points="350.78,122.09 350.6,121.81 350.38,121.66 350.16,121.66 349.78,121.59 349.83,121.7 350.06,121.92 
					350.05,121.77 350.18,121.78 350.42,122.09 350.38,122.26 350.58,122.3 350.66,122.3 350.78,122.36 351.09,122.3 350.97,122.19 		
					"/>
				<polygon class="st1" points="346.52,128.44 346.64,128.19 346.37,128.34 346.25,128.9 346.15,129.06 346.33,128.99 		"/>
				<polygon class="st1" points="346.09,129.04 346.1,128.72 345.91,128.46 345.98,128.72 345.99,128.94 		"/>
				<polygon class="st1" points="344.04,121.22 344.21,121.28 344.44,121.21 344.39,121.02 344.06,120.82 343.61,120.82 343.4,120.98 
					343.13,120.98 343.05,121.03 343.13,121.13 342.95,121.18 343.34,121.24 343.59,121.35 343.81,121.31 343.81,121.2 343.59,121.11 
					343.56,121.06 343.65,121 		"/>
				<polygon class="st1" points="343.07,121.98 343.28,122.09 343.6,122.03 343.32,121.92 		"/>
				<polygon class="st1" points="343.8,121.83 343.57,121.87 343.69,121.99 		"/>
				<polygon class="st1" points="347.88,129.99 347.86,130.24 347.99,130.36 348.12,130.34 348.37,130.12 348.42,130 348.3,129.92 
					348.21,129.73 347.97,129.53 347.86,129.44 347.89,129.56 347.9,129.84 348,129.94 348.07,130.09 347.97,130 		"/>
				<path class="st1" d="M331.43,121.3h-0.22l0.22,0.09V121.3z"/>
				<polygon class="st1" points="329.54,129.3 329.33,128.87 329.27,129 329.25,129.22 329.16,129.39 329.27,129.58 329.33,129.78 
					329.44,129.5 		"/>
				<polygon class="st1" points="336.57,116.03 336.48,115.75 336.21,115.44 336.16,115.61 336.21,115.95 336.45,116.17 		"/>
				<polygon class="st1" points="329.61,130.74 329.42,130.64 329.32,130.74 329.47,130.87 		"/>
				<polygon class="st1" points="327.89,133.13 328.07,133.1 328.1,132.94 327.98,132.87 		"/>
				<polygon class="st1" points="331.01,121.42 331.13,121.57 331.32,121.53 331.14,121.42 		"/>
				<path class="st1" d="M331.13,127.87v0.17l-0.08,0.08l0.1,0.3l0.12,0.05l0.2-0.14l-0.07-0.27l-0.16-0.24L331.13,127.87z"/>
				<path class="st1" d="M331.76,128.18l0.1,0.09h0.24v-0.11h0.1v-0.22l0.18-0.18v-0.16l-0.12-0.23l-0.23,0.12l-0.18,0.18l0.08,0.16
					l-0.24,0.28L331.76,128.18z"/>
				<polygon class="st1" points="313.79,123.28 313.99,123.37 314.08,123.25 313.97,123.13 313.77,123.14 		"/>
				<polygon class="st1" points="328.7,113.53 329.02,113.31 329,113.1 328.79,113.14 328.34,113.51 328.41,113.59 		"/>
				<path class="st1" d="M337.99,115.41h0.1l-0.08-0.25h-0.15L337.99,115.41z"/>
				<polygon class="st1" points="327.87,113.79 327.82,113.96 327.93,114.2 327.93,113.99 		"/>
				<polygon class="st1" points="338.12,114.98 338.23,114.74 338.17,114.49 337.99,114.37 337.86,114.46 337.95,114.79 
					337.99,115.04 		"/>
				<polygon class="st1" points="304.64,128.17 304.98,128.42 304.98,128.23 304.81,128.1 		"/>
				<polygon class="st1" points="329.94,112.19 329.84,112.31 329.92,112.4 330.15,112.4 330.26,112.33 330.38,112.4 330.57,112.3 
					330.57,112.18 330.26,112.13 		"/>
				<polygon class="st1" points="327.52,132.95 327.67,133.15 327.75,132.83 327.85,132.72 327.62,132.65 		"/>
				<polygon class="st1" points="329.57,111.76 329.64,111.63 329.58,111.5 329.41,111.7 		"/>
				<polygon class="st1" points="334.63,132.62 334.87,132.68 335.33,132.51 335.48,132.34 335.35,132.25 334.98,132.29 
					334.86,132.22 334.59,132.34 334.7,132.42 334.61,132.51 		"/>
				<polygon class="st1" points="333.81,123.19 333.76,123 333.6,123.12 		"/>
				<polygon class="st1" points="335.51,134.11 335.65,134.05 335.32,133.75 335.04,133.43 334.93,133.49 334.7,133.56 334.68,133.9 
					334.44,133.94 334.15,134.09 333.95,133.85 333.87,133.93 333.61,134.08 333.51,134.37 333.26,134.78 333.22,134.9 333.33,135 
					333.37,135.11 333.23,135.11 333.12,135.04 333.04,135.31 333.17,135.42 333.61,135.4 334,135.14 334.24,135.07 334.46,135.09 
					334.71,134.91 334.88,134.65 335.39,134.27 		"/>
				<polygon class="st1" points="314.77,122.84 314.94,122.8 315.21,122.52 315.01,122.38 314.68,122.37 314.7,122.53 314.66,122.7 		
					"/>
				<path class="st1" d="M333.07,123.6l0.06-0.16l-0.21,0.09L333.07,123.6z"/>
				<polygon class="st1" points="314.6,121.45 314.27,121.35 314.22,121.39 314.27,121.52 314.51,121.6 314.65,121.52 		"/>
				<polygon class="st1" points="333.16,132.9 333.44,132.84 333.57,132.69 333.85,132.43 333.74,132.36 333.56,132.47 333.37,132.44 
					333.25,132.48 333.31,132.6 333.04,132.79 		"/>
				<polygon class="st1" points="327.15,125.62 327.3,125.84 327.4,125.78 327.6,125.78 327.75,125.67 327.88,125.74 327.97,126.08 
					328.21,126.7 328.11,126.86 328.03,127.21 327.84,127.49 327.81,128.07 327.85,128.53 327.99,128.53 328.18,128.65 328.46,128.64 
					328.59,128.49 328.84,128.55 329.06,128.51 329.23,128.64 329.28,128.43 329.25,128.15 329.06,128.03 329.02,127.68 
					329.17,127.43 329.23,126.98 329.18,126.57 329.07,126.45 329.34,126.06 329.43,125.71 329.35,125.29 329.17,125.14 
					329.17,125.01 329.46,124.82 329.58,124.64 329.85,124.58 330.13,124.68 330.1,124.81 330.22,125.04 330.22,125.31 330.01,125.55 
					329.95,125.8 330.1,126.07 330.28,126.1 330.45,126.3 330.76,126.49 330.81,126.74 330.7,126.72 330.63,127.22 330.73,127.49 
					330.92,127.56 331.07,127.51 331.37,127.64 331.6,127.6 331.57,127.5 331.5,127.31 331.73,127.09 331.96,127.03 332.29,126.85 
					332.69,126.88 332.83,126.72 332.94,126.78 333.13,126.78 333.25,126.59 333.21,126.47 332.86,126.44 332.75,126.49 
					332.64,126.45 332.38,126.48 332.37,126.28 332.24,126.26 332.25,126.14 332.13,126.11 332.01,126.18 332,126.03 331.77,125.96 
					331.69,125.8 331.85,125.64 331.91,125.52 332,125.55 331.93,125.39 332.04,125.37 332.1,125.23 331.98,125.11 331.79,125.05 
					331.87,124.92 331.84,124.77 331.61,124.62 331.45,124.61 331.38,124.36 331.01,123.94 330.79,123.78 330.65,123.54 
					330.68,123.43 330.79,123.44 330.85,123.58 331.09,123.59 331.3,123.42 331.36,123.26 331.91,123.06 332.3,122.76 332.48,122.45 
					332.73,122.32 332.73,122.14 333.03,122.07 333.29,122.2 333.45,122.22 333.69,121.89 333.69,121.68 333.41,121.57 332.8,121.63 
					332.54,121.81 332.14,121.81 331.94,121.87 331.71,122.12 331.46,122.1 331.26,122.15 331.01,121.99 330.77,121.92 330.5,122.26 
					330.32,122.71 330.06,122.85 329.77,122.81 329.71,122.68 329.36,122.29 329.01,121.99 328.82,121.51 328.86,120.99 
					329.07,120.48 329.32,120.24 329.63,120.13 330,120.31 330.44,120.31 330.92,120.07 331.25,120.11 331.36,120.27 331.64,120.27 
					331.81,120.19 332.38,120.25 332.69,120.23 332.74,120.15 333.07,120.16 333.28,120.28 333.35,120.41 333.62,120.5 334.64,120.27 
					335.07,119.97 335.19,119.75 335.36,119.73 335.51,119.56 335.69,119.43 335.78,119.19 335.9,119 336.02,118.9 335.9,118.77 
					335.87,118.61 335.49,118.52 335.23,118.61 335.18,118.88 334.98,119.03 334.95,119.17 334.67,119.37 334.46,119.4 334.32,119.6 
					334,119.68 333.36,119.56 332.81,119.51 332.71,119.65 332.59,119.67 332.33,119.44 332.12,119.42 331.89,119.43 331.63,119.37 
					331.28,119.31 331.1,119.43 330.89,119.31 330.63,119.06 330.23,118.98 329.99,118.99 329.99,119.28 329.78,119.42 329.67,119.67 
					329.49,119.83 329.14,119.71 328.82,119.79 328.69,119.94 328.72,120.03 328.38,120.35 328.38,120.74 328.45,120.97 
					328.43,121.42 328.36,121.57 328.5,121.89 328.54,122.15 328.43,122.01 328.35,121.81 328.18,121.85 328,122.07 327.79,122.19 
					327.74,122.45 327.78,122.76 327.68,122.96 327.75,123.53 327.68,123.66 327.64,123.88 327.47,123.96 327.48,124.3 327.17,124.54 
					327.07,124.89 327.12,125 327,125.15 		"/>
				<polygon class="st1" points="357.18,130.1 357.19,129.89 357.26,129.5 357.43,124.43 357.43,124.43 357.2,124.49 357.03,124.44 
					357.02,124.29 357.06,124.17 356.86,124.03 356.62,124.04 356.28,123.96 356.1,123.93 355.9,123.97 355.12,123.61 354.77,123.51 
					354.5,123.49 354.25,123.27 353.76,123.16 353.36,122.98 353.13,122.78 352.82,122.75 352.14,123.15 352.1,123.28 352.22,123.52 
					352.17,123.71 351.78,123.76 351.53,123.85 351.36,123.87 351.24,123.81 351.14,123.95 351.12,124.2 350.86,124.35 350.59,124.38 
					350.42,124.66 350.42,124.99 350.27,125.05 350.12,125.16 350.06,125.41 349.79,125.52 349.57,125.52 349.41,125.36 
					349.11,125.11 349.02,124.87 348.94,124.93 348.85,124.67 348.86,124.4 348.7,124.3 348.58,124.43 348.61,124.77 348.5,124.77 
					348.34,124.57 348.17,124.27 348.15,123.64 348.05,123.28 348.2,123.03 348.36,122.79 348.27,122.55 348.04,122.35 348.04,122.02 
					348.13,121.87 348.02,121.76 347.57,121.72 347.13,121.74 346.71,121.44 346.02,121.18 345.59,121.27 345.48,121.37 
					345.13,121.64 344.92,121.7 344.73,121.87 344.36,121.88 344.15,122.06 344.25,122.23 344.22,122.43 343.9,122.63 343.85,122.8 
					344.17,122.85 344.38,122.73 344.46,122.62 344.6,122.78 344.98,122.99 345.13,123.25 345.07,123.32 345.15,123.64 345.43,123.87 
					345.69,123.91 345.93,123.85 346.09,123.95 346.25,123.87 346.42,123.93 346.83,123.84 346.97,123.88 347.13,123.84 347.04,123.7 
					347.72,123.78 347.8,123.96 347.76,124.25 347.62,124.2 347.48,124.4 347.36,124.66 347.19,124.41 346.77,124.22 346.57,124.29 
					346.48,124.61 346.22,124.77 346.02,124.66 345.73,124.63 345.63,124.52 345.31,124.55 345.14,124.75 345.24,124.89 
					345.55,124.94 345.79,125.07 345.93,125.4 346.02,125.5 346.19,125.44 346.23,125.62 346.2,125.81 346.08,125.86 346.07,126.02 
					346.28,126.48 346.52,126.56 346.79,126.5 347.07,126.16 347.04,125.93 347.24,125.56 347.36,125.5 347.4,125.3 347.5,125.01 
					347.64,124.75 347.64,125.07 347.48,125.28 347.6,125.56 347.68,125.9 347.83,126.06 347.9,125.95 348,125.9 348.11,125.97 
					348.16,126.24 348.27,126.11 348.35,126.13 348.44,126.24 348.62,126.31 348.85,126.22 349.05,126.25 349.07,126.31 
					348.96,126.29 348.76,126.31 348.75,126.51 349.04,126.57 349.07,126.68 349.13,126.8 349.46,126.95 349.86,126.97 350.69,127.23 
					351.49,127.48 351.72,127.44 352.09,127.57 352.19,127.82 352.55,127.97 352.79,127.96 352.99,127.84 352.76,128.1 352.87,128.18 
					353.02,128.12 353.1,128.23 353.42,128.17 353.22,128.33 353.33,128.45 353.27,128.55 353.43,128.66 353.68,128.64 353.41,128.86 
					353.41,128.98 353.71,129.29 353.64,129.57 353.72,129.75 353.95,129.91 354.3,130.16 354.41,130.3 354.2,130.27 354.08,130.29 
					354.01,130.46 354.23,130.63 354.47,130.75 354.77,130.7 354.96,130.76 354.79,130.78 354.52,130.88 354.4,130.84 354.26,130.88 
					354.41,131.07 354.58,131.14 354.53,131.49 354.47,131.58 354.47,131.73 354.38,131.94 354.26,132.02 354.43,132.21 
					354.75,132.04 354.86,132.16 355.05,132.16 355.28,132.04 355.69,132.07 355.86,131.96 355.93,131.66 355.94,131.96 
					355.81,132.16 355.86,132.37 355.99,132.45 356.26,132.69 356.25,132.78 356.34,132.97 356.72,133.38 357.05,133.5 357.13,133.5 
					357.24,130.22 		"/>
				<path class="st1" d="M354.27,131.71l0.07-0.07l0.05-0.22l0.05-0.1l-0.2-0.16l-0.09-0.08h-0.48l-0.3,0.14l-0.14,0.39l-0.14,0.27
					l-0.55,0.55H353h0.18h0.35l0.22-0.1l0.21-0.25l0.21-0.05l0.1-0.14L354.27,131.71z"/>
				<polygon class="st1" points="334,132.62 333.88,132.75 334.06,132.74 334.19,132.87 334.4,132.59 334.38,132.47 334.25,132.59 		
					"/>
				<polygon class="st1" points="341.12,125.59 341.7,125.66 341.83,125.48 342.1,125.48 342.64,125.81 342.88,125.86 343.17,126.17 
					343.45,126.17 343.56,125.92 343.44,125.42 342.76,125.04 342.21,124.93 341.94,124.71 341.64,124.68 341.4,124.89 341.12,124.86 
					340.92,124.78 340.52,124.81 339.97,124.8 339.85,124.96 339.83,125.11 339.61,125.19 339.52,125.43 339.59,125.6 339.75,125.6 
					339.99,125.21 340.19,125.44 340.31,125.61 340.55,125.59 340.81,125.34 340.97,125.34 		"/>
				<polygon class="st1" points="315.01,122.28 315,122.18 314.89,122.15 314.74,122 314.4,121.94 314.37,122.05 314.56,122.27 
					314.69,122.26 		"/>
				<polygon class="st1" points="333.29,123.38 333.48,123.41 333.41,123.27 		"/>
				<polygon class="st1" points="334.44,133.94 334.68,133.9 334.7,133.56 334.53,133.6 334.17,133.64 333.95,133.85 334.15,134.09 		
					"/>
				<polygon class="st1" points="335.65,134.05 335.69,134.03 335.94,133.79 336.16,133.72 336.41,133.74 336.96,133.64 337.35,133.4 
					337.74,133.29 337.84,133.13 337.99,133.1 338.26,132.93 338.26,132.82 338.14,132.69 337.62,132.82 337.3,132.8 337,132.87 
					336.73,132.87 336.36,132.93 335.79,132.89 335.36,133.27 335.04,133.43 335.32,133.75 		"/>
				<polygon class="st1" points="324.71,110.67 325,110.58 325.01,110.38 324.89,110.35 324.64,110.58 		"/>
				<polygon class="st1" points="302.05,113.22 302,113.04 301.86,112.85 301.75,112.82 301.79,113.09 301.94,113.29 		"/>
				<polygon class="st1" points="324.36,110.53 324.53,110.44 324.54,110.34 324.19,110.54 		"/>
				<polygon class="st1" points="317.83,117.26 317.75,116.94 317.57,116.99 317.55,116.99 317.47,117.01 317.47,117.15 
					317.67,117.34 		"/>
				<polygon class="st1" points="317.36,117.23 317.41,117.21 317.42,116.99 317.43,116.98 317.33,117.15 		"/>
				<polygon class="st1" points="315.62,118.87 315.67,118.98 315.97,119.27 316.08,119.5 316.28,119.52 316.67,119.41 316.72,119.26 
					317.06,119.28 317.25,119.18 317.99,119.22 318.74,118.92 318.94,118.74 319.59,118.72 319.94,118.89 320.04,119.05 
					320.36,119.04 320.92,118.74 321.56,118.64 321.52,118.44 322.06,117.63 322.27,117.06 322.68,116.44 322.97,115.4 322.97,115.2 
					323.11,114.96 323.09,114.79 323.37,114.45 323.6,114.55 324.02,114.51 324.62,114.52 324.76,114.62 325.14,114.61 325.44,114.7 
					325.46,114.58 325.78,114.79 326.01,114.85 326.29,114.71 326.64,114.64 326.64,114.48 326.28,114.18 326.28,113.83 
					326.44,113.71 326.99,113.76 327.44,113.66 327.72,113.44 327.66,113.23 327.45,113.23 327.14,113.17 326.9,112.95 326.67,112.97 
					326.34,112.65 326.15,112.65 325.94,112.86 325.81,112.74 326.1,112.49 325.96,112.31 325.84,112.35 325.65,112.6 325.54,112.46 
					325.43,112.41 325.44,112.01 325.68,111.92 325.67,111.75 325.34,111.53 325.23,111.61 324.97,111.38 324.96,111.01 
					324.69,110.83 324.57,110.91 324.64,111.15 324.35,111.44 324.23,111.42 324.32,111.17 324.27,110.95 324.1,110.94 323.91,111.54 
					323.72,111.59 323.44,112.24 323.39,112.59 322.9,113.11 322.67,113.11 322.28,113.26 322.14,113.43 322.29,113.42 322.19,113.57 
					322.32,113.62 322.63,113.53 322.5,113.72 322.29,113.83 322.25,113.88 322.27,113.99 322.44,114.46 322.32,114.69 322.14,114.58 
					322.12,114.25 322.06,114 322.01,114.02 322.02,113.96 321.9,113.97 321.75,114.19 321.85,114.8 321.7,114.86 321.44,114.66 
					321.21,114.26 321.07,114.25 320.86,114.16 320.68,114.39 320.67,114.71 320.32,115.01 320.19,115.28 319.81,115.64 
					319.73,115.89 319.39,116.29 319.03,116.61 317.94,116.87 317.81,116.93 317.89,117.28 318.02,117.42 317.85,117.36 
					317.66,117.46 317.34,117.5 317.19,117.68 317.1,117.96 317.1,118.35 316.86,118.67 316.87,118.78 316.34,118.71 315.78,118.5 
					315.39,118.51 315.25,118.3 315.01,118.04 314.91,118.07 315.19,118.56 		"/>
				<polygon class="st1" points="317.18,117.53 317.4,117.44 317.33,117.31 		"/>
				<polygon class="st1" points="317.4,117.31 317.45,117.43 317.6,117.37 317.44,117.25 		"/>
				<polygon class="st1" points="304.28,112.37 304.09,112.51 303.91,112.35 303.66,112.38 303.36,112.65 303,112.56 303.01,112.36 
					303.17,112.17 303.21,111.78 303.03,111.6 302.75,111.6 302.68,111.45 302.31,111.34 302.06,111.12 301.88,111.34 301.79,111.65 
					302.07,112.11 302.22,113.22 302.37,113.59 302.53,113.93 302.48,114.36 302.4,114.44 302.43,114.73 302.63,114.93 302.56,115.05 
					302.73,115.28 303.1,115.5 303.33,115.87 303.57,116.01 303.73,116.26 303.53,116.45 303.5,116.64 303.67,116.79 304.15,116.98 
					304.56,117.3 304.54,117.55 304.87,117.9 305.06,117.91 305.25,117.86 305.4,117.98 305.6,118.21 306.01,118.42 306.45,118.51 
					306.63,118.71 306.89,118.84 306.98,118.75 307.07,118.89 307.34,118.72 307.34,118.66 307.22,118.64 307.3,118.61 307.32,118.46 
					307.24,118.36 307.39,118.47 307.38,118.62 307.43,118.72 307.63,118.76 307.63,118.42 307.34,117.86 307.26,117.82 
					307.27,117.74 307.21,117.64 307.12,117.56 307.07,117.15 307.1,117.05 307.04,116.93 306.83,116.93 306.52,116.65 306.34,116.3 
					306.34,115.62 306.24,115.44 306.24,115.21 306.31,115.09 306.27,114.43 306.38,114.28 306.25,113.73 305.96,113.26 
					304.98,112.26 304.77,111.89 304.66,111.92 304.54,112.06 304.34,112.06 304.34,112.06 304.28,112.13 		"/>
				<polygon class="st1" points="322.14,114.58 322.32,114.69 322.44,114.46 322.27,113.99 322.25,113.88 322.18,113.98 322.06,114 
					322.12,114.25 		"/>
				<polygon class="st1" points="321.21,114.26 321.44,114.66 321.7,114.86 321.85,114.8 321.75,114.19 321.9,113.97 322.02,113.96 
					322.02,113.86 322,113.59 321.74,113.68 321.42,113.93 320.93,114.08 320.86,114.16 321.07,114.25 		"/>
				<polygon class="st1" points="310.95,89.57 310.97,89.57 310.96,89.56 310.95,89.56 		"/>
				<polygon class="st1" points="306.82,106.6 306.98,106.52 307.03,106.11 306.95,106.08 306.87,105.9 306.62,106.05 306.77,106.23 
					306.71,106.37 		"/>
				<polygon class="st1" points="313.87,102.19 313.81,102 313.69,101.95 313.68,101.82 313.58,101.48 313.64,101.38 313.56,101.16 
					313.6,101 313.59,100.76 313.5,100.68 313.4,100.24 313.3,100.16 313.23,99.67 313,99.38 313.06,99.27 312.99,99.16 312.99,99.01 
					312.68,98.7 312.69,98.51 312.61,98.51 312.57,98.3 312.38,97.95 311.77,97.5 311.63,97.25 310.98,96.77 310.25,96.37 
					310.22,96.27 309.92,96.1 309.39,95.67 309.34,95.51 309.23,95.2 309.28,95.11 309.28,94.96 309.1,94.65 308.97,94.66 
					308.61,94.31 308.21,94.08 307.98,94 308.2,93.94 308.24,93.8 307.95,93.56 308.1,93.33 308.24,92.88 308.13,92.75 308.03,92.73 
					308.04,92.48 308.15,92.39 308.23,92.15 308.35,92.06 308.36,91.95 308.43,92.04 308.6,92.04 308.8,91.72 308.9,91.69 
					308.98,91.57 308.9,91.41 308.93,91.36 308.92,91.15 308.96,90.94 308.89,90.86 308.99,90.72 309.01,90.53 309.1,90.56 
					309.19,90.69 309.28,90.65 309.41,90.53 309.61,90.48 309.74,90.56 309.79,90.47 309.92,90.38 309.87,90.18 309.94,90.06 
					310.18,90.01 310.42,90.03 310.65,89.88 310.76,89.89 310.9,89.83 311,89.67 310.95,89.57 310.95,89.56 310.96,89.56 
					310.73,89.44 310.56,89.49 310.44,89.4 310.17,89.48 309.9,89.34 309.63,89.23 309.56,89.03 309.01,88.84 308.93,88.56 
					308.78,88.5 308.91,88 309.11,87.97 309.15,87.71 308.92,87.52 308.56,87.67 308.45,87.53 307.84,87.54 307.73,87.37 
					307.42,87.31 307.42,87.14 307.13,86.9 306.94,87.08 306.61,87.08 306.32,87.25 306.34,87.67 305.89,87.82 305.63,87.67 
					305.29,87.77 305.24,87.97 304.94,88.11 304.88,87.92 304.72,87.91 304.58,88.1 304.31,87.83 304.11,87.98 304.06,88.24 
					303.87,88.24 303.75,88.14 303.77,87.94 303.59,87.91 303.31,88.03 303.16,88.16 303.09,88.29 302.98,88.31 302.88,88.39 
					302.97,88.56 303.44,88.76 303.66,89.1 303.91,89.31 303.95,89.6 303.85,89.82 303.89,89.86 304.32,90.26 304.6,90.72 
					305.16,90.73 305.49,90.82 305.8,90.64 306.18,90.64 306.37,90.88 306.72,90.95 306.77,91.22 306.76,91.46 307.15,91.56 
					307.15,91.74 306.95,91.81 306.8,92.34 306.65,92.48 306.39,92.53 306,92.67 305.8,92.67 305.83,92.9 306.12,93.22 305.92,93.43 
					305.98,93.61 306.19,93.61 306.39,93.96 306.81,93.99 307.21,94.2 307.48,94.23 307.82,94.7 308.21,94.88 308.48,95.27 
					308.46,95.47 308.88,95.94 309,96.26 309.18,96.34 309.51,96.34 309.65,96.59 309.69,96.82 309.87,97.01 309.98,96.97 
					310.19,97.06 310.14,97.28 310.25,97.42 310.55,97.44 310.71,97.66 310.85,97.7 311.11,97.59 311.2,97.8 311.01,97.99 
					310.97,98.35 311.07,98.51 311.28,98.54 311.28,98.86 310.9,99.16 310.96,99.51 311.06,99.69 311.09,100.09 310.84,100.25 
					310.8,100.25 310.96,100.67 311.2,100.8 311.43,101.34 311.38,101.76 311.47,102.02 311.38,102.38 311.43,102.69 311.24,103.09 
					311.02,103.18 310.97,103.36 310.6,103.46 310.21,103.72 310.07,103.98 309.57,103.96 309.3,104.16 309.36,104.63 309.66,104.72 
					309.9,104.97 309.86,105.16 309.98,105.44 309.56,105.47 309.49,105.28 309.22,105.13 308.59,105.28 308.44,105.19 308.17,105.2 
					308.02,105.59 307.73,105.64 307.47,105.94 307.54,105.99 307.55,106.21 307.51,106.28 307.77,106.35 307.89,106.3 308.02,106.38 
					308.23,106.32 308.51,106.36 308.7,106.27 308.59,106.41 308.21,106.7 308.01,107.03 308.04,107.46 307.99,107.64 308.07,107.66 
					308.03,107.7 308,108.11 308.19,108.21 308.33,108.16 308.19,108.31 307.95,108.42 307.75,108.54 308.07,108.59 308.66,108.32 
					308.65,108.26 308.71,108.26 308.88,108.11 308.92,107.83 308.98,107.68 309.16,107.7 309.27,107.62 309.53,107.39 309.67,107.38 
					309.74,107.28 309.85,107.2 309.79,107.13 309.8,107.06 309.73,106.86 309.88,106.84 309.99,106.99 310.11,107.03 310.22,106.89 
					310.24,106.75 310,106.49 310.29,106.7 310.49,106.6 310.39,106.39 310.47,106.27 310.1,106.09 310.32,106.13 310.39,106.08 
					310.4,105.98 310.24,105.86 310.47,105.92 310.51,105.86 310.57,105.7 310.58,105.86 310.55,106.03 310.6,106.08 310.86,106.02 
					311.01,106.09 311.36,106.06 311.94,105.72 312.1,105.54 312.35,105.54 312.38,105.31 312.65,105.12 312.85,105.01 313.15,104.7 
					313.3,104.64 313.34,104.31 313.48,104.26 313.66,104.09 313.57,103.98 313.68,103.74 313.49,103.45 313.7,103.29 313.71,103.14 
					313.85,103.03 313.88,102.91 313.75,102.77 313.73,102.56 313.85,102.5 313.93,102.6 313.94,102.7 314,102.71 314.03,102.5 		"/>
				<polygon class="st1" points="308.02,105.59 308.17,105.2 308.44,105.19 308.59,105.28 309.22,105.13 309.49,105.28 309.56,105.47 
					309.98,105.44 309.86,105.16 309.9,104.97 309.66,104.72 309.36,104.63 309.3,104.16 309.57,103.96 310.07,103.98 310.21,103.72 
					310.6,103.46 310.97,103.36 311.02,103.18 311.24,103.09 311.43,102.69 311.38,102.38 311.47,102.02 311.38,101.76 311.43,101.34 
					311.2,100.8 310.96,100.67 310.8,100.25 310.6,100.26 310.32,100.08 310.13,100.03 310,99.81 309.55,99.91 309.3,100.14 
					309.59,100.43 309.55,100.68 309.63,100.93 309.61,101.12 309.19,100.96 308.95,100.56 308.56,100.55 308.44,100.37 
					308.13,100.14 307.96,100.22 307.73,100.04 307.34,100.08 307.05,100.01 306.76,100.01 306.38,100.14 306.26,100.03 
					305.88,100.02 305.24,100.22 304.98,100.22 304.69,100.62 304.61,101.02 304.38,101.32 304.36,101.85 304.47,102.38 304.7,102.51 
					304.83,102.77 304.8,103.27 304.77,103.48 304.77,103.48 304.95,103.69 304.96,103.95 305.14,104.1 305.15,104.36 305.34,104.64 
					305.45,104.59 305.55,104.79 305.53,105.01 305.62,105.16 305.66,105.36 305.87,105.39 306.03,105.36 306.04,105.13 306.2,104.99 
					306.31,104.92 306.31,105.08 306.4,105.29 306.38,105.46 306.22,105.65 306.3,105.78 306.34,105.88 306.49,105.89 306.71,105.69 
					306.73,105.61 306.88,105.73 307.14,105.81 307.23,105.76 307.47,105.94 307.73,105.64 		"/>
				<polygon class="st1" points="311.28,98.54 311.07,98.51 310.97,98.35 311.01,97.99 311.2,97.8 311.11,97.59 310.85,97.7 
					310.71,97.66 310.55,97.44 310.25,97.42 310.14,97.28 310.19,97.06 309.98,96.97 309.87,97.01 309.69,96.82 309.65,96.59 
					309.51,96.34 309.18,96.34 309,96.26 308.88,95.94 308.46,95.47 308.48,95.27 308.21,94.88 307.82,94.7 307.48,94.23 307.21,94.2 
					306.81,93.99 306.39,93.96 306.19,93.61 305.98,93.61 305.92,93.43 306.12,93.22 305.83,92.9 305.8,92.67 306,92.67 306.39,92.53 
					306.65,92.48 306.8,92.34 306.95,91.81 307.15,91.74 307.15,91.56 306.76,91.46 306.77,91.22 306.72,90.95 306.37,90.88 
					306.18,90.64 305.8,90.64 305.49,90.82 305.16,90.73 304.6,90.72 304.32,90.26 303.89,89.86 303.85,89.82 303.95,89.6 
					303.91,89.31 303.66,89.1 303.44,88.76 302.97,88.56 302.88,88.39 302.87,88.37 302.37,88.39 302.37,88.59 302.18,88.71 
					302.2,89.17 302.3,89.45 302.32,89.77 302.4,90.11 302.16,90.06 301.81,90.16 301.7,89.94 301.52,89.81 301.26,90.05 
					300.88,90.12 300.87,90.38 300.76,90.53 300.71,90.59 300.84,90.77 300.57,90.99 300.42,90.99 300.27,91.34 300.42,91.65 
					300.78,91.56 301.04,91.88 301.11,92.34 300.9,92.5 301.09,92.84 301.31,92.92 301.54,92.72 302.04,92.73 302.05,92.97 
					301.89,93.28 302.05,93.54 302.04,93.75 301.88,93.96 302,94.29 302,94.76 302.02,95.47 302.39,95.27 302.72,95.19 302.76,94.92 
					303.19,94.73 303.64,94.96 303.91,94.94 304.15,95.23 304.71,95.17 305.01,94.57 305.45,94.47 306.06,94.63 306.25,95.02 
					306.84,95.44 307.17,95.68 307.31,95.98 307.26,96.21 307.16,96.37 307.31,96.7 307.29,97.08 307.22,97.28 307.46,97.45 
					307.74,97.77 308,97.79 308.23,97.89 308.14,98.03 308.48,98.25 308.54,98.44 308.45,98.74 308.47,98.92 308.38,99.17 
					308.47,99.38 308.45,99.87 308.28,100.06 308.13,100.14 308.44,100.37 308.56,100.55 308.95,100.56 309.19,100.96 309.61,101.12 
					309.63,100.93 309.55,100.68 309.59,100.43 309.3,100.14 309.55,99.91 310,99.81 310.13,100.03 310.32,100.08 310.6,100.26 
					310.8,100.25 310.84,100.25 311.09,100.09 311.06,99.69 310.96,99.51 310.9,99.16 311.28,98.86 		"/>
				<polygon class="st1" points="310.8,100.25 310.84,100.25 310.8,100.25 		"/>
				<polygon class="st1" points="302.97,88.56 302.88,88.39 302.88,88.39 		"/>
				<polygon class="st1" points="310.6,100.26 310.8,100.25 310.8,100.25 		"/>
				<polygon class="st1" points="301.21,111.44 301.17,111.27 301.07,111.22 301.01,111.26 301.11,111.48 		"/>
				<polygon class="st1" points="304.14,103.68 304.33,103.84 304.47,103.81 304.12,103.45 		"/>
				<polygon class="st1" points="301.21,106.87 301.39,106.92 301.45,106.78 		"/>
				<polygon class="st1" points="301.54,107.53 301.6,107.26 301.52,107.07 301.32,107.19 301.34,107.37 		"/>
				<polygon class="st1" points="304.83,102.77 304.7,102.51 304.47,102.38 304.36,101.85 304.38,101.32 304.61,101.02 304.69,100.62 
					304.98,100.22 305.24,100.22 305.88,100.02 306.26,100.03 306.38,100.14 306.76,100.01 307.05,100.01 307.34,100.08 
					307.73,100.04 307.96,100.22 308.28,100.06 308.45,99.87 308.47,99.38 308.38,99.17 308.47,98.92 308.45,98.74 308.54,98.44 
					308.48,98.25 308.14,98.03 308.23,97.89 308,97.79 307.74,97.77 307.46,97.45 307.22,97.28 307.29,97.08 307.31,96.7 
					307.16,96.37 307.26,96.21 307.31,95.98 307.17,95.68 306.84,95.44 306.25,95.02 306.06,94.63 305.45,94.47 305.01,94.57 
					304.71,95.17 304.15,95.23 303.91,94.94 303.64,94.96 303.19,94.73 302.76,94.92 302.72,95.19 302.39,95.27 302.02,95.47 
					302,94.76 302,94.29 301.88,93.96 302.04,93.75 302.05,93.54 301.89,93.28 302.05,92.97 302.04,92.73 301.54,92.72 301.31,92.92 
					301.09,92.84 300.9,92.5 301.11,92.34 301.04,91.88 300.78,91.56 300.42,91.65 300.27,91.34 300.25,91.36 299.86,91.38 
					299.56,91.49 299.55,91.64 299.7,91.84 299.6,91.99 299.25,91.94 299.08,92.09 299.07,92.43 298.99,92.57 298.69,92.57 
					298.38,92.82 297.87,92.62 297.65,92.91 297.72,93.38 297.53,93.56 297.53,93.96 297.63,94.18 297.37,94.37 297.02,94.52 
					297.05,94.73 297.26,94.79 297.48,95.18 297.68,95.36 297.75,95.57 298.1,95.81 298.43,96.51 298.64,96.59 298.8,96.94 
					298.84,97.23 299.13,97.37 299.15,97.64 298.9,97.78 298.8,97.97 298.95,98.66 298.91,98.87 298.63,99.03 298.82,99.5 
					298.83,99.74 299.18,100.18 299.59,100.5 299.96,100.86 300.14,101.44 300.04,101.66 300.1,101.93 300.07,102.22 300.23,102.38 
					300.28,102.78 300.4,103.03 300.38,103.42 300.56,103.72 300.54,104.17 300.38,104.26 300.06,105.12 299.77,105.33 299.73,105.67 
					299.6,105.89 299.53,106.09 299.48,106.54 299.63,106.56 299.46,106.81 299.52,106.92 299.32,107.2 299.48,107.23 299.37,107.44 
					299.23,107.4 299.24,107.93 299.07,108.01 299.11,108.4 299.05,108.52 299.12,108.98 299.24,109.16 299.41,109.18 299.4,108.93 
					299.66,108.81 299.65,108.94 299.8,109.05 299.8,109.25 300.05,109.3 300.2,109.79 300.4,109.79 300.7,110.19 300.7,110.38 
					300.97,110.42 301.06,110.64 301.2,110.67 301.19,110.81 301.08,110.94 301.1,111.05 301.68,111.47 301.79,111.65 301.88,111.34 
					302.06,111.12 302.31,111.34 302.68,111.45 302.75,111.6 303.03,111.6 303.21,111.78 303.17,112.17 303.01,112.36 303,112.56 
					303.36,112.65 303.66,112.38 303.91,112.35 304.09,112.51 304.28,112.37 304.28,112.13 304.34,112.06 304.31,111.93 
					304.06,111.77 303.92,111.58 303.74,111.19 303.49,111.09 303.22,111.06 303.11,111.14 302.94,111.02 302.56,110.64 
					302.38,110.49 302.36,110.25 302.27,110.19 302.23,110.39 301.83,110.25 301.87,110.05 302.08,109.91 302.15,110 302.19,109.9 
					302.25,109.83 302.14,109.27 302.01,109.2 302.01,108.98 301.86,108.75 301.79,108.54 301.77,108.66 301.77,108.8 301.63,108.81 
					301.49,108.51 301.35,108.46 301.37,108.17 301.25,108 301.22,107.72 301.1,107.61 300.9,107.57 300.83,107.52 300.7,107.67 
					300.66,107.78 300.51,107.83 300.43,107.72 300.57,107.46 300.3,107.08 300.3,106.9 300.23,106.62 300.21,106.49 300.34,106.33 
					300.3,106.27 300.16,106.24 300.29,105.97 300.29,105.69 300.61,105.27 300.68,104.25 300.88,103.96 300.92,103.68 301.11,103.44 
					301.15,103.06 301.05,102.98 301.1,102.81 301.09,102.52 301.23,102.28 301.19,102.04 300.97,101.93 301.03,101.74 301.03,101.68 
					301.11,101.72 301.26,101.72 301.35,101.61 301.45,101.69 301.61,101.68 301.82,101.58 301.92,101.65 302,101.63 302.05,101.66 
					302.28,101.71 302.36,101.89 302.28,101.97 302.26,102.33 302.38,102.54 302.29,102.63 302.22,102.85 302.43,102.83 
					302.61,102.89 302.88,102.83 303.18,102.9 303.29,102.98 303.32,102.93 303.29,102.87 303.44,102.74 303.63,102.81 303.99,103.16 
					304.16,103.24 304.15,103.36 304.26,103.37 304.54,103.61 304.58,103.67 304.63,103.65 304.65,103.46 304.77,103.48 304.8,103.27 
							"/>
				<path class="st1" d="M299.36,109.6v-0.33h-0.16l-0.05,0.18l0.05,0.11v0.28L299.36,109.6z"/>
				<polygon class="st1" points="300.23,109.95 300.16,109.94 300.21,110.22 300.25,110.07 		"/>
				<polygon class="st1" points="291.6,93.97 291.39,94.06 291.47,94.26 291.74,94.42 291.81,94.18 		"/>
				<polygon class="st1" points="301.4,89.37 300.79,89.64 300.49,89.64 300.3,89.81 299.99,89.66 299.9,89.4 299.98,89.04 
					299.8,88.8 299.59,88.98 299.52,88.91 299.1,88.86 298.89,88.95 298.84,88.77 299.1,88.52 299.41,88.08 299.4,87.88 299.52,87.65 
					299.52,87.45 299.24,87.27 298.86,87.32 298.81,87.43 298.71,87.25 298.77,87.12 298.43,87.05 298.27,86.83 298.36,86.6 
					298.29,86.36 297.94,86.45 297.77,86.32 297.86,86.15 297.8,85.94 297.19,86.06 296.87,86.3 296.74,85.98 296.78,85.66 
					296.59,85.49 296.49,85.31 296.26,85.22 296.26,84.99 296.39,84.79 296.27,84.61 296.38,84.38 296.56,84.18 296.74,84.25 
					296.85,84.1 296.73,83.83 296.8,83.65 296.93,83.61 296.95,83.36 297.21,83.24 297.27,83.07 297.27,82.8 297.34,82.23 
					297.31,81.82 297.09,81.36 297.09,80.95 296.85,80.68 296.61,80.69 296.54,80.27 296.27,80.07 296.1,79.71 295.79,79.7 
					295.58,79.82 295.27,79.69 295.04,79.8 295.11,79.86 295.13,80.06 294.87,80.31 294.87,80.67 294.94,80.89 294.68,80.78 
					294.45,80.59 294.07,80.86 293.63,81 293.5,81.32 293.18,81.72 292.87,81.83 292.43,82.53 292.36,82.85 292.49,83.02 
					292.31,83.56 291.93,84.17 291.95,84.38 292.27,84.53 292.06,85.05 291.98,85.25 291.85,85.82 291.64,86.33 291.28,86.33 
					291.04,86.26 290.76,86.24 290.93,86.9 290.92,87.25 290.89,87.74 290.61,87.7 290.65,88.06 290.61,88.39 290.67,88.66 
					290.52,89.11 290.37,89.19 290.25,89.13 290.19,89.38 290.19,89.53 290.19,89.85 290.04,90.18 289.93,90.11 289.67,90.44 
					289.63,90.69 289.65,90.78 289.65,90.77 289.79,91.06 289.89,91.42 290.49,91.95 290.36,91.72 290.36,91.59 290.57,91.77 
					290.83,91.75 290.63,91.98 290.65,92.09 290.89,92.06 290.92,91.89 290.98,92.06 291.22,92.1 291.33,92.28 291.75,92.36 
					292.01,92.75 292.02,92.97 291.86,93.03 291.71,92.88 291.5,93 291.7,93.19 291.78,93.23 291.7,93.32 291.49,93.22 291.4,93.01 
					291.16,92.99 291.19,93.14 291.44,93.36 291.46,93.52 291.7,93.8 292.2,93.94 292.14,93.47 292.02,93.25 292.35,93.45 
					292.35,93.69 292.45,93.9 292.61,94.11 292.71,94.5 292.9,94.65 292.82,94.7 292.9,94.84 293.04,94.9 293.07,95.44 293.31,96.03 
					293.43,96.15 293.13,96.34 292.9,97.69 292.99,97.97 292.94,98.07 292.98,98.2 293.18,97.87 293.47,97.62 293.63,97.22 
					293.61,97.66 293.25,98 293.25,98.37 293.4,98.36 293.45,98.17 293.81,97.98 293.97,98.17 294.1,98.14 294.13,98.01 294.14,98.08 
					294.28,98.08 294.32,98.02 294.59,98.05 295.13,97.69 295.2,97.45 295.34,97.54 295.53,97.54 295.83,97.37 295.61,97.31 
					295.63,97.22 295.53,97 295.62,97 295.77,97.19 296,97.23 296.35,96.95 296.3,96.78 296.42,96.65 296.45,96.38 296.3,96.27 
					296.32,96.11 296.37,96.02 296.22,95.84 296.46,95.99 296.46,96.14 296.59,96.15 296.64,96.3 296.91,96.82 297.02,96.96 
					297.1,97.29 297.33,97.29 297.51,97.22 297.61,97.05 297.6,97.2 297.52,97.33 297.69,97.64 297.69,97.81 297.58,97.85 
					297.64,98.1 297.8,98.22 297.91,99.22 298,99.23 298.01,99.7 298.35,99.89 298.25,100 298.27,100.27 298.46,100.51 298.44,101.1 
					298.57,101.34 298.56,101.58 298.64,101.52 298.69,101.09 298.88,101.42 298.94,101.7 299.13,101.86 299.22,102.69 299.35,102.8 
					299.44,103.04 299.34,103.17 299.35,103.52 299.49,103.72 299.69,103.93 299.5,104.08 299.62,104.44 299.56,104.6 299.47,104.64 
					299.42,105 299.5,105.08 299.5,105.3 299.34,105.57 299.24,105.66 299.14,105.61 299.15,105.75 299.24,105.91 299.25,106.3 
					299.38,106.72 299.41,106.32 299.54,106.05 299.53,106.09 299.6,105.89 299.73,105.67 299.77,105.33 300.06,105.12 300.38,104.26 
					300.54,104.17 300.56,103.72 300.38,103.42 300.4,103.03 300.28,102.78 300.23,102.38 300.07,102.22 300.1,101.93 300.04,101.66 
					300.14,101.44 299.96,100.86 299.59,100.5 299.18,100.18 298.83,99.74 298.82,99.5 298.63,99.03 298.91,98.87 298.95,98.66 
					298.8,97.97 298.9,97.78 299.15,97.64 299.13,97.37 298.84,97.23 298.8,96.94 298.64,96.59 298.43,96.51 298.1,95.81 
					297.75,95.57 297.68,95.36 297.48,95.18 297.26,94.79 297.05,94.73 297.02,94.52 297.37,94.37 297.63,94.18 297.53,93.96 
					297.53,93.56 297.72,93.38 297.65,92.91 297.87,92.62 298.38,92.82 298.69,92.57 298.99,92.57 299.07,92.43 299.08,92.09 
					299.25,91.94 299.6,91.99 299.7,91.84 299.55,91.64 299.56,91.49 299.86,91.38 300.25,91.36 300.27,91.33 300.42,90.99 
					300.57,90.99 300.84,90.77 300.71,90.59 300.76,90.53 300.87,90.38 300.88,90.12 301.26,90.05 301.64,89.72 301.67,89.46 		"/>
				<polygon class="st1" points="300.27,91.33 300.27,91.34 300.42,90.99 		"/>
				<polygon class="st1" points="300.25,91.36 300.27,91.34 300.27,91.33 		"/>
				<polygon class="st1" points="276.89,110.44 276.78,110.27 276.84,110.06 276.64,109.89 276.42,109.28 276.24,108.87 276.01,108.9 
					276,108.85 275.8,108.83 276.06,108.68 276.02,108.56 275.91,108.51 275.73,108.19 275.6,108.2 275.52,107.95 275.44,107.84 
					275.44,107.69 275.05,107.55 274.98,107.64 274.8,107.58 274.82,107.48 274.53,107.39 274.52,107.47 274.57,107.56 274.53,107.61 
					274.45,107.63 274.48,107.72 274.47,107.9 274.33,108.15 274.25,108.11 274.11,107.98 273.94,107.96 273.94,108.02 274.08,108.1 
					274.16,108.22 274.11,108.28 274.22,108.54 274.22,108.91 274.13,109.04 274.05,109.64 274.08,109.82 274.01,109.89 274.13,110.4 
					274.08,110.59 274.26,111.23 274.48,111.95 274.67,112.27 274.99,112.44 275.26,112.37 275.72,112.31 276.14,112.18 
					276.58,111.73 276.77,111.34 276.86,111.1 276.84,110.88 276.9,110.8 		"/>
				<polygon class="st1" points="274.6,106.93 274.52,106.88 274.08,106.91 274.09,107.08 274.44,107.3 274.42,107.19 274.49,107.17 
							"/>
				<polygon class="st1" points="274.61,107.24 274.88,107.37 275,107.47 275.23,107.47 275.36,107.57 275.3,107.44 274.99,107.25 
					274.94,107.05 274.75,106.99 274.7,107.08 274.78,107.13 274.62,107.15 		"/>
				<polygon class="st1" points="274.06,109.28 274.01,109.07 274.08,109.04 274.1,108.98 273.94,109.04 273.96,109.28 273.92,109.59 
							"/>
				<polygon class="st1" points="283.79,89.97 283.88,89.93 284.01,89.6 283.92,89.47 283.78,89.84 		"/>
				<polygon class="st1" points="284.67,90.03 284.76,89.94 284.67,89.79 		"/>
				<polygon class="st1" points="284.16,89.75 284.19,90.01 284.33,90.12 284.29,89.88 		"/>
				<polygon class="st1" points="284.38,89.78 284.43,89.94 284.52,90 284.55,89.84 284.53,89.7 		"/>
				<polygon class="st1" points="294.87,80.31 295.13,80.06 295.11,79.86 294.83,79.58 294.58,79.47 294.41,79.54 294.12,79.49 
					294.05,79.27 294.27,79.03 294.27,78.85 294.07,78.58 294.01,78.38 293.84,78.43 293.67,78.48 293.57,78.26 293.76,77.89 
					293.7,77.77 293.52,77.81 293.37,77.62 293.16,77.55 292.57,77.89 292.61,78.14 292.47,78.27 291.95,78.11 291.6,78.2 
					291.36,77.85 291.05,78.07 290.86,78.11 290.88,78.4 290.58,78.78 290.08,78.9 289.79,78.94 289.56,79.22 289.47,79.5 
					289.19,79.58 289.18,79.75 288.97,79.68 288.77,79.83 288.63,80.16 288.42,80.18 287.92,80.3 287.73,80.31 287.65,80.64 
					287.68,80.91 288.1,81.1 288.1,81.48 288.11,81.69 287.57,81.87 287.2,81.85 286.71,81.98 286.43,81.86 286.13,81.9 285.86,82.23 
					285.49,82.23 284.83,81.85 284.65,81.96 284.19,81.87 283.93,81.45 284.02,81.22 284.06,80.91 284.04,80.92 283.78,80.73 
					283.76,80.39 283.61,80.1 283.29,80.14 283.05,80.36 283.01,80.35 283.1,80.64 282.99,81.29 283.24,81.81 283.14,82.44 
					282.3,82.61 281.8,82.34 281.5,82.5 280.33,82.07 279.87,82.09 279.61,82.22 278.89,82.03 278.54,81.72 278.46,81.37 
					277.82,81.21 277.12,81.41 276.88,81.19 276.2,81.25 275.75,80.96 275.38,80.96 275.12,80.78 274.6,80.66 274.19,80.15 
					273.57,79.74 273.09,79.61 272.86,79.44 272.61,79.43 272.38,79.24 272.08,79.21 272.01,78.87 272.32,78.4 272.32,77.95 
					272.53,77.23 272.5,76.76 272.47,76.79 272.38,76.57 272.14,76.53 271.99,76.21 271.78,76.14 271.52,75.86 271.21,75.81 
					271.08,75.66 270.78,75.65 270.62,75.91 270.32,75.76 270.23,75.47 270.11,75.43 270.11,75.22 269.94,74.99 269.8,74.89 
					269.88,74.73 269.74,74.47 269.8,73.95 269.44,73.76 269.42,73.54 269.33,73.37 269.32,73.38 268.77,73.03 268.43,73.05 
					268.3,72.68 267.93,72.54 267.54,72.75 266.8,72.25 266.51,72.25 266.34,72.58 266,72.6 265.6,72.96 265.2,73.62 265.12,73.71 
					264.85,74.01 264.68,73.98 264.43,74.14 264.18,74.23 263.75,74.64 263.83,74.76 263.96,75.25 263.9,75.93 263.86,76.25 
					263.64,76.41 263.25,76.84 263.43,76.98 263.44,77.23 263.29,77.56 262.85,77.78 262.55,78.2 262.49,78.64 262.34,78.94 
					261.71,79.37 261.45,80.17 261.02,80.65 260.31,80.69 259.81,80.95 259.61,80.91 259.55,80.65 259.26,80.52 259.08,80.65 
					258.83,80.78 258.77,81.01 258.41,81.53 258.21,81.59 257.99,82.14 257.99,82.48 258.22,82.47 258.54,82.58 258.69,82.5 
					258.94,82.51 259.13,82.93 259.11,83.26 259.17,83.75 259.61,84.04 259.87,84.02 260.06,84.17 259.99,84.36 260.25,84.71 
					260.56,85.56 260.52,85.76 260.62,85.89 260.37,85.98 260.07,86.16 259.94,86 260.05,85.81 259.74,85.91 259.63,86.02 
					259.1,86.22 258.17,86.17 257.94,86.29 257.74,86.24 257.63,86.58 257.44,86.63 257.16,86.81 257.14,87.16 257.52,86.92 
					257.9,86.86 257.6,87.02 257.33,87.37 257.32,87.65 257.49,87.73 257.91,88.17 258.79,88.48 259.04,88.39 259.37,88.39 
					259.93,88.15 259.95,88.03 259.91,87.94 259.99,87.99 260.27,88.01 260.16,88.27 260.08,88.25 259.82,88.65 259.65,88.66 
					259.1,89.1 259.07,89.2 258.92,89.11 258.83,89.12 258.69,89.24 258.46,89.22 258.47,88.92 258.3,88.97 258.25,88.89 258.09,88.9 
					258.04,89.05 258.09,89.23 258.69,89.83 258.86,89.93 258.99,89.92 259,90.01 259.42,90.57 260.46,91.41 260.95,91.52 
					261.28,91.41 261.98,90.97 262.44,90.74 262.44,90.59 262.65,90.38 262.7,89.9 262.5,89.65 262.69,89.13 262.71,88.86 
					262.75,88.69 262.85,88.91 263.17,88.87 263.34,88.94 263.58,88.8 263.47,88.97 263.25,89.19 263.07,89.15 263,89.21 
					262.95,89.47 263.08,89.7 263.05,89.95 263.22,89.96 263.53,89.92 263.76,89.97 263.55,89.97 263.44,90.12 263.15,90.3 
					263.27,90.94 263.42,91.04 263.55,91.43 263.58,91.82 263.44,92.12 263.45,92.36 263.66,92.48 263.42,92.6 263.48,93.06 
					263.89,93.8 263.91,94.05 264.05,94.24 263.87,94.28 263.86,94.57 264.25,95.08 263.96,95.1 264.21,95.49 264.21,95.85 
					264.79,96.97 264.8,97.73 265.01,98.31 265.24,98.45 265.34,98.85 265.51,98.95 265.52,99.13 265.84,99.7 265.93,99.72 
					265.93,99.87 266.28,100.27 266.36,100.29 266.39,100.78 266.53,101 266.68,101.29 266.75,101.71 266.98,102.33 267.14,102.56 
					267.18,103.12 267.3,103.23 267.46,103.58 267.83,103.97 267.94,103.98 268.17,104.36 268.57,104.82 268.69,105.28 268.82,105.66 
					268.94,105.67 268.94,105.92 269.24,106.48 269.39,107 269.42,107.56 269.9,108.56 270.3,109.03 270.7,109.31 271.14,109.36 
					271.68,109.03 271.8,108.67 271.74,108.57 271.8,108.51 271.82,108.36 271.97,108.12 272.44,107.92 272.53,107.93 273.11,107.72 
					273.32,107.8 273.38,107.93 273.37,107.83 273.32,107.75 272.88,107.53 272.84,107.35 272.96,107.2 273.31,106.74 273.24,106.63 
					273.4,106.36 273.75,106.3 273.89,106.37 274.15,106.27 274.15,105.97 274.05,104.84 273.91,104.64 273.91,104.11 274.26,103.49 
					274.57,102.6 274.52,101.94 274.18,101.82 274.18,100.78 274.14,100.41 274.35,100.17 274.13,99.5 274.12,99.02 274.25,98.78 
					274.7,98.33 274.81,98.33 274.96,98.53 275.16,98.55 275.53,98.08 275.53,97.8 275.8,97.57 276.4,97.66 276.71,97.46 
					276.94,97.13 276.89,96.82 276.93,96.53 277.31,96.21 277.82,96.04 278.1,95.76 278.28,95.42 279.48,94.44 279.72,93.8 
					280.64,92.98 280.52,92.92 280.44,93.02 280.23,93.1 280.29,92.75 280.43,92.72 280.66,92.54 280.76,92.54 280.82,92.61 
					280.82,92.75 280.9,92.85 281.64,92.47 281.66,92.3 282.16,91.94 282.1,91.78 282.24,91.76 282.32,91.52 282.62,91.25 
					282.54,91.21 282.55,91.13 282.41,90.84 282.36,90.68 282.49,90.41 282.55,90.21 282.69,90.09 283.53,89.78 283.73,89.56 
					283.75,89.36 283.83,89.17 283.92,89.1 283.81,88.97 283.65,88.93 283.63,88.85 283.87,88.85 284.07,89.03 284.01,89.24 
					284.08,89.58 284.31,89.65 284.33,89.61 284.55,89.61 284.6,89.52 284.63,89.59 284.67,89.43 284.7,89.31 284.75,89.47 
					284.85,89.77 285,89.86 285,89.71 285.2,89.93 285.35,89.69 285.19,89.38 285.26,89.36 285.22,88.94 285.13,88.71 285.12,88.35 
					284.73,87.8 284.67,87.38 284.71,87.14 284.59,86.79 284.59,86.35 284.26,85.93 283.91,85.79 283.61,85.43 283.61,84.89 
					283.87,84.84 283.98,84.47 284.18,84.36 284.35,84.42 284.52,84.28 284.44,83.93 284.5,83.77 284.15,83.73 283.91,83.83 
					283.27,83.61 283.31,83.29 283.32,83.28 283.57,82.98 283.7,82.64 283.57,82.52 283.56,82.33 283.67,82.32 283.75,82.13 
					283.86,82.28 284.04,82.5 284.03,82.65 284.23,82.89 284.51,82.93 284.65,82.86 284.45,82.74 284.51,82.59 284.63,82.6 
					284.82,82.76 284.96,82.9 285.22,82.98 285.24,82.89 285.38,82.86 285.56,83.19 285.62,83.49 285.62,83.51 285.66,83.68 
					285.77,83.97 285.76,84.16 286.01,84.26 286.26,84.24 286.55,84.37 286.89,84.37 287.44,84.33 287.85,84.38 288.31,84.36 
					288.53,84.34 288.63,84.41 288.78,84.37 289.02,84.61 289.15,84.67 289.01,84.95 288.96,85.28 288.78,85.73 288.62,85.82 
					288.62,86 288.51,86.13 288.36,86.1 288.26,86.01 288,86.19 287.96,86.36 287.85,86.46 287.85,86.62 287.99,86.98 288.13,87.11 
					288.18,87.24 288.39,87.45 288.61,87.73 288.74,87.72 288.77,87.51 288.68,87.44 288.82,87.23 288.82,87.09 288.9,86.96 
					288.82,86.84 288.94,86.74 289.11,86.86 289.35,86.84 289.42,86.96 289.53,87.15 289.62,87.53 289.62,87.82 289.72,88.02 
					289.8,88.56 289.9,88.93 290,89.13 290.06,89.23 290.07,89.37 290.14,89.48 290.19,89.53 290.19,89.38 290.25,89.13 290.37,89.19 
					290.52,89.11 290.67,88.66 290.61,88.39 290.65,88.06 290.61,87.7 290.89,87.74 290.92,87.25 290.93,86.9 290.76,86.24 
					291.04,86.26 291.28,86.33 291.64,86.33 291.85,85.82 291.98,85.25 292.06,85.05 292.27,84.53 291.95,84.38 291.93,84.17 
					292.31,83.56 292.49,83.02 292.36,82.85 292.43,82.53 292.87,81.83 293.18,81.72 293.5,81.32 293.63,81 294.07,80.86 
					294.45,80.59 294.68,80.78 294.94,80.89 294.87,80.67 		"/>
				<path class="st1" d="M287.88,89.06l0.19-0.35L288,88.49l-0.34-0.24c0.01,0.04,0.01,0.09,0,0.13l0.13,0.28v0.22L287.88,89.06z"/>
				<polygon class="st1" points="288.16,88.42 288.19,88.7 288.32,88.64 288.36,88.45 288.27,88.35 		"/>
				<polygon class="st1" points="287.14,88.29 287.15,88.41 287.33,88.81 287.57,88.82 287.55,88.42 287.38,88.19 		"/>
				<polygon class="st1" points="290.14,89.48 290.07,89.37 290.06,89.23 290,89.13 289.9,88.93 289.8,88.56 289.72,88.02 
					289.62,87.82 289.62,87.53 289.53,87.15 289.42,86.96 289.35,86.84 289.11,86.86 288.94,86.74 288.82,86.84 288.9,86.96 
					288.82,87.09 288.82,87.23 288.68,87.44 288.77,87.51 288.74,87.72 288.61,87.73 288.39,87.45 288.18,87.24 288.13,87.11 
					287.99,86.98 287.85,86.62 287.85,86.46 287.96,86.36 288,86.19 288.26,86.01 288.36,86.1 288.51,86.13 288.62,86 288.62,85.82 
					288.78,85.73 288.96,85.28 289.01,84.95 289.15,84.67 289.02,84.61 288.78,84.37 288.63,84.41 288.53,84.34 288.31,84.36 
					287.85,84.38 287.44,84.33 286.89,84.37 286.55,84.37 286.26,84.24 286.01,84.26 285.76,84.16 285.77,83.97 285.66,83.68 
					285.62,83.51 285.62,83.49 285.56,83.19 285.38,82.86 285.24,82.89 285.22,82.98 284.96,82.9 284.82,82.76 284.63,82.6 
					284.51,82.59 284.45,82.74 284.65,82.86 284.51,82.93 284.23,82.89 284.03,82.65 284.04,82.5 283.86,82.28 283.75,82.13 
					283.67,82.32 283.56,82.33 283.57,82.52 283.7,82.64 283.57,82.98 283.32,83.28 283.31,83.29 283.27,83.61 283.91,83.83 
					284.15,83.73 284.5,83.77 284.44,83.93 284.52,84.28 284.35,84.42 284.18,84.36 283.98,84.47 283.87,84.84 283.61,84.89 
					283.61,85.43 283.91,85.79 284.26,85.93 284.59,86.35 284.59,86.79 284.71,87.14 284.67,87.38 284.73,87.8 285.12,88.35 
					285.13,88.71 285.22,88.94 285.26,89.36 285.39,89.31 285.5,89.58 285.55,89.7 285.71,89.7 285.77,89.5 285.89,89.45 
					286.07,89.57 286.09,89.61 286.22,89.53 286.24,89.3 286.1,88.98 286.17,88.97 286.2,88.69 286.31,88.53 286.24,88.4 
					286.34,88.52 286.34,88.6 286.2,89.06 286.38,89.31 286.55,89.03 286.74,88.94 286.68,89.06 286.57,89.11 286.44,89.35 
					286.65,89.49 286.87,89.09 287.13,88.98 287.16,88.62 286.98,88.32 286.8,88.25 287.08,88.15 287.12,88 286.94,87.73 
					286.88,87.26 287,87.66 287.24,87.88 287.39,87.87 287.45,87.97 287.93,88.19 288.18,88.04 288.27,88.08 288.26,88 288.38,88 
					288.8,88.93 288.97,89.05 288.96,89.23 288.9,89.54 288.99,89.6 288.92,90 288.97,90.08 289.13,89.93 289.17,89.81 289.16,90.03 
					289.09,90.19 289.2,90.33 289.45,90.69 289.64,91.17 289.69,91.15 289.62,90.81 289.65,90.78 289.63,90.69 289.67,90.44 
					289.93,90.11 290.04,90.18 290.19,89.85 290.19,89.53 		"/>
				<polygon class="st1" points="283.93,81.45 284.19,81.87 284.65,81.96 284.83,81.85 285.49,82.23 285.86,82.23 286.13,81.9 
					286.43,81.86 286.71,81.98 287.2,81.85 287.57,81.87 288.11,81.69 288.1,81.48 288.1,81.1 287.68,80.91 287.65,80.64 
					287.73,80.31 287.68,80.32 287.45,80.03 287.11,80.02 286.76,80.15 286.51,80.03 285.86,79.97 285.72,79.74 285.29,79.8 
					284.63,80.19 284.32,80.78 284.06,80.91 284.02,81.22 		"/>
				<polygon class="st1" points="272.32,77.95 272.32,78.4 272.01,78.87 272.08,79.21 272.38,79.24 272.61,79.43 272.86,79.44 
					273.09,79.61 273.57,79.74 274.19,80.15 274.6,80.66 275.12,80.78 275.38,80.96 275.75,80.96 276.2,81.25 276.88,81.19 
					277.12,81.41 277.82,81.21 278.46,81.37 278.54,81.72 278.89,82.03 279.61,82.22 279.87,82.09 280.33,82.07 281.5,82.5 
					281.8,82.34 282.3,82.61 283.14,82.44 283.24,81.81 282.99,81.29 283.1,80.64 283.01,80.35 282.77,80.34 282.4,80.45 282.26,80.4 
					281.92,80.54 281.69,80.48 281.41,80.11 281.01,79.96 280.94,79.64 280.61,79.47 280.1,79.41 279.86,79.69 279.56,79.77 
					279.4,79.92 279.02,79.73 278.79,79.78 278.64,79.47 278.72,78.92 278.38,78.87 277.95,78.98 277.62,78.69 277.58,78.32 
					277.3,78.15 277.01,78.15 276.91,78.03 276.76,78.17 276.73,78.58 276.59,78.63 276.48,78.34 276.23,78.06 276.13,77.88 
					275.83,77.74 275.52,77.73 275.12,77.31 274.92,77.16 274.6,77.14 274.46,77.01 273.96,76.82 273.63,76.85 273.47,77.09 
					273.32,77.03 273.05,77.04 272.95,76.89 272.55,76.69 272.5,76.76 272.53,77.23 		"/>
				<polygon class="st1" points="265.09,73.42 264.74,73.33 264.42,73.46 264.01,73.37 263.84,73.02 263.37,72.83 262.86,72.71 
					262.38,72.27 262.31,71.86 262.09,70.95 261.85,70.55 261.84,70.13 262.06,70.03 262.1,69.75 262.48,69.51 262.47,69.18 
					262.08,69.07 262.01,68.8 261.65,68.58 261.27,68.27 261,67.93 260.73,68.03 260.54,68.11 260.34,67.92 260.28,67.39 
					260.94,66.95 260.85,66.72 260.46,66.8 260.15,66.62 259.7,66.86 259.37,67.15 259,67.15 258.78,67.48 258.53,67.73 259.11,68.59 
					259.15,69.18 258.51,70.02 258.84,70.33 258.84,70.7 258.49,71.22 258.26,71.22 257.98,71.22 257.5,71.03 257.16,71.24 
					257.31,71.59 257.6,71.75 257.76,72.12 257.7,72.35 257.38,72.53 257.08,72.56 256.97,72.75 256.93,73.23 256.84,73.54 
					256.83,73.73 256.73,73.84 256.83,74.44 256.54,74.87 256.28,74.54 256.13,74.54 256.11,74.73 255.77,74.71 255.62,74.6 
					255.3,74.63 255.21,74.81 254.7,75.2 254.93,75.26 254.77,75.46 254.27,75.68 254.12,75.58 253.79,75.64 253.69,75.85 
					253.63,76.06 253.38,76.15 253.2,76.37 253.22,76.74 253.32,77.18 253.3,77.46 253.41,77.73 253.35,77.98 252.81,78.2 
					252.35,78.19 251.92,78.25 251.2,78.29 250.72,78.42 250.56,78.56 250.13,78.54 249.67,78.66 248.11,78.69 246.26,78.17 
					246.96,79.11 247.12,79.42 247.47,79.79 247.81,79.98 247.93,80.11 248.37,80.15 248.63,80.25 248.67,80.4 249.03,80.44 
					249.04,80.89 249.14,81.2 249.16,81.57 249.23,81.82 249.56,81.8 249.91,82.03 249.95,82.56 249.76,82.74 249.41,82.61 
					248.75,82.8 248.62,82.95 248.21,83.11 248.07,83.38 248.14,83.61 247.94,83.89 248.06,84.22 248,84.7 248.01,84.92 248.17,84.92 
					248.16,85.11 248.28,85.16 248.67,84.93 248.97,84.91 249,85.03 249.11,84.99 249.3,84.83 249.6,84.85 249.73,84.89 249.96,84.83 
					250.12,84.85 250.27,84.85 250.3,84.7 250.42,84.56 250.68,84.73 250.87,84.73 250.9,84.62 251.04,84.65 251.12,84.81 
					251.34,84.81 251.52,84.94 251.73,84.94 252.04,84.64 252.4,84.64 252.61,84.7 252.82,84.57 253.03,84.57 253.07,84.47 
					253.18,84.55 253.56,84.6 253.89,84.48 254.29,84.47 254.58,84.69 254.69,84.99 254.65,85.22 254.69,85.27 254.62,85.29 
					254.63,85.39 254.85,85.39 255.25,85.21 255.24,85.49 255.54,85.83 255.62,86.31 255.67,86.36 255.66,86.54 255.56,86.61 
					255.64,86.65 255.75,86.65 255.84,86.93 256.09,86.91 256.48,86.9 256.96,87.14 256.93,87.3 257.14,87.16 257.16,86.81 
					257.44,86.63 257.63,86.58 257.74,86.24 257.94,86.29 258.17,86.17 259.1,86.22 259.63,86.02 259.74,85.91 260.05,85.81 
					259.94,86 260.07,86.16 260.37,85.98 260.62,85.89 260.52,85.76 260.56,85.56 260.25,84.71 259.99,84.36 260.06,84.17 
					259.87,84.02 259.61,84.04 259.17,83.75 259.11,83.26 259.13,82.93 258.94,82.51 258.69,82.5 258.54,82.58 258.22,82.47 
					257.99,82.48 257.99,82.14 258.21,81.59 258.41,81.53 258.77,81.01 258.83,80.78 259.08,80.65 259.26,80.52 259.55,80.65 
					259.61,80.91 259.81,80.95 260.31,80.69 261.02,80.65 261.45,80.17 261.71,79.37 262.34,78.94 262.49,78.64 262.55,78.2 
					262.85,77.78 263.29,77.56 263.44,77.23 263.43,76.98 263.25,76.84 263.64,76.41 263.86,76.25 263.9,75.93 263.96,75.25 
					263.83,74.76 263.75,74.64 264.18,74.23 264.43,74.14 264.68,73.98 264.85,74.01 265.12,73.71 		"/>
				<polygon class="st1" points="265.12,73.71 265.12,73.71 264.85,74.01 		"/>
				<polygon class="st1" points="261.81,66.52 260.85,66.72 260.94,66.95 260.28,67.39 260.34,67.92 260.54,68.11 260.73,68.03 
					261,67.93 261.27,68.27 261.65,68.58 262.01,68.8 262.08,69.07 262.47,69.18 262.48,69.51 262.1,69.75 262.06,70.03 261.84,70.13 
					261.85,70.55 262.09,70.95 262.31,71.86 262.38,72.27 262.86,72.71 263.37,72.83 263.84,73.02 264.01,73.37 264.42,73.46 
					264.74,73.33 265.09,73.42 265.12,73.71 265.2,73.62 265.6,72.96 266,72.6 266.34,72.58 266.51,72.25 266.8,72.25 267.54,72.75 
					267.93,72.54 268.3,72.68 268.43,73.05 268.77,73.03 269.32,73.38 269.72,72.96 269.94,73.03 269.99,73.22 270.17,72.94 
					270.08,72.45 269.92,71.86 269.57,71.77 269.31,71.16 269.34,70.52 269.14,70.18 268.69,69.96 268.34,69.55 268.1,68.89 
					267.66,68.65 267.14,68.48 267.08,68.17 266.83,68.1 266.29,68.11 265.75,68.04 265.61,67.85 265.38,67.69 265.37,67.33 
					265.01,67.08 264.39,66.21 264.25,65.78 264.04,65.58 263.88,65.58 263.75,65.71 263.59,65.82 263.37,65.8 263.23,65.9 
					262.98,65.67 262.8,65.72 262.67,65.8 262.68,65.8 262.41,66.27 		"/>
				<polygon class="st1" points="265.2,73.62 265.12,73.71 265.12,73.71 		"/>
				<polygon class="st1" points="262.88,65.39 262.81,65.17 262.24,65.17 262.06,65.38 261.56,65.44 261.49,65.16 261.1,65.24 
					260.49,65.63 260.31,65.79 260.25,66.04 260.03,66.24 259.56,66.45 259.51,66.59 259.28,66.76 258.94,66.76 258.69,66.67 
					258.69,66.48 258.49,66.21 258.47,65.68 258.43,65.41 258.45,65.07 258.36,64.82 258.13,64.83 258.05,64.57 258.11,64.26 
					258.11,64.05 257.87,63.92 257.63,63.75 257.31,63.75 257.18,64 257.13,64.39 256.96,64.53 256.85,64.72 256.91,65.09 
					256.73,65.38 256.44,65.41 256.4,65.26 256.26,65.26 256.15,65.41 255.86,65.49 255.84,65.67 255.97,65.8 255.98,66.01 
					255.51,65.97 255.37,65.78 255.23,65.68 255.07,65.83 254.92,65.86 254.77,66.07 254.48,66.24 254.03,66.33 253.83,66.25 
					253.53,65.87 253.3,65.85 253.08,66.05 252.89,66.04 252.73,65.8 252.44,65.66 252,65.78 251.9,65.68 251.61,65.75 251.33,65.58 
					251.02,65.68 250.61,65.98 250.5,65.97 250.15,66.07 250,66.17 249.87,66.23 249.84,66.4 249.97,66.5 249.97,66.78 249.66,67.11 
					249.65,67.45 249.63,67.52 249.56,67.81 249.35,67.86 249.14,68.03 249.09,68.17 248.57,68.27 248.15,68.5 248.22,68.68 
					248.04,68.84 248,69.01 247.81,69.24 247.42,69.3 247.28,69.44 247.17,69.33 247.09,69.14 246.79,68.92 246.55,68.92 
					246.38,69.08 246.15,69.08 245.94,68.92 245.64,68.84 245.5,68.88 245.52,68.92 245.5,69.3 245.53,69.48 245.43,69.69 
					245.61,69.92 245.54,69.99 245.56,70.16 245.21,70.39 244.92,70.47 245.03,70.66 245.26,70.83 245,71.19 245.07,71.25 
					245.16,71.74 245.16,72 245.62,72.11 245.74,72.11 245.32,72.63 245.25,72.98 245.61,73.68 245.8,74.31 245.71,74.5 245.84,74.74 
					245.88,75.23 247.06,75.25 247.27,75.72 247.24,76.09 247.38,76.63 247.27,76.79 246.26,78.17 248.11,78.69 249.67,78.66 
					250.13,78.54 250.56,78.56 250.72,78.42 251.2,78.29 251.92,78.25 252.35,78.19 252.81,78.2 253.35,77.98 253.41,77.73 
					253.3,77.46 253.32,77.18 253.22,76.74 253.2,76.37 253.38,76.15 253.63,76.06 253.69,75.85 253.79,75.64 254.12,75.58 
					254.27,75.68 254.77,75.46 254.93,75.26 254.7,75.2 255.21,74.81 255.3,74.63 255.62,74.6 255.77,74.71 256.11,74.73 
					256.13,74.54 256.28,74.54 256.54,74.87 256.83,74.44 256.73,73.84 256.83,73.73 256.84,73.54 256.93,73.23 256.97,72.75 
					257.08,72.56 257.38,72.53 257.7,72.35 257.76,72.12 257.6,71.75 257.31,71.59 257.16,71.24 257.5,71.03 257.98,71.22 
					258.26,71.22 258.49,71.22 258.84,70.7 258.84,70.33 258.51,70.02 259.15,69.18 259.11,68.59 258.53,67.73 258.78,67.48 
					259,67.15 259.37,67.15 259.7,66.86 260.15,66.62 260.46,66.8 261.81,66.52 262.41,66.27 262.68,65.8 262.47,65.74 		"/>
				<polygon class="st1" points="178.56,37.36 178.41,37.42 178.52,37.57 178.9,37.7 179.28,37.67 179.41,37.5 179.48,37.71 
					179.55,37.74 179.54,37.53 179.66,37.29 179.62,37.1 179.57,37.14 179.35,37.13 179.26,37.34 179.13,37.34 178.96,37.39 
					178.71,37.04 178.57,37.07 178.47,37.24 		"/>
				<polygon class="st1" points="178.07,32.62 178.27,32.62 178.49,32.45 178.19,32.45 		"/>
				<polygon class="st1" points="179.72,37.08 179.76,37.18 179.88,37 180.06,36.97 180.02,36.82 179.83,36.91 		"/>
				<polygon class="st1" points="177.81,37.33 177.91,37.24 177.61,37.13 		"/>
				<polygon class="st1" points="180.99,37.96 180.93,38.15 181.01,38.24 181.28,38.34 181.46,38.1 181.62,38.15 181.64,38.02 
					181.52,37.82 181.58,37.59 181.38,37.56 181.29,37.6 181.2,37.55 180.99,37.6 181.01,37.77 181.22,37.79 181.16,37.86 		"/>
				<polygon class="st1" points="180.23,35.67 180.13,35.95 180.32,36.01 		"/>
				<polygon class="st1" points="183.35,36.8 183.12,36.42 182.87,36.28 182.81,36.63 182.87,36.88 183.3,37.03 		"/>
				<path class="st1" d="M178.25,37.21l0.15-0.32c0,0-0.2-0.19-0.17-0.2l-0.07,0.38l-0.11,0.21l0.05,0.13L178.25,37.21z"/>
				<polygon class="st1" points="177.98,35.46 177.88,35.11 177.88,35.48 177.75,35.69 177.96,35.65 		"/>
				<polygon class="st1" points="178.12,36.65 178.05,36.44 177.87,36.06 177.69,36.09 177.4,35.93 176.99,36.01 176.93,36.34 
					177.06,36.63 177.32,36.89 177.54,36.92 177.69,37.02 177.95,36.97 		"/>
				<polygon class="st1" points="177.77,31.66 177.41,32.03 177.07,32.18 176.83,32.21 176.66,32.46 176.53,32.78 176.26,32.96 
					175.97,32.96 175.63,33.23 175.53,33.16 175.34,33.17 175.25,33.47 175.05,33.67 175.17,33.78 175.29,33.71 175.57,34.03 
					175.51,33.68 175.57,33.5 176.02,33.21 176.08,33.26 176.3,33.22 176.6,33.28 176.79,33.21 177.05,33.21 177.28,33.31 
					177.42,33.24 177.69,32.78 177.63,32.5 177.68,32.39 177.62,32.11 177.81,31.76 		"/>
				<polygon class="st1" points="176.36,37.2 176.5,37.27 176.74,37.23 176.72,37.21 176.8,37.05 176.61,36.86 176.51,36.86 
					176.52,36.68 176.67,36.55 176.69,36.34 176.56,36.28 176.57,36.1 177.09,35.83 176.98,35.74 177.18,35.52 177.29,35.6 
					177.56,35.49 177.55,35.13 177.43,34.88 177.59,34.72 177.83,34.69 177.99,34.87 178.09,34.8 178.19,34.84 178.28,34.71 
					178.36,34.48 178.13,34.23 177.99,34.33 177.68,34.32 177.52,34.16 177.38,33.94 177.25,33.91 177.36,33.77 177.36,33.49 
					177.1,33.32 176.71,33.35 176.51,33.44 176.29,33.41 176.19,33.5 176.42,33.81 176.36,33.91 176.57,34.17 176.55,34.26 
					176.35,34.17 176.12,34.23 176.08,34.1 176.22,33.95 176.08,33.7 176.01,33.7 175.79,33.99 175.92,34.16 175.66,34.35 
					175.51,34.17 175.28,34.17 175.13,34.09 174.95,34.29 175.23,34.5 175.23,34.76 175.06,34.63 174.95,34.66 175,34.99 175.18,35.1 
					175.18,35.4 175.34,35.55 174.97,35.73 174.81,36.12 174.97,36.24 175.19,36.12 175.5,36.39 175.56,36.8 175.45,36.87 
					175.5,37.08 175.86,37.06 		"/>
				<polygon class="st1" points="178.59,35.88 178.7,36.05 178.68,36.33 178.84,36.52 179.01,36.52 179.32,36.6 179.37,36.73 
					179.25,36.87 179.36,37.01 179.56,37 179.66,36.85 179.65,36.67 179.94,36.55 180.07,36.43 180.02,36.26 179.78,36.09 179.78,36 
					180.06,35.86 180.15,35.54 180.12,35.25 180.04,35.02 179.73,35.04 179.38,35.13 179.25,35.37 179.34,35.48 179.55,35.63 
					179.53,35.77 179.39,35.73 179.33,35.8 179.09,35.64 179.08,35.51 178.95,35.35 178.82,35.44 178.72,35.64 178.56,35.69 		"/>
				<polygon class="st1" points="175.63,33.62 175.66,33.9 175.79,33.83 176.01,33.59 176.05,33.41 175.83,33.43 		"/>
				<polygon class="st1" points="180.68,7.31 181.06,7.26 180.82,7.07 		"/>
				<polygon class="st1" points="180.94,6.64 181.12,6.65 180.79,6.88 180.94,7.01 181.3,6.91 181.29,6.46 181.2,6.1 181.03,6.13 
					181.07,6.25 180.84,6.53 180.59,6.47 180.49,6.74 180.6,6.92 		"/>
				<polygon class="st1" points="180.56,10.89 180.67,10.67 180.52,10.64 180.43,10.77 		"/>
				<polygon class="st1" points="181.02,7.95 181.03,7.41 180.41,7.78 180.37,8.04 180.73,7.81 		"/>
				<polygon class="st1" points="171.74,28.86 171.7,29.11 171.91,29.04 		"/>
				<polygon class="st1" points="178.85,29.42 178.99,29.15 178.94,28.31 178.73,27.95 178.84,27.72 179.02,27.62 178.89,27.35 
					178.97,27.19 179.39,27.15 179.51,26.95 179.49,26.66 179.69,26.25 179.49,25.97 179.39,25.36 179.14,24.86 179.16,24.64 
					179.77,24.43 179.78,24 179.91,23.69 179.44,23.18 179.05,22.98 179.03,22.48 179.12,21.98 179.05,21.43 178.91,21.07 
					179.02,20.65 178.94,19.93 178.82,19.24 178.92,18.64 179.22,18.1 179.51,17.93 179.87,18.01 180.33,18.04 180.56,17.71 
					180.52,17.21 180.4,17 180.42,16.67 180.87,15.55 180.89,14.91 181.03,14.3 181.16,13.96 181.16,13.57 180.96,13.37 180.97,13.1 
					181.4,12.85 181.86,12.75 182.07,12.56 182.09,12.29 182.46,11.64 182.84,11.11 182.97,10.8 182.82,10.4 182.67,10.23 182.66,9.6 
					182.83,9.52 183,9.29 183.07,8.96 183.26,8.86 183.46,8.42 183.75,8.2 184.05,8.34 184.18,8.48 184.35,8.46 184.55,8.27 
					184.39,7.99 184.54,7.84 184.54,7.7 184.61,7.55 184.4,7.21 184.53,7.12 184.92,7.13 185.22,6.97 185.66,7.09 185.94,7.28 
					186.25,7.31 186.42,7.45 186.56,7.4 186.69,7.48 186.69,7.15 186.54,6.93 186.58,6.52 186.79,6.4 186.73,6.12 186.51,6 
					186.49,5.73 186.8,5.83 187.11,5.77 187.21,5.72 187.2,5.72 187.26,5.63 187.37,5.69 187.47,5.63 187.39,5.43 187.44,5.19 
					187.62,5.04 187.88,5.08 188.08,5.38 188.65,5.84 188.76,6.13 188.97,6.42 189.35,6.58 189.99,6.59 190.32,6.27 190.5,6.08 
					190.79,6.09 191.23,6.4 191.54,6.45 191.69,6.16 191.87,6.06 192.08,5.86 192.32,5.88 192.55,5.72 192.65,5.54 192.55,5.31 
					192.42,4.9 192.49,4.21 192.58,4 192.45,3.79 192.61,3.69 192.82,3.4 192.8,3.25 193.09,3.12 193.44,3.19 193.64,3.14 
					193.62,3.02 193.84,2.78 194.42,2.77 194.67,2.94 195,3.36 195.19,3.55 195.48,3.66 195.93,3.71 196.01,3.93 196.28,4.21 
					196.23,4.49 195.99,4.87 196.04,5.42 196.21,5.39 196.21,4.92 196.57,4.57 196.9,4.53 197.11,4.24 197.08,3.86 197.3,3.84 
					197.58,3.95 197.75,3.74 197.73,3.46 197.73,3.46 197.66,3.45 197.46,3.3 197.36,3.3 197.26,3.36 197.25,3.51 197.15,3.41 
					197.08,3.25 196.93,3.25 196.96,3.4 196.93,3.68 196.83,3.62 196.71,3.43 196.51,3.56 196.45,3.71 196.38,3.49 196.32,3.2 
					196.21,3.19 196.11,2.89 196,2.83 195.78,2.86 195.58,2.78 195.27,2.75 195.11,2.54 195.16,2.48 195.56,2.59 195.89,2.55 
					196.17,2.6 196.7,2.67 197.06,2.54 197.3,2.07 197.81,1.93 198.03,1.75 198.03,1.67 197.87,1.62 197.82,1.51 197.63,1.45 
					197.4,1.49 197.06,1.22 196.89,1.22 196.67,1.46 196.53,1.46 196.49,1.36 196.71,1.23 196.74,1.04 196.48,0.94 196.43,0.87 
					196.24,0.88 196.07,1.18 195.97,1.18 195.99,0.97 195.88,0.99 195.77,1.14 195.65,1.13 195.61,1 195.78,0.88 195.78,0.72 
					195.53,0.56 195.27,0.55 195.11,0.65 195.07,1.02 194.9,1.1 194.87,1.23 195.03,1.61 195.01,1.78 194.87,1.9 194.76,1.67 
					194.59,1.65 194.55,1.74 194.33,1.7 194.01,1.85 194.26,1.49 194.46,1.44 194.59,1.19 194.55,1.06 194.46,1.07 194.19,1.27 
					194.04,1.23 194.07,1.11 194.25,0.97 194.26,0.85 194.03,0.8 193.98,0.7 194.18,0.64 194.26,0.71 194.54,0.71 194.68,0.36 
					193.67,0.36 193.65,0.4 193.53,0.4 193.51,0.36 193.17,0.36 193.14,0.48 193.2,0.58 193.4,0.58 193.5,0.68 193.48,0.79 
					193.31,0.86 193.31,1.05 193.16,1.13 193.16,1.31 193.2,1.39 193.05,1.49 193.14,1.75 193.06,1.84 192.89,1.72 192.73,1.84 
					192.7,1.94 192.52,2.06 192.51,1.81 192.73,1.33 192.51,1.26 192.53,1.13 192.69,0.98 192.69,0.57 192.61,0.44 192.48,0.45 
					192.15,1 192.14,1.31 191.8,1.78 191.71,2.11 191.78,2.25 191.75,2.52 191.4,2.91 191.23,2.99 191.23,2.75 191.14,2.59 
					191.37,2.23 191.32,2 191.41,1.82 191.31,1.58 191.7,1.15 191.76,0.89 191.83,0.84 191.8,0.7 191.59,0.68 191.38,0.46 
					191.27,0.49 191.31,0.73 191.15,0.91 191.14,0.67 190.97,0.5 190.75,0.45 190.58,0.54 190.62,0.86 190.54,1.02 190.42,0.88 
					190.28,0.8 190.16,0.91 190.2,1.01 190.51,1.22 190.58,1.45 190.51,1.53 190.37,1.39 190.21,1.54 190.19,1.68 190.27,1.78 
					190.19,1.87 189.95,1.71 189.82,1.72 189.69,2 189.51,2.08 189.51,2.18 189.61,2.25 189.36,2.42 189.31,2.62 189.51,2.83 
					189.36,2.98 189.56,3.08 189.65,3.18 189.54,3.29 189.21,3.27 189.13,2.91 188.97,2.87 189.11,2.7 188.91,2.59 188.68,2.62 
					188.38,2.6 187.97,2.27 187.85,2.27 187.71,2.43 187.62,2.25 187.41,2.44 187.16,2.5 187.15,2.61 187.44,2.96 187.65,2.95 
					187.77,3.09 188.07,3.11 187.94,3.36 187.95,3.6 188.16,3.88 188.13,4.06 187.95,3.93 187.77,3.63 187.54,3.53 187.4,3.36 
					187.33,3.59 187.13,3.76 187.09,3.44 186.89,3.61 186.88,3.74 186.65,3.95 186.66,4.16 186.94,4.29 187.06,4.54 186.85,4.5 
					186.73,4.38 186.55,4.66 186.49,4.86 186.19,5.1 186.19,4.96 186.38,4.81 186.32,4.63 186.51,4.25 186.36,3.49 186.16,3.61 
					185.86,4.1 185.85,4.43 185.9,4.56 185.69,4.82 185.66,4.57 185.79,4.29 185.69,3.92 185.56,3.89 185.3,4.06 185.12,4.4 
					185.24,4.66 185.22,4.89 185.59,5.16 185.69,5.34 185.54,5.62 185.43,5.26 185.16,5.14 184.98,4.67 184.9,4.62 184.55,4.73 
					184.5,4.9 184.85,5.17 185.01,5.19 185.1,5.29 184.87,5.26 184.64,5.33 184.79,5.59 184.53,5.41 184.5,5.09 184.4,5.03 
					184.34,4.82 184.19,4.94 184.13,5.28 184.25,5.43 184.21,5.73 183.99,5.62 183.81,5.68 183.55,5.99 183.61,6.02 183.78,5.99 
					183.95,6.2 183.73,6.21 183.58,6.32 183.72,6.42 183.62,6.55 183.43,6.56 183.42,6.69 183.49,6.75 183.34,6.79 183.22,6.65 
					183.03,6.71 182.86,6.93 182.93,7.06 182.85,7.14 182.58,7.16 182.45,7.41 182.67,7.48 183.25,7.31 183.39,7.4 183.64,7.28 
					183.78,7.27 183.79,7.44 183.62,7.64 183.57,8 183.51,8.07 183.4,7.95 183.37,7.76 183.15,7.83 183.06,7.71 182.78,7.7 
					182.87,7.8 182.79,7.95 182.59,7.84 182.44,7.85 182.64,8 182.72,8.21 182.6,8.21 182.52,8.37 182.56,8.56 182.51,8.7 182.4,8.51 
					182.4,8.27 182.22,8.03 182.04,8.23 181.85,8.28 181.75,8.12 181.82,8.01 181.67,7.99 181.46,8.22 181.64,8.42 181.93,8.41 
					182.16,8.55 182.03,8.76 181.54,8.83 181.44,8.73 181.24,8.75 181.14,8.99 181.3,9.14 181.14,9.37 181.34,9.33 181.58,9.04 
					181.79,9.05 181.92,9.23 181.56,9.27 181.51,9.53 181.64,9.73 181.93,9.9 181.92,10.11 181.72,9.95 181.56,9.97 181.36,9.71 
					181.23,9.73 181.07,9.9 181.25,10.04 181.01,10.06 180.77,10.24 180.77,10.4 181.03,10.51 181.24,10.37 181.39,10.51 
					181.61,10.44 181.68,10.66 181.85,10.75 181.85,10.9 181.5,10.68 181.22,10.68 181.09,10.76 180.71,10.82 180.71,11.03 
					180.5,11.14 180.4,11.06 180.08,11.23 179.89,11.24 179.86,11.37 180.06,11.45 180.22,11.64 180.04,11.71 179.94,11.66 
					179.86,11.72 180.03,11.87 179.97,11.98 179.72,11.94 179.69,11.86 179.61,11.95 179.78,12.09 179.67,12.18 179.7,12.33 
					179.84,12.33 179.7,12.43 179.54,12.46 179.44,12.36 179.44,12.52 179.36,12.66 179.5,12.72 179.86,12.84 179.91,13.01 
					180.06,13.05 180.26,12.96 180.1,13.11 180.1,13.23 179.87,13.23 179.77,13.13 179.4,13.14 179.15,13.38 179.23,13.46 
					179.49,13.47 179.51,13.64 179.65,13.76 179.64,13.97 179.48,13.8 179.36,13.8 179.24,13.96 179.25,14.13 179.18,14.17 
					179.3,14.32 179.33,14.49 179.22,14.49 179.07,14.36 178.98,14.43 178.99,14.64 179.22,14.71 179.26,14.82 179.24,14.96 
					178.94,14.77 178.82,14.84 178.81,15.05 178.89,15.07 178.88,15.31 178.98,15.53 179.14,15.52 179.25,15.32 179.37,15.32 
					179.26,15.63 179.1,15.65 178.87,15.9 178.68,15.9 178.51,15.97 178.5,16.09 178.29,16.19 178.12,16.34 178.3,16.43 178.24,16.54 
					177.9,16.57 177.75,16.79 177.77,16.89 178.03,16.97 177.83,17.08 177.73,17.3 177.52,17.31 177.48,17.11 177.35,17.02 
					177.27,17.15 177.09,17.15 177.15,17.3 177.03,17.41 177,17.57 177.07,17.7 176.77,17.7 176.63,17.77 176.65,18.05 176.42,18.2 
					176.45,18.29 176.41,18.57 176.23,18.71 176,18.94 176.07,19.04 176.34,18.86 176.48,18.88 176.46,19.03 176.29,19.1 
					176.26,19.37 176.42,19.57 176.71,19.41 177.01,19.37 177.42,18.97 177.42,18.78 177.21,18.84 177.39,18.6 177.44,18.31 
					177.53,18.29 177.65,18.18 177.89,18.22 178.03,18.21 177.65,18.46 177.65,18.63 178.01,18.74 177.89,18.91 177.69,18.93 
					177.32,19.32 177.55,19.45 177.42,19.62 177.43,19.87 177.19,19.85 177,19.65 176.72,19.66 176.56,19.8 176.55,20.02 
					176.34,20.14 176.13,20.25 176.29,20.08 176.4,20 176.23,19.78 176.23,19.54 176.05,19.27 175.87,19.27 175.76,19.46 
					175.51,19.49 175.51,19.61 175.84,19.61 175.5,19.92 175.27,19.82 175.08,19.85 174.82,20.08 174.97,20.11 175.1,20.05 
					175.17,20.12 174.9,20.3 174.77,20.45 174.65,20.33 174.47,20.33 174.44,20.45 174.73,20.62 175.08,20.62 175.01,20.81 
					175.16,20.87 175.15,21.03 174.84,20.94 174.79,20.76 174.56,20.76 174.32,20.55 174.27,20.39 174.18,20.4 174.14,20.6 
					174.37,20.92 174.62,21.1 174.83,21.13 174.95,21.26 174.72,21.27 174.35,21.12 174.01,20.73 173.84,20.84 173.63,20.67 
					173.36,20.67 173.23,20.56 173.13,20.68 173.17,20.89 173.02,21.02 173.23,21.24 173.67,21.1 173.74,21.2 173.55,21.33 
					173.65,21.39 173.99,21.23 174.14,21.23 174.06,21.37 173.67,21.53 173.52,21.76 173.25,21.68 173.02,21.39 172.91,21.39 
					172.78,21.5 172.59,21.33 172.42,21.43 172.31,21.36 172.1,21.48 172.17,21.58 172.59,21.64 172.85,21.82 173.18,21.99 
					173.09,22.21 173.2,22.38 173,22.48 172.92,22.38 172.91,22.03 172.69,21.95 172.44,21.99 172.53,22.17 172.49,22.3 172.2,22.11 
					171.94,22.38 172.2,22.55 171.99,22.57 171.85,22.64 171.78,22.38 171.39,22.37 171.51,22.63 171.35,22.74 171.28,22.49 
					171.05,22.29 170.93,22.33 170.96,22.47 171.22,22.71 171.1,22.86 171.22,22.97 171.51,22.88 171.91,22.96 172.17,23.13 
					172.56,23.13 172.68,23.04 172.87,23.04 172.62,23.29 172.27,23.24 172.13,23.31 171.72,23.1 171.45,23.17 171.33,23.12 
					171.12,23.29 170.84,23.33 170.82,23.44 171.26,23.64 171.09,23.82 171.31,23.86 171.45,23.77 171.81,23.77 171.54,23.95 
					171.16,23.95 171.06,24.01 170.95,23.98 170.94,24.06 171.13,24.14 171.28,24.14 171.05,24.27 170.94,24.3 170.97,24.42 
					171.09,24.51 171.19,24.66 171.49,24.65 171.66,24.53 172.06,24.48 172.34,24.55 172.44,24.62 172.62,24.5 172.63,24.32 
					172.81,24.27 172.88,24.42 173.08,24.42 173.37,24.2 173.5,24.24 173.44,24.35 173.3,24.46 173.56,24.53 173.68,24.4 
					173.63,24.26 173.83,23.97 173.78,24.19 173.98,24.43 173.83,24.64 173.47,24.73 173.3,24.86 173.39,24.94 173.27,25.14 
					172.97,25.15 172.96,25.03 173.11,24.91 173.07,24.66 172.82,24.63 172.55,24.9 172.51,25.04 172.32,24.8 172.09,24.75 
					171.8,24.8 171.63,24.75 171.3,24.91 171.14,24.91 170.94,24.78 170.87,24.81 170.98,25.06 170.91,25.19 171.03,25.3 
					171.23,25.25 171.34,25.12 171.49,25.13 171.31,25.32 171.34,25.54 171.23,25.63 171.04,25.52 171.13,25.82 171.28,25.95 
					171.66,25.53 171.92,25.64 171.81,25.75 171.84,25.97 171.52,26.14 171.57,26.23 171.77,26.27 171.67,26.43 171.81,26.64 
					171.72,26.9 171.8,26.91 172,26.59 172.19,26.49 172.23,26.22 172.72,26.02 172.96,26.04 173.17,25.98 173.02,26.07 172.77,26.27 
					172.77,26.58 172.85,26.77 172.66,26.61 172.62,26.33 172.47,26.32 172.3,26.63 172.16,26.68 172.4,26.77 172.19,27.06 
					172.01,27.06 171.93,27.25 172.06,27.31 172.43,27.31 172.52,27.46 172.26,27.48 172.17,27.63 172.15,27.82 171.86,27.62 
					171.73,27.68 171.68,27.91 171.61,27.64 171.44,27.76 171.21,28.07 171.3,28.32 171.66,28.7 171.73,28.48 171.82,28.56 
					172.01,28.47 171.96,28.36 172.07,28.1 172.36,28.32 172.23,28.4 172.39,28.57 172.33,28.8 172.16,28.92 172.31,29.3 
					172.43,29.16 172.76,29.07 172.89,29.25 172.62,29.27 172.48,29.37 172.63,29.6 172.6,29.69 172.12,29.34 171.95,29.4 
					171.8,29.28 171.59,29.29 171.59,29.49 171.45,29.65 171.79,30.22 172.06,30.27 172.43,30.59 172.94,30.78 173,30.95 
					172.88,31.01 173.08,31.19 173.25,31.11 173.17,30.84 173.34,30.84 173.5,30.98 173.47,31.05 173.75,31.39 173.87,31.24 
					173.97,31.29 174.2,31.19 174.48,30.92 174.61,30.89 174.72,30.76 174.78,30.78 174.84,30.97 175.01,30.99 175.47,30.52 
					175.45,30.36 175.25,30.1 175.6,30.32 175.89,30.04 175.81,29.94 175.98,29.83 175.95,29.64 176.16,29.5 176.38,29.46 
					176.44,29.3 176.23,29.03 176.3,28.85 176.11,28.6 175.88,28.43 175.9,28.2 176.03,28.29 176.28,28.57 176.38,28.94 176.48,29.05 
					176.64,29.07 176.6,29.22 176.73,29.38 176.99,29.26 176.92,29.12 176.8,29.02 176.89,28.86 177.11,29.05 177.12,29.15 
					177.46,28.83 177.55,28.54 177.47,28.28 177.29,28.2 177.19,28.06 177.32,27.98 177.34,27.86 177.47,27.84 177.57,27.73 
					177.44,27.56 177.44,27.31 177.65,27.16 177.84,27.35 177.69,27.59 177.73,27.91 177.68,28.13 177.83,28.38 177.87,28.56 
					178.15,28.85 178.47,28.82 178.61,28.93 178.53,29.03 178.69,29.15 		"/>
				<polygon class="st1" points="192.01,0.44 192.04,0.36 191.55,0.36 191.74,0.51 		"/>
				<polygon class="st1" points="178.75,13.21 178.84,13.55 179.06,13.21 179,12.95 		"/>
				<polygon class="st1" points="181.85,5.82 181.88,5.55 182.16,5.35 182.1,5.09 181.75,5.23 181.74,5.47 181.38,5.77 181.36,6.16 
					181.49,6.25 		"/>
				<polygon class="st1" points="182.73,6.27 182.73,6.09 182.46,5.95 182.26,6.03 182.34,6.11 		"/>
				<polygon class="st1" points="180.24,7.9 179.8,8.02 179.72,8.49 180.21,8.12 		"/>
				<polygon class="st1" points="188.5,2.04 188.3,2.18 188.59,2.33 188.86,2.44 188.91,2.19 188.78,2.06 		"/>
				<polygon class="st1" points="171.32,26.93 171.36,26.7 171.11,26.89 		"/>
				<path class="st1" d="M184.98,2.88l-0.35,0.1v0.31l0.35-0.22V2.88z"/>
				<path class="st1" d="M189.7,1.6l0.36-0.14l0.1-0.24L189.84,1l-0.37,0.13l0.21,0.21L189.7,1.6z"/>
				<polygon class="st1" points="183.08,6.51 183.32,6.4 183.17,6.18 		"/>
				<polygon class="st1" points="185.26,2.5 185.03,2.58 185.1,2.77 		"/>
				<polygon class="st1" points="182.88,5.67 183.11,5.7 183.12,5.95 183.24,5.95 183.31,5.61 183.62,5.64 183.72,5.49 184.01,5.43 
					183.95,5.21 184,5.06 183.93,4.75 183.74,4.69 183.7,4.47 183.29,4.43 183.35,4.72 183.15,4.56 182.98,4.86 183.3,5.02 
					182.95,5.04 182.83,5.35 183.1,5.38 		"/>
				<polygon class="st1" points="184.53,4.52 184.85,4.51 184.84,4.31 185.03,4.08 184.85,3.82 184.7,4.03 184.38,4.04 184.37,4.25 
					184.01,4.27 184.28,4.62 		"/>
				<polygon class="st1" points="178.98,13.86 179.3,13.59 179.05,13.56 178.93,13.69 		"/>
				<polygon class="st1" points="181.26,7.39 181.21,7.72 181.36,7.72 181.68,7.3 181.65,7.57 181.85,7.64 181.96,7.42 182.27,7.25 
					182.73,6.74 182.38,6.41 182.2,6.27 182.21,6.47 182.38,6.7 181.95,6.72 181.77,7.06 181.7,6.81 181.86,6.1 181.54,6.59 
					181.54,6.85 181.36,7.07 181.4,7.31 		"/>
				<polygon class="st1" points="189.21,2.22 189.25,1.99 189.46,1.73 189.38,1.43 188.91,1.85 		"/>
				<polygon class="st1" points="185.66,3.03 185.97,3.16 186.09,3.06 186.01,2.9 185.76,2.7 185.7,2.33 185.55,2.43 185.65,2.79 		
					"/>
				<polygon class="st1" points="185.51,3.78 185.7,3.67 185.58,3.42 		"/>
				<polygon class="st1" points="184.76,3.47 185.11,3.82 185.29,3.82 185.37,3.7 185.34,3.47 185.55,3.31 185.51,3.23 185.28,3.27 
					185.18,3.12 		"/>
				<polygon class="st1" points="179.57,8.28 179.46,8.21 179.35,8.35 179.46,8.5 		"/>
				<polygon class="st1" points="170.73,22.55 170.86,22.88 170.99,22.72 		"/>
				<polygon class="st1" points="190.12,0.64 190.19,0.51 190.07,0.36 190.03,0.36 189.83,0.41 190,0.68 		"/>
				<path class="st1" d="M171.41,26.65l0.09-0.25l-0.21-0.27L171.41,26.65z"/>
				<polygon class="st1" points="170.79,25.03 170.74,24.91 170.52,25.08 170.66,25.17 		"/>
				<polygon class="st1" points="171.59,26.83 171.47,27.07 171.58,27.04 		"/>
				<path class="st1" d="M171.13,27.35l0.2,0.3l0.1-0.19l-0.15-0.16C171.28,27.3,171.13,27.34,171.13,27.35z"/>
				<polygon class="st1" points="188.44,1.76 188.62,1.72 189.33,1.02 189.27,0.84 188.84,1.24 188.67,1.14 188.54,1.41 188.38,1.23 
					188.15,1.4 187.91,1.35 188.02,1.63 		"/>
				<polygon class="st1" points="170.89,26.01 170.99,25.89 170.79,25.88 		"/>
				<polygon class="st1" points="186.68,3.24 186.83,3.47 186.94,3.23 186.79,3.02 186.91,2.75 186.63,2.54 186.45,2.72 186.48,3.17 
							"/>
				<path class="st1" d="M170.69,25.54l0.21,0.14v-0.3L170.69,25.54z"/>
				<polygon class="st1" points="170.92,26.48 171,26.18 170.74,26.26 		"/>
				<path class="st1" d="M174.22,19.72l-0.07-0.2h-0.29l0.26,0.29L174.22,19.72z"/>
				<polygon class="st1" points="170.96,23.16 170.65,23.02 170.71,23.21 		"/>
				<polygon class="st1" points="177.76,16.47 177.9,16.36 178.21,15.97 178.01,16.06 177.63,16.1 177.43,16.33 177.67,16.31 		"/>
				<polygon class="st1" points="179.2,8.33 178.95,8.74 178.95,9.01 179.26,8.71 		"/>
				<polygon class="st1" points="174.97,19.35 174.71,19.36 174.54,19.66 174.72,19.67 174.9,19.57 175.2,19.59 175.4,19.35 
					175.26,19.2 175.05,19.21 		"/>
				<polygon class="st1" points="178.49,15.56 178.15,15.63 178.05,15.83 178.21,15.9 		"/>
				<polygon class="st1" points="178.55,14.44 178.53,14.28 178.43,14.2 178.29,14.41 178.41,14.56 		"/>
				<polygon class="st1" points="175.08,18.95 174.9,18.79 174.48,19.15 174.8,19.14 		"/>
				<polygon class="st1" points="172.02,22.05 171.93,21.9 171.74,21.84 171.75,22.22 		"/>
				<polygon class="st1" points="171.49,22.01 171.32,22.23 171.57,22.22 		"/>
				<polygon class="st1" points="178.93,9.53 178.81,9.39 178.71,9.57 178.85,9.66 		"/>
				<path class="st1" d="M174.32,20.31l0.13-0.12l-0.07-0.3c0,0-0.24,0.27-0.23,0.27L174.32,20.31z"/>
				<polygon class="st1" points="191.64,13.22 191.41,12.72 191.16,12.63 191.02,12.24 191.11,12.05 191.11,11.52 191.05,11.32 
					191.12,11.09 191.03,10.61 190.88,10.39 190.83,10.02 190.96,9.82 190.88,9.51 190.52,9.48 190.49,9.21 190.61,8.9 190.54,8.51 
					190.64,8.27 190.51,8.07 190.33,8.06 190.09,7.73 190,7.76 189.88,7.74 189.78,7.49 189.52,7.19 189.34,7.14 189.13,7.01 
					188.6,6.97 188.25,6.71 187.78,6.16 187.43,5.98 187.21,5.72 187.11,5.77 186.8,5.83 186.49,5.73 186.51,6 186.73,6.12 
					186.79,6.4 186.58,6.52 186.54,6.93 186.69,7.15 186.69,7.48 186.56,7.4 186.42,7.45 186.25,7.31 185.94,7.28 185.66,7.09 
					185.22,6.97 184.92,7.13 184.53,7.12 184.4,7.21 184.61,7.55 184.54,7.7 184.54,7.84 184.39,7.99 184.55,8.27 184.35,8.46 
					184.18,8.48 184.05,8.34 183.75,8.2 183.46,8.42 183.26,8.86 183.07,8.96 183,9.29 182.83,9.52 182.66,9.6 182.67,10.23 
					182.82,10.4 182.97,10.8 182.84,11.11 182.46,11.64 182.09,12.29 182.07,12.56 181.86,12.75 181.4,12.85 180.97,13.1 
					180.96,13.37 181.16,13.57 181.16,13.96 181.03,14.3 180.89,14.91 180.87,15.55 180.42,16.67 180.4,17 180.52,17.21 180.56,17.71 
					180.33,18.04 179.87,18.01 179.51,17.93 179.22,18.1 178.92,18.64 178.82,19.24 178.94,19.93 179.02,20.65 178.91,21.07 
					179.05,21.43 179.12,21.98 179.03,22.48 179.05,22.98 179.44,23.18 179.91,23.69 179.78,24 179.77,24.43 179.16,24.64 
					179.14,24.86 179.39,25.36 179.49,25.97 179.69,26.25 179.49,26.66 179.51,26.95 179.39,27.15 178.97,27.19 178.89,27.35 
					179.02,27.62 178.84,27.72 178.73,27.95 178.94,28.31 178.99,29.15 178.85,29.42 178.69,29.15 178.53,29.03 178.5,29.06 
					178.3,29.18 178.35,29.77 178.45,29.92 178.48,30.36 178.67,30.46 178.74,30.56 178.7,30.85 179,30.72 178.82,30.53 178.85,30.32 
					178.98,30.32 178.92,30.46 179.14,30.59 179.21,30.73 178.94,30.96 178.9,31.17 178.98,31.38 178.94,31.68 178.82,31.8 
					178.97,32.02 179.2,32.08 179.33,32.43 179.45,32.53 179.7,33.03 179.73,33.41 180.01,33.52 180.08,33.78 180.33,34.03 
					180.62,33.87 180.7,34.2 180.51,34.56 180.17,34.6 180.12,34.75 180.3,34.86 180.34,35.11 180.62,35.19 180.74,35.82 
					180.59,36.07 180.73,36.2 181,36.2 181.68,36.02 182.02,36.14 182.28,35.89 182.26,35.68 182.11,35.55 182.29,35.11 182.71,35.05 
					182.81,34.63 182.88,34.82 183.37,34.9 183.66,34.74 183.91,34.85 184.05,35.03 184.35,34.68 184.44,34.14 184.66,33.92 
					184.71,33.26 184.83,33.04 184.6,32.84 184.63,32.56 184.85,32.3 184.64,32.03 184.87,31.81 184.57,31.63 184.71,31.4 
					184.54,31.14 184.84,31.25 185.16,31.19 184.87,30.93 185.01,30.62 184.99,30.45 184.6,30.31 185.1,30.29 184.83,30.02 
					184.61,29.98 184.76,29.8 184.9,29.8 184.94,29.86 185.1,29.72 185.09,29.55 185.31,29.72 185.34,29.44 185.52,29.24 
					185.71,29.22 185.67,29.04 185.77,28.9 185.86,29.02 185.81,29.27 185.97,29.28 186.2,28.92 186.38,28.92 186.57,28.77 
					186.54,28.51 186.37,28.37 186.05,28.28 185.81,28.41 185.68,28.35 185.46,28.47 185.29,28.24 185,28.19 184.83,28.07 
					184.47,28.08 184.44,28.22 184.34,28.14 183.93,28.09 183.92,27.99 184.11,27.91 184.34,28.02 184.53,27.77 184.65,27.88 
					184.85,27.82 184.94,27.64 185.18,27.7 185.29,27.82 185.45,27.81 185.46,27.64 185.6,27.78 185.9,27.89 185.87,28.06 
					186.1,28.19 186.47,28.09 186.56,27.82 186.9,27.45 187.07,27.04 186.8,26.79 186.8,26.58 186.4,26.35 186.48,26.19 186,25.82 
					185.94,25.59 185.75,25.44 185.51,25.72 185.37,25.48 185.24,25.56 185.24,25.3 185.06,25.26 184.92,25.06 184.77,24.89 
					184.95,24.66 184.81,24.36 184.93,24.29 184.93,24.13 184.73,24.05 184.93,23.79 184.85,23.39 184.91,23.31 185.09,23.46 
					185.12,23.2 184.91,22.98 184.98,22.59 184.93,22.28 185,22.18 184.97,21.84 184.66,21.45 184.87,21.52 185.26,21.46 
					185.48,21.13 185.37,20.9 185.44,20.76 185.68,20.82 186.05,20.5 186.07,20.35 185.88,20.31 185.97,20.08 186.15,19.9 
					186.26,20.04 186.38,20.01 186.46,19.72 186.57,19.72 186.68,19.9 186.86,19.73 186.86,19.43 186.99,19.15 187.19,19.15 
					187.22,19.34 187.39,19.36 187.52,19.08 187.85,18.9 187.74,18.65 187.78,18.41 187.93,18.6 188.2,18.33 188.38,18.34 
					188.64,17.89 188.6,17.45 188.8,17.22 188.97,17.21 189.24,16.87 189.04,16.87 188.89,16.66 189.05,16.6 188.97,16.42 
					188.75,16.38 188.49,16.18 188.82,16.11 188.75,15.92 188.92,15.45 189,15.3 188.87,15.13 188.71,15.13 188.59,14.94 
					188.68,14.84 188.84,14.92 188.9,15.01 189,14.98 189.01,14.82 188.76,14.71 188.97,14.6 189.19,14.61 189.42,14.41 189.24,14.29 
					189.07,13.96 189.25,14.02 189.38,14.17 189.57,14.13 189.66,13.91 189.69,13.65 189.84,13.54 190,13.84 190.22,13.57 
					190.32,13.79 190.54,13.89 190.66,13.66 190.87,13.78 191.19,13.58 191.34,13.76 191.6,13.78 191.77,13.66 191.78,13.67 
					191.79,13.38 		"/>
				<polygon class="st1" points="184.89,33.52 184.79,34.25 184.83,34.5 184.83,34.68 184.92,34.77 185.02,34.54 185.16,34.11 
					185.21,33.66 185.35,33.2 185.4,32.8 185.25,32.65 185.09,32.9 185.13,33.02 185.04,33.42 		"/>
				<polygon class="st1" points="186.9,32.94 187,32.9 186.94,33.12 186.78,33.32 186.81,33.44 187.12,33.35 187.19,33.19 
					187.09,33.12 187.14,32.95 187.45,32.71 187.49,32.53 187.69,32.3 187.66,32.18 187.47,32.01 187.57,31.78 187.6,31.63 
					187.72,31.52 187.56,31.44 187.42,31.52 187.13,31.52 186.95,31.75 186.82,31.99 186.64,32.18 186.73,32.48 186.63,32.55 		"/>
				<polygon class="st1" points="187.64,30.1 187.75,30.32 187.89,30.15 187.75,30.03 		"/>
				<polygon class="st1" points="187.74,31.35 187.83,31.48 187.98,31.34 188.22,31.27 188.16,31.18 187.88,31.18 		"/>
				<polygon class="st1" points="178.84,30.91 178.67,30.95 178.65,31.14 178.79,31.14 		"/>
				<polygon class="st1" points="186.76,28.64 186.77,28.31 187.03,28.07 187.03,27.85 186.71,27.85 186.45,28.23 186.65,28.55 		"/>
				<path class="st1" d="M197.86,24.85l0.62-0.59l0.32-0.16l0.37-0.64l0.38-0.56l0.28-0.68l0.54-0.92l0.39-1l-0.08-0.4l-0.59-0.68
					l-0.35-0.11l-0.62-0.88l0.1-0.4l0.26-0.35v-0.4l-0.41-0.28l-0.15-0.31v-0.5l0.11-0.13l-0.12-0.25l-0.38-0.01l-0.17-0.22v-0.45
					l0.18-0.24l-0.26-0.07v-0.23l0.06-0.88l0.24-0.06l-0.6-1.4l-0.56-1l-0.11-0.38l-0.33-0.35l0.23-0.65l0.27-0.43l0.13-0.4
					l-0.18-0.24l-0.61-0.39l-0.11-0.25l-0.2-0.31l-0.38-0.17h-0.19l-0.23-0.61l-0.18-0.27l0.1-0.45l0.06-0.36l-0.22-0.08l0.22-0.15
					l0.36-0.14l0,0V4.87l0.24-0.38V4.21l-0.27-0.28l-0.07-0.22h-0.45l-0.3-0.11l-0.19-0.19l-0.32-0.42l-0.26-0.17h-0.57l-0.22,0.24
					v0.12h-0.2l-0.31-0.06l-0.28,0.12V3.4l-0.22,0.29l-0.15,0.1l0.12,0.2l-0.08,0.22l-0.07,0.69l0.12,0.41l0.1,0.23l-0.1,0.18
					l-0.23,0.15h-0.23l-0.22,0.21l-0.17,0.1l-0.16,0.29h-0.3l-0.45-0.31h-0.28l-0.19,0.19l-0.33,0.33h-0.63L189,6.52l-0.21-0.29
					l-0.11-0.28l-0.55-0.57l-0.2-0.3h-0.25l-0.19,0.15l-0.05,0.24l0.08,0.2l-0.09,0.06l-0.17-0.13v0.09l0,0l0.22,0.26l0.35,0.18
					l0.48,0.55l0.35,0.26h0.53l0.2,0.13h0.19l0.26,0.3l0.09,0.25h0.12h0.1l0.23,0.33h0.19l0.12,0.19l-0.09,0.24l0.07,0.39l-0.12,0.31
					v0.27h0.35l0.08,0.31l-0.12,0.2v0.37l0.15,0.22l0.09,0.48l-0.07,0.23l0.06,0.2v0.53L191,12.08l0.13,0.52l0.25,0.09l0.24,0.5
					l0.15,0.16v0.29l0.09,0.1h0.27l0.25,0.26h0.51l0.35,0.34l-0.2,0.09l0.14,0.18v0.41l-0.1,0.08l0.41,0.38l-0.3-0.06h-0.11l0.35,0.29
					v0.16l-0.41-0.22h-0.34l-0.35,0.23v0.22l-0.25,0.25v0.25l-0.11,0.08l-0.42,0.44l-0.06,0.44h-0.1l-0.07-0.14h-0.13l0.1,0.26
					l-0.07,0.22h-0.27l-0.17,0.22l0.08,0.34l0.18,0.13l-0.33-0.1l-0.09-0.12l-0.18,0.07l-0.1,0.28v0.14l-0.19-0.08l-0.07,0.1
					l0.18,0.18v0.13l-0.17,0.17l0.04,0.24l-0.24,0.16l-0.13-0.1v-0.09l-0.18-0.06l-0.18,0.07l0.07,0.24l-0.16,0.13l0.11,0.25
					l-0.1,0.25h-0.13l-0.13,0.23l0.1,0.27l0.07,0.06l-0.08,0.26l0.05,0.18l0.17-0.08l0.15,0.15l-0.05,0.29l-0.07,0.14l0.09,0.26
					l-0.06,0.12l0.27,0.43l0.13,0.11l-0.09,0.17l0.2,0.31l-0.19,0.08v0.42l-0.09,0.17v0.58l0.15,0.19l-0.14,0.3v0.2l0.1,0.15
					l0.36-0.17l0.13,0.11l0.06-0.17l0.31,0.33h0.18L191,25.7h0.39l0.11,0.05l-0.1,0.2h0.14l0.33-0.23v0.19l-0.17,0.22l0.34,0.48
					l0.07,0.16l-0.09,0.28l0.09,0.05l0.15-0.4l0.16-0.08v0.17l0.23-0.1h0.2l0.44-0.31h0.24l0.53-0.35v-0.14l0.34,0.1h0.24l0.21-0.33
					v0.11L194.74,26l0.14,0.06l0.25-0.46h0.12l-0.12-0.2l0.11-0.12l0.13,0.27h0.16l0.06-0.19l0.13,0.29l0.17-0.06v-0.18h0.15
					l0.09,0.19l0.17-0.16l0.35-0.07l0.19,0.17l0.42-0.06v-0.15l-0.11-0.11l0.12-0.07l0.19,0.06v0.17l0.27,0.07
					c0.03-0.08,0.06-0.16,0.1-0.23l0,0l0,0L197.86,24.85z"/>
				<polygon class="st1" points="190.55,25.74 190.27,25.5 190.27,25.72 190.38,25.84 		"/>
				<path class="st1" d="M189.67,25.6l0.1,0.1l0.15-0.07L189.67,25.6z"/>
				<polygon class="st1" points="188.86,19.64 189.01,19.82 189.25,19.68 189.27,19.46 189.1,19.54 188.94,19.41 		"/>
				<polygon class="st1" points="189.25,19.21 189.09,19.07 189.06,19.25 189.14,19.32 		"/>
				<polygon class="st1" points="190.78,26.11 190.97,26.22 191.21,26.02 191.24,25.86 190.83,25.95 		"/>
				<polygon class="st1" points="193,15.13 192.59,15.07 192.34,15.25 192.52,15.51 192.75,15.53 192.86,15.4 192.74,15.26 
					192.97,15.25 		"/>
				<path class="st1" d="M191.36,26.43h0.1c0,0-0.08-0.18-0.08-0.19L191.36,26.43z"/>
				<polygon class="st1" points="191.79,26.72 191.74,26.51 191.65,26.65 191.52,26.72 191.62,26.84 		"/>
				<polygon class="st1" points="187.87,26 187.76,26.14 187.93,26.25 188.08,26.44 188.35,26.52 188.57,26.73 188.76,26.63 
					188.7,26.4 188.5,26.42 188.36,26.19 188.45,26.08 188.64,26.11 188.6,25.91 188.2,25.64 188.06,25.65 188.05,25.85 188.26,25.99 
					188.18,26.11 		"/>
				<polygon class="st1" points="197.9,25.22 197.91,25.22 197.86,24.85 		"/>
				<polygon class="st1" points="196.04,5.43 196.04,5.42 196.04,5.42 		"/>
				<polygon class="st1" points="196.04,5.42 196.04,5.42 195.99,4.87 		"/>
				<polygon class="st1" points="187.21,5.72 187.2,5.72 187.21,5.72 		"/>
				<polygon class="st1" points="187.43,5.98 187.21,5.72 187.21,5.72 		"/>
				<polygon class="st1" points="191.14,29.31 191.37,29.21 191.6,29.19 191.76,29.46 191.85,29.3 192.08,29.15 192.24,29.21 
					192.13,28.94 191.89,28.93 191.76,28.8 191.61,28.77 191.59,28.87 191.46,29.04 191.04,29.23 		"/>
				<polygon class="st1" points="192.26,29.66 192.57,29.91 192.71,29.82 192.59,29.52 192.24,29.51 		"/>
				<polygon class="st1" points="191.68,29.7 191.57,29.64 191.44,29.8 191.36,29.83 191.22,29.99 191.15,29.86 191.01,29.82 
					191.02,29.92 190.89,29.98 191.07,30.04 191.07,30.17 190.93,30.27 190.93,30.42 191.14,30.48 191.35,30.68 191.27,30.88 
					191.16,30.87 191.06,31.2 191.17,31.23 191.38,31.06 191.37,30.92 191.56,30.55 191.93,30.48 192.09,30.29 192.25,30.06 
					192.43,30.09 192.49,30.06 192.43,29.97 192.3,29.89 192.1,29.74 		"/>
				<polygon class="st1" points="194.46,30.85 194.78,30.77 195.12,31.03 195.29,31.01 195.35,30.77 195.55,30.92 195.65,31.11 
					195.82,31.12 196.24,31.39 196.38,31.7 196.63,31.82 196.83,32.12 197.31,31.92 197.71,31.98 197.91,31.68 197.88,31.43 
					198.09,31.24 198.09,30.97 197.47,29.84 197.56,28.83 197.72,28.72 197.81,28.33 198.03,28.06 198.06,27.98 198.05,27.93 
					197.92,27.72 197.92,27.72 197.92,27.71 197.88,27.84 196.8,27.81 196.32,27.5 195.82,27.51 195.55,27.38 195.33,27.44 
					195.05,27.19 195.03,27.38 194.86,27.35 194.86,27.46 195.01,27.59 194.76,27.76 194.64,27.68 194.16,27.65 194.07,27.53 
					194,27.8 193.75,27.77 193.49,27.85 193.45,28.07 193.27,28.03 192.84,28.22 192.69,28.47 192.7,29.33 192.87,29.36 192.97,29.29 
					193.21,29.31 193.09,29.5 192.9,29.52 192.91,29.87 193.14,30.22 193.52,30.57 193.65,30.54 193.67,30.31 193.94,30.1 
					194.04,30.29 193.9,31 193.9,31.15 194.04,31.1 		"/>
				<polygon class="st1" points="192.48,28.8 192.24,28.82 192.29,28.98 192.54,28.94 		"/>
				<polygon class="st1" points="198.05,27.93 197.92,27.72 197.92,27.72 		"/>
				<polygon class="st1" points="190.78,34.51 191.17,34.16 191.78,34.02 192.25,34.06 192.57,34.05 192.74,34.19 193.01,33.99 
					193.28,33.95 193.34,34.11 193.57,34.12 193.79,34.38 194.21,34.37 194.34,34.42 194.78,34.14 195.26,34.37 195.68,34.43 
					196.02,34.83 196.32,34.88 196.63,35.3 197.02,35.32 197.15,35.44 197.15,35.44 197.58,35.24 198.15,35.16 198.2,34.81 
					198.44,34.69 198.54,34.42 198.76,34.37 198.71,33.99 198.53,33.73 198.38,33.34 198.29,33.22 198.12,32.89 198.16,32.71 
					198.08,32.49 197.96,32.38 198.02,32.25 197.98,32.02 197.31,31.92 196.83,32.12 196.63,31.82 196.38,31.7 196.24,31.39 
					195.82,31.12 195.65,31.11 195.55,30.92 195.35,30.77 195.29,31.01 195.12,31.03 194.78,30.77 194.46,30.85 194.04,31.1 
					193.9,31.15 193.9,31.49 194.02,32.08 193.87,32.55 193.44,33.01 193.12,33.01 192.8,32.7 192.76,32.47 192.13,31.79 192.11,31.4 
					192,31.41 191.76,31.64 191.38,31.73 191.25,31.86 190.97,31.88 190.77,32.18 190.8,32.46 190.69,32.42 190.7,32.89 190.34,33.31 
					190.31,33.57 190.33,33.83 190.13,34.01 190.29,34.66 190.44,34.81 190.44,34.86 190.68,34.79 		"/>
				<polygon class="st1" points="193.19,37.74 193.38,37.77 193.52,38.26 193.5,38.58 193.67,38.86 193.97,38.65 194.46,38.5 
					194.81,38.67 195.16,38.5 195.4,38.48 195.26,38.09 195.65,38.07 195.78,37.72 196.02,37.64 196.12,37.8 196.41,37.8 196.41,37.5 
					196.06,37.33 196.14,36.92 196.33,36.88 196.59,36.43 197.05,36.22 197.05,35.94 196.84,35.84 197.15,35.44 197.02,35.32 
					196.63,35.3 196.32,34.88 196.02,34.83 195.68,34.43 195.26,34.37 194.78,34.14 194.34,34.42 194.21,34.37 193.79,34.38 
					193.57,34.12 193.34,34.11 193.28,33.95 193.01,33.99 192.74,34.19 192.57,34.05 192.25,34.06 191.78,34.02 191.17,34.16 
					190.78,34.51 190.68,34.79 190.44,34.86 190.47,35.26 190.56,35.6 190.45,35.79 190.52,35.83 190.98,35.73 191.35,36.24 
					191.7,36.41 192.2,36.29 192.38,36.39 192.43,36.66 192.6,36.69 192.73,36.84 192.58,37.05 192.62,37.53 192.89,37.5 		"/>
				<polygon class="st1" points="198.54,34.42 198.44,34.69 198.2,34.81 198.15,35.16 197.58,35.24 197.15,35.44 197.15,35.44 
					196.84,35.84 197.05,35.94 197.05,36.22 196.59,36.43 196.33,36.88 196.14,36.92 196.06,37.33 196.41,37.5 196.41,37.8 
					196.12,37.8 196.02,37.64 195.78,37.72 195.65,38.07 195.26,38.09 195.4,38.48 195.16,38.5 194.81,38.67 194.46,38.5 
					193.97,38.65 193.67,38.86 193.74,38.96 193.94,39.59 194.13,39.87 194.19,40.2 194.34,40.34 194.35,41.18 194.08,41.28 
					193.87,41.61 193.98,42.01 194.25,42.45 194.24,42.58 194.46,42.56 194.9,42.78 195.13,42.65 196.07,42.52 196.5,42.5 
					196.78,42.26 196.95,42.27 197.28,42.46 198.06,42.58 198.39,42.74 198.45,42.9 198.92,42.71 199.14,42.92 199.32,42.91 
					199.44,42.79 199.85,42.85 200.04,42.94 200.46,42.68 200.83,42.73 200.88,42.98 201.11,43.06 201.36,42.75 201.64,42.73 
					201.87,42.89 202.26,42.77 202.49,42.98 202.78,42.94 202.81,42.48 203.01,41.96 203.41,41.92 203.98,41.78 204.02,41.78 
					204.02,41.44 203.7,41.09 203.74,40.72 203.47,40.29 203.45,39.96 203.57,39.75 203.86,40.02 204.56,39.92 204.84,39.47 
					204.99,39.34 204.64,39.1 204.6,38.85 204.09,38.4 203.65,38.28 203.53,37.83 203.26,37.64 202.9,37.15 202.75,36.78 
					202.44,36.45 202.44,36.04 202.2,35.77 202.3,35.41 202.22,35.1 201.64,34.89 201.44,34.89 201.28,34.69 200.9,34.81 
					200.54,35.08 200.29,34.64 200,34.6 199.67,34.75 199.4,34.32 199.1,34.5 198.87,34.34 198.76,34.37 		"/>
				<polygon class="st1" points="198.87,34.34 198.76,34.37 198.76,34.37 		"/>
				<polygon class="st1" points="198.76,34.37 198.76,34.37 198.54,34.42 		"/>
				<polygon class="st1" points="197.15,35.44 197.15,35.44 197.15,35.44 		"/>
				<polygon class="st1" points="197.15,35.44 196.84,35.84 197.15,35.44 		"/>
				<polygon class="st1" points="213.48,49.68 213.66,49.6 213.95,49.14 214.6,49.1 214.85,48.91 214.8,48.57 214.96,48.08 
					214.91,47.69 214.52,47.41 214.6,46.83 214.89,46.77 215.11,46.47 215.1,46.11 214.92,46 214.8,45.69 214.59,45.9 214.19,45.82 
					213.84,45.6 213.54,45.65 213.29,45.5 212.93,45.49 212.44,45.38 212.26,45.56 212.13,45.3 211.71,45.04 211.41,44.38 
					211.2,44.41 210.74,44.76 210.45,44.7 210.13,44.78 209.75,44.58 209.51,44.85 208.9,44.26 208.75,43.82 208.75,43.45 
					208.5,43.41 208.46,43.13 208.19,42.9 207.44,43 207.07,42.52 207.22,42.22 206.94,41.98 206.74,41.36 206.43,41.34 206.08,41.52 
					205.39,41.52 204.72,41.3 204.52,41.48 204.55,41.77 204.23,41.84 203.98,41.78 203.41,41.92 203.01,41.96 202.81,42.48 
					202.78,42.94 202.49,42.98 202.26,42.77 201.87,42.89 201.64,42.73 201.36,42.75 201.11,43.06 200.88,42.98 200.83,42.73 
					200.46,42.68 200.04,42.94 199.85,42.85 199.44,42.79 199.32,42.91 199.14,42.92 198.92,42.71 198.45,42.9 198.39,42.74 
					198.06,42.58 197.28,42.46 196.95,42.27 196.78,42.26 196.5,42.5 196.07,42.52 195.13,42.65 194.9,42.78 194.46,42.56 
					194.24,42.58 194.22,42.81 194.24,43.43 194.41,43.6 194.57,44 194.89,44.21 194.77,44.36 194.81,44.57 194.91,44.73 
					194.84,45.14 194.61,45.15 194.41,45.36 194.29,45.77 193.46,46.69 193.52,47.06 193.5,47.47 193.25,47.46 192.97,48.05 
					192.91,48.51 192.85,48.54 193.17,48.85 193.51,49.07 193.61,49.31 193.87,49.3 194.05,49.14 194.31,49.14 194.8,49.42 
					195.18,49.43 195.54,49.6 195.66,49.81 195.95,49.95 196.38,49.81 196.66,49.79 196.88,49.53 197.79,49.37 198.1,49.18 
					198.41,49.12 198.36,48.79 198.41,48.63 198.35,48.27 198.57,48.36 198.63,48.27 198.89,48.43 198.98,48.29 199.27,48.29 
					199.38,48.18 199.57,48.49 199.92,48.49 200.34,48.88 200.78,48.92 200.84,48.77 200.97,48.77 201.39,49.19 201.73,49.36 
					201.82,49.84 201.79,50.16 202.09,50.32 202.14,50.46 202.47,50.76 202.86,51 202.91,51.24 202.85,51.47 203.02,51.7 
					202.97,51.85 202.57,51.85 202.35,51.68 202,51.8 201.74,51.81 201.7,52.29 201.71,52.62 201.58,52.6 201.32,53.07 201.31,53.31 
					201.09,53.25 200.9,53.39 201.11,53.77 201.48,53.85 201.98,53.86 202.2,53.7 202.62,53.66 202.85,53.84 202.85,53.84 202.9,53.6 
					202.77,53.44 202.8,53.28 202.81,53.08 202.92,53.26 203.09,53.26 203.61,52.64 203.52,52.47 203.67,52.47 203.94,52.11 
					203.94,51.78 204.14,51.62 204.45,51.6 204.72,51.27 204.87,51.41 204.86,51.48 205.11,51.48 205.22,51.33 205.33,51.14 
					205.43,51.3 205.59,51.42 205.79,51.49 206.2,51.39 205.92,51.56 205.74,51.65 205.5,51.58 205.03,51.64 204.73,51.64 
					204.85,51.81 205.34,51.81 205.73,51.94 205.68,52.04 205.53,52.13 205.73,52.3 205.92,52.32 206.16,52.46 206.45,52.31 
					206.77,52.26 207.08,52.39 207.29,52.51 207.4,52.32 207.52,52.38 207.58,52.72 207.73,52.9 207.62,52.97 207.22,53.04 
					206.74,53.33 206.47,53.75 206.7,53.85 206.89,53.7 207.18,53.84 207.34,53.82 207.77,54.16 207.78,54.35 207.62,54.84 
					207.55,54.94 207.78,55.13 208.28,55.15 208.75,54.93 209.37,54.46 209.8,54.47 210.03,54.15 210.35,53.97 210.88,54.06 
					211.34,54.02 211.51,53.83 211.38,53.59 211.52,53.47 211.62,53.3 211.26,53.28 210.83,53.33 210.73,53.6 210.47,53.44 
					210.32,53.45 210.1,53.69 209.94,53.63 209.29,52.91 209.19,52.55 208.98,52.27 208.87,52.34 209,52.69 209.47,53.26 
					209.92,53.69 209.79,53.76 209.48,53.67 209.33,53.5 209.27,53.2 209.13,53.1 208.96,53.26 209,53.04 208.88,53.04 208.76,53.13 
					208.75,53 208.88,52.84 208.79,52.71 208.63,52.79 208.47,52.66 208.31,52.47 207.88,52.5 207.71,52.39 207.75,52.28 
					208.04,52.33 208.21,52.17 208.4,52.32 208.69,52.32 208.73,52.15 208.97,52.11 209.38,51.68 209.43,51.53 209.57,51.62 
					209.62,51.73 209.35,52.05 209.25,52.11 209.31,52.23 209.47,52.14 209.76,51.73 209.82,51.56 209.67,51.37 209.59,51.2 
					209.71,51.19 209.88,51.49 210.06,51.52 210.33,51.35 210.69,51.43 210.91,51.25 211.19,51.22 211.29,51.25 211.58,50.95 
					211.72,50.74 212.02,50.72 212.13,50.49 212.3,50.35 212.64,50.39 212.98,50.24 213.12,50.26 213.15,50.41 213.41,50.32 
					213.41,50.29 213.41,50.29 		"/>
				<polygon class="st1" points="213.41,50.29 213.41,50.29 213.48,49.68 		"/>
				<polygon class="st1" points="199.1,49.63 199.65,50.12 199.71,50.39 200.43,50.96 200.53,51.33 200.76,51.72 200.7,52.99 
					200.88,53.36 200.9,53.39 201.09,53.25 201.31,53.31 201.32,53.07 201.58,52.6 201.71,52.62 201.7,52.29 201.74,51.81 202,51.8 
					202.35,51.68 202.57,51.85 202.97,51.85 203.02,51.7 202.85,51.47 202.91,51.24 202.86,51 202.47,50.76 202.14,50.46 
					202.09,50.32 201.79,50.16 201.82,49.84 201.73,49.36 201.39,49.19 200.97,48.77 200.84,48.77 200.78,48.92 200.34,48.88 
					199.92,48.49 199.57,48.49 199.38,48.18 199.27,48.29 198.98,48.29 198.89,48.43 198.63,48.27 198.57,48.36 198.35,48.27 
					198.41,48.63 198.36,48.79 198.41,49.12 198.94,49.03 		"/>
				<polygon class="st1" points="202.2,53.7 201.98,53.86 201.48,53.85 201.11,53.77 200.88,53.36 200.7,52.99 200.76,51.72 
					200.53,51.33 200.43,50.96 199.71,50.39 199.65,50.12 199.1,49.63 198.94,49.03 198.1,49.18 197.79,49.37 196.88,49.53 
					196.66,49.79 196.38,49.81 195.95,49.95 195.66,49.81 195.54,49.6 195.18,49.43 194.8,49.42 194.31,49.14 194.05,49.14 
					193.87,49.3 193.61,49.31 193.64,49.4 193.5,49.7 193.18,49.76 192.9,50.29 192.62,51.12 192.14,51.83 192.15,52.09 191.91,52.32 
					191.55,52.29 191.42,52.53 191.19,52.59 190.92,52.87 191.17,52.96 191.25,53.13 191.68,53.64 191.77,53.88 192.12,54.07 
					192.48,54.34 192.32,54.67 192.38,54.81 192.82,54.96 192.95,55.19 193.23,55.07 193.44,55.26 193.67,54.96 194.14,55.06 
					193.91,55.31 193.95,55.52 194.03,55.8 194.4,55.84 194.57,55.98 194.56,56.19 194.46,56.33 194.6,56.58 194.94,56.36 
					195.29,56.38 195.44,56.54 195.58,56.5 196.04,56.67 196.44,56.49 196.7,56.57 196.92,56.47 197.19,56.57 197.43,56.57 
					197.93,56.63 198.1,56.51 198.44,56.4 198.56,56.21 199.35,55.84 199.71,55.78 200.13,55.82 200.57,56 200.71,56.15 200.97,56.05 
					201.32,56.22 201.38,56.36 201.7,56.37 201.6,56.05 201.75,55.8 201.77,55.4 201.65,55.21 201.83,55.03 201.9,54.74 202.37,54.71 
					202.66,54.65 202.85,54.3 202.85,54.1 202.71,53.98 202.85,53.84 202.62,53.66 		"/>
				<polygon class="st1" points="192.13,48.64 191.58,48.68 191.27,48.59 190.82,48.63 190.59,48.99 190.35,49.19 190.32,49.44 
					189.94,49.04 189.5,49.41 189.12,49.54 189.08,49.79 188.36,49.86 187.9,50.02 187.43,49.93 186.52,49.41 186.55,49.59 
					186.59,49.86 186.54,50.13 185.96,50.12 185.9,50.24 186.14,50.52 186.02,50.83 186,51.09 186.14,51.34 185.93,51.6 185.87,51.62 
					186.21,52.01 186.26,52.46 186.5,52.51 187.06,53.03 187.34,53.14 187.55,53.31 188.25,53.42 188.75,53.6 188.97,53.33 
					189.11,53.41 189.3,53.2 189.61,53.04 189.84,53.07 189.92,52.94 190.24,52.67 190.44,52.74 190.73,52.8 190.92,52.87 
					191.19,52.59 191.42,52.53 191.55,52.29 191.91,52.32 192.15,52.09 192.14,51.83 192.62,51.12 192.9,50.29 193.18,49.76 
					193.5,49.7 193.64,49.4 193.61,49.31 193.51,49.07 193.17,48.85 192.85,48.54 192.55,48.74 		"/>
				<polygon class="st1" points="193.61,49.31 193.51,49.07 193.61,49.31 		"/>
				<polygon class="st1" points="193.64,49.4 193.61,49.31 193.61,49.31 		"/>
				<polygon class="st1" points="192.65,47.12 192.14,47.1 191.97,47.18 191.76,47.08 191.54,47.11 191.37,47.29 191.18,47.16 
					190.86,47.16 190.65,47.13 190.43,47.21 190.27,47.45 190.02,47.46 189.95,47.42 189.95,47.44 189.32,47.38 189.03,47.64 
					188.69,47.67 188.31,48.05 187.82,48.12 187.3,48.3 187.17,48.19 186.86,48.2 186.54,48.42 186.47,48.4 186.44,48.83 
					186.52,49.41 187.43,49.93 187.9,50.02 188.36,49.86 189.08,49.79 189.12,49.54 189.5,49.41 189.94,49.04 190.32,49.44 
					190.35,49.19 190.59,48.99 190.82,48.63 191.27,48.59 191.58,48.68 192.13,48.64 192.55,48.74 192.91,48.51 192.97,48.05 
					193.25,47.46 193.21,47.45 		"/>
				<polygon class="st1" points="201.32,56.22 200.97,56.05 200.71,56.15 200.57,56 200.13,55.82 199.71,55.78 199.35,55.84 
					198.56,56.21 198.44,56.4 198.1,56.51 197.93,56.63 197.43,56.57 197.19,56.57 196.92,56.47 196.7,56.57 196.44,56.49 
					196.04,56.67 195.58,56.5 195.44,56.54 195.29,56.38 194.94,56.36 194.6,56.58 194.46,56.33 194.56,56.19 194.57,55.98 
					194.4,55.84 194.03,55.8 194.11,56.06 193.89,56.28 194.03,56.82 194.42,57.22 194.6,57.57 194.52,57.84 194.04,58.28 
					194.07,58.51 194.24,58.78 194.16,59.02 194.14,59.02 194.68,59.45 195.04,60.08 195.09,60.41 195.14,60.67 195.15,60.67 
					195.28,60.74 195.73,60.74 196.07,60.66 196.31,60.43 196.64,60.49 196.99,60.48 197.03,60.71 197.28,60.73 197.47,60.58 
					197.73,60.58 197.96,60.72 198.23,60.59 198.8,60.63 198.98,60.48 198.87,60.25 198.89,59.94 199.21,59.69 199.37,59.69 
					199.37,59.68 199.59,59.44 199.8,59.42 199.96,59.25 200.35,59.25 200.72,59.54 200.91,59.38 201.22,59.46 201.21,59.44 
					201.01,59.11 200.74,58.73 200.52,58.7 200.47,58.55 200.85,58.27 200.94,58 200.88,57.41 201.25,57.08 201.49,57.11 
					201.66,56.95 201.71,56.44 201.7,56.37 201.38,56.36 		"/>
				<polygon class="st1" points="193.56,59.11 193.31,59.07 192.78,59.2 192.56,59.36 192.28,59.44 191.96,59.62 191.97,59.83 
					191.87,59.94 191.85,59.9 191.78,60.36 191.88,60.87 192.1,61.24 192.24,61.56 192.52,61.77 192.53,61.74 193.06,61.41 
					193.44,61.27 193.46,61.15 193.75,61 194.42,61.03 194.73,60.83 194.97,60.82 195.14,60.67 195.09,60.41 195.04,60.08 
					194.68,59.45 194.14,59.02 193.94,59.02 		"/>
				<polygon class="st1" points="191.7,62.99 191.72,62.68 192.26,62.51 192.47,62.12 192.52,61.77 192.24,61.56 192.1,61.24 
					191.88,60.87 191.78,60.36 191.85,59.9 191.78,59.78 191.79,59.36 191.71,59.16 191.43,58.98 191.31,58.95 191.13,58.65 
					191.02,58.58 191.02,58.59 190.79,58.89 190.62,58.64 190.52,58.62 190.24,58.96 190.06,59.35 190.03,59.85 190.43,60.05 
					190.39,60.25 190.26,60.31 190.14,60.91 190.3,61.34 190.18,61.62 190.18,61.95 190.32,62.2 190.22,62.5 190.37,62.67 
					190.86,62.69 191.1,63.32 191.34,63.48 191.52,63.39 		"/>
				<polygon class="st1" points="190.73,52.8 190.44,52.74 190.24,52.67 189.92,52.94 189.84,53.07 189.61,53.04 189.3,53.2 
					189.11,53.41 189.14,53.42 189.31,53.82 189.38,54.17 189.52,54.29 189.77,54.35 189.77,54.45 189.65,54.45 189.38,54.55 
					189.42,54.77 189.49,54.86 189.61,54.78 189.77,54.79 189.73,55.14 189.46,55.55 189.47,55.73 189.86,56.04 190.07,56.05 
					190.22,56.22 190.12,56.37 189.89,56.25 189.76,56.33 189.76,56.63 190.07,56.98 189.97,57.07 190.26,57.35 190.26,57.56 
					190.39,57.71 190.69,57.71 190.9,57.91 191.24,57.97 191.26,58.27 191.06,58.45 191.02,58.58 191.13,58.65 191.31,58.95 
					191.43,58.98 191.71,59.16 191.79,59.36 191.78,59.78 191.85,59.9 191.87,59.94 191.97,59.83 191.96,59.62 192.28,59.44 
					192.56,59.36 192.78,59.2 193.31,59.07 193.56,59.11 193.94,59.02 194.14,59.02 194.16,59.02 194.24,58.78 194.07,58.51 
					194.04,58.28 194.52,57.84 194.6,57.57 194.42,57.22 194.03,56.82 193.89,56.28 194.11,56.06 193.95,55.52 193.91,55.31 
					194.14,55.06 193.67,54.96 193.44,55.26 193.23,55.07 192.95,55.19 192.82,54.96 192.38,54.81 192.32,54.67 192.48,54.34 
					192.12,54.07 191.77,53.88 191.68,53.64 191.25,53.13 191.17,52.96 190.92,52.87 		"/>
				<polygon class="st1" points="191.17,52.96 190.92,52.87 190.92,52.87 		"/>
				<polygon class="st1" points="190.92,52.87 190.92,52.87 190.73,52.8 		"/>
				<polygon class="st1" points="191.85,59.9 191.85,59.9 191.87,59.94 		"/>
				<polygon class="st1" points="191.78,59.78 191.85,59.9 191.85,59.9 		"/>
				<polygon class="st1" points="190.24,58.96 190.52,58.62 190.62,58.64 190.79,58.89 191.02,58.59 191.06,58.45 191.26,58.27 
					191.24,57.97 190.9,57.91 190.69,57.71 190.39,57.71 190.26,57.56 190.26,57.35 189.97,57.07 189.95,57.09 189.73,57.02 
					189.45,56.83 189.29,56.95 189.3,57.15 189.54,57.31 189.63,57.5 189.42,57.61 189.23,57.63 189.12,57.9 189.11,58.26 
					188.96,58.55 188.83,58.62 188.92,58.75 189.19,58.86 189.69,59.49 189.73,59.7 190.03,59.85 190.06,59.35 		"/>
				<polygon class="st1" points="187.82,57.95 186.87,56.89 185.78,55.94 185.74,55.78 185.83,55.68 185.65,55.46 185.61,55.23 
					185.33,54.92 185.16,54.93 185.15,54.74 185.26,54.63 185.26,54.28 185.36,54.15 185.68,54.4 185.79,54.58 185.97,54.54 
					185.98,54.36 186.22,54.32 186.38,54.33 186.52,54.18 186.74,54.31 186.85,54.2 187.07,54.25 187.18,54.48 187.36,54.35 
					187.66,54.45 187.88,54.37 187.94,54.45 188.27,54.42 188.56,54.52 188.73,54.49 189,54.72 189.38,54.73 189.42,54.77 
					189.38,54.55 189.65,54.45 189.77,54.45 189.77,54.35 189.52,54.29 189.38,54.17 189.31,53.82 189.14,53.42 188.97,53.33 
					188.75,53.6 188.25,53.42 187.55,53.31 187.34,53.14 187.06,53.03 186.5,52.51 186.26,52.46 186.27,52.52 185.68,52.52 
					184.86,52.95 184.81,53.3 184.38,53.52 184.3,53.98 184.02,54 183.52,53.77 183.25,53.85 182.9,54.1 182.42,54.13 182.42,54.16 
					182.5,54.69 182.81,54.98 182.78,55.08 182.9,55.18 183.22,54.65 183.28,54.36 183.48,54.13 183.81,54.12 183.88,54.38 
					184.15,54.6 184.23,54.99 184.42,55.37 184.83,55.75 184.93,55.77 185.17,56.03 184.96,55.96 184.73,55.99 184.63,56.21 
					184.75,56.45 185.04,56.45 185.34,56.73 185.64,56.84 185.74,57.07 185.88,57.23 186.19,57.17 186.78,57.22 187.11,57.38 
					187.77,58.06 187.58,58.08 187.27,57.92 187.44,58.12 187.72,58.19 187.72,58.18 		"/>
				<polygon class="st1" points="186.96,57.45 186.84,57.37 186.3,57.37 186.43,57.54 186.69,57.58 		"/>
				<polygon class="st1" points="184.56,56.56 184.49,56.33 184.22,56.1 		"/>
				<polygon class="st1" points="184.16,55.29 184.15,55.47 184.41,55.54 		"/>
				<polygon class="st1" points="183.75,55.54 183.86,55.52 183.74,55.17 183.4,54.93 183.58,55.21 183.52,55.29 		"/>
				<path class="st1" d="M183.63,54.38c-0.05,0.03-0.09,0.06-0.13,0.1v0.38l0.2,0.05l0.11,0.13l0.19-0.07L183.63,54.38z"/>
				<polygon class="st1" points="184.71,55.92 184.53,55.69 184.38,55.65 184.61,55.99 		"/>
				<path class="st1" d="M187.25,58.13l-0.17-0.17h-0.47l0.23,0.13L187.25,58.13z"/>
				<polygon class="st1" points="184.08,55.74 183.88,55.66 184.11,55.94 		"/>
				<polygon class="st1" points="186.7,57.83 186.99,57.69 186.29,57.68 		"/>
				<polygon class="st1" points="189.11,58.26 189.12,57.9 189.23,57.63 189.42,57.61 189.63,57.5 189.54,57.31 189.3,57.15 
					189.29,56.95 189.45,56.83 189.73,57.02 189.95,57.09 189.97,57.07 190.07,56.98 189.76,56.63 189.76,56.33 189.89,56.25 
					190.12,56.37 190.22,56.22 190.07,56.05 189.86,56.04 189.47,55.73 189.46,55.55 189.73,55.14 189.77,54.79 189.61,54.78 
					189.49,54.86 189.42,54.77 189.38,54.73 189,54.72 188.73,54.49 188.56,54.52 188.27,54.42 187.94,54.45 187.88,54.37 
					187.66,54.45 187.36,54.35 187.18,54.48 187.07,54.25 186.85,54.2 186.74,54.31 186.52,54.18 186.38,54.33 186.22,54.32 
					185.98,54.36 185.97,54.54 185.79,54.58 185.68,54.4 185.36,54.15 185.26,54.28 185.26,54.63 185.15,54.74 185.16,54.93 
					185.33,54.92 185.61,55.23 185.65,55.46 185.83,55.68 185.74,55.78 185.78,55.94 186.87,56.89 187.82,57.95 187.72,58.18 
					187.72,58.19 187.89,58.22 188.4,58.31 188.54,58.23 188.83,58.62 188.96,58.55 		"/>
				<polygon class="st1" points="189.42,54.77 189.49,54.86 189.42,54.77 		"/>
				<polygon class="st1" points="189.97,57.07 189.97,57.07 190.07,56.98 		"/>
				<polygon class="st1" points="189.95,57.09 189.97,57.07 189.97,57.07 		"/>
				<polygon class="st1" points="189.38,54.73 189.42,54.77 189.42,54.77 		"/>
				<polygon class="st1" points="183.25,53.85 183.52,53.77 184.02,54 184.3,53.98 184.38,53.52 184.81,53.3 184.86,52.95 
					185.68,52.52 186.27,52.52 186.21,52.01 185.87,51.62 185.54,51.73 184.95,52.06 184.81,52.05 184.61,52.07 184.31,52.21 
					184.01,52.21 183.69,52.34 183.52,52.13 182.91,52.14 182.7,52.11 182.39,52.56 182.48,52.77 182.31,53.05 182.37,53.51 
					182.4,53.51 182.66,53.64 182.65,53.82 182.43,53.88 182.42,54.13 182.9,54.1 		"/>
				<polygon class="st1" points="185.93,51.6 186.14,51.34 186,51.09 186.02,50.83 186.14,50.52 185.9,50.24 185.96,50.12 
					186.54,50.13 186.59,49.86 186.55,49.59 186.44,48.83 186.47,48.4 185.95,48.28 185.71,48.11 185.35,48.18 184.97,48.16 
					184.64,47.93 184.15,47.91 183.87,47.8 183.76,48.06 183.63,48.18 183.61,48.39 183.24,48.41 183.11,48.55 182.43,48.16 
					182.24,48.14 182.19,48.39 182.21,48.66 181.99,48.66 181.84,48.93 181.53,49.08 181.16,49.54 181.16,49.71 181.5,49.88 
					181.54,50.13 181.4,50.23 181.1,50.05 180.79,50.14 180.48,50.05 180.27,50.08 179.84,50.37 179.61,50.41 179.39,50.34 
					179.16,50.4 178.97,50.28 178.59,50.22 178.23,50.27 178.26,50.45 178.18,50.56 177.84,50.47 177.65,50.27 177.41,50.36 
					177.25,50.44 177.18,50.44 177.35,50.55 177.33,50.74 177.49,50.86 177.48,51.11 177.69,51.13 177.86,51.06 178.14,51.33 
					178.37,51.12 178.59,51.12 178.69,51.34 178.7,51.33 179.15,51.52 179.85,51.12 180.14,51.19 180.61,51.16 180.57,51.43 
					181.24,51.82 182.06,51.97 182.5,51.94 182.7,52.11 182.7,52.11 182.91,52.14 183.52,52.13 183.69,52.34 184.01,52.21 
					184.31,52.21 184.61,52.07 184.81,52.05 184.95,52.06 185.54,51.73 185.87,51.62 		"/>
				<polygon class="st1" points="185.87,51.62 185.87,51.62 185.93,51.6 		"/>
				<polygon class="st1" points="185.54,51.73 185.87,51.62 185.87,51.62 		"/>
				<polygon class="st1" points="182.87,40.5 182.49,40.7 182.49,40.88 182.91,41.33 182.86,41.6 183.05,41.85 183.05,42.06 
					183.17,42.34 183.06,42.58 183.31,43.13 183.49,43.23 183.65,43.44 183.67,44.16 183.59,44.27 183.69,44.49 183.81,44.35 
					184.04,44.4 184.18,44.33 184.73,44.41 184.71,44.57 184.94,44.81 185.16,44.78 185.36,44.95 185.23,45.25 185.34,45.41 
					185.43,45.46 185.42,45.72 185.61,45.8 185.73,45.66 185.91,45.66 185.6,45.25 185.72,45.16 186.36,45.52 186.75,45.47 
					186.69,45.7 186.98,45.94 187.49,45.82 187.88,45.94 188.7,46.54 188.96,46.98 189.19,46.99 189.31,46.85 189.67,46.86 
					189.87,47.07 189.95,47.42 190.02,47.46 190.27,47.45 190.43,47.21 190.65,47.13 190.86,47.16 191.18,47.16 191.37,47.29 
					191.54,47.11 191.76,47.08 191.97,47.18 192.14,47.1 192.65,47.12 193.21,47.45 193.5,47.47 193.52,47.06 193.46,46.69 
					194.29,45.77 194.41,45.36 194.61,45.15 194.84,45.14 194.91,44.73 194.81,44.57 194.77,44.36 194.89,44.21 194.57,44 
					194.41,43.6 194.24,43.43 194.22,42.81 194.25,42.45 193.98,42.01 193.87,41.61 194.08,41.28 194.35,41.18 194.34,40.34 
					194.19,40.2 194.13,39.87 193.94,39.59 193.74,38.96 193.5,38.58 193.52,38.26 193.38,37.77 193.19,37.74 192.89,37.5 
					192.62,37.53 192.62,37.53 191.11,37.68 189.39,37.58 189.24,37.64 188.78,38.05 188.39,38.14 188.28,38.05 188.67,37.84 
					189.03,37.47 188.91,37.48 188.62,37.76 188.12,38 187.54,37.84 187.42,37.52 187.51,37.29 187.81,37.33 187.96,37.43 
					187.97,37.33 187.59,37.15 186.91,36.98 186.37,37.25 185.98,37.22 185.59,37.38 185.34,37.71 184.95,37.72 184.71,38 
					184.71,38.21 184.29,38.22 183.65,38.57 183.22,38.6 183.07,38.93 182.97,39.26 182.88,39.31 182.9,39.44 182.76,39.45 
					182.91,40.05 		"/>
				<polygon class="st1" points="192.89,37.5 192.62,37.53 192.62,37.53 		"/>
				<polygon class="st1" points="182.43,48.16 183.11,48.55 183.24,48.41 183.61,48.39 183.63,48.18 183.76,48.06 183.87,47.8 
					184.15,47.91 184.64,47.93 184.97,48.16 185.35,48.18 185.71,48.11 185.95,48.28 186.54,48.42 186.86,48.2 187.17,48.19 
					187.3,48.3 187.82,48.12 188.31,48.05 188.69,47.67 189.03,47.64 189.32,47.38 189.95,47.44 189.87,47.07 189.67,46.86 
					189.31,46.85 189.19,46.99 188.96,46.98 188.7,46.54 187.88,45.94 187.49,45.82 186.98,45.94 186.69,45.7 186.75,45.47 
					186.36,45.52 185.72,45.16 185.6,45.25 185.91,45.66 185.73,45.66 185.61,45.8 185.42,45.72 185.43,45.46 185.34,45.41 
					185.23,45.25 185.36,44.95 185.16,44.78 184.94,44.81 184.71,44.57 184.73,44.41 184.18,44.33 184.04,44.4 183.81,44.35 
					183.69,44.49 183.59,44.27 183.54,44.36 183.35,44.26 183.17,44.38 182.75,44.28 182.75,44.52 182.53,44.66 182.33,44.61 
					181.89,44.62 181.74,44.84 181.45,44.85 181.19,45.16 180.95,45.17 180.47,45.61 180.25,45.51 180.12,45.4 180,45.49 
					180.02,45.69 180.37,45.9 180.66,46.34 180.64,46.67 180.71,46.87 180.97,47.02 181.44,47.33 181.7,47.51 182.24,48.13 
					182.24,48.14 		"/>
				<polygon class="st1" points="174.11,40.64 174.09,40.79 173.98,41.02 173.98,41.29 173.8,41.44 173.52,41.31 173.41,41.57 
					173.44,41.75 173.77,41.74 173.91,41.86 173.83,42.03 173.79,42.32 173.62,42.45 173.76,42.7 173.57,42.81 173.23,42.73 
					172.87,42.82 172.7,43.09 172.53,43.3 172.61,43.7 172.52,44.15 172.41,44.44 172.44,44.45 172.35,44.65 172.56,45.07 
					172.55,45.23 172.71,45.49 172.56,45.86 172.65,45.86 172.97,46.26 173.02,46.55 173.17,46.67 173.15,47.1 173.15,47.1 
					173.41,47.3 173.41,47.46 173.64,47.66 173.86,47.58 174.1,47.58 174.27,47.65 174.51,47.57 174.84,47.72 175.09,47.72 
					175.35,47.89 175.05,48.2 174.9,48.61 174.9,48.82 174.72,48.99 174.58,49.46 174.6,49.85 174.84,50 174.96,50.26 174.96,50.26 
					175.18,50.33 175.42,50.19 175.75,50.31 175.85,50.14 175.82,49.98 176.09,49.88 176.19,50.14 176.36,50.19 176.49,50.06 
					176.68,50.07 177.05,50.34 177.18,50.44 177.25,50.44 177.41,50.36 177.65,50.27 177.84,50.47 178.18,50.56 178.26,50.45 
					178.23,50.27 178.59,50.22 178.97,50.28 179.16,50.4 179.39,50.34 179.61,50.41 179.84,50.37 180.27,50.08 180.48,50.05 
					180.79,50.14 181.1,50.05 181.4,50.23 181.54,50.13 181.5,49.88 181.16,49.71 181.16,49.54 181.53,49.08 181.84,48.93 
					181.99,48.66 182.21,48.66 182.19,48.39 182.24,48.14 182.24,48.13 181.7,47.51 181.44,47.33 180.97,47.02 180.71,46.87 
					180.64,46.67 180.66,46.34 180.37,45.9 180.02,45.69 180,45.49 180.12,45.4 180.25,45.51 180.47,45.61 180.95,45.17 181.19,45.16 
					181.45,44.85 181.74,44.84 181.89,44.62 182.33,44.61 182.53,44.66 182.75,44.52 182.75,44.28 183.17,44.38 183.35,44.26 
					183.54,44.36 183.59,44.27 183.67,44.16 183.65,43.44 183.49,43.23 183.31,43.13 183.06,42.58 183.17,42.34 183.05,42.06 
					183.05,41.85 182.86,41.6 182.91,41.33 182.49,40.88 182.49,40.7 182.87,40.5 182.91,40.05 182.76,39.45 182.52,39.46 
					182.36,39.32 182.13,39.35 181.89,39.15 181.94,38.9 181.78,38.66 181.51,38.71 181.17,38.38 180.94,38.34 180.84,38.19 
					180.72,38.25 180.43,38.28 180.15,38.48 180.05,38.38 180.19,38.23 180.23,38.27 180.33,38.16 180.62,38.05 180.26,38.02 
					180.15,38.08 180.12,38.21 179.84,38.35 179.83,38.47 179.34,38.55 179.15,38.81 179.1,39 178.82,39.03 178.73,38.88 
					178.49,38.86 178.37,38.91 178.03,38.81 178.26,38.65 178.43,38.67 178.61,38.46 178.6,38.23 178.49,38.17 178.28,38.34 
					178.21,38.43 177.87,38.19 177.76,38.05 177.64,38.12 177.57,38.27 177.36,38.42 177.28,38.19 177.06,38.13 176.99,37.98 
					177.12,37.84 177.27,37.54 177,37.51 176.74,37.23 176.5,37.27 176.36,37.2 175.86,37.06 175.5,37.08 175.52,37.14 175.5,37.36 
					175.68,37.49 175.82,37.5 175.81,37.69 176.1,37.97 175.86,38.06 175.63,38.06 175.64,38.29 175.88,38.19 175.88,38.51 
					176.12,38.66 175.91,38.83 175.91,39.02 176.09,39.13 176.42,39.15 176.84,39.6 177.4,39.83 176.81,39.71 176.39,39.24 
					176.1,39.36 175.89,39.24 175.67,39.29 175.51,39.55 175.56,39.78 175.57,40.16 175.69,40.42 175.4,40.08 175.42,39.78 
					175.22,39.6 175.1,39.65 175.1,39.85 175.22,40.08 175.09,40.23 174.87,39.96 174.87,39.65 174.57,39.44 174.4,39.52 
					173.79,39.69 173.74,39.95 173.86,40.19 174.16,40.24 174.22,40.49 174.19,40.48 174.19,40.54 		"/>
				<polygon class="st1" points="182.24,48.14 182.19,48.39 182.24,48.14 		"/>
				<polygon class="st1" points="183.67,44.16 183.59,44.27 183.59,44.27 		"/>
				<polygon class="st1" points="182.24,48.13 182.24,48.14 182.24,48.14 		"/>
				<polygon class="st1" points="183.59,44.27 183.54,44.36 183.59,44.27 		"/>
				<polygon class="st1" points="177.25,50.95 177.34,51.1 177.48,51.11 177.49,50.86 177.33,50.74 177.33,50.77 		"/>
				<polygon class="st1" points="178.59,51.12 178.37,51.12 178.14,51.33 177.86,51.06 177.69,51.13 177.48,51.11 177.34,51.1 
					177.25,50.95 177.33,50.77 177.33,50.74 177.35,50.55 177.18,50.44 177.05,50.34 176.68,50.07 176.49,50.06 176.36,50.19 
					176.19,50.14 176.09,49.88 175.82,49.98 175.85,50.14 175.75,50.31 175.42,50.19 175.18,50.33 174.96,50.26 174.53,50.39 
					174.28,50.37 174.2,50.19 173.89,50.21 173.72,50.42 174,50.57 174.05,50.82 173.8,50.93 173.54,51.27 173.34,51.35 172.99,51.9 
					172.93,52.31 172.93,52.58 172.77,52.56 172.62,52.64 172.65,52.86 172.94,52.89 173.27,52.75 173.14,52.42 173.33,52.25 
					173.73,52.27 173.86,52.53 173.96,52.86 174.12,52.98 174.16,53.21 174.45,53.32 174.98,52.93 175.33,53.09 175.81,52.25 
					176.13,52.44 176.09,52.75 176.52,52.97 176.65,53.24 176.93,52.75 176.93,52.38 177.51,52.54 177.75,52.52 177.98,52.72 
					178.04,52.21 178.56,52.09 178.43,51.66 178.69,51.34 		"/>
				<polygon class="st1" points="177.35,50.55 177.18,50.44 177.18,50.44 		"/>
				<polygon class="st1" points="177.69,51.13 177.48,51.11 177.48,51.11 		"/>
				<polygon class="st1" points="177.33,50.74 177.35,50.55 177.33,50.74 		"/>
				<polygon class="st1" points="177.18,50.44 177.05,50.34 177.18,50.44 		"/>
				<polygon class="st1" points="177.48,51.11 177.48,51.11 177.34,51.1 		"/>
				<polygon class="st1" points="177.33,50.77 177.33,50.74 177.33,50.74 		"/>
				<polygon class="st1" points="170.15,43.06 170.19,43.15 170.33,43.18 170.38,43.11 170.13,43.01 169.94,43 169.99,43.12 		"/>
				<polygon class="st1" points="170.03,43.36 170.16,43.32 170.06,43.18 169.82,43.28 169.98,43.29 		"/>
				<polygon class="st1" points="169.67,44 169.87,44 170.01,44.14 170.15,44 170.41,43.95 170.46,43.86 170.66,43.84 170.74,43.65 
					171.19,43.66 171.35,43.81 171.58,43.81 171.71,44 172.07,43.98 172.19,44.2 172.18,44.37 172.41,44.44 172.52,44.15 172.61,43.7 
					172.53,43.3 172.7,43.09 172.87,42.82 173.23,42.73 173.57,42.81 173.76,42.7 173.62,42.45 173.79,42.32 173.83,42.03 
					173.91,41.86 173.77,41.74 173.44,41.75 173.41,41.57 173.52,41.31 173.8,41.44 173.98,41.29 173.98,41.02 174.09,40.79 
					174.11,40.64 174.19,40.54 174.19,40.48 173.94,40.4 173.73,40.22 173.35,40.02 172.95,40.08 172.72,40.29 172.49,40.2 
					172.35,40.29 172.02,40.3 171.72,40.63 171.23,40.9 171.12,40.83 170.84,40.94 170.83,41.27 170.56,41.47 170.64,41.79 
					170.58,42.08 170.47,42.31 170.38,42.48 170.17,42.63 170.18,42.83 170.49,43.11 170.77,43.19 170.46,43.19 170.32,43.31 
					170.22,43.39 170.35,43.55 170.5,43.57 170.51,43.7 170.26,43.71 170.04,43.48 169.81,43.36 169.58,43.46 169.66,43.58 
					169.88,43.6 170.07,43.78 170.14,43.75 170.4,43.93 170.15,43.83 170,43.84 169.63,43.72 169.4,43.72 169.39,43.73 169.54,43.8 		
					"/>
				<polygon class="st1" points="169.14,44.86 169.45,44.98 169.5,45.2 169.88,45.52 170.04,45.51 170.21,45.64 170.4,45.73 
					170.41,46.1 170.7,46.25 170.84,46.15 171.01,46.15 171.13,46.28 171.3,46.32 171.61,46.71 171.88,46.73 172.13,46.91 
					172.25,46.83 172.44,46.83 172.44,46.68 172.33,46.59 172.33,46.4 172.25,46.28 172.39,46.09 172.47,45.86 172.56,45.86 
					172.71,45.49 172.55,45.23 172.56,45.07 172.35,44.65 172.44,44.45 172.18,44.37 172.19,44.2 172.07,43.98 171.71,44 
					171.58,43.81 171.35,43.81 171.19,43.66 170.74,43.65 170.66,43.84 170.46,43.86 170.41,43.95 170.15,44 170.01,44.14 169.87,44 
					169.67,44 169.54,43.8 169.39,43.73 169.11,43.95 168.93,44.28 169.08,44.4 		"/>
				<polygon class="st1" points="173.17,46.67 173.02,46.55 172.97,46.26 172.65,45.86 172.56,45.86 172.47,45.86 172.39,46.09 
					172.25,46.28 172.33,46.4 172.33,46.59 172.44,46.68 172.44,46.83 172.46,46.83 172.62,47.08 172.96,47.15 173.15,47.1 		"/>
				<polygon class="st1" points="158.1,21.92 157.99,21.91 158.15,22.09 		"/>
				<polygon class="st1" points="157.88,24.11 157.85,23.83 157.88,23.7 157.67,23.59 		"/>
				<path class="st1" d="M157.99,22.33V22.1l-0.26-0.18h-0.14l0.22,0.34L157.99,22.33z"/>
				<polygon class="st1" points="157.42,22.5 157.18,22.2 157.21,22.44 		"/>
				<polygon class="st1" points="157.91,23.09 157.82,22.96 157.7,23.05 157.89,23.27 		"/>
				<polygon class="st1" points="157.83,22.72 158.05,22.73 157.79,22.53 157.46,21.96 157.37,22.07 157.47,22.36 		"/>
				<polygon class="st1" points="153.82,42.07 153.54,42.3 153.19,42.38 153.07,42.67 153.29,42.67 153.34,42.83 153.97,42.62 
					153.5,42.93 153.3,43.1 153.64,43.1 154.07,42.86 154.05,43.03 153.68,43.2 153.88,43.2 153.82,43.33 154.15,43.25 154.32,43.37 
					154.78,43.31 155.21,43.19 155.54,42.96 155.43,42.7 155.69,42.72 155.62,42.87 155.88,42.87 156.13,42.61 156.31,42.62 
					156.38,42.37 157.13,42.28 157.19,42.12 157.31,42.31 157.47,42.16 157.63,42.22 158.02,42.22 157.75,41.88 157.94,41.79 
					158.15,41.54 158.11,41.32 158.32,41.08 158.4,40.81 158.29,40.21 158.13,40.1 158.32,39.98 158.32,39.71 158.15,39.44 
					158.2,39.16 158,39.02 158.1,38.86 158.26,38.89 157.97,38.69 157.77,38.65 157.52,38.15 157.13,37.95 156.97,38.07 156.9,38.44 
					156.7,38.48 156.13,37.95 156.43,37.35 156.7,37.31 156.78,37.07 156.96,36.98 157.09,36.84 156.96,36.86 157.24,36.65 
					157.48,36.51 157.19,36.36 156.99,36.18 157.08,36.37 156.81,36.37 156.85,36.68 156.66,36.96 156.68,36.77 156.79,36.64 
					156.66,36.41 156.48,36.45 156.59,36.59 156.38,36.61 156.26,36.49 155.9,36.59 155.89,36.76 155.77,36.77 155.69,36.99 
					155.87,37.06 155.82,37.17 155.63,37.17 155.65,37.28 155.38,37.35 155.46,37.56 155.75,37.56 155.7,37.64 155.94,37.56 
					156.09,37.56 155.79,37.89 155.41,38.03 155.54,38.16 155.16,38.23 154.96,38.14 154.79,38.33 154.71,38.08 154.09,37.99 
					154.09,38.1 153.75,38.01 153.69,38.38 153.86,38.21 153.89,38.44 153.97,38.48 154.05,38.7 153.9,38.71 153.87,38.58 
					153.54,38.59 153.92,38.86 154.19,38.8 154.28,39.01 153.94,39.08 153.89,39.23 153.99,39.36 153.61,39.37 153.7,39.6 
					153.56,39.65 153.76,39.77 153.93,39.72 153.83,39.84 154.14,39.78 154.22,40.11 154.95,40.1 154.72,40.34 154.55,40.24 
					154.27,40.7 154.39,40.68 154.17,40.99 153.7,41.32 153.89,41.31 154.14,41.15 154.3,41.24 154.62,41.25 154.83,41.04 
					154.85,41.13 155.12,41.16 154.52,41.32 154.08,41.34 153.97,41.51 153.68,41.61 153.78,41.75 153.71,41.88 153.84,41.91 
					153.63,41.95 153.44,41.8 153.37,41.9 153.31,41.83 152.95,42.02 152.99,42.12 		"/>
				<polygon class="st1" points="157.88,30.97 157.6,30.84 157.46,31.03 157.6,31.18 157.48,31.27 157.6,31.37 157.83,31.34 
					158.07,31.4 158.24,31.16 158.16,31.1 158.23,30.9 158.46,30.68 158.42,30.34 157.82,30.76 		"/>
				<polygon class="st1" points="157.5,34.26 157.74,34.08 157.52,34.07 		"/>
				<polygon class="st1" points="158.33,31.89 158.2,31.95 158.23,32.25 157.94,32.06 157.96,32.29 157.86,32.23 157.76,32.33 
					158.01,32.51 158.02,32.41 158.12,32.48 158.08,32.56 158.26,32.89 158.57,32.85 158.59,33.11 158.7,33.1 158.77,32.86 
					158.96,32.76 158.86,32.69 158.71,32.72 158.44,32.57 158.47,32.12 		"/>
				<polygon class="st1" points="157.72,31.43 157.61,31.49 157.56,31.6 157.47,31.65 157.63,31.78 157.93,31.52 		"/>
				<polygon class="st1" points="157.03,33.04 156.92,33.18 156.91,33.32 157.09,33.21 		"/>
				<polygon class="st1" points="157.4,32.08 157.42,31.93 157.09,31.89 156.98,31.95 157.17,32.14 		"/>
				<polygon class="st1" points="157.1,32.24 157.1,32.32 157.27,32.39 157.34,32.2 		"/>
				<polygon class="st1" points="156.78,37.07 156.7,37.31 156.43,37.35 156.13,37.95 156.7,38.48 156.9,38.44 156.97,38.07 
					157.13,37.95 157.52,38.15 157.77,38.65 157.97,38.69 158.26,38.89 158.31,38.89 158.29,38.7 158.42,38.73 158.62,38.56 
					158.64,38.37 158.96,38.41 159,38.19 158.81,38.15 158.88,37.94 158.81,37.78 158.95,37.76 159.11,38.23 159.02,37.63 
					158.66,37.61 158.86,37.47 158.47,36.91 158.44,36.66 158.24,36.55 157.83,36.51 157.58,36.68 157.42,36.7 157.34,36.79 
					157.09,36.84 156.96,36.98 		"/>
				<polygon class="st1" points="157.25,32.44 157.11,32.42 157.12,32.57 157.05,32.74 157.1,32.92 157.26,32.95 157.21,32.73 
					157.28,32.6 		"/>
				<polygon class="st1" points="164.24,44.97 163.89,45.15 164.06,45.19 164.24,45.32 164.42,45.29 164.42,45.2 164.51,45.05 
					164.38,45.06 		"/>
				<polygon class="st1" points="161.54,29.75 161.46,29.62 161.34,29.64 161.49,29.88 		"/>
				<polygon class="st1" points="161.76,29.08 161.63,29.1 161.74,29.21 		"/>
				<polygon class="st1" points="161.5,29.38 161.52,29.57 161.77,29.54 161.91,29.63 161.91,29.42 161.62,29.45 161.72,29.34 
					161.56,29.18 161.36,29.2 161.36,29.44 161.45,29.54 		"/>
				<polygon class="st1" points="163.93,26.45 164.04,26.66 164.19,26.71 164.13,26.5 164.25,26.37 164.21,26.22 164.33,26.1 
					164.14,26.04 163.99,25.96 163.91,26.04 163.97,26.13 163.95,26.26 163.67,26.23 163.51,26.3 163.61,26.44 		"/>
				<polygon class="st1" points="164.12,26.88 164.04,26.8 163.93,27.02 		"/>
				<polygon class="st1" points="158.78,32.15 158.82,32.44 158.82,32.54 159.16,32.49 158.94,32.6 158.91,32.66 158.98,32.7 
					159.2,32.63 159.15,32.68 159.23,32.79 159.08,32.72 159.01,32.77 158.97,32.91 159.05,32.97 158.93,32.99 158.84,33.12 
					158.99,33.17 159.03,33.28 158.78,33.19 158.74,33.35 158.84,33.42 158.78,33.52 158.66,33.6 158.43,33.61 158.33,33.72 
					158.41,33.77 158.62,33.76 158.75,33.8 158.72,33.86 158.57,33.86 158.77,34.06 158.84,34.03 158.95,34.15 159.5,33.59 
					159.41,33.76 159.49,33.81 159.33,33.87 159.19,34.19 159.21,34.26 159.04,34.59 159.11,34.63 158.97,35.01 159,35.26 
					158.9,35.41 158.98,35.53 159.08,35.48 158.9,35.76 158.87,36.14 158.74,36.27 158.75,36.36 159.04,36.36 159,36.16 159.12,35.88 
					159.11,35.7 159.26,35.52 159.15,35.04 159.25,35.04 159.59,34.64 159.34,35.02 159.31,35.3 159.4,35.37 159.42,35.21 
					159.59,35.07 159.67,35.33 159.81,35.01 159.78,34.8 159.89,34.74 159.84,35.02 160.13,35.24 159.88,35.17 159.8,35.53 
					159.85,35.79 160,35.83 160.09,36.06 159.87,36.29 159.65,36.87 159.7,37.13 159.5,37 159.51,37.28 159.78,37.66 159.7,37.32 
					159.88,37.26 160.35,37.6 160.36,37.33 160.17,37.18 160.29,37.15 160.67,37.38 160.94,37.34 160.94,37.23 161.18,37.24 
					161.26,37.01 161.92,37.04 161.48,37.15 161.21,37.91 161.54,38.51 161.71,38.41 161.71,38.72 161.92,38.46 162.19,38.5 
					162.1,38.83 162.18,38.88 161.91,39.09 162,39.45 161.85,39.73 162.01,39.94 162.21,40.11 162.37,40.12 162.26,40.2 162.08,40.21 
					161.93,39.99 161.78,40.05 161.9,40.27 162.04,40.35 161.83,40.3 161.66,40.13 161.23,40.27 161.03,40.24 160.59,40.46 
					160.36,40.78 160.04,40.98 159.9,41.18 160.1,41.14 160.21,41.18 160.24,41.06 160.69,40.94 160.65,41.18 160.81,41.34 
					160.64,41.47 160.74,41.65 160.84,41.68 160.55,42.24 160.33,42.32 160.12,42.48 160.01,42.48 159.74,42.66 159.54,42.66 
					159.21,42.87 159.47,42.9 159.49,43.09 159.3,43.18 159.63,43.23 159.55,43.31 159.67,43.38 159.86,43.33 160.07,43.2 
					160.42,43.09 160.45,43.25 160.73,43.31 160.5,43.38 160.48,43.51 160.85,43.51 160.85,43.44 161.04,43.39 161.24,43.61 
					161.41,43.82 161.85,43.81 161.95,43.64 162.15,43.55 162.44,43.45 162.54,43.29 162.78,43.18 162.46,43.55 162.13,43.86 
					162.12,44.23 161.9,44.22 161.72,44.28 161.52,44.17 160.96,44.11 160.56,44.22 160.57,44.42 160.4,44.58 160.18,44.58 
					160.14,45.04 159.91,45.26 159.85,45.38 159.59,45.42 159.52,45.69 159.41,45.69 159.35,45.83 159.03,46.06 158.89,46.01 
					158.67,46.16 158.67,46.37 158.91,46.38 158.92,46.2 159.21,46.28 159.33,46.49 159.47,46.35 159.41,46.25 159.54,46.07 
					159.61,46.16 159.77,46 159.88,46 159.96,45.8 160.21,45.87 160.41,45.78 160.56,45.8 160.68,45.74 160.79,45.89 160.92,45.88 
					161.11,46.04 161.32,46.02 161.28,45.88 161.45,45.81 161.49,45.68 161.45,45.44 161.6,45.3 161.72,45.28 161.77,45.19 
					162.25,45.08 162.5,45.1 162.79,45.3 162.9,45.26 163.22,45.27 163.38,45.33 163.47,45.13 163.76,44.98 163.96,45.04 
					164.24,44.85 164.44,44.9 164.54,44.88 164.68,44.78 164.72,44.88 164.89,44.98 165.08,44.85 165.52,44.84 165.8,44.78 
					166.06,44.87 166.2,44.89 166.4,44.73 166.62,44.69 166.81,44.51 166.94,44.5 167.08,44.53 167.05,44.38 167.36,44.16 
					167.56,44.12 167.57,43.92 167.52,43.78 167.58,43.62 167.22,43.63 166.97,43.73 166.83,43.75 166.59,43.67 166.51,43.65 
					166.59,43.57 166.66,43.56 166.68,43.51 166.47,43.46 166.29,43.53 166.54,43.35 166.71,43.37 166.92,43.27 166.86,43.09 
					166.66,43.09 166.81,42.96 166.92,42.85 167.04,42.95 167.24,42.81 167.31,42.69 167.22,42.67 167.28,42.58 167.06,42.55 
					167.15,42.41 167.29,42.45 167.33,42.55 167.49,42.34 167.64,42.28 167.66,41.89 167.81,41.52 167.69,41.38 167.63,41.04 
					167.18,40.69 166.56,40.66 166.17,40.67 166.14,40.97 166.03,41.13 165.83,40.9 165.58,40.84 165.97,40.46 165.97,40.22 
					165.66,39.72 165.54,39.7 165.27,39.54 165.16,39.35 165.02,39.38 164.92,39.41 164.76,39.35 164.66,39.35 164.85,39.3 
					164.97,39.33 165.16,39.29 165.29,39.35 165.4,39.46 165.53,39.43 165.67,39.46 165.3,39.01 165.13,38.79 165.24,38.62 
					165.34,38.58 165.16,38.49 165.08,38.35 165.01,38.34 164.79,37.95 164.47,37.79 164.02,37.68 164,37.51 163.9,37.44 
					163.76,36.96 163.59,36.69 163.48,36.06 163.35,35.85 163.22,35.85 162.84,35.29 162.62,35.24 162.44,35.1 162.16,34.98 
					162.04,35.09 161.82,35.23 161.5,35.13 161.35,35.15 161.1,35.07 161.02,34.93 161.17,35.01 161.48,35.03 161.73,34.95 
					161.81,34.75 162.07,34.76 162.31,34.58 162.07,34.47 162.05,34.33 161.95,34.25 161.62,34.42 161.57,34.36 161.82,34.17 
					162.13,34.19 162.31,34.03 162.34,33.89 162.46,33.81 162.64,33.47 162.75,33.3 162.74,33.19 162.86,32.96 162.82,32.87 
					162.93,32.55 163.15,32.37 163.15,32.16 162.83,31.87 162.76,31.92 162.22,31.94 161.89,31.88 161.79,31.95 161.63,31.95 
					161.42,31.88 161.28,31.88 161.26,31.95 161.05,32.02 160.84,32.14 160.75,32.13 160.6,32.25 160.55,32.21 160.75,31.98 
					160.96,31.64 160.81,31.72 160.62,31.65 160.73,31.58 160.77,31.42 161.3,31.02 161.45,30.77 161.63,30.7 161.72,30.47 
					161.63,30.36 161.73,30.2 161.72,30.09 161.45,30.09 161.35,30.21 161.18,30.16 160.92,30.27 160.69,30.25 160.49,30.33 
					160.37,30.33 160.26,30.44 160.28,30.32 160.18,30.28 159.96,30.47 160.02,30.3 159.72,30.16 159.67,30.35 159.57,30.43 
					159.6,30.6 159.54,30.6 159.55,30.81 159.33,30.86 159.43,31.04 159.34,31.23 159.23,31.23 159.5,31.46 159.59,31.63 159.32,31.5 
					159.22,31.58 159.03,31.45 159.02,31.54 159.07,31.67 159.01,31.76 158.91,31.56 158.81,31.77 158.92,31.89 158.84,32 
					158.99,32.18 159.15,32.18 158.97,32.25 		"/>
				<polygon class="st1" points="159.2,35.79 159.26,36.18 159.52,36.28 159.6,36.02 159.41,35.64 		"/>
				<path class="st1" d="M163.91,25.72h-0.18v0.17l0.2,0.11L163.91,25.72z"/>
				<polygon class="st1" points="159.63,35.43 159.51,35.32 159.5,35.5 159.64,35.62 		"/>
				<polygon class="st1" points="166.75,43.56 166.66,43.62 166.82,43.7 166.96,43.66 166.88,43.56 		"/>
				<polygon class="st1" points="158.48,35.67 158.37,35.24 157.99,35.4 157.99,35.74 158.24,35.58 158.21,35.84 		"/>
				<polygon class="st1" points="158.37,34.98 158.33,34.84 158.25,35.1 		"/>
				<polygon class="st1" points="158.69,34.53 158.92,34.35 158.82,34.13 158.66,34.11 158.44,33.87 158.2,34.04 158.54,34.21 
					158.35,34.31 158.4,34.4 158.17,34.56 158.67,34.45 		"/>
				<polygon class="st1" points="158.13,33.1 158.23,33.32 158.32,33.23 158.25,33.08 		"/>
				<polygon class="st1" points="158.71,35.28 158.92,34.83 158.46,35.26 158.55,35.5 		"/>
				<polygon class="st1" points="164.26,25.76 164.25,25.46 164.16,25.39 164.14,25.56 164.03,25.71 164.17,25.86 		"/>
				<polygon class="st1" points="159.94,38.45 159.84,38.8 160.06,38.77 160.38,38.44 160.33,38.3 160.38,38.08 		"/>
				<path class="st1" d="M160.47,40.42l0.31-0.25h-0.23l-0.1-0.23h-0.29c-0.03,0.08-0.05,0.15-0.06,0.23L160.47,40.42z"/>
				<polygon class="st1" points="158.37,33.33 158.38,33.46 158.5,33.33 		"/>
				<polygon class="st1" points="164.54,25.11 164.36,25.29 164.43,25.41 		"/>
				<polygon class="st1" points="157.83,33.99 158.01,33.91 158.06,33.71 		"/>
				<polygon class="st1" points="176.13,59.22 176.18,59.41 176.38,59.51 176.38,59.62 176.28,59.68 176.36,59.81 176.54,59.91 
					176.53,60.1 176.62,60.1 176.69,60.22 176.59,60.2 176.5,60.34 176.57,60.46 176.98,60.64 177.24,60.52 177.38,60.09 
					177.37,59.74 177.53,59.11 177.39,58.57 177.42,58.23 177.35,57.84 177.22,57.84 177.16,58.07 177.25,58.25 177.21,58.49 
					177.1,58.49 176.94,58.32 176.78,58.48 176.37,58.62 176.18,58.95 176.34,59.09 176.29,59.22 		"/>
				<polygon class="st1" points="174.96,55.95 174.55,55.95 174.12,55.66 174.06,54.96 173.73,54.61 173.92,54.39 174.23,54.35 
					174.31,53.91 174.06,53.67 174.02,53.34 174.14,53.2 174.16,53.21 174.12,52.98 173.96,52.86 173.86,52.53 173.73,52.27 
					173.33,52.25 173.14,52.42 173.27,52.75 172.94,52.89 172.65,52.86 172.62,52.64 172.77,52.56 172.93,52.58 172.93,52.31 
					172.99,51.9 173.34,51.35 173.54,51.27 173.8,50.93 174.05,50.82 174,50.57 173.72,50.42 173.89,50.21 174.2,50.19 174.28,50.37 
					174.53,50.39 174.96,50.26 174.84,50 174.6,49.85 174.58,49.46 174.72,48.99 174.9,48.82 174.9,48.61 175.05,48.2 175.35,47.89 
					175.09,47.72 174.84,47.72 174.51,47.57 174.27,47.65 174.1,47.58 173.86,47.58 173.64,47.66 173.41,47.46 173.41,47.3 
					173.15,47.1 173.15,47.1 172.96,47.15 172.62,47.08 172.46,46.83 172.44,46.83 172.25,46.83 172.13,46.91 171.88,46.73 
					171.61,46.71 171.3,46.32 171.13,46.28 171.01,46.15 170.84,46.15 170.7,46.25 170.41,46.1 170.4,45.73 170.21,45.64 
					170.04,45.51 169.88,45.52 169.5,45.2 169.45,44.98 169.14,44.86 169.08,44.4 168.93,44.28 168.88,44.35 168.41,44.52 
					168.29,44.43 167.9,44.65 167.81,44.92 167.87,45.23 167.79,45.73 167.4,46.11 167.4,46.28 166.97,46.4 166.75,46.41 166.5,46.33 
					165.99,46.6 165.87,46.84 165.96,47 166.2,47.08 165.88,47.31 165.49,47.39 164.96,47.32 164.73,47.2 164.53,47.31 164.45,47.13 
					164.28,46.99 164.36,46.78 164.14,46.67 163.92,46.76 163.6,46.75 163.46,46.69 163.55,46.99 163.5,47.13 163.95,47.54 
					163.87,47.68 163.93,47.88 163.88,48.09 164.02,48.27 164.05,48.51 163.58,48.44 163.38,48.52 163.18,48.46 162.95,48.52 
					162.85,48.43 162.56,48.68 162.18,48.18 161.97,48.11 161.65,48.18 161.39,48.41 161.26,48.34 161.11,48.48 160.97,48.39 
					160.7,48.42 160.52,48.6 160.12,48.63 159.93,48.84 160.03,49.02 160.27,48.93 160.5,49.01 160.57,49.1 160.31,49.05 
					160.16,49.07 160.25,49.32 160.33,49.13 160.49,49.19 160.53,49.36 160.38,49.42 160.14,49.52 160.15,49.59 160.38,49.59 
					160.48,49.88 160.45,50.04 160.73,49.85 160.92,49.91 161.09,49.88 161.52,50.05 161.61,50.2 161.78,50.2 162.08,50.4 
					162.29,50.2 162.43,50.23 162.38,50.39 162.45,50.48 162.67,50.34 162.8,50.48 162.7,50.74 162.82,50.94 162.99,50.95 
					163.24,50.78 163.52,50.81 163.69,51.05 163.48,50.93 163.23,50.94 163.08,51.15 163.22,51.21 163.27,51.48 163.15,51.7 
					163.2,51.88 163.43,51.91 163.76,52.33 164.09,52.38 164.41,52.56 164.4,52.8 164.52,52.99 164.42,53.26 164.36,53.29 
					164.3,53.52 164.52,53.57 164.93,53.89 165.25,54.66 164.9,54.32 164.81,53.99 164.53,53.85 164.4,53.94 164.26,54.62 
					164.28,55.11 164.49,55.25 164.32,55.38 164.25,56.3 164,57.1 163.69,57.29 163.92,57.41 163.95,57.48 164.12,57.51 164.16,57.8 
					164.13,58.01 164.52,57.96 165.06,58.17 165.31,58.45 165.59,58.32 165.89,58.63 166.26,58.62 166.44,58.72 166.68,58.48 
					167.29,58.46 167.52,58.58 167.89,58.55 168.28,58.76 168.92,58.7 169.36,58.97 169.53,59.03 169.52,58.9 169.42,58.51 
					169.52,58.05 169.55,57.83 169.86,57.55 170.33,57.05 170.48,57.04 170.63,57.15 170.94,57.19 171.27,57.39 171.49,57.39 
					171.7,57.22 171.89,57.2 172.71,57.71 172.93,57.91 173.54,57.94 173.79,57.72 173.74,57.59 173.97,57.3 174.82,56.66 
					174.87,56.65 174.78,56.36 		"/>
				<polygon class="st1" points="173.15,47.1 173.15,47.1 173.15,47.1 		"/>
				<polygon class="st1" points="172.96,47.15 173.15,47.1 173.15,47.1 		"/>
				<polygon class="st1" points="184.09,69.74 184.36,69.97 184.51,69.81 184.5,69.61 184.09,69.55 		"/>
				<polygon class="st1" points="182.48,52.77 182.39,52.56 182.7,52.11 182.7,52.11 182.5,51.94 182.06,51.97 181.24,51.82 
					180.57,51.43 180.61,51.16 180.14,51.19 179.85,51.12 179.15,51.52 178.7,51.33 178.69,51.34 178.43,51.66 178.56,52.09 
					178.04,52.21 177.98,52.72 177.75,52.52 177.51,52.54 176.93,52.38 176.93,52.75 176.65,53.24 176.52,52.97 176.09,52.75 
					176.13,52.44 175.81,52.25 175.33,53.09 174.98,52.93 174.45,53.32 174.14,53.2 174.02,53.34 174.06,53.67 174.31,53.91 
					174.23,54.35 173.92,54.39 173.73,54.61 174.06,54.96 174.12,55.66 174.55,55.95 174.96,55.95 174.78,56.36 174.87,56.65 
					175.52,56.54 175.75,56.24 175.76,56.02 176.46,55.63 177.36,55.86 177.62,56.04 178.02,56.16 178.13,56.37 178.21,56.52 
					178.32,56.72 178.56,57.12 178.57,57.36 178.79,57.49 178.78,57.87 179.1,58.02 179.3,58.28 179.67,58.62 179.71,58.87 
					180.1,58.88 180.34,59.21 180.4,59.42 180.57,59.48 181.12,60.19 181.65,60.59 181.91,60.63 182.13,60.78 182.18,61.01 
					182.43,61.01 182.6,60.84 182.88,60.95 183.14,60.98 183.43,61.51 183.6,61.62 183.76,61.56 183.98,61.64 183.96,61.82 
					184.2,61.81 184.44,61.83 184.62,62.06 184.59,62.32 184.52,62.44 184.66,62.57 184.93,62.59 185.04,62.81 185.39,62.9 
					185.55,62.8 185.74,62.93 185.86,63.36 185.92,63.77 186.07,63.95 186.18,64.43 186.33,64.65 186.32,64.9 186.18,65.07 
					186.07,65.08 186,65.12 186.03,65.39 186,65.65 185.84,65.83 185.67,65.92 185.61,66.02 185.62,66.23 185.91,66.52 186.3,66.49 
					186.5,66.23 186.55,65.94 186.91,65.65 186.94,65.02 187.17,64.79 187.41,64.72 187.5,64.53 187.43,64.41 187.47,64.06 
					187.4,63.91 187.02,63.55 186.8,63.52 186.71,63.38 186.71,63.18 186.91,63.05 186.95,62.84 186.94,62.67 187.09,62.51 
					187.18,62.18 187.31,62.1 187.49,62.08 187.76,62.21 187.85,62.33 188.26,62.34 188.41,62.43 188.38,62.63 188.49,62.88 
					188.68,63.11 188.91,63.21 188.93,63.14 189,63.08 188.97,62.86 189.08,62.69 189.12,62.34 189.02,62.16 188.8,62.01 
					188.36,61.89 188.09,61.61 187.67,61.3 186.61,60.73 186.1,60.61 185.82,60.61 185.69,60.39 185.7,60.27 186.03,60.03 
					186.09,59.85 185.85,59.73 185.52,59.78 185.31,59.72 184.8,59.72 184.63,59.62 184.38,59.57 184.18,59.37 183.79,59.06 
					183.59,58.76 183.35,58.51 183.16,58.25 183.15,57.97 183.04,57.91 183.02,57.67 182.14,56.78 181.98,56.56 181.65,56.38 
					181.06,56.07 180.91,55.86 180.88,55.48 180.72,55.14 180.84,55.04 181.05,54.73 180.86,54.49 180.72,54.21 180.82,54 
					181.12,53.96 181.4,53.72 181.69,53.72 181.89,53.52 182.07,53.43 182.37,53.51 182.31,53.05 		"/>
				<polygon class="st1" points="179.3,59.01 179.46,59.08 179.4,58.96 		"/>
				<polygon class="st1" points="185.44,66.39 185.49,66.03 185.29,65.79 184.95,66.12 184.81,66.09 184.51,65.93 184.23,66.24 
					183.61,66.2 183.11,66.35 182.76,66.28 182.5,66.11 182.2,66.14 182.04,66.27 181.95,66.15 181.62,66.3 181.58,66.74 181.87,67 
					182.15,66.95 182.66,67.3 182.94,67.37 183.19,67.65 183.8,67.87 183.92,67.79 184.19,67.99 184.24,68.2 184.86,68.45 
					185.12,68.41 185.1,68.07 185.23,67.9 185.2,67.61 184.95,67.27 185.2,66.62 		"/>
				<polygon class="st1" points="178.75,58.33 178.72,58.18 178.59,58.03 178.53,58.12 178.23,58.24 178.11,58.36 178.26,58.42 
					178.53,58.32 		"/>
				<polygon class="st1" points="175.95,61.2 175.97,61.08 176.09,60.95 175.98,60.86 175.93,60.99 175.85,61.03 175.86,61.21 		"/>
				<polygon class="st1" points="176.02,62.07 176.07,62.27 176.25,62.43 176.25,62.74 176.05,62.95 176.13,63.11 176.4,63.13 
					176.4,63.24 176.23,63.44 176.11,63.91 176.22,64.08 176.36,64.63 176.56,64.85 176.66,64.79 176.8,64.85 176.99,64.77 
					177.01,64.46 177.09,64.28 177.35,64.3 177.51,64.46 177.67,64.46 177.77,64.27 177.77,63.77 177.82,63.62 177.76,63.08 
					177.86,62.59 177.51,62.28 177.81,62.09 177.85,61.88 177.78,61.57 177.6,61.37 177.41,61.02 177.31,61.12 177.07,60.93 
					176.87,60.95 176.38,61.54 176.16,61.55 175.86,61.36 175.86,61.66 175.81,61.85 		"/>
				<polygon class="st1" points="182.39,52.56 182.7,52.11 182.7,52.11 		"/>
				<polygon class="st1" points="178.69,51.34 178.7,51.33 178.69,51.34 		"/>
				<polygon class="st1" points="182.7,52.11 182.7,52.11 182.7,52.11 		"/>
				<polygon class="st1" points="178.43,51.66 178.69,51.34 178.69,51.34 		"/>
				<polygon class="st1" points="169.43,64.11 169.55,63.76 169.85,63.48 169.58,63.47 169.26,63.42 169,63.59 168.94,63.83 
					169.22,63.91 		"/>
				<polygon class="st1" points="170.86,63.36 170.93,63.22 170.66,62.94 170.27,63.02 170.21,63.2 170.65,63.24 		"/>
				<path class="st1" d="M168.92,58.7l-0.63,0.06l-0.39-0.22h-0.37l-0.24-0.12h-0.61l-0.23,0.24l-0.19-0.1h-0.37l-0.3-0.31l-0.27,0.13
					l-0.26-0.28l-0.53-0.21h-0.4v-0.22v-0.28h-0.17v-0.07l-0.24-0.12l-0.11,0.07h-0.2l-0.13,0.19l-0.72-0.42h-0.23l-0.25,0.25
					l-0.48-0.09l-0.09-0.22h-0.49l-0.65,0.28l-0.44-0.11l-1-0.15l-0.35-0.19l-0.09-0.13l-0.43,0.13l-0.35,0.14l-0.32-0.13h-0.26
					l-0.25,0.2l-0.29-0.36l-0.33-0.07l-0.21,0.14l-0.07-0.09l-0.49,0.28c0,0,0.11,0.36,0.19,0.3c-0.11,0.11-0.25,0.17-0.4,0.17
					c-0.07,0.01-0.15,0.01-0.22,0c-0.06,0-0.1-0.07-0.16-0.08c-0.15,0.02-0.3,0.07-0.43,0.15c-0.12,0.04-0.2,0.15-0.22,0.27
					c0,0.12,0.03,0.24,0.1,0.34l0.17-0.06c0,0.05,0,0.11,0,0.16s0.07,0,0.11,0s-0.05,0.25-0.07,0.37h0.1l0.22-0.21
					c-0.03,0.09-0.05,0.19-0.06,0.29l0.1,0.1l-0.16,0.16h0.23l-0.32,0.28v0.08l0.6-0.1l0.23,0.06v0.3l0.11,0.19l0.45-0.23l0.74,0.15
					l0.26-0.25l0.64,0.08v0.33l0.27,0.39l-0.07,0.27h-0.2l-0.51,0.49l0.06,0.35v0.86l-0.29,0.29l0.23,0.24l-0.35,0.48h-0.23
					l-0.33,0.08l0.35,0.67l0.31,0.19v0.55l-0.43,0.43l0.2,0.39H157v0.25l-0.33,0.27l-0.31,0.59l0.19,0.31v0.32l0.22,0.06h0.4
					l0.55,0.53l-0.06,0.09l0.27,0.62l0.44,0.44l0.44,0.07l0.4-0.21v-0.22l0.19-0.17l0.5-0.06l0.42-0.42l0.48-0.06l0.23-0.12l0.55,0.15
					h0.37l0.09-0.11h0.24l0.22,0.17l0.22-0.18c0.16-0.15,0.07-0.23,0.3-0.06s0.34,0.21,0.48,0c0.08-0.1,0.13-0.22,0.17-0.34
					c0-0.19,0-0.31,0.17-0.42c0.13-0.06,0.26-0.12,0.4-0.16c0.19-0.06,0.39-0.1,0.59-0.11c0.26,0,0.18-0.19,0.17-0.38
					c0-0.13,0.04-0.26,0.1-0.37c0.11-0.13,0.2-0.27,0.28-0.41c0.06-0.13,0-0.33,0.1-0.43s0.3-0.07,0.42-0.14
					c0.11-0.08,0.21-0.18,0.3-0.29c-0.09-0.15-0.2-0.29-0.31-0.42c-0.07-0.05-0.14-0.11-0.21-0.18c0-0.07,0-0.17-0.08-0.24l-0.23-0.38
					c0.12-0.16,0.24-0.33,0.34-0.5c0.09-0.17,0.18-0.33,0.29-0.49c0.08-0.11,0.18-0.11,0.28-0.19c0.18-0.2,0.33-0.44,0.43-0.69
					l0.15,0.06h-0.05l0,0c0.14-0.09,0.17-0.1,0.21-0.25s0-0.19-0.1-0.31c0.22-0.12,0.44-0.25,0.64-0.4h0.52l0.43-0.18
					c0.08-0.09,0.16-0.19,0.23-0.29l0.51-0.3l0.14-0.26v-0.33l-0.07-0.43l0.21-0.14v-0.15l-0.17-0.06L168.92,58.7z"/>
				<polygon class="st1" points="167.94,64.79 168.09,64.64 167.98,64.47 167.63,64.58 167.59,64.82 167.78,65 		"/>
				<polygon class="st1" points="156.29,66.78 156.6,66.19 156.94,65.92 156.97,65.67 156.68,65.65 156.49,65.26 156.91,64.83 
					156.9,64.28 156.58,64.09 156.23,63.42 156.56,63.34 156.8,63.38 157.15,62.9 156.91,62.66 157.21,62.37 157.25,61.51 
					157.19,61.16 157.69,60.67 157.89,60.67 157.97,60.4 157.69,60.01 157.66,59.68 157.01,59.6 156.76,59.85 156.02,59.7 
					155.57,59.93 155.45,59.74 155.49,59.44 155.26,59.38 154.66,59.48 154.69,59.76 154.89,60.22 154.8,61.07 154.85,61.2 
					154.75,61.58 154.94,61.8 154.8,62 154.64,62.34 154.62,62.78 154.31,63.22 154.31,63.48 153.95,63.99 153.77,64.78 153.78,64.97 
					154.06,64.97 154.19,64.78 154.46,64.6 154.42,64.78 154.49,64.92 154.09,65.11 154.07,65.4 154.2,65.53 154.4,65.34 
					154.75,65.35 154.61,65.53 154.7,65.89 154.57,66.21 154.59,66.92 154.45,67.43 154.35,67.59 154.45,67.67 154.85,67.39 
					155.41,67.62 155.67,67.77 156.07,67.55 156.43,67.52 156.49,67.4 156.5,67.41 156.49,67.09 		"/>
				<polygon class="st1" points="195.28,68.54 195.26,68.66 195.36,68.66 		"/>
				<polygon class="st1" points="199.95,66.77 200.06,66.9 200.19,66.9 200.26,66.82 200.41,66.75 200.38,66.65 200.31,66.63 
					200.26,66.69 200.1,66.55 199.95,66.54 199.72,66.72 199.66,66.82 199.81,66.78 		"/>
				<polygon class="st1" points="192.12,66.49 192.08,66.64 192.26,66.82 192.41,66.86 192.45,66.77 192.61,66.8 192.51,66.68 
					192.39,66.51 192.22,66.44 		"/>
				<polygon class="st1" points="200.73,69.89 200.81,70.06 200.85,70.33 200.94,70.29 201.03,70.04 200.91,69.87 200.87,69.71 		"/>
				<polygon class="st1" points="196.03,64.51 195.99,64.33 195.85,64.29 195.77,64.31 195.99,64.6 		"/>
				<polygon class="st1" points="195.11,64.63 194.92,64.79 195.03,64.82 195.27,64.81 195.4,64.92 195.45,65 195.57,65.06 
					195.68,65.2 195.84,65.24 195.95,65.41 196.19,65.54 196.37,65.53 196.44,65.64 196.61,65.9 196.72,66 196.69,66.15 196.77,66.28 
					196.97,66.42 197.08,66.35 197.21,66.42 197.3,66.15 197.06,66.12 196.99,66.18 196.81,66.01 196.83,65.81 196.79,65.67 
					196.78,65.56 196.67,65.35 196.35,65.03 196.32,65.07 196.15,65.06 196.12,65.01 195.89,64.89 195.65,64.8 195.45,64.58 		"/>
				<polygon class="st1" points="196.27,70.01 196.25,70.2 196.17,70.37 196.19,70.57 196.39,70.66 196.84,70.6 197.02,70.65 
					197.21,70.59 197.47,70.67 197.77,70.84 197.8,71.01 198.14,71 198.41,70.82 198.73,70.85 199.22,70.84 199.57,70.85 
					199.76,70.73 199.84,70.53 199.8,70.35 199.8,70.23 199.73,70.34 199.72,70.48 199.55,70.61 199.44,70.51 199.29,70.56 
					199.15,70.55 199.18,70.42 199.11,70.24 198.98,70.25 198.61,70.2 198.33,70.07 197.95,70.09 197.63,70.29 197.38,70.35 
					197.18,70.24 197.08,70.14 196.92,70.16 197.03,70.06 196.94,69.9 196.73,69.91 196.77,70.01 196.84,70.03 196.76,70.1 
					196.56,70.11 196.51,69.91 196.44,69.89 196.42,70 196.45,70.14 196.35,70.17 		"/>
				<polygon class="st1" points="195.62,64.24 195.52,64.32 195.61,64.43 195.68,64.3 		"/>
				<polygon class="st1" points="190.82,63.28 190.59,63.37 190.61,63.51 190.75,63.56 190.77,63.64 191.01,63.9 191.23,64 
					191.29,63.95 191.26,63.86 191.09,63.79 190.94,63.62 190.95,63.36 		"/>
				<polygon class="st1" points="200.95,69.59 200.95,69.46 200.87,69.58 200.91,69.64 		"/>
				<polygon class="st1" points="191.74,65.74 191.74,66.03 191.86,66.15 191.93,66.08 191.93,65.94 192,66.01 192,66.16 
					192.18,66.19 192.34,66.28 192.43,66.14 192.37,66.07 192.34,65.94 192.22,65.82 192.25,65.71 192.17,65.52 192.02,65.39 
					192.01,65.72 191.9,65.7 		"/>
				<polygon class="st1" points="202.19,68.86 202.28,68.79 202.29,68.65 202.12,68.72 201.82,68.85 201.52,69.09 201.5,69.24 
					201.55,69.29 201.48,69.44 201.56,69.52 201.67,69.5 201.79,69.36 201.94,69.22 202.07,69.21 202.06,69.12 202.14,69.01 		"/>
				<polygon class="st1" points="192.15,65.28 192.23,65.18 192.19,64.95 192.1,64.97 191.98,65.19 192,65.28 192.07,65.31 		"/>
				<polygon class="st1" points="199.28,61 199.22,60.71 199.57,60.5 199.59,60.16 199.32,60.05 199.37,59.69 199.21,59.69 
					198.89,59.94 198.87,60.25 198.98,60.48 198.8,60.63 198.23,60.59 197.96,60.72 197.73,60.58 197.47,60.58 197.28,60.73 
					197.03,60.71 196.99,60.48 196.64,60.49 196.31,60.43 196.07,60.66 195.73,60.74 195.28,60.74 195.15,60.67 195.14,60.68 
					194.97,60.82 194.73,60.83 194.42,61.03 193.75,61 193.46,61.15 193.44,61.27 193.06,61.41 192.53,61.74 192.52,61.77 
					192.47,62.12 192.26,62.51 191.72,62.68 191.7,62.99 191.52,63.39 191.34,63.48 191.37,63.51 191.39,63.89 191.88,64.26 
					192.16,64.66 192.29,64.69 192.26,64.82 192.64,65.35 192.73,65.72 192.9,65.79 193.13,65.51 193.33,65.77 193.65,65.81 
					193.78,65.6 194.01,65.63 194.37,65.84 194.58,65.74 194.62,65.92 194.79,65.91 194.94,66.02 195.22,66.08 195.02,66.2 
					194.84,66.38 194.65,66.23 194.41,66.17 193.88,65.82 193.64,65.9 193.42,66.03 193.18,65.92 192.99,66.17 192.84,66.21 
					192.75,66.44 193.04,66.77 193.33,66.91 193.62,67.18 193.65,67.37 193.54,67.51 193.56,67.76 193.8,68.08 193.97,68.26 
					194.04,68.09 193.98,67.96 194.08,67.72 194.17,68.02 194.53,68.17 194.61,68.36 194.56,68.59 194.71,68.77 194.71,68.4 
					194.85,68.09 195.07,68.09 195.17,68.33 195.57,68.6 195.41,68.32 195.45,68.14 195.31,67.87 195.12,67.43 194.96,67.18 
					194.97,67.08 195.13,67.06 195.43,67.21 195.34,67.32 195.43,67.42 195.58,67.26 195.89,67.36 195.9,67.26 195.78,67.17 
					195.75,67.06 195.64,67.03 195.42,66.88 195.44,66.75 195.17,66.55 195.43,66.43 195.66,66.44 195.81,66.32 196.18,66.58 
					196.22,66.69 196.47,66.72 196.54,66.56 196.32,66.24 196.38,65.93 196.29,65.76 195.66,65.37 195.47,65.32 195.38,65.17 
					195.2,65.17 195.09,65.03 194.83,65 194.56,64.77 194.85,64.72 195.01,64.53 195,64.39 194.73,64.32 194.88,64.13 194.87,63.98 
					195.07,64.06 195.24,64.19 195.17,64.34 195.19,64.48 195.34,64.45 195.44,64.13 195.26,63.92 194.85,63.42 194.67,63.28 
					194.63,63.1 194.32,62.83 194.43,62.69 194.38,62.16 194.55,61.88 194.88,61.81 194.92,62.08 194.76,62.08 194.79,62.22 
					195.22,62.41 195.25,62.74 195.52,62.96 195.82,62.95 195.6,62.8 195.49,62.6 195.53,62.41 195.81,62.51 196.02,62.8 
					196.21,62.88 196.31,62.7 196.1,62.55 195.92,62.48 195.93,62.32 196.43,62.34 196.62,62.53 196.7,62.44 196.41,62.17 
					196.11,62.13 195.87,61.84 196.01,61.68 196.28,61.76 196.49,61.64 196.59,61.28 196.79,61.21 197.09,61.44 197.31,61.45 
					197.56,61.2 197.56,61.07 197.68,61.07 197.86,61.28 198.41,61.28 198.83,61.39 199.12,61.32 		"/>
				<polygon class="st1" points="195.31,69.09 195.3,69.23 195.43,69.3 195.53,69.1 195.39,68.92 195.35,68.74 195.3,68.8 
					195.23,68.96 		"/>
				<path class="st1" d="M197.13,67.47l0.12-0.07v-0.12h-0.12V67.47z"/>
				<polygon class="st1" points="197.26,64.71 197.15,64.58 197.05,64.62 197.19,64.84 197.26,64.86 197.33,65.01 197.42,64.98 
					197.4,64.76 		"/>
				<polygon class="st1" points="197.25,67.8 197.25,67.63 197.13,67.72 		"/>
				<polygon class="st1" points="197.95,62.82 197.85,62.74 197.64,62.75 197.57,62.85 197.63,63.05 197.76,63.16 197.86,63.14 
					198.02,63.21 198.06,62.95 198.22,62.77 198.08,62.69 		"/>
				<polygon class="st1" points="198.06,67.85 198.17,67.96 198.3,67.78 198.24,67.64 198.11,67.64 		"/>
				<polygon class="st1" points="197.44,66.44 197.37,66.55 197.49,66.66 197.78,66.94 197.89,66.94 197.9,66.8 197.67,66.59 
					197.56,66.43 		"/>
				<polygon class="st1" points="197.09,61.55 196.99,61.59 196.91,61.83 197.06,61.82 197.13,61.87 197.3,61.78 197.28,61.64 		"/>
				<path class="st1" d="M199.75,68.6c0.05-0.03,0.11-0.06,0.17-0.08l0.09-0.14h-0.11l-0.21,0.08l-0.06,0.1L199.75,68.6z"/>
				<polygon class="st1" points="197.29,68.51 197.33,68.37 197.15,68.37 197.02,68.55 197.14,68.57 		"/>
				<polygon class="st1" points="196.91,67.07 196.95,67.15 197.09,67.1 196.99,66.96 		"/>
				<polygon class="st1" points="198.95,65.82 199.09,65.93 199.28,65.84 199.33,65.63 199.27,65.29 199.21,65.23 199.04,65.16 
					198.88,65.24 198.88,65.33 199.06,65.46 199.06,65.66 198.94,65.71 		"/>
				<polygon class="st1" points="199.56,63.9 199.27,63.94 199.13,64.03 198.82,64.14 198.7,64.34 198.9,64.51 198.99,64.52 
					199.11,64.49 199.14,64.33 199.21,64.17 199.4,64.17 199.38,64.33 199.27,64.43 199.19,64.54 199.38,64.62 199.65,64.6 
					199.65,64.32 199.61,64.13 199.55,64.12 199.6,63.96 		"/>
				<polygon class="st1" points="198.45,61.93 198.27,61.95 198.22,62.04 198.48,62.15 198.63,62.09 198.62,61.97 		"/>
				<polygon class="st1" points="199.44,67.02 199.48,66.88 199.2,66.94 199.16,67.08 199.25,67.19 		"/>
				<polygon class="st1" points="198.5,67.9 198.63,67.91 198.75,67.75 198.72,67.61 198.6,67.58 198.41,67.75 		"/>
				<polygon class="st1" points="198.43,67.31 198.55,67.23 198.43,67.2 		"/>
				<polygon class="st1" points="198.03,66.97 198.15,67.1 198.3,67.16 198.28,67.04 198.16,66.92 		"/>
				<polygon class="st1" points="195.15,60.67 195.14,60.67 195.14,60.68 		"/>
				<polygon class="st1" points="195.14,60.68 195.14,60.67 194.97,60.82 		"/>
				<polygon class="st1" points="192.52,61.77 192.53,61.74 192.52,61.77 		"/>
				<polygon class="st1" points="192.47,62.12 192.52,61.77 192.52,61.77 		"/>
				<polygon class="st1" points="223.69,60.56 223.97,60.83 223.87,61.14 223.89,61.41 224.44,61.86 224.46,62.13 224.28,62.33 
					224.46,62.74 225.06,63.07 225.45,63.09 225.76,63.38 225.43,63.46 225.63,63.81 225.53,63.93 225.53,64.22 225.51,64.22 
					225.7,64.29 225.94,64.19 225.99,64.03 226.08,63.9 226.22,63.89 226.45,63.57 226.61,63.5 226.78,63.27 226.98,63.23 
					227.23,63.04 227.37,63.05 227.4,63.13 227.52,63.15 227.64,63.35 227.82,63.53 227.65,63.67 227.73,63.81 228.04,64 227.6,64.3 
					228.05,64.8 228.28,64.9 228.36,65.06 228.59,65.11 228.7,65.03 228.71,64.52 228.64,64.4 228.67,64.19 228.57,63.84 
					228.65,63.63 228.76,63.53 228.94,63.72 228.86,64.02 228.94,64.17 229.02,63.99 229.02,63.53 229.15,63.41 229.15,63.22 
					229.06,63.07 229.09,62.83 229.22,62.66 229.17,62.38 229.14,62.03 229.55,61.69 229.91,61.67 230.09,61.53 230.3,61.56 
					230.1,61.28 229.75,61.13 229.39,61.14 229.1,60.92 229.05,60.7 228.59,60.38 228.42,60 228.4,59.74 227.98,59.2 227.69,58.99 
					227.68,59.01 227.68,59.01 227.22,59.56 226.84,59.77 226.72,60.01 226.09,59.95 225.92,59.62 225.29,59.11 224.9,59.07 
					224.77,59.56 225.12,59.77 225.31,60.05 225.24,60.54 224.75,60.28 224.24,60.26 223.48,59.83 222.97,60.03 222.95,60.26 
					223.21,60.5 		"/>
				<polygon class="st1" points="223.18,63.08 223.35,63.07 223.44,63.31 223.42,63.51 224.01,63.83 224.06,64.09 224.41,64.27 
					224.76,64.28 225.14,64.49 225.22,64.28 224.61,63.36 224.28,63.27 224.07,62.84 223.83,62.84 223.68,62.97 223.32,62.64 
					223.11,62.76 222.88,62.77 222.93,62.86 222.93,62.86 222.98,62.86 		"/>
				<polygon class="st1" points="227.68,59.01 227.22,59.56 227.68,59.01 		"/>
				<polygon class="st1" points="248.06,84.22 247.94,83.89 248.14,83.61 248.07,83.38 248.21,83.11 248.62,82.95 248.75,82.8 
					249.41,82.61 249.76,82.74 249.95,82.56 249.91,82.03 249.56,81.8 249.23,81.82 249.16,81.57 249.14,81.2 249.04,80.89 
					249.03,80.44 248.67,80.4 248.63,80.25 248.37,80.15 247.93,80.11 247.81,79.98 247.47,79.79 247.12,79.42 246.96,79.11 
					246.26,78.17 246.26,78.17 247.27,76.79 247.38,76.63 247.24,76.09 247.27,75.72 247.06,75.25 245.88,75.23 245.84,74.74 
					245.71,74.5 245.8,74.31 245.61,73.68 245.25,72.98 245.32,72.63 245.74,72.11 245.62,72.11 245.16,72 245.16,71.74 245.07,71.25 
					245,71.19 245.26,70.83 245.03,70.66 244.92,70.47 245.21,70.39 245.56,70.16 245.54,69.99 245.61,69.92 245.43,69.69 
					245.53,69.48 245.5,69.3 245.52,68.92 245.5,68.88 245.4,68.67 245.4,68.47 245.29,68.14 245.38,67.93 245.17,67.55 244.83,67.41 
					244.24,67.36 243.69,66.6 243.18,66.48 242.9,66.55 242.77,66.45 242.7,66.05 242.41,66 241.87,65.78 241.66,65.93 241.44,65.94 
					240.65,65.44 240.23,65.32 239.75,64.93 239.44,64.94 239.18,64.83 238.91,64.9 238.81,65.22 238.31,65.12 237.73,65.22 
					237.17,65.7 236.94,65.72 236.77,65.94 236.65,66.31 235.99,66.34 235.71,66.51 235.84,66.86 236.04,67.16 235.95,67.51 
					235.64,67.45 234.87,67.38 234.19,67.47 233.3,67.72 232.9,67.72 232.08,67.49 231.78,67.46 231.1,67.19 230.89,66.94 
					230.81,66.64 230.61,66.63 230.3,66.43 229.98,66.55 229.75,66.47 229.43,66.47 229.17,66.19 228.96,66.16 228.88,66.03 
					228.94,65.72 228.9,65.4 228.7,65.11 228.7,65.03 228.59,65.11 228.36,65.06 228.28,64.9 228.05,64.8 227.6,64.3 228.04,64 
					227.73,63.81 227.65,63.67 227.82,63.53 227.64,63.35 227.52,63.15 227.4,63.13 227.37,63.05 227.23,63.04 226.98,63.23 
					226.78,63.27 226.61,63.5 226.45,63.57 226.22,63.89 226.08,63.9 225.99,64.03 225.94,64.19 225.7,64.29 225.51,64.22 
					225.22,64.28 225.22,64.28 225.14,64.49 224.76,64.28 224.41,64.27 224.06,64.09 224.01,63.83 223.42,63.51 223.44,63.31 
					223.35,63.07 223.18,63.08 222.98,62.86 222.93,62.86 222.78,62.98 222.65,63.34 222.27,63.37 222.28,63.51 222.42,63.77 
					222.55,64.28 222.51,64.53 222.52,64.9 222.83,64.94 222.92,65.11 222.75,65.52 222.76,65.91 222.73,66.06 223.1,66.2 
					223.39,66.72 223.51,67.04 223.44,67.27 223.47,67.26 223.73,67.28 223.85,67.62 223.85,67.86 223.97,68.13 224.18,68.17 
					224.31,68.4 224.44,68.71 224.68,68.85 224.88,68.88 225.34,69.14 225.54,69.19 225.83,69.16 226.02,69.25 226.13,69.33 
					226.05,69.39 225.79,69.48 225.63,69.51 225.66,69.86 225.76,69.93 225.76,70.41 225.6,70.51 225.42,70.47 225.37,70.89 
					225.23,71.02 225.22,71.52 225.14,71.7 225.23,71.84 225.12,71.98 225.12,72.17 225.31,72.19 225.45,72.37 225.74,72.43 
					225.8,72.63 226.1,72.88 225.98,73.16 226.06,73.26 226.01,73.42 226.29,73.64 226.43,73.54 226.66,73.52 227.66,74.18 
					227.81,74.13 227.97,74.24 228.23,74.72 228.48,74.86 228.76,75.46 228.48,75.71 228.46,76.11 228.57,76.47 229,76.47 
					229.08,77.31 229.32,77.47 229.61,77.59 229.71,77.67 229.83,77.62 229.82,77.7 230.03,77.97 230.19,77.96 230.34,77.83 
					230.35,77.57 230.15,77.41 230.31,77.43 230.5,77.42 230.57,77.33 230.52,77.49 230.48,77.64 230.78,77.78 230.9,77.73 
					231.04,77.98 231.17,77.99 231.59,77.64 231.73,77.71 232.02,78.09 232.05,78.35 232.54,78.94 232.58,79.36 232.72,79.45 
					232.93,79.42 233.07,79.67 232.97,79.67 232.88,79.6 232.82,79.68 233.06,79.88 233.18,79.84 233.23,80.05 233.64,80.96 
					233.92,81.13 234.41,81.08 234.76,81.19 234.9,81.34 235.33,81.36 235.39,81.45 235.65,81.47 235.69,81.6 235.52,81.74 
					235.92,82.16 236.24,82.23 236.45,82.37 236.68,82.4 237.15,82.82 237.28,82.75 237.61,82.7 238.06,82.81 238.59,83.17 
					239.06,82.78 239.62,82.44 239.63,82.28 239.66,82.4 239.94,82.39 240.3,82.13 240.57,82.05 241.03,82.11 241.03,82.2 
					241.16,82.19 241.19,82.33 241.43,82.68 241.57,83.17 241.84,83.68 241.86,84.04 242.01,84.14 242.07,84.28 242.78,84.28 
					243.08,84.26 243.33,84.46 243.65,84.19 243.76,84.2 244.12,84.54 244.87,84.49 245.28,84.67 245.88,84.69 246.11,84.78 
					246.24,84.73 246.43,84.9 246.51,84.89 246.57,84.65 246.75,84.62 246.88,84.86 247.22,84.98 247.67,85.14 247.87,85.03 
					247.93,84.92 248.01,84.92 248,84.7 		"/>
				<polygon class="st1" points="245.4,68.67 245.5,68.88 245.5,68.88 		"/>
				<polygon class="st1" points="246.26,78.17 246.26,78.17 246.26,78.17 		"/>
				<polygon class="st1" points="246.26,78.17 246.26,78.17 247.27,76.79 		"/>
				<polygon class="st1" points="245.5,68.88 245.52,68.92 245.5,68.88 		"/>
				<polygon class="st1" points="223.11,62.76 223.32,62.64 223.68,62.97 223.83,62.84 224.07,62.84 224.28,63.27 224.61,63.36 
					225.22,64.28 225.22,64.28 225.51,64.22 225.53,64.22 225.53,63.93 225.63,63.81 225.43,63.46 225.76,63.38 225.45,63.09 
					225.06,63.07 224.46,62.74 224.28,62.33 224.46,62.13 224.44,61.86 223.89,61.41 223.87,61.14 223.97,60.83 223.69,60.56 
					223.21,60.5 222.95,60.26 222.95,60.26 222.88,60.19 222.12,60.2 221.94,60.16 221.34,60.3 220.92,60.45 221.13,60.68 
					221.15,60.84 221.39,60.9 221.54,61.18 221.45,61.6 221.47,62.14 221.86,62.37 222.28,62.39 222.54,62.37 222.77,62.6 
					222.88,62.77 		"/>
				<polygon class="st1" points="224.61,63.36 225.22,64.28 225.22,64.28 		"/>
				<polygon class="st1" points="225.51,64.22 225.51,64.22 225.53,64.22 		"/>
				<polygon class="st1" points="223.21,60.5 222.95,60.26 222.95,60.26 		"/>
				<polygon class="st1" points="225.22,64.28 225.51,64.22 225.51,64.22 		"/>
				<polygon class="st1" points="225.22,64.28 225.22,64.28 225.22,64.28 		"/>
				<polygon class="st1" points="200.72,59.54 200.35,59.25 199.96,59.25 199.8,59.42 199.59,59.44 199.37,59.68 199.37,59.69 
					199.32,60.05 199.59,60.16 199.57,60.5 199.22,60.71 199.28,61 199.12,61.32 198.83,61.39 198.84,61.39 198.96,61.63 
					199.17,61.76 199.32,61.72 199.49,61.77 199.74,61.74 199.48,61.91 199.32,61.92 199.19,62.32 199.21,62.51 199.77,62.03 
					200.48,61.67 200.62,61.3 200.9,61.19 201.36,61.2 201.48,61.09 201.79,61.09 201.97,61.19 202.31,61.22 202.54,60.98 
					202.54,60.81 202.27,60.66 201.96,60.34 201.66,60.3 201.25,59.94 201.22,59.46 200.91,59.38 		"/>
				<polygon class="st1" points="201.51,68.4 201.41,68.49 201.53,68.53 201.65,68.5 201.62,68.4 		"/>
				<polygon class="st1" points="212.88,69.2 213.14,69.1 213.11,68.8 213.29,68.69 213.3,68.19 213.38,67.97 213.77,68.07 214,68.13 
					214.65,67.87 214.81,67.85 215,67.74 215.7,67.67 215.96,67.74 216.09,67.86 216.53,67.95 217.15,67.97 217.2,67.85 217.55,67.75 
					217.76,67.52 218.24,67.38 218.58,67.38 218.84,67.33 219.52,67.37 220.06,67.18 220.44,67.17 220.54,67.26 220.91,66.96 
					221.24,66.96 221.37,66.85 221.93,66.85 222.39,66.97 222.75,66.87 222.93,66.99 222.92,67.25 223.14,67.36 223.44,67.27 
					223.51,67.04 223.39,66.72 223.1,66.2 222.73,66.06 222.76,65.91 222.75,65.52 222.92,65.11 222.83,64.94 222.52,64.9 
					222.51,64.53 222.55,64.28 222.42,63.77 222.28,63.51 222.27,63.37 222.65,63.34 222.78,62.98 222.93,62.86 222.93,62.86 
					222.87,62.77 222.77,62.6 222.54,62.37 222.28,62.39 221.86,62.37 221.47,62.14 221.45,61.6 221.54,61.18 221.39,60.9 
					221.15,60.84 221.13,60.68 220.91,60.45 220.9,60.42 220.65,60.37 220.09,59.89 219.86,59.83 219.67,60 219.5,60.02 219.15,59.89 
					219.02,60.05 218.87,60.01 218.81,59.76 218.64,59.74 218.58,59.83 218.42,60.18 218.08,60.38 217.63,60.61 217.55,60.81 
					217.13,60.84 216.97,60.98 216.41,60.85 216.25,60.75 216.06,60.75 215.97,60.7 215.71,60.78 215.22,60.81 214.65,61.05 
					214.19,60.95 213.88,60.74 213.71,60.85 213.19,60.6 212.93,60.55 212.46,60.24 212.31,60.24 212.19,60.41 211.97,60.36 
					211.73,60.04 211.67,59.72 211.46,59.53 211.3,59.56 210.98,59.89 210.86,59.84 210.74,59.92 210.25,59.47 210.21,59.21 
					210.13,59.18 209.8,59.34 209.37,59.34 209.16,59.27 208.9,59.34 208.24,59.31 207.91,59.38 207.28,59.66 207,59.69 206.5,59.78 
					206.36,59.97 206.12,60.03 205.9,60.27 205.77,60.34 205.64,60.67 205.52,60.75 205.54,60.89 205.06,60.92 204.34,60.66 
					204.12,60.66 203.95,60.78 203.66,60.72 203.25,60.82 203.04,60.75 202.71,60.84 202.65,61.02 202.89,61.44 203.27,61.45 
					203.59,61.5 203.53,61.64 202.98,61.65 202.5,61.79 202.33,62.02 202.42,62.15 202.68,62.07 202.78,62.22 202.57,62.29 
					201.95,62.3 201.68,62.16 201.37,62.3 201.21,62.08 201.04,62.09 200.81,62.35 200.58,62.34 200.25,62.09 199.94,62.09 
					199.32,62.56 199.23,62.8 199.13,63.04 199.23,63.21 199.22,63.49 199.13,63.6 199.22,63.77 199.58,63.64 199.68,63.68 
					199.95,63.62 200.27,63.63 199.96,63.93 200,64.13 200.13,64.35 200.12,64.51 200.1,64.63 200.18,64.69 200.43,64.53 
					200.45,64.67 200.28,64.84 199.95,65.05 200.07,65.13 200.26,65.15 200.07,65.28 199.95,65.51 199.81,65.51 199.66,65.15 
					199.56,65.1 199.51,65.33 199.6,65.58 199.49,65.71 199.53,65.9 199.75,66.04 199.8,65.93 200.07,66.16 200.27,66.12 200.58,66.3 
					200.66,66.62 200.45,66.83 200.62,67 200.63,67.16 200.81,67.17 201.14,67.5 201.02,67.71 200.81,67.65 200.75,67.8 200.93,67.87 
					201.34,67.77 201.91,67.77 201.87,67.88 201.74,68.02 201.44,68.15 201,68.13 200.9,68.29 201.07,68.33 201.29,68.25 
					201.59,68.25 201.74,68.18 201.74,68.37 201.82,68.45 201.97,68.25 202.15,68.03 202.35,68.02 202.48,68.18 202.66,68.18 
					202.91,68.33 203.03,68.16 203.24,68.19 203.21,68.33 203.1,68.39 203.23,68.57 203.26,68.75 203.54,68.99 203.65,68.94 
					203.95,69.06 204.28,69.01 204.43,68.89 204.7,68.89 204.85,68.75 205.09,68.88 205.25,68.78 205.22,68.47 205.27,68.3 
					205.22,68.01 205.79,67.96 206.28,68 206.94,68.33 207.17,68.33 207.6,68.91 207.97,69.14 209.2,68.99 209.56,68.83 209.69,68.83 
					209.75,68.9 209.92,68.77 209.98,68.55 210.57,67.88 210.71,67.85 211.26,68.05 211.6,68.2 212.02,68.12 212.05,68 212.34,67.78 
					212.57,67.85 212.6,68.05 212.4,68.37 212.13,68.59 212.14,68.72 212.39,69.01 212.33,69.2 212.6,69.25 		"/>
				<polygon class="st1" points="198.68,62.35 198.49,62.35 198.44,62.46 198.64,62.54 198.91,62.47 198.95,62.32 198.82,62.24 		"/>
				<polygon class="st1" points="220.9,60.42 220.91,60.45 220.92,60.45 		"/>
				<polygon class="st1" points="199.37,59.68 199.37,59.69 199.37,59.69 		"/>
				<polygon class="st1" points="199.37,59.69 199.37,59.69 199.32,60.05 		"/>
				<rect x="222.9" y="62.76" class="st1" width="0" height="0.11"/>
				<polygon class="st1" points="222.93,62.86 222.93,62.86 222.93,62.86 		"/>
				<polygon class="st1" points="222.77,62.6 222.87,62.77 222.88,62.77 		"/>
				<polygon class="st1" points="220.91,60.45 221.13,60.68 220.92,60.45 		"/>
				<polygon class="st1" points="229.32,77.47 229.08,77.31 229,76.47 228.57,76.47 228.46,76.11 228.48,75.71 228.76,75.46 
					228.48,74.86 228.23,74.72 227.97,74.24 227.81,74.13 227.66,74.18 226.66,73.52 226.43,73.54 226.29,73.64 226.01,73.42 
					226.06,73.26 225.98,73.16 226.1,72.88 225.8,72.63 225.74,72.43 225.45,72.37 225.31,72.19 225.12,72.17 225.12,71.98 
					225.23,71.84 225.14,71.7 225.22,71.52 225.23,71.02 225.37,70.89 225.42,70.47 225.6,70.51 225.76,70.41 225.76,69.93 
					225.66,69.86 225.63,69.51 225.79,69.48 226.05,69.39 226.13,69.33 226.02,69.25 225.83,69.16 225.54,69.19 225.34,69.14 
					224.88,68.88 224.68,68.85 224.44,68.71 224.31,68.4 224.18,68.17 223.97,68.13 223.85,67.86 223.85,67.62 223.73,67.28 
					223.47,67.26 223.14,67.36 222.92,67.25 222.93,66.99 222.75,66.87 222.39,66.97 221.93,66.85 221.37,66.85 221.24,66.96 
					220.91,66.96 220.54,67.26 220.6,67.31 220.43,67.6 220.3,67.6 220.02,67.84 219.49,67.95 219.25,68.4 219.22,68.84 219.47,69.34 
					219.48,69.77 219.25,70.25 219.32,70.46 219.31,70.83 219.09,71.14 218.97,71.35 216.57,73.06 216.56,73.07 216.56,73.07 
					217.25,74.84 218.45,74.99 224.77,79.38 227.31,79.42 227.62,78.85 227.91,78.19 228.51,77.91 228.98,78.09 229.29,77.99 
					229.43,78.05 229.57,77.73 229.71,77.67 229.61,77.59 		"/>
				<polygon class="st1" points="228.98,78.09 228.51,77.91 227.91,78.19 227.62,78.85 227.31,79.42 227.5,79.42 228.73,79.8 
					228.81,80.3 229.64,79.91 229.49,79.74 229.54,79.71 229.6,79.71 229.44,79.53 229.43,79.31 229.34,79.1 229.28,79.23 
					228.75,78.88 229.52,78.72 229.39,78.12 229.43,78.05 229.29,77.99 		"/>
				<polygon class="st1" points="210.55,69.92 210.7,69.81 210.62,69.73 210.47,69.74 210.05,70 209.44,70.24 209.09,70.26 
					208.82,70.12 208.56,70.12 208.55,70.3 208.47,70.47 208.28,70.53 208.02,70.42 207.85,70.62 207.7,70.66 207.7,70.96 
					207.87,71.21 208.19,71.39 208.56,71.38 208.71,71.47 208.87,71.35 209.18,71.28 209.46,71.02 209.67,70.92 210.03,70.96 
					210.05,70.7 209.94,70.46 210.24,70.11 		"/>
				<polygon class="st1" points="213.11,71.63 213.35,71.75 213.33,72.12 213.43,72.32 213.29,72.41 213.14,72.41 212.88,72.55 
					212.77,72.92 212.58,73.23 212.54,73.23 212.61,73.33 212.81,73.52 212.84,74 212.77,74.21 212.89,74.22 213.34,74.42 
					213.61,74.63 213.71,74.63 213.89,74.75 216.56,73.07 216.57,73.06 218.97,71.35 219.09,71.14 219.31,70.83 219.32,70.46 
					219.25,70.25 219.48,69.77 219.47,69.34 219.22,68.84 219.25,68.4 219.49,67.95 220.02,67.84 220.3,67.6 220.43,67.6 220.6,67.31 
					220.44,67.17 220.06,67.18 219.52,67.37 218.84,67.33 218.58,67.38 218.24,67.38 217.76,67.52 217.55,67.75 217.2,67.85 
					217.15,67.97 216.53,67.95 216.09,67.86 215.96,67.74 215.7,67.67 215,67.74 214.81,67.85 214.65,67.87 214,68.13 213.77,68.07 
					213.38,67.97 213.3,68.19 213.29,68.69 213.11,68.8 213.14,69.1 212.88,69.2 212.6,69.25 212.33,69.2 212.32,69.22 212.14,69.29 
					212.2,69.7 212.43,70.15 212.51,70.51 212.45,70.79 212.42,71.31 212.99,71.34 		"/>
				<polygon class="st1" points="210.87,76.6 211.01,77.11 211.4,77.68 211.69,78.39 211.57,78.72 211.75,79.17 211.91,78.93 
					211.92,78.89 211.9,78.71 212.03,78.58 212.03,78.27 212.14,77.93 212.13,77.53 212.22,77.48 212.22,77.19 212.28,76.88 
					212.27,76.68 212.32,76.09 212.22,76.12 212.05,76.12 211.83,76.24 211.7,76.11 211.76,75.69 211.76,75.06 211.68,74.92 
					211.75,74.55 212.07,74.55 212.1,74.77 212.24,74.79 212.4,74.64 212.39,74.48 212.43,74.49 212.37,74.37 212.31,74.13 
					212.39,73.73 212.45,73.39 212.53,73.23 212.39,73.24 212.25,73.52 211.82,73.53 211.66,73.5 211.37,73.82 211.27,74.81 
					210.88,75.58 210.46,76.15 210.61,76.21 		"/>
				<polygon class="st1" points="212.59,74.36 212.75,74.21 212.77,74.21 212.84,74 212.81,73.52 212.61,73.33 212.54,73.23 
					212.53,73.23 212.45,73.39 212.39,73.73 212.31,74.13 212.37,74.37 212.43,74.49 212.5,74.5 		"/>
				<polygon class="st1" points="212.36,75.38 212.38,75.02 212.43,74.89 212.4,74.73 212.4,74.64 212.24,74.79 212.1,74.77 
					212.07,74.55 211.75,74.55 211.68,74.92 211.76,75.06 211.76,75.69 211.7,76.11 211.83,76.24 212.05,76.12 212.22,76.12 
					212.32,76.09 212.37,75.58 		"/>
				<polygon class="st1" points="212.25,73.52 212.39,73.24 212.58,73.23 212.77,72.92 212.88,72.55 213.14,72.41 213.29,72.41 
					213.43,72.32 213.33,72.12 213.35,71.75 213.11,71.63 212.99,71.34 212.42,71.31 212.41,71.39 212.23,71.43 212.17,72.39 
					211.94,72.74 211.69,73.09 211.69,73.45 211.66,73.5 211.82,73.53 		"/>
				<polygon class="st1" points="213.59,79.81 214.57,78.85 215.6,78.69 215.64,78.3 216.21,77.62 214.69,75.96 216.69,75.34 
					217.18,74.83 217.25,74.84 216.56,73.07 216.56,73.08 213.89,74.75 213.71,74.63 213.61,74.63 213.34,74.42 212.89,74.22 
					212.75,74.21 212.59,74.36 212.5,74.5 212.39,74.48 212.4,74.73 212.43,74.89 212.38,75.02 212.36,75.38 212.37,75.58 
					212.27,76.68 212.28,76.88 212.22,77.19 212.22,77.48 212.13,77.53 212.14,77.93 212.03,78.27 212.03,78.58 211.9,78.71 
					211.92,78.89 211.91,78.93 211.92,78.91 211.93,79.04 211.81,79.38 211.81,79.43 212.23,79.42 		"/>
				<polygon class="st1" points="216.56,73.07 216.56,73.07 216.56,73.08 		"/>
				<polygon class="st1" points="216.56,73.07 213.89,74.75 216.56,73.08 		"/>
				<polygon class="st1" points="228.73,79.8 227.5,79.42 224.77,79.38 218.45,74.99 217.25,74.84 217.18,74.83 216.69,75.34 
					214.69,75.96 216.21,77.62 215.64,78.3 215.6,78.69 214.57,78.85 213.59,79.81 212.23,79.42 211.81,79.43 211.77,79.93 
					211.79,80.5 211.65,80.89 211.68,81.03 211.87,80.96 211.94,81.06 212.11,80.94 212.41,81.12 212.33,81.17 212.93,81.83 
					212.99,82.12 213.12,82.18 213.17,82.46 213.47,82.72 213.61,82.73 214,83.4 214.01,83.61 214.11,83.84 214.33,83.89 
					214.39,84.22 214.52,84.41 214.83,84.54 215.07,85.19 215.27,85.32 215.35,85.73 215.27,85.9 215.27,86.09 215.55,86.3 
					215.56,86.52 215.75,86.64 215.95,86.43 216.24,86.67 216.67,86.86 217,87.21 217.11,87.5 217.21,87.53 217.25,87.86 
					217.38,87.97 217.49,88.43 217.76,88.67 217.84,89.14 217.93,89.29 217.82,89.73 217.72,89.83 217.82,90.04 217.96,90.53 
					218.01,91.04 218.26,91.26 218.3,91.44 218.99,92.18 219.22,92.28 219.49,92.3 219.67,92.56 219.8,92.56 220.2,92.9 220.21,93.1 
					220.55,93.17 220.51,93.36 220.68,93.43 221,94.6 221.29,94.77 221.31,95.12 222.33,96.15 222.48,96.15 222.57,96.73 223,96.86 
					223.24,97.55 223.48,97.57 223.69,97.66 223.84,97.39 224.19,97.15 223.95,96.7 224.13,96.05 224.49,95.9 224.9,96.23 
					225.74,96.26 226.9,96.73 228.11,97.31 228.17,98.54 230.62,95.22 239.57,92.54 239.77,89.6 239.45,88.5 239.46,88.49 
					239.01,88.91 235.05,88.31 234.75,87.26 234.43,86.87 234.44,86.41 234.43,86.4 234.36,86.43 234.24,86.22 234.25,86.08 
					234.37,85.93 234.15,85.95 234.11,85.89 233.88,85.89 233.45,85.65 233.39,85.53 233.32,85.57 233.09,85.26 233.03,84.91 
					232.35,84.05 232.17,83.72 232.32,83.76 232.32,83.61 232.08,82.96 232.08,82.8 231.91,82.54 231.78,82.54 231.34,81.9 
					231.18,81.89 230.99,81.68 231.01,81.59 231.09,81.57 231.2,81.64 231.09,81.47 230.86,81.43 230.4,81.32 230.15,80.64 230,80.31 
					229.83,80.22 229.83,79.99 229.74,80.04 229.64,79.91 228.81,80.3 		"/>
				<polygon class="st1" points="218.45,74.99 217.25,74.84 217.25,74.84 		"/>
				<polygon class="st1" points="217.25,74.84 217.25,74.84 217.18,74.83 		"/>
				<polygon class="st1" points="233.88,85.89 234.11,85.89 234.1,85.88 234.26,85.85 234.36,85.19 234.22,84.92 234.12,84.92 
					234.07,84.46 234.13,84.46 234.23,84.02 234.18,83.93 234.06,83.93 234.04,83.78 233.81,83.6 233.7,83.6 233.66,83.72 
					233.56,83.73 233.56,83.84 233.47,83.92 233.52,84.13 233.46,84.13 233.53,84.54 233.46,84.49 233.35,84.49 233.31,84.9 
					233.37,85.09 233.46,85.2 233.46,85.48 233.39,85.53 233.45,85.65 		"/>
				<polygon class="st1" points="234.75,87.26 235.05,88.31 239.01,88.91 239.46,88.49 240.61,84.94 240.87,84.9 240.84,84.56 
					240.8,84.38 240.68,84.42 240.6,84.36 240.61,84.32 240.49,84.31 240.45,83.83 240.28,83.78 240.27,83.97 240.19,84.11 
					239.36,84.61 239.36,84.98 238.58,85.64 238.46,85.84 238.57,85.88 238.64,86.04 238.29,86.41 238.17,86.24 238.06,86.32 
					237.88,86.32 237.91,86.53 237.82,86.55 237.76,86.68 237.36,86.75 237.08,86.78 236.95,86.63 236.69,86.65 236.58,86.58 
					236.38,86.63 235.92,86.52 235.37,86.95 235.16,86.89 234.95,86.87 234.74,86.96 234.66,86.35 234.54,86.47 234.44,86.41 
					234.43,86.87 		"/>
				<polygon class="st1" points="130.75,64.73 130.93,64.86 130.94,64.76 130.82,64.68 		"/>
				<polygon class="st1" points="133.06,66.36 132.96,66.23 132.81,66.2 132.57,66.27 132.61,66.38 132.96,66.44 		"/>
				<polygon class="st1" points="129.1,64.97 129.13,65.23 129.41,65.25 129.56,65.22 129.32,65 		"/>
				<polygon class="st1" points="129.59,64.73 129.84,64.9 129.76,64.76 		"/>
				<path class="st1" d="M143.58,74.18l0.07,0.14l0.25,0.1c0.06-0.02,0.12-0.04,0.18-0.07l-0.14-0.22L143.58,74.18z"/>
				<path class="st1" d="M142.5,80.28l0.08,0.15v0.3l0.16-0.1v-0.4c-0.06-0.04-0.12-0.08-0.19-0.11L142.5,80.28z"/>
				<polygon class="st1" points="142.25,81.77 142.3,81.9 142.37,81.93 142.47,81.86 142.47,81.69 142.39,81.67 		"/>
				<path class="st1" d="M143.37,81.3v-0.12h-0.11v0.11l0.09,0.09L143.37,81.3z"/>
				<polygon class="st1" points="148.11,79.8 147.9,79.81 147.77,80.16 148.06,79.99 148.33,79.95 		"/>
				<polygon class="st1" points="143.61,81.06 143.76,81.29 143.97,81.42 144.4,81.11 144.68,81.12 144.75,80.76 144.48,80.7 
					144.37,80.8 144.07,80.92 143.82,80.9 		"/>
				<polygon class="st1" points="147.7,80.83 147.68,80.51 147.26,80.72 147.24,80.91 146.95,81.27 147.13,81.32 147.41,81.24 		"/>
				<polygon class="st1" points="145.6,81.61 145.75,81.55 145.7,81.24 145.48,81.17 145.23,81.17 145.11,81.56 145.36,81.77 		"/>
				<polygon class="st1" points="133.97,97.34 134.06,97.47 134.25,97.39 134.07,97.24 		"/>
				<polygon class="st1" points="135.32,98.21 135.46,98.21 135.58,98.12 135.53,97.9 135.36,97.84 135.19,98.02 		"/>
				<path class="st1" d="M132.43,96.6l-0.18,0.07h-0.11l0.07,0.21h0.19l0.29-0.19l-0.07-0.12L132.43,96.6z"/>
				<polygon class="st1" points="135.48,97.17 135.48,96.94 135.34,97.07 135.4,97.29 		"/>
				<path class="st1" d="M132.89,97.02v-0.15h-0.12l-0.11,0.11l0.09,0.16L132.89,97.02z"/>
				<polygon class="st1" points="134.99,99.44 135.15,99.38 135.02,99.22 134.94,99.3 		"/>
				<polygon class="st1" points="133.69,97.23 133.54,97.23 133.48,97.34 133.62,97.45 133.69,97.41 133.77,97.41 133.84,97.39 
					133.82,97.31 		"/>
				<polygon class="st1" points="134.32,99.72 134.62,99.78 134.69,99.57 134.42,99.27 134.2,99.21 134.31,99.41 		"/>
				<polygon class="st1" points="240.49,84.31 240.61,84.32 240.61,84.15 240.73,83.94 240.76,83.56 240.7,83.52 240.75,83.37 
					240.69,83.29 240.74,83.24 240.8,83.25 240.73,83.15 240.64,83.17 240.53,83.17 240.47,83.53 240.39,83.62 240.32,83.53 
					240.28,83.66 240.28,83.78 240.45,83.83 		"/>
				<polygon class="st1" points="239.46,88.49 239.45,88.5 239.77,89.6 239.57,92.54 235.73,93.69 235.65,94.35 236.88,95.92 
					236.71,96.5 237.48,97.42 237.66,97.38 237.73,97.43 238,97.43 238.17,97.14 238.47,97.15 238.95,96.89 239.22,96.91 
					239.45,96.87 239.66,97 239.82,96.98 240.15,96.5 240.13,96.44 240.2,96.43 240.22,96.27 240.09,96.2 240.11,96.03 240.08,95.9 
					240.27,95.71 240.39,95.58 240.86,95.59 241.19,95.54 241.36,95.6 241.61,95.34 241.73,95.23 241.73,94.81 242.23,94.21 
					242.53,94.13 242.72,94.22 242.86,94.13 243.53,94.07 243.58,93.94 243.47,93.84 243.31,93.35 243.38,93.34 243.25,93.09 
					243.2,93.08 243.28,92.86 243.28,92.63 243.51,92.19 243.67,92.15 243.57,91.98 243.63,91.96 243.8,91.67 243.93,91.56 
					244.05,91.6 243.99,91.74 243.96,91.89 244.1,91.96 244.26,91.98 244.42,91.46 244.57,91.32 244.72,91.01 245.05,90.71 
					245.55,89.92 245.6,89.71 245.57,89.54 245.74,89.24 245.75,88.98 245.66,88.89 245.42,88.84 244.92,88.43 244.79,88.19 
					244.56,87.97 244.46,87.63 244.08,87.13 243.9,87.12 243.56,87.19 242.95,87.08 242.7,87.08 242.53,87.17 242.19,87.08 
					241.43,86.44 241.39,86.26 240.94,85.7 240.87,84.9 240.61,84.94 		"/>
				<polygon class="st1" points="236.2,103.74 236.55,103.8 236.84,103.76 236.48,103.65 		"/>
				<polygon class="st1" points="236.88,95.92 235.65,94.35 235.73,93.69 230.62,95.22 228.17,98.54 228.11,97.31 226.9,96.73 
					225.74,96.26 224.9,96.23 224.49,95.9 224.13,96.05 223.95,96.7 224.19,97.15 223.84,97.39 223.69,97.66 223.48,97.57 
					223.24,97.55 223.33,97.8 223.45,98.48 223.43,98.89 223.28,98.89 223.28,99.03 223.06,98.97 223.16,99.17 223.3,99.17 
					223.31,99.37 223.64,99.79 223.81,101.05 224.16,101.36 224.18,101.74 224.03,101.83 224.18,102.2 224.47,102.51 224.52,102.85 
					224.63,103.07 224.91,103.03 224.98,102.94 225.36,103.06 225.58,103.01 225.86,102.77 226.12,102.77 226.26,102.92 
					226.52,102.81 226.78,102.46 226.91,102.44 227.06,102.08 227.4,101.86 227.57,101.81 227.79,101.82 227.84,101.91 228.23,101.89 
					228.31,101.99 228.57,102.05 229.21,101.8 229.72,101.75 229.89,101.61 229.92,101.44 230.41,101.07 230.62,101.08 230.78,101.21 
					230.98,101.17 231.1,101.05 231.19,101.12 231.37,101.12 231.77,100.8 232.05,100.34 232.3,100.22 232.44,100.23 233.93,99.79 
					234.06,99.65 234.9,99.49 235.43,99.23 235.7,98.98 236.28,98.86 236.23,98.71 236.27,98.63 236.16,98.51 236.2,98.17 
					236.66,97.61 237.18,97.5 237.48,97.42 236.71,96.5 		"/>
				<polygon class="st1" points="239.09,102.98 238.82,103.03 238.63,103.09 238.46,103.05 238.39,102.91 238.22,102.89 
					238.06,103.02 238.04,103.23 237.87,103.32 238.05,103.42 238.22,103.55 238.5,103.61 238.91,103.54 239.2,103.35 239.41,103.34 
					239.51,103.22 239.49,103.11 239.27,103.07 		"/>
				<polygon class="st1" points="198.42,76.7 198.58,77.06 198.58,77.36 198.38,77.83 198.23,78.26 198.4,78.62 198.54,79.31 
					199.01,90.03 215.16,89.9 215.16,89.88 214.93,89.78 214.61,89.46 214.53,89.3 214.25,89.21 214.08,88.86 213.91,88.93 
					213.66,88.92 213.24,88.65 213.03,87.95 213.08,87.76 213.06,87.43 212.98,87.25 213,87.13 213.11,87.21 213.5,87.23 
					213.35,87.07 213.22,87.05 213,86.71 212.91,86.64 212.9,86.73 212.74,86.55 212.63,86.19 212.09,85.4 211.86,85.26 211.8,84.88 
					210.95,83.63 210.96,83.34 210.82,83.12 210.77,82.6 210.63,82.42 210.63,82.27 210.17,81.77 210.15,81.58 210.2,81.36 
					210.08,81.15 209.3,80.48 209.24,80.27 208.73,79.68 208.73,79.37 208.45,79 208.48,78.82 208.46,78.63 208.52,78.54 
					208.57,78.62 208.7,78.62 208.8,78.97 208.92,79.11 208.95,79.29 209.47,79.73 209.47,79.99 209.6,80.26 209.96,80.42 
					210.04,80.68 210.69,81.36 211.04,81.56 211.09,81.64 211.14,81.47 211.32,81.3 211.42,80.82 211.3,80.7 211.46,80.29 211.5,80 
					211.7,79.26 211.75,79.17 211.57,78.72 211.69,78.39 211.4,77.68 211.01,77.11 210.87,76.6 210.61,76.21 210.46,76.15 
					210.28,76.38 209.91,76.53 209.06,76.38 208.38,76.57 207.89,76.22 207.83,76.45 208.01,76.72 208,76.9 207.82,76.62 
					207.54,76.47 207.48,76.23 207.61,76.17 207.5,76.06 207.28,76.09 207,76 206.54,75.88 206.47,75.96 206.66,76 206.7,76.09 
					206.45,76.12 206.19,76.09 205.9,76.21 205.8,76.12 205.81,76.06 206.07,76.03 206.28,75.94 206.01,75.97 205.63,75.98 
					205.47,76.1 205.11,76.3 204.94,76.39 204.59,76.5 204.3,76.78 204.25,76.9 203.8,76.9 203.31,76.59 202.99,76.56 202.53,76.59 
					202.15,76.35 201.99,76.35 201.83,76.45 201.45,76.18 201.01,76.09 199.96,76.01 199.44,75.84 198.76,75.87 198.63,75.91 
					198.63,75.91 198.54,76.13 		"/>
				<polygon class="st1" points="199.12,92.68 197.83,92.8 197.83,93.29 197.82,93.3 197.92,98.64 197.71,98.72 197.46,98.88 
					197.23,98.73 196.89,98.73 196.65,98.93 196.65,99.27 196.79,99.45 196.63,99.76 196.19,100.34 196.05,100.33 195.81,100.56 
					195.83,100.76 195.98,100.92 195.84,101.2 195.57,101.37 195.51,101.55 195.76,101.69 195.79,101.97 195.65,102.19 195.22,102.64 
					195.22,102.94 195.4,103.12 195.72,102.89 195.88,102.93 195.88,103.12 195.72,103.23 195.9,103.36 195.8,103.53 195.93,103.76 
					195.94,104.11 196,104.37 196.5,104.5 196.63,104.71 196.52,104.9 196.52,105.08 196.49,105.15 196.63,105.31 196.63,105.49 
					196.56,105.59 196.85,105.83 196.9,105.97 197.26,106.45 197.49,106.98 197.59,107.18 197.52,107.47 197.43,107.59 197.34,107.85 
					197.35,108.26 197.54,108.42 197.89,108.43 197.98,108.3 198.4,108.31 198.52,108.42 198.43,108.6 198.47,108.85 198.7,109.03 
					199,109.16 199.23,109.17 199.44,109.3 199.51,109.48 199.78,109.61 200.01,109.63 200.12,109.77 200.06,109.97 199.88,110.11 
					199.85,110.22 199.75,110.34 200.01,110.58 200.25,110.64 200.35,110.59 200.57,110.7 200.67,110.69 201.11,110.94 201.22,111.11 
					201.24,111.5 201.37,111.64 201.65,111.73 201.72,111.83 201.71,112.09 201.83,112.22 202.28,112.34 202.49,112.5 202.45,112.63 
					202.5,113.05 202.65,113.15 202.9,113.31 203,113.47 203,113.52 203.04,113.54 203.09,113.75 203.23,113.92 203.38,113.97 
					203.54,114.14 203.81,114.36 204.08,114.47 204.23,114.42 204.34,114.25 204.5,114.16 204.82,114.16 205,114.17 205.04,114.25 
					205.15,114.25 205.44,114.17 205.55,114.03 205.7,113.85 206,113.87 206.11,113.94 206.27,114.28 206.42,114.45 206.5,114.57 
					206.85,114.69 207,114.82 207.1,115.04 207.18,115.15 207.25,115.35 207.28,115.5 207.34,115.5 207.67,115.5 207.77,115.56 
					207.79,115.5 207.73,115.39 207.75,115.2 207.91,115.04 208.18,115.15 208.52,115.28 208.73,115.21 208.98,115.28 209.01,115.48 
					209.32,115.59 209.47,115.59 209.47,115.37 209.64,115.21 209.81,115.25 209.91,115.2 210.13,115.2 210.43,115.07 210.91,115.04 
					211.23,115.13 211.52,114.99 211.68,114.77 212,114.56 212,114.56 212.16,114.35 212.26,114.31 212.4,114.13 212.65,113.89 
					212.78,113.94 213.11,113.43 213.57,112.92 213.48,112.45 213.35,112.29 213.28,111.79 213.06,111.55 212.95,111.34 
					212.78,111.13 212.53,111.13 212.43,111.03 212.43,110.92 212.19,110.81 211.93,110.34 211.83,110.27 211.78,110.09 
					211.54,109.84 211.41,109.68 210.85,109.69 210.61,109.6 210.51,109.42 210.72,109.13 210.86,109.05 210.87,108.75 211.17,108.81 
					211.43,108.75 211.57,108.85 211.73,108.88 211.82,108.73 212,108.59 212.04,107.96 212.01,107.43 212.11,107.05 212.33,106.71 
					212.32,106.42 212.23,106.27 212.33,105.98 212.62,105.63 212.67,105.45 212.78,105.44 212.93,105.48 213.2,104.47 213.36,104.05 
					213.75,103.78 213.75,103.57 214.08,103.03 214.12,102.79 214.38,102.74 214.49,102.75 214.64,102.33 215.01,101.7 215.01,101.24 
					215.16,100.82 215.23,100.73 215.16,100.7 215.1,100.42 214.94,99.86 214.96,99.53 215.1,99.38 215.12,99.15 215.34,98.82 
					215.45,98.14 215.6,97.73 215.7,97.59 215.63,97.47 215.51,97.39 215.64,97.08 215.64,96.8 215.79,96.7 216.15,96.7 216.18,96.56 
					216.13,96.42 216.15,96.29 216.41,96.23 216.57,96.09 216.88,96.12 216.98,95.93 217.2,95.89 217.43,95.77 217.6,95.5 
					217.52,95.5 217.52,95.31 217.22,95.16 216.94,95.15 216.94,94.89 216.35,94.5 216.13,94.44 215.88,93.98 215.7,93.4 215.78,92.9 
					215.71,92.37 215.38,91.4 215.34,91.15 215.39,91.11 215.5,91.24 215.53,91.33 215.6,91.32 215.6,91.19 215.34,90.88 
					215.25,90.51 215.19,90.43 215.2,90.38 215.15,90.31 215.18,90.24 215.11,90.14 215.14,90.02 215.16,89.9 199.01,90.03 		"/>
				<polygon class="st1" points="213.81,113.06 214.08,113 214.28,113.04 214.28,113.85 214.52,114.11 214.78,114.16 215.08,114.06 
					215.42,114.14 216.08,114.11 216.33,114.26 216.9,114.8 217.23,115.03 217.45,115.28 217.67,115.36 218.15,115.36 218.44,115.49 
					218.81,115.44 219.05,115.52 219.24,115.52 219.51,115.5 219.87,114.94 220,114.77 220.28,114.66 220.49,114.67 220.63,114.58 
					221.26,114.5 221.46,114.59 221.62,114.89 221.85,115.02 222.36,114.93 222.7,114.94 222.75,114.92 222.86,114.73 223.3,114.52 
					223.69,114.46 224.05,114.27 224.31,114.11 224.43,113.84 224.76,113.66 225,113.64 225.26,113.48 226.1,113.45 226.92,113.47 
					231.15,109.28 229.41,109.31 225.43,108.08 225.09,107.8 224.6,107.69 224.41,107.28 224.47,106.89 224.1,106.71 223.87,105.98 
					223.79,105.47 223.87,105.32 223.63,105.18 223.27,105.25 222.95,105.45 222.44,105.47 222.31,105.32 222.53,105.01 
					222.55,104.76 222.68,104.52 222.63,104.17 222.75,103.93 222.83,103.6 223.09,103.53 222.72,103.04 222.53,103.04 222.44,102.87 
					222.41,102.61 222.15,102.24 221.9,102.19 221.52,101.81 221.2,101.6 221.11,101.48 220.85,101.45 220.81,101.36 220.42,101.3 
					220.31,101.09 219.84,100.67 219.62,100.63 219.38,100.41 219.1,100.35 218.88,100.39 218.84,100.47 218.41,100.13 218.18,100.12 
					218.08,100.22 217.9,100.05 217.63,100.09 217.39,100.3 217.13,100.3 216.6,100.11 216.52,99.97 216.37,99.87 216.01,100.64 
					215.79,100.65 215.7,100.81 215.41,100.8 215.23,100.73 215.16,100.82 215.01,101.24 215.01,101.7 214.64,102.33 214.49,102.75 
					214.38,102.74 214.12,102.79 214.08,103.03 213.75,103.57 213.75,103.78 213.36,104.05 213.2,104.47 212.93,105.48 212.78,105.44 
					212.67,105.45 212.62,105.63 212.33,105.98 212.23,106.27 212.32,106.42 212.33,106.71 212.11,107.05 212.01,107.43 
					212.04,107.96 212,108.59 211.82,108.73 211.73,108.88 211.57,108.85 211.43,108.75 211.17,108.81 210.87,108.75 210.86,109.05 
					210.72,109.13 210.51,109.42 210.61,109.6 210.85,109.69 211.41,109.68 211.54,109.84 211.78,110.09 211.83,110.27 211.93,110.34 
					212.19,110.81 212.43,110.92 212.43,111.03 212.53,111.13 212.78,111.13 212.95,111.34 213.06,111.55 213.28,111.79 
					213.35,112.29 213.48,112.45 213.57,112.92 213.67,112.81 		"/>
				<polygon class="st1" points="217.2,95.89 216.98,95.93 216.88,96.12 216.57,96.09 216.41,96.23 216.15,96.29 216.13,96.42 
					216.18,96.56 216.15,96.7 215.79,96.7 215.64,96.8 215.64,97.08 215.51,97.39 215.63,97.47 215.7,97.59 215.6,97.73 215.45,98.14 
					215.34,98.82 215.12,99.15 215.1,99.38 214.96,99.53 214.94,99.86 215.1,100.42 215.16,100.7 215.23,100.73 215.41,100.8 
					215.7,100.81 215.79,100.65 216.01,100.64 216.37,99.87 216.52,99.97 216.6,100.11 217.13,100.3 217.39,100.3 217.63,100.09 
					217.9,100.05 218.08,100.22 218.18,100.12 218.41,100.13 218.84,100.47 218.88,100.39 219.1,100.35 219.38,100.41 219.62,100.63 
					219.84,100.67 220.31,101.09 220.42,101.3 220.81,101.36 220.85,101.45 221.11,101.48 221.2,101.6 221.52,101.81 221.9,102.19 
					222.15,102.24 222.41,102.61 222.44,102.87 222.53,103.04 222.72,103.04 223.09,103.53 223.39,103.44 223.5,103.32 223.73,103.25 
					223.97,102.98 223.9,102.94 223.86,102.87 223.75,102.96 223.6,102.89 223.46,102.89 223.34,102.62 223.39,102.54 223.19,102.29 
					223.03,102.25 222.8,101.68 222.71,101.56 222.7,101.64 222.59,101.64 222.4,101.4 222.12,101.28 221.92,100.94 221.46,100.43 
					221.38,100.29 221,100.2 220.88,100.04 220.63,99.76 220.45,99.82 220.37,99.77 220.17,99.8 220.03,99.89 219.88,99.73 
					219.65,99.39 219.74,99.29 219.5,98.94 219.4,98.98 219.38,99.26 219.44,99.25 219.46,99.63 219.22,99.56 219.15,99.15 
					219.04,98.86 218.85,98.8 218.85,98.68 218.78,98.32 218.68,98.29 218.5,97.32 217.94,95.83 217.62,95.5 217.6,95.5 217.43,95.77 
							"/>
				<polygon class="st1" points="215.16,100.7 215.23,100.73 215.23,100.73 		"/>
				<polygon class="st1" points="215.23,100.73 215.23,100.73 215.41,100.8 		"/>
				<polygon class="st1" points="223.5,103.32 223.39,103.44 222.83,103.6 222.75,103.93 222.63,104.17 222.68,104.52 222.55,104.76 
					222.53,105.01 222.31,105.32 222.44,105.47 222.95,105.45 223.27,105.25 223.63,105.18 223.87,105.32 223.91,105.27 
					224.22,104.69 224.17,104.59 223.82,104.59 223.61,104.68 223.52,104.66 223.37,104.48 223.66,104.48 223.8,104.27 223.99,104.27 
					224.24,103.99 224.38,103.93 224.33,103.51 224.37,103.39 224.28,103.39 223.97,103.08 223.98,102.98 223.97,102.98 
					223.73,103.25 		"/>
				<polygon class="st1" points="223.79,105.47 223.87,105.98 224.1,106.71 224.47,106.89 224.41,107.28 224.6,107.69 225.09,107.8 
					225.43,108.08 229.41,109.31 231.15,109.28 226.92,113.47 226.1,113.45 225.26,113.48 225,113.64 224.76,113.66 224.43,113.84 
					224.31,114.11 224.05,114.27 223.69,114.46 223.3,114.52 222.86,114.73 222.75,114.92 222.7,114.94 222.71,114.94 221.46,116.13 
					221.43,121.48 222.38,122.35 222.4,122.28 223.51,121.05 223.64,120.76 223.92,120.49 224.2,120.41 224.31,120.2 224.44,120.15 
					225.2,119.31 225.41,119.25 226.33,118.28 226.81,117.91 227.19,117.65 227.63,117.56 228.28,117.01 229.78,115.68 230.5,114.81 
					230.9,114.4 231,114.11 231.92,112.86 231.94,112.64 232.43,111.95 232.46,111.52 233.22,110.06 233.4,109.91 233.27,109.71 
					233.28,109.56 233.59,109.24 233.69,109.26 233.89,109.02 234.21,108.34 234.67,107.69 234.65,107.34 234.74,107.2 234.79,106.88 
					234.68,106.7 234.88,106.36 235,106.33 235.17,106.33 235.2,106.38 235.28,106.34 235.21,106.17 235.12,106.15 235.14,106.22 
					234.96,106.24 235.06,106.03 235.02,105.8 234.9,105.64 235.02,105.36 235.16,105.24 235.15,105.16 234.97,105.15 234.9,105.03 
					234.98,104.9 235,104.68 235.09,104.47 235.22,104.26 235.16,104.22 235.01,104.23 234.66,104.11 234.5,104 234.51,104.06 
					234.4,104.04 234.24,104.21 234.27,104.24 234.16,104.43 234.12,104.4 233.88,104.64 233.46,104.69 233.42,104.8 233.31,104.7 
					232.91,104.75 232.66,104.95 232.01,105.07 231.87,105.07 231.74,105 231.31,105.03 230.93,105.22 230.57,105.2 230.37,105.27 
					230.1,105.15 229.84,105.2 229.01,105.71 228.62,105.75 228.35,105.63 228.22,105.67 227.86,105.69 227.78,105.61 227.64,105.62 
					227.19,105.98 226.97,105.98 226.62,106.2 226.5,106.35 226.1,106.4 225.77,106.32 225.44,106.01 225.31,105.98 225.21,105.77 
					224.39,104.87 224.3,104.85 224.22,104.69 223.91,105.27 		"/>
				<polygon class="st1" points="208.52,121.77 208.49,121.77 209,121.77 209.53,121.75 		"/>
				<polygon class="st1" points="221.46,116.13 222.71,114.94 222.7,114.94 222.36,114.93 221.85,115.02 221.62,114.89 221.46,114.59 
					221.26,114.5 220.63,114.58 220.49,114.67 220.28,114.66 220,114.77 219.87,114.94 219.51,115.5 219.24,115.52 219.05,115.52 
					218.81,115.44 218.44,115.49 218.15,115.36 217.67,115.36 217.45,115.28 217.23,115.03 216.9,114.8 216.33,114.26 216.08,114.11 
					215.42,114.14 215.08,114.06 214.78,114.16 214.52,114.11 214.28,113.85 214.28,113.04 214.08,113 213.81,113.06 213.67,112.81 
					213.11,113.43 212.78,113.94 212.65,113.89 212.4,114.13 212.26,114.31 212.16,114.35 212,114.56 212,114.56 212.02,114.55 
					212.15,114.7 212.24,115.06 212.37,115.13 212.34,115.37 212.52,115.41 212.61,115.7 212.61,115.98 212.93,116.28 213.1,116.69 
					213.28,116.77 213.43,116.89 213.32,117.06 213.51,117.22 213.6,117.51 213.56,117.8 213.25,118.16 213.25,118.35 213.13,118.68 
					212.67,118.68 212.68,118.79 212.54,118.94 212.43,119.18 212.21,119.39 212.06,119.7 211.8,119.95 211.74,120.33 211.39,121.64 
					211.77,121.62 216.73,124.52 217,124.97 216.94,125.1 216.99,125.27 217.11,125.42 218.79,126.6 218.9,126.6 219.19,126.49 
					219.68,125.77 219.88,125.35 219.88,125.04 220.1,124.77 220.32,124.42 220.23,124.36 220.24,124.19 220.44,123.97 220.46,123.87 
					220.63,123.82 221.03,123.82 221.27,123.48 221.74,123.31 221.66,123.18 221.81,123.01 221.92,122.97 222.36,122.43 
					222.38,122.35 221.43,121.48 		"/>
				<polygon class="st1" points="222.7,114.94 222.7,114.94 222.36,114.93 		"/>
				<polygon class="st1" points="222.71,114.94 222.7,114.94 222.7,114.94 		"/>
				<polygon class="st1" points="207.57,115.99 207.57,116.36 207.49,116.83 207.46,117.17 207.61,117.28 207.74,117.45 
					207.84,117.68 207.82,117.83 207.13,118.75 206.7,119.23 206.58,119.43 206.06,120.38 205.96,120.54 205.95,120.89 205.91,121.39 
					205.73,121.88 205.77,122.19 205.71,122.25 205.78,122.28 206,122.24 206.22,122.06 206.37,122.13 206.48,122.24 206.68,122.24 
					206.77,122.15 206.78,121.96 207,121.92 207.04,121.98 207.12,121.87 207.24,121.9 207.36,121.78 208.49,121.77 208.52,121.77 
					209.53,121.75 210.82,121.67 211.39,121.64 211.74,120.33 211.8,119.95 212.06,119.7 212.21,119.39 212.43,119.18 212.54,118.94 
					212.68,118.79 212.67,118.68 213.13,118.68 213.25,118.35 213.25,118.16 213.56,117.8 213.6,117.51 213.51,117.22 213.32,117.06 
					213.43,116.89 213.28,116.77 213.1,116.69 212.93,116.28 212.61,115.98 212.61,115.7 212.52,115.41 212.34,115.37 212.37,115.13 
					212.24,115.06 212.15,114.7 212.02,114.55 212,114.56 211.68,114.77 211.52,114.99 211.23,115.13 210.91,115.04 210.43,115.07 
					210.13,115.2 209.91,115.2 209.81,115.25 209.64,115.21 209.47,115.37 209.47,115.59 209.32,115.59 209.01,115.48 208.98,115.28 
					208.73,115.21 208.52,115.28 208.18,115.15 207.91,115.04 207.75,115.2 207.73,115.39 207.79,115.5 207.77,115.56 207.7,115.81 		
					"/>
				<polygon class="st1" points="212,114.56 211.68,114.77 212,114.56 		"/>
				<polygon class="st1" points="212.02,114.55 212,114.56 212,114.56 		"/>
				<polygon class="st1" points="196.09,105.42 195.92,105.32 195.59,105.32 195.35,105.49 195.01,105.68 194.96,105.86 
					194.97,106.04 194.81,106.11 194.57,106.5 194.43,106.51 194.32,106.45 194.13,106.67 194.14,106.88 193.94,107 193.89,107.24 
					193.93,107.43 193.87,107.63 193.65,107.75 193.39,107.94 192.88,108 192.5,108.06 192.15,108 191.93,107.91 191.62,107.95 
					191.41,107.9 191.23,108.02 191.21,108.24 191.43,108.52 191.58,108.52 191.63,108.71 191.24,108.97 191.06,109.17 190.71,109.17 
					189.91,109.36 189.57,109.59 189.19,109.75 188.84,110 188.59,110.04 188.48,109.93 188.39,109.61 188.25,109.48 188.09,109.64 
					188.09,109.9 187.92,110.21 187.56,110.22 187.34,110.28 187.08,110.28 187.02,110 186.88,109.84 186.88,109.93 186.63,110.27 
					186.44,110.35 186.32,110.63 186.07,111.09 185.92,111.42 185.65,111.79 185.5,111.85 185.38,112.03 185.42,112.32 185.53,112.68 
					185.47,113.01 185.58,113.36 185.61,113.66 185.61,114.21 185.74,114.31 186.13,114.5 186.35,114.76 186.43,115.05 186.76,115.54 
					186.97,115.94 187.13,116.09 187.56,116.42 187.6,116.7 187.59,116.91 187.65,117 187.68,117.03 188.29,116.03 188.62,115.7 
					188.86,115.65 188.97,115.51 189.55,115.27 189.76,115.29 189.91,115.19 190.13,115.19 190.31,115.19 190.4,115.31 190.65,115.44 
					190.78,115.39 190.94,115.35 190.95,115.13 191.02,114.94 191.11,114.82 190.89,114.53 190.89,114.38 191.08,114.37 
					191.19,114.27 191.19,114.13 191.31,113.97 191.34,113.79 191.44,113.7 191.6,113.7 191.8,113.5 192.03,113.53 192.07,113.41 
					192.21,113.41 192.41,113.56 192.57,113.58 192.96,113.91 193.16,113.99 193.52,114.29 193.6,114.37 193.9,114.35 194.18,114.51 
					194.51,114.53 194.69,114.56 194.86,114.48 195.04,114.49 195.28,114.58 195.6,114.64 195.73,114.72 196.05,114.65 196.1,114.54 
					195.96,114.42 195.93,114.27 196.15,114.05 196.34,113.81 196.61,113.81 196.86,113.87 197.01,114.03 197.19,113.96 
					197.77,113.89 197.87,113.76 198.08,113.68 198.64,113.44 198.82,113.45 198.85,113.55 198.95,113.57 199.01,113.72 
					199.13,113.73 199.29,113.61 199.62,113.6 199.81,113.56 199.96,113.55 200.14,113.29 200.08,113.2 200.09,113.1 200.3,113.08 
					200.42,113.21 200.71,113.25 200.87,113.23 201,113.31 201.2,113.34 201.39,113.47 201.9,113.48 201.98,113.52 202.4,113.33 
					202.7,113.36 202.95,113.5 203,113.52 203,113.47 202.9,113.31 202.65,113.15 202.5,113.05 202.45,112.63 202.49,112.5 
					202.28,112.34 201.83,112.22 201.71,112.09 201.72,111.83 201.65,111.73 201.37,111.64 201.24,111.5 201.22,111.11 201.11,110.94 
					200.67,110.69 200.57,110.7 200.35,110.59 200.25,110.64 200.01,110.58 199.75,110.34 199.85,110.22 199.88,110.11 200.06,109.97 
					200.12,109.77 200.01,109.63 199.78,109.61 199.51,109.48 199.44,109.3 199.23,109.17 199,109.16 198.7,109.03 198.47,108.85 
					198.43,108.6 198.52,108.42 198.4,108.31 197.98,108.3 197.89,108.43 197.54,108.42 197.35,108.26 197.34,107.85 197.43,107.59 
					197.52,107.47 197.59,107.18 197.49,106.98 197.26,106.45 196.9,105.97 196.85,105.83 196.56,105.59 196.63,105.49 196.63,105.31 
					196.49,105.15 196.44,105.27 		"/>
				<polygon class="st1" points="180.7,74.42 180.81,74.52 180.51,74.97 179.73,75.47 179.73,75.65 179.48,75.96 179.17,75.95 
					178.97,76.09 178.96,76.23 178.91,76.42 179.04,76.84 179.07,77.17 179,77.25 179.01,77.37 178.93,77.48 178.78,77.73 
					178.57,77.86 178.49,77.93 178.32,77.93 178.32,77.94 178.2,78.05 178.21,78.5 178.34,78.59 178.51,78.92 178.51,79.81 
					178.55,80.29 178.53,80.44 178.59,81.13 178.76,81.53 178.63,82.27 178.58,82.39 178.71,82.72 178.76,83.19 178.63,83.38 
					178.33,83.6 178.22,83.75 178.12,83.83 178.32,84.05 178.63,84.46 178.89,85 178.97,85.07 179.06,85.42 179,85.58 179.04,85.96 
					179.2,86.15 179.26,86.39 179.4,86.54 179.95,86.54 180.45,86.58 180.68,86.73 180.86,87.02 181.13,87.58 181.27,87.71 
					181.44,87.91 181.6,88.07 183.97,88.66 184.19,88.89 186.93,87.76 197.82,93.29 197.82,93.3 197.83,93.29 197.83,92.8 
					199.12,92.68 199.01,90.03 198.54,79.31 198.4,78.62 198.23,78.26 198.38,77.83 198.58,77.36 198.58,77.06 198.42,76.7 
					198.54,76.13 198.63,75.91 198.51,75.53 198.31,75.31 198.07,75.27 197.82,75.31 196.91,75.2 196.73,75.04 196.37,75.01 
					195.89,74.88 195.79,74.72 195.89,74.68 195.88,74.52 195.31,74.2 195.01,74.2 194.54,74.08 194.43,74.02 194.28,74.14 194,74 
					193.9,74 193.48,74.21 192.81,74.27 192.24,74.55 191.91,74.86 191.83,75.23 191.66,75.37 191.62,76.06 191.86,76.44 
					192.03,76.98 191.91,77.29 191.56,77.64 191.52,77.77 191.06,78.16 190.78,78.27 190.19,78.03 189.66,77.6 189.26,77.27 
					188.63,76.95 187.63,76.53 187.19,76.48 187.05,76.56 186.53,76.56 186.08,76.34 185.66,75.53 185.67,75.11 185.33,74.66 
					184.46,74.54 184,74.24 183.26,74.22 182.84,74.06 181.89,74.23 181.22,74.09 180.97,73.84 180.66,73.78 180.61,73.9 		"/>
				<polygon class="st1" points="198.54,79.31 199.01,90.03 199.01,90.03 		"/>
				<polygon class="st1" points="199.01,90.03 199.12,92.68 199.01,90.03 		"/>
				<polygon class="st1" points="176.71,68.44 176.66,68.85 176.67,69.28 176.43,69.9 176.51,70.27 176.69,70.47 176.71,70.56 
					176.6,70.66 176.48,70.85 176.66,71.04 176.53,71.18 176.45,71.66 176.3,71.77 176.17,71.94 175.97,72 175.66,72.36 175.5,73.01 
					175.6,73.07 175.76,73.42 175.7,73.58 175.87,73.83 176.01,73.88 176.39,74.21 176.49,74.54 176.8,74.67 176.93,74.81 
					177.15,74.86 177.48,75.23 178.32,77.93 178.49,77.93 178.57,77.86 178.78,77.73 178.93,77.48 179.01,77.37 179,77.25 
					179.07,77.17 179.04,76.84 178.91,76.42 178.96,76.23 178.97,76.09 179.17,75.95 179.48,75.96 179.73,75.65 179.73,75.47 
					180.51,74.97 180.81,74.52 180.7,74.42 180.61,73.9 180.66,73.78 180.5,73.75 180.1,73.5 180.06,73.36 180.05,73.17 179.84,73.06 
					179.76,73.12 179.78,73.22 179.68,73.3 179.49,73.22 179.43,73.02 179.24,73.06 178.81,72.76 178.6,72.37 178.73,71.97 
					179.4,71.5 179.79,71.11 179.89,70.99 179.78,70.84 179.92,70.68 179.87,70.49 179.77,70.42 179.78,69.98 179.38,69.83 
					179.06,69.39 179.12,69.03 179.44,68.8 179.46,68.56 179.73,68.16 179.73,67.89 179.61,67.8 179.13,68.24 178.96,68.42 
					178.83,68.33 178.63,67.87 178.49,67.82 178.52,67.59 178.35,67.43 178.05,67.5 178.04,67.67 177.9,67.47 177.54,67.55 
					177.05,67.79 176.71,68.1 176.7,68.1 176.66,68.29 		"/>
				<polygon class="st1" points="179.56,72.73 179.51,72.83 179.73,72.99 179.9,72.85 179.8,72.73 		"/>
				<polygon class="st1" points="163.46,71.06 163.62,71.26 163.65,71.51 163.7,71.6 163.72,72.04 163.71,72.57 163.76,72.78 
					163.88,73.78 164.07,74.18 164.13,74.44 164.34,74.5 164.48,74.63 164.63,74.63 164.75,74.72 164.6,75.1 164.62,75.18 
					164.44,75.44 162.85,75.44 162.52,75.51 162.2,76.03 161.91,76.27 161.78,76.58 161.8,77.01 161.68,77.27 160.75,77.92 
					159.31,78.75 158.2,79.4 157.67,79.52 157.16,79.53 156.92,79.6 156.51,79.6 155.8,79.74 155.4,80.01 155.14,80.36 154.51,80.8 
					154.5,81.95 154.49,81.96 154.48,82.34 154.49,82.35 154.49,82.34 159.39,85.63 159.39,85.63 168.24,91.5 168.4,92.15 
					168.68,92.41 169.18,92.38 169.57,92.51 169.81,92.81 170.13,92.9 170.39,93.14 170.38,93.35 170.25,93.76 170.34,93.97 
					170.66,94.09 171.29,94.01 171.79,93.85 171.79,93.85 173.86,93.36 175.53,91.83 181.6,88.07 181.6,88.07 181.44,87.91 
					181.27,87.71 181.13,87.58 180.86,87.02 180.68,86.73 180.45,86.58 179.95,86.54 179.4,86.54 179.26,86.39 179.2,86.15 
					179.04,85.96 179,85.58 179.06,85.42 178.97,85.07 178.89,85 178.63,84.46 178.32,84.05 178.12,83.83 178.22,83.75 178.33,83.6 
					178.63,83.38 178.76,83.19 178.71,82.72 178.58,82.39 178.63,82.27 178.76,81.53 178.59,81.13 178.53,80.44 178.55,80.29 
					178.51,79.81 178.51,78.92 178.34,78.59 178.21,78.5 178.2,78.05 178.32,77.94 177.48,75.23 177.15,74.86 176.93,74.81 
					176.8,74.67 176.49,74.54 176.39,74.21 176.01,73.88 175.87,73.83 175.7,73.58 175.76,73.42 175.6,73.07 175.5,73.01 
					175.66,72.36 175.97,72 176.17,71.94 176.3,71.77 176.45,71.66 176.53,71.18 176.66,71.04 176.48,70.85 176.6,70.66 176.71,70.56 
					176.69,70.47 176.51,70.27 176.43,69.9 176.67,69.28 176.66,68.85 176.71,68.44 176.66,68.29 176.7,68.1 176.63,68.02 
					176.25,68.09 176.05,68.05 175.48,68.21 175.18,67.96 174.81,67.82 174.8,67.97 174.57,68.19 174.11,68.14 174.08,67.92 
					173.88,67.78 173.57,67.85 173.55,68.04 173.27,68.09 173.15,68.29 172.97,68.22 172.76,68.22 172.48,68.44 172.18,68.44 
					172,68.16 171.63,68.14 171.47,68.09 171.11,68.15 170.83,68.11 170.69,68.14 170.45,68.06 170.28,68.1 170.14,68.37 
					169.86,68.37 169.6,68.27 169.25,68.61 169.05,68.6 168.73,68.43 168.45,68.53 167.93,68.55 167.63,68.51 166.97,69.01 
					166.59,69.06 166.41,69.07 166.09,69.27 166.07,69.47 165.9,69.69 165.75,69.69 165.67,69.61 165.47,69.62 165.33,69.72 
					165.25,69.83 164.87,69.85 164.55,70.01 164.38,70.17 164.34,70.33 164.08,70.61 163.66,70.74 163.3,70.76 163.39,70.9 		"/>
				<polygon class="st1" points="149.05,81.89 154.49,81.95 154.49,81.96 154.5,81.95 154.51,80.8 155.14,80.36 155.4,80.01 
					155.8,79.74 156.51,79.6 156.92,79.6 157.16,79.53 157.67,79.52 158.2,79.4 159.31,78.75 160.75,77.92 161.68,77.27 161.8,77.01 
					161.78,76.58 161.91,76.27 162.2,76.03 162.52,75.51 162.85,75.44 164.44,75.44 164.62,75.18 164.6,75.1 164.75,74.72 
					164.63,74.63 164.48,74.63 164.34,74.5 164.13,74.44 164.07,74.18 163.88,73.78 163.76,72.78 163.71,72.57 163.72,72.04 
					163.7,71.6 163.65,71.51 163.62,71.26 163.46,71.06 163.39,70.9 163.3,70.76 163.11,70.77 162.34,70.71 162.18,70.53 162.1,70.28 
					162.01,70.25 162,70.25 161.76,70.51 161.32,70.6 160.89,70.48 160.67,70.46 160.38,70.61 159.97,70.67 159.68,70.61 
					159.31,70.21 159.16,70.1 159.1,69.89 159.1,69.73 159.15,69.66 159.07,69.56 158.81,69.65 158.69,69.75 158.48,69.73 
					158.22,70.02 158.17,70.75 157.88,71.13 157.82,71.69 157.64,72.04 157.02,72.61 156.88,72.62 156.58,72.83 156.08,73 
					155.71,73.39 155.57,73.4 155.03,73.76 154.7,73.86 154.51,74.15 153.9,74.6 154.11,75.07 154.07,75.39 153.53,75.88 153.19,76.6 
					153.16,76.89 153.39,77.34 153.22,77.85 153.33,77.96 153.48,78.15 153.39,78.54 152.54,79.5 152.45,79.88 152.06,80.3 
					151.63,80.34 150.69,81.19 149.37,81.43 		"/>
				<polygon class="st1" points="148.82,88.35 148.99,87.99 149.29,87.78 149.62,87.73 150.09,87.73 150.15,84.17 154.44,84.25 
					154.49,82.35 154.48,82.34 154.49,81.95 149.05,81.89 148.52,82.62 148.52,83.15 148.28,83.16 147.34,83.65 147.25,83.92 
					146.88,84.13 146.99,84.48 146.16,85.69 146.11,86.07 145.48,86.67 145.28,86.77 144.95,87.5 144.98,87.71 144.44,88.42 
					144.42,88.56 144.58,88.68 144.34,88.77 143.91,89.56 143.75,89.6 143.56,89.8 143.58,90.14 143.43,90.43 143.46,90.87 
					148.87,90.82 		"/>
				<polygon class="st1" points="144.3,97.92 144.57,97.66 145.3,97.54 146,97.27 146.23,97.27 146.87,97.47 147.22,97.55 
					147.5,97.93 147.5,98.06 147.69,98.14 147.92,98.05 148.01,98.11 148.23,98.09 148.35,98.19 148.4,98.53 148.69,98.77 
					148.69,99.08 148.98,99.14 149.06,99.42 149.29,99.51 149.66,99.73 149.72,99.94 149.73,99.94 150.05,99.69 150.46,99.67 
					150.61,99.29 150.59,99.11 150.59,98.6 151.01,98.46 151.33,98.47 151.37,98.81 151.61,99.25 151.75,99.34 152.07,98.71 
					152.76,98.41 153.07,98.53 153.09,98.92 153.24,99.08 153.47,98.81 153.64,98.81 153.8,99.02 153.94,99.08 158.75,99.06 
					159.19,97.84 158.78,97.58 157.74,85.65 159.38,85.63 159.39,85.63 159.39,85.63 154.49,82.34 154.49,82.35 154.44,84.25 
					150.15,84.17 150.09,87.73 149.62,87.73 149.29,87.78 148.99,87.99 148.82,88.35 148.87,90.82 143.46,90.87 143.47,90.93 
					143.33,91.22 143.35,91.75 143.65,91.41 143.76,91.74 143.87,91.8 144.04,91.66 144.43,92.25 144.25,92.42 144.35,92.71 
					144.26,93.17 144.08,93.17 143.93,93.28 144.31,93.87 144.58,95.27 144.49,96.24 144.16,96.7 143.94,97.54 143.87,98.09 
					144.1,97.92 		"/>
				<polygon class="st1" points="154.49,82.34 154.49,82.35 154.49,82.35 		"/>
				<polygon class="st1" points="154.49,82.35 154.49,82.35 154.44,84.25 		"/>
				<polygon class="st1" points="159.38,85.63 157.74,85.65 158.78,97.58 159.19,97.84 158.75,99.06 153.94,99.08 153.8,99.02 
					153.64,98.81 153.47,98.81 153.24,99.08 153.09,98.92 153.07,98.53 152.76,98.41 152.07,98.71 151.75,99.34 151.61,99.25 
					151.37,98.81 151.33,98.47 151.01,98.46 150.59,98.6 150.59,99.11 150.61,99.29 150.46,99.67 150.05,99.69 149.73,99.94 
					149.91,100.1 149.91,100.34 150,100.54 149.85,101.08 149.89,101.25 150.22,101.56 150.36,101.9 150.53,102.05 150.67,102.02 
					150.83,102.15 150.89,102.33 151.07,102.54 151.06,102.69 150.98,102.85 151,103.06 151.35,103.25 151.33,103.49 151.27,103.65 
					151.27,103.67 151.42,103.75 151.72,103.62 151.9,103.69 152.2,103.9 152.54,103.9 152.81,103.71 153,103.69 153.25,103.32 
					153.51,103.31 153.88,103.46 154,103.36 154.24,103.28 154.27,103.42 154.57,103.67 154.71,103.95 154.62,104.33 154.77,104.44 
					155.07,104.51 155.07,104.67 154.83,105.01 154.7,105.36 154.93,105.33 155.07,105.15 155.24,105.14 155.24,105.4 155.34,105.56 
					155.34,105.72 155.69,105.73 155.82,105.88 155.83,106.06 156.23,105.84 156.4,105.82 156.72,105.98 157.27,106.02 157.38,105.91 
					157.4,105.8 157.84,105.71 158.2,105.76 158.12,105.85 158.23,106 158.66,106.14 158.9,105.76 159.07,105.64 159.15,105.32 
					159.03,105.11 159.04,104.84 159.31,104.78 159.27,104.4 159.18,104.15 159.42,103.95 159.76,103.69 160.15,102.98 160.43,102.59 
					160.45,102.4 160.76,101.86 160.94,101.8 160.99,101.62 161.4,101.6 161.55,101.64 162.25,101.44 162.37,101.16 163.11,100.67 
					164.15,100.1 164.49,99.81 164.9,99.58 165.55,99.47 165.89,99.44 166.27,99.56 166.51,99.58 166.61,99.68 166.65,99.6 
					166.97,99.68 167.9,99.59 168.21,99.62 168.56,99.45 169.15,99.45 169.42,99.45 169.81,99.19 170.21,99.16 170.61,98.95 
					171.29,98.58 171.38,98.28 171.42,97.81 171.64,97.68 171.73,96.46 171.79,93.85 171.79,93.85 171.29,94.01 170.66,94.09 
					170.34,93.97 170.25,93.76 170.38,93.35 170.39,93.14 170.13,92.9 169.81,92.81 169.57,92.51 169.18,92.38 168.68,92.41 
					168.4,92.15 168.24,91.5 159.39,85.63 		"/>
				<polygon class="st1" points="168.24,91.5 159.39,85.63 159.39,85.63 		"/>
				<polygon class="st1" points="159.39,85.63 159.39,85.63 159.38,85.63 		"/>
				<polygon class="st1" points="168.86,103.1 169.02,102.89 168.99,102.63 168.89,102.53 168.85,102.36 168.71,102.28 168.12,102.59 
					167.65,102.23 167.63,101.68 166.34,100.83 166.34,100.44 166.51,100.16 166.56,99.79 166.61,99.68 166.51,99.58 166.27,99.56 
					165.89,99.44 165.55,99.47 164.9,99.58 164.49,99.81 164.15,100.1 163.11,100.67 162.37,101.16 162.25,101.44 161.55,101.64 
					161.4,101.6 160.99,101.62 160.94,101.8 160.76,101.86 160.45,102.4 160.43,102.59 160.15,102.98 159.76,103.69 159.42,103.95 
					159.18,104.15 159.27,104.4 159.31,104.78 159.04,104.84 159.03,105.11 159.15,105.32 159.07,105.64 159.11,105.61 159.5,105.93 
					160.01,106.2 160.2,106.2 160.36,106.3 160.56,106.3 160.85,106.43 160.99,106.64 161.42,106.86 161.75,106.8 162,106.62 
					162.18,106.63 162.37,106.76 162.66,106.81 162.65,106.41 162.5,106.03 162.36,105.91 162.26,105.49 162.3,105.19 162.77,105.16 
					163.77,105.16 163.89,105.11 164.59,105.11 165.09,105.03 165.41,105.02 165.72,104.88 165.82,104.9 165.82,104.9 165.92,104.88 
					167.33,105.23 167.38,105.11 167.73,105.03 167.68,104.75 167.9,104.59 167.87,104.34 168.15,104.21 168.29,104.28 168.72,104.06 
					168.95,104.05 169.25,103.69 169.25,103.48 169.16,103.49 		"/>
				<polygon class="st1" points="144.4,103.17 145.31,103.25 145.56,102.93 146.05,102.72 147.27,102.75 147.61,102.84 147.61,102.82 
					147.87,102.77 148.72,102.78 149.27,103.06 149.5,103.24 149.92,103.21 150.35,103.4 150.57,103.27 150.83,103.28 150.96,103.42 
					151.24,103.45 151.27,103.65 151.33,103.49 151.35,103.25 151,103.06 150.98,102.85 151.06,102.69 151.07,102.54 150.89,102.33 
					150.83,102.15 150.67,102.02 150.53,102.05 150.36,101.9 150.22,101.56 149.89,101.25 149.85,101.08 150,100.54 149.91,100.34 
					149.91,100.1 149.72,99.94 149.66,99.73 149.29,99.51 149.06,99.42 148.98,99.14 148.69,99.08 148.69,98.77 148.4,98.53 
					148.35,98.19 148.23,98.09 148.01,98.11 147.92,98.05 147.69,98.14 147.5,98.06 147.5,97.93 147.22,97.55 146.87,97.47 
					146.23,97.27 146,97.27 145.3,97.54 144.57,97.66 144.3,97.92 144.1,97.92 143.87,98.09 143.81,98.53 143.47,99.17 142.62,99.94 
					143.08,100.31 143.37,100.83 143.63,100.87 143.63,101.15 143.52,101.17 143.85,101.39 143.67,101.52 143.71,101.63 
					144.32,101.64 144.47,101.56 144.71,101.56 145.2,101.19 145.57,101.03 145.8,101.1 146.14,101.11 146.57,101.38 146.81,101.38 
					147.41,101.74 147.52,101.72 147.63,101.89 147.54,102.07 147.24,102.05 146.79,101.87 146.45,101.75 146.16,101.75 
					145.84,101.54 145.71,101.59 145.51,101.75 145.43,101.69 145.24,101.65 144.95,101.85 144.69,101.91 144.46,102.18 
					143.63,102.18 143.5,102.31 143.5,102.62 143.36,102.77 143.43,102.87 143.74,102.7 144.2,102.87 143.9,103.05 143.76,103 
					143.54,102.94 143.64,103.03 143.63,103.29 143.96,103.4 		"/>
				<polygon class="st1" points="144.46,102.18 144.69,101.91 144.95,101.85 145.24,101.65 145.43,101.69 145.51,101.75 
					145.71,101.59 145.84,101.54 146.16,101.75 146.45,101.75 146.79,101.87 147.24,102.05 147.54,102.07 147.63,101.89 
					147.52,101.72 147.41,101.74 146.81,101.38 146.57,101.38 146.14,101.11 145.8,101.1 145.57,101.03 145.2,101.19 144.71,101.56 
					144.47,101.56 144.32,101.64 143.71,101.63 143.77,101.83 144.12,102.01 144.43,101.93 144.22,102.12 143.85,102.13 
					143.58,101.78 143.34,102.02 143.5,102.21 143.5,102.31 143.63,102.18 		"/>
				<polygon class="st1" points="146.69,104.78 147.05,104.58 147.52,104.49 147.74,104.32 147.75,104.07 147.61,103.92 
					147.59,103.46 147.66,103.25 147.61,102.84 147.27,102.75 146.05,102.72 145.56,102.93 145.31,103.25 144.4,103.17 143.96,103.4 
					143.63,103.29 143.63,103.3 143.74,103.5 144.19,103.52 144.38,103.54 144.13,103.73 144.38,103.97 144.65,103.99 144.72,104.13 
					144.88,104.16 145.22,104.04 145.55,103.97 145.92,104.17 145.81,104.26 145.13,104.27 145.21,104.38 145.44,104.41 
					145.56,104.54 145.48,104.67 145.63,104.68 145.31,105.02 145.89,104.96 145.87,105.19 145.93,105.27 146.25,105.17 
					146.41,104.85 		"/>
				<polygon class="st1" points="149.13,107.33 149.13,107.15 149.5,106.82 149.71,106.59 150.06,106.45 151.2,106.45 151.38,106.8 
					151.54,107.03 151.87,107.63 151.83,107.85 152.09,108.1 152.09,108.3 151.9,108.38 151.88,108.61 152.03,108.68 152,108.81 
					152.32,108.67 152.44,108.71 153.01,108.52 153.27,108.64 153.44,108.95 153.7,109.1 153.67,109.63 153.62,109.91 153.97,110.32 
					154.13,110.26 154.53,109.97 154.67,110 154.88,110.2 154.94,110.34 154.96,110.3 155.19,110.22 155.55,109.43 155.59,109.15 
					155.5,109.03 155.24,108.74 155.24,108.56 155.41,108.47 155.63,108.5 155.66,108.32 155.49,108.04 155.34,107.94 155.29,107.46 
					155.37,107.27 155.32,106.64 155.22,106.52 155.22,106.32 155.72,106.12 155.83,106.06 155.82,105.88 155.69,105.73 
					155.34,105.72 155.34,105.56 155.24,105.4 155.24,105.14 155.07,105.15 154.93,105.33 154.7,105.36 154.83,105.01 155.07,104.67 
					155.07,104.51 154.77,104.44 154.62,104.33 154.71,103.95 154.57,103.67 154.27,103.42 154.24,103.28 154,103.36 153.88,103.46 
					153.51,103.31 153.25,103.32 153,103.69 152.81,103.71 152.54,103.9 152.2,103.9 151.9,103.69 151.72,103.62 151.42,103.75 
					151.27,103.67 151.27,103.66 151.24,103.45 150.96,103.42 150.83,103.28 150.57,103.27 150.35,103.4 149.92,103.21 149.5,103.24 
					149.27,103.06 148.72,102.78 147.87,102.77 147.61,102.82 147.66,103.25 147.59,103.46 147.61,103.92 147.75,104.07 
					147.74,104.32 147.52,104.49 147.05,104.58 146.69,104.78 146.41,104.85 146.25,105.17 146.28,105.17 146.49,105.4 146.37,105.9 
					146.67,106.32 146.98,106.34 147.19,106.42 147.31,106.25 147.53,106.35 147.43,106.45 147.42,106.67 147.54,106.79 147.83,106.8 
					147.93,107.21 148.3,107.4 148.5,107.56 148.71,107.55 		"/>
				<polygon class="st1" points="151.31,111.08 151.36,111.1 151.31,111.08 		"/>
				<polygon class="st1" points="152.53,112.24 152.53,112.24 152.03,111.9 		"/>
				<polygon class="st1" points="151.27,103.66 151.27,103.67 151.27,103.65 		"/>
				<polygon class="st1" points="151.24,103.45 151.27,103.66 151.27,103.65 		"/>
				<polygon class="st1" points="151,110.43 151.32,110.28 151.61,109.95 151.57,109.75 151.7,109.38 151.88,109.29 151.88,109.1 
					151.97,108.82 152,108.81 152.03,108.68 151.88,108.61 151.9,108.38 152.09,108.3 152.09,108.1 151.83,107.85 151.87,107.63 
					151.54,107.03 151.38,106.8 151.2,106.45 150.06,106.45 149.71,106.59 149.5,106.82 149.13,107.15 149.13,107.33 148.71,107.55 
					148.5,107.56 148.51,107.58 148.37,107.83 148.35,108.04 148.54,108.14 148.36,108.49 148.46,108.7 148.72,108.74 148.86,109.17 
					148.86,109.48 149.16,109.8 149.43,109.7 149.44,109.76 149.32,110 149.49,110.16 149.69,110.38 149.61,110.54 149.92,110.62 
					150.64,110.99 150.8,110.99 150.85,110.78 		"/>
				<polygon class="st1" points="149.09,110.04 149.03,110.15 149.06,110.27 149.25,110.38 149.36,110.39 149.34,110.21 
					149.23,110.08 		"/>
				<polygon class="st1" points="151.15,110.99 151.31,111.08 151.31,111.08 		"/>
				<polygon class="st1" points="155.94,113.86 156.06,113.55 155.97,113.34 156.03,113.11 156.15,112.94 156.06,112.77 
					156.24,112.63 156.16,112.35 155.98,112.34 155.79,112.21 155.69,111.94 155.53,111.86 155.36,111.9 155.2,111.7 154.97,111.7 
					154.86,111.77 154.64,111.69 154.6,111.56 152.53,112.24 152.59,112.28 153.43,113.12 153.72,113.15 154.75,113.92 156.08,114.4 
					156.07,114.08 		"/>
				<polygon class="st1" points="154.57,111.43 154.76,111.23 154.98,110.72 154.89,110.46 154.94,110.34 154.88,110.2 154.67,110 
					154.53,109.97 154.13,110.26 153.97,110.32 153.62,109.91 153.67,109.63 153.7,109.1 153.44,108.95 153.27,108.64 153.01,108.52 
					152.44,108.71 152.32,108.67 152,108.81 151.98,108.9 151.89,110.69 151.31,111.08 151.36,111.1 151.25,111.3 151.48,111.4 
					151.83,111.89 152.03,111.9 152.53,112.24 154.6,111.56 		"/>
				<polygon class="st1" points="151.89,110.69 151.98,108.9 152,108.81 151.97,108.82 151.88,109.1 151.88,109.29 151.7,109.38 
					151.57,109.75 151.61,109.95 151.32,110.28 151,110.43 150.85,110.78 150.8,110.99 151.15,110.99 151.31,111.08 		"/>
				<polygon class="st1" points="162.46,113.27 162.65,113.23 162.67,112.85 162.54,112.63 162.23,112.54 162.2,112.21 162,111.7 
					161.84,111.53 161.85,111.42 161.97,111.34 161.95,110.73 162.08,110.55 162.1,110.24 162.2,110.03 162.17,109.76 162.6,109.12 
					162.88,108.95 162.88,108.68 162.99,108.38 162.88,108.04 162.68,107.86 162.68,107.63 162.56,107.34 162.67,106.91 
					162.66,106.81 162.37,106.76 162.18,106.63 162,106.62 161.75,106.8 161.42,106.86 160.99,106.64 160.85,106.43 160.56,106.3 
					160.36,106.3 160.2,106.2 160.01,106.2 159.5,105.93 159.11,105.61 159.07,105.64 158.9,105.76 158.66,106.14 158.23,106 
					158.12,105.85 158.2,105.76 157.84,105.71 157.4,105.8 157.38,105.91 157.27,106.02 156.72,105.98 156.4,105.82 156.23,105.84 
					155.72,106.12 155.22,106.32 155.22,106.52 155.32,106.64 155.37,107.27 155.29,107.46 155.34,107.94 155.49,108.04 
					155.66,108.32 155.63,108.5 155.41,108.47 155.24,108.56 155.24,108.74 155.5,109.03 155.59,109.15 155.55,109.43 155.19,110.22 
					154.96,110.3 154.94,110.34 154.94,110.34 154.89,110.46 154.98,110.72 154.76,111.23 154.57,111.43 154.6,111.56 154.6,111.56 
					154.64,111.69 154.86,111.77 154.97,111.7 155.2,111.7 155.36,111.9 155.53,111.86 155.69,111.94 155.79,112.21 155.98,112.34 
					156.16,112.35 156.24,112.63 156.06,112.77 156.15,112.94 156.03,113.11 155.97,113.34 156.06,113.55 155.94,113.86 
					156.07,114.08 156.08,114.4 156.21,114.45 156.68,114.04 156.98,114.04 157.08,113.91 158.01,113.56 158.02,113.42 158.53,113.35 
					160.32,113.34 160.99,113.13 161.62,113.42 161.68,113.09 161.93,113.03 162.13,113.38 162.18,113.28 		"/>
				<polygon class="st1" points="158.9,105.76 159.07,105.64 159.07,105.64 		"/>
				<polygon class="st1" points="159.07,105.64 159.11,105.61 159.07,105.64 		"/>
				<polygon class="st1" points="154.6,111.56 154.57,111.43 154.6,111.56 		"/>
				<polygon class="st1" points="154.94,110.34 154.94,110.34 154.89,110.46 		"/>
				<polygon class="st1" points="167.23,111.84 167.09,111.79 166.98,111.43 166.89,111.11 166.96,110.75 166.98,110.57 
					167.12,110.29 167.07,109.49 166.98,109.29 167.02,108.83 166.91,108.63 167.02,108.46 166.98,108.2 166.86,108.1 166.88,107.9 
					166.98,107.7 166.96,107.24 166.85,107.2 166.71,107.09 166.7,106.61 166.78,106.23 166.49,106.03 166.37,105.86 166.08,105.59 
					166.05,105.39 165.93,105.27 165.82,104.9 165.72,104.88 165.41,105.02 165.09,105.03 164.59,105.11 163.89,105.11 163.77,105.16 
					162.77,105.16 162.3,105.19 162.26,105.49 162.36,105.91 162.5,106.03 162.65,106.41 162.67,106.91 162.56,107.34 162.68,107.63 
					162.68,107.86 162.88,108.04 162.99,108.38 162.88,108.68 162.88,108.95 162.6,109.12 162.17,109.76 162.2,110.03 162.1,110.24 
					162.08,110.55 161.95,110.73 161.97,111.34 161.85,111.42 161.84,111.53 162,111.7 162.2,112.21 162.23,112.54 162.54,112.63 
					162.67,112.85 162.65,113.23 162.46,113.27 162.18,113.28 162.13,113.38 162.2,113.51 162.93,113.61 163.46,113.84 164.62,113.28 
					165.44,113.21 166.15,112.62 166.79,112.31 167.52,112.21 167.38,111.99 		"/>
				<polygon class="st1" points="168.37,111.2 168.35,110.82 168.26,110.48 168.3,108.86 168.32,108.63 168.46,108.45 168.46,108.12 
					168.35,107.91 168.37,107.54 168.25,106.97 167.98,106.25 167.84,106.17 167.67,105.98 167.33,105.84 167.25,105.41 
					167.33,105.23 165.92,104.88 165.82,104.9 165.93,105.27 166.05,105.39 166.08,105.59 166.37,105.86 166.49,106.03 166.78,106.23 
					166.7,106.61 166.71,107.09 166.85,107.2 166.96,107.24 166.98,107.7 166.88,107.9 166.86,108.1 166.98,108.2 167.02,108.46 
					166.91,108.63 167.02,108.83 166.98,109.29 167.07,109.49 167.12,110.29 166.98,110.57 166.96,110.75 166.89,111.11 
					166.98,111.43 167.09,111.79 167.23,111.84 167.38,111.99 167.52,112.21 167.64,112.2 168.36,111.75 168.5,111.77 168.55,111.51 
							"/>
				<polygon class="st1" points="169.98,110.58 169.94,110.35 169.95,110.16 169.88,109.58 169.94,109.38 169.92,109.23 
					169.87,109.14 169.91,109.03 169.87,108.8 169.85,108.7 169.88,108.41 169.91,108.22 169.88,107.97 169.99,107.81 170.2,107.73 
					170.36,107.7 170.49,107.6 170.61,107.35 170.8,107.02 170.87,106.82 171.06,106.65 171.24,106.67 171.31,106.54 171.02,106.23 
					171.04,106.11 171.15,105.94 171.44,105.92 171.49,105.76 171.35,105.28 171.35,104.95 170.98,104.65 170.92,104.44 
					170.98,104.16 171.01,104.13 170.72,103.75 170.41,103.68 170.16,103.34 169.72,102.98 169.6,103.23 169.64,103.38 169.39,103.46 
					169.25,103.48 169.25,103.69 168.95,104.05 168.72,104.06 168.29,104.28 168.15,104.21 167.87,104.34 167.9,104.59 167.68,104.75 
					167.73,105.03 167.38,105.11 167.33,105.23 167.25,105.41 167.33,105.84 167.67,105.98 167.84,106.17 167.98,106.25 
					168.25,106.97 168.37,107.54 168.35,107.91 168.46,108.12 168.46,108.45 168.32,108.63 168.3,108.86 168.26,110.48 168.35,110.82 
					168.37,111.2 168.55,111.51 168.5,111.77 168.99,111.83 169.92,111.51 169.97,111.53 169.92,111.26 		"/>
				<polygon class="st1" points="167.33,105.23 167.38,105.11 167.33,105.23 		"/>
				<polygon class="st1" points="167.25,105.41 167.33,105.23 167.33,105.23 		"/>
				<polygon class="st1" points="185.55,88.56 186.2,90.44 186.18,90.8 186.1,90.95 187.01,92.05 186.98,92.54 186.77,92.75 
					186.41,95.3 186.46,97.27 184.22,99.56 184.15,99.72 184.01,99.77 183.85,99.77 183.82,99.94 183.92,101.64 184.1,101.71 
					184.45,102.16 184.64,102.49 184.66,102.5 184.66,102.5 185.33,102.84 185.63,103.13 185.71,103.52 185.81,103.65 185.87,103.88 
					186.02,104.26 186.02,104.44 185.95,104.58 185.94,104.69 186.09,104.87 185.99,105.22 185.83,105.39 185.84,105.65 186.08,106 
					186.29,106.09 186.37,106.39 186.73,106.69 186.84,106.73 186.69,106.83 186.51,106.8 186.36,106.72 186.07,106.69 185.89,106.71 
					185.69,106.68 185.45,106.72 185.31,106.67 185.09,106.67 184.88,106.69 184.87,106.93 184.79,107.06 184.79,107.28 
					184.84,107.44 184.98,107.53 185.01,107.68 185.24,107.77 185.75,108.2 186.22,108.72 186.43,108.9 186.63,109.25 186.87,109.6 
					186.88,109.84 187.02,110 187.08,110.28 187.34,110.28 187.56,110.22 187.92,110.21 188.09,109.9 188.09,109.64 188.25,109.48 
					188.39,109.61 188.48,109.93 188.59,110.04 188.84,110 189.19,109.75 189.57,109.59 189.91,109.36 190.71,109.17 191.06,109.17 
					191.24,108.97 191.63,108.71 191.58,108.52 191.43,108.52 191.21,108.24 191.23,108.02 191.41,107.9 191.62,107.95 191.93,107.91 
					192.15,108 192.5,108.06 192.88,108 193.39,107.94 193.65,107.75 193.87,107.63 193.93,107.43 193.89,107.24 193.94,107 
					194.14,106.88 194.13,106.67 194.32,106.45 194.43,106.51 194.57,106.5 194.81,106.11 194.97,106.04 194.96,105.86 195.01,105.68 
					195.35,105.49 195.59,105.32 195.92,105.32 196.09,105.42 196.44,105.27 196.49,105.15 196.52,105.08 196.52,104.9 196.63,104.71 
					196.5,104.5 196,104.37 195.94,104.11 195.93,103.76 195.8,103.53 195.9,103.36 195.72,103.23 195.88,103.12 195.88,102.93 
					195.72,102.89 195.4,103.12 195.22,102.94 195.22,102.64 195.65,102.19 195.79,101.97 195.76,101.69 195.51,101.55 195.57,101.37 
					195.84,101.2 195.98,100.92 195.83,100.76 195.81,100.56 196.05,100.33 196.19,100.34 196.63,99.76 196.79,99.45 196.65,99.27 
					196.65,98.93 196.89,98.73 197.23,98.73 197.46,98.88 197.71,98.72 197.92,98.64 197.82,93.3 197.82,93.29 186.93,87.76 
					185.4,88.39 		"/>
				<polygon class="st1" points="196.49,105.15 196.52,105.08 196.49,105.15 		"/>
				<polygon class="st1" points="197.92,98.64 197.82,93.3 197.82,93.3 		"/>
				<polygon class="st1" points="196.44,105.27 196.49,105.15 196.49,105.15 		"/>
				<polygon class="st1" points="197.82,93.3 197.82,93.29 197.82,93.3 		"/>
				<polygon class="st1" points="171.64,97.68 171.42,97.81 171.38,98.28 171.29,98.58 170.61,98.95 170.21,99.16 169.81,99.19 
					169.42,99.45 169.15,99.45 168.56,99.45 168.21,99.62 167.9,99.59 166.97,99.68 166.65,99.6 166.56,99.79 166.51,100.16 
					166.34,100.44 166.34,100.83 167.63,101.68 167.65,102.23 168.12,102.59 168.71,102.28 168.85,102.36 168.89,102.53 
					168.99,102.63 169.02,102.89 168.86,103.1 169.16,103.49 169.25,103.48 169.39,103.46 169.64,103.38 169.6,103.23 169.72,102.98 
					170.16,103.34 170.41,103.68 170.72,103.75 171.01,104.13 171.22,103.96 171.21,103.82 171.06,103.81 170.89,103.43 
					170.98,103.28 170.93,103.14 171.21,102.85 171.46,102.85 171.44,102.66 171.35,102.55 171.29,102.31 171.34,102.2 171.36,102.12 
					171.31,102 171.35,101.86 171.65,101.62 171.8,101.56 171.91,101.5 172.18,101.44 172.4,101.45 172.51,101.45 172.92,101.45 
					173.03,101.35 173.25,101.34 173.4,101.39 173.77,101.45 173.94,101.54 174.16,101.58 174.56,101.73 174.69,101.88 174.98,102.31 
					175.25,102.48 175.39,102.42 175.54,102.24 175.73,102.22 175.93,102.13 176.31,102.05 176.36,102 176.59,102.01 176.82,102.19 
					176.82,102.3 177.1,102.4 177.53,102.64 177.81,102.68 178.36,102.88 178.61,102.94 178.94,102.72 179.28,102.24 179.57,102.16 
					180.28,102.2 180.57,102.06 181.17,102.13 181.61,102.34 181.99,102.35 182.15,102.47 182.56,102.31 182.59,102.25 182.88,102.14 
					182.96,101.98 183.13,101.94 183.34,102.02 183.47,101.96 183.51,101.79 183.67,101.55 183.92,101.64 183.82,99.94 183.85,99.77 
					184.01,99.77 184.15,99.72 184.22,99.56 186.46,97.27 186.41,95.3 186.77,92.75 186.98,92.54 187.01,92.05 186.1,90.95 
					186.18,90.8 186.2,90.44 185.55,88.56 185.4,88.39 184.19,88.89 183.97,88.66 181.6,88.07 181.6,88.07 175.53,91.83 173.86,93.36 
					171.79,93.85 171.73,96.46 		"/>
				<polygon class="st1" points="183.97,88.66 181.6,88.07 181.6,88.07 		"/>
				<polygon class="st1" points="181.6,88.07 181.6,88.07 181.6,88.07 		"/>
				<polygon class="st1" points="169.16,103.49 169.25,103.48 169.25,103.48 		"/>
				<polygon class="st1" points="169.25,103.48 169.39,103.46 169.25,103.48 		"/>
				<polygon class="st1" points="182.47,102.51 182.56,102.31 182.15,102.47 182.26,102.56 		"/>
				<polygon class="st1" points="177.77,113.51 177.91,113.17 177.86,112.85 177.84,112.56 178,112.46 178,112.26 178.22,112.06 
					178.46,111.9 178.57,111.76 178.97,111.46 178.95,111.19 179.01,111.04 179.31,111.03 179.44,110.86 179.51,110.93 179.87,111.04 
					180.01,111.03 180.27,111.16 180.42,111.43 180.65,111.6 180.81,111.67 181.09,111.5 181.27,111.2 181.27,111.08 181.38,110.93 
					181.58,110.86 181.74,110.61 181.73,110.42 181.83,110.1 182.25,109.68 182.3,109.46 182.23,109.27 182.36,109.06 182.71,108.68 
					182.99,108.5 183.01,108.21 183.12,108.02 183.06,107.6 183.26,107.42 183.62,107.32 183.86,107.02 183.91,106.71 183.91,106.36 
					183.87,106.15 184.02,105.89 184.25,105.43 184.39,105.32 184.43,105.2 184.69,104.99 184.84,105.01 185.03,104.8 185.34,104.66 
					185.36,104.49 185.26,104.13 185.25,103.98 185.16,103.76 184.92,103.69 184.8,103.45 184.81,103.04 184.78,102.83 184.66,102.5 
					184.64,102.49 184.45,102.16 184.1,101.71 183.92,101.64 183.67,101.55 183.51,101.79 183.47,101.96 183.34,102.02 183.13,101.94 
					182.96,101.98 182.88,102.14 182.59,102.25 182.54,102.77 182.15,102.47 181.99,102.35 181.61,102.34 181.17,102.13 
					180.57,102.06 180.28,102.2 179.57,102.16 179.28,102.24 178.94,102.72 178.61,102.94 178.36,102.88 177.81,102.68 177.53,102.64 
					177.1,102.4 176.82,102.3 176.82,102.19 176.59,102.01 176.36,102 176.31,102.05 175.93,102.13 175.73,102.22 175.54,102.24 
					175.39,102.42 175.25,102.48 174.98,102.31 174.69,101.88 174.56,101.73 174.16,101.58 173.94,101.54 173.77,101.45 173.4,101.39 
					173.25,101.34 173.03,101.35 172.92,101.45 172.51,101.45 172.4,101.45 172.18,101.44 171.91,101.5 171.8,101.56 171.65,101.62 
					171.35,101.86 171.31,102 171.36,102.12 171.34,102.2 171.29,102.31 171.35,102.55 171.44,102.66 171.46,102.85 171.21,102.85 
					170.93,103.14 170.98,103.28 170.89,103.43 171.06,103.81 171.21,103.82 171.22,103.96 171.01,104.13 170.98,104.16 
					170.92,104.44 170.98,104.65 171.35,104.95 171.35,105.28 171.49,105.76 171.44,105.92 171.15,105.94 171.04,106.11 
					171.02,106.23 171.31,106.54 171.24,106.67 171.06,106.65 170.87,106.82 170.8,107.02 170.61,107.35 170.49,107.6 170.36,107.7 
					170.2,107.73 169.99,107.81 169.88,107.97 169.91,108.22 169.88,108.41 169.85,108.7 169.87,108.8 169.91,109.03 169.87,109.14 
					169.92,109.23 169.94,109.38 169.88,109.58 169.95,110.16 169.94,110.35 169.98,110.58 169.92,111.26 169.97,111.53 170.5,111.64 
					170.93,111.46 171.92,111.98 172.47,112.53 172.81,113.18 172.8,113.61 172.98,113.7 173.14,114.17 173.48,114.49 173.97,114.62 
					175.28,114.55 175.55,114.39 175.74,114.47 176.37,114.24 176.57,114.33 176.92,114.26 177.05,113.88 177.3,114.14 177.4,114.08 
					177.41,114.08 177.42,113.91 		"/>
				<polygon class="st1" points="170.98,104.16 171.01,104.13 171.01,104.13 		"/>
				<polygon class="st1" points="183.92,101.64 184.1,101.71 183.92,101.64 		"/>
				<polygon class="st1" points="171.01,104.13 171.22,103.96 171.01,104.13 		"/>
				<polygon class="st1" points="183.67,101.55 183.92,101.64 183.92,101.64 		"/>
				<polygon class="st1" points="181.99,102.35 182.15,102.47 182.15,102.47 		"/>
				<polygon class="st1" points="182.56,102.31 182.47,102.51 182.26,102.56 182.15,102.47 182.54,102.77 182.59,102.25 
					182.56,102.31 		"/>
				<polygon class="st1" points="182.56,102.31 182.56,102.31 182.47,102.51 		"/>
				<polygon class="st1" points="182.15,102.47 182.15,102.47 182.26,102.56 		"/>
				<polygon class="st1" points="174.5,120.33 174.61,120.34 174.76,120.25 174.85,120.05 174.62,119.91 174.46,120.08 		"/>
				<polygon class="st1" points="177.72,115.59 177.69,115.2 177.6,115.11 177.31,115.4 177.21,115.71 177.03,115.73 177.01,115.93 
					177.27,116.08 177.53,116.11 		"/>
				<polygon class="st1" points="179.27,117.49 179.35,117.55 180.96,117.54 180.96,117.54 181,117.48 181.12,117.43 181.25,117.44 
					181.39,117.37 181.77,117.38 181.88,117.35 182.31,117.37 182.43,117.42 182.65,117.37 182.84,117.37 182.87,117.43 
					183.21,117.46 183.27,117.42 183.38,117.41 183.47,117.52 185.19,117.55 185.34,117.62 185.41,117.55 185.52,117.55 185.66,117.7 
					185.79,117.66 185.96,117.71 186.05,117.82 186.19,117.79 186.22,117.7 186.32,117.73 186.52,117.87 186.63,117.83 186.93,117.83 
					187.04,117.89 187.15,117.92 187.26,117.9 187.3,117.98 187.45,117.96 187.49,117.83 187.36,117.6 187.42,117.5 187.56,117.28 
					187.65,117.09 187.68,117.03 187.65,117 187.59,116.91 187.6,116.7 187.56,116.42 187.13,116.09 186.97,115.94 186.76,115.54 
					186.43,115.05 186.35,114.76 186.13,114.5 185.74,114.31 185.61,114.21 185.61,113.66 185.58,113.36 185.47,113.01 185.53,112.68 
					185.42,112.32 185.38,112.03 185.5,111.85 185.65,111.79 185.92,111.42 186.07,111.09 186.32,110.63 186.44,110.35 186.63,110.27 
					186.88,109.93 186.88,109.84 186.87,109.6 186.63,109.25 186.43,108.9 186.22,108.72 185.75,108.2 185.24,107.77 185.01,107.68 
					184.98,107.53 184.84,107.44 184.79,107.28 184.79,107.06 184.87,106.93 184.88,106.69 185.09,106.67 185.31,106.67 
					185.45,106.72 185.69,106.68 185.89,106.71 186.07,106.69 186.36,106.72 186.51,106.8 186.69,106.83 186.84,106.73 186.73,106.69 
					186.37,106.39 186.29,106.09 186.08,106 185.84,105.65 185.83,105.39 185.99,105.22 186.09,104.87 185.94,104.69 185.95,104.58 
					186.02,104.44 186.02,104.26 185.87,103.88 185.81,103.65 185.71,103.52 185.63,103.13 185.33,102.84 184.66,102.5 184.66,102.5 
					184.78,102.83 184.81,103.04 184.8,103.45 184.92,103.69 185.16,103.76 185.25,103.98 185.26,104.13 185.36,104.49 185.34,104.66 
					185.03,104.8 184.84,105.01 184.69,104.99 184.43,105.2 184.39,105.32 184.25,105.43 184.02,105.89 183.87,106.15 183.91,106.36 
					183.91,106.71 183.86,107.02 183.62,107.32 183.26,107.42 183.06,107.6 183.12,108.02 183.01,108.21 182.99,108.5 182.71,108.68 
					182.36,109.06 182.23,109.27 182.3,109.46 182.25,109.68 181.83,110.1 181.73,110.42 181.74,110.61 181.58,110.86 181.38,110.93 
					181.27,111.08 181.27,111.2 181.09,111.5 180.81,111.67 180.65,111.6 180.42,111.43 180.27,111.16 180.01,111.03 179.87,111.04 
					179.51,110.93 179.44,110.86 179.31,111.03 179.01,111.04 178.95,111.19 178.97,111.46 178.57,111.76 178.46,111.9 178.22,112.06 
					178,112.26 178,112.46 177.84,112.56 177.86,112.85 177.91,113.17 177.77,113.51 177.42,113.91 177.41,114.08 177.59,114.17 
					177.81,114.06 177.97,114.89 178.21,114.92 178.33,115.06 178.73,114.89 178.93,115.21 178.84,115.39 178.84,115.77 
					179.09,116.11 179.14,116.63 178.95,117.1 179.15,117.31 178.93,117.52 179.11,117.49 		"/>
				<polygon class="st1" points="186.88,109.84 186.88,109.93 186.88,109.84 		"/>
				<polygon class="st1" points="184.66,102.5 185.33,102.84 184.66,102.5 		"/>
				<polygon class="st1" points="186.87,109.6 186.88,109.84 186.88,109.84 		"/>
				<polygon class="st1" points="184.66,102.5 184.66,102.5 184.66,102.5 		"/>
				<polygon class="st1" points="180.91,125.3 181.04,125.23 181.28,125.22 181.36,125.08 181.47,125.08 181.84,125.38 181.86,125.14 
					181.83,124.47 181.6,124.3 181.47,124.19 181.26,124.25 181.05,124.31 181.09,124.05 180.99,123.86 181.12,123.73 181.4,123.69 
					181.66,123.84 181.79,123.74 181.86,123.58 182.06,123.58 182.54,123.56 182.61,123.34 182.56,123.01 182.69,122.86 
					182.95,122.88 183.17,123.43 183.35,123.65 183.67,123.56 183.84,123.6 184,123.49 184.28,123.48 184.56,123.6 184.63,123.78 
					184.76,123.78 184.78,123.53 184.71,123.29 185.05,122.3 185.18,121.75 185.19,121.48 185.06,121.34 184.99,121.19 184.79,121.01 
					184.74,120.89 184.58,120.82 184.53,120.71 184.44,120.59 184.44,120.5 184.59,120.44 184.66,120.36 184.74,120.34 184.68,120.16 
					184.61,120.07 184.62,119.89 184.91,119.73 185.16,119.68 185.2,119.42 185.11,119.28 185.21,119.11 185.18,118.7 185.03,118.6 
					184.6,118.59 184.31,118.7 184.01,118.78 183.82,118.73 183.61,118.85 183.48,118.78 183.53,118.61 183.45,118.39 183.49,118.05 
					183.4,117.79 183.46,117.52 183.47,117.52 183.38,117.41 183.27,117.42 183.21,117.46 182.87,117.43 182.84,117.37 182.65,117.37 
					182.43,117.42 182.31,117.37 181.88,117.35 181.77,117.38 181.39,117.37 181.25,117.44 181.12,117.43 181,117.48 180.96,117.54 
					180.96,119.15 179.11,119.13 179.03,119.07 178.88,119.1 178.71,119.22 178.55,119.19 178.53,119.51 178.25,119.55 178.51,119.98 
					178.93,120.08 178.34,120.22 178.19,120.07 178.15,120.45 178.08,121.19 177.83,121.41 177.5,121.3 177.48,121.44 177.77,122.03 
					177.92,122.15 177.92,122.37 178.16,122.69 178.16,123.09 178.37,123.3 178.51,123.61 178.86,123.9 178.76,123.97 179.13,124.36 
					179.74,124.85 179.86,125.15 180.35,125.38 180.39,125.61 180.63,125.7 180.69,125.76 180.88,125.48 		"/>
				<polygon class="st1" points="178.88,119.1 179.03,119.07 179.11,119.13 180.96,119.15 180.96,117.54 180.96,117.54 179.35,117.55 
					179.27,117.49 179.11,117.49 178.93,117.52 178.88,117.57 178.98,117.81 178.55,118.29 178.22,118.94 178.55,119.11 
					178.55,119.19 178.71,119.22 		"/>
				<polygon class="st1" points="182.09,126.97 182.18,126.97 182.39,126.85 182.47,126.61 182.67,126.57 182.9,126.38 183.01,126.38 
					183.15,126.5 183.28,126.68 183.29,126.9 183.33,126.86 183.5,126.88 183.7,126.78 183.78,126.92 183.76,127.04 184.02,127.05 
					184.18,126.87 184.18,126.58 184.37,126.56 184.55,126.61 184.83,126.37 185.25,126.23 185.23,126.36 185.07,126.66 
					185.14,126.72 185.22,126.95 185.54,127.14 185.86,127 186.05,126.71 186.61,126.17 186.7,125.97 186.91,125.82 187.15,125.76 
					187.38,125.4 187.37,125.16 187.46,124.79 187.51,124.05 187.43,123.94 187.37,123.56 187.52,123.27 187.93,122.84 187.94,122.55 
					188.19,122.23 188.51,122.01 188.68,122.06 188.92,121.88 189.18,121.81 189.61,121.1 189.62,120.64 189.73,120.19 189.93,120.11 
					189.97,119.73 189.91,119.65 189.99,119.24 189.95,119.07 189.99,118.67 190.18,118.42 190.2,118.12 190.28,117.83 190.16,117.36 
					190.75,116.61 190.81,116.37 191.07,116.23 191.06,115.69 190.93,115.42 190.94,115.35 190.78,115.39 190.65,115.44 190.4,115.31 
					190.31,115.19 190.13,115.19 189.91,115.19 189.76,115.29 189.55,115.27 188.97,115.51 188.86,115.65 188.62,115.7 188.29,116.03 
					187.65,117.09 187.56,117.28 187.42,117.5 187.36,117.6 187.49,117.83 187.45,117.96 187.3,117.98 187.26,117.9 187.15,117.92 
					187.04,117.89 186.93,117.83 186.63,117.83 186.52,117.87 186.32,117.73 186.22,117.7 186.19,117.79 186.05,117.82 185.96,117.71 
					185.79,117.66 185.66,117.7 185.52,117.55 185.41,117.55 185.34,117.62 185.19,117.55 183.46,117.52 183.4,117.79 183.49,118.05 
					183.45,118.39 183.53,118.61 183.48,118.78 183.61,118.85 183.82,118.73 184.01,118.78 184.31,118.7 184.6,118.59 185.03,118.6 
					185.18,118.7 185.21,119.11 185.11,119.28 185.2,119.42 185.16,119.68 184.91,119.73 184.62,119.89 184.61,120.07 184.68,120.16 
					184.74,120.34 184.66,120.36 184.59,120.44 184.44,120.5 184.44,120.59 184.53,120.71 184.58,120.82 184.74,120.89 184.79,121.01 
					184.99,121.19 185.06,121.34 185.19,121.48 185.18,121.75 185.05,122.3 184.71,123.29 184.78,123.53 184.76,123.78 184.63,123.78 
					184.56,123.6 184.28,123.48 184,123.49 183.84,123.6 183.67,123.56 183.35,123.65 183.17,123.43 182.95,122.88 182.69,122.86 
					182.56,123.01 182.61,123.34 182.54,123.56 182.06,123.58 181.86,123.58 181.79,123.74 181.66,123.84 181.4,123.69 181.12,123.73 
					180.99,123.86 181.09,124.05 181.05,124.31 181.26,124.25 181.47,124.19 181.6,124.3 181.83,124.47 181.86,125.14 181.84,125.38 
					181.47,125.08 181.36,125.08 181.28,125.22 181.04,125.23 180.91,125.3 180.88,125.48 180.69,125.76 180.96,126.02 181.05,126.19 
					181.46,126.45 181.47,126.69 181.68,126.93 181.67,127.19 181.82,127.36 181.96,127.28 		"/>
				<polygon class="st1" points="182.5,128.17 182.66,128.02 182.63,127.53 182.74,127.39 183.03,127.14 183.29,126.9 183.28,126.68 
					183.15,126.5 183.01,126.38 182.9,126.38 182.67,126.57 182.47,126.61 182.39,126.85 182.18,126.97 182.09,126.97 181.96,127.28 
					181.82,127.36 181.99,127.54 182.08,127.93 181.93,128.21 182,128.37 182.25,128.21 		"/>
				<polygon class="st1" points="216.99,125.27 216.94,125.1 217,124.97 216.73,124.52 211.77,121.62 211.39,121.64 210.82,121.67 
					209,121.77 207.36,121.78 207.24,121.9 207.12,121.87 207.04,121.98 207.19,122.21 207.36,122.35 207.4,122.51 207.51,122.69 
					207.62,123.08 207.66,123.35 207.59,123.54 207.54,123.72 207.43,123.83 207.29,123.91 207.14,123.88 207.08,123.82 
					207.08,123.95 207.16,124.06 207.16,124.25 207.36,124.35 207.41,124.52 207.58,124.55 207.65,124.95 207.63,125.14 
					207.41,125.36 207.23,125.56 207.07,125.69 206.72,126.08 206.49,126.42 206.03,126.53 205.35,126.52 205.53,127.66 
					205.85,129.26 206.81,130.57 207.13,131.64 207.58,131.86 207.78,131.86 207.98,131.94 208.12,131.94 208.31,132.07 
					208.33,132.18 208.5,132.34 208.75,132.34 209.37,132.56 209.51,132.56 209.63,132.68 209.8,132.71 209.89,132.92 210.13,133.18 
					210.24,133.18 210.25,133.2 210.31,133.15 210.44,133.17 210.52,133.32 210.68,133.34 210.76,133.43 210.84,133.38 210.99,133.4 
					211.08,133.47 211.18,133.49 211.24,133.58 211.39,133.68 211.53,133.82 211.99,134.31 212.05,134.83 212.03,137.1 212.3,136.14 
					213.59,136.12 213.82,136.07 213.87,135.98 214.07,135.94 214.08,136.06 214.25,136.1 214.42,136.22 214.59,136.24 214.73,136.39 
					214.69,136.5 215.09,136.39 215.38,136.18 215.53,136.14 215.64,136.06 215.79,136.12 215.81,136.21 215.99,136.22 216.15,136.33 
					216.44,136.22 216.81,136.19 216.91,135.99 216.84,135.83 216.94,135.74 217.18,135.82 217.37,135.78 217.55,135.92 217.8,135.89 
					217.92,135.78 218.43,135.63 218.63,135.7 218.84,135.64 218.94,135.52 219.25,135.48 219.43,135.29 219.72,135.25 219.92,135.08 
					220.08,134.87 220.33,134.94 220.45,134.8 220.49,134.78 220.46,134.76 220.46,134.62 220.17,134.38 219.82,134.32 219.34,133.86 
					219.38,133.66 219.25,133.25 219.12,133.1 219.25,132.88 219.09,132.75 219.03,132.48 218.96,132.32 219.03,132.3 218.88,131.94 
					218.84,131.64 219.02,131.49 219.06,131.17 218.85,130.97 218.83,130.47 218.91,130.15 219.07,130.04 219.19,130.07 
					219.26,129.92 219.08,129.42 218.9,129.44 218.62,129.12 218.24,128.79 218.22,128.48 218.44,127.91 218.74,127.02 218.83,126.89 
					218.8,126.68 218.74,126.6 218.79,126.6 217.11,125.42 		"/>
				<polygon class="st1" points="211.77,121.62 211.39,121.64 211.39,121.64 		"/>
				<polygon class="st1" points="211.39,121.64 211.39,121.64 210.82,121.67 		"/>
				<polygon class="st1" points="207,121.92 206.78,121.96 206.77,122.15 206.68,122.24 206.48,122.24 206.37,122.13 206.22,122.06 
					206,122.24 205.78,122.28 205.71,122.25 205.41,122.52 205.16,122.82 204.95,123.64 204.93,123.85 205.04,123.82 205.28,123.82 
					205.42,123.87 205.53,124.09 205.76,124.18 205.84,124.09 205.93,124.06 206.06,124.19 206.33,124.1 206.33,123.97 206.5,123.56 
					206.47,123.31 206.59,123.31 206.71,123.42 206.86,123.44 206.93,123.65 207.08,123.74 207.08,123.82 207.14,123.88 
					207.29,123.91 207.43,123.83 207.54,123.72 207.59,123.54 207.66,123.35 207.62,123.08 207.51,122.69 207.4,122.51 207.36,122.35 
					207.19,122.21 207.04,121.98 		"/>
				<polygon class="st1" points="207.04,121.98 207.04,121.98 207,121.92 		"/>
				<polygon class="st1" points="207.19,122.21 207.04,121.98 207.04,121.98 		"/>
				<polygon class="st1" points="206.93,123.65 206.86,123.44 206.71,123.42 206.59,123.31 206.47,123.31 206.5,123.56 206.33,123.97 
					206.33,124.1 206.06,124.19 205.93,124.06 205.84,124.09 205.76,124.18 205.53,124.09 205.42,123.87 205.28,123.82 205.04,123.82 
					204.93,123.85 204.91,124 205.08,124.28 205.11,124.58 205.11,124.94 205.35,126.52 206.03,126.53 206.49,126.42 206.72,126.08 
					207.07,125.69 207.23,125.56 207.41,125.36 207.63,125.14 207.65,124.95 207.58,124.55 207.41,124.52 207.36,124.35 
					207.16,124.25 207.16,124.06 207.08,123.95 207.08,123.82 207.08,123.74 		"/>
				<polygon class="st1" points="182.67,128.65 182.72,128.59 182.82,128.59 182.91,128.54 183.14,128.48 183.36,128.43 
					183.56,128.45 183.75,128.47 184.02,128.47 184.33,128.46 184.73,128.44 184.94,128.46 185.37,128.48 185.84,128.44 
					186.79,128.44 188.2,128.45 188.2,128.64 188.17,128.7 188.22,128.86 188.32,129.01 188.35,129.17 188.28,129.3 188.28,129.49 
					188.43,129.74 188.51,130.06 188.56,130.17 188.57,130.33 188.68,130.42 188.8,130.59 188.97,130.84 189.05,131.33 189.2,131.41 
					189.56,131.39 189.81,131.34 189.96,131.39 190.43,131.42 190.6,131.32 191.62,131.25 191.61,130.88 191.57,130.62 191.69,130.56 
					191.79,130.35 191.83,129.96 193.14,129.94 193.15,129.81 193.56,129.85 193.55,130.01 193.46,130.15 193.5,130.29 195.08,130.41 
					195.11,130.57 195.09,130.78 195.09,130.97 194.97,131.19 194.93,131.42 195.07,131.63 195.07,131.83 195,131.93 194.97,132.02 
					195.03,132.19 195.07,132.68 194.96,132.95 195.03,133.06 195.04,133.2 195.16,133.37 195.16,133.51 195.25,133.57 195.33,133.74 
					195.44,133.76 195.46,133.92 195.41,134.1 195.41,134.24 195.59,134.41 195.59,134.56 195.52,134.64 195.57,134.92 195.73,135.04 
					195.65,135.25 195.66,135.32 195.57,135.4 195.56,135.66 195.6,135.76 195.75,135.74 195.83,135.65 195.95,135.61 196.02,135.56 
					196.16,135.56 196.35,135.7 196.49,135.75 196.84,135.76 196.97,135.78 197.11,135.75 197.24,135.7 197.47,135.59 197.68,135.5 
					197.93,135.47 197.93,135.5 198.04,135.59 198.2,135.59 198.42,135.66 198.48,135.74 198.49,135.99 198.54,136.07 198.63,136.1 
					198.78,135.97 198.96,135.88 199.16,135.88 199.25,135.79 199.6,135.68 199.69,135.71 199.7,135.98 199.77,136.1 199.8,136.29 
					199.78,136.39 199.88,136.4 200.15,136.52 200.28,136.53 200.59,136.72 200.86,136.77 201.18,136.84 201.2,136.92 201.41,136.92 
					201.82,136.78 201.84,136.65 201.97,136.29 202.14,136.26 202.26,136.2 202.38,136.24 202.37,136.62 202.58,136.86 202.61,137.01 
					202.94,137.19 203.44,137.36 203.74,137.56 204.02,137.94 204.26,138.15 204.53,138.46 204.82,138.72 204.98,138.72 
					205.21,138.66 205.41,138.59 205.51,138.61 205.53,138.69 205.75,138.72 205.82,138.61 205.75,137.18 205.58,137.11 
					205.28,137.16 205.31,137.31 205.39,137.44 205.32,137.48 204.77,137.47 204.64,137.3 204.57,137.09 204.2,136.7 204.03,136.56 
					204.01,136.21 203.99,135.46 204.02,135.28 204.28,135.03 204.37,134.9 204.32,134.81 204.43,134.75 204.47,134.47 204.44,134.26 
					204.46,134.08 204.44,133.89 204.53,133.81 204.54,133.65 204.41,133.58 204.26,133.44 204.19,133.14 204.74,132.08 
					206.94,131.55 207.13,131.64 206.81,130.57 205.85,129.26 205.53,127.66 205.35,126.52 205.11,124.94 205.11,124.58 
					205.08,124.28 204.91,124 204.93,123.85 204.95,123.64 205.16,122.82 205.41,122.52 205.77,122.19 205.73,121.88 205.91,121.39 
					205.95,120.89 205.96,120.54 206.06,120.38 206.58,119.43 206.7,119.23 207.13,118.75 207.82,117.83 207.84,117.68 207.74,117.45 
					207.61,117.28 207.46,117.17 207.49,116.83 207.57,116.36 207.57,115.99 207.7,115.81 207.77,115.56 207.67,115.5 207.34,115.5 
					207.28,115.5 207.25,115.35 207.18,115.15 207.1,115.04 207,114.82 206.85,114.69 206.5,114.57 206.42,114.45 206.27,114.28 
					206.11,113.94 206,113.87 205.7,113.85 205.55,114.03 205.44,114.17 205.15,114.25 205.04,114.25 205,114.17 204.82,114.16 
					204.5,114.16 204.34,114.25 204.23,114.42 204.08,114.47 203.81,114.36 203.54,114.14 203.38,113.97 203.23,113.92 203.09,113.75 
					203.04,113.54 203,113.52 202.95,113.5 202.7,113.36 202.4,113.33 201.98,113.52 201.9,113.48 201.39,113.47 201.2,113.34 
					201,113.31 200.87,113.23 200.71,113.25 200.42,113.21 200.3,113.08 200.09,113.1 200.08,113.2 200.14,113.29 199.96,113.55 
					199.81,113.56 199.62,113.6 199.29,113.61 199.13,113.73 199.01,113.72 198.95,113.57 198.85,113.55 198.82,113.45 198.64,113.44 
					198.08,113.68 197.87,113.76 197.77,113.89 197.19,113.96 197.01,114.03 196.86,113.87 196.61,113.81 196.34,113.81 
					196.15,114.05 195.93,114.27 195.96,114.42 196.1,114.54 196.05,114.65 195.73,114.72 195.6,114.64 195.28,114.58 195.04,114.49 
					194.86,114.48 194.69,114.56 194.51,114.53 194.18,114.51 193.9,114.35 193.6,114.37 193.52,114.29 193.16,113.99 192.96,113.91 
					192.57,113.58 192.41,113.56 192.21,113.41 192.07,113.41 192.03,113.53 191.8,113.5 191.6,113.7 191.44,113.7 191.34,113.79 
					191.31,113.97 191.19,114.13 191.19,114.27 191.08,114.37 190.89,114.38 190.89,114.53 191.11,114.82 191.02,114.94 
					190.95,115.13 190.94,115.35 190.93,115.42 191.06,115.69 191.07,116.23 190.81,116.37 190.75,116.61 190.16,117.36 
					190.28,117.83 190.2,118.12 190.18,118.42 189.99,118.67 189.95,119.07 189.99,119.24 189.91,119.65 189.97,119.73 189.93,120.11 
					189.73,120.19 189.62,120.64 189.61,121.1 189.18,121.81 188.92,121.88 188.68,122.06 188.51,122.01 188.19,122.23 187.94,122.55 
					187.93,122.84 187.52,123.27 187.37,123.56 187.43,123.94 187.51,124.05 187.46,124.79 187.37,125.16 187.38,125.4 187.15,125.76 
					186.91,125.82 186.7,125.97 186.61,126.17 186.05,126.71 185.86,127 185.54,127.14 185.22,126.95 185.14,126.72 185.07,126.66 
					185.23,126.36 185.25,126.23 184.83,126.37 184.55,126.61 184.37,126.56 184.18,126.58 184.18,126.87 184.02,127.05 
					183.76,127.04 183.78,126.92 183.7,126.78 183.5,126.88 183.33,126.86 183.29,126.9 183.03,127.14 182.74,127.39 182.63,127.53 
					182.66,128.02 182.5,128.17 182.25,128.21 182,128.37 182.07,128.53 182.46,128.54 182.62,128.66 182.62,128.66 182.65,128.66 		
					"/>
				<polygon class="st1" points="203.04,113.54 203,113.52 203,113.52 		"/>
				<polygon class="st1" points="190.94,115.35 190.95,115.13 190.94,115.35 		"/>
				<polygon class="st1" points="203,113.52 203,113.52 202.95,113.5 		"/>
				<polygon class="st1" points="183.29,126.9 183.33,126.86 183.29,126.9 		"/>
				<polygon class="st1" points="190.93,115.42 190.94,115.35 190.94,115.35 		"/>
				<polygon class="st1" points="183.03,127.14 183.29,126.9 183.29,126.9 		"/>
				<polygon class="st1" points="205.53,127.66 205.35,126.52 205.35,126.52 		"/>
				<polygon class="st1" points="204.95,123.64 204.93,123.85 204.93,123.85 		"/>
				<polygon class="st1" points="204.93,123.85 204.91,124 204.93,123.85 		"/>
				<polygon class="st1" points="205.35,126.52 205.35,126.52 205.11,124.94 		"/>
				<polygon class="st1" points="210.41,133.47 210.48,133.66 210.67,133.77 210.84,133.83 210.82,133.92 210.67,134.27 210.7,134.4 
					210.93,134.56 211.01,134.76 211.03,135.05 210.96,135.14 210.96,135.22 210.65,135.53 210.61,135.76 210.7,135.99 210.72,136.2 
					210.77,136.36 210.66,136.53 210.78,136.74 210.73,136.88 210.66,136.95 210.72,137.12 210.74,137.25 210.89,137.34 
					210.91,137.45 210.78,137.48 210.71,137.62 210.52,137.71 210.22,137.93 210.16,138.03 210.17,138.22 210.21,138.34 
					210.17,138.48 210.17,138.67 209.96,138.91 209.82,138.98 209.86,139.11 210.05,139.34 210.17,139.6 210.19,139.72 210.55,139.64 
					210.64,139.78 210.69,139.91 210.81,140.05 210.83,140.21 211.05,140.35 211.16,140.29 211.32,140.29 211.44,140.16 
					211.72,140.16 212.08,140.24 212.21,140.46 212.21,140.83 212.18,141.14 211.9,141.44 211.83,141.75 211.65,142 211.68,142.22 
					211.8,142.52 211.83,142.73 212.06,143.02 212.29,143.23 212.46,143.33 212.62,143.46 212.79,143.7 212.71,143.86 212.77,144.06 
					213.04,144 213.1,143.74 213,143.42 213.13,143.18 213.17,142.93 213.31,142.57 213.58,142.49 213.77,142.34 213.85,142.12 
					213.86,141.63 213.73,141.47 213.76,141.34 213.69,141.25 213.74,141.14 213.88,141.12 213.94,140.98 214.12,140.92 
					214.11,140.78 214.02,140.59 213.9,140.26 213.59,139.84 213.5,139.63 213.05,139.17 212.91,139.14 212.81,139.01 212.62,138.82 
					212.19,138.6 211.97,137.35 212.03,137.1 212.05,134.83 211.99,134.31 211.53,133.82 211.39,133.68 211.24,133.58 211.18,133.49 
					211.08,133.47 210.99,133.4 210.84,133.38 210.76,133.43 210.68,133.34 210.52,133.32 210.44,133.17 210.31,133.15 210.25,133.2 
					210.32,133.4 		"/>
				<polygon class="st1" points="204.74,132.08 204.19,133.14 204.26,133.44 204.41,133.58 204.54,133.65 204.53,133.81 
					204.44,133.89 204.46,134.08 204.44,134.26 204.47,134.47 204.43,134.75 204.32,134.81 204.37,134.9 204.28,135.03 204.02,135.28 
					203.99,135.46 204.01,136.21 204.03,136.56 204.2,136.7 204.57,137.09 204.64,137.3 204.77,137.47 205.32,137.48 205.39,137.44 
					205.31,137.31 205.28,137.16 205.58,137.11 205.75,137.18 205.82,138.61 205.75,138.72 205.53,138.69 205.51,138.61 
					205.41,138.59 205.21,138.66 204.98,138.72 204.82,138.72 204.53,138.46 204.26,138.15 204.02,137.94 203.74,137.56 
					203.44,137.36 202.94,137.19 202.61,137.01 202.58,136.86 202.37,136.62 202.38,136.24 202.26,136.2 202.14,136.26 201.97,136.29 
					201.84,136.65 201.82,136.78 201.41,136.92 201.2,136.92 201.18,136.84 200.86,136.77 200.59,136.72 200.28,136.53 200.15,136.52 
					199.88,136.4 199.78,136.39 199.8,136.29 199.77,136.1 199.7,135.98 199.69,135.71 199.6,135.68 199.25,135.79 199.16,135.88 
					198.96,135.88 198.78,135.97 198.63,136.1 198.54,136.07 198.49,135.99 198.48,135.74 198.42,135.66 198.2,135.59 198.04,135.59 
					197.93,135.5 197.94,135.56 197.92,135.65 197.86,135.75 197.94,136.32 197.92,136.81 197.92,137.1 198.08,137.35 198.09,137.57 
					197.98,137.68 197.91,138.06 198,138.21 195.1,138.21 195.01,142.71 195.07,142.88 195.26,143.1 195.41,143.25 195.53,143.4 
					195.7,143.5 195.98,143.83 196.15,143.98 196.36,144.06 196.45,144.21 196.62,144.4 196.78,144.48 196.86,144.69 198.14,144.4 
					198.28,144.42 198.58,144.34 198.67,144.38 198.73,144.38 198.82,144.46 198.97,144.45 199.04,144.5 199.11,144.53 199.3,144.76 
					199.31,144.76 199.31,144.76 199.31,144.76 199.44,144.77 199.76,144.81 200.01,144.93 200.14,145.04 200.27,145.05 
					200.51,144.88 200.81,144.85 200.94,144.91 201.01,144.9 201.09,144.94 201.12,144.95 201.32,145.11 201.58,145.17 201.94,145.05 
					202.34,144.47 202.98,143.68 203.78,143.14 204.23,142.98 204.35,142.89 204.37,142.79 204.34,142.67 204.41,142.53 
					204.37,142.41 204.48,142.21 204.86,142.01 205.07,141.95 205.25,141.86 205.53,141.76 205.9,141.77 205.97,141.85 206.11,141.83 
					206.39,141.87 206.5,141.85 206.55,141.84 206.54,141.7 206.43,141.28 206.55,141.08 207.08,140.81 207.36,140.81 208.73,140.23 
					208.98,140.19 209.78,139.86 210.18,139.73 210.19,139.72 210.17,139.6 210.05,139.34 209.86,139.11 209.82,138.98 209.96,138.91 
					210.17,138.67 210.17,138.48 210.21,138.34 210.17,138.22 210.16,138.03 210.22,137.93 210.52,137.71 210.71,137.62 
					210.78,137.48 210.91,137.45 210.89,137.34 210.74,137.25 210.72,137.12 210.66,136.95 210.73,136.88 210.78,136.74 
					210.66,136.53 210.77,136.36 210.72,136.2 210.7,135.99 210.61,135.76 210.65,135.53 210.96,135.22 210.96,135.14 211.03,135.05 
					211.01,134.76 210.93,134.56 210.7,134.4 210.67,134.27 210.82,133.92 210.84,133.83 210.67,133.77 210.48,133.66 210.41,133.47 
					210.32,133.4 210.24,133.18 210.13,133.18 209.89,132.92 209.8,132.71 209.63,132.68 209.51,132.56 209.37,132.56 208.75,132.34 
					208.5,132.34 208.33,132.18 208.31,132.07 208.12,131.94 207.98,131.94 207.78,131.86 207.58,131.86 206.94,131.55 		"/>
				<polygon class="st1" points="181.32,144.2 181.39,144.25 181.51,144.21 181.56,144.04 181.63,144 181.97,144.05 182.16,144.16 
					182.27,144.06 182.31,143.87 182.7,143.59 182.88,143.58 183.09,143.68 183.16,143.73 183.24,143.65 183.34,143.62 183.52,143.71 
					183.53,143.8 183.69,143.86 183.66,143.98 183.75,144.03 184.04,144.29 184.34,144.4 184.56,144.28 184.61,144.29 184.8,144.16 
					184.94,144.16 185.02,144.21 190.08,144.2 190.16,144.26 190.3,144.52 190.4,144.61 190.67,144.73 190.97,144.8 191.17,144.77 
					191.32,144.83 191.36,144.91 191.54,144.99 191.73,144.87 191.97,144.81 192.31,144.9 192.49,144.87 192.53,144.71 192.6,144.75 
					192.75,144.76 193.05,145.04 193.28,145.14 193.56,145.15 193.66,145.1 193.67,145 193.82,144.96 193.96,145 194.06,145.07 
					194.17,145.03 194.25,145.12 194.36,145.13 194.42,145.17 194.54,145.18 194.65,145.17 194.74,145.17 196.86,144.69 
					196.78,144.48 196.62,144.4 196.45,144.21 196.36,144.06 196.15,143.98 195.98,143.83 195.7,143.5 195.53,143.4 195.41,143.25 
					195.26,143.1 195.07,142.88 195.01,142.71 195.1,138.21 198,138.21 197.91,138.06 197.98,137.68 198.09,137.57 198.08,137.35 
					197.92,137.1 197.92,136.81 197.94,136.32 197.86,135.75 197.92,135.65 197.94,135.56 197.93,135.5 197.93,135.47 197.68,135.5 
					197.47,135.59 197.24,135.7 197.11,135.75 196.97,135.78 196.84,135.76 196.49,135.75 196.35,135.7 196.16,135.56 196.02,135.56 
					195.95,135.61 195.83,135.65 195.75,135.74 195.6,135.76 195.56,135.66 195.57,135.4 195.66,135.32 195.65,135.25 195.73,135.04 
					195.57,134.92 195.52,134.64 195.59,134.56 195.59,134.41 195.41,134.24 195.41,134.1 195.46,133.92 195.44,133.76 195.33,133.74 
					195.25,133.57 195.16,133.51 195.16,133.37 195.04,133.2 195.03,133.06 194.96,132.95 195.07,132.68 195.03,132.19 194.97,132.02 
					195,131.93 195.07,131.83 195.07,131.63 194.93,131.42 194.97,131.19 195.09,130.97 195.09,130.78 195.11,130.57 195.08,130.41 
					193.5,130.29 193.46,130.15 193.55,130.01 193.56,129.85 193.15,129.81 193.14,129.94 191.83,129.96 191.79,130.35 191.69,130.56 
					191.57,130.62 191.61,130.88 191.62,131.25 190.6,131.32 190.43,131.42 189.96,131.39 189.81,131.34 189.56,131.39 189.2,131.41 
					189.05,131.33 188.97,130.84 188.8,130.59 188.68,130.42 188.57,130.33 188.56,130.17 188.51,130.06 188.43,129.74 188.28,129.49 
					188.28,129.3 188.35,129.17 188.32,129.01 188.22,128.86 188.17,128.7 188.2,128.64 188.2,128.45 186.79,128.44 185.84,128.44 
					185.37,128.48 184.94,128.46 184.73,128.44 184.33,128.46 184.02,128.47 183.75,128.47 183.56,128.45 183.36,128.43 
					183.14,128.48 182.91,128.54 182.82,128.59 182.72,128.59 182.67,128.65 182.65,128.66 182.62,128.66 182.23,128.88 
					182.38,129.05 182.38,129.25 183.12,130.09 183.15,131.14 183.56,131.71 183.5,132.24 183.07,132.79 183.31,132.92 183.31,133.41 
					183.52,133.74 183.52,134.08 184.03,134.92 184.01,135.15 184.17,135.35 184.17,136.54 183.64,137.54 183.48,137.54 182.88,138 
					182.86,138.32 182.13,138.98 182.1,139.43 181.98,139.53 181.98,140.62 181.65,141.04 181.57,141.56 181.2,142.01 181.2,142.5 
					181.14,142.93 181.16,143.58 181.1,144.01 181.11,144.15 181.11,144.15 		"/>
				<polygon class="st1" points="197.93,135.47 197.93,135.5 197.93,135.5 		"/>
				<polygon class="st1" points="197.93,135.5 197.94,135.56 197.93,135.5 		"/>
				<polygon class="st1" points="206.5,141.85 206.39,141.87 206.11,141.83 205.97,141.85 205.9,141.77 205.53,141.76 205.25,141.86 
					205.07,141.95 204.86,142.01 204.48,142.21 204.37,142.41 204.41,142.53 204.34,142.67 204.37,142.79 204.35,142.89 
					204.23,142.98 203.78,143.14 202.98,143.68 202.34,144.47 201.94,145.05 201.58,145.17 201.32,145.11 201.12,144.95 
					201.09,144.94 201.01,144.9 200.94,144.91 200.81,144.85 200.51,144.88 200.27,145.05 200.14,145.04 200.01,144.93 199.76,144.81 
					199.44,144.77 199.31,144.76 199.37,144.89 199.33,145.01 199.36,145.11 199.37,145.25 199.56,145.4 199.66,145.5 199.83,145.62 
					199.94,145.77 199.97,145.9 200.04,145.95 200.18,146.18 200.23,146.41 200.36,146.54 200.42,146.74 200.57,146.86 200.64,146.86 
					200.75,147.04 201.13,147.63 201.4,147.79 201.63,147.97 201.76,148.09 201.94,148.2 201.95,148.27 201.93,148.36 201.99,148.49 
					202.22,148.59 202.43,148.74 202.36,148.92 202.42,149.23 202.44,149.44 202.53,149.67 202.78,149.86 202.92,150.09 
					203.22,150.15 203.38,150.09 203.73,150.2 203.91,150.21 204.17,150.38 204.34,150.39 204.47,150.5 204.47,150.64 204.57,150.76 
					204.68,150.89 205.13,150.83 205.44,150.88 205.54,151.06 205.75,151.05 206.03,151.19 206.13,151.27 206.32,151.2 206.69,151.14 
					207.15,151.23 207.36,151.42 208.86,149.93 208.88,149.47 208.95,149.32 208.96,148.91 209.05,148.74 208.98,148.52 
					209.01,148.33 209.2,148.31 209.29,148.16 209.55,147.96 209.73,147.71 209.66,147.52 209.5,147.39 209.5,147.13 209.66,147.03 
					209.59,146.81 209.37,146.61 209.37,146.44 209.53,146.39 209.56,146.11 209.56,145.88 209.76,145.73 209.86,145.53 
					209.64,145.57 209.53,145.44 209.68,145.21 209.71,144.8 209.81,144.6 209.82,144.44 209.79,144.27 209.83,144.08 209.79,143.88 
					209.92,143.68 209.9,143.44 209.6,143.43 209.45,143.25 209.21,143.06 208.79,143.01 208.55,142.98 208.31,142.66 207.93,142.45 
					207.56,142.35 207.48,142.49 207.32,142.52 207.25,142.38 207.06,142.35 206.58,142.33 206.55,141.84 		"/>
				<polygon class="st1" points="204.57,150.76 204.47,150.64 204.47,150.5 204.34,150.39 204.17,150.38 203.91,150.21 203.73,150.2 
					203.38,150.09 203.22,150.15 202.92,150.09 202.78,149.86 202.53,149.67 202.44,149.44 202.42,149.23 202.36,148.92 
					202.43,148.74 202.22,148.59 201.99,148.49 201.93,148.36 201.95,148.27 201.94,148.2 201.76,148.09 201.63,147.97 201.4,147.79 
					201.13,147.63 200.75,147.04 200.64,146.86 200.57,146.86 200.42,146.74 200.36,146.54 200.23,146.41 200.18,146.18 
					200.04,145.95 199.97,145.9 199.94,145.77 199.83,145.62 199.66,145.5 199.56,145.4 199.37,145.25 199.36,145.11 199.33,145.01 
					199.37,144.89 199.31,144.76 199.3,144.76 199.3,144.76 199.02,144.84 198.58,145 198.41,145.11 198.24,145.09 198.18,144.98 
					197.88,145.02 197.61,145.29 197.36,145.62 196.91,145.93 196.8,145.91 196.82,145.72 196.9,145.63 196.8,145.53 196.73,145.34 
					196.64,145.28 196.59,145.31 196.41,145.33 196,145.45 194.7,145.75 193.69,145.71 193.45,150.56 192.25,150.59 192.01,154.85 
					192.01,154.88 192.01,154.89 192.01,154.88 192.46,155.21 192.6,155.58 192.95,156.34 192.94,156.71 192.74,157.14 192.73,157.4 
					193.09,157.35 193.45,157.42 193.67,157.32 193.99,157.37 194.2,157.22 194.49,157.16 194.75,156.95 194.85,156.79 195.29,156.61 
					195.54,156.35 195.75,155.81 196.11,155.49 196.44,155.45 196.9,155.52 197.04,155.7 197.19,155.71 197.69,155.99 197.9,155.95 
					198.14,156.03 198.42,155.96 198.74,155.96 198.96,155.93 199.06,156.06 199.23,156.13 199.53,155.94 199.45,155.83 
					199.53,155.59 199.53,155.42 199.66,155.29 199.64,154.93 199.75,154.7 200.04,154.65 200.22,154.53 200.4,154.5 200.49,154.39 
					200.57,154.32 200.64,154.14 200.83,153.99 200.98,153.95 201.07,153.83 201.25,153.79 201.25,153.58 201.19,153.48 
					201.22,153.14 201.59,152.66 201.78,152.57 201.92,152.53 202.02,152.4 202.22,152.34 202.28,152.21 202.44,152.11 202.58,151.98 
					202.87,151.73 203.14,151.68 203.23,151.74 203.36,151.71 203.58,151.7 203.77,151.53 203.96,151.49 204.04,151.28 204.01,151.15 
					204.15,151.03 204.38,151.02 204.51,150.92 204.68,150.89 		"/>
				<polygon class="st1" points="199.31,144.76 199.31,144.76 199.37,144.89 		"/>
				<polygon class="st1" points="199.31,144.75 199.32,144.75 199.32,144.75 		"/>
				<polygon class="st1" points="187.5,159.89 187.5,159.73 187.41,159.65 187.54,159.41 187.88,159.28 188.03,159.56 188.29,159.57 
					188.18,159.86 188.37,160.26 188.83,160.36 189.12,160.52 189.34,160.47 189.48,160.53 189.72,160.56 189.82,160.46 
					190.03,160.46 190.12,160.64 190.32,160.61 190.48,160.65 190.49,160.37 190.61,160.25 190.78,160.19 190.9,159.93 191.26,159.75 
					191.69,159.78 191.83,159.78 192.01,154.89 192.01,154.88 192.01,154.85 192.25,150.59 193.45,150.56 193.69,145.71 194.7,145.75 
					196,145.45 196.41,145.33 196.59,145.31 196.64,145.28 196.73,145.34 196.8,145.53 196.9,145.63 196.82,145.72 196.8,145.91 
					196.91,145.93 197.36,145.62 197.61,145.29 197.88,145.02 198.18,144.98 198.24,145.09 198.41,145.11 198.58,145 199.02,144.84 
					199.3,144.76 199.3,144.76 199.11,144.53 199.04,144.5 198.97,144.45 198.82,144.46 198.73,144.38 198.67,144.38 198.58,144.34 
					198.28,144.42 198.14,144.4 194.74,145.17 194.65,145.17 194.54,145.18 194.42,145.17 194.36,145.13 194.25,145.12 194.17,145.03 
					194.06,145.07 193.96,145 193.82,144.96 193.67,145 193.66,145.1 193.56,145.15 193.28,145.14 193.05,145.04 192.75,144.76 
					192.6,144.75 192.53,144.71 192.49,144.87 192.31,144.9 191.97,144.81 191.73,144.87 191.54,144.99 191.36,144.91 191.32,144.83 
					191.17,144.77 190.97,144.8 190.67,144.73 190.4,144.61 190.3,144.52 190.16,144.26 190.08,144.2 185.02,144.21 184.94,144.16 
					184.8,144.16 184.61,144.29 184.56,144.28 184.34,144.4 184.04,144.29 183.75,144.03 183.66,143.98 183.69,143.86 183.53,143.8 
					183.52,143.71 183.34,143.62 183.24,143.65 183.16,143.73 183.09,143.68 182.88,143.58 182.7,143.59 182.31,143.87 182.27,144.06 
					182.16,144.16 181.97,144.05 181.63,144 181.56,144.04 181.51,144.21 181.39,144.25 181.32,144.2 181.11,144.15 181.11,144.15 
					181.19,145.3 181.98,146.12 182.41,146.86 183.08,148.36 183.18,148.96 183.86,149.92 183.86,150.3 184.57,151.33 184.57,151.9 
					184.4,151.97 184.59,152.66 184.63,153.71 185.03,154.77 184.99,155.34 185.12,155.73 184.92,155.85 185.08,156.06 185.18,156.76 
					185.37,156.86 185.49,157.1 185.34,157.21 185.34,157.49 185.56,157.72 185.59,158.24 185.83,158.58 186.16,159.22 186.48,159.55 
					186.56,159.74 187.02,160.06 187.21,159.95 		"/>
				<polygon class="st1" points="199.11,144.53 199.3,144.76 199.3,144.76 		"/>
				<polygon class="st1" points="199.3,144.76 199.3,144.76 199.3,144.76 		"/>
				<polygon class="st1" points="199.3,144.76 199.3,144.76 199.3,144.76 		"/>
				<polygon class="st1" points="243.27,148.18 243.09,148.09 242.93,148.18 242.75,148.17 242.7,148.49 242.52,148.63 242.89,148.99 
					243.19,148.79 243.16,148.53 243.31,148.39 		"/>
				<polygon class="st1" points="240,149.16 239.84,149.23 239.81,149.62 240.07,149.98 240.23,150.06 240.6,149.74 240.44,149.67 
					240.27,149.28 		"/>
				<polygon class="st1" points="230.86,138.89 230.92,138.64 230.77,138.55 230.73,138.49 230.68,138.54 230.54,138.75 
					230.73,138.76 		"/>
				<polygon class="st1" points="231.36,137.95 231.36,137.85 231.13,138.08 231.2,138.19 		"/>
				<polygon class="st1" points="231.14,138.73 231.2,138.65 231.15,138.54 231.11,138.62 		"/>
				<polygon class="st1" points="233.12,142.38 233.22,142.21 233.23,141.98 233.31,141.89 233.34,141.65 233.43,141.56 
					233.42,141.28 233.15,140.93 233.09,140.68 233.16,140.56 233.16,140.27 233.08,139.9 233.14,139.75 233.17,139.06 232.96,138.79 
					232.94,138.19 232.84,137.98 232.73,138.03 232.5,137.72 232.47,137.46 232.23,137.35 232.36,137.08 232.27,136.81 231.93,137.12 
					232.01,137.31 231.78,137.46 231.55,137.31 231.4,137.32 231.62,137.61 231.62,137.78 231.79,137.95 231.79,138.03 231.52,138.28 
					231.52,138.69 231.35,138.95 231.18,138.89 230.94,139.15 230.91,139.37 230.74,139.5 230.59,139.41 230.57,139.12 230.45,139.06 
					230.27,139.22 230.25,139.54 230.52,139.81 230.58,139.93 230.48,140.03 230.34,139.99 230.04,140.04 230.11,140.3 230.38,140.38 
					230.41,140.54 230.29,140.69 230.17,140.54 229.96,140.61 229.92,140.77 229.54,141.09 229.54,140.79 229.6,140.71 229.5,140.55 
					229.25,140.79 229.41,140.87 229.36,140.99 229.04,141.18 229.16,141.43 229.34,141.49 229.32,141.62 229.16,141.66 
					228.94,141.81 228.91,141.64 228.78,141.61 228.91,141.4 228.79,141.31 228.3,141.73 228.22,142.12 228.28,142.28 228.2,142.44 
					228.04,142.39 227.92,142.29 227.93,141.94 227.8,141.92 227.49,142.25 227.14,142 227.07,142.11 226.94,142.13 226.99,142.51 
					226.88,142.48 226.79,142.52 226.79,142.32 226.66,142.24 226.51,142.46 226.37,142.24 225.83,142.74 225.69,142.75 
					225.59,142.65 225.31,142.65 225.19,142.84 225.24,143.25 224.84,143.88 224.85,143.99 224.47,144.4 224.47,144.6 224.68,144.77 
					224.5,145.03 224.63,145.41 224.61,145.75 224.98,146.47 224.96,146.66 225.19,146.92 225.2,147.04 225.01,147.23 225.07,147.41 
					224.95,148.03 224.68,148.21 224.61,148.56 224.45,148.59 224.37,148.82 224.12,149.02 224.1,149.52 223.94,149.71 223.54,149.8 
					223.44,149.93 223.47,150.36 223.18,150.67 223.21,151.03 223.12,151.25 223.19,151.41 223.2,151.84 223.55,152.26 223.5,152.56 
					223.56,152.76 223.73,152.86 223.82,152.84 223.74,152.92 223.47,152.99 223.48,153.27 223.52,153.71 223.48,154.28 
					223.58,154.39 223.59,154.57 223.75,154.66 223.92,154.94 224.07,155.02 224.19,155.21 224.37,155.41 224.56,155.35 
					224.62,155.44 224.84,155.49 225.06,155.79 225.23,155.83 225.24,155.94 225.31,156.01 225.48,155.9 225.77,155.92 226.09,155.73 
					226.35,155.43 227.19,155.35 227.46,155.41 227.9,155.24 228.02,155 228.24,154.96 228.38,154.54 228.59,154.19 228.6,153.95 
					228.87,153.79 228.85,153.38 228.78,153.32 228.97,153.18 229.09,152.73 229.06,152.66 229.15,152.66 229.41,152.26 229.6,151.35 
					229.74,150.86 229.95,150.65 230.06,150.1 230.43,149.45 230.78,148.35 231.03,147.98 231.03,147.49 231.3,146.99 231.34,146.81 
					231.65,146.31 231.81,145.56 231.94,145.01 232.06,144.87 232.13,144.47 232.01,144.27 232.08,143.93 232.36,143.54 
					232.33,143.35 232.52,143.13 232.47,142.8 232.36,142.69 232.49,142.46 232.47,142.13 232.36,142.06 232.36,141.74 232.54,141.65 
					232.67,141.76 232.72,142.04 232.95,142.34 		"/>
				<polygon class="st1" points="232.61,143.47 232.53,143.6 232.52,143.78 232.52,143.96 232.64,143.7 232.73,143.54 232.8,143.31 
					232.69,143.47 		"/>
				<polygon class="st1" points="220.33,134.94 220.08,134.87 219.92,135.08 219.72,135.25 219.43,135.29 219.25,135.48 
					218.94,135.52 218.84,135.64 218.63,135.7 218.43,135.63 217.92,135.78 217.8,135.89 217.55,135.92 217.37,135.78 217.18,135.82 
					216.94,135.74 216.84,135.83 216.91,135.99 216.81,136.19 216.44,136.22 216.15,136.33 215.99,136.22 215.81,136.21 
					215.79,136.12 215.64,136.06 215.53,136.14 215.38,136.18 215.09,136.39 214.69,136.5 214.73,136.39 214.59,136.24 214.42,136.22 
					214.25,136.1 214.08,136.06 214.07,135.94 213.87,135.98 213.82,136.07 213.59,136.12 212.3,136.14 211.97,137.35 212.19,138.6 
					212.62,138.82 212.81,139.01 212.91,139.14 213.05,139.17 213.5,139.63 213.59,139.84 213.9,140.26 214.02,140.59 214.11,140.78 
					214.12,140.92 213.94,140.98 213.88,141.12 213.74,141.14 213.69,141.25 213.76,141.34 213.73,141.47 213.86,141.63 
					213.85,142.12 213.77,142.34 213.58,142.49 213.31,142.57 213.17,142.93 213.13,143.18 213,143.42 213.1,143.74 213.04,144 
					212.77,144.06 212.71,143.86 212.79,143.7 212.62,143.46 212.46,143.33 212.29,143.23 212.06,143.02 211.83,142.73 211.8,142.52 
					211.68,142.22 211.65,142 211.83,141.75 211.9,141.44 212.18,141.14 212.21,140.83 212.21,140.46 212.08,140.24 211.72,140.16 
					211.44,140.16 211.32,140.29 211.16,140.29 211.05,140.35 210.83,140.21 210.81,140.05 210.69,139.91 210.64,139.78 
					210.55,139.64 210.19,139.73 210.18,139.73 209.78,139.86 208.98,140.19 208.73,140.23 207.36,140.81 207.08,140.81 
					206.55,141.08 206.43,141.28 206.54,141.7 206.58,142.33 207.06,142.35 207.25,142.38 207.32,142.52 207.48,142.49 207.56,142.35 
					207.93,142.45 208.31,142.66 208.55,142.98 208.79,143.01 209.21,143.06 209.45,143.25 209.6,143.43 209.9,143.44 209.92,143.68 
					209.79,143.88 209.83,144.08 209.79,144.27 209.82,144.44 209.81,144.6 209.71,144.8 209.68,145.21 209.53,145.44 209.64,145.57 
					209.86,145.53 209.76,145.73 209.56,145.88 209.56,146.11 209.53,146.39 209.37,146.44 209.37,146.61 209.59,146.81 
					209.66,147.03 209.5,147.13 209.5,147.39 209.66,147.52 209.73,147.71 209.55,147.96 209.29,148.16 209.2,148.31 209.01,148.33 
					208.98,148.52 209.05,148.74 208.96,148.91 208.95,149.32 208.88,149.47 208.86,149.93 207.36,151.42 207.4,151.45 207.48,151.82 
					207.56,152.17 207.72,152.5 207.73,153.13 207.71,153.21 207.72,153.47 207.81,153.73 207.89,154.04 207.88,155.09 207.78,155.51 
					207.76,155.9 207.75,156.35 207.77,156.39 207.91,156.47 208.05,156.63 208.18,156.79 208.14,156.89 208.11,157.07 208.05,157.3 
					208.08,157.4 208.21,157.38 208.67,157.49 208.94,157.48 208.95,157.27 209.08,157.05 209.14,156.67 209.13,156.54 209.04,156.56 
					208.98,156.78 208.79,156.72 208.66,156.88 208.68,156.64 208.55,156.39 208.49,156.32 208.62,156.23 208.76,156.24 
					208.85,155.91 209.03,155.77 209.13,155.61 209.48,155.52 209.93,155.09 211.12,154.85 211.99,154.45 212.49,153.93 
					212.57,153.58 212.74,153.33 212.69,153.17 212.49,153.3 212.44,153.06 212.51,153.06 212.53,152.78 212.65,152.63 212.65,152.41 
					212.81,151.98 212.75,151.93 212.77,151.56 212.88,151.42 212.9,151.05 212.83,151.06 212.81,150.78 212.66,151.1 212.66,151.34 
					212.56,151.35 212.49,151.06 212.55,150.21 212.4,149.91 212.38,149.6 212.24,149.36 212.11,149.3 212.28,149.16 212.27,148.97 
					211.88,148.45 212.03,148.24 211.98,148.03 212.09,147.9 212.1,147.69 211.97,147.53 211.97,147.42 212.11,147.4 212.36,147.56 
					212.5,147.39 212.82,147.39 213.06,147.22 213.02,146.91 213.74,146.42 214.06,146.41 214.04,146.22 214.17,146.19 214.31,146.06 
					214.32,145.93 214.87,145.6 214.92,145.4 215.08,145.36 215.13,145.01 215.23,145.22 215.39,145.15 215.72,144.75 215.73,144.58 
					215.86,144.66 216.41,144.31 216.8,144.13 216.81,144.05 217.15,144.09 218,143.64 218.08,143.44 218.21,143.43 219.11,142.94 
					219.09,142.69 219.31,142.66 219.58,142.29 219.58,142.13 219.88,141.75 220.05,141.72 220.08,141.44 220.2,141.27 220.03,141.25 
					219.97,141.3 219.92,141.22 220.11,141.03 220.28,141.03 220.33,140.9 220.24,140.78 220.38,140.71 220.52,140.51 220.46,139.98 
					220.39,139.93 220.12,139.92 220.05,139.82 220.06,139.74 220.26,139.71 220.25,139.1 220.18,138.99 220.23,138.99 220.33,138.32 
					220.28,137.96 220.42,137.82 220.41,137.48 220.34,137.4 220.34,137.06 220.42,136.97 220.26,136.69 220.2,136.21 220.31,136.1 
					220.28,136.02 220.23,135.92 220.26,135.78 220.54,135.38 220.47,135.32 220.54,135.15 220.59,134.84 220.49,134.78 220.45,134.8 
							"/>
				<polygon class="st1" points="210.19,139.73 210.55,139.64 210.19,139.72 		"/>
				<polygon class="st1" points="210.18,139.73 210.19,139.73 210.19,139.72 		"/>
				<polygon class="st1" points="207.53,156.26 207.31,156.07 206.97,155.88 206.74,156 206.68,156.26 206.35,156.87 206.23,157.19 
					206.31,157.36 206.45,157.5 206.61,157.78 207.05,158.03 207.57,158.05 207.78,157.98 207.85,157.74 207.82,157.54 207.99,157.43 
					208.08,157.4 208.05,157.3 208.11,157.07 208.14,156.89 208.18,156.79 208.05,156.63 207.91,156.47 207.77,156.39 207.75,156.35 
					207.75,156.36 		"/>
				<path class="st1" d="M208.21,157.38l-0.22,0.05l-0.16,0.11v0.2l-0.06,0.24l-0.21,0.07h-0.53l-0.44-0.25l-0.15-0.28l-0.15-0.14
					l-0.08-0.16l0.12-0.33l0.33-0.61l0.06-0.26l0.23-0.12l0.35,0.2l0.21,0.18l0.22,0.1l0,0v-0.45v-0.39l0.1-0.42v-1.05l-0.08-0.31
					l-0.09-0.26v-0.26v-0.08v-0.63l-0.16-0.33l-0.08-0.35l-0.08-0.37l-0.26-0.22l-0.45-0.09l-0.37,0.06l-0.2,0.07l-0.09-0.08
					l-0.29-0.14h-0.21l-0.09-0.18l-0.31-0.05l-0.46,0.06h-0.16l-0.13,0.1h-0.19l-0.15,0.12v0.13l-0.07,0.21h-0.2l-0.18,0.17h-0.23
					h-0.12l-0.09-0.06h-0.27l-0.3,0.25l-0.13,0.13l-0.17,0.1l-0.06,0.13l-0.19,0.06l-0.11,0.13h-0.13l-0.2,0.09l-0.36,0.48v0.34
					l0.07,0.1v0.21h-0.19l-0.08,0.12h-0.15l-0.19,0.15l-0.07,0.18l-0.09,0.07l-0.08,0.11h-0.18l-0.19,0.12h-0.28l-0.12,0.23v0.36
					l-0.12,0.13v0.53l-0.08,0.24l0.08,0.11l-0.31,0.19l-0.16-0.06l-0.11-0.14h-0.21h-0.32l-0.29,0.07l-0.23-0.08h-0.21l-0.5-0.29H197
					l-0.13-0.18l-0.46-0.07h-0.33l-0.36,0.32l-0.22,0.54l-0.24,0.26l-0.45,0.18l-0.1,0.16l-0.26,0.21l-0.28,0.06l-0.21,0.15
					l-0.33-0.05l-0.21,0.1l-0.36-0.07l-0.36,0.05v-0.26l0.19-0.43v-0.37l-0.35-0.76l-0.13-0.37l-0.45-0.33l-0.19,4.9h-0.13h-0.43
					l-0.36,0.18l-0.13,0.26l-0.16,0.06l-0.12,0.12v0.28h-0.17h-0.19l-0.1-0.18h-0.2l-0.11,0.1h-0.23l-0.15-0.06h-0.21l-0.3-0.16
					l-0.45-0.1l-0.2-0.4l0.12-0.29h-0.26l-0.16-0.28l-0.33,0.13l-0.14,0.24l0.09,0.08v0.16l-0.28,0.06l-0.2,0.12l0,0l0.07,0.44
					l0.44,0.32l0.29,0.83v0.38l0.28,0.74l0.18,0.79l0.38,0.49v0.3l0.38,0.64v0.2l0.15,0.46l-0.08,0.42l-0.16,0.17h-0.12l-0.14-0.14
					l-0.14,0.13v0.43l0.2,0.35l0.24,0.21l0.24,0.44l-0.18,0.3l0.06,0.34l-0.1,0.23v0.28l0.17,0.12v-0.27l0.22-0.2l0.32,0.06l0.07,0.28
					l-0.11,0.09l0.12,0.06l0.2-0.1l0.25,0.13v0.33l0.14-0.08l0.67,0.31l0.13-0.06h0.14l0.09-0.19l0.24-0.05l0.29-0.33l0.33,0.07
					l0.06-0.09h0.34l0.4,0.14l0.21-0.09h0.32l0.08-0.11l0.15-0.12h0.16l0.15,0.07l0.06-0.23l0.22-0.09h0.75l0.32,0.17l0.21-0.08v-0.09
					l0.4-0.08l0.62,0.15l0.19,0.14l0.65,0.14l0.08-0.08l-0.08-0.17l0.19-0.19h0.22l0.28,0.14h0.47v-0.07l-0.2-0.17l0.14-0.25l0.34-0.1
					h0.42l0.14,0.11h0.31l0.29-0.19l0.52-0.13v-0.09l0.33-0.09l0.19-0.22l0.93-0.6l0.23-0.26v-0.07h0.17l1.41-1.39l0.06-0.11h0.17
					l0.24-0.29l0.25-0.1l0.07-0.38l0.44-0.45l0.56-0.94l0.21-0.4h0.25l0.16-0.29v-0.13l0.26-0.31l0.17-0.32l0.32-0.21l0.13-0.16
					l0.28-0.12l0.08-0.12h0.12l0.37-0.44l0.06-0.24l0.19-0.23l0.14-0.52l0.2-0.41v-0.42l0.16-0.49h-0.08l0.16-0.21v-0.07h-0.27
					L208.21,157.38z M203.86,161.65l-0.25,0.12v0.16l0.11,0.1l-0.07,0.21l-0.24,0.17l-0.16-0.05h-0.24l-0.17,0.12l-0.24,0.07
					l-0.11,0.33l-0.1,0.11l-0.07,0.14h-0.19l-0.31-0.13l-0.15-0.2l-0.19-0.16v-0.27l-0.16-0.19v-0.13l-0.16-0.16l-0.11-0.26l0.08-0.03
					l0.36-0.27l0.12-0.36l0.31-0.26l0.49-0.08l0.12-0.13l0.17-0.11v-0.1h0.19l0.13,0.1l0.08-0.06l0.2,0.14l0.21-0.06l0.29,0.23
					l0.21,0.52v0.33L203.86,161.65z"/>
				<polygon class="st1" points="204.68,150.89 205.13,150.83 204.68,150.89 		"/>
				<polygon class="st1" points="204.51,150.92 204.68,150.89 204.68,150.89 		"/>
				<polygon class="st1" points="207.75,156.35 207.76,155.9 207.75,156.35 		"/>
				<polygon class="st1" points="207.75,156.36 207.75,156.35 207.75,156.35 		"/>
				<polygon class="st1" points="203.86,160.59 203.57,160.36 203.36,160.42 203.16,160.28 203.09,160.34 202.96,160.24 
					202.77,160.24 202.72,160.34 202.55,160.44 202.43,160.58 201.93,160.66 201.63,160.92 201.5,161.28 201.15,161.55 200.97,161.68 
					201.08,161.94 201.23,162.1 201.27,162.23 201.43,162.42 201.45,162.69 201.65,162.85 201.79,163.05 202.1,163.18 202.35,163.17 
					202.42,163.03 202.51,162.92 202.63,162.59 202.86,162.52 203.04,162.4 203.27,162.36 203.44,162.41 203.68,162.24 203.74,162.03 
					203.63,161.93 203.61,161.77 203.85,161.65 204.09,161.44 204.08,161.11 		"/>
				<polygon class="st1" points="350.04,140.54 350.11,140.49 350.15,140.63 350.3,140.46 350.17,140.27 350.01,140.42 		"/>
				<polygon class="st1" points="316.7,158.42 316.55,157.97 316.43,158.28 316.59,158.81 		"/>
				<polygon class="st1" points="355.5,182.7 355.36,182.75 355.52,182.91 355.58,182.82 		"/>
				<polygon class="st1" points="351.17,143.33 351.02,143.13 350.93,143.35 351.03,143.52 		"/>
				<polygon class="st1" points="350.46,141.08 350.67,141 351.03,141.06 351.11,140.85 351.01,140.8 350.9,140.83 350.84,140.76 
					351.06,140.54 351.03,140.48 350.81,140.55 350.8,140.33 350.65,140.41 350.61,140.53 350.4,140.52 350.46,140.59 350.41,140.65 
					350.5,140.95 350.36,141.07 		"/>
				<polygon class="st1" points="353.63,186.97 353.78,186.95 353.75,186.71 353.62,186.77 		"/>
				<polygon class="st1" points="353.41,187.49 353.15,187.3 353.06,187.43 353.06,187.51 353.46,187.51 		"/>
				<polygon class="st1" points="354.02,187.5 354.01,187.51 354.02,187.51 		"/>
				<polygon class="st1" points="356.96,183.66 356.72,183.68 356.87,183.78 		"/>
				<polygon class="st1" points="353.23,186.98 353.42,187.09 353.5,186.91 353.49,186.67 353.31,186.77 		"/>
				<polygon class="st1" points="353.85,187.4 353.68,187.23 353.5,187.27 353.55,187.47 353.68,187.51 353.73,187.51 		"/>
				<polygon class="st1" points="320.64,150.75 320.79,150.57 320.82,150.27 320.56,150.62 		"/>
				<path class="st1" d="M316.72,157.19l-0.1,0.58l0.13-0.21L316.72,157.19z"/>
				<polygon class="st1" points="352.72,186.2 352.94,186.02 352.99,185.88 353.17,185.59 353.08,185.4 353.14,185.01 352.98,184.88 
					352.83,185 352.65,185.22 352.68,185.46 352.5,185.69 352.57,185.91 352.53,186.1 		"/>
				<polygon class="st1" points="358.39,186.32 357.95,185.88 357.76,185.96 357.84,186.18 357.74,186.43 357.83,186.59 
					357.91,186.77 358.39,186.56 		"/>
				<polygon class="st1" points="357.65,187.08 357.74,187.25 358.14,187.27 358.35,187.35 358.39,187.2 358.11,186.95 357.81,186.98 
							"/>
				<polygon class="st1" points="346.33,176.41 346.1,176.39 345.37,176.59 345.05,176.75 345.04,176.91 345.23,177.04 345.54,177.05 
					345.64,177.03 345.88,177.07 346.05,177.01 346.15,177.15 346.28,177.14 346.31,177.06 346.45,177.05 346.54,176.93 347.03,177 
					347.2,176.84 347.02,176.75 346.88,176.81 346.63,176.8 346.73,176.69 346.56,176.69 346.5,176.56 346.54,176.34 		"/>
				<polygon class="st1" points="349.34,137.62 349.36,137.78 349.5,137.63 349.73,137.61 349.81,137.46 349.59,137.47 		"/>
				<polygon class="st1" points="349.86,137.26 349.7,137.38 349.86,137.4 		"/>
				<polygon class="st1" points="350.35,137.12 350.19,137.12 350.27,137.23 		"/>
				<polygon class="st1" points="349.27,137.86 349.25,137.77 348.93,137.88 349.03,137.95 		"/>
				<path class="st1" d="M333.77,142.53l0.1,0.14h0.22l-0.19-0.24L333.77,142.53z"/>
				<polygon class="st1" points="350.53,136.96 350.4,137.03 350.55,137.11 		"/>
				<polygon class="st1" points="334.96,141.48 334.99,141.33 334.88,141.31 334.8,141.46 		"/>
				<polygon class="st1" points="345.51,136.53 345.59,136.28 345.39,136.32 345.34,136.51 345.49,136.78 		"/>
				<polygon class="st1" points="358.45,135.68 358.46,136.01 358.58,135.94 358.72,135.93 358.62,135.71 		"/>
				<polygon class="st1" points="363.2,147.97 363.32,147.71 363.28,147.26 363.19,147.31 362.97,147.37 363.17,147.59 363.08,147.81 
							"/>
				<polygon class="st1" points="358.64,134.98 358.71,135.16 358.83,135.01 		"/>
				<path class="st1" d="M354.53,144.54l-0.35-0.08l-0.33,0.19c-0.02,0.06-0.04,0.11-0.06,0.17l0.12,0.13l0.16-0.06l0.16-0.21h0.3
					V144.54z"/>
				<polygon class="st1" points="354.18,145.54 354.32,145.46 354.31,145.31 354.11,145.41 		"/>
				<polygon class="st1" points="350.92,136.68 351.15,136.46 351.04,136.34 350.76,136.63 350.69,136.8 350.87,136.88 		"/>
				<polygon class="st1" points="333.83,143.46 333.8,143.17 333.67,142.97 333.69,143.37 		"/>
				<polygon class="st1" points="342.47,137.28 342.77,137.35 342.74,137.27 342.52,137.19 342.4,136.71 342.21,136.8 342.25,136.84 
					342.24,136.99 342.3,137.02 342.3,137.09 342.17,137.06 342.08,137.07 342.07,137.22 342.36,137.29 		"/>
				<polygon class="st1" points="343.32,137.62 343.77,137.14 343.89,137.16 343.91,137.02 344.04,136.91 343.93,136.82 
					343.85,136.64 343.74,136.64 343.57,136.73 343.2,136.73 343.05,136.92 342.89,136.84 342.86,136.75 342.69,136.73 342.53,136.55 
					342.45,136.55 342.5,136.64 342.53,136.96 342.75,137.22 342.94,137.47 		"/>
				<polygon class="st1" points="142.97,19.43 142.93,19.15 142.79,19.18 142.72,19.37 142.8,19.55 		"/>
				<polygon class="st1" points="143.19,13.61 143.32,13.8 143.31,14.23 143.14,14.44 142.91,14.45 142.9,14.13 142.62,14.27 
					142.52,14.59 142.35,14.69 142.34,15.12 142.16,14.7 141.96,14.69 142,14.48 142.2,14.23 142.2,14.02 141.89,14.02 142.02,13.85 
					141.86,13.54 142.06,13.66 142.27,13.44 142.22,13.28 141.96,13.16 142.19,13 141.98,12.78 141.84,12.89 141.71,12.69 
					141.38,12.5 141.37,12.27 141.24,12.02 140.99,12.08 140.71,11.99 140.31,12.02 140.27,12.13 140.38,12.3 140.55,12.29 
					140.57,12.17 140.77,12.18 140.93,12.28 141.14,12.36 141.03,12.48 140.79,12.41 140.56,12.41 140.59,12.5 140.96,12.75 
					141.2,13.04 141.14,13.23 141.02,13.25 141.02,13.09 140.74,12.9 140.56,13.06 140.4,13.02 140.48,12.85 140.26,12.57 140,12.46 
					139.81,12.58 140,12.83 139.94,12.98 139.78,12.74 139.57,12.67 139.5,12.83 139.65,13.03 139.81,13.12 139.9,13.26 139.65,13.16 
					139.41,13.26 139.56,13.47 139.92,13.57 139.75,13.61 139.67,13.67 139.74,13.82 139.65,13.84 139.27,13.49 139.16,13.46 
					139.03,13.6 139.19,13.91 139.3,14.09 139.19,14.14 138.97,13.83 138.74,13.77 138.6,14.03 138.88,14.14 139.11,14.39 
					139.44,14.46 139.6,14.19 139.9,14.11 140.02,13.88 140.11,14.01 140.11,14.14 140.26,14.14 140.43,14.04 140.48,14.29 
					140.59,14.29 140.81,14.12 140.87,13.98 140.9,14.25 140.98,14.25 141.25,14.02 141.24,14.15 141.15,14.36 141.27,14.45 
					141.45,14.3 141.74,14.47 141.58,14.53 141.42,14.53 141.24,14.67 141.02,14.69 140.66,14.85 140.64,14.95 141.09,15.07 
					141.33,15.03 141.43,14.87 141.59,14.81 141.57,15.02 141.42,15.23 140.96,15.29 140.8,15.24 140.59,15.45 140.48,15.32 
					140.4,15.23 140.39,15.12 140.25,15.08 140.21,15.14 140.26,15.25 140.05,15.4 139.89,15.32 139.67,15.33 139.43,15.46 
					139.16,15.35 138.98,15.42 138.85,15.4 139.03,15.69 139.14,15.93 139.49,15.96 139.49,15.87 139.92,15.98 140.43,15.95 
					140.72,15.97 140.7,16.1 140.53,16.21 140.52,16.36 140.76,16.53 140.82,16.7 140.98,16.67 141.32,16.44 141.26,16.61 
					141.02,16.79 140.89,16.98 141.09,17.13 141.46,16.84 141.75,16.93 141.81,17.08 141.64,16.98 141.38,17.07 141.19,17.24 
					140.94,17.24 140.92,17.43 140.79,17.58 140.65,17.55 140.48,17.65 140.4,17.48 140.17,17.32 140.16,17.44 140.06,17.44 
					140.12,17.76 140.25,17.82 140.15,17.89 140.12,18.33 140.43,18.33 140.52,18.22 140.73,18.34 141.17,18.4 141.49,18.16 
					141.76,18.3 141.96,18.17 142.01,18.33 142.18,18.38 142.46,18.28 142.43,18.56 142.73,18.86 142.94,18.97 143.16,18.78 
					143.41,18.8 143.84,19.21 144.41,19.2 144.63,19.29 144.99,19.18 144.94,18.88 145.03,18.75 145.1,18.92 145.4,19 145.69,18.71 
					145.71,18.39 146.06,18.34 145.94,18.51 146.03,18.64 146.14,18.51 146.34,18.47 146.59,18.15 146.72,18.22 146.8,18.19 
					147.03,18.21 147.03,18.28 147.14,18.21 147.71,17.71 147.92,17.42 148.59,17.29 148.73,17.13 148.66,17.01 148.7,16.83 
					148.82,16.84 148.88,17.04 149.22,17.16 149.41,16.94 149.45,16.78 149.37,16.68 149.4,16.51 149.55,16.47 149.43,16.14 
					149.54,16.01 149.77,16.15 149.82,16.37 150.04,16.33 150.19,16.05 150.11,15.81 149.87,15.55 149.86,15.29 150,15.16 
					149.98,14.92 150.22,14.8 150.43,14.79 150.56,14.61 150.33,14.38 149.79,14.34 149.62,14.47 149.76,14.23 149.73,14.03 
					149.43,14.01 149.35,14.07 149.25,13.83 149.44,13.59 149.64,13.53 149.6,13.18 149.47,13.1 149.29,13.24 149.07,13.15 
					148.96,12.9 149.2,12.79 149.23,12.58 149.35,12.48 149.61,12.42 149.34,12.3 149.13,12.36 148.7,12.76 148.62,12.99 
					148.46,13.01 148.29,12.75 148.39,12.58 148.26,12.45 148.22,12.21 147.97,12.14 147.76,12.28 147.59,12.2 147.47,12.43 
					147.58,12.69 147.48,12.87 147.21,12.9 146.95,13.02 146.95,12.79 146.8,12.69 146.65,12.92 146.5,13.26 146.24,13.25 
					145.98,12.81 145.79,12.86 145.7,12.79 145.5,12.81 145.41,13.26 145.65,13.74 145.36,14.42 145.47,13.84 145.2,13.44 
					145.2,13.22 145.1,13.12 145.13,12.84 144.85,12.68 144.33,13.02 144.25,13.31 144.35,13.54 144.12,13.9 143.91,13.9 143.88,13.5 
					143.69,13.42 143.66,12.86 143.47,12.72 143.14,13 		"/>
				<polygon class="st1" points="43.55,121.14 43.54,120.77 43.33,120.57 43.09,120.73 43.12,120.92 43.32,120.97 43.35,121.3 
					43.6,121.71 43.38,121.85 43.24,122.15 43.33,122.27 43.8,122.16 43.9,121.88 43.7,121.57 43.7,121.39 		"/>
				<polygon class="st1" points="44.61,121.56 44.4,121.66 44.61,121.86 44.82,121.66 		"/>
				<polygon class="st1" points="43.94,121.22 44.17,121.26 44.03,121.01 		"/>
				<polygon class="st1" points="45.7,121.92 45.61,121.93 45.38,122.13 45.41,122.36 45.73,122.1 		"/>
				<polygon class="st1" points="42.91,121.43 42.98,121.62 43.24,121.63 43.24,121.39 43,121.33 		"/>
				<polygon class="st1" points="83.66,95.59 83.46,95.85 83.7,96.06 83.77,95.82 		"/>
				<polygon class="st1" points="83.44,96.61 83.57,96.75 83.87,96.64 83.46,96.38 		"/>
				<polygon class="st1" points="82.58,96.42 82.34,96.04 82.15,96.18 82.3,96.38 		"/>
				<polygon class="st1" points="81.7,95.16 81.74,95.29 82.06,95.51 82.07,95.22 82.28,94.99 81.93,95 		"/>
				<polygon class="st1" points="79.64,95.78 80.07,95.72 79.92,95.57 		"/>
				<polygon class="st1" points="76.52,95.53 77.16,95.56 77.34,95.62 77.81,95.5 77.98,95.59 78.43,95.39 78.78,95.01 78.53,94.93 
					78.46,94.77 78.29,94.69 77.74,94.77 76.75,94.68 76.65,94.87 76.42,94.99 76.44,95.17 76.4,95.31 		"/>
				<polygon class="st1" points="79.33,95.34 78.95,95.24 78.72,95.46 79.22,95.43 		"/>
				<polygon class="st1" points="75.21,94.54 75.09,94.35 74.55,94.03 74.34,94.03 74.01,93.93 73.79,93.94 73.42,93.76 73.05,93.54 
					72.78,93.54 72.97,93.47 73.35,93.58 73.93,93.64 74.17,93.55 73.99,93.41 73.83,93.44 73.4,93.35 73.18,92.94 72.94,92.94 
					72.82,92.98 72.65,92.86 71.52,92.61 71.39,92.69 71.14,92.62 70.69,92.7 70.55,92.96 70.59,93.09 70.45,93.35 70.56,93.56 
					70.47,93.85 70.25,93.96 70.22,94.07 70.34,94.35 70.33,94.57 70.31,94.74 69.99,95.08 70.02,95.23 70.16,95.24 70.31,95.54 
					70.22,95.77 70.47,95.86 70.53,96 70.71,96.09 70.87,95.69 71.2,95.25 71.17,95.11 71.28,94.92 71.44,95.06 71.62,95.09 
					71.79,94.75 71.98,94.87 72,95.14 72.16,95.23 72.52,95.14 72.88,94.8 73.27,94.74 73.69,94.79 73.95,94.7 74.15,94.85 
					74.46,94.87 74.84,94.97 74.92,94.75 75.08,94.75 		"/>
				<polygon class="st1" points="74.8,95.2 74.65,95.04 74.56,95.09 74.66,95.28 74.85,95.36 75.02,95.23 		"/>
				<polygon class="st1" points="136.47,1.34 136.38,1.52 136.43,1.65 136.75,1.6 137.34,1.48 137.92,1.6 138.1,1.42 138.35,1.36 
					138.65,1.53 138.96,1.42 139.1,1.46 139.42,1.21 139.45,0.48 139.32,0.36 138.23,0.36 138.15,0.4 137.42,0.49 137.22,0.71 
					136.96,0.84 136.81,1.11 136.51,1.16 		"/>
				<path class="st1" d="M138.13,1.69l0.13,0.06h0.18V1.6h-0.2L138.13,1.69z"/>
				<polygon class="st1" points="141.17,3.94 141.14,3.82 140.94,3.9 140.92,4.01 141.02,4.03 		"/>
				<polygon class="st1" points="137.13,0.59 137.21,0.45 137.03,0.47 136.9,0.6 136.99,0.63 		"/>
				<polygon class="st1" points="109.38,3.65 109.15,3.74 109.13,3.83 109.44,3.97 109.63,3.94 109.8,3.81 109.64,3.72 		"/>
				<polygon class="st1" points="111.48,1.65 111.66,1.52 111.76,1.14 111.95,0.95 111.88,0.85 111.75,0.89 111.5,0.86 111.3,1.04 
					111.3,1.13 111.44,1.11 111.47,1.27 111.39,1.54 		"/>
				<polygon class="st1" points="110.06,5.24 109.74,5.16 109.54,5.22 109.54,5.33 109.72,5.42 110.08,5.37 		"/>
				<polygon class="st1" points="110.04,4.11 110.19,4.03 109.96,3.94 109.74,4.01 109.82,4.12 		"/>
				<polygon class="st1" points="107.47,8.74 107.62,8.65 107.37,8.56 107.19,8.62 107.15,8.68 107.27,8.74 		"/>
				<polygon class="st1" points="116.18,23.39 116.36,23.51 116.46,23.45 116.42,23.33 116.29,23.33 		"/>
				<polygon class="st1" points="107.49,6.38 107.64,6.21 107.66,6.1 107.53,6.1 107.36,6.26 107.3,6.34 107.36,6.41 		"/>
				<polygon class="st1" points="107.83,1.01 107.75,1.1 107.86,1.33 108.5,1.48 108.6,1.61 108.77,1.67 109.19,1.41 108.89,1.79 
					108.67,1.8 108.29,1.65 108.13,1.69 108.11,1.93 108.26,2.04 108.66,2.09 108.72,2.28 108.97,2.33 109.13,2.21 109.85,2.08 
					110.26,2.08 110.73,1.67 110.65,1.27 110.5,0.93 110.23,0.91 109.98,0.79 109.86,0.36 108.26,0.36 108.27,0.38 108.24,0.36 
					107.79,0.36 107.79,0.53 107.7,0.73 108.06,0.94 		"/>
				<polygon class="st1" points="117.58,20.76 117.61,20.67 117.54,20.68 		"/>
				<polygon class="st1" points="110.12,23.17 110.01,23.25 110.04,23.34 110.15,23.36 110.21,23.5 110.4,23.42 110.32,23.22 		"/>
				<polygon class="st1" points="111.47,23.09 111.5,23.24 111.67,23.23 111.68,23.1 111.57,23.03 		"/>
				<polygon class="st1" points="107.2,12.02 107.16,11.92 107.07,11.89 107,11.92 106.89,12.07 106.98,12.09 		"/>
				<polygon class="st1" points="113.06,24.57 112.95,24.67 112.99,24.92 113.1,24.92 113.11,24.82 113.24,24.63 113.23,24.46 
					113.11,24.45 		"/>
				<polygon class="st1" points="114.42,25.77 114.52,25.82 114.63,25.75 114.8,25.74 114.88,25.6 114.8,25.52 114.6,25.54 		"/>
				<polygon class="st1" points="115.06,25.28 115.26,25.18 114.83,24.93 114.64,24.91 114.63,24.99 114.91,25.27 		"/>
				<polygon class="st1" points="112.14,23.02 111.99,23.15 112.05,23.2 112.21,23.19 112.37,23.09 112.33,23.01 		"/>
				<polygon class="st1" points="108.67,4.09 108.64,4.2 108.72,4.29 109.11,4.23 109.06,4.08 108.83,4.07 		"/>
				<polygon class="st1" points="121.95,13.27 122.03,13.38 122.05,13.28 121.96,13.19 		"/>
				<polygon class="st1" points="120.52,15.31 120.67,15.35 120.62,15.06 120.66,14.78 120.54,14.65 120.45,14.4 120.35,14.29 
					120.3,14.4 120.34,14.6 120.46,14.79 120.43,15.11 		"/>
				<polygon class="st1" points="118.71,19.15 118.81,19.03 118.78,18.86 118.71,18.94 		"/>
				<polygon class="st1" points="121.57,13.58 121.61,13.71 121.75,13.78 121.78,13.67 121.67,13.57 		"/>
				<polygon class="st1" points="118.8,17.63 118.69,17.48 118.59,17.48 118.58,17.56 118.79,17.79 119.06,17.93 119.1,17.99 
					119.19,17.93 119.09,17.75 		"/>
				<polygon class="st1" points="117.65,20.48 117.74,20.43 117.75,20.29 117.68,20.34 		"/>
				<polygon class="st1" points="117.79,19.88 117.81,19.96 117.88,19.95 117.91,19.84 117.82,19.85 		"/>
				<path class="st1" d="M106.9,10.41l0.53-0.23l0.14-0.09l0.45-0.1l0.24-0.13l0.21-0.31l0.31-0.31l0.68-0.32l0.32-0.09l0.18,0.06
					v0.09l-0.12,0.09h-0.19l-0.34,0.12l-0.42,0.21l-0.44,0.47l-0.2,0.25l-0.39,0.07l-0.19,0.07l-0.37,0.23l-0.37,0.13l-0.16,0.05
					l-0.06,0.09h0.19h0.12h0.14v0.11l0.27-0.15l0.1-0.13h0.11l0.17,0.18h0.11l0.18-0.13l0.25-0.15h0.18l0.06,0.07l-0.07,0.15h-0.17
					l-0.21,0.16l-0.21,0.08h-0.22l-0.09-0.11h-0.13l-0.14,0.15l-0.31,0.13v0.08l0.19,0.14h0.11l0.22,0.13l-0.16,0.2v0.1h0.17
					l-0.05,0.14l0.07,0.12h0.1l0.17-0.2l0.23-0.06l0.14-0.1v-0.19l0.13-0.09h0.15l0.52-0.28h0.14l0.06,0.17l0.23,0.06l0.06,0.15h-0.19
					l-0.11-0.08h-0.43l-0.11,0.12l-0.09-0.1h-0.1l-0.06,0.23l-0.15,0.07l-0.12,0.12l-0.32,0.07l-0.17,0.14h-0.26l-0.16,0.17v0.16h0.15
					l0.13-0.14h0.08l0.08,0.22v0.18l-0.16,0.13v0.34l0.11,0.18h0.19l0.16-0.11l0.07-0.17h0.15l0.13-0.12h0.14l0.1,0.11l-0.08,0.05
					l-0.22,0.2h-0.15l-0.37,0.13l-0.19,0.09v0.15v0.19l0.16,0.15l-0.11,0.13v0.24l0.09,0.31h0.09l0.2-0.36l0.14-0.05l0.3-0.28h0.1
					l0.12-0.17l0.16-0.08l0,0l-0.12,0.1v0.13l0.08,0.06l0.19-0.08l0.31-0.31l0.06-0.11l0.14,0.17h0.12l0.14-0.14h0.16v0.08l-0.17,0.16
					v0.43l0.12,0.08l0.1,0.21h-0.07l-0.15-0.09l-0.22-0.26l-0.11-0.18h-0.1l-0.09,0.08h-0.16v0.1l0.1,0.1h-0.02l0.21,0.24h0.12v0.1
					h-0.14l-0.2-0.16h-0.09h-0.22l-0.23,0.33l-0.19,0.11h-0.43l-0.05,0.07l0.12,0.08h0.23l0.19-0.08l0.38-0.06l0.23-0.15l0.21,0.07
					h0.21v0.07l-0.2,0.16h-0.32l-0.3,0.08h-0.52h-0.23l-0.06,0.19v0.19h0.24h0.25h0.06l-0.21,0.14h-0.27l-0.14,0.2v0.15l0.18,0.14
					l0.15-0.09l0.09-0.16h0.2l0.11,0.05h0.16l0.15-0.06h0.13l0.06,0.07l-0.12,0.11l-0.29,0.12l-0.12-0.06h-0.19h-0.09l0.15,0.12h0.17
					l0.11,0.05l-0.12,0.06h-0.32l-0.26,0.17l0.15,0.13h0.14l0.11-0.08h0.31l0.12,0.07h0.12l-0.11,0.1l-0.33,0.06l-0.21-0.06
					l-0.19,0.05v0.15l0.08,0.13h0.13l0.2-0.12h0.2l0.19,0.11v0.09l-0.35,0.12v0.14l0.11,0.27h0.1l0.06-0.09h0.18l0.11,0.18v-0.11h0.08
					l0.09,0.08l-0.08,0.12v0.14l0.12,0.13l-0.24,0.3h-0.08l-0.14,0.16l-0.12,0.21v0.07h0.2l0.09-0.09l0.17,0.05v0.17l-0.1,0.11v0.06
					h0.09l0.11,0.07v0.1l-0.13,0.11l0.1,0.09v0.17l-0.18,0.11l-0.08,0.11h0.24l0.1-0.12l0.08-0.11l0.32-0.12l0.09,0.08l-0.1,0.12v0.13
					l-0.17,0.13l-0.1,0.13h-0.16h-0.18l-0.11,0.14l0.15,0.13l0.19-0.09l0.14-0.12l0.25,0.06l0.05,0.07l-0.1,0.11l-0.29,0.12v0.22
					l-0.14,0.12l-0.19,0.06v0.13l0.19,0.12l0.31-0.09l0.18-0.14l0.26-0.07h0.16v0.12l0.01,0.57h-0.18l-0.28,0.13v0.09h0.17l0.08,0.11
					l-0.2,0.18l0.06,0.19l0.19,0.08l0.33-0.25h0.14v0.08l0.2,0.16v0.26l0.2,0.1v0.08l-0.14,0.14h-0.2l-0.12,0.18v0.13l0.39,0.09
					l0.1-0.06l-0.06-0.12v-0.11l0.12-0.07l0.15,0.09l0.16-0.15h0.2l0.12,0.11h0.15l0.13-0.05l0.11-0.19l0.15-0.09h0.16h0.18l0.17,0.08
					l0.14-0.13v-0.12l-0.1-0.11v-0.15l0.12-0.07l0.12,0.06l0.11,0.21v0.26l-0.2,0.2l-0.15,0.05l-0.13,0.1v0.09l0.29-0.1l0.4-0.26
					l0.25-0.34h0.11l0.09,0.17v0.22l-0.18,0.07l-0.2,0.12l-0.21,0.17l-0.23,0.06l-0.07,0.07l0.06,0.06l0.23-0.08l0.28-0.2v0.06
					l-0.27,0.22l-0.17,0.05v0.22l-0.37,0.27v0.12h0.1l0.14-0.13h0.09v0.08l0.08,0.24l0.07-0.18l0.15-0.09l0.09-0.15h0.12l0.06,0.05
					l-0.18,0.17l-0.07,0.21v0.08l0.19-0.05l0.1-0.21h0.11h0.16l-0.15,0.24v0.27l-0.24,0.2v0.18l0.08,0.05l0.22-0.18l0.18-0.47
					l0.18-0.12l0.05,0.06l-0.25,0.34v0.21l-0.1,0.16l-0.07,0.24l0.14,0.07l0.1-0.1v-0.19v-0.13h0.25l0.18,0.08v-0.34h0.1l0.12-0.15
					h0.12v0.11h-0.07v0.22v0.1h0.34l0.61,0.32h0.08v-0.1l0.15-0.12h0.12v-0.09l-0.11-0.05l-0.08-0.06h-0.18l-0.09,0.05v-0.12
					l0.09-0.08v-0.12l-0.23-0.15l-0.42-0.18l-0.07-0.11l0.07-0.06h0.21l0.1-0.06h0.07l0.06,0.13l0.2,0.19l0.17,0.13h0.16l0.24-0.1
					l0.17-0.12v-0.11h-0.17h-0.24l-0.15-0.06v-0.1h0.12h0.19l0.15-0.09V23.8l-0.2-0.09l-0.21-0.06V23.6h0.1v-0.06v-0.08h-0.26
					l-0.1-0.15l0,0l0.21,0.08l0.26,0.07l0.34-0.07l0.21-0.09v-0.09v-0.12L116.27,23l-0.45-0.05l-0.21-0.09V22.6h0.1l0.16,0.08h0.34
					l0.16-0.11v-0.19l-0.17-0.12l-0.17-0.07v-0.13h0.15l0.12,0.08l0.08,0.11l0.18-0.08l0.12-0.14v-0.12l-0.1-0.07l-0.18-0.09v-0.08
					h0.09l0.09,0.1h0.15l0.16-0.21V21.5h-0.26l-0.2-0.11l-0.06-0.12h0.12l0.15,0.11h0.21l0.14,0.09h0.15l0.07-0.21v-0.11l0.13-0.12
					v-0.1l-0.06-0.11l0.06-0.24v-0.13l-0.17-0.22l-0.28-0.25l-0.22-0.06l-0.14-0.11V19.7h0.16l0.14,0.08l0.3,0.24l0.17,0.17h0.17h0.08
					l-0.08-0.31l-0.13-0.22l-0.3-0.08l-0.39-0.17l-0.1-0.08v-0.15h0.13l0.14,0.08l0.12,0.1h0.21l0.11-0.17l0.06-0.14v-0.2h0.07
					l0.14,0.08V19v0.13l0.25,0.1h0.14l0.14,0.09h0.14l0.09-0.12l0.11-0.12h0.06v-0.14l-0.17-0.06h-0.37l-0.08-0.06v-0.06v-0.15
					l-0.12-0.14v-0.12l0.1-0.12h0.09l0.12,0.12v0.17l0.14,0.15h0.28l0.09-0.07v-0.1v-0.1l-0.28-0.14l-0.17-0.14v-0.23h0.07l0.12,0.15
					l0.23,0.14h0.15l0.17,0.17l0.07-0.09v-0.12l-0.06-0.12l-0.26-0.14l-0.17-0.15v-0.2l0.1-0.11l0.08-0.09h0.13l0.09,0.12l0.32,0.15
					h0.16l0.11-0.08h0.16l0.2-0.09l0.07-0.2v-0.07l-0.17-0.07l-0.19-0.12l-0.24-0.15h-0.12h-0.21v-0.14V16.6h0.16l0.16,0.17h0.11h0.13
					l0.18,0.24l0.15,0.06h0.1l0.06-0.09v-0.14v-0.21l-0.07-0.14l-0.11-0.07v-0.07h0.13h0.14l0.06-0.19v-0.12h-0.14h-0.11l-0.09-0.09
					l-0.14-0.11h-0.2l-0.3-0.18v-0.08l0.1-0.13h0.24l0.26,0.07h0.21l0.07-0.14h0.1l0.17,0.11l0.06-0.22l-0.06-0.37l-0.07-0.28
					l-0.14-0.13l-0.07-0.18V14.2l0.1-0.13l-0.06-0.23v-0.1v-0.11l0.08,0.05l0.06,0.15l0.22,0.08v-0.12l0.12-0.06l0.13,0.07l0.09,0.29
					l0.1,0.08h0.16l0.24-0.28l0.13-0.31v-0.29l-0.06-0.2V13l0.1-0.09h0.15l0.07-0.11h0.08l0.09,0.14l0.09,0.2h0.17l0.13-0.14v-0.13
					v-0.11h0.08l0.07,0.14l0.09,0.23l0.08,0.09l0.21-0.1l0.11-0.14h0.11l0.1,0.1h0.19l0.17-0.12V12.8h0.08v-0.1l-0.13-0.17l-0.14-0.28
					v-0.16l0.13-0.14l0.08,0.06v0.22h0.13l0.19-0.19v-0.19l0.1-0.16v-0.15l-0.17-0.18v-0.11l0.09-0.14l0.12-0.05h0.06v0.07l0.15,0.18
					l0.21,0.05l0.11,0.08l-0.15,0.12l-0.18,0.15l-0.1,0.26v0.2l0.29,0.36l0.11,0.05l0.06-0.15v-0.15l0.06-0.21v-0.26h0.07l0.06,0.13
					l-0.07,0.17v0.16l0.12,0.23l0.19,0.06l0.2-0.09h0.16v-0.14v-0.12l0.07-0.15h0.09l0.07,0.06v0.12v0.13l0.14,0.09h0.18l0.21-0.22
					l0.34-0.22h0.1l0.13-0.09V11.6l-0.12-0.2l-0.11-0.06l-0.09-0.14l0,0h0.11l0.08,0.12l0.25,0.14h0.11V11.3h0.12l0.08,0.1v0.2
					l0.07,0.05l0.14-0.07l0.33-0.32v-0.08v-0.07v-0.19l0.08-0.1l0.12-0.06l-0.05,0.11l0.06,0.1l0.07,0.06l0.13-0.09l0.19-0.23
					l0.07-0.19v-0.18v-0.17l0.3-0.32l0.21-0.07l0.43-0.18l-0.05-0.13v-0.1V9.31l0.13,0.05l0.11,0.06h0.1l0.05-0.17v-0.1l-0.1-0.13
					h0.12l0.14,0.14V8.9V8.74h0.17l0.17-0.11V8.46V8.39l0.06-0.09h0.17h0.11l0.19-0.25l0.19-0.1h0.11l0.08,0.09l0.16-0.07l0.13-0.17
					l0.06-0.32l-0.1-0.33h-0.14h-0.06L131,6.98V6.65l-0.07-0.17l-0.12-0.11l-0.09-0.22l-0.07-0.11v-0.2h0.12l0.09,0.09l0.08,0.25
					l0.11,0.18v0.19l0.14,0.25h0.14l0.11,0.09l-0.06,0.19l0.08,0.21l0.19,0.12h0.15V7.3l0.08-0.14H132l0.12,0.17h0.21h0.21l0.09-0.14
					h0.08h0.15l0.17-0.12V6.9h0.11V6.8l0.15-0.07h0.1l0.27,0.31l0.07,0.13h0.12l0.1-0.11h0.14V6.84h0.07l0.07,0.09h0.1V6.79h0.11
					l0.06,0.06h0.17V6.73V6.6h0.15h0.21h0.08V6.44h0.08v0.11l0.13,0.07l0.12-0.12V6.31h0.08l0.12,0.17l0.1,0.07l0.13-0.26h0.09
					l0.06,0.1l0.15,0.06h0.15l0.08-0.16l0.1-0.07h0.19l0.24-0.14h0.15l0.08,0.15h0.1l0.08-0.18l0.15-0.15h0.27l0.07-0.11l0.23-0.06
					l0.13-0.08V5.52l-0.09-0.18V5.2h0.11l0.16,0.1l0.07,0.12h0.1l0.27-0.17V5.09L138.71,5V4.89l0.16-0.07l0.05,0.13l0.16,0.09
					l0.13-0.22l0.24-0.22V4.45h0.11v0.1l0.18,0.09l0.13-0.13l0.11-0.05h0.15V4.27V4.15l0.07-0.07l0.09,0.07l0.1,0.1l0.17-0.06
					l0.14-0.1V3.93l-0.07-0.05V3.75l0.05-0.07h0.24l0.12,0.08V3.64l0.09-0.14h0.12l0.09,0.1h0.13l0.09-0.06V3.41l-0.13-0.09V3.28
					l0.2-0.14h0.12l0.28-0.05l0.25-0.16l0.13-0.23V2.67l-0.34,0.12h-0.31l-0.09-0.06h-0.38h-0.19l-0.38-0.13l-0.3-0.14l-0.38-0.05
					l-0.35-0.28l-0.09-0.12h-0.1l-0.16,0.14h-0.06V2.01V1.94l-0.13,0.12l-0.37,0.27l-0.18,0.1h-0.37l-0.15,0.06l-0.1-0.08l-0.15-0.06
					l-0.17,0.07h-0.19l-0.34,0.3l-0.09,0.17l-0.12-0.15l-0.11-0.14h-0.44l-0.17-0.09l-0.14,0.06l-0.11-0.1l0.15-0.16h0.24l0.15,0.13
					l0.17,0.07l0.21-0.12h0.32l0.19-0.19h0.22l0.26,0.07l0.22-0.06l0.08-0.12l-0.03-0.19h-0.12l-0.07-0.09h-0.11l-0.23,0.05
					l-0.19-0.09h-0.4l-0.27,0.09h-0.22l-0.28-0.07l-0.11-0.19h-0.16l-0.21,0.08h-0.31l-0.44,0.22l-0.06-0.07l0.09-0.16l0.21-0.21h0.16
					h0.23l0.49-0.2l0.17-0.12V0.96l0.07-0.1h0.16l0.11-0.07l0.09-0.19V0.46l-0.11-0.12h-25.81l0.1,0.11h0.21l0.13-0.06l0.13,0.15h0.21
					l0.15-0.09l0.14,0.16h0.25l0.21-0.17h0.24l0.13,0.06v0.18h-0.17l-0.18,0.06v0.18h0.16l0.12,0.16l-0.17,0.1v0.09l-0.19,0.07
					l-0.11,0.14l-0.26,0.11l-0.08,0.1l0.07,0.08h0.23l0.15,0.05v0.12h-0.15h-0.15h-0.07l-0.14,0.11l-0.19,0.3h-0.13l-0.11,0.15v0.1
					h0.21h0.12l0.11-0.07l0.08,0.05l0.07,0.12h0.2l0.13,0.06v0.11H112h-0.21v0.08h0.33l0.15,0.09v0.15h-0.14h-0.11v0.07h-0.15
					l-0.1-0.1h-0.17l-0.23-0.05v0l0.06-0.08l-0.14-0.24l-0.08-0.06l-0.11,0.05v0.24l-0.15,0.5l-0.13,0.21l0.06,0.12H111l0.2-0.15h0.06
					l-0.08,0.14l-0.17,0.11l-0.1,0.11l-0.13,0.07v0.14h-0.3h-0.23h-0.22l-0.09-0.07h-0.3l-0.16,0.09l-0.35,0.16l-0.33,0.09l0.06,0.05
					l0.25-0.05h0.15l-0.13,0.06L109,4.68V4.8l0.2,0.08l0.13,0.17l0.24-0.07h0.2h0.1h0.31l0.09-0.09l-0.2-0.15l-0.06-0.08l0.12-0.06
					h0.35l0.17-0.07h0.18V4.6l-0.1,0.06l-0.09,0.17v0.16l-0.32,0.11v0.1v0.12l0.54,0.44l0.22,0.2v0.09h-0.19V5.98l-0.23-0.1
					l-0.28-0.17l-0.11-0.11h-0.25l-0.11,0.06h-0.18l-0.46-0.28l-0.07-0.17l-0.14-0.16h-0.08l0.07,0.23l0.08,0.17V5.6l-0.24-0.22
					l-0.25-0.34l-0.31-0.09L108.22,5v0.11l0.15,0.07l0.06,0.2l0.33,0.3l0.15,0.11h0.13h0.17v0.09h-0.39l-0.25-0.11L108.4,5.6h-0.11
					l-0.08,0.16v0.13l-0.15,0.13h-0.08v0.1l-0.09,0.1h-0.12l-0.3,0.36v0.11l0.1,0.06l0.18-0.06l0.26-0.3l0.18-0.14h0.2h0.33l0.11-0.11
					h0.08v0.13l0.13,0.09h0.22l0.26,0.31l0.13,0.06l0.19-0.11L110,6.46v-0.2l-0.06-0.14V6.01h0.19h0.15l0.05-0.06h0.15l0.1,0.15
					l-0.06,0.1h-0.12l-0.14,0.05v0.18l0.16,0.1h0.34h0.07l-0.08-0.09V6.27h0.13l0.32,0.07l0.06,0.13l-0.13,0.13l-0.34,0.13h-0.54V6.8
					l0.25,0.36l0.3,0.19h0.19l0.08-0.09h0.22v0.13v0.07h-0.16l-0.16,0.08l-0.36-0.12l-0.28-0.15l-0.2-0.3l-0.27-0.1h-0.25l-0.25-0.23
					l-0.28-0.1l-0.07-0.08h-0.15l-0.17,0.07h-0.22l-0.07-0.09h-0.14l-0.22,0.16l-0.1,0.22l-0.25,0.12l-0.19,0.12l-0.22,0.11
					l-0.15,0.22v0.19h0.06l0.18-0.13l0.27-0.07h0.14l0.06,0.06h0.26l0.45-0.11h0.39l0.33,0.14v0.11h-0.13h-0.32l-0.18,0.06h-0.87
					h-0.27l-0.07,0.08h-0.37v0.12l0.08,0.09h0.21l0.08,0.06l-0.11,0.06l-0.19,0.07h-0.25V8.2l0.13,0.12h0.25l0.59,0.18h0.21l0.07-0.1
					h0.15h0.05v0.2v0.17l-0.1,0.06l-0.2-0.08l-0.09,0.06l-0.08-0.05l-0.22,0.07v0.12l0.07,0.06h0.1l0.18,0.07v0.08l-0.26,0.1h-0.2
					l-0.24-0.14h-0.24v0.12l0.07,0.19h0.15l0.15-0.08h0.23l0.18,0.11l0.07,0.1h-0.54l-0.15,0.05L107,9.48h-0.14l-0.15,0.17v0.47
					l-0.08,0.11v0.12L106.9,10.41z"/>
				<polygon class="st1" points="140.44,0.85 140.56,1 140.74,1.2 140.95,1.6 141.27,1.86 141.41,1.99 141.58,1.93 141.75,1.89 
					141.91,1.9 142,1.83 142,1.67 142.03,1.36 142,1.03 142.06,0.77 142.13,0.62 142.21,0.63 142.28,0.74 142.22,0.94 142.22,1.13 
					142.31,1.38 142.2,1.59 142.18,1.76 142.31,1.81 142.4,1.73 142.56,1.66 142.67,1.75 142.74,1.87 142.68,2 142.73,2.07 
					142.82,2.04 142.97,2.06 143.1,1.97 143.12,1.78 143.08,1.61 143.09,1.19 143.15,1.04 143.16,0.78 143.21,0.68 143.13,0.54 
					143.01,0.52 143.09,0.37 143.09,0.36 140.34,0.36 140.37,0.41 		"/>
				<polygon class="st1" points="137.35,0.36 137.31,0.36 137.32,0.38 		"/>
				<polygon class="st1" points="106.85,8.66 106.82,8.56 106.73,8.54 106.67,8.57 106.73,8.72 		"/>
				<polygon class="st1" points="108.25,14.96 108.46,14.79 108.66,14.52 108.54,14.56 108.42,14.72 108.14,14.98 		"/>
				<polygon class="st1" points="107.27,9.01 107.37,8.9 107.23,8.84 107.03,8.95 		"/>
				<polygon class="st1" points="118.17,19.48 118.05,19.37 117.81,19.36 117.67,19.25 117.55,19.31 117.62,19.46 117.79,19.49 
					117.86,19.57 118.14,19.56 		"/>
				<polygon class="st1" points="124.81,12.76 124.81,12.91 124.9,13.01 124.95,12.95 124.88,12.79 124.95,12.66 		"/>
				<path class="st1" d="M108.23,14.73l0.13-0.12l0.1-0.15h-0.1l-0.22,0.24v0.07L108.23,14.73z"/>
				<polygon class="st1" points="124.23,12.46 124.16,12.31 124.01,12.32 123.84,12.51 123.82,12.65 123.77,12.79 123.93,12.93 
					123.98,13.05 124.11,13.06 124.25,12.93 124.46,12.95 124.5,12.81 124.34,12.51 		"/>
				<polygon class="st1" points="107.15,11.55 107.02,11.51 106.86,11.58 106.94,11.73 107.14,11.76 		"/>
				<polygon class="st1" points="87.13,21.67 86.83,21.71 86.55,21.94 86.53,22.06 86.42,22.19 86.33,22.41 86.37,22.57 86.47,22.57 
					86.72,22.38 86.9,22.37 87,22.23 87.2,22.08 87.21,21.96 87.14,21.91 87.16,21.77 		"/>
				<polygon class="st1" points="90.58,19.78 90.47,19.8 90.47,19.94 90.64,20.14 90.78,20.17 90.9,20.27 90.92,20.42 91.02,20.52 
					91.08,20.5 91.13,20.36 91.23,20.27 91.25,20.12 91.38,20.03 91.37,19.92 91.11,19.77 90.71,19.7 		"/>
				<polygon class="st1" points="85.11,16.7 85.27,16.79 85.38,16.87 85.54,16.85 85.59,16.77 85.64,16.74 85.63,16.58 85.46,16.43 
					85.28,16.35 85.23,16.28 84.99,16.15 84.81,16.14 84.73,16.15 84.79,16.23 85.06,16.31 85.1,16.45 85.08,16.53 		"/>
				<polygon class="st1" points="92.47,12.46 92.29,12.75 92.42,12.79 92.52,12.67 92.71,12.52 92.68,12.37 		"/>
				<polygon class="st1" points="81.05,16.15 80.75,15.91 80.58,15.87 80.49,15.9 80.7,16.05 80.88,16.23 81.08,16.27 81.35,16.36 
					81.27,16.25 		"/>
				<polygon class="st1" points="91.97,17.78 91.73,17.84 91.54,17.96 91.6,18.01 91.81,18.02 92.04,18.24 92.16,18.16 92.21,17.98 
					92.28,17.88 92.29,17.75 92.15,17.7 		"/>
				<polygon class="st1" points="91.27,19.69 91.33,19.66 91.3,19.45 91.19,19.3 91.15,19.18 91.03,19.01 90.91,19.12 90.91,19.25 
					91.02,19.34 91.02,19.5 		"/>
				<polygon class="st1" points="79.01,13.67 78.78,13.48 78.58,13.46 78.56,13.38 78.49,13.3 78.36,13.32 78.24,13.24 78.06,13.3 
					78,13.37 78.06,13.53 78.14,13.54 78.25,13.6 78.32,13.74 78.44,13.88 78.47,14.08 78.52,14.13 78.68,14.13 78.77,14.22 
					78.89,14.16 78.92,14.07 79,14.05 79.03,13.92 78.88,13.83 79.01,13.74 		"/>
				<polygon class="st1" points="81.77,4.23 81.94,4.22 82.15,4.3 82.53,4.22 82.69,4.33 82.98,4.2 83.17,4.17 83.25,4.08 83.58,3.92 
					83.8,3.85 83.91,3.65 84.27,3.1 84.28,2.83 84.4,2.56 84.64,2.37 84.64,2.17 84.55,1.9 84.36,1.7 84.22,1.7 84.09,1.52 
					83.81,1.44 83.54,1.57 83.39,1.49 83.28,1.61 83.16,1.61 82.89,1.78 82.5,2.34 82.3,2.48 82.15,2.78 81.8,3.13 81.77,3.43 
					81.74,3.73 81.82,3.84 81.73,4.14 		"/>
				<polygon class="st1" points="78.21,12.42 78.08,12.29 77.9,12.32 77.82,12.46 78.11,12.49 		"/>
				<polygon class="st1" points="96.14,48.48 96.07,48.61 96.14,48.63 96.2,48.57 		"/>
				<path class="st1" d="M98.34,45.6l-0.14,0.09l-0.07-0.09l-0.07,0.09h-0.15l-0.08-0.08l-0.17,0.11v0.26l-0.18,0.13l0.13-0.14v-0.33
					l0.15-0.25H97.7l-0.15,0.06l-0.07,0.13l-0.14,0.15v-0.09l0.09-0.09v-0.14v-0.06h-0.17l-0.22,0.2h-0.09l-0.07-0.21h-0.07l-0.2,0.17
					h-0.1v-0.07l0.21-0.14l0.15-0.23V44.9h-0.08h-0.11l-0.18,0.14l0.1-0.16l0.21-0.18h0.22l0.1-0.06h0.2l0.11-0.13V44.4h-0.07
					l-0.23,0.07H97l-0.2-0.16h-0.11l-0.1,0.08l0.1-0.23l0.07-0.07v-0.05h-0.14l-0.17,0.13l-0.11,0.17l-0.16,0.17l-0.13,0.09v0.14
					l-0.19,0.12l-0.15,0.17v-0.22v-0.17l0.13-0.2v-0.12l0.1-0.23l0.17-0.17v-0.11l0.12-0.12l0.08-0.09l0.12-0.22l0.16-0.11l0.1-0.15
					h0.13v-0.09V42.9l0.08-0.14l0.08-0.17v0.15v0.12l0.07,0.11l0.16-0.25l0.24-0.25l0.07-0.15l-0.08-0.12h-0.1l-0.11,0.1v-0.19
					l-0.1-0.08l0.07-0.12h0.13h0.2l0.19,0.12l0.11-0.06l0.09-0.14v-0.34h-0.18l-0.15,0.06v0.1h-0.12v-0.14v-0.09l-0.12,0.07
					l-0.13,0.14h-0.16l-0.1,0.12l-0.16,0.12h-0.22l-0.2,0.17l-0.24,0.18v0.2H96h-0.11l0,0l0.06,0.09v0.12l-0.13,0.15l-0.24,0.17
					l-0.14,0.08v0.07l-0.07,0.09h-0.1v0.13l0.11,0.06l-0.1,0.09l-0.15,0.13L95,43.79v0.1h0.07h0.08l-0.14,0.08h-0.15l-0.15,0.23v0.14
					l-0.29,0.42v0.13l0.1,0.11v0.14h-0.09l-0.06-0.07H94.3l-0.25,0.12l-0.09,0.17v0.11h0.15l0.02,0.13l-0.08,0.07v0.14l-0.15,0.11
					l-0.29-0.08l-0.07,0.08v0.12l-0.16,0.16l-0.13,0.28l-0.13,0.18h-0.08v-0.19l-0.08,0.18l-0.11-0.17v-0.11L93,46.26l0.06-0.13
					l-0.07,0.07l-0.19,0.14l-0.31,0.19l-0.13,0.32h0.1l0.19-0.06h0.37h0.3l-0.18,0.18l-0.25,0.31l-0.16,0.25l-0.3,0.16l-0.3,0.21
					h-0.15l-0.06,0.14l0.06,0.14v0.2v0.1h0.15l0.26,0.08h0.3l0.18-0.15h0.23l0.17-0.15v-0.11v0.09l-0.13,0.18l0.28,0.06l0.2-0.08
					l0.1,0.13h0.35l0.21-0.06v0.09l0.09,0.11h0.24h0.09v0.08h0.16l0.27-0.15v-0.09h0.21l0.07,0.08h0.11l0.09-0.09h0.12l0.13,0.06
					l0.05-0.12v-0.11v-0.2l0.07,0.08l0.09-0.15h0.09l-0.06,0.06l-0.07,0.26v0.06l0.1-0.14l0.14-0.16h0.06v0.17l-0.09,0.14v0.1h0.17
					h0.07v0.05l-0.26,0.17l-0.25,0.1l0.08,0.06h0.07h0.15v0.08h0.15l0.06,0.08l0.1-0.08h0.16l0.08-0.18v-0.14l0.11,0.07l0.2-0.16
					l0.1,0.11h0.15l0.13-0.08h0.18l-0.15,0.1v0.09l-0.23,0.1h-0.23l-0.12,0.14v0.1h-0.07v0.1h-0.17h-0.09l-0.06,0.09l-0.09,0.09h-0.23
					l-0.2,0.16v0.1l0.06,0.08v0.08h0.17l0.08-0.1l0.08-0.09h0.1v0.12l0.09,0.07l0.19-0.07l0.12-0.13l0.08-0.15h0.06l0.05,0.09v-0.18
					h0.1l0.23-0.26l0.11-0.07l0.11,0.09h0.18l-0.15,0.09h0.14l0.12-0.08l0.1-0.31l0.13-0.26v-0.25l0.06-0.08h0.08l0.1,0.1h0.08
					l0.1,0.09v0.27v0.15v0.19l0.07,0.13l-0.06,0.14l-0.2,0.17l-0.15,0.38v0.18l-0.08,0.07v0.16h0.13l0.19-0.11l0.18-0.35h0.1
					l0.19-0.22l0.1-0.14v0.08h0.22v0.02h-0.16l-0.23,0.24V50v0.19l0.06,0.08v0.24l0.13,0.12v-0.18l0.12-0.13h0.12l0.11,0.17h0.12
					l0.18-0.12v-0.13h0.08v-0.13v-0.18h0.06v-0.12l-0.07-0.14l0.06-0.21l0.22-0.31l0.14-0.22v-0.39V48.4h-0.07v0.2l-0.09,0.21
					l-0.19,0.12l-0.16,0.19h-0.11l-0.08-0.16v-0.2v-0.21l0.23-0.17v-0.09l0.2-0.19h0.15l0.09-0.05v-0.14l-0.12,0.11h-0.09l-0.16,0.08
					h-0.16l-0.16,0.16v0.13l-0.26,0.21v0.1l-0.13,0.09l-0.19-0.16V48.5l-0.06-0.16v-0.16l0.09,0.15h0.09l0.16-0.24h-0.1l-0.2-0.07
					h0.13h0.21l-0.22-0.05l-0.1-0.1v-0.14l0.07-0.05h0.11l0.07-0.06l0.2-0.16l0.09-0.23h0.2l0.07,0.08l0.24-0.15l0.08-0.18v-0.19
					l-0.07-0.13l-0.17,0.18l-0.14,0.09v-0.09h-0.14v0.11v0.18h-0.1h-0.11l-0.17,0.12l-0.12,0.08v0.14h-0.09v-0.11V47.2l-0.09,0.09
					h-0.14l0.14-0.08l0.13-0.13L99.08,47l-0.1-0.06l0.11-0.1l0.08-0.19h-0.09l-0.11,0.12l0.06-0.15v-0.14h-0.09l-0.16,0.05h-0.25h0.25
					l0.07-0.06h0.23l0.17-0.08l0.08-0.1h0.13l0.13-0.09v-0.17l0.09-0.09v-0.13l-0.16-0.1L99.3,45.5h-0.22l-0.23,0.05h-0.11v0.05
					l-0.1,0.19V46l-0.15,0.11l0.09-0.12v-0.22l-0.06-0.08l0.06-0.13l0.09-0.19h-0.08l-0.18,0.15L98.34,45.6z"/>
				<polygon class="st1" points="98.9,47.81 98.9,47.91 99.03,47.97 99.25,47.97 99.28,47.88 99.02,47.8 		"/>
				<polygon class="st1" points="95.42,50.3 95.49,50.3 95.58,50.12 95.53,50.01 95.45,49.94 95.44,49.81 95.53,49.73 95.55,49.58 
					95.46,49.47 95.47,49.38 95.38,49.47 95.3,49.58 95.38,49.76 95.42,49.97 95.36,50.15 		"/>
				<polygon class="st1" points="93.04,15.13 92.95,15.05 92.9,15.48 92.83,15.78 92.95,15.99 93.03,15.89 92.99,15.71 93.08,15.4 		
					"/>
				<polygon class="st1" points="95.66,50.43 95.72,50.51 95.81,50.38 95.8,50.26 95.69,50.29 		"/>
				<polygon class="st1" points="78.43,11.54 78.56,11.46 78.83,11.77 78.78,11.93 79.18,11.96 79.42,12.05 79.54,11.92 79.81,11.94 
					79.9,11.81 80.19,11.8 80.35,11.73 80.56,11.81 80.69,11.68 80.69,11.42 80.77,11.22 80.88,11.23 81.14,11.67 81.33,11.67 
					81.5,11.86 81.82,11.93 81.91,11.78 82.06,11.56 82.19,11.55 82.4,11.35 82.62,11.27 82.57,11.44 82.59,11.7 82.41,11.92 
					82.42,12.21 82.65,12.07 82.8,11.62 82.86,11.69 82.99,11.61 83.19,11.68 83.04,11.99 83.12,12.18 83.14,11.94 83.59,11.55 
					83.66,11.68 83.38,11.95 83.37,12.16 83.57,12.27 83.7,12.62 83.68,12.86 83.74,13.1 83.95,13.06 83.95,13.35 84.07,13.47 
					84.24,13.18 84.19,13.59 84.03,13.78 84.25,14.01 84.28,13.81 84.41,13.57 84.56,13.5 84.5,13.61 84.59,13.9 84.77,14.18 
					85.16,14.13 85.06,14.27 84.58,14.6 84.22,14.58 84.13,14.69 84.38,14.81 84.4,15.13 84.57,15.36 84.72,15.54 84.89,15.57 
					84.88,15.71 85.12,15.91 85.26,16.04 85.43,16.05 85.84,16.33 86.06,16.33 86.06,16.45 86.2,16.53 86.27,16.43 86.35,16.37 
					86.6,16.48 86.47,16.56 86.36,16.66 86.47,16.9 86.64,17.01 86.76,17 86.76,17.17 87.03,17.49 87.22,17.49 87.37,17.63 
					87.42,17.78 87.82,17.95 87.92,17.86 88.08,17.93 88.23,17.9 88.43,18.01 88.49,18.17 88.86,18.49 89.05,18.52 89.24,18.66 
					89.65,18.8 89.88,18.95 90.12,18.95 90.18,18.88 90.19,18.73 90.03,18.55 89.93,18.38 90.04,18.26 90.23,18.31 90.31,18.15 
					90.23,17.99 90.12,18.06 90.05,17.96 90.08,17.67 90.02,17.61 89.79,17.83 89.78,17.7 89.71,17.52 89.57,17.53 89.79,17.29 
					89.72,16.99 89.58,16.93 89.37,16.96 89.42,16.73 89.28,16.48 89.19,16.3 88.95,16.29 89.09,16.1 88.92,16.06 88.8,16.08 
					88.87,15.93 88.7,15.71 88.39,15.65 88.29,15.67 88.26,15.35 88.23,15.16 88.22,15.04 87.85,14.73 87.78,14.4 87.81,14.17 
					87.98,14.27 88.09,14.09 88.36,14.15 88.37,14.4 88.55,14.75 88.85,14.89 88.99,15.01 89.01,15.18 89.12,15.3 89.1,15.09 
					88.98,14.78 89,14.66 89.13,14.58 89.25,14.78 89.25,14.91 89.37,15.02 89.49,15.44 89.68,15.48 89.68,15.6 89.86,15.79 
					90.05,16.23 90.19,16.07 90.13,15.82 90.11,15.42 90.17,15.18 90.17,15.35 90.32,15.76 90.29,15.99 90.32,16.21 90.45,16.25 
					90.61,16.36 90.69,16.21 90.59,16.08 90.59,15.97 90.76,16.01 90.85,16.25 90.84,16.42 90.9,16.51 90.92,16.31 91.06,16.23 
					91.06,16.62 91.17,16.77 91.35,16.74 91.47,16.6 91.47,16.86 91.38,16.98 91.48,17.4 91.63,17.57 91.87,17.6 91.87,17.42 
					91.79,17.35 91.81,17.02 91.67,16.53 91.88,16.53 92,16.72 92.23,16.77 92.31,16.68 92.16,16.43 92.25,16.22 92.28,15.8 
					92.11,15.35 92.16,14.97 92.19,14.63 92.28,15.01 92.24,15.28 92.32,15.58 92.66,15.97 92.74,15.88 92.68,15.59 92.8,15.32 
					92.83,14.95 93.01,14.85 92.92,14.78 92.63,14.32 92.58,13.99 92.45,13.95 92.51,13.76 92.36,13.47 92.2,13.29 92.49,13.24 
					92.54,13.15 92.75,13 92.64,12.89 92.48,12.97 92.16,13.01 92.03,12.89 92.09,12.81 92.12,12.65 92.29,12.48 92.35,12.26 
					92.23,12.06 92.08,12.04 92.07,12.18 91.96,12.36 91.94,12.19 91.87,12.25 91.54,12.3 91.5,12.2 91.7,12.08 91.75,11.98 
					91.65,11.86 91.61,11.59 91.45,11.45 91.34,11.52 91.31,11.77 91.24,11.92 91.18,11.88 91.15,11.55 91.1,11.36 90.99,11.34 
					91.03,11.13 90.94,11.13 90.91,11.04 90.94,11.01 90.9,10.85 90.77,10.81 90.84,10.7 91.08,10.67 91.21,10.59 91.06,10.44 
					90.84,10.41 90.74,10.34 90.86,10.17 91.09,10.04 91.09,9.96 90.98,9.84 90.6,9.83 90.55,9.94 90.41,10.12 89.93,10.23 
					90.15,10.05 90.5,9.74 90.66,9.51 90.64,9.39 90.42,9.39 90.31,9.34 90.41,9.2 90.32,9.08 90.18,9.11 90.17,8.96 90.31,8.78 
					90.32,8.51 90.04,8.42 89.83,8.33 89.5,8.31 89.39,8.17 89.69,8.19 89.92,8.13 90.06,8.03 90.16,8.21 90.2,8.36 90.41,8.35 
					90.63,8.48 90.67,8.64 90.58,8.79 90.62,8.97 90.88,9.26 90.96,9.26 91.04,9.02 91.15,9.17 91.43,9.21 91.57,9.15 91.6,9.04 
					91.49,9 91.51,8.83 91.43,8.61 91.26,8.4 91.09,8.37 91.17,8.18 91.15,8 91.01,7.86 91.08,7.79 91.19,7.87 91.25,8.13 91.38,8.28 
					91.58,8.24 91.54,8.18 91.59,8.11 91.75,8.14 91.72,7.92 91.57,7.67 91.32,7.51 91.55,7.51 91.69,7.64 91.8,7.75 92.01,7.67 
					91.97,7.53 91.97,7.35 92.03,7.34 92.13,7.48 92.27,7.55 92.27,7.7 92.17,7.75 92.14,8.01 92.17,8.08 92.3,8.08 92.4,8.15 
					92.4,8.28 92.27,8.32 92.2,8.42 92.33,8.5 92.47,8.46 92.54,8.54 92.5,8.73 92.57,8.83 92.69,8.87 92.86,8.79 93.36,8.48 
					93.55,8.19 93.57,8.38 93.47,8.49 93.4,8.62 93.13,8.77 92.77,9.15 92.76,9.24 92.93,9.31 93.19,9.28 93.53,9.03 93.7,9.03 
					94.02,8.88 94.13,8.69 94.27,8.61 94.51,8.42 94.62,8.4 94.64,8.49 94.53,8.55 94.34,8.77 94.23,8.99 94.06,9.1 93.85,9.28 
					93.58,9.33 93.45,9.37 93.25,9.66 93.23,9.78 93.31,9.84 93.44,9.75 93.64,9.75 93.8,9.81 93.62,9.87 93.44,9.94 93.3,10 
					93.32,10.13 93.44,10.18 93.6,10.11 93.71,10.08 93.54,10.3 93.33,10.36 93.28,10.47 93.32,10.56 93.5,10.61 93.67,10.56 
					93.86,10.58 93.91,10.65 93.78,10.7 93.77,10.76 93.53,10.86 93.44,10.96 93.49,11.12 93.59,11.28 93.6,11.44 93.64,11.5 
					93.79,11.33 93.9,11.08 94.04,10.93 94.08,10.95 94.05,11.08 94.04,11.18 93.94,11.26 93.94,11.35 94.04,11.47 93.95,11.59 
					94.07,11.75 94.16,11.76 94.22,11.62 94.4,11.54 94.48,11.53 94.48,11.64 94.39,11.77 94.42,11.86 94.56,11.92 94.55,12.02 
					94.6,12.08 94.63,12.19 94.73,12.23 94.8,12.13 95.06,12.04 95.09,11.84 95.06,11.69 94.89,11.51 94.95,11.49 95.06,11.56 
					95.14,11.56 95.14,11.42 95.06,11.22 95.08,11.11 95.19,11.07 95.22,10.9 95.19,10.8 95.08,10.8 94.93,10.68 94.95,10.6 
					95.02,10.65 95.18,10.68 95.29,10.54 95.25,10.43 95.11,10.41 95.05,10.34 95.22,10.33 95.33,10.23 95.33,9.87 95.37,9.73 
					95.45,9.82 95.47,10.03 95.53,10.22 95.5,10.4 95.62,10.45 95.8,10.41 95.84,10.26 95.93,10.22 95.92,10.46 96.01,10.55 
					96.14,10.55 96.21,10.49 96.22,10.18 96.22,9.94 96.13,9.85 96.09,9.78 96.27,9.85 96.43,9.98 96.5,10.16 96.62,10.18 
					96.71,10.03 96.71,9.74 96.61,9.53 96.35,9.34 96.28,9.22 96.36,9.22 96.47,9.34 96.71,9.49 96.8,9.65 97.18,9.66 97.25,9.48 
					97.22,9.33 97.07,9.28 96.93,9.16 96.67,9.16 96.53,9.01 96.57,8.78 96.61,8.91 96.8,9.03 96.98,9.02 97.02,8.91 96.96,8.7 
					96.84,8.61 96.82,8.47 96.93,8.44 97.01,8.53 97.19,8.63 97.2,8.75 97.14,8.94 97.36,8.98 97.62,9.02 97.8,8.97 98.01,8.97 
					98.14,8.82 98.12,8.72 97.99,8.72 97.66,8.71 97.57,8.64 97.72,8.54 97.91,8.59 98.03,8.54 97.97,8.4 97.85,8.34 97.94,8.29 
					97.85,8.17 97.72,8.14 97.55,8.22 97.68,8.03 97.81,7.93 97.89,8 98.03,8.07 98.15,8.25 98.13,8.41 98.41,8.41 98.52,8.33 
					98.59,8.25 98.55,8.09 98.39,7.95 98.37,7.78 98.29,7.65 98.06,7.68 98.16,7.41 98.03,7.24 97.82,7.25 97.74,7.22 97.86,7.06 
					97.79,6.98 97.46,7.15 97.36,7.32 97.4,7.6 97.31,7.61 97.18,7.49 97.15,7.12 97.07,7.06 96.97,7.11 96.96,7.28 96.78,7.61 
					96.63,7.72 96.71,7.54 96.74,7.26 96.91,6.97 96.93,6.78 96.7,6.87 96.44,7.19 96.44,7.3 96.24,7.5 96.08,7.47 96.08,7.31 
					96.2,7.07 96.5,6.96 96.62,6.69 96.74,6.49 96.84,6.48 97,6.3 97.05,6.18 96.86,6.12 96.6,6.3 96.45,6.48 96.24,6.55 96.01,6.78 
					96.11,6.52 96.31,6.25 96.25,6.24 96.01,6.29 95.9,6.4 95.55,6.32 95.3,6.34 95.17,6.22 95.42,6.24 95.94,6.12 95.72,6.02 
					95.56,5.92 95.72,5.94 95.91,5.88 95.79,5.67 95.64,5.63 95.63,5.56 95.84,5.46 95.86,5.31 95.77,4.98 95.68,4.84 95.38,4.94 
					95.24,5.05 95.12,4.96 95.03,5.04 94.96,4.99 95.06,4.78 95.09,4.56 95.39,4.5 95.5,4.38 95.52,4.08 95.46,3.98 95.25,4.15 
					94.94,4.4 94.8,4.6 94.63,4.74 94.6,4.98 94.62,5.14 94.51,5.22 94.48,4.98 94.49,4.73 94.61,4.54 94.85,4.22 94.92,4.03 
					94.86,3.97 94.67,4.1 94.57,4.29 94.59,4.35 94.34,4.47 94.22,4.64 94.22,4.79 94.03,5.12 93.91,5.19 93.91,5 94.02,4.76 
					94.27,4.34 94.36,4.19 94.32,3.99 94.14,4.01 93.96,4.19 93.93,4.38 93.85,4.45 93.82,4.29 93.94,3.99 94.02,3.84 93.92,3.67 
					93.7,3.59 93.77,3.51 93.65,3.39 93.32,3.38 93.15,3.46 93.23,3.29 93.45,3.26 93.21,3.19 92.89,3.19 92.72,3.37 92.73,3.18 
					93.14,2.98 93.44,2.94 93.58,3.03 93.82,3.11 93.86,2.99 93.94,2.78 93.74,2.79 93.5,2.71 93.23,2.58 93.05,2.58 93.04,2.82 
					92.89,2.83 92.89,2.72 92.98,2.61 93,2.48 92.77,2.48 92.75,2.62 92.65,2.69 92.56,2.54 92.54,2.37 92.42,2.31 92.34,2.36 
					92.19,2.23 92.07,2.16 91.9,2.19 92.08,1.98 92.2,1.94 92.58,2.18 92.7,2.15 92.66,2.01 91.97,1.67 91.67,1.59 91.61,1.5 
					91.81,1.48 92.31,1.66 92.63,1.67 93.14,1.81 93.28,1.79 93.2,1.68 93.2,1.51 93.1,1.39 92.91,1.31 92.71,1.17 92.78,1.11 
					92.93,1.1 93,1.2 93.11,1.27 93.23,1.18 93.48,1.18 93.54,1.15 93.52,1.05 93.36,0.98 93.35,0.88 93.22,0.7 93.01,0.73 
					92.81,0.85 92.47,0.85 92.41,0.96 92.28,0.98 92.25,0.81 92.47,0.68 92.76,0.68 92.89,0.61 93.21,0.58 93.28,0.46 93.07,0.42 
					92.9,0.36 85.5,0.36 85.39,0.4 85.35,0.48 85.7,0.44 85.77,0.61 85.56,0.81 85.6,1.14 85.72,1.18 85.83,1.42 86.14,1.34 
					86.21,1.2 86.12,1.03 86.14,0.87 86.25,0.83 86.54,1.04 86.54,1.22 86.41,1.47 86.6,1.58 86.64,1.69 86.26,1.85 86.21,1.96 
					86.38,2.15 86.91,2.16 87.01,2.23 86.99,2.46 87.01,2.63 87.12,2.6 87.13,2.44 87.27,2.27 87.41,2.25 87.43,2.4 87.3,2.63 
					87.27,2.82 87.08,2.86 86.97,3.23 86.97,3.34 87.16,3.4 87.16,3.64 87.02,3.89 87.02,4.11 87.08,4.19 87.05,4.28 86.99,4.77 
					86.86,4.96 87,5.21 86.95,5.39 86.55,5.53 86.16,5.44 86.02,5.53 85.96,5.72 85.47,6.11 85.48,6.31 85.83,6.51 85.71,6.53 
					85.51,6.59 85.36,6.46 85.22,6.46 84.89,6.8 84.7,6.91 84.24,7.19 83.85,7.5 83.7,7.51 83.58,7.63 83.5,7.94 83.67,8.18 
					83.71,8.42 83.93,8.76 84,9.43 83.88,9.55 83.75,9.48 83.6,9.6 83.55,9.87 83.48,9.64 83.47,9.27 83.36,9.13 83.11,9.27 83,9.52 
					82.75,9.73 82.56,9.63 82.64,9.52 82.64,9.41 82.3,9.41 82.17,9.66 81.99,9.87 81.69,9.81 81.51,9.8 81.41,9.65 81.21,9.64 
					81.03,9.8 80.74,9.65 80.6,9.62 80.41,9.4 80.12,9.2 79.84,9.15 79.57,8.73 79.48,8.83 79.51,8.99 79.46,9.11 79.31,9.07 
					79.25,9.13 79.26,9.29 79.38,9.46 79.34,9.67 79.22,9.65 78.97,9.7 78.81,9.88 78.52,9.91 78.33,10.11 78.33,10.36 78.12,10.5 
					78.02,10.8 78.2,11.32 		"/>
				<polygon class="st1" points="93.94,0.71 94.08,0.64 94.17,0.78 94.29,0.84 94.41,0.7 94.5,0.68 94.63,0.89 94.81,0.9 94.91,0.81 
					94.9,0.52 94.81,0.36 93.5,0.36 93.77,0.67 		"/>
				<polygon class="st1" points="83.94,0.49 83.98,0.4 84.07,0.36 83.77,0.36 83.8,0.49 		"/>
				<polygon class="st1" points="92.62,13.47 92.71,13.6 92.8,13.62 92.8,13.44 92.73,13.37 		"/>
				<polygon class="st1" points="97.49,42.9 97.49,43.05 97.57,43.09 97.62,43.03 97.71,43.03 97.71,42.89 97.62,42.86 		"/>
				<polygon class="st1" points="71.63,1.22 71.79,1.05 71.75,0.94 71.5,0.9 71.3,0.91 71.27,1.15 71.34,1.22 		"/>
				<polygon class="st1" points="71.71,0.82 71.94,0.74 71.94,0.49 71.97,0.36 71.47,0.36 71.48,0.57 71.35,0.8 		"/>
				<polygon class="st1" points="85.51,1.45 85.6,1.34 85.51,1.19 85.43,0.93 85.36,1.23 85.42,1.44 		"/>
				<polygon class="st1" points="85.2,2.53 85.07,2.56 84.9,2.55 84.85,2.65 84.92,2.89 84.98,3.23 85.09,3.3 85.23,3.24 85.48,3.31 
					85.61,3.37 85.83,3.33 86.08,3.41 86.17,3.23 86.09,3.08 86.1,2.8 85.84,2.79 85.72,2.6 85.51,2.57 85.42,2.62 85.41,2.48 
					85.4,2.33 85.3,2.37 		"/>
				<polygon class="st1" points="80.8,1.5 80.83,1.32 81.03,1.28 81.03,1.11 80.81,1.09 80.73,1.04 80.62,1.24 80.71,1.56 		"/>
				<polygon class="st1" points="81.21,0.54 81.27,0.38 81.25,0.36 81.03,0.36 81.06,0.47 80.96,0.6 80.96,0.74 81.18,0.72 		"/>
				<polygon class="st1" points="85.87,1.93 85.86,1.72 85.79,1.67 85.7,1.85 85.79,2 		"/>
				<polygon class="st1" points="84.92,1.59 84.96,1.78 85.09,1.69 85.21,1.64 85.16,1.25 85.21,0.88 85.08,0.68 84.94,0.71 
					84.92,0.94 84.79,1.22 84.83,1.47 		"/>
				<polygon class="st1" points="7.57,30.77 7.24,30.93 7.55,31.08 7.66,30.93 		"/>
				<polygon class="st1" points="7.58,31.99 7.59,32.21 7.68,32.2 7.77,32.02 7.7,31.91 		"/>
				<polygon class="st1" points="6.85,30.13 6.81,30.62 6.98,30.74 6.99,30.93 7.14,30.68 7.04,30.38 		"/>
				<polygon class="st1" points="6.89,29.76 7.03,29.64 6.89,29.42 		"/>
				<polygon class="st1" points="7.35,33.24 7.37,33.49 7.51,33.65 7.59,33.28 7.53,33.05 		"/>
				<polygon class="st1" points="6.66,27.75 6.53,27.71 6.45,27.8 6.48,28.14 6.68,28.46 6.72,28.84 6.99,29.07 7.03,28.64 
					6.79,28.11 		"/>
				<polygon class="st1" points="8.66,32.15 9.06,31.78 9.1,31.64 8.73,31.76 8.54,32 8.33,32.01 8.01,32.46 8.17,32.45 8.46,32.18 		
					"/>
				<path class="st1" d="M5.86,28.25l0.11,0.26l0.4,0.44v0.3l0.21,0.09l0.11-0.23l-0.2-0.39l-0.56-0.65L5.86,28.25z"/>
				<polygon class="st1" points="11,38.46 10.76,38.11 10.46,37.89 10.53,38.25 10.92,38.6 		"/>
				<polygon class="st1" points="88.75,51.84 89.16,52.03 89.26,52.22 89.34,52.17 89.39,51.92 89.49,51.88 89.59,52.02 89.83,52.02 
					90.24,51.71 90.62,51.66 90.75,51.55 91.01,51.47 90.94,51.35 90.88,51.05 90.62,50.96 90.47,51 90.46,51.2 90.3,51.31 
					90.21,51.2 90.33,51.02 90.23,50.83 89.95,50.73 90.13,50.56 90.42,50.06 90.42,49.88 90.18,49.86 90.3,49.67 90.28,49.56 
					90.08,49.59 89.96,49.8 89.64,50.05 89.51,50.33 89.39,50.47 89.1,50.88 88.73,51.1 88.63,51.3 88.72,51.47 		"/>
				<polygon class="st1" points="3.98,28.8 4.28,28.56 4.31,28.11 4.55,27.82 4.66,27.4 5.15,26.86 5.02,26.83 4.6,27.03 4.27,27.43 
					4.1,27.85 3.8,27.92 3.76,27.77 3.6,27.64 4.11,27.45 4.34,27.23 4.37,26.91 4.36,26.74 4.17,26.65 4,26.81 3.84,26.88 
					3.91,26.54 3.48,26.42 3.07,27.12 3.13,27.6 2.98,27.86 3,28.1 3.22,28.15 3.4,28.36 3.41,28.6 3.28,28.52 3.06,28.49 3.02,28.64 
					3.22,28.87 3.07,29.15 3.23,29.22 3.47,29.49 3.16,29.45 3.06,29.65 3.13,29.88 3.44,29.94 3.37,30.13 3.41,30.51 3.82,31.38 
					4.17,31.46 4.31,31.24 4.2,31.07 4,31.08 3.92,30.74 3.78,30.28 3.83,29.9 3.74,29.62 3.9,29.29 4.26,29.3 4.23,28.98 3.93,28.94 
					3.77,29.04 3.54,29.03 3.74,28.8 		"/>
				<polygon class="st1" points="6.37,27.43 6.38,27.58 6.57,27.58 6.7,27.26 6.46,27.08 6.13,27.23 5.98,27.43 		"/>
				<polygon class="st1" points="9.92,36.89 9.98,37.28 10.12,36.83 		"/>
				<polygon class="st1" points="7.21,29.18 7.07,29.29 7.25,29.49 7.32,29.34 		"/>
				<polygon class="st1" points="7.28,29.93 7.21,30.11 7.22,30.31 7.43,30.35 7.69,30.09 7.55,30.4 7.59,30.65 7.87,30.36 
					7.91,29.73 7.61,29.56 7.34,29.63 7.07,29.89 		"/>
				<polygon class="st1" points="6.55,26.05 6.54,25.79 6.34,25.92 6.39,26.19 		"/>
				<polygon class="st1" points="7.99,28.63 8.08,28.41 7.95,28.39 7.67,28.54 7.57,28.85 7.74,28.72 		"/>
				<polygon class="st1" points="7.81,31.01 7.92,30.93 7.92,30.85 8.07,30.74 7.98,30.47 7.81,30.71 		"/>
				<polygon class="st1" points="8.43,35.38 8.7,35.41 8.6,35.17 		"/>
				<polygon class="st1" points="8.16,35.98 7.73,35.75 7.53,35.51 7.47,35.26 7.16,35.28 6.99,34.99 6.75,34.93 6.64,35.02 6.24,35 
					6.36,35.37 6.47,35.39 6.59,35.72 7.25,35.8 6.98,35.95 6.65,35.93 6.45,36.23 6.61,36.32 6.46,36.65 6.54,36.74 6.85,36.63 
					6.89,36.88 7.18,36.87 7.19,37.13 7.46,37.31 7.74,37.16 7.38,37.58 7.54,37.91 7.74,37.84 7.77,37.6 8.12,37.5 8.03,37.82 
					7.81,38.02 7.83,38.25 7.96,38.2 8.04,38.52 8.51,38.47 8.48,38.7 8.65,38.73 8.75,38.98 8.66,39.23 8.97,39.5 9.17,39.32 
					9.3,39.45 9.54,39.45 9.16,39.85 9.67,40.37 9.84,40.42 9.95,40.61 10.78,41.09 10.91,40.99 11.16,41.02 10.97,40.33 11.02,39.98 
					10.92,39.77 10.98,39.24 10.76,38.93 10.14,38.51 10.09,37.73 9.76,37.24 9.76,36.78 9.61,36.62 9.33,36.58 8.85,36.33 
					8.58,36.33 8.28,36.21 		"/>
				<polygon class="st1" points="8.88,36.15 8.86,35.95 8.5,35.99 		"/>
				<polygon class="st1" points="9.1,35.59 8.94,35.47 8.86,35.58 8.68,35.59 8.66,35.79 8.9,35.77 		"/>
				<polygon class="st1" points="70.49,29.51 70.37,29.61 70.18,29.73 70.09,29.73 70.01,29.8 69.83,29.81 69.7,30.08 69.77,30.14 
					69.99,30.06 70.33,29.82 		"/>
				<polygon class="st1" points="71.21,29.26 71.12,29.28 71.18,29.4 71.25,29.34 		"/>
				<path class="st1" d="M70.91,30.53l-0.09,0.2l0.15-0.11l0.3-0.37l0.11-0.1v-0.29l-0.11-0.13H71.2v-0.19l-0.2-0.1l-0.09,0.13
					l-0.12,0.37l-0.19,0.2l-0.21,0.13V30.1l0.21-0.2l0.08-0.23l0.05-0.07l-0.17,0.13l-0.16,0.32l-0.3,0.29v0.14l-0.2,0.24l0.06,0.17
					h0.1l0.26-0.35h0.14l-0.07,0.17l-0.17,0.28h0.08l0.19-0.12h0.14c0.06-0.09,0.13-0.17,0.2-0.25l0.31-0.43l0.07-0.17h0.09v0.17
					L70.91,30.53z M70.79,30.34l-0.16,0.26h-0.09v-0.2l0.36-0.36L70.79,30.34z"/>
				<path class="st1" d="M74.77,12.46l-0.13-0.16l0.16-0.06l0.08-0.15l-0.16-0.07l-0.1-0.21h-0.1v0.16l-0.1,0.08l-0.11-0.07
					l-0.18-0.07v-0.17h-0.09l-0.17,0.19h-0.42l-0.17-0.15l0.23-0.14h0.18l0.19-0.15V11.3l-0.09-0.07v-0.29l0.09-0.16v-0.14l-0.22-0.04
					v-0.23l-0.35-0.4l-0.33-0.13V9.72l-0.09-0.31H72.7l-0.06-0.17V8.93l-0.08-0.19h-0.33L71.8,8.6l-0.13-0.26l0.11-0.14V8.03
					l-0.21-0.16l-0.06-0.18h-0.08l-0.25,0.29v0.23l-0.14,0.13l-0.12-0.11V7.9l-0.14-0.3V7.44h0.14h0.21V7.33V7.11l-0.07-0.24
					l-0.24,0.06V6.75l0.2-0.25l-0.13-0.06l-0.51,0.21l-0.25,0.23l-0.2,0.51l-0.25,0.36v0.2l-0.16,0.22v0.17l-0.26,0.43l0.09,0.18
					l-0.22,0.08v0.24v0.22l-0.34,0.3l-0.12,0.22v0.37l-0.07,0.15v0.39l-0.15,0.16h-0.33l-0.44,0.18v0.24l-0.14,0.46v0.28h0.12v-0.23
					h0.13l0.09,0.07l0.17,0.1h0.21l0.11-0.06h0.12l0.15,0.1v0.16l-0.2,0.26v0.21l-0.15,0.22v0.36l0.06,0.11l0.15-0.07l0.09,0.07h0.2
					l0.15-0.1h0.21l0.07-0.11l0.19-0.11h0.19l0.22-0.2l0.07-0.29l0.18-0.16l0.13-0.2h0.12l0.12,0.12l0.19-0.14l0.13-0.09h0.17
					l0.09-0.35l0.11-0.31l0.23-0.15l0.09-0.17h0.16l0.12,0.11l0.13-0.14l0.15-0.06l0.13,0.07v0.21l-0.17,0.15l-0.12,0.15l0.21,0.13
					h0.38l0.19,0.07v0.19l-0.16,0.25h-0.16v0.32l0.17,0.08l0.11-0.07h0.18l0.08,0.07h0.16l0.08,0.17h0.24l0.14,0.14h0.15l0.33,0.19
					l0.12-0.07l0.14-0.31h0.16l0.21-0.22h0.22v-0.13L74.77,12.46z"/>
				<polygon class="st1" points="68.42,38.99 68.72,38.82 68.65,38.61 68.56,38.69 68.36,38.73 68.27,38.94 		"/>
				<path class="st1" d="M71.91,15.26l0.32-0.22v-0.19l0.21-0.25l-0.1-0.08h-0.21l-0.12-0.08h-0.18l-0.21,0.11l-0.1-0.08l-0.14,0.05
					l-0.17,0.2l-0.23-0.12l-0.08-0.24l-0.1,0.05l-0.24,0.07l-0.28,0.35v0.13l-0.11,0.14l-0.48,0.12v0.17l0.11,0.11l0.08,0.26
					l-0.08,0.19v0.25l0.06,0.07h0.11l0.23-0.3h0.18h0.12v0.15h0.2l0.37-0.31l0.19-0.06l0.24-0.16l0.21-0.32L71.91,15.26z"/>
				<path class="st1" d="M71.6,30.3v-0.32h-0.08l-0.06,0.21l-0.18,0.22h0.11L71.6,30.3z"/>
				<polygon class="st1" points="74.89,16.28 74.84,16.14 74.84,15.98 74.75,15.89 74.62,15.95 74.5,15.95 74.37,15.8 74.28,15.76 
					74.17,15.91 73.92,16.15 73.81,16.18 73.66,16.33 73.61,16.57 73.67,16.77 73.5,16.88 73.44,17.03 73.47,17.27 73.35,17.42 
					73.43,17.52 73.62,17.55 73.69,17.72 73.79,17.77 73.84,17.98 73.91,17.98 73.98,17.88 74.02,17.77 74.11,17.65 74.13,17.53 
					74.06,17.47 74.11,17.35 74.34,17.16 74.5,16.94 74.64,16.91 74.69,16.84 74.68,16.74 74.66,16.59 74.78,16.45 		"/>
				<polygon class="st1" points="88.71,49.16 88.76,49.1 88.65,49.08 88.6,48.98 88.69,48.94 88.75,48.77 88.95,48.61 88.96,48.64 
					88.98,48.57 88.93,48.57 88.69,48.76 88.55,48.98 88.62,49.12 		"/>
				<path class="st1" d="M76.55,15.78l0.07,0.1h0.23v-0.09l-0.28-0.07L76.55,15.78z"/>
				<polygon class="st1" points="77.12,13.71 76.96,13.53 76.87,13.61 76.64,13.63 76.51,13.56 76.47,13.7 76.51,13.92 76.71,14.08 
					76.82,14.35 76.91,14.43 76.95,14.64 77.06,14.73 77.27,14.7 77.4,14.61 77.54,14.59 77.66,14.51 77.66,14.37 77.68,14.27 
					77.67,13.92 77.54,13.86 77.26,13.83 		"/>
				<polygon class="st1" points="84.44,24.76 84.44,24.63 84.37,24.77 		"/>
				<polygon class="st1" points="84.25,24.72 84.33,24.65 84.29,24.59 		"/>
				<polygon class="st1" points="87.93,50.51 88.05,50.42 87.66,50.41 87.43,50.34 87.32,50.46 86.93,50.47 86.81,50.35 86.66,50.35 
					86.32,50.08 86.12,50.08 86.08,50.26 85.87,50.14 85.86,49.91 85.76,49.77 85.77,49.67 85.94,49.5 85.88,49.27 85.39,49.62 
					85.28,49.83 85.36,49.93 85.5,49.9 85.63,50.02 85.63,50.22 85.78,50.27 85.88,50.44 85.99,50.45 86.11,50.58 86.13,50.73 
					86.3,50.82 86.91,50.89 86.99,51.17 87.3,51.31 87.5,51.24 87.6,50.98 87.56,50.81 87.64,50.56 		"/>
				<polygon class="st1" points="47.48,43.24 47.79,43.23 48.09,43.48 48.12,43.58 48.3,43.77 48.35,43.81 48.62,43.91 48.66,43.98 
					48.95,44.05 49.08,44.23 49.19,44.2 49.44,44.13 49.65,44.2 49.9,44.17 50.22,44.42 50.39,44.42 50.53,44.72 50.99,44.87 
					51.26,44.94 51.45,45.15 51.65,45.24 52.09,45.23 52.3,45.1 52.45,45.22 52.55,45.44 53.19,45.48 53.33,45.61 53.66,45.69 
					53.87,45.83 59.26,48.37 59.61,48.8 60.44,49.45 61.32,53.6 61.2,55.41 61.07,55.73 60.92,56.03 60.71,56.31 60.19,56.56 
					59.93,56.89 60.16,57.3 64.8,56.05 65.39,55.86 65.5,55.2 68.05,54.45 69.17,53.61 69.43,53.42 69.8,53.35 70.4,52.79 
					70.67,52.57 71,52.43 71.23,52.2 71.7,52.13 75.65,52.2 75.95,51.91 76.06,51.89 76.18,51.79 76.35,51.78 76.6,51.84 76.75,51.74 
					76.83,51.53 77.26,51.07 77.43,51.01 77.78,50.58 77.9,50.28 77.94,49.98 78.28,49.8 78.27,49.56 78.5,49.26 78.98,48.73 
					79.09,48.51 79.31,48.29 79.4,48.26 79.56,48.37 79.75,48.55 80.03,48.48 80.4,48.57 80.52,48.47 81.05,48.97 81.06,49.41 
					80.77,51.12 80.7,51.31 80.82,51.34 80.91,51.49 81.03,51.64 81.02,51.87 80.99,52 81.02,52.13 80.95,52.24 81.01,52.33 
					81.03,52.34 81.42,52.42 81.72,52.39 81.78,52.58 81.93,52.62 82.07,52.44 82.27,52.54 82.6,52.46 82.73,52.21 82.97,51.96 
					82.8,52.23 82.89,52.24 82.83,52.38 82.94,52.44 83.54,52.29 83.64,52.12 83.98,52.09 84.26,51.8 84.48,51.74 84.78,51.33 
					84.81,51.49 84.98,51.39 84.97,51.54 84.69,51.83 84.43,51.89 84.15,52.23 84.47,52.32 84.64,52.09 84.89,52.09 85.09,52.22 
					85.65,52.27 86.06,52.24 85.76,52.39 85.4,52.43 85.14,52.48 85.1,52.64 85.13,52.77 84.96,52.64 84.91,52.4 84.74,52.33 
					84.31,52.43 83.86,52.75 83.29,52.89 82.78,53.17 82.73,53.39 82.4,53.65 82.21,54.07 82.19,54.38 82.27,54.63 82.31,54.91 
					82.45,54.82 82.59,54.91 82.61,55.22 82.83,55.38 82.98,55.27 83.11,55.39 83.23,55.29 83.26,55.04 83.36,54.98 83.52,54.99 
					83.82,54.76 84.09,54.71 84.45,54.24 84.86,53.91 84.76,53.77 84.96,53.46 85.12,53.48 85.22,53.32 85.34,53.34 85.46,53.62 
					85.82,53.66 85.79,53.53 86,53.53 86.42,53.3 86.84,53.2 87.31,53.08 87.55,53.07 88.17,52.73 88.56,52.62 88.81,52.59 
					88.97,52.66 89.19,52.56 89.06,52.41 88.8,52.43 88.55,52.29 88.66,52.26 88.85,52.21 88.84,52.07 88.38,51.84 88.05,51.79 
					88.12,51.68 88.08,51.46 87.69,51.73 87.6,51.86 87.14,51.78 87.08,51.64 86.7,51.5 86.59,51.58 86.33,51.46 85.92,51.46 
					85.55,51.21 85.85,51.11 85.92,50.91 85.53,50.9 85.41,50.79 85.14,50.79 84.99,50.45 84.86,50.35 84.84,49.98 84.88,49.74 
					84.69,49.53 84.84,49.31 84.84,49.18 84.34,49.17 84.52,49 84.68,48.97 85.02,48.29 85.27,48.07 85.22,47.9 85.02,47.92 
					84.94,47.8 84.68,47.8 84.42,47.98 84.11,48.12 84.02,47.95 83.94,47.69 83.41,47.55 83.04,47.51 82.66,47.56 83.03,47.39 
					83.32,47.45 83.61,47.39 83.8,47.26 84.1,47.37 84.32,47.56 84.61,47.57 84.97,47.29 85.19,47.27 85.46,47.05 85.75,46.98 
					85.96,46.51 85.83,46.42 86,46.35 85.89,46.18 85.59,46.07 85.38,46.09 85.42,46 85.39,45.94 85.8,46.02 85.8,45.89 85.26,45.57 
					84.78,45.38 83.86,45.37 83.6,45.51 83.32,45.53 82.47,45.82 81.78,45.94 81.43,46.14 81.04,46.19 80.44,46.58 79.52,47.22 
					78.85,47.84 78.62,47.95 78.32,48.27 77.96,48.72 77.5,49.01 76.9,49.3 76.2,49.6 75.88,49.59 76.28,49.49 77,49.19 77.04,48.98 
					77.66,48.61 77.84,48.33 77.94,47.98 78.22,47.92 78.52,47.6 78.88,47.42 79.01,46.95 79.55,46.68 79.87,46.19 80.02,46.14 
					80.08,46.01 80.37,45.79 80.63,45.73 80.74,45.46 80.96,45.33 81.07,45.43 81.22,45.39 81.44,45.09 81.91,45.06 82.12,44.96 
					82.53,44.96 82.69,44.73 82.73,44.4 82.85,44.26 82.87,44.05 83.18,43.91 83.67,43.46 83.91,43.41 84.03,43.29 83.9,43.16 
					84.04,43.01 84.25,42.9 84.5,43.15 84.83,43.24 85.38,43.16 85.79,43.32 85.97,43.31 86.12,43.36 86.42,43.19 86.63,43.36 
					86.87,43.35 87.08,43.21 87.41,43.42 87.81,43.46 87.99,43.31 88.13,43.31 88.35,43.48 88.66,43.52 88.79,43.48 89.18,43.65 
					89.38,43.64 89.63,43.54 89.82,43.59 89.76,43.74 90.02,43.81 90.63,43.59 90.78,43.6 91.08,43.51 91.19,43.59 91.61,43.6 
					91.79,43.71 92.03,43.6 92.09,43.43 92.37,43.44 92.53,43.34 92.64,43.38 92.81,43.12 93.04,42.99 93.12,42.87 93.34,42.91 
					93.52,42.53 93.53,42.3 93.69,42.32 93.89,42.14 93.93,41.98 93.82,41.94 93.91,41.83 94.18,41.85 94.44,41.79 94.41,41.63 
					94.49,41.55 94.62,41.74 94.92,41.78 95.2,41.59 95.26,41.69 95.48,41.71 95.67,41.6 95.82,41.74 96.05,41.7 96.11,41.56 
					96.27,41.55 96.47,41.33 96.59,41.33 96.85,41.11 97.15,41.09 97.52,40.82 97.62,40.6 97.81,40.59 97.85,40.35 97.99,40.1 
					97.82,40.01 97.61,40.07 97.42,39.92 97.55,39.91 97.8,39.95 97.99,39.89 97.8,39.67 97.58,39.69 97.2,39.52 97.07,39.31 
					97.39,39.52 97.61,39.41 97.69,39.17 97.86,39.11 97.97,38.86 97.57,38.73 97.79,38.54 98,38.61 98.21,38.43 98.15,38.24 
					97.78,38.08 97.71,37.84 97.83,37.8 98.08,37.93 98.02,37.77 97.68,37.62 97.31,37.6 97.35,37.43 97.44,37.39 97.4,37.28 
					97.11,37.27 96.71,37.48 96.63,37.71 96.49,37.84 96.39,37.62 96.05,37.6 96.25,37.39 96.39,37.38 96.69,37.11 96.73,36.87 
					96.54,36.44 96.08,36.32 95.52,36.39 95.32,36.47 95.41,36.54 95.72,36.54 95.84,36.62 95.56,36.64 95.2,36.6 94.78,36.79 
					94.47,36.83 94.2,37.12 94.09,37.37 93.89,37.39 93.61,37.63 93.21,37.62 92.98,38.08 92.81,38.07 92.71,38.19 92.58,38.16 
					92.47,37.96 92.64,37.8 92.8,37.85 92.88,37.68 92.34,37.23 92.29,37.12 92.09,37.03 92.17,36.9 92.15,36.67 92.43,37.16 
					92.91,37.48 93.01,37.34 93.05,37.1 93.36,37.09 93.54,36.92 93.99,36.69 94.48,36.59 95,36.51 94.96,36.4 94.79,36.35 
					94.27,36.51 93.75,36.62 93.79,36.44 94.49,36.31 95.01,36.29 95.23,36.05 95.65,35.88 95.76,35.98 96.29,35.88 96.29,35.78 
					96.71,35.73 96.46,35.5 95.82,35.32 95.92,35.21 96.08,35.21 96.21,34.96 96.03,34.89 95.65,34.99 95.45,35.23 95.14,35.04 
					94.84,35.08 94.81,34.92 94.96,34.87 94.97,34.44 95.01,34.3 94.64,34.56 94.67,34.42 94.81,34.3 94.71,34.27 94.2,34.7 
					93.99,34.88 93.86,34.85 94.03,34.65 94.42,34.35 94.3,34.25 93.94,34.4 93.85,34.34 93.97,34.23 94.17,34.11 94.17,33.99 
					93.88,34.04 93.65,34.31 93.38,34.63 93.24,34.58 93.36,34.33 93.59,34.17 93.58,34.02 93.38,34.02 92.89,34.5 92.65,34.57 
					92.39,34.41 92.67,34.49 92.91,34.3 93.32,33.77 93.64,33.56 93.48,33.39 93.52,33.16 93.46,33.13 93.2,33.49 93.07,33.51 
					93.07,33.38 93.17,33.22 93.19,32.88 93.01,32.83 92.93,32.78 92.67,32.95 92.6,32.85 92.64,32.65 92.6,32.57 92.43,32.55 
					92.56,32.44 92.45,32.31 92.45,32.12 92.3,32.09 91.93,32.17 91.91,32.27 91.73,32.31 91.25,32.17 91.62,32.2 91.73,32.05 
					92.02,32.01 92.07,31.88 91.95,31.72 91.68,31.47 91.67,31.22 91.32,31.02 91.7,31.01 92.05,31.22 92.33,31.19 92.31,31.02 
					92.07,30.91 92.15,30.8 92.35,30.88 92.68,30.6 92.89,30.5 92.95,30.26 92.69,30.04 92.5,30.08 92.25,29.99 92.44,29.86 
					92.52,29.65 92.4,29.53 92.11,29.52 91.99,29.45 91.81,29.48 91.61,29.31 91.88,29.31 92.01,29.19 92.2,29.26 92.47,29.04 
					92.34,28.59 92.09,28.36 91.94,28.52 91.69,28.44 91.52,28.61 91.6,28.34 91.89,28.16 92.1,28.13 92.1,27.89 91.86,27.84 
					91.66,27.91 91.37,27.91 90.94,28.1 91.33,27.63 91.58,27.63 91.82,27.48 91.82,27.35 91.97,27.18 91.89,27.1 91.6,27.23 
					91.19,27.22 90.81,27.38 90.91,27.17 90.85,26.98 90.96,26.8 91.15,26.94 91.57,26.94 91.8,26.62 91.8,26.32 91.57,26.46 
					91.38,26.37 91.61,26.1 91.69,25.86 91.49,25.82 90.87,25.99 90.66,25.86 90.8,25.7 91.08,25.75 91.32,25.68 91.52,25.35 
					91.34,25.23 91.31,25.05 91.14,25.22 91.02,25.22 90.97,25.06 90.78,24.9 90.97,24.82 91.1,24.94 91.2,24.83 91.18,24.5 
					90.93,24.27 90.87,24 91.05,23.89 91.03,23.65 90.83,23.66 90.91,23.55 90.99,23.33 90.82,23.3 90.66,23.26 90.67,23.2 
					90.81,23.18 90.97,22.96 90.8,22.84 90.82,22.66 90.99,22.54 90.9,22.43 90.67,22.52 90.88,22.34 90.78,22.23 90.5,22.32 
					90.27,22.63 90.33,22.81 90.2,23.04 89.91,23.36 89.88,23.56 89.71,23.68 89.73,23.93 89.58,23.77 89.44,23.84 89.27,24.25 
					89.28,24.41 89.5,24.42 89.62,24.63 89.61,24.79 89.38,24.56 89.24,24.57 89.15,24.74 88.98,25 88.78,25.13 88.71,25.48 
					88.49,25.52 88.33,25.77 88.36,25.9 88.24,25.93 88.26,26.33 88.08,26.75 88.13,26.44 88.05,26.05 87.87,25.87 87.51,26.14 
					87.34,26.38 87.3,26.63 87.06,26.69 86.94,26.83 86.9,26.7 86.7,26.67 86.47,26.89 86.23,26.91 85.94,27.15 85.9,27.46 
					85.59,27.8 85.7,27.54 85.68,27.31 85.76,27.21 85.73,26.66 85.77,26.4 85.69,26.37 85.34,26.72 84.99,27.43 84.71,27.58 
					84.9,27.32 84.96,27.03 85.25,26.57 85.23,26.27 85.29,25.98 85.15,25.71 84.88,25.47 84.63,25.48 84.72,25.77 84.63,25.77 
					84.39,25.6 84.08,25.13 84.54,25.36 84.68,25.3 84.46,25.22 84.13,24.7 84.05,24.66 84.33,24.3 84.37,24.14 84.6,23.8 
					84.63,23.33 84.27,23.02 83.76,22.93 83.14,22.59 83.84,22.81 84.42,22.89 84.5,22.48 84.62,22.32 84.68,22.67 84.79,22.44 
					84.73,21.77 84.99,21.39 85.34,21.31 85.42,20.86 85.4,20.39 85.18,20.41 85.12,20.82 84.81,21.05 84.68,20.84 84.73,20.35 
					84.38,20.23 84.09,20.37 83.99,20.23 83.84,20.29 83.41,19.92 83.19,20.06 83.19,19.84 82.96,20.06 82.96,19.81 82.63,19.47 
					82.86,19.47 82.98,19.22 83.21,19.4 83.25,19.24 83.02,18.91 82.82,19.08 82.59,18.91 82.8,18.85 82.67,18.56 82.38,18.29 
					82.2,18.4 82.2,18.21 82.36,17.99 82.36,17.56 82.12,17.56 81.81,17.31 81.81,17.04 81.34,16.66 80.99,16.88 80.78,16.9 
					80.64,17.05 80.33,16.92 80.33,17.21 80.13,16.94 79.94,16.94 79.8,16.78 79.55,16.76 79.18,17.04 78.73,17.05 79.08,16.92 
					79.16,16.66 78.83,16.66 78.22,16.33 77.77,16.09 77.32,16.06 77.15,15.95 76.99,16.02 76.82,16.04 76.64,16.22 76.64,16.39 
					76.48,16.4 76.37,16.32 76.16,16.44 76.15,16.78 75.97,17.18 75.96,17.69 76.12,17.96 76.26,17.98 76.28,18.1 76.42,18.16 
					76.42,18.47 76.31,18.62 76.13,18.59 76.07,18.9 75.71,19.42 75.14,19.88 75.12,20.08 75.25,20.14 75.69,20.1 75.85,20.13 
					75.64,20.25 75.53,20.63 75.55,20.78 75.84,20.83 75.58,20.92 75.39,21.13 75.48,21.32 75.63,21.44 75.38,21.75 75.41,21.87 
					75.78,21.87 75.83,22.05 75.55,22.56 75.25,22.69 75.23,23 75.33,23.15 75.16,23.06 74.99,22.74 74.85,22.74 74.56,23.11 
					74.57,23.21 74.67,23.27 74.68,23.46 74.5,23.66 74.28,23.69 73.57,24.43 73.31,24.54 73.15,25.07 73.23,25.29 73.5,25.36 
					73.58,25.65 73.87,25.84 74.28,26.48 74.37,27.2 74.33,28.02 74.54,28.42 74.5,28.75 74.5,29.22 74.41,29.33 74.16,29.98 
					74.07,30.33 74.18,30.3 74.24,30.03 74.41,29.88 74.43,30.23 74.67,30.54 74.47,30.76 74.19,30.78 74.07,30.65 73.9,30.63 
					73.53,31.22 73.22,31.36 73.18,31.6 72.55,31.87 72.37,32.04 72.36,32.13 71.53,32.45 71,32.71 70.85,32.82 70.54,32.81 
					70.28,33.02 69.74,33.11 69.38,33.27 69.47,33.42 69.5,33.69 69.62,33.91 69.61,34.15 69.71,34.35 69.58,34.43 69.67,34.61 
					69.81,34.65 69.66,34.76 69.75,34.99 69.63,35.07 69.69,35.33 69.54,35.47 69.47,35.92 69.54,36.18 69.33,36.84 69.36,37.02 
					69.5,37.07 69.49,37.23 69.6,37.37 69.34,37.68 69.33,37.97 69.49,38.05 69.53,38.45 69.63,38.56 69.31,38.87 69.18,39.26 
					69.03,39.31 68.92,39.25 68.94,39.51 69.08,39.68 68.94,39.86 68.89,40.28 68.94,40.6 69.2,40.9 69.45,41.01 68.99,40.96 
					68.68,40.72 68.73,40.35 68.63,39.87 68.48,39.83 68.44,39.69 68.5,39.47 68.39,39.48 67.93,40.04 67.93,40.27 67.86,40.5 
					67.63,40.48 67.4,40.25 67.04,40.13 66.71,40.37 66.32,40.56 66.83,40.11 66.94,39.73 66.87,39.55 66.82,39.12 66.66,38.9 
					66.62,38.72 66.55,38.72 66.23,38.55 65.97,38.45 66,38.26 65.96,38.14 66.01,37.92 65.86,37.69 65.65,37.59 65.65,37.25 
					65.38,37.04 65.27,36.82 65.41,36.28 65.67,36.06 65.78,35.71 65.78,35.47 66.13,34.93 66.11,34.34 66.02,34.27 65.97,33.96 
					66.17,33.6 66.36,33.35 66.38,33.12 66.72,32.45 66.68,32.05 66.54,32.05 66.45,32.1 66.46,32.01 66.27,32.01 65.94,32.11 
					65.48,32.03 65.06,31.9 64.95,31.9 64.82,31.77 64.24,31.75 63.94,31.82 63.81,31.77 63.38,31.76 63.3,31.68 63.35,31.55 
					63.01,31.22 62.96,31.02 62.5,30.61 62.3,30.55 61.9,30.26 61.7,30.21 61.15,29.84 61.02,29.7 60.83,29.78 60.84,29.65 
					60.66,29.19 60.48,29 60.48,28.76 60.25,28.62 60.04,28.22 59.83,28.13 59.4,27.69 59.14,27.63 58.98,27.49 58.4,27.31 58,26.95 
					57.39,26.55 56.91,26.6 55.94,26.92 54.97,27.23 54.57,27.23 54.27,27.1 54.56,27.15 54.96,27.01 55.79,26.22 55.9,25.95 
					55.8,25.42 55.63,25.19 55.84,24.66 55.84,24.12 55.68,23.76 55.68,23.44 55.79,23.15 55.79,22.89 55.56,22.79 54.78,22.81 
					54.44,23.49 53.97,24.06 53.35,24.14 52.99,24.44 53.09,24.17 53.82,24 54.17,23.66 54.43,23.03 54.32,22.97 54.33,22.62 
					54.19,22.45 54.27,22.21 54.2,22.01 53.92,21.95 54.04,21.82 54.28,21.74 54.37,21.51 54.61,21.09 54.61,20.7 54.51,20.59 
					54.7,20.04 54.92,19.92 55.03,19.57 55.19,19.32 55.29,18.83 55.54,18.58 55.4,18.27 55.42,18.11 55.72,18.3 55.99,18.05 
					56.01,17.82 56.3,17.74 56.7,17.29 56.93,17.2 56.88,16.97 57.04,16.77 57.21,16.77 57.28,16.61 57.14,16.44 57.48,16.26 
					57.69,15.91 57.95,15.92 57.95,15.77 58.07,15.63 57.74,15.39 57.87,15.31 57.89,15.14 58.11,15.18 58.41,15.4 58.46,15.52 
					58.58,15.47 58.53,15.28 58.31,15.14 58.71,14.99 58.84,14.82 59.17,14.84 59.26,14.91 59.31,14.7 59.22,14.59 59.38,14.62 
					59.43,14.93 59.64,14.66 59.64,14.46 59.48,14.32 59.5,14.09 59.62,14.19 60.09,14.3 60.02,14.14 59.79,14.04 59.7,13.88 
					59.81,13.8 59.86,13.62 59.95,13.97 60.2,13.94 60.36,14.01 60.51,13.88 60.24,13.41 60.05,12.85 59.81,12.56 59.82,12.3 
					59.78,12.12 59.85,12.02 60.05,12.2 60.17,12.64 60.52,13.1 61.13,13.21 61.35,13.37 61.66,13.39 61.82,13.26 62.04,13.24 
					62.39,12.87 62.44,12.26 61.94,11.67 61.88,11.32 61.71,11.13 61.58,11.16 61.3,11.44 60.77,11.48 60.64,11.55 60.64,11.46 
					60.58,11.3 60.76,11.35 61.08,11.3 61.4,11.08 61.35,10.96 60.86,10.66 60.32,10.1 60.21,10.09 60.16,10.21 60.27,10.4 
					60.18,10.51 59.95,10.3 59.8,9.91 60.04,9.97 60.05,9.57 60.18,9.79 60.55,10.07 60.77,10.15 60.93,10.55 61.44,10.84 
					61.97,11.03 62.24,11.38 62.46,11.53 62.5,11.72 62.79,11.82 62.89,11.92 62.92,11.63 63.19,11.48 63.01,11.33 63.07,11.09 
					63.27,11.41 63.33,11.58 63.5,11.63 63.82,11.18 63.85,10.67 63.72,10.51 63.83,10.13 63.98,10.56 64,10.8 64.2,10.26 
					64.47,10.12 64.52,10.25 64.61,10.32 64.42,10.59 64.52,10.63 64.59,10.82 64.75,10.62 64.95,10.71 65.28,11.1 65.34,10.96 
					65.5,10.96 65.63,11.05 65.86,11 66.09,10.6 66.44,10.43 67.3,9.54 67.34,9.38 67.45,9.29 67.51,9.4 67.9,8.88 68.15,8.76 
					68.45,8.53 68.57,8.43 68.53,8.14 67.56,7.87 67.04,7.77 66.54,7.61 66.36,7.21 66.07,6.63 65.96,6.62 65.92,6.17 65.84,6.1 
					65.93,5.99 66.03,6 66.09,5.84 65.92,5.73 65.36,5.74 64.76,5.52 64.59,5.55 64.5,5.68 64.33,5.49 64.34,5.31 64.58,5.39 
					65.21,5.42 65.59,5.66 66.14,5.66 66.47,5.92 66.75,6.46 67.01,6.53 67.14,6.67 67.04,6.76 66.9,6.77 66.89,6.89 67.31,7.08 
					67.43,7.37 67.61,7.63 68.46,7.82 68.7,7.72 68.81,7.4 69.01,7.26 69.21,7.34 69.52,6.95 69.79,6.6 70.42,6.14 70.6,6.09 
					70.81,5.72 70.67,5.47 70.34,5.42 70.21,5.22 70.19,4.96 70.32,4.87 70.24,4.7 70.29,4.5 70.58,4.69 70.81,4.66 71.03,4.82 
					71.34,4.82 71.73,4.67 71.74,4.79 71.89,4.86 71.83,4.93 71.7,5.32 71.71,5.5 71.89,5.42 71.94,5.54 72.15,5.59 72.46,5.77 
					72.52,5.54 72.27,5.31 72.42,5.08 72.48,5.3 72.66,5.37 72.7,5.59 73.13,5.96 73.27,5.95 73.29,5.74 73.2,5.64 73.31,5.47 
					73.25,5.1 73.12,5.03 73.19,4.64 73.03,4.23 72.79,4.12 72.81,3.89 72.67,3.82 72.32,4.05 72.2,4.02 72.44,3.65 72.67,3.63 
					72.76,3.72 73.02,3.57 73.17,3.83 73.3,3.88 73.33,4.44 73.42,4.41 73.71,4.14 73.49,4.51 73.48,4.72 73.33,4.78 73.33,4.93 
					73.51,5.13 73.6,5.45 73.5,5.62 73.63,5.74 74.28,5.55 74.42,5.29 74.64,5.28 74.78,5.33 75.16,4.92 75.37,4.91 75.5,4.73 
					75.76,4.58 75.83,4.27 76.01,4.14 76.43,4.13 76.67,4.23 76.79,4.05 76.72,3.81 77.08,3.5 77.12,3.3 77.22,3.23 77.26,2.9 
					76.97,2.33 77.02,2.14 76.7,1.91 76.65,1.62 76.78,1.38 77.09,1.25 77.16,1.05 77.08,1.04 76.91,1.21 76.82,1.19 76.8,1.02 
					76.96,0.79 76.73,0.77 76.89,0.6 76.97,0.42 76.9,0.36 72.81,0.36 72.72,0.52 72.25,0.87 72.1,1.1 72,1.12 71.75,1.47 71.53,1.57 
					71.5,1.99 71.3,2.2 71.24,2.5 71.11,2.53 70.97,2.21 70.81,2.23 70.61,2.43 70.7,2.52 70.75,2.85 70.55,2.85 70.35,2.65 
					70.42,2.39 70.22,2 70.01,1.06 70,0.61 69.91,0.44 69.94,0.36 61.86,0.36 61.78,0.58 61.77,0.76 61.87,0.93 61.7,1.06 61.57,1.37 
					61.66,1.36 61.84,1.29 61.96,1.09 62.23,1.13 62.45,0.97 62.27,1.22 62,1.23 61.77,1.49 61.42,1.6 61.39,1.9 61.2,2.06 
					60.98,1.89 60.69,1.87 60.52,1.71 60.36,1.85 60.44,2.27 60.2,2.81 60.3,2.22 60.19,1.87 60.02,1.61 60.1,1.24 60.21,1.23 
					60.33,1.6 60.65,1.44 60.77,1.69 61.07,1.8 61.25,1.65 61.28,1.43 61.4,1.09 61.19,1.18 61.02,1.13 61.2,0.99 61.38,0.71 
					61.19,0.69 61,0.87 60.64,0.97 60.66,0.82 60.94,0.63 60.95,0.38 60.8,0.39 60.58,0.5 60.56,0.36 47.06,0.36 47.15,0.79 
					47.13,1.63 47.09,0.79 46.94,0.39 46.92,0.36 5.13,0.36 0.13,9.5 1.01,9.51 1.29,9.65 1.81,9.37 2.48,9.46 2.2,10.05 2.31,10.38 
					2.55,11.08 2.94,12.63 3.08,12.98 2.83,13.34 2.82,13.56 2.92,13.54 3.44,13.45 3.88,13.39 4.21,13.22 4.59,12.65 4.89,12.35 
					5.38,12.19 5.48,12.13 5.95,11.99 6.36,11.96 6.64,12.19 6.65,12.44 6.72,12.64 6.51,13 6.46,13.19 6.74,13.97 6.67,14.2 
					6.77,14.7 7.07,15.04 7.12,15.52 7.24,15.74 7.28,15.98 7.16,16.23 7.19,16.48 7.26,16.71 7.17,17.49 7.16,18.45 7.2,19.43 
					6.98,19.59 6.98,19.74 7.13,19.75 7.28,19.85 7.32,19.97 7.22,20 7.07,20.13 7.13,20.29 7.25,20.4 7.29,20.6 7.2,20.73 7.2,20.83 
					7.43,20.83 7.62,20.91 7.87,21.25 7.93,21.43 8.11,21.56 8.39,21.76 8.53,22.02 8.55,22.29 8.69,22.36 8.75,22.51 8.69,22.61 
					8.7,22.74 8.6,22.79 8.6,23 8.59,23.08 8.66,23.12 8.54,23.41 8.19,24.07 8.14,24.51 7.86,24.89 7.83,25.07 7.91,25.07 
					8.36,24.57 8.41,24.27 8.74,24 8.79,24.14 8.97,24.18 8.94,24.3 8.57,24.52 8.42,24.75 8.05,25.17 8.08,25.26 8.26,25.28 
					8.11,25.4 7.82,25.36 7.6,25.4 7.47,25.77 7.2,25.98 7.26,26.26 7.12,26.2 6.99,26.09 6.79,26.21 6.8,26.59 7.04,26.62 7.08,26.8 
					6.98,27.23 6.92,27.93 7.04,28.33 7.23,28.71 7.39,28.75 7.44,28.55 7.64,28.34 8.05,28.21 8.28,28.04 8.53,27.75 8.63,27.72 
					8.65,28 8.53,28.25 8.38,28.31 8.22,28.58 8.23,28.71 8.45,28.88 8.63,29.08 8.89,29.08 9.1,29.14 9.2,29.29 8.91,29.14 
					8.58,29.16 8.32,29.05 7.98,29.02 7.88,29.21 7.91,29.43 8.03,29.61 8.07,30.18 8.17,30.39 8.29,30.39 8.51,30.27 8.62,30.38 
					8.49,30.5 8.44,30.6 8.6,30.72 8.59,30.85 8.5,30.95 8.28,30.91 8.05,31.02 7.72,31.25 7.66,31.37 7.8,31.5 8.18,31.36 
					8.38,31.41 8.17,31.47 8.11,31.6 8.29,31.83 8.67,31.7 9.05,31.41 9.31,31.07 9.58,31.05 9.8,30.85 9.87,30.61 9.96,30.57 
					10.03,30.76 9.82,31.1 9.55,31.3 9.28,31.4 9.21,31.58 9.34,31.73 9.52,31.68 9.83,31.68 10.08,31.75 9.77,31.75 9.52,31.86 
					9.52,32.25 9.61,32.58 9.52,32.65 9.38,32.44 9.37,32.06 9.26,31.9 9.06,32 8.44,32.45 8.29,32.64 7.95,32.8 7.86,33.02 
					7.89,33.21 7.88,33.41 7.96,33.49 8.14,33.36 8.38,33.24 8.52,33.03 8.64,33.07 8.77,33.2 9.19,33.26 9.11,33.34 8.88,33.29 
					8.54,33.29 8.38,33.44 8.38,33.57 8.43,33.7 8.27,33.75 8.12,33.68 7.74,33.78 7.71,33.88 8.03,33.88 8.23,33.99 8.49,33.99 
					8.33,34.14 8.07,34.12 7.91,34 7.66,34.06 7.6,34.29 7.73,34.4 7.91,34.4 8.21,34.33 8.38,34.44 8.72,34.43 8.68,34.55 
					8.42,34.61 8.19,34.55 8.14,34.62 8.23,34.68 8.59,34.69 8.73,34.67 8.71,34.81 8.4,34.87 8.09,34.79 7.92,34.66 7.83,34.76 
					7.95,35.02 8.27,35.24 8.31,35.03 8.5,35.02 8.71,35.13 9.05,35.06 9.16,35.16 8.97,35.24 8.97,35.34 9.2,35.35 9.28,35.55 
					9.65,35.68 9.79,35.58 9.95,35.3 10.19,35.13 10.23,34.9 10.24,35.18 10.12,35.43 9.76,35.69 9.44,35.77 9.22,35.79 9.03,36 
					9.04,36.09 9.22,36.2 9.37,36.08 9.51,36.04 9.58,36.19 9.66,36.19 9.79,36.02 10,35.88 10,36 9.91,36.12 9.92,36.26 10.06,36.31 
					10.22,36.42 10.38,36.39 10.68,35.98 10.72,35.51 10.82,35.29 10.99,35.24 10.99,35.41 10.88,35.54 10.87,35.92 10.64,36.28 
					10.45,36.48 10.51,36.59 10.81,36.59 11.06,36.51 11.14,36.59 10.96,36.77 10.82,37.09 10.47,37.32 10.46,37.45 10.66,37.8 
					10.94,37.94 11.12,37.82 11.31,37.82 11.38,38.04 11.51,38.27 11.49,38.42 11.36,38.39 11.26,38.17 11.12,38.14 11.11,38.41 
					11.35,38.76 11.68,38.58 11.99,38.47 12.16,38.31 12.08,38.66 11.83,39.2 11.92,39.66 12.12,39.7 12.12,39.71 47.22,43.21 		"/>
				<polygon class="st1" points="88.51,45.61 88.71,45.77 88.89,45.79 89.14,45.9 89.46,45.79 89.49,45.64 89.34,45.5 89.27,45.37 
					89.13,45.25 88.95,45.19 88.74,44.94 88.44,44.71 88.32,44.7 88.06,44.41 87.74,44.29 87.38,44.26 86.76,44.05 86.52,43.94 
					86.25,44.09 86.37,44.33 86.63,44.45 87.08,44.79 87.13,45.04 87.21,45.15 87.35,45.17 87.86,45.55 88.24,45.55 		"/>
				<polygon class="st1" points="71.67,6.17 71.51,6.16 71.42,6.37 71.42,6.74 71.37,6.92 71.43,7.06 71.41,7.31 71.57,7.26 
					71.75,6.82 71.64,6.64 71.62,6.47 71.72,6.39 		"/>
				<polygon class="st1" points="68.48,36.14 68.48,35.83 68.4,35.88 68.33,35.9 68.35,36.18 68.42,36.27 		"/>
				<polygon class="st1" points="72.85,6.47 72.8,6.29 72.55,6.2 72.47,5.92 72.4,6.02 72.38,6.37 72.54,6.51 72.62,6.75 72.58,6.92 
					72.83,7.05 72.98,7.21 72.98,7.39 73.17,7.35 73.43,7.41 73.47,7.13 73.28,7.11 73.01,6.98 73.01,6.6 		"/>
				<polygon class="st1" points="84.64,25.04 84.67,24.81 84.59,24.59 84.51,24.73 84.57,24.96 84.56,25.07 		"/>
				<polygon class="st1" points="74.2,6.07 74.21,5.97 74.06,5.86 73.93,5.84 73.86,5.89 74.06,6.04 		"/>
				<polygon class="st1" points="66.49,36.9 66.71,37.04 67.34,37.17 67.4,36.97 67.33,36.84 67.28,36.56 66.96,36.3 66.74,36.32 
					66.68,36.21 66.42,36.21 66.28,36.32 66.27,36.51 66.05,36.47 65.78,36.79 65.86,36.91 66.09,36.88 66.12,37.01 66.27,37.15 
					66.24,37.05 66.25,36.89 		"/>
				<path class="st1" d="M7.94,32.41l-0.11-0.12l-0.32,0.18l-0.06,0.27h0.12h0.19L7.94,32.41z"/>
				<path class="st1" d="M94.13,3.35l-0.15,0.08l0.25,0.17l0.1-0.08V3.36L94.13,3.35z"/>
				<polygon class="st1" points="92.86,2.22 93.03,2.33 93.17,2.28 93.05,2.2 		"/>
				<polygon class="st1" points="96.2,5.51 96.34,5.44 96.33,5.16 96.17,5.02 96,5.19 96.06,5.51 		"/>
				<path class="st1" d="M97.41,6.67l0.15-0.25l-0.13-0.07l-0.09,0.07l-0.2,0.11v0.26l0.11-0.06L97.41,6.67z"/>
				<path class="st1" d="M98.88,45.18h0.14l0.16-0.12v-0.11l-0.12-0.08h-0.07v-0.08h-0.1v0.07L98.88,45.18z"/>
				<polygon class="st1" points="98.5,44.93 98.52,45.01 98.46,45.15 98.37,45.18 98.23,45.12 98.18,45.19 98.17,45.3 98.28,45.37 
					98.48,45.28 98.59,45.09 98.56,44.94 		"/>
				<path class="st1" d="M98.56,40.72V40.6l-0.16,0.12l-0.11,0.25l0.06,0.06l0.14-0.09L98.56,40.72z"/>
				<polygon class="st1" points="57.68,93.64 57.77,93.44 57.5,93.45 57.41,93.67 		"/>
				<polygon class="st1" points="63.93,95.12 63.68,94.71 62.65,94.65 62.14,94.75 61.84,94.73 61.61,94.77 61.46,95 61.71,95.19 
					61.89,95.14 62.05,95.21 62.21,95.56 62.39,95.71 62.7,95.7 62.92,95.86 63.24,95.88 63.25,95.59 63.48,95.59 63.59,95.72 
					63.73,95.68 63.83,95.46 64.02,95.55 64.47,95.55 64.5,95.43 64.27,95.19 		"/>
				<path class="st1" d="M70.32,94.74v-0.17v-0.22l-0.13-0.28v-0.11l0.21-0.11l0.09-0.29l-0.1-0.21l0.13-0.26v-0.13l0,0l-0.25-0.06
					h-0.23l-0.23-0.23l-0.58-0.07l-0.16,0.1l-0.24-0.08h-0.5l-0.08,0.15l0.27,0.15l0.72,0.25l-0.08,0.13l0.1,0.22l-0.1,0.34l0.13,0.23
					l0.25,0.07l0.3,0.26l-0.07,0.17h-0.56l-0.1,0.08L68.9,94.6h-0.32l-0.28-0.12l-0.33,0.14v-0.14h-0.12l-0.42,0.11l-0.22-0.21
					l-0.28,0.14l-0.11,0.17l0.1,0.22h0.32l0.33,0.38l0.15,0.05v-0.23l0.15-0.12h0.59l0.26,0.13h0.74l0.13-0.08l0.23,0.1h0.2v-0.15
					L70.32,94.74z"/>
				<polygon class="st1" points="69.68,92.5 69.21,92.22 68.97,92.36 69.17,92.51 		"/>
				<polygon class="st1" points="69.01,94.32 68.96,94.11 68.69,93.92 68.46,94.03 68.64,94.18 		"/>
				<polygon class="st1" points="55.56,90.13 55.45,90.05 55.48,90.19 55.78,90.31 56.16,90.2 56.2,89.95 55.97,89.67 55.72,89.62 
					55.63,89.81 55.7,89.97 55.83,90.05 55.7,90.16 		"/>
				<polygon class="st1" points="65.21,92.86 65.9,92.7 65.99,92.55 66.16,92.57 66.36,92.42 66.81,92.48 67.16,92.39 67.3,92.12 
					67.18,91.99 66.94,91.96 66.78,91.59 66.18,91.35 65.48,91.35 65.3,91.28 65.44,91.14 65.54,90.81 65.37,90.75 65.15,90.84 
					64.9,90.82 64.41,90.46 64.27,90.59 64.06,90.39 63.7,90.12 63.48,90.34 63.38,90.22 63.44,90.05 63.29,89.98 63.2,90.15 
					63.04,89.97 62.52,89.86 62.18,89.54 61.87,89.36 61.53,89.1 60.78,89.06 60.5,88.93 60.41,88.64 60.09,88.3 59.85,88.36 
					59.73,88.2 58.72,88.06 58.39,88.18 57.97,88.09 57.73,87.8 57.11,87.69 56.56,87.72 56.29,87.94 55.55,87.98 54.98,88.11 
					54.78,88.3 54.2,88.47 54.01,88.7 53.77,88.83 53.73,89.15 53.88,89.35 53.81,89.48 53.59,89.35 53.11,89.63 52.92,89.57 
					52.91,89.75 53.16,89.88 53.44,89.56 53.53,89.62 53.54,89.84 53.87,89.64 54.11,89.62 54.38,89.2 54.73,89.27 54.87,89.16 
					55.04,89.29 55.31,89.24 55.71,88.76 55.95,88.71 56.11,88.52 56.48,88.58 56.75,88.57 57.34,88.64 57.5,88.79 57.34,88.91 
					57.04,88.88 56.83,89.03 57.04,89.19 57.84,89.32 58,89.26 58.24,89.26 58.46,89.45 58.84,89.5 59.02,89.49 59.12,89.34 
					59.3,89.47 59.32,89.62 59.76,89.94 60.11,89.99 60.25,89.91 60.48,90.11 60.74,90.07 60.94,90.16 61.31,90.03 61.47,90.09 
					61.69,90.9 62.14,91.43 62.36,91.43 62.46,91.35 62.76,91.53 63.24,91.53 63.31,91.67 63.53,91.75 63.5,92.01 63.16,92.09 
					62.7,92.5 62.7,92.74 63.16,92.82 63.48,92.66 63.72,92.75 64.38,92.6 64.74,92.65 		"/>
				<polygon class="st1" points="68.8,89.02 68.92,89.16 69.17,89.14 69.42,89.25 69.44,89.15 69.03,88.91 		"/>
				<polygon class="st1" points="67.4,88.98 67.37,89.13 67.5,89.14 68.09,88.8 68.11,88.48 68.06,88.36 67.8,88.44 67.82,88.66 
					67.54,88.96 		"/>
				<polygon class="st1" points="66.16,85.84 65.89,85.64 65.84,85.81 66.05,86.04 66.1,86.41 65.99,86.54 66.11,86.69 66.42,86.67 
					66.44,86.51 66.23,86.13 		"/>
				<polygon class="st1" points="66.44,88.04 66.61,88.24 66.78,88.26 66.54,87.83 66.46,87.5 66.23,87.07 66.19,87.24 66.37,87.58 
					66.22,87.68 		"/>
				<polygon class="st1" points="65.22,87.17 65.43,87.17 65.27,86.95 		"/>
				<polygon class="st1" points="64.8,84.49 64.77,84.68 65.09,84.8 65.3,85.09 65.2,85.29 65.04,85.38 65.16,85.51 65.31,85.47 
					65.42,85.05 65.18,84.7 		"/>
				<polygon class="st1" points="62.89,85.02 62.7,84.94 62.6,85.31 62.39,85.68 62.57,85.85 62.8,85.73 62.86,85.97 63.18,85.76 
					62.95,85.33 		"/>
				<polygon class="st1" points="67.28,88.13 67.26,88.3 67.43,88.49 67.63,88.53 67.6,88.31 		"/>
				<polygon class="st1" points="67.2,86.66 67.34,86.79 67.46,86.57 67.37,86.39 		"/>
				<polygon class="st1" points="63.43,84.99 63.61,85.08 63.98,85.09 64.09,84.89 63.77,84.81 		"/>
				<polygon class="st1" points="68.95,90.33 69.09,90.41 69.09,90.17 		"/>
				<polygon class="st1" points="68.41,90.66 68.09,90.86 68.02,91.26 68.72,91.18 68.95,90.88 68.95,90.56 68.85,90.62 68.68,90.81 
							"/>
				<polygon class="st1" points="63.04,87.1 63.26,87.05 63.38,86.81 63.31,86.64 63.35,86.45 63.24,86.34 62.89,86.53 62.9,86.77 		
					"/>
				<polygon class="st1" points="62.92,86.26 62.79,86.36 62.94,86.43 		"/>
				<polygon class="st1" points="62.66,82.3 62.28,82.53 62.11,82.42 61.77,82.42 62.11,82.8 62.38,82.85 62.89,82.49 63.15,82.55 
					63.37,82.58 63.08,82.3 		"/>
				<polygon class="st1" points="63.22,86.09 62.98,86.16 63.06,86.29 		"/>
				<polygon class="st1" points="64.43,82.81 64.23,82.68 64.19,82.42 63.78,82.14 63.4,82.15 63.8,82.28 63.85,82.56 64.16,82.94 
					63.98,83.11 64.06,83.36 63.96,83.81 64.19,83.58 64.17,83.34 64.43,83.18 		"/>
				<polygon class="st1" points="75.82,58.77 75.77,58.84 75.66,58.92 75.72,59.02 75.86,59.01 75.98,58.89 76.17,58.9 76.05,58.77 		
					"/>
				<polygon class="st1" points="37.55,81.13 37.68,80.79 37.67,80.66 37.46,81.19 		"/>
				<polygon class="st1" points="37.77,80.49 37.88,80.41 38.16,80.06 38.36,79.8 38.08,80.01 		"/>
				<polygon class="st1" points="12.21,41.18 12.13,41.06 11.87,41.28 11.87,41.65 12.05,42.06 12.16,41.97 12.01,41.47 12.06,41.24 
							"/>
				<polygon class="st1" points="73.63,59.32 73.62,59.25 73.24,59.46 72.82,59.47 72.47,59.57 72.19,59.5 71.8,59.66 71.5,59.71 
					71.35,59.9 71.39,60.02 71.56,60.03 71.45,60.13 71.65,60.07 71.73,59.98 72.03,59.97 72.3,59.88 72.75,59.88 72.95,59.76 
					73.34,59.77 73.44,59.68 73.55,59.71 73.91,59.59 74.06,59.45 73.84,59.53 73.69,59.47 73.43,59.58 73.53,59.44 		"/>
				<path class="st1" d="M37.42,81.32l-0.24,0.61v0.61c0,0,0.2,0.49,0.19,0.49l-0.15-0.43V82L37.42,81.32z"/>
				<polygon class="st1" points="15.33,71.84 15.28,71.94 19.87,74.05 23.74,74.16 23.77,73.67 25.95,73.74 26.2,73.89 26.42,74.2 
					26.54,74.34 26.56,74.47 26.7,74.47 26.82,74.65 26.78,74.78 26.99,74.86 27.2,75.03 27.18,75.15 27.11,75.26 27.28,75.31 
					27.46,75.43 27.59,75.62 27.61,75.92 27.71,76.03 27.79,76.05 27.83,76.15 27.99,76.3 28,76.5 27.92,76.56 27.76,76.6 27.76,76.7 
					28,76.98 28.18,77.2 28.24,77.39 28.23,77.46 28.31,77.46 28.43,77.57 28.51,77.56 28.64,77.62 28.69,77.72 28.71,77.8 
					28.8,77.89 28.95,77.9 29.23,78.03 29.26,78.13 29.49,78.2 29.76,78.34 29.84,78.43 29.96,78.45 30.09,78.4 30.11,78.31 
					30.3,78.16 30.44,78.13 30.47,78.01 30.44,77.94 30.56,77.79 30.75,77.43 30.89,77.29 31.05,77.23 31.15,77.26 31.18,77.3 
					31.29,77.28 31.36,77.11 31.6,77.12 31.84,77.15 32.09,77.13 32.2,77.18 32.25,77.26 32.43,77.23 32.6,77.32 32.72,77.52 
					32.99,77.74 33.2,78.06 33.3,78.34 33.37,78.46 33.41,78.67 33.42,78.98 33.57,79.06 33.64,79.24 33.82,79.74 33.93,79.81 
					33.98,79.98 34.2,80.09 34.26,80.36 34.39,80.58 34.61,80.82 34.59,81.06 34.56,81.31 34.56,81.38 34.58,81.46 34.85,82.25 
					34.84,82.6 34.95,82.74 34.99,82.77 35.15,82.83 35.32,82.81 35.49,82.9 35.71,83.12 36.15,83.27 36.41,83.4 36.65,83.45 
					36.73,83.62 36.85,83.68 36.99,83.28 37.08,82.99 37.01,82.8 37.04,82.22 36.92,82.02 37.08,81.68 37.19,81.3 37.38,81.03 
					37.29,80.52 37.48,80.43 37.76,80.21 37.6,80.04 37.85,79.74 37.98,79.82 38.23,79.71 38.21,79.37 38.35,79.48 38.63,79.38 
					38.49,79.24 38.74,79.09 38.84,79.16 38.97,79.09 39.17,79.24 38.94,79.44 39.12,79.42 39.37,79.21 39.55,79.22 40.12,78.94 
					40.55,78.55 40.73,78.55 40.9,78.4 40.84,78.13 40.85,77.86 40.7,77.46 40.84,77.65 40.98,77.65 41.24,77.43 41.26,77.26 
					41.36,77.55 41.2,77.76 41.27,77.96 41.22,78.21 41.53,78.17 41.75,77.85 41.95,77.83 42.13,77.7 42.59,77.6 42.94,77.6 
					43.57,77.76 43.68,77.89 44.46,77.96 44.7,77.93 44.65,77.77 44.67,77.63 44.95,77.53 45.09,77.59 44.99,77.75 45.14,77.79 
					45.32,77.73 45.41,77.82 45.41,78.02 45.49,78.13 45.77,78.1 45.86,78.24 45.68,78.39 45.57,78.52 45.71,78.59 45.94,78.55 
					46.12,78.66 46.46,78.76 46.59,78.61 46.8,78.46 47.02,78.62 47.13,78.79 47.33,78.67 47.34,78.34 47.22,78.12 47.47,78.1 
					47.66,78.39 47.85,78.47 47.99,78.66 48.15,78.64 48.28,78.72 48.29,78.99 48.38,78.82 48.59,78.76 48.6,78.67 48.28,78.43 
					47.85,78.29 47.78,78.09 47.77,77.86 48.2,77.69 48.28,77.59 48.05,77.5 47.95,77.37 47.86,77.35 47.71,77.51 47.53,77.58 
					47.53,77.39 47.78,77.14 48.23,76.95 48.45,76.76 49.25,76.61 49.55,76.66 49.72,76.6 49.91,76.64 50.04,76.43 50.15,76.19 
					50.32,76.22 50.28,76.4 50.29,76.55 50.55,76.78 50.77,76.69 51.15,76.71 51.34,76.63 51.5,76.74 51.9,76.69 52.02,76.75 
					52.32,76.54 52.61,76.56 52.68,76.64 52.52,76.69 52.2,76.67 52.15,76.74 52.5,76.79 52.85,76.79 53.06,76.97 53.26,77.09 
					53.13,76.91 53.17,76.79 53.28,76.8 53.33,76.94 53.59,77.13 53.54,77.21 53.37,77.13 53.32,77.14 53.65,77.38 53.78,77.56 
					53.85,77.69 53.79,77.72 53.75,77.63 53.72,77.73 53.78,77.83 54.17,77.77 54.42,77.74 54.77,77.39 54.88,77.44 54.92,77.4 
					54.92,77.34 55.1,77.19 55.37,77.15 55.55,77.25 55.85,77.35 55.99,77.82 56.13,77.97 56.22,78 56.26,78.27 56.45,78.42 
					56.57,78.42 56.56,78.51 56.68,78.71 56.88,78.74 57.06,79.08 57.03,79.39 56.85,80.02 56.59,80.52 56.58,80.72 56.74,80.99 
					56.81,80.92 56.97,80.7 56.92,80.59 57.02,80.51 57.22,80.59 57.23,80.84 56.9,81.31 56.98,81.48 56.99,81.74 57.16,81.93 
					57.21,82.06 57.32,82.04 57.39,82.28 57.48,82.16 57.48,82.05 57.59,82.13 57.84,82.06 57.64,82.25 57.59,82.48 57.48,82.61 
					57.51,82.77 57.84,83.02 57.88,83.3 57.86,83.65 57.97,83.75 58.2,83.75 58.29,83.94 58.26,84.17 58.59,84.43 58.43,84.5 
					58.71,84.58 58.84,84.74 59.09,84.81 59.34,84.72 59.57,84.64 59.61,84.3 59.77,84.06 59.9,83.74 60.13,83.26 60.1,83.03 
					60.17,82.9 60.22,82.42 60.15,82.33 60.31,82.17 60.22,81.77 59.95,81.6 59.8,80.73 59.7,80.59 59.74,80.18 59.86,79.87 
					59.76,79.63 59.59,79.4 59.45,78.74 59.34,78.5 59.28,77.92 59.13,77.55 59.21,76.96 59.17,76.58 59.24,75.74 59.24,75.29 
					59.43,74.9 59.67,74.52 59.89,74.46 60.01,74.29 60.12,74.27 60.31,74.01 60.34,73.79 60.24,73.72 60.32,73.65 60.64,73.65 
					60.69,73.48 60.95,73.5 61.02,73.36 61.43,73.31 61.57,73.11 61.86,73.14 61.92,73.02 62.07,72.98 62.23,73.05 62.46,72.78 
					62.48,72.61 62.62,72.62 62.83,72.43 62.83,72.28 63.34,71.61 63.6,71.37 63.99,71.32 64.13,71.41 64.24,71.39 64.47,70.97 
					65.15,70.42 65.78,70.04 66.11,70.01 66.2,69.94 66.36,69.92 66.39,70.01 66.63,70 66.88,69.71 66.78,69.67 66.72,69.57 
					66.48,69.8 66.14,69.77 65.94,69.57 66.18,69.67 66.54,69.51 66.48,69.42 66.62,69.3 66.53,69.16 66.21,69.1 66.06,68.93 
					66.25,68.94 66.43,69.03 66.62,68.95 66.65,68.76 66.75,69.06 66.94,69.03 67.13,69.14 67.24,69.05 67.34,68.85 67.62,68.61 
					67.71,68.6 67.77,68.32 67.67,68.09 67.6,68.11 67.46,68.38 67.44,68.55 67.31,68.49 67.27,68.09 67.17,68.04 66.62,68.12 
					66.35,68.2 66.4,68.05 66.41,67.64 66.5,67.58 66.63,67.87 66.8,67.92 66.94,67.8 67.3,67.7 67.37,67.63 67.54,67.63 67.62,67.49 
					67.58,67.19 67.46,67.08 67.47,66.95 67.61,67.02 67.72,66.76 67.65,66.51 67.52,66.4 67.34,66.44 67.11,66.39 67,66.06 
					66.83,66.05 66.62,65.98 66.43,65.75 66.66,65.86 66.99,65.87 67.13,66.11 67.29,66.19 67.4,66.01 67.06,65.72 67.34,65.77 
					67.36,65.65 67.44,65.57 67.37,65.39 67.08,65.2 66.96,64.87 67.09,64.93 67.17,65.16 67.37,65.18 67.44,64.9 67.41,64.66 
					67.21,64.55 66.91,64.18 66.61,64.06 66.45,63.81 66.26,63.72 66.26,63.48 66.45,63.22 66.34,63.51 66.38,63.64 66.51,63.65 
					66.68,63.95 66.94,63.99 67.26,64.37 67.34,64.35 67.37,63.83 67.35,63.56 67.39,63.38 67.33,63.22 67.37,62.83 67.42,62.67 
					67.29,62.48 67.4,62.5 67.58,62.37 67.85,62.16 67.92,61.9 67.91,61.82 67.98,61.93 67.92,62.18 67.99,62.27 67.77,62.41 
					67.61,62.69 67.83,63.05 67.77,63.44 67.58,63.71 67.58,63.97 67.8,64.25 67.89,64.14 67.92,64.25 68.04,64.24 68.05,64.3 
					67.97,64.43 68.06,64.62 68.39,64.61 68.15,64.74 68.19,64.8 68.03,65.02 68.07,65.19 67.92,65.45 67.84,65.75 67.87,66.01 
					67.94,65.9 67.97,65.77 68.24,65.29 68.27,65.39 68.29,65.49 68.37,65.39 68.37,65.22 68.53,64.96 68.74,64.41 69.04,64.23 
					69.27,63.73 69.28,63.39 69.1,62.94 68.97,62.8 68.94,62.43 68.81,62.3 68.78,62.02 68.91,61.77 69.15,61.55 69.44,61.4 69,61.87 
					68.93,62.07 69.04,62.27 69.35,62.58 69.55,62.53 69.66,62.65 69.51,63.02 69.71,62.87 69.74,62.94 69.95,62.67 69.98,62.5 
					70.09,62.51 70.19,62.35 70.39,62.29 70.5,61.89 70.63,61.73 70.75,61.73 70.86,61.45 70.96,61.28 70.92,61.16 71.04,60.91 
					71.03,60.81 71.18,60.62 71.14,60.45 70.97,60.31 70.86,60.13 71.22,59.93 71.23,59.75 71.45,59.56 71.69,59.48 72.11,59.26 
					72.4,59.25 72.83,58.95 72.99,58.94 73.09,59.03 73.63,58.99 73.88,59.05 74.22,58.98 74.78,58.94 74.93,58.88 74.83,58.75 
					74.86,58.39 74.86,58.08 75.14,58.37 75.14,58.64 75.11,58.82 75.28,58.85 75.53,58.6 75.78,58.13 75.91,58.38 75.9,58.57 
					76.06,58.63 76.7,58.31 76.86,58.03 76.73,57.58 76.61,57.61 76.64,57.85 76.53,58.15 76.14,58.16 76.1,57.94 75.96,57.5 
					75.61,57.3 75.61,57.18 76.09,56.75 76.07,56.54 75.9,56.54 75.93,56.38 76.06,56.27 76.12,56.08 76.29,55.87 76.46,55.39 
					76.96,55.01 77.12,54.64 77.27,54.64 77.43,54.4 77.44,54.58 77.63,54.63 77.76,54.47 77.9,54.2 77.94,54.48 78.1,54.48 
					78.25,54.18 78.33,54.3 78.49,54.2 78.74,53.78 79.09,53.34 79.01,53.6 79.08,53.82 79.33,53.78 79.57,53.52 79.87,53.52 
					79.95,53.83 80.13,53.83 80.36,53.52 80.56,53.61 80.71,53.53 80.95,53.37 81.16,53.39 81.48,53.2 81.58,53.36 81.81,53.33 
					82,53.1 81.74,52.95 81.62,53.14 81.43,52.93 81.53,52.63 81.02,52.34 81.03,52.34 81.01,52.33 80.95,52.24 81.02,52.13 80.99,52 
					81.02,51.87 81.03,51.64 80.91,51.49 80.82,51.34 80.7,51.31 80.77,51.12 81.06,49.41 81.05,48.97 80.52,48.47 80.4,48.57 
					80.03,48.48 79.75,48.55 79.56,48.37 79.4,48.26 79.31,48.29 79.09,48.51 78.98,48.73 78.5,49.26 78.27,49.56 78.28,49.8 
					77.94,49.98 77.9,50.28 77.78,50.58 77.43,51.01 77.26,51.07 76.83,51.53 76.75,51.74 76.6,51.84 76.35,51.78 76.18,51.79 
					76.06,51.89 75.95,51.91 75.65,52.2 71.7,52.13 71.23,52.2 71,52.43 70.67,52.57 70.4,52.79 69.8,53.35 69.43,53.42 69.17,53.61 
					68.05,54.45 65.5,55.2 65.39,55.86 64.8,56.05 60.16,57.3 59.93,56.89 60.19,56.56 60.71,56.31 60.92,56.03 61.07,55.73 
					61.2,55.41 61.32,53.6 60.44,49.45 59.61,48.8 59.26,48.37 53.87,45.83 53.66,45.69 53.33,45.61 53.19,45.48 52.55,45.44 
					52.45,45.22 52.3,45.1 52.09,45.23 51.65,45.24 51.45,45.15 51.26,44.94 50.99,44.87 50.53,44.72 50.39,44.42 50.22,44.42 
					49.9,44.17 49.65,44.2 49.44,44.13 49.19,44.2 49.08,44.23 48.95,44.05 48.66,43.98 48.62,43.91 48.35,43.81 48.3,43.77 
					48.12,43.58 48.09,43.48 47.79,43.23 47.48,43.24 47.22,43.21 12.12,39.71 12.23,40.19 12.52,40.4 12.49,40.58 12.26,40.76 
					12.29,40.98 12.49,41.12 12.4,41.23 12.25,41.44 12.34,41.52 12.35,41.7 12.48,41.86 12.26,42.13 12.03,42.28 11.96,42.62 
					11.8,42.76 11.79,43.06 11.64,43.22 11.56,43.46 11.26,43.65 11.04,43.53 10.96,43.4 11.16,43.16 11.21,43.26 11.39,43.12 
					11.43,43.32 11.52,43.22 11.53,42.89 11.68,42.57 11.89,42.4 11.86,42.18 11.72,42.21 11.44,42.44 11.34,42.61 11.13,42.61 
					11.14,42.47 11.39,42.22 11.67,42.11 11.75,41.96 11.66,41.79 11.54,41.78 11.41,41.84 11.28,41.6 11.07,41.49 10.46,41.45 
					10.13,41.24 9.51,40.69 9.41,40.72 9.38,40.99 9.16,41.49 9.17,41.73 9.32,42.23 9.18,42.92 9.25,43.27 9.19,43.61 9.21,43.79 
					9.38,43.84 9.4,43.93 9.3,44.09 9.16,44.09 9.09,44.3 9.19,44.42 9.4,44.51 9.33,44.71 9.32,44.98 9.16,45.16 9.07,45.12 
					8.98,45.23 9.01,45.38 9.38,45.47 9.74,45.5 9.97,45.69 10.25,45.73 10.39,45.91 10.44,46.24 10.31,45.94 10.07,45.79 9.9,45.82 
					9.71,45.69 9.25,45.67 9.09,45.55 9.01,45.62 9.02,45.83 8.74,46.18 8.74,46.39 8.77,46.58 8.56,46.95 8.42,47.24 8.05,48.06 
					7.99,48.67 7.66,49.31 7.57,50.03 7.39,50.38 7.13,50.68 6.98,51.13 6.84,51.26 6.76,51.54 6.41,51.98 6.32,52.22 6.36,52.74 
					6.22,53.25 6.2,53.6 6.39,53.89 6.27,54.05 6.26,54.27 6.36,54.6 6.3,55.15 6.15,55.45 6.01,55.6 6.04,55.77 6.13,55.83 6,56.19 
					5.6,56.47 5.45,56.78 5.45,57.08 5.68,57.4 5.9,57.9 5.92,58.44 5.87,58.74 5.71,58.99 5.71,59.11 5.83,59.35 5.86,59.62 
					5.74,59.83 5.69,60 5.75,60.16 6.32,61.02 6.36,61.28 6.28,61.45 6.35,61.65 6.66,61.94 6.71,62.07 6.81,62.06 6.88,62.1 
					6.88,61.81 6.89,61.51 7.07,61.62 7.13,61.56 7.17,61.66 7.38,61.67 7.45,61.77 7.79,61.81 7.54,61.87 7.31,61.94 7.21,61.85 
					7.1,61.85 7.08,62.03 7.18,62.11 7.22,62.46 7.31,62.67 7.4,62.78 7.17,62.67 7.06,62.42 6.94,62.35 6.84,62.48 6.87,62.65 
					6.75,62.77 6.78,62.9 6.71,63.14 6.74,63.36 6.86,63.43 6.92,63.69 7.13,63.82 7.27,63.96 7.28,64.18 7.11,64.37 6.99,64.35 
					6.98,64.47 7.05,64.75 7.03,65 7.07,65.17 7.28,65.33 7.34,65.79 7.62,66.4 7.83,66.68 7.94,66.77 7.89,66.86 7.91,66.93 
					8.13,67.18 8.21,67.46 8.11,67.87 8.04,68.09 7.99,68.13 8.06,68.36 8.2,68.45 8.66,68.45 8.93,68.53 9.15,68.66 9.35,68.69 
					9.71,68.69 9.87,68.88 9.87,69.11 10.23,69.31 10.46,69.32 10.79,69.42 10.85,69.56 10.84,69.8 10.92,69.84 11.06,69.83 
					11.23,69.8 11.54,70.11 12,70.82 12.06,71.23 11.99,71.56 12.02,71.78 15.26,71.72 		"/>
				<polygon class="st1" points="61.91,109.99 62.08,109.85 62.17,109.53 62.37,109.18 62.25,108.84 62.2,108.67 62.26,108.43 
					62.15,108.33 61.96,108.23 61.91,108.08 61.67,107.8 61.11,107.47 60.77,107.39 60.18,107.39 59.99,107.34 59.91,107.21 
					59.7,107.13 59.57,107.15 59.19,107.42 58.78,107.52 57.95,107.94 57.71,108.17 57.48,108.2 57.04,108.18 56.57,107.86 
					56.26,107.71 56.18,107.78 56.34,107.88 56.34,108.01 56.12,108.05 55.9,107.94 55.83,107.83 55.88,107.77 55.98,107.74 
					55.9,107.66 55.8,107.67 55.63,107.62 55.48,107.46 55.43,107.31 55.19,107.3 55.06,107.39 55.07,107.62 54.91,107.81 
					54.87,108.02 55.02,108.07 55.19,108.3 54.98,108.47 54.92,108.68 54.93,108.82 55.01,108.96 55.2,108.94 55.43,108.97 
					55.68,108.93 55.81,108.84 55.93,108.97 55.91,109.06 56.06,109.11 56.56,109.18 56.62,109.52 56.79,109.87 57,110 57.23,109.99 
					57.31,109.83 57.22,109.72 57.31,109.58 57.49,109.61 57.57,109.72 57.52,109.87 57.59,110.14 57.54,110.34 57.63,110.49 
					58.01,110.55 58.17,110.3 58.36,110.1 58.6,110.14 58.74,110.1 58.76,109.83 58.55,109.64 58.32,109.48 58.22,109.26 
					58.26,109.11 58.49,108.99 58.91,108.9 59.29,108.55 59.28,108.42 59.2,108.36 59.23,108.1 59.63,107.89 59.96,107.86 
					60.13,107.95 60.38,108.19 60.56,108.22 60.79,108.53 60.88,108.78 61.02,108.9 61.11,108.83 61.28,108.62 61.43,108.62 
					61.49,108.8 61.38,108.92 61.24,108.94 61.02,109.28 60.91,109.38 61.02,109.73 61.33,110.15 61.61,110.4 61.78,110 		"/>
				<polygon class="st1" points="54.92,108.68 54.98,108.47 55.19,108.3 55.02,108.07 54.87,108.02 54.91,107.81 55.07,107.62 
					55.06,107.39 55.19,107.3 55.43,107.31 55.41,107.25 55.21,107.1 54.99,107.04 54.85,106.86 54.77,106.64 54.49,106.37 
					54.33,106.1 54.29,105.81 54.2,105.57 54.07,105.6 54.03,105.72 53.75,105.72 53.81,105.63 53.66,105.63 53.53,105.7 
					53.24,105.45 53.24,105.34 53.07,105.28 52.92,105.08 52.55,105.1 52.31,105.14 51.58,104.92 51.12,104.99 51.12,105.07 
					51.03,105.11 51.06,105.13 50.98,105.43 50.89,105.51 50.97,105.58 51.17,105.63 51.23,105.9 51,106.03 50.87,106.35 
					50.93,106.61 51.29,106.92 51.65,106.93 51.87,107.07 51.99,107.29 52.12,107.29 52.27,107.02 52.21,106.79 51.85,106.52 
					51.76,106.38 51.88,106.28 52.11,106.46 52.36,106.59 52.38,106.81 52.65,107 52.73,107.27 53.05,107.45 53.28,107.66 
					53.45,107.77 53.75,108.11 53.8,108.23 53.62,108.46 53.62,108.65 53.74,108.83 54.06,108.95 54.27,109.08 54.38,109.02 
					54.41,108.8 54.28,108.64 54.05,108.52 54.05,108.47 54.15,108.4 54.29,108.51 54.52,108.79 54.52,109.03 54.61,109.09 
					54.68,109.13 54.77,109.24 54.95,109.25 54.99,109.12 54.98,108.96 55.01,108.96 54.93,108.82 		"/>
				<path class="st1" d="M51.13,104.99l0.45-0.07l0.73,0.22h0.25h0.37l0.14,0.21h0.18v0.11l0.28,0.25l0.14-0.07h0.14l0,0l0.13-0.08
					v-0.2l-0.15-0.18l-0.07-0.28l0.17-0.32l0.09-0.22v-0.28l-0.07,0.15v0.13l-0.14,0.08v-0.2l0.07-0.21l0.13-0.29v-0.18v-0.18
					l0.15-0.4h0.12l-0.05,0.11c0,0,0,0.16,0,0.21v0.3h-0.06l0.1-0.18l0.07-0.52v-0.63v-0.13l-0.1-0.16h-0.09v-0.13l0.1-0.1h0.08v0.08
					l0.08-0.33l0.22-0.28l0.1-0.18v-0.14l-0.13-0.09v-0.12l0.08-0.17v-0.23v-0.36l0.08-0.14l0.08-0.09h-0.15h-0.19l0.06-0.1h-0.15
					l-0.12,0.06v0.18l-0.18,0.09l-0.24,0.16h-0.22l-0.06,0.17h-0.17h-0.25l-0.05-0.12L52.9,100h-0.11l-0.06,0.24h-0.3l-0.21,0.33v0.15
					l-0.13,0.07l-0.27,0.26l-0.28,0.1l-0.08,0.15l-0.19-0.07h-0.13l-0.16-0.14l-0.32-0.06l-0.45,0.24h-0.42v0.25v0.2v0.35l-0.09,0.19
					h-0.34h-0.22v0.34h-0.11l-0.24-0.09v0.09l0.48,0.59l0.24,0.16v0.16l0.39,0.35l0.34,0.47l0.62,0.68h0.17l0.09,0.07h0.1
					L51.13,104.99z"/>
				<polygon class="st1" points="49.66,102.37 49.76,102.18 49.8,101.83 49.8,101.63 49.77,101.38 50.19,101.33 50.63,101.09 
					50.96,101.15 51.11,101.29 51.25,101.25 51.43,101.32 51.51,101.17 51.79,101.07 52.07,100.81 52.19,100.74 52.21,100.59 
					52.43,100.26 52.68,100.25 52.74,100.01 52.84,100 53.03,100.14 53.08,100.26 53.32,100.22 53.5,100.27 53.56,100.1 53.78,100.08 
					54.02,99.92 54.2,99.83 54.25,99.65 54.37,99.59 54.52,99.59 54.57,99.7 54.76,99.68 54.92,99.65 55,99.56 54.92,99.42 
					54.61,99.17 54.32,99.04 54.3,99.09 54.42,99.32 54.13,99.31 53.77,99.27 53.64,99.16 53.38,99.13 53.16,99.13 53.22,99.03 
					53.4,98.98 53.38,98.85 53.49,98.82 53.71,98.87 54.07,98.98 54.12,98.94 53.87,98.74 53.54,98.56 53.31,98.54 53.08,98.59 
					52.94,98.52 52.88,98.69 52.7,98.56 52.11,98.5 51.54,98.47 51.22,98.21 50.94,98.07 50.88,98.24 50.99,98.31 50.78,98.4 
					50.64,98.5 50.42,98.42 49.97,98.54 49.39,98.49 48.59,98.51 48.24,98.7 48.08,98.57 48.03,98.68 47.86,98.81 47.77,99.04 
					47.39,99.27 47.19,99.26 46.84,99.62 46.62,99.84 46.69,100.08 46.52,100.44 46.47,100.47 46.49,100.46 46.72,100.51 
					46.76,100.58 46.91,100.63 47.04,100.78 47.3,100.74 47.57,100.8 47.74,101.01 47.78,101.17 47.95,101.28 48,101.16 48.06,101.01 
					48.29,100.98 48.42,101.03 48.6,101.09 48.6,101.31 48.54,101.56 48.57,101.67 48.5,101.87 48.54,101.99 48.55,101.98 
					48.69,102.06 48.76,102.16 48.88,102.15 48.94,102.06 49.04,102.12 49.04,102.29 49.1,102.43 49.1,102.44 49.33,102.4 		"/>
				<polygon class="st1" points="46.18,101.88 46.3,101.87 46.18,101.88 		"/>
				<polygon class="st1" points="46.13,100.86 45.92,100.92 45.59,101 45.34,101.27 45.33,101.41 45.23,101.56 45.35,101.61 
					45.62,101.61 45.83,101.81 46.14,101.88 46.18,101.88 45.98,101.57 		"/>
				<polygon class="st1" points="46.16,100.75 46.17,100.7 46.47,100.47 46.16,100.71 		"/>
				<polygon class="st1" points="48.54,102 48.54,101.99 48.46,102.07 		"/>
				<polygon class="st1" points="48.57,101.67 48.54,101.56 48.6,101.31 48.6,101.09 48.42,101.03 48.29,100.98 48.06,101.01 
					48,101.16 47.95,101.28 47.78,101.17 47.74,101.01 47.57,100.8 47.3,100.74 47.04,100.78 46.91,100.63 46.76,100.58 46.72,100.51 
					46.49,100.46 46.47,100.47 46.17,100.7 46.16,100.75 46.16,100.85 46.13,100.86 45.98,101.57 46.18,101.88 46.3,101.87 
					46.75,102.07 47.18,102.31 47.24,102.19 47.05,102.08 47.15,102.02 47.39,102.03 47.59,102.31 47.74,102.43 48.35,102.44 
					48.53,102.2 48.46,102.07 48.54,101.99 48.5,101.87 		"/>
				<polygon class="st1" points="47.66,94.92 47.61,95.03 47.55,95.23 47.38,95.47 47.37,95.53 47.27,95.55 47.22,95.62 47.15,95.58 
					47.14,95.47 46.95,95.46 46.8,95.56 46.78,95.76 46.78,95.76 46.78,95.77 46.75,98.27 46.94,98.28 47.02,98.33 47.17,98.32 
					47.16,98.31 47.27,98.09 47.52,97.83 47.67,97.95 48.05,97.43 48.19,97.06 48.2,96.61 48.05,96.47 48.11,96.06 48.25,95.82 
					48.29,95.16 48.33,95.01 48.3,94.87 48.13,94.87 47.99,94.99 47.92,94.87 47.83,94.86 		"/>
				<polygon class="st1" points="45.34,101.27 45.59,101 45.92,100.92 46.13,100.86 46.13,100.86 46.16,100.85 46.16,100.75 
					46.16,100.71 46.52,100.44 46.69,100.08 46.62,99.84 46.84,99.62 47.19,99.26 47.39,99.27 47.77,99.04 47.86,98.81 48.03,98.68 
					48.08,98.57 47.97,98.48 47.73,98.45 47.66,98.62 47.45,98.47 47.25,98.47 47.17,98.32 47.02,98.33 46.94,98.28 46.75,98.27 
					46.78,95.77 46.78,95.76 44.44,95.72 44.38,96.43 43.82,96.48 44.02,96.65 44.09,96.78 44.3,97.05 44.52,97.19 44.67,97.19 
					44.77,97.38 44.8,97.57 44.89,97.67 45.12,97.69 45.27,97.77 45.27,97.95 45.14,98.1 43.41,98.11 42.6,99.39 42.63,99.61 
					42.65,99.68 42.63,99.82 42.68,99.92 42.72,99.96 42.71,100.08 42.59,100.17 42.53,100.32 42.49,100.35 42.7,100.62 42.87,100.89 
					43.07,100.91 43.26,101.14 43.97,101.41 44.39,101.42 44.71,101.38 45.23,101.56 45.33,101.41 		"/>
				<polygon class="st1" points="46.13,100.86 46.16,100.85 46.13,100.86 		"/>
				<polygon class="st1" points="19.25,85.52 19.36,85.53 19.4,85.38 19.27,85.35 		"/>
				<polygon class="st1" points="36.5,85.27 36.54,85.32 36.6,85.09 36.53,85.09 		"/>
				<polygon class="st1" points="36.47,85.64 36.46,85.43 36.34,85.87 		"/>
				<polygon class="st1" points="18.9,84.36 18.96,84.48 19.02,84.75 19.16,84.65 19.12,84.46 18.96,84.25 		"/>
				<polygon class="st1" points="42.59,100.17 42.71,100.08 42.72,99.96 42.68,99.92 42.63,99.82 42.65,99.68 42.63,99.61 42.6,99.39 
					43.41,98.11 45.14,98.1 45.27,97.95 45.27,97.77 45.12,97.69 44.89,97.67 44.8,97.57 44.77,97.38 44.67,97.19 44.52,97.19 
					44.3,97.05 44.09,96.78 44.02,96.65 43.82,96.48 44.38,96.43 44.44,95.72 46.78,95.76 46.8,95.56 46.95,95.46 47.14,95.47 
					47.15,95.58 47.22,95.62 47.27,95.55 47.37,95.53 47.38,95.47 47.55,95.23 47.61,95.03 47.66,94.92 47.83,94.86 47.92,94.87 
					47.92,94.87 48.16,94.66 48.45,94.32 48.6,94.27 48.58,94.55 48.45,94.67 48.46,94.75 48.76,94.94 48.87,95.19 48.93,95.13 
					49.18,94.69 49.39,93.85 49.53,93.62 49.4,93.64 49.27,93.78 49.15,93.72 49.15,93.61 49.45,93.29 49.5,93.1 49.28,93.1 
					49.1,92.95 49.19,92.85 49.45,92.69 49.48,92.33 49.6,92.13 50.19,91.6 50.49,91.09 50.71,90.75 50.69,90.45 50.29,89.95 
					50.04,89.97 50.1,90.13 49.94,90.19 49.32,90.03 48.79,90.05 48.81,90.19 48.48,90.34 48.36,90.23 48.03,90.27 47.84,90.54 
					46.69,90.52 45.81,90.73 45.81,90.93 46.02,90.95 45.52,91.52 45.48,92.35 45.52,92.45 45.03,92.98 45.03,93.45 44.77,93.76 
					44.56,93.81 43.96,94.13 44.01,94.18 44.27,94 44.2,94.23 44.19,94.62 43.93,94.94 43.77,94.94 43.72,95.09 43.56,94.94 
					43.25,94.8 43.32,94.63 43.58,94.5 43.2,94.39 43.08,94.55 42.79,94.46 42.43,94.47 42.19,94.67 41.88,94.68 41.4,94.72 
					41.32,94.84 40.76,95.16 40.6,95.16 40.48,95.02 40.03,95.12 39.7,95.27 39.6,94.93 39.29,94.5 38.9,94.34 38.81,94.23 
					38.44,94.23 38.31,94.25 38.13,94.06 37.57,93.4 37.5,93.18 37.52,92.97 37.27,92.61 37.15,92.31 36.4,91.51 36.35,91.25 
					36.19,91.01 36.29,90.83 36.22,90.64 36.06,90.09 35.86,89.9 35.9,89.61 36.2,90 36.24,90.48 36.33,90.4 36.32,90 35.97,89.44 
					36.01,89.15 35.92,88.64 35.85,88.42 36.06,88.14 36.13,87.5 36.06,87.08 36.21,86.41 36.19,86.21 36.29,86.03 36.2,85.91 
					36.2,85.59 36.34,85.45 36.42,85.07 36.48,84.95 36.31,84.81 36.47,84.6 36.47,84.23 36.71,84.25 36.67,84.49 36.62,84.63 
					36.77,84.6 36.81,84.37 37.02,84.08 37.1,83.78 37.2,83.66 37.24,83.31 37.28,83.17 37.1,83.33 37.02,83.72 36.78,83.88 
					36.85,83.68 36.73,83.62 36.65,83.45 36.41,83.4 36.15,83.27 35.71,83.12 35.49,82.9 35.32,82.81 35.15,82.83 34.99,82.77 
					34.95,82.74 34.84,82.6 34.85,82.25 34.58,81.46 34.56,81.38 34.56,81.31 34.59,81.06 34.61,80.82 34.39,80.58 34.26,80.36 
					34.2,80.09 33.98,79.98 33.93,79.81 33.82,79.74 33.64,79.24 33.57,79.06 33.42,78.98 33.41,78.67 33.37,78.46 33.3,78.34 
					33.2,78.06 32.99,77.74 32.72,77.52 32.6,77.32 32.43,77.23 32.25,77.26 32.2,77.18 32.09,77.13 31.84,77.15 31.6,77.12 
					31.36,77.11 31.29,77.28 31.18,77.3 31.15,77.26 31.05,77.23 30.89,77.29 30.75,77.43 30.56,77.79 30.44,77.94 30.47,78.01 
					30.44,78.13 30.3,78.16 30.11,78.31 30.09,78.4 29.96,78.45 29.84,78.43 29.76,78.34 29.49,78.2 29.26,78.13 29.23,78.03 
					28.95,77.9 28.8,77.89 28.71,77.8 28.69,77.72 28.64,77.62 28.51,77.56 28.43,77.57 28.31,77.46 28.23,77.46 28.24,77.39 
					28.18,77.2 28,76.98 27.76,76.7 27.76,76.6 27.92,76.56 28,76.5 27.99,76.3 27.83,76.15 27.79,76.05 27.71,76.03 27.61,75.92 
					27.59,75.62 27.46,75.43 27.28,75.31 27.11,75.26 27.18,75.15 27.2,75.03 26.99,74.86 26.78,74.78 26.82,74.65 26.7,74.47 
					26.56,74.47 26.54,74.34 26.42,74.2 26.2,73.89 25.95,73.74 23.77,73.67 23.74,74.16 19.87,74.05 15.28,71.94 15.33,71.84 
					15.26,71.72 12.02,71.78 12.06,72.1 12.25,72.79 12.4,73.09 12.55,73.28 12.44,73.36 12.4,73.57 12.49,73.83 12.85,74.26 
					12.84,74.41 12.75,74.5 12.81,74.66 13.09,74.92 13.13,75.18 13.04,75.31 13.03,75.58 13.19,75.72 13.27,75.88 13.28,76.34 
					13.41,76.71 13.64,76.93 13.79,76.92 14.18,77.3 14.37,77.58 14.43,77.79 14.76,78.12 14.9,78.53 15.01,78.58 15.19,78.87 
					15.03,79.07 15.02,79.22 15.12,79.38 15.05,79.59 14.9,79.52 14.76,79.67 14.79,79.74 15.01,79.78 14.97,79.94 14.88,80.08 
					14.69,79.96 14.36,79.9 14.16,79.82 13.8,79.85 13.74,79.93 14.01,80.29 14.25,80.4 14.27,80.66 14.41,80.91 14.64,80.98 
					14.95,81.13 14.95,81.27 15.13,81.26 15.3,81.32 15.27,81.42 15.36,81.62 15.54,81.54 15.71,81.53 15.95,81.26 16.05,81.28 
					15.97,81.51 16.04,81.94 16.5,82.39 16.7,82.47 16.83,82.43 16.97,82.64 17.14,83.15 17.17,83.71 17.09,84.15 16.86,84.53 
					16.9,84.74 17.16,84.95 17.28,84.93 17.35,85.11 17.61,85.17 17.74,85.43 18.31,86.06 18.52,86.14 18.61,86.33 18.82,86.57 
					19.1,86.6 19.23,86.78 19.26,87.14 19.41,87.26 19.43,87.47 19.55,87.75 19.71,87.8 20.13,87.61 20.37,87.24 20.39,86.9 
					20.22,86.8 20.14,86.55 20.02,86.43 19.94,86.17 19.73,86.06 19.65,85.88 19.51,85.7 19.38,85.64 19.31,85.69 19.32,85.88 
					19.2,85.93 19.16,85.77 18.96,85.61 18.72,85.33 18.69,85.16 18.83,84.88 18.82,84.6 18.61,84.32 18.67,84.13 18.67,83.97 
					18.54,83.81 18.55,83.62 18.39,83.45 18.39,83.18 18.31,83.06 18.28,82.72 18.34,82.52 18.27,82.02 18.1,81.74 18.02,81.56 
					17.92,81.54 17.91,81.64 17.92,81.8 17.83,81.89 17.58,81.52 17.56,81.34 17.65,81.15 17.57,81.01 17.46,81 17.38,80.46 
					17.15,80.1 17.05,80.06 16.8,79.82 16.79,79.5 16.81,79.22 16.59,78.87 16.41,78.83 16.31,78.71 16.28,78.42 16.1,78.24 
					15.88,78.13 15.81,77.89 15.86,77.71 15.78,77.35 15.41,77.1 15.29,76.9 15.14,76.89 15.15,76.63 14.96,76.24 14.82,76.08 
					14.94,75.86 14.9,74.92 14.83,74.34 14.94,74.04 15.07,73.57 15.02,73.32 14.93,73.01 15.1,73.32 15.46,73.48 15.7,73.86 
					15.86,74 16.08,73.96 16.21,73.86 16.43,74.08 16.51,74.23 16.77,74.25 17.06,74.4 17.06,74.54 16.87,74.75 16.89,74.98 
					17.03,75.31 17.1,75.77 17.21,75.99 17.25,76.31 17.19,76.48 17.29,76.72 17.62,77.19 17.6,77.32 17.52,77.45 17.61,77.63 
					17.72,77.63 17.82,77.78 17.96,78.22 18.15,78.31 18.23,78.52 18.25,78.83 18.36,78.95 18.54,79 18.68,79.31 18.76,79.54 
					18.94,79.69 19,79.81 19.17,79.82 19.27,79.9 19.45,79.82 19.6,79.94 19.59,80.25 19.48,80.42 19.53,80.79 20,81.21 20.16,81.19 
					20.33,81.25 20.27,81.49 20.39,81.71 20.62,81.77 20.84,81.74 21.07,82.03 21.11,82.24 21.29,82.34 21.38,82.25 21.45,82.34 
					21.49,82.51 21.38,82.64 21.24,82.49 21.07,82.55 20.84,82.8 20.7,83.18 20.74,83.46 20.96,83.61 21.2,83.63 21.36,83.77 
					21.9,84.19 22.21,84.26 22.37,84.26 22.44,84.42 22.54,84.67 22.65,84.84 22.54,85.07 22.37,85.14 22.39,85.24 22.62,85.36 
					23.02,85.53 23.04,85.69 23.16,85.78 23.52,86.09 23.93,86.63 24.23,87.19 24.67,87.63 24.68,87.91 25.18,88.53 25.23,88.79 
					25.13,89.05 25.23,89.23 25.37,89.62 25.66,90.36 25.68,90.66 25.54,90.9 25.23,91.18 25.19,91.33 25.32,91.35 25.48,91.5 
					25.36,91.64 25.05,91.63 24.89,91.72 24.89,91.85 25.07,92.33 25.25,92.5 25.25,92.7 25.5,93.03 25.6,93.36 25.72,93.47 
					25.93,93.47 26,93.62 26.43,93.73 26.73,93.67 26.89,93.7 26.77,93.86 26.77,93.98 27.1,94.1 27.44,94.42 27.67,94.79 
					27.86,95.09 28.14,95.19 28.25,95.15 28.52,95.27 28.69,95.28 29.21,95.48 29.41,95.5 29.48,95.39 29.64,95.38 29.76,95.54 
					30.42,96.18 30.59,96.21 30.98,96.61 31.57,96.84 32.24,96.94 32.56,97.11 32.72,97.38 33.1,97.41 33.45,97.57 33.65,97.5 
					33.73,97.56 33.91,97.86 34.25,98.01 34.48,98.03 34.58,98 34.84,98.16 35.33,98.35 35.8,98.35 36.16,98.55 36.83,98.79 
					37.11,98.77 37.8,98.48 38.09,98.46 38.46,98.22 38.73,98.17 39.07,98.14 39.21,98.16 39.21,98.08 38.95,98.04 38.72,98.04 
					38.73,97.92 39.03,97.74 39.13,97.79 39.13,97.94 39.3,97.85 39.47,97.85 39.47,97.96 39.34,97.97 39.28,98.03 39.37,98.08 
					39.57,98.07 39.81,98.16 40.22,98.42 40.41,98.59 40.41,98.51 40.09,98.2 39.66,98 39.64,97.92 39.73,97.92 39.78,97.96 
					40.05,98.01 40.28,98.22 40.51,98.51 40.51,98.63 40.63,98.78 41.56,99.56 41.86,99.65 41.9,99.8 42.27,100.1 42.49,100.35 
					42.53,100.32 		"/>
				<polygon class="st1" points="36.68,84.76 36.59,84.77 36.56,84.95 36.64,84.91 		"/>
				<polygon class="st1" points="98.99,119.99 99.12,119.79 99.27,119.74 99.38,119.55 99.26,119.53 99.08,119.67 98.94,119.73 
					98.8,119.91 98.84,120.14 		"/>
				<polygon class="st1" points="99.39,120.4 99.5,120.47 99.67,120.39 99.73,120.21 99.58,120.09 99.19,120.19 98.99,120.21 
					98.94,120.33 99.06,120.39 		"/>
				<polygon class="st1" points="98.61,120.39 98.69,120.5 98.83,120.55 98.84,120.42 98.8,120.31 98.64,120.23 		"/>
				<polygon class="st1" points="98.02,121.25 97.92,121.39 98,121.41 98.2,121.37 98.27,121.2 98.21,121.14 		"/>
				<polygon class="st1" points="98.43,120.62 98.34,120.65 98.21,120.63 98.09,120.69 97.83,120.95 97.68,121.38 97.78,121.36 
					97.82,121.26 98.12,120.97 98.26,120.96 98.49,120.72 		"/>
				<path class="st1" d="M98.66,117.19v0.1l0.11,0.34l0.13,0.21h0.15v-0.19l-0.2-0.35L98.66,117.19z"/>
				<path class="st1" d="M96.76,115.26l-0.33,0.41l-0.35,0.45v0.25l-0.26,0.56l-0.22,0.36l-0.16,0.32H95.2l-0.14,0.1v0.23l-0.24,0.17
					h-0.16v-0.36h-0.1v-0.12h-0.15l-0.28-0.03l-0.15,0.16h-0.23l-0.19-0.2v-0.14l-0.08-0.06l-0.08-0.22v-0.13h-0.18l-0.27-0.25H92.6
					l-0.26,0.12h-0.56l-0.3-0.08l-0.27,0.18v0.24l0.25,0.25l0.06,0.15l0.13,0.3l-0.05,0.1h-0.23l-0.34-0.09l-0.08-0.07h-0.57h-0.24
					l-0.11-0.11h-0.4l-0.28,0.11l-0.16,0.43h-0.55l-0.29,0.09v0.13l-0.19,0.22h-0.31v-0.09h-0.19l-0.16,0.22l-0.21-0.09l-0.54-0.46
					l-0.19-0.24v-0.2l-0.3-0.29l-0.24-0.25v-0.27l0.06-0.19l-0.07-0.14v-0.24l0.1-0.19V116l0.26-0.45l0.09-0.37l0.24-0.31v-0.14h-0.25
					l-0.32-0.13l-0.08-0.19h-0.29l-0.23-0.12l0.12-0.16l0.16-0.27v-0.26l-0.22-0.28h-0.3l-0.15,0.1l-0.11-0.12H84.9v0.28l-0.13,0.33
					l-0.7,0.49h-0.44l-0.6,0.25l-0.23-0.1h-0.38l-0.44,0.39l-0.42,0.14l-0.15-0.1l-0.6,0.08h-0.47l-0.42-0.23l-0.42-0.07l-0.39-0.12
					l0.18,0.33l0.28,0.11l0.29,0.27l0.1,0.25l-0.38,0.59l0.14,0.27l-0.08,0.45l0.62,0.2h0.43l0.43,0.08v0.28l-0.32,0.14l-0.63,0.13
					l-0.22,0.24l-0.13,0.35l-0.69,0.36l-0.22,0.27l-0.47,0.3l-0.31,0.34h-0.55h-0.31l-0.54-0.42l-0.52-0.35h-0.35v-0.37v-0.3
					l-0.23-0.27l-0.07-0.21l-0.37,0.1l-0.27,0.29h-0.17l-0.15-0.14h-0.26l-0.16,0.19h-1.53l-0.09,0.43l0.12,0.33l0.52,0.13l0.2,0.36
					l-0.15,0.17l0.16,0.16l-0.07,0.23l-0.32-0.22l-0.91,0.31v0.75l0.23,0.3l0.51,0.39l0.33,0.58v0.46v0.2l-0.75,2.9l-0.22,0.75v0.13
					l-0.12,0.2l-0.26-0.08v-0.09l-0.3-0.19h-0.11h-0.26l-0.12-0.05l-0.1,0.21l-0.92,0.3l-0.7,0.15l-0.17,0.17h-0.16l-0.28,0.29
					l-0.32,0.14l-0.24,0.16v0.35l-0.14,0.2l0.12,0.36l-0.37,0.37l0.12,0.47l0.13,0.24l-0.22,0.21h-0.2l-0.38,0.25v0.27l-0.13,0.15
					l0.08,0.18v0.3l-0.11,0.26l0.1,0.22l-0.07,0.2l0.37,0.37l0.66,1.08l-0.34,0.42l0.84-0.06l0.4,0.06l0.29,0.43l0.09,0.38h0.57
					l0.69,0.05l0.57-0.52l0.49-0.28l0.13,0.14l-0.06,0.3l-0.1,0.1v0.41l0.08,0.79v0.32l0.17,0.16l0.26-0.05l0.26-0.07h0.29h0.15
					l0.14,0.07h0.89h0.39l0.39-0.21h0.22l0.29-0.24h0.33l0.39-0.12l0.24-0.6l0.64-0.41l0.45-0.08l0.43-0.21h0.29l0.27,0.19l0.32-0.19
					l0.15,0.13v0.32l0.16,0.48l-0.22,0.39l0.18,0.63l-0.12,0.27l0.24,0.51l0.31,0.13l0.1,0.41l0.31,0.16l0.43,0.27l0.29,0.28
					l0.12-0.14l0.56-0.14l0.47,0.47l0.35-0.1l0.49,0.53h0.21l0.59,0.2l0.37,0.13l0.08,0.39l0.27,0.08l0.35,0.2l0.78-0.08l0.55,0.31
					l0.12,0.23l-0.08,0.63l0.11,0.5l-0.15,0.32l0.51,0.85v0.63h2.38l0.11,0.86v0.54l0.71,0.16l0.7,1.25v0.66l-0.67,1.33v0.19
					l-0.18,0.25l0.12,0.14l-0.14,0.28l0.33,0.26v0.41l0.27,0.41l-0.14,0.82l0.08,0.33l-0.1,0.29l0.1,0.29h0.51l0.21,0.1h0.63
					l0.39,0.14l0.62-0.26l0.33,0.24l0.26,0.08l0.09,0.31l0.35,1.47l0.23,0.51l0.24,0.07l0.54-0.29l0.3,0.12l0.21,0.18h0.19l-0.13,0.22
					v1.27v0.15l0,0v0.17v0.14v0.16l0.23-0.15l0.62,0.08v0.28l0.26,0.57v0.46l0.06,0.52v0.49l-0.08,0.2h-0.4L95,158.81l-0.05,0.11
					l-0.19,0.16h-0.09l-0.55,0.37l-0.11,0.17l-0.21,0.06l-0.51,0.42l-0.17,0.06v0.33l-0.18,0.06h-0.17l-0.42,0.52l-0.08,0.21v0.3
					l-0.2,0.06l-0.1,0.16l-0.28,0.5l-0.19,0.2l-0.23,0.37V163l-0.25,0.18v0.12h0.21l0.14,0.08l0.68-0.2l0.29,0.18l0.31,0.43l0.27,0.12
					l0.17,0.37l0.32,0.52h0.15l0.27-0.28h0.13l0.31,0.5l0.37,0.17l0.33,0.07l0.31,0.31v0.37l0.26-0.06l0.53,0.24l0.31,0.38l0.33,0.5
					l0.3,0.22l-0.06,0.38l-0.25,0.35l0.13,0.41v0.1v0.06l0.16,0.21l0.07,0.06l0.52-0.42l0.17-0.41l0.22-0.94l0.21-0.64l0.09-0.13
					l-0.12-0.15l-0.2-0.32l0.1-0.27l0.2-0.1v-0.17l0.22-0.26v-0.19l0.14,0.11h0.18l0.34-0.3v-0.27l0.08-0.09v-0.31l0.1-0.13h0.14
					l0.09-0.26l-0.07-0.19l-0.14-0.16v-0.41l-0.12-0.11h0.14L99.5,163l0.32,0.34h0.13l0.14-0.07l0.09,0.08v0.24h-0.11l-0.13,0.46
					l-0.31,0.54h-0.28v0.34l-0.1,0.19h-0.09l-0.28,0.15l-0.2,0.18v0.14h-0.23l-0.1,0.11v0.15l0.26,0.07l0.85-0.67l0.44-0.49l0.64-1.09
					l0.24-0.54l0.24-0.7l0.62-1.17l0.6-0.72l0.1-0.22l-0.06-0.07v-0.19h0.13l0.09-0.3l0.18-0.11l-0.06-0.24l0.06-0.17l-0.06-0.08
					l-0.11-0.09v-0.27l-0.26-0.37v-0.17v-0.16v-0.18l-0.09-0.39l-0.14-0.41l0.11-0.09l0.34-0.07l-0.08-0.23l-0.17-0.09l0.32-0.08
					v-0.27l-0.33-0.14l0.27-0.08l0.18-0.25l0.13,0.1l0.43-0.39l0.26-0.17v-0.14l0.36-0.31l0.41-0.27l0.56-0.63l0.49-0.06l0.26-0.25
					l0.29-0.24h0.28l0.18,0.15l0.2,0.05v-0.06l0.21-0.36l0.57-0.36l0.23-0.07v-0.1l-0.14-0.09h-0.18l-0.09-0.17h0.2l0.35-0.21
					l0.21,0.06h0.23l0.16-0.13h0.23v0.11l-0.33,0.19l-0.34,0.06l-0.07,0.08l0.11,0.09l0.52-0.19l0.63-0.25v-0.11l0.17-0.14h0.15v0.15
					c0,0,0,0.22,0,0.23l0.39,0.06l0.22-0.12h0.37h0.45l0.27-0.19v-0.13l-0.07-0.07v-0.14l0.61-0.42l0.51-0.18l0.27-0.16l0.07-0.16
					l-0.07-0.11l-0.22-0.51l0.16-0.35l0.19-0.23v-0.26l0.13-0.11l0.22-0.16l0.05-0.27h-0.07l0.38-0.61l0.52-0.61v-0.27l-0.11-0.86
					l-0.09-0.16l0.17-0.52l0.14-0.2v-0.18l0.39-0.32l0.06-0.15l-0.1-0.51l0.21-0.6l-0.06-0.47l0.08-0.35v-0.19l0.12-0.51l-0.14-1.83
					v-0.34l0.11-0.26v-0.34l-0.12,0.13l-0.21-0.16v-0.16l0.19-0.3v-0.3v-0.2l0.18-0.05v-0.32l-0.19-0.31l-0.36-0.16h0.1v-0.12
					l0.06,0.15l0.22,0.13l0.19,0.06l0.08-0.29h0.19l0.07,0.17l0.14,0.06l-0.15,0.21l-0.19,0.15v0.16h0.14l0.26-0.24l0.36-0.19
					l0.46-0.7l0.2-0.51l0.07-0.32l0.18-0.15l0.17-0.47l0.2-0.4l0.71-0.49l0.08-0.23l0.22-0.07l0.15-0.25l0.61-0.55l0.53-0.72
					l0.14-0.19l0.33-0.73l0.09-0.32l0.16-0.24v-0.23l-0.17-0.26l0.07-0.28l0.15-0.14v-0.67l-0.15-0.1l-0.06-0.33l-0.47-1v-0.35
					l-0.08-0.43l-0.87-0.39h-0.51l-0.37,0.15l-0.26-0.35l-0.29-0.06l-0.29-0.33l-0.39-0.19h-0.27l-0.61-0.65l-0.49-0.68l-0.23-0.06
					l-0.33-0.31h-0.29l-0.82-0.58h-0.37l-0.41-0.18l-0.26,0.14h-0.39l-0.23-0.12l-0.26,0.12l-0.11,0.17l-0.16-0.15l-0.37-0.28
					l-0.06,0.12l-0.15-0.14l-0.06,0.18v0.14l-0.22-0.18v-0.14h-0.16v0.14h-0.08l-0.4-0.16h-0.13l-0.33-0.07l-0.75-0.35h-0.28v0.08
					l0.06,0.16l-0.07,0.07l-0.15-0.08h-0.07l-0.05,0.11l-0.25,0.12l-0.1,0.14v0.31l-0.14-0.23l-0.08-0.2l-0.14,0.05v0.26l-0.22,0.43
					v0.35l-0.08-0.34l0.09-0.34v-0.3l0.14-0.44l0.11-0.1l-0.09-0.09h-0.22l0.29-0.32l-0.37-0.4l-0.22-0.34h-0.2h-0.3l-0.18,0.22
					l-0.17,0.09l-0.09-0.2l-0.13-0.08l-0.06-0.2l-0.15-0.12h-0.22l-0.11-0.14l-0.18-0.07l-0.11,0.14v-0.12l-0.14-0.09l-0.1-0.19
					l-0.17,0.07l-0.3-0.09l-0.4-0.23h-0.11l-0.07,0.11l-0.25-0.16h-0.17v0.16h-0.12l-0.07-0.18h-0.35l-0.26,0.14l-0.15,0.27v0.15
					l-0.29,0.29l-0.38,0.23l-0.48,0.28l-0.24,0.29l-0.14,0.38l-0.06,0.37l-0.13,0.2l-0.22,0.23v0.16v0.28v0.51l-0.09-0.31l-0.18-0.3
					v-0.23l0.18-0.23l0.22-0.18v-0.37l0.11-0.32v-0.16h-0.16l-0.31,0.11l-0.35-0.1h-0.3l-0.25,0.07l-0.17-0.15h0.2l0.23-0.17h0.24
					l0.4,0.07h0.23l0.22-0.27h0.09l0.13,0.1h0.14l0.23-0.14l0.4-0.13v-0.32l0.35-0.41v-0.29l0.13-0.19v-0.24l-0.37-0.08l-0.29-0.23
					h-0.27l-0.39,0.23h-0.33l-0.47-0.19h-0.51l-0.37,0.39v0.16l0.12,0.09l0.08,0.13h-0.18l-0.11,0.06l-0.09,0.23l-0.07-0.2l-0.09-0.11
					l-0.29,0.11l-0.31,0.44l-0.4,0.45l0.31-0.44v-0.28l0.07-0.16v-0.19h-0.14l-0.27,0.22l-0.14,0.31l-0.13,0.35l-0.23,0.15l0.22-0.41
					v-0.32l0.47-0.59l0.12-0.4l0.18-0.25l0.26-0.14l0.28-0.21l0.21-0.09l0.25-0.38l0.63-0.64v-0.15l0.13-0.1l-0.14-0.18v-0.18
					l0.09-0.08v-0.26l-0.26-0.19h-0.28l-0.09,0.1l-0.12-0.21l-0.18-0.51l-0.3-0.75l-0.27-0.39l-0.2-0.52v-0.28l-0.07-0.28l-0.11-0.11
					v-0.26l-0.17-0.32h-0.07v0.21l-0.1,0.17l-0.31,0.2l0,0L96.76,115.26z"/>
				<polygon class="st1" points="100.2,120.7 100.3,120.55 100.15,120.43 99.96,120.44 99.9,120.56 99.7,120.65 99.9,120.72 		"/>
				<polygon class="st1" points="93.51,113.08 93.3,113.37 93.33,113.74 93.43,114.01 93.39,114.31 93.39,114.54 93.64,114.69 
					93.75,114.9 93.9,115.15 93.95,115.42 94,115.55 93.95,115.78 93.74,115.99 93.77,116.33 93.87,116.51 93.74,116.81 93.41,117.03 
					93.34,117.01 93.39,117.14 93.48,117.36 93.55,117.42 93.55,117.56 93.73,117.76 93.97,117.81 94.11,117.64 94.3,117.57 
					94.45,117.58 94.49,117.7 94.58,117.74 94.59,118.1 94.75,118.15 94.99,117.98 95.05,117.75 95.19,117.65 95.42,117.61 
					95.59,117.29 95.81,116.93 96.07,116.37 96.07,116.12 96.42,115.67 96.75,115.26 96.86,115.1 96.87,115.09 97.11,114.78 
					97.08,114.44 96.84,114.17 96.72,114.29 96.56,114.15 96.53,113.93 96.05,113.44 95.93,113.39 95.61,113.08 94.86,112.89 
					94.51,112.69 94.11,112.65 93.87,112.82 93.63,112.96 93.63,112.96 93.62,112.97 		"/>
				<polygon class="st1" points="89.73,112.86 89.73,113.05 89.55,113.27 89.3,113.4 88.97,113.41 88.79,113.74 88.78,114.03 
					88.56,114.59 88.58,114.77 88.82,114.89 88.98,115.08 89.02,115.22 89.18,115.42 89.19,115.6 89.35,115.74 89.53,115.75 
					89.63,115.83 89.68,116.03 89.79,116.44 89.78,116.71 89.92,116.82 90.14,117.07 90.17,117.31 90.45,117.41 90.45,117.52 
					90.53,117.7 90.72,117.83 90.74,117.84 90.85,117.84 90.94,117.91 91.28,118 91.51,117.99 91.56,117.89 91.43,117.59 
					91.36,117.44 91.12,117.19 91.16,116.95 91.42,116.77 91.73,116.85 92.29,116.83 92.55,116.71 92.9,116.72 93.16,116.97 
					93.34,117.01 93.41,117.03 93.74,116.81 93.87,116.51 93.77,116.33 93.74,115.99 93.95,115.78 94,115.55 93.95,115.42 
					93.9,115.15 93.75,114.9 93.64,114.69 93.39,114.54 93.39,114.31 93.43,114.01 93.33,113.74 93.3,113.37 93.51,113.08 
					93.62,112.97 93.63,112.96 93.89,112.64 93.87,112.45 93.59,112.33 93.12,112.25 92.59,112.04 92.41,112.06 92.17,112.17 
					91.75,112.13 91.22,112.24 90.78,112.11 90.19,112.12 89.85,112.25 89.79,112.56 89.79,112.59 		"/>
				<polygon class="st1" points="93.34,117.01 93.16,116.97 93.34,117.01 		"/>
				<polygon class="st1" points="93.41,117.03 93.34,117.01 93.34,117.01 		"/>
				<polygon class="st1" points="85.56,109.33 85.28,109.54 85.08,109.52 84.71,109.96 84.81,110.14 84.91,110.44 85.27,110.45 
					85.5,110.63 85.5,110.95 85.06,111.15 84.82,111.06 84.64,111.16 84.42,111.06 84.24,111.27 84.18,111.68 83.91,111.94 
					84.03,112.28 84.38,112.76 84.89,113.18 84.89,113.21 85.03,113.23 85.13,113.35 85.28,113.25 85.58,113.28 85.81,113.56 
					85.81,113.92 85.64,114.19 85.52,114.35 85.76,114.47 86.04,114.45 86.13,114.64 86.25,114.84 86.51,114.82 86.52,114.96 
					86.27,115.27 86.19,115.64 85.92,116.09 85.94,116.39 85.84,116.58 85.81,116.82 85.87,116.96 85.82,117.15 85.84,117.42 
					86.09,117.67 86.38,117.96 86.39,118.16 86.58,118.4 87.12,118.86 87.33,118.95 87.5,118.73 87.69,118.68 87.72,118.77 
					88.04,118.74 88.22,118.52 88.26,118.39 88.54,118.3 89.1,118.32 89.25,117.89 89.54,117.78 89.94,117.76 90.04,117.88 
					90.28,117.84 90.72,117.84 90.72,117.83 90.53,117.7 90.45,117.52 90.45,117.41 90.17,117.31 90.14,117.07 89.92,116.82 
					89.78,116.71 89.79,116.44 89.68,116.03 89.63,115.83 89.53,115.75 89.35,115.74 89.19,115.6 89.18,115.42 89.02,115.22 
					88.98,115.08 88.82,114.89 88.58,114.77 88.56,114.59 88.78,114.03 88.79,113.74 88.97,113.41 89.3,113.4 89.55,113.27 
					89.73,113.05 89.73,112.86 89.79,112.59 89.79,112.56 89.79,112.56 89.71,112.29 89.71,111.95 89.63,111.75 89.12,111.61 
					88.68,111.16 88.43,110.96 88.27,111.05 88,111.14 87.81,111.35 87.75,111.6 87.7,111.28 87.76,110.86 87.85,110.62 87.71,110.17 
					87.51,110.02 86.98,109.69 86.62,109.29 86.58,109.07 86.33,108.82 86.08,108.77 86,108.72 85.96,108.85 		"/>
				<polygon class="st1" points="90.72,117.83 90.72,117.84 90.72,117.83 		"/>
				<polygon class="st1" points="90.53,117.7 90.72,117.83 90.72,117.83 		"/>
				<polygon class="st1" points="74.46,103.42 74.57,103.64 74.76,103.67 74.92,103.88 74.97,103.65 74.72,103.4 		"/>
				<polygon class="st1" points="70.54,104.04 69.85,104.31 69.45,104.93 69.32,105.09 69.09,105.15 68.87,105.46 68.66,105.64 
					68.23,106.26 68.15,106.53 68.24,106.77 68.2,107.21 68,107.65 67.97,107.79 68.14,107.77 68.14,107.77 68.14,107.77 
					68.27,107.77 68.38,107.78 68.91,108.76 69.15,109.12 69.22,109.37 69.08,109.67 69.1,109.85 69.01,110.01 69.02,110.2 
					69.33,110.46 69.54,110.55 69.71,110.62 69.95,110.65 70.23,110.79 70.45,110.68 70.8,110.69 71.13,110.78 71.22,110.7 
					71.61,110.63 72.04,110.72 72.29,110.82 73.31,111.82 73.68,111.75 73.77,111.83 73.88,111.79 74.15,111.87 74.33,111.97 
					74.58,111.83 74.85,111.82 75.22,111.86 75.29,111.78 75.52,111.78 75.74,111.89 75.83,112.41 75.72,112.63 75.72,112.86 
					75.63,113.03 75.31,113.13 75.16,113.31 75.24,113.8 75.27,113.97 75.16,114.31 75.17,114.74 75.32,114.95 75.33,115.11 
					75.62,115.83 75.18,116.63 75.22,116.82 75.37,116.87 75.5,116.77 75.56,116.84 75.62,117.05 75.75,117.13 75.89,117.4 
					75.82,117.55 75.97,117.89 76.24,118.58 76.27,118.83 76.25,118.84 76.77,119.19 77.31,119.61 77.62,119.65 78.17,119.62 
					78.49,119.24 78.95,118.94 79.17,118.67 79.87,118.31 79.99,117.96 80.22,117.72 80.85,117.59 81.16,117.45 81.14,117.17 
					80.71,117.09 80.28,117.14 80.28,117.14 80.28,117.14 79.66,116.93 79.75,116.48 79.6,116.21 79.6,116.21 79.6,116.21 
					79.98,115.63 79.89,115.37 79.59,115.1 79.31,114.99 79.14,114.66 79.53,114.78 79.94,114.85 80.36,115.08 80.83,115.05 
					81.43,114.97 81.43,114.97 81.43,114.97 81.58,115.07 82.01,114.93 82.45,114.53 82.83,114.5 83.05,114.6 83.65,114.35 
					84.09,114.31 84.79,113.81 84.92,113.49 84.89,113.21 84.89,113.18 84.38,112.76 84.03,112.28 83.91,111.94 84.18,111.68 
					84.24,111.27 84.42,111.06 84.64,111.16 84.82,111.06 85.06,111.15 85.5,110.95 85.5,110.63 85.27,110.46 84.91,110.44 
					84.81,110.14 84.71,109.96 85.08,109.52 85.28,109.54 85.56,109.33 85.96,108.85 86,108.72 85.93,108.68 85.42,108.44 
					85.23,108.44 85.05,108.51 84.78,108.45 84.62,108.46 84.41,108.56 83.97,108.62 83.65,108.59 83.49,108.57 83.77,108.52 
					83.93,108.54 84.13,108.41 84.24,108.2 84.52,107.98 84.58,107.85 84.4,107.72 84.42,107.63 84.34,107.42 83.97,107.22 
					83.52,107.11 83.39,106.97 83.22,106.86 82.96,106.85 82.87,106.73 82.6,106.61 82.45,106.62 82.46,106.84 82.28,106.61 
					82.18,106.35 81.91,106.21 81.83,106.06 81.97,105.95 82.58,105.97 82.8,105.82 83.18,105.78 83.22,105.56 82.87,105.63 
					82.27,105.5 81.83,105.56 81.53,105.54 80.94,105.75 80.74,105.67 80.49,105.69 80,106.05 79.74,106.1 79.44,106.26 79.33,106.41 
					78.92,106.45 78.8,106.53 78.59,106.46 78,106.06 77.88,105.82 77.71,105.79 77.05,105.84 75.77,106.06 75.15,106.06 74.9,105.93 
					74.81,105.73 74.81,105.5 74.96,105.49 74.93,105.22 74.66,104.85 74.41,104.78 73.77,104.83 73.47,104.66 73.26,104.65 
					73.08,104.71 72.86,104.35 72.86,103.99 72.76,103.54 72.64,103.5 72.26,103.65 71.89,104.09 71.97,104.38 72.1,104.5 
					72.35,104.36 72.6,104.38 72.81,104.61 72.77,104.78 72.54,104.85 72.27,104.72 72.14,104.63 72.08,104.71 72.07,104.82 
					71.76,104.98 71.17,105.09 70.57,105.34 70.39,105.58 70.39,105.8 70.54,106.08 70.54,106.63 70.6,107 70.71,107.31 70.52,107.72 
					70.05,108 69.82,107.96 69.82,107.56 69.54,107.25 69.46,106.98 69.72,106.77 69.74,106.61 70.24,106.1 70.24,105.67 
					70.08,105.39 70.1,105.27 70.09,105.1 69.88,104.94 69.77,104.72 69.84,104.53 70.15,104.4 70.47,104.32 70.76,104 70.61,103.99 
							"/>
				<path class="st1" d="M80.33,105.35l0.28,0.07l0.21-0.26l-0.12-0.18l-0.4,0.3l-0.13-0.17l-0.28,0.2l0.14,0.1L80.33,105.35z"/>
				<polygon class="st1" points="72.28,103.01 72.45,103.25 72.71,103.25 72.48,103.03 		"/>
				<polygon class="st1" points="73.56,103.3 73.48,103.44 73.61,103.7 73.91,103.77 74.05,103.63 73.81,103.6 		"/>
				<polygon class="st1" points="83.65,114.35 83.05,114.6 82.83,114.5 83.05,114.6 		"/>
				<polygon class="st1" points="81.43,114.97 81.43,114.97 81.58,115.07 		"/>
				<polygon class="st1" points="80.28,117.14 80.28,117.14 79.66,116.93 		"/>
				<polygon class="st1" points="79.6,116.21 79.75,116.48 79.6,116.21 		"/>
				<polygon class="st1" points="84.89,113.21 84.92,113.49 84.89,113.21 		"/>
				<polygon class="st1" points="80.22,117.72 79.99,117.96 79.87,118.31 79.99,117.96 		"/>
				<polygon class="st1" points="79.94,114.85 79.53,114.78 79.14,114.66 79.53,114.78 		"/>
				<polygon class="st1" points="85.5,110.95 85.06,111.15 84.82,111.06 85.06,111.15 		"/>
				<polygon class="st1" points="84.89,113.18 84.89,113.21 84.89,113.21 		"/>
				<polygon class="st1" points="84.03,112.28 84.38,112.76 84.89,113.18 84.38,112.76 		"/>
				<polygon class="st1" points="84.18,111.68 83.91,111.94 84.03,112.28 83.91,111.94 		"/>
				<polygon class="st1" points="60.88,119.05 61.48,119.45 61.72,119.45 62.04,119.78 61.99,119.98 62.05,120.16 62.46,120.19 
					62.93,120.42 63.09,120.54 63.53,120.63 63.7,120.48 63.68,120.2 63.88,120.05 63.97,120.05 64.38,120.19 64.59,120.31 
					64.65,120.49 64.83,120.59 64.86,120.61 64.96,120.6 65.11,120.76 65.6,120.87 65.9,120.94 65.98,121.09 66.3,121.47 
					66.33,121.72 66.56,122.14 66.73,122.14 67.37,122.35 67.64,122.75 67.64,123.08 67.73,123.1 67.96,123.21 68.07,123.55 
					67.99,123.69 68.06,123.88 68.32,123.99 68.6,123.92 68.83,123.98 69.17,123.97 69.3,123.85 69.73,123.66 70.1,123.73 
					70.42,123.88 70.89,123.68 71.13,123.68 71.24,123.83 71.39,123.83 71.7,123.97 71.83,124.16 72.1,124.07 72.11,124.25 
					71.24,125.73 71.29,125.9 71.59,125.87 71.93,125.84 72.14,126.06 72.2,126.36 72.43,125.61 73.19,122.79 73.2,122.59 
					73.22,122.13 72.88,121.55 72.38,121.16 72.14,120.86 72.11,120.11 73.01,119.8 73.33,120.02 73.4,119.79 73.25,119.63 
					73.39,119.46 73.2,119.1 72.68,118.97 72.55,118.64 72.64,118.21 74.17,118.2 74.34,118.01 74.6,118.01 74.75,118.15 
					74.92,118.12 75.18,117.83 75.55,117.73 75.63,117.94 75.85,118.21 75.91,118.51 75.9,118.88 76.25,118.84 76.27,118.83 
					76.24,118.58 75.97,117.89 75.82,117.55 75.89,117.4 75.75,117.13 75.62,117.05 75.56,116.84 75.5,116.77 75.37,116.87 
					75.22,116.82 75.18,116.63 75.62,115.83 75.33,115.11 75.32,114.95 75.17,114.74 75.16,114.31 75.27,113.97 75.24,113.8 
					75.16,113.31 75.31,113.13 75.63,113.03 75.72,112.86 75.72,112.63 75.83,112.41 75.74,111.89 75.52,111.78 75.29,111.78 
					75.22,111.86 74.85,111.82 74.58,111.83 74.33,111.97 74.15,111.87 73.88,111.79 73.77,111.83 73.77,111.83 73.77,111.83 
					73.68,111.75 73.31,111.82 72.29,110.82 72.04,110.72 71.61,110.63 71.22,110.7 71.13,110.78 70.8,110.69 70.45,110.68 
					70.23,110.79 69.95,110.65 69.71,110.62 69.54,110.55 69.33,110.46 69.02,110.2 69.01,110.01 69.1,109.85 69.08,109.67 
					69.22,109.37 69.15,109.12 68.91,108.76 68.38,107.78 68.27,107.77 68.14,107.77 67.97,107.79 68,107.65 68.2,107.21 
					68.24,106.77 68.15,106.53 68.23,106.26 68.66,105.64 68.87,105.46 69.09,105.15 69.32,105.09 69.45,104.93 69.85,104.31 
					70.54,104.04 70.61,103.99 70.76,104 70.8,103.95 70.95,103.84 71.01,103.68 70.85,103.47 70.37,103.21 70.17,103.2 70.1,103.32 
					70.08,103.44 69.88,103.47 69.77,103.56 69.55,103.53 69.35,103.61 69.25,103.74 69.36,103.87 69.28,104 68.92,104.18 
					68.46,104.46 68.15,104.68 67.79,104.76 67.39,104.79 66.95,104.74 66.68,104.89 66.7,105.05 66.78,105.27 66.75,105.48 
					66.55,105.67 66.41,105.61 66.46,105.39 66.43,105.33 66.63,105.26 66.34,105.23 66,105.08 65.83,105.09 65.38,105.36 
					65.27,105.55 64.97,105.9 64.61,106.58 64.56,106.78 64.67,106.73 64.77,106.83 64.81,107.06 64.73,107.3 64.53,107.4 
					64.28,107.42 64.09,107.53 63.74,107.86 63.59,107.94 63.33,108.33 63.17,108.35 62.95,108.36 63.02,108.62 63.26,108.88 
					63.26,109.21 63.12,109.5 62.98,109.49 62.73,109.29 62.76,109.19 62.85,109.03 62.65,108.95 62.56,108.69 62.26,108.43 
					62.2,108.67 62.25,108.84 62.37,109.18 62.17,109.53 62.08,109.85 61.91,109.99 61.78,110 61.61,110.4 61.66,110.46 61.72,110.77 
					61.75,111.08 62.01,111.4 62.12,111.39 62.25,111.33 62.32,111.45 62.36,111.75 62.19,111.93 62.19,112.05 62.35,112.22 
					62.35,112.6 62.17,112.73 62.06,112.93 62.17,112.97 62.28,113.22 62.24,113.68 62.27,114.31 62.08,114.53 62.05,114.72 
					62.21,114.94 62.45,114.84 62.41,114.99 62.55,115.19 62.69,115.17 62.71,115.3 62.57,115.47 62.45,115.77 61.94,116.28 
					61.81,116.56 61.43,116.93 60.92,117.04 60.53,117.34 60.16,117.9 60.1,118.35 60.04,118.6 60.44,118.75 		"/>
				<polygon class="st1" points="76.25,118.84 75.9,118.88 76.25,118.84 		"/>
				<polygon class="st1" points="68.23,106.26 68.15,106.53 68.24,106.77 68.15,106.53 		"/>
				<polygon class="st1" points="76.27,118.83 76.25,118.84 76.25,118.84 		"/>
				<polygon class="st1" points="75.62,115.83 75.33,115.11 75.62,115.83 75.18,116.63 75.22,116.82 75.18,116.63 		"/>
				<polygon class="st1" points="75.72,112.86 75.63,113.03 75.31,113.13 75.63,113.03 		"/>
				<polygon class="st1" points="73.77,111.83 73.77,111.83 73.68,111.75 		"/>
				<polygon class="st1" points="69.71,110.62 69.54,110.55 69.71,110.62 69.95,110.65 70.23,110.79 69.95,110.65 		"/>
				<polygon class="st1" points="68.14,107.77 68.27,107.77 68.14,107.77 		"/>
				<polygon class="st1" points="58.54,124.42 58.29,124.64 58.15,124.88 58.16,124.98 58.24,125.08 58.4,125.03 58.5,124.83 
					58.48,124.67 58.56,124.49 		"/>
				<polygon class="st1" points="58.63,125.93 58.35,126.07 58.12,126.33 58.16,126.59 58.43,126.6 58.74,126.46 58.86,126.67 
					59.27,126.76 59.52,126.85 59.9,127.41 60.08,127.41 60.33,127.14 61.38,124.97 61.58,124.79 62.96,124.33 63.55,123.92 
					64.48,123.06 64.86,122.18 65.09,122.17 65.15,122.05 65.22,121.73 65.19,121.48 64.92,120.95 64.92,120.81 64.86,120.61 
					64.86,120.61 64.83,120.59 64.65,120.49 64.59,120.31 64.38,120.19 63.97,120.05 63.88,120.05 63.68,120.2 63.7,120.48 
					63.53,120.63 63.09,120.54 62.93,120.42 62.46,120.19 62.05,120.16 61.99,119.98 62.04,119.78 61.72,119.45 61.48,119.45 
					60.88,119.05 60.44,118.75 60.04,118.6 59.97,118.92 59.58,118.94 58.93,119.38 58.6,119.4 58.25,119.58 58.43,119.89 
					58.45,120.09 58.56,120.28 58.48,120.65 57.98,121.2 57.94,121.43 58.06,121.59 57.8,121.96 57.51,122 57.27,122.33 57.37,122.54 
					57.48,122.82 57.45,123.04 57.49,123.44 57.35,123.69 57.21,123.81 57.37,124.02 57.66,124.14 57.93,124.42 58.16,124.56 
					58.26,124.49 58.38,124.17 58.47,124 58.66,123.81 58.67,124.04 58.7,124.24 58.75,124.12 58.73,123.9 58.82,123.92 58.91,124.27 
					58.84,124.65 58.88,124.86 58.74,125.2 58.39,125.49 58.51,125.56 		"/>
				<polygon class="st1" points="73.02,145.97 73.2,146.01 73.46,145.84 73.56,145.62 73.31,145.38 73.4,145.15 73.54,144.93 
					73.73,144.97 73.69,144.8 73.53,144.77 73.41,144.64 73.61,144.21 73.92,144 74.19,143.64 74.22,143.32 73.83,142.42 
					73.97,142.21 73.94,141.87 73.85,141.69 73.79,141.41 73.96,141.23 74.05,140.76 74.01,139.89 73.89,139.51 74.05,139.08 
					74.04,138.15 74.27,137.78 74.26,137.58 73.01,135.8 72.97,135.78 72.84,135.72 72.69,135.74 72.4,135.76 72.14,135.83 
					71.87,135.88 71.7,135.72 71.69,135.4 71.62,134.61 71.63,134.12 71.72,134.02 71.79,133.72 71.65,133.58 71.17,133.85 
					70.6,134.38 69.91,134.33 69.33,134.31 69.24,133.93 68.95,133.5 68.55,133.44 67.71,133.5 68.05,133.08 67.39,132 67.02,131.63 
					67.09,131.43 66.99,131.21 67.1,130.95 67.15,130.65 67.06,130.47 67.2,130.32 67.22,130.05 67.6,129.8 67.79,129.84 
					68.02,129.63 67.89,129.39 67.76,128.92 68.13,128.55 68.07,128.33 68.21,128.13 68.17,127.78 68.42,127.62 68.74,127.48 
					69.02,127.19 69.17,127.14 69.35,126.97 70.04,126.82 70.97,126.52 71.06,126.31 71.18,126.36 71.44,126.36 71.55,126.33 
					71.85,126.52 71.82,126.61 72.11,126.69 72.23,126.49 72.2,126.36 72.14,126.06 71.93,125.84 71.59,125.87 71.29,125.9 
					71.24,125.73 72.11,124.25 72.1,124.07 71.83,124.16 71.7,123.97 71.39,123.83 71.24,123.83 71.13,123.68 70.89,123.68 
					70.42,123.88 70.1,123.73 69.73,123.66 69.3,123.85 69.17,123.97 68.83,123.98 68.6,123.92 68.32,123.99 68.06,123.88 
					67.99,123.69 68.07,123.55 67.96,123.21 67.73,123.1 67.64,123.08 67.64,122.75 67.37,122.35 66.73,122.14 66.56,122.14 
					66.33,121.72 66.3,121.47 65.98,121.09 65.9,120.94 65.6,120.87 65.11,120.76 64.96,120.6 64.86,120.61 64.92,120.81 
					64.92,120.95 65.19,121.48 65.22,121.73 65.15,122.05 65.09,122.17 64.86,122.18 64.48,123.06 63.55,123.92 62.96,124.33 
					61.58,124.79 61.38,124.97 60.33,127.14 60.08,127.41 59.9,127.41 59.52,126.85 59.27,126.76 58.86,126.67 58.74,126.46 
					58.43,126.6 58.16,126.59 58.12,126.33 58.35,126.07 58.63,125.93 58.51,125.56 58.39,125.49 58.37,125.51 57.71,125.8 
					57.47,126.03 57,126.48 56.9,126.82 56.79,127.09 56.82,127.21 57.04,127.39 57.07,127.58 56.9,127.7 56.9,127.85 57.16,128.08 
					57.37,128.46 57.34,128.72 57.13,128.73 56.92,128.83 56.84,129.03 57.07,129.25 57.34,129.35 57.74,129.7 58.11,129.75 
					58.66,130.12 58.94,130.18 59,130.41 59.31,130.84 59.34,131.21 59.5,131.48 60.05,131.76 60.29,132.16 60.37,132.55 
					60.52,132.81 60.57,133.25 60.76,133.55 60.97,133.68 61.21,134.12 61.26,134.44 61.19,134.55 61.4,135.01 61.83,135.55 
					61.99,135.83 61.92,136.06 61.97,136.24 62.15,136.3 62.61,136.71 62.72,136.95 62.77,137.33 62.9,137.5 63.25,137.62 
					63.32,137.94 63.71,138.57 63.8,138.88 64.25,139.51 64.26,139.76 64.14,139.81 64.02,139.73 64.01,139.86 64.06,140.09 
					64.06,140.29 64.21,140.26 64.39,140.38 64.43,140.55 64.37,140.69 64.82,141 65.25,141.22 65.27,141.4 65.47,141.65 
					65.72,141.68 65.82,141.81 65.92,142.04 66.09,142.15 66.5,142.13 66.63,141.97 66.55,142.2 66.78,142.47 67.22,142.7 
					67.42,142.88 67.45,143.08 67.65,143.21 67.98,143.33 68.1,143.29 68.33,143.35 68.85,143.67 69.2,143.81 69.46,143.82 
					69.58,143.88 69.65,144.06 70.02,144.33 70.23,144.46 70.52,144.73 70.7,144.81 70.79,144.98 70.77,145.12 70.78,145.31 
					71.08,145.37 71.39,145.5 71.76,145.88 72.11,146.2 72.34,146.28 72.39,146.32 72.73,146.16 		"/>
				<polygon class="st1" points="72.2,126.36 72.23,126.49 72.2,126.36 		"/>
				<polygon class="st1" points="72.14,126.06 72.2,126.36 72.2,126.36 		"/>
				<polygon class="st1" points="77.54,152.36 77.77,151.87 78.3,151.32 78.65,151.21 78.98,151.5 79.37,151.46 79.6,151.4 
					79.9,151.48 80.38,151.38 80.64,151.42 80.69,151.77 80.89,152.34 80.99,152.5 81.11,152.34 81.09,152.09 81.24,151.83 
					81.24,151.58 81.46,151.27 82.24,151.27 82.92,151.29 83.17,151.52 83.28,151.07 83.64,150.33 83.67,149.97 83.63,149.6 
					83.49,149.39 83.92,148.75 84.09,148.25 84.09,148.02 84.4,147.82 86.25,147.31 87.8,147.33 88.69,147.99 88.91,148.03 
					89.06,148.2 89.24,147.95 89.2,147.76 89.86,146.43 89.82,145.77 89.12,144.52 88.42,144.36 88.46,143.81 88.34,142.96 
					85.96,142.92 86,142.29 85.49,141.44 85.65,141.13 85.53,140.62 85.61,139.99 85.49,139.76 84.95,139.45 84.17,139.53 
					83.82,139.33 83.54,139.25 83.47,138.86 83.09,138.73 82.51,138.53 82.3,138.55 81.81,138.02 81.46,138.12 80.99,137.65 
					80.42,137.79 80.31,137.93 80.01,137.65 79.58,137.38 79.27,137.22 79.17,136.81 78.86,136.68 78.63,136.17 78.75,135.9 
					78.57,135.27 78.78,134.88 78.63,134.4 78.67,134.08 78.51,133.95 78.2,134.14 77.93,133.95 77.63,133.95 77.2,134.16 
					76.76,134.24 76.11,134.65 75.88,135.25 75.49,135.37 75.16,135.37 74.86,135.6 74.65,135.6 74.26,135.82 73.87,135.8 
					73.01,135.8 74.26,137.58 74.27,137.78 74.04,138.15 74.05,139.08 73.89,139.51 74.01,139.89 74.05,140.76 73.96,141.23 
					73.79,141.41 73.85,141.69 73.94,141.87 73.97,142.21 73.83,142.42 74.22,143.32 74.19,143.64 73.92,144 73.61,144.21 
					73.41,144.64 73.53,144.77 73.69,144.8 73.73,144.97 73.79,144.99 73.82,145.33 74.09,145.57 74.24,145.71 74.28,145.96 
					74.22,146.22 74.27,146.37 74.34,146.82 74.55,147.13 75.16,147.62 75.22,147.83 75.06,148.22 75.16,148.5 74.83,149.22 
					75.02,149.49 75.68,150.12 76.68,152.79 77.05,152.79 77.15,152.61 77.36,152.57 77.36,152.58 		"/>
				<polygon class="st1" points="88.91,148.03 88.69,147.99 87.8,147.33 86.25,147.31 84.4,147.82 84.09,148.02 84.09,148.25 
					83.92,148.75 83.49,149.39 83.63,149.6 83.67,149.97 83.64,150.33 83.28,151.07 83.17,151.52 83.21,151.56 83.52,151.89 
					83.78,151.95 84.11,152.55 84.95,153.39 85.28,153.43 85.61,153.72 85.83,154.07 86.64,154.27 87.17,154.54 87.41,154.6 
					88.01,155.11 88.61,155.41 89.42,155.52 89.74,155.88 90.14,156.21 90.3,156.54 90.21,156.84 90,157.16 89.77,157.33 
					89.63,157.56 89.71,157.84 89.52,158.36 89.1,158.79 89.02,159.09 89.25,159.08 90.21,158.94 91.02,159.18 91.58,159.52 
					91.89,159.39 92.07,159.39 92.2,159.53 92.48,159.18 92.6,159.11 92.89,159.2 93.14,158.9 93.25,158.55 93.86,158.12 
					93.95,157.83 94.13,157.5 94.38,157.29 94.4,156.8 94.36,156.66 94.39,156.28 94.46,156.23 94.47,156.07 94.51,155.93 
					94.51,155.76 94.54,155.71 94.6,155.56 94.63,154.29 94.77,154.07 94.57,154.03 94.36,153.85 94.06,153.73 93.53,154.02 
					93.28,153.95 93.05,153.44 92.71,151.97 92.61,151.66 92.36,151.58 92.03,151.34 91.4,151.6 91.01,151.46 90.39,151.5 
					90.17,151.4 89.67,151.44 89.57,151.15 89.67,150.86 89.59,150.53 89.73,149.71 89.45,149.3 89.43,148.89 89.1,148.63 
					89.18,148.34 89.06,148.2 		"/>
				<polygon class="st1" points="89.18,148.34 89.06,148.2 89.06,148.2 		"/>
				<polygon class="st1" points="89.06,148.2 89.06,148.2 88.91,148.03 		"/>
				<polygon class="st1" points="96.88,168.5 96.84,168.44 96.79,168.34 96.66,167.93 96.92,167.58 96.97,167.19 96.67,166.98 
					96.34,166.48 96.03,166.1 95.5,165.86 95.24,165.92 95.22,165.55 94.91,165.24 94.59,165.17 94.22,165 93.91,164.5 93.77,164.48 
					93.51,164.76 93.35,164.76 93.03,164.24 92.87,163.87 92.59,163.75 92.28,163.32 92,163.14 91.32,163.34 91.17,163.26 
					90.97,163.26 90.95,163.33 90.82,163.63 90.58,163.94 90.67,164.37 90.56,164.58 90.64,164.8 90.59,165.4 90.49,165.62 
					90.52,165.85 90.35,166.14 90.49,166.56 90.39,166.71 90.46,167.31 90.58,167.75 90.49,167.95 90.29,168.14 90.24,168.22 
					90.24,168.25 90.25,168.85 90.43,169.33 90.83,169.88 90.97,169.91 91.34,170.29 91.54,170.34 92.14,170.28 92.49,170.3 
					92.81,170.53 93.01,170.56 93.22,170.57 93.29,170.64 93.25,170.74 93.25,170.89 93.52,170.9 93.81,170.72 94.19,170.65 
					94.46,170.74 94.63,170.84 94.78,170.81 94.97,170.89 95.17,170.91 95.31,170.81 95.34,170.65 95.41,170.6 95.52,170.7 
					96.02,170.52 96.35,170.14 96.44,170 96.39,169.95 96.52,169.74 96.78,169.5 96.78,169.12 97,168.87 97.11,168.77 97.03,168.71 		
					"/>
				<polygon class="st1" points="90.29,168.14 90.49,167.95 90.58,167.75 90.46,167.31 90.39,166.71 90.49,166.56 90.35,166.14 
					90.52,165.85 90.49,165.62 90.59,165.4 90.64,164.8 90.56,164.58 90.67,164.37 90.58,163.94 90.82,163.63 90.95,163.33 
					90.97,163.26 91.01,163.14 91.26,162.96 91.26,162.83 91.48,162.46 91.68,162.26 91.95,161.76 92.06,161.6 92.25,161.54 
					92.24,161.24 92.32,161.03 92.75,160.51 92.92,160.53 93.1,160.48 93.12,160.15 93.28,160.09 93.79,159.67 94,159.61 
					94.11,159.44 94.67,159.06 94.75,159.11 94.95,158.95 95,158.84 95.33,158.67 95.6,158.68 95.68,158.48 95.63,157.99 
					95.57,157.47 95.59,157.01 95.34,156.44 95.32,156.16 94.7,156.07 94.39,156.28 94.36,156.66 94.4,156.8 94.38,157.29 
					94.13,157.5 93.95,157.83 93.86,158.12 93.25,158.55 93.14,158.9 92.89,159.2 92.6,159.11 92.48,159.18 92.2,159.53 92.07,159.39 
					91.89,159.39 91.58,159.52 91.02,159.18 90.21,158.94 89.25,159.08 89.02,159.09 89.1,158.79 89.52,158.36 89.71,157.84 
					89.63,157.56 89.77,157.33 90,157.16 90.21,156.84 90.3,156.54 90.14,156.21 89.74,155.88 89.42,155.52 88.61,155.41 
					88.01,155.11 87.41,154.6 87.17,154.54 86.64,154.27 85.83,154.07 85.61,153.72 85.28,153.43 84.95,153.39 84.11,152.55 
					83.78,151.95 83.52,151.89 83.21,151.56 82.92,151.29 82.24,151.27 81.46,151.27 81.24,151.58 81.24,151.83 81.09,152.09 
					81.11,152.34 80.99,152.5 80.89,152.34 80.69,151.77 80.64,151.42 80.38,151.38 79.9,151.48 79.6,151.4 79.37,151.46 78.98,151.5 
					78.65,151.21 78.3,151.32 77.77,151.87 77.54,152.36 77.36,152.58 77.54,152.94 77.19,154.47 75.57,155.33 75.46,155.68 
					75.75,155.91 75.82,156.15 75.65,156.45 75.73,156.9 76.02,157.27 76.02,157.61 75.78,157.8 75.72,158.06 75.88,158.2 
					75.98,158.39 76,158.77 76.13,158.91 75.92,159.15 75.66,159.29 75.31,159.65 74.95,160.56 74.69,160.9 74.6,161.9 74.41,162.08 
					74.45,162.93 74.69,163.38 74.68,163.97 74.46,164.25 74.45,164.92 74.07,165.09 74,165.61 74.14,166.27 74.38,166.6 
					74.43,166.85 74.75,167.35 74.96,167.76 75.12,168.55 75.32,168.73 75.44,169.78 75.37,170.42 75.11,170.51 74.88,171.05 
					74.96,171.59 74.65,172.04 74.83,172.2 75.11,172.66 75.17,173.15 74.85,173.48 74.57,174.04 74.58,174.98 74.58,175.37 
					74.48,175.89 75.29,177.48 75.09,177.71 74.73,177.89 74.66,178.63 74.16,179.29 74.22,179.76 74.47,180.18 74.38,181.19 
					74.43,182.07 74.55,182.71 74.8,182.83 74.95,183.11 74.86,183.46 74.57,183.65 74.63,184.69 74.75,185.08 75.18,185.23 
					75.15,185.69 75.17,186.08 75.42,186.62 75.55,187.24 75.81,187.29 76.01,187.15 76.19,187.23 76.21,187.51 83.64,187.51 
					83.82,187.39 83.75,187.31 83.88,187.12 83.89,187 83.57,186.65 83.62,186.48 83.62,186.3 83.52,186.15 83.43,185.81 
					83.65,185.59 83.75,185.32 83.66,185.22 83.81,185.04 84.23,184.88 84.52,184.61 84.52,184.48 84.11,184.36 83.84,184.35 
					83.73,184.15 83.77,184.01 84.02,183.82 84.38,183.69 84.71,183.86 84.71,184.02 84.66,184.14 84.77,184.4 84.96,184.47 
					85.49,184.16 85.57,183.9 85.44,183.62 85.26,183.4 85.37,183.36 85.43,183.11 85.25,182.8 85.04,182.78 84.78,182.96 
					84.57,182.97 84.45,183.07 84.52,183.13 84.75,183.19 84.73,183.34 84.27,183.47 84.07,183.39 84.19,183.27 84.35,183.18 
					84.2,183.1 83.79,183.13 83.48,182.96 83.39,182.71 83.4,182.07 83.3,181.58 83,181.32 83.02,180.84 83.29,180.57 83.49,180.56 
					83.4,180.72 83.48,180.77 83.78,180.74 84.3,180.9 84.78,181.3 85.19,181.4 85.95,181.39 86.4,181.08 86.36,180.99 86.68,180.77 
					86.73,180.51 86.67,180.32 86.74,180.17 86.82,179.95 86.59,179.88 86.42,179.6 86.42,179.35 86.52,179.17 86.46,179.04 
					86.7,178.8 86.69,178.71 86.79,178.68 86.83,178.51 86.78,178.27 86.56,178.25 86.59,178.11 86.46,177.92 86.46,177.45 
					86.39,177.29 86.39,177.07 86.48,176.98 86.6,177.13 86.78,177.13 87.16,177.26 87.47,177.46 87.73,177.46 88.15,177.38 
					88.59,177.45 89.16,177.42 90.1,177.17 90.93,176.83 90.97,176.66 91.08,176.8 91.65,176.61 92.39,176.15 92.5,175.89 
					92.42,175.58 92.56,175.16 92.65,175.07 92.69,175.22 92.79,175.08 92.89,174.65 93.15,174.22 93.21,173.96 93.21,173.39 
					93.15,173.16 93.08,173.15 92.91,173.34 92.61,173.33 92.27,173.09 92.06,172.7 92.08,172.51 92.41,171.85 92.43,171.57 
					92.27,171.38 91.57,170.83 91.01,170.62 90.44,170.18 90.31,169.94 90.4,169.85 90.39,169.62 90.21,169.44 90.27,169.29 
					90.17,168.8 90.24,168.25 90.24,168.25 90.24,168.22 		"/>
				<polygon class="st1" points="90.97,163.26 91.01,163.14 90.97,163.26 		"/>
				<polygon class="st1" points="90.95,163.33 90.97,163.26 90.97,163.26 		"/>
				<polygon class="st1" points="72.44,187.46 72.47,187.35 72.33,187.21 72.13,187.19 72.04,187.38 72.08,187.51 72.32,187.51 		"/>
				<polygon class="st1" points="72.51,187.2 72.56,187.06 72.44,186.97 72.39,187.04 		"/>
				<polygon class="st1" points="72.35,186.44 72.29,186.55 72.44,186.69 72.71,186.52 		"/>
				<polygon class="st1" points="71.45,186.35 71.59,186.49 71.93,186.36 71.76,186.24 71.55,186.24 		"/>
				<polygon class="st1" points="72.77,186.72 72.95,186.87 72.97,187.03 73.14,186.93 73.11,186.66 72.91,186.6 		"/>
				<polygon class="st1" points="73.41,187.44 73.69,187.42 73.45,187.23 73.35,187.3 		"/>
				<polygon class="st1" points="76.19,187.23 76.01,187.15 75.81,187.29 75.55,187.24 75.42,186.62 75.17,186.08 75.15,185.69 
					75.18,185.23 74.75,185.08 74.63,184.69 74.57,183.65 74.86,183.46 74.95,183.11 74.8,182.83 74.55,182.71 74.43,182.07 
					74.38,181.19 74.47,180.18 74.22,179.76 74.16,179.29 74.66,178.63 74.73,177.89 75.09,177.71 75.29,177.48 74.48,175.89 
					74.58,175.37 74.58,174.98 74.57,174.04 74.85,173.48 75.17,173.15 75.11,172.66 74.83,172.2 74.65,172.04 74.96,171.59 
					74.88,171.05 75.11,170.51 75.37,170.42 75.44,169.78 75.32,168.73 75.12,168.55 74.96,167.76 74.75,167.35 74.43,166.85 
					74.38,166.6 74.14,166.27 74,165.61 74.07,165.09 74.45,164.92 74.46,164.25 74.68,163.97 74.69,163.38 74.45,162.93 
					74.41,162.08 74.6,161.9 74.69,160.9 74.95,160.56 75.31,159.65 75.66,159.29 75.92,159.15 76.13,158.91 76,158.77 75.98,158.39 
					75.88,158.2 75.72,158.06 75.78,157.8 76.02,157.61 76.02,157.27 75.73,156.9 75.65,156.45 75.82,156.15 75.75,155.91 
					75.46,155.68 75.57,155.33 77.19,154.47 77.54,152.94 77.36,152.58 77.36,152.57 77.15,152.61 77.05,152.79 76.68,152.79 
					75.68,150.12 75.02,149.49 74.83,149.22 75.16,148.5 75.06,148.22 75.22,147.83 75.16,147.62 74.55,147.13 74.34,146.82 
					74.27,146.37 74.22,146.22 74.28,145.96 74.24,145.71 74.09,145.57 73.82,145.33 73.79,144.99 73.54,144.93 73.4,145.15 
					73.31,145.38 73.56,145.62 73.46,145.84 73.2,146.01 73.02,145.97 72.73,146.16 72.39,146.32 72.51,146.44 72.54,146.81 
					72.5,147.1 72.57,147.48 72.78,148.49 72.78,148.87 72.7,149.14 72.56,149.3 72.66,149.81 72.83,150.32 73,150.75 73,151.45 
					72.93,151.64 72.87,151.77 72.92,152.72 72.92,152.96 72.72,153.07 72.54,153.2 72.57,153.74 72.66,153.87 72.83,153.75 
					72.94,153.84 72.77,154 72.78,155.41 72.98,155.95 73.02,156.37 72.97,156.72 72.74,157.08 72.74,157.43 73,157.88 72.94,158.17 
					72.91,158.85 72.76,159.1 72.76,159.47 72.83,159.67 72.83,159.83 72.61,160.17 72.59,160.52 72.45,160.75 72.53,161.18 
					72.48,161.36 72.26,161.87 72.26,162.08 72.5,162.46 72.55,162.85 72.7,163.09 72.51,163.23 72.39,163.53 72.58,163.77 72.38,164 
					72.2,164.08 72.19,164.43 72.25,164.73 72.28,165.01 72.59,165.82 72.59,166.27 72.46,166.41 72.49,166.66 72.77,167.07 
					72.79,167.54 72.7,167.88 72.71,168.01 72.78,168.24 72.74,168.45 72.67,168.68 72.75,168.82 73.05,169.24 73.09,169.47 
					72.95,169.71 72.74,169.83 72.56,170.21 72.56,170.33 72.66,170.46 72.57,170.78 72.41,170.95 72.41,171.18 72.37,171.59 
					72.26,171.81 72.28,172.05 72.21,172.17 72.18,172.5 72.02,172.67 72.04,172.81 72.14,172.97 71.97,173.21 71.96,173.58 
					71.93,173.81 71.75,173.93 71.75,174.19 71.66,174.35 71.64,174.54 71.73,174.77 71.74,175.04 71.58,175.26 71.43,175.28 
					71.26,175.16 71.07,175.21 71.04,175.37 71.09,175.66 71.1,176.07 71.28,176.35 71.57,176.59 71.61,176.87 71.56,177.23 
					71.98,177.94 72.05,178.14 72.22,178.29 72.22,178.75 72.1,179.34 71.99,179.43 72.04,179.62 71.99,179.79 71.89,179.73 
					71.75,179.75 71.66,180 71.73,180.25 71.91,180.4 71.76,180.95 71.81,181.19 71.68,181.35 71.83,181.48 71.77,181.66 
					71.71,181.75 71.8,181.89 72.22,182.54 72.34,182.66 72.44,182.87 72.83,183.03 73.21,182.94 73.23,182.56 73.29,182.48 
					73.53,182.49 73.74,182.73 73.82,182.68 74,182.65 73.86,182.85 73.57,183.11 73.57,183.29 73.79,183.39 73.95,183.29 
					73.98,183.49 74.01,183.96 74.14,184.12 74.07,184.18 73.94,184.05 73.84,183.82 73.69,183.76 73.61,183.89 73.63,184.03 
					73.88,184.21 73.93,184.35 73.75,184.41 73.64,184.51 73.66,184.84 73.88,185.05 73.68,185.28 73.66,185.47 73.75,185.55 
					73.52,185.8 73.56,185.94 73.85,186.12 73.77,186.35 73.73,186.68 73.56,186.88 73.55,187.05 73.69,187.18 73.95,187.19 
					74.11,187.36 74.14,187.51 76.21,187.51 		"/>
				<polygon class="st1" points="73.56,186.48 73.32,186.64 73.4,186.81 73.56,186.66 		"/>
				<polygon class="st1" points="71.64,183.75 71.58,183.96 71.65,184.12 71.73,184.2 71.84,184.53 71.89,185.36 71.76,185.66 
					72.07,185.79 72.52,185.75 72.52,185.63 72.49,185.35 72.61,185.15 72.87,185.24 72.93,185.19 72.64,184.91 72.75,184.8 
					72.45,184.5 72.43,184.34 72.59,184.33 72.85,184.48 72.86,184.42 72.76,184.29 72.44,184.06 72.74,184.15 72.74,183.88 
					72.68,183.78 72.7,183.42 72.46,183.08 72.21,182.97 71.92,182.97 71.73,183.15 71.72,183.29 71.81,183.42 71.79,183.63 		"/>
				<polygon class="st1" points="73.03,183.81 73.26,184.01 73.36,183.86 73.22,183.73 		"/>
				<polygon class="st1" points="77.36,152.57 77.36,152.58 77.36,152.58 		"/>
				<polygon class="st1" points="77.36,152.58 77.54,152.94 77.36,152.58 		"/>
				<polygon class="st1" points="83,97.3 83.19,97.26 83.09,97.03 		"/>
				<polygon class="st1" points="83.67,97.61 83.58,97.88 83.92,98.4 84.1,97.89 83.84,97.6 		"/>
				<polygon class="st1" points="84.49,98.22 84.26,98.38 84.46,98.47 		"/>
				<polygon class="st1" points="84.09,97.58 84.24,97.86 84.55,97.89 84.36,97.33 		"/>
				<path class="st1" d="M84.03,98.99l0.11,0.42l0.25-0.06v-0.38l-0.2-0.21L84.03,98.99z"/>
				<polygon class="st1" points="84.59,100.55 84.81,100.66 84.83,100.41 84.69,99.92 84.14,99.78 84.14,99.99 84.48,100.34 
					84.42,100.53 		"/>
				<polygon class="st1" points="84.7,100.93 84.38,101.36 84.43,101.62 84.65,101.73 84.79,101.36 		"/>
				<polygon class="st1" points="86.41,102.22 86.58,102.46 86.91,102.45 86.91,102.2 86.66,101.97 		"/>
				<polygon class="st1" points="83.59,103.6 83.49,103.92 83.81,103.93 83.98,103.7 83.87,103.54 		"/>
				<polygon class="st1" points="84.32,101.88 84.23,102.58 84.44,102.19 		"/>
				<path class="st1" d="M84.23,103.34l-0.14-0.25l-0.07,0.25H84.23z"/>
				<polygon class="st1" points="85.06,105.04 84.78,105.17 85.01,105.27 		"/>
				<polygon class="st1" points="84.65,105.39 84.15,105.6 83.91,105.5 83.61,105.59 83.52,105.75 83.78,105.97 83.8,106.22 
					83.54,106.45 83.26,106.56 83.57,106.68 84.23,106.57 84.51,106.34 84.5,106.04 84.36,105.8 84.67,105.49 		"/>
				<polygon class="st1" points="319.78,88.47 319.36,88.43 318.8,88.75 318.73,89.1 319.01,89.2 319.85,88.81 		"/>
				<polygon class="st1" points="363.52,0.33 363.14,0.26 362.98,0.36 363.57,0.36 		"/>
				<polygon class="st1" points="348.32,0.34 348.29,0.36 348.39,0.36 		"/>
				<polygon class="st1" points="193.34,0.13 193.21,0.25 193.17,0.36 193.51,0.36 		"/>
				<polygon class="st1" points="190.06,0.36 190.03,0.36 190.07,0.36 		"/>
				<polygon class="st1" points="353.86,187.78 353.9,187.63 354.01,187.51 353.73,187.51 353.72,187.52 353.68,187.51 353.46,187.51 
					353.66,187.61 		"/>
				<path class="st1" d="M72.91,187.6v0.35l-0.26-0.25L72.91,187.6z"/>
				<polygon class="st1" points="357.91,187.72 357.97,187.51 357.78,187.57 		"/>
				<polygon class="st1" points="353.73,187.51 353.68,187.51 353.72,187.52 		"/>
				<polygon class="st1" points="72.23,187.55 72.32,187.51 72.08,187.51 72.08,187.51 		"/>
				<polygon class="st1" points="72.91,187.55 72.64,187.65 72.91,187.9 		"/>
			</g>
			<g>
				<polygon class="st1" points="367.22,128.56 367.31,128.67 367.31,128.4 		"/>
				<polygon class="st1" points="367.16,132.65 366.92,132.05 366.79,132 366.72,131.8 366.43,131.8 366.23,131.69 366.09,131.4 
					365.79,131.1 365.73,130.78 365.52,130.61 365.37,130.33 365.4,130.22 365.95,130.27 366.44,130.02 366.58,129.78 366.55,129.5 
					366.16,129.09 365.88,129.04 365.76,129.12 365.46,128.97 364.97,128.77 364.73,128.51 364.46,128.54 363.8,128.31 363.74,128.13 
					363.92,127.82 363.95,127.58 363.78,127.36 363.29,126.85 363.17,126.86 363.01,126.94 362.91,126.72 362.67,126.55 
					362.59,126.35 362.3,126.3 362.15,126.1 362.04,126.14 361.79,126 361.5,125.98 361.21,125.76 360.9,125.69 360.41,125.39 
					359.68,125.32 359.39,125.2 359.25,125.03 359.12,125.03 359.03,125.08 358.5,124.86 358.38,124.73 358.12,124.63 357.67,124.44 
					357.43,124.43 357.26,129.5 357.19,129.89 357.18,130.1 357.24,130.22 357.13,133.5 357.59,133.51 357.74,133.6 357.98,133.53 
					358.7,133.56 358.88,133.51 358.95,133.68 359.11,133.85 359.33,133.91 359.62,133.73 360.1,133.6 360.13,133.47 360.25,133.57 
					360.38,133.42 360.36,133.04 360.01,132.77 359.62,132.61 359.29,132.55 359.14,132.43 358.94,132.35 358.86,132.36 
					358.71,132.25 358.65,131.93 358.42,131.62 358.17,131.5 358.12,131.32 357.96,131.17 358.15,131.28 358.22,131.48 358.38,131.52 
					358.68,131.72 358.73,131.94 358.76,132.21 358.86,132.22 359.2,132.32 359.39,132.49 359.53,132.46 359.85,132.48 360.23,132.38 
					360.5,132.4 360.72,132.33 360.65,132.22 360.46,132.09 360.36,131.9 360.17,131.92 360.08,131.74 360.23,131.87 360.5,131.81 
					360.7,132.04 360.95,132.09 360.83,131.94 360.83,131.74 360.96,131.65 360.98,131.5 360.95,131.29 360.75,131.11 360.75,131.02 
					360.98,131.12 361.08,131.29 361.34,131.53 361.54,131.58 361.55,131.45 361.5,131.27 361.57,131.33 361.64,131.57 361.75,131.55 
					361.76,131.37 361.68,131.21 361.76,130.93 361.88,131.07 362.21,131.18 362.29,131.38 362.46,131.41 362.63,131.41 
					362.71,131.47 362.84,131.32 362.82,131.5 362.83,131.67 362.97,131.71 363.14,131.88 363.88,132.05 364.1,132.17 364.3,132.42 
					364.41,132.79 364.77,133.25 364.83,133.44 365.08,133.51 365.23,133.72 365.28,133.87 365.9,134.52 365.92,134.72 366.16,134.89 
					366.55,135.02 366.69,134.96 366.83,134.96 367.04,135.05 367.31,135.01 367.31,132.72 		"/>
				<polygon class="st1" points="367.11,153.93 366.97,154.1 366.97,153.84 366.85,153.63 366.8,152.87 366.88,152.79 366.88,152.6 
					366.63,152.44 366.73,152.22 366.54,152.06 366.6,151.83 366.16,151.45 366.04,151.19 366.02,150.87 366.26,150.93 366.26,150.66 
					366.05,150.28 365.93,150.34 365.7,150.31 365.43,149.93 365.23,149.92 364.98,149.7 364.84,149.85 364.73,149.7 364.43,149.6 
					364.25,149.77 364.4,149.53 364.67,149.46 364.69,149.26 364.61,149.11 364.3,149.14 364.06,149.12 363.99,148.96 363.86,148.96 
					363.3,148.64 363.05,148.15 363,147.66 362.84,147.34 362.85,147.09 362.98,147.03 363.09,146.49 362.94,145.78 362.77,145.45 
					362.92,145.38 362.75,145.22 362.54,145.22 362.28,144.68 362.27,144.02 362.38,143.94 362.39,143.79 362.26,143.64 362.2,142.8 
					362.27,142.58 362.2,142.31 362.3,142.23 362.32,142.04 361.86,141.59 361.57,141.41 361.65,141.29 361.35,140.98 361.07,141.17 
					360.94,141.07 360.78,141.37 360.56,141.38 360.28,140.96 360.31,140.74 360.14,140.36 360.24,139.86 360.18,139.26 
					360.07,139.31 359.96,139.06 360.09,138.83 359.88,138.55 359.87,138.31 359.73,138.22 359.74,137.89 359.9,137.72 359.72,137.62 
					359.49,137.67 359.32,137.51 359.42,136.86 359.34,136.72 359.26,136.34 358.97,136.28 358.98,136.11 358.67,136.23 
					358.51,136.44 358.51,136.93 358.37,137.34 358.37,137.45 358.31,137.72 358.16,137.7 357.98,138.14 357.75,138.47 357.95,138.66 
					358.21,138.87 358.04,138.98 357.87,138.95 357.76,139.22 357.61,139.48 357.81,139.8 357.84,140.02 357.63,139.94 357.48,140.05 
					357.36,140.72 357.48,141.17 357.39,141.66 357.52,142.01 357.49,142.4 357.24,142.64 357.24,142.86 356.96,143.38 356.91,144.15 
					356.67,144.42 356.75,144.69 356.6,145.11 356.36,145.36 356.33,145.87 355.91,146.19 355.05,146.52 354.7,146.28 354.34,146.25 
					354.17,146.01 353.83,145.75 353.82,145.58 353.73,145.46 353.65,145.16 353.33,145.11 353.07,145 352.65,144.97 352.26,144.72 
					352.19,144.5 351.89,144.12 351.53,144.09 351.22,143.89 351.19,143.71 351.02,143.69 350.87,143.57 350.57,143.58 350.33,143.52 
					350.4,143.41 350.06,143.13 350,142.86 349.65,142.51 349.43,142.48 349.13,142.13 349.12,141.79 349.38,141.38 349.44,141.06 
					349.7,140.87 349.78,140.49 349.9,140.25 349.66,140.42 349.47,140.05 349.74,139.87 349.69,139.58 349.84,139.59 350,139.52 
					350.07,139.62 350.32,139.68 350.65,139.52 350.77,139.22 350.53,139.02 350.71,138.88 350.91,138.93 351.04,138.47 
					351.22,138.38 351.4,138.13 351.41,138 351.13,137.87 350.96,138.07 350.79,138 350.75,137.54 350.52,137.64 350.2,138.02 
					350.37,138.09 350.37,138.28 350.14,138.39 349.93,138.25 349.88,138.09 349.76,137.94 349.67,138.11 349.49,138.16 349.5,137.99 
					349.65,137.82 349.71,137.69 349.52,137.77 349.38,137.94 349.07,138.04 349.03,138.15 348.87,138.18 348.78,138.07 
					348.53,138.05 348.52,137.93 348.31,137.64 348.2,137.61 347.88,137.78 347.66,137.69 347.52,137.77 347.42,137.58 347.3,137.55 
					347.15,137.26 346.84,137.41 346.51,137.35 346.22,137.22 346.24,137.03 346.03,136.77 345.91,136.8 345.94,136.92 345.53,137.04 
					345.43,136.79 345.2,136.71 344.85,136.51 344.8,136.61 344.61,136.48 344.39,136.65 344.65,136.85 344.57,136.93 344.83,136.99 
					345.05,136.89 345.44,137.21 345.41,137.4 345.49,137.82 345.22,137.85 345.11,138.15 345.02,137.97 344.82,137.91 344.6,138.05 
					343.83,138.09 343.53,137.84 343.49,137.95 343.18,138.06 343.21,138.31 342.96,138.26 343.04,138.62 342.95,138.49 
					342.63,138.39 342.51,138.57 342.63,138.75 342.61,138.86 342.27,138.76 342.1,138.93 342.23,139.07 342.09,139.14 341.86,139.27 
					341.88,139.44 342.09,139.65 342.14,139.8 341.9,139.67 341.71,139.83 341.48,139.83 341.24,140.21 341.02,140.64 340.85,140.69 
					340.77,141.04 340.56,141.18 340.74,141.37 341.2,141.45 341.02,141.5 340.92,141.7 341.48,141.88 341.26,141.98 340.91,141.93 
					340.8,141.77 340.81,141.93 341.04,142.11 341.02,142.4 341.26,142.72 340.91,142.44 340.7,142.05 340.44,142.02 340.43,142.18 
					340.33,142.36 340.3,142.15 339.73,141.78 339.31,141.86 339.44,142.02 339.3,142.16 339.15,142.04 339.04,142.04 338.92,142.2 
					339.11,142.46 339.06,142.61 339.02,142.5 338.89,142.53 338.89,142.66 338.62,142.81 338.23,142.88 338.54,142.74 338.75,142.47 
					338.73,142.05 338.94,141.78 338.81,141.61 338.58,141.58 338.19,140.87 337.99,140.56 337.61,140.47 337.36,140.31 
					337.19,140.41 337.32,140.54 337.17,140.59 336.99,140.87 336.81,140.84 336.87,140.69 336.62,140.76 336.56,140.92 
					336.38,140.53 336.22,140.49 336.18,140.72 336.38,140.83 336.11,141.02 336.02,141.3 336.11,141.46 335.83,141.63 335.71,141.43 
					335.56,141.42 335.51,141.28 335.7,141.06 335.5,141.06 335.39,141.35 335.11,141.42 334.99,141.59 334.94,141.88 335.35,142 
					335.01,142.29 334.74,142.15 334.42,142.36 334.48,142.56 334.86,142.61 334.73,142.82 334.55,142.86 334.28,142.55 334.06,142.8 
					333.79,142.84 333.84,143.04 333.89,143.23 333.91,143.4 334.07,143.34 333.88,143.61 334.01,143.81 333.79,143.92 333.65,144.1 
					334.12,144.18 333.82,144.34 333.76,144.46 333.5,144.4 333.36,144.2 333.14,144.06 332.94,144.23 332.85,144.04 332.59,143.88 
					332.41,144.03 332.75,144.26 332.62,144.32 332.48,144.59 332.76,144.84 333.03,144.83 332.91,145.05 332.9,145.3 332.79,145.19 
					332.64,145.19 332.69,145.48 332.58,145.79 332.54,146.13 332.11,145.2 331.83,144.64 331.67,144.43 331.74,144.1 331.64,144.25 
					331.36,144.47 331.29,144.83 331.07,144.88 331.04,145.03 330.77,145.01 330.62,145.22 330.4,145.41 330.45,145.76 330.45,146.46 
					330.58,146.53 330.58,146.78 330.33,146.91 330.19,147.18 329.82,147.28 329.85,147.43 329.54,147.64 329.55,147.98 
					329.37,148.15 328.95,148.73 328.15,149.21 327.44,149.27 327.17,149.38 326.76,149.41 326.43,149.49 326.1,149.41 325.68,149.57 
					325.63,149.81 325.36,149.95 324.48,149.92 324.25,150.05 324.18,150.28 323.63,150.51 323.21,150.51 322.99,150.42 
					322.77,150.44 322.69,150.28 322.46,150.4 322.25,150.72 321.68,150.83 321.63,150.95 321.47,150.95 321.02,151.35 320.44,151.62 
					319.68,151.86 319.34,152.33 319.33,152.76 319.02,153.02 318.81,152.88 318.91,152.73 318.87,152.51 319.01,152.18 319,151.93 
					318.57,152.26 318.47,152.66 318.16,153.24 318.37,153.65 318.22,153.98 318.24,154.61 317.72,155.26 317.52,156.15 
					317.66,156.61 317.59,157.25 318.06,158.05 318.08,158.36 318.27,158.58 318.1,158.98 318.2,159.34 317.92,159.45 317.79,159.24 
					317.77,158.77 317.6,159.02 317.52,158.93 317.54,158.5 317.26,157.91 317.09,158.21 317.15,158.8 317.52,159.17 317.77,159.68 
					317.4,159.74 317.09,159.33 317.02,158.85 316.89,159.05 316.74,159.14 316.98,159.59 317.44,160.17 317.72,160.94 317.67,162.3 
					317.86,162.56 318.01,163.33 318.42,164.34 318.27,164.7 318.31,166.21 318.25,166.41 318.4,166.83 318.39,167.3 318.67,167.97 
					318.68,168.29 318.43,168.48 318.56,168.62 318.47,168.98 318.42,169.57 318.18,169.79 318.25,169.96 318.18,170.32 
					317.95,170.49 318,170.84 317.56,171.18 317.36,171 317.03,171.51 317.05,172.35 317.23,172.51 317.44,172.53 318.01,173.11 
					318,173.32 318.1,173.44 318.4,173.5 318.53,173.66 318.92,173.72 319.07,173.69 319.15,173.8 319.45,173.84 319.8,173.77 
					319.89,173.97 320.04,173.84 320.12,173.9 320.51,173.83 320.85,173.8 320.89,173.64 321.1,173.6 321.32,173.26 321.72,173.31 
					321.72,173.08 321.98,172.93 322.18,172.93 322.38,173.15 322.6,172.85 322.71,172.9 322.84,172.83 322.91,172.5 323.66,172.04 
					323.95,172.09 324.13,172.2 324.38,172.03 325.09,171.88 325.18,172.02 325.64,171.92 325.77,172.01 325.99,172.03 326.27,171.93 
					326.37,172.22 326.53,172.22 326.75,172.1 326.87,172.25 327.08,172.1 327.62,172.1 327.58,172.33 327.68,172.37 327.97,172.09 
					328.27,172.17 328.63,171.92 328.76,171.6 328.89,171.56 329.18,171.27 329.34,170.79 329.67,170.53 330.06,170.42 330.2,170.51 
					330.76,170.32 331.48,169.88 331.92,169.47 332.12,169.39 332.32,169.4 332.55,169.39 332.95,169.56 333.32,169.58 333.57,169.49 
					334.12,169.52 334.86,169.25 335.3,169.15 335.63,168.92 335.83,168.92 336.21,168.64 336.77,168.6 338.26,168.49 338.74,168.62 
					339.06,168.63 339.47,168.49 339.8,168.53 340.21,168.92 340.52,169.46 340.77,169.54 340.94,169.4 341.11,169.34 341.23,169.47 
					341.38,169.4 341.67,169.47 341.93,169.81 342.27,169.87 342.42,169.78 343.01,170.19 342.96,170.45 343.14,170.46 343.35,170.68 
					343.26,170.87 343.04,170.87 342.99,171.05 343.22,171.57 343.47,171.6 343.74,171.89 343.84,172.27 343.78,172.56 344.08,173.21 
					343.98,173.51 344.1,173.67 344.05,174.02 343.94,174.22 343.77,174.12 343.69,174.2 343.91,174.48 344.11,174.59 344.21,174.87 
					344.44,174.78 344.68,174.97 344.68,174.73 344.55,174.52 344.7,174.35 344.84,174.09 345.05,174.05 345.18,173.82 345.41,173.72 
					345.48,173.49 345.73,173.17 346.3,172.88 346.36,172.71 346.47,172.71 346.92,172.5 347.04,172.12 347.39,171.56 347.78,171.48 
					347.94,171.26 347.83,170.97 347.89,170.64 348.06,171.02 348.07,171.37 348.07,171.71 347.9,171.92 347.82,172.61 347.26,172.98 
					347.18,173.27 347.01,173.49 347.04,173.79 346.71,174.25 346.81,174.38 346.58,175.04 345.93,174.97 345.8,175.32 345.63,175.61 
					345.63,175.72 346.03,175.61 346.42,175.44 346.88,175.6 347.33,174.84 347.45,174.15 347.83,173.76 347.94,173.88 347.94,174.53 
					348.09,174.91 347.96,174.95 348.01,175.59 347.71,176.14 347.2,176.35 347.28,176.53 347.61,176.49 347.96,176.5 348.11,176.34 
					348.35,176.28 348.63,176.05 348.86,176.12 349.03,176.09 348.9,176.32 348.76,176.54 348.52,176.53 348.45,176.67 348.69,177.02 
					348.79,177.32 348.97,177.75 348.99,178.25 348.94,178.87 348.6,179.23 348.66,179.4 348.61,179.87 348.84,180.08 349.05,180.44 
					349.11,180.88 349.59,181.52 349.96,181.61 350.21,181.8 350.34,182.12 350.61,182.14 350.68,182.02 350.85,181.96 351.19,182.07 
					351.48,182.42 351.79,182.45 352.13,182.77 352.17,183.04 352.43,183.13 352.71,183.46 352.91,183.46 353,183.28 353.52,183.03 
					353.69,182.8 354.01,182.79 354.36,182.44 354.61,182.49 354.72,182.36 354.65,182.22 354.36,182.14 354.46,181.96 354.99,181.61 
					355.43,181.92 355.41,182.22 354.87,182.51 355,182.77 355.17,182.81 355.37,182.6 355.59,182.43 355.86,182.59 355.84,182.84 
					355.67,182.84 355.46,183.05 355.81,183.47 355.89,183.93 356.02,183.85 356.2,183.87 356.22,184.15 356.42,184.43 356.61,184.1 
					356.59,183.73 356.38,183.89 356.33,183.74 356.49,183.55 357.15,183.57 357.24,183.71 357.33,183.55 357.66,183.09 
					358.36,182.68 358.75,182.33 358.54,182.33 358.39,182.42 358.45,182.34 358.22,182.26 358.47,182.23 358.82,182.23 
					359.33,182.08 360.37,181.88 361.21,182.04 361.56,181.84 361.56,181.61 361.81,181.61 362.06,181.44 362.3,180.96 362.19,180.43 
					362.18,180.14 362.64,179.68 362.64,178.88 362.86,178.58 362.95,178.04 363.22,177.91 363.2,177.65 364.01,176.63 364.24,176.58 
					364.38,176.03 364.71,175.6 364.92,175.03 365.24,174.7 365.21,174.41 365.44,174.28 365.66,173.76 365.48,173.6 365.9,173.4 
					366.19,172.98 366.36,172.8 366.57,172.36 366.97,172.24 367.21,172.12 366.8,172.12 366.9,171.98 367.31,171.96 367.31,154.17 		
					"/>
				<polygon class="st1" points="367.26,153.87 367.31,154 367.31,153.74 		"/>
			</g>
		</g>
		  <g id="GribnauCommunicatie" class="marker-wrap">
			<circle class="marker-dot" cx="171.53" cy="36.48" r="0.99"/>
			<path class="marker gribnau-communicatie" d="M171.41,33.39a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring gribnau-communicatie" d="M171.41,33.39a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="TDUB" class="marker-wrap">
			<circle class="marker-dot" cx="179.66" cy="36.93" r="0.99"/>
			<path class="marker tdub" d="M179.54,33.83a2.5,2.5,0,0,0-2.5,2.5,2.53,2.53,0,0,0,.33,1.25l2.17,3.75,2.16-3.75a2.54,2.54,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring tdub" d="M179.54,33.83a2.5,2.5,0,0,0-2.5,2.5,2.53,2.53,0,0,0,.33,1.25l2.17,3.75,2.16-3.75a2.54,2.54,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Kragelund_Kommunikation" class="marker-wrap">
			<circle class="marker-dot" cx="177.34" cy="29.87" r="0.99"/>
			<path class="marker kragelund-kommunikation" d="M177.21,26.77a2.5,2.5,0,0,0-2.5,2.5,2.41,2.41,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring kragelund-kommunikation" d="M177.21,26.77a2.5,2.5,0,0,0-2.5,2.5,2.41,2.41,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="SchwanCommunications" class="marker-wrap">
			<circle class="marker-dot" cx="177.63" cy="34.77" r="0.99"/>
			<path class="marker schwan-communications" d="M177.48,31.67a2.5,2.5,0,0,0-2.5,2.5,2.54,2.54,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.53,2.53,0,0,0,.33-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring schwan-communications" d="M177.48,31.67a2.5,2.5,0,0,0-2.5,2.5,2.54,2.54,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.53,2.53,0,0,0,.33-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Presigno" class="marker-wrap">
			<circle class="marker-dot" cx="177.25" cy="37.66" r="1"/>
			<path class="marker presigno" d="M177.05,34.53a2.51,2.51,0,0,0-2.17,3.75L177.05,42l2.16-3.75a2.49,2.49,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring presigno" d="M177.05,34.53a2.51,2.51,0,0,0-2.17,3.75L177.05,42l2.16-3.75a2.49,2.49,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Carvajal" class="marker-wrap">
			<circle class="marker-dot" cx="90.66" cy="165.61" r="0.99"/>
			<path class="marker carvajal" d="M90.54,162.51A2.5,2.5,0,0,0,88,165a2.53,2.53,0,0,0,.33,1.25L90.54,170l2.16-3.75A2.44,2.44,0,0,0,93,165a2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring carvajal" d="M90.54,162.51A2.5,2.5,0,0,0,88,165a2.53,2.53,0,0,0,.33,1.25L90.54,170l2.16-3.75A2.44,2.44,0,0,0,93,165a2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="ProComm" class="marker-wrap">
			<circle class="marker-dot" cx="185.59" cy="44.05" r="0.99"/>
			<path class="marker procomm" d="M185.47,41a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring procomm" d="M185.47,41a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Luna" class="marker-wrap">
			<circle class="marker-dot" cx="170.75" cy="39.77" r="0.99"/>
			<path class="marker luna" d="M170.62,36.67a2.5,2.5,0,0,0-2.5,2.5,2.41,2.41,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring luna" d="M170.62,36.67a2.5,2.5,0,0,0-2.5,2.5,2.41,2.41,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Textual" class="marker-wrap">
			<circle class="marker-dot" cx="109.75" cy="147.2" r="0.99"/>
			<path class="marker textual" d="M109.63,144.1a2.5,2.5,0,0,0-2.5,2.5,2.41,2.41,0,0,0,.34,1.25l2.16,3.75,2.16-3.75a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.62.62,0,1,1,.62-.62.62.62,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring textual" d="M109.63,144.1a2.5,2.5,0,0,0-2.5,2.5,2.41,2.41,0,0,0,.34,1.25l2.16,3.75,2.16-3.75a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.62.62,0,1,1,.62-.62.62.62,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="HEADline Communication Strategies" class="marker-wrap">
			<circle class="marker-dot" cx="74.22" cy="163.48" r="0.99"/>
			<path class="marker headline" d="M74.09,160.38a2.5,2.5,0,0,0-2.5,2.5,2.44,2.44,0,0,0,.34,1.25l2.16,3.75,2.16-3.75a2.44,2.44,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring headline" d="M74.09,160.38a2.5,2.5,0,0,0-2.5,2.5,2.44,2.44,0,0,0,.34,1.25l2.16,3.75,2.16-3.75a2.44,2.44,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Blue_Focus" class="marker-wrap">
			<circle class="marker-dot" cx="316.13" cy="52.59" r="0.99"/>
			<path class="marker blue-focus" d="M316,49.49a2.51,2.51,0,0,0-2.17,3.75L316,57l2.16-3.75a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring blue-focus" d="M316,49.49a2.51,2.51,0,0,0-2.17,3.75L316,57l2.16-3.75a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="High_Results" class="marker-wrap">
			<circle class="marker-dot" cx="66.88" cy="108.9" r="0.99"/>
			<path class="marker high-results" d="M66.75,105.8a2.49,2.49,0,0,0-2.16,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring high-results" d="M66.75,105.8a2.49,2.49,0,0,0-2.16,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Crest_Communications" class="marker-wrap">
			<circle class="marker-dot" cx="183.16" cy="40.84" r="0.99"/>
			<path class="marker crest-communications" d="M183,37.74a2.5,2.5,0,0,0-2.5,2.5,2.39,2.39,0,0,0,.34,1.25L183,45.24l2.17-3.75A2.51,2.51,0,0,0,183,37.74Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring crest-communications" d="M183,37.74a2.5,2.5,0,0,0-2.5,2.5,2.39,2.39,0,0,0,.34,1.25L183,45.24l2.17-3.75A2.51,2.51,0,0,0,183,37.74Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="HarkonsaloVesa" class="marker-wrap">
			<circle class="marker-dot" cx="194.74" cy="20.23" r="0.99"/>
			<path class="marker harkonsalo-vesa" d="M194.62,17.13a2.49,2.49,0,0,0-2.5,2.5,2.53,2.53,0,0,0,.33,1.25l2.17,3.75,2.16-3.75a2.54,2.54,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring harkonsalo-vesa" d="M194.62,17.13a2.49,2.49,0,0,0-2.5,2.5,2.53,2.53,0,0,0,.33,1.25l2.17,3.75,2.16-3.75a2.54,2.54,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="ProConcept" class="marker-wrap">
			<circle class="marker-dot" cx="194.41" cy="22.94" r="0.99"/>
			<path class="marker pro-concept" d="M194.28,19.84a2.49,2.49,0,0,0-2.16,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring pro-concept" d="M194.28,19.84a2.49,2.49,0,0,0-2.16,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Monet_Associes" class="marker-wrap">
			<circle class="marker-dot" cx="168.47" cy="43.43" r="0.99"/>
			<path class="marker monet-associes" d="M168.34,40.35a2.49,2.49,0,0,0-2.16,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring monet-associes" d="M168.34,40.35a2.49,2.49,0,0,0-2.16,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Passerelles" class="marker-wrap">
			<circle class="marker-dot" cx="165.48" cy="50.65" r="0.99"/>
			<path class="marker passerelles" d="M165.35,47.55a2.5,2.5,0,0,0-2.5,2.5,2.39,2.39,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring passerelles" d="M165.35,47.55a2.5,2.5,0,0,0-2.5,2.5,2.39,2.39,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="JPKom" class="marker-wrap">
			<circle class="marker-dot" cx="175.09" cy="39.38" r="0.99"/>
			<path class="marker jpkom" d="M175,36.28a2.5,2.5,0,0,0-2.5,2.5A2.53,2.53,0,0,0,172.8,40L175,43.78,177.13,40a2.54,2.54,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring jpkom" d="M175,36.28a2.5,2.5,0,0,0-2.5,2.5A2.53,2.53,0,0,0,172.8,40L175,43.78,177.13,40a2.54,2.54,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="AutoComDeutschland" class="marker-wrap">
			<circle class="marker-dot" cx="176.59" cy="41.29" r="0.99"/>
			<path class="marker autocom-deutschland" d="M176.44,38.19a2.5,2.5,0,0,0-2.5,2.5,2.53,2.53,0,0,0,.33,1.25l2.17,3.75,2.16-3.75a2.54,2.54,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring autocom-deutschland" d="M176.44,38.19a2.5,2.5,0,0,0-2.5,2.5,2.53,2.53,0,0,0,.33,1.25l2.17,3.75,2.16-3.75a2.54,2.54,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Primo_PR" class="marker-wrap">
			<circle class="marker-dot" cx="175.42" cy="41.75" r="0.99"/>
			<path class="marker primo-pr" d="M175.27,38.65a2.49,2.49,0,0,0-2.16,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring primo-pr" d="M175.27,38.65a2.49,2.49,0,0,0-2.16,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Extrovert" class="marker-wrap">
			<circle class="marker-dot" cx="195.93" cy="61.14" r="0.99"/>
			<path class="marker extrovert" d="M195.78,58a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75A2.49,2.49,0,0,0,195.78,58Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring extrovert" d="M195.78,58a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75A2.49,2.49,0,0,0,195.78,58Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="CrottyCommunications" class="marker-wrap">
			<circle class="marker-dot" cx="158.09" cy="34.68" r="0.99"/>
			<path class="marker crotty-communications" d="M157.94,31.58a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.62.62,0,0,1-.63-.62.63.63,0,0,1,1.25,0,.62.62,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring crotty-communications" d="M157.94,31.58a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.62.62,0,0,1-.63-.62.63.63,0,0,1,1.25,0,.62.62,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Catalyst" class="marker-wrap">
			<circle class="marker-dot" cx="274.36" cy="97.76" r="0.99"/>
			<path class="marker catalyst" d="M274.22,94.66a2.49,2.49,0,0,0-2.17,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring catalyst" d="M274.22,94.66a2.49,2.49,0,0,0-2.17,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="TrueRelazionePubbliche" class="marker-wrap">
			<circle class="marker-dot" cx="179.33" cy="47.66" r="0.99"/>
			<path class="marker true-relazione-pubbliche" d="M179.18,44.56A2.51,2.51,0,0,0,177,48.31l2.17,3.75,2.16-3.75a2.49,2.49,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring true-relazione-pubbliche" d="M179.18,44.56A2.51,2.51,0,0,0,177,48.31l2.17,3.75,2.16-3.75a2.49,2.49,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="L45" class="marker-wrap"> 
			  <circle class="marker-dot" cx="176.05" cy="48.42" r="0.99"/>
			  <path class="marker l45" d="M175.9,45.32a2.5,2.5,0,0,0-2.5,2.5,2.53,2.53,0,0,0,.33,1.25l2.17,3.75,2.16-3.75a2.44,2.44,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/> 
			  <path class="marker-ring l45" d="M175.9,45.32a2.5,2.5,0,0,0-2.5,2.5,2.53,2.53,0,0,0,.33,1.25l2.17,3.75,2.16-3.75a2.44,2.44,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/> 
		  </g>
		  <g id="Axess_PR" class="marker-wrap">
			<circle class="marker-dot" cx="177.92" cy="49.54" r="0.99"/>
			<path class="marker axess-pr" d="M177.77,46.44a2.5,2.5,0,0,0-2.5,2.5,2.54,2.54,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.53,2.53,0,0,0,.33-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring axess-pr" d="M177.77,46.44a2.5,2.5,0,0,0-2.5,2.5,2.54,2.54,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.53,2.53,0,0,0,.33-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="INCComunicazione" class="marker-wrap">
			<circle class="marker-dot" cx="181.6" cy="54.86" r="0.99"/>
			<path class="marker inc-comunicazione" d="M181.45,51.75a2.5,2.5,0,0,0-2.5,2.5,2.55,2.55,0,0,0,.34,1.26l2.16,3.75,2.17-3.75a2.54,2.54,0,0,0,.33-1.26,2.5,2.5,0,0,0-2.5-2.5Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring inc-comunicazione" d="M181.45,51.75a2.5,2.5,0,0,0-2.5,2.5,2.55,2.55,0,0,0,.34,1.26l2.16,3.75,2.17-3.75a2.54,2.54,0,0,0,.33-1.26,2.5,2.5,0,0,0-2.5-2.5Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Kaiba" class="marker-wrap">
			<circle class="marker-dot" cx="348.88" cy="59.85" r="0.99"/>
			<path class="marker kaiba" d="M348.73,56.75a2.5,2.5,0,0,0-2.5,2.5,2.41,2.41,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring kaiba" d="M348.73,56.75a2.5,2.5,0,0,0-2.5,2.5,2.41,2.41,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Binsfeld" class="marker-wrap">
			<circle class="marker-dot" cx="172.74" cy="41.93" r="0.99"/>
			<path class="marker binsfeld" d="M172.59,38.83a2.5,2.5,0,0,0-2.5,2.5,2.53,2.53,0,0,0,.33,1.25l2.17,3.75,2.16-3.75a2.44,2.44,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring binsfeld" d="M172.59,38.83a2.5,2.5,0,0,0-2.5,2.5,2.53,2.53,0,0,0,.33,1.25l2.17,3.75,2.16-3.75a2.44,2.44,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Stratego" class="marker-wrap">
			<circle class="marker-dot" cx="59.74" cy="102.92" r="0.99"/>
			<path class="marker stratego" d="M59.59,99.82a2.5,2.5,0,0,0-2.5,2.5,2.53,2.53,0,0,0,.33,1.25l2.17,3.75,2.16-3.75a2.54,2.54,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring stratego" d="M59.59,99.82a2.5,2.5,0,0,0-2.5,2.5,2.53,2.53,0,0,0,.33,1.25l2.17,3.75,2.16-3.75a2.54,2.54,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="PublicDialog" class="marker-wrap">
			<circle class="marker-dot" cx="190.61" cy="36.82" r="0.99"/>
			<path class="marker public-dialog" d="M190.47,33.72a2.49,2.49,0,0,0-2.17,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring public-dialog" d="M190.47,33.72a2.49,2.49,0,0,0-2.17,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="CentraldeInformaçao" class="marker-wrap">
			<circle class="marker-dot" cx="155.09" cy="55.81" r="0.99"/>
			<path class="marker central-de-informacao" d="M154.94,52.71a2.5,2.5,0,0,0-2.5,2.5,2.44,2.44,0,0,0,.34,1.25l2.16,3.75,2.16-3.75a2.44,2.44,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,0-1.25.63.63,0,0,1,0,1.25Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring central-de-informacao" d="M154.94,52.71a2.5,2.5,0,0,0-2.5,2.5,2.44,2.44,0,0,0,.34,1.25l2.16,3.75,2.16-3.75a2.44,2.44,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,0-1.25.63.63,0,0,1,0,1.25Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="LopitoIleanaHowie" class="marker-wrap">
			<circle class="marker-dot" cx="77.88" cy="89.99" r="0.99"/>
			<path class="marker lopito-ileana-howie" d="M77.73,86.89a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.49,2.49,0,0,0-2.16-3.75Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring lopito-ileana-howie" d="M77.73,86.89a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.49,2.49,0,0,0-2.16-3.75Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="TheHousePRAgency" class="marker-wrap">
			<circle class="marker-dot" cx="198.03" cy="50.16" r="0.99"/>
			<path class="marker the-house-pr-agency" d="M197.88,47.06a2.5,2.5,0,0,0-2.5,2.5,2.39,2.39,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring the-house-pr-agency" d="M197.88,47.06a2.5,2.5,0,0,0-2.5,2.5,2.39,2.39,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		<!--
		  <g id="PRPartner" class="marker-wrap">
			<circle class="marker-dot" cx="211.35" cy="29.52" r="0.99"/>
			<path class="marker pr-partner" d="M211.2,26.42A2.51,2.51,0,0,0,209,30.17l2.17,3.75,2.16-3.75a2.49,2.49,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring pr-partner" d="M211.2,26.42A2.51,2.51,0,0,0,209,30.17l2.17,3.75,2.16-3.75a2.49,2.49,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		-->
		  <g id="W7Worldwide" class="marker-wrap">
			<circle class="marker-dot" cx="218.02" cy="85.1" r="0.99"/>
			<path class="marker w7-worldwide" d="M217.87,82a2.5,2.5,0,0,0-2.5,2.5,2.44,2.44,0,0,0,.34,1.25l2.16,3.75L220,85.75a2.44,2.44,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring w7-worldwide" d="M217.87,82a2.5,2.5,0,0,0-2.5,2.5,2.44,2.44,0,0,0,.34,1.25l2.16,3.75L220,85.75a2.44,2.44,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="MangoOMC" class="marker-wrap">
			<circle class="marker-dot" cx="189.06" cy="163.15" r="0.99"/>
			<path class="marker mango-omc" d="M188.91,160.05a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.49,2.49,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring mango-omc" d="M188.91,160.05a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.49,2.49,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
		  </g> 
		  <g id="Evercom" class="marker-wrap">
			<circle class="marker-dot" cx="163.33" cy="55.41" r="0.99"/>
			<path class="marker evercom" d="M163.18,52.31A2.51,2.51,0,0,0,161,56.06l2.17,3.75,2.16-3.75a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring evercom" d="M163.18,52.31A2.51,2.51,0,0,0,161,56.06l2.17,3.75,2.16-3.75a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="ComunicaciónIberoamericana" class="marker-wrap">
			<circle class="marker-dot" cx="159.14" cy="56.09" r="0.99"/>
			<path class="marker comunicacion-iberoamericana" d="M159,53a2.51,2.51,0,0,0-2.17,3.75L159,60.49l2.16-3.75A2.49,2.49,0,0,0,159,53Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring comunicacion-iberoamericana" d="M159,53a2.51,2.51,0,0,0-2.17,3.75L159,60.49l2.16-3.75A2.49,2.49,0,0,0,159,53Zm0,3.12a.63.63,0,1,1,.62-.62.63.63,0,0,1-.62.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="AlanaConsultores" class="marker-wrap">
			<circle class="marker-dot" cx="161.37" cy="56.71" r="0.99"/>
			<path class="marker alana-consultores" d="M161.22,53.61a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.49,2.49,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring alana-consultores" d="M161.22,53.61a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.49,2.49,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="Publik" class="marker-wrap">
			<circle class="marker-dot" cx="186.33" cy="23.35" r="0.99"/>
			<path class="marker publik" d="M186.18,20.25A2.51,2.51,0,0,0,184,24l2.17,3.75L188.34,24a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring publik" d="M186.18,20.25A2.51,2.51,0,0,0,184,24l2.17,3.75L188.34,24a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="YardstickMarketing" class="marker-wrap">
			<circle class="marker-dot" cx="239.39" cy="80.15" r="0.99"/>
			<path class="marker yardstick-marketing" d="M239.24,77.05a2.49,2.49,0,0,0-2.16,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring yardstick-marketing" d="M239.24,77.05a2.49,2.49,0,0,0-2.16,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="HoustonThunderbird" class="marker-wrap">
			<circle class="marker-dot" cx="166.98" cy="33.31" r="0.99"/>
			<path class="marker houston-thunderbird" d="M166.83,30.21a2.5,2.5,0,0,0-2.5,2.5,2.39,2.39,0,0,0,.34,1.25l2.16,3.75L169,34a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring houston-thunderbird" d="M166.83,30.21a2.5,2.5,0,0,0-2.5,2.5,2.39,2.39,0,0,0,.34,1.25l2.16,3.75L169,34a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="RedwoodConsulting" class="marker-wrap">
			<circle class="marker-dot" cx="164.34" cy="34.95" r="0.99"/>
			<path class="marker redwood-consulting" d="M164.19,31.85a2.5,2.5,0,0,0-2.5,2.5A2.41,2.41,0,0,0,162,35.6l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.12a.62.62,0,0,1-.62-.62.63.63,0,1,1,.62.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring redwood-consulting" d="M164.19,31.85a2.5,2.5,0,0,0-2.5,2.5A2.41,2.41,0,0,0,162,35.6l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.12a.62.62,0,0,1-.62-.62.63.63,0,1,1,.62.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="NexusCommunicationsGroup" class="marker-wrap">
			<circle class="marker-dot" cx="166.83" cy="37.41" r="0.99"/>
			<path class="marker nexus-communications-group" d="M166.68,34.31a2.5,2.5,0,0,0-2.5,2.5,2.44,2.44,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.53,2.53,0,0,0,.33-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring nexus-communications-group" d="M166.68,34.31a2.5,2.5,0,0,0-2.5,2.5,2.44,2.44,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.53,2.53,0,0,0,.33-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="TheMaggiFoxConsultancy" class="marker-wrap">
			<circle class="marker-dot" cx="163" cy="38.49" r="0.99"/>
			<path class="marker the-maggie-fox-consultancy" d="M162.85,35.76a2.5,2.5,0,0,0-2.5,2.5,2.44,2.44,0,0,0,.34,1.25l2.16,3.75L165,39.51a2.53,2.53,0,0,0,.33-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring the-maggie-fox-consultancy" d="M162.85,35.76a2.5,2.5,0,0,0-2.5,2.5,2.44,2.44,0,0,0,.34,1.25l2.16,3.75L165,39.51a2.53,2.53,0,0,0,.33-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="McOnieThunderbird" class="marker-wrap">
			<circle class="marker-dot" cx="165.2" cy="39.12" r="0.99"/>
			<path class="marker mconie-thunderbird" d="M165.05,36a2.5,2.5,0,0,0-2.5,2.5,2.54,2.54,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.53,2.53,0,0,0,.33-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring mconie-thunderbird" d="M165.05,36a2.5,2.5,0,0,0-2.5,2.5,2.54,2.54,0,0,0,.34,1.25l2.16,3.75,2.17-3.75a2.53,2.53,0,0,0,.33-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.12a.63.63,0,1,1,.63-.62.62.62,0,0,1-.63.62Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="AkhiaPublicRelations" class="marker-wrap">
			<circle class="marker-dot" cx="60.97" cy="53.18" r="0.99"/>
			<path class="marker akhia-public-relations" d="M60.82,50.08a2.5,2.5,0,0,0-2.5,2.5,2.41,2.41,0,0,0,.34,1.25l2.16,3.75L63,53.83a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring akhia-public-relations" d="M60.82,50.08a2.5,2.5,0,0,0-2.5,2.5,2.41,2.41,0,0,0,.34,1.25l2.16,3.75L63,53.83a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="CVM" class="marker-wrap">
			<circle class="marker-dot" cx="71.35" cy="54.79" r="0.99"/>
			<path class="marker cvm" d="M71.23,51.69a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.49,2.49,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring cvm" d="M71.23,51.69a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.49,2.49,0,0,0-2.16-3.75Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="JPAHealthCommunications" class="marker-wrap">
			<circle class="marker-dot" cx="66.65" cy="58" r="0.99"/>
			<path class="marker jpa-health-communications" d="M66.52,54.9a2.49,2.49,0,0,0-2.16,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring jpa-health-communications" d="M66.52,54.9a2.49,2.49,0,0,0-2.16,3.75l2.16,3.75,2.17-3.75a2.51,2.51,0,0,0-2.17-3.75Zm0,3.13a.63.63,0,1,1,.63-.63.63.63,0,0,1-.63.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		  <g id="MekkyMedia" class="marker-wrap">
			<circle class="marker-dot" cx="50.87" cy="51.93" r="0.99"/>
			<path class="marker mekky-media" d="M50.75,48.83a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
			<path class="marker-ring mekky-media" d="M50.75,48.83a2.51,2.51,0,0,0-2.17,3.75l2.17,3.75,2.16-3.75a2.41,2.41,0,0,0,.34-1.25,2.5,2.5,0,0,0-2.5-2.5Zm0,3.13a.63.63,0,1,1,.62-.63.63.63,0,0,1-.62.63Z" transform="translate(0.13 0.6)"/>
		  </g>
		</svg>          
				<div class="info-wrap">
					<div class="close location-close" style="display:none;"><a class="tog open" href="#"></a></div>			 
					<div class="info carvajal">
						Carvajal PR Team<br/>
						<span>Buenos Aires, Argentina</span>
					</div>		 
					<div class="info procomm">
						ProComm<br/>
						<span>Wien, Austria</span>
					</div>		 
					<div class="info luna">
						Luna<br/>
						<span>Hoeilaart, Belgium</span>
					</div>		 
					<div class="info textual">
						Textual Comunicaçao<br/>
						<span>Rio de Janeiro, Brasil</span>
					</div>		 
					<div class="info headline">
						HEADline Communication Strategies<br/>
						<span>Santiago, Chile</span>
					</div> 		 
					<div class="info blue-focus">
						Blue Focus<br/>
						<span>Beijing, China</span>
					</div> 		 
					<div class="info high-results">
						High Results<br/>
						<span>Bogotá, Colombia</span>
					</div>		 
					<div class="info crest-communications">
						Crest Communications<br/>
						<span>Praha 1, Czech Republic</span>
					</div>		 
					<div class="info kragelund-kommunikation">
						Kragelund Kommunikation<br/>
						<span>Aarhus C, Denmark</span>
					</div>		 
					<div class="info pro-concept">
						Pro Concept<br/>
						<span>Tallinn, Estonia</span>
					</div>		 
					<div class="info harkonsalo-vesa">
						Harkonsalo &amp; Vesa<br/>Public Relations<br/>
						<span>Espoo, Finland</span>
					</div>		 
					<div class="info monet-associes">
						Monet + Associes<br/>
						<span>Paris, France</span>
					</div>		 
					<div class="info passerelles">
						Passerelles<br/>
						<span>Bordeaux, France</span>
					</div>		 
					<div class="info autocom-deutschland">
						AutoCom Deutschland<br/>
						<span>Rheinbreitbach, Germany</span>
					</div>		 
					<div class="info jpkom">
						JP-Kom<br/>
						<span>Düsseldorf, Germany</span>
					</div>		 
					<div class="info presigno">
						Presigno<br/>
						<span>Dortmund, Germany</span>
					</div>		 
					<div class="info primo-pr">
						Primo PR<br/>
						<span>Frankfurt, Germany</span>
					</div> 
					<div class="info schwan-communications">
						Schwan Communications	<br/>
						<span>Hamburg, Germany</span>
					</div>
					<div class="info tdub">
						TDUB Kommunikations Beratung<br/>
						<span>Hamburg, Germany</span>
					</div>
					<div class="info extrovert">
						Extrovert<br/>
						<span>Athens, Greece</span>
					</div>
					<div class="info crotty-communications">
						Crotty Communications<br/>
						<span>Dublin, Ireland</span>
					</div>
					<div class="info catalyst">
						Catalyst Public Relations<br/>
						<span>Tamil Nadu, India</span>
					</div>
					<div class="info l45">
						L45 <br/>
						<span>Milano, Italy</span>
					</div>
					<div class="info axess-pr">
						Axess PR<br/>
						<span>Monza, Italy</span>
					</div>
					<div class="info inc-comunicazione">
						INC Comunicazione<br/>
						<span>Rome, Italy</span>
					</div>
					<div class="info true-relazione-pubbliche">
						True Relazione Pubbliche<br/>
						<span>Milano, Italy</span>
					</div>
					<div class="info kaiba">
						Kaiba<br/>
						<span>Miura City, Japan</span>
					</div>
					<div class="info binsfeld">
						Binsfeld<br/>
						<span>Luxembourg, Luxembourg</span>
					</div>
					<div class="info gribnau-communicatie">
						Gribnau Communicatie<br/>
						<span>Bussum, Netherlands</span>
					</div>
					<div class="info stratego">
						Stratego<br/>
						<span>Panama City, Panama</span>
					</div>
					<div class="info public-dialog">
						Public Dialog<br/>
						<span>Warszawa, Poland</span>
					</div>
					<div class="info central-de-informacao">
						Central de Informaçao<br/>
						<span>Porto, Portugal</span>
					</div>
					<div class="info lopito-ileana-howie">
						Lopito, Ileana &amp; Howie<br/>
						<span>Guyanabo, Puerto Rico</span>
					</div> 
					<div class="info the-house-pr-agency">
						The House PR Agency<br/>
						<span>Bucharest, Romania</span>
					</div>
					<!--
					<div class="info pr-partner">
						PR Partner<br/>
						<span>Moscow, Russia</span>
					</div>
					-->
					<div class="info w7-worldwide">
						W7 Woldwide<br/>
						<span>Jeddah, Saudi Arabia</span>
					</div>
					<div class="info mango-omc">
						Mango-OMC<br/>
						<span>Cape Town, South Africa</span>
					</div> 
					<div class="info alana-consultores">
						Alana Consultores / Euromedia<br/>
						<span>Madrid, Spain</span>
					</div>
					<div class="info comunicacion-iberoamericana">
						Comunicación Iberoamericana<br/>
						<span>Madrid, Spain</span>
					</div>
					<div class="info evercom">
						Evercom<br/>
						<span>Madrid, Spain</span>
					</div>
					<div class="info publik">
						Publik<br/>
						<span>Stockholm, Sweden</span>
					</div>
					<div class="info yardstick-marketing">
						Yardstick Marketing<br/>
						<span>Dubai, UAE</span>
					</div>
					<div class="info mconie-thunderbird">
						McOnie / Thunderbird<br/>
						<span>Godalming, United Kingdom</span>
					</div>
					<div class="info nexus-communications-group">
						Nexus Communications Group<br/>
						<span>London, United Kingdom</span>
					</div>
					<div class="info the-maggie-fox-consultancy">
						The Maggie Fox Consultancy<br/>
						<span>Wiltshire, United Kingdom</span>
					</div>
					<div class="info redwood-consulting">
						Redwood Consulting<br/>
						<span>London, United Kingdom</span>
					</div> 
					<div class="info houston-thunderbird">
						Houston / Thunderbird<br/>
						<span>London, United Kingdom</span>
					</div> 
					<div class="info akhia-public-relations">
						Akhia Public Relations<br/>
						<span>Ohio, USA</span>
					</div>
					<div class="info cvm">
						Channel V Media<br/>
						<span>New York, USA</span>
					</div>
					<div class="info jpa-health-communications">
						JPA Health Communications<br/>
						<span>Washington, DC, USA</span>
					</div>
					<div class="info mekky-media">
						Mekky Media<br/>
						<span>Illinois, USA</span>
					</div> 

				</div>  

		</div> 
	<style type="text/css"> 
		.overview-description .white p {color:#ffffff !important;}
		.overview-description .black p {color:#222222 !important;}
		.overview-description .dark-purple p {color:#292560 !important;}
		.overview-description .purple p {color:#3a357e !important;}
		.overview-description .light-purple p {color:#5a53af !important;}
		.overview-description .dark-pink p {color:#c11d8d !important;} 
		.overview-description .pink p {color:#cc2a9a !important;}  
		.overview-description .blue {color:#399ec7 !important;}
		.overview-description .steel-blue p {color:#2c6194 !important;}
		.overview-description .orange p {color:#e79f2d !important;}
		.overview-description .yellow p {color:#dfe445 !important;}
		.overview-description .green p {color:#00898E !important;} 
		.overview-description .gray p {color:#777777 !important;}
		.overview-description .gray1 p {color:#F4F4F4 !important;}
		.overview-description .gray2 p {color:#EFEEED !important;}
		.overview-description .gray3 p {color:#e5e6e5 !important;}
		.overview-description .gray4 p {color:#6E6F71 !important;}
		.overview-description .gray5 p {color:#3E3E3E !important;}
		.overview-description .gray6 p {color:#231F20 !important;}
		.overview-description .gray7 p {color:#CCCCCC !important;}

		@media screen and (max-width: 767px) { 
		} 
	</style> 	
	
</section> 