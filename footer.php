<footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="<?php echo site_url(); ?>">
                                    <?php
                                        if(get_theme_mod('footer_logo')){
                                            $field = get_theme_mod('footer_logo');
                                            echo "<img src='$field'/>";
                                        }
                                    ?>
                                </a>                               
                            </div>
                            <p>
                                <?php if(get_field('address', 'option')){
                                    echo get_field('address', 'option');
                                }?>
                                <br>  
                                <?php if(get_field('contact_number', 'option')){
                                    $field = get_field('contact_number', 'option');
                                    echo "<a href=".'"tel:'.$field.'"'.">$field</a>";
                                }?>                          
                                <br>
                                <?php if(get_field('email', 'option')){
                                    $field = get_field('email', 'option');
                                    echo "<a href=".'"mailto:'.$field.'"'.">$field</a>";
                                }?>                                
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <?php if(get_field('facebook_profile', 'option')){
                                        $field = get_field('facebook_profile', 'option');
                                    ?>
                                        <li>
                                            <a href="<?php echo $field; ?>">
                                                <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                    <?php }
                                    
                                    if(get_field('twitter_profile', 'option')){
                                        $field = get_field('twitter_profile', 'option');
                                    ?>
                                        <li>
                                            <a href="<?php echo $field; ?>">
                                                <i class="ti-twitter-alt"></i>
                                            </a>
                                        </li>
                                    <?php }
                                    
                                    if(get_field('instagram_profile', 'option')){
                                        $field = get_field('instagram_profile', 'option');
                                    ?>
                                        <li>
                                            <a href="<?php echo $field; ?>">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    <?php } 

                                    if(get_field('pinterest_profile', 'option')){
                                        $field = get_field('pinterest_profile', 'option');
                                    ?>
                                        <li>
                                            <a href="<?php echo $field; ?>">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                        </li>
                                    <?php }

                                    if(get_field('youtube_channel', 'option')){
                                        $field = get_field('youtube_channel', 'option');
                                    ?>
                                        <li>
                                            <a href="<?php echo $field; ?>">
                                                <i class="fa fa-youtube-play"></i>
                                            </a>
                                        </li>
                                    <?php }?>                           
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Quick Links
                            </h3>                           
                            <?php 
                            if(has_nav_menu( 'quick_links_trvl' )){
                                wp_nav_menu([
                                    'theme_location' => 'quick_links_trvl',
                                    'depth' => 1,
                                    'menu_class' => 'links'                                    
                                ]);
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Popular destination
                            </h3>
                            <ul class="links double_links">
                                <li><a href="#">Indonesia</a></li>
                                <li><a href="#">America</a></li>
                                <li><a href="#">India</a></li>
                                <li><a href="#">Switzerland</a></li>
                                <li><a href="#">Italy</a></li>
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">Franch</a></li>
                                <li><a href="#">England</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Instagram
                            </h3>
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/1.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/2.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/3.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/4.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/5.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/6.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <?php if(get_theme_mod('copyright')){ ?>
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                <?php                                
                                echo get_theme_mod('copyright'); }?>                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 
  <?php 
    // Search Modal
  echo get_search_form(); ?>
   

    
    <?php wp_footer(); ?>
</body>

</html>