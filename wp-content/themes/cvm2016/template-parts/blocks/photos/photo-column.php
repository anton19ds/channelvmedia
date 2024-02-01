<?php
/**
 * Photo Column Block Template.
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

<section <?php if((get_field('photocol_section_id')) == true) { echo'id="' . get_field('photocol_section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl  <?php if(get_field('photocol_background_color')) { echo '' . get_field('photocol_background_color') . ''; } ?><?php if(get_field('photocol_top_margin')) { echo ' ' . get_field('photocol_top_margin') . ''; } ?><?php if(get_field('photocol_bottom_margin')) { echo ' ' . get_field('photocol_bottom_margin') . ''; } ?> <?php if(get_field('photocol_top_padding')) { echo ' ' . get_field('photocol_top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('photocol_bottom_padding')) { echo ' ' . get_field('photocol_bottom_padding') . ''; } else {echo' pb0';} ?> clearfix"> 
	 
	<?php if(get_field('photocol_background_photo')) { echo '<div class="color-overlay-exact bg-common clearfix'; } ?>
		<?php if((get_field('photocol_background_photo_opacity')) == true) { echo ' ' . get_field('photocol_background_photo_opacity') . ''; } ?>
		<?php if(get_field('photocol_background_photo')) { echo '" style="'; } ?>
		<?php if(get_field('photocol_background_photo')) { echo 'background-image:url(' . get_field('photocol_background_photo') . ');'; } ?><?php if((get_field('photocol_background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?>
	<?php if(get_field('photocol_background_photo')) { echo '"></div>'; } ?> 
 
	
	<?php if(get_field('photocol_background_color_filter')) { echo '<div class="color-overlay ' . get_field('photocol_background_color_filter') . ''; } ?><?php if((get_field('photocol_background_color_filter_opacity')) == true) { echo ' ' . get_field('photocol_background_color_filter_opacity') . ' '; } ?><?php if(get_field('photocol_background_color_filter')) { echo ' clearfix"></div>'; } ?>

	<?php if((get_field('photocol_page_width')) == true) { echo'<div class="grid-page mauto"><div class="grid-10 mauto">'; } ?>
	
					<?php if((get_field('photocol_header_headline') || get_field('photocol_header_subheadline') || get_field('photocol_header_intro')) == true ) { echo '<div class="grid-page mauto"><div class="grid-10 fl clearfix">'; } ?>

			<?php if((get_field('photocol_header_width') || get_field('photocol_header_align') || get_field('photocol_header_text_align')) == true ) { echo '<div class="' . get_field('photocol_header_width') . ''; } ?><?php if((get_field('photocol_header_align')) == true ) { echo ' ' . get_field('photocol_header_align') . ''; } ?><?php if((get_field('photocol_header_text_align')) == true ) { echo ' ' . get_field('photocol_header_text_align') . ''; } ?><?php if((get_field('photocol_header_width') || get_field('photocol_header_align') || get_field('photocol_header_text_align')) == true ) { echo '">'; } ?>
		
			<?php if(get_field('photocol_header_label')) { echo '<p class="sp-small mt0 mb20'; } ?> 
			<?php if(get_field('photocol_header_label')) { ?>   
			<?php if((get_field('photocol_header_text_align')) == 'tac' ) { echo ' mauto pl1 '; } else { echo ' '; } ?>
			<?php if((get_field('photocol_header_text_align')) == 'tal' ) { echo ' fl '; } else { echo ' '; } ?>
			<?php if((get_field('photocol_header_text_align')) == 'tar' ) { echo 'tar '; } else { echo ' '; } ?>
			<?php if(get_field('photocol_header_label_color')) { echo ' ' . get_field('photocol_header_label_color') . ''; } ?>
			<?php } ?>
			<?php if(get_field('photocol_header_label')) { echo 'clearix">' . get_field('photocol_header_label') . '</p>'; } ?>  
		
			<?php if(get_field('photocol_header_headline')) { echo '<h2 class="block-headline_alt mt0 mb0 '; } ?><?php if((get_field('photocol_header_headline') && get_field('photocol_header_headline_color')) == true ) { echo '' . get_field('photocol_header_headline_color') . ''; } else { echo ' '; } ?><?php if(get_field('photocol_header_headline')) { echo '">' . get_field('photocol_header_headline') . '</h2>'; } ?>
			<?php if(get_field('photocol_header_subheadline')) { echo '<span class="block-subheadline pt0 pb0 mb20 '; } ?><?php if((get_field('photocol_header_subheadline') && get_field('photocol_header_subheadline_color')) == true) { echo ' ' . get_field('photocol_header_subheadline_color') . ''; } ?><?php if(get_field('photocol_header_subheadline')) { echo '">' . get_field('photocol_header_subheadline') . '</span>'; } ?>
			<?php if(get_field('photocol_header_intro')) { echo '<span class="block-text '; } ?><?php if((get_field('photocol_header_intro_color') && get_field('photocol_header_intro')) == true ) { echo '' . get_field('photocol_header_intro_color') . ''; } ?><?php if(get_field('photocol_header_intro')) { echo '">' . get_field('photocol_header_intro') . '</span>'; } ?> 
		
			<?php if((get_field('photocol_header_width') || get_field('photocol_header_align') || get_field('photocol_header_text_align')) == true ) { echo '</div>'; } ?>
		
		<?php if((get_field('photocol_header_headline') || get_field('photocol_header_subheadline') || get_field('photocol_header_intro')) == true ) { echo '</div></div>'; } ?>
	 
	<div class="grid-page<?php if(get_field('photocol_content_top_padding')) { echo ' ' . get_field('photocol_content_top_padding') . ''; } ?><?php if(get_field('photocol_content_bottom_padding')) { echo ' ' . get_field('photocol_content_bottom_padding') . ''; } ?>">
<!-- start column -->
		<?php if( have_rows('photo_column') ): $i = 0; ?><div class="grid-10
			<?php while( have_rows('photo_column') ): $i++; the_row(); ?><?php endwhile; ?><?php endif; ?>
		<?php if(get_sub_field('photo_col_full_width') == true) { echo 'cs-full-width'; } ?> 
		<?php if( get_sub_field('float_photo') == true ){ echo '' . get_sub_field('float_photo') . ''; } ?> 
		<?php if( have_rows('photo_column') ): $i = 0; ?>"><?php while( have_rows('photo_column') ): $i++; the_row(); ?><?php endwhile; ?><?php endif; ?>
		<?php if( have_rows('photo_column') ): $i = 0; ?>  
			<div class="table-strategy">
				<div class="table-cell">
					<div class="grid-10 mauto clearfix">
						<?php while( have_rows('photo_column') ): $i++; the_row(); ?>
							<?php $image = get_sub_field('photo'); ?>
							<?php if(get_sub_field('photo')) { echo '<div class="cs-image-col'; } ?>
							<?php if((get_sub_field('photo_wide') == true) ){ echo 'cs-image-col-wide'; } ?> 
							<?php if((get_sub_field('photo_quarter') == true) ){ echo 'cs-quarter-width'; } ?>
							<?php if((get_sub_field('photo_offset') == true) ){ echo ' top40'; } ?>
							<?php if((get_sub_field('photo_fr') == true) ){ echo 'fr'; } ?>
							<?php if(get_sub_field('photo')) { echo 'fl clearfix"><div class="grid-10 fl clearfix"><img class="responsive-img fl'; } ?>
							<?php if(get_sub_field('photo_shadow')) { echo ' ' . get_sub_field('photo_shadow') . ''; } ?> <?php if((get_sub_field('photo_underline') == true) ){ echo 'bb-lt-purple'; } ?> <?php if(get_sub_field('photo')) { echo '" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('photo') ) { echo '" border="0"/>'; } ?>  

							<?php if( (get_sub_field('photo_color_overlay') == true) ){ echo '<div class="color-overlay-exact purple-pink-diagonal opacity20'; } ?><?php // if(((get_sub_field('photo_color_overlay') && get_sub_field('photo_offset')) == true) ){ echo ' top40'; } ?>
							<?php if( (get_sub_field('photo_color_overlay') == true) ){ echo '"></div>'; } ?> 
							<?php if(get_sub_field('photo')) { echo '</div>'; } ?> 

							<?php if(get_sub_field('photo_caption')) { echo '<div class="cs-caption'; } ?><?php // if((get_sub_field('photo_offset') == true) ){ echo ' top40'; } ?><?php if((get_sub_field('photo_caption') && get_sub_field('photo_caption_color')) == true) { echo ' ' . get_sub_field('photo_caption_color') . ''; } ?><?php if(get_sub_field('photo_caption')) { echo '">' . get_sub_field('photo_caption') . '</div>'; } ?>

							<?php if(get_sub_field('photo')) { echo '</div>'; } ?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>  
		<?php endif; ?> 
		<?php if( have_rows('photo_column') ): $i = 0; ?></div><?php while( have_rows('photo_column') ): $i++; the_row(); ?><?php endwhile; ?><?php endif; ?>  
<!-- end column -->  
		
	</div> <!--grid-page -->
	
	<?php if((get_field('photocol_page_width')) == true) { echo'</div></div>'; } ?>
</section> 







