<?php
/**
 * Client Logos Filter Block Template.
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
<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php if(get_field('filter_section_background_color')) { echo '' . get_field('filter_section_background_color') . ''; } ?> <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } else {echo' pt5';} ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } else {echo' pb5';} ?> clearfix"> 
	
	<?php if(get_field('filter_section_background_photo')) { echo '<div class="color-overlay bg-common'; } ?><?php if((get_field('filter_section_background_photo_opacity') && get_field('filter_section_background_photo')) == true) { echo ' ' . get_field('filter_section_background_photo_opacity') . ''; } ?><?php if(get_field('filter_section_background_photo')) { echo ' clearfix" style="background-image:url(' . get_field('filter_section_background_photo') . ');'; } ?><?php if((get_field('filter_section_background_fixed')) == true) { echo 'background-attachment:fixed;'; } ?><?php if(get_field('filter_section_background_photo')) { echo '"></div>'; } ?>

	<?php if(get_field('filter_section_background_color_filter')) { echo '<div class="color-overlay ' . get_field('filter_section_background_color_filter') . ''; } ?><?php if((get_field('filter_section_background_color_filter_opacity')) == true) { echo ' ' . get_field('filter_section_background_color_filter_opacity') . ' '; } ?><?php if(get_field('filter_section_background_color_filter')) { echo ' clearfix"></div>'; } ?>

		<?php if((get_field('filter_section_headline') || get_field('filter_section_subheadline') || get_field('filter_section_text')) == true ) { echo '<div class="grid-page mauto"><div class="grid-10 fl clearfix">'; } ?>

			<?php if((get_field('filter_section_header_width') || get_field('filter_section_header_align') || get_field('filter_section_header_text_align')) == true ) { echo '<div class="' . get_field('filter_section_header_width') . ''; } ?><?php if((get_field('filter_section_header_align')) == true ) { echo ' ' . get_field('filter_section_header_align') . ''; } ?><?php if((get_field('filter_section_header_text_align')) == true ) { echo ' ' . get_field('filter_section_header_text_align') . ''; } ?><?php if((get_field('filter_section_header_width') || get_field('filter_section_header_align') || get_field('filter_section_header_text_align')) == true ) { echo '">'; } ?>
		
			<?php if(get_field('filter_section_label')) { echo '<p class="sp-small mt0 mb20'; } ?> 
			<?php if(get_field('filter_section_label')) { ?>   
			<?php if((get_field('filter_section_header_text_align')) == 'tac' ) { echo ' mauto pl1 '; } else { echo ' '; } ?>
			<?php if((get_field('filter_section_header_text_align')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
			<?php if((get_field('filter_section_header_text_align')) == 'tar' ) { echo 'tar '; } else { echo ' '; } ?>
			<?php if(get_field('filter_section_label_text_color')) { echo ' ' . get_field('filter_section_label_text_color') . ''; } ?>
			<?php } ?>
			<?php if(get_field('filter_section_label')) { echo 'clearix">' . get_field('filter_section_label') . '</p>'; } ?>  
		
			<?php if(get_field('filter_section_headline')) { echo '<h2 class="block-headline_alt mt0 mb0 '; } ?><?php if(get_field('filter_section_headline_color')) { echo '' . get_field('filter_section_headline_color') . ''; } else { echo ' '; } ?><?php if(get_field('filter_section_headline')) { echo '">' . get_field('filter_section_headline') . '</h2>'; } ?>
			<?php if(get_field('filter_section_subheadline')) { echo '<span class="block-subheadline pt0 pb0 mb20'; } ?><?php if(get_field('filter_section_subheadline_color')) { echo ' ' . get_field('filter_section_subheadline_color') . ''; } ?><?php if(get_field('filter_section_subheadline')) { echo '">' . get_field('filter_section_subheadline') . '</span>'; } ?>
			<?php if(get_field('filter_section_text')) { echo '<span class="block-text'; } ?><?php if((get_field('filter_section_text_color') && get_field('filter_section_text')) == true ) { echo ' ' . get_field('filter_section_text_color') . ''; } ?><?php if(get_field('filter_section_text')) { echo '">' . get_field('filter_section_text') . '</span>'; } ?> 
		
			<?php if((get_field('filter_section_header_width') || get_field('filter_section_header_align') || get_field('filter_section_header_text_align')) == true ) { echo '</div>'; } ?>
		
		<?php if((get_field('filter_section_headline') || get_field('filter_section_subheadline') || get_field('filter_section_text')) == true ) { echo '</div></div>'; } ?>

		<div class="grid-10 fl not-on-web-work clearfix">
			<div class="grid-page mauto ppt2 ppb2 clearfix">

				<ul class="client-cs-filter clearfix">
					<li class="all effect-one on"><span>ALL</span></li>
					<li class="business-tech effect-one"><span>Business Tech</span></li>
					<li class="consumer-tech effect-one"><span>Consumer Tech</span></li>
					<li class="enterprise effect-one"><span>Enterprise</span></li>
					<li class="lifestyle effect-one"><span>Lifestyle</span></li>
					<li class="media-and-marketing effect-one"><span>Media + Marketing</span></li> 
					<li class="professional-services effect-one"><span>Professional Services</span></li> 
				</ul>

				<?php if(get_field('work_client_logos')): $i = 0; ?>
				<ul class="client-cs-logos clearfix"> 
					<?php while(has_sub_field('work_client_logos')): $i++; ?>
					<li <?php $values = get_sub_field('filter_category'); if($values) {echo 'class="';
						foreach($values as $value) {
							echo '' . $value . ' ';
						} echo '"'; } ?>><?php if( (get_sub_field('logo') == true) ){ echo '<img class="responsive-img" src="'; } ?><?php the_sub_field('logo'); ?><?php if( (get_sub_field('logo') == true) ){ echo '" alt="logo" border="0"/>'; } ?></li>  
					<?php endwhile; ?>
				</ul>
				<?php endif; ?> 
			</div>
		</div>  
</section>