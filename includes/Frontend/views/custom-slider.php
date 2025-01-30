<?php

$ms_feature_img_ratio       = trim( get_post_meta( $ms_post_ID, 'ms_feature_img_ratio', true ) );
[ $ms_width, $ms_height ]   = explode( ':', $ms_feature_img_ratio );
$ms_aspect_ratio            = ( absint( $ms_height ) / absint( $ms_width ) );

$ms_min_height              = get_post_meta( $ms_post_ID, 'ms_min_height', true );
$ms_feature_img_size        = get_post_meta( $ms_post_ID, 'ms_feature_img_size', true );

$posts = new WP_Query( $args );

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

        <div class="ms-slide-wrapper" style="background-image: url('<?php echo esc_url( $featured_image_url ); ?>')">
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

<script>
    function applyMinHeight<?php echo $ms_post_ID ?>() {
        const wrappers = document.querySelectorAll('#my-slider-<?php echo $ms_post_ID ?> .ms-slide-wrapper');
    
        wrappers.forEach(wrapper => {
            let msMinHeight = <?php echo $ms_min_height ? $ms_min_height : 0 ?>;
            let aspectMinHeight = wrapper.offsetWidth * <?php echo $ms_aspect_ratio ?>;

            let minHeight = aspectMinHeight > msMinHeight ? aspectMinHeight : msMinHeight;

            wrapper.style.minHeight = `${minHeight}px`;
        })
    }

    applyMinHeight<?php echo $ms_post_ID ?>()

    // Update on window resize
    window.addEventListener('resize', () => {
        applyMinHeight<?php echo $ms_post_ID ?>()
    });
</script>

<?php endif;