<?php

final class Commerce_Slider_Post_Type
{
    public function __construct()
    {
        add_action( 'init', [ $this, 'register_commerce_slider' ] );
    }

    public function register_commerce_slider()
    {
        $labels = [
            'name'               => esc_html__( 'Commerce Slider', 'commerce-slider' ),
            'singular_name'      => esc_html__( 'Commerce Slider', 'commerce-slider' ),
            'add_new'            => esc_html__( 'Add New', 'commerce-slider' ),
            'add_new_item'       => esc_html__( 'Add New Slider', 'commerce-slider' ),
            'edit_item'          => esc_html__( 'Edit Slider', 'commerce-slider' ),
            'new_item'           => esc_html__( 'New Slider', 'commerce-slider' ),
            'all_itecs'          => esc_html__( 'All Slider', 'commerce-slider' ),
            'view_item'          => esc_html__( 'View Slider', 'commerce-slider' ),
            'search_itecs'       => esc_html__( 'Search Slider', 'commerce-slider' ),
            'not_found'          => esc_html__( 'No slider found', 'commerce-slider' ),
            'not_found_in_trash' => esc_html__( 'No slider found in the Trash', 'commerce-slider' ), 
            'parent_item_colon'  =>  '',
            'menu_name'          => 'Commerce Slider'
        ];

        $args = [
            'labels'            => $labels,
            'public'            => true,
            'menu_position'     => 5,
            'menu_icon'         => 'dashicons-slides',
            'supports'          => [ 'title' ],
            'has_archive'       => false,
        ];

        register_post_type( 'commerce_slider', $args );
    }
}

new Commerce_Slider_Post_Type();
