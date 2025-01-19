<?php

$ms_bg_color = get_post_meta( $ms_post_ID, 'ms_bg_color', true );
$ms_comment_icon_color = get_post_meta( $ms_post_ID, 'ms_comment_icon_color', true );
$ms_comment_color = get_post_meta( $ms_post_ID, 'ms_comment_color', true );
$ms_category_icon_color = get_post_meta( $ms_post_ID, 'ms_category_icon_color', true );
$ms_category_color = get_post_meta( $ms_post_ID, 'ms_category_color', true );
$ms_category_bg_color = get_post_meta( $ms_post_ID, 'ms_category_bg_color', true );
$ms_tag_icon_color = get_post_meta( $ms_post_ID, 'ms_tag_icon_color', true );
$ms_tag_color = get_post_meta( $ms_post_ID, 'ms_tag_color', true );
$ms_tag_bg_color = get_post_meta( $ms_post_ID, 'ms_tag_bg_color', true );
$ms_title_color = get_post_meta( $ms_post_ID, 'ms_title_color', true );
$ms_excerpt_color = get_post_meta( $ms_post_ID, 'ms_excerpt_color', true );
$ms_author_color = get_post_meta( $ms_post_ID, 'ms_author_color', true );
$ms_date_color = get_post_meta( $ms_post_ID, 'ms_date_color', true );
$ms_nav_color = get_post_meta( $ms_post_ID, 'ms_nav_color', true );
$ms_nav_font_size = get_post_meta( $ms_post_ID, 'ms_nav_font_size', true );
$ms_nav_font_weight = get_post_meta( $ms_post_ID, 'ms_nav_font_weight', true );
$ms_nav_bg_color = get_post_meta( $ms_post_ID, 'ms_nav_bg_color', true );
$ms_nav_bg_hover_color = get_post_meta( $ms_post_ID, 'ms_nav_bg_hover_color', true );
$ms_dot_shape = get_post_meta( $ms_post_ID, 'ms_dot_shape', true );
$ms_dot_color = get_post_meta( $ms_post_ID, 'ms_dot_color', true );
$ms_dot_active_color = get_post_meta( $ms_post_ID, 'ms_dot_active_color', true );

?>

<style>

.ms-card {
    background-color: <?php echo $ms_bg_color; ?> !important;
}

.ms-comment-icon {
    color: <?php echo $ms_comment_icon_color; ?> !important;
}

.ms-comment {
    color: <?php echo $ms_comment_color; ?> !important;
}

.ms-cat-icon {
    color: <?php echo $ms_category_icon_color; ?> !important;
}

.ms-cat {
    color: <?php echo $ms_category_color; ?> !important;
    background-color: <?php echo $ms_category_bg_color; ?> !important;
}

.ms-tag-icon {
    color: <?php echo $ms_tag_icon_color; ?> !important;
}

.ms-tag {
    color: <?php echo $ms_tag_color; ?> !important;
    background-color: <?php echo $ms_tag_bg_color; ?> !important;
}

.ms-title {
    color: <?php echo $ms_title_color; ?> !important;
}

.ms-excerpt {
    color: <?php echo $ms_excerpt_color; ?> !important;
}

.ms-author {
    color: <?php echo $ms_author_color; ?> !important;
}

.ms-date {
    color: <?php echo $ms_date_color; ?> !important;
}

.owl-nav button {
    background-color: <?php echo $ms_nav_bg_color; ?> !important;
}

.owl-nav button:hover {
    background-color: <?php echo $ms_nav_bg_hover_color; ?> !important;
}

.owl-nav button span {
    color: <?php echo $ms_nav_color; ?> !important;
    font-size: <?php echo $ms_nav_font_size; ?>px !important;
    font-weight: <?php echo $ms_nav_font_weight; ?> !important;
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

</style>