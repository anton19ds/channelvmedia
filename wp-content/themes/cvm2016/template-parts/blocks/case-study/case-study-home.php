<?php
/**
 * Home Case Study Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
// Create id attribute allowing for custom "anchor" value.ds
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
?>

<article <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl bg-common <?php if(get_field('home_cs_background_color')) { echo '' . get_field('home_cs_background_color') . ''; } ?> <?php if(get_field('top_margin')) { echo ' ' . get_field('top_margin') . ''; } ?><?php if(get_field('bottom_margin')) { echo ' ' . get_field('bottom_margin') . ''; } ?> <?php if(get_field('top_padding')) { echo ' ' . get_field('top_padding') . ''; } ?><?php if(get_field('bottom_padding')) { echo ' ' . get_field('bottom_padding') . ''; } ?> clearfix" style="<?php if(get_field('home_cs_background_photo')) { echo 'background-image:url(' . get_field('home_cs_background_photo') . ');'; } ?><?php if(get_field('home_cs_background_position')) { echo 'background-position:' . get_field('home_cs_background_position') . ';'; } ?>">
	
	<?php if((get_field('home_cs_background_overlay_color')) == true) { echo '<div class="color-overlay-exact ' . get_field('home_cs_background_overlay_color') . ' ' . get_field('home_cs_background_overlay_color_opacity') . '"></div>'; } ?> 
	<?php if((get_field('home_cs_background_overlay_opacity')) == true) { echo '<div class="color-overlay-exact ' . get_field('home_cs_background_overlay_opacity') . '"></div>'; } ?>

	<div class="grid-page clearfix">
		<?php if(get_field('home_cs_media_logo_list')): $i = 0; ?>
			<ul class="home-cs-list-flex fl"><?php while(has_sub_field('home_cs_media_logo_list')): $i++; ?><li class="project">
 					<span class="icon-content">
						<?php if(get_sub_field('home_cs_media_logo')) { ?>
							<?php if(get_sub_field('home_cs_media_logo')) { echo '<span class="icon-img">'; } ?>
							<?php $image = get_sub_field('home_cs_media_logo'); ?>
							<img class="responsive-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="150" height="100" />
							<?php if(get_sub_field('home_cs_media_logo')) { echo '</span>'; } ?>
						<?php } ?> 
					</span>
 				</li><?php endwhile; ?></ul>
		<?php endif; ?>
		
		<?php if((get_field('home_cs_quote_position')) == true) { ?>
		<?php if(get_field('home_cs_quote')) { echo '<div class="grid-10 clearfix"><div class="blockquote-wrapper home-quote-top animatezoom animated zoomIn"><div class="blockquote"><span class="quote tac"><span class="white">' . get_field('home_cs_quote') . '</span></span>'; } ?>

		<?php if( (get_field('home_cs_quote_photo') || get_field('home_cs_quote_logo') || get_field('home_cs_quote_first_last_name') || get_field('home_cs_quote_first_company')) ) { echo '<span class="grid-10 fl">'; } ?>
		<?php $image = get_field('home_cs_quote_photo'); ?>
		<?php if( get_field('home_cs_quote_photo') ) { echo '<div class="'; } ?><?php if( get_field('home_cs_quote_photo') ) { echo 'grid-10 ts1 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_field('home_cs_quote_photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_field('home_cs_quote_photo') ) { echo '" width="100" height="100" border="0"/></div>'; } ?>
		<?php if( (get_field('home_cs_quote_photo') || get_field('home_cs_quote_logo') || get_field('home_cs_quote_first_last_name') || get_field('home_cs_quote_first_company')) ) { echo '</span>'; } ?>

		<?php if(get_field('home_cs_quote')) { echo '<div class="grid-10 fl">'; } ?>
		<?php if(get_field('home_cs_quote_logo')) { echo '<span class="citation pt0" style="padding-left:0 !important;">'; } ?>
		<?php $image = get_field('home_cs_quote_logo'); ?>
		<?php if( get_field('home_cs_quote_logo') ) { echo '<div class="mauto '; } ?><?php if(get_field('home_cs_quote_logo_width') && get_field('home_cs_quote_logo')) { echo '' . get_field('home_cs_quote_logo_width') . ''; } ?><?php if( get_field('home_cs_quote_logo') ) { echo ' pb1 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_field('home_cs_quote_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_field('home_cs_quote_logo') ) { echo '" border="0"/></div>'; } ?>
		<?php if(get_field('home_cs_quote_logo')) { echo '</span>'; } ?>

		<?php if(get_field('home_cs_quote_first_last_name') || get_field('home_cs_quote_company') ) { echo '<span class="grid-10 fl citation cite-text tac mt0 pt0" style="padding-left:0 !important;">'; } ?><?php if(get_field('home_cs_quote_first_last_name')) { echo '' . get_field('home_cs_quote_first_last_name') . ''; } ?><?php if(get_field('home_cs_quote_job_title')) { echo ', ' . get_field('home_cs_quote_job_title') . ''; } ?><?php if(get_field('home_cs_quote_company')) { echo ', <em style=display:inline;">' . get_field('home_cs_quote_company') . '</em>'; } ?><?php if(get_field('home_cs_quote_first_last_name') || get_field('home_cs_quote_company')) { echo '</span>'; } ?>
		<?php if(get_field('home_cs_quote')) { echo '</div>'; } ?>
		<?php if(get_field('home_cs_quote')) { echo '</div></div></div>'; } ?>
		
		<?php } ?>

		<?php if(get_field('home_cs_main_logo')) { echo '<div class="grid-10 fl pt150 pb5 tac clearfix"><div class="grid-fixed-5 mauto clearfix">'; } ?>
			<?php if(get_field('home_cs_main_logo_width')) { echo '<div class="' . get_field('home_cs_main_logo_width') . ' mauto">'; } ?> 
				<?php $image = get_field('home_cs_main_logo');
				if( !empty( $image ) ): ?>
					<img class="responsive-img z1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="300" height="200"/>
				<?php endif; ?>
			<?php if(get_field('home_cs_main_logo_width')) { echo '</div>'; } ?> 
		<?php if(get_field('home_cs_main_logo')) { echo '</div></div>'; } ?> 
		
		<div class="grid-10 pt10 fl clearfix">
			<div class="grid-4b fl clearfix">
				<?php if(get_field('home_cs_section_label')) { echo '<p class="sp-small mt0 mb20 ts1 ' . get_field('home_cs_section_label_text_color') . ' clearfix">' . get_field('home_cs_section_label') . '</p>'; } ?> 
				<?php if(get_field('home_cs_headline')) { echo '<h2 class="block-headline mb0 pb2 ts1 ' . get_field('home_cs_headline_text_color') . ' clearfix">' . get_field('home_cs_headline') . '</h2> '; } ?> 
				<?php if(get_field('home_cs_subheadline')) { echo '<span class="block-subheadline pt0 pb3 mt0 mb0 tal ts1 ' . get_field('home_cs_subheadline_text_color') . ' clearfix">' . get_field('home_cs_subheadline') . '</span> '; } ?>
				
				<!-- start repeater-list --> 
				<?php if( have_rows('home_cs_buttons') ): $pr = 0;
				echo '<div class="grid-10 fl mb50">';
				// loop through the rows of data
				while ( have_rows('home_cs_buttons') ) : the_row(); ?> 
					<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect '; } ?><?php if(get_sub_field('button_color')) { echo ' ' . get_sub_field('button_color') . ' '; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
					<?php if(get_sub_field('target_blank') == true) { echo 'target="_blank"'; } ?> 
					<?php if(get_sub_field('link')) { echo '>'; } ?>
					<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span><div class="transition-rect"></div>'; } ?> 
					<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
				<?php endwhile; echo '</div>'; endif; ?> 
				<!-- end repeater-list --> 
			</div>
			
			<?php if((get_field('home_cs_quote_position')) == false) { ?>
			<?php if(get_field('home_cs_quote')) { echo '<div class="grid-4b fr clearfix"><div class="blockquote-wrapper home-quote animateslideinright animated slideInLeft"><div class="blockquote"><span class="quote"><span class="white">' . get_field('home_cs_quote') . '</span></span>'; } ?>

				<?php if( (get_field('home_cs_quote_photo') || get_field('home_cs_quote_logo') || get_field('home_cs_quote_first_last_name') || get_field('home_cs_quote_first_company')) ) { echo '<span class="citation-photo fl">'; } ?>
					<?php $image = get_field('home_cs_quote_photo'); ?>
					<?php if( get_field('home_cs_quote_photo') ) { echo '<div class="'; } ?><?php if( get_field('home_cs_quote_photo') ) { echo 'grid-10 ts1 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_field('home_cs_quote_photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_field('home_cs_quote_photo') ) { echo '" width="100" height="100" border="0"/></div>'; } ?>
				<?php if( (get_field('home_cs_quote_photo') || get_field('home_cs_quote_logo') || get_field('home_cs_quote_first_last_name') || get_field('home_cs_quote_first_company')) ) { echo '</span>'; } ?>

				<?php if(get_field('home_cs_quote')) { echo '<div class="grid-fixed-5 alt7 fl pl4">'; } ?>
					<?php if(get_field('home_cs_quote_logo')) { echo '<span class="citation pt2">'; } ?>
					<?php $image = get_field('home_cs_quote_logo'); ?>
					<?php if( get_field('home_cs_quote_logo') ) { echo '<div class="grid-10 '; } ?><?php if(get_field('home_cs_quote_logo_width') && get_field('home_cs_quote_logo')) { echo '' . get_field('home_cs_quote_logo_width') . ''; } ?><?php if( get_field('home_cs_quote_logo') ) { echo ' pb1 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_field('home_cs_quote_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_field('home_cs_quote_logo') ) { echo '" border="0"/></div>'; } ?>
					<?php if(get_field('home_cs_quote_logo')) { echo '</span>'; } ?>

					<?php if(get_field('home_cs_quote_first_last_name') || get_field('home_cs_quote_company') ) { echo '<span class="citation cite-text mt0 pt0">'; } ?>
					<?php if(get_field('home_cs_quote_first_last_name')) { echo '' . get_field('home_cs_quote_first_last_name') . ''; } ?><?php if(get_field('home_cs_quote_job_title')) { echo ', ' . get_field('home_cs_quote_job_title') . '<br/>'; } ?>
					<?php if(get_field('home_cs_quote_company')) { echo '<em>' . get_field('home_cs_quote_company') . '</em>'; } ?>
					<?php if(get_field('home_cs_quote_first_last_name') || get_field('home_cs_quote_company')) { echo '</span>'; } ?>
				<?php if(get_field('home_cs_quote')) { echo '</div>'; } ?>
			<?php if(get_field('home_cs_quote')) { echo '</div></div></div>'; } ?>
			<?php } ?>
			
		</div>
		
	</div>
</article>

<style type="text/css">
	.home-cs-list-flex{display:table;float:left;gap:0%;margin:0 auto !important;padding:0 !important;position:relative;text-align:center;width:100%;max-width:1200px !important;}
	.home-cs-list-flex li{display:inline-block;margin:0;padding:0;position:relative;width:9.5%;} 
	.home-cs-list-flex li a {display:block;position:relative;transition:all .5s ease-in-out;width:100%;z-index:1;}
	.home-cs-list-flex li a:hover {cursor:pointer;transition:all .5s ease-in-out;}
	.home-cs-list-flex li .icon-img {display:table;margin:0 auto;opacity:1;overflow:hidden;padding:0px;position:relative;width:90%;transition:all .5s ease-in-out;}
	.home-cs-list-flex li a .icon-img img {left:-100% !important;opacity:1;top:0px;transition:all .5s ease-in-out;} 
	.home-cs-list-flex li a:hover .icon-img img {opacity:1;top:10px;transition:all .5s ease-in-out;}
	.home-cs-list-flex li .icon-content {display:table;margin:0 auto;padding:0;position:relative;width:100%;}
	.home-cs-list-flex li a:hover .icon-link {color:#C83493;}

	@media screen and (max-width: 1350px) {
		.home-cs-list-flex li {width:14.5%;}   
	} 
	@media screen and (max-width: 900px) {  
		.home-cs-list-flex li {width:19.5%;}  
	} 
	@media screen and (max-width: 575px) { 
		.home-cs-list-flex li {width:24.9%;} 
	} 
</style> 