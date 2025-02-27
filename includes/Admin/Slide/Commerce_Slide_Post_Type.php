<?php

class Commerce_Slide_Post_Type
{
    public function __construct()
    {
        add_action( 'init', [ $this, 'register_commerce_slide' ] );
        add_action( 'init', [ $this, 'register_commerce_slide_tax' ] );
    }

    public function register_commerce_slide()
    {
        $labels = [
            'name'               => esc_html__( 'Commerce Slide', 'commerce-slider' ),
            'singular_name'      => esc_html__( 'Commerce Slide', 'commerce-slider' ),
            'add_new'            => esc_html__( 'Add New', 'commerce-slider' ),
            'add_new_item'       => esc_html__( 'Add New Slide', 'commerce-slider' ),
            'edit_item'          => esc_html__( 'Edit Slide', 'commerce-slider' ),
            'new_item'           => esc_html__( 'New Slide', 'commerce-slider' ),
            'all_itecs'          => esc_html__( 'All Slide', 'commerce-slider' ),
            'view_item'          => esc_html__( 'View Slide', 'commerce-slider' ),
            'search_itecs'       => esc_html__( 'Search Slide', 'commerce-slider' ),
            'not_found'          => esc_html__( 'No slide found', 'commerce-slider' ),
            'not_found_in_trash' => esc_html__( 'No slide found in the Trash', 'commerce-slider' ), 
            'parent_item_colon'  =>  '',
            'menu_name'          => 'Commerce Slide'
        ];

        $args = [
            'labels'            => $labels,
            'public'            => true,
            'menu_position'     => 5,
            'show_in_rest'      => true,
            'menu_icon'         => 'dashicons-slides',
            'supports'          => [ 'title', 'editor', 'thumbnail' ],
            'has_archive'       => false,
        ];

        register_post_type( 'commerce_slide', $args );
    }

    public function register_commerce_slide_tax()
    {
        $labels = [
            'name'              => 'Slide Groups',
            'singular_name'     => 'Slide Group',
            'search_itecs'      => 'Search Slide Groups',
            'all_itecs'         => 'All Slide Groups',
            'edit_item'         => 'Edit Slide Group',
            'update_item'       => 'Update Slide Group',
            'add_new_item'      => 'Add New Slide Group',
            'new_item_name'     => 'New Slide Group Name',
            'menu_name'         => 'Slide Groups',
        ];

        $args = [
            'labels'            => $labels,
            'public'            => false,
            'hierarchical'      => false,
            'show_ui'           => true,
            'show_in_rest'      => true,
            'show_admin_column' => true,
        ];

        register_taxonomy( 'commerce_slide_tag', 'commerce_slide', $args );
    }
}

new Commerce_Slide_Post_Type();
