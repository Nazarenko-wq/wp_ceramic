<?php

// delete useless tegs in PHP file (cleane the file);
add_filter('show_admin_bar', '__return_false');

remove_action('wp_head',             'print_emoji_detection_script');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles',     'print_emoji_styles');
remove_action('admin_print_styles',  'print_emoji_styles');

remove_action('wp_head','wp_resource_hints', 2);
remove_action('wp_head','wp_generator');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','rsd_link');
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','rel_canonical');
remove_action('wp_head','wp_shortlink_wp_head',10);
remove_action('wp_head','wp_oembed_add_discovery_links');

add_action('wp_enqueue_scripts', 'site_scripts');
function site_scripts () {
    $version = '0.0.0.0';
    // delete useless tegs
    wp_dequeue_style('wp-block-library');

    // delet useless script file
    wp_deregister_script('wp_embed');
   
    // add fonts 
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,300&display=swap', array(), $version);
    
    // add style file
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), $version);

    // add script
    wp_enqueue_script('main-js',  get_template_directory_uri() . '/assets/js/index.js', [], $version, true);

    wp_localize_script('main-js', 'WPJS', [
        'siteUrl' => get_template_directory_uri(),
    ]);
}

?>