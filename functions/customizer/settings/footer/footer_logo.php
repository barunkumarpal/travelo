<?php
function footer_logo($wp_customize){
     // Copyright

        // Setting
        $wp_customize->add_setting(
            'footer_logo',
            []
        );

        // Control
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'footer_logo_id',
                array(
                    'label' => 'Footer Logo',
                    'section'   => 'footer',
                    'settings' => 'footer_logo'                    
                )
            )
        );
}