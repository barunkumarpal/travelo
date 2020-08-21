<?php
/* Template Name: Small Width Page */
get_header();
?>

<div class="container">
    <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();

                get_template_part('page', basename(get_permalink()) );
               
            }
        }
    ?>
</div>
<?php get_footer(); ?>