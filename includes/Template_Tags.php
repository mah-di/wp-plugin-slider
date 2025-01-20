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