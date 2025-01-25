<?php

$posts = new WP_Query( $args );

$ms_feature_img_size = get_post_meta( $ms_post_ID, 'ms_feature_img_size', true );

if ( $posts->have_posts() ):

?>
<div
    id="my-slider-<?php echo $ms_post_ID ?>"
    class="owl-carousel owl-theme"
>

    <?php while ( $posts->have_posts() ): $posts->the_post() ?>

    <div class="ms-card">
        <?php
            $featured_image_url = get_the_post_thumbnail_url( get_the_ID(), $ms_feature_img_size );
        ?>

        <div class="ms-slide-wrapper" style="background-image: url('<?php echo esc_url( $featured_image_url ); ?>'); background-size: cover; background-position: center;">
            <?php
                $content = get_the_content();
                echo do_blocks( $content );
            ?>
        </div>
    </div>

    <?php endwhile; 

    wp_reset_postdata();

    ?>

</div>

<?php endif;