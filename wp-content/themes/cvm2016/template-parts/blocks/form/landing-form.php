<?php
/**
 * Landing Form Block Template.
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
?>   
<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="form-fixed <?php if(get_field('background_color')) { echo '' . get_field('background_color') . ''; } ?><?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb4';} ?> clearfix">

	<?php if(get_field('background_photo')) { echo '<div class="color-overlay bg-common clearfix'; } ?><?php if((get_field('background_photo') && get_field('background_photo_opacity')) == true) { echo ' ' . get_field('background_photo_opacity') . ''; } ?><?php if(get_field('background_photo')) { echo '" style="'; } ?><?php if(get_field('background_photo')) { echo 'background-image:url(' . get_field('background_photo') . ');'; } ?><?php if((get_field('background_photo') && get_field('background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?><?php if(get_field('background_photo')) { echo '"></div>'; } ?>

	<?php if(get_field('background_color_filter')) { echo '<div class="color-overlay ' . get_field('background_color_filter') . ''; } ?><?php if((get_field('background_color_filter_opacity')) == true) { echo ' ' . get_field('background_color_filter_opacity') . ' '; } ?><?php if(get_field('background_color_filter')) { echo ' clearfix"></div>'; } ?>
	
	<div class="grid-page clearfix">
		<?php if(get_field('form_landing_headline') || get_field('form_landing_subheadline')) { echo '<div class="grid-10 fl clearfix">'; } ?>
			<?php if(get_field('form_landing_headline')) { echo '<h2 class="block-headline_alt pt2 white light'; } ?><?php if((get_field('form_landing_subheadline')) == true ) { echo ' mb2';} else { echo ' mb0';} ?><?php if(get_field('form_landing_headline')) { echo '">' . get_field('form_landing_headline') . '</h2>'; } ?> 
		
			<?php if(get_field('form_landing_subheadline')) { echo '<p class="sp gray2">' . get_field('form_landing_subheadline') . '</p>'; } ?>
 
		<?php if(get_field('form_landing_headline') || get_field('form_landing_subheadline')) { echo '</div>'; } ?>

		<?php if(get_field('form_landing')) { echo '<div class="grid-10 fl clearfix">'; } ?>
			<?php if(get_field('form_landing')) { echo '' . get_field('form_landing') . ''; } ?>

			<!-- start repeater-list --> 
			<?php if( have_rows('form_landing_data_qa') ):
			echo ' ';
			// loop through the rows of data
			$countq = 0; while ( have_rows('form_landing_data_qa') ) : the_row(); $countq++; ?> 
			<div class="grid-10 fl hide-desktop clearfix">
				<?php if(get_sub_field('question')) { echo '<p class="sp-small-text form-disclaimer-2 ' . get_sub_field('question_text_color') . '">' . get_sub_field('question') . '</p>'; }?> 
				<?php if(get_sub_field('answer')) { echo '<div id="form-disclaimer-2" class="sp-small-text ' . get_sub_field('answer_text_color') . '">' . get_sub_field('answer') . '</div>'; }?>  
			</div>
			<?php endwhile; echo ''; endif; ?> 
			<!-- end repeater-list -->
		
			<!-- start repeater-list --> 
			<?php if( have_rows('form_landing_data_qa') ):
			echo ' ';
			// loop through the rows of data
			$countq = 0; while ( have_rows('form_landing_data_qa') ) : the_row(); $countq++; ?> 
			<div class="grid-10 fl hide-mobile clearfix">
				<?php if(get_sub_field('question')) { echo '<p class="sp-small-text form-disclaimer-3 ' . get_sub_field('question_text_color') . '">' . get_sub_field('question') . '</p>'; }?> 
				<?php if(get_sub_field('answer')) { echo '<div id="form-disclaimer-3" class="sp-small-text ' . get_sub_field('answer_text_color') . '">' . get_sub_field('answer') . '</div>'; }?>  
			</div>
			<?php endwhile; echo ''; endif; ?> 
			<!-- end repeater-list -->
		<?php if(get_field('form_landing')) { echo '</div> '; } ?>
	</div>
	<style type="text/css">
		 /* Hide scrollbar for Chrome, Safari and Opera */
		body::-webkit-scrollbar{display:none;}
		/* Hide scrollbar for IE, Edge and Firefox */
		body {-ms-overflow-style:none;} /* IE and Edge */
		:root{scrollbar-width: none;} /* Firefox */  
		
		.form-fixed{max-height:80vh;overflow-y:scroll;position:fixed;right:0;top:150px;width:33.34%;z-index:10;}  
		.editor-styles-wrapper .wp-block, .wp-block {min-width:unset !important;max-width:unset !important;}
		@media (max-width:767px) {
			.form-fixed{float:left;height:auto;max-height:auto;overflow-y:unset;position:relative;right:unset;top:unset;width:100% !important;z-index:0;} 
		}
	</style> 
</section>