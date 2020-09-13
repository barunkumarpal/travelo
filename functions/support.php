<?php
    function theme_support(){

        // Nav Menu
        add_theme_support('menus');

            // Call Menu Locations
            theme_menus();

        // Title Tag
        add_theme_support('title-tag');

        // Custom Menu
        add_theme_support('custom-logo');
        
        // WP Subtitle Support ( Plugin )
        add_post_type_support( 'destination', 'wps_subtitle' );
    }
