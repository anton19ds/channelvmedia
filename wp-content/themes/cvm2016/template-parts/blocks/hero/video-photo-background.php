<?php
/**
 * Video or Photo Background Block Template.
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
$background_image = get_field('background_image') ?: 'Hero Photo';
$background_position = get_field('background_position') ?: 'Background Position';
$title = get_field('title') ?: 'Title';
$title_shadow = get_field('title_shadow') ?: 'Title Shadow';
$subtitle = get_field('subtitle') ?: 'Subtitle';
$subtitle_shadow = get_field('subtitle_shadow') ?: 'Subtitle Shadow';
$button_url = get_field('button_url') ?: 'Button Link';
$button_text = get_field('button_text') ?: 'Button Text';
$down_button_url = get_field('down_button_url') ?: 'Down Button Link';
$background_color = get_field('background_color');
$title_color = get_field('title_color'); 
$subtitle_color = get_field('subtitle_color'); 
$text_color = get_field('text_color');
$button_text_color = get_field('button_text_color');
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl mt0 mb0 z0 clearfix<?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?>">
		<div class="grid-10 clearfix" style="background-repeat:none;background-size:cover;<?php if(get_field('background_image')) { echo 'background-image:url(' . get_field('background_image') . ');'; } ?> <?php if(get_field('background_position')) { echo 'background-position:' . get_field('background_position') . ';'; } ?>"> 
			<div class="wp-block-cover pt0 pb0 pr0 ppl0">
				<?php if((get_field('hide_video_overlay')) == true) { echo ''; } else { echo '<div class="overlay z1 ' . get_field('video_photo_overlay_opacity') . '"></div>';} ?>
				
				<!-- start conditional -->
				<?php if ((get_field('video_url')) == true) { ?> 

					<?php if(get_field('video_url')) { echo '<video class="wp-block-cover__video-background intrinsic-ignore" style="height:100% !important;" autoplay="" muted="" loop="" playsinline="" src="' . get_field('video_url') . '" data-object-fit="cover"></video><span class="color-overlay-exact purple-pink-diagonal opacity20"></span>'; } ?> 
					<div class="grid-page ptb20 z2">
						<?php if(get_field('title')) { echo '<div class="hero-title cb mb0 ml0 mr0 mt0 clearfix"><h2 class="block-headline_alt white mb0 ml30 mt0 '; echo $title_shadow; echo '">';echo $title; echo '</h2></div>'; } ?>
						
						<?php if((get_field('subtitle') || get_field('button_url') || get_field('down_button_url')) == true ) { echo '<div class="grid-5 fl mt0 clearfix">'; } ?> 
							<?php if(get_field('subtitle')) { echo '<h2 class="block-subheadline white mt0 ppl0 pt0 '; echo $subtitle_shadow; echo '">'; echo $subtitle; echo '</h2>'; } ?> 
							<?php if(get_field('text_content')) { echo '<div class="text-content grid-10 white pt20 ' . get_field('text_content_shadow') . '">' . get_field('text_content') . '</div>'; } ?>

							<?php if((get_field('button_url') || get_field('down_button_url')) == true ) { echo '<div class="mb0 mt0 down-arrow-container pg-buttons pb30 cb clearfix">'; } ?>
								<?php if(get_field('button_url')) { echo '<a class="down-link white'; } ?><?php if(get_field('arrow_color')) { echo ' ' . get_field('arrow_color') . ''; } ?><?php if(get_field('button_url')) { echo '" href="'; echo $button_url; echo '">'; } ?>
						
						<?php if(get_field('button_url')) { echo $button_text; } ?><?php if(get_field('button_url')) { echo '</a>'; } ?> 

							<?php if(get_field('down_button_url')) { echo '<a class="fl cb arrow-down-white'; } ?><?php if(get_field('down_arrow_color')) { echo ' ' . get_field('down_arrow_color') . ''; } ?><?php if(get_field('down_button_url')) { echo '" href="'; echo $down_button_url; echo '">'; } ?><?php if(get_field('down_button_url')) { echo '</a>'; } ?>
							<?php if((get_field('button_url') || get_field('down_button_url')) == true ) { echo '</div>'; } ?> 
						<?php if((get_field('subtitle') || get_field('button_url') || get_field('down_button_url')) == true ) { echo '</div>'; } ?> 
					</div> 
				<?php  } else { ?>
					<div class="grid-page ptb20 z2">
						<?php if(get_field('title')) { echo '<div class="hero-title cb mb0 ml0 mr0 mt0 clearfix"><h2 class="block-headline white mb0 ml30 mt0 '; echo $title_shadow; echo '">';echo $title; echo '</h2></div>'; } ?>
						
						<?php if((get_field('subtitle') || get_field('button_url') || get_field('down_button_url')) == true ) { echo '<div class="grid-5 fl mt0 clearfix">'; } ?> 
							<?php if(get_field('subtitle')) { echo '<h2 class="block-subheadline white mt0 ppl0 pt0 '; echo $subtitle_shadow; echo '">'; echo $subtitle; echo '</h2>'; } ?> 
							<?php if(get_field('text_content')) { echo '<div class="text-content grid-10 white pt20 ' . get_field('text_content_shadow') . '">' . get_field('text_content') . '</div>'; } ?>

							<?php if((get_field('button_url') || get_field('down_button_url')) == true ) { echo '<div class="mb0 mt0 down-arrow-container pg-buttons pb30 cb clearfix">'; } ?>
								<?php if(get_field('button_url')) { echo '<a class="down-link white'; } ?><?php if(get_field('arrow_color')) { echo ' ' . get_field('arrow_color') . ''; } ?><?php if(get_field('button_url')) { echo '" href="'; echo $button_url; echo '">'; } ?>
						
						<?php if(get_field('button_url')) { echo $button_text; } ?><?php if(get_field('button_url')) { echo '</a>'; } ?> 

							<?php if(get_field('down_button_url')) { echo '<a class="fl cb arrow-down-white'; } ?><?php if(get_field('down_arrow_color')) { echo ' ' . get_field('down_arrow_color') . ''; } ?><?php if(get_field('down_button_url')) { echo '" href="'; echo $down_button_url; echo '">'; } ?><?php if(get_field('down_button_url')) { echo '</a>'; } ?>
							<?php if((get_field('button_url') || get_field('down_button_url')) == true ) { echo '</div>'; } ?> 
						<?php if((get_field('subtitle') || get_field('button_url') || get_field('down_button_url')) == true ) { echo '</div>'; } ?> 
					</div>

				<?php  } ?>
				<!-- end conditional -->
			</div>
		</div>  
 	<!--Inline style for Hero Block-->
	<style type="text/css">
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> {
			background-color:<?php echo $background_color; ?>; 
		} 
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .block-headline 
		{ 
		color:<?php echo $title_color; ?>;
		} 
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> p.block-subheadline { 
		color:<?php echo $subtitle_color; ?>;
		}
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .text-content p  { 
		color:<?php echo $text_color; ?>;
		}
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> a.down-link { 
		color:<?php echo $button_text_color; ?>;
		} 
	</style>  
</section>