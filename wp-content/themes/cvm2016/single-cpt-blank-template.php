<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */

get_header(); ?>  

<div id="primary" class="content-area single-post default">
	<main id="main" class="site-main" role="main">  

		<?php
		// Start the loop.
		custom_post_types_get_custom_template(); ?>
<?php wp_reset_query(); ?>   
 

	</main><!-- .site-main -->
	<?php // get_sidebar( 'content-bottom' ); ?> 
</div><!-- .content-area -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>