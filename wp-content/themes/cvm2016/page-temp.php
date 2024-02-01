<?php
/**
 * Template Name: Temp
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */

get_header(); ?>
 
<script>
jQuery(document).ready(function(){  
		$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
			 //>=, not <=
			// if (scroll >= 0) { 
  				//	$(".elements").fadeIn('slow'); 
				// } else {
  					// $(".elements").fadeOut('slow');  
				// }
		}); 
		$(window).scroll(function() { 
			if($(window).scrollTop() + $(window).height() > $(document).height() - 300) { 
       			$(".elements").fadeOut('slow'); 
			} else {
  				$(".elements").fadeIn('slow');  
			}
		});
});
</script>

<div class="section hero-work clearfix" <?php if (get_field('work_hero_background_image')) { echo 'style="background-image:url(' . get_field('work_hero_background_image') . ');"'; } ?>> 
	<div class="hero-logo-gradient"></div>
	<div class="hero-gradient"></div>
	<?php if(get_field('work_category_hero')): $i = 0; ?>  
	<div class="wl-cat-wrap hero">
		<?php while(has_sub_field('work_category_hero')): $i++; ?> 
				<?php if( (get_sub_field('icon') == true) ){ echo '<div class="wl-icon icon-center'; } ?>
					<?php the_sub_field('icon'); ?>
				<?php if( (get_sub_field('icon') == true) ){ echo '">'; } ?>
				<?php if( (get_sub_field('icon') == true) ){ echo '</div>'; } ?>    

				<?php if( (get_sub_field('name') == true) ){ echo '<div class="wl-cat cat-center'; } ?>
					<?php if( ((get_sub_field('text_color') && get_sub_field('text_color'))  == true) ){ echo '' . the_sub_field('text_color') . ''; } ?> 
				<?php if( (get_sub_field('name') == true) ){ echo '">'; } ?>  
					<?php the_sub_field('name'); ?>
				<?php if( (get_sub_field('name') == true) ){ echo '</div>'; } ?>  
		<?php endwhile; ?>
	</div>
	<?php endif; ?>  

	<?php if(get_field('hero_url')) { echo '<a href="' . get_field('hero_url') . '">'; } ?>  
	<?php if(get_field('work_title_hero')) { echo '<h1 class="story-title text-inner normal'; } ?>
		<?php if( (get_field('work_title_hero_color')  == true) ){ echo '' . get_field('work_title_hero_color') . ''; } ?>
		<?php if(get_field('work_title_hero')) { echo '">' . get_field('work_title_hero') . '</h1>'; } ?>
	<?php if(get_field('hero_url')) { echo '</a>'; } ?>  

	<div class="grid-page" style="display:none;">
		<?php if(get_field('work_cat_links')): $i = 0; ?>
		<ul class="work-cat-links clearfix">
		<?php while(has_sub_field('work_cat_links')): $i++; ?> 
			<li class="work-cat-link">  
				<?php if( (get_sub_field('url') == true) ){ echo '<a href="'; } ?>
						<?php the_sub_field('url'); ?>
				<?php if( (get_sub_field('url') == true) ){ echo '"'; } ?>  
				<?php if( (get_sub_field('text') == true) ){ echo 'class="wc-link'; } ?>
						<?php the_sub_field('text'); ?><?php if( (get_sub_field('text') == true) ){ echo '"'; } ?>
					<?php if( (get_sub_field('url') == true) ){ echo '>'; } ?> 
						<div class="nav-gradient <?php the_sub_field('text'); ?>"></div>
						<div class="nav-text"><?php the_sub_field('text'); ?></div> 
					<?php if( (get_sub_field('url') == true) ){ echo '</a>'; } ?>
			</li>
		<?php endwhile; ?>
		</ul>
		<?php endif; ?>
	</div> 
</div> <!-- end hero-work --> 
				 
