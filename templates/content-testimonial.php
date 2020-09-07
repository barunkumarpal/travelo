<?php 
$args = [
    'post_type' => 'testimonial'
];
$query = new WP_Query($args);


if($query->have_posts()){
    while($query->have_posts()){
        $query->the_post();
        ?>

        <div class="single_carousel">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="single_testmonial text-center">
                        <div class="author_thumb">
                            <!-- <img src="img/testmonial/author.png" alt=""> -->
                            <?php the_post_thumbnail('thumbnail');?>
                        </div>
                        <?php the_content(); ?>
                        <div class="testmonial_author">
                            <h3>- <?php the_title(); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    wp_reset_postdata();
}
