<?php
/**
 * The template part for displaying single case study posts
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
?>
<script type="text/javascript" src="/wp-content/themes/cvm2016/js/revealer-head.js"></script> 


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
	<div class="section grid-10 fl template-parts-content-case-study clearfix">  

		<div class="grid-10 fl case-study-height clearfix" style="background-image:url(
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				echo '' . $image[0] . ''; ?>
			<?php endif; ?>
);background-size:cover;background-position:center center;">
			
			<div class="background-overlay"></div>
			
			<div class="table">
				<div class="table-cell">
					<span class="story-t-cs"><?php the_title(); ?></span>
					
						<!-- start repeater-list --> 
						<?php if( have_rows('cs_button_text_links') ): $pr = 0;
						echo '<p class="mb10 mt20 down-arrow-container" style="margin-left:10px;">';
						// loop through the rows of data
						while ( have_rows('cs_button_text_links') ) : the_row(); ?> 
							<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="down-link'; } ?> <?php if(get_sub_field('text_color')) { echo '' . get_sub_field('text_color') . ''; } ?> <?php if(get_sub_field('arrow_color')) { echo '' . get_sub_field('arrow_color') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?>
							<?php if(get_sub_field('target_blank') == true) { echo 'target="_blank"'; } ?> 
							<?php if(get_sub_field('link')) { echo '>'; } ?>
							<?php if(get_sub_field('text')) { echo '' . get_sub_field('text') . ''; } ?> 
							<?php if(get_sub_field('link')) { echo '</a>'; } ?>  
						<?php endwhile; echo '</p>'; endif; ?>  
				</div>
			</div>
		</div>
		
	</div>
	<!-- End Hero -->

   	<!-- ---------- Case Study Title and Subtitle ---------- -->  
	<div id="title" class="section grid-10 fl bg-dark-purple clearfix">
		<?php if(get_field('section_bg_with_text')): $i = 0; ?> 
		<?php while(has_sub_field('section_bg_with_text')): $i++; ?> 
			<?php if( (get_sub_field('headline') == true) ){ echo '<div class="grid-page mauto ppb3 ppt3 clearfix"><div class="grid-10 fl animateslideinleft animated clearfix">'; } ?>
			<?php if( (get_sub_field('category_label') == true) ){ echo '<span class="cs-service-label fl">'; } ?>
				<?php the_sub_field('category_label'); ?>
			<?php if( (get_sub_field('category_label') == true) ){ echo '</span>'; } ?>
 
			<?php if( (get_sub_field('preheadline') == true) ){ echo '<h2 class="cs-preheadline seventy fl">'; } ?>
				<?php the_sub_field('preheadline'); ?>
			<?php if( (get_sub_field('preheadline') == true) ){ echo '</h2>'; } ?>
			<?php if( (get_sub_field('headline') == true) ){ echo '<h1 class="cs-heading fl">'; } ?> 
				<?php the_sub_field('headline'); ?>
			<?php if( (get_sub_field('headline') == true) ){ echo '</h1>'; } ?>  
			<?php if( (get_sub_field('subheadline') == true) ){ echo '<h2 class="cs-tagline seventy fl">'; } ?>
				<?php the_sub_field('subheadline'); ?>
			<?php if( (get_sub_field('subheadline') == true) ){ echo '</h2>'; } ?>
			<?php if( (get_sub_field('headline') == true) ){ echo '</div></div>'; } ?> 
		<?php endwhile; ?> 
		<?php endif; ?>  
	</div>

   	<!-- ---------- BACKGROUND ---------- -->
	<?php if((get_field('background_left_column') || get_field('background_right_column') || get_field('background_transition_photo'))) { echo '<div id="background" class="section grid-10 fl bg-white clearfix"><div class="grid-page mauto clearfix">'; } ?>
			<?php if(get_field('background_section_title')) { echo '<h2 class="story-title-cs tac">' . get_field('background_section_title') . '</h2>'; } ?> 
			<?php if(get_field('background_left_column')) { echo '<div class="grid-4b fl ppb4 clearfix">' . get_field('background_left_column') . '</div>'; } ?> 
			<?php if(get_field('background_right_column')) { echo '<div class="grid-4b fr ppb4 clearfix">' . get_field('background_right_column') . '</div>'; } ?>
				<?php if(get_field('background_transition_photo')) { echo '<div class="overhang"><img id="overhangimg" class="responsive-img animatefade animated'; } ?><?php if(get_field('transition_photo_dropshadow')) { echo ' ' . get_field('transition_photo_dropshadow') . ''; } ?>
			<?php if(get_field('background_transition_photo')) { echo '" src="' . get_field('background_transition_photo') . '" border="0" alt="Transition"/></div>'; } ?>
	 
	
	
	<?php if((get_field('background_left_column') || get_field('background_right_column') || get_field('background_transition_photo'))) { echo '</div></div>'; } ?>

   	<!-- ---------- CHALLENGES ---------- -->
	<?php if((get_field('challenges_list'))) { echo '<div id="challenges" class="section grid-10 fl challenges clearfix'; } ?>
	<?php if((get_field('background_transition_photo')) == true) { echo 'ppt10'; } ?>
	<?php if((get_field('challenges_list'))) { echo '"><div class="grid-page mauto clearfix">'; } ?>

			<?php if(get_field('challenges_section_title')) { echo '<h2 class="story-title-cs tac">' . get_field('challenges_section_title') . '</h2>'; } ?>
			
			<?php if(get_field('challenges_list')): $i = 0; ?>
			<ul class="challenges-list"> 
			<?php while(has_sub_field('challenges_list')): $i++; ?>
				<li>
					<div class="grid-page mauto clearfix">
						<?php if(get_sub_field('challenges_headline')) { echo '<h3 class="harriet white pmb0 pmt0">' . get_sub_field('challenges_headline') . '</h3>'; } ?>
						<?php if(get_sub_field('challenges_content')) { echo '<span class="white">' . get_sub_field('challenges_content') . '</span>'; } ?>
					</div>
				</li>
			<?php endwhile; ?>
			</ul> 
			<?php endif; ?>
	<?php if((get_field('challenges_list'))) { echo '</div></div>'; } ?>

   	<!-- ---------- QUOTE ---------- --> 
	<?php if((get_field('cs_quote_1') || get_field('cs_quote_logo_1'))) { echo '<div class="section grid-10 fl bg-purple clearfix"><div class="grid-page mauto ppb4 ppt4 animatepulse animated clearfix">'; } ?>
		<?php if(get_field('cs_quote_logo_1')) { echo '<img class="cs-quote-mark" src="/wp-content/uploads/2017/09/cs-quote-start-dark-purple.svg" alt="&#8220;" border="0"/>'; } ?>
		<?php if(get_field('cs_quote_1')) { echo '<div class="cs-quote">' . get_field('cs_quote_1') . '</div>'; } ?>
		<?php if(get_field('cs_quote_logo_1')) { echo '<img class="cs-quote-mark" src="/wp-content/uploads/2017/09/cs-quote-end-dark-purple.svg" alt="&#8221;" border="0"/>'; } ?>
		<?php if(get_field('cs_quote_logo_1')) { echo '<div class="cs-cite">&#8212; <img class="cs-logo" src="' . get_field('cs_quote_logo_1') . '" alt="logo" border="0"/></div>'; } ?>
	<?php if((get_field('cs_quote_1') || get_field('cs_quote_logo_1'))) { echo '</div></div>'; } ?>  

   	<!-- ---------- STRATEGY ---------- -->
	<?php if((get_field('strategy_list'))) { echo '<div id="strategy" class="section grid-10 fl bg-white clearfix">'; } ?>
		<?php if(get_field('strategy_section_title')) { echo '<div class="grid-page mauto clearfix"><h2 class="story-title-cs tac">' . get_field('strategy_section_title') . '</h2></div>'; } ?>


		<?php if(get_field('strategy_list')): $count = 0; ?>
		<ul class="strategy-list"> 
		<?php while(has_sub_field('strategy_list')): $count++; ?>
			<?php $classpoint = "animateslideinleft animated"; if( $count % 2 == 0 ){ $classpoint = "animateslideinright animated"; } ?> 
			<li class="grid-10 fl row-<?php echo $count.''; ?> ppt2 ppb2 <?php if((get_sub_field('strategy_section_background') == true) ){ echo 'white-ts'; } ?> clearfix" <?php if(get_sub_field('strategy_section_background')) { echo 'style="background-image:url(' . get_sub_field('strategy_section_background') . ');background-size:cover;background-position:center center;background-repeat:no-repeat;"'; } ?> >
				<div class="grid-page mauto clearfix">
					<div class="strategy-col fl <?php if((get_sub_field('strategy_indent') == true) ){ echo 'pml30'; } ?>">
						<div class="table-strategy">
							<div class="table-cell">
								<div class="grid-page mauto clearfix"> 
									<?php // check for rows (nested repeater)
									if( have_rows('strategy_item') ): $i = 0; ?>  
											<?php while( have_rows('strategy_item') ): $i++; the_row(); ?>
												<?php if(get_sub_field('strategy_headline')) { echo '<h3 class="harriet pmb0 pmt0 ' . $classpoint . '">' . get_sub_field('strategy_headline') . '</h3>'; } ?>
												<?php if(get_sub_field('strategy_content')) { echo '' . get_sub_field('strategy_content') . ''; } ?>  
											<?php endwhile; ?>
									<?php endif; ?>  
								</div>
							</div>
						</div>
					</div>
					<div class="strategy-col fl">
						<div class="table-strategy">
							<div class="table-cell">
								<div class="grid-page mauto clearfix">
									<?php // check for rows (nested repeater)
									if( have_rows('strategy_item_right') ): $i = 0; ?>  
										<?php while( have_rows('strategy_item_right') ): $i++; the_row(); ?>
 											<?php $image = get_sub_field('strategy_photo'); ?>
											<?php if(get_sub_field('strategy_photo')) { echo '<div class="cs-image-col'; } ?>
											<?php if((get_sub_field('strategy_photo_wide') == true) ){ echo 'cs-image-col-wide'; } ?> 
											<?php if((get_sub_field('strategy_photo_fr') == true) ){ echo 'fr'; } ?>  
											<?php if(get_sub_field('strategy_photo')) { echo 'fl clearfix"><img class="responsive-img fl'; } ?> <?php if(get_sub_field('strategy_add_shadow')) { echo ' ' . get_sub_field('strategy_add_shadow') . ''; } ?> <?php if((get_sub_field('strategy_photo_underline') == true) ){ echo 'bb-lt-purple'; } ?> <?php if((get_sub_field('strategy_offset') == true) ){ echo 'top120'; } ?>
											<?php if(get_sub_field('strategy_photo')) { echo '" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('strategy_photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('strategy_photo') ) { echo '" border="0"/>'; } ?>
											<?php if(get_sub_field('strategy_caption')) { echo '<div class="cs-caption">' . get_sub_field('strategy_caption') . '</div>'; } ?>
											<?php if(get_sub_field('strategy_photo')) { echo '</div>'; } ?>
										<?php endwhile; ?>
									<?php endif; ?>
									
									<?php if(get_sub_field('strategy_item_quote')) { echo '<img class="cs-quote-mark" src="/wp-content/uploads/2017/09/cs-quote-start-gray.svg" alt="&#8220;" border="0"/>'; } ?>
									<?php if(get_sub_field('strategy_item_quote')) { echo '<div class="cs-quote pink">' . get_sub_field('strategy_item_quote') . '</div>'; } ?> 
									<?php if(get_sub_field('strategy_item_quote')) { echo '<img class="cs-quote-mark" src="/wp-content/uploads/2017/09/cs-quote-end-gray.svg" alt="&#8221;" border="0"/>'; } ?>
									<?php if(get_sub_field('strategy_item_quote_logo')) { echo '<div class="cs-cite pink"><div class="table-strategy"><div class="table-cell">&#8212; <img class="cs-logo" src="' . get_sub_field('strategy_item_quote_logo') . '" alt="logo" border="0"/></div></div></div>'; } ?>  
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		<?php endwhile; ?>
		</ul> 
		<?php endif; ?>
	<?php if(( get_field('strategy_list'))) { echo '</div>'; } ?>

   	<!-- ---------- Slider ---------- -->
	<?php if((get_field('press_slider'))) { echo '<div id="press" class="section grid-10 fl bg-white clearfix">'; } ?> 
			
			<!-- Link Swiper's CSS -->
			<link rel="stylesheet" href="/wp-content/themes/cvm2016/css/swiper.min.css">
			<style>
				.swiper-button-next.swiper-button-disabled, .swiper-button-prev.swiper-button-disabled {opacity:0;filter:alpha(opacity=0);}
				.swiper-button-prev, .swiper-container-rtl .swiper-button-next {left:0px;}
				.swiper-button-next, .swiper-container-rtl .swiper-button-prev {right:0px;} 
				.swiper-container {height:300px;margin:20px auto 0;width:100%;}
				.swiper-slide {
					text-align: center;
					font-size: 18px;
					background: transparent;
					/* Center slide text vertically */
					display: -webkit-box;
					display: -ms-flexbox;
					display: -webkit-flex;
					display: flex;
					-webkit-box-pack: center;
					-ms-flex-pack: center;
					-webkit-justify-content: center;
					justify-content: center;
					-webkit-box-align: center;
					-ms-flex-align: center;
					-webkit-align-items: center;
					align-items: center;
				}
				.swiper-pagination {display:none;}
				.swiper-pagination-bullet {
					background: #000 none repeat scroll 0 0;
					border-radius: 0;
					display: inline-block;
					height: 3px;
					opacity: 0.2;
					width: 20px;
				}
				.swiper-pagination-bullet-active {
					background: #cc2c9c none repeat scroll 0 0;
					opacity: 1;
				}
				.swiper-pagination-bullet:hover {
					background: #292560 none repeat scroll 0 0;
					opacity: 1;
				}
				@media screen and (max-width: 767px) { 
					.swiper-container {height:200px !important;}
				} 
			</style>
			<!-- Swiper --> 
			<?php if(get_field('press_slider')): $count = 0; ?>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php while(has_sub_field('press_slider')): $count++; ?>
						<?php if(get_sub_field('press_photo')) { echo '<div class="swiper-slide" style="background-image:url(' . get_sub_field('press_photo') . ');background-size:contain;background-position:center bottom;background-repeat:no-repeat;"></div>'; } ?> 
					<?php endwhile; ?> 
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
				<!-- Add Navigation -->
				<div class="swiper-button-prev swiper-button-black"></div>
				<div class="swiper-button-next swiper-button-black"></div>
			</div> <!-- end swiper-container --> 
			<?php endif; ?>

			<!-- Swiper JS -->
			<script src="/wp-content/themes/cvm2016/js/swiper.min.js"></script>

			<!-- Initialize Swiper --> 
			<script> 
				if (matchMedia('only screen and (max-width: 20000px)').matches) { 
					var swiper = new Swiper('.swiper-container', {
						pagination: '.swiper-pagination',
						slidesPerView: 5,
						paginationClickable: true,
						spaceBetween: 0,
						freeMode: true,
						paginationType: 'bullets',
						nextButton: '.swiper-button-next',
						prevButton: '.swiper-button-prev' 
					});
				}
				if (matchMedia('only screen and (max-width: 1520px)').matches) {
					var swiper = new Swiper('.swiper-container', {
						pagination: '.swiper-pagination',
						slidesPerView: 4,
						paginationClickable: true,
						spaceBetween: 0,
						freeMode: true,
						paginationType: 'bullets',
						nextButton: '.swiper-button-next',
						prevButton: '.swiper-button-prev' 
					});
				}
				if (matchMedia('only screen and (max-width: 1210px)').matches) {
					var swiper = new Swiper('.swiper-container', {
						pagination: '.swiper-pagination',
						slidesPerView: 3,
						paginationClickable: true,
						spaceBetween: 0,
						freeMode: true,
						paginationType: 'bullets',
						nextButton: '.swiper-button-next',
						prevButton: '.swiper-button-prev' 
					});
				}
				if (matchMedia('only screen and (max-width: 910px)').matches) {
					var swiper = new Swiper('.swiper-container', {
						pagination: '.swiper-pagination',
						slidesPerView: 2,
						paginationClickable: true,
						spaceBetween: 0,
						freeMode: true,
						paginationType: 'bullets',
						nextButton: '.swiper-button-next',
						prevButton: '.swiper-button-prev' 
					});
				}
			// 1520 = 4				
			// 1210 = 3
			// 910 = 2 
			</script>
		
	<?php if((get_field('press_slider'))) { echo '</div>'; } ?>

   	<!-- ---------- DELIVERABLES ---------- -->
	<?php if((get_field('deliverables_section_title') || get_field('deliverables_section_headline') || get_field('deliverables_list'))) { echo '<div class="section grid-10 fl bg-purple clearfix">'; } ?>

		<!-- Start Full Width Photo -->
		<?php if(get_field('deliverables_opening_photo')) { echo '<div class="grid-10 fl clearfix"><img id="deliverablesimg" class="responsive-img" src="' . get_field('deliverables_opening_photo') . '" alt="Deliverables" border="0"/></div>'; } ?>
		<!-- End Full Width Photo --> 

		<?php if((get_field('deliverables_section_title') || get_field('deliverables_section_headline'))) { echo '<div class="grid-page mauto clearfix">'; } ?>
			<?php if(get_field('deliverables_section_title')) { echo '<h2 class="story-title-cs tac pink">' . get_field('deliverables_section_title') . '</h2>'; } ?> 
			<?php if(get_field('deliverables_section_headline')) { echo '<span class="cs-description">' . get_field('deliverables_section_headline') . '</span>'; } ?> 		
		<?php if((get_field('deliverables_section_title') || get_field('deliverables_section_headline'))) { echo '</div>'; } ?>
		
		<!-- Start HIGHLIGHTS -->
		<?php if(get_field('deliverables_highlight_points')): $i = 0; ?>  
		<div class="grid-10 fl clearfix"> 
			<div class="grid-page clearfix"> 
				<table class="highlight-list clearfix"><tr>
				<?php while(has_sub_field('deliverables_highlight_points')): $i++; ?>
				<?php $class = "animateslideinleft animated"; if( $i % 2 == 0 ){ $class = "animateslideinright animated"; } ?> 
					<td class="clearfix">
					<?php if( (get_sub_field('large_number') == true) ){ echo '<div class="cs-large-number clearfix'; } ?>
						<?php echo $class; ?>
					<?php if( (get_sub_field('large_number') == true) ){ echo '">'; } ?>
						<?php the_sub_field('large_number'); ?>
					<?php if( (get_sub_field('large_number') == true) ){ echo '</div>'; } ?>

					<?php if( (get_sub_field('point_content') == true) ){ echo '<div class="grid-10 fl clearfix">'; } ?> 
						<?php the_sub_field('point_content'); ?>
					<?php if( (get_sub_field('point_content') == true) ){ echo '</div>'; } ?> 
					</td>
				<?php endwhile; ?>
				</tr></table>					
			</div>
		</div>
		<?php endif; ?>
		<!-- End HIGHLIGHTS -->
		
		<!-- Start Full Width Photo -->
		<?php if(get_field('deliverables_full_width_photo')) { echo '<div class="grid-10 fl clearfix"><img id="deliverablesimg2" class="responsive-img" src="' . get_field('deliverables_full_width_photo') . '" alt="Deliverables" border="0"/></div>'; } ?>
		<!-- End Full Width Photo --> 
		
		<!-- Start List Items -->
		<?php if(get_field('deliverables_list')): $i = 0; ?>  
		<div class="grid-10 fl clearfix"> 
			<div class="grid-page clearfix"> 
				<table class="deliverables-list clearfix"><tr>
				<?php while(has_sub_field('deliverables_list')): $i++; ?>
					<td class="clearfix">
					<?php if( (get_sub_field('deliverables_list_item') == true) ){ echo '<div class="deliverables-list-item clearfix">'; } ?> 
						<?php the_sub_field('deliverables_list_item'); ?>
					<?php if( (get_sub_field('deliverables_list_item') == true) ){ echo '</div>'; } ?> 
					</td>
				<?php endwhile; ?>
				</tr></table>					
			</div>
		</div>
		<?php endif; ?>
		<!-- End List Items -->

		<!-- Start Full Width Photo -->
		<?php if(get_field('deliverables_closing_photo')) { echo '<div class="grid-10 fl clearfix"><div class="grid-page mauto clearfix"><img class="responsive-img" src="' . get_field('deliverables_closing_photo') . '" alt="Deliverables" border="0"/></div></div> '; } ?>
		<!-- End Full Width Photo -->		

	<?php if((get_field('deliverables_section_title') || get_field('deliverables_section_headline') || get_field('deliverables_list'))) { echo '</div>'; } ?>
   	<!-- ---------- End DELIVERABLES ---------- -->  

   	<!-- ---------- RESULTS ---------- -->
	<?php if((get_field('results_section_title') || get_field('results_section_headline') || get_field('results_list'))) { echo '<div id="results" class="section grid-10 fl bg-dark-purple clearfix">'; } ?>

		<!-- Start Full Width Photo -->
		<?php if(get_field('results_opening_photo')) { echo '<div class="grid-10 fl clearfix"><img id="resultsimg" class="responsive-img" src="' . get_field('results_opening_photo') . '" alt="Results" border="0"/></div>'; } ?>
		<!-- End Full Width Photo --> 

		<?php if((get_field('results_section_title') || get_field('results_section_headline'))) { echo '<div class="grid-page mauto clearfix">'; } ?>
			<?php if(get_field('results_section_title')) { echo '<h2 class="story-title-cs tac pink">' . get_field('results_section_title') . '</h2>'; } ?> 
			<?php if(get_field('results_section_headline')) { echo '<span class="cs-description">' . get_field('results_section_headline') . '</span>'; } ?> 		
		<?php if((get_field('results_section_title') || get_field('results_section_headline'))) { echo '</div>'; } ?>
		
		<!-- Start HIGHLIGHTS -->
		<?php if(get_field('highlight_points')): $i = 0; ?>  
		<div class="grid-10 fl clearfix"> 
			<div class="grid-page clearfix"> 
				<table class="highlight-list clearfix"><tr>
				<?php while(has_sub_field('highlight_points')): $i++; ?>
				<?php $class = "animateslideinleft animated"; if( $i % 2 == 0 ){ $class = "animateslideinright animated"; } ?> 
					<td class="clearfix">
					<?php if( (get_sub_field('large_number') == true) ){ echo '<div class="cs-large-number clearfix'; } ?>
						<?php echo $class; ?>
					<?php if( (get_sub_field('large_number') == true) ){ echo '">'; } ?>
						<?php the_sub_field('large_number'); ?>
					<?php if( (get_sub_field('large_number') == true) ){ echo '</div>'; } ?>

					<?php if( (get_sub_field('point_content') == true) ){ echo '<div class="grid-10 fl clearfix">'; } ?> 
						<?php the_sub_field('point_content'); ?>
					<?php if( (get_sub_field('point_content') == true) ){ echo '</div>'; } ?> 
					</td>
				<?php endwhile; ?>
				</tr></table>					
			</div>
		</div>
		<?php endif; ?>
		<!-- End HIGHLIGHTS -->
		
		<!-- Start Full Width Photo -->
		<?php if(get_field('results_full_width_photo')) { echo '<div class="grid-10 fl clearfix"><img id="resultsimg2" class="responsive-img" src="' . get_field('results_full_width_photo') . '" alt="Results" border="0"/></div>'; } ?>
		<!-- End Full Width Photo --> 
		
		<!-- Start List Items -->
		<?php if(get_field('results_list')): $i = 0; ?>  
		<div class="grid-10 fl clearfix"> 
			<div class="grid-page clearfix"> 
				<table class="results-list clearfix"><tr>
				<?php while(has_sub_field('results_list')): $i++; ?>
					<td class="clearfix">
					<?php if( (get_sub_field('results_list_item') == true) ){ echo '<div class="results-list-item clearfix">'; } ?> 
						<?php the_sub_field('results_list_item'); ?>
					<?php if( (get_sub_field('results_list_item') == true) ){ echo '</div>'; } ?> 
					</td>
				<?php endwhile; ?>
				</tr></table>					
			</div>
		</div>
		<?php endif; ?>
		<!-- End List Items -->

		<!-- Start Full Width Photo -->
		<?php if(get_field('results_closing_photo')) { echo '<div class="grid-10 fl clearfix"><div class="grid-page mauto clearfix"><img class="responsive-img" src="' . get_field('results_closing_photo') . '" alt="Results" border="0"/></div></div> '; } ?>
		<!-- End Full Width Photo -->		

	<?php if((get_field('results_section_title') || get_field('results_section_headline') || get_field('results_list'))) { echo '</div>'; } ?>
   	<!-- ---------- End Results ---------- -->  
	
</article>


<!-- ---------- FORM --------------- -->
<?php if(get_field('expertise_form_headline') || get_field('expertise_form_subheadline') || get_field('expertise_form')) { echo '<section id="get-started" class="grid-10 fl pt5 pb5 ' . get_field('expertise_form_background_color') . ' clearfix">
	<div class="grid-page clearfix">'; } ?>

		<?php if(get_field('expertise_form_headline') || get_field('expertise_form_subheadline')) { echo '<div class="grid-3b fl clearfix">'; } ?>
			<?php if(get_field('expertise_form_headline')) { echo '<h3 class="sp white light">' . get_field('expertise_form_headline') . '</h3>'; } ?>
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

 
<script src='/wp-content/themes/cvm2016/js/jquery-equal-heights.js'></script>
<script src='/wp-content/themes/cvm2016/js/equal-height.min.js'></script>
