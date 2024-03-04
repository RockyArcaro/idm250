<?php
function theme_scripts_and_styles() {
    wp_enqueue_style('idm250-main-style', get_stylesheet_directory_uri() . '/style.css');
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