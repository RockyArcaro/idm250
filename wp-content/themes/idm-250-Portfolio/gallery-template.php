<?php 

/*
Template Name: Gallery Template
*/

?>

<?php get_header(); ?>


<h1>
  <?php echo get_the_title(); ?>
</h1>


<?php
if (have_posts()) :
    while (have_posts()) : the_post(); 
        // Display the page content
        the_content();
    endwhile;
else :
    echo '<p>No content found.</p>'; // Output a message if there's no content
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
} else {
    echo '<p>No gallery found.</p>'; // Output a message if there's no gallery
}
?>

<?php get_footer(); ?>


