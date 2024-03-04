<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header class="site-header">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'primary-menu',
        'menu_id'        => 'primary-menu',
        'container'      => '',
        'items_wrap'     => '<nav class="site-navigation" id="%1$s"><ul class="menu">%3$s</ul></nav>', // Wrap items in a ul
    ) );
    ?>
</header>

