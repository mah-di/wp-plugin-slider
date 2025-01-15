<?php

final class Meta_Boxes
{
    public function __construct()
    {
        add_action( 'add_meta_boxes', [ $this, 'add_meta_boxes' ] );
    }

    public function add_meta_boxes() {
        add_meta_box( 'post_meta_panel_id', 'Manage Slider', [ $this, 'post_meta_panel' ], 'my_slider', 'normal', 'high' );
        add_meta_box( 'shortcode_panel_id', 'Shortcode For The Slider', [ $this, 'shortcode_panel' ], 'my_slider', 'side', 'low' );
    }

    public function post_meta_panel()
    {
        require_once 'templates/general_settings.php';
    }

    public function shortcode_panel()
    {
        require_once 'templates/shortcode_generator.php';
    }
}

new Meta_Boxes();