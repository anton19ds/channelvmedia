<?php
/**
 * Sticky Post List Block Template.
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
$padding_top = get_field('padding_top') ?: 'Section Padding Top'; 
$padding_bottom = get_field('padding_bottom') ?: 'Section Padding Bottom'; 
$sticky_post_list = get_field('sticky_post_list') ?: 'List';  
$photo = get_sub_field('photo') ?: 'Photo'; 
$title = get_sub_field('title') ?: 'Title'; 
$desc = get_sub_field('desc') ?: 'Description'; 
$sticky_post_link = get_sub_field('sticky_post_link') ?: 'Link'; 
$sticky_post_background_color = get_field('sticky_post_background_color') ?: 'Section Background Color';
$sticky_post_title_color = get_field('sticky_post_title_color') ?: 'Blog Post Title Color';
$desc_color = get_field('desc_color') ?: 'Blog Post Description Color';
$sticky_post_post_link_color = get_field('sticky_post_post_link_color') ?: 'Blog Post Text Link Color';
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl bg-white clearfix">
	<div class="grid-page mauto pad clearfix" style="<?php if(get_field('padding_top')) { echo 'padding-top:' . get_field('padding_top') . ';'; } ?> <?php if(get_field('padding_bottom')) { echo 'padding-bottom:' . get_field('padding_bottom') . ';'; } ?>">

		<?php if(get_field('sticky_post_list')): $i = 0; ?>
			<ul class="sticky-post-list-flex">
			<?php while(has_sub_field('sticky_post_list')): $i++; ?>
				<li class="">
				 <?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" role="link">'; } ?>
					<span class="post-content">
						<?php if(get_sub_field('photo')) { echo '<span class="post-img"><span class="post-bg clearfix" style="background-image:url(' . get_sub_field('photo') . ');"><span class="color-overlay purple-pink-diagonal opacity30"></span></span></span>'; } ?>
						<?php if(get_sub_field('title')) { echo '<h3 class="post-name mt0 mb10">' . get_sub_field('title') . '</h3>'; } ?>
						<?php if(get_sub_field('desc')) { echo '<span class="post-desc">' . get_sub_field('desc') . '</span>'; } ?>
						<?php if((get_sub_field('button_text')) == true ) { echo '<span class="post-link">' . get_sub_field('button_text') . '</span>'; } ?>
					</span>
				 <?php if(get_sub_field('link')) { echo '</a>'; } ?>
 				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>

		<style type="text/css"> 
		.sticky-post-list-flex{display:flex;flex-flow:row wrap;float:left;gap:0%;margin:0px auto !important;padding:0 !important;position:relative;width:20%;}
		.sticky-post-list-flex li{display:flex;flex:1 0 auto;flex-grow:1;margin:0;padding:0;position:relative;width:100%;max-width:100%;} 
			
		.sticky-post-list-flex li a {display:block;position:relative;transition:all .5s ease-in-out;width:100%;z-index:1;}
		.sticky-post-list-flex li a:hover {cursor:pointer;transition:all .5s ease-in-out;}
		.sticky-post-list-flex li .post-img {background-position:center center;background-repeat:no-repeat;background-size:cover;float:left;display:block;height:100px;margin:0 0 20px;overflow:hidden;padding:0;position:relative;width:100%;-moz-transition:all 0.5s ease;-webkit-transition:all 0.5s ease;-o-transition:all 0.5s ease;-ms-transition:all 0.5s ease;transition:all 0.5s ease;}
		.sticky-post-list-flex li a:hover .post-img {-moz-transition:all 0.5s ease;-webkit-transition:all 0.5s ease;-o-transition:all 0.5s ease;-ms-transition:all 0.5s ease;transition:all 0.5s ease;}
		.sticky-post-list-flex li .post-img .post-bg {background-position:center center;background-repeat:no-repeat;background-size:cover;bottom:0;display:block;height:250px;left:0;margin:0;padding:0;position:absolute;right:0;top:0;width:100%;-moz-transition:all 3.0s ease;-webkit-transition:all 3.0s ease;-o-transition:all 3.0s ease;-ms-transition:all 3.0s ease;transition:all 3.0s ease;} 
		.sticky-post-list-flex li a:hover .post-img .post-bg {transform:scale(1.5);}
		.sticky-post-list-flex li h3 {font-size:18px;}
		.sticky-post-list-flex li .post-content {display:block;float:left;margin:0;padding:0 0 30px;position:relative;width:100%;}
		.sticky-post-list-flex li .post-name {color:#3A357E;display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;font-size:24px;line-height:110%;padding:0 0 10px;position:relative;text-align:left;transition:all .5s ease-in-out;width:100%;}
		.sticky-post-list-flex li a:hover .post-name {cursor:pointer;transform:scale(1.0);transition:all .5s ease-in-out;}
		.sticky-post-list-flex li .post-desc {display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;margin:0;position:relative;text-align:left;transition:all .5s ease-in-out;width:100%;} 
		.sticky-post-list-flex li .post-desc p{color:#333;display:block;font-family:'Lato', sans-serif;font-weight:400;font-size:16px;line-height:120%;position:relative;width:100%;}
		.sticky-post-list-flex li .post-link {color:#3A357E;display:block;float:left;font-family:'Lato', sans-serif;font-weight:400;font-size:16px;padding-bottom:20px;position:relative;text-align:left;width:100%;}
		.sticky-post-list-flex li .post-link::after {content: "→";margin-left:5px;}
		.sticky-post-list-flex li a:hover .post-link {color:#C83493;}
 
 		@media screen and (max-width: 767px) { 
		}
		</style> 
	</div>  
</section>