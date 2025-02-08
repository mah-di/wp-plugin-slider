<?php

function ms_the_excerpt( $word_count = 30, $read_more_text = 'Read More' )
{
    global $post;

    $excerpt = has_excerpt( $post ) ? get_the_excerpt( $post ) : wp_strip_all_tags( get_the_content( null, false, $post ) );

    $trimmed_excerpt = wp_trim_words( $excerpt, $word_count );

    $read_more_link = sprintf(
        ' <a href="%s" class="ms-read-more">%s</a>',
        esc_url(get_permalink($post)),
        esc_html($read_more_text)
    );

    echo $trimmed_excerpt . $read_more_link;
}

function ms_get_all_tags()
{
    $tags = [
        'post'          => ms_get_tags( 'post' ),
        'product'       => ms_get_tags( 'product' ),
        'my_slide'      => ms_get_tags( 'my_slide' )
    ];

    return $tags;
}

function ms_get_tags( $post_type )
{
    $tags = get_terms( [
        'taxonomy'      => $post_type . '_tag',
        'hide_empty'    => true
    ] );

    if ( is_wp_error( $tags ) )
        $tags = [];

    return $tags;
}

function ms_get_cats( $post_type )
{
    $tax = $post_type == 'post' ? "category" : "{$post_type}_cat";

    $cats = get_terms( [
        'taxonomy'      => $tax,
        'hide_empty'    => true
    ] );
    
    if ( is_wp_error( $cats ) )
        $cats = [];
    
    return $cats;
}

function ms_get_the_category( $post_id = false, $post_type ) {
    if ( $post_type == 'post' )
        $tax = 'category';
    else
        $tax = "{$post_type}_cat";

	$categories = get_the_terms( $post_id, $tax );

    if ( ! $categories || is_wp_error( $categories ) ) {
		$categories = [];
	}

	$categories = array_values( $categories );

	foreach ( array_keys( $categories ) as $key ) {
		_make_cat_compat( $categories[ $key ] );
	}

	return apply_filters( 'get_the_categories', $categories, $post_id );
}

function ms_get_the_tags( $post_ID = 0, $post_type ) {
    $tax = "{$post_type}_tag";

	$terms = get_the_terms( $post_ID, $tax );

	return apply_filters( 'get_the_tags', $terms );
}

function ms_get_meta( int $post_ID, string $meta_key, ?string $default_val = null )
{
    $val = get_post_meta( $post_ID, $meta_key, true );

    if ( empty( $val ) )
        $val = $default_val;

    return trim( $val );
}