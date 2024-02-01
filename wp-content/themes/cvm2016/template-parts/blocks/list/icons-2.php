<?php
/**
 * Icons 2 Block Template.
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
$icon_perks_headline = get_field('icon_perks_headline') ?: 'Headline'; 
$icon_perks_headline_color = get_field('icon_perks_headline_color') ?: 'Headline Color'; 
$icon_perks_subheadline = get_field('icon_perks_subheadline') ?: 'Subheadline'; 
$icon_perks_subheadline_color = get_field('icon_perks_subheadline_color') ?: 'Subheadline Color'; 
$icon_perks_text = get_field('icon_perks_text') ?: 'Intro Text'; 
$icon_perks_text_color = get_field('icon_perks_text_color') ?: 'Intro Text Color'; 
$icon_perks_list = get_field('icon_perks_list') ?: 'List'; 
$icon_perks_link = get_field('icon_perks_link') ?: 'Link'; 
$icon_perks_icon = get_field('icon_perks_icon') ?: 'Icon'; 
$icon_perks_name = get_field('icon_perks_name') ?: 'Headline'; 
$icon_perks_desc = get_field('iicon_perks_desc') ?: 'Description'; 
$icon_perks_background_color = get_field('icon_perks_background_color') ?: 'Section Background Color';
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb5';} ?> clearfix">
	<div class="grid-page mauto clearfix" style="<?php if(get_field('icon_perks_padding_top')) { echo 'padding-top:' . get_field('icon_perks_padding_top') . ';'; } ?> <?php if(get_field('icon_perks_padding_bottom')) { echo 'padding-bottom:' . get_field('icon_perks_padding_bottom') . ';'; } ?>">
		<?php if((get_field('icon_perks_headline') || get_field('icon_perks_subheadline') || get_field('icon_perks_text')) == true ) { echo '<div class="grid-10 fl pb2 clearfix">'; } ?>
			<?php if(get_field('icon_perks_headline')) { echo '<h2 class="block-headline_alt  '; } ?><?php if(get_field('icon_perks_headline_color')) { echo '' . get_field('icon_perks_headline_color') . ''; } ?><?php if(get_field('icon_perks_headline')) { echo '">' . get_field('icon_perks_headline') . '</h2>'; } ?>
			<?php if(get_field('icon_perks_subheadline')) { echo '<span class="block-subheadline "'; } ?><?php if(get_field('icon_perks_subheadline_color')) { echo ' style="color:' . get_field('icon_perks_subheadline_color') . ';"'; } ?><?php if(get_field('icon_perks_subheadline')) { echo '>' . get_field('icon_perks_subheadline') . '</span>'; } ?>
			<?php if(get_field('icon_perks_text')) { echo '<span class="block-text"'; } ?><?php if((get_field('icon_perks_text_color') && get_field('icon_perks_text')) == true ) { echo ' style="color:' . get_field('icon_perks_text_color') . ';"'; } ?><?php if(get_field('icon_perks_text')) { echo '>' . get_field('icon_perks_text') . '</span>'; } ?>
		<?php if((get_field('icon_perks_headline') || get_field('icon_perks_subheadline') || get_field('icon_perks_text')) == true ) { echo '</div>'; } ?>

		<?php if(get_field('icon_perks_list')): $i = 0; ?>
			<ul class="icon-perks-list-flex">
			<?php while(has_sub_field('icon_perks_list')): $i++; ?>
				<li <?php if(get_field('icon_perks_columns')) { echo 'class="project ' . get_field('icon_perks_columns') . '"'; } ?>>
				 <?php if(get_sub_field('icon_perks_button_link')) { echo '<a href="' . get_sub_field(' icon_perks_button_link') . '" role="link">'; } ?>
					<span class="icon-content">
						<?php if(get_sub_field('icon_perks_icon')) { ?>
							<?php if(get_sub_field('icon_perks_icon')) { echo '<span class="icon-img">'; } ?>
							<?php $image = get_sub_field('icon_perks_icon'); ?>
							<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							<?php if(get_sub_field('icon_perks_icon')) { echo '</span>'; } ?>
						<?php } ?>
						<?php if(get_sub_field('icon_perks_name')) { echo '<h4 class="icon-name mb0 mt0">' . get_sub_field('icon_perks_name') . '</h4>'; } ?>
						<?php if(get_sub_field('icon_perks_desc')) { echo '<span class="icon-desc">' . get_sub_field('icon_perks_desc') . '</span>'; } ?>
						<?php if((get_sub_field('icon_perks_button_text')) == true ) { echo '<span class="icon-link">' . get_sub_field('icon_perks_button_text') . '</span>'; } ?>
					</span>
				 <?php if(get_sub_field('icon_perks_button_link')) { echo '</a>'; } ?>
 				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>   

		<style type="text/css">
		.icon-perks-list-flex{display:flex;flex-flow:row wrap;float:left;gap:0%;margin:0px auto !important;padding:0 !important;position:relative;width:100%;max-width:1200px !important;}
		.icon-perks-list-flex li{display:flex;flex:1 0 auto;flex-grow:1;margin:0;padding:0;position:relative;width:16.6%;max-width:16.6%;}
		.icon-perks-list-flex li.five{width:20%;max-width:20%;}
		.icon-perks-list-flex li.four{width:25%;max-width:25%;}
		.icon-perks-list-flex li.three{width:33.3%;max-width:33.3%;}
		.icon-perks-list-flex li.two{width:50%;max-width:50%;}
		.icon-perks-list-flex li a {display:block;position:relative;transition:all .5s ease-in-out;width:100%;z-index:1;}
		.icon-perks-list-flex li a:hover {cursor:pointer;transition:all .5s ease-in-out;}
		.icon-perks-list-flex li .icon-img {display:table;margin:0 auto;opacity:1;overflow:hidden;padding-bottom:10px;position:relative;width:60%;transition:all .5s ease-in-out;}
		.icon-perks-list-flex li a .icon-img img {left:-100% !important;opacity:1;top:0px;transition:all .5s ease-in-out;} 
		.icon-perks-list-flex li a:hover .icon-img img {opacity:1;top:10px;transition:all .5s ease-in-out;}
		.icon-perks-list-flex li .icon-content {display:table;margin:0 auto;padding:0 0 20px;position:relative;width:80%;}
		.icon-perks-list-flex li .icon-name {color:#3A357E;display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;font-size:24px;line-height:110%;padding:0 0 10px;position:relative;text-align:center;transition:all .5s ease-in-out;width:100%;}
		.icon-perks-list-flex li a:hover .icon-name {cursor:pointer;transition:all .5s ease-in-out;}
		.icon-perks-list-flex li .icon-desc {display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;margin:0;position:relative;text-align:center;transition:all .5s ease-in-out;width:100%;} 
		.icon-perks-list-flex li .icon-desc p{color:#333;display:block;font-family:'Lato', sans-serif;font-weight:400;font-size:16px;line-height:120%;position:relative;width:100%;}
		.icon-perks-list-flex li .icon-link {color:#3A357E;display:block;font-family:'Lato', sans-serif;font-weight:400;font-size:16px;padding-bottom:20px;position:relative;text-align:center;width:100%;}
		.icon-perks-list-flex li .icon-link::after {content: "→";margin-left:5px;}
		.icon-perks-list-flex li a:hover .icon-link {color:#C83493;}
 
 		@media screen and (max-width: 1200px) { 
			.icon-perks-list-flex li {width:20%;max-width:20%;} 
			.icon-perks-list-flex li.five{width:25%;max-width:25%;}
		}
 		@media screen and (max-width: 1100px) { 
			.icon-perks-list-flex li {width:25%;max-width:25%;} 
		}
 		@media screen and (max-width: 960px) { 
			.icon-perks-list-flex li {width:33.3%;max-width:33.3%;}
			.icon-perks-list-flex li.four,
			.icon-perks-list-flex li.five{width:33.3%;max-width:33.3%;}
		} 
 		@media screen and (max-width: 767px) { 
			.icon-perks-list-flex li, 
			.icon-perks-list-flex li.three,
			.icon-perks-list-flex li.four,
			.icon-perks-list-flex li.five {width:50%;max-width:50%;}  
		}
		</style> 
	</div>   
 	<!--Inline style for Hero Block-->
	<style type="text/css">
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> {
			background-color: <?php echo $icon_perks_background_color; ?> !important; 
		}  
	</style> 
	
</section>