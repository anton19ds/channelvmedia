<?php
/**
 * Alternating Media Text Block Template.
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
 
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php echo esc_attr($className); ?> <?php if(get_field('background_color')) { echo '' . get_field('background_color') . ''; } ?><?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb4';} ?> clearfix">
	  
	<div class="grid-page clearfix">  
		<?php if(get_field('heading_content_width') || get_field('heading_content_top_padding') || get_field('heading_content_bottom_padding') || get_field('heading_content_position')) { echo '<div class="' . get_field('heading_content_width') . ''; } ?><?php if(get_field('heading_content_position')) { echo ' ' . get_field('heading_content_position') . ''; } else { echo' ';} ?><?php if(get_field('heading_content_top_padding')) { echo ' ' . get_field('heading_content_top_padding') . ''; } ?><?php if(get_field('heading_content_bottom_padding')) { echo ' ' . get_field('heading_content_bottom_padding') . ''; } ?><?php if(get_field('heading_content_width') || get_field('heading_content_top_padding') || get_field('heading_content_bottom_padding') || get_field('heading_content_position')) { echo ' clearfix">'; } ?>		
			<?php
            // check if the flexible content field has rows of data
            if( have_rows('headlines_content') ): ?>
            <?php 
                 // loop through the rows of data
                while ( have_rows('headlines_content') ) : the_row(); ?>  
					<?php // Label
						if( get_row_layout() == 'section_content_label' ): ?> 
						<?php if(get_sub_field('label')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('label_top_margin')) { echo ' ' . get_sub_field('label_top_margin') . ''; } ?><?php if(get_sub_field('label_bottom_margin')) { echo ' ' . get_sub_field('label_bottom_margin') . ''; } ?><?php if(get_sub_field('label')) { echo ' clearfix">'; } ?>   
							<?php if(get_sub_field('label')) { echo '
								<p class="sp-small mt0 mb20'; } ?><?php if(get_sub_field('label_color')) { echo ' ' . get_sub_field('label_color') . ''; } ?><?php if(get_sub_field('label_shadow')) { echo ' ' . get_sub_field('label_shadow') . ''; } ?><?php if(get_sub_field('label_alignment')) { echo ' ' . get_sub_field('label_alignment') . ''; } ?><?php if(get_sub_field('label')) { echo '">' . get_sub_field('label') . '</p>'; } ?>		
						<?php if(get_sub_field('label')) { echo '</div>'; } ?>  
					<?php endif; ?>  
                    <?php // Headlines 
						if( get_row_layout() == 'section_content_headlines' ): ?> 
						<?php if(get_sub_field('headline') || get_sub_field('subheadline')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('headlines_top_margin')) { echo ' ' . get_sub_field('headlines_top_margin') . ''; } ?><?php if(get_sub_field('headlines_bottom_margin')) { echo ' ' . get_sub_field('headlines_bottom_margin') . ''; } ?><?php if(get_sub_field('headline') || get_sub_field('subheadline')) { echo ' clearfix">'; } ?>   
						
							<?php if(get_sub_field('headline')) { echo '
								<h2 class="block-headline_alt mb10 pb0'; } ?><?php if(get_sub_field('headline_color')) { echo ' ' . get_sub_field('headline_color') . ''; } ?><?php if(get_sub_field('headline_shadow')) { echo ' ' . get_sub_field('headline_shadow') . ''; } ?><?php if(get_sub_field('headlines_align') && get_sub_field('headline')) { echo ' ' . get_sub_field('headlines_align') . ''; } ?><?php if(get_sub_field('headline')) { echo '">' . get_sub_field('headline') . '</h2>'; } ?>

							<?php if(get_sub_field('subheadline')) { echo '
								<span class="block-subheadline pt0'; } ?><?php if(get_sub_field('subheadline_color')) { echo ' ' . get_sub_field('subheadline_color') . ''; } ?><?php if(get_sub_field('subheadline_shadow')) { echo ' ' . get_sub_field('subheadline_shadow') . ''; } ?><?php if(get_sub_field('headlines_align') && get_sub_field('subheadline')) { echo ' ' . get_sub_field('headlines_align') . ''; } ?><?php if(get_sub_field('subheadline')) { echo '">' . get_sub_field('subheadline') . '</span>'; } ?>

						<?php if(get_sub_field('headline') || get_sub_field('subheadline')) { echo '</div>'; } ?> 
                    <?php endif; ?>
                     <?php // Text 
						if( get_row_layout() == 'section_content_text' ): ?> 
						<?php if(get_sub_field('description')) { echo '<div class="grid-10 fl overview-description'; } ?><?php if(get_sub_field('description_top_margin')) { echo ' ' . get_sub_field('description_top_margin') . ''; } ?><?php if(get_sub_field('description_bottom_margin')) { echo ' ' . get_sub_field('description_bottom_margin') . ''; } ?><?php if(get_sub_field('description')) { echo ' clearfix">'; } ?> 

							<?php if(get_sub_field('description')) { echo '
								<div class="sp'; } ?><?php if(get_sub_field('description_color')) { echo ' ' . get_sub_field('description_color') . ''; } ?><?php if(get_sub_field('description_shadow')) { echo ' ' . get_sub_field('description_shadow') . ''; } ?><?php if(get_sub_field('description')) { echo '">' . get_sub_field('description') . '</div>'; } ?> 
		
						<?php if(get_sub_field('description')) { echo '</div>'; } ?>  
                    <?php endif; ?> 
                     <?php // Buttons 
						if( get_row_layout() == 'section_buttons_text_links' ): ?>
						<?php if(get_sub_field('buttons')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('buttons_top_margin')) { echo ' ' . get_sub_field('buttons_top_margin') . ''; } ?><?php if(get_sub_field('buttons_bottom_margin')) { echo ' ' . get_sub_field('buttons_bottom_margin') . ''; } ?><?php if(get_sub_field('buttons')) { echo ' clearfix">'; } ?> 
	 
							<!-- start repeater-list --> 
							<?php if( have_rows('buttons') ): $pr = 0;
							echo '<p class="mt0 mb0 down-arrow-container">';
							// loop through the rows of data
							while ( have_rows('buttons') ) : the_row(); ?> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="right-link'; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('text_shadow') && get_sub_field('link') ) { echo '' . get_sub_field('text_shadow') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
								<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
							<?php endwhile; echo '</p>'; endif; ?> 
							<!-- end repeater-list --> 

						<?php if(get_sub_field('buttons')) { echo '</div>'; } ?>  
                    <?php endif; ?>
	                
					<?php endwhile; // end loop through the rows of data
						else :
						// no layouts found
             		?> 
            <?php endif; ?><?php wp_reset_query(); ?> 
		<?php if(get_field('heading_content_width') || get_field('heading_content_top_padding') || get_field('heading_content_bottom_padding') || get_field('heading_content_position')) { echo '</div>'; } ?> 
  	</div>
		<!-- ---------- PROCESS ----------- -->
		<!-- start repeater-list --> 
		<?php if( have_rows('process_steps') ):
		echo ' ';
		// loop through the rows of data
		$countp = 0; while ( have_rows('process_steps') ) : the_row(); $countp++; ?> 
		<div class="grid-10 fl pt3 pb3 clearfix">
			
		<?php if(get_sub_field('photo')) { echo '<div class="grid-4b mb30 ho'; }?>
				<?php if(get_sub_field('photo_position_right') == true) { echo 'fr'; } else { echo 'fl'; }?>
				<?php if(get_sub_field('photo')) { echo 'clearfix">'; } ?>  

					<?php $image = get_sub_field('photo');
					if( !empty( $image ) ): ?>
						<img class="responsive-img z1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>

					<?php if(get_sub_field('photo_color_filter')) { echo '<div class="color-overlay-exact z2 opacity50 ' . get_sub_field('photo_color_filter') . '"></div>'; }?> 

		<?php if(get_sub_field('photo')) { echo '</div>'; } ?> 

		<?php if(get_sub_field('headline') || get_sub_field('description')) { echo '<div class="grid-5b fl clearfix"><div class="grid-page mauto clearfix"><div class="grid-7 '; } ?><?php if(get_sub_field('photo_position_right') == true) { echo 'fr'; } else { echo 'fl'; }?><?php if(get_sub_field('headline') || get_sub_field('description')) { echo ' clearfix">'; } ?>
			<?php if(get_sub_field('headline')) { echo '<h3 class="block-headline_alt mb20 mt0 ' . get_sub_field('headline_text_color') . '">' . get_sub_field('headline') . '</h3>'; } ?>
			<?php if(get_sub_field('description')) { echo '<div class="sp cb ' . get_sub_field('description_text_color') . '">' . get_sub_field('description') . '</div>'; } ?>
			
					<!-- start repeater-list 1 --> 
					<?php // check for rows (nested repeater)
						if( have_rows('rectangle_buttons_nested') ): $i = 0; ?> 
					<div class="mb0 mt0 pt1"> 
					<?php while( have_rows('rectangle_buttons_nested') ): $i++; the_row(); ?> 
							<?php if( (get_sub_field('link') == true) ){ echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect '; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('button_color') && get_sub_field('link')) { echo '' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
							<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
							<?php if(get_sub_field('link')) { echo '>'; } ?>
 							<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
							<div class="transition-rect"></div> 
							<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
					<?php endwhile; ?>
					</div>
					<?php endif; ?>
			
		<?php if(get_sub_field('headline') || get_sub_field('description')) { echo '</div></div></div>'; } ?>
		</div>
		<?php endwhile; echo ''; endif; ?> 
		<!-- end repeater-list -->  
</section>