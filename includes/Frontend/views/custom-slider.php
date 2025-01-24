<?php

$posts = new WP_Query( $args );

if ( $posts->have_posts() ):

?>
<div
    id="my-slider-<?php echo $ms_post_ID ?>"
    class="owl-carousel owl-theme"
>

    <?php while ( $posts->have_posts() ): $posts->the_post() ?>

    <div class="ms-card">
        <?php the_content() ?>
    </div>

    <?php endwhile; 

    wp_reset_postdata();

    ?>

</div>

<?php endif;