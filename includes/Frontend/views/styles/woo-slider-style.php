<?php

$cs_feature_img_ratio               = trim( cs_get_meta( $cs_post_ID, 'cs_feature_img_ratio', '16:9' ) );
[ $cs_width, $cs_height ]           = explode( ':', $cs_feature_img_ratio );
$cs_aspect_ratio                    = ( absint( $cs_height ) / absint( $cs_width ) ) * 100;

$cs_title_fs                        = cs_get_meta( $cs_post_ID, 'cs_title_fs', 18 );
$cs_title_fw                        = cs_get_meta( $cs_post_ID, 'cs_title_fw', 700 );
$cs_title_color                     = cs_get_meta( $cs_post_ID, 'cs_title_color', '#000000' );
$cs_stock_fs                        = cs_get_meta( $cs_post_ID, 'cs_stock_fs', 12 );
$cs_stock_fw                        = cs_get_meta( $cs_post_ID, 'cs_stock_fw', 500 );
$cs_stock_color                     = cs_get_meta( $cs_post_ID, 'cs_stock_color', '#EA8A35' );
$cs_sales_fs                        = cs_get_meta( $cs_post_ID, 'cs_sales_fs', 12 );
$cs_sales_fw                        = cs_get_meta( $cs_post_ID, 'cs_sales_fw', 500 );
$cs_sales_color                     = cs_get_meta( $cs_post_ID, 'cs_sales_color', '#333333' );
$cs_review_fs                       = cs_get_meta( $cs_post_ID, 'cs_review_fs', 12 );
$cs_review_fw                       = cs_get_meta( $cs_post_ID, 'cs_review_fw', 500 );
$cs_review_color                    = cs_get_meta( $cs_post_ID, 'cs_review_color', '#EA8A35' );
$cs_active_price_fs                 = cs_get_meta( $cs_post_ID, 'cs_active_price_fs', 12 );
$cs_active_price_fw                 = cs_get_meta( $cs_post_ID, 'cs_active_price_fw', 700 );
$cs_active_price_color              = cs_get_meta( $cs_post_ID, 'cs_active_price_color', '#EA8A35' );
$cs_prev_price_fs                   = cs_get_meta( $cs_post_ID, 'cs_prev_price_fs', 10 );
$cs_prev_price_fw                   = cs_get_meta( $cs_post_ID, 'cs_prev_price_fw', 500 );
$cs_prev_price_color                = cs_get_meta( $cs_post_ID, 'cs_prev_price_color', '#333333' );
$cs_woo_button_fs                   = cs_get_meta( $cs_post_ID, 'cs_woo_button_fs', 12 );
$cs_woo_button_fw                   = cs_get_meta( $cs_post_ID, 'cs_woo_button_fw', 500 );
$cs_woo_button_color                = cs_get_meta( $cs_post_ID, 'cs_woo_button_color', '#EA8A35' );
$cs_woo_button_bg_color             = cs_get_meta( $cs_post_ID, 'cs_woo_button_bg_color', '#ffffff' );

$cs_min_height                      = cs_get_meta( $cs_post_ID, 'cs_min_height', 'auto' );
$cs_horizontal_align                = cs_get_meta( $cs_post_ID, 'cs_horizontal_align', 'center' );
$cs_verticle_align                  = cs_get_meta( $cs_post_ID, 'cs_verticle_align', 'start' );

?>

<style>
#commerce-slider-<?php echo esc_html( $cs_post_ID ) ?> {
    .cs-card {
        min-height: <?php echo esc_html( "{$cs_min_height}px" ) ?> !important;
    }

    .cs-card-header {
        padding-top: <?php echo esc_html( "{$cs_aspect_ratio}%" ) ?> !important;
    }

    .cs-card-body {
        justify-content: <?php echo esc_html( $cs_verticle_align ) ?>;
        align-items: <?php echo esc_html( $cs_horizontal_align ) ?>;
    }

    .cs-card-body > * {
        text-align: <?php echo esc_html( $cs_horizontal_align == 'baseline' ? 'start' : $cs_horizontal_align ) ?>;
    }

    .cs-title a {
        color: <?php echo esc_html( $cs_title_color ) ?> !important;
        font-size: <?php echo esc_html( "{$cs_title_fs}px" ); ?> !important;
        font-weight: <?php echo esc_html( $cs_title_fw ) ?> !important;
    }

    .cs-total-sales {
        color: <?php echo esc_html( $cs_sales_color ) ?> !important;
        font-size: <?php echo esc_html( "{$cs_sales_fs}px" ); ?> !important;
        font-weight: <?php echo esc_html( $cs_sales_fw ) ?> !important;
    }
    
    .cs-review {
        color: <?php echo esc_html( $cs_review_color ) ?> !important;
        font-size: <?php echo esc_html( "{$cs_review_fs}px" ); ?> !important;
        font-weight: <?php echo esc_html( $cs_review_fw ) ?> !important;
    }

    .cs-stock-status {
        font-size: <?php echo esc_html( "{$cs_stock_fs}px" ) ?> !important;
        font-weight: <?php echo esc_html( $cs_stock_fw ) ?> !important;
        color: <?php echo esc_html( $cs_stock_color ) ?> !important;
    }

    .cs-price-main {
        font-size: <?php echo esc_html( "{$cs_active_price_fs}px" ); ?> !important;
        font-weight: <?php echo esc_html( $cs_active_price_fw ) ?> !important;
        color: <?php echo esc_html( $cs_active_price_color ) ?> !important;
    }

    .cs-price-strike {
        font-size: <?php echo esc_html( "{$cs_prev_price_fs}px" ); ?> !important;
        font-weight: <?php echo esc_html( $cs_prev_price_fw ) ?> !important;
        color: <?php echo esc_html( $cs_prev_price_color ) ?> !important;
    }

    .cs-add-to-cart a {
        font-size: <?php echo esc_html( "{$cs_woo_button_fs}px" ); ?> !important;
        font-weight: <?php echo esc_html( $cs_woo_button_fw ) ?> !important;
        color: <?php echo esc_html( $cs_woo_button_color ) ?> !important;
        border: 2px solid <?php echo esc_html( $cs_woo_button_color ) ?> !important;
        background-color: <?php echo esc_html( $cs_woo_button_bg_color ) ?> !important;
    }

    .cs-add-to-cart a:hover {
        color: <?php echo esc_html( $cs_woo_button_bg_color ) ?> !important;
        background-color: <?php echo esc_html( $cs_woo_button_color ) ?> !important;
    }
}
</style>