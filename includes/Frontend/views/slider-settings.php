<?php

$ms_items_to_display = get_post_meta( $ms_post_ID, 'ms_items_to_display', true );
$ms_margin_right = get_post_meta( $ms_post_ID, 'ms_margin_right', true );
$ms_loop = get_post_meta( $ms_post_ID, 'ms_loop', true );
$ms_center = get_post_meta( $ms_post_ID, 'ms_center', true );
$ms_show_nav = get_post_meta( $ms_post_ID, 'ms_show_nav', true );
$ms_show_dots = get_post_meta( $ms_post_ID, 'ms_show_dots', true );
$ms_show_dots_foreach = get_post_meta( $ms_post_ID, 'ms_show_dots_foreach', true );
$ms_autoplay = get_post_meta( $ms_post_ID, 'ms_autoplay', true );
$ms_autoplay_timeout = get_post_meta( $ms_post_ID, 'ms_autoplay_timeout', true );
$ms_autoplay_hover_pause = get_post_meta( $ms_post_ID, 'ms_autoplay_hover_pause', true );
$ms_autoplay_speed = get_post_meta( $ms_post_ID, 'ms_autoplay_speed', true );
$ms_video = get_post_meta( $ms_post_ID, 'ms_video', true );
$ms_video_height = get_post_meta( $ms_post_ID, 'ms_video_height', true );
$ms_video_width = get_post_meta( $ms_post_ID, 'ms_video_width', true );

?>

<script>
    jQuery(document).ready(function(){
    const options = {
        items: <?php echo absint( $ms_items_to_display ) ?>,
        margin: <?php echo absint( $ms_margin_right ) ?>,
        loop: <?php echo $ms_loop ?>,
        center: <?php echo $ms_center ?>,
        nav: <?php echo $ms_show_nav ?>,
        navText: ['<span>‹</span>', '<span>›</span>'],
        dots: <?php echo $ms_show_dots ?>,
        dotsEach: <?php echo $ms_show_dots_foreach ?>,
        autoplay: <?php echo $ms_autoplay ?>,
        autoplayTimeout: <?php echo absint( $ms_autoplay_timeout ) ?>,
        autoplayHoverPause: <?php echo $ms_autoplay_hover_pause ?>,
        autoplaySpeed: <?php echo absint( $ms_autoplay_speed ) == 0 ? 'false' : absint( $ms_autoplay_speed ) ?>,
        // video: <?php // echo $ms_slider_type == 'video' ? 'true' : 'false' ?>,
        // videoHeight: <?php // if ( isset( $ms_video_height ) ) { echo $ms_video_height; } ?>,
        // videoWidth: <?php // if ( isset( $ms_video_width ) ) { echo $ms_video_width; } ?>,
    }

    const selector = '#my-slider-<?php echo $ms_post_ID ?>'

    jQuery(selector).owlCarousel( options );
});
</script>