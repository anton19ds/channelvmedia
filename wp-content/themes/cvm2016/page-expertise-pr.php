<?php
/**
 * Template Name: Expertise PR Service
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
get_header(); ?>

<!-- ---------- HERO ---------------- -->
<?php if(get_field('expertise_page_title')) { echo '<section id="hero" class="sp-hero-wrap'; } ?> <?php if(get_field('expertise_hero_background_color')) { echo '' . get_field('expertise_hero_background_color') . ''; } ?> <?php if(get_field('expertise_page_title')) { echo 'clearfix">
	<div class="grid-page expertise-pr-hero-title pb5-mod clearfix">'; } ?>
		 
			<?php 
			$image = get_field('expertise_hero_image');
			if( !empty( $image ) ): ?>
				<div class="grid-7-absolute absolute-right absolute-top clearfix"><img class="responsive-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
				<?php if(get_field('expertise_hero_image_overlay')) { echo '<div class="color-overlay-exact ' . get_field('expertise_hero_image_overlay') . ' opacity50"></div><div class="color-overlay-exact ' . get_field('expertise_hero_image_overlay') . ' opacity50"></div>'; } ?>
			<?php 
			$image = get_field('expertise_hero_image');
			if( !empty( $image ) ): ?>
				</div>
			<?php endif; ?>
		 
		<?php if(get_field('expertise_page_title')) { echo '<div class="grid-7 fl pb5-mod clearfix">
			<div class="table">
				<div class="table-cell">'; } ?>
					<?php if(get_field('expertise_section_label')) { echo '<p class="sp-small white'; } ?>
					<?php if(get_field('expertise_section_label_text_color')) { echo '' . get_field('expertise_section_label_text_color') . ''; } ?>
					<?php if(get_field('expertise_section_label')) { echo 'clearix">' . get_field('expertise_section_label') . '</p>'; } ?> 
					
					<?php if(get_field('expertise_page_title')) { echo '<h1 class="sp ts2'; } ?>
						<?php if(get_field('expertise_page_title')) { echo '' . get_field('expertise_page_title_text_color') . ''; } ?>
					<?php if(get_field('expertise_page_title')) { echo '">' . get_field('expertise_page_title') . '</h1>'; } ?>
					
					<?php if(get_field('expertise_page_subtitle') || ('expertise_page_subtitle') ) { echo '<div class="grid-8 clearfix">'; } ?>
						<?php if(get_field('expertise_page_subtitle')) { echo '<h2 class="sp ts'; } ?>
							<?php if(get_field('expertise_page_subtitle_text_color')) { echo '' . get_field('expertise_page_subtitle_text_color') . ''; } ?>
						<?php if(get_field('expertise_page_subtitle')) { echo '">' . get_field('expertise_page_subtitle') . '</h2>'; } ?>  
					
						<!-- start repeater-list --> 
						<?php if( have_rows('button_text_links') ): $pr = 0;
						echo '<p class="mb10 mt20 down-arrow-container">';
						// loop through the rows of data
						while ( have_rows('button_text_links') ) : the_row(); ?> 
							<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="down-link'; } ?> <?php if(get_sub_field('text_color')) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('arrow_color')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
							<?php if(get_sub_field('target_blank') == true) { echo 'target="_blank"'; } ?> 
							<?php if(get_sub_field('link')) { echo '>'; } ?>
							<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
							<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
						<?php endwhile; echo '</p>'; endif; ?> 

						<!-- start repeater-list --> 
						<?php if( have_rows('button_swipe_rect') ): $pr = 0;
						echo '<div class="mb10 mt20">';
						// loop through the rows of data
						while ( have_rows('button_swipe_rect') ) : the_row(); ?> 
							<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect '; } ?> <?php if(get_sub_field('button_color') && get_sub_field('link')) { echo '' . get_sub_field('button_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
							<?php if((get_sub_field('target_blank') && get_sub_field('link')) == true) { echo 'target="_blank"'; } ?> 
							<?php if(get_sub_field('link')) { echo '>'; } ?>
							<?php if(get_sub_field('text')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
							<div class="transition-rect"></div> 
							<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
						<?php endwhile; echo '</div>'; endif; ?> 
					
					<?php if(get_field('expertise_page_subtitle') || ('expertise_page_subtitle') ) { echo '</div>'; } ?> 
					
				<?php if(get_field('expertise_page_title')) { echo '</div>
			</div> 
		</div>
	</div>
</section>'; } ?> 
		 
			<!-- -------------------------- -->
			<!-- START AWARDS LOGOS SECTION --> 
			<!-- -------------------------- -->  
			<?php if(get_field('pr_awards_logos')) { echo '<section id="awards" class="grid-10 fl bg-dark-purple clearfix"> 
				<div class="grid-page mauto clearfix">'; } ?>
					<?php if(get_field('pr_awards_logos_title')) { echo '<div class="grid-2b fl clearfix"><h3 class="sp light tal mb0 ' . get_field('pr_awards_logos_title_color') . '">' . get_field('pr_awards_logos_title') . '</h3></div>'; } ?>

					<?php if(get_field('pr_awards_logos')): $i = 0; ?>
					<div class="pr-ex-aw clearfix"><ul class="pr-expertise-awards-logos clearfix">
						<?php while(has_sub_field('pr_awards_logos')): $i++; ?>   
						<?php $image = get_sub_field('pr_awards_logo'); ?>
						<?php if( get_sub_field('pr_awards_logo') ) { echo '<li class="clearfix"><img src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('pr_awards_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('pr_awards_logo') ) { echo '" border="0"/></li>'; } ?>  
						<?php endwhile; ?>
						</ul></div>
					<?php endif; ?>  
				<?php if(get_field('pr_awards_logos')) { echo '</div>  
			</section>'; } ?>  
			<!-- -------------------------- -->
			<!-- END AWARDS LOGOS SECTION-- -->
			<!-- -------------------------- -->

<!-- ---------- OVERVIEW ----------- -->
<?php if(get_field('overview_title') || get_field('overview_subtitle') || get_field('overview_introduction')) { echo '<section id="overview" class="sp-header-wrap bg-gray1 clearfix">
	<div class="grid-10 fl bg-white clearfix"> 
		<div class="sp-header-circle clearfix"></div>'; } ?> 

		<?php if(get_field('overview_line_element')) { echo '<div class="' . get_field('overview_line_element') . ' clearfix"></div>'; } ?>

		<?php if(get_field('overview_title') || get_field('overview_subtitle') || get_field('overview_introduction')) { echo '<div class="grid-page clearfix"> 
			<div class="grid-10 fl pb6 pt6 clearfix"> 
				<div class="grid-7b fr clearfix">'; } ?>

					<?php if(get_field('overview_title')) { echo '<div class="grid-10 fl clearfix"> 
						<h2 class="block-headline_alt mb0 pb2">' . get_field('overview_title') . '</h2>
					</div>'; } ?>

					<?php if(get_field('overview_subtitle')) { echo '<div class="grid-9 fl clearfix"> 
						<h4 class="block-subheadline mb0 light-purple">' . get_field('overview_subtitle') . '</h4>
					</div>'; } ?>

					<?php if(get_field('overview_introduction')) { echo '<div class="grid-8 fl clearfix"> 
						<div class="sp">' . get_field('overview_introduction') . '</div>
					</div>'; } ?> 

				<?php if(get_field('overview_title') || get_field('overview_subtitle') || get_field('overview_introduction')) { echo '</div> 
			</div>
		</div>  
	</div>
</section>'; } ?>

<!-- ---------- STATEMENT ----------- -->
<?php if(get_field('statement_headline') || get_field('statement_subheadline')) { echo '<section id="statement" class="grid-10 fl vortex pt10 pb6 '; } ?>
	<?php if(get_field('statement_background_color')) { echo '' . get_field('statement_background_color') . ''; } ?> 
	<?php if(get_field('statement_headline') || get_field('statement_subheadline')) { echo ' clearfix" '; } ?> 
	<?php if(get_field('statement_background_image')) { echo 'style="background-image:url(' . get_field('statement_background_image') . ');"'; } ?>
	<?php if(get_field('statement_headline') || get_field('statement_subheadline')) { echo '>'; } ?>

	<?php if(get_field('statement_background_image_overlay')) { echo '<div class="color-overlay-exact ' . get_field('statement_background_image_overlay') . ' opacity50"></div>'; } ?>

	<?php if(get_field('statement_headline') || get_field('statement_subheadline')) { echo '<div class="grid-page mauto clearfix">
		<div class="grid-page mauto clearfix">'; } ?>
			<?php if(get_field('statement_headline')) { echo '<h2 class="block-headline_alt mb0 pb2 tac ' . get_field('statement_headline_color') . '">' . get_field('statement_headline') . '</h2>'; } ?>
			<?php if(get_field('statement_subheadline')) { echo '<p class="sp tac ' . get_field('statement_subheadline_color') . '">' . get_field('statement_subheadline') . '</p>'; } ?>
			
			<!-- start repeater-list --> 
			<?php if( have_rows('statement_button') ): $pr = 0;
			echo '<p class="mb10 mt20 tac">';
			// loop through the rows of data
			while ( have_rows('statement_button') ) : the_row(); ?> 
			<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="down-link'; } ?> <?php if(get_sub_field('text_color')) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('arrow_color')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
			<?php if(get_sub_field('target_blank') == true) { echo 'target="_blank"'; } ?> 
			<?php if(get_sub_field('link')) { echo '>'; } ?>
			<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
			<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
			<?php endwhile; echo '</p>'; endif; ?>  

		<?php if(get_field('statement_headline') || get_field('statement_subheadline')) { echo '</div>
	</div>
</section>'; } ?>  
  
			<!-- --------------------------- -->
			<!-- START AWARDS SLIDER SECTION --> 
			<!-- --------------------------- -->
			<?php if(get_field('pr_awards_slider')) { echo '<section id="awards" class="grid-10 bg-white fl ppt1 ppb1 clearfix">'; } ?>

				<?php if(get_field('pr_awards_slider_title')) { echo '<div class="grid-page mauto clearfix"><h2 class="block-headline_alt mb0 pb2 light dark-purple tac mb0 ' . get_field('pr_awards_slider_title_color') . '">' . get_field('pr_awards_slider_title') . '</h3></div>'; } ?> 
				 
				<?php if(get_field('pr_awards_slider')) { echo '<div class="grid-10 fl pt2 pb2 clearfix">
					<!-- START SWIPER -->
				<div class="swiper-container swiper3">
					<div class="swiper-wrapper">'; } ?>
							<!-- Swiper JS -->
							<?php

							// check if the flexible content field has rows of data
							if( have_rows('pr_awards_slider') ):

								// loop through the rows of data
								while ( have_rows('pr_awards_slider') ) : the_row();

									// check current row layout
									if( get_row_layout() == 'pr_awards_slides' ):

										// check if the nested repeater field has rows of data
										if( have_rows('pr_awards_slide') ): 

											// loop through the rows of data
											while ( have_rows('pr_awards_slide') ) : the_row(); ?>

											<div class="swiper-slide"><div class="grid-page mt20 mb20 clearfix">
													<?php $image = get_sub_field('photo'); ?>
													<?php if( get_sub_field('photo') ) { echo '<div class="grid-3 fl pr-awards-img clearfix" style="background-image:url('; } ?><?php echo $image['url']; ?><?php if( get_sub_field('photo') ) { echo ');"></div>'; } ?>
													<?php if(get_sub_field('title') || get_sub_field('description')) { echo '<div class="grid-6b fr clearfix">'; } ?>
														<?php if( get_sub_field('title') ) { echo '<h3 class="block-subheadline_alt fl tal mt0 mb0 light-purple">'; } ?><?php the_sub_field('title'); ?><?php if( get_sub_field('title') ) { echo '</h3>'; } ?>
														<?php if( get_sub_field('description') ) { echo '<div class="grid-10 fl tal pt1 pb1 clearfix">'; } ?><?php the_sub_field('description'); ?><?php if( get_sub_field('description') ) { echo '</div>'; } ?>
													<?php if(get_sub_field('title') || get_sub_field('description')) { echo '</div>'; } ?>
											</div></div>
											<?php endwhile; 
										endif; 
									endif; 
								endwhile; 
							else : 
								// no layouts found 
							endif; 
							?>
							<!-- END SWIPER -->
					<?php if(get_field('pr_awards_slider')) { echo '</div> <!-- END swiper-wrapper -->
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
					<!-- Add Pagination -->
					<div class="swiper-button-next swiper-button-purple"></div>
					<div class="swiper-button-prev swiper-button-purple"></div> 
				</div>
				<!-- END SWIPER swiper-container -->
				</div>
				<!-- end grid-10 -->	
			</section>'; } ?>
			<!-- ------------------------- -->
			<!-- END AWARDS SLIDER SECTION --> 
			<!-- ------------------------- --> 

			<!-- ------------------------- -->
			<!-- START COMPANIES SECTION-- --> 
			<!-- ------------------------- --> 
<?php if(get_field('expertise_scenarios_headline') || get_field('expertise_scenarios_subheadline') || get_field('expertise_scenarios_accordian')) { echo '<section id="companies" class="sp-header-wrap ' . get_field('expertise_scenarios_background_color') . ' clearfix"><div class="grid-10 bg-double-sashes pb5 pt5 clearfix">'; } ?>
	
	<?php if(get_field('expertise_scenarios_headline') || get_field('expertise_scenarios_subheadline')) { echo '<div class="grid-10 fl clearfix"><div class="grid-page clearfix"><div class="grid-7 fl clearfix">'; } ?>
			<?php if(get_field('expertise_scenarios_headline')) { echo '<h2 class="block-headline_alt mb0 pb2 ' . get_field('expertise_scenarios_headline_text_color') . '">' . get_field('expertise_scenarios_headline') . '</h3>'; } ?>
			<?php if(get_field('expertise_scenarios_subheadline')) { echo '<p class="sp ' . get_field('expertise_scenarios_subheadline_text_color') . '">' . get_field('expertise_scenarios_subheadline') . '</p>'; } ?>
	<?php if(get_field('expertise_scenarios_headline') || get_field('expertise_scenarios_subheadline')) { echo '</div></div></div>'; } ?>
								   
			<!-- start repeater-list --> 
			<?php if( have_rows('expertise_scenarios_accordian') ):
			echo '<div class="grid-10 fl pt7 pb7 clearfix"><div class="grid-page clearfix">';
			// loop through the rows of data
			$counts = 0; while ( have_rows('expertise_scenarios_accordian') ) : the_row(); $counts++; ?>  
					
					<?php if(get_sub_field('photo')) { echo '<div class="sp-tab-pic sp-'; }?><?php echo $counts ?><?php if(get_sub_field('photo')) { echo ' clearfix" style="background-image:url(' . get_sub_field('photo') . ');"></div>'; }?>

			<?php endwhile; echo ''; endif; ?> 
			<!-- end repeater-list --> 

			   
			<!-- start repeater-list --> 
			<?php if( have_rows('expertise_scenarios_accordian') ):
			echo '<div class="grid-5 fl clearfix">';
			// loop through the rows of data
			$counts = 0; while ( have_rows('expertise_scenarios_accordian') ) : the_row(); $counts++; ?>
					<?php if(get_sub_field('title') || get_sub_field('description')) { echo ''; }?> 
						<div id="sp-tab<?php echo $counts ?>" class="sp-tab sp-<?php echo $counts ?> bt-white <?php if($counts == 1){echo ' active';} ?> clearfix"> 
							<?php if(get_sub_field('title')) { echo '<h4 class="sp ' . get_sub_field('title_text_color') . '">' . get_sub_field('title') . ' <span class="cross"></span></h4>'; }?>
							<?php if(get_sub_field('description')) { echo '<p class="sp ' . get_sub_field('description_text_color') . '">' . get_sub_field('description') . '</p>'; }?>
						</div>
					<?php if(get_sub_field('title') || get_sub_field('description')) { echo ''; }?>

					
				 
			<?php endwhile; echo '</div></div></div>'; endif; ?> 
			<!-- end repeater-list --> 

	<?php if(get_field('expertise_scenarios_accordian') || get_field('expertise_scenarios_subheadline') || get_field('expertise_scenarios_accordian')) { echo '</div></section>'; } ?> 
			<!-- ------------------------- -->
			<!-- END COMPANIES SECTION---- --> 
			<!-- ------------------------- -->   


			<!-- ----------------------------------------------- -->
			<!-- -----START Expertise PR Case Study SECTION----- -->
			<!-- ----------------------------------------------- -->
			<?php if(get_field('expertise_pr_cs_headline') || get_field('expertise_pr_cs_subheadline') || get_field('expertise_pr_cs_section_label') || get_field('expertise_pr_cs_steps')) { echo '<section id="case-studies" class="sp-header-wrap fl pb5 pt5 ' . get_field('expertise_pr_cs_background_color') . ' clearfix">
				<div class="grid-page mauto wrapper-barrier ' . get_field('expertise_pr_cs_background_color') . ' clearfix">
					<div class="grid-10 fl pb0 ex-pr-cs-list clearfix">'; } ?>

						<?php if(get_field('expertise_pr_cs_headline') || get_field('expertise_pr_cs_subheadline') || get_field('expertise_pr_cs_section_label')) { echo '
						<div class="grid-10 fl clearfix">    
							<div class="grid-page clearfix">   
								<div class="grid-7 fl pb4 clearfix">
						'; } ?>
									<?php if(get_field('expertise_pr_cs_section_label')) { echo '<p class="sp-small ' . get_field('expertise_pr_cs_section_label_text_color') . ' clearix">' . get_field('expertise_pr_cs_section_label') . '</p>'; } ?> 
									<?php if(get_field('expertise_pr_cs_headline')) { echo '<h2 class="block-headline_alt mb0 pb2 ' . get_field('expertise_pr_cs_headline_text_color') . ' clearix">' . get_field('expertise_pr_cs_headline') . '</h2> '; } ?> 
									<?php if(get_field('expertise_pr_cs_subheadline')) { echo '<p class="sp ' . get_field('expertise_pr_cs_subheadline_text_color') . ' clearix">' . get_field('expertise_pr_cs_subheadline') . '</p> '; } ?> 

						<?php if(get_field('expertise_pr_cs_headline') || get_field('expertise_pr_cs_subheadline') || get_field('expertise_pr_cs_section_label')) { echo '
								</div>
							</div>
						</div>
						'; } ?>

						<!-- start repeater-list --> 
						<?php if( have_rows('expertise_pr_cs_steps') ):
						echo ' ';
						// loop through the rows of data
						$countp = 0; while ( have_rows('expertise_pr_cs_steps') ) : the_row(); $countp++; ?> 
						<div class="grid-10 fl pt5 pb5 bg-null-<?php echo $countp ?> clearfix">
						<?php if(get_sub_field('photo')) { echo '<div class="grid-4b mb30'; }?>
								<?php if(get_sub_field('photo_position_right') == true) { echo 'fr'; } else { echo 'fl'; }?>
								<?php if(get_sub_field('photo')) { echo 'clearfix">'; } ?> 

										<?php if(get_sub_field('photo')) { echo '<div class="color-overlay ' . get_field('expertise_pr_cs_background_color') . ''; } ?> 
											<?php if(get_sub_field('photo_position_right') == true) { echo 'slide-left'; } else { echo 'slide-right'; }?>
										<?php if(get_sub_field('photo')) { echo 'z11" style="display:none;"></div>'; } ?>

										<?php $image = get_sub_field('photo');
										if( !empty( $image ) ): ?>
											<img class="responsive-img z1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>

										<?php if(get_sub_field('photo_color_filter')) { echo '<div class="color-overlay-exact z2 opacity50 ' . get_sub_field('photo_color_filter') . '"></div>'; }?> 
							
										<?php $image = get_sub_field('client_logo'); ?>
										<?php if( get_sub_field('client_logo') ) { echo '<div class="expertise-pr-cs-logo '; } ?><?php if(get_field('expertise_pr_cs_background_color')) { echo '' . get_field('expertise_pr_cs_background_color') . ''; } ?><?php if( get_sub_field('client_logo') ) { echo ' clearfix">'; } ?>
							
							
										<?php if(get_sub_field('client_logo_width')) { echo '<div class="' . get_sub_field('client_logo_width') . ' mauto clearfix">'; } ?>
										<?php if( get_sub_field('client_logo') ) { echo '<img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('client_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('client_logo') ) { echo '" border="0"/>'; } ?>
										<?php if(get_sub_field('client_logo_width')) { echo '</div>'; } ?>
										<?php if( get_sub_field('client_logo') ) { echo '</div>'; } ?>

						<?php if(get_sub_field('photo')) { echo '</div>'; } ?> 

						<?php if(get_sub_field('headline') || get_sub_field('description') || get_sub_field('client_logo')) { echo '<div class="grid-5b fl clearfix"><div class="grid-page-mod mauto clearfix">'; } ?>

							<?php if(get_sub_field('headline')) { echo '<h3 class="block-subheadline_alt mt0 mb0 pb2 ' . get_sub_field('headline_text_color') . '">' . get_sub_field('headline') . '</h3>'; } ?>
							<?php if(get_sub_field('description')) { echo '<div class="sp ' . get_sub_field('description_text_color') . '">' . get_sub_field('description') . '</div>'; } ?>
							
							<!-- start repeater-list --> 
							<?php if( have_rows('buttons') ): $pr = 0;
							echo '<div class="grid-10 fl mb50">';
							// loop through the rows of data
							while ( have_rows('buttons') ) : the_row(); ?> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="fl right-link'; } ?> <?php if(get_sub_field('text_color')) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('arrow_color')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
								<?php if(get_sub_field('target_blank') == true) { echo 'target="_blank"'; } ?> 
								<?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
								<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
							<?php endwhile; echo '</div>'; endif; ?> 
							
						<?php if(get_sub_field('headline') || get_sub_field('description') || get_sub_field('client_logo')) { echo '</div></div>'; } ?>
						<div class="grid-10 fl slant pt5 clearfix"><img class="responsive-img" src="https://channelvmedia.com/wp-content/uploads/2021/05/divider-slant-blue.svg" alt="Slanted Divider Line"></div>
						</div> 
						<?php endwhile; echo ''; endif; ?> 
						<!-- end repeater-list --> 

			<?php if(get_field('expertise_pr_cs_headline') || get_field('expertise_pr_cs_subheadline') || get_field('expertise_pr_cs_section_label') || get_field('expertise_pr_cs_steps')) { echo '</section>'; } ?>
			<!-- ---------------------------------------------- -->
			<!-- -----END Expertise PR Case Study SECTION------ -->  
			<!-- ---------------------------------------------- -->


			<!-- --------------------------------- -->
			<!-- START CASE STUDIES SLIDER SECTION --> 
			<!-- --------------------------------- -->
			<?php if(get_field('pr_cs_study_slider')) { echo '<section id="case-studies-slider" class="grid-10 bg-gray2 fl ppt1 ppb1 clearfix">'; } ?>

				<?php if(get_field('pr_cs_study_slider_title')) { echo '<div class="grid-page mauto clearfix"><h2 class="block-headline_alt mb0 mt0 pb2 light dark-purple tac ' . get_field('pr_cs_study_slider_title_color') . '">' . get_field('pr_cs_study_slider_title') . '</h2></div>'; } ?>
				 
				<?php if(get_field('pr_cs_study_slider')) { echo '<div class="grid-10 fl pt2 pb2 clearfix">
					<!-- START SWIPER -->
				<div class="swiper-container swiper2">
					<div class="swiper-wrapper">'; } ?>
							<!-- Swiper JS -->
							<?php

							// check if the flexible content field has rows of data
							if( have_rows('pr_cs_study_slider') ):

								// loop through the rows of data
								while ( have_rows('pr_cs_study_slider') ) : the_row();

									// check current row layout
									if( get_row_layout() == 'pr_cs_study_slides' ):

										// check if the nested repeater field has rows of data
										if( have_rows('pr_cs_study_slide') ): 

											// loop through the rows of data
											while ( have_rows('pr_cs_study_slide') ) : the_row(); ?>

											<div class="swiper-slide"><div class="grid-page mt20 mb20 clearfix">
													<?php $image = get_sub_field('photo'); ?>
													<?php if( get_sub_field('photo') ) { echo '<div class="grid-4b fl mb30 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('photo') ) { echo '" border="0"/></div>'; } ?>
													<?php if(get_sub_field('title') || get_sub_field('description')) { echo '<div class="grid-5 fr clearfix">'; } ?>
														<?php $image = get_sub_field('client_logo'); ?>
												  
														<?php if( get_sub_field('client_logo') ) { echo '<div class="grid-10 fl pb2 clearfix">'; } ?>
														<?php if(get_sub_field('client_logo_width')) { echo '<div class="' . get_sub_field('client_logo_width') . ' clearfix">'; } ?>
														<?php if( get_sub_field('client_logo') ) { echo '<img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('client_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('client_logo') ) { echo '" border="0"/>'; } ?>
														<?php if(get_sub_field('client_logo_width')) { echo '</div>'; } ?>
														<?php if( get_sub_field('client_logo') ) { echo '</div>'; } ?>
												
														<?php if( get_sub_field('title') ) { echo '<h3 class="block-subheadline_alt mb0 mt0 pb2 fl tal light-purple">'; } ?><?php the_sub_field('title'); ?><?php if( get_sub_field('title') ) { echo '</p>'; } ?>
														<?php if( get_sub_field('description') ) { echo '<div class="grid-10 fl tal pt1 clearfix">'; } ?><?php the_sub_field('description'); ?><?php if( get_sub_field('description') ) { echo '</div>'; } ?>
												
														<!-- start repeater-list --> 
														<?php if( have_rows('buttons') ): $pr = 0;
														echo '<div class="grid-10 fl mb50">';
														// loop through the rows of data
														while ( have_rows('buttons') ) : the_row(); ?> 
															<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="fl right-link'; } ?> <?php if(get_sub_field('text_color')) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('arrow_color')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
															<?php if(get_sub_field('target_blank') == true) { echo 'target="_blank"'; } ?> 
															<?php if(get_sub_field('link')) { echo '>'; } ?>
															<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
															<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
														<?php endwhile; echo '</div>'; endif; ?> 
												
													<?php if(get_sub_field('title') || get_sub_field('description')) { echo '</div>'; } ?>
											</div></div>
											<?php endwhile; 
										endif; 
									endif; 
								endwhile; 
							else : 
								// no layouts found 
							endif; 
							?>
							<!-- END SWIPER -->
					<?php if(get_field('pr_cs_study_slider')) { echo '</div> <!-- END swiper-wrapper -->
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
					<!-- Add Pagination -->
					<div class="swiper-button-next swiper-button-purple"></div>
					<div class="swiper-button-prev swiper-button-purple"></div> 
				</div>
				<!-- END SWIPER swiper-container -->
				</div>
				<!-- end grid-10 -->	
			</section>'; } ?>
			<!-- ------------------------------- -->
			<!-- END CASE STUDIES SLIDER SECTION --> 
			<!-- ------------------------------- -->  

			<!-- ------------------------- -->
			<!-- -START FORM ONE SECTION-- --> 
			<!-- ------------------------- -->  
			<?php if(get_field('expertise_form_headline') || get_field('expertise_form_subheadline') || get_field('expertise_form')) { echo '<section id="get-started" class="grid-10 fl pt5 pb5 ' . get_field('expertise_form_background_color') . ' clearfix">
				<div class="grid-page clearfix">'; } ?>

					<?php if(get_field('expertise_form_headline') || get_field('expertise_form_subheadline')) { echo '<div class="grid-3b fl clearfix">'; } ?>
						<?php if(get_field('expertise_form_headline')) { echo '<h2 class="block-headline_alt mb0 mt0 pb2 white light">' . get_field('expertise_form_headline') . '</h2>'; } ?>
						<?php if(get_field('expertise_form_subheadline')) { echo '<p class="sp gray2">' . get_field('expertise_form_subheadline') . '</p>'; } ?>
					<?php if(get_field('expertise_form_headline') || get_field('expertise_form_subheadline')) { echo '</div>'; } ?>

					<?php if(get_field('expertise_form')) { echo '<div class="grid-6 fr clearfix">'; } ?>
						<?php if(get_field('expertise_form')) { echo '' . get_field('expertise_form') . ''; } ?>  

						<!-- start repeater-list --> 
						<?php if( have_rows('expertise_form_data_qa') ):
						echo ' ';
						// loop through the rows of data
						$countq = 0; while ( have_rows('expertise_form_data_qa') ) : the_row(); $countq++; ?> 
						<div class="grid-10 fl clearfix">
							<?php if(get_sub_field('question')) { echo '<p class="sp-small-text form-disclaimer-2 ' . get_sub_field('question_text_color') . '">' . get_sub_field('question') . '</p>'; }?> 
							<?php if(get_sub_field('answer')) { echo '<div id="form-disclaimer-2" class="sp-small-text ' . get_sub_field('answer_text_color') . '">' . get_sub_field('answer') . '</div>'; }?>  
						</div>
						<?php endwhile; echo ''; endif; ?> 
						<!-- end repeater-list -->

					<?php if(get_field('expertise_form')) { echo '</div> '; } ?>

			<?php if(get_field('expertise_form_headline') || get_field('expertise_form_subheadline') || get_field('expertise_form')) { echo '</div></section>'; } ?>
			<!-- ------------------------- -->
			<!-- -END FORM ONE SECTION---- --> 
			<!-- ------------------------- -->   

			<!-- ------------------------- -->
			<!-- START QUOTE ONE SECTION-- --> 
			<!-- ------------------------- -->  
			<?php if(get_field('quote_one_quote')) { echo '<section id="quote1" class="grid-10 fl'; } ?>
				<?php if(get_field('quote_one_quote')) { echo '' . get_field('quote_one_background_color') . ''; } ?>
				<?php if(get_field('quote_one_quote')) { echo ' clearfix"><div class="blockquote-wrapper">
				  <div class="blockquote">'; } ?>
					<?php if(get_field('quote_one_quote')) { echo '<span class="quote"><span>' . get_field('quote_one_quote') . '</span></span>'; } ?> 

					<?php if(get_field('quote_one_logo')) { echo '<span class="citation">'; } ?>
					<?php $image = get_field('quote_one_logo'); ?>
					<?php if( get_field('quote_one_logo') ) { echo '<div class="'; } ?><?php if(get_field('quote_one_logo_width')) { echo '' . get_field('quote_one_logo_width') . ''; } ?><?php if( get_field('quote_one_logo') ) { echo ' pr-cs-logo-width pb1 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_field('quote_one_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_field('quote_one_logo') ) { echo '" border="0"/></div>'; } ?>
					<?php if(get_field('quote_one_logo')) { echo '</span>'; } ?>

					<?php if(get_field('quote_one_first_last_name') || get_field('quote_one_company') ) { echo '<span class="citation mt0 pt0">'; } ?>
					<?php if(get_field('quote_one_first_last_name')) { echo '&mdash; ' . get_field('quote_one_first_last_name') . ''; } ?><?php if(get_field('quote_one_job_title')) { echo ', ' . get_field('quote_one_job_title') . '<br/>'; } ?>
					<?php if(get_field('quote_one_company')) { echo '<em>' . get_field('quote_one_company') . '</em>'; } ?>
					<?php if(get_field('quote_one_first_last_name') || get_field('quote_one_company')) { echo '</span>'; } ?>

				  <?php if(get_field('quote_one_quote')) { echo '</div>
				</div>
			</section>'; } ?> 
			<!-- ------------------------- -->
			<!-- END QUOTE ONE SECTION---- --> 
			<!-- ------------------------- -->   

			<!-- ------------------------- -->
			<!-- START PRESS LOGOS SECTION --> 
			<!-- ------------------------- -->  
<?php if(get_field('pr_press_logos_title')) { echo '<section id="press-logos" class="grid-10 fl bg-dark-purple clearfix"> 
	<div class="color-overlay-exact bg-double-sashes-two"></div> 
	<div class="grid-page mauto pt6 pb10 clearfix">'; } ?>
		<?php if(get_field('pr_press_logos_title')) { echo '<div class="grid-2b fl clearfix"><h2 class="block-headline_alt mb0 pt2 pb2 light tal ' . get_field('pr_press_logos_title_color') . '">' . get_field('pr_press_logos_title') . '</h3></div>'; } ?>

		<?php if(get_field('pr_press_logos')): $i = 0; ?>
		<div class="grid-7 fr clearfix"><ul class="pr-expertise-press-logos fl clearfix">
			<?php while(has_sub_field('pr_press_logos')): $i++; ?>   
			<?php $image = get_sub_field('pr_press_logo'); ?>
			<?php if( get_sub_field('pr_press_logo') ) { echo '<li class="clearfix"><img src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('pr_press_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('pr_press_logo') ) { echo '" border="0"/></li>'; } ?>  
			<?php endwhile; ?>
			</ul></div>
		<?php endif; ?>  
	<?php if(get_field('pr_press_logos_title')) { echo '</div>  
</section>'; } ?>  
			<!-- ------------------------- -->
			<!-- END PRESS LOGOS SECTION-- --> 
			<!-- ------------------------- -->  

			<!-- ------------------------- -->
			<!-- START LOGOS SECTION / AS SEEN IN STRATEGIC PLANNING --> 
			<!-- ------------------------- -->  
<?php if(get_field('expertise_clients_headline') || get_field('expertise_clients_subheadline') || get_field('expertise_client_logos')) { echo '<section id="clients" class="grid-10 fl pb6 ' . get_field('expertise_clients_background_color') . ' clearfix">'; } ?>

	<?php if(get_field('expertise_clients_headline') || get_field('expertise_clients_subheadline')) { echo '<div class="grid-10 fl clearfix"><div class="grid-page clearfix"><div class="grid-7 fl pt2 clearfix">'; } ?>
		<?php if(get_field('expertise_clients_headline')) { echo '<h2 class="block-headline_alt mb0 mt0 pb2 ' . get_field('expertise_clients_headline_text_color') . '">' . get_field('expertise_clients_headline') . '</h2>'; } ?>
		<?php if(get_field('expertise_clients_subheadline')) { echo '<p class="sp ' . get_field('expertise_clients_subheadline_text_color') . '">' . get_field('expertise_clients_subheadline') . '</p>'; } ?>
	<?php if(get_field('expertise_clients_headline') || get_field('expertise_clients_subheadline')) { echo '</div></div></div>'; } ?> 
			   
			<!-- start repeater-list --> 
			<?php if( have_rows('expertise_client_logos') ):
			echo '<div class="grid-page clearfix">';
			// loop through the rows of data
			while ( have_rows('expertise_client_logos') ) : the_row(); ?>  

				<div class="square">
					<div class="content">
						<?php if(get_sub_field('description')) { echo '<a class="taphover">'; } ?>
							<div class="dtable">
								<div class="dtable-cell"> 
									<div class="project-logo">
										<div class="dtable">
											<?php if(get_sub_field('client_logo')) { echo '<div class="dtable-cell sq-logo" style="background-image:url(' . get_sub_field('client_logo') . ');'; } ?>
											<?php if(get_sub_field('client_logo_size')) { echo 'background-size:' . get_sub_field('client_logo_size') . ';'; } ?>
											<?php if(get_sub_field('client_logo')) { echo '"></div>'; } ?>  
 										</div>
									</div>
									<div class="project-hover"> 
										<div class="grid-page">
											<?php if(get_sub_field('description')) { echo '<p class="project-desc ' . get_sub_field('description_text_color') . '">' . get_sub_field('description') . '</p>'; } ?>
										</div>
									</div> 
									<div class="bar"></div>
								</div>
							</div>
						<?php if(get_sub_field('description')) { echo '</a>'; } ?>
					</div>		
				</div>  
				 
			<?php endwhile; echo '</div>'; endif; ?> 
			<!-- end repeater-list -->  

<?php if(get_field('expertise_clients_headline') || get_field('expertise_clients_subheadline') || get_field('expertise_client_logos')) { echo '</section>'; } ?>  
			<!-- ------------------------- -->
			<!-- END LOGOS SECTION / AS SEEN IN STRATEGIC PLANNING --> 
			<!-- ------------------------- -->  

			<!-- ------------------------- -->
			<!-- START QUOTE TWO SECTION-- --> 
			<!-- ------------------------- -->  
			<?php if(get_field('quote_two_quote')) { echo '<section id="quote2" class="grid-10 fl'; } ?>
				<?php if(get_field('quote_two_quote')) { echo '' . get_field('quote_two_background_color') . ''; } ?>
				<?php if(get_field('quote_two_quote')) { echo ' clearfix"><div class="blockquote-wrapper">
				  <div class="blockquote">'; } ?>
					<?php if(get_field('quote_two_quote')) { echo '<span class="quote"><span>' . get_field('quote_two_quote') . '</span></span>'; } ?>

					<?php if(get_field('quote_two_logo')) { echo '<span class="citation">'; } ?>
					<?php $image = get_field('quote_two_logo'); ?>
					<?php if( get_field('quote_two_logo') ) { echo '<div class="'; } ?><?php if(get_field('quote_two_logo_width')) { echo '' . get_field('quote_two_logo_width') . ''; } ?><?php if( get_field('quote_two_logo') ) { echo ' pr-cs-logo-width pb1 clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_field('quote_two_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_field('quote_two_logo') ) { echo '" border="0"/></div>'; } ?>
					<?php if(get_field('quote_two_logo')) { echo '</span>'; } ?>

					<?php if(get_field('quote_two_first_last_name') || get_field('quote_two_company') ) { echo '<span class="citation mt0 pt0">'; } ?>
					<?php if(get_field('quote_two_first_last_name')) { echo '&mdash; ' . get_field('quote_two_first_last_name') . ''; } ?><?php if(get_field('quote_two_job_title')) { echo ', ' . get_field('quote_two_job_title') . '<br/>'; } ?>
					<?php if(get_field('quote_two_company')) { echo '<em>' . get_field('quote_two_company') . '</em>'; } ?>
					<?php if(get_field('quote_two_first_last_name') || get_field('quote_two_company')) { echo '</span>'; } ?>

				  <?php if(get_field('quote_two_quote')) { echo '</div>
				</div>
			</section>'; } ?> 
			<!-- ------------------------- -->
			<!-- END QUOTE TWO SECTION---- --> 
			<!-- ------------------------- --> 
  
			<!-- --------------------------------- -->
			<!-- START CLIENT LOGOS SLIDER SECTION --> 
			<!-- --------------------------------- -->
			<?php if(get_field('slider_title')) { echo '<section id="clients" class="grid-10 purple-blue-left-to-right fl ppt1 ppb1 clearfix">
				<div class="grid-10 fl clearfix">'; } ?>
					<?php if(get_field('slider_title')) { echo '<h2 class="block-headline_alt mb0 mt0 light tac ' . get_field('slider_title_color') . '">' . get_field('slider_title') . '</h2>'; } ?>
 
					<!-- START SWIPER -->
				<?php if(get_field('slider_title')) { echo '<div class="swiper-container swiper1">
					<div class="swiper-wrapper">'; } ?>
							<!-- Swiper JS -->
							<?php

							// check if the flexible content field has rows of data
							if( have_rows('client_logos_slider') ):

								// loop through the rows of data
								while ( have_rows('client_logos_slider') ) : the_row();

									// check current row layout
									if( get_row_layout() == 'client_logos_slide' ):

										// check if the nested repeater field has rows of data
										if( have_rows('logo_slide') ):

											echo '<div class="swiper-slide"><ul class="recognition-logos cb mauto pt0 pb0 clearfix">';

											// loop through the rows of data
											while ( have_rows('logo_slide') ) : the_row(); ?>
												<?php $image = get_sub_field('logo'); ?>
												<?php if( get_sub_field('logo') ) { echo '<li class="clearfix"><div class="absolute-block"><div class="dtable clearfix"><div class="dtable-cell clearfix"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('logo') ) { echo '" border="0"/></div></div></div></li>'; } ?>						
											<?php endwhile;

											echo '</ul></div>';

										endif;

									endif;

								endwhile;

							else :

								// no layouts found

							endif;

							?>
							<!-- END SWIPER -->
					<?php if(get_field('slider_title')) { echo '</div> <!-- END swiper-wrapper -->
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
					<!-- Add Pagination -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div> 
				</div>
				<!-- END SWIPER swiper-container -->
				</div>
				<!-- end grid-wide -->	
			</section>'; } ?>
			<!-- ------------------------------- -->
			<!-- END CLIENT LOGOS SLIDER SECTION -->  
			<!-- ------------------------------- -->

			<!-- ------------------------- -->
			<!-- START WHOS IT FOR SECTION --> 
			<!-- ------------------------- -->
			<?php if(get_field('who_title') || get_field('who_subtitle') || get_field('who_introduction')) { echo '<section id="who" class="sp-header-wrap clearfix">
				<div class="sp-header-circle clearfix"></div>'; } ?>

					<?php if(get_field('who_line_element')) { echo '<div class="' . get_field('who_line_element') . ' clearfix"></div>'; } ?>

					<?php if(get_field('who_title') || get_field('who_subtitle') || get_field('who_introduction')) { echo '<div class="grid-page clearfix"> 
						<div class="grid-10 fl pb6 pt6 clearfix"> 
							<div class="grid-page mauto clearfix">'; } ?>

								<?php if(get_field('who_title') || get_field('who_subtitle') || get_field('who_introduction' )) { echo '<div class="grid-10 fl clearfix">'; } ?>
									<?php if(get_field('who_title')) { echo '<h2 class="block-headline_alt mb0 mt0 pb2">' . get_field('who_title') . '</h2>'; } ?>
									<?php if(get_field('who_subtitle')) { echo '<span class="block-subheadline light-purple">' . get_field('who_subtitle') . '</span>'; } ?>
									<?php if(get_field('who_introduction')) { echo '<div class="sp cb light-purple">' . get_field('who_introduction') . '</div>'; } ?> 
								<?php if(get_field('who_title') || get_field('who_subtitle') || get_field('who_introduction')) { echo '</div>'; } ?>

							<?php if(get_field('who_title') || get_field('who_subtitle') || get_field('who_introduction')) { echo '</div> 
						</div>
					</div> 
			</section>'; } ?>
			<!-- ------------------------- -->
			<!-- END WHOS IT FOR SECTION-- --> 
			<!-- ------------------------- --> 

			<!-- ------------------------- -->
			<!-- START FORM TWO SECTION--- --> 
			<!-- ------------------------- -->  
<?php if(get_field('expertise_form2_headline') || get_field('expertise_form2_subheadline') || get_field('expertise_form2')) { echo '<section id="get-started2" class="grid-10 fl pt5 pb5 ' . get_field('expertise_form2_background_color') . ' clearfix">
	<div class="grid-page clearfix">'; } ?>

		<?php if(get_field('expertise_form2_headline') || get_field('expertise_form2_subheadline')) { echo '<div class="grid-3b fl clearfix">'; } ?>
			<?php if(get_field('expertise_form2_headline')) { echo '<h2 class="block-headline_alt pt2 white light">' . get_field('expertise_form2_headline') . '</h3>'; } ?>
			<?php if(get_field('expertise_form2_subheadline')) { echo '<p class="sp gray2">' . get_field('expertise_form2_subheadline') . '</p>'; } ?>
		<?php if(get_field('expertise_form2_headline') || get_field('expertise_form2_subheadline')) { echo '</div>'; } ?>

		<?php if(get_field('expertise_form2')) { echo '<div class="grid-6 fr clearfix">'; } ?>
			<?php if(get_field('expertise_form2')) { echo '' . get_field('expertise_form2') . ''; } ?>  
			<!-- start repeater-list --> 
			<?php if( have_rows('expertise_form2_data_qa') ):
			echo '';
			// loop through the rows of data
			$countq = 0; while ( have_rows('expertise_form2_data_qa') ) : the_row(); $countq++; ?> 
			<div class="grid-10 fl clearfix">
				<?php if(get_sub_field('question')) { echo '<p class="sp-small-text form-disclaimer ' . get_sub_field('question_text_color') . '">' . get_sub_field('question') . '</p>'; }?> 
				<?php if(get_sub_field('answer')) { echo '<div id="form-disclaimer" class="sp-small-text ' . get_sub_field('answer_text_color') . '">' . get_sub_field('answer') . '</div>'; }?>  
			</div>
			<?php endwhile; echo ''; endif; ?> 
			<!-- end repeater-list -->

		<?php if(get_field('expertise_form2')) { echo '</div>'; } ?>

<?php if(get_field('expertise_form2_headline') || get_field('expertise_form2_subheadline') || get_field('expertise_form2')) { echo '</div></section>'; } ?>
			<!-- ------------------------- -->
			<!-- END FORM TWO SECTION----- --> 
			<!-- ------------------------- -->  

			<!-- ------------------------- -->
			<!-- START BLOG POSTS SECTION- --> 
			<!-- ------------------------- --> 
<?php if(get_field('related_blog_posts_section_title') || get_field('related_blog_posts_list')) { echo '<section id="posts" class="sp-header-wrap'; } ?>
	<?php if(get_field('related_blog_posts_bg_color') && get_field('related_blog_posts_section_title')) { echo '' . get_field('related_blog_posts_bg_color') . ''; } ?><?php if(get_field('related_blog_posts_section_title') || get_field(' related_blog_posts_list')) { echo ' clearfix">
	<div class="grid-page pb4 pt5 clearfix">'; } ?>
	
		<?php if(get_field('related_blog_posts_section_title')) { echo '<div class="grid-10 fl clearfix"><h2 class="block-headline_alt ">' . get_field('related_blog_posts_section_title') . '</h2></div>'; } ?> 
 
			<!-- start repeater-list --> 
			<?php if( have_rows('related_blog_posts_list') ):
			echo '<div class="grid-10 fl clearfix"><ul class="blog-posts ppb2 pmt2 clearfix">';
			// loop through the rows of data
			$countq = 0; while ( have_rows('related_blog_posts_list') ) : the_row(); $countq++; ?> 
			<li class="clearfix">
					<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" target="_blank">'; }?>
						<?php if(get_sub_field('photo')) { echo '<div class="post-image here"> 
							<div class="post-bg clearfix" style="background-image:url(' . get_sub_field('photo') . ');">
							<div class="color-overlay purple-pink-diagonal opacity40 "></div>
							</div></div>'; }?>
						<?php if(get_sub_field('title')) { echo '<div class="blog-content-wrap mauto clearfix"> 
							<h3 class="blog-headline pt1">' . get_sub_field('title') . '</h3> 
							<span class="blog-link fl pt1">Read More</span> 
						</div>'; }?>	 
					<?php if(get_sub_field('link')) { echo '</a>'; }?>	 
			</li>
			<?php endwhile; echo '</ul></div>'; endif; ?> 
			<!-- end repeater-list -->  

	<?php if(get_field('related_blog_posts_section_title') || get_field(' related_blog_posts_list')) { echo '</div> 
</section>'; } ?>
			<!-- ------------------------- -->
			<!-- END BLOG POSTS SECTION--- --> 
			<!-- ------------------------- --> 

    
<?php get_footer(); ?>