
<?php
/*
Template Name: Custom Single Post Template
*/
?>


<?php
    get_header(); ?>
<h1>
<?php the_title();?>
</h1>
<div class="w-full mx-auto max-w-7xl post-align">

<?php get_template_part('components/content'); ?>

</div>

<div>
<?php get_footer(); ?>
</div>

