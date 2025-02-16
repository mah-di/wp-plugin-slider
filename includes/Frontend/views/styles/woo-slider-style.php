<?php

$ms_feature_img_ratio               = trim( ms_get_meta( $ms_post_ID, 'ms_feature_img_ratio', '16:9' ) );
[ $ms_width, $ms_height ]           = explode( ':', $ms_feature_img_ratio );
$ms_aspect_ratio                    = ( absint( $ms_height ) / absint( $ms_width ) ) * 100;

$ms_title_fs                        = ms_get_meta( $ms_post_ID, 'ms_title_fs', 18 );
$ms_title_fw                        = ms_get_meta( $ms_post_ID, 'ms_title_fw', 700 );
$ms_title_color                     = ms_get_meta( $ms_post_ID, 'ms_title_color', '#000000' );
$ms_stock_fs                        = ms_get_meta( $ms_post_ID, 'ms_stock_fs', 12 );
$ms_stock_fw                        = ms_get_meta( $ms_post_ID, 'ms_stock_fw', 500 );
$ms_stock_color                     = ms_get_meta( $ms_post_ID, 'ms_stock_color', '#EA8A35' );
$ms_sales_fs                        = ms_get_meta( $ms_post_ID, 'ms_sales_fs', 12 );
$ms_sales_fw                        = ms_get_meta( $ms_post_ID, 'ms_sales_fw', 500 );
$ms_sales_color                     = ms_get_meta( $ms_post_ID, 'ms_sales_color', '#333333' );
$ms_review_fs                       = ms_get_meta( $ms_post_ID, 'ms_review_fs', 12 );
$ms_review_fw                       = ms_get_meta( $ms_post_ID, 'ms_review_fw', 500 );
$ms_review_color                    = ms_get_meta( $ms_post_ID, 'ms_review_color', '#EA8A35' );
$ms_active_price_fs                 = ms_get_meta( $ms_post_ID, 'ms_active_price_fs', 12 );
$ms_active_price_fw                 = ms_get_meta( $ms_post_ID, 'ms_active_price_fw', 700 );
$ms_active_price_color              = ms_get_meta( $ms_post_ID, 'ms_active_price_color', '#EA8A35' );
$ms_prev_price_fs                   = ms_get_meta( $ms_post_ID, 'ms_prev_price_fs', 10 );
$ms_prev_price_fw                   = ms_get_meta( $ms_post_ID, 'ms_prev_price_fw', 500 );
$ms_prev_price_color                = ms_get_meta( $ms_post_ID, 'ms_prev_price_color', '#333333' );
$ms_woo_button_fs                   = ms_get_meta( $ms_post_ID, 'ms_woo_button_fs', 12 );
$ms_woo_button_fw                   = ms_get_meta( $ms_post_ID, 'ms_woo_button_fw', 500 );
$ms_woo_button_color                = ms_get_meta( $ms_post_ID, 'ms_woo_button_color', '#EA8A35' );
$ms_woo_button_bg_color             = ms_get_meta( $ms_post_ID, 'ms_woo_button_bg_color', '#ffffff' );

$ms_min_height                      = ms_get_meta( $ms_post_ID, 'ms_min_height', 'auto' );
$ms_horizontal_align                = ms_get_meta( $ms_post_ID, 'ms_horizontal_align', 'center' );
$ms_verticle_align                  = ms_get_meta( $ms_post_ID, 'ms_verticle_align', 'start' );

?>

<style>
#my-slider-<?php echo esc_html( $ms_post_ID ) ?> {
    .ms-card {
        min-height: <?php echo esc_html( "{$ms_min_height}px" ) ?> !important;
    }

    .ms-card-header {
        padding-top: <?php echo esc_html( "{$ms_aspect_ratio}%" ) ?> !important;
    }

    .ms-card-body {
        justify-content: <?php echo esc_html( $ms_verticle_align ) ?>;
        align-items: <?php echo esc_html( $ms_horizontal_align ) ?>;
    }

    .ms-card-body > * {
        text-align: <?php echo esc_html( $ms_horizontal_align == 'baseline' ? 'start' : $ms_horizontal_align ) ?>;
    }

    .ms-title a {
        color: <?php echo esc_html( $ms_title_color ) ?> !important;
        font-size: <?php echo esc_html( "{$ms_title_fs}px" ); ?> !important;
        font-weight: <?php echo esc_html( $ms_title_fw ) ?> !important;
    }

    .ms-total-sales {
        color: <?php echo esc_html( $ms_sales_color ) ?> !important;
        font-size: <?php echo esc_html( "{$ms_sales_fs}px" ); ?> !important;
        font-weight: <?php echo esc_html( $ms_sales_fw ) ?> !important;
    }
    
    .ms-review {
        color: <?php echo esc_html( $ms_review_color ) ?> !important;
        font-size: <?php echo esc_html( "{$ms_review_fs}px" ); ?> !important;
        font-weight: <?php echo esc_html( $ms_review_fw ) ?> !important;
    }

    .ms-stock-status {
        font-size: <?php echo esc_html( "{$ms_stock_fs}px" ) ?> !important;
        font-weight: <?php echo esc_html( $ms_stock_fw ) ?> !important;
        color: <?php echo esc_html( $ms_stock_color ) ?> !important;
    }

    .ms-price-main {
        font-size: <?php echo esc_html( "{$ms_active_price_fs}px" ); ?> !important;
        font-weight: <?php echo esc_html( $ms_active_price_fw ) ?> !important;
        color: <?php echo esc_html( $ms_active_price_color ) ?> !important;
    }

    .ms-price-strike {
        font-size: <?php echo esc_html( "{$ms_prev_price_fs}px" ); ?> !important;
        font-weight: <?php echo esc_html( $ms_prev_price_fw ) ?> !important;
        color: <?php echo esc_html( $ms_prev_price_color ) ?> !important;
    }

    .ms-add-to-cart a {
        font-size: <?php echo esc_html( "{$ms_woo_button_fs}px" ); ?> !important;
        font-weight: <?php echo esc_html( $ms_woo_button_fw ) ?> !important;
        color: <?php echo esc_html( $ms_woo_button_color ) ?> !important;
        border: 2px solid <?php echo esc_html( $ms_woo_button_color ) ?> !important;
        background-color: <?php echo esc_html( $ms_woo_button_bg_color ) ?> !important;
    }

    .ms-add-to-cart a:hover {
        color: <?php echo esc_html( $ms_woo_button_bg_color ) ?> !important;
        background-color: <?php echo esc_html( $ms_woo_button_color ) ?> !important;
    }
}
</style>