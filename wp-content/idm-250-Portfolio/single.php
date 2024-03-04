<?php get_header(); ?>



<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <div class="post-align" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="post-align">
                <?php
                // Display the content of the current page
                the_content();
                ?>
            </div><!-- .entry-content -->
        </div><!-- #post-<?php the_ID(); ?> -->

        <?php
    } // End while
} // End if

?>

<?php get_footer(); ?>