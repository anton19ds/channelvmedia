<?php
/**
 * Alternating Video Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.ds
$id = 'block-' . $block['id'];
if( !empty($block['anchor']) ) {
   $id = $block['anchor'];
}
// Load values and assign defaults.
$section_id = get_field('section_id') ?: 'Section ID'; 
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl bg-common <?php if(get_field('background_color')) { echo '' . get_field('background_color') . ''; } ?> <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else { echo' pt5'; } ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else { echo' pb0'; } ?> fl clearfix">
	
	<?php if(get_field('background_color_filter')) { echo '<div class="color-overlay ' . get_field('background_color_filter') . ''; } ?><?php if((get_field('background_color_filter_opacity')) == true) { echo ' ' . get_field('background_color_filter_opacity') . ' '; } ?><?php if(get_field('background_color_filter')) { echo ' clearfix"></div>'; } ?>

	<div class="grid-10 fl clearfix">
		<?php if(get_field('csvideo_headline') || get_field('csvideo_subheadline') || get_field('csvideo_section_label')) { echo '<div class="grid-10 fl clearfix"><div class="grid-page'; } ?><?php if(get_field('header_top_padding')) { echo ' ' . get_field('header_top_padding') . ''; } ?><?php if(get_field('header_bot_padding')) { echo ' ' . get_field('header_bot_padding') . ''; } ?><?php if(get_field('csvideo_headline') || get_field('csvideo_subheadline') || get_field('csvideo_section_label')) { echo ' clearfix">'; } ?> 
			 
		<?php if(get_field('header_bg_photo')) { echo '<div class="color-overlay-exact bg-common clearfix'; } ?><?php if((get_field('header_bg_photo_opacity')) == true) { echo ' ' . get_field('header_bg_photo_opacity') . ''; } ?><?php if(get_field('header_bg_photo')) { echo '" style="'; } ?><?php if(get_field('header_bg_photo')) { echo 'background-image:url(' . get_field('header_bg_photo') . ');'; } ?><?php if((get_field('header_bg_photo_position')) == true) { echo 'background-position:' . get_field('header_bg_photo_position') . ';'; } ?><?php if((get_field('header_bg_photo_size')) == true) { echo 'background-size:' . get_field('header_bg_photo_size') . ';'; } ?><?php if(get_field('header_bg_photo')) { echo '"></div>'; } ?>
 
			<?php if((get_field('header_width') || get_field('header_alignment') || get_field('header_text_align')) == true ) { echo '<div class="' . get_field('header_width') . ''; } ?><?php if((get_field('header_alignment')) == true ) { echo ' ' . get_field('header_alignment') . ''; } ?><?php if((get_field('header_text_align')) == true ) { echo ' ' . get_field('header_text_align') . ''; } ?><?php if((get_field('header_width') || get_field('header_alignment') || get_field('header_text_align')) == true ) { echo ' mb30 clearfix">'; } ?>
			<?php if(get_field('csvideo_section_label')) { echo '<p class="sp-small mt0 mb20'; } ?> 
			<?php if(get_field('csvideo_section_label')) { ?>   
			<?php if((get_field('header_text_align')) == 'tac' ) { echo ' mauto pl1 '; } else { echo ' '; } ?>
			<?php if((get_field('header_text_align')) == 'tal' ) { echo ' fl '; } else { echo ' '; } ?>
			<?php if((get_field('header_text_align')) == 'tar' ) { echo 'tar '; } else { echo ' '; } ?>
			<?php if(get_field('csvideo_section_label_text_color')) { echo ' ' . get_field('csvideo_section_label_text_color') . ''; } ?>
			<?php } ?>
			<?php if(get_field('csvideo_section_label')) { echo 'clearix">' . get_field('csvideo_section_label') . '</p>'; } ?>   
			<?php if(get_field('csvideo_headline')) { echo '<h2 class="block-headline_alt mt0 mb10 heavy ' . get_field('csvideo_headline_text_color') . ' clearix">' . get_field('csvideo_headline') . '</h2> '; } ?> 
			<?php if(get_field('csvideo_subheadline')) { echo '<p class="block-subheadline pb0 pt0 mb0 mt0 ' . get_field('csvideo_subheadline_text_color') . ' clearix">' . get_field('csvideo_subheadline') . '</p> '; } ?>

			<?php if((get_field('header_width') || get_field('header_alignment') || get_field('header_text_align')) == true ) { echo '</div>'; } ?> 
		
		<?php if(get_field('csvideo_headline') || get_field('csvideo_subheadline') || get_field('csvideo_section_label')) { echo '</div></div>'; } ?>

		<?php if(get_field('csvideo_list')): $countp = 0; ?> 
		<div class="grid-page mauto clearfix"><ul class="csvideo-list fl clearfix">
		<?php while(has_sub_field('csvideo_list')): $countp++; ?>
			<li class="bg-null-<?php echo $countp ?> csvideo-rm<?php echo $countp ?><?php if(get_sub_field('cs_bg_color')) { echo ' pt5 pb5'; } ?> clearfix">

				<?php if(get_sub_field('cs_bg_color')) { echo '<div class="color-overlay-exact bg-common clearfix'; } ?><?php if(get_sub_field('cs_bg_color')) { echo ' ' . get_sub_field('cs_bg_color') . ''; } ?><?php if((get_sub_field('cs_bg_color_opacity')) == true) { echo ' ' . get_sub_field('cs_bg_color_opacity') . ''; } ?><?php if(get_sub_field('cs_bg_color')) { echo '"></div>'; } ?>
				
				<div class="grid-6 fl clearfix"> 
					<!-- start conditional -->
					<?php if(get_sub_field('video_url')) { ?> 
						<img decoding="async" src="https://channelvmedia.com/wp-content/uploads/2023/11/laptop-air_purple.png" width="600" height="346" alt="" class="responsive-img overview-logo-img"> 
						<div class="csvideo-left-inner clearfix">  
							<div class="wp-block-cover overflow-hidden alignfull is-light pt0 pb0 pr0 pl0">
								<?php if((get_sub_field('hide_video_overlay')) == true) { echo ''; } else { echo '<span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span>';} ?>  

								<?php if(get_sub_field('video_url')) { echo '<video class="wp-block-cover__video-background intrinsic-ignore" style="height:100% !important;" autoplay="" muted="" loop="" playsinline="" src="' . get_sub_field('video_url') . '" data-object-fit="cover"></video>'; } ?>  
							</div>
						</div> 
					<?php  } else { ?>  
						<?php $image = get_sub_field('photo'); ?>
						<?php $imagew = get_sub_field('photo_webp'); ?>
						<?php if((get_sub_field('photo') || get_sub_field('photo_webp')) == true) { echo '<div class="fl'; } ?><?php if( get_sub_field('photo_width') ) { echo ' ' . get_sub_field('photo_width') . ''; } else { echo 'grid-10';} ?><?php if((get_sub_field('photo') || get_sub_field('photo_webp')) == true) { echo ' mauto clearfix">'; } ?> 
						
							<?php if((get_sub_field('photo') || get_sub_field('photo_webp')) == true) { echo '<picture>'; } ?>
							  <?php if(get_sub_field('photo_webp')) { echo '<source srcset="'; } ?><?php echo $imagew['url']; ?><?php if(get_sub_field('photo_webp')) { echo '" type="image/webp">'; } ?>
							  <?php if(get_sub_field('photo')) { echo '<source srcset="'; } ?><?php echo $image['url']; ?><?php if(get_sub_field('photo')) { echo '" type="image/jpeg">'; } ?>
							  <?php if((get_sub_field('photo') || get_sub_field('photo_webp')) == true) { echo '<img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if((get_sub_field('photo') || get_sub_field('photo_webp')) == true) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if((get_sub_field('photo') || get_sub_field('photo_webp')) == true) { echo '">'; } ?>
							<?php if((get_sub_field('photo') || get_sub_field('photo_webp')) == true) { echo '</picture>'; } ?> 
 
							<?php if(get_sub_field('photo_color_filter')) { echo '<div class="color-overlay-exact z2 opacity50 ' . get_sub_field('photo_color_filter') . '"></div>'; }?>

						<?php if((get_sub_field('photo') || get_sub_field('photo_webp')) == true) { echo '</div>'; } ?>   
					<?php  } ?> 
					<!-- end conditional -->
				</div>  
 
				<div class="csvideo-right z2 clearfix">  
					<div class="csvideo-list-text-block fl clearfix">
						<?php if(get_sub_field('headline') || get_sub_field('subheadline') || get_sub_field('description') || get_sub_field('client_logo')) { echo '<div class="grid-10 fl csvideo-content-rm show-rm clearfix">'; } ?>  

							<?php $image = get_sub_field('client_logo'); ?>
							<?php if( get_sub_field('client_logo') ) { echo '<div class="grid-10 fl pb1 clearfix">'; } ?>
							<?php if(get_sub_field('client_logo_width')) { echo '<div class="' . get_sub_field('client_logo_width') . ' clearfix">'; } ?>
							<?php if( get_sub_field('client_logo') ) { echo '<img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('client_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('client_logo') ) { echo '" width="150" height="150" border="0"/>'; } ?>
							<?php if(get_sub_field('client_logo_width')) { echo '</div>'; } ?>
							<?php if( get_sub_field('client_logo') ) { echo '</div>'; } ?> 

							<?php if(get_sub_field('headline')) { echo '<h3 class="block-headline_cs mb10 mt0 pb0 pt1 csvideo-headline-rm hide-mobile ' . get_sub_field('headline_text_color') . ''; } ?><?php if(get_sub_field('headline')) { echo '">' . get_sub_field('headline') . '</h3>'; } ?>
							<?php if(get_sub_field('headline')) { echo '<h3 class="block-headline_cs pb2 pt1 hide-desktop2 ' . get_sub_field('headline_text_color') . '">' . get_sub_field('headline') . '</h3>'; } ?>
							<?php if(get_sub_field('subheadline')) { echo '<span class="block-subheadline pb2 pt0 ' . get_sub_field('subheadline_text_color') . '">' . get_sub_field('subheadline') . '</span>'; } ?>
							<?php if(get_sub_field('description')) { echo '<div class="fl expand">'; } ?> 
							<?php if(get_sub_field('description')) { echo '<div class="sp pt1 cb ' . get_sub_field('description_text_color') . '">' . get_sub_field('description') . '</div>'; } ?> 
							<?php if(get_sub_field('description')) { echo '</div>'; } ?> 

							<!-- start repeater-list -->
							<?php if( have_rows('rectangle_buttons') ): $pr = 0;
							echo '<div class="mb0 mt0">';
							// loop through the rows of data
							while ( have_rows('rectangle_buttons') ) : the_row(); ?> 
							<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect mb0'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('button_color') && get_sub_field('link')) { echo '' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
							<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
							<?php if(get_sub_field('link')) { echo '>'; } ?>
							<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
							<div class="transition-rect"></div> 
							<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
							<?php endwhile; echo '</div>'; endif; ?>   
							<!-- end repeater-list -->  
						
							<!-- start repeater-list --> 
							<?php if( have_rows('buttons') ): $pr = 0;
							echo '<div class="grid-10 fl mb20">';
							// loop through the rows of data
							while ( have_rows('buttons') ) : the_row(); ?> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="grid-10 fl right-link'; } ?> <?php if(get_sub_field('hubspot_pop_up_class')) { echo '' . get_sub_field('hubspot_pop_up_class') . ''; } ?> <?php if(get_sub_field('text_color')) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('arrow_color')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?> 
								<?php if(get_sub_field('target_blank') == true) { echo 'target="_blank"'; } ?>
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
							<?php endwhile; echo '</div>'; endif; ?> 
							<!-- end repeater-list -->   
						
						<?php if(get_sub_field('headline') || get_sub_field('subheadline') || get_sub_field('description') || get_sub_field('client_logo')) { echo '</div>'; } ?>  
						
					</div> <!-- end csvideo-list-text-block -->
				</div> <!-- end csvideo-right -->
			</li> 
		<?php endwhile; ?>
		</ul></div>
		<?php endif; ?>
		
	</div>
</section>
<style type="text/css">
		.csvideo-list {display:block;margin:0 !important;padding:0;position:relative;width:100%;}
		.csvideo-list li {display:block;margin:0 0 100px;padding:0;position:relative;width:100%;}
		.csvideo-left{bottom:0;display:block;left:0;min-height:10px;position:absolute;top:0;width:60%;}
	
		.csvideo-list li:nth-child(even) .grid-6.fl {float:right;} 
		.csvideo-list li:nth-child(even) .csvideo-left .grid-8.fl {float:right;}
		.csvideo-list li .color-overlay-exact {border-radius:20px;filter:blur(30px);}
		.csvideo-list li:last-child {margin:0 0 40px;}
	
		.csvideo-left-inner{background-size:cover;background-repeat:no-repeat;background-position:center;border-radius:10px 10px 0 0;bottom:0;display:block;left:12%;height:84% !important;overflow:hidden;position:absolute;right:0;top:6%;width:76%;} 
		.csvideo-left-inner .grid-page {z-index:10;}
		.csvideo-right{display:block;float:right;min-height:10px;left:0%;position:relative;width:40%;}
		.csvideo-list li:nth-child(even) .csvideo-right {float:left;left:0%;}

		.csvideo-list-text-block {display:block;margin:0;min-height:50px;padding:0px 60px;width:100%;}

		.csvideo-list .rb-line{background:rgb(175,35,28);background:linear-gradient(90deg, rgba(175,35,28,1) 0%, rgba(7,66,144,1) 100%);height:4px;left:-150px;margin-bottom:50px;position:relative;width:200px;}
		.csvideo-list .label {color:#B9E2F8;display:block;font-family:'darwinalt_extralight', sans-serif !important;font-weight:400;font-size:12px;letter-spacing:1px;padding-bottom:10px;text-transform:uppercase;width:100%;}
		.csvideo-list h2 {font-family:'darwinalt_black', Helvetica, serif !important;font-size:36px !important;line-height:100%;margin-top:10px !important;}
		.csvideo-list .desc {display:block;font-size:18px !important;font-family:'darwinalt_black', sans-serif !important;font-weight:400;line-height:120%;padding:10px 0 30px;position:relative;width:100%;}
		.csvideo-list .sp p, .csvideo-list .sp p b, .csvideo-list .sp p strong, .csvideo-list .sp p em,.csvideo-list .sp p i {font-size:18px !important;}
		.csvideo-img-rm {height:auto;transition:all 0.5s ease-in-out;}
		.csvideo-img-rm:hover {height:auto;transition:all 0.5s ease-in-out;}
 
		.wp-block-cover-image img.wp-block-cover__image-background, .wp-block-cover-image video.wp-block-cover__video-background, .wp-block-cover img.wp-block-cover__image-background, .wp-block-cover video.wp-block-cover__video-background {height:auto !important;}
		.wp-block-cover {overflow:hidden;}
		.wp-block-cover, .wp-block-cover-image {min-height:100% !important;} 
		.csvideo-content-rm p b, .csvideo-content-rm p strong {color:unset;} 
	
 		.bg-blur{background-color:#fff;background-position:center;background-repeat:no-repeat;background-size:cover;border-radius:30px;display:block;margin:0 auto;padding:20px;position:relative;}
		.inset-offset {top:15%;} 
		.csvideo-list .expand {left:0%;position:relative;width:100%;transition:all 0.5s ease-in-out;}
		.csvideo-list .expand.expanded {left:0%;padding:20px;width:230%;transition:all 0.5s ease-in-out;} 
		.csvideo-list li:nth-child(odd) .expand{left:0%;position:relative;width:100%;transition:all 0.5s ease-in-out;}
		.csvideo-list li:nth-child(odd) .expand.expanded {left:-130%;padding:20px;width:230%;transition: all 0.5s ease-in-out;}
	
		.border20 {border-radius:20px;}
		@keyframes readreveal {
		  from {width:100%;}
		  to {width:230%;}
		}
		@keyframes readvanish {
		  from {width:230%;}
		  to {width:100%;}
		}   
		@media screen and (max-width: 767px) {
			.csvideo-list-text-block {display:block;margin:0;min-height:100px;padding:30px 60px 20px;width:100%;}
			.csvideo-right {display:block;float:left;left:0;position:relative;width:100%;}
			.csvideo-list li {margin:0;}
			.csvideo-list li:nth-child(2n) .csvideo-right {left:0%;width:100%;}
			.csvideo-list .expand {position:relative;width:100%;transition:all 1.0s ease-in-out;animation-name:none;animation-duration:none;}
			.csvideo-list .expand.expanded {padding:0px;width:100%;transition:all 1.0s ease-in-out;animation-name:none;animation-duration:1.0s;}
			.csvideo-list li:nth-child(odd) .expand.expanded {left:0%;padding:0px;width:100%;animation-name:none;animation-duration:1.0s;transition: all 1.0s ease-in-out;} 
			.csvideo-list li:nth-child(odd) .expand{position:relative;width:100%;transition:all 1.0s ease-in-out;animation-name:none;animation-duration:1.0s;} 
 		}   
</style>