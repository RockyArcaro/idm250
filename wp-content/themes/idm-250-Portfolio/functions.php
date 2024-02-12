<?php

function theme_scripts_and_styles
{
    wp_enqueue_style('idm250-main-style', get_template_directory_uri() . 'wp-content/themes/idm-250-Portfolio/scripts/main.js');
    wp_enqueue_script('idm250-main-script', get_template_directory_uri() . 'wp-content/themes/idm-250-Portfolio/scripts/main.js', [], false, ['in_footer' => true]);
}

add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');