<?php
/**
 *Form Block Template.
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
$background_color = get_field('background_color') ?: 'Background Color'; 
$top_margin = get_field('top_margin') ?: 'Top Margin'; 
$bottom_margin = get_field('bottom_margin') ?: 'Bottom Margin';
$top_padding = get_field('top_padding') ?: 'Top Padding'; 
$bottom_padding = get_field('bottom_padding') ?: 'Bottom Padding';

$expertise_form_headline = get_field('expertise_form_headline') ?: 'Form Headline';
$expertise_form_subheadline = get_field('expertise_form_subheadline') ?: 'Form Subheadline';
$expertise_form = get_field('expertise_form') ?: 'Form';
$expertise_form_data_qa = get_field('expertise_form_data_qa') ?: 'Q&A';
?>
<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php if(get_field('background_color')) { echo '' . get_field('background_color') . ''; } ?><?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb4';} ?> clearfix">

	<?php if(get_field('background_photo')) { echo '<div class="color-overlay bg-common clearfix'; } ?><?php if((get_field('background_photo') && get_field('background_photo_opacity')) == true) { echo ' ' . get_field('background_photo_opacity') . ''; } ?><?php if(get_field('background_photo')) { echo '" style="'; } ?><?php if(get_field('background_photo')) { echo 'background-image:url(' . get_field('background_photo') . ');'; } ?><?php if((get_field('background_photo') && get_field('background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?><?php if(get_field('background_photo')) { echo '"></div>'; } ?>

	<?php if(get_field('background_color_filter')) { echo '<div class="color-overlay ' . get_field('background_color_filter') . ''; } ?><?php if((get_field('background_color_filter_opacity')) == true) { echo ' ' . get_field('background_color_filter_opacity') . ' '; } ?><?php if(get_field('background_color_filter')) { echo ' clearfix"></div>'; } ?>
	
	<div class="grid-page clearfix">
		<?php if(get_field('expertise_form_headline') || get_field('expertise_form_subheadline')) { echo '<div class="grid-3b fl clearfix">'; } ?>
			<?php if(get_field('expertise_form_headline')) { echo '<h2 class="block-headline_alt mb2 pt2 light'; } ?><?php if((get_field('expertise_form_headline') && get_field('expertise_form_headline_text_color')) == true) { echo ' ' . get_field('expertise_form_headline_text_color') . ''; } ?><?php if(get_field('expertise_form_headline')) { echo '">' . get_field('expertise_form_headline') . '</h2>'; } ?>
			<?php if(get_field('expertise_form_subheadline')) { echo '<p class="sp'; } ?><?php if((get_field('expertise_form_subheadline') && get_field('expertise_form_subheadline_text_color')) == true) { echo ' ' . get_field('expertise_form_subheadline_text_color') . ''; } ?><?php if(get_field('expertise_form_subheadline')) { echo '">' . get_field('expertise_form_subheadline') . '</h2>'; } ?>
		
			<!-- start repeater-list --> 
			<?php if( have_rows('expertise_form_data_qa') ):
			echo ' ';
			// loop through the rows of data
			$countq = 0; while ( have_rows('expertise_form_data_qa') ) : the_row(); $countq++; ?> 
			<div class="grid-10 fl hide-mobile clearfix">
				<?php if(get_sub_field('question')) { echo '<p class="sp-small-text form-disclaimer-2 ' . get_sub_field('question_text_color') . '">' . get_sub_field('question') . '</p>'; }?> 
				<?php if(get_sub_field('answer')) { echo '<div id="form-disclaimer-2" class="sp-small-text ' . get_sub_field('answer_text_color') . '">' . get_sub_field('answer') . '</div>'; }?>  
			</div>
			<?php endwhile; echo ''; endif; ?> 
			<!-- end repeater-list -->
		<?php if(get_field('expertise_form_headline') || get_field('expertise_form_subheadline')) { echo '</div>'; } ?>

		<?php if(get_field('expertise_form')) { echo '<div class="grid-6 fr clearfix">'; } ?>
			<?php if(get_field('expertise_form')) { echo '' . get_field('expertise_form') . ''; } ?>

			<!-- start repeater-list --> 
			<?php if( have_rows('expertise_form_data_qa') ):
			echo ' ';
			// loop through the rows of data
			$countq = 0; while ( have_rows('expertise_form_data_qa') ) : the_row(); $countq++; ?> 
			<div class="grid-10 fl hide-desktop clearfix">
				<?php if(get_sub_field('question')) { echo '<p class="sp-small-text form-disclaimer-3 ' . get_sub_field('question_text_color') . '">' . get_sub_field('question') . '</p>'; }?> 
				<?php if(get_sub_field('answer')) { echo '<div id="form-disclaimer-3" class="sp-small-text ' . get_sub_field('answer_text_color') . '">' . get_sub_field('answer') . '</div>'; }?>  
			</div>
			<?php endwhile; echo ''; endif; ?> 
			<!-- end repeater-list -->   
		<?php if(get_field('expertise_form')) { echo '</div> '; } ?>
	</div>
</section>
	
	
	