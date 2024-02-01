<?php
/**
 * Logos Slider Block Template.
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
	
	<div class="grid-10 fl clearfix">
		<?php if(get_field('slider_title_width') || get_field('slider_title_top_padding') || get_field('slider_title_bottom_padding') || get_field('slider_title_position')) { echo '<div class="' . get_field('slider_title_width') . ''; } ?><?php if(get_field('slider_title_position')) { echo ' ' . get_field('slider_title_position') . ''; } else { echo'';} ?><?php if(get_field('slider_title_top_padding')) { echo ' ' . get_field('slider_title_top_padding') . ''; } ?><?php if(get_field('slider_title_bottom_padding')) { echo ' ' . get_field('slider_title_bottom_padding') . ''; } ?><?php if(get_field('slider_title_width') || get_field('slider_title_top_padding') || get_field('slider_title_bottom_padding') || get_field('slider_title_position')) { echo ' clearfix">'; } ?>
			<?php if(get_field('slider_title')) { echo '<h2 class="block-headline_alt light tac mb0 ' . get_field('slider_title_color') . '">' . get_field('slider_title') . '</h2>'; } ?>
		<?php if(get_field('slider_title_width') || get_field('slider_title_top_padding') || get_field('slider_title_bottom_padding') || get_field('slider_title_position')) { echo '</div>'; } ?>

		<!-- START SWIPER -->
		<div class="swiper-container swiper1">
			<div class="swiper-wrapper">
				<!-- Swiper JS -->
				<?php
				// check if the flexible content field has rows of data
				if( have_rows('client_logos_slider') ):
					// loop through the rows of data
					while ( have_rows('client_logos_slider') ) : the_row();
						// check current row layout
						if( get_row_layout() == 'client_logos_slide' ):
							// check if the nested repeater field has rows of data
							if( have_rows('logo_slide') ):
								echo '<div class="swiper-slide"><ul class="recognition-logos cb mauto pt0 pb0 clearfix">';
								// loop through the rows of data
								while ( have_rows('logo_slide') ) : the_row(); ?>
									<?php $image = get_sub_field('logo'); ?>
									<?php if( get_sub_field('logo') ) { echo '<li class="clearfix"><div class="absolute-block"><div class="dtable clearfix"><div class="dtable-cell clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('logo') ) { echo '" width="600" height="400" border="0"/></div></div></div></li>'; } ?>						
								<?php endwhile;
								echo '</ul></div>';
							endif;
						endif;
					endwhile;
				else :
					// no layouts found
				endif;
				?>
				<!-- END SWIPER -->
			</div> 
			<div class="swiper-pagination"></div> 
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div> 
		</div> <!-- END SWIPER swiper-container -->
	</div> <!-- end grid-wide -->
	
	<style type="text/css"> 
		@media screen and (max-width: 767px) { 
		} 
	</style> 	
</section>