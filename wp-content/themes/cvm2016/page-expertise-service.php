<?php
/**
 * Template Name: Expertise Service
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
get_header(); ?>

<!-- ---------- HERO ---------------- -->
<?php if(get_field('expertise_page_title')) { echo '<section id="hero" class="sp-hero-wrap'; } ?> <?php if(get_field('expertise_hero_background_color')) { echo '' . get_field('expertise_hero_background_color') . ''; } ?> <?php if(get_field('expertise_page_title')) { echo 'clearfix">
	<div class="grid-page expertise-strategy-hero-title pb5 clearfix">'; } ?>
		 
			<?php 
			$image = get_field('expertise_hero_image');
			if( !empty( $image ) ): ?>
				<div class="grid-7-absolute absolute-right absolute-top clearfix"><img class="responsive-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
				<?php if(get_field('expertise_hero_image_overlay')) { echo '<div class="color-overlay-exact ' . get_field('expertise_hero_image_overlay') . ' opacity50"></div>'; } ?>
			<?php 
			$image = get_field('expertise_hero_image');
			if( !empty( $image ) ): ?>
				</div>
			<?php endif; ?>
		 
		<?php if(get_field('expertise_page_title')) { echo '<div class="grid-7 fl pb0 clearfix">
			<div class="table">
				<div class="table-cell">'; } ?>
					<?php if(get_field('expertise_section_label')) { echo '<p class="sp-small white mt0'; } ?>
					<?php if(get_field('expertise_section_label_text_color')) { echo '' . get_field('expertise_section_label_text_color') . ''; } ?>
					<?php if(get_field('expertise_section_label')) { echo 'clearix">' . get_field('expertise_section_label') . '</p>'; } ?> 
					
					<?php if(get_field('expertise_page_title')) { echo '<h1 class="block-headline pb2 mb0 ts2'; } ?>
						<?php if(get_field('expertise_page_title')) { echo '' . get_field('expertise_page_title_text_color') . ''; } ?>
					<?php if(get_field('expertise_page_title')) { echo '">' . get_field('expertise_page_title') . '</h1>'; } ?>
					
					<?php if(get_field('expertise_page_subtitle') || ('expertise_page_subtitle') ) { echo '<div class="grid-8 cb clearfix">'; } ?>
						<?php if(get_field('expertise_page_subtitle')) { echo '<h2 class="block-subheadline ts'; } ?>
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
						<h3 class="block-subheadline_alt mb0 pb2 light-purple">' . get_field('overview_subtitle') . '</h3>
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
<?php if(get_field('statement_headline') || get_field('statement_subheadline')) { echo '<section id="statement" class="grid-10 fl vortex pt6 pb5 '; } ?>
	<?php if(get_field('statement_background_color')) { echo '' . get_field('statement_background_color') . ''; } ?> 
	<?php if(get_field('statement_headline') || get_field('statement_subheadline')) { echo ' clearfix" '; } ?> 
	<?php if(get_field('statement_background_image')) { echo 'style="background-image:url(' . get_field('statement_background_image') . ');"'; } ?>
	<?php if(get_field('statement_headline') || get_field('statement_subheadline')) { echo '>'; } ?>

	<?php if(get_field('statement_background_image_overlay')) { echo '<div class="color-overlay-exact ' . get_field('statement_background_image_overlay') . ' opacity50"></div>'; } ?>

	<?php if(get_field('statement_headline') || get_field('statement_subheadline')) { echo '<div class="grid-page mauto clearfix">
		<div class="grid-page mauto clearfix">'; } ?>
			<?php if(get_field('statement_headline')) { echo '<h3 class="block-subheadline_alt mb0 pb2 tac ' . get_field('statement_headline_color') . '">' . get_field('statement_headline') . '</h3>'; } ?>
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

<!-- ---------- PROCESS ----------- -->
<?php if(get_field('expertise_process_headline') || get_field('expertise_process_subheadline') || get_field('expertise_process_section_label') || get_field('expertise_process_steps')) { echo '<section id="process" class="sp-header-wrap fl pb5 ' . get_field('expertise_process_background_color') . ' clearfix">
	<div class="grid-10 wrapper-barrier ' . get_field('expertise_process_background_color') . ' clearfix">
		<div class="grid-10 fl pb0 clearfix">'; } ?>
			
			<?php if(get_field('expertise_process_headline') || get_field('expertise_process_subheadline') || get_field('expertise_process_section_label')) { echo '
			<div class="grid-10 fl clearfix">    
				<div class="grid-page clearfix">   
					<div class="grid-7 fl pt4 pb4 clearfix">
			'; } ?>
						<?php if(get_field('expertise_process_section_label')) { echo '<p class="sp-small ' . get_field('expertise_process_section_label_text_color') . ' clearix">' . get_field('expertise_process_section_label') . '</p>'; } ?>
						<?php if(get_field('expertise_process_headline')) { echo '<h2 class="block-subheadline_alt mb0 pb2 ' . get_field('expertise_process_headline_text_color') . ' clearix">' . get_field('expertise_process_headline') . '</h2> '; } ?>
						<?php if(get_field('expertise_process_subheadline')) { echo '<p class="sp ' . get_field('expertise_process_subheadline_text_color') . ' clearix">' . get_field('expertise_process_subheadline') . '</p> '; } ?> 

			<?php if(get_field('expertise_process_headline') || get_field('expertise_process_subheadline') || get_field('expertise_process_section_label')) { echo '
					</div>
				</div>
			</div>
			'; } ?>
								   
			<!-- start repeater-list --> 
			<?php if( have_rows('expertise_process_steps') ):
			echo ' ';
			// loop through the rows of data
			$countp = 0; while ( have_rows('expertise_process_steps') ) : the_row(); $countp++; ?> 
			<div class="grid-10 fl pt3 pb3 bg-<?php echo $countp ?> clearfix">
			<?php if(get_sub_field('photo')) { echo '<div class="grid-4b mb30 ho'; }?>
					<?php if(get_sub_field('photo_position_right') == true) { echo 'fr'; } else { echo 'fl'; }?>
					<?php if(get_sub_field('photo')) { echo 'clearfix">'; } ?> 
				
							<?php if(get_sub_field('photo')) { echo '<div class="color-overlay ' . get_field('expertise_process_background_color') . ''; } ?> 
								<?php if(get_sub_field('photo_position_right') == true) { echo 'slide-left'; } else { echo 'slide-right'; }?>
							<?php if(get_sub_field('photo')) { echo 'z11"></div>'; } ?>
							
							<?php $image = get_sub_field('photo');
							if( !empty( $image ) ): ?>
								<img class="responsive-img z1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>

							<?php if(get_sub_field('photo_color_filter')) { echo '<div class="color-overlay-exact z2 opacity50 ' . get_sub_field('photo_color_filter') . '"></div>'; }?> 

			<?php if(get_sub_field('photo')) { echo '</div>'; } ?> 

			<?php if(get_sub_field('headline') || get_sub_field('description')) { echo '<div class="grid-5b fl clearfix"><div class="grid-page mauto clearfix"><div class="grid-7 '; } ?><?php if(get_sub_field('photo_position_right') == true) { echo 'fr'; } else { echo 'fl'; }?><?php if(get_sub_field('headline') || get_sub_field('description')) { echo ' clearfix">'; } ?>
				<?php if(get_sub_field('headline')) { echo '<h3 class="sp-strong ' . get_sub_field('headline_text_color') . '">' . get_sub_field('headline') . '</h3>'; } ?>
				<?php if(get_sub_field('description')) { echo '<div class="sp ' . get_sub_field('description_text_color') . '">' . get_sub_field('description') . '</div>'; } ?>
			<?php if(get_sub_field('headline') || get_sub_field('description')) { echo '</div></div></div>'; } ?>
			</div>
			<?php endwhile; echo ''; endif; ?> 
			<!-- end repeater-list --> 

<?php if(get_field('expertise_process_headline') || get_field('expertise_process_subheadline') || get_field('expertise_process_section_label') || get_field('expertise_process_steps')) { echo '</section>'; } ?>

<!-- ---------- QUOTE ------------ -->
<?php if(get_field('quote_one_quote')) { echo '<section id="quote2" class="grid-10 fl'; } ?>
	<?php if(get_field('quote_one_quote')) { echo '' . get_field('quote_one_background_color') . ''; } ?>
	<?php if(get_field('quote_one_quote')) { echo ' clearfix"><div class="blockquote-wrapper">
	  <div class="blockquote">'; } ?>
		<?php if(get_field('quote_one_quote')) { echo '<span class="quote"><span>' . get_field('quote_one_quote') . '</span></span>'; } ?>

		<?php if(get_field('quote_one_first_last_name')) { echo '<span class="citation">&mdash; ' . get_field('quote_one_first_last_name') . ''; } ?><?php if(get_field('quote_one_job_title')) { echo ', ' . get_field('quote_one_job_title') . '<br/>'; } ?>
		<?php if(get_field('quote_one_company')) { echo '<em>' . get_field('quote_one_company') . '</em>'; } ?>
		<?php if(get_field('quote_one_first_last_name')) { echo '</span>'; } ?>

	  <?php if(get_field('quote_one_quote')) { echo '</div>
	</div>
</section>'; } ?> 

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

<!-- ---------- ACCORDIAN ----------- -->
<?php if(get_field('expertise_scenarios_headline') || get_field('expertise_scenarios_subheadline') || get_field('expertise_scenarios_accordian')) { echo '<section id="companies" class="sp-header-wrap ' . get_field('expertise_scenarios_background_color') . ' clearfix"><div class="grid-10 bg-double-sashes pb5 pt5 clearfix">'; } ?>
	
	<?php if(get_field('expertise_scenarios_headline') || get_field('expertise_scenarios_subheadline')) { echo '<div class="grid-10 fl clearfix"><div class="grid-page clearfix"><div class="grid-7 fl clearfix">'; } ?>
			<?php if(get_field('expertise_scenarios_headline')) { echo '<h2 class="block-subheadline_alt mb0 pb2 ' . get_field('expertise_scenarios_headline_text_color') . '">' . get_field('expertise_scenarios_headline') . '</h2>'; } ?>
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

<!-- ---------- LOGOS ------------ -->
<?php if(get_field('expertise_clients_headline') || get_field('expertise_clients_subheadline') || get_field('expertise_client_logos')) { echo '<section id="clients" class="grid-10 fl pb6 pt5 ' . get_field('expertise_clients_background_color') . ' clearfix">'; } ?>

	<?php if(get_field('expertise_clients_headline') || get_field('expertise_clients_subheadline')) { echo '<div class="grid-10 fl clearfix"><div class="grid-page clearfix"><div class="grid-7 fl pt2 clearfix">'; } ?>
		<?php if(get_field('expertise_clients_headline')) { echo '<h2 class="block-subheadline_alt ' . get_field('expertise_clients_headline_text_color') . '">' . get_field('expertise_clients_headline') . '</h2>'; } ?>
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

<!-- ---------- QUOTE ------------ -->
<?php if(get_field('quote_two_quote')) { echo '<section id="quote2" class="grid-10 fl'; } ?>
	<?php if(get_field('quote_two_quote')) { echo '' . get_field('quote_two_background_color') . ''; } ?>
	<?php if(get_field('quote_two_quote')) { echo ' clearfix"><div class="blockquote-wrapper">
	  <div class="blockquote">'; } ?>
		<?php if(get_field('quote_two_quote')) { echo '<span class="quote"><span>' . get_field('quote_two_quote') . '</span></span>'; } ?>

		<?php if(get_field('quote_two_first_last_name')) { echo '<span class="citation">&mdash; ' . get_field('quote_two_first_last_name') . ''; } ?><?php if(get_field('quote_two_job_title')) { echo ', ' . get_field('quote_two_job_title') . '<br/>'; } ?>
		<?php if(get_field('quote_two_company')) { echo '<em>' . get_field('quote_two_company') . '</em>'; } ?>
		<?php if(get_field('quote_two_first_last_name')) { echo '</span>'; } ?>

	  <?php if(get_field('quote_two_quote')) { echo '</div>
	</div>
</section>'; } ?> 

<!-- ---------- WHO'S IT FOR? ------- -->
<?php if(get_field('who_title') || get_field('who_subtitle') || get_field('who_introduction')) { echo '<section id="who" class="sp-header-wrap clearfix">
	<div class="sp-header-circle clearfix"></div>'; } ?>

		<?php if(get_field('who_line_element')) { echo '<div class="' . get_field('who_line_element') . ' clearfix"></div>'; } ?>

		<?php if(get_field('who_title') || get_field('who_subtitle') || get_field('who_introduction')) { echo '<div class="grid-page clearfix"> 
			<div class="grid-10 fl pb6 pt6 clearfix"> 
				<div class="grid-page mauto clearfix">'; } ?>

					<?php if(get_field('who_title') || get_field('who_subtitle') || get_field('who_introduction' )) { echo '<div class="grid-10 fl clearfix">'; } ?>
						<?php if(get_field('who_title')) { echo '<h2 class="block-subheadline_alt mb0 pb2">' . get_field('who_title') . '</h2>'; } ?>
						<?php if(get_field('who_subtitle')) { echo '<h4 class="sp light-purple">' . get_field('who_subtitle') . '</h4>'; } ?>
						<?php if(get_field('who_introduction')) { echo '<div class="sp light-purple">' . get_field('who_introduction') . '</div>'; } ?> 
					<?php if(get_field('who_title') || get_field('who_subtitle') || get_field('who_introduction')) { echo '</div>'; } ?>

				<?php if(get_field('who_title') || get_field('who_subtitle') || get_field('who_introduction')) { echo '</div> 
			</div>
		</div> 
</section>'; } ?>

<!-- ---------- FORM --------------- -->
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

<!-- ---------- BLOG POSTS ------- -->
<?php if(get_field('related_blog_posts_section_title') || get_field('related_blog_posts_list')) { echo '<section id="posts" class="sp-header-wrap'; } ?>
	<?php if(get_field('related_blog_posts_bg_color') && get_field('related_blog_posts_section_title')) { echo '' . get_field('related_blog_posts_bg_color') . ''; } ?><?php if(get_field('related_blog_posts_section_title') || get_field(' related_blog_posts_list')) { echo ' clearfix">
	<div class="grid-page pb4 pt5 clearfix">'; } ?>
	
		<?php if(get_field('related_blog_posts_section_title')) { echo '<div class="grid-10 fl clearfix"><h2 class="block-subheadline_alt">' . get_field('related_blog_posts_section_title') . '</h2></div>'; } ?> 
 
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

    
<?php get_footer(); ?>