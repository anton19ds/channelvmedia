<?php
/**
 * Template Name: Careers
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
get_header(); ?>

<!-- ---------- HERO ---------------- -->
<div id="hero" class="grid-10 fl page-hero-section clearfix" <?php if(get_field('page_hero_background_photo')) {	echo 'style="background-image:url(' . get_field('page_hero_background_photo') . ');"'; } ?>>  
	<?php if(get_field('page_title_photo')) {	echo '<div class="grid-page clearfix"><div class="grid-7 fl pt110 clearfix"><img class="responsive-img" src="' . get_field('page_title_photo') . '" border="0" alt="Title" /></div></div>'; } ?> 
	<?php if(get_field('page_title_text') || get_field('page_intro_text')) { echo '<div class="grid-page clearfix"><div class="grid-7 fl pt110 clearfix">'; } ?>
	<?php if(get_field('page_title_text')) {	echo '<h1 class="cvm-page-title-text">' . get_field('page_title_text') . '</h1>'; } ?>
	<?php if(get_field('page_intro_text')) {	echo '<h2 class="careers-mainline animateslideinleft animated">' . get_field('page_intro_text') . '</h2>'; } ?>  
	<?php if(get_field('page_title_text') || get_field('page_intro_text')) { echo '</div></div>'; } ?> 
	
<!-- ---------- CONTENT ------------- -->
<?php if((get_field('career_landing_content') || get_field('career_landing_photos'))) { echo '<div class="section grid-10 fl clearfix"><div class="grid-page mauto ppt3 clearfix">'; } ?>
    <?php if(get_field('career_landing_content')) { echo '<div class="grid-careers-right fr clearfix">' . get_field('career_landing_content') . '</div>'; } ?>
    <?php if(get_field('career_landing_photos')) { echo '<div class="grid-careers-left fl clearfix">'; } ?>
        <?php if(get_field('career_landing_photos')): $i = 0; ?>
        <ul class="careers-img-list clearfix">
        <?php while(has_sub_field('career_landing_photos')): $i++; ?>
            <?php $class = "odd"; if( $i % 2 == 0 ){ $class = "even"; } ?>
            <?php $classf = "first"; if( $i < 2 == 0 ){ $classf = ""; } ?>
            <li class="<?php echo $class; ?> <?php echo $classf; ?> animatefade animated">
            <?php if( (get_sub_field('photo') == true) ){ echo '<span class="img" style="background-image:url('; } ?>
                <?php the_sub_field('photo'); ?>
            <?php if( (get_sub_field('photo') == true) ){ echo ');'; } ?>
			<?php if( (get_sub_field('photo_bg_position') == true) ){ echo 'background-position:'; } ?><?php the_sub_field('photo_bg_position'); ?><?php if( (get_sub_field('photo_bg_position') == true) ){ echo ';'; } ?>
            <?php if( (get_sub_field('photo') == true) ){ echo '"></span>'; } ?>
				
				
				 
				
            </li>
        <?php endwhile; ?> 
        </ul>
        <?php endif; ?> 
    <?php if(get_field('career_landing_photos')) { echo '</div>'; } ?>
<?php if((get_field('career_landing_content') || get_field('career_landing_photos'))) { echo '</div></div>'; } ?>

<!-- ---------- PERKS -------- -->
<?php if((get_field('perks_list'))) { echo '<div class="section grid-10 fl clearfix'; } ?> 
<?php if((get_field('perks_list'))) { echo '"><div class="grid-page mauto clearfix">'; } ?>
	<?php if(get_field('perks_section_title')) { echo '<h2 class="careers-title tal">' . get_field('perks_section_title') . '</h2>'; } ?>
	<?php if(get_field('perks_list')): $i = 0; ?>
	<div class="qas group">
		<?php while(has_sub_field('perks_list')): $i++; ?>
            <?php if(get_sub_field('perks_headline')) { echo '<a href="#" class="togglefaq">' . get_sub_field('perks_headline') . ' <span class="ic icon-plus">+</span></a>'; } ?>
            <?php if(get_sub_field('perks_content')) { echo '<div class="faqanswer" style="display: none;"><p>' . get_sub_field('perks_content') . '</p></div>'; } ?> 
		<?php endwhile; ?>
	</div> 
	<?php endif; ?>
<?php if((get_field('perks_list'))) { echo '</div></div>'; } ?> 

<!-- ---------- OPEN POSITIONS -------- -->
<?php if((get_field('open_positions'))) { echo '<div class="section grid-10 fl clearfix'; } ?> 
<?php if((get_field('open_positions'))) { echo '"><div class="grid-page mauto clearfix">'; } ?>
	<?php if(get_field('open_position_section_title')) { echo '<h2 class="careers-title tal">' . get_field('open_position_section_title') . '</h2>'; } ?>
        <?php if(get_field('open_positions')): $i = 0; ?>
        <div class="grid-5 mauto ppb5 clearfix">
        <?php while(has_sub_field('open_positions')): $i++; ?>  
            <?php if( (get_sub_field('url') == true) ){ echo '<a class="career-btn" href="'; } ?>
                <?php the_sub_field('url'); ?>
            <?php if( (get_sub_field('url') == true) ){ echo '">'; } ?> 
            <?php if( (get_sub_field('position_title') == true) ){ echo '<span>'; } ?>
                <?php the_sub_field('position_title'); ?>
            <?php if( (get_sub_field('position_title') == true) ){ echo '</span>'; } ?> 
            <?php if( (get_sub_field('url') == true) ){ echo '</a>'; } ?>  
        <?php endwhile; ?> 
        </div>
        <?php endif; ?> 
<?php if((get_field('open_positions'))) { echo '</div></div>'; } ?> 
    
<?php get_footer(); ?>