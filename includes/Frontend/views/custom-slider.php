<?php

$cs_feature_img_ratio       = trim( cs_get_meta( $cs_post_ID, 'cs_feature_img_ratio', '16:9' ) );
[ $cs_width, $cs_height ]   = explode( ':', $cs_feature_img_ratio );
$cs_aspect_ratio            = ( absint( $cs_height ) / absint( $cs_width ) );

$cs_min_height              = cs_get_meta( $cs_post_ID, 'cs_min_height', 'auto' );
$cs_feature_img_size        = cs_get_meta( $cs_post_ID, 'cs_feature_img_size', 'medium_large' );

$posts = new WP_Query( $args );

if ( $posts->have_posts() ):

?>
<div
    id="commerce-slider-<?php echo esc_html( $cs_post_ID ) ?>"
    class="owl-carousel owl-theme"
>

    <?php while ( $posts->have_posts() ): $posts->the_post() ?>

    <div class="cs-card">
        <?php
            $featured_image_url = null;

            if ( has_post_thumbnail() )
                $featured_image_url = get_the_post_thumbnail_url( get_the_ID(), $cs_feature_img_size );

        ?>

        <div
            class="cs-slide-wrapper"
            <?php if( isset( $featured_image_url ) ): ?>
            style="background-image: url('<?php echo esc_url( $featured_image_url ); ?>')"
            <?php endif ?>
        >
            <?php
                $content = get_the_content();
                echo wp_kses_post( do_blocks( $content ) );
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
                    $(window).trigger('cs.slider.<?php echo esc_html( $cs_post_ID ) ?>.width.set')
                    observer.disconnect()
                    return
                }
            })

            await observer.observe(wrapper[0], { attributes: true })
            return wrapper.outerWidth()
        }

        async function applyMinHeight() {
            const wrappers = $('#commerce-slider-<?php echo esc_html( $cs_post_ID ) ?> .cs-slide-wrapper');

            await waitForWidth(wrappers.last())

            wrappers.each(async function() {
                const wrapper = $(this);
                const csMinHeight = <?php echo ( $cs_min_height && $cs_min_height != 'auto' ) ? esc_html( $cs_min_height ) : 0 ?>;
                const aspectMinHeight = wrapper.outerWidth() * <?php echo esc_html( $cs_aspect_ratio ) ?>;

                const minHeight = aspectMinHeight > csMinHeight ? aspectMinHeight : csMinHeight;

                wrapper.css('minHeight', `${minHeight}px`);
            });
        };

        $(window).on('load resize', async () => await applyMinHeight());

    })

</script>

<?php endif;