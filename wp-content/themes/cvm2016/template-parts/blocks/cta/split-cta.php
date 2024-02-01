<?php
/**
 * Split CTA Block Template.
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
$split_cta_padding_top = get_field('split_cta_padding_top') ?: 'Section Padding Top'; 
$split_cta_padding_bottom = get_field('split_cta_padding_bottom') ?: 'Section Padding Bottom'; 
$split_cta_title = get_field('split_cta_title') ?: 'Section Title'; 
$split_cta_title_color = get_field('split_cta_title_color') ?: 'Section Title Color'; 
$split_cta_subtitle = get_field('split_cta_subtitle') ?: 'Subheadline'; 
$split_cta_subtitle_color = get_field('split_cta_subtitle_color') ?: 'Subheadline Color'; 
$split_cta_intro_text = get_field('split_cta_intro_text') ?: 'Intro Text';
$split_cta_intro_text_color = get_field('split_cta_intro_text_color') ?: 'Intro Text Color';
$split_cta_button_link = get_field('split_cta_button_link') ?: 'Link';
$split_cta_target_link = get_field('split_cta_target_link') ?: 'Open in a new window?';
$split_cta_bg = get_field('split_cta_bg') ?: 'Photo';
$split_cta_bg_overlay = get_field('split_cta_bg_overlay') ?: 'Photo Overlay';
$split_cta_headline = get_field('split_cta_headline') ?: 'Headline';
$split_cta_subheadline = get_field('split_cta_subheadline') ?: 'Subheadline'; 
$split_cta_text = get_field('split_cta_text') ?: 'Text';
$split_cta_button_text = get_field('split_cta_button_text') ?: 'Button Text';
	
$split_cta_bg_color = get_field('split_cta_bg_color') ?: 'Section Background Color'; 
$split_cta_bg_link_color = get_field('split_cta_bg_link_color') ?: 'CTA Background Color'; 
$split_cta_headline_color = get_field('split_cta_headline_color') ?: 'Headline Color'; 
$split_cta_subheadline_color = get_field('split_cta_subheadline_color') ?: 'Subheadline Color'; 
$split_cta_text_color = get_field('split_cta_text_color') ?: 'Description Color'; 
$split_cta_link_color = get_field('split_cta_link_color') ?: 'Button Text Color';  
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl bg-white pad clearfix">
	<div class="grid-page mauto clearfix" style="<?php if(get_field('split_cta_padding_top')) { echo 'padding-top:' . get_field('split_cta_padding_top') . ';'; } ?> <?php if(get_field('split_cta_padding_bottom')) { echo 'padding-bottom:' . get_field('split_cta_padding_bottom') . ';'; } ?>">
		<?php if((get_field('split_cta_title') || get_field('split_cta_subtitle') || get_field('split_cta_intro_text')) == true ) { echo '<div class="grid-10 fl pb5 clearfix">'; } ?>
		
			<?php if(get_field('split_cta_title')) { echo '<h2 class="block-headline bkw '; } ?><?php if((get_field('split_cta_title_color') && get_field('split_cta_title')) == true ) { echo '' . get_field('split_cta_title_color') . ''; } ?><?php if(get_field('split_cta_title')) { echo '">' . get_field('split_cta_title') . '</h2>'; } ?>
			<?php if(get_field('split_cta_subtitle')) { echo '<span class="block-subheadline"'; } ?><?php if((get_field('split_cta_subtitle_color') && get_field('split_cta_subtitle')) == true ) { echo ' style="color:' . get_field('split_cta_subtitle_color') . ';"'; } ?><?php if(get_field('split_cta_subtitle')) { echo '>' . get_field('split_cta_subtitle') . '</span>'; } ?>
			<?php if(get_field('split_cta_intro_text')) { echo '<span class="block-text"'; } ?><?php if((get_field('split_cta_intro_text_color') && get_field('split_cta_intro_text')) == true ) { echo ' style="color:' . get_field('split_cta_intro_text_color') . ';"'; } ?><?php if(get_field('split_cta_intro_text')) { echo '>' . get_field('split_cta_intro_text') . '</span>'; } ?>
		
		<?php if((get_field('split_cta_title') || get_field('split_cta_subtitle') || get_field('split_cta_intro_text')) == true ) { echo '</div>'; } ?> 
		
		<div class="grid-10 fl clearfix">
			<?php if(get_field('split_cta_button_link')) { echo '<a class="split-cta-url clearfix" href="' . get_field('split_cta_button_link') . '" role="link"'; } ?><?php if((get_field('split_cta_target_link')) == true ) { echo ' target="_blank"'; } ?><?php if(get_field('split_cta_button_link')) { echo '>'; } ?>
			
				<?php if(get_field('split_cta_bg')) { echo '<div class="animatefade fadeOut '; } ?><?php if((get_field('split_cta_photo_left_text_right')) == true ) { echo '<div class="split-m-cta-alt'; } else { echo ' split-m-cta'; } ?>
				<?php if(get_field('split_cta_bg')) { echo '" style="background-image:url(' . get_field('split_cta_bg') . ');">'; } ?>
					<?php if((get_field('split_cta_bg_overlay')) == true ) { echo '<div class="color-overlay purple-pink-diagonal opacity20"></div>'; } ?> 
				<?php if(get_field('split_cta_bg')) { echo '</div>'; } ?>

				<div class="<?php if((get_field('split_cta_photo_left_text_right') && get_field('split_cta_bg')) == true ) { echo 'split-m-text-alt '; } else { echo 'split-m-text'; } ?>">
					<?php if(get_field('split_cta_headline')) { echo '<h3 class="split-cta-headline mt0">' . get_field('split_cta_headline') . '</h3>'; } ?>
					<?php if(get_field('split_cta_subheadline')) { echo '<span class="split-cta-subheadline">' . get_field('split_cta_subheadline') . '</span>'; } ?>
					<?php if(get_field('split_cta_text')) { echo '<span class="split-cta-text">' . get_field('split_cta_text') . '</span>'; } ?>
					<?php if((get_field('split_cta_button_text') && get_field('split_cta_button_link')) == true ) { echo '<span class="split-cta-link">' . get_field('split_cta_button_text') . '</span>'; } ?>
				</div>
			<?php if(get_field('split_cta_button_link')) { echo '</a>'; } ?> 
		</div> 
	</div> 
	<style type="text/css">
		.color-overlay {bottom:-2px;left:-2px;position:absolute;right:-2px;top:-2px;transition:all 0.5s ease-in-out;}
		.purple-pink-diagonal {
			background: #3a357e; 
			background: -moz-linear-gradient(-45deg,  #3a357e 0%, #cc2a9a 100%);  
			background: -webkit-linear-gradient(-45deg,  #3a357e 0%,#cc2a9a 100%); 
			background: linear-gradient(135deg,  #3a357e 0%,#cc2a9a 100%);  
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#cc2a9a',GradientType=1 );  
		}
		.opacity40 {opacity:0.4;filter:alpha(opacity=40);}
		.opacity20 {opacity:0.2;filter:alpha(opacity=20);}
		.split-cta-url {display:block;float:left;position:relative;width:100%;}
		.split-m-cta {background-position:center center;background-repeat:no-repeat;background-size:cover;bottom:0;display:block;height:100%;left:0;overflow:hidden;position:absolute;top:0;width:50%;}
		.split-m-cta-alt {background-position:center center;background-repeat:no-repeat;background-size:cover;bottom:0;display:block;height:100%;overflow:hidden;position:absolute;right:0;top:0;width:50%;}
		.split-m-cta .block-img-overlay {background-color: transparent;bottom:0;display:block;height:100%;left;0;position:absolute;top:0;width:50%;} 
 		.split-m-text {display:block;float:right;margin:0 3%;padding:10vh 0;position:relative;width:44%;}
 		.split-m-text-alt {display:block;float:left;padding:10vh 0;position:relative;width:45%;}
		
		.split-cta-headline {color:#fff;display:block;float:left;font-family:'Oswald', sans-serif !important;font-size:30px;line-height:110% !important;position:relative;width:100%;}
		.split-cta-subheadline {color:#fff;display:block;float:left;font-family:'Lato', sans-serif !important;font-size:20px;line-height:1.9vw !important;padding:10px 0;position:relative;width:100%;}
		.split-cta-text {display:block;float:left;position:relative;width:100%;} 
		a.split-cta-url .split-cta-headline, a.split-cta-url .split-cta-subheadline, a.split-cta-url .split-cta-text{top:0px;transition:all 0.5s ease-in-out;}
		.split-cta-text p  {color:#fff;display:block;float:left;font-family:'Lato', sans-serif !important;font-size:16px;line-height:160%;position:relative;width:100%;}
		.split-cta-link {color:#ffffff;display:block;float:left;font-family:'Lato', Helvetica, sans-serif;font-weight:400;font-size:16px;padding-bottom:20px;position:relative;text-align:left;width:100%;}
		.split-cta-link::after {content: "→";margin-left:5px;}
		a.split-cta-url:hover .split-cta-headline,
		a.split-cta-url:hover .split-cta-subheadline,
		a.split-cta-url:hover .split-cta-text{top:-10px;transition:all 0.5s ease-in-out;}
		a.split-cta-url:hover .split-cta-link {opacity:0.5;}
		a.split-cta-url:hover .color-overlay {transform-origin: center;transform: scale(0.8);transition:all 0.5s ease-in-out;} 
		
		@media screen and (max-width: 767px) {
 			.split-cta-text, .split-cta-text-alt {padding:20px 0 0;}
			.split-m-cta, .split-m-cta-alt {float:left;left:unset;padding-bottom:100%;position:relative;width:100%;}
			.split-m-text, .split-m-text-alt {float:left;left:5%;padding:30px 0 25px;position:relative;width:80%;}
		} 
	</style>
 	<!--Inline style for Hero Block-->
	<style type="text/css">
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> {
			background-color: <?php echo $split_cta_bg_color; ?> !important; 
		}
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> a.split-cta-url {
			background-color: <?php echo $split_cta_bg_link_color; ?> !important;
		} 
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .split-cta-headline { 
			color: <?php echo $split_cta_headline_color; ?>;
		} 
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .split-cta-subheadline { 
			color: <?php echo $split_cta_subheadline_color; ?>;
		} 
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .split-cta-text p { 
			color: <?php echo $split_cta_text_color; ?>;
		}
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .split-cta-link { 
			color: <?php echo $split_cta_link_color; ?>;
		}
	</style>  
</section>