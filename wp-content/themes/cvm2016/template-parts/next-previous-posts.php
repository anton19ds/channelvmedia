<div id="post-nav"> 
    <?php $prevPost = get_previous_post();
     	if (!empty( $prevPost )) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $prevPost->ID
            );
            $prevPost = get_posts($args);
            foreach ($prevPost as $post) {
                setup_postdata($post);
    ?>
        <div class="post-previous grid-4b fl"> 
        	<ul class="work-list clearfix">
        		<li class="clearfix">
					<a class="next blue-purple-vertical cleafix" href="<?php the_permalink(); ?>" 
					<?php if ( has_post_thumbnail() ) { ?>
						<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
							echo 'style="background-image:url('.esc_url($featured_img_url).');background-size:cover;background-repeat:no-repeat;"';  
						?>
					<?php } ?>
					> 
						<div class="color-overlay blue-purple-vertical opacity50 "></div>
						<div class="h100 grid-10"><div class="wtitle-centered-vertically"><div class="table-wrap"><div class="table-wrap-cell">
						<?php // the_post_thumbnail('thumbnail'); ?>
						<p class="ttu tac meta-nav" aria-hidden="true"><img src="https://channelvmedia.com/wp-content/uploads/2017/07/link-arrow-2-previous.svg" alt="Previous" width="20" height="10" border="0"/> Previous</p>
						<span class="wl-text"><h2 class="white harriet tac fs26 bs"><?php the_title(); ?></h2></span>
						</div></div></div></div> 
					</a>
				</li>
			</ul>
        </div>
    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
         
        $nextPost = get_next_post();
        if (!empty( $nextPost )) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $nextPost->ID
            );
            $nextPost = get_posts($args);
            foreach ($nextPost as $post) {
                setup_postdata($post);
    ?>
        <div class="post-next grid-4b fr">
        	<ul class="work-list clearfix">
				<li class="clearfix">
					<a class="next blue-purple-vertical cleafix" href="<?php the_permalink(); ?>"
					<?php if ( has_post_thumbnail() ) { ?>
						<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
							echo 'style="background-image:url('.esc_url($featured_img_url).');background-size:cover;background-repeat:no-repeat;"';  
						?>
					<?php } ?>
					>
						<div class="wl-overlay" style="display:none;">
							<svg width="30" height="16" viewBox="0 0 24 13" xmlns="https://www.w3.org/2000/svg" class="link-icon"><path d="M21.453 5.643H0v.89h21.39l-5.132 4.996.915.76 6.397-6.213L17.21 0l-.954.708 5.197 4.935z" fill="#FFFFFF" fill-rule="evenodd"/></svg>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="color-overlay blue-purple-vertical opacity50 "></div>
						<div class="h100 grid-10"><div class="wtitle-centered-vertically"><div class="table-wrap"><div class="table-wrap-cell">
						<?php // the_post_thumbnail('thumbnail'); ?>
						<p class="ttu tac meta-nav" aria-hidden="true">Next <img src="https://channelvmedia.com/wp-content/uploads/2017/07/link-arrow-2.svg" alt="Next" width="20" height="10" border="0"/></p>
						<span class="wl-text"><h2 class="white harriet tac fs26 bs"><?php the_title(); ?></h2></span>
						</div></div></div></div> 
					</a>
				</li>
			</ul>
        </div>
    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
    ?>
</div> 