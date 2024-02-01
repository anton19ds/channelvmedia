<?php
/**
 * FAQs List Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value. 
$section_id = get_field('section_id') ?: 'Section ID'; 
$top_margin = get_field('top_margin') ?: 'Top Margin'; 
$bottom_margin = get_field('bottom_margin') ?: 'Bottom Margin';
$top_padding = get_field('top_padding') ?: 'Top Padding'; 
$bottom_padding = get_field('bottom_padding') ?: 'Bottom Padding';
$faqs_background_color = get_field('faqs_background_color');
$faqs_headline = get_field('faqs_headline') ?: 'Section Headline';
$faqs_headline_text_color = get_sub_field('faqs_headline_text_color') ?: 'Section Headline Color';   
$faqs_subheadline = get_sub_field('faqs_subheadline') ?: 'Section subeadline'; 
$faqs_subheadline_text_color = get_field('faqs_subheadline_text_color') ?: 'Section Subeadline Color';   
$faqs_accordian = get_field('faqs_accordian');
?>
<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php if(get_field('faqs_background_color')) { echo '' . get_field('faqs_background_color') . ''; } ?><?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb4';} ?> clearfix">
	
	<?php if(get_field('faqs_background_photo')) { echo '<div class="color-overlay bg-common clearfix'; } ?>
		<?php if((get_field('faqs_background_photo_opacity')) == true) { echo ' ' . get_field('faqs_background_photo_opacity') . ''; } ?>
		<?php if(get_field('faqs_background_photo')) { echo '" style="'; } ?>
		<?php if(get_field('faqs_background_photo')) { echo 'background-image:url(' . get_field('faqs_background_photo') . ');'; } ?>
		<?php if((get_field('faqs_background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?>
	<?php if(get_field('faqs_background_photo')) { echo '"></div>'; } ?>

	<?php if(get_field('faqs_background_color_filter')) { echo '<div class="color-overlay ' . get_field('faqs_background_color_filter') . ''; } ?><?php if((get_field('faqs_background_color_filter_opacity')) == true) { echo ' ' . get_field('faqs_background_color_filter_opacity') . ' '; } ?><?php if(get_field('faqs_background_color_filter')) { echo ' clearfix"></div>'; } ?>
	
	<?php if(get_field('faqs_headline') || get_field('faqs_subheadline')) { echo '<div class="grid-10 fl clearfix"><div class="grid-page clearfix"><div class="'; } ?><?php if(get_field('faqs_headline_width')) { echo '' . get_field('faqs_headline_width') . ' '; } else { echo'grid-10 ';} ?><?php if(get_field('faqs_headline') || get_field('faqs_subheadline')) { echo 'fl clearfix">'; } ?> 
			<?php if(get_field('faqs_headline')) { echo '<h2 class="block-headline_alt pb2 ' . get_field('faqs_headline_text_color') . '">' . get_field('faqs_headline') . '</h2>'; } ?>
			<?php if(get_field('faqs_subheadline')) { echo '<span class="block-subheadline ' . get_field('faqs_subheadline_text_color') . '">' . get_field('faqs_subheadline') . '</span>'; } ?>
	<?php if(get_field('faqs_headline') || get_field('faqs_subheadline')) { echo '</div></div></div>'; } ?> 
		
	<!-- start repeater-list --> 
	<?php if( have_rows('faqs_accordian') ):
	echo '<div class="grid-10 fl clearfix"><div class="grid-page clearfix"><div class="grid-page-mod clearfix">';
	// loop through the rows of data
	$counts = 0; while ( have_rows('faqs_accordian') ) : the_row(); $counts++; ?>
		<?php if(get_sub_field('title') || get_sub_field('description')) { echo ''; }?>
			<div class="faqs-standard group<?php if((get_field('faqs_bt')) == true) { echo ' ' . get_field('faqs_bt') . ''; } ?>">  
				<?php if(get_sub_field('title')) { echo '<h3 href="#" class="togglefaq ' . get_sub_field('title_text_color') . '"><span class="ic icon-plus'; }?><?php if(get_field('faqs_arrow_color')) { echo ' ' . get_field('faqs_arrow_color') . ''; }?><?php if(get_sub_field('title')) { echo '"></span>' . get_sub_field('title') . '</h3>'; }?> 
				<?php if(get_sub_field('description')) { echo '<div class="faqanswer ' . get_sub_field('description_text_color') . '" style="display:none;">' . get_sub_field('description') . '</div>'; }?>
			</div>
		<?php if(get_sub_field('title') || get_sub_field('description')) { echo ''; }?>
	<?php endwhile; echo '</div></div></div>'; endif; ?> 
	<!-- end repeater-list --> 
	  
<?php if(get_field('faqs_accordian') || get_field('faqs_subheadline') || get_field('faqs_accordian')) { echo '</section>'; } ?>