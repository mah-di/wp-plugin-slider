<?php

$default_min_xl                         = $cs_post_type == 'product' ? 4 : 1;
$cs_items_to_display_xl                 = cs_get_meta( $cs_post_ID, 'cs_items_to_display_xl', $default_min_xl );

$default_min_lg                         = $cs_post_type == 'product' ? 3 : 1;
$cs_min_lg                              = $cs_items_to_display_xl < 3 ? $cs_items_to_display_xl : $default_min_lg;
$cs_items_to_display_lg                 = cs_get_meta( $cs_post_ID, 'cs_items_to_display_lg', $cs_min_lg );

$default_min_md                         = $cs_post_type == 'product' ? 2 : 1;
$cs_min_md                              = $cs_items_to_display_lg < 2 ? $cs_items_to_display_lg : $default_min_md;
$cs_items_to_display_md                 = cs_get_meta( $cs_post_ID, 'cs_items_to_display_md', $cs_min_md );

$cs_items_to_display_sm                 = cs_get_meta( $cs_post_ID, 'cs_items_to_display_sm', 1 );

$cs_animation_entrance                  = cs_get_meta( $cs_post_ID, 'cs_animation_entrance', '' );
$cs_animation_exit                      = cs_get_meta( $cs_post_ID, 'cs_animation_exit', '' );

$cs_margin_right                        = cs_get_meta( $cs_post_ID, 'cs_margin_right', 10 );
$cs_loop                                = cs_get_meta( $cs_post_ID, 'cs_loop', 'false' );
$cs_center                              = cs_get_meta( $cs_post_ID, 'cs_center', 'false' );
$cs_show_nav                            = cs_get_meta( $cs_post_ID, 'cs_show_nav', 'true' );
$cs_show_nav_sm                         = cs_get_meta( $cs_post_ID, 'cs_show_nav_sm', 'false' );
$cs_show_dots                           = cs_get_meta( $cs_post_ID, 'cs_show_dots', 'true' );
$cs_show_dots_sm                        = cs_get_meta( $cs_post_ID, 'cs_show_dots_sm', 'false' );
$cs_show_dots_foreach                   = cs_get_meta( $cs_post_ID, 'cs_show_dots_foreach', 'false' );
$cs_autoplay                            = cs_get_meta( $cs_post_ID, 'cs_autoplay', 'false' );
$cs_autoplay_timeout                    = cs_get_meta( $cs_post_ID, 'cs_autoplay_timeout', 5000 );
$cs_autoplay_hover_pause                = cs_get_meta( $cs_post_ID, 'cs_autoplay_hover_pause', 'true' );
$cs_autoplay_speed                      = cs_get_meta( $cs_post_ID, 'cs_autoplay_speed', 1000 );

?>

<script>
jQuery(document).ready(function($) {

    function loadCarousel() {
        const options = {
            responsive: {
                0: {
                    items: <?php echo absint( $cs_items_to_display_sm ) ?>,
                    nav: <?php echo esc_html( $cs_show_nav_sm ) ?>,
                    dots: <?php echo esc_html( $cs_show_dots_sm ) ?>,
                },
                640: {
                    items: <?php echo absint( $cs_items_to_display_md ) ?>,
                    nav: <?php echo esc_html( $cs_show_nav ) ?>,
                    dots: <?php echo esc_html( $cs_show_dots ) ?>,
                },
                1024: {
                    items: <?php echo absint( $cs_items_to_display_lg ) ?>,
                    nav: <?php echo esc_html( $cs_show_nav ) ?>,
                    dots: <?php echo esc_html( $cs_show_dots ) ?>,
                },
                1440: {
                    items: <?php echo absint( $cs_items_to_display_xl ) ?>,
                    nav: <?php echo esc_html( $cs_show_nav ) ?>,
                    dots: <?php echo esc_html( $cs_show_dots ) ?>,
                }
            },
            margin: <?php echo absint( $cs_margin_right ) ?>,
            loop: <?php echo esc_html( $cs_loop ) ?>,
            center: <?php echo esc_html( $cs_center ) ?>,
            navText: ['<span>‹</span>', '<span>›</span>'],
            dotsEach: <?php echo esc_html( $cs_show_dots_foreach ) ?>,
            autoplay: <?php echo esc_html( $cs_autoplay ) ?>,
            autoplayTimeout: <?php echo absint( $cs_autoplay_timeout ) ?>,
            autoplayHoverPause: <?php echo esc_html( $cs_autoplay_hover_pause ) ?>,
            smartSpeed: <?php echo absint( $cs_autoplay_speed ) == 0 ? 'false' : absint( $cs_autoplay_speed ) ?>
        };

        <?php if( $cs_animation_exit ): ?>
        options.animateOut = '<?php echo esc_html( $cs_animation_exit ) ?> cs-animate';
        <?php endif ?>

        <?php if( $cs_animation_entrance ): ?>
        options.animateIn = '<?php echo esc_html( $cs_animation_entrance ) ?> cs-animate cs-animate-in';
        <?php endif ?>

        const owl = $('#commerce-slider-<?php echo esc_html( $cs_post_ID ) ?>');

        owl.owlCarousel('destroy');

        owl.owlCarousel( options );
    }

    $(window).on('load resize cs.slider.<?php echo esc_html( $cs_post_ID ) ?>.width.set', loadCarousel);

});
</script>