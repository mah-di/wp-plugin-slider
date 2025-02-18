<?php

final class Frontend
{
    public function __construct() {
        add_shortcode( MS_SHORTCODE_PREFIX, [ $this, 'load_content' ] );

        add_action( 'wp_enqueue_scripts', [ $this, 'load_assets' ] );
    }

    public function load_content( $id ) {
        ob_start();

        $ms_post_ID             = isset( $id[ 'id' ] ) ? $id[ 'id' ] : $id;

        $ms_post_type           = ms_get_meta( $ms_post_ID, 'ms_post_type' );

        if ( $ms_post_type == 'product' && ! MS_WC_IS_ACTIVE ) return ob_get_clean();

        $ms_query_type          = ms_get_meta( $ms_post_ID, 'ms_query_type' );
        $ms_query               = ms_get_meta( $ms_post_ID, 'ms_query' );
        $ms_items_to_show       = ms_get_meta( $ms_post_ID, 'ms_items_to_show', 6 );
        $ms_order               = ms_get_meta( $ms_post_ID, 'ms_order', 'DESC' );

        $is_tax_query_type      = in_array( $ms_query_type, [ 'category', 'product_cat', 'post_tag', 'product_tag', 'my_slide_tag' ] );

        $has_limit              = empty( $ms_query_type )
                                || $is_tax_query_type
                                || empty( $ms_query );

        $args = [
            'post_type'                 => $ms_post_type,
            'posts_per_page'            => $has_limit ? $ms_items_to_show : -1,
            'orderby'                   => 'date',
            'order'                     => $ms_order
        ];

        if ( $is_tax_query_type ) {
            $args[ 'tax_query' ] = [ [
                'taxonomy'              => $ms_query_type,
                'field'                 => 'id',
                'terms'                 => explode( ',', $ms_query ),
                'operator'              => 'IN'
            ] ];

        } else {

            if ( ! empty( $ms_query ) ) {
                $args[ 'post__in' ]     = explode( ',', $ms_query );

            }

            if ( $ms_query_type == 'featured' && empty( $ms_query ) ) {
                $featured = get_term_by( 'name', 'featured', 'product_visibility' );

                $args[ 'tax_query' ]    = [ [
                    'taxonomy'              => 'product_visibility',
                    'field'                 => 'name',
                    'terms'                 => $featured->term_id,
                    'operator'              => 'IN'
                ] ];

            }

            if ( $ms_query_type == 'onsale' && empty( $ms_query ) ) {
                $args[ 'post__in' ]     = wc_get_product_ids_on_sale();

            }

            if ( in_array( $ms_query_type, [ 'top_rated', 'best_selling' ] ) ) {
                $meta_key = ( $ms_query_type == 'top_rated' ) ? '_wc_average_rating' : 'total_sales';

                $args[ 'orderby' ]      = [
                    'meta_value_num' => 'DESC'
                ];

                if ( empty( $ms_query ) ) {
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

        if ( $ms_post_type == 'post' ) {
            include 'views/post-slider.php';
            include 'views/styles/post-slider-style.php';
        }

        if ( $ms_post_type == 'product' ) {
            include 'views/woo-slider.php';
            include 'views/styles/woo-slider-style.php';
        }

        if ( $ms_post_type == 'my_slide' ) {
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
        wp_enqueue_style( 'ms-animate-style', MS_URL . 'assets/frontend/css/animate.min.css', [], '4.1.1' );
        wp_enqueue_style( 'ms-owl-style', MS_URL . 'assets/frontend/css/owl.carousel.min.css', [ 'ms-animate-style' ], '2.3.4' );
        wp_enqueue_style( 'ms-owl-theme-style', MS_URL . 'assets/frontend/css/owl.theme.default.min.css', [ 'ms-animate-style', 'ms-owl-style' ], '2.3.4' );
        wp_enqueue_style( 'ms-style', MS_URL . 'assets/frontend/css/style.css', [ 'ms-animate-style', 'ms-owl-style', 'ms-owl-theme-style' ], MS_VERSION );
    }

    private function enqueue_scripts() {
        wp_enqueue_script( 'ms-owl-script', MS_URL . 'assets/frontend/js/owl.carousel.min.js', [ 'jquery' ], MS_VERSION, true );
    }

    private function enqueue_block_styles()
    {
        wp_enqueue_style( 'wp-block-library' );
        wp_enqueue_style( 'wp-block-library-theme' );
    }

}

new Frontend();
