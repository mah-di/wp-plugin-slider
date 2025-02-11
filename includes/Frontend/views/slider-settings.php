<?php

$ms_items_to_display_xl                 = get_post_meta( $ms_post_ID, 'ms_items_to_display_xl', true );

if ( empty( $ms_items_to_display_xl ) )
    $ms_items_to_display_xl             = 4;

$ms_items_to_display_lg                 = get_post_meta( $ms_post_ID, 'ms_items_to_display_lg', true );

if ( empty( $ms_items_to_display_lg ) )
    $ms_items_to_display_lg             = ( ! empty( $ms_items_to_display_xl ) && $ms_items_to_display_xl < 3 ) ? $ms_items_to_display_xl : 3;

$ms_items_to_display_md                 = get_post_meta( $ms_post_ID, 'ms_items_to_display_md', true );

if ( empty( $ms_items_to_display_md ) )
    $ms_items_to_display_md             = ( ! empty( $ms_items_to_display_lg ) && $ms_items_to_display_lg < 2 ) ? $ms_items_to_display_xl : 2;

$ms_items_to_display_sm                 = get_post_meta( $ms_post_ID, 'ms_items_to_display_sm', true );

if ( empty( $ms_items_to_display_sm ) )
    $ms_items_to_display_sm             = 1;

$ms_animation_entrance                  = ms_get_meta( $ms_post_ID, 'ms_animation_entrance', null );
$ms_animation_exit                      = ms_get_meta( $ms_post_ID, 'ms_animation_exit', null );

$ms_margin_right                        = get_post_meta( $ms_post_ID, 'ms_margin_right', true );
$ms_loop                                = get_post_meta( $ms_post_ID, 'ms_loop', true );
$ms_center                              = get_post_meta( $ms_post_ID, 'ms_center', true );
$ms_show_nav                            = ms_get_meta( $ms_post_ID, 'ms_show_nav', 'true' );
$ms_show_nav_sm                         = ms_get_meta( $ms_post_ID, 'ms_show_nav_sm', $ms_show_nav );
$ms_show_dots                           = ms_get_meta( $ms_post_ID, 'ms_show_dots', 'true' );
$ms_show_dots_sm                        = ms_get_meta( $ms_post_ID, 'ms_show_dots_sm', $ms_show_dots );
$ms_show_dots_foreach                   = ms_get_meta( $ms_post_ID, 'ms_show_dots_foreach', 'false' );
$ms_autoplay                            = get_post_meta( $ms_post_ID, 'ms_autoplay', true );
$ms_autoplay_timeout                    = get_post_meta( $ms_post_ID, 'ms_autoplay_timeout', true );
$ms_autoplay_hover_pause                = get_post_meta( $ms_post_ID, 'ms_autoplay_hover_pause', true );
$ms_autoplay_speed                      = get_post_meta( $ms_post_ID, 'ms_autoplay_speed', true );

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