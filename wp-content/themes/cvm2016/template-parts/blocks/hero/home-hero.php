<?php
/**
 * Home Hero Block Template.
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
// Load values and assign defaults.
$service_hero_image = get_field('service_hero_image') ?: 'Hero Photo';
$label = get_field('service_section_label') ?: 'Label';
$title = get_field('service_page_title') ?: 'Title';
$subtitle = get_field('service_page_subtitle') ?: 'Subtitle';
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="home-header cvm-hero <?php if(get_field('home_hero_background_color')) { echo '' . get_field('home_hero_background_color') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } ?> clearfix"> 
	<style type="text/css">
		<?php if(get_field('home_hero_image_webp')) { ?> 
		.webp .bg-home-hero-image<?php echo $countp ?> {
			background-image: url('<?php if(get_field('home_hero_image_webp')) { echo '' . get_field('home_hero_image_webp') . ''; } ?>');
		} 
		.wp-toolbar .bg-home-hero-image<?php echo $countp ?>, .no-webp .bg-image<?php echo $countp ?> { 
			background-image: url('<?php if(get_field('home_hero_image')) { echo '' . get_field('home_hero_image') . ''; } ?>'); 
		} 
		<?php } else { ?> 
		.bg-home-hero-image<?php echo $countp ?> {
			background-image: url('<?php if(get_field('home_hero_image')) { echo '' . get_field('home_hero_image') . ''; } ?>'); 
		}
		<?php } ?>
	</style>  		
	<?php if(get_field('home_hero_image') || get_field('home_hero_image_webp') == true) { echo '<div class="home-header__poster bg-home-hero-image'; } ?> <?php if((get_field('home_hero_image_opacity')) == true) { echo ' ' . get_field('home_hero_image_opacity') . ''; } ?><?php if(get_field('home_hero_image') || get_field('home_hero_image_webp') == true) { echo '">'; } ?>
		<?php if(get_field('home_hero_image_overlay')) { echo '<div class="color-overlay-exact ' . get_field('home_hero_image_overlay') . ''; } ?><?php if((get_field('home_hero_image_overlay_opacity')) == true) { echo ' ' . get_field('home_hero_image_overlay_opacity') . ' '; } ?><?php if(get_field('home_hero_image_overlay')) { echo '"></div>'; } ?>
<?php if(get_field('home_hero_image')) { echo '</div>'; } ?>
	
	<?php if(get_field('home_hero_title')) { echo '<header class="cvm-hero-text"><h1 class="cvm-hero-title '; } ?><?php if(get_field('home_hero_title_shadow')) { echo ' ' . get_field('home_hero_title_shadow') . ''; } ?><?php if(get_field('home_hero_title_text_align')) { echo '' . get_field('home_hero_title_text_align') . ' '; } ?><?php if(get_field('home_hero_title_text_color')) { echo ' ' . get_field('home_hero_title_text_color') . ''; } ?><?php if(get_field('home_hero_title')) { echo '">' . get_field('home_hero_title') . '</h1>'; } ?>

	
	<?php if((get_field('home_hero_banner_link_text') || get_field('home_hero_banner_link_text_url')) == true) { echo '<div class="grid-10 fl'; } ?><?php if(get_field('home_hero_banner_background_color')) { echo ' ' . get_field('home_hero_banner_background_color') . ''; } ?><?php if(get_field('home_hero_banner_top_padding')) { echo ' ' . get_field('home_hero_banner_top_padding') . ''; } ?><?php if(get_field('home_hero_banner_bottom_padding')) { echo ' ' . get_field('home_hero_banner_bottom_padding') . ''; } ?><?php if((get_field('home_hero_banner_link_text') || get_field('home_hero_banner_link_text_url')) == true) { echo '"><div class="grid-page mauto tac'; } ?><?php if(get_field('home_hero_banner_text_shadow')) { echo ' ' . get_field('home_hero_banner_text_shadow') . ''; } ?><?php if((get_field('home_hero_banner_link_text') || get_field('home_hero_banner_link_text_url')) == true) { echo '">'; } ?> 
	  
		<?php if(get_field('home_hero_banner_text')) { echo '<p class="small mb0 mt0 fs18'; } ?><?php if(get_field('home_hero_banner_text')) { echo ' ' . get_field('home_hero_banner_text_color') . ''; } ?><?php if(get_field('home_hero_banner_text')) { echo '" style="line-height:100% !important;">'; } ?><?php if(get_field('home_hero_banner_text')) { echo '' . get_field('home_hero_banner_text') . ''; } ?> 
		<?php if((get_field('home_hero_banner_link_text') && get_field('home_hero_banner_link_text_url')) == true) { echo '<span style="display:inline-block;"><a href="' . get_field('home_hero_banner_link_text_url') . '" class="right-link tiny pl1 fs18 '; } ?><?php if((get_field('home_hero_banner_link_text') && get_field('home_hero_banner_link_text_url') && get_field('home_hero_banner_link_text_color')) == true) { echo ' ' . get_field('home_hero_banner_link_text_color') . ''; } ?><?php if((get_field('home_hero_banner_link_text') && get_field('home_hero_banner_link_text_url') && get_field('home_hero_banner_link_arrow')) == true) { echo ' ' . get_field('home_hero_banner_link_arrow') . ''; } ?><?php if((get_field('home_hero_banner_link_text') && get_field('home_hero_banner_link_text_url')) == true) { echo '"'; } ?><?php if((get_field('home_hero_banner_link_text_target')) == true) { echo ' target="_blank"'; } ?><?php if((get_field('home_hero_banner_link_text') && get_field('home_hero_banner_link_text_url')) == true) { echo '>' . get_field('home_hero_banner_link_text') . ''; } ?><?php if((get_field('home_hero_banner_link_text') && get_field('home_hero_banner_link_text_url')) == true) { echo '</a></span>'; } ?>		
		<?php if(get_field('home_hero_banner_text')) { echo '</p>'; } ?>
		
	<?php if((get_field('home_hero_banner_link_text') || get_field('home_hero_banner_link_text_url')) == true) { echo '</div></div>'; } ?> 
	
	<?php if(get_field('home_hero_subtitle')) { echo '<div class="grid-10 fl bg-white clearfix"><div class="grid-page mauto"><h2 class="'; } ?><?php if(get_field('home_hero_subtitle_shadow')) { echo '' . get_field('home_hero_subtitle_shadow') . ' '; } ?><?php if(get_field('home_hero_subtitle_text_align')) { echo '' . get_field('home_hero_subtitle_text_align') . ' '; } ?><?php if(get_field('home_hero_subtitle_text_color')) { echo '' . get_field('home_hero_subtitle_text_color') . ''; } ?><?php if(get_field('home_hero_subtitle')) { echo '">' . get_field('home_hero_subtitle') . '</h2>'; } ?> 

		<?php if(get_field('home_hero_hubspot_cta_btn')) { echo '<div class="grid-10 pt2 pb2 clearfix">' . get_field('home_hero_hubspot_cta_btn') . '</div>'; } ?>
	<?php if(get_field('home_hero_subtitle')) { echo '</div></div>'; } ?>

	<?php if(get_field('home_hero_title')) { echo '</header>'; } ?>
	
	<?php if((get_field('home_hero_top_gradient')) == true) { echo '<div class="bg-gtk z1'; } ?><?php if(get_field('home_hero_top_gradient_opacity')) { echo ' ' . get_field('home_hero_top_gradient_opacity') . ''; } ?><?php if((get_field('home_hero_top_gradient')) == true) { echo '"></div>'; } ?>
	<?php if((get_field('home_hero_bot_gradient')) == true) { echo '<div class="bg-gbk z1'; } ?><?php if(get_field('home_hero_bot_gradient_opacity')) { echo ' ' . get_field('home_hero_bot_gradient_opacity') . ''; } ?><?php if((get_field('home_hero_bot_gradient')) == true) { echo '"></div>'; } ?>
</section> 

<style type="text/css"> 
	.cvm-hero {height:100vh;display:block;overflow:hidden;position:relative;width:100%;position:relative;}
	.cvm-hero-text {bottom:0;display:block;left:0;position:absolute;right:0;top:unset;width:100%;z-index:2;} 
	.cvm-hero-title {bottom:0;color:#FFFFFF;font-family:'Oswald',sans-serif !important;font-size:144px;line-height:76% !important;position:relative;text-align:center;text-shadow:2px 2px 10px rgba(0, 0, 0, 0.1);text-transform:uppercase;top:26px !important;} 
	@media screen and (max-width: 1191px) {.cvm-hero-title {font-size:80px;}}
	@media screen and (max-width: 891px) {.cvm-hero-title {font-size:72px;}}
	@media screen and (max-width: 767px) {.cvm-hero-title {font-size:56px;}}
	@media screen and (max-width: 575px) {.cvm-hero-title {font-size:48px;}} 
</style>  