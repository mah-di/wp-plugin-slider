<?php

$cs_bg_color                                = cs_get_meta( $cs_post_ID, 'cs_bg_color', '#ffffff' );

$cs_autoplay_speed                          = cs_get_meta( $cs_post_ID, 'cs_autoplay_speed', '1000' );

$cs_nav_position                            = cs_get_meta( $cs_post_ID, 'cs_nav_position', 'middle-wide' );
[ $cs_nav_vrt_aln, $cs_nav_hrz_aln ]        = explode( '-', $cs_nav_position );

$cs_nav_position_sm                         = cs_get_meta( $cs_post_ID, 'cs_nav_position_sm', $cs_nav_position );
[ $cs_nav_vrt_aln_sm, $cs_nav_hrz_aln_sm ]  = explode( '-', $cs_nav_position_sm );

$cs_nav_color                               = cs_get_meta( $cs_post_ID, 'cs_nav_color', '#fefefe' );
$cs_nav_radius                              = cs_get_meta( $cs_post_ID, 'cs_nav_radius', '2' );
$cs_nav_fs                                  = cs_get_meta( $cs_post_ID, 'cs_nav_fs', '24' );
$cs_nav_fw                                  = cs_get_meta( $cs_post_ID, 'cs_nav_fw', '500' );
$cs_nav_bg_color                            = cs_get_meta( $cs_post_ID, 'cs_nav_bg_color', 'rgba(0, 0, 0, 0.2)' );
$cs_nav_bg_hover_color                      = cs_get_meta( $cs_post_ID, 'cs_nav_bg_hover_color', 'rgba(0, 0, 0, 0.5)' );
$cs_show_dots                               = cs_get_meta( $cs_post_ID, 'cs_show_dots', 'true' );
$cs_show_dots_sm                            = cs_get_meta( $cs_post_ID, 'cs_show_dots_sm', $cs_show_dots );
$cs_dot_shape                               = cs_get_meta( $cs_post_ID, 'cs_dot_shape', 'round' );
$cs_dot_color                               = cs_get_meta( $cs_post_ID, 'cs_dot_color', '#dddddd' );
$cs_dot_active_color                        = cs_get_meta( $cs_post_ID, 'cs_dot_active_color', '#4a4a4a' );

?>

<style>

#commerce-slider-<?php echo esc_html( $cs_post_ID ) ?> {
    .cs-card {
        background-color: <?php echo esc_html( $cs_bg_color ) ?> !important;
    }

    .cs-animate {
        animation-duration: <?php echo ( absint( $cs_autoplay_speed ) / 1.5 ) ?>cs !important;
    }

    .cs-animate-in {
        animation-delay: <?php echo ( absint( $cs_autoplay_speed ) / 3 ) ?>cs;
    }

    .owl-nav {
        <?php if ( $cs_nav_vrt_aln != 'middle' ): ?>
            position: absolute !important;
            width: 100% !important;
            display: flex;
            gap: 10px !important;
            transform: translateY(0%) !important;
        <?php endif; ?>

        <?php if ( $cs_nav_vrt_aln == 'top' ): ?>
            top: 10px !important;
        <?php elseif ( $cs_nav_vrt_aln == 'bottom' ): ?>
            bottom: <?php echo esc_html( $cs_show_dots == 'true' ? '25px' : '10px' ) ?> !important;
        <?php endif; ?>

        <?php if ( $cs_nav_hrz_aln == 'wide' ): ?>
            justify-content: space-between !important;
        <?php elseif ( $cs_nav_hrz_aln == 'center' ): ?>
            justify-content: center !important;
        <?php elseif ( $cs_nav_hrz_aln == 'left' ): ?>
            justify-content: start !important;
        <?php elseif ( $cs_nav_hrz_aln == 'right' ): ?>
            justify-content: end !important;
        <?php endif; ?>
    }

    .owl-nav .owl-prev,
    .owl-nav .owl-next {
        background-color: <?php echo esc_html( $cs_nav_bg_color ) ?> !important;
        border-radius: <?php echo esc_html( "{$cs_nav_radius}%" ) ?> !important;

        <?php if ( $cs_nav_vrt_aln == 'middle' ): ?>
            position: absolute !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
        <?php endif; ?>
    }

    <?php if ( $cs_nav_vrt_aln == 'middle' ): ?>
    .owl-nav .owl-prev {
        left: 20px !important;
    }
    
    .owl-nav .owl-next {
        right: 20px !important;
    }
    <?php endif; ?>

    .owl-nav .owl-prev:hover,
    .owl-nav .owl-next:hover {
        background-color: <?php echo esc_html( $cs_nav_bg_hover_color ) ?> !important;
    }

    .owl-nav span {
        color: <?php echo esc_html( $cs_nav_color ) ?> !important;
        font-size: <?php echo esc_html( $cs_nav_fs ) ?>px !important;
        font-weight: <?php echo esc_html( $cs_nav_fw ) ?> !important;
        margin-top: <?php echo - ( ( absint( $cs_nav_fs ) * 3 ) / 10 ) ?>px !important;
    }

    .owl-dot span {
        height: <?php if ( $cs_dot_shape == 'bar' ) { echo '5px'; } else if ( $cs_dot_shape == 'pill' ) { echo '10px'; } else { echo '12px'; } ?> !important;
        width: <?php if ( $cs_dot_shape == 'bar' ) { echo '30px'; } else if ( $cs_dot_shape == 'pill' ) { echo '25px'; } else { echo '12px'; } ?> !important;
        background-color: <?php echo esc_html( $cs_dot_color ) ?> !important;
    }

    .owl-dot span:hover,
    .owl-dot.active span {
        background-color: <?php echo esc_html( $cs_dot_active_color ) ?> !important;
    }

    @media ( max-width: 639px ) {
        .owl-nav {
            <?php if ( $cs_nav_vrt_aln_sm == 'middle' ): ?>
                position: initial !important;
                transform: none !important;
            <?php endif; ?>

            <?php if ( $cs_nav_vrt_aln_sm != 'middle' ): ?>
                position: absolute !important;
                width: 100% !important;
                display: flex;
                gap: 10px !important;
                transform: translateY(0%) !important;
            <?php endif; ?>

            <?php if ( $cs_nav_vrt_aln_sm == 'top' ): ?>
                top: 10px !important;
            <?php elseif ( $cs_nav_vrt_aln_sm == 'bottom' ): ?>
                bottom: <?php echo esc_html( $cs_show_dots_sm == 'true' ? '25px' : '10px' ) ?> !important;
            <?php endif; ?>

            <?php if ( $cs_nav_hrz_aln_sm == 'wide' ): ?>
                justify-content: space-between !important;
            <?php elseif ( $cs_nav_hrz_aln_sm == 'center' ): ?>
                justify-content: center !important;
            <?php elseif ( $cs_nav_hrz_aln_sm == 'left' ): ?>
                justify-content: start !important;
            <?php elseif ( $cs_nav_hrz_aln_sm == 'right' ): ?>
                justify-content: end !important;
            <?php endif; ?>
        }

        <?php if ( $cs_nav_vrt_aln_sm == 'middle' ): ?>
        .owl-nav .owl-prev,
        .owl-nav .owl-next {
            position: absolute !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
        }

        .owl-nav .owl-prev {
            left: 20px !important;
        }
        
        .owl-nav .owl-next {
            right: 20px !important;
        }
        <?php else: ?>
        .owl-nav .owl-prev,
        .owl-nav .owl-next {
            position: initial !important;
            transform: none !important;
        }
        <?php endif; ?>
    }
}

</style>