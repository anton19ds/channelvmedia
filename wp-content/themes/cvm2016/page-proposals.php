<?php
/**
 * Template Name: Proposals
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
get_header(); ?>  

<div class="grid-page ppt10 clearfix"><div class="fl ppb3 ppt10-850 clearfix"><h1 class="page-mainline darwin">Proposals &amp; Case Studies</h1></div></div>

<div class="grid-page ppb2 clearfix">
	<main class="ppb4 clearfix">
<!-- ---------------------------- -->
<!-- ---------- PROPOSAL LIST --- -->
<!-- ---------------------------- -->
		<div class="grid-4b fl clearfix">
			<h2 class="darwin fs30 pink">Proposals</h2>
		<?php if(get_field('proposal_links')): $i = 0; ?> 
			<ul class="proposal-list clearfix"> 
				<?php while(has_sub_field('proposal_links')): $i++; ?>
				<li class="clearfix">
					<?php if( (get_sub_field('link') == true) ){ echo '<a href="'; } ?>
						<?php the_sub_field('link'); ?>
					<?php if( (get_sub_field('link') == true) ){ echo '" target="-blank">'; } ?> 
							<?php if( (get_sub_field('name') == true) ){ echo '<h3>'; } ?>
								<?php the_sub_field('name'); ?>
							<?php if( (get_sub_field('name') == true) ){ echo '</h3>'; } ?>   
					<?php if( (get_sub_field('link') == true) ){ echo '</a>'; } ?>    
				</li>  
				<?php endwhile; ?>
			</ul> 
		<?php endif; ?>
		</div>
		<div class="grid-4b fr clearfix">
			<h2 class="darwin fs30 pink">Case Studies</h2>
			<?php if(get_field('case_study_links')): $i = 0; ?> 
			<ul class="proposal-list clearfix"> 
				<?php while(has_sub_field('case_study_links')): $i++; ?>
				<li class="clearfix">
					<?php if( (get_sub_field('link') == true) ){ echo '<a href="'; } ?>
						<?php the_sub_field('link'); ?>
					<?php if( (get_sub_field('link') == true) ){ echo '" target="-blank">'; } ?> 
							<?php if( (get_sub_field('name') == true) ){ echo '<h3>'; } ?>
								<?php the_sub_field('name'); ?>
							<?php if( (get_sub_field('name') == true) ){ echo '</h3>'; } ?>   
					<?php if( (get_sub_field('link') == true) ){ echo '</a>'; } ?>    
				</li>  
				<?php endwhile; ?>
			</ul> 
			<?php endif; ?>
			
			<h2 class="darwin fs30 pink">Other</h2>
			<?php if(get_field('other_links')): $i = 0; ?> 
			<ul class="proposal-list clearfix"> 
				<?php while(has_sub_field('other_links')): $i++; ?>
				<li class="clearfix">
					<?php if( (get_sub_field('link') == true) ){ echo '<a href="'; } ?>
						<?php the_sub_field('link'); ?>
					<?php if( (get_sub_field('link') == true) ){ echo '" target="-blank">'; } ?> 
							<?php if( (get_sub_field('name') == true) ){ echo '<h3>'; } ?>
								<?php the_sub_field('name'); ?>
							<?php if( (get_sub_field('name') == true) ){ echo '</h3>'; } ?>   
					<?php if( (get_sub_field('link') == true) ){ echo '</a>'; } ?>    
				</li>  
				<?php endwhile; ?>
			</ul> 
			<?php endif; ?>
		</div>
	</main>
</div><!-- .grid-page -->

<?php get_footer(); ?>