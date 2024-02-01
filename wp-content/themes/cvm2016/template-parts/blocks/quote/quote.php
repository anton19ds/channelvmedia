<?php
/**
 * Quote Block Template.
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
$quote_one_background_color = get_field('quote_one_background_color') ?: 'Background Color'; 
$top_margin = get_field('top_margin') ?: 'Top Margin'; 
$bottom_margin = get_field('bottom_margin') ?: 'Bottom Margin';
$top_padding = get_field('top_padding') ?: 'Top Padding'; 
$bottom_padding = get_field('bottom_padding') ?: 'Bottom Padding';
$quote_one_quote = get_field('quote_one_quote') ?: 'Quote';
$quote_one_logo_width = get_field('quote_one_photo_width') ?: 'Photo Width';
$quote_one_logo = get_field('quote_one_photo') ?: 'Photo'; 
$quote_one_logo_width = get_field('quote_one_logo_width') ?: 'Logo Width';
$quote_one_logo = get_field('quote_one_logo') ?: 'Logo'; 
$quote_one_first_last_name = get_field('quote_one_first_last_name') ?: 'First and Last Name';
$quote_one_job_title = get_field('quote_one_job_title') ?: 'Job Title';
$quote_one_company = get_field('quote_one_company') ?: 'Company';
?>
	
<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php if(get_field('quote_one_background_color')) { echo '' . get_field('quote_one_background_color') . ''; } ?> <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } ?> clearfix"> 
	
	<?php if(get_field('quote_one_bg_photo')) { echo '<div class="color-overlay-exact bg-common clearfix'; } ?><?php if((get_field('quote_one_bg_photo_opacity')) == true) { echo ' ' . get_field('quote_one_bg_photo_opacity') . ''; } ?><?php if(get_field('quote_one_bg_photo')) { echo '" style="'; } ?><?php if(get_field('quote_one_bg_photo')) { echo 'background-image:url(' . get_field('quote_one_bg_photo') . ');'; } ?><?php if((get_field('quote_one_bg_photo_position')) == true) { echo 'background-position:' . get_field('quote_one_bg_photo_position') . ';'; } ?><?php if((get_field('quote_one_bg_photo_size')) == true) { echo 'background-size:' . get_field('quote_one_bg_photo_size') . ';'; } ?><?php if(get_field('quote_one_bg_photo')) { echo '"></div>'; } ?>
	
 	<div class="blockquote-wrapper">
	  <div class="blockquote">
		<?php if(get_field('quote_one_quote')) { echo '<span class="quote'; } ?><?php if(get_field('quote_one_border_color')) { echo ' ' . get_field('quote_one_border_color') . ''; } ?><?php if((get_field('quote_one_border_gap')) == true) { echo ' gapless'; } ?><?php if(get_field('quote_one_quote')) { echo '"><span class="'; } ?><?php if(get_field('quote_one_text_color')) { echo '' . get_field('quote_one_text_color') . ''; } ?><?php if(get_field('quote_one_quote')) { echo '">' . get_field('quote_one_quote') . '</span></span>'; } ?>
		<span class="citation-photo fl">
		<?php $image = get_field('quote_one_photo'); ?>
		<?php $imagew = get_field('quote_one_photo_webp'); ?>
		<?php if((get_field('quote_one_photo') || get_field('quote_one_photo_webp')) == true) { echo '<div class="'; } ?><?php if( get_field('quote_one_photo') ) { echo 'grid-10 clearfix">'; } ?>
			
			<?php if((get_field('quote_one_photo') || get_field('quote_one_photo_webp')) == true) { echo '<picture>'; } ?>
			<?php if(get_field('quote_one_photo_webp')) { echo '<source srcset="'; } ?><?= (isset($imagew['url']) ? $imagew['url'] : ''); ?><?php if(get_field('quote_one_photo_webp')) { echo '" type="image/webp">'; } ?>
			<?php if(get_field('quote_one_photo')){ echo '<source srcset="'; } ?>
                <?= (isset($image['url']) && $image['url'] ? $image['url'] : ''); ?>
                <?php if(get_field('quote_one_photo')) { echo '" type="image/jpeg">'; } ?>

			<?php if((get_field('quote_one_photo') || get_field('quote_one_photo_webp')) == true) { echo '<img class="responsive-img" src="'; } ?><?= (isset($image['url']) ? $image['url'] : ''); ?><?php if((get_field('quote_one_photo') || get_field('quote_one_photo_webp')) == true) { echo '" alt="'; } ?><?= (isset($image['alt']) ? $image['alt'] : ''); ?><?php if((get_field('quote_one_photo') || get_field('quote_one_photo_webp')) == true) { echo '">'; } ?>
			<?php if((get_field('quote_one_photo') || get_field('quote_one_photo_webp')) == true) { echo '</picture>'; } ?>
			
		<?php if((get_field('quote_one_photo') || get_field('quote_one_photo_webp')) == true) { echo '</div>'; } ?>
		</span> 

		<div class="grid-fixed-7 alt7 fl pl4">
			<?php if(get_field('quote_one_logo')) { echo '<span class="citation pt2">'; } ?>
			<?php $image = get_field('quote_one_logo'); ?>
			<?php if( get_field('quote_one_logo') ) { echo '<div class="'; } ?><?php if(get_field('quote_one_logo_width') && get_field('quote_one_logo')) { echo '' . get_field('quote_one_logo_width') . ''; } ?><?php if( get_field('quote_one_logo') ) { echo ' pr-cs-logo-width pb1 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_field('quote_one_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_field('quote_one_logo') ) { echo '" width="100" height="30" border="0"/></div>'; } ?>
			<?php if(get_field('quote_one_logo')) { echo '</span>'; } ?>

			<?php if(get_field('quote_one_first_last_name') || get_field('quote_one_company') ) { echo '<span class="citation cite-text mt0 pt0">'; } ?>
			<?php if(get_field('quote_one_first_last_name')) { echo '' . get_field('quote_one_first_last_name') . ''; } ?><?php if(get_field('quote_one_job_title')) { echo ', ' . get_field('quote_one_job_title') . '<br/>'; } ?>
			<?php if(get_field('quote_one_company')) { echo '<em>' . get_field('quote_one_company') . '</em>'; } ?>
			<?php if(get_field('quote_one_first_last_name') || get_field('quote_one_company')) { echo '</span>'; } ?>
		</div>
	  </div>
	</div>
	
	<style type="text/css"> 
		@media screen and (max-width: 767px) {  
		}
	</style>   
</section>