<ul class="elements work">
    <li class="elements__block"><a href="/category/case-studies/"><img src="/wp-content/uploads/2017/06/icon-case-studies.svg" alt="Case Studies icon"><span>Case Studies</span></a></li>
    <li class="elements__block"><a href="/category/news/"><img src="/wp-content/uploads/2017/06/icon-news.svg" alt="News icon"><span>News</span></a></li>
    <li class="elements__block"><a href="/category/ideas/"><img src="/wp-content/uploads/2017/06/icon-ideas.svg" alt="Ideas icon"><span>Ideas</span></a></li>
</ul>

<div class="grid-10 clearfix">
	<main class="grid-page ppb2 clearfix">
<!-- ---------------------------- -->
<!-- ---------- POST 1 ---------- -->
<!-- ---------------------------- -->
		<div class="wl-1 pmr2">
			<?php if(get_field('work_url_1')) { echo '<a href="' . get_field('work_url_1') . '"'; } ?> 
				<?php if(get_field('work_background_1')): $i = 0; ?>
				<?php while(has_sub_field('work_background_1')): $i++; ?> 
						<?php if( (get_sub_field('photo') == true) ){ echo 'style="background:url('; } ?>
							<?php the_sub_field('photo'); ?>
						<?php if( (get_sub_field('photo') == true) ){ echo ');"'; } ?> 
				<?php endwhile; ?>
				<?php endif; ?>
				
				<?php if(get_field('work_url_1')) { echo '>'; } ?>
				<div class="wl-overlay" style="display:none;">
					<svg width="30" height="16" viewBox="0 0 24 13" xmlns="https://www.w3.org/2000/svg" class="link-icon"><path d="M21.453 5.643H0v.89h21.39l-5.132 4.996.915.76 6.397-6.213L17.21 0l-.954.708 5.197 4.935z" fill="#FFFFFF" fill-rule="evenodd"/></svg>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
				</div>

				<?php if( (get_field('work_text_container_width_1') || get_field('work_text_container_position_1')) == true) { echo '<div class="h100 '; } ?> 
					<?php if(get_field('work_text_container_width_1')) { echo '' . get_field('work_text_container_width_1') . ''; } ?> <?php if(get_field('work_text_container_position_1')) { echo '' . get_field('work_text_container_position_1') . ''; } ?>
				<?php if( (get_field('work_text_container_width_1') || get_field('work_text_container_position_1')) == true) { echo '">'; } ?> 
				
				<?php if (get_field('work_title_position_1')) { echo '<div class="' . get_field('work_title_position_1') . '"><div class="table-wrap"><div class="table-wrap-cell">'; } ?> 

				<?php if(get_field('work_category_1')): $i = 0; ?>  
				<div class="wl-cat-wrap">
					<?php while(has_sub_field('work_category_1')): $i++; ?> 
							<?php if( (get_sub_field('icon') == true) ){ echo '<div class="wl-icon '; } ?>
								<?php the_sub_field('icon'); ?> <?php the_sub_field('align_icon'); ?>
							<?php if( (get_sub_field('icon') == true) ){ echo '">'; } ?>
							<?php if( (get_sub_field('icon') == true) ){ echo '</div>'; } ?>    

						<?php if( ((get_sub_field('name') && get_sub_field('icon_align')) == true) ){ echo '<div class="wl-cat '; } ?>
							<?php if( (get_sub_field('text_color')  == true) ){ echo '' . the_sub_field('text_color') . ''; } ?>
							<?php if( (get_sub_field('text_shadow')  == true) ){ echo '' . the_sub_field('text_shadow') . ''; } ?>
							<?php if( (get_sub_field('icon_align') == true) ){ echo '' . the_sub_field('icon_align') . ''; } ?> 
						<?php if( ((get_sub_field('name') && get_sub_field('icon_align')) == true) ){ echo '">'; } ?>  
							<?php the_sub_field('name'); ?>
						<?php if( ((get_sub_field('name') && get_sub_field('icon_align')) == true) ){ echo '</div>'; } ?> 
					<?php endwhile; ?>
				</div>
				<?php endif; ?>

				<?php if(get_field('work_title_1')): $i = 0; ?>
				<?php while(has_sub_field('work_title_1')): $i++; ?> 
						<?php if( (get_sub_field('title') == true) ){ echo '<div class="wl-text"><h2 class ="'; } ?>
							<?php the_sub_field('title_color'); ?> <?php the_sub_field('font'); ?> <?php the_sub_field('text_align'); ?> <?php the_sub_field('font_size'); ?> <?php the_sub_field('text_shadow'); ?>
						<?php if( (get_sub_field('title') == true) ){ echo '">'; } ?> 
							<?php the_sub_field('title'); ?>
						<?php if( (get_sub_field('title') == true) ){ echo '</h2></div>'; } ?> 
				<?php endwhile; ?>
				<?php endif; ?>

				<?php if (get_field('work_title_position_1')) { echo '</div></div></div>'; } ?>
				
				<?php if(get_field('work_photo_1')): $i = 0; ?>
				<?php while(has_sub_field('work_photo_1')): $i++; ?> 
						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '<div class="wl-img'; } ?>
						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '' . the_sub_field('position') . ''; } ?>
						<?php if( (get_sub_field('photo') == true) ){ echo '" style="background-image:url('; } ?>
						<?php if( (get_sub_field('photo') == true) ){ echo '' . the_sub_field('photo') . ''; } ?>
						<?php if( (get_sub_field('photo') == true) ){ echo ');'; } ?> 
						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '">'; } ?> 

						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '<div class="color-overlay'; } ?>
							<?php the_sub_field('color_gradient'); ?> <?php the_sub_field('color_gradient_opacity'); ?> 
						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '"></div>'; } ?> 
				 
						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '</div>'; } ?>
				<?php endwhile; ?>
				<?php endif; ?>

				<?php if( (get_field('work_text_container_width_1') || get_field('work_text_container_position_1')) == true ){ echo '</div>'; } ?>    
				
				<?php if(get_field('work_background_1')): $i = 0; ?>
				<?php while(has_sub_field('work_background_1')): $i++; ?> 
						<?php if( ((get_sub_field('color_gradient_1') || get_sub_field('color_gradient_opacity_1'))  == true) ){ echo '<div class="color-overlay '; } ?>
							<?php the_sub_field('color_gradient_1'); ?> <?php the_sub_field('color_gradient_opacity_1'); ?>
						<?php if( ((get_sub_field('color_gradient_1') || get_sub_field('color_gradient_opacity_1'))  == true) ){ echo '"></div>'; } ?>
				<?php endwhile; ?>
				<?php endif; ?>    

			<?php if(get_field('work_url_1')) { echo '</a>'; } ?>
		</div>
