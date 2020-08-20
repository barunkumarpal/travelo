<?php
function search_up_trip(){
 $locatin = $_POST['trip_location'];
 $date = $_POST['trip_date'];


 if($date <= date('Y-m-d')){
    wp_send_json_error('Selected date is over!');
 }

$args = [
    'post_type' => 'trip',
    'post_status' => 'publish',
    'meta_query' => array(
        array(
            'key'       => 'trip_date',
            'value'     => $date,
            'compare'   => '>=',
            'type'      => 'DATETIME',
        ),
        array(
            'key'       => 'trip_location',
            'value'     => $locatin,
            'compare'   => 'LIKE'            
        )
    )
];

$query = new Wp_Query($args);

if($query->have_posts()){
    ob_start();
    while($query->have_posts()){
        $query->the_post();
        
        echo "<div class='col-lg-4 col-md-6 col-sm-6'>";
        get_template_part('templates/search_up_trips');
        echo "</div>";
        
    }
    wp_send_json_success( ob_get_clean() );

    wp_reset_postdata();
}else{
    wp_send_json_error('No match location!');
}

 
}