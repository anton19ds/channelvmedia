<?php
/**
 * Template Name: Full Width custom
 *
 * @package WordPress
 * @subpackage CVM_2016
 * @since CVM 2016 1.0
 */

get_header(); ?>
<div class="grid-10 <?php if (is_page('Careers')) {
    echo 'careers';
} ?> clearfix">
    <main class="grid-10 ab clearfix">
        
        <section id="hero" class="grid-10 fl   pt10 pb4 clearfix">
            <div class="color-overlay bg-common bg-stoverview clearfix"></div>
            <div class="color-overlay black-trans-overlay clearfix"></div>
            <div class="grid-page z2 clearfix">
                <div class="grid-8 mauto pt10 pb5 clearfix">
                    <div class="grid-10 fl clearfix">
                        <h1 class="block-headline_alt mb0 pb2 white ts2 tac">
                            We propel companies into the mainstream <span class="gradient-underline">consciousness.</span>
                        </h1>
                        <span class="block-subheadline white ts tac" id="style-text" style="opacity:0">
                            Channel V Media is an award‑winning New York City
                            Communications Strategy and PR firm. We build market momentum for companies ranging from
                            established Fortune 500 industry leaders to venture‑backed innovators.
                        </span>
                    </div>
                </div>
            </div>
            <div class="bg-gtk"></div>
        </section>
        <?php
        // Start the loop.
        while (have_posts()):
            the_post(); ?>
            <?php the_content();
            wp_link_pages(
                array(
                    'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'twentysixteen') . '</span>',
                    'after' => '</div>',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    'pagelink' => '<span class="screen-reader-text">' . __('Page', 'twentysixteen') . ' </span>%',
                    'separator' => '<span class="screen-reader-text">, </span>',
                ));
            ?>
            <?php
            edit_post_link(
                sprintf(
                    /* translators: %s: Name of current post */
                    __('Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen'),
                    get_the_title()
                ),
                '<footer class="entry-footer"><span class="edit-link">',
                '</span></footer><!-- .entry-footer -->'
            );
            ?>
        <?php endwhile; ?>
    </main>

</div><!-- .grid-10 -->


<?php get_footer(); ?>