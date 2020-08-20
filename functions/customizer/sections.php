<?php

function theme_customize_sections($wp_customize){
    
    $wp_customize->add_section( 
        'footer', 
        array(
            'title' => __( 'Footer' ),            
            'panel' => 'theme_options',
            'priority' => 160        
        ) );
}