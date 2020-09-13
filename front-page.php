<?php get_header(); ?>

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <?php if(have_rows('main_banner_travelo', 'option')){
                    while ( have_rows('main_banner_travelo', 'option') ) { the_row();
                        $image = '';
                        $heading = '';
                        $sub_heading = '';
                        $button_text = '';
                        $button_url = '';

                        if(get_sub_field('image')){
                            $image = get_sub_field('image');
                        }                    
                        if(get_sub_field('heading')){
                            $heading = get_sub_field('heading');
                        }                    
                        if(get_sub_field('sub_heading')){
                            $sub_heading = get_sub_field('sub_heading');
                        }                    
                        if(get_sub_field('button_text')){
                            $button_text = get_sub_field('button_text');
                        }                    
                        if(get_sub_field('button_url')){
                            $button_url = get_sub_field('button_url');
                        }  ?>
                        <div class="single_slider  d-flex align-items-center overlay" style="background-image: url(<?php echo $image; ?>);">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-xl-12 col-md-12">
                                        <div class="slider_text text-center">
                                            <h3><?php echo $heading; ?></h3>
                                            <p><?php echo $sub_heading; ?></p>
                                            <a href="<?php echo $button_url; ?>" class="boxed-btn3"><?php echo $button_text; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
        <?php } } ?>
                      
        </div>

    </div>
    <!-- slider_area_end -->

    <!-- where_togo_area_start  -->
    <div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form_area">
                        <h3>Where you want to go?</h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="search_wrap">
                        <form class="search_form" action="#" id="search-trip">
                            <div class="input_field">
                                <input type="text" placeholder="Where to go?" id="location">
                            </div>
                            <div class="input_field">
                                <input id="datepicker" placeholder="Date" type="date">
                            </div>
                            <div class="input_field">
                                <select>
                                    <option data-display="Travel type">Travel type</option>
                                    <option value="1">Some option</option>
                                    <option value="2">Another option</option>
                                </select>
                            </div>
                            <div class="search_btn">
                                <button class="boxed-btn4 " type="submit" >Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- where_togo_area_end  -->
    
    <!-- upcoming_trips_area_start  -->
    <div class="popular_destination_area pb-0" id="up-trips">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3 id="up-trip-title">Upcoming Trips</h3>
                        <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="up-trip-list">
                <!-- Search data will show up here-->                
            </div>
        </div>
    </div>
    
    <div class="container no-trip-found ">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title">
                    <h3 class="text-center">No Trip Found!</h3>
                </div>
            </div>
        </div>
    </div>   
    <!-- upcoming_trips_area_end  -->
    
    <!-- popular_destination_area_start  -->
    <?php if(function_exists('wpp_get_mostpopular')){

                $post_html ='<div class="col-lg-4 col-md-6">
                                <div class="single_destination">
                                    <div class="thumb">
                                        {thumb_img}
                                    </div>
                                    <div class="content">
                                        <p class="d-flex align-items-center">{title}</p>                                        
                                    </div>
                                </div>
                            </div>';

                $args = [
                    'post_type' == 'trips',
                    'wpp_start' => '<div class="popular_destination_area">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6">
                                                    <div class="section_title text-center mb_70">
                                                        <h3>Popular Destination</h3>
                                                        <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">',
                    'post_html' =>$post_html,
                    'wpp_end' => '</div>
                                </div>
                            </div>'                    
                ];

              wpp_get_mostpopular($args); 
                
            } ?>               
            
    <!-- popular_destination_area_end  -->

    <?php get_template_part('templates/newsletter_form'); ?>

    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Popular Places</h3>
                        <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
                    </div>
                </div>
            </div>
            <div class="row">
               <?php get_template_part('templates/show_destinations'); ?>              
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="more_place_btn text-center">
                        <a class="boxed-btn4" href="#">More Places</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="video_area video_bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video_wrap text-center">
                        <h3>Enjoy Video</h3>
                        <div class="video_icon">
                            <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=f59dDEk57i0">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Comfortable Journey</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Luxuries Hotel</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>Travel Guide</h3>
                        <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">                  
                        <?php get_template_part('templates/content', 'testimonial'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->


    <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Recent Trips</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                $date = date('Ymd');
                $args = [
                    'post_type' => 'trip',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'meta_query' => array(
                        array(
                            'key'       => 'trip_date',
                            'value'     => $date,
                            'compare'   => '<=',
                            'type'      => 'DATETIME',
                        ),
                    )
                ];

                $query = new Wp_Query($args);

                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();
?>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <!-- <img src="img/trip/1.png" alt=""> -->
                            <?php if( has_post_thumbnail() ){  ?>                                
                                    <img src="<?php echo get_the_post_thumbnail_url( null, 'large' );?>" height="250"/>
                                <?php }?> 
                        </div>
                        <div class="info">
                            <div class="date">
                                <!-- <span>Oct 12, 2019</span> -->
                                <?php if(get_field('trip_date')){
                                    echo '<span>';
                                    echo get_field('trip_date');
                                    echo '</span>';
                                }?>                                
                                <?php if(get_field('trip_location')){
                                    echo '<span>';
                                    echo get_field('trip_location');
                                    echo '</span>';
                                }?>                                
                            </div>
                            <a href="<?php echo get_the_permalink(); ?>">
                                <h3><?php echo get_the_title(); ?></h3>
                            </a>
                        </div>
                    </div>
                </div>
<?php
                    } wp_reset_postdata();
                }

                ?>                              
            </div>
        </div>
    </div>



<?php get_footer(); ?>