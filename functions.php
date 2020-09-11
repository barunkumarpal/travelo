<?php
define('DEV_MODE', true);

// Styles
require_once('functions/enqueue.php');
add_action('wp_enqueue_scripts', 'theme_styles');

// Theme Supports
require_once('functions/support.php');
require_once('functions/menus.php');
add_action('after_setup_theme', 'theme_support');

    // Menu Walker
    require_once('functions/main_menu_walker.php');

// ACF Option Pages
require_once('functions/acf-options-pages.php');

// Customizer

    //Panels
    require_once('functions/customizer/panels.php');

    //Sections
    require_once('functions/customizer/sections.php');

    //Settings
        // Footer Settings
            // Copyright
            require_once('functions/customizer/settings/footer/copyright.php');

            // Logo
            require_once('functions/customizer/settings/footer/footer_logo.php');

    require_once('functions/customizer/settings.php');        

require_once('functions/customizer/customizer.php');

add_action('customize_register','theme_customize_register');

// Custom Post Types
    // Trips
    require_once('functions/custom_post_types/trips.php');
    add_action( 'init', 'custom_trips' );

// Flush Rewrite Rules
require_once('functions/flush_rewrite.php');
add_action( 'after_switch_theme', 'my_rewrite_flush' );

// Search Trip
require_once('functions/search_upcoming_trip.php');
add_action('wp_ajax_searchtrip', 'search_up_trip');
add_action('wp_ajax_nopriv_searchtrip', 'search_up_trip');

// User Login
require_once('functions/login_process.php');
add_action('wp_ajax_nopriv_user_login', 'process_user_login');


