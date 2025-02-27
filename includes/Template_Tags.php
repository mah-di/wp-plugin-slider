<?php

function cs_the_excerpt( $word_count = 30, $read_more_text = 'Read More' )
{
    global $post;

    $excerpt = has_excerpt( $post ) ? get_the_excerpt( $post ) : wp_strip_all_tags( get_the_content( null, false, $post ) );

    $trimmed_excerpt = wp_trim_words( $excerpt, $word_count );

    $read_more_link = sprintf(
        ' <a href="%s" class="cs-read-more">%s</a>',
        esc_url( get_permalink( $post ) ),
        esc_html( $read_more_text )
    );

    echo esc_html( $trimmed_excerpt ) . wp_kses_post( $read_more_link );
}

function cs_get_terms( $taxonomy )
{
    $terms = get_terms( [
        'taxonomy'      => $taxonomy,
        'hide_empty'    => true
    ] );

    if ( is_wp_error( $terms ) )
        $terms = [];

    return $terms;
}

function cs_get_the_terms( $post_ID = false, $taxonomy )
{
	$terms = get_the_terms( $post_ID, $taxonomy );

    if ( ! $terms || is_wp_error( $terms ) )
        $terms = [];

    return $terms;
}

function cs_get_meta( int $post_ID, string $meta_key, int|string $default_val = '' )
{
    $val = get_post_meta( $post_ID, $meta_key, true );

    if ( ! $val )
        $val = $default_val;

    return trim( $val );
}
