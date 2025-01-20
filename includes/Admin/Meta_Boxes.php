<?php

final class Meta_Boxes
{
    private $post_ID;

    public function __construct()
    {
        $this->set_post_ID();

        add_action( 'add_meta_boxes', [ $this, 'add_meta_boxes' ] );

        add_action( 'edit_form_advanced', [ $this, 'add_nonce_field' ] );

        add_action( 'save_post', [ $this, 'meta_save' ] );
    }

    public function add_meta_boxes()
    {
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

    public function add_nonce_field()
    {
        wp_nonce_field( 'ms_meta_save_nonce', 'ms_nonce' );
    }

    private function set_post_ID()
    {
        if ( isset( $_POST[ 'post_ID' ] ) )
            $this->post_ID = absint( $_POST[ 'post_ID' ] );
    }

    public function meta_save( $post_id )
    {
        // return if doing autosave
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
            return;

        // return if doing ajax save
        if ( defined( 'DOING_AJAX' ) && DOING_AJAX )
            return;

        // return if doing bulk edit
        if ( isset( $_REQUEST[ 'bulk_edit' ] ) )
            return;

        // return if nonce is not set
        if ( ! isset( $_POST[ 'ms_nonce' ] ) )
            return;

        $ms_nonce = sanitize_text_field( wp_unslash( $_POST[ 'ms_nonce' ] ) );

        // return if nonce is invalid
        if ( ! wp_verify_nonce( $ms_nonce, 'ms_meta_save_nonce' ) )
            return;

        // return if user does not have edit permissions
        if ( ! current_user_can( 'edit_page', $post_id ) )
            return;

        $post_ID = $this->post_ID;

        // return if post id is not set
        if ( ! isset( $post_ID ) )
            return;

        $post_type = get_post_type( $post_ID );

        // return if post type is not my_slider
        if ( $post_type != 'my_slider' )
            return;

        // Saving Meta Values
        if ( isset( $_POST[ 'ms_cat_query' ] ) ) {
            if ( empty( $_POST[ 'ms_cat_query' ] ) ) {
                $cat_query = '';

            } else {
                if ( is_array( $_POST[ 'ms_cat_query' ] ) ) {
                    $sanitized_array = array_map( 'sanitize_text_field', $_POST[ 'ms_cat_query' ] );
                    
                    $cat_query = implode( ',', $sanitized_array );
                }

                if ( is_string( $_POST['ms_cat_query'] ) )
                    $cat_query = $_POST[ 'ms_cat_query' ];
            }

            $this->save_text_meta( 'ms_cat_query', $cat_query );
        }

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

// wp_die(  );



        if ( isset( $_POST[ 'ms_items_to_show' ] ) )
            $this->save_int_meta( 'ms_items_to_show', $_POST[ 'ms_items_to_show' ] );

        if ( isset( $_POST[ 'ms_items_to_display' ] ) )
            $this->save_int_meta( 'ms_items_to_display', $_POST[ 'ms_items_to_display' ] );

        if ( isset( $_POST[ 'ms_feature_img_size' ] ) )
            $this->save_text_meta( 'ms_feature_img_size', $_POST[ 'ms_feature_img_size' ] );

        if ( isset( $_POST[ 'ms_order' ] ) )
            $this->save_text_meta( 'ms_order', $_POST[ 'ms_order' ] );

        if ( isset( $_POST[ 'ms_show_comments' ] ) )
            $this->save_text_meta( 'ms_show_comments', $_POST[ 'ms_show_comments' ] );

        if ( isset( $_POST[ 'ms_show_category' ] ) )
            $this->save_text_meta( 'ms_show_category', $_POST[ 'ms_show_category' ] );

        if ( isset( $_POST[ 'ms_show_tags' ] ) )
            $this->save_text_meta( 'ms_show_tags', $_POST[ 'ms_show_tags' ] );

        if ( isset( $_POST[ 'ms_show_excerpt' ] ) )
            $this->save_text_meta( 'ms_show_excerpt', $_POST[ 'ms_show_excerpt' ] );

        if ( isset( $_POST[ 'ms_excerpt_length' ] ) )
            $this->save_text_meta( 'ms_excerpt_length', $_POST[ 'ms_excerpt_length' ] );

        if ( isset( $_POST[ 'ms_read_more_text' ] ) )
            $this->save_text_meta( 'ms_read_more_text', $_POST[ 'ms_read_more_text' ] );

        if ( isset( $_POST[ 'ms_show_author' ] ) )
            $this->save_text_meta( 'ms_show_author', $_POST[ 'ms_show_author' ] );

        if ( isset( $_POST[ 'ms_show_avatar' ] ) )
            $this->save_text_meta( 'ms_show_avatar', $_POST[ 'ms_show_avatar' ] );

        if ( isset( $_POST[ 'ms_show_date' ] ) )
            $this->save_text_meta( 'ms_show_date', $_POST[ 'ms_show_date' ] );
        
        if ( isset( $_POST[ 'ms_margin_right' ] ) )
        $this->save_int_meta( 'ms_margin_right', $_POST[ 'ms_margin_right' ] );

        if ( isset( $_POST[ 'ms_loop' ] ) )
            $this->save_text_meta( 'ms_loop', $_POST[ 'ms_loop' ] );

        if ( isset( $_POST[ 'ms_center' ] ) )
            $this->save_text_meta( 'ms_center', $_POST[ 'ms_center' ] );

        if ( isset( $_POST[ 'ms_show_nav' ] ) )
            $this->save_text_meta( 'ms_show_nav', $_POST[ 'ms_show_nav' ] );

        if ( isset( $_POST[ 'ms_show_dots' ] ) )
            $this->save_text_meta( 'ms_show_dots', $_POST[ 'ms_show_dots' ] );

        if ( isset( $_POST[ 'ms_show_dots_foreach' ] ) )
            $this->save_text_meta( 'ms_show_dots_foreach', $_POST[ 'ms_show_dots_foreach' ] );

        if ( isset( $_POST[ 'ms_autoplay' ] ) )
            $this->save_text_meta( 'ms_autoplay', $_POST[ 'ms_autoplay' ] );

        if ( isset( $_POST[ 'ms_autoplay_timeout' ] ) )
            $this->save_text_meta( 'ms_autoplay_timeout', $_POST[ 'ms_autoplay_timeout' ] );

        if ( isset( $_POST[ 'ms_autoplay_hover_pause' ] ) )
            $this->save_text_meta( 'ms_autoplay_hover_pause', $_POST[ 'ms_autoplay_hover_pause' ] );

        if ( isset( $_POST[ 'ms_autoplay_speed' ] ) )
            $this->save_text_meta( 'ms_autoplay_speed', $_POST[ 'ms_autoplay_speed' ] );

        if ( isset( $_POST[ 'ms_bg_color' ] ) )
            $this->save_text_meta( 'ms_bg_color', $_POST[ 'ms_bg_color' ] );

        if ( isset( $_POST[ 'ms_bg_color' ] ) )
            $this->save_text_meta( 'ms_bg_color', $_POST[ 'ms_bg_color' ] );

        if ( isset( $_POST[ 'ms_comment_icon_color' ] ) )
            $this->save_text_meta( 'ms_comment_icon_color', $_POST[ 'ms_comment_icon_color' ] );

        if ( isset( $_POST[ 'ms_comment_color' ] ) )
            $this->save_text_meta( 'ms_comment_color', $_POST[ 'ms_comment_color' ] );

        if ( isset( $_POST[ 'ms_category_icon_color' ] ) )
            $this->save_text_meta( 'ms_category_icon_color', $_POST[ 'ms_category_icon_color' ] );

        if ( isset( $_POST[ 'ms_category_color' ] ) )
            $this->save_text_meta( 'ms_category_color', $_POST[ 'ms_category_color' ] );

        if ( isset( $_POST[ 'ms_category_bg_color' ] ) )
            $this->save_text_meta( 'ms_category_bg_color', $_POST[ 'ms_category_bg_color' ] );

        if ( isset( $_POST[ 'ms_tag_icon_color' ] ) )
            $this->save_text_meta( 'ms_tag_icon_color', $_POST[ 'ms_tag_icon_color' ] );

        if ( isset( $_POST[ 'ms_tag_color' ] ) )
            $this->save_text_meta( 'ms_tag_color', $_POST[ 'ms_tag_color' ] );

        if ( isset( $_POST[ 'ms_tag_bg_color' ] ) )
            $this->save_text_meta( 'ms_tag_bg_color', $_POST[ 'ms_tag_bg_color' ] );

        if ( isset( $_POST[ 'ms_title_color' ] ) )
            $this->save_text_meta( 'ms_title_color', $_POST[ 'ms_title_color' ] );

        if ( isset( $_POST[ 'ms_excerpt_color' ] ) )
            $this->save_text_meta( 'ms_excerpt_color', $_POST[ 'ms_excerpt_color' ] );

        if ( isset( $_POST[ 'ms_read_more_color' ] ) )
            $this->save_text_meta( 'ms_read_more_color', $_POST[ 'ms_read_more_color' ] );

        if ( isset( $_POST[ 'ms_author_color' ] ) )
            $this->save_text_meta( 'ms_author_color', $_POST[ 'ms_author_color' ] );

        if ( isset( $_POST[ 'ms_date_color' ] ) )
            $this->save_text_meta( 'ms_date_color', $_POST[ 'ms_date_color' ] );

        if ( isset( $_POST[ 'ms_nav_bg_color' ] ) )
            $this->save_text_meta( 'ms_nav_bg_color', $_POST[ 'ms_nav_bg_color' ] );

        if ( isset( $_POST[ 'ms_nav_bg_hover_color' ] ) )
            $this->save_text_meta( 'ms_nav_bg_hover_color', $_POST[ 'ms_nav_bg_hover_color' ] );

        if ( isset( $_POST[ 'ms_nav_color' ] ) )
            $this->save_text_meta( 'ms_nav_color', $_POST[ 'ms_nav_color' ] );

        if ( isset( $_POST[ 'ms_nav_font_size' ] ) )
            $this->save_text_meta( 'ms_nav_font_size', $_POST[ 'ms_nav_font_size' ] );

        if ( isset( $_POST[ 'ms_nav_font_weight' ] ) )
            $this->save_text_meta( 'ms_nav_font_weight', $_POST[ 'ms_nav_font_weight' ] );

        if ( isset( $_POST[ 'ms_dot_shape' ] ) )
            $this->save_text_meta( 'ms_dot_shape', $_POST[ 'ms_dot_shape' ] );

        if ( isset( $_POST[ 'ms_dot_color' ] ) )
            $this->save_text_meta( 'ms_dot_color', $_POST[ 'ms_dot_color' ] );

        if ( isset( $_POST[ 'ms_dot_active_color' ] ) )
            $this->save_text_meta( 'ms_dot_active_color', $_POST[ 'ms_dot_active_color' ] );
    }

    private function save_text_meta( $meta_key, $meta_value )
    {
        $post_ID = $this->post_ID;
        $sanitized_value = sanitize_text_field( wp_unslash( $meta_value ) );

        update_post_meta( $post_ID, $meta_key, $sanitized_value );
    }

    private function save_int_meta( $meta_key, $meta_value )
    {
        $post_ID = $this->post_ID;
        $absint_value = absint( $meta_value );

        update_post_meta( $post_ID, $meta_key, $absint_value );
    }
}

new Meta_Boxes();