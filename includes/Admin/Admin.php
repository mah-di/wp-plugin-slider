<?php

final class Admin
{
    public function __construct()
    {
        add_action( 'admin_enqueue_scripts', [ $this, 'load_assets' ] );

        require_once 'Slider/My_Slider_Post_Type.php';
        require_once 'Slider/Meta_Boxes.php';

        require_once 'Slide/My_Slide_Post_Type.php';
    }

    public function load_assets()
    {
        $this->enqueue_styles();
        $this->enqueue_scripts();
        $this->enqueue_color_picker_alpha();
    }

    private function enqueue_styles()
    {
        wp_enqueue_style( 'ms-meta-box-style', MS_URL . '/assets/admin/css/meta.boxes.css', [], MS_VERSION );
        wp_enqueue_style( 'ms-selectize-style', MS_URL . '/assets/admin/css/selectize.min.css', [] );
    }

    private function enqueue_scripts()
    {
        wp_enqueue_script( 'ms-selectize-script', MS_URL . '/assets/admin/js/selectize.min.js', [ 'jquery' ], false, true );
        wp_enqueue_script( 'ms-trigger-selectize-script', MS_URL . '/assets/admin/js/trigger.selectize.js', [ 'jquery', 'ms-selectize-script' ], MS_VERSION, true );
        wp_enqueue_script( 'ms-admin-script', MS_URL . '/assets/admin/js/admin.js', [ 'jquery', 'ms-selectize-script' ], MS_VERSION, true );
    }

    private function enqueue_color_picker_alpha()
    {
        wp_enqueue_style( 'wp-color-picker' );
        wp_register_script( 'wp-color-picker-alpha', MS_URL . '/assets/admin/js/color-picker-alpha.min.js', [ 'wp-color-picker' ], MS_VERSION, true );
        wp_add_inline_script(
            'wp-color-picker-alpha',
            'jQuery( function() { jQuery( ".ms-color-picker" ).wpColorPicker(); } );'
        );
        wp_enqueue_script( 'wp-color-picker-alpha' );
    }
}

new Admin();
