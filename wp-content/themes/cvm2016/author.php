<?php
/**
 * The template for displaying author pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */

get_header(); ?>  

	<!-- Get Author ID --> 
	<?php $author_id = get_the_author_meta('ID'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main clearfix" role="main"> 

			<div class="grid-work mauto"> 
				<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
			</div>

			<div class="grid-work tac pt3 clearfix"> 
				<div class="grid-1b fl mt10 clearfix">  
					<?php echo get_avatar( get_the_author_meta( 'ID' ), $size = '150', $default = '', $alt = '', $args = array( 'class' => 'fl responsive-img br-fifty' ) ); ?> 
				</div>
				<div class="grid-4b fl clearfix">
					<div class="grid-8 mauto clearfix"> 
						<?php the_archive_title( '<h1 class="block-headline_author purple tal mt10 mb10 fs30">', '</h1>' ); ?>  

						<?php $author_work_title_1 = get_field('author_work_title', 'user_'. $author_id ); ?>
						<?php if($author_work_title_1 == true) { echo '<div class="grid-10 tal"><p><em>'; } ?><?php echo $author_work_title_1; ?><?php if($author_work_title_1 == true) { echo '</em></p></div>'; } ?> 
						
						<div class="grid-10 fl tal">
							<ul class="social-bar-small"> 
								<?php if(strlen(get_the_author_meta('facebook')) >5) { ?>
								<li><a target="_blank" class="facebook purple" href="<?php the_author_meta('facebook'); ?>" title="Facebook"><span>facebook</span></a></li> 
								<?php } ?> 
								<?php if(strlen(get_the_author_meta('instagram')) >5) { ?>
								<li><a target="_blank" class="instagram purple" href="<?php the_author_meta('instagram'); ?>" title="Instagram"><span>instagram</span></a></li> 
								<?php } ?>  
								<?php if(strlen(get_the_author_meta('linkedin')) >5) { ?>
								<li><a target="_blank" class="linkedin purple" href="<?php the_author_meta('linkedin'); ?>" title="Linkedin"><span>linkedin</span></a></li> 
								<?php } ?> 
								<?php if(strlen(get_the_author_meta('myspace')) >5) { ?>
								<li><a target="_blank" class="myspace purple" href="<?php the_author_meta('myspace'); ?>" title="MySpace"><span>myspace</span></a></li> 
								<?php } ?>
								<?php if(strlen(get_the_author_meta('pinterest')) >5) { ?>
								<li><a target="_blank" class="pinterest purple" href="<?php the_author_meta('pinterest'); ?>" title="Pinterest"><span>pinterest</span></a></li> 
								<?php } ?>
								<?php if(strlen(get_the_author_meta('soundcloud')) >5) { ?>
								<li><a target="_blank" class="soundcloud purple" href="<?php the_author_meta('soundcloud'); ?>" title="SoundCloud"><span>soundcloud</span></a></li> 
								<?php } ?>
								<?php if(strlen(get_the_author_meta('tumblr')) >5) { ?>
								<li><a target="_blank" class="tumblr purple" href="<?php the_author_meta('tumblr'); ?>" title="Tumblr"><span>tumblr</span></a></li> 
								<?php } ?>
								<?php if(strlen(get_the_author_meta('twitter')) >5) { ?>
								<li><a target="_blank" class="twitter purple" href="<?php the_author_meta('twitter'); ?>" title="Twitter"><span>twitter</span></a></li> 
								<?php } ?>
								<?php if(strlen(get_the_author_meta('youtube')) >5) { ?>
								<li><a target="_blank" class="youtube purple" href="<?php the_author_meta('youtube'); ?>" title="YouTube"><span>youtube</span></a></li> 
								<?php } ?>
							</ul>  
						</div>
						<div class="grid-10 fl tal gray6"><p><?php $authorDesc = the_author_meta('description'); echo $authorDesc; ?></p></div>
					</div>
				</div>  
				
				<!-- Start Education List --> 
				<?php $author_edu_title = get_field('education_title', 'user_'. $author_id ); ?>
				<?php $author_edu_col_num = get_field('edu_col_num', 'user_'. $author_id ); ?>
				<?php $author_edu_logo_1 = get_field('edu_logo_1', 'user_'. $author_id ); ?> 
				<?php $author_edu_inst_1 = get_field('edu_inst_1', 'user_'. $author_id ); ?>
				<?php $author_edu_deg_1 = get_field('edu_deg_1', 'user_'. $author_id ); ?>
				<?php $author_edu_logo_2 = get_field('edu_logo_2', 'user_'. $author_id ); ?> 
				<?php $author_edu_inst_2 = get_field('edu_inst_2', 'user_'. $author_id ); ?>
				<?php $author_edu_deg_2 = get_field('edu_deg_2', 'user_'. $author_id ); ?>
				<?php $author_edu_logo_3 = get_field('edu_logo_3', 'user_'. $author_id ); ?> 
				<?php $author_edu_inst_3 = get_field('edu_inst_3', 'user_'. $author_id ); ?>
				<?php $author_edu_deg_3 = get_field('edu_deg_3', 'user_'. $author_id ); ?> 
				<?php $author_edu_logo_4 = get_field('edu_logo_4', 'user_'. $author_id ); ?> 
				<?php $author_edu_inst_4 = get_field('edu_inst_4', 'user_'. $author_id ); ?>
				<?php $author_edu_deg_4 = get_field('edu_deg_4', 'user_'. $author_id ); ?> 
				<?php $author_edu_logo_5 = get_field('edu_logo_5', 'user_'. $author_id ); ?> 
				<?php $author_edu_inst_5 = get_field('edu_inst_5', 'user_'. $author_id ); ?>
				<?php $author_edu_deg_5 = get_field('edu_deg_5', 'user_'. $author_id ); ?> 
				<?php if($author_edu_logo_1 || $author_edu_logo_2 || $author_edu_logo_3 || $author_edu_logo_4 || $author_edu_logo_5 || $author_edu_inst_1 || $author_edu_inst_2 || $author_edu_inst_3 || $author_edu_inst_4 || $author_edu_inst_5 == true) { echo '<div class="grid-4 fl clearfix">'; } ?>

				<?php if($author_edu_title == true) { echo '<div class="grid-10 tal"><span class="author-exp-title">'; } ?><?php echo $author_edu_title; ?><?php if($author_edu_title == true) { echo '</span></div>'; } ?>
				<?php if($author_edu_logo_1 || $author_edu_logo_2 || $author_edu_logo_3 || $author_edu_logo_4 || $author_edu_logo_5 || $author_edu_inst_1 || $author_edu_inst_2 || $author_edu_inst_3 || $author_edu_inst_4 || $author_edu_inst_5 == true) { echo '<ul class="author-exp">'; } ?>
					<?php if($author_edu_logo_1 || $author_edu_inst_1 == true) { echo '<li class="'; } ?><?php if(($author_edu_col_num && $author_edu_inst_1) == true) { ?><?php echo $author_edu_col_num; ?><?php } ?><?php if($author_edu_logo_1 || $author_edu_inst_1  == true) { echo '">'; } ?>
						<?php if($author_edu_logo_1 == true) { echo '<span class="icon"><img class="responsive-img" src="'; } ?><?php echo $author_edu_logo_1['url']; ?><?php if($author_edu_logo_1 == true) { echo '" alt="'; } ?><?php echo $author_edu_logo_1['alt']; ?><?php if($author_edu_logo_1 == true) { echo '" /></span>'; } ?> 
						<?php if($author_edu_inst_1 == true) { echo '<span class="text tal light-purple"><strong>'; } ?><?php echo $author_edu_inst_1; ?><?php if($author_edu_inst_1 == true) { echo '</strong></span>'; } ?> 
						<?php if($author_edu_deg_1 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_edu_deg_1; ?><?php if($author_edu_deg_1 == true) { echo '</p>'; } ?>
					<?php if($author_edu_logo_1 || $author_edu_inst_1 == true) { echo '</li>'; } ?>
				
					<?php if($author_edu_logo_2 || $author_edu_inst_2 == true) { echo '<li class="'; } ?><?php if(($author_edu_col_num && $author_edu_inst_2) == true) { ?><?php echo $author_edu_col_num; ?><?php } ?><?php if($author_edu_logo_2 || $author_edu_inst_2 == true) { echo '">'; } ?> 
						<?php if($author_edu_logo_2 == true) { echo '<span class="icon"><img class="responsive-img" src="'; } ?><?php echo $author_edu_logo_2['url']; ?><?php if($author_edu_logo_2 == true) { echo '" alt="'; } ?><?php echo $author_edu_logo_2['alt']; ?><?php if($author_edu_logo_2 == true) { echo '" /></span>'; } ?> 
						<?php if($author_edu_inst_2 == true) { echo '<span class="text tal light-purple"><strong>'; } ?><?php echo $author_edu_inst_2; ?><?php if($author_edu_inst_2 == true) { echo '</strong></span>'; } ?> 
						<?php if($author_edu_deg_2 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_edu_deg_2; ?><?php if($author_edu_deg_2 == true) { echo '</p>'; } ?>
					<?php if($author_edu_logo_2 || $author_edu_inst_2 == true) { echo '</li>'; } ?>
				
					<?php if($author_edu_logo_3 || $author_edu_inst_3 == true) { echo '<li class="'; } ?><?php if(($author_edu_col_num && $author_edu_inst_3) == true) { ?><?php echo $author_edu_col_num; ?><?php } ?><?php if($author_edu_logo_3 || $author_edu_inst_3 == true) { echo '">'; } ?> 
						<?php if($author_edu_logo_3 == true) { echo '<span class="icon"><img class="responsive-img" src="'; } ?><?php echo $author_edu_logo_3['url']; ?><?php if($author_edu_logo_3 == true) { echo '" alt="'; } ?><?php echo $author_edu_logo_3['alt']; ?><?php if($author_edu_logo_3 == true) { echo '" /></span>'; } ?> 
						<?php if($author_edu_inst_3 == true) { echo '<span class="text tal light-purple"><strong>'; } ?><?php echo $author_edu_inst_3; ?><?php if($author_edu_inst_3 == true) { echo '</strong></span>'; } ?> 
						<?php if($author_edu_deg_3 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_edu_deg_3; ?><?php if($author_edu_deg_3 == true) { echo '</p>'; } ?>
					<?php if($author_edu_logo_3 || $author_edu_inst_3 == true) { echo '</li>'; } ?>
				
					<?php if($author_edu_logo_4 || $author_edu_inst_4 == true) { echo '<li class="'; } ?><?php if(($author_edu_col_num && $author_edu_inst_4) == true) { ?><?php echo $author_edu_col_num; ?><?php } ?><?php if($author_edu_logo_4 || $author_edu_inst_4 == true) { echo '">'; } ?> 
						<?php if($author_edu_logo_4 == true) { echo '<span class="icon"><img class="responsive-img" src="'; } ?><?php echo $author_edu_logo_4['url']; ?><?php if($author_edu_logo_4 == true) { echo '" alt="'; } ?><?php echo $author_edu_logo_4['alt']; ?><?php if($author_edu_logo_4 == true) { echo '" /></span>'; } ?> 
						<?php if($author_edu_inst_4 == true) { echo '<span class="text tal light-purple"><strong>'; } ?><?php echo $author_edu_inst_4; ?><?php if($author_edu_inst_4 == true) { echo '</strong></span>'; } ?> 
						<?php if($author_edu_deg_4 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_edu_deg_4; ?><?php if($author_edu_deg_4 == true) { echo '</p>'; } ?>
					<?php if($author_edu_logo_4 || $author_edu_inst_4 == true) { echo '</li>'; } ?>
				
					<?php if($author_edu_logo_5 || $author_edu_inst_5 == true) { echo '<li class="'; } ?><?php if(($author_edu_col_num && $author_edu_inst_5) == true) { ?><?php echo $author_edu_col_num; ?><?php } ?><?php if($author_edu_logo_5 || $author_edu_inst_5 == true) { echo '">'; } ?> 
						<?php if($author_edu_logo_5 == true) { echo '<span class="icon"><img class="responsive-img" src="'; } ?><?php echo $author_edu_logo_5['url']; ?><?php if($author_edu_logo_5 == true) { echo '" alt="'; } ?><?php echo $author_edu_logo_5['alt']; ?><?php if($author_edu_logo_5 == true) { echo '" /></span>'; } ?> 
						<?php if($author_edu_inst_5 == true) { echo '<span class="text tal light-purple"><strong>'; } ?><?php echo $author_edu_inst_5; ?><?php if($author_edu_inst_5 == true) { echo '</strong></span>'; } ?> 
						<?php if($author_edu_deg_5 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_edu_deg_5; ?><?php if($author_edu_deg_5 == true) { echo '</p>'; } ?>
					<?php if($author_edu_logo_5 || $author_edu_inst_5 == true) { echo '</li>'; } ?>

				<?php if($author_edu_logo_1 || $author_edu_logo_2 || $author_edu_logo_3 || $author_edu_logo_4 || $author_edu_logo_5 || $author_edu_inst_1 || $author_edu_inst_2 || $author_edu_inst_3 || $author_edu_inst_4 || $author_edu_inst_5 == true) { echo '</ul>'; } ?>  
				<!-- End Education List -->
				
				<!-- Start Expertise List -->
				<?php $author_exp_title = get_field('exp_title', 'user_'. $author_id ); ?>
				<?php $author_exp_col_num = get_field('exp_col_num', 'user_'. $author_id ); ?>
				<?php $author_exp_1 = get_field('exp_1', 'user_'. $author_id ); ?> 
				<?php $author_exp_2 = get_field('exp_2', 'user_'. $author_id ); ?> 
				<?php $author_exp_3 = get_field('exp_3', 'user_'. $author_id ); ?> 
				<?php $author_exp_4 = get_field('exp_4', 'user_'. $author_id ); ?> 
				<?php $author_exp_5 = get_field('exp_5', 'user_'. $author_id ); ?>
				<?php $author_exp_6 = get_field('exp_6', 'user_'. $author_id ); ?> 
				<?php $author_exp_7 = get_field('exp_7', 'user_'. $author_id ); ?> 
				<?php $author_exp_8 = get_field('exp_8', 'user_'. $author_id ); ?> 
				<?php $author_exp_9 = get_field('exp_9', 'user_'. $author_id ); ?> 
				<?php $author_exp_10 = get_field('exp_10', 'user_'. $author_id ); ?> 
				<?php $author_exp_11 = get_field('exp_11', 'user_'. $author_id ); ?> 
				<?php $author_exp_12 = get_field('exp_12', 'user_'. $author_id ); ?> 
				<?php $author_exp_13 = get_field('exp_13', 'user_'. $author_id ); ?> 
				<?php $author_exp_14 = get_field('exp_14', 'user_'. $author_id ); ?> 
				<?php $author_exp_15 = get_field('exp_15', 'user_'. $author_id ); ?> 
				<?php $author_exp_16 = get_field('exp_16', 'user_'. $author_id ); ?> 
				<?php $author_exp_17 = get_field('exp_17', 'user_'. $author_id ); ?> 
				<?php $author_exp_18 = get_field('exp_18', 'user_'. $author_id ); ?> 
				
				<?php if($author_exp_title == true) { echo '<div class="grid-10 fl tal"><span class="author-exp-title">'; } ?><?php echo $author_exp_title; ?><?php if($author_exp_title == true) { echo '</span></div>'; } ?> 
				
				<?php if($author_exp_1 || $author_exp_2 || $author_eexp_3 || $author_exp_4 || $author_exp_5 || $author_exp_6 || $author_exp_7 || $author_exp_8 || $author_exp_9 || $author_exp_10 || $author_exp_11 || $author_exp_12 || $author_exp_13 || $author_exp_14 || $author_exp_15 || $author_exp_16 || $author_exp_17 || $author_exp_18 == true) { echo '<ul class="author-expertise">'; } ?>
				
					<?php if($author_exp_1 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_1) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_1 == true) { echo '">'; } ?>  
						<?php if($author_exp_1 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_1; ?><?php if($author_exp_1 == true) { echo '</p>'; } ?>
					<?php if($author_exp_1 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_2 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_2) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_2 == true) { echo '">'; } ?>  
						<?php if($author_exp_2 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_2; ?><?php if($author_exp_2 == true) { echo '</p>'; } ?>
					<?php if($author_exp_2 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_3 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_3) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_3 == true) { echo '">'; } ?>  
						<?php if($author_exp_3 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_3; ?><?php if($author_exp_3 == true) { echo '</p>'; } ?>
					<?php if($author_exp_3 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_4 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_4) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_4 == true) { echo '">'; } ?>  
						<?php if($author_exp_4 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_4; ?><?php if($author_exp_4 == true) { echo '</p>'; } ?>
					<?php if($author_exp_4 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_5 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_5) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_5 == true) { echo '">'; } ?>  
						<?php if($author_exp_5 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_5; ?><?php if($author_exp_5 == true) { echo '</p>'; } ?>
					<?php if($author_exp_5 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_6 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_6) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_6 == true) { echo '">'; } ?>  
						<?php if($author_exp_6 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_6; ?><?php if($author_exp_6 == true) { echo '</p>'; } ?>
					<?php if($author_exp_6 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_7 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_7) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_7 == true) { echo '">'; } ?>  
						<?php if($author_exp_7 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_7; ?><?php if($author_exp_7 == true) { echo '</p>'; } ?>
					<?php if($author_exp_7 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_8 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_8) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_8 == true) { echo '">'; } ?>  
						<?php if($author_exp_8 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_8; ?><?php if($author_exp_8 == true) { echo '</p>'; } ?>
					<?php if($author_exp_8 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_9 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_9) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_9 == true) { echo '">'; } ?>  
						<?php if($author_exp_9 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_9; ?><?php if($author_exp_9 == true) { echo '</p>'; } ?>
					<?php if($author_exp_9 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_10 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_10) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_10 == true) { echo '">'; } ?>  
						<?php if($author_exp_10 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_10; ?><?php if($author_exp_10 == true) { echo '</p>'; } ?>
					<?php if($author_exp_10 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_11 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_11) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_11 == true) { echo '">'; } ?>  
						<?php if($author_exp_11 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_11; ?><?php if($author_exp_11 == true) { echo '</p>'; } ?>
					<?php if($author_exp_11 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_12 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_12) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_12 == true) { echo '">'; } ?>  
						<?php if($author_exp_12 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_12; ?><?php if($author_exp_12 == true) { echo '</p>'; } ?>
					<?php if($author_exp_12 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_13 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_13) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_13 == true) { echo '">'; } ?>  
						<?php if($author_exp_13 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_13; ?><?php if($author_exp_13 == true) { echo '</p>'; } ?>
					<?php if($author_exp_13 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_14 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_14) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_14 == true) { echo '">'; } ?>  
						<?php if($author_exp_14 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_14; ?><?php if($author_exp_14 == true) { echo '</p>'; } ?>
					<?php if($author_exp_14 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_15 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_15) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_15 == true) { echo '">'; } ?>  
						<?php if($author_exp_15 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_15; ?><?php if($author_exp_15 == true) { echo '</p>'; } ?>
					<?php if($author_exp_15 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_16 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_16) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_16 == true) { echo '">'; } ?>  
						<?php if($author_exp_16 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_16; ?><?php if($author_exp_16 == true) { echo '</p>'; } ?>
					<?php if($author_exp_16 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_17 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_17) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_17 == true) { echo '">'; } ?>  
						<?php if($author_exp_17 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_17; ?><?php if($author_exp_17 == true) { echo '</p>'; } ?>
					<?php if($author_exp_17 == true) { echo '</li>'; } ?>
				
					<?php if($author_exp_18 == true) { echo '<li class="'; } ?><?php if(($author_exp_col_num && $author_exp_18) == true) { ?><?php echo $author_exp_col_num; ?><?php } ?><?php if($author_exp_18 == true) { echo '">'; } ?>  
						<?php if($author_exp_18 == true) { echo '<p class="text tal gray6">'; } ?><?php echo $author_exp_18; ?><?php if($author_exp_18 == true) { echo '</p>'; } ?>
					<?php if($author_exp_18 == true) { echo '</li>'; } ?>
				
				<?php if($author_exp_1 || $author_exp_2 || $author_eexp_3 || $author_exp_4 || $author_exp_5 || $author_exp_6 || $author_exp_7 || $author_exp_8 || $author_exp_9 || $author_exp_10 || $author_exp_11 || $author_exp_12 || $author_exp_13 || $author_exp_14 || $author_exp_15 || $author_exp_16 || $author_exp_17 || $author_exp_18 == true) { echo '</ul>'; } ?> 
				
				<?php if($author_edu_logo_1 || $author_edu_logo_2 || $author_edu_logo_3 || $author_edu_logo_4 || $author_edu_logo_5 || $author_exp_1 || $author_exp_2 || $author_eexp_3 || $author_exp_4 || $author_exp_5 || $author_exp_6 || $author_exp_7 || $author_exp_8 || $author_exp_9 || $author_exp_10 || $author_exp_11 || $author_exp_12 || $author_exp_13 || $author_exp_14 || $author_exp_15 || $author_exp_16 || $author_exp_17 || $author_exp_18 == true) { echo '</div>'; } ?>  

				<div class="grid-10 fl mt30 mb0 clearfix">
					<p class="sp purple tal fs18 mb0"><strong>Latest Posts By <?php the_archive_title( '', '' ); ?></strong></p>
				</div>
				
				<!-- ---------- BLOG POSTS ------ -->
				<ul class="blog-posts ppb2 pmt2 tal clearfix">
					<?php global $more; $more = 0; ?>
					<?php if ( have_posts() ) : ?>
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post(); ?>
					<li class="<?php echo $cat; ?> clearfix">
						<?php if( (get_field('news_url') == true) ) {
							echo '<a href="' . get_field('news_url') . '" target="_blank"';
						} else { ?>
						<a href="<?php the_permalink(); ?>"
							<?php } ?> class="<?php if((get_field('press_featured') == true) ){ echo 'featured'; } ?>"> 
							<div class="post-image">
								<div class="post-bg"
									 <?php if (has_post_thumbnail( $post->ID ) ): ?>
									 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
									 echo 'style="background-image:url(' . $image[0] . ');"'; ?>
									 <?php endif; ?>
									 >   
								</div>
								<div class="color-overlay purple-pink-diagonal opacity20 "></div>
							</div>
							<div class="blog-content-wrap mauto clearfix"> 
								<h2 class="blog-headline pt1"><?php the_title(); ?></h2>
								<div class="blog-content"><?php echo excerpt(15); ?></div> 
								<span class="blog-link">Read More</span> 
							</div> 
						</a> 
					</li>


					<?php endwhile;

					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( 'Previous page', 'twentysixteen' ),
						'next_text'          => __( 'Next page', 'twentysixteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
					) );

					// If no content, include the "No posts found" template.
					else :
						get_template_part( 'template-parts/content', 'none' );

					endif;
					?> 
				</ul> <!-- end pressroom-posts-lst -->   
				
				 
			</div> 
<?php wp_reset_query(); ?>

		</main><!-- .site-main --> 

	</div><!-- .content-area -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
