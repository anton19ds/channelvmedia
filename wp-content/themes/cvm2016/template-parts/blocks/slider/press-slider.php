<?php
/**
 * Press Slider Block Template.
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
		
		
   	<!-- ---------- Slider ---------- -->
	<?php if((get_field('press_slider'))) { echo '<div class="grid-10 fl clearfix">'; } ?> 
			
			<!-- Link Swiper's CSS -->
			<!-- <link rel="stylesheet" href="https://channelvmedia.com/wp-content/themes/cvm2016/css/swiper.min.css">  -->
			<style> 
				.swiper-button-next.swiper-button-disabled, .swiper-button-prev.swiper-button-disabled {opacity:0;filter:alpha(opacity=0);}
				.swiper-button-prev, .swiper-container-rtl .swiper-button-next {left:0px;}
				.swiper-button-next, .swiper-container-rtl .swiper-button-prev {right:0px;} 
				.swiper-container.swiper4 {height:300px;margin:0 auto;width:100%;} 
				.swiper-container.swiper4 .swiper-slide {
					text-align: center;
					font-size: 18px;
					background: transparent;
					/* Center slide text vertically */
					display: -webkit-box;
					display: -ms-flexbox;
					display: -webkit-flex;
					display: flex;
					-webkit-box-pack: center;
					-ms-flex-pack: center;
					-webkit-justify-content: center;
					justify-content: center;
					-webkit-box-align: center;
					-ms-flex-align: center;
					-webkit-align-items: center;
					align-items: center;
				}  
				.swiper-pagination-bullet {
					background: #000 none repeat scroll 0 0;
					border-radius: 0;
					display: inline-block;
					height: 3px;
					opacity: 0.2;
					width: 20px;
				}
				.swiper-pagination-bullet-active {
					background: #cc2c9c none repeat scroll 0 0;
					opacity: 1;
				}
				.swiper-pagination-bullet:hover {
					background: #292560 none repeat scroll 0 0;
					opacity: 1;
				}  
				@media screen and (max-width: 767px) { 
					.swiper-container.swiper4 {height:200px !important;}
				} 
			</style>
			<!-- Swiper --> 
			<?php if(get_field('press_slider')): $count = 0; ?>
			<div class="swiper-container swiper4">
				<div class="swiper-wrapper">
					<?php while(has_sub_field('press_slider')): $count++; ?>
						<?php if(get_sub_field('press_photo')) { echo '<div class="swiper-slide" style="background-image:url(' . get_sub_field('press_photo') . ');background-size:contain;background-position:center bottom;background-repeat:no-repeat;"></div>'; } ?> 
					<?php endwhile; ?> 
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div> 
				<div class="swiper-button-next swiper-button-black swiper-button-disabled"></div>
				<div class="swiper-button-prev swiper-button-black"></div> 
			</div> <!-- end swiper-container swiper4 --> 
			<?php endif; ?>  
	<?php if((get_field('press_slider'))) { echo '</div>'; } ?>
	</div>
</section>