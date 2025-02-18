<?php

final class Meta_Boxes
{
    private $post_ID;

    private $optional_post_meta = [
        'ms_items_to_show'                          => 'int',
        'ms_items_to_display_sm'                    => 'int',
        'ms_items_to_display_md'                    => 'int',
        'ms_items_to_display_lg'                    => 'int',
        'ms_items_to_display_xl'                    => 'int',
        'ms_animation_entrance'                     => 'text',
        'ms_animation_exit'                         => 'text',
        'ms_feature_img_size'                       => 'text',
        'ms_feature_img_ratio'                      => 'text',
        'ms_order'                                  => 'text',
        'ms_show_comments'                          => 'text',
        'ms_show_category'                          => 'text',
        'ms_show_tags'                              => 'text',
        'ms_show_excerpt'                           => 'text',
        'ms_excerpt_length'                         => 'text',
        'ms_read_more_text'                         => 'text',
        'ms_show_author'                            => 'text',
        'ms_show_avatar'                            => 'text',
        'ms_show_date'                              => 'text',
        'ms_margin_right'                           => 'int',
        'ms_loop'                                   => 'text',
        'ms_center'                                 => 'text',
        'ms_show_nav'                               => 'text',
        'ms_show_nav_sm'                            => 'text',
        'ms_nav_position'                           => 'text',
        'ms_nav_position_sm'                        => 'text',
        'ms_nav_radius'                             => 'int',
        'ms_show_dots'                              => 'text',
        'ms_show_dots_sm'                           => 'text',
        'ms_show_dots_foreach'                      => 'text',
        'ms_autoplay'                               => 'text',
        'ms_autoplay_timeout'                       => 'int',
        'ms_autoplay_hover_pause'                   => 'text',
        'ms_autoplay_speed'                         => 'int',
        'ms_bg_color'                               => 'text',
        'ms_comment_icon_color'                     => 'text',
        'ms_meta_fs'                                => 'int',
        'ms_comment_fw'                             => 'int',
        'ms_comment_color'                          => 'text',
        'ms_category_icon_color'                    => 'text',
        'ms_category_fw'                            => 'int',
        'ms_category_color'                         => 'text',
        'ms_category_bg_color'                      => 'text',
        'ms_date_icon_color'                        => 'text',
        'ms_date_fw'                                => 'int',
        'ms_date_color'                             => 'text',
        // 'ms_tag_icon_color'                         => 'text',
        // 'ms_tag_fs'                                 => 'int',
        // 'ms_tag_fw'                                 => 'int',
        // 'ms_tag_color'                              => 'text',
        // 'ms_tag_bg_color'                           => 'text',
        'ms_title_fs'                               => 'int',
        'ms_title_fw'                               => 'int',
        'ms_title_color'                            => 'text',
        'ms_excerpt_fs'                             => 'int',
        'ms_excerpt_fw'                             => 'int',
        'ms_excerpt_color'                          => 'text',
        'ms_read_more_color'                        => 'text',
        'ms_author_fs'                              => 'int',
        'ms_author_fw'                              => 'int',
        'ms_author_color'                           => 'text',
        'ms_stock_fs'                               => 'int',
        'ms_stock_fw'                               => 'int',
        'ms_stock_color'                            => 'text',
        'ms_sales_fs'                               => 'int',
        'ms_sales_fw'                               => 'int',
        'ms_sales_color'                            => 'text',
        'ms_review_fs'                              => 'int',
        'ms_review_fw'                              => 'int',
        'ms_review_color'                           => 'text',
        'ms_active_price_fs'                        => 'int',
        'ms_active_price_fw'                        => 'int',
        'ms_active_price_color'                     => 'text',
        'ms_prev_price_fs'                          => 'int',
        'ms_prev_price_fw'                          => 'int',
        'ms_prev_price_color'                       => 'text',
        'ms_woo_button_fs'                          => 'int',
        'ms_woo_button_fw'                          => 'int',
        'ms_woo_button_color'                       => 'text',
        'ms_woo_button_bg_color'                    => 'text',
        'ms_min_height'                             => 'int',
        'ms_horizontal_align'                       => 'text',
        'ms_verticle_align'                         => 'text',
        'ms_nav_bg_color'                           => 'text',
        'ms_nav_bg_hover_color'                     => 'text',
        'ms_nav_color'                              => 'text',
        'ms_nav_fs'                                 => 'int',
        'ms_nav_fw'                                 => 'int',
        'ms_dot_shape'                              => 'text',
        'ms_dot_color'                              => 'text',
        'ms_dot_active_color'                       => 'text'
    ];

