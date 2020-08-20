<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo get_theme_file_uri();?>/">
   
  <?php  wp_head(); ?>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">                                    
                                    <?php
                                        if(has_custom_logo()){
                                            the_custom_logo();
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                    <?php
                                    if(has_nav_menu('primary_trvl')){
                                   
                                        wp_nav_menu([
                                            'theme_location' => 'primary_trvl',
                                            'depth' => 2,
                                            'walker' => new Main_menu_walker()
                                        ]);
                                    }
                                        ?>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                        <p> 
                                            <?php 
                                                if(get_field('contact_number', 'option')){
                                                    echo '<i class="fa fa-phone"></i>'.get_field('contact_number', 'option');
                                                }
                                            ?>
                                           
                                        </p>
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <?php 
                                                if(get_field('instagram_profile', 'option')){  
                                                    $i_profile = get_field('instagram_profile', 'option');                                                 
                                                    echo '<li><a href='.'"'.$i_profile.'"'.'> <i class="fa fa-instagram"></i> </a></li>';
                                                }
                                                if(get_field('linkdin_profile', 'option')){  
                                                    $profile = get_field('linkdin_profile', 'option');                                                 
                                                    echo '<li><a href='.'"'.$profile.'"'.'> <i class="fa fa-linkedin"></i> </a></li>';
                                                }
                                                if(get_field('facebook_profile', 'option')){  
                                                    $profile = get_field('facebook_profile', 'option');                                                 
                                                    echo '<li><a href='.'"'.$profile.'"'.'> <i class="fa fa-facebook"></i> </a></li>';
                                                }
                                                if(get_field('google_plus_account', 'option')){  
                                                    $profile = get_field('google_plus_account', 'option');                                                 
                                                    echo '<li><a href='.'"'.$profile.'"'.'> <i class="fa fa-google-plus"></i> </a></li>';
                                                }
                                            ?>                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="seach_icon">
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->