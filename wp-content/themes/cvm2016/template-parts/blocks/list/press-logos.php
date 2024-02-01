<?php
/**
 * Press Logos Block Template.
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

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php if(get_field('background_color')) { echo '' . get_field('background_color') . ''; } ?><?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb4';} ?> clearfix">

	<?php if(get_field('background_photo')) { echo '<div class="color-overlay bg-common clearfix'; } ?>
		<?php if((get_field('background_photo_opacity')) == true) { echo ' ' . get_field('background_photo_opacity') . ''; } ?>
		<?php if(get_field('background_photo')) { echo '" style="'; } ?>
		<?php if(get_field('background_photo')) { echo 'background-image:url(' . get_field('background_photo') . ');'; } ?>
		<?php if((get_field('background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?>
	<?php if(get_field('background_photo')) { echo '"></div>'; } ?> 

	<?php if(get_field('background_color_filter')) { echo '<div class="color-overlay ' . get_field('background_color_filter') . ''; } ?><?php if((get_field('background_color_filter_opacity')) == true) { echo ' ' . get_field('background_color_filter_opacity') . ' '; } ?><?php if(get_field('background_color_filter')) { echo ' clearfix"></div>'; } ?>
	
	<?php if((get_field('double_slashes')) == true) { echo '<div class="color-overlay-exact bg-double-sashes-two'; } ?><?php if((get_field('double_slashes_opacity')) == true) { echo ' ' . get_field('double_slashes_opacity') . ''; } ?><?php if((get_field('double_slashes')) == true) { echo '"></div>'; } ?> 
	
	<?php if(get_field('press_logos_title')) { echo '<div class="grid-page mauto clearfix">'; } ?>
		<?php if(get_field('press_logos_title')) { echo '<div class="grid-2b fl clearfix"><h2 class="block-headline_alt light tal mb0 mt0 ' . get_field('press_logos_title_color') . ' ' . get_field('press_logos_title_top_padding') . ' ' . get_field('press_logos_title_bottom_padding') . '">' . get_field('press_logos_title') . '</h2></div>'; } ?>

		<?php if(get_field('press_logos')): $i = 0; ?>
		<div class="grid-7 fr clearfix"><ul class="pr-expertise-press-logos fl clearfix">
			<?php while(has_sub_field('press_logos')): $i++; ?>   
			<?php $image = get_sub_field('logo'); ?>
			<?php if( get_sub_field('logo') ) { echo '<li class="clearfix"><img src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('logo') ) { echo '" border="0"/></li>'; } ?>  
			<?php endwhile; ?>
			</ul></div>
		<?php endif; ?>  
	<?php if(get_field('press_logos_title')) { echo '</div>'; } ?>  
	
	<style type="text/css"> 
		@media screen and (max-width: 767px) { 
		} 
	</style> 	
</section>