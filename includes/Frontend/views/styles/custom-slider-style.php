<?php

$ms_horizontal_align        = ms_get_meta( $ms_post_ID, 'ms_horizontal_align', 'baseline' );
$ms_verticle_align          = ms_get_meta( $ms_post_ID, 'ms_verticle_align', 'start' );

?>

<style>

#my-slider-<?php echo $ms_post_ID ?> {
    
    .ms-slide-wrapper {
        justify-content: <?php echo $ms_verticle_align ?>;
        align-items: <?php echo $ms_horizontal_align ?>;
    }
}

</style>