<?php
/**
 * Case Study Slanted Block Template.
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
	
	<?php if(get_field('background_color_filter')) { echo '<div class="color-overlay ' . get_field('background_color_filter') . ''; } ?><?php if((get_field('background_color_filter_opacity')) == true) { echo ' ' . get_field('background_color_filter_opacity') . ' '; } ?><?php if(get_field('background_color_filter')) { echo ' clearfix"></div>'; } ?>
	
	<div class="grid-page mauto clearfix">
		<div class="grid-10 fl clearfix">

			<?php if(get_field('cs_title') || get_field('cs_subheadline') || get_field('cs_slanted_label')) { echo '<div class="grid-10 fl clearfix">'; } ?>
						<?php if(get_field('cs_slanted_label')) { echo '<p class="sp-small ' . get_field('cs_slanted_label_color') . ' clearix">' . get_field('cs_slanted_label') . '</p>'; } ?> 
						<?php if(get_field('cs_title')) { echo '<h2 class="block-headline_alt ' . get_field('cs_title_color') . ' clearix">' . get_field('cs_title') . '</h2> '; } ?> 
						<?php if(get_field('cs_subheadline')) { echo '<p class="block-subheadline ' . get_field('cs_subheadline_color') . ' clearix">' . get_field('cs_subheadline') . '</p> '; } ?> 

			<?php if(get_field('cs_title') || get_field('cs_subheadline') || get_field('cs_slanted_label')) { echo '</div>'; } ?>

			<!-- start repeater-list --> 
			<?php if( have_rows('cs_case-studies') ):
			echo ' ';
			// loop through the rows of data
			$countp = 0; while ( have_rows('cs_case-studies') ) : the_row(); $countp++; ?> 
			<div class="grid-10 fl pt5 pb5 bg-null-<?php echo $countp ?> clearfix">
			<?php if(get_sub_field('photo')) { echo '<div class="grid-4b mb30'; }?>
					<?php if(get_sub_field('photo_position_right') == true) { echo 'fr'; } else { echo 'fl'; }?>
					<?php if(get_sub_field('photo')) { echo 'clearfix">'; } ?> 

							<?php if(get_sub_field('photo')) { echo '<div class="color-overlay ' . get_field('background_color') . ''; } ?> 
								<?php if(get_sub_field('photo_position_right') == true) { echo 'slide-left'; } else { echo 'slide-right'; }?>
							<?php if(get_sub_field('photo')) { echo 'z11" style="display:none;"></div>'; } ?>

							<?php $image = get_sub_field('photo');
							if( !empty( $image ) ): ?>
								<img class="responsive-img z1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>

							<?php if(get_sub_field('photo_color_filter')) { echo '<div class="color-overlay-exact z2 opacity50 ' . get_sub_field('photo_color_filter') . '"></div>'; }?> 

							<?php $image = get_sub_field('client_logo'); ?>
							<?php if( get_sub_field('client_logo') ) { echo '<div class="expertise-pr-cs-logo '; } ?><?php if(get_field('background_color')) { echo '' . get_field('background_color') . ''; } ?><?php if( get_sub_field('client_logo') ) { echo ' clearfix">'; } ?>


							<?php if(get_sub_field('client_logo_width')) { echo '<div class="' . get_sub_field('client_logo_width') . ' mauto clearfix">'; } ?>
							<?php if( get_sub_field('client_logo') ) { echo '<img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('client_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('client_logo') ) { echo '" border="0"/>'; } ?>
							<?php if(get_sub_field('client_logo_width')) { echo '</div>'; } ?>
							<?php if( get_sub_field('client_logo') ) { echo '</div>'; } ?>

			<?php if(get_sub_field('photo')) { echo '</div>'; } ?> 

			<?php if(get_sub_field('headline') || get_sub_field('description') || get_sub_field('client_logo')) { echo '<div class="grid-5b fl clearfix"><div class="grid-page-mod mauto clearfix">'; } ?>

				<?php if(get_sub_field('headline')) { echo '<h3 class="block-headline_alt pb2 ' . get_sub_field('headline_text_color') . '">' . get_sub_field('headline') . '</h3>'; } ?>
				<?php if(get_sub_field('description')) { echo '<div class="sp ' . get_sub_field('description_text_color') . '">' . get_sub_field('description') . '</div>'; } ?>

				<!-- start repeater-list --> 
				<?php if( have_rows('buttons') ): $pr = 0;
				echo '<div class="grid-10 fl mb50">';
				// loop through the rows of data
				while ( have_rows('buttons') ) : the_row(); ?> 
					<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="fl right-link'; } ?> <?php if(get_sub_field('text_color')) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('arrow_color')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
					<?php if(get_sub_field('target_blank') == true) { echo 'target="_blank"'; } ?> 
					<?php if(get_sub_field('link')) { echo '>'; } ?>
					<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
					<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
				<?php endwhile; echo '</div>'; endif; ?> 

			<?php if(get_sub_field('headline') || get_sub_field('description') || get_sub_field('client_logo')) { echo '</div></div>'; } ?>
			<div class="grid-10 fl slant pt5 clearfix"><img class="responsive-img" src="https://channelvmedia.com/wp-content/uploads/2021/05/divider-slant-blue.svg" alt="Slanted Divider Line"></div>
			</div> 
			<?php endwhile; echo ''; endif; ?> 
			<!-- end repeater-list --> 
		</div>
	</div>
</section>