<?php

class Handle_Search
{
    public function __construct()
    {
        add_action( 'wp_ajax_custom_search', [ $this, 'request_handler' ] );
    }

    public function request_handler()
    {
        $type           = isset( $_POST[ 'type' ] ) ? sanitize_text_field( $_POST[ 'type' ] ) : '';
        $post_type      = isset( $_POST[ 'postType' ] ) ? sanitize_text_field( $_POST[ 'postType' ] ) : '';
        $query_type     = isset( $_POST[ 'queryType' ] ) ? sanitize_text_field( $_POST[ 'queryType' ] ) : '';

        if ( $type == 'fetch_search' )
            $this->search_handler( $post_type, $query_type );

        elseif ( $type == 'fetch_query' )
            $this->query_handler( $post_type, $query_type );
    }

    private function search_handler( $post_type, $query_type )
    {
        $search_query = isset( $_POST[ 'query' ] ) ? sanitize_text_field( $_POST[ 'query' ] ) : '';

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

        if ( $query_type == 'post_tag' ) {
            $taxes = ms_get_tags( 'post' );

        } elseif ( $query_type == 'product_tag' ) {
            $taxes = ms_get_tags( 'product' );

        } elseif ( $query_type == 'my_slide_tag' ) {
            $taxes = ms_get_tags( 'my_slide' );

        } elseif ( $query_type == 'category' ) {
            $taxes = ms_get_cats( 'post' );

        } elseif ( $query_type == 'product_cat' ) {
            $taxes = ms_get_cats( 'product' );

        } elseif ( $query_type == 'sku' ) {
            $args[ 'meta_query' ]   = [ [
                    'key'           => '_sku',
                    'value'         => $search_query,
                    'compare'       => 'LIKE'
                ] ];

            unset( $args[ 's' ] );

        } elseif ( $query_type == 'featured' ) {
            $args[ 'tax_query' ]   = [ [
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                    'operator' => 'IN'
                ] ];

        } elseif ( $query_type == 'top_rated' ) {
            $args[ 'meta_key' ] = '_wc_average_rating';

            $args[ 'orderby' ]  = 'meta_value_num';

        }

        $results = [];

        if ( $taxes ) {

            foreach ( $taxes as $tax ) {
                $results[]  = [
                    'id'    => $tax->term_id,
                    'name'  => $tax->name
                ];
            }

        } else {
            $query = new WP_Query( $args );

            if ( $query->have_posts() ) {

                while ( $query->have_posts() ) {
                    $query->the_post();

                    $results[]  = [
                        'id'    => get_the_ID(),
                        'name'  => ( $query_type == 'sku' ? get_post_meta( get_the_ID(), '_sku', true ) . ' | ': '' ) . get_the_title(),
                    ];

                }

            }

            wp_reset_postdata();

        }

        wp_send_json( [ 'results' => $results ] );
    }

    private function query_handler( $post_type, $query_type )
    {
        $query = isset( $_POST[ 'query' ] ) ? sanitize_text_field( $_POST[ 'query' ] ) : '';

        $query_IDs = explode( ',', $query );

        if ( $query_type == 'category' ) {
            $rows = get_categories([
                'include' => $query_IDs,
            ]);

        } elseif ( $query_type == 'product_cat' ) {
            $rows = get_terms([
                'taxonomy'  => $query_type,
                'include'   => $query_IDs
            ]);

        } elseif ( $query_type == 'post_tag' ) {
            $rows = get_terms([
                'taxonomy'  => $query_type,
                'include'   => $query_IDs
            ]);

        } elseif ( $query_type == 'product_tag' ) {
            $rows = get_terms([
                'taxonomy'  => $query_type,
                'include'   => $query_IDs
            ]);

        } elseif ( $query_type == 'my_slide_tag' ) {
            $rows = get_terms([
                'taxonomy'  => $query_type,
                'include'   => $query_IDs
            ]);

        } elseif ( in_array( $query_type , [ 'id', 'sku' ]) ) {
            $rows = get_posts([
                'post__in'          => $query_IDs,
                'post_type'         => $post_type,
                'posts_per_page'    => -1
            ]);
        }

        $results = [];

        foreach ( $rows as $row ) {
            $results[] = [
                'id'    => isset( $row->ID ) ? $row->ID : $row->term_id,
                'name'  => ( $query_type == 'sku' ? get_post_meta( $row->ID, '_sku', true ) . ' | ' : '' ) . ( isset( $row->post_title ) ? $row->post_title : $row->name )
            ];
        }

        wp_send_json([
            'results' => $results
        ]);
    }

}

new Handle_Search();
