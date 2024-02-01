<?php
/**
 * Text and Media Block Template.
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
$media_padding_top = get_field('media_padding_top') ?: 'Padding Top'; 
$media_padding_bottom = get_field('media_padding_bottom') ?: 'Padding Bottom'; 
$media_bg = get_field('media_bg') ?: 'Photo'; 
$media_headline = get_field('media_headline') ?: 'Headline';
$media_subheadline = get_field('media_subheadline') ?: 'Subheadline';
$media_text = get_field('media_text') ?: 'Text';
$background_color = get_field('background_color');
$title_color = get_field('title_color'); 
$subtitle_color = get_field('subtitle_color'); 
$text_color = get_field('text_color');
$button_text_color = get_field('button_text_color');
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl bg-white pad clearfix" style="<?php if(get_field('media_padding_top')) { echo 'padding-top:' . get_field('media_padding_top') . ';'; } ?> <?php if(get_field('media_padding_bottom')) { echo 'padding-bottom:' . get_field('media_padding_bottom') . ';'; } ?>">
	<div class="grid-page mauto clearfix">
		<div class="<?php if(get_field('media_photo_left_text_right')) { echo 'media-text-alt '; } else { echo 'media-text '; } ?>clearfix">
			
			<?php if(get_field('media_bg')) { echo '<div class="m-media perks-fade-in'; } ?><?php if(get_field('media_photo_left_text_right')) { echo ' m-media-alt'; } else { echo ' m-media'; } ?>
			<?php if(get_field('media_bg')) { echo '" style="background-image:url(' . get_field('media_bg') . ');"><span class="color-overlay-exact purple-pink-diagonal opacity20"></span>'; } ?>
			
				<?php if(get_field('media_bg_overlay')) { echo '<span class="block-img-overlay ' . get_field('media_bg_overlay') . '"></span>'; } ?>
			<?php if(get_field('media_bg')) { echo '</div>'; } ?>
			  
			<span class="<?php if(get_field('media_photo_left_text_right')) { echo 'm-text-alt '; } else { echo 'm-text'; } ?>">
				<?php if(get_field('media_headline')) { echo '<h2 class="block-headline">' . get_field('media_headline') . '</h2>'; } ?>
				<?php if(get_field('media_subheadline')) { echo '<span class="block-subheadline">' . get_field('media_subheadline') . '</span>'; } ?>
				<?php if(get_field('media_text')) { echo '<span class="block-text">' . get_field('media_text') . '</span>'; } ?>

				<?php if((get_field('button_url') || get_field('down_button_url')) == true ) { echo '<div class="mb0 mt0 down-arrow-container pb30 cb clearfix">'; } ?>
						<?php if(get_field('button_url')) { echo '<a class="down-link black down-link-dark-purple '; } ?><?php if((get_field('button_url') && get_field('arrow_color')) == true ) { echo ' ' . get_field('arrow_color') . ''; } ?><?php if(get_field('button_url')) { echo '" href="' . get_field('button_url') . '">'; } ?><?php if(get_field('button_text')) { echo '' . get_field('button_text') . ''; } ?><?php if(get_field('button_url')) { echo '</a>'; } ?> 

					<?php if(get_field('down_button_url')) { echo '<a class="fl cb arrow-down-white down-link-dark-purple'; } ?><?php if((get_field('down_button_url') && get_field('down_arrow_color')) == true ) { echo ' ' . get_field('down_arrow_color') . ''; } ?><?php if(get_field('down_button_url')) { echo '" href="'; echo $down_button_url; echo '">'; } ?><?php if(get_field('down_button_url')) { echo '</a>'; } ?>
					<?php if((get_field('button_url') || get_field('down_button_url')) == true ) { echo '</div>'; } ?> 
				<?php if((get_field('button_url') || get_field('down_button_url')) == true ) { echo '</div>'; } ?> 
			</span>
		</div> 
	</div>
	<style type="text/css">
		.media-text {display:block;float:left;margin-left:20%;position:relative;width:30%;} 
		.m-text {display:block;float:left;padding:15vh 0;position:relative;width:100%;}
		.m-media {background-position:center center;background-repeat:no-repeat;background-size:cover;bottom:0;display:block;height:100%;left:100%;position:absolute;top:0;width:100%;}

		.media-text-alt {display:block;float:right;margin-right:20%;position:relative;width:30%;}
		.m-text-alt {display:block;float:right;padding:15vh 0;position:relative;width:100%;}
		.m-media-alt {background-position:center center;background-repeat:no-repeat;background-size:cover;bottom:0;display:block;height:100%;left:-100%;position:absolute;top:0;width:100%;}
		.m-media .block-img-overlay {background-color: transparent;bottom:0;display:block;height:100%;left;0;position:absolute;top:0;width:50%;}
		.m-media-alt .block-img-overlay {background-color: transparent;bottom:0;display:block;height:100%;position:absolute;right:0;top:0;transform:rotate(180deg);width:50%;}
		
		@media screen and (max-width: 1200px) {
			.media-text, .media-text-alt {margin-left:0%;margin-right:0%;width:50%;}
		}
		@media screen and (max-width: 767px) {
			.media-text, .media-text-alt {margin-left:0%;margin-right:0%;width:100%;}
			.m-text, .m-text-alt {padding:20px 0 0;}
			.m-media, .m-media-alt {float:left;left:unset;padding-bottom:100%;position:relative;width:100%;}
			.m-media .block-img-overlay {left:unset;right:0;transform:rotate(180deg);}
		} 
	</style>
 	<!--Inline style for Hero Block-->
	<style type="text/css">
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> {
			background-color: <?php echo $background_color; ?> !important; 
		} 
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .block-headline { 
		color: <?php echo $title_color; ?>;
		} 
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .block-subheadline { 
		color: <?php echo $subtitle_color; ?>;
		}
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .block-text p { 
		color: <?php echo $text_color; ?>;
		}
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> a.down-link { 
		color: <?php echo $button_text_color; ?>;
		}
	</style>  
</section>