<?php

final class Frontend
{
    public function __construct() {
        add_shortcode( CS_SHORTCODE_PREFIX, [ $this, 'load_content' ] );

        add_action( 'wp_enqueue_scripts', [ $this, 'load_assets' ] );
    }

    public function load_content( $id ) {
        ob_start();

        $cs_post_ID             = isset( $id[ 'id' ] ) ? $id[ 'id' ] : $id;

        $cs_post_type           = cs_get_meta( $cs_post_ID, 'cs_post_type' );

        if ( $cs_post_type == 'product' && ! CS_WC_IS_ACTIVE ) return ob_get_clean();

        $cs_query_type          = cs_get_meta( $cs_post_ID, 'cs_query_type' );
        $cs_query               = cs_get_meta( $cs_post_ID, 'cs_query' );
        $cs_items_to_show       = cs_get_meta( $cs_post_ID, 'cs_items_to_show', 6 );
        $cs_order               = cs_get_meta( $cs_post_ID, 'cs_order', 'DESC' );

        $is_tax_query_type      = in_array( $cs_query_type, [ 'category', 'product_cat', 'post_tag', 'product_tag', 'commerce_slide_tag' ] );

        $has_limit              = empty( $cs_query_type )
                                || $is_tax_query_type
                                || empty( $cs_query );

        $args = [
            'post_type'                 => $cs_post_type,
            'posts_per_page'            => $has_limit ? $cs_items_to_show : -1,
            'orderby'                   => 'date',
            'order'                     => $cs_order
        ];

        if ( $is_tax_query_type ) {
            $args[ 'tax_query' ] = [ [
                'taxonomy'              => $cs_query_type,
                'field'                 => 'id',
                'terms'                 => explode( ',', $cs_query ),
                'operator'              => 'IN'
            ] ];

        } else {

            if ( ! empty( $cs_query ) ) {
                $args[ 'post__in' ]     = explode( ',', $cs_query );

            }

            if ( $cs_query_type == 'featured' && empty( $cs_query ) ) {
                $featured = get_term_by( 'name', 'featured', 'product_visibility' );

                $args[ 'tax_query' ]    = [ [
                    'taxonomy'              => 'product_visibility',
                    'field'                 => 'name',
                    'terms'                 => $featured->term_id,
                    'operator'              => 'IN'
                ] ];

            }

            if ( $cs_query_type == 'onsale' && empty( $cs_query ) ) {
                $args[ 'post__in' ]     = wc_get_product_ids_on_sale();

            }

            if ( in_array( $cs_query_type, [ 'top_rated', 'best_selling' ] ) ) {
                $meta_key = ( $cs_query_type == 'top_rated' ) ? '_wc_average_rating' : 'total_sales';

                $args[ 'orderby' ]      = [
                    'meta_value_num' => 'DESC'
                ];

                if ( empty( $cs_query ) ) {
                    $args[ 'meta_query' ] = [ [
                        'key'               => $meta_key,
                        'value'             => 0,
                        'compare'           => '>',
                        'type'              => 'NUMERIC'
                    ] ];
                }

            }
        }

        include 'views/styles/slider-style.php';

        if ( $cs_post_type == 'post' ) {
            include 'views/post-slider.php';
            include 'views/styles/post-slider-style.php';
        }

        if ( $cs_post_type == 'product' ) {
            include 'views/woo-slider.php';
            include 'views/styles/woo-slider-style.php';
        }

        if ( $cs_post_type == 'commerce_slide' ) {
            include 'views/custom-slider.php';
            include 'views/styles/custom-slider-style.php';
        }

        include 'views/slider-settings.php';

        return ob_get_clean();
    }

    public function load_assets() {
        $this->enqueue_styles();
        $this->enqueue_scripts();
        $this->enqueue_block_styles();
    }

    private function enqueue_styles() {
        wp_enqueue_style( 'cs-animate-style', CS_URL . 'assets/frontend/css/animate.min.css', [], '4.1.1' );
        wp_enqueue_style( 'cs-owl-style', CS_URL . 'assets/frontend/css/owl.carousel.min.css', [ 'cs-animate-style' ], '2.3.4' );
        wp_enqueue_style( 'cs-owl-theme-style', CS_URL . 'assets/frontend/css/owl.theme.default.min.css', [ 'cs-animate-style', 'cs-owl-style' ], '2.3.4' );
        wp_enqueue_style( 'cs-style', CS_URL . 'assets/frontend/css/style.css', [ 'cs-animate-style', 'cs-owl-style', 'cs-owl-theme-style' ], CS_VERSION );
    }

    private function enqueue_scripts() {
        wp_enqueue_script( 'cs-owl-script', CS_URL . 'assets/frontend/js/owl.carousel.min.js', [ 'jquery' ], CS_VERSION, true );
    }

    private function enqueue_block_styles()
    {
        wp_enqueue_style( 'wp-block-library' );
        wp_enqueue_style( 'wp-block-library-theme' );
    }

}

new Frontend();
