<?php
/**
 * CVM 2016 functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */

/**
 * CVM 2016 only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentysixteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own twentysixteen_setup() function to override in a child theme.
 *
 * @since CVM 2016 1.0
 */
function twentysixteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentysixteen
	 * If you're building a theme based on CVM 2016, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since CVM 2016 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since CVM 2016 1.0
 */
function twentysixteen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'twentysixteen_content_width', 840 );
}
add_action( 'after_setup_theme', 'twentysixteen_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since CVM 2016 1.0
 */
function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

if ( ! function_exists( 'twentysixteen_fonts_url' ) ) :
/**
 * Register Google fonts for CVM 2016.
 *
 * Create your own twentysixteen_fonts_url() function to override in a child theme.
 *
 * @since CVM 2016 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentysixteen_fonts_url() {
$fonts_url = '';
//	$fonts     = array();
//	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
//	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'twentysixteen' ) ) {
//		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
//	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
//	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'twentysixteen' ) ) {
//		$fonts[] = 'Montserrat:400,700';
//	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
//	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentysixteen' ) ) {
//		$fonts[] = 'Inconsolata:400';
//	}

//	if ( $fonts ) {
//		$fonts_url = add_query_arg( array(
//			'family' => urlencode( implode( '|', $fonts ) ),
//			'subset' => urlencode( $subsets ),
//		), 'https://fonts.googleapis.com/css' );
//	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since CVM 2016 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentysixteen_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since CVM 2016 1.0
 */
function twentysixteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	// wp_enqueue_style( 'twentysixteen-fonts', twentysixteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	// wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.min.css', array(), '3.4.1' );

	// Theme stylesheet.
	// wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );
	// wp_enqueue_style( 'twentysixteen-style-minified', get_template_directory_uri() . '/css/style.min.css' );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160816' );
	wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.min.js', array(), '20160816', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160816' );
	}

	wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.min.js', array( 'jquery' ), '20160816', true );
	wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'twentysixteen' ),
		'collapse' => __( 'collapse child menu', 'twentysixteen' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since CVM 2016 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function twentysixteen_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'twentysixteen_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since CVM 2016 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function twentysixteen_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since CVM 2016 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since CVM 2016 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

add_action('admin_head', 'acf_page_backend');

function acf_page_backend() {
  echo '<style>
  .perspective-gallery h1,.subtitle{pointer-events:none;z-index:2;width:50vw;color:#fff}@font-face{font-family:darwinalt_extralight;src:url("/wp-content/themes/cvm2016/fonts/darwinalt_extralight/darwin-alt-extralight-webfont.eot");src:url("/wp-content/themes/cvm2016/fonts/darwinalt_extralight/darwin-alt-extralight-webfont.eot?#iefix") format("embedded-opentype"),url("/wp-content/themes/cvm2016/fonts/darwinalt_extralight/darwin-alt-extralight-webfont.woff2") format("woff2"),url("/wp-content/themes/cvm2016/fonts/darwinalt_extralight/darwin-alt-extralight-webfont.woff") format("woff"),url("/wp-content/themes/cvm2016/fonts/darwinalt_extralight/darwin-alt-extralight-webfont.ttf") format("truetype"),url("/wp-content/themes/cvm2016/fonts/darwinalt_extralight/darwin-alt-extralight-webfont.svg#darwinaltextralight") format("svg");font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:darwinalt_black;src:url("/wp-content/themes/cvm2016/fonts/darwinalt_black/darwin-alt-black-webfont.eot");src:url("/wp-content/themes/cvm2016/fonts/darwinalt_black/darwin-alt-black-webfont.eot?#iefix") format("embedded-opentype"),url("/wp-content/themes/cvm2016/fonts/darwinalt_black/darwin-alt-black-webfont.woff2") format("woff2"),url("/wp-content/themes/cvm2016/fonts/darwinalt_black/darwin-alt-black-webfont.woff") format("woff"),url("/wp-content/themes/cvm2016/fonts/darwinalt_black/darwin-alt-black-webfont.ttf") format("truetype"),url("/wp-content/themes/cvm2016/fonts/darwinalt_black/darwin-alt-black-webfont.svg#darwinaltblack_") format("svg");font-display:swap}@font-face{font-family:darwinalt_bold;src:url("/wp-content/themes/cvm2016/fonts/darwinalt_bold/darwin-alt-bold-webfont.eot");src:url("/wp-content/themes/cvm2016/fonts/darwinalt_bold/darwin-alt-bold-webfont.eot?#iefix") format("embedded-opentype"),url("/wp-content/themes/cvm2016/fonts/darwinalt_bold/darwin-alt-bold-webfont.woff2") format("woff2"),url("/wp-content/themes/cvm2016/fonts/darwinalt_bold/darwin-alt-bold-webfont.woff") format("woff"),url("/wp-content/themes/cvm2016/fonts/darwinalt_bold/darwin-alt-bold-webfont.ttf") format("truetype"),url("/wp-content/themes/cvm2016/fonts/darwinalt_bold/darwin-alt-bold-webfont.svg#darwinaltbold") format("svg");font-display:swap}.editor-styles-wrapper .wp-block,.wp-block{max-width:90%!important;min-width:90%!important}.perspective-gallery h1{font-family:darwinalt_black,Helvetica,sans-serif!important;font-size:5vw!important;line-height:5vw!important;margin-bottom:0;text-shadow:0 2px 40px #000}.subtitle{font-family:darwinalt_extralight,sans-serif!important;font-size:1.5vw!important;line-height:1.9vw!important;text-shadow:0 2px 10px #000}.pg-buttons{width:50vw;z-index:1}.pg-buttons a{color:#fff;font-family:darwinalt_extralight,Helvetica,sans-serif!important;margin-right:10px;text-decoration:none;text-shadow:0 1px 5px #000}.down-link::after,.right-link::after{content:"";background-image:url(/wp-content/uploads/2020/07/arrow-down.svg);background-size:25px;background-repeat:no-repeat;display:inline-block;height:25px;margin-left:8px;position:relative;top:6px;width:25px;transform:rotate(-90deg);-moz-transition:.5s;-webkit-transition:.5s;-o-transition:.5s;-ms-transition:.5s;transition:.5s}td.acf-fields,td.acf-row-handle{border-top:12px solid #000!important}.acf-row .acf-row-handle{border-top:0 solid #000!important}.wp-user-avatar{height:30px;width:30px}.acf-field p.description{margin-bottom:0!important}.postbox:nth-child(2n){background-color:#fff!important}.acf-table>tbody>tr>td,.acf-table>tbody>tr>th,.acf-table>thead>tr>td,.acf-table>thead>tr>th,.postbox:nth-child(2n) h2,.postbox:nth-child(2n) h2:hover,.postbox:nth-child(2n).closed h2{background:0 0!important}.postbox:nth-child(odd){background-color:#d2cafc!important}#editor .postbox>.postbox-header .hndle:hover,.postbox:nth-child(odd) h2,.postbox:nth-child(odd) h2:hover,.postbox:nth-child(odd).closed h2{background:0 0}.acf-postbox>.inside{padding:0 20px!important}.acf-repeater>table{background:#e2dbfe!important}
  </style>';
}

/**
* Define a constant path to our single template folder
*/
define('SINGLE_PATH', TEMPLATEPATH . '/single');

/**
* Filter the single_template with our custom function
*/
add_filter('single_template', 'my_single_template');
 

/**
* Single template function which will choose our template
*/
function my_single_template($single) {
	global $wp_query, $post;
	
	
	/**
	* Checks for single template by category
	* Check by category slug and ID
	*/
	foreach((array)get_the_category() as $cat) :

		if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
			return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';

		elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
			return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';

	endforeach;
	
	/**
	* Checks for default single post files within the single folder
	*/
	if(file_exists(SINGLE_PATH . '/single.php'))
		return SINGLE_PATH . '/single.php';

	elseif(file_exists(SINGLE_PATH . '/default.php'))
		return SINGLE_PATH . '/default.php';
	
return $single;

}

/* Upload svg files */
function cc_mime_types( $mimes ){
$mimes['svg'] = 'image/svg+xml';
return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

/* Truncate excerpt */
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
/* Truncate content */
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]>', $content);
  return $content;
}
/* Exclude Cat by ID from get_the_category */
add_filter('get_the_terms', 'hide_categories_terms', 10, 3);
function hide_categories_terms($terms, $post_id, $taxonomy){

    // define which category IDs you want to hide
    $excludeIDs = array(20);

    // get all the terms 
    $exclude = array();
    foreach ($excludeIDs as $id) {
        $exclude[] = get_term_by('id', $id, 'category');
    }

    // filter the categories
    if (!is_admin()) {
        foreach($terms as $key => $term){
            if($term->taxonomy == "category"){
                foreach ($exclude as $exKey => $exTerm) {
                    if($term->term_id == $exTerm->term_id) unset($terms[$key]);
                }
            }
        }
    }

    return $terms;
}

/* Nested Comments */
function enable_threaded_comments(){
if (!is_admin()) {
     if (is_singular() && comments_open() && (get_option('thread_comments') == 1))
          wp_enqueue_script('comment-reply');
     }
}

add_action('get_header', 'enable_threaded_comments');

/* Remove "/blog/" from slug for Custom post type: Case Studies */
/* mention custom post type */
function my_custom_post_types(){
    return array(
        'case-studies'
    );
}
add_action( 'parse_request','my_custom_post_types_parse_request', 999);
/* strip the url and keep "/case-studies/" */
function my_custom_post_types_parse_request( $query ){

    if( isset($query->request) )
    {
        $req = explode('/', ltrim($query->request,'/case-studies/'));
        if( !is_admin() && isset($req['0']) )
        {
            global $wpdb;
            $name = stripslashes($req['0']);
            $_post = $wpdb->get_row( "SELECT * FROM $wpdb->posts WHERE post_status = 'publish' AND post_name ='". $name ."' AND post_type IN ('" . join("', '", my_custom_post_types() ) . "')" );

            if( $_post )
            {
                $query->query_vars['error'] = '';
                $query->query_vars['post_type'] = $_post->post_type;
                $query->query_vars['name'] = $name;
            }
        }
    }
}
add_filter( 'post_type_link', 'my_custom_post_types_permalink', 10, 2);
/* add "/case-studies/" to the post slug */
function my_custom_post_types_permalink( $post_link, $post ){
    if( in_array( $post->post_type, my_custom_post_types() ) && !empty($post->post_name) && $post->post_status == 'publish' && '' != get_option('permalink_structure') )
    {
        $post_name = $post->post_name;
        $post_link = home_url("/case-studies/$post_name/");
    }
    return $post_link;
}

/* ---------- ACF Option Page ---------- */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
	//	'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	)); 
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Blog Settings',
		'menu_title'	=> 'Blog',
		'parent_slug'	=> 'theme-general-settings',
	)); 
	
}
/* WP Custom Block with ACF */
// -----------
add_action('acf/init', 'my_acf_blocks_init'); 
function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

	// Register home hero block.
	acf_register_block_type(array(
      'name'              => 'homeheroblock',
      'title'             => __('Home Hero Block'),
      'description'       => __('Add a Home Hero Block.'),
      'render_template'   => 'template-parts/blocks/hero/home-hero.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array( 'hero', 'home', 'photo', 'image' ),
     ));
	// Register Perspective Gallery block.
	acf_register_block_type(array(
      'name'              => 'perspectivegalleryblock',
      'title'             => __('Perspective Gallery Hero'),
      'description'       => __('Add a Perspective Gallery Hero Block.'),
      'render_template'   => 'template-parts/blocks/hero/perspective-gallery.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array( 'hero', 'perspective', 'gallery', 'photo', 'photos', 'image', 'images' ),
     )); 
	// Register hero service block.
	acf_register_block_type(array(
      'name'              => 'serviceheroblock',
      'title'             => __('Service Hero Block'),
      'description'       => __('Add a Hero Service Block.'),
      'render_template'   => 'template-parts/blocks/hero/service-hero.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array( 'hero', 'photo', 'image' ),
     ));
	// Register Video or Photo Background block.
	acf_register_block_type(array(
      'name'              => 'videophotobackgroundblock',
      'title'             => __('Video or Photo Background Block'),
      'description'       => __('Add a Video or Photo Background Block.'),
      'render_template'   => 'template-parts/blocks/hero/video-photo-background.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array( 'hero', 'video', 'photo', 'photos', 'image', 'images', 'background' ),
     ));
	// Register contact block.
	acf_register_block_type(array(
      'name'              => 'contactblock',
      'title'             => __('Contact Block'),
      'description'       => __('Add a Contact Block.'),
      'render_template'   => 'template-parts/blocks/standard/contact.php',
      'category'          => 'formatting',
      'icon'              => 'columns',
      'keywords'          => array( 'text', 'contact', 'phone', 'email', 'social' ),
     ));
	// Register two column block.
	acf_register_block_type(array(
      'name'              => 'onecolumnblock',
      'title'             => __('One Column Block'),
      'description'       => __('Add a One Column Block.'),
      'render_template'   => 'template-parts/blocks/standard/one-column.php',
      'category'          => 'formatting',
      'icon'              => 'columns',
      'keywords'          => array( 'text', 'one', '1', 'column' ),
     ));
	// Register two column block.
	acf_register_block_type(array(
      'name'              => 'twocolumnblock',
      'title'             => __('Two Column Block'),
      'description'       => __('Add a Two Column Block.'),
      'render_template'   => 'template-parts/blocks/standard/two-column.php',
      'category'          => 'formatting',
      'icon'              => 'columns',
      'keywords'          => array( 'text', 'two', '2', 'column' ),
     ));
	// Register three column block.
	acf_register_block_type(array(
      'name'              => 'threecolumnblock',
      'title'             => __('Three Column Block'),
      'description'       => __('Add a Three Column Block.'),
      'render_template'   => 'template-parts/blocks/standard/three-column.php',
      'category'          => 'formatting',
      'icon'              => 'columns',
      'keywords'          => array( 'text', 'three', '3', 'column' ),
     ));
	// Register Text and Hidden Image block.
	acf_register_block_type(array(
      'name'              => 'textimageblock',
      'title'             => __('Text and Hidden Image Block'),
      'description'       => __('Add a Text and Hidden Image Block.'),
      'render_template'   => 'template-parts/blocks/standard/text-image.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array( 'text', 'photo', 'photos', 'image', 'images' ),
     ));
	// Register Open Positions block.
	acf_register_block_type(array(
      'name'              => 'openpositionsblock',
      'title'             => __('Open Positions Block'),
      'description'       => __('Add a Open Positions Block.'),
      'render_template'   => 'template-parts/blocks/list/open-positions.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'list', 'jobs', 'job', 'career', 'careers' ),
     ));
	// Register Highlights block.
	acf_register_block_type(array(
      'name'              => 'highlightsblock',
      'title'             => __('Highlights Block'),
      'description'       => __('Add a Highlights Block.'),
      'render_template'   => 'template-parts/blocks/list/highlights.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'list', 'hightlights', 'hightlight' ),
     ));
	// Register Outlined List block.
	acf_register_block_type(array(
      'name'              => 'outlinedlistblock',
      'title'             => __('Outlined List Block'),
      'description'       => __('Add a Outlined List Block.'),
      'render_template'   => 'template-parts/blocks/list/outlined-list.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'list', 'hightlight', 'outlined' ),
     ));
	// Register Tile block.
	acf_register_block_type(array(
      'name'              => 'tileblock',
      'title'             => __('Tile Block'),
      'description'       => __('Add a Tile Block.'),
      'render_template'   => 'template-parts/blocks/list/tile.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'list', 'tile' ),
     ));
	// Register Video Simple block.
	acf_register_block_type(array(
      'name'              => 'simplevideoblock',
      'title'             => __('Video Simple Block'),
      'description'       => __('Add a Simple Video Block.'),
      'render_template'   => 'template-parts/blocks/video/simple-video.php',
      'category'          => 'formatting',
      'icon'              => 'video-alt3',
      'keywords'          => array( 'video' ),
     ));
	// Register Alternating Video block.
	acf_register_block_type(array(
      'name'              => 'alternatingvideoblock',
      'title'             => __('Alternating Video Block'),
      'description'       => __('Add a Alternating Video Block.'),
      'render_template'   => 'template-parts/blocks/video/alternating-video.php',
      'category'          => 'formatting',
      'icon'              => 'video-alt3',
      'keywords'          => array( 'video' ),
     ));
	// Register Video with Steps List block.
	acf_register_block_type(array(
      'name'              => 'videostepslistblock',
      'title'             => __('Video with Steps List Block'),
      'description'       => __('Add a Video with Steps List Block.'),
      'render_template'   => 'template-parts/blocks/video/video-steps.php',
      'category'          => 'formatting',
      'icon'              => 'video-alt3',
      'keywords'          => array( 'video' ),
     ));
	// Register Icons block.
	acf_register_block_type(array(
      'name'              => 'iconsblock',
      'title'             => __('Icons Block'),
      'description'       => __('Add an Icons Block.'),
      'render_template'   => 'template-parts/blocks/list/icons.php',
      'category'          => 'formatting',
      'icon'              => 'images-alt2',
      'keywords'          => array( 'icon', 'icons' ),
     ));
	// Register Icons 2 block.
	acf_register_block_type(array(
      'name'              => 'icons2block',
      'title'             => __('Icons 2 Block'),
      'description'       => __('Add an Icons 2 Block.'),
      'render_template'   => 'template-parts/blocks/list/icons-2.php',
      'category'          => 'formatting',
      'icon'              => 'images-alt2',
      'keywords'          => array( 'icon', 'icons' ),
     ));
	// Register Blog Post Manual List block.
	acf_register_block_type(array(
      'name'              => 'blogpostmanualblock',
      'title'             => __('Blog Post Manual List Block'),
      'description'       => __('Add Blog Post Manual List block.'),
      'render_template'   => 'template-parts/blocks/list/blog-post-manual.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'post', 'blog', 'list' ),
     )); 
	// Register Hover Posts List block.
	acf_register_block_type(array(
      'name'              => 'hoverpostslistblock',
      'title'             => __('Hover Posts List Block'),
      'description'       => __('Add Hover Posts List block.'),
      'render_template'   => 'template-parts/blocks/list/hover-posts-list.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'post', 'blog', 'list', 'hover' ),
     ));
	// Register Split CTA block.
	acf_register_block_type(array(
      'name'              => 'splitctablock',
      'title'             => __('Split CTA Block'),
      'description'       => __('Add a Split CTA Block.'),
      'render_template'   => 'template-parts/blocks/cta/split-cta.php',
      'category'          => 'formatting',
      'icon'              => 'welcome-widgets-menus',
      'keywords'          => array( 'cta' ),
     ));
	// Register Newsletter Subscribe block.
	acf_register_block_type(array(
      'name'              => 'newslettersubscribeblock',
      'title'             => __('Newsletter Subscribe Block'),
      'description'       => __('Add a Newsletter Subscribe Block.'),
      'render_template'   => 'template-parts/blocks/cta/newsletter-subscribe.php',
      'category'          => 'formatting',
      'icon'              => 'welcome-widgets-menus',
      'keywords'          => array( 'cta', 'newsletter', 'subscribe' ),
     ));
	// Register CTA Banner block.
	acf_register_block_type(array(
      'name'              => 'ctabannerblock',
      'title'             => __('CTA Banner Block'),
      'description'       => __('Add a CTA Banner Block.'),
      'render_template'   => 'template-parts/blocks/cta/cta-banner.php',
      'category'          => 'formatting',
      'icon'              => 'welcome-widgets-menus',
      'keywords'          => array( 'cta', 'banner' ),
     ));
	// Register Benefits List block.
	acf_register_block_type(array(
      'name'              => 'benefitsblock',
      'title'             => __('Benefits List Block'),
      'description'       => __('Add a Benefits List Block.'),
      'render_template'   => 'template-parts/blocks/list/benefits.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'post', 'blog', 'list', 'benefits' ),
     ));
	// Register Slider One block.
	acf_register_block_type(array(
      'name'              => 'slideroneblock',
      'title'             => __('Slider One Block'),
      'description'       => __('Add a Slider One Block.'),
      'render_template'   => 'template-parts/blocks/slider/slider-one.php',
      'category'          => 'formatting',
      'icon'              => 'slides',
      'keywords'          => array( 'slide', 'slides', 'slider' ),
     ));
	// Register Slider Two block.
	acf_register_block_type(array(
      'name'              => 'slidertwoblock',
      'title'             => __('Slider Two Block'),
      'description'       => __('Add a Slider Two Block.'),
      'render_template'   => 'template-parts/blocks/slider/slider-two.php',
      'category'          => 'formatting',
      'icon'              => 'slides',
      'keywords'          => array( 'slide', 'slides', 'slider' ),
     ));
	// Register Press Slider block.
	acf_register_block_type(array(
      'name'              => 'presssliderblock',
      'title'             => __('Press Slider Block'),
      'description'       => __('Add a Press Slider Block.'),
      'render_template'   => 'template-parts/blocks/slider/press-slider.php',
      'category'          => 'formatting',
      'icon'              => 'slides',
      'keywords'          => array( 'slide', 'slides', 'slider' ),
     ));
	// Register Quote block.
	acf_register_block_type(array(
      'name'              => 'quoteblock',
      'title'             => __('Quote Block'),
      'description'       => __('Add a Quote Block.'),
      'render_template'   => 'template-parts/blocks/quote/quote.php',
      'category'          => 'formatting',
      'icon'              => 'format-quote',
      'keywords'          => array( 'quote' ),
     ));
	// Register Quote Photo block.
	acf_register_block_type(array(
      'name'              => 'quotephotoblock',
      'title'             => __('Quote Photo Block'),
      'description'       => __('Add a Quote Photo Block.'),
      'render_template'   => 'template-parts/blocks/quote/quote-photo.php',
      'category'          => 'formatting',
      'icon'              => 'format-quote',
      'keywords'          => array( 'quote', 'photo' ),
     ));
	// Register Statement block.
	acf_register_block_type(array(
      'name'              => 'statementblock',
      'title'             => __('Statement Block'),
      'description'       => __('Add a Statement Block.'),
      'render_template'   => 'template-parts/blocks/cta/statement.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array( 'statement', 'cta', 'full width' ),
     ));
	// Register Home Case Study block.
	acf_register_block_type(array(
      'name'              => 'homecasestudyblock',
      'title'             => __('Home Case Study Block'),
      'description'       => __('Add a Home Case Study Block.'),
      'render_template'   => 'template-parts/blocks/case-study/case-study-home.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array( 'home', 'case study' ),
     )); 
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'casestudysliderblock',
      'title'             => __('Case Study Slider Block'),
      'description'       => __('Add a Case Study Slider Block.'),
      'render_template'   => 'template-parts/blocks/slider/case-study-slider.php',
      'category'          => 'formatting',
      'icon'              => 'slides',
      'keywords'          => array( 'slide', 'slides', 'slider', 'case study' ),
     ));
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'faqsblock',
      'title'             => __('FAQs Block'),
      'description'       => __('Add a FAQs Block.'),
      'render_template'   => 'template-parts/blocks/list/faqs.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'faq', 'faqs', 'list', 'question', 'q&a' ),
     ));
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'formblock',
      'title'             => __('Form Block'),
      'description'       => __('Add a Form Block.'),
      'render_template'   => 'template-parts/blocks/form/form.php',
      'category'          => 'formatting',
      'icon'              => 'forms',
      'keywords'          => array( 'form' ),
     ));
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'formfullwidthblock',
      'title'             => __('Form Full Width Block'),
      'description'       => __('Add a Form Full Width Block.'),
      'render_template'   => 'template-parts/blocks/form/form-full-width.php',
      'category'          => 'formatting',
      'icon'              => 'forms',
      'keywords'          => array( 'form' ),
     ));
	// Register Landing Form block.
	acf_register_block_type(array(
      'name'              => 'landingformblock',
      'title'             => __('Landing Form Block'),
      'description'       => __('Add a Landing Form Block.'),
      'render_template'   => 'template-parts/blocks/form/landing-form.php',
      'category'          => 'formatting',
      'icon'              => 'forms',
      'keywords'          => array( 'form', 'landing' ),
     ));
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'linkiconlistblock',
      'title'             => __('Link Icon List Block'),
      'description'       => __('Add a Link Icon List Block.'),
      'render_template'   => 'template-parts/blocks/list/link-icon-list.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'links', 'link', 'list', 'icon' ),
     ));
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'linkslistblock',
      'title'             => __('Links List Block'),
      'description'       => __('Add a Links List Block.'),
      'render_template'   => 'template-parts/blocks/list/links.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'links', 'list' ),
     ));
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'awardslogosblock',
      'title'             => __('Awards Logos Block'),
      'description'       => __('Add an Awards Logos Block.'),
      'render_template'   => 'template-parts/blocks/list/awards-logos.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'award', 'awards', 'logos' ),
     ));
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'processalternatinglistblock',
      'title'             => __('Process Alternating List Block'),
      'description'       => __('Add a Process Alternating List Block.'),
      'render_template'   => 'template-parts/blocks/list/process-alternating.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'list', 'process'),
     )); 
	// Register Case Study Read More block.
	acf_register_block_type(array(
      'name'              => 'casestudyreadmoreblock',
      'title'             => __('Case Study Read More Block'),
      'description'       => __('Add a Case Study Read More Block.'),
      'render_template'   => 'template-parts/blocks/case-study/case-study-read-more.php',
      'category'          => 'formatting',
      'icon'              => 'portfolio',
      'keywords'          => array( 'case', 'study', 'read', 'more' ),
     ));
	// Register Case Study Alternating block.
	acf_register_block_type(array(
      'name'              => 'casestudyalternatingblock',
      'title'             => __('Case Study Alternating Block'),
      'description'       => __('Add a Case Study Alternating Block.'),
      'render_template'   => 'template-parts/blocks/case-study/case-study-alternating.php',
      'category'          => 'formatting',
      'icon'              => 'portfolio',
      'keywords'          => array( 'case', 'study' ),
     ));
	// Register Case Study Color block.
	acf_register_block_type(array(
      'name'              => 'casestudycolorblock',
      'title'             => __('Case Study Color Block'),
      'description'       => __('Add a Case Study Color Block.'),
      'render_template'   => 'template-parts/blocks/case-study/case-study-color-block.php',
      'category'          => 'formatting',
      'icon'              => 'portfolio',
      'keywords'          => array( 'case', 'study', 'alternating' ), 
     ));  
	// Register Overview block.
	acf_register_block_type(array(
      'name'              => 'overviewblock',
      'title'             => __('Overview Block'),
      'description'       => __('Add an Overview Block.'),
      'render_template'   => 'template-parts/blocks/standard/overview.php',
      'category'          => 'formatting',
      'icon'              => 'cover-image',
      'keywords'          => array( 'overview', 'standard', 'banner', 'headline' ),
      //'enqueue_script'    => get_template_directory_uri() . '/js/jquery-ui.min.js',
	  //'enqueue_script'    => get_template_directory_uri() . '/js/jquery-3.2.1.min.js',
	  
     ));
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'worldmapblock',
      'title'             => __('World Map Block'),
      'description'       => __('Add an World Map Block.'),
      'render_template'   => 'template-parts/blocks/standard/world-map.php',
      'category'          => 'formatting',
      'icon'              => 'admin-site',
      'keywords'          => array( 'world', 'map', 'interactive' ) 
     ));
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'logossliderblock',
      'title'             => __('Logos Slider Block'),
      'description'       => __('Add a Logos Slider Block.'),
      'render_template'   => 'template-parts/blocks/slider/logos-slider.php',
      'category'          => 'formatting',
      'icon'              => 'slides',
      'keywords'          => array( 'slide', 'slides', 'slider', 'logo', 'logos' ),
     ));	
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'presslogosblock',
      'title'             => __('Press Logos Block'),
      'description'       => __('Add a Press Logos Block.'),
      'render_template'   => 'template-parts/blocks/list/press-logos.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'press', 'logo', 'logos' ),
     ));	
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'casestudyslantedblock',
      'title'             => __('Case Study Alternating Slanted Block'),
      'description'       => __('Add a Case Study Slanted Block.'),
      'render_template'   => 'template-parts/blocks/case-study/case-study-slanted.php',
      'category'          => 'formatting',
      'icon'              => 'portfolio',
      'keywords'          => array( 'case study', 'case', 'study' ),
     ));
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'squarelogosblock',
      'title'             => __('Square Logos Block'),
      'description'       => __('Add a Square Logos Block.'),
      'render_template'   => 'template-parts/blocks/list/square-logos.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'logos', 'client', 'clients', 'logo', 'square' ), 
     )); 
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'accordionphotoblock',
      'title'             => __('Accordion with Photos Block'),
      'description'       => __('Add an Accordion with Photos Block.'),
      'render_template'   => 'template-parts/blocks/list/accordion-with-photo.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'faq', 'faqs', 'accordion', 'companies', 'company' ), 
     ));
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'fivestepprocessblock',
      'title'             => __('Five Step Process Block'),
      'description'       => __('Add a 5 Step Process Block.'),
      'render_template'   => 'template-parts/blocks/list/five-step-process.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'process', 'list', 'step', 'steps' ), 
     ));
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'alternatingmediatextblock',
      'title'             => __('Alternating Media and Text Block'),
      'description'       => __('Add an Alternating Media Text Block'),
      'render_template'   => 'template-parts/blocks/list/alternatingmediatextblock.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'media', 'list', 'text' ), 
     ));
	// Register cta block.
	acf_register_block_type(array(
      'name'              => 'circlenavlistblock',
      'title'             => __('Circle Nav List Block'),
      'description'       => __('Add a Circle Nav List Block'),
      'render_template'   => 'template-parts/blocks/list/circle-nav-list.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'circles', 'list', 'nav' ), 
     ));
	// Register Client Logos Filter block.
	acf_register_block_type(array(
      'name'              => 'clientlogosfilterblock',
      'title'             => __('Client Logos Filter Block'),
      'description'       => __('Add a Client Logos Filter Block'),
      'render_template'   => 'template-parts/blocks/list/client-logos-filter.php',
      'category'          => 'formatting',
      'icon'              => 'list-view',
      'keywords'          => array( 'filter', 'list', 'client', 'clients', 'logos'), 
     )); 
	// Register Photo Column block.
	acf_register_block_type(array(
      'name'              => 'photocolumnblock',
      'title'             => __('Photo Column Block'),
      'description'       => __('Add a Photo Column Block.'),
      'render_template'   => 'template-parts/blocks/photos/photo-column.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array( 'photo', 'photos', 'columns' ),
     ));  
    } 
} 	
/**
 * Register and enqueue a custom stylesheet in the WordPress admin.
 */
