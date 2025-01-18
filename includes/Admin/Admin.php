<?php

final class Admin
{
    public function __construct()
    {
        add_action( 'admin_enqueue_scripts', [ $this, 'load_assets' ] );

        require_once 'My_Slider_Post_Type.php';
        require_once 'Meta_Boxes.php';
    }

    public function load_assets()
    {
        $this->enqueue_styles();
        $this->enqueue_scripts();
    }

    private function enqueue_styles()
    {
        wp_enqueue_style( 'ms-meta-box-style', MS_URL . '/assets/admin/css/meta.boxes.css', [], MS_VERSION );
        wp_enqueue_style( 'ms-selectize-style', MS_URL . '/assets/admin/css/selectize.min.css', [], MS_VERSION );
    }

    private function enqueue_scripts()
    {
        wp_enqueue_script( 'ms-selectize-script', MS_URL . '/assets/admin/js/selectize.min.js', [ 'jquery' ] );
        wp_enqueue_script( 'ms-trigger-selectize-script', MS_URL . '/assets/admin/js/trigger.selectize.js', [ 'jquery', 'ms-selectize-script' ] );
        wp_enqueue_script( 'ms-color-palette-script', MS_URL . '/assets/admin/js/color.palette.js', [ 'jquery', 'ms-selectize-script' ] );
    }
}

new Admin();
