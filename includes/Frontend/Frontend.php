<?php

final class Frontend
{
    public function __construct() {
        add_shortcode( MS_SHORTCODE_PREFIX, [ $this, 'load_content' ] );

        add_action( 'wp_enqueue_scripts', [ $this, 'load_assets' ] );
    }

    public function load_content() {
        ob_start();

        include 'views/slider.php';

        return ob_get_clean();
    }

    public function load_assets() {
        $this->enqueue_styles();
        $this->enqueue_scripts();
    }

    private function enqueue_styles() {
        wp_enqueue_style( 'ms-owl-style', MS_URL . 'assets/frontend/css/owl.carousel.min.css', [], MS_VERSION );
        wp_enqueue_style( 'ms-owl-theme-style', MS_URL . 'assets/frontend/css/owl.theme.default.min.css', [ 'ms-owl-style' ], MS_VERSION );
        wp_enqueue_style( 'ms-style', MS_URL . 'assets/frontend/css/style.css', [ 'ms-owl-style', 'ms-owl-theme-style' ], MS_VERSION );
    }

    private function enqueue_scripts() {
        wp_enqueue_script( 'ms-owl-script', MS_URL . 'assets/frontend/js/owl.carousel.min.js', [ 'jquery' ], MS_VERSION, true );
        wp_enqueue_script( 'ms-main-script', MS_URL . 'assets/frontend/js/main.js', [ 'jquery', 'ms-owl-script' ], MS_VERSION, true );
    }

}

new Frontend();
