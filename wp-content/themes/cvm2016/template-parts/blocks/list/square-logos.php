<?php
/**
 * Square Logo List Block Template.
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

// Load values and handle defaults.
$overview_label = get_sub_field('overview_label') ?: 'Label';
$overview_headline = get_sub_field('overview_headline') ?: 'Headline';
$overview_subheadline = get_sub_field('overview_subheadline') ?: 'Subheadline';  
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php echo esc_attr($className); ?> <?php if(get_field('background_color')) { echo '' . get_field('background_color') . ''; } ?><?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb4';} ?> clearfix">

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
                    <?php // Headlines 
						if( get_row_layout() == 'overview_content_headlines' ): ?> 
						<?php if(get_sub_field('overview_headline') || get_sub_field('overview_subheadline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('overview_headlines_top_margin')) { echo ' ' . get_sub_field('overview_headlines_top_margin') . ''; } ?><?php if(get_sub_field('overview_headlines_bottom_margin')) { echo ' ' . get_sub_field('overview_headlines_bottom_margin') . ''; } ?><?php if(get_sub_field('overview_headline') || get_sub_field('overview_subheadline')) { echo ' clearfix">'; } ?>

							<?php if(get_sub_field('overview_headline')) { echo '<h2 class="block-headline_alt pb2'; } ?><?php if(get_sub_field('overview_headline_color')) { echo ' ' . get_sub_field('overview_headline_color') . ''; } ?><?php if(get_sub_field('overview_headline_shadow')) { echo ' ' . get_sub_field('overview_headline_shadow') . ''; } ?><?php if(get_sub_field('overview_headlines_align') && get_sub_field('overview_headline')) { echo ' ' . get_sub_field('overview_headlines_align') . ''; } ?><?php if(get_sub_field('overview_headline')) { echo '">' . get_sub_field('overview_headline') . '</h2>'; } ?>

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
	                
					<?php endwhile; // end loop through the rows of data
						else :
						// no layouts found
             		?> 
            <?php endif; ?><?php wp_reset_query(); ?> 
		<?php if(get_field('heading_content_width') || get_field('heading_content_top_padding') || get_field('heading_content_bottom_padding') || get_field('heading_content_position')) { echo '</div>'; } ?>
		
		
		<!-- start repeater-list --> 
		<?php if( have_rows('square_client_logos') ):
		echo '<div class="grid-10 cb clearfix">';
		// loop through the rows of data
		while ( have_rows('square_client_logos') ) : the_row(); ?>

			<div class="square <?php if(get_field('square_columns')) { echo '' . get_field('square_columns') . ''; } ?>">
				<div class="content">
					<?php if((get_sub_field('description') || get_sub_field('link_url')) == true) { echo '<a class="taphover hover"'; } ?><?php if(get_sub_field('link_url')) { echo ' href="' . get_sub_field('link_url') . '"'; } ?><?php if((get_sub_field('description') || get_sub_field('link_url')) == true) { echo '>'; } ?>
						<div class="dtable">
							<div class="dtable-cell">
								<?php if(get_sub_field('client_logo')) { echo '<div class="project-logo"><div class="dtable">'; } ?>
										<?php if(get_sub_field('client_logo')) { echo '<div class="dtable-cell sq-logo'; } ?><?php if(get_sub_field('client_logo')) { echo '" style="background-image:url(' . get_sub_field('client_logo') . ');'; } ?><?php if(get_sub_field('client_logo_width')) { echo 'background-size:' . get_sub_field('client_logo_width') . '% auto;'; } ?><?php if(get_sub_field('client_logo')) { echo '"></div>'; } ?>   
								<?php if(get_sub_field('client_logo')) { echo '</div></div>'; } ?>
										
								<?php if(get_sub_field('headline')) { echo '<div class="project-headline"><div class="dtable">'; } ?>
										<?php if(get_sub_field('headline')) { echo '<div class="dtable-cell"><h2 class="mb0 fs30 ' . get_sub_field('headline_text_color') . '">' . get_sub_field('headline') . ''; } ?> 
								<?php if((get_sub_field('linked_icon')) == true) { echo '<div class="linked-icon'; } ?><?php if((get_sub_field('linked_icon') && get_sub_field('linked_icon_color')) == true) { echo ' ' . get_sub_field('linked_icon_color') . ''; } ?><?php if((get_sub_field('linked_icon')) == true) { echo '"></div>'; } ?>
								<?php if(get_sub_field('headline')) { echo '</h2></div></div></div>'; } ?>
								<div class="project-hover"> 
									<div class="grid-page">
										<?php if(get_sub_field('description')) { echo '<p class="project-desc ' . get_sub_field('description_text_color') . '">' . get_sub_field('description') . '</p>'; } ?>
									</div>
								</div> 
								<div class="bar"></div>
							</div>
						</div>
					<?php if((get_sub_field('description') || get_sub_field('link_url')) == true) { echo '</a>'; } ?> 
				</div>		
			</div>  

		<?php endwhile; echo '</div>'; endif; ?> 
		<!-- end repeater-list -->  

	</div>
</section>