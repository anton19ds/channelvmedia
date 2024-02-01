<?php
/**
 * Benefits Block Template.
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
$benefits_post_padding_top = get_field('benefits_post_padding_top') ?: 'Section Padding Top'; 
$benefits_post_padding_bottom = get_field('benefits_post_padding_bottom') ?: 'Section Padding Bottom'; 
$benefits_post_headline = get_field('benefits_post_headline') ?: 'Headline'; 
$benefits_post_headline_color = get_field('benefits_post_headline_color') ?: 'Headline Color'; 
$benefits_post_subheadline = get_field('benefits_post_subheadline') ?: 'Subheadline'; 
$benefits_post_subheadline_color = get_field('benefits_post_subheadline_color') ?: 'Subheadline Color'; 
$benefits_post_text = get_field('benefits_post_text') ?: 'Intro Text'; 
$benefits_post_text_color = get_field('benefits_post_text_color') ?: 'Intro Text Color'; 
$benefits_post_list = get_field('benefits_post_list') ?: 'List';  
$benefits_post_photo = get_sub_field('benefits_post_photo') ?: 'Photo'; 
$benefits_post_photo_position = get_sub_field('benefits_post_photo_position') ?: 'Photo Position';
$benefits_post_name = get_sub_field('benefits_post_name') ?: 'Title'; 
$benefits_post_desc = get_sub_field('benefits_post_desc') ?: 'Description'; 
$benefits_post_link = get_sub_field('benefits_post_link') ?: 'Link'; 
$benefits_post_background_color = get_field('benefits_post_background_color') ?: 'Section Background Color';
$benefits_post_title_color = get_field('benefits_post_title_color') ?: 'Blog Post Title Color';
$benefits_post_desc_color = get_field('benefits_post_desc_color') ?: 'Blog Post Description Color';
$benefits_post_post_link_color = get_field('benefits_post_post_link_color') ?: 'Blog Post Text Link Color';
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl bg-white<?php if(get_field('benefits_post_padding_top')) { echo ' ' . get_field('benefits_post_padding_top') . ''; } ?><?php if(get_field('benefits_post_padding_bottom')) { echo ' ' . get_field('benefits_post_padding_bottom') . ''; } ?> clearfix">
	  
	<div class="grid-page mauto clearfix">
		<div class="grid-3 fl clearfix"> 
			<?php if((get_field('benefits_post_headline') || get_field('benefits_post_subheadline') || get_field('benefits_post_text')) == true ) { echo '<div class="grid-10 fl pb5 clearfix">'; } ?>
				<?php if(get_field('benefits_post_headline')) { echo '<h2 class="block-headline bkw '; } ?><?php if((get_field('benefits_post_headline_color') && get_field('benefits_post_headline')) == true ) { echo '' . get_field('benefits_post_headline_color') . ''; } else { echo''; } ?><?php if(get_field('benefits_post_headline')) { echo '">' . get_field('benefits_post_headline') . '</h2>'; } ?>
				<?php if(get_field('benefits_post_subheadline')) { echo '<span class="block-subheadline"'; } ?><?php if(get_field('benefits_post_subheadline_color')) { echo ' style="color:' . get_field('benefits_post_subheadline_color') . ';"'; } ?><?php if(get_field('benefits_post_subheadline')) { echo '>' . get_field('benefits_post_subheadline') . '</span>'; } ?>
				<?php if(get_field('benefits_post_text')) { echo '<span class="block-text"'; } ?><?php if((get_field('benefits_post_text_color') && get_field('benefits_post_text')) == true ) { echo ' style="color:' . get_field('benefits_post_text_color') . ';"'; } ?><?php if(get_field('benefits_post_text')) { echo '>' . get_field('benefits_post_text') . '</span>'; } ?>
			<?php if((get_field('benefits_post_headline') || get_field('benefits_post_subheadline') || get_field('benefits_post_text')) == true ) { echo '</div>'; } ?>
		</div>
		<div class="grid-6b fr clearfix">
			<?php if(get_field('benefits_post_list')): $i = 0; ?>
				<ul class="benefits-post-list-flex">
					<?php while(has_sub_field('benefits_post_list')): $i++; ?>
						<li <?php if(get_field('benefits_post_columns')) { echo 'class="project ' . get_field('benefits_post_columns') . '"'; } ?>>
						 <?php if(get_sub_field('benefits_post_button_link')) { echo '<a href="' . get_sub_field(' benefits_post_button_link') . '" role="link">'; } ?>
							<span class="post-content">
								
								
								<?php if(get_sub_field('benefits_post_photo')) { echo '<span class="post-img"><span class="post-bg clearfix" style="background-image:url(' . get_sub_field('benefits_post_photo') . ');'; } ?><?php if((get_sub_field('benefits_post_photo_position') && get_sub_field('benefits_post_photo')) == true) { echo 'background-position:' . get_sub_field('benefits_post_photo_position') . ';'; } ?><?php if(get_sub_field('benefits_post_photo')) { echo '"><span class="color-overlay purple-pink-diagonal opacity20"></span></span><span class="post-img-cover benefits-left"></span></span>'; } ?> 
								
								<?php if(get_sub_field('benefits_post_name')) { echo '<h3 class="post-name mt0 mb10">' . get_sub_field('benefits_post_name') . '</h3>'; } ?>
								<?php if(get_sub_field('benefits_post_desc')) { echo '<span class="post-desc">' . get_sub_field('benefits_post_desc') . '</span>'; } ?>
								<?php if((get_sub_field('benefits_post_button_text') && get_sub_field('benefits_post_button_link')) == true ) { echo '<span class="post-link">' . get_sub_field('benefits_post_button_text') . '</span>'; } ?>
							</span>
						 <?php if(get_sub_field('benefits_post_button_link')) { echo '</a>'; } ?>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div> 
	</div> 
	<style type="text/css"> 
	.grid-page { clear:both; display:block; margin:0 auto; min-height:10px; position:relative; width:80%; max-width:1200px !important;}
	.benefits-post-list-flex{display:flex;flex-flow:row wrap;float:left;gap:0%;margin:0px auto !important;padding:0 !important;position:relative;width:100%;max-width:1200px !important;}
	.benefits-post-list-flex li{display:flex;flex:1 0 auto;flex-grow:1;margin:0 3% 0 0 !important;padding:0;position:relative;width:48.5%;max-width:48.5%;}
	.benefits-post-list-flex li.three{margin:0 3% 0 0 !important;width:31.3%;max-width:31.3%;}
	.benefits-post-list-flex li.two{width:48.5%;max-width:48.5%;} 
	.benefits-post-list-flex li.one{width:100%;max-width:100%;} 

	.benefits-post-list-flex li.three:nth-child(3n+3){margin-right:0 !important;}
	.benefits-post-list-flex li.two:nth-child(even){margin-right:0 !important;}
	.benefits-post-list-flex li.one{margin-right:0 !important;}

	.benefits-post-list-flex li a {display:block;position:relative;transition:all .5s ease-in-out;width:100%;z-index:1;}
	.benefits-post-list-flex li a:hover {cursor:pointer;transition:all .5s ease-in-out;}
	.benefits-post-list-flex li .post-img {background-position:center center;background-repeat:no-repeat;background-size:cover;float:left;display:block;height:250px;margin:0 0 20px;overflow:hidden;padding:0;position:relative;width:100%;-moz-transition:all 0.3s ease;-webkit-transition:all 0.3s ease;-o-transition:all 0.3s ease;-ms-transition:all 0.3s ease;transition:all 0.3s ease;}
	.benefits-post-list-flex li .post-img-cover {background-color:#ffffff;bottom:-1px;display:block;height:101%;left:-1px;margin:0;padding:0;position:relative;right:-1px;top:-1px;width:101%;-moz-transition:all 0.3s ease;-webkit-transition:all 0.3s ease;-o-transition:all 0.3s ease;-ms-transition:all 0.3s ease;transition:all 0.3s ease;}
	.benefits-post-list-flex li.one .post-img {height:350px;} 
	.benefits-post-list-flex li a:hover .post-img {-moz-transition:all 0.3s ease;-webkit-transition:all 0.3s ease;-o-transition:all 0.3s ease;-ms-transition:all 0.3s ease;transition:all 0.3s ease;}
	.benefits-post-list-flex li .post-img .post-bg {background-position:center center;background-repeat:no-repeat;background-size:cover;bottom:0;display:block;height:250px;left:0;margin:0;padding:0;position:absolute;right:0;top:0;transform:scale(1.0) !important;width:100%;-moz-transition:all 0.3s ease;-webkit-transition:all 0.3s ease;-o-transition:all 0.3s ease;-ms-transition:all 0.3s ease;transition:all 0.3s ease;}
	.benefits-post-list-flex li .post-img .post-bg .color-overlay {transition: all 0s ease-in;}
	.benefits-post-list-flex li.one .post-img .post-bg {height:350px;}
	.benefits-post-list-flex li a:hover .post-img .post-bg {transform:scale(1.5) !important;}
	.benefits-post-list-flex li .post-content {display:block;float:left;margin:0;padding:0 0 10px;position:relative;width:100%;}
	.page-id-7596 .benefits-post-list-flex li .post-content {padding:0 0 30px;}
	.benefits-post-list-flex li .post-name {color:#3A357E;display:block;float:left;font-family:'Oswald', sans-serif !important;font-weight:400;font-size:24px;line-height:110%;padding:0 0 10px;position:relative;text-align:left;width:100%;}
	.benefits-post-list-flex li a:hover .post-name {cursor:pointer;}
	.benefits-post-list-flex li .post-desc {display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;margin:0;position:relative;text-align:left;width:100%;} 
	.benefits-post-list-flex li .post-desc p{color:#333;display:block;font-family:'Lato', sans-serif;font-weight:400;font-size:16px;line-height:120%;position:relative;width:100%;}
	.benefits-post-list-flex li .post-link {color:#3A357E;display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;font-size:16px;padding-bottom:20px;position:relative;text-align:left;width:100%;}
	.benefits-post-list-flex li .post-link::after {content: "→";margin-left:5px;}
	.benefits-post-list-flex li a:hover .post-link {color:#C83493;} 
	@media screen and (max-width: 767px) {  
		.benefits-post-list-flex li.three {width:48.5%;max-width:48.5%;}  
		.benefits-post-list-flex li.three:nth-child(3n+3){margin-right:3% !important;}
		.benefits-post-list-flex li.three:nth-child(even){margin-right:0 !important;}
		.benefits-post-list-flex li.one .post-img {height:250px;}
		.benefits-post-list-flex li .post-img .post-bg {height:250px;}
	}
	@media screen and (max-width: 500px) {  
		.benefits-post-list-flex li.three, 
		.benefits-post-list-flex li.two{width:100%;max-width:100%;}   

		.benefits-post-list-flex li.three:nth-child(3n+3), 
		.benefits-post-list-flex li.three {margin-right:0 !important;}

		.benefits-post-list-flex li.two:nth-child(even){margin-right:0% !important;} 
	}
	</style>  
 	<!--Inline style for Hero Block-->
	<style type="text/css">
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> {
			background-color: <?php echo $benefits_post_background_color; ?> !important; 
		}
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .post-img-cover {
			background-color: <?php echo $benefits_post_background_color; ?> !important; 
		}
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .benefits-post-list-flex .post-name { 
			color: <?php echo $benefits_post_title_color; ?> !important;
		} 
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .benefits-post-list-flex .post-desc p { 
			color: <?php echo $benefits_post_desc_color; ?> !important;
		} 
		<?php if((get_field('section_id')) == true) { echo'#' . get_field('section_id') . ''; } else { ?>#<?php echo $id; ?><?php } ?> .benefits-post-list-flex .post-link { 
			color: <?php echo $benefits_post_post_link_color; ?> !important;
		} 
	</style>  
</section>