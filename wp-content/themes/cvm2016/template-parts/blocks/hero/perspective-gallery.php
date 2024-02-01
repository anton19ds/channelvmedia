<?php
/**
 * Hero Color Block Template.
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
// Load values and defaults.
$pg_background_color = get_field('pg_background_color') ?: 'Background Color'; 
$pg_title = get_field('pg_title') ?: 'Title'; 
$pg_title_text_color = get_field('pg_title_text_color') ?: 'Title Color';
$pg_subtitle = get_field('pg_subtitle') ?: 'Subtitle'; 
$pg_subtitle_text_color = get_field('pg_subtitle_text_color') ?: 'Subtitle Color'; 
$pg_photo= get_sub_field('pg_photo') ?: 'Photo';
$link = get_sub_field('link') ?: 'Button Link';
$text = get_sub_field('text') ?: 'Button Text'; 
$text_color = get_sub_field('text_color'); 
?>
 
<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="perspective-gallery clearfix" <?php if(get_field('pg_background_color')) { echo 'style="background:' . get_field('pg_background_color') . ';"'; } ?>>
	 
	<div class="header-perspective-gallery">
	<!-- start repeater-list --> 
	<?php if( have_rows('pg_photos_left') ): $pr = 0;
	echo '<div class="pg-left">';
	// loop through the rows of data
	while ( have_rows('pg_photos_left') ) : the_row(); ?>
		<?php if(get_sub_field('pg_photo_size')) { echo '<div class="pg-image pg-image-' . get_sub_field('pg_photo_size') . '">'; } ?>
		<?php $image = get_sub_field('pg_photo');
		if( !empty( $image ) ): ?>
			<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<span class="color-overlay-exact purple-pink-diagonal opacity20" style="display:none;"></span>
		<?php endif; ?>
		<?php if(get_sub_field('pg_photo_size')) { echo '</div>'; } ?> 
	<?php endwhile; echo '</div>'; endif; ?>
		
	<!-- start repeater-list --> 
	<?php if( have_rows('pg_photos_right') ): $pr = 0;
	echo '<div class="pg-right">';
	// loop through the rows of data
	while ( have_rows('pg_photos_right') ) : the_row(); ?>
		<?php if(get_sub_field('pg_photo_size')) { echo '<div class="pg-image pg-image-' . get_sub_field('pg_photo_size') . '">'; } ?>
		<?php $image = get_sub_field('pg_photo');
		if( !empty( $image ) ): ?>
			<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<span class="color-overlay-exact purple-pink-diagonal opacity20" style="display:none;"></span>
		<?php endif; ?>
		<?php if(get_sub_field('pg_photo_size')) { echo '</div>'; } ?> 
	<?php endwhile; echo '</div>'; endif; ?> 
	</div> 

	<div class="pg-content">
		<?php if(get_field('pg_title')) { echo '<h1 class="block-headline_alt '; } ?>
			<?php if(get_field('pg_title_text_color')) { echo '' . get_field('pg_title_text_color') . ''; } ?>
		<?php if(get_field('pg_title')) { echo ' z11">' . get_field('pg_title') . '</h1>'; } ?>

		<?php if(get_field('pg_subtitle')) { echo '<p class="block-subheadline ppl0 z11 '; } ?>
			<?php if(get_field('pg_subtitle_text_color')) { echo '' . get_field('pg_subtitle_text_color') . ''; } ?>
		<?php if(get_field('pg_subtitle')) { echo '">' . get_field('pg_subtitle') . '</p>'; } ?>
	</div> 
	 
	<!-- start repeater-list --> 
	<?php if( have_rows('pg_photos_right') ): $pr = 0;
	echo '<div class="pg-images-mobile clearfix">';
	// loop through the rows of data
	while ( have_rows('pg_photos_right') ) : the_row(); ?>
 		<?php $image = get_sub_field('pg_photo');
		if( !empty( $image ) ): ?>
			<img class="responsive-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> 
		<?php endif; ?>
 	<?php endwhile; echo '</div>'; endif; ?>  
	
	<div class="pg-content-mobile clearfix">
		<?php if(get_field('pg_title')) { echo '<h2 class="sp '; } ?>
			<?php if(get_field('pg_title_text_color')) { echo '' . get_field('pg_title_text_color') . ''; } ?>
		<?php if(get_field('pg_title')) { echo '">' . get_field('pg_title') . '</h2>'; } ?>

		<?php if(get_field('pg_subtitle')) { echo '<p class="subtitle ppl0'; } ?>
			<?php if(get_field('pg_subtitle_text_color')) { echo '' . get_field('pg_subtitle_text_color') . ''; } ?>
		<?php if(get_field('pg_subtitle')) { echo '">' . get_field('pg_subtitle') . '</p>'; } ?>
	</div>
	
 	<!--Inline style for Hero Block-->
	<style type="text/css"> 
		.perspective-gallery {align-items:center;display:flex;flex-direction:column;height: 80vh;justify-content:center;perspective:1000px;/* for 3D rotations */position:relative;z-index: 2;
		background: #181542; 
		background: -moz-linear-gradient(45deg, #181542 0%, #5854aa 40%, #3b388d 60%, #0d0b29 100%); 
		background: -webkit-linear-gradient(45deg, #181542 0%, #5854aa 40%, #3b388d 60%, #0d0b29 100%); 
		background: linear-gradient(45deg, #181542 0%, #5854aa 40%, #3b388d 60%, #0d0b29 100%); 
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#181542', endColorstr='#0d0b29',GradientType=1 ); 
		}
		.perspective-gallery h1 {color:#fff;font-family: 'Oswald', Helvetica, sans-serif !important;/*font-size:5vw !important;line-height:5vw !important;*/margin-bottom:0;pointer-events:none;text-shadow:none !important;width:55vw;z-index:2;
		-webkit-backface-visibility: hidden;
    	-webkit-transform: translateZ(0) scale(1.0, 1.0);
    	transform: translateZ(0);
		-webkit-font-smoothing: antialiased !important;font-smoothing: antialiased !important;}
		.perspective-gallery h1 span {display:block;}
		.subtitle {color:#fff;font-family: 'Lato', sans-serif !important;font-size:1.5vw !important;line-height:1.9vw !important;pointer-events:none;text-shadow:none !important;width:40vw;z-index:2;}
		.header-perspective-gallery {bottom:0;left:0;right:0;position:absolute;top:0;}
		.pg-left {left:0;position:absolute;top:0;}
		.pg-right {right:0;position:absolute;top:0;}
		.pg-image{background-color:#fff;left:0;pointer-events:none;position:absolute;top:0;will-change:transform;-webkit-backface-visibility: hidden !important;-moz-backface-visibility: hidden !important;backface-visibility: hidden !important;z-index:-1;}
		.pg-image-l {padding-bottom:24vw;width:20vw;}
		.pg-image-m {padding-bottom:22vw;width:20vw;}
		.pg-image-s {padding-bottom:18vw;width:16vw;}
		.pg-image img {height:100%;left:0;object-fit:cover;object-position:50% 50%;/* centers image */opacity:1;position:absolute;top:0;width:100%;}  
		.pg-left .pg-image:nth-child(1) {left:15vw;top:10vh;}
		.pg-left .pg-image:nth-child(2) {left:6vw;top:23vh;}
		.pg-left .pg-image:nth-child(3) {left:14vw;top:48vh;} 
		
		.pg-right .pg-image:nth-child(1) {left:auto;right:30vw;top:14vh;} 
		.pg-right .pg-image:nth-child(2) {left:auto;right:12vw;top:8vh;}
		.pg-right .pg-image:nth-child(3) {left:auto;right:3vw;top:30vh;z-index:1;}
		.pg-right .pg-image:nth-child(4) {left:auto;right:25vw;top:40vh;z-index:1;}
		.pg-content{left:5vw;position:absolute;width:40vw;}
		.pg-button-wrap {height:0;left:6vw;overflow:visible;position:relative;top:-80px;width:80vw;z-index:100;}
		.pg-buttons {width:80vw;z-index:1;}
		/* .pg-buttons a {text-shadow: 0 1px 5px #000;} */ 
		.pg-images-mobile, .pg-content-mobile {display:none;}
 		@media screen and (max-width: 1800px) {
			.pg-right .pg-image:nth-child(1) {top:18vh;} 
			.pg-right .pg-image:nth-child(2) {top:12vh;}
			.pg-right .pg-image:nth-child(3) {top:34vh;}
			.pg-right .pg-image:nth-child(4) {top:44vh;}
		}
		@media screen and (max-width: 1500px) {
			.pg-image-l {padding-bottom:26vw;width:22vw;}
			.pg-image-m {padding-bottom:24vw;width:22vw;}
			.pg-image-s {padding-bottom:22vw;width:18vw;}
			.pg-right .pg-image:nth-child(1) {right:25vw;} 
			.pg-right .pg-image:nth-child(2) {right:3vw;}
			.pg-right .pg-image:nth-child(3) {right:5vw;}
			.pg-right .pg-image:nth-child(4) {right:22vw;}
		}
		@media screen and (max-width: 1300px) {
			.perspective-gallery h1 {font-size:6.5vw !important;line-height:6.5vw !important;padding-bottom:10px;}
			.subtitle {font-size:2.5vw !important;line-height:2.9vw !important;}
		} 
		@media screen and (max-width: 1060px) {
			.pg-image-l {padding-bottom:34vw;width:22vw;}
			.pg-image-m {padding-bottom:32vw;width:22vw;}
			.pg-image-s {padding-bottom:30vw;width:18vw;}
		}
		@media screen and (max-width: 767px) {
			.pg-right .pg-image:nth-child(1) {right:15vw;} 
			.perspective-gallery h1 {font-size: 9vw !important;line-height:9vw !important;} 
			.subtitle {font-size:4.5vw !important;line-height:5.2vw !important;} 
		} 
		@media screen and (max-width: 640px) {
			.down-link {clear:both;display:block;width:100%;}
		}
		@media screen and (max-width: 320px) {
			.header-perspective-gallery, .pg-content {display:none;}
			.pg-images-mobile, .pg-content-mobile {display:block;float:left;margin:0 10%;position:relative;width:80%;}
			.pg-images-mobile img {padding-top:75px;}
			.pg-images-mobile img:nth-child(1), .pg-images-mobile img:nth-child(2), .pg-images-mobile img:nth-child(4) {display:none;}
			.pg-content-mobile h1, .pg-content-mobile p.subtitle {float:left;display:block;position:relative;width:100%;}
			.pg-content-mobile h1 {margin-top:20px;}
			.perspective-gallery {height:unset;padding-bottom:100px;}
			.pg-button-wrap {left:10%;width:80%;}
			.split-cta-headline {font-size:24px !important;}
		}
	</style>  
 	<!--Inline style for Hero Block-->
	<style type="text/css">
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> {
			background-color:<?php echo $background_color; ?>; 
		}  
	</style>  
</section>
	<div class="pg-button-wrap">
		<!-- start repeater-list --> 
		<?php if( have_rows('pg_button_text_links') ): $pr = 0;
		echo '<p class="mb0 mt0 down-arrow-container pg-buttons">';
		// loop through the rows of data
		while ( have_rows('pg_button_text_links') ) : the_row(); ?> 
			<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="down-link'; } ?> <?php if(get_sub_field('text_color')) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('arrow_color')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
			<?php if(get_sub_field('target_blank') == true) { echo 'target="_blank"'; } ?> 
			<?php if(get_sub_field('link')) { echo '>'; } ?>
			<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
			<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
		<?php endwhile; echo '</p>'; endif; ?> 

		<!-- start repeater-list --> 
		<?php if( have_rows('button_swipe_rect') ): $pr = 0;
		echo '<div class="mb0 mt0">';
		// loop through the rows of data
		while ( have_rows('button_swipe_rect') ) : the_row(); ?> 
		<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect '; } ?> <?php if(get_sub_field('button_color') && get_sub_field('link')) { echo '' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
		<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
		<?php if(get_sub_field('link')) { echo '>'; } ?>
		<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
		<div class="transition-rect"></div> 
		<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
		<?php endwhile; echo '</div>'; endif; ?>   
	</div>