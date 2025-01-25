<?php

final class Frontend
{
    public function __construct() {
        add_shortcode( MS_SHORTCODE_PREFIX, [ $this, 'load_content' ] );

        add_action( 'wp_enqueue_scripts', [ $this, 'load_assets' ] );
    }

    public function load_content( $id ) {
        ob_start();

        $ms_post_ID = isset( $id[ 'id' ] ) ? $id[ 'id' ] : $id;

        $ms_post_type = get_post_meta( $ms_post_ID, 'ms_post_type', true );
        $ms_tag_query = get_post_meta( $ms_post_ID, 'ms_tag_query', true );
        $ms_items_to_show = get_post_meta( $ms_post_ID, 'ms_items_to_show', true );
        $ms_order = get_post_meta( $ms_post_ID, 'ms_order', true );

        $args = [
            'post_type'      => $ms_post_type,
            'posts_per_page' => $ms_items_to_show,
            'orderby'        => 'date',
            'order'          => $ms_order
        ];

        if ( ! empty( $ms_tag_query ) )
            $args[ 'tax_query' ] = [
                [
                    'taxonomy' => $ms_post_type . '_tag',
                    'field'    => 'id',
                    'terms'    => explode( ',', $ms_tag_query ),
                    'operator' => 'IN'
                ]
            ];


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
        }

        include 'views/styles/slider-style.php';
        include 'views/slider-settings.php';

        return ob_get_clean();
    }

    public function load_assets() {
        $this->enqueue_styles();
        $this->enqueue_scripts();
        $this->enqueue_block_styles();
    }

    private function enqueue_styles() {
        wp_enqueue_style( 'ms-owl-style', MS_URL . 'assets/frontend/css/owl.carousel.min.css', [], MS_VERSION );
        wp_enqueue_style( 'ms-owl-theme-style', MS_URL . 'assets/frontend/css/owl.theme.default.min.css', [ 'ms-owl-style' ], MS_VERSION );
        wp_enqueue_style( 'ms-style', MS_URL . 'assets/frontend/css/style.css', [ 'ms-owl-style', 'ms-owl-theme-style' ], MS_VERSION );
    }

    private function enqueue_scripts() {
        wp_enqueue_script( 'ms-owl-script', MS_URL . 'assets/frontend/js/owl.carousel.min.js', [ 'jquery' ], MS_VERSION, true );
        // wp_enqueue_script( 'ms-main-script', MS_URL . 'assets/frontend/js/main.js', [ 'jquery', 'ms-owl-script' ], MS_VERSION, true );
    }

    private function enqueue_block_styles()
    {
        wp_enqueue_style( 'wp-block-library' );
        wp_enqueue_style( 'wp-block-library-theme' );
    }

}

new Frontend();
