<?php
function theme_styles(){
    $ver = DEV_MODE ? microtime() : false;
    $src = get_template_directory_uri();
    $src = get_theme_file_uri();

    wp_enqueue_style( 'theme-style', get_stylesheet_uri(), NULL, $ver, 'all' );
    wp_enqueue_style( 'bootstrap', $src.'/css/bootstrap.min.css', NULL, $ver, 'all' );
    wp_enqueue_style( 'owl-min', $src.'/css/owl.carousel.min.css', NULL, $ver, 'all' );
    wp_enqueue_style( 'magnific-pop', $src.'/css/magnific-popup.css', NULL, $ver, 'all' );
    wp_enqueue_style( 'font-awesome-min', $src.'/css/font-awesome.min.css', NULL, $ver, 'all' );
    wp_enqueue_style( 'themify', $src.'/css/themify-icons.css', NULL, $ver, 'all' );
    wp_enqueue_style( 'nice-select', $src.'/css/nice-select.css', NULL, $ver, 'all' );
    wp_enqueue_style( 'flaticon', $src.'/css/flaticon.css', NULL, $ver, 'all' );
    wp_enqueue_style( 'gijgo', $src.'/css/gijgo.css', NULL, $ver, 'all' );
    wp_enqueue_style( 'animate', $src.'/css/animate.css', NULL, $ver, 'all' );
    wp_enqueue_style( 'slick', $src.'/css/slick.css', NULL, $ver, 'all' );
    wp_enqueue_style( 'slicknav', $src.'/css/slicknav.css', NULL, $ver, 'all' );
    wp_enqueue_style( 'jqueryui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css', NULL, $ver, 'all' );
    wp_enqueue_style( 'main-style', $src.'/css/style.css', NULL, $ver, 'all' );


    wp_enqueue_script( 'modernizr' , $src.'/js/vendor/modernizr-3.5.0.min.js', NULL, $ver, true );
    wp_enqueue_script( 'jquery-min' , $src.'/js/vendor/jquery-1.12.4.min.js', NULL, $ver, true );
    wp_enqueue_script( 'popper-min' , $src.'/js/popper.min.js', NULL, $ver, true );
    wp_enqueue_script( 'bootstrap-min' , $src.'/js/bootstrap.min.js', NULL, $ver, true );
    wp_enqueue_script( 'owl-slider-min' , $src.'/js/owl.carousel.min.js', NULL, $ver, true );
    wp_enqueue_script( 'isotope' , $src.'/js/isotope.pkgd.min.js', NULL, $ver, true );
    wp_enqueue_script( 'ajax-form' , $src.'/js/ajax-form.js', NULL, $ver, true );
    wp_enqueue_script( 'waypoints' , $src.'/js/waypoints.min.js', NULL, $ver, true );
    wp_enqueue_script( 'jquery-counter' , $src.'/js/jquery.counterup.min.js', NULL, $ver, true );
    wp_enqueue_script( 'imagesloaded' , $src.'/js/imagesloaded.pkgd.min.js', NULL, $ver, true );
    wp_enqueue_script( 'scrollIt' , $src.'/js/scrollIt.js', NULL, $ver, true );
    wp_enqueue_script( 'jquery-scrollUp' , $src.'/js/jquery.scrollUp.min.js', NULL, $ver, true );
    wp_enqueue_script( 'wow-min' , $src.'/js/wow.min.js', NULL, $ver, true );
    wp_enqueue_script( 'nice-select' , $src.'/js/nice-select.min.js', NULL, $ver, true );
    wp_enqueue_script( 'jquery-slicknav' , $src.'/js/jquery.slicknav.min.js', NULL, $ver, true );
    wp_enqueue_script( 'jquery-magnific-popup' , $src.'/js/jquery.magnific-popup.min.js', NULL, $ver, true );
    wp_enqueue_script( 'plugins' , $src.'/js/plugins.js', NULL, $ver, true );
    wp_enqueue_script( 'gijgo-min' , $src.'/js/gijgo.min.js', NULL, $ver, true );
    wp_enqueue_script( 'slick-min' , $src.'/js/slick.min.js', NULL, $ver, true );
    wp_enqueue_script( 'contact' , $src.'/js/contact.js', NULL, $ver, true );
    wp_enqueue_script( 'jquery-ajaxchimp' , $src.'/js/jquery.ajaxchimp.min.js', NULL, $ver, true );
    wp_enqueue_script( 'jquery-form' , $src.'/js/jquery.form.js', NULL, $ver, true );
    wp_enqueue_script( 'jquery-valid-min' , $src.'/js/jquery.validate.min.js', NULL, $ver, true );
    wp_enqueue_script( 'mail-script' , $src.'/js/mail-script.js', NULL, $ver, true );
    wp_enqueue_script( 'main-js' , $src.'/js/main.js', ['jquery'], $ver, true );

   

    wp_localize_script('main-js', 'theme_wp_ajax_obj', [ 
        'ajax_url' => admin_url('admin-ajax.php'),
        'home_url' => home_url('/')
        ]);

    wp_enqueue_script( 'custom-js' , $src.'/custom.js', ['jquery'], $ver, true );
    
}