<?php

$cs_feature_img_ratio       = trim( cs_get_meta( $cs_post_ID, 'cs_feature_img_ratio', '16:9' ) );
[ $cs_width, $cs_height ]   = explode( ':', $cs_feature_img_ratio );
$cs_aspect_ratio            = ( absint( $cs_height ) / absint( $cs_width ) ) * 100;

$cs_meta_fs                 = cs_get_meta( $cs_post_ID, 'cs_meta_fs', 12 );
$cs_comment_fw              = cs_get_meta( $cs_post_ID, 'cs_comment_fw', 500 );
$cs_comment_icon_color      = cs_get_meta( $cs_post_ID, 'cs_comment_icon_color', '#333333' );
$cs_comment_color           = cs_get_meta( $cs_post_ID, 'cs_comment_color', '#333333' );
$cs_category_icon_color     = cs_get_meta( $cs_post_ID, 'cs_category_icon_color', '#333333' );
$cs_category_fw             = cs_get_meta( $cs_post_ID, 'cs_category_fw', 500 );
$cs_category_color          = cs_get_meta( $cs_post_ID, 'cs_category_color', '#333333' );
$cs_category_bg_color       = cs_get_meta( $cs_post_ID, 'cs_category_bg_color', '#eeeeee' );
$cs_date_icon_color         = cs_get_meta( $cs_post_ID, 'cs_date_icon_color', '#333333' );
$cs_date_fw                 = cs_get_meta( $cs_post_ID, 'cs_date_fw', 500 );
$cs_date_color              = cs_get_meta( $cs_post_ID, 'cs_date_color', '#333333' );
$cs_title_fs                = cs_get_meta( $cs_post_ID, 'cs_title_fs', 18 );
$cs_title_fw                = cs_get_meta( $cs_post_ID, 'cs_title_fw', 700 );
$cs_title_color             = cs_get_meta( $cs_post_ID, 'cs_title_color', '#000000' );
$cs_excerpt_fs              = cs_get_meta( $cs_post_ID, 'cs_excerpt_fs', 12 );
$cs_excerpt_fw              = cs_get_meta( $cs_post_ID, 'cs_excerpt_fw', 500 );
$cs_excerpt_color           = cs_get_meta( $cs_post_ID, 'cs_excerpt_color', '#111111' );
$cs_read_more_color         = cs_get_meta( $cs_post_ID, 'cs_read_more_color', '#333333' );
$cs_author_fs               = cs_get_meta( $cs_post_ID, 'cs_author_fs', 12 );
$cs_author_fw               = cs_get_meta( $cs_post_ID, 'cs_author_fw', 500 );
$cs_author_color            = cs_get_meta( $cs_post_ID, 'cs_author_color', '#333333' );

$cs_min_height              = cs_get_meta( $cs_post_ID, 'cs_min_height', 'auto' );
$cs_horizontal_align        = cs_get_meta( $cs_post_ID, 'cs_horizontal_align', 'baseline' );
$cs_verticle_align          = cs_get_meta( $cs_post_ID, 'cs_verticle_align', 'start' );

?>

<style>

#commerce-slider-<?php echo esc_html( $cs_post_ID ) ?> {
    .cs-card-header {
        padding-top: <?php echo esc_html( "{$cs_aspect_ratio}%" ) ?> !important;
    }
    .cs-card {
        min-height: <?php echo esc_html( "{$cs_min_height}px" ) ?> !important;
    }

    .cs-card-body {
        justify-content: <?php echo esc_html( $cs_verticle_align ) ?>;
        align-items: <?php echo esc_html( $cs_horizontal_align ) ?>;
    }

    .cs-card-body > * {
        text-align: <?php echo esc_html( $cs_horizontal_align == 'baseline' ? 'start' : $cs_horizontal_align ) ?>;
    }

    .cs-comment-icon {
        fill: <?php echo esc_html( $cs_comment_icon_color ) ?> !important;
        height: <?php echo absint( $cs_meta_fs ) * 1.5 ?>px !important;
        width: <?php echo absint( $cs_meta_fs ) * 1.5 ?>px !important;
    }

    .cs-comment {
        color: <?php echo esc_html( $cs_comment_color ) ?> !important;
        font-size: <?php echo esc_html( "{$cs_meta_fs}px" ) ?> !important;
        font-weight: <?php echo esc_html( $cs_comment_fw ) ?> !important;
    }

    .cs-cat-icon {
        fill: <?php echo esc_html( $cs_category_icon_color ) ?> !important;
        height: <?php echo absint( $cs_meta_fs ) * 1.5 ?>px !important;
        width: <?php echo absint( $cs_meta_fs ) * 1.5 ?>px !important;
    }

    .cs-cat {
        color: <?php echo esc_html( $cs_category_color ) ?> !important;
        background-color: <?php echo esc_html( $cs_category_bg_color ) ?> !important;
        font-size: <?php echo esc_html( "{$cs_meta_fs}px" ) ?> !important;
        font-weight: <?php echo esc_html( $cs_category_fw ) ?> !important;
    }

    .cs-date-icon {
        fill: <?php echo esc_html( $cs_date_icon_color ) ?> !important;
        height: <?php echo absint( $cs_meta_fs ) * 1.5 ?>px !important;
        width: <?php echo absint( $cs_meta_fs ) * 1.5 ?>px !important;
    }

    .cs-date {
        color: <?php echo esc_html( $cs_date_color ) ?> !important;
        font-size: <?php echo esc_html( "{$cs_meta_fs}px" ) ?> !important;
        font-weight: <?php echo esc_html( $cs_date_fw ) ?> !important;
    }

    .cs-title {
        color: <?php echo esc_html( $cs_title_color ) ?> !important;
        font-size: <?php echo esc_html( "{$cs_title_fs}px" ) ?> !important;
        font-weight: <?php echo esc_html( $cs_title_fw ) ?> !important;
    }

    .cs-excerpt {
        color: <?php echo esc_html( $cs_excerpt_color ) ?> !important;
        font-size: <?php echo esc_html( "{$cs_excerpt_fs}px" ) ?> !important;
        font-weight: <?php echo esc_html( $cs_excerpt_fw ) ?> !important;
    }

    .cs-read-more {
        color: <?php echo esc_html( $cs_read_more_color ) ?> !important;
    }

    .cs-author {
        color: <?php echo esc_html( $cs_author_color ) ?> !important;
        font-size: <?php echo esc_html( "{$cs_author_fs}px" ) ?> !important;
        font-weight: <?php echo esc_html( $cs_author_fw ) ?> !important;
    }
}

</style>