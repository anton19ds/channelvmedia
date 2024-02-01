<?php
/**
 * Statement Block Template.
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
$section_id = get_field('section_id') ?: 'Section ID'; 
$quote_one_background_color = get_field('quote_one_background_color') ?: 'Background Color'; 
$top_margin = get_field('top_margin') ?: 'Top Margin'; 
$bottom_margin = get_field('bottom_margin') ?: 'Bottom Margin';
$top_padding = get_field('top_padding') ?: 'Top Padding'; 
$bottom_padding = get_field('bottom_padding') ?: 'Bottom Padding';
$statement_background_image = get_field('statement_background_image') ?: 'Background Photo';
$statement_background_color = get_field('statement_background_color') ?: 'Background Color';
$statement_background_image_overlay = get_field('statement_background_image_overlay') ?: 'Background Overlay';
$statement_headline = get_field('statement_headline') ?: 'Headline';
$statement_headline_color = get_field('statement_headline_color') ?: 'Headline Color';
$statement_subheadline = get_field('statement_subheadline') ?: 'Subheadline';
$statement_subheadline_color = get_field('statement_subheadline_color') ?: 'Subheadline Color';
$statement_button = get_field('statement_button') ?: 'Button';
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl bg-statement pt8 pb6 <?php if(get_field('statement_background_color')) { echo '' . get_field('statement_background_color') . ''; } ?> <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } ?> clearfix" <?php if(get_field('statement_background_image')) { echo 'style="background-image:url(' . get_field('statement_background_image') . ');"'; } ?>>

	<?php if(get_field('statement_background_image_overlay')) { echo '<div class="color-overlay-exact ' . get_field('statement_background_image_overlay') . ' opacity70"></div>'; } ?>

	<div class="grid-page mauto clearfix">
		<div class="grid-page mauto clearfix">
			<?php if(get_field('statement_headline')) { echo '<h2 class="block-headline_alt tac ' . get_field('statement_headline_color') . '">' . get_field('statement_headline') . '</h2>'; } ?>
			<?php if(get_field('statement_subheadline')) { echo '<p class="block-subheadline tac ' . get_field('statement_subheadline_color') . '">' . get_field('statement_subheadline') . '</p>'; } ?>
			
			<?php if(get_field('statement_logo')) { ?>
			<?php if(get_field('statement_logo')) { echo '<span class="statement-logo-img'; } ?><?php if(get_field('statement_logo_width')) { echo ' ' . get_field('statement_logo_width') . ''; } ?><?php if(get_field('statement_logo')) { echo '">'; } ?>
			<?php $image = get_field('statement_logo'); ?>
			<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			<?php if(get_field('statement_logo')) { echo '</span>'; } ?>
			<?php } ?>
			
			<!-- start repeater-list -->
			<?php if( have_rows('statement_button') ): $pr = 0;
			echo '<p class="mb10 mt20 tac">';
			// loop through the rows of data
			while ( have_rows('statement_button') ) : the_row(); ?> 
			<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="down-link'; } ?> <?php if(get_sub_field('text_color')) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('arrow_color')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
			<?php if(get_sub_field('target_blank') == true) { echo 'target="_blank"'; } ?> 
			<?php if(get_sub_field('link')) { echo '>'; } ?>
			<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
			<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
			<?php endwhile; echo '</p>'; endif; ?>  
		</div>
	</div>
	<style type="text/css"> 
		#<?php echo $section_id; ?> { 
		margin-bottom: <?php echo $bottom_margin; ?>;
		}
		#<?php echo $section_id; ?> { 
		margin-top: <?php echo $top_margin; ?>;
		}
		#<?php echo $section_id; ?> { 
		padding-bottom: <?php echo $bottom_padding; ?>;
		}
		#<?php echo $section_id; ?> { 
		padding-top: <?php echo $top_padding; ?>;
		}
		@media screen and (max-width: 767px) {  
		}
	</style>   
</section>