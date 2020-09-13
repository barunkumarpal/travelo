<?php get_header(); ?>

<div class="destination_banner_wrap overlay" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>);">
        <div class="destination_text text-center">
            <h3><?php echo get_the_title(); ?></h3>
            <?php             
                do_action( 'plugins/wp_subtitle/the_subtitle', array(
                    'before'        => '<p>',
                    'after'         => '</p>',
                    'post_id'       => get_the_ID(),
                    'default_value' => ''
                ) );
            ?>
        </div>
    </div>

    <div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="destination_info">                       
                        <?php the_content(); ?>
                    </div>
                    <div class="bordered_1px"></div>
                    <div class="contact_join">
                        <h3>Contact for join</h3>
                       <?php echo do_shortcode('[contact-form-7 id="262" title="Custom Join Form"]', false ); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part('templates/newsletter_form'); ?>

    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>More Places</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                $args = [
                    'post_type' => 'destination',
                    'posts_per_page' => 3
                ];
                $query = new WP_Query($args);
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post(); 
                        
                        get_template_part('templates/single_destinations');

                    } wp_reset_postdata();
                }?>              
            </div>
        </div>
    </div>


<?php get_footer(); ?>