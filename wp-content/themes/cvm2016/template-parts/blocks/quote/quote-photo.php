<?php
/**
 * Quote Photo Block Template.
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
?>
<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl bg-common <?php if(get_field('background_color')) { echo '' . get_field('background_color') . ''; } ?> <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else { echo' pt5'; } ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else { echo' pb0'; } ?> fl clearfix"> 
	
	<div class="grid-10 fl clearfix">
		<?php if(get_field('qp_headline') || get_field('qp_subheadline') || get_field('qp_section_label')) { echo '<div class="grid-10 fl clearfix"><div class="grid-page clearfix"><div class="grid-7 fl mb0 clearfix">'; } ?>

		<?php if(get_field('qp_section_label')) { echo '<p class="sp-small mt0 ' . get_field('qp_section_label_text_color') . ' clearix">' . get_field('qp_section_label') . '</p>'; } ?> 
		<?php if(get_field('qp_headline')) { echo '<h2 class="block-headline_alt mt0 mb10 heavy ' . get_field('qp_headline_text_color') . ' clearix">' . get_field('qp_headline') . '</h2> '; } ?> 
		<?php if(get_field('qp_subheadline')) { echo '<p class="block-subheadline pb0 pt0 mb20 ' . get_field('qp_subheadline_text_color') . ' clearix">' . get_field('qp_subheadline') . '</p> '; } ?> 
		<?php if(get_field('qp_headline') || get_field('qp_subheadline') || get_field('qp_section_label')) { echo '</div></div></div>'; } ?>

	<?php if((get_field('qp_full_width')) == true) { echo '<div class="grid-10 fl clearfix"><div class="grid-fixed-9 mauto clearfix">'; } else { echo '<div class="grid-page mauto clearfix">'; } ?>

		<?php if(get_field('qp_list')): $countq = 0; ?>
		<ul class="quote-photo-list fl clearfix">
		<?php while(has_sub_field('qp_list')): $countq++; ?>
			<li class="qp<?php echo $countq ?> clearfix">
				<div class="quote-photo-left <?php if(get_sub_field('photo_position_right') == true) { echo 'fr'; } else { echo 'fl'; }?> clearfix">
					
					<!-- start conditional -->
					<?php if(get_sub_field('video_url')) { ?> 
							<div class="quote-photo-left-inner box-shadow clearfix">  
								<div class="wp-block-cover overflow-hidden alignfull is-light pt0 pb0 pr0 pl0">
									<?php if((get_sub_field('hide_video_overlay')) == true) { echo ''; } else { echo '<span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span>';} ?>  

									<?php if(get_sub_field('video_url')) { echo '<video class="wp-block-cover__video-background intrinsic-ignore" style="height:100% !important;" autoplay="" muted="" loop="" playsinline="" src="' . get_sub_field('video_url') . '" data-object-fit="cover"></video>'; } ?>  
								</div>
							</div> 
					<?php  } else { ?>  
							<div class="quote-photo-left-inner <?php if((get_sub_field('photo_shadow')) == true ) { echo 'bs-large'; } ?> clearfix" <?php if(get_sub_field('photo')) { echo 'style="background-image:url(' . get_sub_field('photo') . ');"'; } ?>> 
							</div>
							<?php if(get_sub_field('photo_color_filter')) { echo '<div class="color-overlay-exact z2 opacity50 ' . get_sub_field('photo_color_filter') . '"></div>'; }?>  
					<?php  } ?> 
					<!-- end conditional -->  
					
				</div> <!-- end quote-photo-left -->

				<div class="quote-photo-right <?php if(get_sub_field('photo_position_right') == true) { echo 'fl'; } else { echo 'fr'; }?> clearfix">  
					<div class="quote-photo-wrap clearfix">
						<?php if(get_sub_field('quote')) { echo '<div class="grid-10 fl quote-photo-block clearfix">'; } ?> 
						
							<!-- start quote code -->						
							<?php if(get_sub_field('quote')) { echo '<div class="grid-10 fl border20 clearfix"><div class="blockquote-wrapper grid-10"><div class="blockquote mb0 mt0">'; } ?>
							<?php if(get_sub_field('quote')) { echo '<span class="quote'; } ?><?php if(get_sub_field('quote_border_color')) { echo ' ' . get_sub_field('quote_border_color') . ''; } ?><?php if(get_sub_field('quote')) { echo '"><span class="'; } ?><?php if(get_sub_field('quote_text_color')) { echo ' ' . get_sub_field('quote_text_color') . ''; } ?><?php if(get_sub_field('quote')) { echo '">' . get_sub_field('quote') . '</span></span>'; } ?> 
										<?php if(get_sub_field('quote')) { echo '<span class="citation-photo fl">'; } ?> 
										<?php $image = get_sub_field('quote_photo'); ?>
										<?php if( get_sub_field('quote_photo') ) { echo '<div class="'; } ?><?php if( get_sub_field('quote_photo') ) { echo 'grid-10 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('quote_photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('quote_photo') ) { echo '" border="0"/></div>'; } ?>
										<?php if(get_sub_field('quote')) { echo '</span> 
										<div class="grid-fixed-6b fl pl4">'; } ?>  
											<?php if(get_sub_field('quote_logo')) { echo '<span class="citation pt2">'; } ?>
											<?php $image = get_sub_field('quote_logo'); ?>
											<?php if( get_sub_field('quote_logo') ) { echo '<div class="'; } ?><?php if(get_sub_field('quote_logo_width') && get_sub_field('quote_logo')) { echo '' . get_sub_field('quote_logo_width') . ''; } ?><?php if( get_sub_field('quote_logo') ) { echo ' pr-cs-logo-width pb1 clearfix"><img class="responsive-img quote-logo-max" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('quote_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('quote_logo') ) { echo '" width="100" height="30" border="0"/></div>'; } ?>
											<?php if(get_sub_field('quote_logo')) { echo '</span>'; } ?>
											<?php if(get_sub_field('quote_first_and_last_name') || get_sub_field('quote_company') ) { echo '<span class="citation cite-text mt0 pt0'; } ?><?php if(get_sub_field('quote_text_color')) { echo ' ' . get_sub_field('quote_text_color') . ''; } ?><?php if(get_sub_field('quote_first_and_last_name') || get_sub_field('quote_company') ) { echo '">'; } ?>
								<?php if(get_sub_field('quote_first_and_last_name')) { echo '' . get_sub_field('quote_first_and_last_name') . ''; } ?><?php if(get_sub_field('quote_job_title')) { echo ', ' . get_sub_field('quote_job_title') . '<br/>'; } ?><?php if(get_sub_field('quote_company')) { echo '<em>' . get_sub_field('quote_company') . '</em>'; } ?>
											<?php if(get_sub_field('quote_first_and_last_name') || get_sub_field('quote_company')) { echo '</span>'; } ?>
										<?php if(get_sub_field('quote')) { echo '</div>'; } ?>
							<?php if(get_sub_field('quote')) { echo '</div></div></div>'; } ?>  
						
						<?php if(get_sub_field('quote')) { echo '</div>'; } ?>  
						
					</div> <!-- end quote-photo-wrap -->
				</div> <!-- end quote-photo-right -->
			</li> 
		<?php endwhile; ?>
		</ul> 
		<?php endif; ?>
		
	</div>
	
	<?php if((get_field('qp_full_width')) == true) { echo '</div></div>'; } else { echo '</div>'; } ?>
	
</section>
<style type="text/css">
		.quote-photo-list {display:block;margin:0 !important;padding:0;position:relative;width:100%;}
		.quote-photo-list li {display:block;margin:0;padding:0;position:relative;width:100%;}
		.quote-photo-left{bottom:0;display:block;left:0;min-height:10px;position:absolute;top:0;width:50%;}
		.quote-photo-left.fr {left:unset;right:0;}
		.quote-photo-list li:nth-child(even) .quote-photo-left {left:auto;left:unset;right:0;}
		.quote-photo-list li:nth-child(even) .quote-photo-left .grid-8.fl {float:right;}

		.quote-photo-left-inner{background-size:cover;background-repeat:no-repeat;background-position:center;bottom:0;display:block;left:0;min-height:250px;position:absolute;right:0;top:0;width:100%;}
		.quote-photo-left-inner .grid-page {z-index:10;}
		.quote-photo-right{display:block;min-height:10px;position:relative;width:50%;}
		.quote-photo-list li:nth-child(even) .quote-photo-right {float:left;left:0%;}

		.quote-photo-wrap {display:block;margin:0;min-height:100px;padding:0 0 0 60px;width:100%;}
		.quote-photo-right.fl .quote-photo-wrap {padding:0 60px 0 0;}
		.quote-photo-list .label {color:#B9E2F8;display:block;font-family:'Lato', sans-serif !important;font-weight:400;font-size:12px;letter-spacing:1px;padding-bottom:10px;text-transform:uppercase;width:100%;}
		.quote-photo-list h2 {font-family:'Oswald',  serif !important;font-size:36px !important;line-height:100%;margin-top:10px !important;}
		.quote-photo-list .desc {display:block;font-size:18px !important;font-family:'Lato', sans-serif !important;font-weight:400;line-height:120%;padding:10px 0 30px;position:relative;width:100%;}
	.quote-photo-list .sp p, .quote-photo-list .sp p b, .quote-photo-list .sp p strong, .quote-photo-list .sp p em,.quote-photo-list .sp p i {font-size:18px !important;} 

		.wp-block-cover__inner-container p.hero-subtitle {color:#001466;}
		.wp-block-cover-image img.wp-block-cover__image-background, .wp-block-cover-image video.wp-block-cover__video-background, .wp-block-cover img.wp-block-cover__image-background, .wp-block-cover video.wp-block-cover__video-background {height:auto !important;}
		.wp-block-cover {overflow:hidden;}
		.wp-block-cover, .wp-block-cover-image {min-height:100% !important;}
		.hero-img .wp-block-cover__inner-container {padding:250px 0 30px;}
		.quote-photo-block p b, .quote-photo-block p strong {color:unset;} 
	
 		.bg-blur{background-color:#fff;background-position:center;background-repeat:no-repeat;background-size:cover;border-radius:30px;display:block;margin:0 auto;padding:20px;position:relative;}
		.inset-offset {top:15%;}
		.quote-photo-list .blockquote-wrapper .blockquote .quote::before {border:6px solid #fff;}
		.quote-photo-list .blockquote-wrapper .blockquote .quote {border: 2px solid #399ec7;line-height:100% !important;}
		.quote-photo-list .blockquote-wrapper .blockquote .quote::after {border:2px solid #399ec7;border-bottom:none !important;border-left:none !important;}
		.quote-photo-list .blockquote-wrapper .blockquote .quote span{font-size:18px !important;}
		.quote-logo-max {max-width:200px;}
		.border20 {border-radius:20px;}

		.quote.border-white, .quote.border-white::after {border:2px solid #ffffff !important;}
		.quote.border-black, .quote.border-black::after {border:2px solid #222222 !important;}
		.quote.border-dark-purple, .quote.border-dark-purple::after {border:2px solid #292560 !important;}
		.quote.border-purple, .quote.border-purple::after {border:2px solid #3a357e !important;}
		.quote.border-light-purple, .quote.border-light-purple::after {border:2px solid #5a53af !important;}
		.quote.border-lavender, .quote.border-lavender::after {border:2px solid #B2ABF2 !important;}
		.quote.border-lilac, .quote.border-lilac::after {border:2px solid #BBBDF6 !important;}
		.quote.border-dark-pink, .quote.border-dark-pink::after {border:2px solid #c11d8d !important;} 
		.quote.border-pink, .quote.border-pink::after {border:2px solid #cc2a9a !important;} 
		.quote.border-blossom, .quote.border-blossom::after {border:2px solid #D7C0D0 !important;} 
		.quote.border-blue, .quote.border-blue::after {border:2px solid #399ec7 !important;}
		.quote.border-steel-blue, .quote.border-steel-blue::after {border:2px solid #2c6194 !important;}
		.quote.border-orange, .quote.border-orange::after {border:2px solid #e79f2d !important;}
		.quote.border-yellow, .quote.border-yellow::after {border:2px solid #dfe445 !important;}
		.quote.border-green, .quote.border-green::after {border:2px solid #00898E !important;} 
		.quote.border-pistachio, .quote.border-pistachio::after {border:2px solid #A7C4C2 !important;} 
		.quote.border-gray, .quote.border-gray::after {border:2px solid #6E6F71 !important;}
		.quote.border-gray1, .quote.border-gray1::after {border:2px solid #F4F4F4 !important;}
		.quote.border-gray2, .quote.border-gray2::after {border:2px solid #EFEEED !important;}
		.quote.border-gray3, .quote.border-gray3::after {border:2px solid #e5e6e5 !important;}
		.quote.border-gray4, .quote.border-gray4::after {border:2px solid #CCCCCC !important;}
		.quote.border-gray5, .quote.border-gray5::after {border:2px solid #6E6F71 !important;}
		.quote.border-gray6, .quote.border-gray6::after {border:2px solid #3E3E3E !important;}
		.quote.border-gray7, .quote.border-gray7::after {border:2px solid #231F20 !important;} 
		/* border hiding line */
		section.bg-white .quote::before {border:6px solid #fff !important;}
		section.bg-black .quote::before {border:6px solid #222222 !important;}
		section.bg-dark-purple .quote::before {border:6px solid #292560 !important;}
		section.bg-purple .quote::before {border:6px solid #3a357e !important;}
		section.bg-light-purple .quote::before {border:6px solid #5a53af !important;}
		section.bg-lavender .quote::before {border:6px solid #B2ABF2 !important;}
		section.bg-lilac .quote::before {border:6px solid #BBBDF6 !important;}
		section.bg-dark-pink .quote::before {border:6px solid #c11d8d !important;}
		section.bg-pink .quote::before {border:6px solid #e75fbc !important;}
		section.bg-blossom .quote::before {border:6px solid #D7C0D0 !important;}
		section.bg-blue .quote::before {border:6px solid #399ec7 !important;}
		section.bg-steel-blue .quote::before {border:6px solid #2c6194 !important;}
		section.bg-orange .quote::before {border:6px solid #e79f2d !important;}
		section.bg-yellow .quote::before {border:6px solid #dfe445 !important;}
		section.bg-green .quote::before {border:6px solid #00898E !important;}
		section.bg-pistachio .quote::before {border:6px solid #A7C4C2 !important;}
		section.bg-gray .quote::before {border:6px solid #6E6F71 !important;}
		section.bg-gray1 .quote::before {border:6px solid #F4F4F4 !important;}
		section.bg-gray2 .quote::before {border:6px solid #EFEEED !important;}
		section.bg-gray3 .quote::before {border:6px solid #e5e6e5 !important;}
		section.bg-gray4 .quote::before {border:6px solid #cccccc !important;}
		section.bg-gray5 .quote::before {border:6px solid #6E6F71 !important;}
		section.bg-gray6 .quote::before {border:6px solid #3E3E3E !important;}
		section.bg-gray7 .quote::before {border:6px solid #231F20 !important;} 
	
	@media screen and (max-width: 880px) { 
			.quote-photo-block .grid-fixed-6b {width:55% !important;}
	}
	@media screen and (max-width: 767px) { 
			.hero-img .wp-block-cover__inner-container {padding:250px 0 30px;}
			.quote-photo-block .grid-fixed-6b {width:65% !important;}
			.quote-photo-left {bottom:unset;display:block;left:unset;position:relative;top:unset;width:100%;} 
			.quote-photo-left, .quote-photo-left-inner {height:300px;}
			.quote-photo-wrap {padding:30px 0 10px;}
			.quote-photo-right.fl .quote-photo-wrap {padding:30px 0 10px;}
			.quote-photo-right {display:block;float:left;left:0;position:relative;width:100%;}
			.quote-photo-list li {margin:0;}
			.quote-photo-list li:nth-child(2n) .quote-photo-right {left:0%;width:100%;} 
			.quote-photo-list .blockquote-wrapper .blockquote .quote.purple span {color:#3a357e !important;}
		} 
		@media screen and (max-width: 600px) { 
			.hero-img .wp-block-cover__inner-container {min-height:250px;padding:175px 0 20px !important;}
		}
		@media screen and (max-width: 500px) { 
			.quote-photo-list .blockquote-wrapper .blockquote .citation-photo {min-height:50px;}
			.quote-photo-list .blockquote-wrapper .blockquote .grid-fixed-6b.pl4 {float:left;padding-left:0;width:100% !important;}
		}
</style> 