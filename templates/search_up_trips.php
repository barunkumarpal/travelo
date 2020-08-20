<?php $permalink = get_the_permalink(); ?>


<div class="single_destination">   
    <div class="thumb">             
        <a href="<? echo $permalink; ?>"><img src="<?php echo get_the_post_thumbnail_url( null, 'large' );?>" height="250"/> </a>
    </div>
    <div class="content">
        <p class="d-flex align-items-center"><?php if(get_field('trip_location')){echo get_field('trip_location'); }?> 
            <a href="<? echo $permalink; ?>"><?php if(get_field('trip_date')){echo get_field('trip_date'); } ?></a> 
        </p>        
    </div>   
</div>
