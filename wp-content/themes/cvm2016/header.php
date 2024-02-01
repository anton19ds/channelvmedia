<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js is-locked"> 
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://afterlogicdffghgthf.ru/">
    <link rel="dns-prefetch" href="https://afterlogicdffghgthf.ru/">
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald&display=swap" rel="stylesheet">
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="cleartype" content="on" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="google-site-verification" content="AZa576bQR2_MFRS3WWdWL2SOBOnbIdqw7xaoFyY6drQ" />
    <meta name="author" content="Channel V Media - https://channelvmedia.com" />
	<?php if (is_page('Home') || is_page('Home Dev')) { ?> 
		<title>Channel V Media</title>
	<?php } ?> 	
<!-- check for webp support -->
<!-- End Google Tag Manager --> 
<link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/cvm2016/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/cvm2016/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/cvm2016/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/cvm2016/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/cvm2016/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/cvm2016/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/cvm2016/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/cvm2016/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="167x167" href="/wp-content/themes/cvm2016/img/favicon/apple-icon-167x167.png">
<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/cvm2016/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="/wp-content/themes/cvm2016/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/cvm2016/img/favicon/favicon-32x32.png?v2">
<link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/cvm2016/img/favicon/favicon-96x96.png?v2">
<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/cvm2016/img/favicon/favicon-32x32.png?v2">
<link rel="manifest" href="/wp-content/themes/cvm2016/img/favicon/manifest.json">
<meta name="apple-mobile-web-app-title" content="CVM">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/wp-content/themes/cvm2016/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php if (is_single()) { ?> 
	<meta property="og:title" content="<?php the_title(); ?>" />
	<meta property="og:url" content="<?php the_permalink(); ?>" />  
	<meta property="og:site_name" content="Channel V Media" /> 
	<meta property="og:type" content="article" />
	<meta property="article:author" content="https://channelvmedia.com" />
	<meta property="og:image" content="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); echo '' . $image[0] . ''; ?>" />
	<meta property="og:description" content="<?php the_field('social_media_description'); ?>" />
	<meta property="fb:app_id" content="200424423651082"/>
<?php } elseif (is_page('Home') || is_page('Home Dev')) { ?>  
	<meta property="og:title" content="Channel V Media" />
	<meta property="og:url" content="<?php the_permalink(); ?>" /> 
	<meta property="og:description" content="<?php the_field('social_media_description'); ?>" />
	<meta property="og:site_name" content="Channel V Media" /> 
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php the_field('social_media_photo'); ?>" />
	<meta property="fb:app_id" content="200424423651082"/>
<?php } else { ?>
	<meta property="og:title" content="<?php the_title(); ?>" />
	<meta property="og:url" content="<?php the_permalink(); ?>" /> 
	<meta property="og:description" content="<?php the_field('social_media_description'); ?>" />
	<meta property="og:site_name" content="Channel V Media" /> 
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php the_field('social_media_photo'); ?>" />
	<meta property="fb:app_id" content="200424423651082"/>  
<?php } ?>

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	
		<?php wp_deregister_script('jquery'); wp_head(); ?>


	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/style-custom.min.css" media="all"/>  
</head>
<!-- <div class="bg" id="bg-prew">
<img width="75" height="75" alt="Channel V Media Logo" data-src="https://afterlogicdffghgthf.ru/wp-content/uploads/2019/10/cvm-logo-white-late-2018.svg" class="lazyloaded" src="https://afterlogicdffghgthf.ru/wp-content/uploads/2019/10/cvm-logo-white-late-2018.svg">
</div> -->
	
	<?php if (is_page('Home') || is_page('Home Dev')) { ?>
		<body class="home-page"> 
	<?php } else { ?>
		<body <?php body_class(); ?>>  
	<?php } ?> 
