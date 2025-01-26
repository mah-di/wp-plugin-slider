<?php

$ms_min_height              = get_post_meta( $ms_post_ID, 'ms_min_height', true );
$ms_verticle_align          = get_post_meta( $ms_post_ID, 'ms_verticle_align', true );

?>

<style>

#my-slider-<?php echo $ms_post_ID ?> {
    .ms-slide-wrapper {
        min-height: <?php echo "{$ms_min_height}px" ?> !important;
        justify-content: <?php echo $ms_verticle_align ?>;
    }
}

</style>