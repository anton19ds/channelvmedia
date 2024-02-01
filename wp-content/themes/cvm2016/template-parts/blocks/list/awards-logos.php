<?php
/**
 * Awards Logos Block Template.
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
$top_margin = get_field('top_margin') ?: 'Top Margin'; 
$bottom_margin = get_field('bottom_margin') ?: 'Bottom Margin';
$top_padding = get_field('top_padding') ?: 'Top Padding'; 
$bottom_padding = get_field('bottom_padding') ?: 'Bottom Padding';
$pr_awards_background_color = get_field('pr_awards_background_color') ?: 'Section Background Color';
$pr_awards_logos_headline = get_field('pr_awards_logos_headline') ?: 'Headline'; 
$pr_awards_logos_headline_text_color = get_field('pr_awards_logos_headline_text_color') ?: 'Headline Color'; 
$pr_awards_logos_subheadline = get_field('pr_awards_logos_subheadline') ?: 'Subheadline'; 
$pr_awards_logos_subheadline_text_color = get_field('pr_awards_logos_subheadline_text_color') ?: 'Subheadline Color';
$pr_awards_logos = get_field('pr_awards_logos') ?: 'Logos'; 
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 <?php if(get_field('pr_awards_background_color')) { echo '' . get_field('pr_awards_background_color') . ''; } ?> <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } ?> fl clearfix" style="min-height:unset;">
	<div class="grid-page mauto" style="min-height:unset;"> 
		<?php if(get_field('pr_awards_logos')): $i = 0; ?>
		<div class="pr-ex-aw clearfix"><ul class="pr-expertise-awards-logos clearfix">
			<?php while(has_sub_field('pr_awards_logos')): $i++; ?>   
			<?php $image = get_sub_field('pr_awards_logo'); ?>
			<?php if( get_sub_field('pr_awards_logo') ) { echo '<li class="clearfix"><img src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('pr_awards_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('pr_awards_logo') ) { echo '" border="0"/></li>'; } ?>  
			<?php endwhile; ?>
			</ul></div>
		<?php endif; ?>  
	</div>  
</section>  