<?php
/**
 * Links List Block Template.
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
<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php if(get_field('links_list_background_color')) { echo '' . get_field('links_list_background_color') . ''; } ?> <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } ?> clearfix">  
	
		<?php if(get_field('links_list_headline') || get_field('links_list_subheadline') || get_field('links_list_label')) { echo '<div class="grid-10 fl clearfix"><div class="grid-page clearfix"><div class="'; } ?><?php if(get_field('links_list_header_width')) { echo '' . get_field('links_list_header_width') . ' '; } else { echo'grid-7 ';} ?><?php if(get_field('links_list_headline') || get_field('links_list_subheadline') || get_field('links_list_label')) { echo 'fl clearfix">'; } ?>
		
				<?php if(get_field('links_list_label')) { echo '<p class="sp-small mt0 mb20 white'; } ?>
				<?php if(get_field('links_list_label_text_color')) { echo '' . get_field('links_list_label_text_color') . ''; } ?>
				<?php if(get_field('links_list_label')) { echo 'clearix">' . get_field('links_list_label') . '</p>'; } ?>
	
				<?php if(get_field('links_list_headline')) { echo '<h2 class="block-headline_alt mt0 mb10 ' . get_field('links_list_headline_text_color') . '">' . get_field('links_list_headline') . '</h2>'; } ?>
				<?php if(get_field('links_list_subheadline')) { echo '<span class="block-subheadline pt0 pb0 mb20 ' . get_field('links_list_subheadline_text_color') . '">' . get_field('links_list_subheadline') . '</span>'; } ?>
		<?php if(get_field('links_list_headline') || get_field('links_list_subheadline') || get_field('links_list_label')) { echo '</div></div></div>'; } ?>

	<div class="grid-page mauto clearfix">
		<!-- start repeater-list --> 
		<?php if( have_rows('links_list') ):
		echo '<ul class="links-list-flex">';
		// loop through the rows of data
		$countq = 0; while ( have_rows('links_list') ) : the_row(); $countq++; ?>
			<li <?php if(get_field('links_list_columns')) { echo 'class="' . get_field('links_list_columns') . '"'; } ?>>
				<div class="inner-wrap">
					<?php if(get_sub_field('links_list_link')) { echo '<a href="' . get_sub_field('links_list_link') . '" role="link">'; }?>
						<?php if(get_sub_field('links_list_title')) { echo '<span class="content"><h4 class="name'; }?><?php if(get_field('links_list_top_margin')) { echo ' ' . get_field('links_list_top_margin') . ''; }?><?php if(get_field('links_list_bottom_margin')) { echo ' ' . get_field('links_list_bottom_margin') . ''; }?><?php if(get_sub_field('links_list_title')) { echo '">' . get_sub_field('links_list_title') . '</h4></span>'; }?>
						<span class="arrow-right"></span>
						<span class="rule"></span>
					<?php if(get_sub_field('links_list_link')) { echo '</a>'; }?>
				</div>
			</li>
		<?php endwhile; echo '</ul>'; endif; ?> 
		<!-- end repeater-list -->
	</div>	  
	<style>
	.links-list-flex{display:flex;flex-flow:row wrap;float:left;gap:0%;margin:20px auto 0 !important;position:relative;width:100%;max-width:1200px !important;}
	.links-list-flex li{display:flex;flex:1 0 auto;flex-grow:1;margin-bottom:0;padding:0;width:16.6%;max-width:16.6%;}
		.links-list-flex li.five{width:20%;max-width:20%;}
		.links-list-flex li.four{width:25%;max-width:25%;}
		.links-list-flex li.three{width:33.3%;max-width:33.3%;}
		.links-list-flex li.two{width:50%;max-width:50%;}
		
	.links-list-flex li .inner-wrap{border-top:1px solid #5a53af;clear:both;display:block;margin:0;position:relative;width:96%;}	
	.links-list-flex li a {background-color:rgba(90,83,175,0);display:block;position:relative;text-decoration:none;transition:all .2s ease-in-out;width:100%;}
	.links-list-flex li a:hover {background-color:rgba(90,83,175,0.1);cursor:pointer;transition:all .2s ease-in-out;}
	.links-list-flex li .content {display:block;padding:20px 50px 20px 20px;position:relative;width:auto;}
	.links-list-flex li .name {color:#3a357e;display:block;font-family:'Oswald', sans-serif !important;font-size:18px;position:relative;width:100%;transition:all .5s ease-in-out;}
	.links-list-flex li .rule {background-color:#5a53af;bottom:0;display:block;height:100%;left:0;position:absolute;top:0;width:0%;transition:all .2s ease-in-out;}
	.links-list-flex li a:hover .name {cursor:pointer;color:#001446;transform:scale(1.0);}
	.links-list-flex li a:hover .rule {width:10px;transition:all .2s ease-in-out;} 
	.links-list-flex li .arrow-right{bottom:0;display:none;height:100%;position:absolute;right:0;top:0;width:40px;transition:all .2s ease-in-out;} 
	.links-list-flex li a .arrow-right {display:block;}
	.links-list-flex li a:hover .arrow-right {display:block;transition:all .2s ease-in-out;}
	.links-list-flex li a .arrow-right::after {content: "";background-image:url(/wp-content/uploads/2020/08/arrow-down-light-purple.svg);background-size:25px;background-repeat:no-repeat;display:inline-block;height:25px;left:0px;position:relative;top:18px;width:25px;transform:rotate(-90deg);transition:all .2s ease-in-out;}
	.links-list-flex li a:hover .arrow-right::after {left:5px;}
			
	@media screen and (max-width: 2000px) { 
		.on-cs .links-list-flex li.six{width:33.3%;max-width:33.3%;}
	}
	@media screen and (max-width: 1700px) { 
		.on-cs .links-list-flex li.five{width:33.3%;max-width:33.3%;} 
	}
	@media screen and (max-width: 1500px) { 
		.on-cs .links-list-flex li.four{width:33.3%;max-width:33.3%;}
	}
	@media screen and (max-width: 1200px) { 
		.links-list-flex li {width:20%;max-width:20%;} 
		.links-list-flex li.five{width:25%;max-width:25%;} 
		.on-cs .links-list-flex li.six{width:50%;max-width:50%;}  
	}
	@media screen and (max-width: 1100px) { 
		.links-list-flex li {width:25%;max-width:25%;}
		.on-cs .links-list-flex li.three{width:50%;max-width:50%;}
	}
	@media screen and (max-width: 960px) { 
		.links-list-flex li{width:33.3%;max-width:33.3%;}
		.links-list-flex li.four, 
		.links-list-flex li.five {width:33.3%;max-width:33.3%;} 
		.on-cs .links-list-flex li.four,
		.on-cs .links-list-flex li.five{width:50%;max-width:50%;} 
	} 
	@media screen and (max-width: 767px) { 
		.links-list-flex li, 
		.on-cs .links-list-flex li,
		.links-list-flex li.three, 
		.links-list-flex li.four,
		.links-list-flex li.five {width:50%;max-width:50%;}  
	} 
	@media screen and (max-width: 640px) {
		.links-list-flex li,
		.on-cs .links-list-flex li,
		.links-list-flex li.two,
		.on-cs .links-list-flex li.two,
		.links-list-flex li.three,
		.on-cs .links-list-flex li.three,
		.links-list-flex li.four,
		.on-cs .links-list-flex li.four,
		.links-list-flex li.five,
		.on-cs .links-list-flex li.five,
		.links-list-flex li.six,
		.on-cs .links-list-flex li.six{width:100%;max-width:100%;}
		.links-list-flex li .inner-wrap{width:100%;}
	}
	</style>
 
</section>