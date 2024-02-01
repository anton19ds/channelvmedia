<?php
/**
 * Highlights Block Template.
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

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl<?php if((get_field('on_case_study')) == true) { echo' on-cs'; } ?><?php if(get_field('highlights_background_color')) { echo ' ' . get_field('highlights_background_color') . ''; } ?> job-lists <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb5';} ?> clearfix"> 
	
	<?php if(get_field('highlights_background_photo')) { echo '<div class="color-overlay-exact bg-common'; } ?><?php if((get_field('highlights_background_photo_opacity')) == true) { echo ' ' . get_field('highlights_background_photo_opacity') . ''; } ?><?php if(get_field('highlights_background_photo')) { echo ' clearfix" style="background-image:url(' . get_field('highlights_background_photo') . ');'; } ?><?php if((get_field('highlights_background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?><?php if(get_field('highlights_background_photo')) { echo '"></div>'; } ?>

	<?php if(get_field('highlights_background_color_filter')) { echo '<div class="color-overlay-exact ' . get_field('highlights_background_color_filter') . ''; } ?><?php if((get_field('highlights_background_color_filter_opacity')) == true) { echo ' ' . get_field('highlights_background_color_filter_opacity') . ' '; } ?><?php if(get_field('highlights_background_color_filter')) { echo ' clearfix"></div>'; } ?>

	<div class="grid-page mauto clearfix">

		<?php if((get_field('highlights_headline') || get_field('highlights_subheadline') || get_field('highlights_text')) == true ) { echo '<div class="grid-10 fl clearfix">'; } ?>

			<?php if((get_field('highlights_header_width')) == true ) { echo '<div class="' . get_field('highlights_header_width') . ''; } ?><?php if((get_field('highlights_header_align')) == true ) { echo ' ' . get_field('highlights_header_align') . ''; } ?><?php if((get_field('highlights_header_text_align')) == true ) { echo ' ' . get_field('highlights_header_text_align') . ''; } ?><?php if((get_field('highlights_header_width')) == true ) { echo '">'; } ?>
		
			<?php if(get_field('highlights_label')) { echo '<p class="sp-small mt0 mb20 white'; } ?>
			<?php if(get_field('highlights_label_text_color')) { echo '' . get_field('highlights_label_text_color') . ''; } ?>
			<?php if(get_field('highlights_label')) { echo 'clearix">' . get_field('highlights_label') . '</p>'; } ?> 
		
			<?php if(get_field('highlights_headline')) { echo '<h2 class="block-headline_alt mt0 '; } ?><?php if((get_field('highlights_headline') && get_field('highlights_subheadline')) == true ) { echo ' mb10'; } ?><?php if(get_field('highlights_headline_color')) { echo ' ' . get_field('highlights_headline_color') . ''; } else { echo ' '; } ?><?php if(get_field('highlights_headline')) { echo '">' . get_field('highlights_headline') . '</h2>'; } ?>
			<?php if(get_field('highlights_subheadline')) { echo '<span class="block-subheadline pt0 pb0 mb20"'; } ?><?php if(get_field('highlights_subheadline_color')) { echo ' style="color:' . get_field('highlights_subheadline_color') . ';"'; } ?><?php if(get_field('highlights_subheadline')) { echo '>' . get_field('highlights_subheadline') . '</span>'; } ?>
			<?php if(get_field('highlights_text')) { echo '<span class="block-text"'; } ?><?php if((get_field('highlights_text_color') && get_field('highlights_text')) == true ) { echo ' style="color:' . get_field('highlights_text_color') . ';"'; } ?><?php if(get_field('highlights_text')) { echo '>' . get_field('highlights_text') . '</span>'; } ?> 
		
			<?php if((get_field('highlights_header_width')) == true ) { echo '</div>'; } ?>
		
		<?php if((get_field('highlights_headline') || get_field('highlights_subheadline') || get_field('highlights_text')) == true ) { echo '</div>'; } ?>
		
		<?php if(get_field('highlights_list')): $i = 0; ?>
			<ul class="highlights-list-flex">
			<?php while(has_sub_field('highlights_list')): $i++; ?>
				<li <?php if(get_field('highlights_columns')) { echo 'class="' . get_field('highlights_columns') . '"'; } ?>> 

				<span class="post-content bg-common" <?php if(get_sub_field('highlights_photo')) { echo 'style="background-image:url(' . get_sub_field('highlights_photo') . ');"'; } ?>> 

						<?php if(get_sub_field('highlights_photo_background_color_filter')) { echo '<div class="color-overlay-exact ' . get_sub_field('highlights_photo_background_color_filter') . ''; } ?><?php if((get_sub_field('highlights_photo_background_color_filter_opacity')) == true) { echo ' ' . get_sub_field('highlights_photo_background_color_filter_opacity') . ' '; } ?><?php if(get_sub_field('highlights_photo_background_color_filter')) { echo ' clearfix"></div>'; } ?>
					<span class="grid-page"> 
							<?php if(get_sub_field('highlights_logo')) { ?>
								<?php if(get_sub_field('highlights_logo')) { echo '<span class="mauto pt2'; } ?><?php if(get_sub_field('highlights_logo_width')) { echo ' ' . get_sub_field('highlights_logo_width') . ''; } else { echo' grid-10'; } ?><?php if(get_sub_field('highlights_logo')) { echo '">'; } ?>
								<?php $image = get_sub_field('highlights_logo'); ?>
								<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="300" height="200"/>
								<?php if(get_sub_field('highlights_logo')) { echo '</span>'; } ?>
							<?php } ?>
							<?php if(get_sub_field('highlights_highlight') || get_sub_field('highlights_desc')) { echo '<span class="grid-10 br10 mt20 pt1 pb2 pl2 pr2 clearfix">'; } ?>
							
								<?php if(get_sub_field('highlights_highlight_background_color')) { echo '<div class="color-overlay-exact br10  ' . get_sub_field('highlights_highlight_background_color') . ''; } ?><?php if((get_sub_field('highlights_highlight_background_opacity')) == true) { echo ' ' . get_sub_field('highlights_highlight_background_opacity') . ' '; } ?><?php if(get_sub_field('highlights_highlight_background_color')) { echo ' clearfix"></div>'; } ?>
							
								<?php if(get_sub_field('highlights_highlight')) { echo '<h3 class="post-name mt0 mb0 pb0'; } ?><?php if(get_sub_field('highlights_highlight_text_color') && get_sub_field('highlights_highlight')) { echo ' ' . get_sub_field('highlights_highlight_text_color') . ''; } ?><?php if(get_sub_field('highlights_highlight')) { echo '">' . get_sub_field('highlights_highlight') . '</h3>'; } ?> 
								<?php if(get_sub_field('highlights_subtext')) { echo '<span class="post-subtext mt0 mb0 pt0 pb1 tac'; } ?><?php if(get_sub_field('highlights_highlight_subtextext_color') && get_sub_field('highlights_subtext')) { echo ' ' . get_sub_field('highlights_highlight_subtextext_color') . ''; } ?><?php if(get_sub_field('highlights_subtext')) { echo '"><strong>' . get_sub_field('highlights_subtext') . '</strong></span>'; } ?> 
								<?php if(get_sub_field('highlights_text')) { echo '<span class="post-desc'; } ?><?php if(get_sub_field('highlights_desc_text_color') && get_sub_field('highlights_text')) { echo ' ' . get_sub_field('highlights_highlight_text_color') . ''; } ?><?php if(get_sub_field('highlights_text')) { echo '">' . get_sub_field('highlights_text') . '</span>'; } ?>
							<?php if(get_sub_field('highlights_highlight') || get_sub_field('highlights_desc')) { echo '</span>'; } ?>
					</span>
				</span>
					
					<?php if(get_sub_field('highlights_desc')) { echo '<span class="post-desc pt2'; } ?><?php if(get_sub_field('highlights_desc_text_color') && get_sub_field('highlights_desc')) { echo ' ' . get_sub_field('highlights_desc_text_color') . ''; } ?><?php if(get_sub_field('highlights_desc')) { echo '">' . get_sub_field('highlights_desc') . '</span>'; } ?>
					
					<?php if(get_sub_field('open_positions_button_link')) { echo '<span class="grid-10 mb0 mt20"><a href="' . get_sub_field('open_positions_button_link') . '" class="btn-swipe-rect mauto'; } ?> <?php if(get_sub_field('open_positions_button_hubspot') && get_sub_field('open_positions_button_link')) { echo '' . get_sub_field('open_positions_button_hubspot') . ''; } ?> <?php if(get_sub_field('open_positions_button_color') && get_sub_field('open_positions_button_link')) { echo '' . get_sub_field('open_positions_button_color') . ''; } ?><?php if(get_sub_field('open_positions_button_link')) { echo '"'; } ?>
					<?php if((get_sub_field('open_positions_target_blank') && get_sub_field('open_positions_button_link')) == true) { echo 'target="_blank"'; } ?> 
					<?php if(get_sub_field('open_positions_button_link')) { echo '>'; } ?>
					<?php if(get_sub_field('open_positions_button_text') && get_sub_field('open_positions_button_link')) { echo '<span>' . get_sub_field('open_positions_button_text') . '</span>'; } ?> 
					<?php if(get_sub_field('open_positions_button_link')) { echo '<div class="transition-rect"></div></a></span>'; } ?>  
 				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?> 

		<style type="text/css"> 
		.highlights-list-flex{display:flex;flex-flow:row wrap;float:left;gap:0%;margin:0px auto !important;padding:0 !important;position:relative;width:100%;max-width:1200px !important;}
		.highlights-list-flex li{display:flex;flex-direction:column;flex-wrap:wrap;flex:1 0 auto;flex-grow:1;margin:0 3% 3% 0;overflow:hidden;padding:0;position:relative;width:14.16%;max-width:14.16%;}
		.highlights-list-flex li.six{width:14.16%;max-width:14.16%;}
		.highlights-list-flex li.five{width:17.6%;max-width:17.6%;}
		.highlights-list-flex li.four{width:22.75%;max-width:22.75%;}
		.highlights-list-flex li.three{margin:0 3% 3% 0;width:31.3%;max-width:31.3%;}
		.highlights-list-flex li.two{width:48.5%;max-width:48.5%;}

		.highlights-list-flex li.six:nth-child(6n+6){margin-right:0;}
		.highlights-list-flex li.five:nth-child(5n+5){margin-right:0%;}
		.highlights-list-flex li.five:nth-child(6n+6){margin-right:3%;}
		.highlights-list-flex li.four:nth-child(4n+4){margin-right:0%;}
		.highlights-list-flex li.four:nth-child(5n+5){margin-right:3%;} 
		.highlights-list-flex li.three:nth-child(3n+3){margin-right:0;}
		.highlights-list-flex li.two:nth-child(even){margin-right:0;} 

		.highlights-list-flex li .post-img {background-position:center center;background-repeat:no-repeat;background-size:cover;float:left;display:block;height:250px;margin:0 0 20px;overflow:hidden;padding:0;position:relative;width:100%;-moz-transition:all 0.5s ease;-webkit-transition:all 0.5s ease;-o-transition:all 0.5s ease;-ms-transition:all 0.5s ease;transition:all 0.5s ease;}
 		.highlights-list-flex li .post-img .post-bg {background-position:center center;background-repeat:no-repeat;background-size:cover;bottom:0;display:block;height:250px;left:0;margin:0;padding:0;position:absolute;right:0;top:0;width:100%;-moz-transition:all 3.0s ease;-webkit-transition:all 3.0s ease;-o-transition:all 3.0s ease;-ms-transition:all 3.0s ease;transition:all 3.0s ease;} 
 		.highlights-list-flex li .post-content {border:4px solid #fff;border-radius:20px;display:block;float:left;margin:0;overflow:hidden;padding:0 0 20px;position:relative;width:100%;}
		.highlights-list-flex li .post-name {color:#3A357E;display:block;float:left;font-family:'Oswald', sans-serif;font-weight:400;font-size:60px;font-size:calc((112.5% + 0.25vw) * 2.5);line-height:80% !important;padding-bottom:10px;padding-top:5px;position:relative;text-align:center;width:100%;}
		
		.highlights-list-flex li .post-subtext {color:#3A357E;display:block;float:left;font-family:'Oswald', sans-serif;font-weight:400;font-size:24px;line-height:80% !important;padding-bottom:10px;padding-top:5px;position:relative;text-align:center;width:100%;}  
			
		.highlights-list-flex li.four .post-name {font-size:48px;font-size:calc((112.5% + 0.25vw) * 2);}
		.highlights-list-flex li.six .post-name, .highlights-list-flex li.five .post-name {font-size:36px;font-size:calc((112.5% + 0.25vw) * 1.5);}
 		.highlights-list-flex li .post-desc {display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;font-size:18px;line-height:100%;margin:0;position:relative;text-align:center;transition:all .5s ease-in-out;width:100%;} 
		.highlights-list-flex li .post-desc p{color:#333;display:block;font-family:'Lato', sans-serif;font-weight:400;font-size:18px;line-height:120%;margin:0 !important;position:relative;text-align:center;width:100%;}
		.highlights-list-flex li .post-link {color:#3A357E;display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;font-size:18px;padding-bottom:20px;position:relative;text-align:left;width:100%;}
		.highlights-list-flex li .post-link::after {content: "→";margin-left:5px;}
			
		.on-cs .highlights-list-flex li .post-name {font-size:48px;font-size:calc((112.5% + 0.25vw) * 2);} 
		.on-cs .highlights-list-flex li.four .post-name{font-size:30px;font-size:calc((112.5% + 0.25vw) * 1) !important;} 
		.on-cs .highlights-list-flex li.five .post-name,
		.on-cs .highlights-list-flex li.six .post-name{font-size:24px;font-size:calc((112.5% + 0.25vw) * 0.8) !important;}
			
			
 		@media screen and (max-width: 1700px) {  
			.on-cs .highlights-list-flex li.five,
			.on-cs .highlights-list-flex li.six{margin:0 3% 3% 0;width:48%;max-width:48%;}
			.on-cs .highlights-list-flex li.five:nth-child(even),
			.on-cs .highlights-list-flex li.six:nth-child(even){margin:0 0 3% 0;}
		}
 		@media screen and (max-width: 1600px) { 
			.on-cs .highlights-list-flex li .post-name {font-size:36px;font-size:calc((112.5% + 0.25vw) * 1.5) !important;}
			.on-cs .highlights-list-flex li.four .post-name,  
			.on-cs .highlights-list-flex li.five .post-name,
			.on-cs .highlights-list-flex li.six .post-name{font-size:30px;font-size:calc((112.5% + 0.25vw) * 1) !important;} 
		}
 		@media screen and (max-width: 1300px) {  
			.on-cs .highlights-list-flex li.four{margin:0 3% 3% 0;width:48%;max-width:48%;}
			.on-cs .highlights-list-flex li.four:nth-child(even){margin:0 0 3% 0;}
			 
			.on-cs .highlights-list-flex li.four .post-name,
			.on-cs .highlights-list-flex li.five .post-name,
			.on-cs .highlights-list-flex li.six .post-name{font-size:36px;font-size:calc((112.5% + 0.25vw) * 1.5) !important;}
		}  
 		@media screen and (max-width: 1200px) {
			.highlights-list-flex li.six{width:17.6%;max-width:17.6%;} /* 5 */
			.highlights-list-flex li.six:nth-child(6n+6){margin-right:3%;}
			.highlights-list-flex li.six:nth-child(5n+5){margin-right:0;}
			
			.on-cs .highlights-list-flex li .post-name {font-size:30px;font-size:calc((112.5% + 0.25vw) * 1) !important;}
			.on-cs .highlights-list-flex li.three{margin:0 0 3% 0;width:100%;max-width:100%;}
			.on-cs .highlights-list-flex li.three .post-name {font-size:60px;font-size:calc((112.5% + 0.25vw) * 2.5) !important;}
		}
 		@media screen and (max-width: 1100px) {   
			.highlights-list-flex li.six {width:22.75%;max-width:22.75%;} /* 4 */
			.highlights-list-flex li.six:nth-child(5n+5){margin-right:3%;}
			.highlights-list-flex li.six:nth-child(4n+4){margin-right:0;}
			
			.highlights-list-flex li.five{width:22.75%;max-width:22.75%;} /* 4 */
			.highlights-list-flex li.five:nth-child(5n+5){margin-right:3%;}
			.highlights-list-flex li.five:nth-child(4n+4){margin-right:0;} 
		} 
 		@media screen and (max-width: 1000px) { 
 		} 
 		@media screen and (max-width: 767px) { 
			.highlights-list-flex li{margin-bottom:5% !important;}
			.highlights-list-flex li.six, 
			.highlights-list-flex li.five,
			.highlights-list-flex li.four, 
			.highlights-list-flex li.three, 
			.highlights-list-flex li.two {width:47.5%;max-width:47.5%;} /* 2*/ 
			
			.highlights-list-flex li,
			.highlights-list-flex li.six:nth-child(3n+3),
			.highlights-list-flex li.five:nth-child(3n+3),
			.highlights-list-flex li.four:nth-child(odd),
			.highlights-list-flex li.three:nth-child(3n+3),
			.highlights-list-flex li.two:nth-child(odd){margin-right:5% !important;}
			
			.highlights-list-flex li.six:nth-child(2n+2),
			.highlights-list-flex li.five:nth-child(2n+2),
			.highlights-list-flex li.four:nth-child(even),
			.highlights-list-flex li.three:nth-child(even), 
			.highlights-list-flex li.two:nth-child(even){margin-right:0% !important;} 
			
			.on-cs .highlights-list-flex li .post-name,
			.on-cs .highlights-list-flex li.two .post-name,
			.on-cs .highlights-list-flex li.three .post-name,
			.on-cs .highlights-list-flex li.four .post-name,
			.on-cs .highlights-list-flex li.five .post-name,
			.on-cs .highlights-list-flex li.six .post-name{font-size:48px;font-size:calc((112.5% + 0.25vw) * 2) !important;}
			
			.on-cs .highlights-list-flex li.six, 
			.on-cs .highlights-list-flex li.five,
			.on-cs .highlights-list-flex li.four, 
			.on-cs .highlights-list-flex li.three, 
			.on-cs .highlights-list-flex li.two{margin:0 0 3% 0;width:100%;max-width:100%;}
			
			.on-cs .highlights-list-flex li.six:nth-child(even), 
			.on-cs .highlights-list-flex li.five:nth-child(even),
			.on-cs .highlights-list-flex li.four:nth-child(even), 
			.on-cs .highlights-list-flex li.three:nth-child(even), 
			.on-cs .highlights-list-flex li.two:nth-child(even){margin:0 0 3% 0;}
		} 
		@media screen and (max-width: 500px) { 
			.highlights-list-flex li {margin-bottom:10% !important;}
			.highlights-list-flex li.six,
			.highlights-list-flex li.five,
			.highlights-list-flex li.four,
			.highlights-list-flex li.three, 
			.highlights-list-flex li.two{width:100%;max-width:100%;}  
			.highlights-list-flex li.six:nth-child(3n+3),
			.highlights-list-flex li.six,
			.highlights-list-flex li.five:nth-child(3n+3),
			.highlights-list-flex li.five:nth-child(odd),
			.highlights-list-flex li.five:nth-child(even),			
			.highlights-list-flex li.four:nth-child(odd),
			.highlights-list-flex li.four:nth-child(even),
			.highlights-list-flex li.three:nth-child(3n+3),
			.highlights-list-flex li.three:nth-child(odd),
			.highlights-list-flex li.three:nth-child(even),
			.highlights-list-flex li.two:nth-child(odd),
			.highlights-list-flex li.two:nth-child(even){margin-right:0% !important;} 
		}
		</style> 
	</div>   
</section>