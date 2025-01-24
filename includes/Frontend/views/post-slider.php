<?php 

$ms_feature_img_size        = get_post_meta( $ms_post_ID, 'ms_feature_img_size', true );
$ms_show_comments           = get_post_meta( $ms_post_ID, 'ms_show_comments', true );
$ms_show_category           = get_post_meta( $ms_post_ID, 'ms_show_category', true );
$ms_show_tags               = get_post_meta( $ms_post_ID, 'ms_show_tags', true );
$ms_show_excerpt            = get_post_meta( $ms_post_ID, 'ms_show_excerpt', true );
$ms_excerpt_length          = get_post_meta( $ms_post_ID, 'ms_excerpt_length', true );
$ms_read_more_text          = get_post_meta( $ms_post_ID, 'ms_read_more_text', true );
$ms_show_author             = get_post_meta( $ms_post_ID, 'ms_show_author', true );
$ms_show_avatar             = get_post_meta( $ms_post_ID, 'ms_show_avatar', true );
$ms_show_date               = get_post_meta( $ms_post_ID, 'ms_show_date', true );

$posts = new WP_Query( $args );

if ( $posts->have_posts() ):

?>
<div
    id="my-slider-<?php echo $ms_post_ID ?>"
    class="owl-carousel owl-theme"
>

    <?php while ( $posts->have_posts() ): $posts->the_post() ?>

    <div class="ms-card">
        <div class="ms-card-header">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( $ms_feature_img_size ); } ?>
        </div>
        <div class="ms-card-body">
            
            <?php if ( $ms_show_category == 'show' ): ?>
            <div class="ms-cat-wrapper">
                <span class="ms-cat-heading ms-cat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M384 480l48 0c11.4 0 21.9-6 27.6-15.9l112-192c5.8-9.9 5.8-22.1 .1-32.1S555.5 224 544 224l-400 0c-11.4 0-21.9 6-27.6 15.9L48 357.1 48 96c0-8.8 7.2-16 16-16l117.5 0c4.2 0 8.3 1.7 11.3 4.7l26.5 26.5c21 21 49.5 32.8 79.2 32.8L416 144c8.8 0 16 7.2 16 16l0 32 48 0 0-32c0-35.3-28.7-64-64-64L298.5 96c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l23.7 0L384 480z"/></svg>
                </span>

                <?php
                $post_ID = get_the_ID();

                $cats = ms_get_the_category( $post_ID, $ms_post_type );
                foreach ( $cats as $cat ): ?>
                
                    <a href="<?php echo esc_url( get_category_link( $cat ) ); ?>" class="ms-cat">
                        <?php echo $cat->name; ?>
                    </a>
                
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if ( $ms_show_tags == 'show' ): ?>
            <div class="ms-tag-wrapper">

                <?php

                $tags = ms_get_the_tags( $post_ID, $ms_post_type );

                if ( $tags ) :
                ?>

                    <span class="ms-tag-heading ms-tag-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M345 39.1L472.8 168.4c52.4 53 52.4 138.2 0 191.2L360.8 472.9c-9.3 9.4-24.5 9.5-33.9 .2s-9.5-24.5-.2-33.9L438.6 325.9c33.9-34.3 33.9-89.4 0-123.7L310.9 72.9c-9.3-9.4-9.2-24.6 .2-33.9s24.6-9.2 33.9 .2zM0 229.5L0 80C0 53.5 21.5 32 48 32l149.5 0c17 0 33.3 6.7 45.3 18.7l168 168c25 25 25 65.5 0 90.5L277.3 442.7c-25 25-65.5 25-90.5 0l-168-168C6.7 262.7 0 246.5 0 229.5zM144 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>
                    </span>

                    <?php

                    foreach ( $tags as $tag ): ?>
                    
                        <a href="<?php echo esc_url( get_category_link( $tag ) ); ?>" class="ms-tag">
                            <?php echo $tag->name; ?>
                        </a>
                
                    <?php
                    endforeach;
                endif;
                ?>
            </div>
            <?php endif; ?>

            <?php if ( $ms_show_comments == 'show' ): ?>
            <div class="ms-comment-wrapper">

                <span class="ms-comment-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z"/></svg>
                </span>

                <span class="ms-comment">

                    <?php echo get_comments_number(); ?>

                </span>

            </div>
            <?php endif; ?>

            <h4 class="ms-title">
                <?php the_title() ?>
            </h4>

            <?php if ( $ms_show_excerpt == 'show' ): ?>
            <p class="ms-excerpt">
                <?php ms_the_excerpt( $ms_excerpt_length, $ms_read_more_text ) ?>
            </p>
            <?php endif; ?>

            <div class="ms-author">
                <div class="ms-author-info">
                    <?php 
                        $author_ID = get_the_author_meta( 'ID' );
                    ?>
                    
                    <?php if ( $ms_show_avatar == 'show' )
                        echo get_avatar( $author_ID, 24 );    
                    ?>

                    <?php if ( $ms_show_author == 'show' ): ?>
                    <h5 class="ms-author">
                        <?php 
                            $first_name = get_the_author_meta( 'first_name', $author_ID );
                            $last_name = get_the_author_meta( 'last_name', $author_ID );

                            if ( ! empty( $first_name ) || ! empty( $last_name ) ):
                                echo "{$first_name} {$last_name}";
                            else:
                                the_author();
                            endif;
                        ?>
                    </h5>
                    <?php endif ?>

                    <?php if ( $ms_show_date == 'show' ): ?>
                        <small class="ms-date"><?php echo get_the_date( 'F j, Y' ) ?></small>
                    <?php endif ?>
                </div>
            </div>

        </div>
    </div>

    <?php endwhile; 

    wp_reset_postdata();

    ?>

</div>

<?php endif;