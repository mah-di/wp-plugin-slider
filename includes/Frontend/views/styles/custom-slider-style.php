<?php

$cs_horizontal_align        = cs_get_meta( $cs_post_ID, 'cs_horizontal_align', 'baseline' );
$cs_verticle_align          = cs_get_meta( $cs_post_ID, 'cs_verticle_align', 'start' );

?>

<style>

#commerce-slider-<?php echo esc_html( $cs_post_ID ) ?> {
    
    .cs-slide-wrapper {
        justify-content: <?php echo esc_html( $cs_verticle_align ) ?>;
        align-items: <?php echo esc_html( $cs_horizontal_align ) ?>;
    }
}

</style>