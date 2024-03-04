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
?>
<div>
<?php get_footer(); ?>
</div>
