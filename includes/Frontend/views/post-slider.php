<?php 

$cs_feature_img_size        = cs_get_meta( $cs_post_ID, 'cs_feature_img_size', 'medium_large' );
$cs_show_comments           = cs_get_meta( $cs_post_ID, 'cs_show_comments', 'hide' );
$cs_show_category           = cs_get_meta( $cs_post_ID, 'cs_show_category', 'show' );
$cs_show_tags               = cs_get_meta( $cs_post_ID, 'cs_show_tags', 'hide' );
$cs_show_excerpt            = cs_get_meta( $cs_post_ID, 'cs_show_excerpt', 'show' );
$cs_excerpt_length          = cs_get_meta( $cs_post_ID, 'cs_excerpt_length', '25' );
$cs_read_more_text          = cs_get_meta( $cs_post_ID, 'cs_read_more_text', 'Read More' );
$cs_show_author             = cs_get_meta( $cs_post_ID, 'cs_show_author', 'show' );
$cs_show_avatar             = cs_get_meta( $cs_post_ID, 'cs_show_avatar', 'show' );
$cs_show_date               = cs_get_meta( $cs_post_ID, 'cs_show_date', 'show' );

$posts = new WP_Query( $args );

if ( $posts->have_posts() ):

?>
<div
    id="commerce-slider-<?php echo esc_html( $cs_post_ID ) ?>"
    class="owl-carousel owl-theme"
>

    <?php while ( $posts->have_posts() ): $posts->the_post() ?>

    <div class="cs-card">
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="cs-card-header">
            <?php the_post_thumbnail( $cs_feature_img_size ) ?>
        </div>
        <?php endif ?>

        <div class="cs-card-body">

            <div class="cs-meta-wrapper">
                <?php if ( $cs_show_category == 'show' ): ?>
                <div class="cs-cat-wrapper">
                    <svg class="cs-cat-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M384 480l48 0c11.4 0 21.9-6 27.6-15.9l112-192c5.8-9.9 5.8-22.1 .1-32.1S555.5 224 544 224l-400 0c-11.4 0-21.9 6-27.6 15.9L48 357.1 48 96c0-8.8 7.2-16 16-16l117.5 0c4.2 0 8.3 1.7 11.3 4.7l26.5 26.5c21 21 49.5 32.8 79.2 32.8L416 144c8.8 0 16 7.2 16 16l0 32 48 0 0-32c0-35.3-28.7-64-64-64L298.5 96c-17 0-33.3-6.7-45.3-18.7L226.7 50.7c-12-12-28.3-18.7-45.3-18.7L64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l23.7 0L384 480z"/></svg>

                    <?php
                    $post_ID = get_the_ID();

                    $cats = cs_get_the_terms( $post_ID, 'category' );
                    foreach ( $cats as $cat ): ?>

                        <a href="<?php echo esc_url( get_category_link( $cat ) ) ?>" class="cs-cat">
                            <?php echo esc_html( $cat->name ) ?>
                        </a>

                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <?php if ( $cs_show_comments == 'show' ): ?>
                <div class="cs-comment-wrapper">

                    <svg class="cs-comment-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z"/></svg>

                    <span class="cs-comment">

                        <?php echo esc_html( get_comments_number() . ' Comments' ); ?>

                    </span>

                </div>
                <?php endif; ?>

                <?php if ( $cs_show_date == 'show' ): ?>
                <div class="cs-date-wrapper">

                    <svg class="cs-date-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L64 64C28.7 64 0 92.7 0 128l0 16 0 48L0 448c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-256 0-48 0-16c0-35.3-28.7-64-64-64l-40 0 0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L152 64l0-40zM48 192l352 0 0 256c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256z"/></svg>

                    <span class="cs-date">
                        <?php echo get_the_date( 'F j, Y' ) ?>
                    </span>

                </div>
                <?php endif ?>

            </div>

            <h4 class="cs-title">
                <?php the_title() ?>
            </h4>

            <?php if ( $cs_show_excerpt == 'show' ): ?>
            <p class="cs-excerpt">
                <?php cs_the_excerpt( $cs_excerpt_length, $cs_read_more_text ) ?>
            </p>
            <?php endif; ?>

            <?php 
                $author_ID = get_the_author_meta( 'ID' );
            ?>
            
            <?php if ( $cs_show_author == 'show' ): ?>
            <div class="cs-author-wrapper">

                <?php if ( $cs_show_avatar == 'show' ) : ?>
                <div class="cs-author-img">
                    <?php echo get_avatar( $author_ID, 24 ); ?>    
                </div>
                <?php endif ?>

                <h5 class="cs-author">
                    <?php 
                        $first_name = get_the_author_meta( 'first_name', $author_ID );
                        $last_name = get_the_author_meta( 'last_name', $author_ID );

                        if ( ! empty( $first_name ) || ! empty( $last_name ) ):
                            echo esc_html( "{$first_name} {$last_name}" );
                        else:
                            the_author();
                        endif;
                    ?>
                </h5>

            </div>
            <?php endif ?>

        </div>
    </div>

    <?php endwhile; 

    wp_reset_postdata();

    ?>

</div>

<?php endif;