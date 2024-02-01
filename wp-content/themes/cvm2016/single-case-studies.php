<?php
/**
 * Template Name: CPT Case Studies
 * The template for displaying all single case-study custom post types and attachments
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */

get_header(); ?>  

<div id="primary" class="content-area cpt-case_studies default">
	<main id="main" class="site-main" role="main">  

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); $do_not_duplicate = $post->ID; ?>

			<script type="text/javascript" src="/wp-content/themes/cvm2016/js/revealer-head.js"></script> 

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 

						<!-- Start Hero --> 
						<div class="section grid-10 fl template-parts-content-case-study clearfix">

							<div class="grid-10 fl cpt-case-study-height clearfix" style="background-image:url(
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
									echo '' . $image[0] . ''; ?>
								<?php endif; ?>
					);background-size:cover;background-position:center center;">

								<div class="black-trans-header"></div>
 								<?php if(get_field('cpt_hero_color_overlay') == true) { echo '<div class="color-overlay-exact purple-pink-diagonal opacity20"></div>'; } ?>
								
								<div class="table">
									<div class="table-cell">
										<div class="grid-page mauto clearfix">
											<h1 class="cpt-top"><?php the_title(); ?></h1>

											<!-- start repeater-list --> 
											<?php if( have_rows('cpt_button_text_links') ): $pr = 0;
											echo '<p class="mb10 mt20 cpt-top down-arrow-container" style="margin-left:10px;">';
											// loop through the rows of data
											while ( have_rows('cpt_button_text_links') ) : the_row(); ?> 
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
							
							<?php if(get_field('cs_hero_caption')) {
								echo '<div class="grid-10 fl bg-white clearfix"><div class="grid-page mauto clearfix"><div class="cpt-caption-wide">' . get_field('cs_hero_caption') . '</div></div></div>';
							} ?>

						</div>
						<!-- End Hero -->
						 
						<?php edit_post_link(
							sprintf(
								/* translators: %s: Name of current post */
								__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
								get_the_title()
							),
							'<div class="grid-10 fl clearfix" style="display:none;"><div class="grid-page mauto clearfix"><span class="btn-outline edit-link mt0 mb0">',
							'</span></div></div>'
						); ?> 
						<section id="summary" class="grid-10 case-summary fl bg-white pb5 clearfix">
							<div class="grid-cs-page mauto clearfix">
								<div class="grid-10 fl pt2 pb5 clearix">
									<div id="social-bar-small-holder" class="fl clearfix" style="width:auto;">
										<?php my_socialbar(); ?>
									</div>
								</div>
								
								<?php if(get_field('cpt_summary_section_title')) { echo '<div class="grid-10 fl pt0 pb1 clearix"><h2 class="mt0 mb0">' . get_field('cpt_summary_section_title') . '</h2></div>'; } ?>  
								
								<?php if( have_rows('cpt_summary') ): ?>
								<div class="grid-cs-7 fl clearfix">
									<ul class="cpt-brief clearfix"> 
									<?php while( have_rows('cpt_summary') ): the_row(); ?>
										<li>
											<h3><?php the_sub_field('headline'); ?></h3>
											<?php the_sub_field('description'); ?>
										</li>
									<?php endwhile; ?>
									</ul>
								</div>
								<?php endif; ?> 
								
								<?php if( have_rows('cpt_summary_extra') ): ?>
								<div class="grid-cs-2b fr clearfix">
									<div class="grid-cs-inner cs-extra mauto clearfix"> 
									<?php while( have_rows('cpt_summary_extra') ): the_row(); ?>
										<div class="grid-10 fl clearfix">
											<h3><?php the_sub_field('headline'); ?></h3>
											<?php the_sub_field('description'); ?>
 										</div>
									<?php endwhile; ?> 
									</div> 
								</div>
								<?php endif; ?>  
							</div>
						</section> <!-- end summary --> 

						<!-- --------------------------------- -->
						<!-- ---------- Press Logos ---------- -->
						<!-- --------------------------------- --> 
						<?php if(get_field('cpt_press_logos')): $count = 0; ?>
						<section id="presslogos" class="grid-10 fl purple-blue-left-to-right pb2 pt2 clearfix">
							<div class="grid-page mauto tac"> 
								<?php while(has_sub_field('cpt_press_logos')): $count++; ?> 
								<?php $image = get_sub_field('cpt_press_logo'); ?>
								<?php if( get_sub_field('cpt_press_logo') ) { echo '<img class="case-study__logo"'; } ?><?php if( get_sub_field('cpt_press_logo') ) { echo ' src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('cpt_press_logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('cpt_press_logo') ) { echo '" border="0"/>'; } ?> 
								<?php endwhile; ?> 
							</div>
						</section> <!-- end press logos --> 
						<?php endif; ?>  

						<!-- -------------------------- -->
						<!-- ---------- BODY ---------- -->
						<!-- -------------------------- -->
						<?php if(get_field('strategy_list') || get_field('strategy_section_title')) { echo '<section id="body" class="grid-10 fl case-body clearfix"'; } ?><?php if(get_field('cpt_section_background')) { echo 'style="background-image:url(' . get_field('cpt_section_background') . ');"'; } ?><?php if(get_field('strategy_list') || get_field('strategy_section_title')) { echo '>'; } ?>				
							<?php if(get_field('strategy_list')): $count = 0; ?>
							<ul class="strategy-list">
							<?php while(has_sub_field('strategy_list')): $count++; ?>
								<?php $classpoint = "animateslideinleft animated"; if( $count % 2 == 0 ){ $classpoint = "animateslideinright animated"; } ?> 
								<li class="grid-10 fl row-<?php echo $count.''; ?> pt5 pb4 <?php if(get_sub_field('cpt_background_color')) { echo '' . get_sub_field('cpt_background_color') . ''; } ?> <?php if((get_sub_field('strategy_section_background') == true) ){ echo 'white-ts'; } ?> clearfix" <?php if(get_sub_field('strategy_section_background')) { echo 'style="background-image:url(' . get_sub_field('strategy_section_background') . ');background-size:cover;background-position:center center;background-repeat:no-repeat;"'; } ?> >
									<?php if(get_sub_field('strategy_section_background')) { echo '<div class="overlay-black-20"></div>'; } ?>

									<div class="grid-page mauto <?php if(get_sub_field('cpt_overhang_photo_prev') == true) { echo 'overhang-padding'; } ?> 