    public function __construct()
    {
        add_action( 'add_meta_boxes', [ $this, 'add_meta_boxes' ] );

        add_action( 'edit_form_advanced', [ $this, 'add_nonce_field' ] );

        add_action( 'save_post', [ $this, 'meta_save' ] );
    }

    public function add_meta_boxes()
    {
        add_meta_box( 'post_meta_panel_id', 'Manage Slider', [ $this, 'post_meta_panel' ], 'my_slider', 'normal', 'high' );
        add_meta_box( 'shortcode_panel_id', 'Shortcode', [ $this, 'shortcode_panel' ], 'my_slider', 'side', 'low' );
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
        // phpcs:disable WordPress.Security.NonceVerification.Missing
        if ( ! empty( $_POST[ 'post_ID' ] ) )
            $this->post_ID = absint( $_POST[ 'post_ID' ] );
        // phpcs:enable
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

        $this->set_post_ID();

        $post_ID = $this->post_ID;

        // return if post id is not set
        if ( ! isset( $post_ID ) )
            return;

        $post_type = get_post_type( $post_ID );

        // return if post type is not my_slider
        if ( $post_type != 'my_slider' )
            return;

        // return if "ms_post_type" is empty or set to "product" when WooCommerce isn't active
        if ( empty( $_POST[ 'ms_post_type' ] ) || ( $_POST[ 'ms_post_type' ] == 'product' && ! MS_WC_IS_ACTIVE ) )
            return;

        $post_type = sanitize_text_field( wp_unslash( $_POST[ 'ms_post_type' ] ) );
        $this->save_text_meta( 'ms_post_type', $post_type );

        $query_type = '';

        if ( isset( $_POST[ 'ms_query_type' ] ) )
            $query_type = sanitize_text_field( wp_unslash( $_POST[ 'ms_query_type' ] ) );

        $this->save_text_meta( 'ms_query_type', $query_type );

        $query = '';

        if ( isset( $_POST[ 'ms_query' ] ) ) {
            if ( is_array( $_POST[ 'ms_query' ] ) ) {
                // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.MissingUnslash, WordPress.Security.ValidatedSanitizedInput.InputNotSanitized
                $unslashed_array = array_map( 'wp_unslash', $_POST[ 'ms_query' ] );
                $sanitized_array = array_map( 'absint', $unslashed_array );

                $query = implode( ',', $sanitized_array );

            } elseif ( is_string( $_POST[ 'ms_query' ] ) ) {
                $query = sanitize_text_field( wp_unslash( $_POST[ 'ms_query' ] ) );
            }
        }

        $this->save_text_meta( 'ms_query', $query );

        foreach( $this->optional_post_meta as $meta_key => $meta_value_type )
            $this->save_meta( $meta_key, $meta_value_type );

    }

    private function save_meta( $meta_key, $meta_value_type )
    {
        // phpcs:disable WordPress.Security.NonceVerification.Missing
        if ( ! isset( $_POST[ $meta_key ] ) || $_POST[ $meta_key ] === '' )
            return;

        $meta_value = sanitize_text_field( wp_unslash( $_POST[ $meta_key ] ) );

        if ( $meta_value_type === 'text' )
            $this->save_text_meta( $meta_key, $meta_value );

        if ( $meta_value_type === 'int' )
            $this->save_int_meta( $meta_key, $meta_value );
        // phpcs:enable
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