<!-- ---------------------------- -->
<!-- ---------- POST 2 ---------- -->
<!-- ---------------------------- -->
		<div class="wl-1 pmr2 bs2">
			<?php if(get_field('work_url_2')) { echo '<a href="' . get_field('work_url_2') . '"'; } ?> 
				<?php if(get_field('work_background_2')): $i = 0; ?>
				<?php while(has_sub_field('work_background_2')): $i++; ?> 
						<?php if( (get_sub_field('photo') == true) ){ echo 'style="background:url('; } ?>
							<?php the_sub_field('photo'); ?>
						<?php if( (get_sub_field('photo') == true) ){ echo ');"'; } ?> 
				<?php endwhile; ?>
				<?php endif; ?>
				
				<?php if(get_field('work_url_2')) { echo '>'; } ?>
				<div class="wl-overlay" style="display:none;">
					<svg width="30" height="16" viewBox="0 0 24 13" xmlns="https://www.w3.org/2000/svg" class="link-icon"><path d="M21.453 5.643H0v.89h21.39l-5.132 4.996.915.76 6.397-6.213L17.21 0l-.954.708 5.197 4.935z" fill="#FFFFFF" fill-rule="evenodd"/></svg>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
				</div>

				<?php if( (get_field('work_text_container_width_2') || get_field('work_text_container_position_2')) == true) { echo '<div class="h100 '; } ?> 
					<?php if(get_field('work_text_container_width_2')) { echo '' . get_field('work_text_container_width_2') . ''; } ?> <?php if(get_field('work_text_container_position_2')) { echo '' . get_field('work_text_container_position_2') . ''; } ?>
				<?php if( (get_field('work_text_container_width_2') || get_field('work_text_container_position_2')) == true) { echo '">'; } ?> 
				
				<?php if (get_field('work_title_position_2')) { echo '<div class="' . get_field('work_title_position_2') . '"><div class="table-wrap"><div class="table-wrap-cell">'; } ?> 

				<?php if(get_field('work_category_2')): $i = 0; ?>  
				<div class="wl-cat-wrap">
					<?php while(has_sub_field('work_category_2')): $i++; ?> 
							<?php if( (get_sub_field('icon') == true) ){ echo '<div class="wl-icon '; } ?>
								<?php the_sub_field('icon'); ?> <?php the_sub_field('align_icon'); ?>
							<?php if( (get_sub_field('icon') == true) ){ echo '">'; } ?>
							<?php if( (get_sub_field('icon') == true) ){ echo '</div>'; } ?>    

							<?php if( (get_sub_field('name') == true) ){ echo '<div class="wl-cat '; } ?>
								<?php if( ((get_sub_field('text_color') && get_sub_field('text_color'))  == true) ){ echo '' . the_sub_field('text_color') . ''; } ?>
								<?php if( ((get_sub_field('text_color') && get_sub_field('align_icon')) == true) ){ echo '' . the_sub_field('align_icon') . ''; } ?> 
							<?php if( (get_sub_field('name') == true) ){ echo '">'; } ?>  
								<?php the_sub_field('name'); ?>
							<?php if( (get_sub_field('name') == true) ){ echo '</div>'; } ?>  
					<?php endwhile; ?>
				</div>
				<?php endif; ?>

				<?php if(get_field('work_title_2')): $i = 0; ?>
				<?php while(has_sub_field('work_title_2')): $i++; ?> 
						<?php if( (get_sub_field('title') == true) ){ echo '<div class="wl-text"><h2 class ="'; } ?>
							<?php the_sub_field('title_color'); ?> <?php the_sub_field('font'); ?> <?php the_sub_field('text_align'); ?> <?php the_sub_field('font_size'); ?> <?php the_sub_field('text_shadow'); ?>
						<?php if( (get_sub_field('title') == true) ){ echo '">'; } ?> 
							<?php the_sub_field('title'); ?>
						<?php if( (get_sub_field('title') == true) ){ echo '</h2></div>'; } ?> 
				<?php endwhile; ?>
				<?php endif; ?>

				<?php if (get_field('work_title_position_2')) { echo '</div></div></div>'; } ?>
				
				<?php if(get_field('work_photo_2')): $i = 0; ?>
				<?php while(has_sub_field('work_photo_2')): $i++; ?> 
						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '<div class="wl-img'; } ?>
						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '' . the_sub_field('position') . ''; } ?>
						<?php if( (get_sub_field('photo') == true) ){ echo '" style="background-image:url('; } ?>
						<?php if( (get_sub_field('photo') == true) ){ echo '' . the_sub_field('photo') . ''; } ?>
						<?php if( (get_sub_field('photo') == true) ){ echo ');'; } ?> 
						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '">'; } ?> 

						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '<div class="color-overlay'; } ?>
							<?php the_sub_field('color_gradient'); ?> <?php the_sub_field('color_gradient_opacity'); ?> 
						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '"></div>'; } ?> 
				 
						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '</div>'; } ?>
				<?php endwhile; ?>
				<?php endif; ?>

				<?php if( (get_field('work_text_container_width_2') || get_field('work_text_container_position_2')) == true ){ echo '</div>'; } ?>    
				
				<?php if(get_field('work_background_2')): $i = 0; ?>
				<?php while(has_sub_field('work_background_2')): $i++; ?> 
						<?php if( ((get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity'))  == true) ){ echo '<div class="color-overlay '; } ?>
							<?php the_sub_field('color_gradient'); ?> <?php the_sub_field('color_gradient_opacity'); ?>
						<?php if( ((get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity'))  == true) ){ echo '"></div>'; } ?>
				<?php endwhile; ?>
				<?php endif; ?>    

			<?php if(get_field('work_url_2')) { echo '</a>'; } ?>
		</div>
<!-- ---------------------------- -->
<!-- ---------- POST 3 ---------- -->
<!-- ---------------------------- -->
		<div class="wl-2">
			<?php if(get_field('work_url_3')) { echo '<a href="' . get_field('work_url_3') . '"'; } ?> 
				<?php if(get_field('work_background_3')): $i = 0; ?>
				<?php while(has_sub_field('work_background_3')): $i++; ?> 
						<?php if( (get_sub_field('photo') == true) ){ echo 'style="background:url('; } ?>
							<?php the_sub_field('photo'); ?>
						<?php if( (get_sub_field('photo') == true) ){ echo ');"'; } ?> 
				<?php endwhile; ?>
				<?php endif; ?>
				
				<?php if(get_field('work_url_3')) { echo '>'; } ?>
				<div class="wl-overlay" style="display:none;">
					<svg width="30" height="16" viewBox="0 0 24 13" xmlns="https://www.w3.org/2000/svg" class="link-icon"><path d="M21.453 5.643H0v.89h21.39l-5.132 4.996.915.76 6.397-6.213L17.21 0l-.954.708 5.197 4.935z" fill="#FFFFFF" fill-rule="evenodd"/></svg>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
				</div>

				<?php if( (get_field('work_text_container_width_3') || get_field('work_text_container_position_3')) == true) { echo '<div class="h100 '; } ?> 
					<?php if(get_field('work_text_container_width_3')) { echo '' . get_field('work_text_container_width_3') . ''; } ?> <?php if(get_field('work_text_container_position_3')) { echo '' . get_field('work_text_container_position_3') . ''; } ?>
				<?php if( (get_field('work_text_container_width_3') || get_field('work_text_container_position_3')) == true) { echo '">'; } ?> 
				
				<?php if (get_field('work_title_position_3')) { echo '<div class="' . get_field('work_title_position_3') . '"><div class="table-wrap"><div class="table-wrap-cell">'; } ?> 

				<?php if(get_field('work_category_3')): $i = 0; ?>  
				<div class="wl-cat-wrap">
					<?php while(has_sub_field('work_category_3')): $i++; ?> 
							<?php if( (get_sub_field('icon') == true) ){ echo '<div class="wl-icon '; } ?>
								<?php the_sub_field('icon'); ?> <?php the_sub_field('align_icon'); ?>
							<?php if( (get_sub_field('icon') == true) ){ echo '">'; } ?>
							<?php if( (get_sub_field('icon') == true) ){ echo '</div>'; } ?>    

							<?php if( (get_sub_field('name') == true) ){ echo '<div class="wl-cat '; } ?>
								<?php if( ((get_sub_field('text_color') && get_sub_field('text_color'))  == true) ){ echo '' . the_sub_field('text_color') . ''; } ?>
								<?php if( ((get_sub_field('text_color') && get_sub_field('align_icon')) == true) ){ echo '' . the_sub_field('align_icon') . ''; } ?> 
							<?php if( (get_sub_field('name') == true) ){ echo '">'; } ?>  
								<?php the_sub_field('name'); ?>
							<?php if( (get_sub_field('name') == true) ){ echo '</div>'; } ?>  
					<?php endwhile; ?>
				</div>
				<?php endif; ?>

				<?php if(get_field('work_title_3')): $i = 0; ?>
				<?php while(has_sub_field('work_title_3')): $i++; ?> 
						<?php if( (get_sub_field('title') == true) ){ echo '<div class="wl-text"><h2 class ="'; } ?>
							<?php the_sub_field('title_color'); ?> <?php the_sub_field('font'); ?> <?php the_sub_field('text_align'); ?> <?php the_sub_field('font_size'); ?> <?php the_sub_field('text_shadow'); ?>
						<?php if( (get_sub_field('title') == true) ){ echo '">'; } ?> 
							<?php the_sub_field('title'); ?>
						<?php if( (get_sub_field('title') == true) ){ echo '</h2></div>'; } ?> 
				<?php endwhile; ?>
				<?php endif; ?>

				<?php if (get_field('work_title_position_3')) { echo '</div></div></div>'; } ?>
				
				<?php if(get_field('work_photo_3')): $i = 0; ?>
				<?php while(has_sub_field('work_photo_3')): $i++; ?> 
						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '<div class="wl-img'; } ?>
						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '' . the_sub_field('position') . ''; } ?>
						<?php if( (get_sub_field('photo') == true) ){ echo '" style="background-image:url('; } ?>
						<?php if( (get_sub_field('photo') == true) ){ echo '' . the_sub_field('photo') . ''; } ?>
						<?php if( (get_sub_field('photo') == true) ){ echo ');'; } ?> 
						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '">'; } ?> 

						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '<div class="color-overlay'; } ?>
							<?php the_sub_field('color_gradient'); ?> <?php the_sub_field('color_gradient_opacity'); ?> 
						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '"></div>'; } ?> 
				 
						<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '</div>'; } ?>
				<?php endwhile; ?>
				<?php endif; ?>

				<?php if( (get_field('work_text_container_width_3') || get_field('work_text_container_position_3')) == true ){ echo '</div>'; } ?>    
				
				<?php if(get_field('work_background_3')): $i = 0; ?>
				<?php while(has_sub_field('work_background_3')): $i++; ?> 
						<?php if( ((get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity'))  == true) ){ echo '<div class="color-overlay '; } ?>
							<?php the_sub_field('color_gradient'); ?> <?php the_sub_field('color_gradient_opacity'); ?>
						<?php if( ((get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity'))  == true) ){ echo '"></div>'; } ?>
				<?php endwhile; ?>
				<?php endif; ?>    

			<?php if(get_field('work_url_3')) { echo '</a>'; } ?>
		</div>
<!-- ---------------------------- -->
<!-- ---------- POST FEED ------- -->
<!-- ---------------------------- -->
  
				<ul class="work-list clearfix">	  
				<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 6, 'category_name' => 'case-studies, news, ideas, resources', 'cat' => '-9') ); ?> 
				<?php $count = 0; while ( $loop->have_posts() ) : $loop->the_post(); $count++; ?> 
				<?php $classf = "first"; if( $count < 2 == 0 ){ $classf = ""; } ?>
					<li class="<?php echo $classf; ?>">
						<a href="<?php the_permalink(); ?>"
							<?php if(get_field('background')): $i = 0; ?>
							<?php while(has_sub_field('background')): $i++; ?> 
									<?php if( (get_sub_field('photo') == true) ){ echo 'style="background:url('; } ?>
										<?php if( (get_sub_field('photo') == true) ){ ?>
											<?php if (has_post_thumbnail( $post->ID ) ): ?>
											<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
												echo '' . $image[0] . ''; ?>
											<?php endif; ?>
										 <?php } ?> 													
									<?php if( (get_sub_field('photo') == true) ){ echo ');"'; } ?>
							<?php endwhile; ?>
							<?php endif; ?>>
							<div class="wl-overlay" style="display:none;">
								<svg width="30" height="16" viewBox="0 0 24 13" xmlns="https://www.w3.org/2000/svg" class="link-icon"><path d="M21.453 5.643H0v.89h21.39l-5.132 4.996.915.76 6.397-6.213L17.21 0l-.954.708 5.197 4.935z" fill="#FFFFFF" fill-rule="evenodd"/></svg>
							<span></span>
							<span></span>
							<span></span>
							<span></span> 
							</div> 

							<?php if( (get_field('text_container_width') || get_field('text_container_position')) == true) { echo '<div class="h100 '; } ?> 
								<?php if(get_field('text_container_width')) { echo '' . get_field('text_container_width') . ''; } ?> <?php if(get_field('text_container_position')) { echo '' . get_field('text_container_position') . ''; } ?>
							<?php if( (get_field('text_container_width') || get_field('text_container_position')) == true) { echo '">'; } ?> 


							<?php if (get_field('title_position')) { echo '<div class="' . get_field('title_position') . '"><div class="table-wrap"><div class="table-wrap-cell">'; } ?> 

							<?php if(get_field('category')): $i = 0; ?>  
							<div class="wl-cat-wrap">
								<?php while(has_sub_field('category')): $i++; ?> 
										<?php if( (get_sub_field('icon') == true) ){ echo '<div class="wl-icon '; } ?>
											<?php the_sub_field('icon'); ?> <?php the_sub_field('icon_align'); ?>
										<?php if( (get_sub_field('icon') == true) ){ echo '">'; } ?>
										<?php if( (get_sub_field('icon') == true) ){ echo '</div>'; } ?>    

										<?php if( (get_sub_field('name') == true) ){ echo '<div class="wl-cat '; } ?>
											<?php if( ((get_sub_field('name') && get_sub_field('text_color'))  == true) ){ echo '' . the_sub_field('text_color') . ''; } ?>
											<?php if( (get_sub_field('name')  == true) ){ echo '' . the_sub_field('icon_align') . ''; } ?> 
										<?php if( (get_sub_field('name') == true) ){ echo '">'; } ?>  
											<?php the_sub_field('name'); ?>
										<?php if( (get_sub_field('name') == true) ){ echo '</div>'; } ?>  
								<?php endwhile; ?>
							</div>
							<?php endif; ?>   

							<?php if(get_field('post_title')): $i = 0; ?>
							<?php while(has_sub_field('post_title')): $i++; ?> 
									<div class="wl-text"><h2 class ="<?php the_sub_field('title_color'); ?> <?php the_sub_field('font'); ?> <?php the_sub_field('text_align'); ?> <?php the_sub_field('font_size'); ?> <?php the_sub_field('text_shadow'); ?>"> 
 										<?php if( (get_sub_field('custom_title') == true) ) { echo '' . the_sub_field('custom_title') . ''; 
										} else { ?>
											<?php the_title(); ?>
										<?php } ?>
									</h2></div>
							<?php endwhile; ?>
							<?php endif; ?>

							<?php if (get_field('title_position')) { echo '</div></div></div>'; } ?>    

							<?php if(get_field('photo_box')): $i = 0; ?>
							<?php while(has_sub_field('photo_box')): $i++; ?> 
									<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '<div class="wl-img'; } ?>
									<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '' . the_sub_field('position') . ''; } ?>
									<?php if( (get_sub_field('photo') == true) ){ echo '" style="background-image:url('; } ?>
									
									<?php if( (get_sub_field('photo') == true) ){ ?>
										<?php if (has_post_thumbnail( $post->ID ) ): ?>
										<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
											echo '' . $image[0] . ''; ?>
										<?php endif; ?>
									 <?php } ?> 									
							
									<?php if( (get_sub_field('photo') == true) ){ echo ');'; } ?> 
									<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '">'; } ?> 

									<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '<div class="color-overlay'; } ?>
										<?php the_sub_field('color_gradient'); ?> <?php the_sub_field('color_gradient_opacity'); ?> 
									<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '"></div>'; } ?> 

									<?php if( ((get_sub_field('photo') || get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '</div>'; } ?>
							<?php endwhile; ?>
							<?php endif; ?> 

							<?php if( (get_field('text_container_width') || get_field('text_container_position')) == true ){ echo '</div>'; } ?>     

							<?php if(get_field('background')): $i = 0; ?>
							<?php while(has_sub_field('background')): $i++; ?> 
									<?php if( ((get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity'))  == true) ){ echo '<div class="color-overlay '; } ?>
										<?php the_sub_field('color_gradient'); ?> <?php the_sub_field('color_gradient_opacity'); ?>
									<?php if( ((get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity'))  == true) ){ echo '"></div>'; } ?>
							<?php endwhile; ?>
							<?php endif; ?>
						</a>
					</li> 
				<?php endwhile; ?> 
 				<?php wp_reset_query(); ?>
				</ul> 



	</main>
	

<!-- ---------------------------- -->
<!-- ---------- RELATED POSTS --- -->
<!-- ---------------------------- -->
<div class="section-related grid-10 ppb2 ppt2 clearfix <?php if(get_field('section_background')) { echo '' . get_field('section_background') . '';} ?>">

	<?php if(get_field('section_title')) { echo '<h2 class="related">' . get_field('section_title') . '</h2>';} ?>

	<div class="grid-page clearfix">
		<?php if(get_field('related_post')): $i = 0; ?>
		<ul class="related-post clearfix">
		<?php while(has_sub_field('related_post')): $i++; ?>
			<li class=""> 
				<?php if( (get_sub_field('url') == true) ){ echo '<a href="'; } ?><?php the_sub_field('url'); ?><?php if( (get_sub_field('url') == true) ){ echo '"'; } ?>
					<?php // check for rows (nested repeater)
					if( have_rows('background_photo') ): $i = 0; ?>  
							<?php while( have_rows('background_photo') ): $i++; the_row(); ?>  
								<?php if(get_sub_field('photo')) {
									echo 'style="background-image:url(' . get_sub_field('photo') . ');"';
								} ?> 
							<?php endwhile; ?> 
					<?php endif; ?>
				<?php if( (get_sub_field('url') == true) ){ echo '>'; } ?>
				
				<?php // check for rows (nested repeater)
				if( have_rows('background_photo') ): $i = 0; ?>  
					<?php while( have_rows('background_photo') ): $i++; the_row(); ?>
						<?php if( ((get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity'))  == true) ){ echo '<div class="color-overlay '; } ?> <?php the_sub_field('color_gradient'); ?> <?php the_sub_field('color_gradient_opacity'); ?>
						<?php if( ((get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity'))  == true) ){ echo '"></div>'; } ?>							
					<?php endwhile; ?> 
				<?php endif; ?>
				
				<?php // check for rows (nested repeater)
				if( have_rows('related_title') ): $i = 0; ?>  
					<?php while( have_rows('related_title') ): $i++; the_row(); ?> 
						<div class="text"><h2 class =" 
							<?php if(get_sub_field('title_color')) { echo '' . get_sub_field('title_color') . ''; } ?> 
							<?php if(get_sub_field('font')) { echo '' . get_sub_field('font') . ''; } ?> 
							<?php if(get_sub_field('font_size')) { echo '' . get_sub_field('font_size') . ''; } ?> 
							<?php if(get_sub_field('text_align')) { echo '' . get_sub_field('text_align') . ''; } ?>  
							<?php if(get_sub_field('text_shadow')) { echo '' . get_sub_field('text_shadow') . ''; } ?>
						">								
							<?php if(get_sub_field('title')) {
								echo '' . get_sub_field('title') . '';
							} ?> 
						</h2></div> 
					<?php endwhile; ?> 
				<?php endif; ?> 

				<div class="wl-overlay" style="display:none;">
					<svg width="30" height="16" viewBox="0 0 24 13" xmlns="https://www.w3.org/2000/svg" class="link-icon"><path d="M21.453 5.643H0v.89h21.39l-5.132 4.996.915.76 6.397-6.213L17.21 0l-.954.708 5.197 4.935z" fill="#FFFFFF" fill-rule="evenodd"/></svg>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
				</div> 
						
				<?php if( (get_sub_field('url') == true) ){ echo '</a>'; } ?>   
			</li>
		<?php endwhile; ?>
		</ul>
		<?php endif; ?> 
	</div>
</div>
	
	
			<?php get_template_part( 'inc/next-previous-posts.php', ' ' ); ?>
	
</div><!-- .grid-10 -->

<?php get_footer(); ?>