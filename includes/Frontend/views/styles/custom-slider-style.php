<?php

$ms_feature_img_ratio       = trim( get_post_meta( $ms_post_ID, 'ms_feature_img_ratio', true ) );
[ $ms_width, $ms_height ]   = explode( ':', $ms_feature_img_ratio );
$ms_aspect_ratio            = ( absint( $ms_height ) / absint( $ms_width ) ) * 100;

$ms_horizontal_align        = get_post_meta( $ms_post_ID, 'ms_horizontal_align', true );
$ms_verticle_align          = get_post_meta( $ms_post_ID, 'ms_verticle_align', true );

?>

<style>

#my-slider-<?php echo $ms_post_ID ?> {
    
    .ms-slide-wrapper {
        justify-content: <?php echo $ms_verticle_align ?>;
        align-items: <?php echo $ms_horizontal_align ?>;
    }
}

</style>