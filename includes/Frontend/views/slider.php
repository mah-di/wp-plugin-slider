<?php 

$ms_feature_img_size = get_post_meta( $ms_post_ID, 'ms_feature_img_size', true );
$ms_show_comments = get_post_meta( $ms_post_ID, 'ms_show_comments', true );
$ms_show_category = get_post_meta( $ms_post_ID, 'ms_show_category', true );
$ms_show_tags = get_post_meta( $ms_post_ID, 'ms_show_tags', true );
$ms_show_excerpt = get_post_meta( $ms_post_ID, 'ms_show_excerpt', true );
$ms_show_author = get_post_meta( $ms_post_ID, 'ms_show_author', true );
$ms_show_avatar = get_post_meta( $ms_post_ID, 'ms_show_avatar', true );
$ms_show_date = get_post_meta( $ms_post_ID, 'ms_show_date', true );

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
                <span class="ms-cat-heading ms-cat-icon">Category : </span>
                <?php
                $post_ID = get_the_ID();

                $cats = get_the_category( $post_ID );
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

                $tags = get_the_tags( $post_ID );

                if ( $tags ) :
                ?>

                    <span class="ms-tag-heading ms-tag-icon">Tags : </span>

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
            <div class="ms-comments">

                <span class="ms-comment-icon">Comments : </span>

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
                <?php echo get_the_excerpt() ?>
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