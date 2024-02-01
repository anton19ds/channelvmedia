<?php
/**
 * Simple Video Block Template.
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
$simple_video_headline = get_field('simple_video_headline') ?: 'Headline'; 
$simple_video_headline_color = get_field('simple_video_headline_color') ?: 'Headline Color'; 
$simple_video_subheadline = get_field('simple_video_subheadline') ?: 'Subheadline'; 
$simple_video_subheadline_color = get_field('simple_video_subheadline_color') ?: 'Subheadline Color'; 
$simple_video_text = get_field('simple_video_text') ?: 'Intro Text'; 
$simple_video_text_color = get_field('simple_video_text_color') ?: 'Intro Text Color'; 
$simple_video_url = get_field('simple_video_url') ?: 'Video Url'; 
$simple_video_autoplay = get_field('simple_video_autoplay') ?: 'Autoplay'; 
$simple_video_controls = get_field('simple_video_controls') ?: 'Show Controls'; 
$simple_video_controls = get_field('simple_video_loop') ?: 'Loop'; 
$simple_video_controls = get_field('simple_video_mute') ?: 'Mute'; 
$simple_video_poster = get_field('simple_video_poster') ?: 'Poster Photo'; 
$simple_video_background_color = get_field('simple_video_background_color') ?: 'Section Background Color';
?>

<section <?php if((get_field('section_id')) == true) { echo'id="' . get_field('section_id') . '"'; } else { ?>id="<?php echo $id; ?>"<?php } ?> class="grid-10 fl <?php if(get_field('simple_video_background_color')) { echo '' . get_field('simple_video_background_color') . ''; } ?> <?php if(get_field('simple_video_margin_top')) { echo ' ' . get_field('simple_video_margin_top') . ''; } ?><?php if(get_field('simple_video_margin_bottom')) { echo ' ' . get_field('simple_video_margin_bottom') . ''; } ?> <?php if(get_field('simple_video_padding_top')) { echo ' ' . get_field('simple_video_padding_top') . ''; } else {echo' pt5';} ?><?php if(get_field('simple_video_padding_bottom')) { echo ' ' . get_field('simple_video_padding_bottom') . ''; } else {echo' pb5';} ?> clearfix"> 

		<?php if((get_field('simple_video_label') || get_field('simple_video_headline') || get_field('simple_video_subheadline') || get_field('simple_video_text')) == true ) { echo '<div class="grid-page mauto"><div class="grid-10 fl clearfix">'; } ?>

			<?php if((get_field('simple_video_header_width')) == true ) { echo '<div class="mauto ' . get_field('simple_video_header_width') . ''; } ?>
	  
	<?php if((get_field('simple_video_header_align')) == true ) { echo ' ' . get_field('simple_video_header_align') . ''; } ?><?php if((get_field('simple_video_header_text_align')) == true ) { echo ' ' . get_field('simple_video_header_text_align') . ''; } ?><?php if((get_field('simple_video_header_width')) == true ) { echo '">'; } ?>
		
			<?php if(get_field('simple_video_label')) { echo '<p class="sp-small mt0 mb20 white'; } ?>   
			<?php if((get_field('simple_video_header_text_align') && get_field('simple_video_label')) == 'tac' ) { echo ' mauto pl1 '; } else { echo ' '; } ?>
			<?php if((get_field('simple_video_header_text_align') && get_field('simple_video_label')) == 'tal' ) { echo ' tal '; } else { echo ' '; } ?>
			<?php if((get_field('simple_video_header_text_align') && get_field('simple_video_label')) == 'tar' ) { echo 'tar '; } else { echo ' '; } ?>
			<?php if(get_field('simple_video_label_color')) { echo ' ' . get_field('simple_video_label_color') . ''; } ?>
			<?php if(get_field('simple_video_label')) { echo 'clearix">' . get_field('simple_video_label') . '</p>'; } ?> 
		<?php if((get_field('simple_video_headline') || get_field('simple_video_subheadline') || get_field('simple_video_text')) == true ) { echo '<div class="grid-10 fl clearfix">'; } ?>
			<?php if(get_field('simple_video_headline')) { echo '<h2 class="block-headline_alt bkw mt0 mb10 gr-text-pink-dark-purple '; } ?><?php if(get_field('simple_video_headline_color')) { echo '' . get_field('simple_video_headline_color') . ''; } ?><?php if(get_field('simple_video_headline')) { echo '">' . get_field('simple_video_headline') . '</h2>'; } ?>
			<?php if(get_field('simple_video_subheadline')) { echo '<span class="block-subheadline pb0 pt0 mb10 "'; } ?><?php if(get_field('simple_video_subheadline_color')) { echo ' style="color:' . get_field('simple_video_subheadline_color') . ';"'; } ?><?php if(get_field('simple_video_subheadline')) { echo '>' . get_field('simple_video_subheadline') . '</span>'; } ?>
			<?php if(get_field('simple_video_text')) { echo '<span class="block-text"'; } ?><?php if((get_field('simple_video_text_color') && get_field('simple_video_text')) == true ) { echo ' style="color:' . get_field('simple_video_text_color') . ';"'; } ?><?php if(get_field('simple_video_text')) { echo '>' . get_field('simple_video_text') . '</span>'; } ?>
		<?php if((get_field('simple_video_headline') || get_field('simple_video_subheadline') || get_field('simple_video_text')) == true ) { echo '</div>'; } ?> 
		
			<?php if((get_field('simple_video_header_width')) == true ) { echo '</div>'; } ?>
		
		<?php if((get_field('simple_video_label') || get_field('simple_video_headline') || get_field('simple_video_subheadline') || get_field('simple_video_text')) == true ) { echo '</div></div>'; } ?>
  		
		<?php if(get_field('simple_video_yt')) { echo '<div class="grid-page-mod mauto pb3 pt3 clearfix"><div class="hytPlayerWrapOuter"><div class="hytPlayerWrap"><figure class="wp-block-embed aligncenter is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
<iframe loading="lazy" title="' . get_field('simple_video_yt_title'). '" src="https://www.youtube.com/embed/' . get_field('simple_video_yt'). '?feature=oembed&modestbranding=1&autohide=1&showinfo=0&rel=0&enablejsapi=1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="840" height="473" frameborder="0"></iframe></div></figure></div></div></div>'; } ?> 
		
		<?php if(get_field('simple_video_url')) { echo '<div class="grid-page-mod mauto pb3 pt3 clearfix"><figure class="wp-block-video"><video'; } ?> <?php if((get_field('simple_video_autoplay')) == true ) { echo 'autoplay=""'; } ?> <?php if((get_field('simple_video_controls')) == true ) { echo 'controls=""'; } ?> <?php if((get_field('simple_video_loop')) == true ) { echo 'loop=""'; } ?> <?php if((get_field('simple_video_muted')) == true ) { echo 'muted=""'; } ?> <?php if(get_field('simple_video_poster')) { echo 'poster="' . get_field('simple_video_poster'). '"'; } ?> <?php if(get_field('simple_video_url')) { echo 'src="' . get_field('simple_video_url') . '"></video><span class="color-overlay-exact purple-pink-diagonal opacity20"></span></figure></div>'; } ?>  

		<style type="text/css">  
		</style> 
	</div>   
 	<!--Inline style for Hero Block--> 
</section>

<style type="text/css">
	figure.wp-block-video {overflow:hidden;}
	.wp-block-video {margin:0;}
	.wp-block-video video {margin-bottom:-10px;}
</style>