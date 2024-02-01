<?php
/**
 * Video Steps Block Template.
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

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php if(get_field('background_color')) { echo '' . get_field('background_color') . ''; } ?><?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb0';} ?> clearfix">

	<?php if((get_field('page_width')) == true) { echo'<div class="grid-page mauto"><div class="grid-fixed-8b mauto">'; } ?>

	<?php if(get_field('background_photo')) { echo '<div class="color-overlay-exact bg-common clearfix'; } ?>
		<?php if((get_field('background_photo_opacity')) == true) { echo ' ' . get_field('background_photo_opacity') . ''; } ?>
		<?php if(get_field('background_photo')) { echo '" style="'; } ?>
		<?php if(get_field('background_photo')) { echo 'background-image:url(' . get_field('background_photo') . ');'; } ?><?php if((get_field('background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?>
	<?php if(get_field('background_photo')) { echo '"></div>'; } ?>
 
	<?php if(get_field('background_color_filter')) { echo '<div class="color-overlay-exact ' . get_field('background_color_filter') . ''; } ?><?php if((get_field('background_color_filter_opacity')) == true) { echo ' ' . get_field('background_color_filter_opacity') . ' '; } ?><?php if(get_field('background_color_filter')) { echo ' clearfix"></div>'; } ?>

		<?php if((get_field('header_label') || get_field('header_headline') || get_field('header_subheadline') || get_field('header_intro')) == true ) { echo '<div class="grid-page mauto"><div class="grid-10 fl'; } ?><?php if(get_field('header_top_padding')) { echo ' ' . get_field('header_top_padding') . ''; } ?><?php if(get_field('header_bot_padding')) { echo ' ' . get_field('header_bot_padding') . ''; } ?><?php if((get_field('header_label') || get_field('header_headline') || get_field('header_subheadline') || get_field('header_intro')) == true ) { echo ' clearfix">'; } ?>	
	
			<?php if((get_field('header_width') || get_field('header_align') || get_field('header_text_align')) == true ) { echo '<div class="' . get_field('header_width') . ''; } ?><?php if((get_field('header_align')) == true ) { echo ' ' . get_field('header_align') . ''; } ?><?php if((get_field('header_text_align')) == true ) { echo ' ' . get_field('header_text_align') . ''; } ?><?php if((get_field('header_width') || get_field('header_align') || get_field('header_text_align')) == true ) { echo '">'; } ?>
		
			<?php if(get_field('header_label')) { echo '<p class="sp-small mt0 mb20'; } ?> 
			<?php if(get_field('header_label')) { ?>   
			<?php if((get_field('header_text_align')) == 'tac' ) { echo ' mauto pl1 '; } else { echo ' '; } ?>
			<?php if((get_field('header_text_align')) == 'tal' ) { echo ' fl '; } else { echo ' '; } ?>
			<?php if((get_field('header_text_align')) == 'tar' ) { echo 'tar '; } else { echo ' '; } ?>
			<?php if(get_field('header_label_color')) { echo ' ' . get_field('header_label_color') . ''; } ?>
			<?php } ?>
			<?php if(get_field('header_label')) { echo 'clearix">' . get_field('header_label') . '</p>'; } ?>  

			<?php if(get_field('header_headline')) { echo '<h2 class="block-headline_alt mt0 mb0 '; } ?><?php if((get_field('header_headline') && get_field('header_headline_color')) == true ) { echo '' . get_field('header_headline_color') . ''; } else { echo ' '; } ?><?php if(get_field('header_headline')) { echo '">' . get_field('header_headline') . '</h2>'; } ?>
			<?php if(get_field('header_subheadline')) { echo '<span class="block-subheadline pt0 pb0 mb20 '; } ?><?php if((get_field('header_subheadline') && get_field('header_subheadline_color')) == true) { echo ' ' . get_field('header_subheadline_color') . ''; } ?><?php if(get_field('header_subheadline')) { echo '">' . get_field('header_subheadline') . '</span>'; } ?>
			<?php if(get_field('header_intro')) { echo '<span class="block-text '; } ?><?php if((get_field('header_intro_color') && get_field('header_intro')) == true ) { echo '' . get_field('header_intro_color') . ''; } ?><?php if(get_field('header_intro')) { echo '">' . get_field('header_intro') . '</span>'; } ?> 
		
			<?php if((get_field('header_width') || get_field('header_align') || get_field('header_text_align')) == true ) { echo '</div>'; } ?>
		
		<?php if((get_field('header_label') || get_field('header_headline') || get_field('header_subheadline') || get_field('header_intro')) == true ) { echo '</div></div>'; } ?>
	
		<div class="grid-page mauto<?php if(get_field('content_top_padding')) { echo ' ' . get_field('content_top_padding') . ''; } ?><?php if(get_field('content_bottom_padding')) { echo ' ' . get_field('content_bottom_padding') . ''; } ?>"> 
			 
 		<div class="video-steps-left <?php if(get_field('video_width')) { echo '' . get_field('video_width') . ' '; } else { echo'grid-5 ';} ?><?php if(get_field('video_position')) { echo '' . get_field('video_position') . ' '; } else { echo'fl ';} ?>clearfix">
			<?php if(get_field('video_bg_photo')) { echo '<div class="color-overlay-exact bg-common" style="background-image:url(' . get_field('video_bg_photo') . ');background-size:contain;"></div>'; } ?>
			
 			<div class="video-steps-left-inner">
				<!-- START CONTENT -->
				<?php
				// check if the flexible content field has rows of data
				if( have_rows('video_content') ): ?> 
				<?php // loop through the rows of data
					while ( have_rows('video_content') ) : the_row(); ?>
						<?php // Video
							if( get_row_layout() == 'video' ): ?>
							<?php if(get_sub_field('video_url')) { echo '<div class="grid-10 fl'; } ?><?php if(get_sub_field('video_top_margin')) { echo ' ' . get_sub_field('video_top_margin') . ''; } ?><?php if(get_sub_field('video_bottom_margin')) { echo ' ' . get_sub_field('video_bottom_margin') . ''; } ?><?php if(get_sub_field('video_url')) { echo ' clearfix"><div class="iframe-container">'; } ?>

								<?php if(get_sub_field('video_url')) { echo '<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
									<div class="wp-block-embed__wrapper responsive-img">
										<iframe class="iframe-responsive"'; } ?> <?php if(get_sub_field('video_title')) { echo 'title="' . get_sub_field('video_title') . '"'; } ?> <?php if(get_sub_field('video_url')) { echo 'width="840" height="473" src="https://www.youtube.com/embed/' . get_sub_field('video_url') . '';} ?><?php if((get_sub_field('video_url') && get_sub_field('video_loop')) == true) { echo '?loop=1'; } else { echo'?';} ?><?php if((get_sub_field('video_url') && get_sub_field('video_autoplay')) == true) { echo '&autoplay=1'; } ?><?php if((get_sub_field('video_url') && get_sub_field('video_mute')) == true) { echo '&mute=1'; } ?><?php if(get_sub_field('video_url')) { echo '&playlist=' . get_sub_field('video_url') . '&controls=0&playsinline=1&rel=0&enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="" data-gtm-yt-inspected-7="true"></iframe>
									</div>'; } ?>
								<?php if(get_sub_field('video_url')) { echo '</figure>'; } ?>
							<?php if(get_sub_field('video_url')) { echo '</div></div>'; } ?>
						<?php endif; ?> 

						<?php endwhile; // end loop through the rows of data
							else :
							// no layouts found
						?> 
				<?php endif; ?><?php wp_reset_query(); ?>
				<!-- END CONTENT --> 
			</div>
		</div><!--  -->

		<div class="<?php if(get_field('list_width')) { echo '' . get_field('list_width') . ' '; } else { echo'grid-5 ';} ?><?php if(get_field('list_position')) { echo '' . get_field('list_position') . ' '; } else { echo'fl ';} ?> video-steps-right clearfix">
			<div class="grid-9 mauto">
				<?php if(get_field('video_steps_list')): $i = 0; ?>
					<ul class="video-steps-list-flex">
					<?php while(has_sub_field('video_steps_list')): $i++; ?>
						<li class="<?php if(get_field('video_steps_list_columns')) { echo ' ' . get_field('video_steps_list_columns') . ''; } ?><?php if(get_field('video_steps_border_color')) { echo ' ' . get_field('video_steps_border_color') . ''; } ?><?php if(get_field('video_steps_border_size')) { echo ' ' . get_field('video_steps_border_size') . ''; } ?>">
							<?php if(get_sub_field('button_link')) { echo '<a href="' . get_sub_field('button_link') . '" class="'; } ?><?php if((get_sub_field('button_hubspot') && get_sub_field('button_link')) == true) { echo ' ' . get_sub_field('button_hubspot') . ''; } ?><?php if(get_sub_field('button_link')) { echo '"'; } ?><?php if((get_sub_field('target_link') && get_sub_field('button_link')) == true) { echo ' target="_blank"'; } ?><?php if(get_sub_field('button_link')) { echo ' role="link">'; } ?>
							<span class="post-content">
								<?php if(get_sub_field('photo')) { echo '<span class="post-img'; } ?><?php if((get_sub_field('photo') && get_sub_field('photo_border_radius')) == true) { echo ' ' . get_sub_field('photo_border_radius') . ''; } ?><?php if(get_sub_field('photo')) { echo '"><span class="post-bg clearfix" style="background-image:url(' . get_sub_field('photo') . ');"><span class="color-overlay purple-pink-diagonal opacity20"></span></span></span>'; } ?>
								<?php if(get_sub_field('label')) { echo '<p class="small cb mt0 mb0'; } ?><?php if((get_sub_field('label_color') && get_sub_field('label')) == true) { echo ' ' . get_sub_field('label_color') . ''; } ?><?php if(get_sub_field('label')) { echo '">' . get_sub_field('label') . '</p>'; } ?>
								<?php if(get_sub_field('title')) { echo '<h3 class="post-title mt0 mb0'; } ?><?php if((get_sub_field('title_color') && get_sub_field('title')) == true) { echo ' ' . get_sub_field('title_color') . ''; } ?><?php if(get_sub_field('title')) { echo '">' . get_sub_field('title') . '</h3>'; } ?>
								<?php if(get_sub_field('text')) { echo '<span class="post-desc'; } ?><?php if((get_sub_field('text_color') && get_sub_field('text')) == true) { echo ' ' . get_sub_field('text_color') . ''; } ?><?php if(get_sub_field('text')) { echo '">' . get_sub_field('text') . '</span>'; } ?> 
							</span>
							<?php if(get_sub_field('counter')) { echo '<span class="counter cb mt0'; } ?><?php if(get_sub_field('counter_border_color')) { echo ' ' . get_sub_field('counter_border_color') . ''; } ?><?php if(get_sub_field('counter_bg_color')) { echo ' ' . get_sub_field('counter_bg_color') . ''; } ?><?php if(get_sub_field('counter')) { echo '">'; } ?> 
								<?php if(get_sub_field('counter')) { echo '<strong class="'; } ?><?php if(get_sub_field('counter_color')) { echo ' ' . get_sub_field('counter_color') . ''; } ?><?php if(get_sub_field('counter')) { echo '">' . get_sub_field('counter') . '</strong>'; } ?>
							<?php if(get_sub_field('counter')) { echo '</span>'; } ?>
						 <?php if(get_sub_field('button_link')) { echo '</a>'; } ?>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div><!-- -->
	</div> <!--grid-fixed-9 page -->
	
	<?php if((get_field('page_width')) == true) { echo'</div></div>'; } ?>
	
	<style type="text/css">
	.video-steps-list-flex{display:flex;flex-flow:row wrap;gap:0%;margin:0px auto 20px !important;padding:0 !important;position:relative;width:100%;max-width:1200px !important;}
	.video-steps-list-flex li{border-radius:20px;border-style:solid;display:flex;flex:1 0 auto;flex-grow:1;margin:0 3% 3% 0;padding:0;position:relative;width:14.16%;max-width:14.16%;}
	.video-steps-list-flex li.three{width:31.3%;max-width:31.3%;}
	.video-steps-list-flex li.two{width:48.5%;max-width:48.5%;}
	.video-steps-list-flex li.three:nth-child(3n+3){margin-right:0;}
	.video-steps-list-flex li.two:nth-child(even){margin-right:0;}

	.video-steps-list-flex li a {border-radius:20px;display:block;position:relative;transition:all .5s ease-in-out;width:100%;z-index:1;}
	.video-steps-list-flex li a:hover {box-shadow:0 0 30px rgba(0, 0, 0, 0.3);cursor:pointer;transition:all .3s ease-in-out;}
	.video-steps-list-flex li .post-img {background-position:center center;background-repeat:no-repeat;background-size:cover;float:left;display:block;height:150px;margin:0 0 10px;overflow:hidden;padding:0;position:relative;width:100%;-moz-transition:all 0.5s ease;-webkit-transition:all 0.5s ease;-o-transition:all 0.5s ease;-ms-transition:all 0.5s ease;transition:all 0.5s ease;}
	.video-steps-list-flex li a:hover .post-img {-moz-transition:all 0.5s ease;-webkit-transition:all 0.5s ease;-o-transition:all 0.5s ease;-ms-transition:all 0.5s ease;transition:all 0.5s ease;}
	.video-steps-list-flex li .post-img .post-bg {background-position:center center;background-repeat:no-repeat;background-size:cover;bottom:0;display:block;height:150px;left:0;margin:0;padding:0;position:absolute;right:0;top:0;width:100%;-moz-transition:all 3.0s ease;-webkit-transition:all 3.0s ease;-o-transition:all 3.0s ease;-ms-transition:all 3.0s ease;transition:all 3.0s ease;} 
	.video-steps-list-flex li a:hover .post-img .post-bg {transform:scale(1.5);}
	.video-steps-list-flex li .post-content {display:block;float:left;margin:0;padding:15px 20px 50px;position:relative;width:100%;transition:all 0.3s ease-in-out;} 
	.video-steps-list-flex li .small {display:block;float:left;font-family:'darwinalt_extralight', Helvetica, sans-serif;font-size:13px;font-weight:400;letter-spacing:1px;line-height:110%;padding:0 0 5px;position:relative;text-align:left;text-transform:uppercase;}	 
	.video-steps-list-flex li .post-title {color:#3A357E;display:block;float:left;font-family:'darwinalt_black', Helvetica, sans-serif;font-weight:400;font-size:18px !important;line-height:110%;margin-bottom:0;padding:0 0 10px;position:relative;text-align:left;transition:all .5s ease-in-out;width:100%;}
	.video-steps-list-flex li a:hover .post-title {cursor:pointer;transform:scale(1.0);transition:all .5s ease-in-out;}
	.video-steps-list-flex li .post-desc {display:block;float:left;font-family:'darwinalt_extralight', Helvetica, sans-serif;font-size:16px;font-weight:400;margin:0;position:relative;text-align:left;transition:all .5s ease-in-out;width:100%;} 
	.video-steps-list-flex li .post-desc p{color:#333;display:block;font-family:'darwinalt_extralight', Helvetica, sans-serif;font-weight:400 !important;font-size:17px;line-height:120% !important;position:relative;width:100%;}  
	.video-steps-list-flex li .counter {border-style:solid;border-width: 1px;border-color:#fff;border-radius:50%;bottom:10px;display:inline-block;font-family:'darwinalt_black', Helvetica, sans-serif;font-size:24px !important;font-weight:400; height:40px;left:20px;line-height:140% !important;padding:10px;position:absolute;right:15px;text-align:center;width:40px;} 
	.video-steps-list-flex li .counter strong {display:block;position:relative;top:-7px;}

	.video-steps-left {bottom:0;display:block;left:0;min-height:10px;position:absolute;top:0;}
	.video-steps-left-inner {align-items:center;bottom:0;display:flex;left:0;min-height:10px;position: absolute;top:0;width:100%;} 

	@media screen and (max-width: 1250px) {
		.video-steps-list-flex li.three {width:48.5%;max-width:48.5%;} /* 2*/  
		.video-steps-list-flex li.three:nth-child(3n+3){margin-right:3%;}
		.video-steps-list-flex li.three:nth-child(even){margin-right:0;}

		.video-steps-list-flex li{border-radius:5px;}
		.video-steps-list-flex li .post-img {margin:0 0 5px;} 
		.video-steps-list-flex li .post-img.br10 {border-radius:5px;}
		.video-steps-list-flex li .post-img, .video-steps-list-flex li .post-img .post-bg {height:150px;}  
		.video-steps-list-flex li .small {font-size:12px;}
		.video-steps-list-flex li .post-title {font-size:18px;}
	}
	@media screen and (max-width: 980px) {
		.video-steps-left {bottom:unset;display:block;left:unset;min-height:10px;position:relative;top:unset;width:100% !important;}
		.video-steps-right {float:left !important;width:100% !important;}
		.video-steps-left-inner {margin:0 auto 30px;position:relative;width:90%;}
	}
	@media screen and (max-width: 767px) {		
		.video-steps-left-inner {width:100%;}
	}
	@media screen and (max-width: 400px) { 
		.video-steps-list-flex li .post-desc p{margin-bottom:5px !important;margin-top:0 !important;} 
		.video-steps-list-flex li{border-radius:5px;} 
		.video-steps-list-flex li .post-img.br10 {border-radius:5px;}
		.video-steps-list-flex li .post-img, .video-steps-list-flex li .post-img .post-bg {height:100px;}  
		.video-steps-list-flex li .small {font-size:10px;}
		.video-steps-list-flex li .post-title {font-size:16px;} 
	} 
	</style> 
</section>