<section class="related-posts bg-gray1 mt0 pb1 pt1 z1 clearfix" style="position:relative;">
	<?php $related = ci_get_related_posts( get_the_ID(), 3 );
	if ( $related->have_posts() ): ?>
	<div class="grid-page">
		<h2>People also read</h2>
		<ul class="blog-related-posts-flex">
			<?php while ( $related->have_posts() ): $related->the_post(); ?>
			<li class="project three">
				<a href="<?php the_permalink(); ?>">
					<span class="post-content">
						<span class="post-img"> 
							<span class="post-bg clearfix" 
								  <?php if (has_post_thumbnail( $post->ID ) ): ?>
								  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
								  echo 'style="background-image:url(' . $image[0] . ');"'; ?>
								  <?php endif; ?>>
								<span class="color-overlay purple-pink-diagonal opacity20"></span>
							</span>
						</span>
						<h3 class="post-name mt0 mb10"><?php the_title(); ?></h3>
						<span class="post-link">Read More</span>
					</span>
				</a>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
	<?php endif; wp_reset_postdata(); ?>
</section>  