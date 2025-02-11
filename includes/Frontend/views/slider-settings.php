<?php

$ms_items_to_display_xl                 = ms_get_meta( $ms_post_ID, 'ms_items_to_display_xl', 4 );

$ms_min_lg                              = $ms_items_to_display_xl < 3 ? $ms_items_to_display_xl : 3;
$ms_items_to_display_lg                 = ms_get_meta( $ms_post_ID, 'ms_items_to_display_lg', $ms_min_lg );

$ms_min_md                              = $ms_items_to_display_lg < 2 ? $ms_items_to_display_lg : 2;
$ms_items_to_display_md                 = ms_get_meta( $ms_post_ID, 'ms_items_to_display_md', $ms_min_md );

$ms_items_to_display_sm                 = ms_get_meta( $ms_post_ID, 'ms_items_to_display_sm', 1 );

$ms_animation_entrance                  = ms_get_meta( $ms_post_ID, 'ms_animation_entrance', '' );
$ms_animation_exit                      = ms_get_meta( $ms_post_ID, 'ms_animation_exit', '' );

$ms_margin_right                        = ms_get_meta( $ms_post_ID, 'ms_margin_right', 10 );
$ms_loop                                = ms_get_meta( $ms_post_ID, 'ms_loop', 'false' );
$ms_center                              = ms_get_meta( $ms_post_ID, 'ms_center', 'false' );
$ms_show_nav                            = ms_get_meta( $ms_post_ID, 'ms_show_nav', 'true' );
$ms_show_nav_sm                         = ms_get_meta( $ms_post_ID, 'ms_show_nav_sm', 'false' );
$ms_show_dots                           = ms_get_meta( $ms_post_ID, 'ms_show_dots', 'true' );
$ms_show_dots_sm                        = ms_get_meta( $ms_post_ID, 'ms_show_dots_sm', 'false' );
$ms_show_dots_foreach                   = ms_get_meta( $ms_post_ID, 'ms_show_dots_foreach', 'false' );
$ms_autoplay                            = ms_get_meta( $ms_post_ID, 'ms_autoplay', 'false' );
$ms_autoplay_timeout                    = ms_get_meta( $ms_post_ID, 'ms_autoplay_timeout', 5000 );
$ms_autoplay_hover_pause                = ms_get_meta( $ms_post_ID, 'ms_autoplay_hover_pause', 'true' );
$ms_autoplay_speed                      = ms_get_meta( $ms_post_ID, 'ms_autoplay_speed', 1000 );

?>

<script>
jQuery(document).ready(function($) {

    function loadCarousel() {
        const options = {
            responsive: {
                0: {
                    items: <?php echo absint( $ms_items_to_display_sm ) ?>,
                    nav: <?php echo $ms_show_nav_sm ?>,
                    dots: <?php echo $ms_show_dots_sm ?>,
                },
                640: {
                    items: <?php echo absint( $ms_items_to_display_md ) ?>,
                    nav: <?php echo $ms_show_nav ?>,
                    dots: <?php echo $ms_show_dots ?>,
                },
                1024: {
                    items: <?php echo absint( $ms_items_to_display_lg ) ?>,
                    nav: <?php echo $ms_show_nav ?>,
                    dots: <?php echo $ms_show_dots ?>,
                },
                1440: {
                    items: <?php echo absint( $ms_items_to_display_xl ) ?>,
                    nav: <?php echo $ms_show_nav ?>,
                    dots: <?php echo $ms_show_dots ?>,
                }
            },
            margin: <?php echo absint( $ms_margin_right ) ?>,
            loop: <?php echo $ms_loop ?>,
            center: <?php echo $ms_center ?>,
            navText: ['<span>‹</span>', '<span>›</span>'],
            dotsEach: <?php echo $ms_show_dots_foreach ?>,
            autoplay: <?php echo $ms_autoplay ?>,
            autoplayTimeout: <?php echo absint( $ms_autoplay_timeout ) ?>,
            autoplayHoverPause: <?php echo $ms_autoplay_hover_pause ?>,
            smartSpeed: <?php echo absint( $ms_autoplay_speed ) == 0 ? 'false' : absint( $ms_autoplay_speed ) ?>
        };

        <?php if( $ms_animation_exit ): ?>
        options.animateOut = '<?php echo $ms_animation_exit ?> ms-animate';
        <?php endif ?>

        <?php if( $ms_animation_entrance ): ?>
        options.animateIn = '<?php echo $ms_animation_entrance ?> ms-animate ms-animate-in';
        <?php endif ?>

        const owl = $('#my-slider-<?php echo $ms_post_ID ?>');

        owl.owlCarousel('destroy');

        owl.owlCarousel( options );
    }

    $(window).on('load resize ms.slider.<?php echo $ms_post_ID ?>.width.set', loadCarousel);

});
</script>