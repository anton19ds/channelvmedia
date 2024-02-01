<?php
/**
 * Template Name: Expertise Digital Service
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
get_header(); ?>
			<!-- ------------------------- -->
			<!-- START HERO SECTION ------ --> 
			<!-- ------------------------- --> 
<?php if(get_field('expertise_page_title')) { echo '<section id="hero" class="sp-hero-wrap'; } ?> <?php if(get_field('expertise_hero_background_color')) { echo '' . get_field('expertise_hero_background_color') . ''; } ?> <?php if(get_field('expertise_page_title')) { echo 'clearfix">
	<div class="grid-page expertise-digital-hero-title clearfix">'; } ?>
		 
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
		 
		<?php if(get_field('expertise_page_title')) { echo '<div class="grid-10 fl pb5 clearfix">
			<div class="table fl">
				<div class="table-cell">'; } ?>
					<?php if(get_field('expertise_section_label')) { echo '<p class="sp-small white'; } ?>
					<?php if(get_field('expertise_section_label_text_color')) { echo '' . get_field('expertise_section_label_text_color') . ''; } ?>
					<?php if(get_field('expertise_section_label')) { echo 'clearix">' . get_field('expertise_section_label') . '</p>'; } ?> 
					
					<?php if(get_field('expertise_page_title')) { echo '<h1 class="sp'; } ?>
						<?php if(get_field('expertise_page_title_shadow')) { echo '' . get_field('expertise_page_title_shadow') . ''; } ?>
						<?php if(get_field('expertise_page_title')) { echo '' . get_field('expertise_page_title_text_color') . ''; } ?>
					<?php if(get_field('expertise_page_title')) { echo '">' . get_field('expertise_page_title') . '</h1>'; } ?>
					
					<?php if(get_field('expertise_page_subtitle') || ('expertise_page_subtitle') ) { echo '<div class="grid-8 clearfix">'; } ?>
						<?php if(get_field('expertise_page_subtitle')) { echo '<h2 class="sp'; } ?>
						<?php if(get_field('expertise_page_subtitle_shadow')) { echo '' . get_field('expertise_page_subtitle_shadow') . ''; } ?>
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
					
					<?php if(get_field('expertise_page_subtitle') || ('expertise_page_subtitle') ) { echo '</div>'; } ?> 
					
				<?php if(get_field('expertise_page_title')) { echo '</div>
			</div> 
		</div>
	</div>
</section>'; } ?> 
			<!-- ------------------------- -->
			<!-- END HERO SECTION -------- --> 
			<!-- ------------------------- --> 

			<!-- ------------------------- -->
			<!-- START PRESS LOGOS SECTION --> 
			<!-- ------------------------- -->  
<?php if(get_field('digital_client_logos_title')) { echo '<section id="press-logos" class="grid-10 fl purple-blue-left-to-right clearfix">
	<div class="grid-page mauto pt4 pb4 clearfix">'; } ?>
		<?php if(get_field('digital_client_logos_title')) { echo '<div class="grid-3 fl clearfix"><h3 class="sp light tal mb0 ' . get_field('digital_client_logos_title_color') . '">'; } ?> 
		<?php if(get_field('digital_client_logos_title')) { echo '<span class="grid-10 fl clearfix' . get_field('digital_client_logos_title_color') . '">' . get_field('digital_client_logos_title') . '</span>'; } ?>
		<?php if(get_field('digital_client_logos_title_2')) { echo '<span class="grid-10 fl clearfix' . get_field('digital_client_logos_title_color') . '">'; } ?>
		<?php if(get_field('digital_client_logos_title_2_offset')) { echo '<span class="offset_title_text cb clearfix">' . get_field('digital_client_logos_title_2_offset') . '</span>'; } ?>
		<?php if(get_field('digital_client_logos_title_2')) { echo '' . get_field('digital_client_logos_title_2') . '</span>'; } ?>
		<?php if(get_field('digital_client_logos_title_3')) { echo '<span class="grid-10 fl clearfix' . get_field('digital_client_logos_title_color') . '">' . get_field('digital_client_logos_title_3') . '</span>'; } ?> 
		<?php if(get_field('digital_client_logos_title')) { echo '</h3></div>'; } ?> 

		<?php if(get_field('digital_client_logos')): $i = 0; ?>
		<div class="grid-7 fr clearfix"><ul class="digital-expertise-client-logos fl clearfix">
			<?php while(has_sub_field('digital_client_logos')): $i++; ?>   
			<?php $image = get_sub_field('digital_client_logo'); ?>
			<?php if( get_sub_field('digital_client_logo') ) { echo '<li class="clearfix"><img src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('digital_client_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('digital_client_logo') ) { echo '" border="0"/></li>'; } ?>  
			<?php endwhile; ?>
			</ul></div>
		<?php endif; ?>  
	<?php if(get_field('digital_client_logos_title')) { echo '</div>  
</section>'; } ?>  
			<!-- ------------------------- -->
			<!-- END PRESS LOGOS SECTION-- --> 
			<!-- ------------------------- --> 

			<!-- ------------------------- -->
			<!-- START WORK SECTION ------ --> 
			<!-- ------------------------- -->
 			<!-- start repeater-list -->
			<?php if(get_field('digital_work_list')): $i = 0; ?>
			<section id="overview" class="grid-10 work-section bg-white fl clearfix"> 
				<?php $countp = 0; while(has_sub_field('digital_work_list')): $countp++; ?>
				<?php $class = "odd"; if( $i % 2 == 0 ){ $class = "even"; } ?>
				<?php $classf = ""; if( $i == 0 ){ $classf = "first"; } ?>    
					<div class="grid-page pt9 pb9 digi-<?php echo $countp ?> <?php echo $class; ?> <?php echo $classf; ?> clearfix"> 
					<!-- Start Header -->
					<?php if( ((get_sub_field('headline') || get_sub_field('logo')) == true) ){ echo '<div class="digital-client-header clearfix">'; } ?>
						<?php if( (get_sub_field('logo') == true) ){ echo '<div class="grid-3b pt1 fr">'; } ?>
							<?php $logo = get_sub_field('logo'); ?>
							<?php if( get_sub_field('logo') ) { echo '<img class="digital-client-logo fr'; } ?>
							<?php if(get_sub_field('logo_width')) { echo '' . get_sub_field('logo_width') . ''; }?>
							<?php if( get_sub_field('logo') ) { echo '" src="'; } ?><?php echo $logo['url']; ?><?php if( get_sub_field('logo') ) { echo '" alt="'; } ?><?php echo $logo['alt']; ?><?php if (get_sub_field('logo') ) { echo '" border="0"/>'; } ?> 
 						<?php if( (get_sub_field('logo') == true) ){ echo '</div>'; } ?> 
					
						<?php if( (get_sub_field('headline') == true) ){ echo '<div class="grid-6b fl"><h3 class="sp mt0 clearfix">'; } ?>
						<?php if( (get_sub_field('link') == true) ){ echo '<a class="purple digital-client-title" href="'; } ?>
						<?php if(get_sub_field('link')) { echo '' . get_sub_field('link') . ''; }?>
						<?php if( (get_sub_field('link') == true) ){ echo '">'; } ?>
						<?php if(get_sub_field('headline')) { echo '' . get_sub_field('headline') . ''; }?>
						<?php if( (get_sub_field('link') == true) ){ echo '</a>'; } ?>
						<?php if( (get_sub_field('headline') == true) ){ echo '</h3></div>'; } ?>
 					<?php if( ((get_sub_field('headline') || get_sub_field('logo')) == true) ){ echo '</div>'; } ?>
					<!-- End Header -->
					
					<!-- Start Content --> 
					<?php if( ((get_sub_field('video_mp4_link') && get_sub_field('video_ogg_link') && get_sub_field('description')) == true) ){ echo '<div class="digital-client-content clearfix">'; } ?>
						<?php if( ((get_sub_field('video_mp4_link') && get_sub_field('video_ogg_link')) == true) ){ echo '<div class="grid-7 fr"><video class="digital-client-ipad" width="800" height="612" autoplay loop>'; } ?>
							<?php if( (get_sub_field('video_mp4_link') == true) ){ echo '<source src="'; } ?><?php if(get_sub_field('video_mp4_link')) { echo '' . get_sub_field('video_mp4_link') . ''; }?><?php if( (get_sub_field('video_mp4_link') == true) ){ echo '" type="video/mp4">'; } ?>
							<?php if( (get_sub_field('video_ogg_link') == true) ){ echo '<source src="'; } ?><?php if(get_sub_field('video_ogg_link')) { echo '' . get_sub_field('video_ogg_link') . ''; }?><?php if( (get_sub_field('video_ogg_link') == true) ){ echo '" type="video/ogg">'; } ?>  
						<?php if( ((get_sub_field('video_mp4_link') && get_sub_field('video_ogg_link')) == true) ){ echo 'Your browser does not support the video tag.</video></div>'; } ?>

						<?php if( (get_sub_field('description') == true) ){ echo '<div class="grid-2 fl">'; } ?>
							<?php if( (get_sub_field('description') == true) ){ echo '<div class="digital-client-description">'; } ?>
								<?php if(get_sub_field('description')) { echo '' . get_sub_field('description') . ''; }?>
							<?php if( (get_sub_field('description') == true) ){ echo '</div>'; } ?>

							<?php if( (get_sub_field('link') == true) ){ echo '<div class="grid-10 fl clearfix"><a class="digital-client-link-a" href="'; } ?>
								<?php if(get_sub_field('link')) { echo '' . get_sub_field('link') . ''; }?>
							<?php if( (get_sub_field('link') == true) ){ echo '"><span class="digital-client-link">Explore</span></a></div>'; } ?>
						<?php if( (get_sub_field('description') == true) ){ echo '</div>'; } ?>
						   
					<?php if( ((get_sub_field('video_mp4_link') && get_sub_field('video_ogg_link') && get_sub_field('description')) == true) ){ echo '</div>'; } ?> 
					<!-- End Content -->
					
					<!-- Start Services -->    
					<?php // check for rows (nested repeater)
					if( have_rows('services_list') ): $i = 0; ?> 
						<div class="digital-client-services clearfix">
							<div class="digital-client-services-inner">
								<div class="grid-2 fl clearfix">
									<h4 class="digital-client-services-title">Services</h4>
								</div>
								<div class="grid-7 fr clearfix">
									<div class="grid-10 fl clearfix">
										<div class="digital-services">
											<?php while( have_rows('services_list') ): $i++; the_row(); ?>  
												<div class="digital-service"> 
												<?php if(get_sub_field('service')) {
													echo '<p>' . get_sub_field('service') . '</p>';
												} ?> 
												</div>
											<?php endwhile; ?>
										</div>
									</div>
								</div>
							</div>
						</div> 
					<?php endif; ?> 
					<!-- End Services -->  
					 
				</div>				
				<?php endwhile; ?>  
			</section>
			<?php endif; ?> 
			<!-- end repeater-list --> 
			<!-- ------------------------- -->
			<!-- END WORK SECTION -------- --> 
			<!-- ------------------------- -->    

			<!-- ------------------------- -->
			<!-- -START FORM ONE SECTION-- --> 
			<!-- ------------------------- -->  
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
			<!-- ------------------------- -->
			<!-- -END FORM ONE SECTION---- --> 
			<!-- ------------------------- -->  

			<!-- ------------------------- -->
			<!-- START WORK SECTION 2 ---- --> 
			<!-- ------------------------- -->
 			<!-- start repeater-list -->
			<?php if(get_field('digital_work_list_2')): $i = 0; ?>
			<section id="work" class="grid-10 work-section bg-white fl clearfix"> 
				<?php $countt = 0; while(has_sub_field('digital_work_list_2')): $countt++; ?>
				<?php $class = "odd"; if( $countt % 2 == 0 ){ $class = "even"; } ?>
				<?php $classf = ""; if( $countt == 0 ){ $classff = "first"; } ?>    
					<div class="grid-page pt9 pb9 digi-<?php echo $countt ?> <?php echo $class; ?> <?php echo $classff; ?> clearfix"> 
					<!-- Start Header -->
					<?php if( ((get_sub_field('headline') || get_sub_field('logo')) == true) ){ echo '<div class="digital-client-header clearfix">'; } ?>
						<?php if( (get_sub_field('logo') == true) ){ echo '<div class="grid-3b pt1 fr">'; } ?>
							<?php $logo = get_sub_field('logo'); ?>
							<?php if( get_sub_field('logo') ) { echo '<img class="digital-client-logo fr'; } ?>
							<?php if(get_sub_field('logo_width')) { echo '' . get_sub_field('logo_width') . ''; }?>
							<?php if( get_sub_field('logo') ) { echo '" src="'; } ?><?php echo $logo['url']; ?><?php if( get_sub_field('logo') ) { echo '" alt="'; } ?><?php echo $logo['alt']; ?><?php if (get_sub_field('logo') ) { echo '" border="0"/>'; } ?> 
 						<?php if( (get_sub_field('logo') == true) ){ echo '</div>'; } ?> 
					
						<?php if( (get_sub_field('headline') == true) ){ echo '<div class="grid-6b fl"><h3 class="sp mt0 clearfix">'; } ?>
						<?php if( (get_sub_field('link') == true) ){ echo '<a class="purple digital-client-title" href="'; } ?>
						<?php if(get_sub_field('link')) { echo '' . get_sub_field('link') . ''; }?>
						<?php if( (get_sub_field('link') == true) ){ echo '">'; } ?>
						<?php if(get_sub_field('headline')) { echo '' . get_sub_field('headline') . ''; }?>
						<?php if( (get_sub_field('link') == true) ){ echo '</a>'; } ?>
						<?php if( (get_sub_field('headline') == true) ){ echo '</h3></div>'; } ?>
 					<?php if( ((get_sub_field('headline') || get_sub_field('logo')) == true) ){ echo '</div>'; } ?>
					<!-- End Header -->
					
					<!-- Start Content --> 
					<?php if( ((get_sub_field('video_mp4_link') && get_sub_field('video_ogg_link') && get_sub_field('description')) == true) ){ echo '<div class="digital-client-content clearfix">'; } ?>
						<?php if( ((get_sub_field('video_mp4_link') && get_sub_field('video_ogg_link')) == true) ){ echo '<div class="grid-7 fr"><video class="digital-client-ipad" width="800" height="612" autoplay loop>'; } ?>
							<?php if( (get_sub_field('video_mp4_link') == true) ){ echo '<source src="'; } ?><?php if(get_sub_field('video_mp4_link')) { echo '' . get_sub_field('video_mp4_link') . ''; }?><?php if( (get_sub_field('video_mp4_link') == true) ){ echo '" type="video/mp4">'; } ?>
							<?php if( (get_sub_field('video_ogg_link') == true) ){ echo '<source src="'; } ?><?php if(get_sub_field('video_ogg_link')) { echo '' . get_sub_field('video_ogg_link') . ''; }?><?php if( (get_sub_field('video_ogg_link') == true) ){ echo '" type="video/ogg">'; } ?>  
						<?php if( ((get_sub_field('video_mp4_link') && get_sub_field('video_ogg_link')) == true) ){ echo 'Your browser does not support the video tag.</video></div>'; } ?>

						<?php if( (get_sub_field('description') == true) ){ echo '<div class="grid-2 fl">'; } ?>
							<?php if( (get_sub_field('description') == true) ){ echo '<div class="digital-client-description">'; } ?>
								<?php if(get_sub_field('description')) { echo '' . get_sub_field('description') . ''; }?>
							<?php if( (get_sub_field('description') == true) ){ echo '</div>'; } ?>

							<?php if( (get_sub_field('link') == true) ){ echo '<div class="grid-10 fl clearfix"><a class="digital-client-link-a" href="'; } ?>
								<?php if(get_sub_field('link')) { echo '' . get_sub_field('link') . ''; }?>
							<?php if( (get_sub_field('link') == true) ){ echo '"><span class="digital-client-link">Explore</span></a></div>'; } ?>
						<?php if( (get_sub_field('description') == true) ){ echo '</div>'; } ?>
						   
					<?php if( ((get_sub_field('video_mp4_link') && get_sub_field('video_ogg_link') && get_sub_field('description')) == true) ){ echo '</div>'; } ?> 
					<!-- End Content -->
					
					<!-- Start Services -->    
					<?php // check for rows (nested repeater)
					if( have_rows('services_list') ): $i = 0; ?> 
						<div class="digital-client-services clearfix">
							<div class="digital-client-services-inner">
								<div class="grid-2 fl clearfix">
									<h4 class="digital-client-services-title">Services</h4>
								</div>
								<div class="grid-7 fr clearfix">
									<div class="grid-10 fl clearfix">
										<div class="digital-services">
											<?php while( have_rows('services_list') ): $i++; the_row(); ?>  
												<div class="digital-service"> 
												<?php if(get_sub_field('service')) {
													echo '<p>' . get_sub_field('service') . '</p>';
												} ?> 
												</div>
											<?php endwhile; ?>
										</div>
									</div>
								</div>
							</div>
						</div> 
					<?php endif; ?> 
					<!-- End Services -->  
					 
				</div>				
				<?php endwhile; ?>  
			</section>
			<?php endif; ?> 
			<!-- end repeater-list --> 
			<!-- ------------------------- -->
			<!-- END WORK SECTION 2 ------ --> 
			<!-- ------------------------- -->  

			<!-- ------------------------- -->
			<!-- START PROCESS SECTION---- --> 
			<!-- ------------------------- --> 
			<?php if(get_field('digital_process_headline') || get_field('digital_process_subheadline') || get_field('digital_process_section_label') || get_field('digital_process_steps')) { echo '<section id="process" class="sp-header-wrap fl pb5 ' . get_field('digital_process_background_color') . ' clearfix">
								<div class="grid-10 wrapper-barrier ' . get_field('digital_process_background_color') . ' clearfix">
									<div class="grid-10 fl pb0 clearfix">'; } ?>

			<?php if(get_field('digital_process_headline') || get_field('digital_process_subheadline') || get_field('digital_process_section_label')) { echo '
										<div class="grid-10 fl clearfix">    
											<div class="grid-page clearfix">   
												<div class="grid-7 fl pt4 pb4 clearfix">
										'; } ?>
			<?php if(get_field('digital_process_section_label')) { echo '<p class="sp-small ' . get_field('digital_process_section_label_text_color') . ' clearix">' . get_field('digital_process_section_label') . '</p>'; } ?> 
			<?php if(get_field('digital_process_headline')) { echo '<h3 class="sp light ' . get_field('digital_process_headline_text_color') . ' clearix">' . get_field('digital_process_headline') . '</h2> '; } ?> 
			<?php if(get_field('digital_process_subheadline')) { echo '<p class="sp ' . get_field('digital_process_subheadline_text_color') . ' clearix">' . get_field('digital_process_subheadline') . '</p> '; } ?> 

			<?php if(get_field('digital_process_headline') || get_field('digital_process_subheadline') || get_field('digital_process_section_label')) { echo '
												</div>
											</div>
										</div>
										'; } ?>

			<!-- start repeater-list --> 
			<?php if( have_rows('digital_process_steps') ):
			echo ' ';
			// loop through the rows of data
			$countp = 0; while ( have_rows('digital_process_steps') ) : the_row(); $countp++; ?> 
			<div class="grid-10 fl pt3 pb3 bg-<?php echo $countp ?> clearfix">
				<?php if(get_sub_field('photo')) { echo '<div class="grid-4b mb30 ho'; }?>
				<?php if(get_sub_field('photo_position_right') == true) { echo 'fr'; } else { echo 'fl'; }?>
				<?php if(get_sub_field('photo')) { echo 'clearfix">'; } ?> 

				<?php if(get_sub_field('photo')) { echo '<div class="color-overlay ' . get_field('digital_process_background_color') . ''; } ?> 
				<?php if(get_sub_field('photo_position_right') == true) { echo 'slide-left'; } else { echo 'slide-right'; }?>
				<?php if(get_sub_field('photo')) { echo 'z11"></div>'; } ?>

				<?php $image = get_sub_field('photo');
				if( !empty( $image ) ): ?>
				<img class="responsive-img z1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>

				<?php if(get_sub_field('photo_color_filter')) { echo '<div class="color-overlay-exact z2 opacity50 ' . get_sub_field('photo_color_filter') . '"></div>'; }?> 

				<?php if(get_sub_field('photo')) { echo '</div>'; } ?> 

				<?php if(get_sub_field('headline') || get_sub_field('description')) { echo '<div class="grid-5b fl clearfix"><div class="grid-page mauto clearfix"><div class="grid-7'; } ?>
				<?php if(get_sub_field('photo_position_right') == true) { echo 'fr'; } else { echo 'fl'; }?>
				<?php if(get_sub_field('headline') || get_sub_field('description')) { echo 'clearfix">'; } ?>
				
				<?php if(get_sub_field('headline')) { echo '<p class="sp-strong ' . get_sub_field('headline_text_color') . '">' . get_sub_field('headline') . '</p>'; } ?>
				<?php if(get_sub_field('description')) { echo '<div class="sp ' . get_sub_field('description_text_color') . '">' . get_sub_field('description') . '</div>'; } ?>
				<?php if(get_sub_field('headline') || get_sub_field('description')) { echo '</div></div></div>'; } ?>
			</div>
			<?php endwhile; echo ''; endif; ?> 
			<!-- end repeater-list --> 

			<?php if(get_field('digital_process_headline') || get_field('digital_process_subheadline') || get_field('digital_process_section_label') || get_field('digital_process_steps')) { echo '</section>'; } ?>   
			<!-- ------------------------- -->
			<!-- END PROCESS SECTION------ --> 
			<!-- ------------------------- --> 
  
			<!-- ------------------------- -->
			<!-- START FORM TWO SECTION--- --> 
			<!-- ------------------------- -->  
<?php if(get_field('expertise_form2_headline') || get_field('expertise_form2_subheadline') || get_field('expertise_form2')) { echo '<section id="get-started2" class="grid-10 fl pt5 pb5 ' . get_field('expertise_form2_background_color') . ' clearfix">
	<div class="grid-page clearfix">'; } ?>

		<?php if(get_field('expertise_form2_headline') || get_field('expertise_form2_subheadline')) { echo '<div class="grid-3b fl clearfix">'; } ?>
			<?php if(get_field('expertise_form2_headline')) { echo '<h3 class="sp white light">' . get_field('expertise_form2_headline') . '</h3>'; } ?>
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
    
<?php get_footer(); ?>