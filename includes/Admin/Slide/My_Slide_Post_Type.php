<?php

class My_Slide_Post_Type
{
    public function __construct()
    {
        add_action( 'init', [ $this, 'register_my_slide' ] );
        add_action( 'init', [ $this, 'register_my_slide_tax' ] );
    }

    public function register_my_slide()
    {
        $labels = [
            'name'               => esc_html__( 'My Slide', 'my-slider' ),
            'singular_name'      => esc_html__( 'My Slide', 'my-slider' ),
            'add_new'            => esc_html__( 'Add New','my-slider' ),
            'add_new_item'       => esc_html__( 'Add New Slide', 'my-slider' ),
            'edit_item'          => esc_html__( 'Edit Slide', 'my-slider' ),
            'new_item'           => esc_html__( 'New Slide', 'my-slider' ),
            'all_items'          => esc_html__( 'All Slide', 'my-slider' ),
            'view_item'          => esc_html__( 'View Slide', 'my-slider' ),
            'search_items'       => esc_html__( 'Search Slide', 'my-slider' ),
            'not_found'          => esc_html__( 'No slide found', 'my-slider' ),
            'not_found_in_trash' => esc_html__( 'No slide found in the Trash', 'my-slider' ), 
            'parent_item_colon'  =>  '',
            'menu_name'          => 'My Slides'
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

        register_post_type( 'my_slide', $args );
    }

    public function register_my_slide_tax()
    {
        $labels = [
            'name'              => 'Slide Groups',
            'singular_name'     => 'Slide Group',
            'search_items'      => 'Search Slide Groups',
            'all_items'         => 'All Slide Groups',
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

        register_taxonomy( 'my_slide_tag', 'my_slide', $args );
    }
}

new My_Slide_Post_Type();
