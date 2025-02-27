<?php

final class Meta_Boxes
{
    private $post_ID;

    private $optional_post_meta = [
        'cs_items_to_show'                          => 'int',
        'cs_items_to_display_sm'                    => 'int',
        'cs_items_to_display_md'                    => 'int',
        'cs_items_to_display_lg'                    => 'int',
        'cs_items_to_display_xl'                    => 'int',
        'cs_animation_entrance'                     => 'text',
        'cs_animation_exit'                         => 'text',
        'cs_feature_img_size'                       => 'text',
        'cs_feature_img_ratio'                      => 'text',
        'cs_order'                                  => 'text',
        'cs_show_comments'                          => 'text',
        'cs_show_category'                          => 'text',
        'cs_show_tags'                              => 'text',
        'cs_show_excerpt'                           => 'text',
        'cs_excerpt_length'                         => 'text',
        'cs_read_more_text'                         => 'text',
        'cs_show_author'                            => 'text',
        'cs_show_avatar'                            => 'text',
        'cs_show_date'                              => 'text',
        'cs_margin_right'                           => 'int',
        'cs_loop'                                   => 'text',
        'cs_center'                                 => 'text',
        'cs_show_nav'                               => 'text',
        'cs_show_nav_sm'                            => 'text',
        'cs_nav_position'                           => 'text',
        'cs_nav_position_sm'                        => 'text',
        'cs_nav_radius'                             => 'int',
        'cs_show_dots'                              => 'text',
        'cs_show_dots_sm'                           => 'text',
        'cs_show_dots_foreach'                      => 'text',
        'cs_autoplay'                               => 'text',
        'cs_autoplay_timeout'                       => 'int',
        'cs_autoplay_hover_pause'                   => 'text',
        'cs_autoplay_speed'                         => 'int',
        'cs_bg_color'                               => 'text',
        'cs_comment_icon_color'                     => 'text',
        'cs_meta_fs'                                => 'int',
        'cs_comment_fw'                             => 'int',
        'cs_comment_color'                          => 'text',
        'cs_category_icon_color'                    => 'text',
        'cs_category_fw'                            => 'int',
        'cs_category_color'                         => 'text',
        'cs_category_bg_color'                      => 'text',
        'cs_date_icon_color'                        => 'text',
        'cs_date_fw'                                => 'int',
        'cs_date_color'                             => 'text',
        // 'cs_tag_icon_color'                         => 'text',
        // 'cs_tag_fs'                                 => 'int',
        // 'cs_tag_fw'                                 => 'int',
        // 'cs_tag_color'                              => 'text',
        // 'cs_tag_bg_color'                           => 'text',
        'cs_title_fs'                               => 'int',
        'cs_title_fw'                               => 'int',
        'cs_title_color'                            => 'text',
        'cs_excerpt_fs'                             => 'int',
        'cs_excerpt_fw'                             => 'int',
        'cs_excerpt_color'                          => 'text',
        'cs_read_more_color'                        => 'text',
        'cs_author_fs'                              => 'int',
        'cs_author_fw'                              => 'int',
        'cs_author_color'                           => 'text',
        'cs_stock_fs'                               => 'int',
        'cs_stock_fw'                               => 'int',
        'cs_stock_color'                            => 'text',
        'cs_sales_fs'                               => 'int',
        'cs_sales_fw'                               => 'int',
        'cs_sales_color'                            => 'text',
        'cs_review_fs'                              => 'int',
        'cs_review_fw'                              => 'int',
        'cs_review_color'                           => 'text',
        'cs_active_price_fs'                        => 'int',
        'cs_active_price_fw'                        => 'int',
        'cs_active_price_color'                     => 'text',
        'cs_prev_price_fs'                          => 'int',
        'cs_prev_price_fw'                          => 'int',
        'cs_prev_price_color'                       => 'text',
        'cs_woo_button_fs'                          => 'int',
        'cs_woo_button_fw'                          => 'int',
        'cs_woo_button_color'                       => 'text',
        'cs_woo_button_bg_color'                    => 'text',
        'cs_min_height'                             => 'int',
        'cs_horizontal_align'                       => 'text',
        'cs_verticle_align'                         => 'text',
        'cs_nav_bg_color'                           => 'text',
        'cs_nav_bg_hover_color'                     => 'text',
        'cs_nav_color'                              => 'text',
        'cs_nav_fs'                                 => 'int',
        'cs_nav_fw'                                 => 'int',
        'cs_dot_shape'                              => 'text',
        'cs_dot_color'                              => 'text',
        'cs_dot_active_color'                       => 'text'
    ];

    public function __construct()
    {
        add_action( 'add_meta_boxes', [ $this, 'add_meta_boxes' ] );

        add_action( 'edit_form_advanced', [ $this, 'add_nonce_field' ] );

        add_action( 'save_post', [ $this, 'meta_save' ] );
    }

    public function add_meta_boxes()
    {
        add_meta_box( 'post_meta_panel_id', 'Manage Slider', [ $this, 'post_meta_panel' ], 'commerce_slider', 'normal', 'high' );
        add_meta_box( 'shortcode_panel_id', 'Shortcode', [ $this, 'shortcode_panel' ], 'commerce_slider', 'side', 'low' );
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
        wp_nonce_field( 'cs_meta_save_nonce', 'cs_nonce' );
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
        if ( ! isset( $_POST[ 'cs_nonce' ] ) )
            return;

        $cs_nonce = sanitize_text_field( wp_unslash( $_POST[ 'cs_nonce' ] ) );

        // return if nonce is invalid
        if ( ! wp_verify_nonce( $cs_nonce, 'cs_meta_save_nonce' ) )
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

        // return if post type is not commerce_slider
        if ( $post_type != 'commerce_slider' )
            return;

        // return if "cs_post_type" is empty or set to "product" when WooCommerce isn't active
        if ( empty( $_POST[ 'cs_post_type' ] ) || ( $_POST[ 'cs_post_type' ] == 'product' && ! CS_WC_IS_ACTIVE ) )
            return;

        $post_type = sanitize_text_field( wp_unslash( $_POST[ 'cs_post_type' ] ) );
        $this->save_text_meta( 'cs_post_type', $post_type );

        $query_type = '';

        if ( isset( $_POST[ 'cs_query_type' ] ) )
            $query_type = sanitize_text_field( wp_unslash( $_POST[ 'cs_query_type' ] ) );

        $this->save_text_meta( 'cs_query_type', $query_type );

        $query = '';

        if ( isset( $_POST[ 'cs_query' ] ) ) {
            if ( is_array( $_POST[ 'cs_query' ] ) ) {
                // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.MissingUnslash, WordPress.Security.ValidatedSanitizedInput.InputNotSanitized
                $unslashed_array = array_map( 'wp_unslash', $_POST[ 'cs_query' ] );
                $sanitized_array = array_map( 'absint', $unslashed_array );

                $query = implode( ',', $sanitized_array );

            } elseif ( is_string( $_POST[ 'cs_query' ] ) ) {
                $query = sanitize_text_field( wp_unslash( $_POST[ 'cs_query' ] ) );
            }
        }

        $this->save_text_meta( 'cs_query', $query );

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