<?php 

/*
Template Name: ux projects template
*/

?>

<?php get_header(); ?>


<div class="thumbnail-container">
    <?php
    // Query posts from a specific category
    $category_posts = new WP_Query(array(
        'category_name' => 'ux-project',
        'posts_per_page' => -1, // Display all posts
    ));

    // Loop through category posts
    if ($category_posts->have_posts()) :
        while ($category_posts->have_posts()) :
            $category_posts->the_post();
    ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('thumbnail'); ?>>
                <a href="<?php the_permalink(); ?>" class="thumbnail-link">
                    <?php
                    // Display featured image
                    if (has_post_thumbnail()) :
                        the_post_thumbnail('large', array('class' => 'thumbnail-class'));
                    endif;
                    ?>
                </a>
                <header class="entry-header">
                    <h4 class="entry-title"><a style="color:#000000" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </header><!-- .entry-header -->
            </article><!-- #post-<?php the_ID(); ?> -->
    <?php
        endwhile;
        wp_reset_postdata(); // Reset post data
    else :
        // If no posts found, display a message
        echo 'No posts found.';
    endif;
    ?>
</div><!-- .thumbnail-container -->

<?php get_footer(); ?>