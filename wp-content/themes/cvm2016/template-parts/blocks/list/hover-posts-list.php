<?php
/**
 * Hover Posts List Block Template.
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

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php if(get_field('hover_posts_list_section_background_color')) { echo '' . get_field('hover_posts_list_section_background_color') . ''; } ?> <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb5';} ?> clearfix"> 
	
	<?php if(get_field('hover_posts_list_section_background_photo')) { echo '<div class="color-overlay bg-common'; } ?><?php if((get_field('hover_posts_list_section_background_photo_opacity') && get_field('hover_posts_list_section_background_photo')) == true) { echo ' ' . get_field('hover_posts_list_section_background_photo_opacity') . ''; } ?><?php if(get_field('hover_posts_list_section_background_photo')) { echo ' clearfix" style="background-image:url(' . get_field('hover_posts_list_section_background_photo') . ');'; } ?><?php if((get_field('hover_posts_list_section_background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?><?php if(get_field('hover_posts_list_section_background_photo')) { echo '"></div>'; } ?>

	<?php if(get_field('hover_posts_list_section_background_color_filter')) { echo '<div class="color-overlay ' . get_field('hover_posts_list_section_background_color_filter') . ''; } ?><?php if((get_field('hover_posts_list_section_background_color_filter_opacity')) == true) { echo ' ' . get_field('hover_posts_list_section_background_color_filter_opacity') . ' '; } ?><?php if(get_field('hover_posts_list_section_background_color_filter')) { echo ' clearfix"></div>'; } ?>

		<?php if((get_field('hover_posts_list_section_headline') || get_field('hover_posts_list_section_subheadline') || get_field('hover_posts_list_section_text')) == true ) { echo '<div class="grid-page mauto"><div class="grid-10 fl clearfix">'; } ?>

			<?php if((get_field('hover_posts_list_section_header_width') || get_field('hover_posts_list_section_header_align') || get_field('hover_posts_list_section_header_text_align')) == true ) { echo '<div class="' . get_field('hover_posts_list_section_header_width') . ''; } ?><?php if((get_field('hover_posts_list_section_header_align')) == true ) { echo ' ' . get_field('hover_posts_list_section_header_align') . ''; } ?><?php if((get_field('hover_posts_list_section_header_text_align')) == true ) { echo ' ' . get_field('hover_posts_list_section_header_text_align') . ''; } ?><?php if((get_field('hover_posts_list_section_header_width') || get_field('hover_posts_list_section_header_align') || get_field('hover_posts_list_section_header_text_align')) == true ) { echo '">'; } ?>
		
			<?php if(get_field('hover_posts_list_section_label')) { echo '<p class="sp-small mt0 mb20'; } ?> 
			<?php if(get_field('hover_posts_list_section_label')) { ?>   
			<?php if((get_field('hover_posts_list_section_header_text_align')) == 'tac' ) { echo ' mauto '; } else { echo ' '; } ?>
			<?php if((get_field('hover_posts_list_section_header_text_align')) == 'tal' ) { echo ' fl '; } else { echo ' '; } ?>
			<?php if((get_field('hover_posts_list_section_header_text_align')) == 'tar' ) { echo 'fr '; } else { echo ' '; } ?>
			<?php if(get_field('hover_posts_list_section_label_text_color')) { echo ' ' . get_field('hover_posts_list_section_label_text_color') . ''; } ?>
			<?php } ?>
			<?php if(get_field('hover_posts_list_section_label')) { echo 'clearix">' . get_field('hover_posts_list_section_label') . '</p>'; } ?>  
		
			<?php if(get_field('hover_posts_list_section_headline')) { echo '<h2 class="block-headline_alt mt0 mb0 '; } ?><?php if(get_field('hover_posts_list_section_headline_color')) { echo '' . get_field('hover_posts_list_section_headline_color') . ''; } else { echo ' '; } ?><?php if(get_field('hover_posts_list_section_headline')) { echo '">' . get_field('hover_posts_list_section_headline') . '</h2>'; } ?>
			<?php if(get_field('hover_posts_list_section_subheadline')) { echo '<span class="block-subheadline pt0 pb0 mb20"'; } ?><?php if(get_field('hover_posts_list_section_subheadline_color')) { echo ' style="color:' . get_field('hover_posts_list_section_subheadline_color') . ';"'; } ?><?php if(get_field('hover_posts_list_section_subheadline')) { echo '>' . get_field('hover_posts_list_section_subheadline') . '</span>'; } ?>
			<?php if(get_field('hover_posts_list_section_text')) { echo '<span class="block-text"'; } ?><?php if((get_field('hover_posts_list_section_text_color') && get_field('hover_posts_list_section_text')) == true ) { echo ' style="color:' . get_field('hover_posts_list_section_text_color') . ';"'; } ?><?php if(get_field('hover_posts_list_section_text')) { echo '>' . get_field('hover_posts_list_section_text') . '</span>'; } ?> 
		
			<?php if((get_field('hover_posts_list_section_header_width') || get_field('hover_posts_list_section_header_align') || get_field('hover_posts_list_section_header_text_align')) == true ) { echo '</div>'; } ?>
		
		<?php if((get_field('hover_posts_list_section_headline') || get_field('hover_posts_list_section_subheadline') || get_field('hover_posts_list_section_text')) == true ) { echo '</div></div>'; } ?>

		<?php if(get_field('hover_posts_list')): $i = 0; ?>
			<div class="grid-page mauto"><ul class="hover-posts-list-flex">
			<?php while(has_sub_field('hover_posts_list')): $i++; ?>
				<li <?php if(get_field('hover_posts_list_columns')) { echo 'class="' . get_field('hover_posts_list_columns') . '"'; } ?>>
				 <?php if(get_sub_field('button_link')) { echo '<a href="' . get_sub_field('button_link') . '" class="'; } ?><?php if((get_sub_field('button_hubspot') && get_sub_field('button_link')) == true) { echo ' ' . get_sub_field('button_hubspot') . ''; } ?><?php if(get_sub_field('button_link')) { echo '"'; } ?><?php if((get_sub_field('target_link') && get_sub_field('button_link')) == true) { echo ' target="_blank"'; } ?><?php if(get_sub_field('button_link')) { echo ' role="link">'; } ?>
					<span class="post-content"> 
						<?php if(get_sub_field('photo')) { echo '<span class="post-img'; } ?><?php if(get_sub_field('photo_border_radius')) { echo ' ' . get_sub_field('photo_border_radius') . ''; } ?><?php if(get_sub_field('photo')) { echo '"><span class="post-bg clearfix" style="background-image:url(' . get_sub_field('photo') . ');"><span class="color-overlay purple-pink-diagonal opacity20"></span></span></span>'; } ?>
						<?php if(get_sub_field('label')) { echo '<p class="small cb mt0 mb0'; } ?><?php if((get_sub_field('label_color') && get_sub_field('label')) == true) { echo ' ' . get_sub_field('label_color') . ''; } ?><?php if(get_sub_field('label')) { echo '">' . get_sub_field('label') . '</p>'; } ?>
						<?php if(get_sub_field('title')) { echo '<h3 class="post-title mt0 mb0'; } ?><?php if((get_sub_field('title_color') && get_sub_field('title')) == true) { echo ' ' . get_sub_field('title_color') . ''; } ?><?php if(get_sub_field('title')) { echo '">' . get_sub_field('title') . '</h3>'; } ?>
						<?php if(get_sub_field('text')) { echo '<span class="post-desc hide-mobile'; } ?><?php if((get_sub_field('text_color') && get_sub_field('text')) == true) { echo ' ' . get_sub_field('text_color') . ''; } ?><?php if(get_sub_field('text')) { echo '">' . get_sub_field('text') . '</span>'; } ?> 
					</span>
					<?php if(get_sub_field('company')) { echo '<span class="company cb mt0">'; } ?><?php if((get_sub_field('company_color') && get_sub_field('company')) == true) { echo '<strong class="' . get_sub_field('company_color') . '">'; } ?><?php if(get_sub_field('company')) { echo '' . get_sub_field('company') . ''; } ?><?php if((get_sub_field('company_color') && get_sub_field('company')) == true) { echo '</strong>'; } ?><?php if(get_sub_field('company')) { echo '</span>'; } ?>
				 <?php if(get_sub_field('button_link')) { echo '</a>'; } ?>
 				</li>
			<?php endwhile; ?>
			</ul></div>
		<?php endif; ?>

		<style type="text/css">
		.hover-posts-list-flex{display:flex;flex-flow:row wrap;gap:0%;margin:0px auto 20px !important;padding:0 !important;position:relative;width:100%;max-width:1200px !important;}
		.hover-posts-list-flex li{background:#fff;border-radius:20px;display:flex;flex:1 0 auto;flex-grow:1;margin:0 3% 3% 0;padding:0;position:relative;width:14.16%;max-width:14.16%;}
		.hover-posts-list-flex li.six{width:14.16%;max-width:14.16%;}
		.hover-posts-list-flex li.five{width:17.6%;max-width:17.6%;}
		.hover-posts-list-flex li.four{width:22.75%;max-width:22.75%;}
		.hover-posts-list-flex li.three{width:31.3%;max-width:31.3%;}
		.hover-posts-list-flex li.two{width:48.5%;max-width:48.5%;}

		.hover-posts-list-flex li.six:nth-child(6n+6){margin-right:0;}
			
		.hover-posts-list-flex li.five:nth-child(5n+5){margin-right:0%;}
		.hover-posts-list-flex li.five:nth-child(6n+6){margin-right:3%;}
			
		.hover-posts-list-flex li.four:nth-child(4n+4){margin-right:0%;}
		.hover-posts-list-flex li.four:nth-child(5n+5){margin-right:3%;} 

		.hover-posts-list-flex li.three:nth-child(3n+3){margin-right:0;}

		.hover-posts-list-flex li.two:nth-child(even){margin-right:0;}

		.hover-posts-list-flex li a {background:#fff;border-radius:20px;display:block;position:relative;transition:all .5s ease-in-out;width:100%;z-index:1;}
		.hover-posts-list-flex li a:hover {box-shadow:0 0 30px rgba(0, 0, 0, 0.3);cursor:pointer;transition:all .3s ease-in-out;}
		.hover-posts-list-flex li .post-img {background-position:center center;background-repeat:no-repeat;background-size:cover;float:left;display:block;height:250px;margin:0 0 10px;overflow:hidden;padding:0;position:relative;width:100%;-moz-transition:all 0.5s ease;-webkit-transition:all 0.5s ease;-o-transition:all 0.5s ease;-ms-transition:all 0.5s ease;transition:all 0.5s ease;}
		.hover-posts-list-flex li a:hover .post-img {-moz-transition:all 0.5s ease;-webkit-transition:all 0.5s ease;-o-transition:all 0.5s ease;-ms-transition:all 0.5s ease;transition:all 0.5s ease;}
		.hover-posts-list-flex li .post-img .post-bg {background-position:center center;background-repeat:no-repeat;background-size:cover;bottom:0;display:block;height:250px;left:0;margin:0;padding:0;position:absolute;right:0;top:0;width:100%;-moz-transition:all 3.0s ease;-webkit-transition:all 3.0s ease;-o-transition:all 3.0s ease;-ms-transition:all 3.0s ease;transition:all 3.0s ease;} 
		.hover-posts-list-flex li a:hover .post-img .post-bg {transform:scale(1.5);}
		.hover-posts-list-flex li .post-content {display:block;float:left;margin:0;padding:15px 15px 25px;position:relative;width:100%;transition:all 0.3s ease-in-out;}
		.hover-posts-list-flex li a:hover .post-content { }
		.hover-posts-list-flex li .small {display:block;float:left;font-family:'Lato', sans-serif;font-size:13px;font-weight:400;letter-spacing:1px;line-height:110%;padding:0 0 5px;position:relative;text-align:left;text-transform:uppercase;}	 
		.hover-posts-list-flex li .post-title {color:#3A357E;display:block;float:left;font-family:'Oswald', sans-serif;font-weight:400;font-size:24px;line-height:110%;margin-bottom:0;padding:0 0 10px;position:relative;text-align:left;transition:all .5s ease-in-out;width:100%;}
		.hover-posts-list-flex li a:hover .post-title {cursor:pointer;transform:scale(1.0);transition:all .5s ease-in-out;}
		.hover-posts-list-flex li .post-desc {display:block;float:left;font-family:'Lato', sans-serif;font-size:16px;font-weight:400;margin:0;position:relative;text-align:left;transition:all .5s ease-in-out;width:100%;} 
		.hover-posts-list-flex li .post-desc p{color:#333;display:block;font-family:'Lato', sans-serif;font-weight:400 !important;font-size:17px;line-height:120% !important;position:relative;width:100%;} 
		/* .hover-posts-list-flex li .company {clear:both;float:left;font-family:'Oswald', sans-serif;font-size:16px !important;font-weight:400;line-height:140% !important;margin-bottom:20px;position:relative;width:100%;} */
		.hover-posts-list-flex li .company {bottom:10px;font-family:'Oswald', sans-serif;font-size:16px !important;font-weight:400;left:15px;line-height:140% !important;position:absolute;right:15px;width:auto;} 
 		@media screen and (max-width: 1200px) { 
			.hover-posts-list-flex li.six {width:17.6%;max-width:17.6%;} /* 5 */
			.hover-posts-list-flex li.six:nth-child(6n+6){margin-right:3%;}
			.hover-posts-list-flex li.six:nth-child(5n+5){margin-right:0;} 
		}
 		@media screen and (max-width: 1100px) { 
			.hover-posts-list-flex li.six {width:22.75%;max-width:22.75%;} /* 4 */
			.hover-posts-list-flex li.six:nth-child(5n+5){margin-right:3%;}
			.hover-posts-list-flex li.six:nth-child(4n+4){margin-right:0;}
			
			.hover-posts-list-flex li.five{width:22.75%;max-width:22.75%;} /* 4 */
			.hover-posts-list-flex li.five:nth-child(5n+5){margin-right:3%;}
			.hover-posts-list-flex li.five:nth-child(4n+4){margin-right:0;} 
		}
 		@media screen and (max-width: 960px) { 
			.hover-posts-list-flex li.six {width:31.3%;max-width:31.3%;} /* 3 */
			.hover-posts-list-flex li.six:nth-child(4n+4){margin-right:3%;}
			.hover-posts-list-flex li.six:nth-child(3n+3){margin-right:0;} 
			
			.hover-posts-list-flex li.five{width:31.3%;max-width:31.3%;} /* 3 */ 
			.hover-posts-list-flex li.five:nth-child(4n+4){margin-right:3%;}
			.hover-posts-list-flex li.five:nth-child(3n+3){margin-right:0;}
		
			.hover-posts-list-flex li.four{width:31.3%;max-width:31.3%;} /* 3 */ 
			.hover-posts-list-flex li.four:nth-child(4n+4){margin-right:3%;}
			.hover-posts-list-flex li.four:nth-child(3n+3){margin-right:0;}
			 
		} 
 		@media screen and (max-width: 767px) {
			.hover-posts-list-flex li.six,
			.hover-posts-list-flex li.five,
			.hover-posts-list-flex li.four,
			.hover-posts-list-flex li.three {width:48.5%;max-width:48.5%;} /* 2*/ 
			.hover-posts-list-flex li.six:nth-child(3n+3){margin-right:3%;}
			.hover-posts-list-flex li.six:nth-child(2n+2){margin-right:0;}
			
			.hover-posts-list-flex li.five:nth-child(3n+3){margin-right:3%;}
			.hover-posts-list-flex li.five:nth-child(2n+2){margin-right:0;}
			
			.hover-posts-list-flex li.four:nth-child(3n+3){margin-right:3%;}
			.hover-posts-list-flex li.four:nth-child(2n+2){margin-right:0%;}
			 
			.hover-posts-list-flex li.three:nth-child(3n+3){margin-right:3%;}
			.hover-posts-list-flex li.three:nth-child(even){margin-right:0;}
			
			.hover-posts-list-flex li{border-radius:5px;}
			.hover-posts-list-flex li .post-img {margin:0 0 5px;}
			/* .hover-posts-list-flex li .company {margin-bottom:10px;} */
			.hover-posts-list-flex li .post-content {padding:5px 5px 25px;}
			.hover-posts-list-flex li .post-img.br10 {border-radius:5px;}
			.hover-posts-list-flex li .post-img, .hover-posts-list-flex li .post-img .post-bg {height:150px;}  
			.hover-posts-list-flex li .small {font-size:12px;}
			.hover-posts-list-flex li .post-title {font-size:20px;}
			.hover-posts-list-flex li .company {font-size:14px !important;left:5px;right:5px;} 
		}
 		@media screen and (max-width: 400px) { 
			.hover-posts-list-flex li .post-desc p{margin-bottom:5px !important;} 
			.hover-posts-list-flex li{border-radius:5px;}
			.hover-posts-list-flex li .post-content {padding:5px 5px 0;}
			.hover-posts-list-flex li .post-img.br10 {border-radius:5px;}
			.hover-posts-list-flex li .post-img, .hover-posts-list-flex li .post-img .post-bg {height:100px;}  
			.hover-posts-list-flex li .small {font-size:10px;}
			.hover-posts-list-flex li .post-title {font-size:16px;}
			.hover-posts-list-flex li .company {font-size:12px !important;}
		} 
		</style>  
</section>