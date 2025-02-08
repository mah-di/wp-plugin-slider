<?php

$ms_bg_color                                = ms_get_meta( $ms_post_ID, 'ms_bg_color', '#ffffff' );

$ms_nav_position                            = ms_get_meta( $ms_post_ID, 'ms_nav_position', 'middle-wide' );
[ $ms_nav_vrt_aln, $ms_nav_hrz_aln ]        = explode( '-', $ms_nav_position );

$ms_nav_position_sm                         = ms_get_meta( $ms_post_ID, 'ms_nav_position_sm', $ms_nav_position );
[ $ms_nav_vrt_aln_sm, $ms_nav_hrz_aln_sm ]  = explode( '-', $ms_nav_position_sm );

$ms_nav_color                               = ms_get_meta( $ms_post_ID, 'ms_nav_color', '#ffffff' );
$ms_nav_radius                              = ms_get_meta( $ms_post_ID, 'ms_nav_radius', '2' );
$ms_nav_fs                                  = ms_get_meta( $ms_post_ID, 'ms_nav_fs', '24' );
$ms_nav_fw                                  = ms_get_meta( $ms_post_ID, 'ms_nav_fw', '500' );
$ms_nav_bg_color                            = ms_get_meta( $ms_post_ID, 'ms_nav_bg_color', 'rgba(0, 0, 0, 0.2)' );
$ms_nav_bg_hover_color                      = ms_get_meta( $ms_post_ID, 'ms_nav_bg_hover_color', 'rgba(0, 0, 0, 0.5)' );
$ms_show_dots                               = ms_get_meta( $ms_post_ID, 'ms_show_dots', 'true' );
$ms_show_dots_sm                            = ms_get_meta( $ms_post_ID, 'ms_show_dots_sm', $ms_show_dots );
$ms_dot_shape                               = ms_get_meta( $ms_post_ID, 'ms_dot_shape', 'round' );
$ms_dot_color                               = ms_get_meta( $ms_post_ID, 'ms_dot_color', '#dddddd' );
$ms_dot_active_color                        = ms_get_meta( $ms_post_ID, 'ms_dot_active_color', '#4a4a4a' );

?>

<style>

#my-slider-<?php echo $ms_post_ID ?> {
    .ms-card {
        background-color: <?php echo $ms_bg_color; ?> !important;
    }

    .owl-nav {
        <?php if ( $ms_nav_vrt_aln != 'middle' ): ?>
            position: absolute !important;
            width: 100% !important;
            display: flex;
            gap: 10px !important;
        <?php endif; ?>

        <?php if ( $ms_nav_vrt_aln == 'top' ): ?>
            top: 10px !important;
            transform: translateY(0%) !important;
        <?php elseif ( $ms_nav_vrt_aln == 'bottom' ): ?>
            bottom: <?php echo $ms_show_dots == 'true' ? '25px' : '10px' ?> !important;
            transform: translateY(0%) !important;
        <?php endif; ?>

        <?php if ( $ms_nav_hrz_aln == 'wide' ): ?>
            justify-content: space-between !important;
        <?php elseif ( $ms_nav_hrz_aln == 'center' ): ?>
            justify-content: center !important;
        <?php elseif ( $ms_nav_hrz_aln == 'left' ): ?>
            justify-content: start !important;
        <?php elseif ( $ms_nav_hrz_aln == 'right' ): ?>
            justify-content: end !important;
        <?php endif; ?>
    }

    .owl-nav .owl-prev,
    .owl-nav .owl-next {
        background-color: <?php echo $ms_nav_bg_color ?> !important;
        border-radius: <?php echo "{$ms_nav_radius}%" ?> !important;

        <?php if ( $ms_nav_vrt_aln == 'middle' ): ?>
            position: absolute !important;
            top: 50% !important;
            transform: translateY(-50%) !important;
        <?php endif; ?>
    }

    .owl-nav .owl-prev {
        <?php if ($ms_nav_vrt_aln == 'middle' ): ?>
            left: 20px !important;
        <?php endif; ?>
    }
    
    .owl-nav .owl-next {
        <?php if ($ms_nav_vrt_aln == 'middle' ): ?>
            right: 20px !important;
        <?php endif; ?>
    }

    .owl-nav .owl-prev:hover,
    .owl-nav .owl-next:hover {
        background-color: <?php echo $ms_nav_bg_hover_color; ?> !important;
        

    }

    .owl-nav span {
        color: <?php echo $ms_nav_color; ?> !important;
        font-size: <?php echo $ms_nav_fs; ?>px !important;
        font-weight: <?php echo $ms_nav_fw; ?> !important;
        margin-top: <?php echo - ( ( absint( $ms_nav_fs ) * 3 ) / 10 ) ?>px !important;
    }

    .owl-dot span {
        height: <?php if ( $ms_dot_shape == 'bar' ) { echo '5px'; } else if ( $ms_dot_shape == 'pill' ) { echo '10px'; } else { echo '12px'; } ?> !important;
        width: <?php if ( $ms_dot_shape == 'bar' ) { echo '30px'; } else if ( $ms_dot_shape == 'pill' ) { echo '25px'; } else { echo '12px'; } ?> !important;
        background-color: <?php echo $ms_dot_color; ?> !important;
    }

    .owl-dot span:hover,
    .owl-dot.active span {
        background-color: <?php echo $ms_dot_active_color; ?> !important;
    }

    @media ( max-width: 639px ) {
        .owl-nav {
            <?php if ( $ms_nav_vrt_aln_sm != 'middle' ): ?>
                position: absolute !important;
                width: 100% !important;
                display: flex;
                gap: 10px !important;
            <?php endif; ?>

            <?php if ( $ms_nav_vrt_aln_sm == 'top' ): ?>
                top: 10px !important;
                transform: translateY(0%) !important;
            <?php elseif ( $ms_nav_vrt_aln_sm == 'bottom' ): ?>
                bottom: <?php echo $ms_show_dots_sm == 'true' ? '25px' : '10px' ?> !important;
                transform: translateY(0%) !important;
            <?php endif; ?>

            <?php if ( $ms_nav_hrz_aln_sm == 'wide' ): ?>
                justify-content: space-between !important;
            <?php elseif ( $ms_nav_hrz_aln_sm == 'center' ): ?>
                justify-content: center !important;
            <?php elseif ( $ms_nav_hrz_aln_sm == 'left' ): ?>
                justify-content: start !important;
            <?php elseif ( $ms_nav_hrz_aln_sm == 'right' ): ?>
                justify-content: end !important;
            <?php endif; ?>
        }

        .owl-nav .owl-prev,
        .owl-nav .owl-next {
            <?php if ( $ms_nav_vrt_aln_sm == 'middle' ): ?>
                position: absolute !important;
                top: 50% !important;
                transform: translateY(-50%) !important;
            <?php endif; ?>
        }

        .owl-nav .owl-prev {
            <?php if ($ms_nav_vrt_aln_sm == 'middle' ): ?>
                left: 20px !important;
            <?php endif; ?>
        }
        
        .owl-nav .owl-next {
            <?php if ($ms_nav_vrt_aln_sm == 'middle' ): ?>
                right: 20px !important;
            <?php endif; ?>
        }
    }
}

</style>