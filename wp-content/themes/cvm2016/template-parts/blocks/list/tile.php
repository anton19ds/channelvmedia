<?php
/**
 * Tile Block Template.
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

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php if(get_field('tile_section_background_color')) { echo '' . get_field('tile_section_background_color') . ''; } ?> <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb5';} ?> clearfix"> 
	
	<?php if(get_field('tile_section_background_photo')) { echo '<div class="color-overlay bg-common'; } ?><?php if((get_field('tile_section_background_photo_opacity')) == true) { echo ' ' . get_field('tile_section_background_photo_opacity') . ''; } ?><?php if(get_field('tile_section_background_photo')) { echo ' clearfix" style="background-image:url(' . get_field('tile_section_background_photo') . ');'; } ?><?php if((get_field('tile_section_background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?><?php if(get_field('tile_section_background_photo')) { echo '"></div>'; } ?>

	<?php if(get_field('tile_section_background_color_filter')) { echo '<div class="color-overlay ' . get_field('tile_section_background_color_filter') . ''; } ?><?php if((get_field('tile_section_background_color_filter_opacity')) == true) { echo ' ' . get_field('tile_section_background_color_filter_opacity') . ' '; } ?><?php if(get_field('tile_section_background_color_filter')) { echo ' clearfix"></div>'; } ?>

		<?php if((get_field('tile_section_headline') || get_field('tile_section_subheadline') || get_field('tile_section_text')) == true ) { echo '<div class="grid-page mauto"><div class="grid-10 fl clearfix">'; } ?>

			<?php if((get_field('tile_section_header_width')) == true ) { echo '<div class="' . get_field('tile_section_header_width') . ''; } ?><?php if((get_field('tile_section_header_align')) == true ) { echo ' ' . get_field('tile_section_header_align') . ''; } ?><?php if((get_field('tile_section_header_text_align')) == true ) { echo ' ' . get_field('tile_section_header_text_align') . ''; } ?><?php if((get_field('tile_section_header_width')) == true ) { echo '">'; } ?>
		
			<?php if(get_field('tile_section_label')) { echo '<p class="sp-small mt0 mb20 white'; } ?>
			<?php if(get_field('tile_section_label_text_color')) { echo '' . get_field('tile_section_label_text_color') . ''; } ?>
			<?php if(get_field('tile_section_label')) { echo 'clearix">' . get_field('tile_section_label') . '</p>'; } ?> 
		
			<?php if(get_field('tile_section_headline')) { echo '<h2 class="block-headline_alt mt0 mb10 '; } ?><?php if(get_field('tile_section_headline_color')) { echo '' . get_field('tile_section_headline_color') . ''; } else { echo ' '; } ?><?php if(get_field('tile_section_headline')) { echo '">' . get_field('tile_section_headline') . '</h2>'; } ?>
			<?php if(get_field('tile_section_subheadline')) { echo '<span class="block-subheadline pt0 pb0 mb20"'; } ?><?php if(get_field('tile_section_subheadline_color')) { echo ' style="color:' . get_field('tile_section_subheadline_color') . ';"'; } ?><?php if(get_field('tile_section_subheadline')) { echo '>' . get_field('tile_section_subheadline') . '</span>'; } ?>
			<?php if(get_field('tile_section_text')) { echo '<span class="block-text"'; } ?><?php if((get_field('tile_section_text_color') && get_field('tile_section_text')) == true ) { echo ' style="color:' . get_field('tile_section_text_color') . ';"'; } ?><?php if(get_field('tile_section_text')) { echo '>' . get_field('tile_section_text') . '</span>'; } ?> 
		
			<?php if((get_field('tile_section_header_width')) == true ) { echo '</div>'; } ?>
		
		<?php if((get_field('tile_section_headline') || get_field('tile_section_subheadline') || get_field('tile_section_text')) == true ) { echo '</div></div>'; } ?>

		<?php if(get_field('tile_list')): $i = 0; ?>
			<div class="grid-page mauto clearfix"><ul class="tile-list-flex <?php if(get_field('tile_columns')) { echo ' ' . get_field('tile_columns') . ''; } ?>">
			<?php while(has_sub_field('tile_list')): $i++; ?> 
				<li class="<?php if(get_sub_field('tile_configurations')) { echo ' ' . get_sub_field('tile_configurations') . ''; } ?><?php if(get_sub_field('tile_span_columns')) { echo ' ' . get_sub_field('tile_span_columns') . ''; } ?><?php if(get_sub_field('tile_span_columns_triple')) { echo ' ' . get_sub_field('tile_span_columns_triple') . ''; } ?><?php if(get_sub_field('tile_span_rows')) { echo ' ' . get_sub_field('tile_span_rows') . ''; } ?>">
					<div class="post-content">

						<?php if(get_sub_field('tile_background_color')) { echo '<div class="color-overlay-exact ' . get_sub_field('tile_background_color') . ''; } ?><?php if((get_sub_field('tile_background_color_opacity')) == true) { echo ' ' . get_sub_field('tile_background_color_opacity') . ' '; } ?><?php if(get_sub_field('tile_background_color')) { echo ' clearfix"></div>'; } ?>  
						<?php if(get_sub_field('tile_background_photo')) { echo '<div class="color-overlay-exact bg-common'; } ?><?php if((get_sub_field('tile_background_photo') && get_sub_field('tile_background_photo_opacity')) == true) { echo ' ' . get_sub_field('tile_background_photo_opacity') . ' '; } ?><?php if(get_sub_field('tile_background_photo')) { echo '" style="background-image:url(' . get_sub_field('tile_background_photo') . ');"></div>'; } ?>  

						<?php if(get_sub_field('tile_background_photo_color_filter')) { echo '<div class="color-overlay-exact ' . get_sub_field('tile_background_photo_color_filter') . ''; } ?><?php if((get_sub_field('tile_background_photo_color_filter') && get_sub_field('tile_background_photo_color_filter_opacity')) == true) { echo ' ' . get_sub_field('tile_background_photo_color_filter_opacity') . ' '; } ?><?php if(get_sub_field('tile_background_photo_color_filter')) { echo ' clearfix"></div>'; } ?>

						<?php if(get_sub_field('tile_photo')) { echo '<div class="oh tile-photo clearfix'; } ?><?php if(get_sub_field('tile_photo_vertical_position') && get_sub_field('tile_photo')) { echo ' ' . get_sub_field('tile_photo_vertical_position') . ' '; } ?><?php if(get_sub_field('tile_photo_horizontal_position') && get_sub_field('tile_photo')) { echo ' ' . get_sub_field('tile_photo_horizontal_position') . ' '; } ?><?php if(get_sub_field('tile_photo')) { echo '"><div class="color-overlay bg-common clearfix" style="background-image:url(' . get_sub_field('tile_photo') . ');"></div></div>'; } ?>
						
						<?php if((get_sub_field('tile_label') || get_sub_field('tile_headline') || get_sub_field('tile_subheadline') || get_sub_field('tile_text') || get_sub_field('tile_button_link')) == true ) { echo '<div class="clearfix pb3 '; } ?><?php if(get_sub_field('tile_headline_background_photo') || get_sub_field('tile_headline_background_photo_color')) { echo 'pt0'; } else { echo'pt3'; } ?> <?php if(get_sub_field('tile_photo_vertical_position') && get_sub_field('tile_photo')) { echo ' ' . get_sub_field('tile_photo_vertical_position') . ' '; } ?><?php if(get_sub_field('tile_photo_horizontal_position') && get_sub_field('tile_photo')) { echo ' ' . get_sub_field('tile_photo_horizontal_position') . ' '; } ?><?php if(get_sub_field('tile_text_align')) { echo ' ' . get_sub_field('tile_text_align') . ' '; } ?><?php if(get_sub_field('tile_label') || get_sub_field('tile_headline') || get_sub_field('tile_desc')) { echo '"> '; } ?>

							<?php if(get_sub_field('tile_headline_background_photo') || get_sub_field('tile_headline_background_photo_color')) { echo '<div class="grid-10 fl pt2 pb2 mb20 bg-common" style="background-image:url(' . get_sub_field('tile_headline_background_photo') . ');">'; } else { echo ''; } ?> 

								<?php if(get_sub_field('tile_headline_background_photo_color') || get_sub_field('tile_headline_background_photo_color_opacity')) { echo '<div class="color-overlay-exact ' . get_sub_field('tile_headline_background_photo_color') . ''; } ?><?php if((get_sub_field('tile_headline_background_photo_color_opacity')) == true) { echo ' ' . get_sub_field('tile_headline_background_photo_color_opacity') . ' '; } ?><?php if(get_sub_field('tile_headline_background_photo_color') || get_sub_field('tile_headline_background_photo_color_opacity')) { echo ' clearfix"></div>'; } ?> 
						
								<?php if(get_sub_field('tile_headline_background_photo_color_filter') || get_sub_field('tile_headline_background_photo_color_filter_opacity')) { echo '<div class="color-overlay-exact ' . get_sub_field('tile_headline_background_photo_color_filter') . ''; } ?><?php if((get_sub_field('tile_headline_background_photo_color_filter_opacity')) == true) { echo ' ' . get_sub_field('tile_headline_background_photo_color_filter_opacity') . ' '; } ?><?php if(get_sub_field('tile_headline_background_photo_color_filter') || get_sub_field('tile_headline_background_photo_color_filter_opacity')) { echo ' clearfix"></div>'; } ?> 
							<?php if(get_sub_field('tile_headline_background_photo') || get_sub_field('tile_headline_background_photo_color')) { echo '<div class="grid-fixed-9 mauto">'; } else { echo '<div class="grid-fixed-9 mauto">'; } ?> 
						
								<?php if(get_sub_field('tile_label')) { echo '<p class="small mt0 mb10'; } ?><?php if(get_sub_field('tile_text_color') && get_sub_field('tile_label')) { echo ' ' . get_sub_field('tile_text_color') . ''; } ?><?php if(get_sub_field('tile_label')) { echo '">' . get_sub_field('tile_label') . '</p>'; } ?> 

								<?php if(get_sub_field('tile_headline')) { echo '<h3 class="post-headline mt0 mb0 pb1'; } ?><?php if(get_sub_field('tile_text_color') && get_sub_field('tile_headline')) { echo ' ' . get_sub_field('tile_text_color') . ''; } ?><?php if(get_sub_field('tile_headline')) { echo '">' . get_sub_field('tile_headline') . '</h3>'; } ?>
						  
							<?php if(get_sub_field('tile_headline_background_photo') || get_sub_field('tile_headline_background_photo_color')) { echo '</div></div>'; } else { echo '</div>'; } ?>
						
						<?php if((get_sub_field('tile_subheadline') || get_sub_field('tile_text') || get_sub_field('tile_button_link')) == true ) { echo '<div class="grid-fixed-9 mauto">'; } ?>
						
							<?php if(get_sub_field('tile_subheadline')) { echo '<div class="post-subheadline mt0 mb0 pb0'; } ?><?php if(get_sub_field('tile_text_color') && get_sub_field('tile_subheadline')) { echo ' ' . get_sub_field('tile_text_color') . ''; } ?><?php if(get_sub_field('tile_subheadline')) { echo '">' . get_sub_field('tile_subheadline') . '</div>'; } ?>
						
							<?php if(get_sub_field('tile_text')) { echo '<span class="post-desc pt1'; } ?><?php if(get_sub_field('tile_text_color') && get_sub_field('tile_text')) { echo ' ' . get_sub_field('tile_text_color') . ''; } ?><?php if(get_sub_field('tile_text')) { echo '">' . get_sub_field('tile_text') . '</span>'; } ?>
						
							<?php if((get_sub_field('tile_button_text') || get_sub_field('tile_button_link')) == true ) { echo '<span class="grid-10 fl mb0'; } ?><?php if((get_sub_field('tile_button_text')) == true) { echo ' mt0 1'; } else if((get_sub_field('tile_text') && get_sub_field('tile_button_text')) == true) { echo' mt20';}?><?php if((get_sub_field('tile_button_text') || get_sub_field('tile_button_link')) == true ) { echo '">'; } ?>

						<?php if(get_sub_field('tile_button_link')) { echo '<a href="' . get_sub_field('tile_button_link') . '" class="btn-swipe-rect mb0 '; } ?><?php if(get_sub_field('tile_background_color') && get_sub_field('tile_button_link')) { echo ' bg-alt ' . get_sub_field('tile_background_color') . ''; } ?><?php if(get_sub_field('tile_button_hubspot') && get_sub_field('tile_button_link')) { echo '' . get_sub_field('tile_button_hubspot') . ''; } ?> <?php if(get_sub_field('tile_button_color') && get_sub_field('tile_button_link')) { echo '' . get_sub_field('tile_button_color') . ''; } ?><?php if(get_sub_field('tile_button_link')) { echo '"'; } ?><?php if((get_sub_field('tile_target_link') && get_sub_field('tile_button_link')) == true) { echo ' target="_blank"'; } ?> 
								<?php if(get_sub_field('tile_button_link')) { echo '>'; } ?><?php if(get_sub_field('tile_button_text') && get_sub_field('tile_button_link')) { echo '<span>' . get_sub_field('tile_button_text') . '</span>'; } ?><?php if(get_sub_field('tile_button_link')) { echo '<div class="transition-rect"></div></a>'; } ?>
							<?php if((get_sub_field('tile_button_text') || get_sub_field('tile_button_link')) == true ) { echo '</span'; } ?>
						
						<?php if((get_sub_field('tile_subheadline') || get_sub_field('tile_text') || get_sub_field('tile_button_link')) == true ) { echo '</div>'; } ?>
						<?php if((get_sub_field('tile_label') || get_sub_field('tile_headline') || get_sub_field('tile_subheadline') || get_sub_field('tile_text') || get_sub_field('tile_button_link')) == true ) { echo '</div>'; } ?>
							 	 
					</div>  
 				</li>
			<?php endwhile; ?>
			</ul></div>
		<?php endif; ?> 

		<style type="text/css">  
		.tile-list-flex{display:grid;float:left;grid-template-columns: 1fr 1fr 1fr 1fr;margin:0px auto !important;padding:0 !important;position:relative;width:100%;}
		.tile-list-flex.triple{grid-template-columns: 1fr 1fr 1fr;}
		.tile-list-flex li{display:flex;flex-direction:column;padding:5px;}
		.tile-list-flex li:last-child {padding:5px !important;}

		.tile-list-flex li.tall{grid-row:span 2;}
		.tile-list-flex li.one-two{grid-column: 1 / 3;}
		.tile-list-flex li.two-three{grid-column: 2 / 4;}
		.tile-list-flex li.three-four{grid-column: 3 / 5;} 
		.tile-list-flex li.all-triple{grid-column: 1 / 4;}
		.tile-list-flex li.all-quad{grid-column: 1 / 5;} 
		.tile-list-flex li.first-three{grid-column: 1 / 4;}
		.tile-list-flex li.last-three{grid-column: 2 / 5;}
			
		.tile-list-flex li .post-img {background-position:center center;background-repeat:no-repeat;background-size:cover;float:left;display:block;height:250px;margin:0 0 20px;overflow:hidden;padding:0;position:relative;width:100%;-moz-transition:all 0.5s ease;-webkit-transition:all 0.5s ease;-o-transition:all 0.5s ease;-ms-transition:all 0.5s ease;transition:all 0.5s ease;}
 		.tile-list-flex li .post-img .post-bg {background-position:center center;background-repeat:no-repeat;background-size:cover;bottom:0;display:block;height:250px;left:0;margin:0;padding:0;position:absolute;right:0;top:0;width:100%;-moz-transition:all 3.0s ease;-webkit-transition:all 3.0s ease;-o-transition:all 3.0s ease;-ms-transition:all 3.0s ease;transition:all 3.0s ease;} 
 		.tile-list-flex li .post-content {display:block;float:left;height:100%;margin:0;overflow:hidden;padding:0;position:relative;width:100%;}
		.tile-list-flex li .small {font-size:12px;font-size: calc((112.5% + 0.25vw) / 2);line-height:100% !important;letter-spacing:2px;position:relative;text-transform:uppercase;}
		.tile-list-flex li .post-headline {color:#3A357E;display:block;float:left;font-family:'Oswald', sans-serif;font-weight:400;font-size:24px;font-size: calc((80% + 0.25vw) * 1.5);line-height:110% !important;padding-top:5px;position:relative;width:100%;}
		.tile-list-flex li .post-subheadline {color:#3A357E;display:block;float:left;font-family:'Lato', sans-serif;font-size:20px;font-size: calc((90% + 0.25vw) * 1.1);line-height:110% !important;padding-top:5px;position:relative;width:100%;}
 		.tile-list-flex li .post-desc, .tile-list-flex li .post-desc p {display:block;float:left;font-family:'Lato', sans-serif;font-size:16px;font-weight:400;line-height:120% !important;margin:0;position:relative;transition:all .5s ease-in-out;width:100%;} 
		.tile-list-flex li .post-link {color:#3A357E;display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;font-size:16px;font-size: calc((112.5% + 0.25vw) / 1.5);padding-bottom:20px;position:relative;text-align:left;width:100%;}
		.tile-list-flex li .post-link::after {content: "→";margin-left:5px;}
		.tile-list-flex li .post-content .btn-swipe-rect {padding-top:8px;padding-bottom:8px;}
			  
		.tile-horizontal {display:block;float:left;height:100%;position:relative;width:100%;}  
		.tile-horizontal .tile-photo-left {display:block;float:left;height:100%;padding:0;position:relative;width:50% !important;} 
		.tile-horizontal .tile-photo-right {display:block;float:right;height:100%;padding:0;position:relative;width:50% !important;}
		   
		.tile-vertical {width:100%;}
		.tile-vertical .tile-photo {clear:both;padding:25% 0;position:relative;width:100%;} 
		.tile-vertical .tile-photo.tile-top {display:block;padding:25% 0 55% !important;} 
		.tile-vertical .tile-photo.tile-bottom {bottom:0;display:block;margin-bottom:0%;position:absolute;}
		.tile-vertical .tile-bottom{margin-bottom:50%;}
			 
		.tile-vertical.tall .tile-photo.tile-top, 
		.tile-vertical.tall .tile-photo.tile-bottom{height:30%;}
		.tile-vertical.tall .tile-photo{height:30%;} 
		 
		.btn-swipe-rect.bg-alt.blue-rect:hover,
		.btn-swipe-rect.bg-alt.light-purple-rect:hover,
		.btn-swipe-rect.bg-alt.pink-rect:hover{border: 2px solid #3a357e !important;}	 
		.btn-swipe-rect.bg-alt.blue-rect:before,
		.btn-swipe-rect.bg-alt.light-purple-rect:before,
		.btn-swipe-rect.bg-alt.pink-rect:before {background:#3a357e !important;} 
			
		.btn-swipe-rect.bg-alt.bg-purple.light-purple-rect:hover,
		.btn-swipe-rect.bg-alt.bg-purple.pink-rect:hover{border: 2px solid #399ec7 !important;}
		.btn-swipe-rect.bg-alt.bg-purple.light-purple-rect:before,
		.btn-swipe-rect.bg-alt.bg-purple.pink-rect:before{background:#399ec7 !important;}
			
		.btn-swipe-rect.bg-alt.bg-purple.blue-rect:hover{border: 2px solid #e75fbc !important;}
		.btn-swipe-rect.bg-alt.bg-purple.blue-rect:before{background:#e75fbc !important;}

 		@media screen and (max-width: 1360px) {
			.tile-horizontal .tile-photo.tile-photo-right,
			.tile-horizontal .tile-photo.tile-photo-left {float:left;height:40%;padding:0% !important;width:100% !important;}
			.tile-horizontal.first-three .tile-photo.tile-photo-right,
			.tile-horizontal.last-three .tile-photo.tile-photo-right,
			.tile-list-flex.quad .tile-horizontal .tile-photo-right,
			.tile-horizontal.all-quad .tile-photo-right{float:right;}
			.tile-horizontal .tile-photo-right,
			.tile-horizontal .tile-photo-left {width:100% !important;}
			.tile-horizontal .tile-photo.tile-photo-right,
			.tile-horizontal .tile-photo-right,
			.tile-horizontal .tile-photo.tile-photo-left,
			.tile-horizontal.first-three .tile-photo-left,
			.tile-horizontal.last-three .tile-photo-left,
			.tile-horizontal.first-three .tile-photo-right,
			.tile-horizontal.last-three .tile-photo-right,
			.tile-list-flex.quad .tile-horizontal .tile-photo-right,
			.tile-list-flex.quad .tile-horizontal .tile-photo-left,
			.tile-horizontal.all-quad .tile-photo-right,
			.tile-horizontal.all-quad .tile-photo-left,
			.tile-list-flex.triple .tile-horizontal .tile-photo-right,
			.tile-list-flex.triple .tile-horizontal .tile-photo-left{height:100%;width:50% !important;}

 			.tile-horizontal.one-two .tile-photo.tile-photo-left,
 			.tile-horizontal.one-two .tile-photo-left,
 			.tile-horizontal.two-three .tile-photo.tile-photo-left,
 			.tile-horizontal.two-three .tile-photo-left,
 			.tile-horizontal.three-four .tile-photo.tile-photo-left,
 			.tile-horizontal.three-four .tile-photo-left{display:block;float:left;height:100% !important;padding:0;position:relative;width:50% !important;}
			.tile-horizontal.one-two .tile-photo.tile-photo-right,
			.tile-horizontal.one-two .tile-photo-right,
			.tile-horizontal.two-three .tile-photo.tile-photo-right,
			.tile-horizontal.two-three .tile-photo-right,
			.tile-horizontal.three-four .tile-photo.tile-photo-right,
			.tile-horizontal.three-four .tile-photo-right {display:block;float:right;height:100% !important;padding:0;position:relative;width:50% !important;}
			 
			.tile-list-flex.triple .tile-horizontal .tile-photo.tile-photo-right{float:right;} 
		}
 		@media screen and (max-width: 767px) {
			.tile-list-flex{grid-template-columns:1fr; }
			.tile-list-flex li.tall{grid-row:span 1;}
			.tile-list-flex li,
			.tile-list-flex li.one-two,
			.tile-list-flex li.two-three,
			.tile-list-flex li.three-four 
			.tile-list-flex li.all_triple,
			.tile-list-flex li.all-quad, 
			.tile-list-flex li.first-three,
			.tile-list-flex li.last-three{grid-column: 1 / 5;}
			.tile-horizontal .post-content .tile-photo.tile-photo-right {display:block;float:right;height:unset;padding: 25% 0 !important;position:relative;width:100% !important;}
			.tile-horizontal .tile-photo-right {width:100% !important;}
			.tile-horizontal .tile-photo.tile-photo-left {display:block;float:left;height:unset;padding: 25% 0 !important;position:relative;width:100% !important;}
			 
			.tile-vertical .tile-photo.tile-bottom {padding: 25% 0 !important;}
			.tile-vertical .tile-photo.tile-top {padding: 25% 0 !important;}
			
 			.tile-horizontal.one-two .tile-photo.tile-photo-left,
 			.tile-horizontal.one-two .tile-photo-left,
 			.tile-horizontal.two-three .tile-photo.tile-photo-left,
 			.tile-horizontal.two-three .tile-photo-left,
 			.tile-horizontal.three-four .tile-photo.tile-photo-left,
 			.tile-horizontal.three-four .tile-photo-left,
			.tile-horizontal.one-two .tile-photo.tile-photo-right,
			.tile-horizontal.one-two .tile-photo-right,
			.tile-horizontal.two-three .tile-photo.tile-photo-right,
			.tile-horizontal.two-three .tile-photo-right,
			.tile-horizontal.three-four .tile-photo.tile-photo-right,
			.tile-horizontal.three-four .tile-photo-right,
			.tile-horizontal.first-three .tile-photo-left,
			.tile-horizontal.last-three .tile-photo-left,
			.tile-horizontal.first-three .tile-photo-right,
			.tile-horizontal.last-three .tile-photo-right,
			.tile-horizontal.all-quad .tile-photo-right,
			.tile-horizontal.all-quad .tile-photo-left, 
			.tile-list-flex.quad .tile-horizontal .tile-photo-right,
			.tile-list-flex.quad .tile-horizontal .tile-photo-left,
			.tile-list-flex.quad .tile-vertical .tile-photo.tile-bottom,
			.tile-list-flex.quad .tile-vertical .tile-bottom,
			.tile-list-flex.quad .tile-vertical .tile-photo.tile-top,
			.tile-list-flex.quad .tile-vertical .tile-top,
			.tile-list-flex.triple .tile-horizontal .tile-photo-right,
			.tile-list-flex.triple .tile-horizontal .tile-photo-left{float:left;height:unset !important;padding:0;width:100% !important;}
			
			.tile-list-flex.triple .tile-horizontal .tile-photo.tile-photo-right{float:left;} 
			
			.tile-vertical .tile-bottom{margin-bottom:0;}
			
			.tile-vertical.tall .tile-photo.tile-top,
			.tile-vertical.tall .tile-photo.tile-bottom{height:unset;position:relative;}
			.tile-vertical.tall .tile-photo {height:unset;}
			
			.tile-list-flex li .small {font-size:12px;}
			.tile-list-flex li .post-headline {font-size:24px;}
			.tile-list-flex li .post-subheadline {font-size:18px;}
		} 
		@media screen and (max-width: 500px) {  
		}
		</style>  
</section>