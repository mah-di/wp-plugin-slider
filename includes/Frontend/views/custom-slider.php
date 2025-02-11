<?php

$ms_feature_img_ratio       = trim( ms_get_meta( $ms_post_ID, 'ms_feature_img_ratio', '16:9' ) );
[ $ms_width, $ms_height ]   = explode( ':', $ms_feature_img_ratio );
$ms_aspect_ratio            = ( absint( $ms_height ) / absint( $ms_width ) );

$ms_min_height              = ms_get_meta( $ms_post_ID, 'ms_min_height', 'auto' );
$ms_feature_img_size        = ms_get_meta( $ms_post_ID, 'ms_feature_img_size', 'medium_large' );

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

    jQuery(document).ready(function($) {

        async function waitForWidth(wrapper) {
            const observer = new MutationObserver(() => {
                if ( wrapper.outerWidth() > 0 ) {
                    $(window).trigger('ms.slider.<?php echo $ms_post_ID ?>.width.set')
                    observer.disconnect()
                    return
                }
            })

            await observer.observe(wrapper[0], { attributes: true })
            return wrapper.outerWidth()
        }

        async function applyMinHeight() {
            const wrappers = $('#my-slider-<?php echo $ms_post_ID ?> .ms-slide-wrapper');

            await waitForWidth(wrappers.last())

            wrappers.each(async function() {
                const wrapper = $(this);
                const msMinHeight = <?php echo ( $ms_min_height && $ms_min_height != 'auto' ) ? $ms_min_height : 0 ?>;
                const aspectMinHeight = wrapper.outerWidth() * <?php echo $ms_aspect_ratio ?>;

                const minHeight = aspectMinHeight > msMinHeight ? aspectMinHeight : msMinHeight;

                wrapper.css('minHeight', `${minHeight}px`);
            });
        };

        $(window).on('load resize', async () => await applyMinHeight());

    })

</script>

<?php endif;