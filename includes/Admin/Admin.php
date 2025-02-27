<?php

final class Admin
{
    public function __construct()
    {
        add_action( 'admin_enqueue_scripts', [ $this, 'load_assets' ] );
        $this->safe_load_live_preview_assets();

        require_once 'Slider/Commerce_Slider_Post_Type.php';
        require_once 'Slider/Meta_Boxes.php';
        require_once 'Slider/Handle_Search.php';

        require_once 'Slide/Commerce_Slide_Post_Type.php';
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
        if ( $screen->post_type == 'commerce_slide' ) {
            add_action( 'enqueue_block_editor_assets', [ $this, 'load_live_preview_assets' ] );
            add_action( 'enqueue_block_editor_assets', [ $this, 'enqueue_alignwide_blocks_script' ] );
        }
    }

    public function load_live_preview_assets()
    {
        $this->enqueue_live_preview_styles();
        $this->enqueue_live_preview_scripts();
    } 

    private function enqueue_styles()
    {
        wp_enqueue_style( 'cs-meta-box-style', CS_URL . '/assets/admin/css/meta.boxes.css', [], CS_VERSION );
        wp_enqueue_style( 'cs-selectize-style', CS_URL . '/assets/admin/css/selectize.min.css', [], '0.15.2' );
    }

    private function enqueue_scripts()
    {
        wp_enqueue_script( 'cs-toggle-tabs-script', CS_URL . '/assets/admin/js/toggle.tabs.js', [ 'jquery' ], CS_VERSION, true );
        wp_enqueue_script( 'cs-selectize-script', CS_URL . '/assets/admin/js/selectize.min.js', [ 'jquery' ], '0.15.2', true );
        wp_enqueue_script( 'cs-admin-script', CS_URL . '/assets/admin/js/admin.js', [ 'jquery', 'cs-selectize-script' ], CS_VERSION, true );
    }

    private function enqueue_color_picker_alpha()
    {
        wp_enqueue_style( 'wp-color-picker' );
        wp_register_script( 'wp-color-picker-alpha', CS_URL . '/assets/admin/js/color-picker-alpha.min.js', [ 'wp-color-picker' ], CS_VERSION, true );
        wp_add_inline_script(
            'wp-color-picker-alpha',
            'jQuery( function() { jQuery( ".cs-color-picker" ).wpColorPicker(); } );'
        );
        wp_enqueue_script( 'wp-color-picker-alpha' );
    }

    private function enqueue_live_preview_styles()
    {
        wp_enqueue_style( 'cs-live-preview-style', CS_URL . '/assets/admin/css/live.preview.css', [], CS_VERSION );
    }

    private function enqueue_live_preview_scripts()
    {
        wp_enqueue_script( 'cs-live-preview-script', CS_URL . '/assets/admin/js/live.preview.js', [ 'jquery', 'wp-blocks', 'wp-dom' ], CS_VERSION, true );
    }

    public function enqueue_alignwide_blocks_script()
    {
        wp_enqueue_script( 'cs-alignwide-blocks-script', CS_URL . '/assets/admin/js/alignwide.blocks.js', [ 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ], CS_VERSION, true );
    }
}

new Admin();
