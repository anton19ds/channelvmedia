<?php
/**
 * Link Icon List Block Template.
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
$section_id = get_field('section_id') ?: 'Section ID'; 
$top_margin = get_field('top_margin') ?: 'Top Margin'; 
$bottom_margin = get_field('bottom_margin') ?: 'Bottom Margin';
$top_padding = get_field('top_padding') ?: 'Top Padding'; 
$bottom_padding = get_field('bottom_padding') ?: 'Bottom Padding';
?>
<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php if(get_field('link_icon_list_background_color')) { echo '' . get_field('link_icon_list_background_color') . ''; } ?> <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } ?> clearfix"> 
	
	<?php if(get_field('link_icon_list_bg_photo')) { echo '<div class="color-overlay-exact bg-common clearfix'; } ?><?php if((get_field('link_icon_list_bg_photo_opacity')) == true) { echo ' ' . get_field('link_icon_list_bg_photo_opacity') . ''; } ?><?php if(get_field('link_icon_list_bg_photo')) { echo '" style="'; } ?><?php if(get_field('link_icon_list_bg_photo')) { echo 'background-image:url(' . get_field('link_icon_list_bg_photo') . ');'; } ?><?php if((get_field('link_icon_list_bg_photo_position')) == true) { echo 'background-position:' . get_field('link_icon_list_bg_photo_position') . ';'; } ?><?php if((get_field('link_icon_list_bg_photo_size')) == true) { echo 'background-size:' . get_field('link_icon_list_bg_photo_size') . ';'; } ?><?php if(get_field('link_icon_list_bg_photo')) { echo '"></div>'; } ?>
	
	
		<?php if(get_field('link_icon_list_headline') || get_field('link_icon_list_subheadline') || get_field('link_icon_list_label')) { echo '<div class="grid-10 fl clearfix"><div class="grid-page clearfix"><div class="'; } ?><?php if(get_field('link_icon_list_header_width')) { echo '' . get_field('link_icon_list_header_width') . ' '; } else { echo'grid-7 ';} ?><?php if(get_field('link_icon_list_headline') || get_field('link_icon_list_subheadline') || get_field('link_icon_list_label')) { echo 'fl clearfix">'; } ?>
		
				<?php if(get_field('link_icon_list_label')) { echo '<p class="sp-small mt0 mb20 white'; } ?>
				<?php if(get_field('link_icon_list_label_text_color')) { echo '' . get_field('link_icon_list_label_text_color') . ''; } ?>
				<?php if(get_field('link_icon_list_label')) { echo 'clearix">' . get_field('link_icon_list_label') . '</p>'; } ?>
	
				<?php if(get_field('link_icon_list_headline')) { echo '<h2 class="block-headline_alt mt0 mb10 ' . get_field('link_icon_list_headline_text_color') . '">' . get_field('link_icon_list_headline') . '</h2>'; } ?>
				<?php if(get_field('link_icon_list_subheadline')) { echo '<span class="block-subheadline pt0 pb0 mb20 ' . get_field('link_icon_list_subheadline_text_color') . '">' . get_field('link_icon_list_subheadline') . '</span>'; } ?>
		<?php if(get_field('link_icon_list_headline') || get_field('link_icon_list_subheadline') || get_field('link_icon_list_label')) { echo '</div></div></div>'; } ?>

	<div class="grid-page mauto clearfix">
		<div class="grid-10 fl clearfix <?php if(get_field('link_icon_list_top_margin')) { echo ' ' . get_field('link_icon_list_top_margin') . ''; } ?><?php if(get_field('link_icon_list_bottom_margin')) { echo ' ' . get_field('link_icon_list_bottom_margin') . ''; } ?>">
			<!-- start repeater-list -->
			<?php if( have_rows('link_icon_list') ):
			echo '<ul class="link-icon-list-flex">';
			// loop through the rows of data
			$countq = 0; while ( have_rows('link_icon_list') ) : the_row(); $countq++; ?>
				<li <?php if(get_field('link_icon_list_columns')) { echo 'class="' . get_field('link_icon_list_columns') . '"'; } ?>>
					<div class="inner-wrap">
						<?php if(get_sub_field('link_icon_list_link')) { echo '<a href="' . get_sub_field('link_icon_list_link') . '" role="link">'; }?>
							<?php $image = get_sub_field('link_icon_list_icon'); ?>
							<?php if( get_sub_field('link_icon_list_icon') ) { echo '<span class="content-icon"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('link_icon_list_icon') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('link_icon_list_icon') ) { echo '" width="40" height="40" border="0"/></span>'; } ?>  
							<?php if(get_sub_field('link_icon_list_title')) { echo '<span class="content"><span class="name'; }?>
								<?php if( get_sub_field('link_icon_list_title_text_color') ) { ?>
									<?php the_sub_field('link_icon_list_title_text_color');?>
								<?php } elseif( get_field('link_icon_list_text_color') ) {
								  the_field('link_icon_list_text_color');
								} ?><?php if(get_sub_field('link_icon_list_title')) { echo '">' . get_sub_field('link_icon_list_title') . '</span></span>'; }?> 
						<?php if(get_sub_field('link_icon_list_link')) { echo '</a>'; }?>
					</div>
				</li>
			<?php endwhile; echo '</ul>'; endif; ?> 
			<!-- end repeater-list -->
		</div>	  
	</div>	  
	<style>
	.link-icon-list-flex{display:flex;flex-flow:row wrap;float:left;gap:0%;margin:20px auto 0 !important;position:relative;width:100%;max-width:1200px !important;}
	.link-icon-list-flex li{display:flex;flex:1 0 auto;flex-grow:1;margin-bottom:0;padding:0;width:16.6%;max-width:16.6%;}
		.link-icon-list-flex li.five{width:20%;max-width:20%;}
		.link-icon-list-flex li.four{width:25%;max-width:25%;}
		.link-icon-list-flex li.three{width:33.3%;max-width:33.3%;}
		.link-icon-list-flex li.two{width:50%;max-width:50%;}
		
	.link-icon-list-flex li .inner-wrap{clear:both;display:block;margin:0;position:relative;width:96%;}	
	.link-icon-list-flex li a {background-color:rgba(90,83,175,0);display:block;font-family:'Oswald', sans-serif !important;position:relative;text-decoration:none;transition:all .2s ease-in-out;width:100%;}
	.link-icon-list-flex li a:hover {background-color:rgba(90,83,175,0.1);cursor:pointer !important;transition:all .2s ease-in-out;}
	.link-icon-list-flex li .content {display:block;padding:20px 20px 20px 65px;position:relative;width:auto;}
	.link-icon-list-flex li .name {color:#3a357e;display:block;font-family:'Lato', sans-serif !important;font-size:18px;position:relative;width:100%;transition:all .5s ease-in-out;} 
	.link-icon-list-flex li a .name {font-family:'Oswald', sans-serif !important;} 
	.link-icon-list-flex li a:hover .name {cursor:pointer;color:#001446;transform:scale(1.0);} 
	.link-icon-list-flex li .content-icon{bottom:0;display:block;height:100%;position:absolute;left:0;top:0;width:50px;transition:all .2s ease-in-out;}
	.link-icon-list-flex li .content-icon img{position: absolute;margin-top:-50%;top:50%;}
	.link-icon-list-flex li a .content-icon {display:block;} 
	.link-icon-list-flex li a:hover .content-icon {left:5px;}
	.link-icon-list-flex li a:hover .content-icon img {opacity:1.0;}
			
	@media screen and (max-width: 2000px) { 
		.on-cs .link-icon-list-flex li.six{width:33.3%;max-width:33.3%;}
	}
	@media screen and (max-width: 1700px) { 
		.on-cs .link-icon-list-flex li.five{width:33.3%;max-width:33.3%;} 
	}
	@media screen and (max-width: 1500px) { 
		.on-cs .link-icon-list-flex li.four{width:33.3%;max-width:33.3%;}
	}
	@media screen and (max-width: 1200px) { 
		.link-icon-list-flex li {width:20%;max-width:20%;} 
		.link-icon-list-flex li.five{width:25%;max-width:25%;} 
		.on-cs .link-icon-list-flex li.six{width:50%;max-width:50%;}  
	}
	@media screen and (max-width: 1100px) { 
		.link-icon-list-flex li {width:25%;max-width:25%;}
		.on-cs .link-icon-list-flex li.three{width:50%;max-width:50%;}
	}
	@media screen and (max-width: 960px) { 
		.link-icon-list-flex li{width:33.3%;max-width:33.3%;}
		.link-icon-list-flex li.four, 
		.link-icon-list-flex li.five {width:33.3%;max-width:33.3%;} 
		.on-cs .link-icon-list-flex li.four,
		.on-cs .link-icon-list-flex li.five{width:50%;max-width:50%;} 
	} 
	@media screen and (max-width: 767px) { 
		.link-icon-list-flex li, 
		.on-cs .link-icon-list-flex li,
		.link-icon-list-flex li.three, 
		.link-icon-list-flex li.four,
		.link-icon-list-flex li.five {width:50%;max-width:50%;}  
	} 
	@media screen and (max-width: 640px) {
		.link-icon-list-flex li,
		.on-cs .link-icon-list-flex li,
		.link-icon-list-flex li.two,
		.on-cs .link-icon-list-flex li.two,
		.link-icon-list-flex li.three,
		.on-cs .link-icon-list-flex li.three,
		.link-icon-list-flex li.four,
		.on-cs .link-icon-list-flex li.four,
		.link-icon-list-flex li.five,
		.on-cs .link-icon-list-flex li.five,
		.link-icon-list-flex li.six,
		.on-cs .link-icon-list-flex li.six{width:100%;max-width:100%;}
		.link-icon-list-flex li .inner-wrap{width:100%;}
	}
	</style>
 
</section>