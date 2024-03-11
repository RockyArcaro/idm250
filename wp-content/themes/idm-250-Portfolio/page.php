<?php 

/*
Template Name: page template
*/

?>

<?php get_header(); ?>


<h1>
  <?php echo get_the_title(); ?>
</h1>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
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