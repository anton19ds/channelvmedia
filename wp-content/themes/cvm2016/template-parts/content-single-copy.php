<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
?>
<script type="text/javascript" src="/wp-content/themes/cvm2016/js/revealer-head.js"></script> 
   
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
	<div class="section section-text-over-media viewport-height has-image has-text">  
		<div class="text title-inner center center">
<!-- Start Category Icon -->
			<?php if(get_field('category')): $i = 0; ?>  
			<div class="wl-cat-wrap">
				<?php while(has_sub_field('category')): $i++; ?>
					<?php if( (get_sub_field('category_url') == true) ){ echo '<a href="/category/'; } ?>
					<?php the_sub_field('category_url'); ?>
					<?php if( (get_sub_field('category_url') == true) ){ echo '">'; } ?>
					<?php if( (get_sub_field('icon') == true) ){ echo '<div class="wl-icon icon-center'; } ?>
						<?php the_sub_field('icon'); ?>
					<?php if( (get_sub_field('icon') == true) ){ echo '">'; } ?>
					<?php if( (get_sub_field('icon') == true) ){ echo '</div>'; } ?>

					<?php if( ((get_sub_field('name') || get_sub_field('source') || get_sub_field('text_color'))  == true) ){ echo '<div class="wl-cat '; } ?>
						<?php if( ((get_sub_field('name') || get_sub_field('source') || get_sub_field('text_color'))  == true) ){ echo '' . the_sub_field('text_color') . ''; } ?>
						<?php if( ((get_sub_field('name') || get_sub_field('source'))  == true) ){ echo 'icon-center white'; } ?>
						<?php if( ((get_sub_field('name') || get_sub_field('source'))  == true) ){ echo '">'; } ?>
							<?php the_sub_field('name'); ?><?php the_sub_field('source'); ?>
					<?php if( ((get_sub_field('name') || get_sub_field('source') || get_sub_field('text_color'))  == true) ){ echo '</div>'; } ?>
					<?php if( (get_sub_field('category_url') == true) ){ echo '</a>'; } ?>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
