<?php
/** 
 * Template Name: What 
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
get_header(); ?> 
 
            <!-- WP: START OF PAGE SPECIFIC CONTENT -->
            <section class="what-overview">  
                <div class="what-overview__giant-v"></div> 

            	<?php if(get_field('hero_photo')) {
					echo '<h1 class="what-overview__header"><img src="' . get_field('hero_photo') . '" alt="What We Do" /></h1>';
				} ?> 

<!-- ---------- HERO ---------------- -->
            	<?php if(get_field('title_text')) {
					echo '<h1 class="title-main">' . get_field('title_text') . '</h1>';
				} ?> 
				
            	<?php if(get_field('intro_text')) {
					echo '<p class="what-overview__mainline">' . get_field('intro_text') . '</p>';
				} ?> 
                <!-- <p class="what-overview__subline">We create custom strategic communications programs that use public relations, branded digital media, and original content to tell your story everywhere.</p> -->
                <br /><br /><br />


<?php if(get_field('headline_&_content')): $i = 0; ?>
<?php while(has_sub_field('headline_&_content')): $i++; ?>

		<?php if( (get_sub_field('headline') == true) ){ echo '<p class="what-overview__action">'; } ?>
            <?php the_sub_field('headline'); ?>
        <?php if( (get_sub_field('headline') == true) ){ echo '</p>'; } ?>  

		<?php if( (get_sub_field('content') == true) ){ echo '<div class="what-overview__detail">'; } ?>
            <?php the_sub_field('content'); ?>
        <?php if( (get_sub_field('content') == true) ){ echo '</div>'; } ?>    

<?php endwhile; ?>
<?php endif; ?> 
            </section>
            <section class="what-difference">
                <div class="what-difference__giant-v"></div>

            	<?php if(get_field('why_photo')) {
					echo '<img class="what-difference__header" src="' . get_field('why_photo') . '" alt="Why"/>';
				} ?> 
                <img class="what-difference__focus" src="/images/what/white-focus.png" alt="Focus"/>

            	<?php if(get_field('why_intro')) {
					echo '<h1 class="what-difference__headline">' . get_field('why_intro') . '</h1>';
				} ?>  


				<?php if(get_field('why_content')): $i = 0; ?> 
					<?php while(has_sub_field('why_content')): $i++; ?>
                	<article class="what-difference__block">

					<?php if( (get_sub_field('photo') == true) ){ echo '<img class="what-difference__image" src="'; } ?>
            			<?php the_sub_field('photo'); ?>
        			<?php if( (get_sub_field('photo') == true) ){ echo '" alt="Difference"/>'; } ?>   

					<?php if( ((get_sub_field('headline') || get_sub_field('content')) == true) ){ echo '<div class="what-difference__text">'; } ?>

						<?php if( (get_sub_field('headline') == true) ){ echo '<h2 class="what-difference__heading">'; } ?>
            				<?php the_sub_field('headline'); ?>
        				<?php if( (get_sub_field('headline') == true) ){ echo '</h2>'; } ?>  

						<?php if( (get_sub_field('content') == true) ){ echo '<div class="what-difference__body">'; } ?>
        	    			<?php the_sub_field('content'); ?>
       				 	<?php if( (get_sub_field('content') == true) ){ echo '</div>'; } ?> 

					<?php if( ((get_sub_field('headline') || get_sub_field('content')) == true) ){ echo '</div>'; } ?>   

                	</article>
					<?php endwhile; ?> 
				<?php endif; ?>  

 
            </section>
            <!-- WP: END OF PAGE SPECIFIC CONTENTJ -->
        </section><!-- EO #content -->
  

<?php get_footer(); ?>