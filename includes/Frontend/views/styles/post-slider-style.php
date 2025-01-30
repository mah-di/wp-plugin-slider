<?php

$ms_feature_img_ratio       = trim( get_post_meta( $ms_post_ID, 'ms_feature_img_ratio', true ) );
[ $ms_width, $ms_height ]   = explode( ':', $ms_feature_img_ratio );
$ms_aspect_ratio            = ( absint( $ms_height ) / absint( $ms_width ) ) * 100;

$ms_comment_fs              = get_post_meta( $ms_post_ID, 'ms_comment_fs', true );
$ms_comment_fw              = get_post_meta( $ms_post_ID, 'ms_comment_fw', true );
$ms_comment_icon_color      = get_post_meta( $ms_post_ID, 'ms_comment_icon_color', true );
$ms_comment_color           = get_post_meta( $ms_post_ID, 'ms_comment_color', true );
$ms_category_icon_color     = get_post_meta( $ms_post_ID, 'ms_category_icon_color', true );
$ms_category_fs             = get_post_meta( $ms_post_ID, 'ms_category_fs', true );
$ms_category_fw             = get_post_meta( $ms_post_ID, 'ms_category_fw', true );
$ms_category_color          = get_post_meta( $ms_post_ID, 'ms_category_color', true );
$ms_category_bg_color       = get_post_meta( $ms_post_ID, 'ms_category_bg_color', true );
$ms_tag_icon_color          = get_post_meta( $ms_post_ID, 'ms_tag_icon_color', true );
$ms_tag_fs                  = get_post_meta( $ms_post_ID, 'ms_tag_fs', true );
$ms_tag_fw                  = get_post_meta( $ms_post_ID, 'ms_tag_fw', true );
$ms_tag_color               = get_post_meta( $ms_post_ID, 'ms_tag_color', true );
$ms_tag_bg_color            = get_post_meta( $ms_post_ID, 'ms_tag_bg_color', true );
$ms_title_fs                = get_post_meta( $ms_post_ID, 'ms_title_fs', true );
$ms_title_fw                = get_post_meta( $ms_post_ID, 'ms_title_fw', true );
$ms_title_color             = get_post_meta( $ms_post_ID, 'ms_title_color', true );
$ms_excerpt_fs              = get_post_meta( $ms_post_ID, 'ms_excerpt_fs', true );
$ms_excerpt_fw              = get_post_meta( $ms_post_ID, 'ms_excerpt_fw', true );
$ms_excerpt_color           = get_post_meta( $ms_post_ID, 'ms_excerpt_color', true );
$ms_read_more_color         = get_post_meta( $ms_post_ID, 'ms_read_more_color', true );
$ms_author_fs               = get_post_meta( $ms_post_ID, 'ms_author_fs', true );
$ms_author_fw               = get_post_meta( $ms_post_ID, 'ms_author_fw', true );
$ms_author_color            = get_post_meta( $ms_post_ID, 'ms_author_color', true );
$ms_date_fs                 = get_post_meta( $ms_post_ID, 'ms_date_fs', true );
$ms_date_fw                 = get_post_meta( $ms_post_ID, 'ms_date_fw', true );
$ms_date_color              = get_post_meta( $ms_post_ID, 'ms_date_color', true );

$ms_min_height              = get_post_meta( $ms_post_ID, 'ms_min_height', true );
$ms_horizontal_align        = get_post_meta( $ms_post_ID, 'ms_horizontal_align', true );
$ms_verticle_align          = get_post_meta( $ms_post_ID, 'ms_verticle_align', true );

?>

<style>

#my-slider-<?php echo $ms_post_ID ?> {
    .ms-card-header {
        padding-top: <?php echo "{$ms_aspect_ratio}%" ?> !important;
    }
    .ms-card {
        min-height: <?php echo "{$ms_min_height}px" ?> !important;
    }

    .ms-card-body {
        justify-content: <?php echo $ms_verticle_align ?>;
        align-items: <?php echo $ms_horizontal_align ?>;
    }

    .ms-card-body > * {
        text-align: <?php echo $ms_horizontal_align == 'baseline' ? 'start' : $ms_horizontal_align ?>;
    }

    .ms-comment-icon svg {
        fill: <?php echo $ms_comment_icon_color; ?> !important;
        height: <?php echo absint( $ms_comment_fs ) * 1.5 ?>px !important;
        width: <?php echo absint( $ms_comment_fs ) * 1.5 ?>px !important;
    }

    .ms-comment {
        color: <?php echo $ms_comment_color; ?> !important;
        font-size: <?php echo "{$ms_comment_fs}px" ?> !important;
        font-weight: <?php echo "{$ms_comment_fw}px" ?> !important;
    }

    .ms-cat-icon svg {
        fill: <?php echo $ms_category_icon_color; ?> !important;
        height: <?php echo absint( $ms_category_fs ) * 1.5 ?>px !important;
        width: <?php echo absint( $ms_category_fs ) * 1.5 ?>px !important;
    }

    .ms-cat {
        color: <?php echo $ms_category_color; ?> !important;
        background-color: <?php echo $ms_category_bg_color; ?> !important;
        font-size: <?php echo "{$ms_category_fs}px" ?> !important;
        font-weight: <?php echo "{$ms_category_fw}px" ?> !important;
    }

    .ms-tag-icon svg {
        fill: <?php echo $ms_tag_icon_color; ?> !important;
        height: <?php echo absint( $ms_tag_fs ) * 1.5 ?>px !important;
        width: <?php echo absint( $ms_tag_fs ) * 1.5 ?>px !important;
    }

    .ms-tag {
        color: <?php echo $ms_tag_color; ?> !important;
        background-color: <?php echo $ms_tag_bg_color; ?> !important;
        font-size: <?php echo "{$ms_tag_fs}px" ?> !important;
        font-weight: <?php echo "{$ms_tag_fw}px" ?> !important;
    }

    .ms-title {
        color: <?php echo $ms_title_color; ?> !important;
        font-size: <?php echo "{$ms_title_fs}px"; ?> !important;
        font-weight: <?php echo $ms_title_fw; ?> !important;
    }

    .ms-excerpt {
        color: <?php echo $ms_excerpt_color; ?> !important;
        font-size: <?php echo "{$ms_excerpt_fs}px"; ?> !important;
        font-weight: <?php echo $ms_excerpt_fw; ?> !important;
    }

    .ms-read-more {
        color: <?php echo $ms_read_more_color ?> !important;
    }

    .ms-author {
        color: <?php echo $ms_author_color; ?> !important;
        font-size: <?php echo "{$ms_author_fs}px"; ?> !important;
        font-weight: <?php echo $ms_author_fw; ?> !important;
    }

    .ms-date {
        color: <?php echo $ms_date_color; ?> !important;
        font-size: <?php echo "{$ms_date_fs}px"; ?> !important;
        font-weight: <?php echo $ms_date_fw; ?> !important;
    }
}

</style>