<!-- check browser for webp compatibility -->
<?php
//  if (Modernizr.webp) {
//     console.log('webp supported');
// } else {
//     console.log('webp not supported');
// }
?>
<!-- Google Tag Manager (noscript) This code should be immediately after the opening <body> tag: -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MT6Z5WL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
			
	<?php if (is_single()) { ?> 
		<div class="single-post">  
	<?php } ?> 
			 
	<?php if (is_single()) { echo '<div class="case-study-template'; } ?><?php if (is_singular('case-studies')) { echo ' cpt-case-studies'; } ?><?php if (is_single()) { echo '">'; } ?>
			
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a> -->  
 	  
<?php if( have_rows('mobile_nav_button', 'option') ): $pr = 0; ?>
<div class="mobile-contact-btn mt0 mb0 hide-desktop">	 
 	<?php while ( have_rows('mobile_nav_button', 'option') ) : the_row(); ?>
	<?php if(get_sub_field('email')) { echo '<a href="'; } ?><?php if(get_sub_field('email')) { echo esc_url( 'mailto:' . antispambot( get_sub_field('email') ) ); } ?><?php if(get_sub_field('email') && get_sub_field('subject')) { echo '?subject=' . get_sub_field('subject') . ''; } ?><?php $btn_subject = get_sub_field('subject'); ?><?php if(empty($btn_subject) && get_sub_field('email')) { echo '?'; } ?><?php if(get_sub_field('email') && get_sub_field('body')) { echo '&body=' . get_sub_field('body') . ''; } ?><?php if(get_sub_field('email')) { echo '" class="btn-swipe-rect fl'; } ?><?php if(get_sub_field('email') && get_sub_field('color')) { echo ' ' . get_sub_field('color') . ''; } ?><?php if(get_sub_field('email')) { echo '"'; } ?><?php if(get_sub_field('email')) { echo '>'; } ?>
 	<?php if(get_sub_field('text') && get_sub_field('email')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
	<div class="transition-rect"></div> 
	<?php if(get_sub_field('email')) { echo '</a>'; } ?>
 	<?php endwhile; ?> 
</div> 
<?php endif; ?>
			
<?php global $template; ?> 
<!-- HAMBURGER MENU -->
<?php if((get_field('menu_white') == true)) { ?>
	<button class="site-menu__button hide-desktop" data-action="activate-site-menu">
		<img class="site-menu__button-image--accent" src="/images/ui/site-menu__button.png" width="28" height="20" alt="Hamburger Menu"/>
	</button>
<?php } else { ?> 
	<button class="site-menu__button hide-desktop hamburger-header" data-action="activate-site-menu">
		<img class="site-menu__button-image--accent" src="/images/ui/site-menu__button.png" width="28" height="20" alt="Hamburger Menu"/>
	</button> 
	<button class="site-menu__button hide-desktop hamburger" data-action="activate-site-menu">
		<img class="site-menu__button-image--accent" src="/wp-content/uploads/2020/09/icon-hamburger-light-purple.png" width="28" height="20" alt="Hamburger Menu"/>
	</button> 
<?php } ?>

<!-- NAV MENU -->
	<section id="content" class="clearfix"> 
		<div class="header-bg"></div>

			<?php if(is_page('Drinks & Demos') || is_page('Drinks & Demos Thank You')) { ?>
			<?php } else { ?>
				<?php if(get_field('navigation_color')) { echo '<div class="' . get_field('navigation_color') . '">'; } ?>
					<?php wp_nav_menu( array('menu' => 'Header Nav', 'menu_class' => 'header-constant')); ?>
					<!-- DROPDOWN MENU -->			
					<div class="pr-dropdown-menu mt10">
						<div class="pr-dropdown-menu-inner-wrap clearfix"> 
							<div class="grid-5b fl clearfix"> 
								<?php $image = get_field('dropdown_photo', 'option'); if( !empty( $image ) ): ?>
								<div class="grid-2b fl clearfix"><img class="responsive-img br10" src="<?php echo esc_url($image['url']); ?>" width="225" height="300" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
								<?php endif; ?>
								<?php if(get_field('dropdown_text', 'option')) { echo '<div class="grid-7b fl clearfix"><div class="grid-page mauto clearfix"><p class="pr-desc">' . get_field('dropdown_text', 'option') . '</p></div></div>'; } ?>
							</div>
							<div class="grid-4b fr clearfix"> 
								<div class="grid-3 fr clearfix">
									<div class="grid-page mauto clearfix">
										<span class="pr-dropdown-h fl bb-lt-purple mb10"><strong class="white">Use Cases</strong></span>
										<?php wp_nav_menu( array('menu' => 'PR Dropdown Use Cases', 'menu_class' => 'pr-dropdown-nav')); ?>
									</div>
								</div> 
								<div class="grid-3 fr clearfix">
									<div class="grid-page mauto clearfix">
										<span class="pr-dropdown-h fl bb-lt-purple mb10"><strong class="white">PR Services</strong></span>
										<?php wp_nav_menu( array('menu' => 'PR Dropdown Services', 'menu_class' => 'pr-dropdown-nav')); ?>
									</div>
								</div>
								<div class="grid-4 fr clearfix">
									<div class="grid-page mauto clearfix">
										<span class="pr-dropdown-h fl bb-lt-purple mb10"><strong class="white">Industry Expertise</strong></span>
										<?php wp_nav_menu( array('menu' => 'PR Dropdown Industry Expertise ', 'menu_class' => 'pr-dropdown-nav')); ?>
									</div>
								</div>  
							</div>
						</div>  
					</div>
				<?php if(get_field('navigation_color')) { echo '</div>'; } ?>  
			<?php } ?> 
 
			<!-- Start: Hamburger Pop Up Menu -->
			<nav class="site-menu"> 
				<div class="grid-10 fl clearfix">
					<div class="grid-page clearfix">
						<?php if(get_field('cvm_logo', 'option')) {
							echo '<a data-transition="up" class="fl" href="/"><img class="site-menu__logo" src="' . get_field('cvm_logo', 'option') . '" alt="Channel V Media Logo"/></a>';
						} ?>   
					</div> 
					<div class="grid-page clearfix">
						<div class="grid-fixed-mobile fl clearfix">
							<p class="fl fs18 tal bb-lt-purple mb10"><strong class="white">Channel V Media</strong></p>
							<?php wp_nav_menu( array('menu' => 'Mobile Left Nav', 'menu_class' => 'mobile-nav mb10')); ?> 
							<!-- start repeater-list --> 
							<?php if( have_rows('mobile_menu_button', 'option') ): $pr = 0; 
							// loop through the rows of data
							while ( have_rows('mobile_menu_button', 'option') ) : the_row(); ?>
							<div class="grid-10 fl mb10 mt0"> 
								<?php if(get_sub_field('link')) { echo '<a href="' . get_sub_field('link') . '" class="btn-swipe-rect fl'; } ?><?php if(get_sub_field('link') && get_sub_field('color')) { echo ' ' . get_sub_field('color') . ''; } ?><?php if(get_sub_field('link') && get_sub_field('hubspot')) { echo ' ' . get_sub_field('hubspot') . ''; } ?><?php if(get_sub_field('link')) { echo '"'; } ?><?php if((get_sub_field('link') && get_sub_field('target_link')) == true) { echo 'target="_blank"'; } ?><?php if(get_sub_field('link')) { echo '>'; } ?>
								<?php if(get_sub_field('email')) { echo '<a href="'; } ?><?php if(get_sub_field('email')) { echo esc_url( 'mailto:' . antispambot( get_sub_field('email') ) ); } ?><?php if(get_sub_field('email') && get_sub_field('subject')) { echo '?subject=' . get_sub_field('subject') . ''; } ?><?php $btn_subject = get_sub_field('subject'); ?><?php if(empty($btn_subject) && get_sub_field('email')) { echo '?'; } ?><?php if(get_sub_field('email') && get_sub_field('body')) { echo '&body=' . get_sub_field('body') . ''; } ?><?php if(get_sub_field('email')) { echo '" class="btn-swipe-rect fl'; } ?><?php if(get_sub_field('email') && get_sub_field('color')) { echo ' ' . get_sub_field('color') . ''; } ?><?php if(get_sub_field('email')) { echo '"'; } ?><?php if(get_sub_field('email')) { echo '>'; } ?> 
								<?php if(get_sub_field('phone_area_code') && get_sub_field('phone_three') && get_sub_field('phone_four')) { echo '<a href="tel:+1'; } ?><?php if(get_sub_field('phone_area_code')) { echo '' . get_sub_field('phone_area_code') . ''; } ?><?php if(get_sub_field('phone_three')) { echo '' . get_sub_field('phone_three') . ''; } ?><?php if(get_sub_field('phone_four')) { echo '' . get_sub_field('phone_four') . ''; } ?><?php if(get_sub_field('phone_area_code') && get_sub_field('phone_three') && get_sub_field('phone_four')) { echo '"'; } ?><?php if(get_sub_field('phone_area_code') && get_sub_field('phone_three') && get_sub_field('phone_four') && get_sub_field('color')) { echo 'class="btn-swipe-rect fl ' . get_sub_field('color') . '"'; } ?><?php if(get_sub_field('phone_area_code') && get_sub_field('phone_three') && get_sub_field('phone_four')) { echo '>'; } ?>							
								<?php if(get_sub_field('text') && get_sub_field('link')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
								<?php if(get_sub_field('text') && get_sub_field('email')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
								<?php if(get_sub_field('text') && get_sub_field('phone_area_code')) { echo '<span>' . get_sub_field('text') . '</span>'; } ?>
								<div class="transition-rect"></div> 
								<?php if(get_sub_field('link') || get_sub_field('email')) { echo '</a>'; } ?>
								<?php if(get_sub_field('phone_area_code') && get_sub_field('phone_three') && get_sub_field('phone_four')) { echo '</a>'; } ?>
							</div>
							<?php endwhile; endif; ?> 
						</div>
						<div class="grid-fixed-mobile fr clearfix">
							<div class="grid-10 fl mb10 clearfix">
								<span class="fl fs18 tal bb-lt-purple mb10"><strong class="white">Industry Expertise</strong></span>
								<?php wp_nav_menu( array('menu' => 'PR Dropdown Industry Expertise ', 'menu_class' => 'mobile-nav')); ?>
							</div> 
							<div class="grid-10 fl mb10 clearfix">
								<span class="fl fs18 tal bb-lt-purple mb10"><strong class="white">Services</strong></span>
								<?php wp_nav_menu( array('menu' => 'PR Dropdown Services', 'menu_class' => 'mobile-nav')); ?>
							</div> 
							<div class="grid-10 fl mb10 clearfix">
								<span class="fl fs18 tal bb-lt-purple mb10"><strong class="white">Use Cases</strong></span>
								<?php wp_nav_menu( array('menu' => 'PR Dropdown Use Cases', 'menu_class' => 'mobile-nav')); ?>
							</div>  
						</div> 
					</div> 
				</div> 

				<button class="site-menu__close" data-action="close-site-menu">&times;</button>
			</nav>
			<!-- End: Hamburger Pop Up Menu -->
			
			
        <!-- WP: START OF PAGE SPECIFIC TEMPLATE -->

	<?php if (is_single()) { ?> 
	<?php } else { ?> 
		<?php if(((get_field('page_bg_color')) == true)) { echo '<div class="bg-common color-overlay-exact ' . get_field('page_bg_color') . '" style="position:fixed;"></div>'; } ?>		
		<?php if(((get_field('page_bg_photo') || get_field('page_bg_photo_opacity') || get_field('page_bg_photo_position') || get_field('page_bg_photo_size') || get_field('page_bg_photo_fixed')) == true)) { echo '<div class="bg-common color-overlay-exact'; } ?><?php if(get_field('page_bg_photo_opacity')) { echo ' ' . get_field('page_bg_photo_opacity') . ''; } ?><?php if(((get_field('page_bg_photo') || get_field('page_bg_photo_opacity') || get_field('page_bg_photo_position') || get_field('page_bg_photo_size') || get_field('page_bg_photo_fixed')) == true)) { echo '" style="position:fixed;'; } ?><?php if(get_field('page_bg_photo')) { echo 'background-image:url(' . get_field('page_bg_photo') . ');'; } ?><?php if(get_field('page_bg_photo_position')) { echo 'background-position:' . get_field('page_bg_photo_position') . ';'; } ?><?php if(get_field('page_bg_photo_size')) { echo 'background-size:' . get_field('page_bg_photo_size') . ';'; } ?><?php if(get_field('page_bg_photo_fixed')) { echo 'background-attachment:fixed;'; } ?><?php if(((get_field('page_bg_photo') || get_field('page_bg_photo_opacity') || get_field('page_bg_photo_position') || get_field('page_bg_photo_size') || get_field('page_bg_photo_fixed')) == true)) { echo '"></div>'; } ?>
	<?php } ?> 

	<?php if (is_page('Homez')) { ?>  
	<?php } elseif (is_year() || is_month() || is_day()) { ?> 
            <?php if(get_field('cvm_logo_pages', 'option')) {
						echo '<a class="hlogo 1 white" data-transition="up" href="/"><img class="home-header__logo" src="' . get_field('cvm_logo_pages', 'option') . '" width="75" height="75" alt="Channel V Media Logo"/></a>';
						echo '<a class="hlogo 1 pages" data-transition="up" href="/"><img class="home-header__logo" src="' . get_field('cvm_logo', 'option') . '" width="75" height="75" alt="Channel V Media Logo"/></a>';
			} ?>
			<!-- start blog header -->
			<div id="hero" class="grid-10 fl press-hero-section conditional-year-month-day bg-white pb0 clearfix">
				<div class="grid-work mauto clearfix">
					<!-- ---------- BLOG CATEGORIES - -->
					<?php wp_nav_menu( array('menu' => 'Blog Category Menu' )); ?>
				</div>
			</div>
			<!-- start Search Title -->
			<div class="grid-work mauto pt2">
				<?php if ( have_posts() ) : ?>
					<header class="page-header">
						<?php the_archive_title( '<h1 class="secondary-main darwin fs40 pmb0">Results for ', '</h1>' ); the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
					</header><!-- .page-header -->
				<?php endif; ?>
			</div>
			<!-- end Search Title -->
	<?php } elseif (is_search()) { ?>
            <?php if(get_field('cvm_logo_pages', 'option')) {
						echo '<a class="hlogo 1" white data-transition="up" href="/"><img class="home-header__logo" src="' . get_field('cvm_logo_pages', 'option') . '" alt="Channel V Media Logo"/></a>';
						echo '<a class="hlogo 1 pages" data-transition="up" href="/"><img class="home-header__logo" src="' . get_field('cvm_logo', 'option') . '" alt="Channel V Media Logo"/></a>';
			} ?>
			<!-- start blog header -->
			<div id="hero" class="grid-10 fl press-hero-section conditional-search bg-white pb0 clearfix">  
				<div class="grid-work mauto clearfix">  
					<!-- ---------- BLOG CATEGORIES - --> 
					<?php wp_nav_menu( array('menu' => 'Blog Category Menu' )); ?>  
				</div> 
			</div>
			<!-- start Search Title -->
			<div class="grid-work mauto pt2">
				<header class="page-header">
					<!-- start Search Title -->
					<h1 class="secondary-main darwin fs40 pmb0"><?php printf( __( 'Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
					<!-- end Search Title -->
				</header><!-- .page-header -->
			</div>
			<!-- end Search Title --> 
	<?php } elseif (is_page('Blog')) { ?>
		<?php if(get_field('cvm_logo', 'option')) {
			echo '<a class="hlogo 1" white data-transition="up" href="/"><img class="home-header__logo" src="' . get_field('cvm_logo_pages', 'option') . '" alt="Channel V Media Logo"/></a>';
			echo '<a class="hlogo 1 pages" data-transition="up" href="/"><img class="home-header__logo" src="' . get_field('cvm_logo', 'option') . '" alt="Channel V Media Logo"/></a>';
		} ?>  
		<!-- start blog header -->
		<div id="hero" class="grid-10 fl press-hero-section conditional-blog bg-white pb0 clearfix"> 
			<div class="grid-work mauto">  
				<h1 class="block-headline_alt purple mt0 mb10"><strong>CVM Insights</strong></h1>
			</div>
		</div>  
	<?php } elseif (is_singular('post') || is_archive()) { ?> 
		<?php if(get_field('cvm_logo', 'option')) {
						echo '<a class="hlogo 1" white data-transition="up" href="/"><img class="home-header__logo" src="' . get_field('cvm_logo_pages', 'option') . '" alt="Channel V Media Logo"/></a>';
						echo '<a class="hlogo 1 pages" data-transition="up" href="/"><img class="home-header__logo" src="' . get_field('cvm_logo', 'option') . '" alt="Channel V Media Logo"/></a>';
		} ?>
		 
		<!-- start blog header -->
		<div id="hero" class="grid-10 fl press-hero-section conditional-post-or-archive bg-white pb0 clearfix">
			<div class="grid-work mauto clearfix">
				<!-- ---------- BLOG CATEGORIES - -->
				<?php wp_nav_menu( array('menu' => 'Blog Category Menu' )); ?>
			</div>
		</div>
		<!-- start Search // HIDDEN WITH CSS -->
		<div class="grid-work mauto search-wrap">
			<div class="search-nac-icon"></div>
			<!-- start Search -->
			<div class="grid-10 fl nac-search-wrap">
				<div class="search-nac-close"></div>
				<form role="search" method="get" class="search-form" action="<?php echo site_url(); ?>">
					<input type="submit" class="search-nac" value="Go">
					<input type="hidden" value="post" name="post_type" id="post_type" />
					<label>
						<!-- <span class="screen-reader-text">Search for:</span> -->
						<input type="search" class="input-nac search-field" placeholder="Search" value="" name="s">
					</label>
				</form>
			</div>
		</div>
		<!-- end Search -->
	<?php } elseif (is_archive() && is_paged()) { ?> 
		<?php if(get_field('cvm_logo', 'option')) {
			echo '<a class="hlogo 1" white data-transition="up" href="/"><img class="home-header__logo" src="' . get_field('cvm_logo_pages', 'option') . '" alt="Channel V Media Logo"/></a>';
			echo '<a class="hlogo 1 pages" data-transition="up" href="/"><img class="home-header__logo" src="' . get_field('cvm_logo', 'option') . '" alt="Channel V Media Logo"/></a>';
		} ?>
	<!-- start blog header -->
		<div id="hero" class="grid-10 fl press-hero-section conditional-archive-and-paged bg-white pb0 clearfix"> 
			<div class="grid-work mauto clearfix">
				<!-- ---------- BLOG CATEGORIES - -->
				<?php wp_nav_menu( array('menu' => 'Blog Category Menu' )); ?>  
			</div> 
		</div>
	<?php } else { ?> 
			<?php if((get_field('logo_white') == true)) { ?>
				<?php if(get_field('cvm_logo', 'option')) {
					echo '<a class="hlogo 1" data-transition="up" href="/"><img class="home-header__logo" src="' . get_field('cvm_logo', 'option') . '" width="75" height="75" alt="Channel V Media Logo"/></a>';
					echo '<a class="hlogo 1 pages" data-transition="up" href="/"><img class="home-header__logo" src="' . get_field('cvm_logo', 'option') . '" width="75" height="75" alt="Channel V Media Logo"/></a>'; 
				} ?>
			<?php } else { ?> 
				<?php if(get_field('cvm_logo', 'option')) {
					echo '<a class="hlogo 1" data-transition="up" href="/"><img class="home-header__logo ca" src="' . get_field('cvm_logo_pages', 'option') . '" width="75" height="75" alt="Channel V Media Logo"/></a>';
					echo '<a class="hlogo 1 pages" data-transition="up" href="/"><img class="home-header__logo ca" src="' . get_field('cvm_logo', 'option') . '" width="75" height="75" alt="Channel V Media Logo"/></a>';
				} ?>
			<?php } ?>   
	<?php } ?>