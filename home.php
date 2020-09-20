<?php
get_header();

if(have_posts()){
    while(have_posts()){
        the_post();
        echo "<h3 class='text-center'>".get_the_title()."</h3>";
        echo "</br>";
        the_content();
    }
}

get_footer();
?>