<?php
/**
 * Template Name: Websites
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

<div class="grid-10 fl clearfix">
	<main class="grid-work ppb2 clearfix">
		
<!-- ---------------------------- -->
<!-- ---------- FEATURED WORK --- -->
<!-- ---------------------------- -->		
		<?php if(get_field('featured_work_col1')): $i = 0; ?>
		<div class="work-featured-wrap fl clearfix">
			<ul class="work-featured mtop-667 clearfix"> 
				<?php while(has_sub_field('featured_work_col1')): $i++; ?>
				<li class="animatefade animated <?php if( (get_sub_field('tall_block') == true) ){ echo 'tall'; } ?>"
					<?php if( (get_sub_field('background_color_picker') == true) ){ echo 'style="background-color:'; } ?>
						<?php the_sub_field('background_color_picker'); ?>
					<?php if( (get_sub_field('background_color_picker') == true) ){ echo ';"'; } ?>>
					<?php if( (get_sub_field('cs_url') == true) ){ echo '<a href="'; } ?>
						<?php the_sub_field('cs_url'); ?>
					<?php if( (get_sub_field('cs_url') == true) ){ echo '">'; } ?> 
						<?php if( (get_sub_field('cs_image') == true) ){ echo '<div class="cs-image" style="background:url('; } ?>
							<?php the_sub_field('cs_image'); ?>
						<?php if( (get_sub_field('cs_image') == true) ){ echo ') no-repeat center center transparent;background-size:cover;"></div>'; } ?>
							<div class="wl-overlay-color"></div> 
							
						<?php if( ((get_sub_field('cs_label') || get_sub_field('cs_title') || get_sub_field('cs_logo'))  == true) ){ echo '<div class="featured-wrap"><div class="table"><div class="table-cell">'; } ?> 
							<?php if( (get_sub_field('cs_label') == true) ){ echo '<span class="cs-label">'; } ?>
								<?php the_sub_field('cs_label'); ?>
							<?php if( (get_sub_field('cs_label') == true) ){ echo '</span>'; } ?>
							<?php if( (get_sub_field('cs_title') == true) ){ echo '<h2>'; } ?>
								<?php the_sub_field('cs_title'); ?>
							<?php if( (get_sub_field('cs_title') == true) ){ echo '</h2>'; } ?> 
							<?php if( (get_sub_field('cs_logo') == true) ){ echo '<span class="cs-logo"><img src="'; } ?>
								<?php the_sub_field('cs_logo'); ?>
							<?php if( (get_sub_field('cs_logo') == true) ){ echo '" alt="logo" border="0"/></span>'; } ?>
						<?php if( ((get_sub_field('cs_label') || get_sub_field('cs_title') || get_sub_field('cs_logo'))  == true) ){ echo '</div></div></div>'; } ?>   
						<div class="wl-overlay"> 
							<span></span>
							<span></span>
							<span></span>
							<span></span> 
						</div>  
					<?php if( (get_sub_field('cs_url') == true) ){ echo '</a>'; } ?>    
				</li>  
				<?php endwhile; ?>
			</ul>
		</div>
		<?php endif; ?> 	
		<?php if(get_field('featured_work_col2')): $i = 0; ?>
		<div class="work-featured-wrap fl clearfix">
			<ul class="work-featured clearfix"> 
				<?php while(has_sub_field('featured_work_col2')): $i++; ?>
				<li class="animatefade animated <?php if( (get_sub_field('tall_block') == true) ){ echo 'tall'; } ?>"
					<?php if( (get_sub_field('background_color_picker') == true) ){ echo 'style="background-color:'; } ?>
						<?php the_sub_field('background_color_picker'); ?>
					<?php if( (get_sub_field('background_color_picker') == true) ){ echo ';"'; } ?>>
					<?php if( (get_sub_field('cs_url') == true) ){ echo '<a href="'; } ?>
						<?php the_sub_field('cs_url'); ?>
					<?php if( (get_sub_field('cs_url') == true) ){ echo '">'; } ?>
						<?php if( (get_sub_field('cs_image') == true) ){ echo '<div class="cs-image" style="background:url('; } ?>
							<?php the_sub_field('cs_image'); ?>
						<?php if( (get_sub_field('cs_image') == true) ){ echo ') no-repeat center center transparent;background-size:cover;"></div>'; } ?>
							<div class="wl-overlay-color"></div> 
							
						<?php if( ((get_sub_field('cs_label') || get_sub_field('cs_title') || get_sub_field('cs_logo'))  == true) ){ echo '<div class="featured-wrap"><div class="table"><div class="table-cell">'; } ?>
							
							<?php if( (get_sub_field('cs_label') == true) ){ echo '<span class="cs-label">'; } ?>
								<?php the_sub_field('cs_label'); ?>
							<?php if( (get_sub_field('cs_label') == true) ){ echo '</span>'; } ?>
							<?php if( (get_sub_field('cs_title') == true) ){ echo '<h2>'; } ?>
								<?php the_sub_field('cs_title'); ?>
							<?php if( (get_sub_field('cs_title') == true) ){ echo '</h2>'; } ?>
							<?php if( (get_sub_field('cs_logo') == true) ){ echo '<span class="cs-logo"><img src="'; } ?>
								<?php the_sub_field('cs_logo'); ?>
							<?php if( (get_sub_field('cs_logo') == true) ){ echo '" alt="logo" border="0"/></span>'; } ?>
						<?php if( ((get_sub_field('cs_label') || get_sub_field('cs_title') || get_sub_field('cs_logo'))  == true) ){ echo '</div></div></div>'; } ?>   
						<div class="wl-overlay"> 
							<span></span>
							<span></span>
							<span></span>
							<span></span> 
						</div>  
					<?php if( (get_sub_field('cs_url') == true) ){ echo '</a>'; } ?>    
				</li>  
				<?php endwhile; ?>
			</ul>
		</div>
		<?php endif; ?>	
		<?php if(get_field('featured_work_col3')): $i = 0; ?>
		<div class="work-featured-wrap fl clearfix">
			<ul class="work-featured clearfix"> 
				<?php while(has_sub_field('featured_work_col3')): $i++; ?>
				<li class="animatefade animated <?php if( (get_sub_field('tall_block') == true) ){ echo 'tall'; } ?>"
					<?php if( (get_sub_field('background_color_picker') == true) ){ echo 'style="background-color:'; } ?>
						<?php the_sub_field('background_color_picker'); ?>
					<?php if( (get_sub_field('background_color_picker') == true) ){ echo ';"'; } ?>>
					<?php if( (get_sub_field('cs_url') == true) ){ echo '<a href="'; } ?>
						<?php the_sub_field('cs_url'); ?>
					<?php if( (get_sub_field('cs_url') == true) ){ echo '">'; } ?>
						<?php if( (get_sub_field('cs_image') == true) ){ echo '<div class="cs-image" style="background:url('; } ?>
							<?php the_sub_field('cs_image'); ?>
						<?php if( (get_sub_field('cs_image') == true) ){ echo ') no-repeat center center transparent;background-size:cover;"></div>'; } ?>
							<div class="wl-overlay-color"></div> 
							
						<?php if( ((get_sub_field('cs_label') || get_sub_field('cs_title') || get_sub_field('cs_logo'))  == true) ){ echo '<div class="featured-wrap"><div class="table"><div class="table-cell">'; } ?>
							
							<?php if( (get_sub_field('cs_label') == true) ){ echo '<span class="cs-label">'; } ?>
								<?php the_sub_field('cs_label'); ?>
							<?php if( (get_sub_field('cs_label') == true) ){ echo '</span>'; } ?>
							<?php if( (get_sub_field('cs_title') == true) ){ echo '<h2>'; } ?>
								<?php the_sub_field('cs_title'); ?>
							<?php if( (get_sub_field('cs_title') == true) ){ echo '</h2>'; } ?>
							<?php if( (get_sub_field('cs_logo') == true) ){ echo '<span class="cs-logo"><img src="'; } ?>
								<?php the_sub_field('cs_logo'); ?>
							<?php if( (get_sub_field('cs_logo') == true) ){ echo '" alt="logo" border="0"/></span>'; } ?>
						<?php if( ((get_sub_field('cs_label') || get_sub_field('cs_title') || get_sub_field('cs_logo'))  == true) ){ echo '</div></div></div>'; } ?>   
						<div class="wl-overlay"> 
							<span></span>
							<span></span>
							<span></span>
							<span></span> 
						</div>  
					<?php if( (get_sub_field('cs_url') == true) ){ echo '</a>'; } ?>    
				</li>  
				<?php endwhile; ?>
			</ul>
		</div>
		<?php endif; ?> 
		<?php if(get_field('featured_work_col4')): $i = 0; ?>
		<div class="work-featured-wrap fl clearfix">
			<ul class="work-featured clearfix"> 
				<?php while(has_sub_field('featured_work_col4')): $i++; ?>
				<li class="animatefade animated <?php if( (get_sub_field('tall_block') == true) ){ echo 'tall'; } ?>"
					<?php if( (get_sub_field('background_color_picker') == true) ){ echo 'style="background-color:'; } ?>
						<?php the_sub_field('background_color_picker'); ?>
					<?php if( (get_sub_field('background_color_picker') == true) ){ echo ';"'; } ?>>
					<?php if( (get_sub_field('cs_url') == true) ){ echo '<a href="'; } ?>
						<?php the_sub_field('cs_url'); ?>
					<?php if( (get_sub_field('cs_url') == true) ){ echo '">'; } ?>
						<?php if( (get_sub_field('cs_image') == true) ){ echo '<div class="cs-image" style="background:url('; } ?>
							<?php the_sub_field('cs_image'); ?>
						<?php if( (get_sub_field('cs_image') == true) ){ echo ') no-repeat center center transparent;background-size:cover;"></div>'; } ?>
							<div class="wl-overlay-color"></div> 
							
						<?php if( ((get_sub_field('cs_label') || get_sub_field('cs_title') || get_sub_field('cs_logo'))  == true) ){ echo '<div class="featured-wrap"><div class="table"><div class="table-cell">'; } ?>
							
							<?php if( (get_sub_field('cs_label') == true) ){ echo '<span class="cs-label">'; } ?>
								<?php the_sub_field('cs_label'); ?>
							<?php if( (get_sub_field('cs_label') == true) ){ echo '</span>'; } ?>
							<?php if( (get_sub_field('cs_title') == true) ){ echo '<h2>'; } ?>
								<?php the_sub_field('cs_title'); ?>
							<?php if( (get_sub_field('cs_title') == true) ){ echo '</h2>'; } ?>
							<?php if( (get_sub_field('cs_logo') == true) ){ echo '<span class="cs-logo"><img src="'; } ?>
								<?php the_sub_field('cs_logo'); ?>
							<?php if( (get_sub_field('cs_logo') == true) ){ echo '" alt="logo" border="0"/></span>'; } ?>
						<?php if( ((get_sub_field('cs_label') || get_sub_field('cs_title') || get_sub_field('cs_logo'))  == true) ){ echo '</div></div></div>'; } ?>   
						<div class="wl-overlay"> 
							<span></span>
							<span></span>
							<span></span>
							<span></span> 
						</div>  
					<?php if( (get_sub_field('cs_url') == true) ){ echo '</a>'; } ?>    
				</li>  
				<?php endwhile; ?>
			</ul>
		</div>
		<?php endif; ?> 


	</main>
</div><!-- .grid-10 -->

<?php get_footer(); ?>