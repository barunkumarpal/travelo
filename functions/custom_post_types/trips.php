<?php 
function custom_trips(){
    $args = [
        'label' => 'Trips',
        'labels' => [
            'name'                  => 'Trips',
            'singular_name'         => 'Trip',
            'add_new'               => 'Add New Trip',
            'add_new_item'          => 'Add New Trip',
            'edit_item'             => 'Edit Trip',
            'all_items'             => 'All Trips'
        ],
        'description' => 'Listings of Trips we make',
        'public' => true,
        'hierarchical' => true,
        'menu_icon' => 'dashicons-admin-site-alt2',
        'supports' => [
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ],
        'has_archive'   => true,
        'rewrite'       => array( 'slug' => 'our-trips')
    ];

    register_post_type( 'trip', $args);
}