clearfix">  

										<!-- Start Section Title -->
										<?php if( have_rows('cpt_section_title') ): $i = 0; ?>  
											<?php while(has_sub_field('cpt_section_title')): $i++; ?>
												<?php if( get_sub_field('title') ) { echo '<h2 class="pmt0'; } ?><?php if( get_sub_field('align_title_position') ) { echo ' ' . get_sub_field('align_title_position') . ''; } ?><?php if( get_sub_field('title') ) { echo '">' . get_sub_field('title') . '</h2>'; } ?> 
											<?php endwhile; ?>  
										<?php endif; ?>  
										<!-- End Section Title -->  
										
										<!-- Start Full Width Photo -->
										<?php if( have_rows('cpt_full_photo') ): $i = 0; ?>  
											<div class="grid-10 fl pb4 clearfix"> 
											<?php while(has_sub_field('cpt_full_photo')): $i++; ?> 
												<?php $image = get_sub_field('photo'); ?>
												<?php if( get_sub_field('photo') ) { echo '<div class="grid-10 fl pb2 clearfix"><div class="grid-10 fl clearfix"><img class="responsive-img fl'; } ?><?php if(get_sub_field('add_shadow')) { echo ' ' . get_sub_field('add_shadow') . ''; } ?><?php if( get_sub_field('photo') ) { echo '" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('photo') ) { echo '" border="0"/>'; } ?>  
												<?php if( (get_sub_field('color_overlay') == true) ){ echo '<div class="color-overlay-exact purple-pink-diagonal opacity20"></div>'; } ?>
												<?php if( get_sub_field('photo') ) { echo '</div>'; } ?> 
												<?php if(get_sub_field('caption')) { echo '<div class="grid-10 fl pt1"><div class="cs-caption">' . get_sub_field('caption') . '</div></div>'; } ?>
												<?php if( get_sub_field('photo') ) { echo '</div>'; } ?>   
											<?php endwhile; ?>  
											</div>
										<?php endif; ?>  
										<!-- End Full Width Photo -->  
										
										<!-- Start Photos -->  
 										<?php if( have_rows('strategy_item_right') ): $i = 0; ?><div class="strategy-col strat
											<?php while( have_rows('strategy_item_right') ): $i++; the_row(); ?><?php endwhile; ?><?php endif; ?>
										<?php if(get_sub_field('photo_col_full_width') == true) { echo 'cs-full-width'; } ?> 
										<?php if( get_sub_field('float_photo') == true ){ echo '' . get_sub_field('float_photo') . ''; } ?> 
 										<?php if( have_rows('strategy_item_right') ): $i = 0; ?>"><?php while( have_rows('strategy_item_right') ): $i++; the_row(); ?><?php endwhile; ?><?php endif; ?>
										<?php if( have_rows('strategy_item_right') ): $i = 0; ?>  
													<div class="table-strategy">
														<div class="table-cell">
															<div class="grid-10 mauto clearfix"> 
																<?php while( have_rows('strategy_item_right') ): $i++; the_row(); ?>
																	<?php $image = get_sub_field('strategy_photo'); ?>
																	<?php if(get_sub_field('strategy_photo')) { echo '<div class="cs-image-col'; } ?>
																	<?php if((get_sub_field('strategy_photo_wide') == true) ){ echo 'cs-image-col-wide'; } ?> 
																	<?php if((get_sub_field('photo_col_quarter_width') == true) ){ echo 'cs-quarter-width'; } ?> 
																	<?php if((get_sub_field('strategy_photo_fr') == true) ){ echo 'fr'; } ?>
																	<?php if(get_sub_field('strategy_photo')) { echo 'fl clearfix"><div class="grid-10 fl clearfix"><img class="responsive-img fl'; } ?><?php if(get_sub_field('strategy_add_shadow')) { echo ' ' . get_sub_field('strategy_add_shadow') . ''; } ?> <?php if((get_sub_field('strategy_photo_underline') == true) ){ echo 'bb-lt-purple'; } ?> <?php if((get_sub_field('strategy_offset') == true) ){ echo 'top40'; } ?><?php if(get_sub_field('strategy_photo')) { echo '" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('strategy_photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('strategy_photo') ) { echo '" border="0"/>'; } ?>  
																 
																	<?php if( (get_sub_field('strategy_color_overlay') == true) ){ echo '<div class="color-overlay-exact purple-pink-diagonal opacity20'; } ?><?php if(((get_sub_field('strategy_offset') && get_sub_field('strategy_color_overlay')) == true) ){ echo ' top40'; } ?>
																	<?php if( (get_sub_field('strategy_color_overlay') == true) ){ echo '"></div>'; } ?> 
																	<?php if(get_sub_field('strategy_photo')) { echo '</div>'; } ?> 

																	<?php if(get_sub_field('strategy_caption')) { echo '<div class="cs-caption'; } ?><?php if((get_sub_field('strategy_offset') == true) ){ echo ' top40'; } ?><?php if((get_sub_field('strategy_caption_white') == true) ){ echo ' white ts'; } ?><?php if(get_sub_field('strategy_caption')) { echo '">' . get_sub_field('strategy_caption') . '</div>'; } ?>
																
																	<?php if(get_sub_field('strategy_photo')) { echo '</div>'; } ?>
																<?php endwhile; ?>
															</div>
														</div>
													</div>  
										<?php endif; ?> 
										<?php if( have_rows('strategy_item_right') ): $i = 0; ?></div><?php while( have_rows('strategy_item_right') ): $i++; the_row(); ?><?php endwhile; ?><?php endif; ?>   									  		
										<!-- End Photos --> 

										<!-- Start Content -->
 										<?php if( have_rows('strategy_item') ): $i = 0; ?><div class="strategy-col strat <?php while( have_rows('strategy_item') ): $i++; the_row(); ?><?php endwhile; ?><?php endif; ?> 
										
										<?php if( get_sub_field('float_text') == true ){ echo '' . get_sub_field('float_text') . ''; } ?>  
										<?php if(get_sub_field('strategy_indent') == true) { echo 'pml30'; } ?>  
										<?php if( get_sub_field('text_full_width') ) { echo 'grid-10'; } ?> 
 
 										<?php if( have_rows('strategy_item') ): $i = 0; ?>"><?php while( have_rows('strategy_item') ): $i++; the_row(); ?><?php endwhile; ?><?php endif; ?>  
											 
										<?php // check for rows (nested repeater)
										if( have_rows('strategy_item') ): $i = 0; ?>  
												<div class="table-strategy">
													<div class="table-cell">
														<div class="grid-8b mauto pb2 clearfix">  
															<?php while( have_rows('strategy_item') ): $i++; the_row(); ?>
															<?php if(get_sub_field('strategy_headline')) { echo '<h3 class="pmb0 pmt0 ' . $classpointt . '">' . get_sub_field('strategy_headline') . '</h3>'; } ?>
															<?php if(get_sub_field('strategy_content')) { echo '' . get_sub_field('strategy_content') . ''; } ?>  
															<?php endwhile; ?>  
														</div>
													</div>
												</div>
										<?php endif; ?> 
										
										<?php if( have_rows('strategy_item') ): $i = 0; ?></div><?php while( have_rows('strategy_item') ): $i++; the_row(); ?><?php endwhile; ?><?php endif; ?>
										<!-- End Content -->  
										
										<!-- Start Client Quote -->  
										<?php // check for rows (nested repeater)
										if( have_rows('cpt_quote') ): $i = 0; ?>
											<div class="grid-10 fl clear-box pt4  pb2 clearfix">
												<div class="blockquote-wrapper">
											 		<div class="blockquote">
														<?php while( have_rows('cpt_quote') ): $i++; the_row(); ?>
															<?php if(get_sub_field('quote')) { echo '<span class="quote"><span class="purple">' . get_sub_field('quote') . '</span></span>'; } ?>
															<?php if(get_sub_field('name') || get_sub_field('company') || get_sub_field('logo')) { echo '<span class="citation purple">&mdash;&nbsp; ' . get_sub_field('name') . ''; } ?><?php if(get_sub_field('title')) { echo ', <em>' . get_field('title') . '</em>'; } ?>
															<?php if(get_sub_field('company')) { echo ', <strong>' . get_sub_field('company') . '</strong>'; } ?> 
															<?php $image = get_sub_field('logo'); ?>
															<?php if(get_sub_field('logo')) { echo '<br/><img class="cs-logo" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('logo') ) { echo '" border="0" style="height:auto;top:3px;vertical-align:bottom;width:100px;"/>'; } ?>   
															<?php if(get_sub_field('name') || get_sub_field('company') || get_sub_field('logo')) { echo '</span>'; } ?>
														<?php endwhile; ?>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<!-- End Client Quote --> 
										
										<!-- Start Press Quote -->  
										<?php // check for rows (nested repeater)
										if( have_rows('cpt_quote_press') ): $i = 0; ?>
											<div class="grid-page mauto pt4  pb2 clearfix"> 
												<?php while( have_rows('cpt_quote_press') ): $i++; the_row(); ?> 
															<?php if(get_sub_field('quote')) { echo '<img class="cs-quote-mark" src="/wp-content/uploads/2017/09/cs-quote-start-gray.svg" alt="Opening Quote" border="0"/> <div class="cs-quote purple">' . get_sub_field('quote') . '</div><img class="cs-quote-mark" src="/wp-content/uploads/2017/09/cs-quote-end-gray.svg" alt="Closing Quote" border="0"/>'; } ?>
													 
															<?php if(get_sub_field('name') || get_sub_field('title') || get_sub_field('company') || get_sub_field('logo')) { echo '<div class="cs-cite"><div class="table-strategy"><div class="table-cell">'; } ?>
															<?php if(get_sub_field('name') || get_sub_field('title') || get_sub_field('company')) { echo '&mdash;&nbsp; '; } ?>
															<?php if(get_sub_field('name')) { echo '' . get_sub_field('name') . ''; } ?>
															<?php if(get_sub_field('title')) { echo ', <em>' . get_sub_field('title') . '</em>'; } ?>
															<?php if(get_sub_field('company')) { echo ', <strong>' . get_sub_field('company') . '</strong>'; } ?> 
															<?php $image = get_sub_field('logo'); ?>
															<?php if(get_sub_field('logo')) { echo '<br/><img class="cs-logo" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('logo') ) { echo '" border="0" style="height:auto;top:3px;vertical-align:bottom;width:100px;"/>'; } ?>   
															<?php if(get_sub_field('name') || get_sub_field('title') || get_sub_field('company') || get_sub_field('logo')) { echo '</div></div></div>'; } ?>
												 
												<?php endwhile; ?> 
											</div>
										<?php endif; ?>
										<!-- End Press Quote --> 
										
										<!-- Start Overhang Photo -->
										<?php if( have_rows('cpt_overhanging_photo') ): $i = 0; ?>  
											<?php while(has_sub_field('cpt_overhanging_photo')): $i++; ?>  
												<?php $image = get_sub_field('photo'); ?>
												<?php if( get_sub_field('photo') ) { echo '<div class="grid-10 fl pt2 clearfix"><div class="overhang"><img class="responsive-img'; } ?><?php if(get_sub_field('add_shadow')) { echo ' ' . get_sub_field('add_shadow') . ''; } ?><?php if( get_sub_field('photo') ) { echo '" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('photo') ) { echo '" border="0"/>'; } ?>  
												<?php if( (get_sub_field('color_overlay') == true) ){ echo '<div class="color-overlay-exact purple-pink-diagonal opacity20"></div>'; } ?>   			
												<?php if( get_sub_field('photo') ) { echo '</div>'; } ?> 
												<?php if( get_sub_field('caption') ) { echo '<div class="cpt-caption-wrap caption-desktop"><div class="cpt-caption"><p>' . get_sub_field('caption') . '</p></div></div>'; } ?> 
												<?php if( get_sub_field('photo') ) { echo '</div>'; } ?> 
												<?php if( get_sub_field('caption') ) { echo '<div class="grid-10 fl caption-mobile"><div class="grid-page mauto"><div class="cpt-caption-rel"><p>' . get_sub_field('caption') . '</p></div></div></div> '; } ?>  
											<?php endwhile; ?>  
										<?php endif; ?>  
										<!-- End Overhang Photo --> 
									</div>
								</li>
							<?php endwhile; ?>
							</ul> 
							<?php endif; ?>  
				
					<?php if(get_field('strategy_list') || get_field('strategy_section_title')) { echo '</section>'; } ?> 

					<!-- ----------------------------- -->
					<!-- ---------- RESULTS ---------- -->
					<!-- ----------------------------- -->
					<?php if(get_field('cpt_results_section_title') || get_field('cpt_results_intro') || get_field('cpt_results_list')) { echo '<section id="results" class="grid-10 case-results fl pt5'; } ?><?php if(get_field('cpt_results_background_color')) { echo ' ' . get_field('cpt_results_background_color') . ' '; } ?><?php if(get_field('cpt_results_section_title') || get_field('cpt_results_intro') || get_field('cpt_results_list')) { echo 'clearfix"><div class="grid-page mauto clearfix">'; } ?>  
				
						<!-- Start Opening Photo -->
						<?php if(get_field('cpt_results_opening_full_width_photo')): $i = 0; ?> 
							<div class="grid-10 fl clearfix">  
							<?php while(has_sub_field('cpt_results_opening_full_width_photo')): $i++; ?> 
								<?php $image = get_sub_field('photo'); ?>
								<?php if( get_sub_field('photo') ) { echo '<div class="grid-10 fl clearfix"><img class="responsive-img'; } ?><?php if(get_sub_field('add_shadow')) { echo ' ' . get_sub_field('add_shadow') . ''; } ?><?php if( get_sub_field('photo') ) { echo '" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('photo') ) { echo '" border="0"/>'; } ?>  
								<?php if( (get_sub_field('color_overlay') == true) ){ echo '<div class="color-overlay-exact purple-pink-diagonal opacity20"></div>'; } ?>
								<?php if( get_sub_field('photo') ) { echo '</div>'; } ?> 
								<?php if(get_sub_field('caption')) { echo '<div class="grid-10 fl pt1 pb2"><div class="cs-caption">' . get_sub_field('caption') . '</div></div>'; } ?>  
							<?php endwhile; ?>  
							</div>
						<?php endif; ?>
						<!-- End Opening Photo -->  

						<?php if((get_field('cpt_results_section_title') || get_field('cpt_results_intro'))) { echo '<div class="grid-10 fl pt3 pb1 clearfix">'; } ?>
							<?php if(get_field('cpt_results_section_title')) { echo '<h2 class="mt0 mb0 white">' . get_field('cpt_results_section_title') . '</h2>'; } ?> 
							<?php if(get_field('cpt_results_intro')) { echo '<div class="grid-10 fl fs26 white clearfix">' . get_field('cpt_results_intro') . '</div>'; } ?> 
						<?php if((get_field('cpt_results_section_title') || get_field('cpt_results_intro'))) { echo '</div>'; } ?>

						<!-- Start HIGHLIGHTS -->
						<?php if(get_field('cpt_highlight_points')): $i = 0; ?>  
						<div class="grid-10 fl pt2 pb0 clearfix">  
							<table class="cpt-highlight-list clearfix"><tr>
								<?php while(has_sub_field('cpt_highlight_points')): $i++; ?>
								<?php $class = "left"; if( $i % 2 == 0 ){ $class = "right"; } ?> 
								<td class="bt1 clearfix">
									<div class="grid-page mauto clearfix"> 
										<?php if( (get_sub_field('highlight_headline') == true) ){ echo '<h3>' . get_sub_field('highlight_headline') . '</h3>'; } ?>
										<div class="bt-lt-purple"></div>
										<?php if( (get_sub_field('highlight_number') == true) ){ echo '<div class="cs-large-number white clearfix ' . $class . ''; } ?>
										<?php if( (get_sub_field('highlight_number') == true) ){ echo '">'; } ?>
										<?php the_sub_field('highlight_number'); ?>
										<?php if( (get_sub_field('highlight_number') == true) ){ echo '</div>'; } ?>

										<?php if( (get_sub_field('highlight_item') == true) ){ echo '<div class="grid-10 fl clearfix">'; } ?> 
										<?php the_sub_field('highlight_item'); ?>
										<?php if( (get_sub_field('highlight_item') == true) ){ echo '</div>'; } ?> 
									</div>
								</td>
								<?php endwhile; ?>
								</tr></table> 
						</div>
						<?php endif; ?>
						<!-- End HIGHLIGHTS --> 
				
						<!-- Start Photo Gallery -->
						<?php if(get_field('cpt_results_photo_gallery')): $i = 0; ?> 
							<div class="grid-10 fl pb8 pt4 clearfix">  
							<?php while(has_sub_field('cpt_results_photo_gallery')): $i++; ?>
								<?php if( get_sub_field('width') ) { echo '<div class="fl pt1 pb1 cpt-fw '; } ?><?php the_sub_field('width'); ?><?php if( (get_sub_field('width') == true) ){ echo ' clearfix"><div class="grid-9b mauto">'; } ?> 
								<?php $image = get_sub_field('photo'); ?>
								<?php if( get_sub_field('photo') ) { echo '<img class="responsive-img'; } ?><?php if(get_sub_field('add_shadow')) { echo ' ' . get_sub_field('add_shadow') . ''; } ?><?php if((get_sub_field('underline') == true) ){ echo ' bb-lt-purple'; } ?><?php if( get_sub_field('photo') ) { echo '" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('photo') ) { echo '" border="0"/>'; } ?>  
								<?php if( (get_sub_field('color_overlay') == true) ){ echo '<div class="color-overlay-exact purple-pink-diagonal opacity20"></div>'; } ?>  
								<?php if(get_sub_field('width')) { echo '</div>'; } ?>   
								<?php if(get_sub_field('caption')) { echo '<div class="grid-9b mauto pt1"><div class="cs-caption">' . get_sub_field('caption') . '</div></div>'; } ?>
								<?php if(get_sub_field('width')) { echo '</div>'; } ?> 
							<?php endwhile; ?>  
							</div>
						<?php endif; ?> 
						<!-- End Photo Gallery -->  

						<!-- Start List Items -->
						<?php if(get_field('cpt_results_list')): $i = 0; ?>
						<div class="grid-10 fl clearfix"> 
							<table class="cpt-results-list clearfix"><tr>
								<?php while(has_sub_field('cpt_results_list')): $i++; ?>
								<td class="clearfix">
									<div class="grid-page mauto clearfix"> 
										<?php if( (get_sub_field('cpt_results_list_item') == true) ){ echo '<div class="cpt-results-list-item clearfix">'; } ?> 
										<?php the_sub_field('cpt_results_list_item'); ?>
										<?php if( (get_sub_field('cpt_results_list_item') == true) ){ echo '</div>'; } ?> 
									</div> 
								</td>
								<?php endwhile; ?>
							</tr></table> 
						</div>
						<?php endif; ?>
						<!-- End List Items --> 
				
						<!-- Start Closing Photo -->
						<?php if(get_field('cpt_results_closing')): $i = 0; ?> 
							<div class="grid-10 fl pt2 pb0 clearfix"> 
							<?php while(has_sub_field('cpt_results_closing')): $i++; ?>  
								<?php $image = get_sub_field('photo'); ?>
								<?php if( get_sub_field('photo') ) { echo '<div class="grid-10 fl clearfix"><img class="responsive-img'; } ?><?php if(get_sub_field('add_shadow')) { echo ' ' . get_sub_field('add_shadow') . ''; } ?> 
								<?php if( get_sub_field('photo') ) { echo '" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('photo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('photo') ) { echo '" border="0"/>'; } ?>  
								<?php if( (get_sub_field('color_overlay') == true) ){ echo '<div class="color-overlay-exact purple-pink-diagonal opacity20"></div>'; } ?> 
								<?php if( get_sub_field('photo') ) { echo '</div>'; } ?> 
								<?php if(get_sub_field('caption')) { echo '<div class="grid-10 fl pb3 pt1"><div class="cs-caption">' . get_sub_field('caption') . '</div></div>'; } ?>   
							<?php endwhile; ?>  
							</div>
						<?php endif; ?> 
						<!-- End Closing Photo -->   	

					<?php if((get_field('cpt_results_section_title') || get_field('cpt_results_intro') || get_field('cpt_results_list'))) { echo '</div></section>'; } ?>
					<!-- ---------- End Results ---------- -->
				
			</article> 

			<!-- ------------------------------- -->
			<!-- ---------- FORM --------------- -->
			<!-- ------------------------------- -->
			<?php if(get_field('expertise_form_headline') || get_field('expertise_form_subheadline') || get_field('expertise_form')) { echo '<section id="get-started" class="grid-10 fl pt5 pb5 cpt-case_studies ' . get_field('expertise_form_background_color') . ' clearfix">
				<div class="grid-page clearfix">'; } ?>

					<?php if(get_field('expertise_form_headline') || get_field('expertise_form_subheadline')) { echo '<div class="grid-3b fl clearfix">'; } ?>
						<?php if(get_field('expertise_form_headline')) { echo '<h3 class="sp white">' . get_field('expertise_form_headline') . '</h3>'; } ?>
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

			<!-- ----------------------------------------------- -->
			<!-- ---------- RELATED CASE STUDIES --------------- -->
			<!-- ----------------------------------------------- -->
			<?php if(get_field('cpt_related_section_title') || get_field('cpt_related_posts_list')) { echo '<section id="related" class="grid-10 fl bg-white pt5 pb5 ' . get_field(' cpt_related_bg_color') . ' clearfix"><div class="grid-page cpt-case_studies clearfix">'; } ?> 
				<?php if(get_field('cpt_related_section_title')) { echo '<h3 class="sp mt0 purple">' . get_field('cpt_related_section_title') . '</h3>'; } ?>

				<?php if(get_field('cpt_related_posts_list')): $i = 0; ?>
				<ul class="cpt-related clearfix">
					<?php while(has_sub_field('cpt_related_posts_list')): $i++; ?> 
					<li class="animatefade animated fadeIn clearfix">  
						<?php if( (get_sub_field('link') == true) ){ echo '<a href="'; } ?><?php the_sub_field('link'); ?><?php if( (get_sub_field('link') == true) ){ echo '">'; } ?> 
							<?php if( (get_sub_field('photo') == true) ){ echo '<div class="cs-image" style="background:url(' . get_sub_field('photo') . ') no-repeat center center transparent;background-size:cover;"></div><div class="wl-overlay-color"></div>'; } ?> 

							<?php if(( (get_sub_field('label') || get_sub_field('title') || get_sub_field('logo')) == true) ){ echo '<div class="featured-wrap"><div class="table"><div class="table-cell">'; } ?> 
							<?php if( (get_sub_field('label') == true) ){ echo '<span class="cs-label white">' . get_sub_field('label') . '</span>'; } ?>
							<?php if( (get_sub_field('title') == true) ){ echo '<h2 class="white">' . get_sub_field('title') . '</h2>'; } ?> 
							<?php $image = get_sub_field('logo'); ?>
							<?php if( get_sub_field('logo') ) { echo '<span class="cs-logo"><img class="responsive-img" src="'; } ?><?php echo $image['url']; ?><?php if( get_sub_field('logo') ) { echo '" alt="'; } ?><?php echo $image['alt']; ?><?php if (get_sub_field('logo') ) { echo '" border="0"/></span>'; } ?> 
							<?php if(( (get_sub_field('label') || get_sub_field('title') || get_sub_field('logo')) == true) ){ echo '</div></div></div> 
							<div class="wl-overlay"> 
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>'; } ?>
						<?php if( (get_sub_field('link') == true) ){ echo '</a>'; } ?> 
					</li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?> 
		
			<?php if(get_field('cpt_related_section_title') || get_field('cpt_related_posts_list')) { echo '</div></section>'; } ?> 

			<!-- ----------------------------------------------- -->
			<!-- ---------- RELATED CASE STUDIES --------------- -->
			<!-- ----------------------------------------------- -->
			<section id="view-all" class="grid-10 fl bg-blue pt2 pb2 clearfix">
				<div class="grid-page clearfix">
					<a href="/work/" class="white right-link">View All Case Studies</a> 
				</div>
			</section> 

			<?php if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) { 
			}
 ?>   

		<?php endwhile; ?>
<?php wp_reset_query(); ?>   
 

	</main><!-- .site-main -->
	<?php // get_sidebar( 'content-bottom' ); ?> 
</div><!-- .content-area -->

<?php get_footer(); ?>