function wpdocs_enqueue_custom_admin_style() {
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style' );

/* Related Posts */
	function ci_get_related_posts( $post_id, $related_count, $args = array() ) {
		$args = wp_parse_args( (array) $args, array(
			'orderby' => 'rand',
			'return'  => 'query', // Valid values are: 'query' (WP_Query object), 'array' (the arguments array)
		) );

		$related_args = array(
			'post_type'      => get_post_type( $post_id ),
			'posts_per_page' => $related_count,
			'post_status'    => 'publish',
			'post__not_in'   => array( $post_id ),
			'orderby'        => $args['orderby'],
			'tax_query'      => array()
		);

		$post       = get_post( $post_id );
		$taxonomies = get_object_taxonomies( $post, 'names' );

		foreach ( $taxonomies as $taxonomy ) {
			$terms = get_the_terms( $post_id, $taxonomy );
			if ( empty( $terms ) ) {
				continue;
			}
			$term_list                   = wp_list_pluck( $terms, 'slug' );
			$related_args['tax_query'][] = array(
				'taxonomy' => $taxonomy,
				'field'    => 'slug',
				'terms'    => $term_list
			);
		}

		if ( count( $related_args['tax_query'] ) > 1 ) {
			$related_args['tax_query']['relation'] = 'OR';
		}

		if ( $args['return'] == 'query' ) {
			return new WP_Query( $related_args );
		} else {
			return $related_args;
		}
	} 
/* Social Media buttons */
/*  This hooks into the page template and over rides the default template use this to make sure your magazine template is always default */
    add_filter( 'template_include', 'default_page_template', 99 );

    function default_page_template( $template ) {
// Change page to post if not a page your working on or custom post type name
        if ( is_singular( 'post' )  ) {
            // change the default-page-template.php to your template name
            $default_template = locate_template( array( 'default-page-template.php' ) );
            if ( '' != $default_template ) {
                return $default_template ;
            }
        }

        return $template;
    }
/* Social Media buttons */
function my_socialbar() { ?>
    <div id="hp-social-bar-small">
    <a id="facebook-icon" target="_blank" class="pngfix" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>"></a>
    <a id="twitter-icon" target="_blank" class="pngfix" href="https://twitter.com/share?url=<?php echo the_permalink(); ?>&amp;media=<?php if(get_field('social_media_image')) { echo '' . get_field('preview_image') . ''; } ?>&amp;text=<?php echo urlencode(the_title('','', false)); ?>"></a>
	<!-- <a id="pinterest-icon" target="_blank" class="pngfix" href="https://pinterest.com/pin/create/button/?url=<?php // echo the_permalink(); ?>&amp;media=<?php // if(get_field('social_media_image')) { echo '' . get_field('preview_image') . ''; } ?>&amp;description=<?php // echo urlencode( get_the_title() ); ?>"><img src="/wp-content/themes/S17/images/icon-pinterest.png" height="25" width="25" alt="Pinterest" border="0"/></a>  -->
	<!-- <a id="plusone-icon" target="_blank" class="pngfix" href="https://plusone.google.com/_/+1/confirm?hl=en&url= --> <?php // echo the_permalink(); ?> <!-- ">&nbsp;</a>  -->
	<a id="email-icon" class="pngfix" href="mailto:?subject=<?php echo the_title(); ?>&amp;body=<?php echo 'Hi.%0A%0aI wanted to share this link with you:%0A%0A'; echo the_permalink(); ?>"></a>
    </div>
<?php } 

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since CVM 2016 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function twentysixteen_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args' );
/* remove "Category" and "Tag" text from Archive pages */
add_filter('get_the_archive_title_prefix', 'my_custom_get_the_archive_title_prefix');
function twenty_one_get_the_archive_title_prefix($prefix) {
  if ($prefix === 'Category:' || $prefix === 'Tag:') {
    $prefix = '';
  }
  return $prefix;
}
// function add_async_attribute($tag, $handle) {
//     $scripts_to_async = array(
//         'cookieBanner-298842',
//         'twentysixteen-skip-link-focus-fix',
//         'twentysixteen-script', 'hoverintent-js',
//         'leadin-script-loader-js',
//         'smush-lazy-load',
//         'block-acf-overviewblock',
//         'admin-bar',
//         'wd-asl-prereq-and-wrapper',
//         'jquery-core',
//         'script-custom'
//     );
//     foreach($scripts_to_async as $async_script) {
//        if ($async_script === $handle) {
//           return str_replace(' src', ' async src', $tag);
//        }
//     }
//     return $tag;
//  }
 //add_filter('script_loader_tag', 'add_async_attribute', 10, 2);