<?php
/**
 * Slider One Block Template.
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
$slider_one_padding_top = get_field('slider_one_padding_top') ?: 'Section Padding Top'; 
$slider_one_padding_bottom = get_field('slider_one_padding_bottom') ?: 'Section Padding Bottom'; 
$slider_one_headline = get_field('slider_one_headline') ?: 'Headline';
$slider_one_headline_color = get_field('slider_one_headline_color') ?: 'Headline Color'; 
$slider_one_subheadline = get_field('slider_one_subheadline') ?: 'Subheadline'; 
$slider_one_subheadline_color = get_field('slider_one_subheadline_color') ?: 'Subheadline Color'; 
$slider_one_text = get_field('slider_one_text') ?: 'Intro Text'; 
$slider_one_text_color = get_field('slider_one_text_color') ?: 'Intro Text Color'; 
$slider_one_background_color = get_field('slider_one_background_color') ?: 'Slide Background Color';
$slider_one_photo = get_sub_field('slider_one_photo') ?: 'Photo'; 
$slider_one_photo_position = get_sub_field('slider_one_photo_position') ?: 'Photo Position';
$slider_one_name = get_sub_field('slider_one_name') ?: 'Title'; 
$slider_one_desc = get_sub_field('slider_one_desc') ?: 'Description'; 
$slider_one_link = get_sub_field('slider_one_link') ?: 'Link';  
$slider_one_title_color = get_field('slider_one_title_color') ?: 'Blog Post Title Color';
$slider_one_desc_color = get_field('slider_one_desc_color') ?: 'Blog Post Description Color';
$slider_one_post_link_color = get_field('slider_one_post_link_color') ?: 'Blog Post Text Link Color';
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl bg-white pad oh clearfix" style="<?php if(get_field('slider_one_padding_top')) { echo 'padding-top:' . get_field('slider_one_padding_top') . ';'; } ?> <?php if(get_field('slider_one_padding_bottom')) { echo 'padding-bottom:' . get_field('slider_one_padding_bottom') . ';'; } ?>">
	  
	<div class="grid-page mauto clearfix"> 
		<?php if((get_field('slider_one_headline') || get_field('slider_one_subheadline') || get_field('slider_one_text')) == true ) { echo '<div class="grid-10 fl pb1 clearfix">'; } ?>
			<?php if(get_field('slider_one_headline')) { echo '<h2 class="block-headline_alt  mb0 bkw '; } ?><?php if((get_field('slider_one_headline_color') && get_field('slider_one_headline')) == true ) { echo '' . get_field('slider_one_headline_color') . ''; } else { echo''; } ?><?php if(get_field('slider_one_headline')) { echo '">' . get_field('slider_one_headline') . '</h2>'; } ?>
			<?php if(get_field('slider_one_subheadline')) { echo '<span class="block-subheadline"'; } ?><?php if((get_field('slider_one_subheadline') && get_field('slider_one_subheadline_color')) == true ) { echo ' style="color:' . get_field('slider_one_subheadline_color') . ';"'; } ?><?php if(get_field('slider_one_subheadline')) { echo '>' . get_field('slider_one_subheadline') . '</span>'; } ?>
			<?php if(get_field('slider_one_text')) { echo '<span class="block-text"'; } ?><?php if((get_field('slider_one_text_color') && get_field('slider_one_text')) == true ) { echo ' style="color:' . get_field('slider_one_text_color') . ';"'; } ?><?php if(get_field('slider_one_text')) { echo '>' . get_field('slider_one_text') . '</span>'; } ?>
		<?php if((get_field('slider_one_headline') || get_field('slider_one_subheadline') || get_field('slider_one_text')) == true ) { echo '</div>'; } ?>
		<div class="grid-10 fl clearfix"> 
				<!-- START SLIDER -->
				<div class="swiper-container swiper_slider_one clearfix">
					
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
					<!-- Add Pagination -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>  
					
					<div class="swiper-wrapper clearfix">
						<?php if(get_field('slider_one_slides')): $i = 0; ?> 
								<?php while(has_sub_field('slider_one_slides')): $i++; ?> 
								<div class="swiper-slide clearfix">
									<ul class="slider-one-slide-list clearfix"> 
										<li class="clearfix" style="<?php if(get_sub_field('slider_one_photo')) { echo 'background-color:' . get_sub_field('slider_one_background_color') . ';'; } ?>"> 
											<div class="slider-one-pic clearfix">						
												<?php if(get_sub_field('slider_one_photo')) { echo '<span class="post-img"><span class="post-bg clearfix" style="background-image:url(' . get_sub_field('slider_one_photo') . ');'; } ?><?php if((get_sub_field('slider_one_photo_position') && get_sub_field('slider_one_photo')) == true ) { echo 'background-position:' . get_sub_field('slider_one_photo_position') . ';'; } ?><?php if(get_sub_field('slider_one_photo')) { echo '"><span class="color-overlay purple-pink-diagonal opacity20"></span></span><span class="post-img-cover benefits-left"></span></span>'; } ?> 
											</div>
											<div class="slider-one-content clearfix">													
												<?php if(get_sub_field('slider_one_name')) { echo '<h3 class="post-name mt0">' . get_sub_field('slider_one_name') . '</h3>'; } ?>
												<?php if(get_sub_field('slider_one_desc')) { echo '<span class="post-desc">' . get_sub_field('slider_one_desc') . '</span>'; } ?>
												<?php if(get_sub_field('slider_one_button_link')) { echo '<a href="' . get_sub_field('slider_one_button_link') . '" role="link">'; } ?>
												<?php if((get_sub_field('slider_one_button_text') && get_sub_field('slider_one_button_link')) == true ) { echo '<span class="post-link">' . get_sub_field('slider_one_button_text') . '</span>'; } ?>
												<?php if(get_sub_field('slider_one_button_link')) { echo '</a>'; } ?>
											</div>
										</li>
									</ul>
								</div> 
								<?php endwhile; ?> 
						<?php endif; ?>
					</div> <!-- END swiper-wrapper -->
					<!-- END SLIDER --> 
				</div>
				<!-- END SWIPER swiper-container -->
		</div> 
				
				
	</div>  
	<!-- js is in /js/swiper-client-logos.js -->
	<style type="text/css">
	.grid-page { clear:both; display:block; margin:0 auto; min-height:10px; position:relative; width:80%; max-width:1200px !important;}
	.slider-one-slide-list{display:table;float:left;margin:0px auto !important;padding:0 !important;position:relative;width:100%;}
	.slider-one-slide-list li{background-color:#fff;display:block;margin:0 !important;min-height:400px;padding:0;position:relative;width:100%;} 
	.slider-one-slide-list li a {display:block;position:relative;transition:all .5s ease-in-out;width:100%;}
	.slider-one-slide-list li .slider-one-content {display:block;float:left;padding:50px 0 0 3%;position:relative;width:30%;}
	.slider-one-slide-list li .slider-one-pic {bottom:0;display:block;height:100%;padding:0;position:absolute;right:0;top:0;width:65%;}
	.slider-one-slide-list li .post-img {background-position:center center;background-repeat:no-repeat;background-size:cover;bottom:0;display:block;height:100%;left:0;margin:0;overflow:hidden;padding:0;position:absolute;right:0;top:0;width:100%;}
   	.slider-one-slide-list li .post-img .post-bg {background-position:center center;background-repeat:no-repeat;background-size:cover;bottom:0;display:block;height:100%;left:0;margin:0;padding:0;position:absolute;right:0;top:0;width:100%;}
	.slider-one-slide-list li .post-img .post-bg .color-overlay {}
	.slider-one-slide-list li .post-name {color:#3A357E;display:block;float:left;font-family:'Oswald', sans-serif;font-weight:500;font-size:24px;line-height:110%;padding:0 0 10px;position:relative;text-align:left;width:100%;}
 	.slider-one-slide-list li .post-desc {display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;margin:0;position:relative;text-align:left;width:100%;} 
	.slider-one-slide-list li .post-desc p{color:#333;display:block;font-family:'Lato', Helvetica, sans-serif;font-weight:400;font-size:16px;line-height:120%;position:relative;width:100%;}
	.slider-one-slide-list li .post-link {color:#3A357E;display:block;float:left;font-family:'Lato', Helvetica, sans-serif;font-weight:400;font-size:16px;padding-bottom:20px;position:relative;text-align:left;width:100%;}
	.slider-one-slide-list li .post-link::after {content: "→";margin-left:5px;}
	.slider-one-slide-list li a:hover .post-link {color:#C83493;}
	
	.swiper_slider_one .swiper-button-next, .swiper_slider_one .swiper-button-prev {margin-top:0;top:0 !important;}
	.swiper_slider_one .swiper-button-next:hover, .swiper_slider_one .swiper-button-prev:hover {opacity:1;}
	.swiper_slider_one.swiper-container {overflow:visible;padding-top:50px;}
	.swiper_slider_one .swiper-button-next, .swiper_slider_one .swiper-container-rtl .swiper-button-prev {background-image: url(/wp-content/uploads/2022/03/cs-next-arrow-pink.svg);right:0;background-position:center;background-repeat:no-repeat;}
	.swiper_slider_one .swiper-button-prev, .swiper_slider_one .swiper-container-rtl .swiper-button-next {background-image: url(/wp-content/uploads/2022/03/cs-prev-arrow-pink.svg);left:unset;right:50px;background-position:center;background-repeat:no-repeat;}
	
	.swiper_slider_one .swiper-button-prev::after, .swiper-rtl .swiper-button-next::after {content: '';}
	.swiper_slider_one .swiper-button-next::after, .swiper-rtl .swiper-button-prev::after { content: '';
}
		
	.swiper_slider_one .swiper-container-horizontal > .swiper-pagination-bullets, .swiper_slider_one .swiper-pagination-custom, .swiper_slider_one .swiper-pagination-fraction {bottom:unset;left:unset;right:100px;top:13px;width:100px;}
	.swiper_slider_one.swiper-container .swiper-pagination, .swiper_slider_one.swiper-container .swiper-pagination-current, .swiper_slider_one.swiper-container .swiper-pagination-total {color:#c83493 !important;}
  		
	@media screen and (max-width: 800px) {
		.swiper_slider_one .swiper-button-prev, .swiper_slider_one .swiper-container-rtl .swiper-button-next {left: unset !important;}
	}
	@media screen and (max-width: 767px) {
		.slider-one-slide-list li .post-name {font-size:18px;}
	}
	@media screen and (max-width: 640px) { 
		.swiper-container {width:80%;}
	}
	@media screen and (max-width: 600px) { 
		.slider-one-slide-list li .slider-one-pic {float:left;height:300px;position:relative;width:100%;}
		.slider-one-slide-list li .slider-one-content {padding:20px 30px 30px;width:100%;}
	}
	</style>  
 	<!--Inline style for Hero Block-->
	<style type="text/css">
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> {
			background-color: <?php echo $slider_one_background_color; ?> !important; 
		} 
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .slider-one-slide-list .post-name { 
			color: <?php echo $slider_one_title_color; ?> !important;
		} 
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .slider-one-slide-list .post-desc p { 
			color: <?php echo $slider_one_desc_color; ?> !important;
		} 
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .slider-one-slide-list .post-link { 
			color: <?php echo $slider_one_post_link_color; ?> !important;
		} 
	</style>
	<script>  
	</script>
</section>