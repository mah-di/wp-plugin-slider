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
            // Type: Number
            // Default: 3
            // The number of items you want to see on the screen.
        margin: <?php echo absint( $ms_margin_right ) ?>,
            // Type: Number
            // Default: 0
            // margin-right(px) on item.
        loop: <?php echo $ms_loop ?>,
            // Type: Boolean
            // Default: false
            // Infinity loop. Duplicate last and first items to get loop illusion.
        center: <?php echo $ms_center ?>,
            // Type: Boolean
            // Default: false
            // Center item. Works well with even an odd number of items.
        nav: <?php echo $ms_show_nav ?>,
            // Type: Boolean
            // Default: false
            // Show next/prev buttons.
        navText: ['‹', '›'],
            // Type: Array
            // Default: [&#x27;next&#x27;,&#x27;prev&#x27;]
            // HTML allowed.
        dots: <?php echo $ms_show_dots ?>,
            // Type: Boolean
            // Default: true
            // Show dots navigation.
        dotsEach: <?php echo $ms_show_dots_foreach ?>,
            // Type: Number/Boolean
            // Default: false
            // Show dots each x item.
        autoplay: <?php echo $ms_autoplay ?>,
            // Type: Boolean
            // Default: false
            // Autoplay.
        autoplayTimeout: <?php echo absint( $ms_autoplay_timeout ) ?>,
            // Type: Number
            // Default: 5000
            // Autoplay interval timeout.
        autoplayHoverPause: <?php echo $ms_autoplay_hover_pause ?>,
            // Type: Boolean
            // Default: false
            // Pause on mouse hover.
        autoplaySpeed: <?php echo absint( $ms_autoplay_speed ) == 0 ? 'false' : absint( $ms_autoplay_speed ) ?>,
            // Type: Number/Boolean
            // Default: false
            // autoplay speed.
        // video: <?php // echo $ms_slider_type == 'video' ? 'true' : 'false' ?>,
            // Type: Boolean 
            // Default: false
            // Enable fetching YouTube/Vimeo/Vzaar videos.
        // videoHeight: <?php // if ( isset( $ms_video_height ) ) { echo $ms_video_height; } ?>,
            // Type: Number/Boolean
            // Default: false
            // Set height for videos.
        // videoWidth: <?php // if ( isset( $ms_video_width ) ) { echo $ms_video_width; } ?>,
            // Type: Number/Boolean
            // Default: false
            // Set width for videos.
    }

    const selector = '#my-slider-<?php echo $ms_post_ID ?>'

    jQuery(selector).owlCarousel( options );
});
</script>