<?php

$ms_feature_img_ratio       = trim( ms_get_meta( $ms_post_ID, 'ms_feature_img_ratio', '16:9' ) );
[ $ms_width, $ms_height ]   = explode( ':', $ms_feature_img_ratio );
$ms_aspect_ratio            = ( absint( $ms_height ) / absint( $ms_width ) ) * 100;

$ms_meta_fs                 = ms_get_meta( $ms_post_ID, 'ms_meta_fs', 12 );
$ms_comment_fw              = ms_get_meta( $ms_post_ID, 'ms_comment_fw', 500 );
$ms_comment_icon_color      = ms_get_meta( $ms_post_ID, 'ms_comment_icon_color', '#333333' );
$ms_comment_color           = ms_get_meta( $ms_post_ID, 'ms_comment_color', '#333333' );
$ms_category_icon_color     = ms_get_meta( $ms_post_ID, 'ms_category_icon_color', '#333333' );
$ms_category_fw             = ms_get_meta( $ms_post_ID, 'ms_category_fw', 500 );
$ms_category_color          = ms_get_meta( $ms_post_ID, 'ms_category_color', '#333333' );
$ms_category_bg_color       = ms_get_meta( $ms_post_ID, 'ms_category_bg_color', '#eeeeee' );
$ms_date_icon_color         = ms_get_meta( $ms_post_ID, 'ms_date_icon_color', '#333333' );
$ms_date_fw                 = ms_get_meta( $ms_post_ID, 'ms_date_fw', 500 );
$ms_date_color              = ms_get_meta( $ms_post_ID, 'ms_date_color', '#333333' );
$ms_title_fs                = ms_get_meta( $ms_post_ID, 'ms_title_fs', 18 );
$ms_title_fw                = ms_get_meta( $ms_post_ID, 'ms_title_fw', 700 );
$ms_title_color             = ms_get_meta( $ms_post_ID, 'ms_title_color', '#000000' );
$ms_excerpt_fs              = ms_get_meta( $ms_post_ID, 'ms_excerpt_fs', 12 );
$ms_excerpt_fw              = ms_get_meta( $ms_post_ID, 'ms_excerpt_fw', 500 );
$ms_excerpt_color           = ms_get_meta( $ms_post_ID, 'ms_excerpt_color', '#111111' );
$ms_read_more_color         = ms_get_meta( $ms_post_ID, 'ms_read_more_color', '#333333' );
$ms_author_fs               = ms_get_meta( $ms_post_ID, 'ms_author_fs', 12 );
$ms_author_fw               = ms_get_meta( $ms_post_ID, 'ms_author_fw', 500 );
$ms_author_color            = ms_get_meta( $ms_post_ID, 'ms_author_color', '#333333' );

$ms_min_height              = ms_get_meta( $ms_post_ID, 'ms_min_height', 'auto' );
$ms_horizontal_align        = ms_get_meta( $ms_post_ID, 'ms_horizontal_align', 'baseline' );
$ms_verticle_align          = ms_get_meta( $ms_post_ID, 'ms_verticle_align', 'start' );

?>

<style>

#my-slider-<?php echo esc_html( $ms_post_ID ) ?> {
    .ms-card-header {
        padding-top: <?php echo esc_html( "{$ms_aspect_ratio}%" ) ?> !important;
    }
    .ms-card {
        min-height: <?php echo esc_html( "{$ms_min_height}px" ) ?> !important;
    }

    .ms-card-body {
        justify-content: <?php echo esc_html( $ms_verticle_align ) ?>;
        align-items: <?php echo esc_html( $ms_horizontal_align ) ?>;
    }

    .ms-card-body > * {
        text-align: <?php echo esc_html( $ms_horizontal_align == 'baseline' ? 'start' : $ms_horizontal_align ) ?>;
    }

    .ms-comment-icon {
        fill: <?php echo esc_html( $ms_comment_icon_color ) ?> !important;
        height: <?php echo absint( $ms_meta_fs ) * 1.5 ?>px !important;
        width: <?php echo absint( $ms_meta_fs ) * 1.5 ?>px !important;
    }

    .ms-comment {
        color: <?php echo esc_html( $ms_comment_color ) ?> !important;
        font-size: <?php echo esc_html( "{$ms_meta_fs}px" ) ?> !important;
        font-weight: <?php echo esc_html( $ms_comment_fw ) ?> !important;
    }

    .ms-cat-icon {
        fill: <?php echo esc_html( $ms_category_icon_color ) ?> !important;
        height: <?php echo absint( $ms_meta_fs ) * 1.5 ?>px !important;
        width: <?php echo absint( $ms_meta_fs ) * 1.5 ?>px !important;
    }

    .ms-cat {
        color: <?php echo esc_html( $ms_category_color ) ?> !important;
        background-color: <?php echo esc_html( $ms_category_bg_color ) ?> !important;
        font-size: <?php echo esc_html( "{$ms_meta_fs}px" ) ?> !important;
        font-weight: <?php echo esc_html( $ms_category_fw ) ?> !important;
    }

    .ms-date-icon {
        fill: <?php echo esc_html( $ms_date_icon_color ) ?> !important;
        height: <?php echo absint( $ms_meta_fs ) * 1.5 ?>px !important;
        width: <?php echo absint( $ms_meta_fs ) * 1.5 ?>px !important;
    }

    .ms-date {
        color: <?php echo esc_html( $ms_date_color ) ?> !important;
        font-size: <?php echo esc_html( "{$ms_meta_fs}px" ) ?> !important;
        font-weight: <?php echo esc_html( $ms_date_fw ) ?> !important;
    }

    .ms-title {
        color: <?php echo esc_html( $ms_title_color ) ?> !important;
        font-size: <?php echo esc_html( "{$ms_title_fs}px" ) ?> !important;
        font-weight: <?php echo esc_html( $ms_title_fw ) ?> !important;
    }

    .ms-excerpt {
        color: <?php echo esc_html( $ms_excerpt_color ) ?> !important;
        font-size: <?php echo esc_html( "{$ms_excerpt_fs}px" ) ?> !important;
        font-weight: <?php echo esc_html( $ms_excerpt_fw ) ?> !important;
    }

    .ms-read-more {
        color: <?php echo esc_html( $ms_read_more_color ) ?> !important;
    }

    .ms-author {
        color: <?php echo esc_html( $ms_author_color ) ?> !important;
        font-size: <?php echo esc_html( "{$ms_author_fs}px" ) ?> !important;
        font-weight: <?php echo esc_html( $ms_author_fw ) ?> !important;
    }
}

</style>