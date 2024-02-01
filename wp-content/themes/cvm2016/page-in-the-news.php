<?php
/**
 * Template Name: News
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */
get_header(); ?>   

<!-- ---------- HEIGHT SPACER ---------------- -->
<div class="mh130 clearfix"></div>
 
<!-- ---------- TITLE --------------- -->
<div class="section grid-10 fl clearfix">
    <div class="grid-work mauto clearfix"> 

		<?php if(get_field('page_title_text')) { echo '<h1 class="darwin fl pmt0 pmb0">' . get_field('page_title_text') . '</h1>'; } ?>
		<?php if(get_field('page_intro_text')) { echo '<h2 class="title-secondary animateslideinleft animated">' . get_field('page_intro_text') . '</h2>'; } ?>  
 		<?php echo do_shortcode('[ajax_load_more id="press" container_type="ul" post_type="post" category="in-the-news, contributed-article, awards" posts_per_page="10"]'); ?>
    </div>
</div>  

<?php get_footer(); ?>
