<?php 
$args =[
    'post_type' => 'destination',
    'posts_per_page' => '6'
];

$query = new WP_Query($args);

if($query->have_posts()){
    while($query->have_posts()){
        $query->the_post(); 

        get_template_part('templates/single_destinations');

     } wp_reset_postdata();
}


 