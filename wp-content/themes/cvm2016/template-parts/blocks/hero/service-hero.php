<?php
/**
 * Service Hero Block Template.
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
// Load values and assign defaults.
$service_hero_image = get_field('service_hero_image') ?: 'Hero Photo';
$label = get_field('service_section_label') ?: 'Label';
$title = get_field('service_page_title') ?: 'Title';
$subtitle = get_field('service_page_subtitle') ?: 'Subtitle';
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="sp-hero-wrap-sub <?php if(get_field('service_hero_background_color')) { echo '' . get_field('service_hero_background_color') . ''; } ?> <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> clearfix">
 	<div class="grid-page service-hero-block <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } ?> clearfix">

			<?php if(get_field('service_hero_image')) { echo '<div class="grid-7-absolute absolute-right absolute-top mxh400 clearfix'; } ?>
			<?php if((get_field('service_hero_image_opacity')) == true) { echo ' ' . get_field('service_hero_image_opacity') . ''; } ?> 
			<?php if(get_field('service_hero_image')) { echo '">'; } ?>
				<?php 
				$image = get_field('service_hero_image');
				if( !empty( $image ) ): ?>
					<img class="responsive-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
				<?php if(get_field('service_hero_image_overlay')) { echo '<div class="color-overlay-exact ' . get_field('service_hero_image_overlay') . ''; } ?><?php if((get_field('service_hero_image_overlay_opacity')) == true) { echo ' ' . get_field('service_hero_image_overlay_opacity') . ' '; } ?><?php if((get_field('service_hero_image_overlay_hide')) == true) { echo ' hide-mobile'; } ?><?php if(get_field('service_hero_image_overlay')) { echo '"></div>'; } ?>
			<?php if(get_field('service_hero_image')) { echo '</div>'; } ?>
		 
		<?php if(get_field('service_page_title')) { echo '<div class="grid-8 fl pb5 clearfix">
			<div class="table">
				<div class="table-cell">'; } ?>
					<?php if(get_field('service_section_label')) { echo '<p class="sp-small mt20 mb20 white'; } ?>
					<?php if(get_field('service_section_label_text_color')) { echo '' . get_field('service_section_label_text_color') . ''; } ?>
					<?php if(get_field('service_section_label')) { echo 'clearix">' . get_field('service_section_label') . '</p>'; } ?> 
					
					<?php if(get_field('service_page_title')) { echo '<h1 class="sp '; } ?>
						<?php if(get_field('service_page_title_shadow')) { echo '' . get_field('service_page_title_shadow') . ''; } ?>
						<?php if(get_field('service_page_title')) { echo '' . get_field('service_page_title_text_color') . ''; } ?>
						<?php if(get_field('service_page_title')) { echo '' . get_field('service_page_titles_color_mobile') . ''; } ?> 
						<?php if((get_field('service_page_title') && get_field('service_page_titles_color_mobile')) == true) { echo 'mobile-purple'; } ?> 
					<?php if(get_field('service_page_title')) { echo '">' . get_field('service_page_title') . '</h1>'; } ?>
					
					<?php if(get_field('service_page_title') || ('service_page_subtitle') ) { echo '<div class="grid-8 clearfix">'; } ?>
						<?php if(get_field('service_page_subtitle')) { echo '<span class="block-subheadline '; } ?>
							<?php if(get_field('service_page_subtitle_shadow')) { echo '' . get_field('service_page_subtitle_shadow') . ''; } ?>
							<?php if(get_field('service_page_subtitle_text_color')) { echo '' . get_field('service_page_subtitle_text_color') . ''; } ?>
						<?php if((get_field('service_page_subtitle') && get_field('service_page_titles_color_mobile')) == true) { echo 'mobile-light-purple'; } ?> 
						<?php if(get_field('service_page_subtitle')) { echo '">' . get_field('service_page_subtitle') . '</span>'; } ?>  
					
						<!-- start repeater-list --> 
						<?php if( have_rows('service_button_text_links') ): $pr = 0;
						echo '<p class="mb10 mt20 down-arrow-container">';
						// loop through the rows of data
						while ( have_rows('service_button_text_links') ) : the_row(); ?> 
							<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="down-link'; } ?> <?php if(get_sub_field('text_color') && get_sub_field('link') ) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('arrow_color') && get_sub_field('link')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
							<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
							<?php if(get_sub_field('link')) { echo '>'; } ?>
							<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
							<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
						<?php endwhile; echo '</p>'; endif; ?>
					
						<!-- start repeater-list --> 
						<?php if( have_rows('button_swipe_rect') ): $pr = 0;
						echo '<div class="mb10 mt20">';
						// loop through the rows of data
						while ( have_rows('button_swipe_rect') ) : the_row(); ?> 
							<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect '; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('alignment') && get_sub_field('link') ) { echo '' . get_sub_field('alignment') . ''; } ?> <?php if(get_sub_field('button_color') && get_sub_field('link')) { echo '' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
							<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
							<?php if(get_sub_field('link')) { echo '>'; } ?>
							<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
							<div class="transition-rect"></div> 
							<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
						<?php endwhile; echo '</div>'; endif; ?> 
		
						<?php if(get_field('service_hubspot_cta_btn')) { echo '<div class="grid-10 clearfix>' . get_field('service_hubspot_cta_btn') . '</div>'; } ?> 

					<?php if(get_field('service_page_title') || ('service_page_subtitle') ) { echo '</div>'; } ?> 
					
				<?php if(get_field('service_page_title')) { echo '</div>
			</div> 
		</div>'; } ?>
	</div>
</section>