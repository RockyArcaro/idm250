<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme.
 * It is used to display a page when nothing more specific matches a query.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package idm-250-Portfolio
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        if (have_posts()) :
            // Start the Loop.
            while (have_posts()) :
                the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to display the full content of the post, you can use:
                 * get_template_part('content', 'full');
                 */
                get_template_part('template-parts/content', get_post_format());

            endwhile;

            // Previous/next page navigation.
            the_posts_pagination();

        else :
            // If no content, include the "No posts found" template.
            get_template_part('template-parts/content', 'none');

        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();