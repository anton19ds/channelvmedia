<?php
/**
 * Open Positions Block Template.
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
$open_positions_headline = get_field('open_positions_headline') ?: 'Headline'; 
$open_positions_headline_color = get_field('open_positions_headline_color') ?: 'Headline Color'; 
$open_positions_subheadline = get_field('open_positions_subheadline') ?: 'Subheadline'; 
$open_positions_subheadline_color = get_field('open_positions_subheadline_color') ?: 'Subheadline Color'; 
$open_positions_text = get_field('open_positions_text') ?: 'Intro Text'; 
$open_positions_text_color = get_field('open_positions_text_color') ?: 'Intro Text Color';
$open_positions_button_link = get_sub_field('open_positions_button_link') ?: 'Link';
$open_positions_target_link = get_sub_field('open_positions_target_link') ?: 'Open in a new window?';
$open_positions_bg_image = get_sub_field('open_positions_bg_image') ?: 'Position Background Photo';
$open_positions_block_color = get_sub_field('open_positions_block_color') ?: 'Position Block Color';
$open_positions_name = get_sub_field('open_positions_name') ?: 'Position Name';
$open_positions_desc = get_sub_field('open_positions_desc') ?: 'Description';
$open_positions_button_text = get_sub_field('open_positions_button_text') ?: 'Button Text';
$open_positions_background_color = get_field('open_positions_background_color') ?: 'Section Background Color';
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php if(get_field('open_positions_background_color')) { echo '' . get_field('open_positions_background_color') . ''; } ?> job-lists <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb5';} ?> clearfix"> 
	
	<?php if(get_field('open_positions_background_photo')) { echo '<div class="color-overlay bg-common'; } ?><?php if((get_field('open_positions_background_photo_opacity')) == true) { echo ' ' . get_field('open_positions_background_photo_opacity') . ''; } ?><?php if(get_field('open_positions_background_photo')) { echo ' clearfix" style="background-image:url(' . get_field('open_positions_background_photo') . ');'; } ?><?php if((get_field('open_positions_background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?><?php if(get_field('open_positions_background_photo')) { echo '"></div>'; } ?>

	<?php if(get_field('open_positions_background_color_filter')) { echo '<div class="color-overlay ' . get_field('open_positions_background_color_filter') . ''; } ?><?php if((get_field('open_positions_background_color_filter_opacity')) == true) { echo ' ' . get_field('open_positions_background_color_filter_opacity') . ' '; } ?><?php if(get_field('open_positions_background_color_filter')) { echo ' clearfix"></div>'; } ?>
	
	<div class="grid-page mauto clearfix">
		
		<?php if((get_field('open_positions_headline') || get_field('open_positions_subheadline') || get_field('open_positions_text')) == true ) { echo '<div class="grid-10 fl clearfix">'; } ?>
		 
			<?php if((get_field('open_positions_header_width')) == true ) { echo '<div class="' . get_field('open_positions_header_width') . ''; } ?><?php if((get_field('open_positions_header_align')) == true ) { echo ' ' . get_field('open_positions_header_align') . ''; } ?><?php if((get_field('open_positions_header_text_align')) == true ) { echo ' ' . get_field('open_positions_header_text_align') . ''; } ?><?php if((get_field('open_positions_header_width')) == true ) { echo '">'; } ?>
		
			<?php if(get_field('open_positions_label')) { echo '<p class="sp-small mt0 mb20 white'; } ?>
			<?php if(get_field('open_positions_label_text_color')) { echo '' . get_field('open_positions_label_text_color') . ''; } ?>
			<?php if(get_field('open_positions_label')) { echo 'clearix">' . get_field('open_positions_label') . '</p>'; } ?> 
		
			<?php if(get_field('open_positions_headline')) { echo '<h2 class="block-headline bkw '; } ?><?php if(get_field('open_positions_headline_color')) { echo '' . get_field('open_positions_headline_color') . ''; } else { echo ' '; } ?><?php if(get_field('open_positions_headline')) { echo '" style="margin-bottom:20px !important;">' . get_field('open_positions_headline') . '</h2>'; } ?>
			<?php if(get_field('open_positions_subheadline')) { echo '<span class="block-subheadline"'; } ?><?php if(get_field('open_positions_subheadline_color')) { echo ' style="color:' . get_field('open_positions_subheadline_color') . ';"'; } ?><?php if(get_field('open_positions_subheadline')) { echo '>' . get_field('open_positions_subheadline') . '</span>'; } ?>
			<?php if(get_field('open_positions_text')) { echo '<span class="block-text"'; } ?><?php if((get_field('open_positions_text_color') && get_field('open_positions_text')) == true ) { echo ' style="color:' . get_field('open_positions_text_color') . ';"'; } ?><?php if(get_field('open_positions_text')) { echo '>' . get_field('open_positions_text') . '</span>'; } ?> 
		
			<?php if((get_field('open_positions_header_width')) == true ) { echo '</div>'; } ?>
		
		<?php if((get_field('open_positions_headline') || get_field('open_positions_subheadline') || get_field('open_positions_text')) == true ) { echo '</div>'; } ?>
  
		<?php if(get_field('open_positions_list')): $i = 0; ?>
			<ul class="position-list-flex<?php if(get_field('open_positions_ul_top_padding')) { echo ' ' . get_field('open_positions_ul_top_padding') . ''; } ?><?php if(get_field('open_positions_ul_bottom_padding')) { echo ' ' . get_field('open_positions_ul_bottom_padding') . ''; } ?>" <?php if(get_field('open_positions_columns_bg')) { echo 'style="background-image:url(' . get_field('open_positions_columns_bg') . ');"'; } ?>> 
			<?php while(has_sub_field('open_positions_list')): $i++; ?> 
				<li <?php if(get_field('open_positions_columns')) { echo 'class="' . get_field('open_positions_columns') . '"'; } ?>>
				 <?php if(get_sub_field('open_positions_button_link')) { echo '<a href="' . get_sub_field('open_positions_button_link') . '" role="link"'; } ?><?php if((get_sub_field('open_positions_target_link')) == true ) { echo ' target="_blank"'; } ?><?php if(get_sub_field('open_positions_button_link')) { echo '>'; } ?>
					
					<?php if(get_sub_field('open_positions_bg_image')) { echo '<span class="img" style="background-image:url(' . get_sub_field('open_positions_bg_image') . ');">'; } ?>
						<?php if(get_sub_field('open_positions_block_color')) { echo '<span class="block-img-overlay ' . get_sub_field('open_positions_block_color') . '"></span>'; } ?>
					<?php if(get_sub_field('open_positions_bg_image')) { echo '</span>'; } ?>

					<span class="content-color<?php if(get_sub_field('open_positions_block_color')) { echo ' ' . get_sub_field('open_positions_block_color') . ''; } ?>">
					</span>
						
					<span class="content<?php if(get_field('open_positions_li_bottom_padding')) { echo ' ' . get_field('open_positions_li_bottom_padding') . ''; } ?>">
						<?php if(get_sub_field('open_positions_name')) { echo '<h4 class="position-name mt0 mb0 ' . get_sub_field('open_positions_name_text_color') . '">' . get_sub_field('open_positions_name') . '</h4>'; } ?>
						<?php if(get_sub_field('open_positions_desc')) { echo '<span class="position-desc ' . get_sub_field('open_positions_desc_text_color') . '">' . get_sub_field('open_positions_desc') . '</span>'; } ?>
						<?php if((get_sub_field('open_positions_button_text')) == true ) { echo '<span class="blog-link">' . get_sub_field('open_positions_button_text') . '</span>'; } ?>
					</span>
				 <?php if(get_sub_field('open_positions_button_link')) { echo '</a>'; } ?>
 				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>  
		
		<style type="text/css">
		.job-lists .block-headline{width:auto;}
		.job-lists .block-subheadline{padding-bottom:10px;}
		.position-list-flex{background-position:center;background-repeat:no-repeat;background-size:cover;display:flex;flex-flow:row wrap;float:left;gap:0%;margin:20px auto !important;padding:0;position:relative;width:100%;max-width:1200px !important;}
		.position-list-flex li{display:flex;flex:1 0 auto;flex-grow:1;margin:0;padding:0;position:relative;width:16.66%;max-width:16.66%;}
		.position-list-flex li.six{width:16.66%;max-width:16.66%;}
		.position-list-flex li.five{width:20%;max-width:20%;}
		.position-list-flex li.four{width:25%;max-width:25%;}
		.position-list-flex li.three{width:33.33%;max-width:33.33%;}
		.position-list-flex li.two{width:50%;max-width:50%;}
		.position-list-flex li a {display:block;position:relative;transition:all .5s ease-in-out;width:100%;z-index:1;}
		.position-list-flex li a:hover {cursor:pointer;transition:all .5s ease-in-out;}
		.position-list-flex li .img {background-position:top center;background-repeat:no-repeat;background-size:cover;bottom:0;display:block;left:0;position:absolute;right:0;top:0;width:100%;transition:all .5s ease-in-out;}
		.position-list-flex li .block-img-overlay {background-color:transparent;bottom:0;display:block;height:100%;left:0;opacity:0.6;position:absolute;right:0;top:0;width:100%;}
		.position-list-flex li .content-color {bottom:0;display:block;left:0;position:absolute;right:0;top:0;width:100%;transition:all .5s ease-in-out;}
		.position-list-flex li a:hover .content-color {background-color:transparent !important;transition:all .5s ease-in-out;}
		.position-list-flex li .content {display:table;margin:0 auto;padding:30px 0;position:relative;width:80%;}
		.position-list-flex li .position-name {color:#fff;display:block;font-family:'Oswald', sans-serif;font-weight:800;font-size:24px;line-height:120%;opacity:1;padding:0 0 20px;position:relative;transition:all .5s ease-in-out;width:100%;}
		.position-list-flex li a:hover .position-name {cursor:pointer;opacity:0;filter: opacity(0%);transition:all .5s ease-in-out;}
		.position-list-flex li .position-desc {display:block;margin:0;opacity:1;position:relative;transition:all .5s ease-in-out;width:100%;}
		.position-list-flex li a:hover .position-desc {opacity:0;filter: opacity(0%);transition:all .5s ease-in-out;}
		.position-list-flex li .position-desc p{color:#fff;display:block;font-family:'Lato', sans-serif;font-weight:400;font-size:16px;line-height:120%;margin-top:0 !important;position:relative;width:100%;}
		.position-list-flex li .position-desc p a {display:inline;}
			
		.position-list-flex li .position-desc.white p .post-desc {color:#ffffff !important;}
		.position-list-flex li .position-desc.black p .post-desc {color:#000 !important;} 
		.position-list-flex li .position-desc.dark-purple p .post-desc {color:#292560 !important;}
		.position-list-flex li .position-desc.purple p .post-desc {color:#3a357e !important;}
		.position-list-flex li .position-desc.light-purple p .post-desc {color:#5a53af !important;}
		.position-list-flex li .position-desc.dark-pink p .post-desc {color:#c11d8d !important;}
		.position-list-flex li .position-desc.pink p .post-desc {color:#e75fbc !important;}
		.position-list-flex li .position-desc.blue p .post-desc {color:#399ec7 !important;}
		.position-list-flex li .position-desc.gray6 p .post-desc {color:#231F20 !important;}
		.position-list-flex li .position-desc.gray5 p .post-desc {color:#3E3E3E !important;}
		.position-list-flex li .position-desc.gray4 p .post-desc {color:#6E6F71 !important;}
		.position-list-flex li .position-desc.gray3 p .post-desc {color:#e5e6e5 !important;}
		.position-list-flex li .position-desc.gray2 p .post-desc {color:#EFEEED !important;}
		.position-list-flex li .position-desc.gray1 p .post-desc {color:#F4F4F4 !important;} 
			
		.position-list-flex li .blog-link {color:#fff;font-family:'Lato', sans-serif;font-weight:400;font-size:16px;padding-bottom:20px;position:relative;width:100%;}
		.position-list-flex li .blog-link::after {content: "→";margin-left:5px;}
 
 		@media screen and (max-width: 1200px) {
			.position-list-flex li,
			.position-list-flex li.six {width:25%;max-width:25%;}
		}
 		@media screen and (max-width: 1100px) { 
			.position-list-flex li,
			.blog-post-list-flex li.six,
			.blog-post-list-flex li.five {width:20%;max-width:20%;} 
		}
		@media screen and (max-width: 960px) {  
			.position-list-flex li,
			.position-list-flex li.six, 
			.position-list-flex li.five, 
			.position-list-flex li.four{width:25%;max-width:25%;}			 
		} 
 		@media screen and (max-width: 767px) { 
			.position-list-flex li,
			.position-list-flex li.six,
			.position-list-flex li.five,
			.position-list-flex li.four,
			.position-list-flex li.three {width:50%;max-width:50%;}
		} 
		@media screen and (max-width: 640px) {
			.position-list-flex li,
			.position-list-flex li.six,
			.position-list-flex li.five,
			.position-list-flex li.four,
			.position-list-flex li.three, 
			.position-list-flex li.two{width:100%;max-width:100%;}  
		} 
		</style> 
	</div>   
 	<!--Inline style for Hero Block-->
	<style type="text/css">
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> {
			background-color: <?php echo $open_positions_background_color; ?> !important; 
		}  
	</style>  
</section>