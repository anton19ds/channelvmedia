<?php
/**
 * Circle Nav List Block Template.
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
// Load values and assing defaults.
$vis_nav_headline = get_field('vis_nav_headline') ?: 'Headline';
$vis_nav_list = get_field('vis_nav_list') ?: 'List';
$vis_nav_description = get_field('vis_nav_description') ?: 'Description';
?>
<section <?php if((get_field('vis_section_id')) == true) { echo'id="' . get_field('vis_section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php if((get_field('vis_background_color')) == true) { echo' ' . get_field('vis_background_color') . ''; } ?> <?php if((get_field('vis_double_slashes')) == true) { echo' bg-double-sashes'; } ?> <?php if(get_field('vis_top_margin')) { echo ' ' . get_field('vis_top_margin') . ''; } ?><?php if(get_field('vis_bottom_margin')) { echo ' ' . get_field('vis_bottom_margin') . ''; } ?> <?php if(get_field('vis_top_padding')) { echo ' ' . get_field('vis_top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('vis_bottom_padding')) { echo ' ' . get_field('vis_bottom_padding') . ''; } else {echo' pb1';} ?> clearfix">

	<?php if(get_field('vis_background_photo')) { echo '<div class="color-overlay bg-common clearfix'; } ?>
		<?php if((get_field('vis_background_photo_opacity')) == true) { echo ' ' . get_field('vis_background_photo_opacity') . ''; } ?>
		<?php if(get_field('vis_background_photo')) { echo '" style="'; } ?>
		<?php if(get_field('vis_background_photo')) { echo 'background-image:url(' . get_field('vis_background_photo') . ');'; } ?><?php if((get_field('vis_background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?>
	<?php if(get_field('vis_background_photo')) { echo '"></div>'; } ?> 

	<?php if(get_field('vis_background_color_filter')) { echo '<div class="color-overlay ' . get_field('vis_background_color_filter') . ''; } ?><?php if((get_field('vis_background_color_filter_opacity')) == true) { echo ' ' . get_field('vis_background_color_filter_opacity') . ' '; } ?><?php if(get_field('vis_background_color_filter')) { echo ' clearfix"></div>'; } ?>

	<div class="grid-page clearfix">

		<?php if(get_field('vis_content_width') || get_field('vis_content_top_padding') || get_field('vis_content_bottom_padding') || get_field('vis_content_position')) { echo '<div class="pb2 ' . get_field('vis_content_width') . ''; } ?><?php if(get_field('vis_content_position')) { echo ' ' . get_field('vis_content_position') . ''; } else { echo' mauto';} ?><?php if(get_field('vis_content_top_padding')) { echo ' ' . get_field('vis_content_top_padding') . ''; } ?><?php if(get_field('vis_content_bottom_padding')) { echo ' ' . get_field('vis_content_bottom_padding') . ''; } ?><?php if(get_field('vis_content_width') || get_field('vis_content_top_padding') || get_field('vis_content_bottom_padding') || get_field('vis_content_position')) { echo ' clearfix">'; } ?>

			 <!-- START CONTENT -->
            <?php
            // check if the flexible content field has rows of data
            if( have_rows('vis_headlines_content') ): ?> 
            <?php 
                 // loop through the rows of data
                while ( have_rows('vis_headlines_content') ) : the_row(); ?>  
					<?php // Label
						if( get_row_layout() == 'vis_content_label' ): ?> 
						<?php if(get_sub_field('vis_label')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('vis_label_top_margin')) { echo ' ' . get_sub_field('vis_label_top_margin') . ''; } ?><?php if(get_sub_field('vis_label_bottom_margin')) { echo ' ' . get_sub_field('vis_label_bottom_margin') . ''; } ?><?php if(get_sub_field('vis_label')) { echo ' clearfix">'; } ?>   
 
							<?php if(get_sub_field('vis_label')) { echo '
								<p class="sp-small mt0 mb20'; } ?><?php if(get_sub_field('vis_label_color')) { echo ' ' . get_sub_field('vis_label_color') . ''; } ?><?php if(get_sub_field('vis_label_shadow')) { echo ' ' . get_sub_field('vis_label_shadow') . ''; } ?><?php if(get_sub_field('vis_label_alignment')) { echo ' ' . get_sub_field('vis_label_alignment') . ''; } ?><?php if(get_sub_field('vis_label')) { echo '">' . get_sub_field('vis_label') . '</p>'; } ?> 
		
						<?php if(get_sub_field('vis_label')) { echo '</div>'; } ?>  
					<?php endif; ?> 
                    <?php // Headlines 
						if( get_row_layout() == 'vis_content_headlines' ): ?> 
							<?php if((get_sub_field('vis_headline')) == true ) { echo '<h2 class="block-headline_alt '; } ?><?php if(get_sub_field('vis_headline_color')) { echo ' ' . get_sub_field('vis_headline_color') . ''; } ?><?php if(get_sub_field('vis_headline_shadow')) { echo ' ' . get_sub_field('vis_headline_shadow') . ''; } ?><?php if(get_sub_field('vis_headline_top_margin')) { echo ' ' . get_sub_field('vis_headline_top_margin') . ''; } ?><?php if(get_sub_field('vis_headline_bottom_margin')) { echo ' ' . get_sub_field('vis_headline_bottom_margin') . ''; } ?><?php if(get_sub_field('vis_headline_align')) { echo ' ' . get_sub_field('vis_headline_align') . ''; } ?><?php if(get_sub_field('vis_headline')) { echo '">' . get_sub_field('vis_headline') . ''; } ?><?php if((get_sub_field('vis_headline')) == true ) { echo '</h2>'; } ?> 
                    <?php endif; ?>
                    <?php // Subheadlines
						if( get_row_layout() == 'vis_content_subheadlines' ): ?> 
							<?php if((get_sub_field('vis_subheadline')) == true ) { echo '<span class="block-subheadline pt0 pb0 '; } ?><?php if(get_sub_field('vis_subheadline_color')) { echo ' ' . get_sub_field('vis_subheadline_color') . ''; } ?><?php if(get_sub_field('vis_subheadline_shadow')) { echo ' ' . get_sub_field('vis_subheadline_shadow') . ''; } ?><?php if(get_sub_field('vis_subheadline_top_margin')) { echo ' ' . get_sub_field('vis_subheadline_top_margin') . ''; } ?><?php if(get_sub_field('vis_subheadline_bottom_margin')) { echo ' ' . get_sub_field('vis_subheadline_bottom_margin') . ''; } ?><?php if(get_sub_field('vis_subheadline_align')) { echo ' ' . get_sub_field('vis_subheadline_align') . ''; } ?><?php if(get_sub_field('vis_subheadline')) { echo '">' . get_sub_field('vis_subheadline') . ''; } ?><?php if((get_sub_field('vis_subheadline')) == true ) { echo '</span>'; } ?> 
                    <?php endif; ?>
                    <?php // Text
						if( get_row_layout() == 'vis_content_text' ): ?>
						<?php if(get_sub_field('vis_description')) { echo '<p class="sp mt0'; } ?><?php if(get_sub_field('vis_description_color')) { echo ' ' . get_sub_field('vis_description_color') . ''; } ?><?php if(get_sub_field('vis_description_shadow')) { echo ' ' . get_sub_field('vis_description_shadow') . ''; } ?><?php if(get_sub_field('vis_description_top_margin')) { echo ' ' . get_sub_field('vis_description_top_margin') . ''; } ?><?php if(get_sub_field('vis_description_bottom_margin')) { echo ' ' . get_sub_field('vis_description_bottom_margin') . ''; } ?><?php if(get_sub_field('vis_description')) { echo ' clearfix">' . get_sub_field('vis_description') . '</p>'; } ?>
                    <?php endif; ?> 
                     <?php // Buttons 
						if( get_row_layout() == 'vis_buttons_text_links' ): ?> 
						<?php if(get_sub_field('vis_buttons')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('vis_buttons_top_margin')) { echo ' ' . get_sub_field('vis_buttons_top_margin') . ''; } ?><?php if(get_sub_field('vis_buttons_bottom_margin')) { echo ' ' . get_sub_field('vis_buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('vis_buttons')) { echo ' clearfix">'; } ?> 
	 
							<!-- start repeater-list --> 
							<?php if( have_rows('vis_buttons') ): $pr = 0;
							echo '<p class="mt0 mb0 down-arrow-container">';
							// loop through the rows of data
							while ( have_rows('vis_buttons') ) : the_row(); ?>
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="right-link'; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('text_shadow') && get_sub_field('link') ) { echo '' . get_sub_field('text_shadow') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
								<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
							<?php endwhile; echo '</p>'; endif; ?> 
							<!-- end repeater-list --> 

						<?php if(get_sub_field('vis_buttons')) { echo '</div>'; } ?>  
                    <?php endif; ?>
	                
					<?php endwhile; // end loop through the rows of data
						else :
						// no layouts found
             		?> 
            <?php endif; ?><?php wp_reset_query(); ?>
			 <!-- END CONTENT -->

		<?php if(get_field('vis_content_width') || get_field('vis_content_top_padding') || get_field('vis_content_bottom_padding') || get_field('vis_content_position')) { echo '</div>'; } ?>	 

		<?php if(get_field('vis_nav_list')): $countcirc = 0; ?>
			<ul class="vis-nav-list-flex<?php if(get_field('vis_nav_item_count')) { echo ' ' . get_field('vis_nav_item_count') . ''; } ?>">
			<?php while(has_sub_field('vis_nav_list')): $countcirc++; ?>
				<li>
					<span class="height-control"></span>
					<?php if(get_sub_field('vis_nav_button_link')) { echo '<a href="' . get_sub_field('vis_nav_button_link') . '" role="link">'; } else { echo'<div class="no-link">';} ?>
						<?php if((get_sub_field('vis_nav_hud')) == true ) { echo '<div class="hud-container">
						  <div id="hud">
							<svg version="1.1" id="heads_up_display" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1094 1141.6" style="enable-background:new 0 0 1094 1141.6;" xml:space="preserve">
							  <defs>
								<filter id="softGlowBlue" height="300%" width="300%" x="-75%" y="-75%">
								  <feMorphology operator="dilate" radius="4" in="SourceAlpha" result="thicken"></feMorphology>
								  <feGaussianBlur in="thicken" stdDeviation="10" result="blurred"></feGaussianBlur>
								  <feFlood flood-color="rgb(0,186,255)" result="glowColor"></feFlood>
								  <feComposite in="glowColor" in2="blurred" operator="in" result="softGlow_colored"></feComposite>
								  <feMerge>
									<feMergeNode in="softGlow_colored"></feMergeNode>
									<feMergeNode in="SourceGraphic"></feMergeNode>
								  </feMerge>
								</filter>

								<filter id="softGlowRed" height="300%" width="300%" x="-75%" y="-75%">
								  <feMorphology operator="dilate" radius="4" in="SourceAlpha" result="thicken"></feMorphology>
								  <feGaussianBlur in="thicken" stdDeviation="10" result="blurred"></feGaussianBlur>
								  <feFlood flood-color="rgb(234,58,45)" result="glowColor"></feFlood>
								  <feComposite in="glowColor" in2="blurred" operator="in" result="softGlow_colored"></feComposite>
								  <feMerge>
									<feMergeNode in="softGlow_colored"></feMergeNode>
									<feMergeNode in="SourceGraphic"></feMergeNode>
								  </feMerge>
								</filter>
							  </defs>
							<g>
							  <path class="hatching" d="M832.9,239.1l-43.9,50.2l1.4,1.2l43.9-50.1L832.9,239.1 M299.4,257.7l-22.2-26.3l1.4-1.2l22.2,26.3
								L299.4,257.7z M357.9,218.8l-16.7-30l1.6-0.9l16.7,30L357.9,218.8z M427.5,188.5l-10.7-32.6l1.8-0.6l10.7,32.6L427.5,188.5z
								 M501.7,172l-4.2-34l1.8-0.2l4.2,34L501.7,172z M579.5,170l-1.8-0.1l2.4-34.2l1.8,0.1L579.5,170z M654.4,182.7l-1.8-0.5l8.9-33.1
								l1.8,0.5L654.4,182.7 M725.5,209.3l-1.7-0.8l15.1-30.9l1.7,0.8L725.5,209.3z M790.2,248.8l-1.5-1.2l20.8-27.4l1.5,1.1L790.2,248.8z
								 M551.8,134.7h-1.9v66.4h1.8L551.8,134.7 M311.6,248.8l-20.8-27.4l1.5-1.1l20.8,27.4L311.6,248.8z M376.3,209.2l-15.1-30.8l1.6-0.8
								l15.1,30.8L376.3,209.2z M447.4,182.7l-8.9-33.1l1.8-0.5l8.9,33.1L447.4,182.7z M522.3,170l-2.4-34.3l1.8-0.1l2.4,34.2L522.3,170z
								 M600.1,172l-1.8-0.2l4.2-34l1.8,0.2L600.1,172z M674.2,188.5l-1.8-0.6l10.7-32.6l1.8,0.6L674.2,188.5z M743.9,218.8l-1.6-0.9
								l16.7-30l1.6,0.9L743.9,218.8z M824.2,231.2l1.4,1.2l-22.2,26.2l-1.4-1.2 M268.8,239l-1.4,1.2l43.9,50.2l1.4-1.2L268.8,239
								 M328.4,236.8l-19.3-28.4l1.5-1l19.3,28.4L328.4,236.8z M395.1,200.7l-13.5-31.6l1.7-0.7l13.5,31.6L395.1,200.7 M467.6,177.8
								l-7.2-33.6l1.8-0.4l7.2,33.6L467.6,177.8z M537,169.1l-0.6-34.3h1.8l0.6,34.3H537z M620.6,175.1l-1.8-0.3l6-33.8l1.8,0.3
								L620.6,175.1z M693.8,195.5l-1.7-0.7l12.4-32l1.7,0.7L693.8,195.5z M761.7,229.3l-1.6-1l18.3-29.1l1.6,1L761.7,229.3z M345.9,225.7
								l-17.8-29.4l1.6-1l17.8,29.4L345.9,225.7z M414.4,193l-11.8-32.2l1.7-0.6l11.8,32.2L414.4,193z M487.9,174l-5.4-33.9l1.8-0.3
								l5.4,33.9L487.9,174z M564.6,169.2l-1.8-0.1l1.2-34.3l1.8,0.1L564.6,169.2z M640.9,179.2l-1.8-0.4l7.8-33.4l1.8,0.4L640.9,179.2z
								 M712.9,203.4l-1.7-0.8l14-31.3l1.7,0.8L712.9,203.4z M778.9,240.7l-1.5-1l19.8-28.1l1.5,1.1L778.9,240.7z M269.4,891.7l43.9-50.2
								l-1.4-1.2L268,890.4L269.4,891.7 M802.9,873l22.2,26.3l-1.4,1.2l-22.2-26.3L802.9,873z M744.4,911.9l16.7,30l-1.6,0.9l-16.7-30
								L744.4,911.9z M674.8,942.2l10.7,32.6l-1.8,0.6l-10.7-32.6L674.8,942.2z M600.7,958.7l4.2,34l-1.8,0.2l-4.2-34L600.7,958.7z
								 M522.9,960.7l1.8,0.1l-2.4,34.2l-1.8-0.1L522.9,960.7z M447.9,948.1l1.8,0.5l-8.9,33.1l-1.8-0.5L447.9,948.1 M376.8,921.5l1.6,0.8
								l-15.1,30.8l-1.6-0.8L376.8,921.5z M312.1,881.9l1.5,1.1l-20.8,27.4l-1.5-1.1L312.1,881.9z M550.5,996h1.8v-66.4h-1.8V996
								 M790.7,881.9l20.8,27.4l-1.5,1.1L789.3,883L790.7,881.9z M726.1,921.5l15.1,30.8l-1.7,0.8l-15.1-30.8L726.1,921.5z M654.9,948.1
								l8.9,33.1l-1.8,0.5l-8.9-33.1L654.9,948.1z M580,960.7l2.4,34.2l-1.8,0.1l-2.4-34.2L580,960.7z M502.2,958.7l1.8,0.2l-4.2,34
								l-1.8-0.2L502.2,958.7z M428.1,942.2l1.8,0.6l-10.7,32.6l-1.8-0.6L428.1,942.2z M358.5,911.9l1.6,0.9l-16.7,30l-1.6-0.9
								L358.5,911.9z M278.2,899.5l-1.4-1.2l22.2-26.3l1.4,1.2 M833.5,891.7l1.4-1.2l-43.9-50.2l-1.4,1.2L833.5,891.7 M773.9,893.9
								l19.3,28.4l-1.5,1l-19.3-28.4L773.9,893.9z M707.2,930.1l13.5,31.6l-1.7,0.7l-13.5-31.6L707.2,930.1 M634.8,953l7.2,33.5l-1.8,0.4
								l-7.2-33.5L634.8,953z M565.3,961.7l0.6,34.3h-1.8l-0.6-34.3H565.3z M481.7,955.6l1.8,0.3l-6,33.8l-1.8-0.3L481.7,955.6z
								 M408.6,935.3l1.7,0.7l-12.4,32l-1.7-0.7L408.6,935.3z M340.6,901.4l1.6,1l-18.3,29.1l-1.6-1L340.6,901.4z M756.4,905l17.8,29.4
								l-1.6,1L754.8,906L756.4,905z M687.9,937.7l11.8,32.2l-1.7,0.6l-11.8-32.2L687.9,937.7z M614.4,956.7l5.4,33.9l-1.8,0.3l-5.4-33.9
								L614.4,956.7z M537.7,961.5l1.8,0.1l-1.2,34.3l-1.8-0.1L537.7,961.5z M461.4,951.5l1.8,0.4l-7.8,33.4l-1.8-0.4L461.4,951.5z
								 M389.4,927.3l1.7,0.8l-14,31.3l-1.7-0.8L389.4,927.3z M323.4,890l1.5,1.1l-19.8,28.1l-1.5-1.1L323.4,890z"></path>
							  <g class="outer-ring outer-ring-blue">
								<path class="trace" d="M1061.5,750.9c-68.7,194.8-246.1,341.4-465.1,360.1c-218.7,18.7-418.2-95.5-519-275.4 M40.3,387.1
								  C109.8,194,286.4,48.9,504.2,30.3c216.3-18.5,413.7,92.9,515.6,269.4"></path>
								<path class="glow" d="M995.9,879.4c-154.4,223.9-451,298.3-692.8,174 M139.2,217.4c125.2-145.9,281.8-179.9,365-187
								  c58-5,116.5-0.6,173.1,13"></path>
							  </g>
							  <g class="outer-ring outer-ring-red">
								<path class="trace" d="M900,244.3c123.6,131.4,166.3,328.1,93,505.9c-73.2,177.6-241.7,287-421.7,293.4 M208.4,893
								  c-122-131.3-163.8-326.8-90.9-503.7c72.4-175.6,238-284.6,415.7-293.2"></path>
								<path class="glow" d="M1028.6,587.6c-9.6,248.3-209,447.1-457.3,456 M81.7,556.8c5-169.2,99.5-322.9,248.2-403.8"></path>
							  </g>
							  <path id="Ellipse_9_copy_2" class="inner-ring" d="M672.2,896c-78.3,29.3-164.6,29.5-243.1,0.6 M430.1,243.2
								c78.8-28.7,165.2-28.1,243.6,1.6"></path>
							</g>
							</svg>

						  </div>
						</div> <!-- end hud -->'; } ?>  
					
						<style type="text/css">
						<?php if(get_sub_field('vis_nav_photo_webp')) { ?> 
								.webp .bg-circ-nav<?php echo $countcirc ?> {
									background-image: url('<?php if(get_sub_field('vis_nav_photo_webp')) { echo '' . get_sub_field('vis_nav_photo_webp') . ''; } ?>');
								} 
								.wp-toolbar .bg-circ-nav<?php echo $countcirc ?>, .no-webp .bg-circ-nav<?php echo $countcirc ?> { 
									background-image: url('<?php if(get_sub_field('vis_nav_photo')) { echo '' . get_sub_field('vis_nav_photo') . ''; } ?>'); 
								} 
						<?php } else { ?> 
								.bg-circ-nav<?php echo $countcirc ?> {
									background-image: url('<?php if(get_sub_field('vis_nav_photo')) { echo '' . get_sub_field('vis_nav_photo') . ''; } ?>'); 
								}
						<?php } ?>
						</style>

						<?php if(get_sub_field('vis_nav_photo') || get_sub_field('vis_nav_photo_webp') == true) { echo '<span class="shape bg-common bg-circ-nav'; } ?><?php echo $countcirc ?><?php if(get_sub_field('vis_nav_photo') || get_sub_field('vis_nav_photo_webp') == true) { echo '"><span class="vis-nav-overlay opacity50 clearfix" style="display:none;"></span><span class="color-overlay-exact"></span>'; } ?>
						<?php if(get_sub_field('vis_nav_photo_overlay_color')) { echo '<div class="color-overlay ' . get_sub_field('vis_nav_photo_overlay_color') . ''; } ?><?php if((get_sub_field('vis_nav_photo_overlay_color_opacity')) == true) { echo ' ' . get_sub_field('vis_nav_photo_overlay_color_opacity') . ' '; } ?><?php if(get_sub_field('vis_nav_photo_overlay_color')) { echo ' clearfix"></div>'; } ?> 
						<?php if(get_sub_field('vis_nav_photo') || get_sub_field('vis_nav_photo_webp') == true) { echo '</span>'; } ?>
					
						<?php if((get_sub_field('vis_nav_headline') || get_sub_field('vis_nav_description') || get_sub_field('vis_nav_button_text')) == true ) { echo '<span class="inner clearfix">'; } ?>
							<?php if(get_sub_field('vis_nav_headline')) { echo '<h2 class="block-headline_alt mb0">' . get_sub_field('vis_nav_headline') . '</h2>'; } ?>
							<?php if(get_sub_field('vis_nav_description')) { echo '<p class="sp cb mt0 mb0">' . get_sub_field('vis_nav_description') . '</p>'; } ?>
							 
						<?php if((get_sub_field('vis_nav_headline') || get_sub_field('vis_nav_description') || get_sub_field('vis_nav_button_text')) == true ) { echo '</span>'; } ?>
						<?php if(get_sub_field('vis_nav_button_text')) { echo '<span class="inner-link clearfix"><p class="mt0 mb0 down-arrow-container"><span class="right-link white ts down-link-white mauto">' . get_sub_field('vis_nav_button_text') . '</span></p></span>'; } ?>
					
					<?php if(get_sub_field('vis_nav_button_link')) { echo '</a>'; } else { echo'</div>';} ?>
 				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>  

		<style type="text/css">
			.vis-nav-list-flex{display:flex;flex-flow:row wrap;float:left;gap:3%;margin:0 auto !important;padding:0 !important;position:relative;width:100%;max-width:1200px !important;}
			.vis-nav-list-flex li, .vis-nav-list-flex.four li {display:flex;flex:1 0 auto;flex-grow:1;margin:0 0 6% 0;padding:0;position:relative;width:22.66%;max-width:22.66%;}
			.vis-nav-list-flex.two li {width:48.5%;max-width:48.5%;}
			.vis-nav-list-flex.three li {width:31.33%;max-width:31.33%;}
			.vis-nav-list-flex.five li {width:17.5%;max-width:17.5%;}
			.vis-nav-list-flex.six li {width:14.16%;max-width:14.1%;}
			.vis-nav-list-flex li a {display:table;position:relative;transition:all .5s ease-in-out;width:100%;z-index:1;} 
			.vis-nav-list-flex li a:hover {cursor:pointer;transition:all .5s ease-in-out;}
			.vis-nav-list-flex li .no-link {display:table;position:relative;transition:all .5s ease-in-out;width:100%;z-index:1;}
			.vis-nav-list-flex li .shape {bottom:0;clip-path:circle(46% at 50% 50%);left:0;position:absolute;right:0;top:0;} 
			.vis-nav-overlay{background:linear-gradient(to right,transparent 0,transparent 25%,#000000 50%,transparent 75%,transparent 100%);bottom:0;height:100%;left:0;position:absolute;right:0;top:0;width:100%;}
			.vis-nav-list-flex li .height-control {margin-top:100%;}
			.vis-nav-list-flex li #hud svg {display:block;margin:0 auto;padding-top:10%;position:relative;max-height: 90%;max-width: 90%;}
			.vis-nav-list-flex li .inner {display:table-cell;margin:0 auto;padding:0;position:relative;text-align:center;width:100%;transition:all .5s ease-in-out;vertical-align:middle;z-index:1;}
			.vis-nav-list-flex li a .color-overlay-exact {background-color:transparent;background-color:rgba(58, 53, 126, 0.3);backdrop-filter:blur(0px);opacity:0;transition:all .3s ease-in-out;}
			.vis-nav-list-flex li a:hover .color-overlay-exact {background-color:#3a357e;background-color:rgba(58, 53, 126, 0.3);backdrop-filter:blur(5px);opacity:1.0;transition:all .3s ease-in-out;}
			.vis-nav-list-flex li .inner h2.block-headline_alt {color:#fff;font-size:30px;text-shadow: 0 2px 10px rgba(0, 0, 0, 0.7);transform:scale(1.0);}
			.vis-nav-list-flex.five li .inner h2.block-headline_alt, .vis-nav-list-flex.six li .inner h2.block-headline_alt {font-size:24px;}
			.vis-nav-list-flex li a:hover h2.block-headline_alt {color:#fff;cursor:pointer;transform:scale(1.0);transition:all .5s ease-in-out;}  
			.vis-nav-list-flex li .inner p.sp {color:#fff;text-shadow: 0 2px 10px rgba(0, 0, 0, 0.7);}
			.vis-nav-list-flex li .inner-link {bottom:-20px;display:block;float:left;left:0;min-height:10px;position:absolute;right:0;width:100% !important;}
			.vis-nav-list-flex li a:hover .inner-link .right-link::after {left:5px !important;}
			.vis-nav-list-flex li .inner-link .right-link:hover::after {left:0px !important;}
			@media screen and (max-width: 1200px) {
				.vis-nav-list-flex.six li {width:31.33% !important;max-width:31.33% !important;}
				.vis-nav-list-flex.six li .inner h2.block-headline_alt {font-size:24px !important;}
			}
			@media screen and (max-width: 1000px) {
				.vis-nav-list-flex li .inner h2.block-headline_alt {font-size:24px;}
				.vis-nav-list-flex.four li .inner h2.block-headline_alt, .vis-nav-list-flex.five li .inner h2.block-headline_alt, .vis-nav-list-flex.six li .inner h2.block-headline_alt {font-size:18px !important;}
				.vis-nav-list-flex.six li {width:31.33% !important;max-width:31.33% !important;}
				.vis-nav-list-flex.six li .inner h2.block-headline_alt {font-size:24px !important;}
			}
			@media screen and (max-width: 767px) {
				.vis-nav-list-flex li, .vis-nav-list-flex.five li, .vis-nav-list-flex.six li {width:47% !important;max-width:47% !important;}
				.vis-nav-list-flex li .inner h2.block-headline_alt, .vis-nav-list-flex.four li .inner h2.block-headline_alt, .vis-nav-list-flex.five li .inner h2.block-headline_alt, .vis-nav-list-flex.six li .inner h2.block-headline_alt {font-size:24px !important;}   
			}
			@media screen and (max-width: 520px) {
				.vis-nav-list-flex{gap:0%;}
				.vis-nav-list-flex li, .vis-nav-list-flex.five li, .vis-nav-list-flex.six li  {margin:0 auto 10% !important;width:75% !important;max-width:75% !important;}
			}
		</style> 
	</div>  
	
</section> 