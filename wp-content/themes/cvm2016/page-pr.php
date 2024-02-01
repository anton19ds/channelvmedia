<?php
/**
 * Template Name: PR
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
get_header(); ?>  

<!-- ---------- HERO ---------------- -->
<div id="hero" class="grid-10 fl page-hero-section clearfix" <?php if(get_field('page_hero_background_photo')) {	echo 'style="background-image:url(' . get_field('page_hero_background_photo') . ');"'; } ?>>   
    <div class="overlay-black-50"></div>
	<?php if(get_field('page_title_photo')) {	echo '<div class="grid-page clearfix"><div class="grid-7 fl pt110 clearfix"><img class="responsive-img" src="' . get_field('page_title_photo') . '" border="0" alt="Title" /></div></div>'; } ?>  
	<?php if(get_field('page_title_text') || get_field('page_intro_text')) { echo '<div class="grid-page clearfix"><div class="grid-7 fl pt110 clearfix">'; } ?>
	<?php if(get_field('page_title_text')) {	echo '<h1 class="title-main">' . get_field('page_title_text') . '</h1>'; } ?>
	<?php if(get_field('page_intro_text')) {	echo '<h2 class="title-secondary animateslideinleft animated">' . get_field('page_intro_text') . '</h2>'; } ?>  
	<?php if(get_field('page_title_text') || get_field('page_intro_text')) { echo '</div></div>'; } ?>
	
</div>

<!-- ---------- LEAD-IN TEXT -------- -->
<?php if((get_field('pr_left_column') || get_field('pr_right_column') || get_field('pr_transition_photo'))) { echo '<div class="section grid-10 fl bg-white clearfix"><div class="grid-page mauto ppt3 clearfix">'; } ?>
		<?php if(get_field('pr_left_column')) { echo '<div class="grid-4b fl ppb4 clearfix">' . get_field('pr_left_column') . '</div>'; } ?> 
		<?php if(get_field('pr_right_column')) { echo '<div class="grid-4b fr ppb4 clearfix">' . get_field('pr_right_column') . '</div>'; } ?>
		<?php if(get_field('pr_transition_photo')) { echo '<div class="overhang"><img id="overhangimg" class="responsive-img animatefade animated" src="' . get_field('pr_transition_photo') . '" border="0" alt="transition"/></div>'; } ?>
<?php if((get_field('pr_left_column') || get_field('pr_right_column') || get_field('pr_transition_photo'))) { echo '</div></div>'; } ?> 

<!-- ---------- CAPABILITIES -------- -->
<?php if((get_field('capabilities_list'))) { echo '<div class="section grid-10 fl clearfix'; } ?>
<?php if(get_field('pr_transition_photo')) { echo ' ppt10'; } ?>
<?php if((get_field('capabilities_list'))) { echo '"><div class="grid-page mauto clearfix">'; } ?>

	<?php if(get_field('capabilities_section_title')) { echo '<h2 class="capabilities-title tac">' . get_field('capabilities_section_title') . '</h2>'; } ?>
	<?php if(get_field('capabilities_list')): $i = 0; ?>
	<ul class="capabilities-list"> 
		<?php while(has_sub_field('capabilities_list')): $i++; ?>
			<li class="">
				<div class="grid-page mauto clearfix">
					<?php if(get_sub_field('capabilities_headline')) { echo '<h3 class="harriet pmb0 pmt0">' . get_sub_field('capabilities_headline') . '</h3>'; } ?>
					<?php if(get_sub_field('capabilities_content')) { echo '<span>' . get_sub_field('capabilities_content') . '</span>'; } ?>
				</div>
			</li>
		<?php endwhile; ?>
	</ul> 
	<?php endif; ?>
<?php if((get_field('capabilities_list'))) { echo '</div></div>'; } ?>

<!-- ---------- TESTIMONIAL -------- -->
<?php if((get_field('testimonial_quote'))) { echo '<div class="section grid-10 fl ltblue-ocean-left-to-right clearfix"><div class="quote-start animateslideinleft animated"><img src="/wp-content/themes/cvm2016/img/quote.png" alt="&#8220;" border="0"/></div><div class="quote-end animateslideinright animated"><img src="/wp-content/themes/cvm2016/img/quote-end.png" alt="&#8221;" border="0"/></div>'; } ?>
	<?php if((get_field('testimonial_quote'))) { echo '<div class="grid-page mauto clearfix">'; } ?>
	<?php if(get_field('testimonial_photo')) { echo '<div class="grid-fixed-1b fr mt20 clearfix"><img class="testimonial-quote-photo responsive-img" src="' . get_field('testimonial_photo') . '" border="0" alt="headshot"/></div>'; } ?>
	<?php if(get_field('testimonial_quote')) { echo '<div class="grid-7 fl clearfix"><h3 class="testimonial-quote">' . get_field('testimonial_quote') . '</h3>'; } ?>
	<?php if(get_field('testimonial_quote_citation')) { echo '<span class="testimonial-quote-citation">&#8212; ' . get_field('testimonial_quote_citation') . '</span>'; } ?>
	<?php if(get_field('testimonial_quote_logo')) { echo '<span class="testimonial-quote-logo"><img src="' . get_field('testimonial_quote_logo') . '" border="0" alt="logo"/></span>'; } ?>
	<?php if(get_field('testimonial_quote')) { echo '</div>'; } ?> 
<?php if((get_field('testimonial_quote'))) { echo '</div></div>'; } ?>

<?php get_footer(); ?>