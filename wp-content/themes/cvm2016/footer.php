<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
?>
        </section>
		<?php wp_footer(); ?>
		<?php if(get_field('leadership_list')): $i = 0; ?>
		<div class="staff-bio-overlay tog"></div>
		<div class="staff-bio-wrapper tog">
			<div class="staff-close pink-purple-diagonal tog">
				<?php while(has_sub_field('leadership_list')): $i++; ?>
				<div class="staff-bio-inner <?php the_sub_field('name'); ?>" id="<?php the_sub_field('name'); ?>">
					<?php if( ((get_sub_field('title') || get_sub_field('name')) == true) ){ echo '<div class="grid-8 fl clearfix">'; } ?>
						<?php if( (get_sub_field('title') == true) ){ echo '<h6>'; } ?>
						<?php the_sub_field('title'); ?>  
						<?php if( (get_sub_field('title') == true) ){ echo '</h6>'; } ?>
						<?php if( (get_sub_field('name') == true) ){ echo '<h5>'; } ?>
						<?php the_sub_field('name'); ?>  
						<?php if( (get_sub_field('name') == true) ){ echo '</h5>'; } ?>
					<?php if( ((get_sub_field('title') || get_sub_field('name')) == true) ){ echo '</div>'; } ?> 
				</div>
				<?php endwhile; ?>  
				<a class="tog" href="#"></a>
			</div> 
		<?php endif; ?>
		<?php if(get_field('leadership_list')): $i = 0; ?>
		<div class="staff-bio">
			<?php while(has_sub_field('leadership_list')): $i++; ?>
			<div class="staff-bio-inner <?php the_sub_field('name'); ?>" id="<?php the_sub_field('name'); ?>"> 
				<?php if( (get_sub_field('photo') == true) ){ echo '<div class="grid-4 fl clearfix"><img class="staff-photo" src="'; } ?><?php the_sub_field('photo'); ?><?php if( (get_sub_field('photo') == true) ){ echo '" alt="Staff" border="0"/></div>'; } ?>
				<?php if( (get_sub_field('biography') == true) ){ echo '<div class="grid-5b fr clearfix"><div class="staff-desc">'; } ?><?php the_sub_field('biography'); ?><?php if( (get_sub_field('biography') == true) ){ echo '</div></div>'; } ?>
			</div>
			<?php endwhile; ?>
		</div>
		</div>
		<?php endif; ?>
        <footer class="site-footer fl">
            <div class="site-footer__col one"><a data-transition="up" href="/"><img class="site-footer__logo" src="/wp-content/uploads/2019/10/cvm-logo-white-late-2018.svg" width="50" height="50" alt="Channel V Media Logo"/></a></div>
            <div class="site-footer__col two">
				<?php if(get_field('footer_col_one_title', 'option')) { echo '<h3 class="'; } ?><?php if((get_field('footer_col_one_title_color', 'option') && get_field('footer_col_one_title', 'option')) == true ) { echo '' . get_field('footer_col_one_title_color', 'option') . ''; } ?><?php if(get_field('footer_col_one_title', 'option')) { echo '">' . get_field('footer_col_one_title', 'option') . '</h3>'; } ?> 
				<?php wp_nav_menu( array('menu' => 'Footer Nav', 'menu_class' => 'footer-nav', 'option')); ?> 
            </div>
            <div class="site-footer__col third">
				<?php if(get_field('footer_col_two_title', 'option')) { echo '<h3 class="'; } ?><?php if((get_field('footer_col_two_title_color', 'option') && get_field('footer_col_two_title', 'option')) == true ) { echo '' . get_field('footer_col_two_title_color', 'option') . ''; } ?><?php if(get_field('footer_col_two_title', 'option')) { echo '">' . get_field('footer_col_two_title', 'option') . '</h3>'; } ?> 
				<?php wp_nav_menu( array('menu' => 'Footer Services Nav', 'menu_class' => 'footer-nav', 'option')); ?> 
            </div>
            <div class="site-footer__col fourth pb2">
				<?php if(get_field('footer_col_three_title', 'option')) { echo '<h3 class="'; } ?><?php if((get_field('footer_col_three_title_color', 'option') && get_field('footer_col_three_title', 'option')) == true ) { echo '' . get_field('footer_col_three_title_color', 'option') . ''; } ?><?php if(get_field('footer_col_three_title', 'option')) { echo '">' . get_field('footer_col_three_title', 'option') . '</h3>'; } ?>
				
				<?php if((get_field('address_street', 'option') || get_field('address_floor', 'option') || get_field('address_city', 'option') || get_field('address_state', 'option') || get_field('address_zip', 'option')) == true) { echo '<address>'; } ?>
					<?php if(get_field('address_street', 'option')) { echo '' . get_field('address_street', 'option') . ''; } ?><?php if(get_field('address_floor', 'option')) { echo ', ' . get_field('address_floor', 'option') . '<br/>'; } ?><?php if(get_field('address_city', 'option')) { echo '' . get_field('address_city', 'option') . ''; } ?><?php if(get_field('address_state', 'option')) { echo ', ' . get_field('address_state', 'option') . ''; } ?><?php if(get_field('address_zip', 'option')) { echo ' ' . get_field('address_zip', 'option') . '<br/>'; } ?>
					<?php if(get_field('address_email', 'option')) { echo '<a class="site-footer__email" href="mailto:' . get_field('address_email', 'option') . '">' . get_field('address_email', 'option') . '</a><br/>'; } ?>
					<?php if(get_field('address_phone', 'option')) { echo '<a href="tel:+1' . get_field('address_phone', 'option') . '" class="tel">' . get_field('address_phone', 'option') . '</a>'; } ?>
				<?php if((get_field('address_street', 'option') || get_field('address_floor', 'option') || get_field('address_city', 'option') || get_field('address_state', 'option') || get_field('address_zip', 'option')) == true) { echo '</address>'; } ?>  
            </div> 
            <div class="site-footer__col fourth pb4">
				<?php if(get_field('address_map', 'option')) { echo '' . get_field('address_map', 'option') . ''; } ?> 
            </div> 
            <div class="site-footer__copyright pb6">
				<?php if(get_field('footer_social_bar', 'option')): $i = 0; ?>
				<ul class="social-bar-small">
					<?php while(has_sub_field('footer_social_bar', 'option')): $i++; ?> 
					<li><?php if( (get_sub_field('link') == true) ){ echo '<a target="_blank"'; } ?><?php if( (get_sub_field('outlet') == true) ){ echo ' title="'; } ?><?php the_sub_field('outlet'); ?><?php if( (get_sub_field('outlet') == true) ){ echo '"'; } ?><?php if( (get_sub_field('link') == true) ){ echo ' class="'; } ?><?php the_sub_field('outlet'); ?><?php if( (get_sub_field('link') == true) ){ echo '" href="'; } ?><?php the_sub_field('link'); ?><?php if( (get_sub_field('link') == true) ){ echo '">'; } ?><span><?php the_sub_field('outlet'); ?></span><?php if( (get_sub_field('link') == true) ){ echo '</a>'; } ?> </li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?> 
            </div> 
			<?php if(get_field('copyright_line', 'option')) { echo '<div class="site-footer__copyright">&copy;2008 &#8211; '; } ?><?php echo date('Y'); ?><?php if(get_field('copyright_line', 'option')) { echo ' ' . get_field('copyright_line', 'option') . '</div>'; } ?> 
        </footer> 
		<?php if (is_single()) { ?> 
		</div>
		<?php } ?> 			 
		<?php if (is_singular('case_studies') || is_singular('case-studies')) { ?> 
		</div>
		<?php } ?> 
        <script type="text/javascript" src="/wp-content/themes/cvm2016/js/modernizr-custom.min.js"></script> 
        <script async src=https://www.googletagmanager.com/gtag/js?id=G-VPCQQL3ZPT></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-VPCQQL3ZPT'); </script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MT6Z5WL');</script>
		<script type='text/javascript' src='/wp-content/themes/cvm2016/js/jquery-3.7.1.min.js' id='jquery-core-js' defer></script>
        <script type="text/javascript" src="/wp-content/themes/cvm2016/js/jquery-ui.min.js" defer></script>  
		
		<?php if (is_page_template('page-work.php') || is_page('PR Case Studies')) { ?> 
		<script type="text/javascript" src="/wp-content/themes/cvm2016/js/work-page.min.js" defer></script>  
		<?php } ?> 
		<?php if((get_field('career_js')) == true) { ?>
		<script type="text/javascript" src="/wp-content/themes/cvm2016/js/careers-application.min.js" defer></script>   
		<?php } ?>   
		<?php if (is_page_template('page-careers-application.php')) { ?>   
		<script type="text/javascript" src="/wp-content/themes/cvm2016/js/careers-application.min.js" defer></script>  
		<?php } ?>  
		<!-- <script type="text/javascript" src="/wp-content/themes/cvm2016/js/who-page.min.js"></script> --> 
		<?php if((get_field('five_step_js') || get_field('perspective_gallery_js')) == true) { ?>
			<script type="text/javascript" src="/wp-content/themes/cvm2016/js/TweenMax.min.js" defer></script>
			<!-- <script defer src="<?php echo get_template_directory_uri(); ?>/js/TextPlugin.min.js"></script> 
			<script defer src="/wp-content/themes/cvm2016/js/imagesloaded.pkgd.min.js"></script> -->
			<script type="text/javascript" src="/wp-content/themes/cvm2016/js/ScrollMagic.min.js" defer></script>
			<script type="text/javascript" src="/wp-content/themes/cvm2016/js/animation.gsap.min.js" defer></script>
			<!-- <script defer src="<?php echo get_template_directory_uri(); ?>/js/ScrollToPlugin.min.js"></script> -->
			<script type="text/javascript" src="/wp-content/themes/cvm2016/js/green-socket.min.js"defer></script>
			<script type="text/javascript" src="/wp-content/themes/cvm2016/js/gsap.min.js"defer></script>
			<script type="text/javascript" src="/wp-content/themes/cvm2016/js/ScrollTrigger.min.js" defer></script> 
		<?php } ?>
		<!-- SLIDERS --> 
		<?php if((get_field('slider_js')) == true) { ?>
			<link rel="stylesheet" type="text/css" media="all" type="text/css" href="/wp-content/themes/cvm2016/css/style-mod-swiper.min.css"/>
			<script type="text/javascript" src="/wp-content/themes/cvm2016/js/swiper.min.js" defer></script>
			<!-- <script async src="/wp-content/themes/cvm2016/js/swiper.scrollbar-2.1.min.js"></script>   -->
			<!-- <script async src="/wp-content/themes/cvm2016/js/swiper-configs.min.js"></script>   -->
		<?php } ?> 
		<?php if((get_field('map_js')) == true) { ?>  
			<script type="text/javascript" src="/wp-content/themes/cvm2016/js/interactive-map.min.js" defer></script> 
		<?php } ?> 
		<?php if((get_field('perspective_gallery_js')) == true) { ?>
			<script type="text/javascript" src="/wp-content/themes/cvm2016/js/gsap-perspective-gallery.min.js" defer></script> 
		<?php } ?>


		<?php // if (is_page('Home Dev') || is_page('Home')) { ?> 
		<!-- <script type="text/javascript" src="<?php // echo get_template_directory_uri(); ?>/js/gsap-latest-beta.min.js"></script> -->
		<?php // } ?>
		<?php if (is_page('public-relations') ) { ?> 
			<?php get_template_part( 'template-parts/schema/public-relations-faq-schema'); ?> 
		<?php } ?>
		<?php if (is_page('retail-technology-pr') ) { ?> 
			<?php get_template_part( 'template-parts/schema/retail-technology-pr-faq-schema'); ?> 
		<?php } ?>
		<?php if (is_page('FinTech PR') ) { ?> 
			<?php get_template_part( 'template-parts/schema/fintech-pr-faq-schema'); ?> 
		<?php } ?>
		<?php if (is_page('food-and-beverage-pr') ) { ?>
			<?php get_template_part( 'template-parts/schema/food-and-beverage-pr-faq-schema'); ?> 
		<?php } ?>
		<?php if (is_page('b2b-pr-agency') ) { ?>
			<?php get_template_part( 'template-parts/schema/b2b-pr-agency-faq-schema'); ?> 
		<?php } ?> 
		<?php if (is_page('climate-tech-pr') ) { ?>
			<?php get_template_part( 'template-parts/schema/climate-tech-pr-faq-schema'); ?> 
		<?php } ?> 
		<?php if (is_page('press-release') ) { ?>
			<?php get_template_part( 'template-parts/schema/press-release-service-faq-schema'); ?> 
		<?php } ?>
		<?php if (is_page('media-relations') ) { ?>
			<?php get_template_part( 'template-parts/schema/media-relations-service-faq-schema'); ?> 
		<?php } ?>
        <script type="text/javascript" src="/wp-content/themes/cvm2016/js/animations.min.js" defer></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-81835927-1', 'auto');
			ga('send', 'pageview');
		</script> 
 </body>
</html>