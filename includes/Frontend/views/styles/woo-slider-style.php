<?php

$ms_title_color                     = get_post_meta( $ms_post_ID, 'ms_title_color' );
$ms_feature_img_ratio               = trim( get_post_meta( $ms_post_ID, 'ms_feature_img_ratio', true ) );
[ $ms_width, $ms_height ]           = explode( ':', $ms_feature_img_ratio );
$ms_aspect_ratio                    = ( absint( $ms_height ) / absint( $ms_width ) ) * 100;

$ms_title_fs                        = get_post_meta( $ms_post_ID, 'ms_title_fs', true );
$ms_title_fw                        = get_post_meta( $ms_post_ID, 'ms_title_fw', true );
$ms_title_color                     = get_post_meta( $ms_post_ID, 'ms_title_color', true );
$ms_stock_fs                        = get_post_meta( $ms_post_ID, 'ms_stock_fs', true );
$ms_stock_fw                        = get_post_meta( $ms_post_ID, 'ms_stock_fw', true );
$ms_stock_color                     = get_post_meta( $ms_post_ID, 'ms_stock_color', true );
$ms_sales_fs                        = get_post_meta( $ms_post_ID, 'ms_sales_fs', true );
$ms_sales_fw                        = get_post_meta( $ms_post_ID, 'ms_sales_fw', true );
$ms_sales_color                     = get_post_meta( $ms_post_ID, 'ms_sales_color', true );
$ms_review_fs                       = get_post_meta( $ms_post_ID, 'ms_review_fs', true );
$ms_review_fw                       = get_post_meta( $ms_post_ID, 'ms_review_fw', true );
$ms_review_color                    = get_post_meta( $ms_post_ID, 'ms_review_color', true );
$ms_active_price_fs                 = get_post_meta( $ms_post_ID, 'ms_active_price_fs', true );
$ms_active_price_fw                 = get_post_meta( $ms_post_ID, 'ms_active_price_fw', true );
$ms_active_price_color              = get_post_meta( $ms_post_ID, 'ms_active_price_color', true );
$ms_prev_price_fs                   = get_post_meta( $ms_post_ID, 'ms_prev_price_fs', true );
$ms_prev_price_fw                   = get_post_meta( $ms_post_ID, 'ms_prev_price_fw', true );
$ms_prev_price_color                = get_post_meta( $ms_post_ID, 'ms_prev_price_color', true );
$ms_woo_button_fs                   = get_post_meta( $ms_post_ID, 'ms_woo_button_fs', true );
$ms_woo_button_fw                   = get_post_meta( $ms_post_ID, 'ms_woo_button_fw', true );
$ms_woo_button_color                = get_post_meta( $ms_post_ID, 'ms_woo_button_color', true );
$ms_woo_button_bg_color             = get_post_meta( $ms_post_ID, 'ms_woo_button_bg_color', true );

$ms_min_height                      = get_post_meta( $ms_post_ID, 'ms_min_height', true );
$ms_horizontal_align                = get_post_meta( $ms_post_ID, 'ms_horizontal_align', true );
$ms_verticle_align                  = get_post_meta( $ms_post_ID, 'ms_verticle_align', true );

?>

<style>
#my-slider-<?php echo $ms_post_ID ?> {
    .ms-card {
        min-height: <?php echo "{$ms_min_height}px" ?> !important;
    }

    .ms-card-header {
        padding-top: <?php echo "{$ms_aspect_ratio}%" ?> !important;
    }

    .ms-card-body {
        justify-content: <?php echo $ms_verticle_align ?>;
        align-items: <?php echo $ms_horizontal_align ?>;
    }

    .ms-card-body > * {
        text-align: <?php echo $ms_horizontal_align == 'baseline' ? 'start' : $ms_horizontal_align ?>;
    }

    .ms-title a {
        color: <?php echo $ms_title_color; ?> !important;
        font-size: <?php echo "{$ms_title_fs}px"; ?> !important;
        font-weight: <?php echo $ms_title_fw; ?> !important;
    }

    .ms-total-sales {
        color: <?php echo $ms_sales_color; ?> !important;
        font-size: <?php echo "{$ms_sales_fs}px"; ?> !important;
        font-weight: <?php echo $ms_sales_fw; ?> !important;
    }
    
    .ms-review {
        color: <?php echo $ms_review_color; ?> !important;
        font-size: <?php echo "{$ms_review_fs}px"; ?> !important;
        font-weight: <?php echo $ms_review_fw; ?> !important;
    }

    .ms-stock-status {
        font-size: <?php echo "{$ms_stock_fs}px" ?> !important;
        font-weight: <?php echo $ms_stock_fw ?> !important;
        color: <?php echo $ms_stock_color ?> !important;
    }

    .ms-price-main {
        font-size: <?php echo "{$ms_active_price_fs}px"; ?> !important;
        font-weight: <?php echo $ms_active_price_fw; ?> !important;
        color: <?php echo $ms_active_price_color; ?> !important;
    }

    .ms-price-strike {
        font-size: <?php echo "{$ms_prev_price_fs}px"; ?> !important;
        font-weight: <?php echo $ms_prev_price_fw; ?> !important;
        color: <?php echo $ms_prev_price_color; ?> !important;
    }

    .ms-add-to-cart a {
        font-size: <?php echo "{$ms_woo_button_fs}px"; ?> !important;
        font-weight: <?php echo $ms_woo_button_fw; ?> !important;
        color: <?php echo $ms_woo_button_color; ?> !important;
        border: 2px solid <?php echo $ms_woo_button_color; ?> !important;
        background-color: <?php echo $ms_woo_button_bg_color; ?> !important;
    }

    .ms-add-to-cart a:hover {
        color: <?php echo $ms_woo_button_bg_color; ?> !important;
        background-color: <?php echo $ms_woo_button_color; ?> !important;
    }
}
</style>