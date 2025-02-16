<?php

final class My_Slider_Post_Type
{
    public function __construct()
    {
        add_action( 'init', [ $this, 'register_my_slider' ] );
    }

    public function register_my_slider()
    {
        $labels = [
            'name'               => esc_html__( 'My Slider', 'my-slider' ),
            'singular_name'      => esc_html__( 'My Slider', 'my-slider' ),
            'add_new'            => esc_html__( 'Add New', 'my-slider' ),
            'add_new_item'       => esc_html__( 'Add New Slider', 'my-slider' ),
            'edit_item'          => esc_html__( 'Edit Slider', 'my-slider' ),
            'new_item'           => esc_html__( 'New Slider', 'my-slider' ),
            'all_items'          => esc_html__( 'All Slider', 'my-slider' ),
            'view_item'          => esc_html__( 'View Slider', 'my-slider' ),
            'search_items'       => esc_html__( 'Search Slider', 'my-slider' ),
            'not_found'          => esc_html__( 'No slider found', 'my-slider' ),
            'not_found_in_trash' => esc_html__( 'No slider found in the Trash', 'my-slider' ), 
            'parent_item_colon'  =>  '',
            'menu_name'          => 'My Slider'
        ];

        $args = [
            'labels'            => $labels,
            'public'            => true,
            'menu_position'     => 5,
            'menu_icon'         => 'dashicons-slides',
            'supports'          => [ 'title' ],
            'has_archive'       => false,
        ];

        register_post_type( 'my_slider', $args );
    }
}

new My_Slider_Post_Type();