<!-- End Category Icon -->

			<?php if(get_field('section_bg_with_text')): $i = 0; ?> 
			<?php while(has_sub_field('section_bg_with_text')): $i++; ?> 
				<?php if( (get_sub_field('client_logo') == true) ){ echo '<img class="mw100" src="'; } ?>
					<?php the_sub_field('client_logo'); ?>
				<?php if( (get_sub_field('client_logo') == true) ){ echo '" border="0"/>'; } ?> 
			<?php endwhile; ?> 
			<?php endif; ?>  

			<h1 class="story-title"><?php the_title(); ?></h1> 
		</div>  

		<div class="section-background instant-background"
			<?php if(get_field('background')): $i = 0; ?>
			<?php while(has_sub_field('background')): $i++; ?> 
					<?php if( (get_sub_field('photo') == true) ){ echo 'style="background:url('; } ?>
						<?php if( (get_sub_field('photo') == true) ){ ?>
							<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
								echo '' . $image[0] . ''; ?>
							<?php endif; ?>
						 <?php } ?>
					<?php if( (get_sub_field('photo') == true) ){ echo ');background-size:cover;background-position:center center;"'; } ?>
			<?php endwhile; ?>
			<?php endif; ?>
							
			<?php if(get_field('photo_box')): $i = 0; ?>
			<?php while(has_sub_field('photo_box')): $i++; ?> 
					<?php if( (get_sub_field('photo') == true) ){ echo 'style="background:url('; } ?>
						<?php if( (get_sub_field('photo') == true) ){ ?>
							<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
								echo '' . $image[0] . ''; ?>
							<?php endif; ?>
						 <?php } ?> 													
					<?php if( (get_sub_field('photo') == true) ){ echo ');background-size:cover;background-position:center center;"'; } ?>
			<?php endwhile; ?>
			<?php endif; ?>>
			
			<!-- <div class="background-overlay"></div> -->

			<?php if(get_field('background')): $i = 0; ?>  
				<?php while(has_sub_field('background')): $i++; ?>
					<?php if( ((get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '<div class="color-overlay z3'; } ?>
						<?php the_sub_field('color_gradient'); ?> <?php the_sub_field('color_gradient_opacity'); ?> 
					<?php if( ((get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '"></div>'; } ?>
				<?php endwhile; ?>  
			<?php endif; ?> 
	
			<?php if(get_field('photo_box')): $i = 0; ?>  
				<?php while(has_sub_field('photo_box')): $i++; ?>
					<?php if( ((get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '<div class="color-overlay z3'; } ?>
						<?php the_sub_field('color_gradient'); ?> <?php the_sub_field('color_gradient_opacity'); ?> 
					<?php if( ((get_sub_field('color_gradient') || get_sub_field('color_gradient_opacity')) == true) ){ echo '"></div>'; } ?>
				<?php endwhile; ?>  
			<?php endif; ?> 

  			<div class="hero-logo-gradient"></div>  

		</div>
	</div> 


	<?php if(get_field('section_bg_with_text')): $i = 0; ?> 
	<?php while(has_sub_field('section_bg_with_text')): $i++; ?>
	<!-- <div class="section section-text-over-media section-text-over-image has-text viewport-height"> --> 
	<div class="grid-10 bg-white clearfix"> 
			<?php if( (get_sub_field('headline') == true) ){ echo '<div class="grid-post mauto ppt5 clearfix">'; } ?>
			<?php if( (get_sub_field('category_label') == true) ){ echo '<span class="cs-service-label fl">'; } ?>
				<?php the_sub_field('category_label'); ?>
			<?php if( (get_sub_field('category_label') == true) ){ echo '</span>'; } ?>

			<?php if( (get_sub_field('headline') == true) ){ echo '<h1 class="cs-heading fl">'; } ?> 
				<?php the_sub_field('headline'); ?>
			<?php if( (get_sub_field('headline') == true) ){ echo '</h1>'; } ?>  
			<?php if( (get_sub_field('subheadline') == true) ){ echo '<h2 class="cs-tagline seventy fl">'; } ?>
				<?php the_sub_field('subheadline'); ?>
			<?php if( (get_sub_field('subheadline') == true) ){ echo '</h2>'; } ?>
			<?php if( (get_sub_field('headline') == true) ){ echo '</div>'; } ?>  
	</div>  
	<?php endwhile; ?> 
	<?php endif; ?>  


	<?php if(get_field('content_1')) { echo '<div class="section section-text inner-column-centered "><div class="grid-post mauto ppt5 ppb5 clearfix"> ' . get_field('content_1') . '</div></div>'; } ?>  


	<?php if(get_field('photos')): $i = 0; ?> 
	<div class="section section-reveal" data-section-reveal="" data-viewport-height="" data-viewport-height-property="min-height"> 
	  	<div class="reveal-media" data-reveal-media="">
		<canvas class="reveal-media-canvas viewport-height" data-foreground-canvas="">
			<div class="reveal-media-items">
			<?php while(has_sub_field('photos')): $i++; ?>
				<?php $image = get_sub_field('photo'); ?>
				<?php if( (get_sub_field('photo') == true) ){ echo '<aside class="reveal-media-item" data-transition="fade" data-transition-delay="0"><picture>'; } ?>
					<img data-instant-image="" class="reveal-media-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" border="0"/>
				<?php if( (get_sub_field('photo') == true) ){ echo '</picture></aside>'; } ?> 
			<?php endwhile; ?> 
			</div>
		</canvas>
	  </div>
	</div>
	<?php endif; ?>
	
 	 


	<?php if(get_field('content_2')) { echo '<div class="section section-text inner-column-centered"><div class="grid-post mauto ppt5 ppb5 clearfix"> ' . get_field('content_2') . '</div></div>'; } ?>


	<?php if(get_field('photo_gallery_2')): $i = 0; ?> 
	<div class="section section-reveal" data-section-reveal="" data-viewport-height="" data-viewport-height-property="min-height"> 
	  	<div class="reveal-media" data-reveal-media="">
		<canvas class="reveal-media-canvas viewport-height" data-foreground-canvas="">
			<div class="reveal-media-items">
			<?php while(has_sub_field('photo_gallery_2')): $i++; ?>
				<?php $image = get_sub_field('photo'); ?>
				<?php if( (get_sub_field('photo') == true) ){ echo '<aside class="reveal-media-item" data-transition="fade" data-transition-delay="0"><picture>'; } ?>
					<img data-instant-image="" class="reveal-media-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" border="0"/>
				<?php if( (get_sub_field('photo') == true) ){ echo '</picture></aside>'; } ?> 
			<?php endwhile; ?> 
			</div>
		</canvas>
	  </div>
	</div>
	<?php endif; ?>  
	
	 
	


	<?php if(get_field('content_3')) { echo '<div class="section section-text inner-column-centered"><div class="grid-post mauto ppt5 ppb5 clearfix"> ' . get_field('content_3') . '</div></div>'; } ?>


	<?php if(get_field('photo_gallery_3')): $i = 0; ?> 
	<div class="section section-reveal" data-section-reveal="" data-viewport-height="" data-viewport-height-property="min-height"> 
	  	<div class="reveal-media" data-reveal-media="">
		<canvas class="reveal-media-canvas viewport-height" data-foreground-canvas="">
			<div class="reveal-media-items">
			<?php while(has_sub_field('photo_gallery_3')): $i++; ?>
				<?php $image = get_sub_field('photo'); ?>
				<?php if( (get_sub_field('photo') == true) ){ echo '<aside class="reveal-media-item" data-transition="fade" data-transition-delay="0"><picture>'; } ?>
					<img data-instant-image="" class="reveal-media-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" border="0"/>
				<?php if( (get_sub_field('photo') == true) ){ echo '</picture></aside>'; } ?> 
			<?php endwhile; ?> 
			</div>
		</canvas>
	  </div>
	</div>
	<?php endif; ?>
</article>



			
				<?php if (in_category('public-relations')) { ?>
					<div class="grid-10 ppt1 ppb1 blue-pink-diagonal clearfix">
						<a class="cs-cta" href="/category/case-studies/public-relations"><img src="/wp-content/uploads/2017/06/icon-case-studies.svg" alt="Case Studies icon"><span>Public Relations</span></a> 
					</div>
				<?php } elseif (in_category('digital')){ ?> 
					<div class="grid-10 ppt1 ppb1 blue-pink-diagonal clearfix">
						<a class="cs-cta" href="/category/case-studies/digital/"><img src="/wp-content/uploads/2017/06/icon-case-studies.svg" alt="Case Studies icon"><span>Digital</span></a>
					</div>
				<?php } elseif (in_category('case-studies')){ ?> 
					<div class="grid-10 ppt1 ppb1 blue-pink-diagonal clearfix">
						<a class="cs-cta" href="/category/case-studies/"><img src="/wp-content/uploads/2017/06/icon-case-studies.svg" alt="Case Studies icon"><span>Case Studies</span></a>
					</div>
				<?php } elseif (in_category('ideas')){ ?>  
					<div class="grid-10 ppt1 ppb1 blue-green-diagonal clearfix"> 
						<a class="cs-cta" href="/category/ideas/"><img src="/wp-content/uploads/2017/06/icon-ideas.svg" alt="Ideas icon"><span>Ideas</span></a>
					</div>
				<?php } elseif (in_category('news')){ ?> 
					<div class="grid-10 ppt1 ppb1 orange-pink-diagonal clearfix"> 
						<a class="cs-cta" href="/category/news/"><img src="/wp-content/uploads/2017/06/icon-news.svg" alt="News icon"><span>News</span></a> 
					</div>
				<?php } elseif (in_category('resources')){ ?> 
					<div class="grid-10 ppt1 ppb1 yellow-blue-diagonal clearfix">
						<a class="cs-cta" href="/category/resources/"><img src="/wp-content/uploads/2017/06/icon-resources.svg" alt="Resources icon"><span>Resources</span></a> 
					</div>
				<?php } else { ?>  
				<?php } ?> 

<?php 
 if ( in_category('case-studies') || in_category('digital') || in_category('public-relations') || in_category('ideas') || in_category('news') || in_category('resources')  ) {
	echo '<div class="grid-10 purple-blue-left-to-right clearfix" style="display:none;"><a class="work-link" href="/work/"><div class="bg-our-work"></div><span>View Our Work</span></a></div>';
} elseif ( in_category( array( 'ebooks' ) )) {  
} else {
	echo '';
}
?>

  

 
<script type="text/javascript" src="/wp-content/themes/cvm2016/js/revealer.js"></script>

<script type="text/javascript">
require(empConfig, ['bump-3', 'jquery-1.9', 'istats-1'], function (bump, $, istats) {
  var settings = {
		product: 'news',
		playerProfile: 'smp',
		responsive: true,
		counterName: istats.getCountername()
	  },
	  smpVidsController = {},
	  isMobileDevice = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
	  scrollDelayTimer;

  // autogenerated do not edit

  // end of autogenerated code

  var documentViewport = function () {
	var docViewTop = $(window).scrollTop(),
		docViewBottom = docViewTop + $(window).height(),
		docViewHeight = docViewBottom - docViewTop,
		viewThreshold = docViewHeight * 0.4;

	return {
	  'top': docViewTop,
	  'bottom': docViewBottom,
	  'height':docViewHeight,
	  'threshold': viewThreshold
	}
  };

  var isElementInView = function (elem) {
	  var elemTop = elem.offset().top,
		  elemBottom = elemTop + elem.height(),
		  viewport = documentViewport();

	  return (elemTop < (viewport.bottom - viewport.threshold)) && (elemBottom > (viewport.top + viewport.threshold));
  };

  var videoObjectForThisElement = function (elem) {
	  var vidControllerObj = smpVidsController[elem.attr('id')],
		  playerInstance = vidControllerObj.mp,
		  currentTime = playerInstance.currentTime(),
		  vidPaused = playerInstance.paused();

	  return {
		'instance': playerInstance,
		'currentTime': currentTime,
		'autoPaused': vidControllerObj.autoPaused,
		'userPaused': vidControllerObj.userPaused,
		'paused': vidPaused
	  }

  };

  if (isMobileDevice) {
	return;
  }

  // track the scroll event..
  $(window).on('scroll', function(e) {
	if (scrollDelayTimer) { clearTimeout(scrollDelayTimer); }
	scrollDelayTimer = setTimeout(function() {
	  $(window).trigger('delayedEvent');
	}, 200);
  });

  $(window).on('delayedEvent', function() {

	for (var vidDetails in smpVidsController) {

	  var element = $(smpVidsController[vidDetails].id),
		  currentVideoObject = videoObjectForThisElement(element),
		  videoElementInView = isElementInView(element);

	  if (!currentVideoObject.userPaused && !currentVideoObject.autoPaused && currentVideoObject.paused) {
		currentVideoObject.instance.userPaused = true;
	  }
	  if (currentVideoObject.userPaused && currentVideoObject.autoPaused && !currentVideoObject.paused) {
		currentVideoObject.instance.userPaused = false;
	  }

	  //user paused state
	  if (videoElementInView && currentVideoObject.paused && !currentVideoObject.autoPaused) {
		currentVideoObject.instance.userPaused = true;
	  }
	  if (!currentVideoObject.paused) {
		currentVideoObject.instance.userPaused = false;
	  }

	  //auto paused state
	  currentVideoObject.instance.autoPaused = !videoElementInView;

	  // play or pause video
	  if (smpVidsController[vidDetails].autoPlay && videoElementInView && !currentVideoObject.userPaused && !currentVideoObject.instance.ended()) {
		currentVideoObject.instance.play();
	  }
	  if (!videoElementInView) {
		currentVideoObject.instance.pause();
	  }
	}
  });

});
</script>

 
