<?php
function theme_scripts_and_styles() {
    wp_enqueue_style('idm250-main-style', get_stylesheet_directory_uri() . '/main.css');
    wp_enqueue_script('idm250-main-script', get_stylesheet_directory_uri() . '/scripts/main.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');

function idm250_portfolio_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => esc_html__( 'Primary Menu', 'idm-250-portfolio' ),
        )
    );
}
add_action( 'after_setup_theme', 'idm250_portfolio_register_menus' );

add_theme_support('post-thumbnails');

function custom_post_thumbnail_class($html, $post_id, $post_thumbnail_id, $size, $attr) {
    $class = 'thumbnail-class';
    
    $html = preg_replace('/<img(.*)class=[\'"]([^\'"]+)[\'"](.*)>/i', '<img$1class="$2 ' . $class . '"$3>', $html);
    return $html;
}
add_filter('post_thumbnail_html', 'custom_post_thumbnail_class', 10, 5);