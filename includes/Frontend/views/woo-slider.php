<?php

$cs_feature_img_size = cs_get_meta( $cs_post_ID, 'cs_feature_img_size', 'medium_large' );

$posts = new WP_Query( $args );

if ( $posts->have_posts() ):

?>
<div
    id="commerce-slider-<?php echo esc_html( $cs_post_ID ) ?>"
    class="owl-carousel owl-theme"
>

    <?php
    while ( $posts->have_posts() ):
        $posts->the_post();

        global $product;

        $cs_sales_count             = $product->get_total_sales() == 0 ? 'No Sales Yet' : $product->get_total_sales() . ' Sold';
        $cs_review_count            = $product->get_review_count();
        $cs_rating                  = $product->get_average_rating();
        $cs_stock_status            = $product->is_in_stock() ? 'In Stock' : ( $product->is_on_backorder() ? 'On Back-Order' : 'Out of Stock' );

        if ( $product->is_type( 'variable' ) ) {
            $min_price_raw          = $product->get_variation_price( 'min', true );
            $max_price_raw          = $product->get_variation_price( 'max', true );

            $min_price              = wc_price( $min_price_raw );
            $max_price              = wc_price( $max_price_raw );

            $fixed_price            = $min_price_raw == $max_price_raw ? $min_price : false;
        } else {
            $sale_price_raw         = $product->get_sale_price();
            $regular_price_raw      = $product->get_regular_price();

            $sale_price             = $sale_price_raw ? wc_price( $sale_price_raw ) : null;
            $regular_price          = wc_price( $regular_price_raw );

            $fixed_price            = ( ! $sale_price || $sale_price_raw == $regular_price_raw ) ? $regular_price : false;
        }
    ?>

    <div class="cs-card">
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="cs-card-header">
            <?php the_post_thumbnail( $cs_feature_img_size ) ?>
        </div>
        <?php endif ?>

        <div class="cs-card-body">
            <h4 class="cs-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>

            <div class="cs-total-sales">
                <?php echo esc_html( $cs_sales_count ) ?>
            </div>
            <div class="cs-review">
                <?php if ( $cs_review_count == 0 ): ?>
                No Reviews Yet
                <?php else: ?>

                <?php echo wp_kses_post( wc_get_rating_html( $cs_rating ) ) ?>
                (<?php echo esc_html( $cs_review_count ) ?>)

                <?php endif; ?>
            </div>
            <div class="cs-stock-status">
                <span><?php echo esc_html( $cs_stock_status ) ?></span>
            </div>
            <div class="cs-pricing">
                <?php if ( $fixed_price ) : ?>

                    <span class="cs-price-main"><?php echo wp_kses_post( $fixed_price ) ?></span>

                <?php elseif ( $product->is_type( 'variable' ) ) : ?>

                    <span class="cs-price-main">
                        <?php echo esc_html( $min_price ) ?>
                        -&nbsp;
                        <?php echo esc_html( $max_price ) ?>
                    </span>

                <?php else: ?>

                    <span class="cs-price-main"><?php echo wp_kses_post( $sale_price ) ?></span>
                    <del class="cs-price-strike"><?php echo wp_kses_post( $regular_price ) ?></del>

                <?php endif ?>
            </div>
            <div class="cs-add-to-cart">
                <?php echo esc_html( woocommerce_template_loop_add_to_cart() ) ?>
            </div>
        </div>
    </div>

    <?php

    endwhile; 

    wp_reset_postdata();

    ?>

</div>

<?php endif;