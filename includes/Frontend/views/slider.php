<?php 

$posts = new WP_Query( $args );

if ( $posts->have_posts() ):

?>
<div class="owl-carousel owl-theme">

    <?php while ( $posts->have_posts() ): $posts->the_post() ?>

    <div class="ms-card">
        <div class="ms-card-header">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', [ 'class' => 'img-fluid' ] ); } ?>
        </div>
        <div class="ms-card-body">
            
            <div class="ms-cat-wrapper">
                <span class="ms-cat-heading">Category : </span>
                <?php
                $post_ID = get_the_ID();

                $cats = get_the_category( $post_ID );
                foreach ( $cats as $cat ): ?>
                
                    <a href="<?php echo esc_url( get_category_link( $cat ) ); ?>" class="ms-cat">
                        <?php echo $cat->name; ?>
                    </a>
                
                <?php endforeach; ?>
            </div>

            <div class="ms-tag-wrapper">

                <?php

                $tags = get_the_tags( $post_ID );

                if ( $tags ) :
                ?>

                    <span class="ms-tag-heading">Tags : </span>

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

            <h4>
                <?php the_title() ?>
            </h4>
            

                <?php the_excerpt() ?>

            
            <div class="ms-author">
                <div class="ms-author-info">
                    <?php 
                        $author_ID = get_the_author_meta( 'ID' );
                        echo get_avatar( $author_ID, 24 );    
                    ?>
                    <h5>
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
                    <small><?php echo get_the_date( 'F j, Y' ) ?></small>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; 

    wp_reset_postdata();

    ?>

</div>

<?php endif;