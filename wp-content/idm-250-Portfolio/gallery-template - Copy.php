<?php 

/*
Template Name: Gallery Template
*/

?>

<?php get_header(); ?>
<?php get_footer(); ?>

<h1>
  <?php echo get_the_title(); ?>
</h1>


<?php

// Query the post content
if (have_posts()) :
    while (have_posts()) : the_post(); 
        // Display the page content
        the_content();
    endwhile;
endif;

// Display the gallery if it exists
$gallery = get_post_gallery(get_the_ID(), false);
if ($gallery) {
    // Output the gallery with flexbox container
    echo '<div class="gallery-wrapper">';
    echo '<div class="gallery-container">';
    echo do_shortcode($gallery);
    echo '</div>';
    echo '</div>';
}
?>
