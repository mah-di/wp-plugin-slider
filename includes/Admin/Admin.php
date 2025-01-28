<?php

final class Admin
{
    public function __construct()
    {
        add_action( 'admin_enqueue_scripts', [ $this, 'load_assets' ] );
        $this->safe_load_live_preview_assets();

        require_once 'Slider/My_Slider_Post_Type.php';
        require_once 'Slider/Meta_Boxes.php';
        require_once 'Slider/Handle_Search.php';

        require_once 'Slide/My_Slide_Post_Type.php';
    }

    public function load_assets()
    {
        $this->enqueue_styles();
        $this->enqueue_scripts();
        $this->enqueue_color_picker_alpha();
    }

    private function safe_load_live_preview_assets()
    {
        add_action( 'current_screen', [ $this, 'check_and_load_live_preview_assets' ] );
    }

    public function check_and_load_live_preview_assets( $screen )
    {
        if ( $screen->post_type == 'my_slide' )
            add_action( 'enqueue_block_editor_assets', [ $this, 'load_live_preview_assets' ] );
            add_action( 'enqueue_block_editor_assets', [ $this, 'enqueue_alignwide_blocks_script' ] );
    }

    public function load_live_preview_assets()
    {
        $this->enqueue_live_preview_styles();
        $this->enqueue_live_preview_scripts();
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

    private function enqueue_live_preview_styles()
    {
        wp_enqueue_style( 'ms-live-preview-style', MS_URL . '/assets/admin/css/live.preview.css', [], MS_VERSION );
    }

    private function enqueue_live_preview_scripts()
    {
        wp_enqueue_script( 'ms-live-preview-script', MS_URL . '/assets/admin/js/live.preview.js', [ 'wp-blocks', 'wp-dom' ], MS_VERSION );
    }

    public function enqueue_alignwide_blocks_script()
    {
        wp_enqueue_script( 'ms-alignwide-blocks-script', MS_URL . '/assets/admin/js/alignwide.blocks.js', [ 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ], MS_VERSION, true );
    }
}

new Admin();
