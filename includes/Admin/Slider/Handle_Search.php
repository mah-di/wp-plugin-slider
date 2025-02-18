<?php

class Handle_Search
{
    public function __construct()
    {
        add_action( 'wp_ajax_custom_search', [ $this, 'request_handler' ] );
    }

    public function request_handler()
    {
        if ( ! isset( $_POST[ 'security' ] ) )
            return;

        $nonce          = sanitize_text_field( wp_unslash( $_POST[ 'security' ] ) );

        if ( ! wp_verify_nonce( $nonce, 'ms-ajax-nonce' ) )
            return;

        $type           = isset( $_POST[ 'type' ] )             ? sanitize_text_field( wp_unslash( $_POST[ 'type' ] ) )           : '';
        $post_type      = isset( $_POST[ 'postType' ] )         ? sanitize_text_field( wp_unslash( $_POST[ 'postType' ] ) )       : '';
        $query_type     = isset( $_POST[ 'queryType' ] )        ? sanitize_text_field( wp_unslash( $_POST[ 'queryType' ] ) )      : '';

        if ( $type == 'fetch_search' )
            $this->search_handler( $post_type, $query_type );

        elseif ( $type == 'fetch_query' )
            $this->query_handler( $post_type, $query_type );
    }

    private function search_handler( $post_type, $query_type )
    {
        // phpcs:ignore WordPress.Security.NonceVerification.Missing
        $search_query   = isset( $_POST[ 'query' ] )            ? sanitize_text_field( wp_unslash( $_POST[ 'query' ] ) )          : '';

        if ( $query_type == 'id' && ( empty( $search_query ) || strlen( $search_query ) < 3 ) ) {
            wp_send_json( [ 'results' => [] ] );

            return;
        }

        $args = [
            's'                     => $search_query,
            'posts_per_page'        => 10,
            'post_status'           => 'publish',
            'post_type'             => $post_type,
            'order'                 => 'DESC'
        ];

        $taxes = null;

        if ( in_array( $query_type, [ 'category', 'product_cat', 'post_tag', 'product_tag', 'my_slide_tag' ] ) ) {
            $taxes = ms_get_terms( $query_type );

        } elseif ( $query_type == 'sku' ) {
            $args[ 'meta_query' ]   = [ [
                    'key'           => '_sku',
                    'value'         => $search_query,
                    'compare'       => 'EXISTS'
                ] ];

            unset( $args[ 's' ] );

        } elseif ( $query_type == 'featured' ) {
            $featured = get_term_by( 'name', 'featured', 'product_visibility' );

            $args[ 'tax_query' ]   = [ [
                    'taxonomy' => 'product_visibility',
                    'field'    => 'term_id',
                    'terms'    => $featured->term_id,
                    'operator' => 'IN'
                ] ];

        } elseif ( $query_type == 'onsale' ) {
            $args[ 'post__in' ] = wc_get_product_ids_on_sale();

        } elseif ( in_array( $query_type, [ 'top_rated', 'best_selling' ] ) ) {
            $meta_key           = ( $query_type == 'top_rated' )            ? '_wc_average_rating'         : 'total_sales';

            $args[ 'orderby' ]  = [
                'meta_value_num' => 'DESC'
            ];

            $args[ 'meta_query' ] = [ [
                'key'           => $meta_key,
                'value'         => 0,
                'compare'       => '>',
                'type'          => 'NUMERIC'
            ] ];

        }

        $results = [];

        if ( isset( $taxes ) ) {

            foreach ( $taxes as $tax ) {
                $results[]  = [
                    'id'        => $tax->term_id,
                    'name'      => $tax->name
                ];
            }

        } else {
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) {

                while ( $query->have_posts() ) {
                    $query->the_post();

                    $name = get_the_title();

                    if ( $query_type == 'sku' ) {
                        $sku = get_post_meta( get_the_ID(), '_sku', true );
                        $name = "{$sku} | {$name}";
                    }

                    $results[]  = [
                        'id'    => get_the_ID(),
                        'name'  => $name,
                    ];

                }

            }

            wp_reset_postdata();

        }

        wp_send_json( [
            'results'   => $results
        ] );
    }

    private function query_handler( $post_type, $query_type )
    {
        // phpcs:ignore WordPress.Security.NonceVerification.Missing
        $query          = isset( $_POST[ 'query' ] )             ? sanitize_text_field( wp_unslash( $_POST[ 'query' ] ) )          : '';

        $query_IDs      = explode( ',', $query );

        if ( in_array( $query_type, [ 'category', 'product_cat', 'post_tag', 'product_tag', 'my_slide_tag' ] ) ) {
            $rows = get_terms([
                'taxonomy'  => $query_type,
                'include'   => $query_IDs
            ]);

        } else {
            $rows = get_posts([
                'post__in'          => $query_IDs,
                'post_type'         => $post_type,
                'posts_per_page'    => -1
            ]);
        }

        $results        = [];

        foreach ( $rows as $row ) {
            $id             = isset( $row->ID )             ? $row->ID              : $row->term_id;
            $name           = isset( $row->post_title )     ? $row->post_title      : $row->name;

            if ( $query_type == 'sku' ) {
                $sku            = get_post_meta( $id, '_sku', true );
                $name           = "{$sku} | {$name}";
            }

            $results[] = [
                'id'    => $id,
                'name'  => $name
            ];
        }

        wp_send_json( [
            'results'   => $results
        ] );
    }

}

new Handle_Search();
