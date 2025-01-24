<?php

$ms_title_color                     = get_post_meta( $ms_post_ID, 'ms_title_color' );
$ms_feature_img_ratio               = trim( get_post_meta( $ms_post_ID, 'ms_feature_img_ratio', true ) );
[ $ms_width, $ms_height ]           = explode( ':', $ms_feature_img_ratio );
$ms_aspect_ratio                    = ( absint( $ms_height ) / absint( $ms_width ) ) * 100;

$ms_title_fs                 = get_post_meta( $ms_post_ID, 'ms_title_fs', true );
$ms_title_fw                 = get_post_meta( $ms_post_ID, 'ms_title_fw', true );
$ms_title_color              = get_post_meta( $ms_post_ID, 'ms_title_color', true );
$ms_sales_fs                 = get_post_meta( $ms_post_ID, 'ms_sales_fs', true );
$ms_sales_fw                 = get_post_meta( $ms_post_ID, 'ms_sales_fw', true );
$ms_sales_color              = get_post_meta( $ms_post_ID, 'ms_sales_color', true );
$ms_active_price_fs                 = get_post_meta( $ms_post_ID, 'ms_active_price_fs', true );
$ms_active_price_fw                 = get_post_meta( $ms_post_ID, 'ms_active_price_fw', true );
$ms_active_price_color              = get_post_meta( $ms_post_ID, 'ms_active_price_color', true );
$ms_prev_price_fs                 = get_post_meta( $ms_post_ID, 'ms_prev_price_fs', true );
$ms_prev_price_fw                 = get_post_meta( $ms_post_ID, 'ms_prev_price_fw', true );
$ms_prev_price_color              = get_post_meta( $ms_post_ID, 'ms_prev_price_color', true );
$ms_woo_button_fs                 = get_post_meta( $ms_post_ID, 'ms_woo_button_fs', true );
$ms_woo_button_fw                 = get_post_meta( $ms_post_ID, 'ms_woo_button_fw', true );
$ms_woo_button_color              = get_post_meta( $ms_post_ID, 'ms_woo_button_color', true );
$ms_woo_button_bg_color              = get_post_meta( $ms_post_ID, 'ms_woo_button_bg_color', true );

?>

<style>
#my-slider-<?php echo $ms_post_ID ?> {
    .ms-title {
        text-align: center !important;
    }

    .ms-title a {
        color: <?php echo $ms_title_color; ?> !important;
        font-size: <?php echo $ms_title_fs; ?> !important;
        font-weight: <?php echo $ms_title_fw; ?> !important;
    }

    .ms-card-header {
        padding-top: <?php echo "{$ms_aspect_ratio}%" ?> !important;
    }

    .ms-total-sales {
        text-align: center !important;
        font-size: <?php echo $ms_sales_fs; ?> !important;
        font-weight: <?php echo $ms_sales_fw; ?> !important;
    }

    .ms-review {
        justify-content: center !important;
    }

    .ms-stock-status {
        position: absolute;
        top: 2%;
        right: 7%;
        padding: 5px 10px;
        background-color: #f6f6f6 !important;
        color: orangered !important;
        cursor: pointer;
        transition: all 0.3s ease;
        border-radius: 2px;
    }

    .ms-stock-status:hover {
        background-color: #fcfcfc !important;
    }

    .ms-pricing {
        text-align: center !important;
    }

    .ms-price-main {
        font-size: <?php echo $ms_active_price_fs; ?> !important;
        font-weight: <?php echo $ms_active_price_fw; ?> !important;
        color: <?php echo $ms_active_price_color; ?> !important;
    }

    .ms-price-strike {
        font-size: <?php echo $ms_prev_price_fs; ?> !important;
        font-weight: <?php echo $ms_prev_price_fw; ?> !important;
        color: <?php echo $ms_prev_price_color; ?> !important;
    }

    .ms-add-to-cart a {
        font-size: <?php echo $ms_woo_button_fs; ?> !important;
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