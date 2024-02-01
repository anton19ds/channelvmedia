<?php
/**
 * Template Name: Thank You
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
get_header(); ?>  

<!-- ---------- HERO ---------------- -->
<div class="thank-you-wrapper" <?php if(get_field('page_hero_background_photo')) {	echo 'style="background-image:url(' . get_field('page_hero_background_photo') . ');"'; } ?>></div> 

<div class="grid-page ppt10 clearfix">
    <?php if(get_field('page_title_photo')) {	echo '<div class="grid-7 dtable mauto pt110 clearfix"><img class="responsive-img" src="' . get_field('page_title_photo') . '" border="0" alt="Thank You" /></div>'; } ?>
	<?php if(get_field('page_title_text')) { echo '<h1 class="darwin white pt110 pmb0 tac">' . get_field('page_title_text') . '</h1>'; } ?>
    <?php if(get_field('page_intro_text')) {	echo '<div class="grid-10 fl ppb3 clearfix"><h6 class="white tac">' . get_field('page_intro_text') . '</h6></div>'; } ?> 

	<div class="mb0 mt0">
		<a href="https://channelvmedia.com/careers/" class="btn-swipe-rect mauto">
			<span>View Careers</span>
			<div class="transition-rect"></div> 
		</a> 
	</div>	
	
</div> 

<?php get_footer(); ?>