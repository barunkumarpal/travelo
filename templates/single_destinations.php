<div class="col-lg-4 col-md-6">
    <div class="single_place">
        <div class="thumb">
            <img src="img/place/1.png" alt="">
            <?php if(get_field('price')){ ?>
                <a href="<?php the_permalink(); ?>" class="prise"><?php  echo get_field('price'); ?></a>
            <?php  }  ?>
        </div>
        <div class="place_info">
            <a href="<?php the_permalink(); ?>"><h3><?php echo get_the_title(); ?></h3></a>
            <p><?php 
                $terms = get_the_terms( get_the_ID(), 'location' );                         
                if ( $terms != null ){
                    foreach( $terms as $term ) {
                    // Print the name method from $term which is an OBJECT
                    print $term->name ;
                    // Get rid of the other data stored in the object, since it's not needed
                    unset($term);
                } }
                ?>
                </p>
            <div class="rating_days d-flex justify-content-between">
                <span class="d-flex justify-content-center align-items-center">
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i> 
                        <i class="fa fa-star"></i>
                        <a href="#">(20 Review)</a>
                </span>
                <div class="days">
                <?php if(get_field('duration')){ ?>
                    <i class="fa fa-clock-o"></i>
                    <a href="<?php the_permalink(); ?>"><?php  echo get_field('duration'); ?></a>
                <?php  }  ?>
                </div>
            </div>
        </div>
    </div>
</div>