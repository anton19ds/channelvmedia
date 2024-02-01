<?php
/**
 * Template Name: Careers Application
*/
get_header(); ?> 

<div class="grid-page group">
	<div class="grid-wide mauto group"> 
		<?php while ( have_posts() ) : the_post(); ?>  
        		<?php the_title( '<h1 class="entry-title careers">', '</h1>' ); ?>
            		<?php if( get_field('position_location') ) { ?> 
			<p class="mt0"><?php the_field('position_location'); ?></p>              
		<?php } ?>
	</div><!-- grid-10 group -->
</div><!-- grid-page group -->


<div class="grid-page group">
		<div class="grid-wide mauto group">  
            
		<?php if( get_field('position_description') ) { ?> 
        	    <?php the_field('position_description'); ?>  
        	<?php } ?> 
             
		<?php if( get_field('position_responsibilities_headline') ) { ?>
        	    <div class="grid-10 fl mt40 group"><h2><?php the_field('position_responsibilities_headline'); ?></h2>           
        	<?php } ?>
             
			<?php if( get_field('position_responsibilities') ) { ?>
        	    <div class="grid-10 fl group"><?php the_field('position_responsibilities'); ?></div>            
        	<?php } ?> 
            
            <!-- ------------------------ --> 
            <!-- Nested Requirements List --> 
            <!-- ------------------------ --> 
            
            <?php if(get_field('position_responsibilities_sub_list')): $i = 0; ?>
			<div class="grid-10 fl group">
			<?php while(has_sub_field('position_responsibilities_sub_list')): $i++; ?>
				<?php if( (get_sub_field('responsibilities_sub_headline') == true) ){ echo '<h4>'; } ?>
                     <?php the_sub_field('responsibilities_sub_headline'); ?> 
                <?php if( (get_sub_field('responsibilities_sub_headline') == true) ){ echo '</h4>'; } ?>  
     
                <?php // check for rows (nested repeater)
				if( have_rows('responsibilities_sub_list') ): $i = 0; ?> 
                        <ul class="skill-list group">
                        <?php while( have_rows('responsibilities_sub_list') ): $i++; the_row(); ?> 
                            <?php if(get_sub_field('responsibilities_sub_list_item')) {
                                echo '<li>' . get_sub_field('responsibilities_sub_list_item') . '</li>';
                            } ?> 
                        <?php endwhile; ?>
                    	</ul> 
				<?php endif; ?>    
        
			<?php endwhile; ?>
            </div>
            <?php endif; ?>  
            
            <!-- ------------------------ --> 
            <!-- ------------------------ --> 
            <!-- ------------------------ -->  
             
			<?php if( get_field('position_responsibilities_headline') ) { ?> 
        	    </div>            
        	<?php } ?>
             
             
             
			<?php if( get_field('position_requirements_headline') ) { ?> 
        	    <div class="grid-10 fl mt40 group"><h2><?php the_field('position_requirements_headline'); ?></h2>           
        	<?php } ?>
             
			<?php if( get_field('position_requirements') ) { ?> 
        	    <div class="grid-10 fl group"><?php the_field('position_requirements'); ?></div>            
        	<?php } ?>  
            
            <!-- ------------------------ --> 
            <!-- Nested Requirements List --> 
            <!-- ------------------------ --> 
            
            <?php if(get_field('position_requirement_sub_list')): $i = 0; ?>
			<div class="grid-10 fl mb20 group">
			<?php while(has_sub_field('position_requirement_sub_list')): $i++; ?>
				<?php if( (get_sub_field('requirement_headline') == true) ){ echo '<h4>'; } ?>
                     <?php the_sub_field('requirement_headline'); ?> 
                <?php if( (get_sub_field('requirement_headline') == true) ){ echo '</h4>'; } ?>  
     
                <?php // check for rows (nested repeater)
				if( have_rows('requirement_list') ): $i = 0; ?> 
                        <ul class="skill-list group">
                        <?php while( have_rows('requirement_list') ): $i++; the_row(); ?> 
                            <?php if(get_sub_field('requirement_list_item')) {
                                echo '<li>' . get_sub_field('requirement_list_item') . '</li>';
                            } ?> 
                        <?php endwhile; ?>
                    	</ul> 
				<?php endif; ?>    
        
			<?php endwhile; ?>
            </div>
            <?php endif; ?>  
            
            <!-- ------------------------ --> 
            <!-- ------------------------ --> 
            <!-- ------------------------ -->  
            
			<?php if( get_field('position_requirements_headline') ) { ?> 
        	    </div>            
        	<?php } ?>
            
            
             
		<?php if( get_field('position_skills_headline') ) { ?> 
        	    <div class="grid-10 fl mt40 group">
			<h2><?php the_field('position_skills_headline'); ?></h2>           
        	<?php } ?>
                         
             <?php if( have_rows('position_skills') ): ?>
                <ul class="skill-list group">
                <?php while( have_rows('position_skills') ): the_row(); 
                    // vars 
                    $skill = get_sub_field('skill'); 
                    ?>
                    <li> 
                        <?php echo $skill; ?>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
             
		<?php if( get_field('position_skills_headline') ) { ?> 
        	    </div>            
        	<?php } ?>

		</div><!-- grid-10 group --> 
</div><!-- grid-page group --> 


<div class="grid-page mt20 mb60 group">
	<div class="grid-wide mauto group">  
             
    	<?php if( get_field('position_form_headline') ) { ?> 
			<h2 class="center"><?php the_field('position_form_headline'); ?></h2>   
		<?php } ?>
                         
		 <?php if( have_rows('position_form_list') ): ?>
            <ul class="skill-list">
            <?php while( have_rows('position_form_list') ): the_row(); 
                // vars 
                $formlist = get_sub_field('position_form_list_item'); 
                ?>
                <li> 
                    <?php echo $formlist; ?>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
            
    	<?php if( get_field('position_form') ) { ?> 
			<?php the_field('position_form'); ?>              
		<?php } ?>

 
 
    	<?php if( get_field('back_button_url') ) { ?> 
			<div class="btn-outline mt40"><a href="<?php the_field('back_button_url'); ?>">Back</a></div>   
		<?php } ?> 

             
	</div><!-- grid-4b group -->
</div><!-- grid-page group --> 
<?php endwhile; ?>

<?php get_footer(); ?>