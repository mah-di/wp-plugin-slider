<?php

$ms_ID                      = get_the_ID();

$ms_query_type              = get_post_meta( $ms_ID, 'ms_query_type', true );
$ms_query                   = get_post_meta( $ms_ID, 'ms_query', true );

$ms_tags                    = ms_get_all_tags();

$ms_post_type               = get_post_meta( $ms_ID, 'ms_post_type', true );
$ms_tag_query               = get_post_meta( $ms_ID, 'ms_tag_query', true );
$ms_feature_img_size        = get_post_meta( $ms_ID, 'ms_feature_img_size', true );
$ms_feature_img_ratio       = get_post_meta( $ms_ID, 'ms_feature_img_ratio', true );
$ms_items_to_show           = get_post_meta( $ms_ID, 'ms_items_to_show', true );
$ms_items_to_display        = get_post_meta( $ms_ID, 'ms_items_to_display', true );
$ms_order                   = get_post_meta( $ms_ID, 'ms_order', true );
$ms_show_comments           = get_post_meta( $ms_ID, 'ms_show_comments', true );
$ms_show_category           = get_post_meta( $ms_ID, 'ms_show_category', true );
$ms_show_tags               = get_post_meta( $ms_ID, 'ms_show_tags', true );
$ms_show_excerpt            = get_post_meta( $ms_ID, 'ms_show_excerpt', true );
$ms_excerpt_length          = get_post_meta( $ms_ID, 'ms_excerpt_length', true );
$ms_read_more_text          = get_post_meta( $ms_ID, 'ms_read_more_text', true );
$ms_show_author             = get_post_meta( $ms_ID, 'ms_show_author', true );
$ms_show_avatar             = get_post_meta( $ms_ID, 'ms_show_avatar', true );
$ms_show_date               = get_post_meta( $ms_ID, 'ms_show_date', true );

$ms_margin_right            = get_post_meta( $ms_ID, 'ms_margin_right', true );
$ms_loop                    = get_post_meta( $ms_ID, 'ms_loop', true );
$ms_center                  = get_post_meta( $ms_ID, 'ms_center', true );
$ms_show_nav                = get_post_meta( $ms_ID, 'ms_show_nav', true );
$ms_nav_position            = get_post_meta( $ms_ID, 'ms_nav_position', true );
$ms_nav_radius              = get_post_meta( $ms_ID, 'ms_nav_radius', true );
$ms_show_dots               = get_post_meta( $ms_ID, 'ms_show_dots', true );
$ms_show_dots_foreach       = get_post_meta( $ms_ID, 'ms_show_dots_foreach', true );
$ms_autoplay                = get_post_meta( $ms_ID, 'ms_autoplay', true );
$ms_autoplay_timeout        = get_post_meta( $ms_ID, 'ms_autoplay_timeout', true );
$ms_autoplay_hover_pause    = get_post_meta( $ms_ID, 'ms_autoplay_hover_pause', true );
$ms_autoplay_speed          = get_post_meta( $ms_ID, 'ms_autoplay_speed', true );

$ms_bg_color                = get_post_meta( $ms_ID, 'ms_bg_color', true );
$ms_comment_icon_color      = get_post_meta( $ms_ID, 'ms_comment_icon_color', true );
$ms_comment_fs              = get_post_meta( $ms_ID, 'ms_comment_fs', true );
$ms_comment_fw              = get_post_meta( $ms_ID, 'ms_comment_fw', true );
$ms_comment_color           = get_post_meta( $ms_ID, 'ms_comment_color', true );
$ms_category_icon_color     = get_post_meta( $ms_ID, 'ms_category_icon_color', true );
$ms_category_fs             = get_post_meta( $ms_ID, 'ms_category_fs', true );
$ms_category_fw             = get_post_meta( $ms_ID, 'ms_category_fw', true );
$ms_category_color          = get_post_meta( $ms_ID, 'ms_category_color', true );
$ms_category_bg_color       = get_post_meta( $ms_ID, 'ms_category_bg_color', true );
$ms_tag_icon_color          = get_post_meta( $ms_ID, 'ms_tag_icon_color', true );
$ms_tag_fs                  = get_post_meta( $ms_ID, 'ms_tag_fs', true );
$ms_tag_fw                  = get_post_meta( $ms_ID, 'ms_tag_fw', true );
$ms_tag_color               = get_post_meta( $ms_ID, 'ms_tag_color', true );
$ms_tag_bg_color            = get_post_meta( $ms_ID, 'ms_tag_bg_color', true );
$ms_title_fs                = get_post_meta( $ms_ID, 'ms_title_fs', true );
$ms_title_fw                = get_post_meta( $ms_ID, 'ms_title_fw', true );
$ms_title_color             = get_post_meta( $ms_ID, 'ms_title_color', true );
$ms_excerpt_fs              = get_post_meta( $ms_ID, 'ms_excerpt_fs', true );
$ms_excerpt_fw              = get_post_meta( $ms_ID, 'ms_excerpt_fw', true );
$ms_excerpt_color           = get_post_meta( $ms_ID, 'ms_excerpt_color', true );
$ms_read_more_color         = get_post_meta( $ms_ID, 'ms_read_more_color', true );
$ms_author_fs               = get_post_meta( $ms_ID, 'ms_author_fs', true );
$ms_author_fw               = get_post_meta( $ms_ID, 'ms_author_fw', true );
$ms_author_color            = get_post_meta( $ms_ID, 'ms_author_color', true );
$ms_date_fs                 = get_post_meta( $ms_ID, 'ms_date_fs', true );
$ms_date_fw                 = get_post_meta( $ms_ID, 'ms_date_fw', true );
$ms_date_color              = get_post_meta( $ms_ID, 'ms_date_color', true );

$ms_sales_fs                = get_post_meta( $ms_ID, 'ms_sales_fs', true );
$ms_sales_fw                = get_post_meta( $ms_ID, 'ms_sales_fw', true );
$ms_sales_color             = get_post_meta( $ms_ID, 'ms_sales_color', true );
$ms_review_fs               = get_post_meta( $ms_ID, 'ms_review_fs', true );
$ms_review_fw               = get_post_meta( $ms_ID, 'ms_review_fw', true );
$ms_review_color            = get_post_meta( $ms_ID, 'ms_review_color', true );
$ms_stock_fs                = get_post_meta( $ms_ID, 'ms_stock_fs', true );
$ms_stock_fw                = get_post_meta( $ms_ID, 'ms_stock_fw', true );
$ms_stock_color             = get_post_meta( $ms_ID, 'ms_stock_color', true );
$ms_active_price_fs         = get_post_meta( $ms_ID, 'ms_active_price_fs', true );
$ms_active_price_fw         = get_post_meta( $ms_ID, 'ms_active_price_fw', true );
$ms_active_price_color      = get_post_meta( $ms_ID, 'ms_active_price_color', true );
$ms_prev_price_fs           = get_post_meta( $ms_ID, 'ms_prev_price_fs', true );
$ms_prev_price_fw           = get_post_meta( $ms_ID, 'ms_prev_price_fw', true );
$ms_prev_price_color        = get_post_meta( $ms_ID, 'ms_prev_price_color', true );
$ms_woo_button_fs           = get_post_meta( $ms_ID, 'ms_woo_button_fs', true );
$ms_woo_button_fw           = get_post_meta( $ms_ID, 'ms_woo_button_fw', true );
$ms_woo_button_color        = get_post_meta( $ms_ID, 'ms_woo_button_color', true );
$ms_woo_button_bg_color     = get_post_meta( $ms_ID, 'ms_woo_button_bg_color', true );

$ms_min_height              = get_post_meta( $ms_ID, 'ms_min_height', true );
$ms_verticle_align          = get_post_meta( $ms_ID, 'ms_verticle_align', true );

$ms_nav_bg_color            = get_post_meta( $ms_ID, 'ms_nav_bg_color', true );
$ms_nav_bg_hover_color      = get_post_meta( $ms_ID, 'ms_nav_bg_hover_color', true );
$ms_nav_color               = get_post_meta( $ms_ID, 'ms_nav_color', true );
$ms_nav_fs                  = get_post_meta( $ms_ID, 'ms_nav_fs', true );
$ms_nav_fw                  = get_post_meta( $ms_ID, 'ms_nav_fw', true );

$ms_dot_shape               = get_post_meta( $ms_ID, 'ms_dot_shape', true );
$ms_dot_color               = get_post_meta( $ms_ID, 'ms_dot_color', true );
$ms_dot_active_color        = get_post_meta( $ms_ID, 'ms_dot_active_color', true );

?>

<div class="form-wrapper">

    <div class="field-wrapper">
        <span>Post Type</span>
        <select class="field" id="ms_post_type" name="ms_post_type">
            <option
                value="post"
                <?php echo ( empty( $ms_post_type ) || $ms_post_type == 'post' ) ? 'selected' : '' ?>
            >
                Blog Post
            </option>

            <option
                value="product"
                <?php echo ( ! empty( $ms_post_type ) && $ms_post_type == 'product' ) ? 'selected' : '' ?>
            >
                Woo Commerce Product
            </option>

            <option
                value="my_slide"
                <?php echo ( ! empty( $ms_post_type ) && $ms_post_type == 'my_slide' ) ? 'selected' : '' ?>
            >
                Slide
            </option>
        </select>
    </div>

    <div class="field-wrapper">
        <span>Category</span>
        <div>
            <div class="switch-field">
                <div class="ms-scoped-field d-none ms-post-field">
                    <input name="ms_query_type" id="ms_query_type_post_cat" type="radio"
                            value="category"
                            <?php if ( $ms_query_type == 'category' ) { echo 'checked'; } ?>
                        >
                        <label for="ms_query_type_post_cat">Category</label>
                </div>

                <div class="ms-scoped-field d-none ms-product-field">
                    <input name="ms_query_type" id="ms_query_type_product_cat" type="radio"
                            value="product_cat"
                            <?php if ( $ms_query_type == 'product_cat' ) { echo 'checked'; } ?>
                        >
                        <label for="ms_query_type_product_cat">Category</label>
                </div>

                <div class="ms-scoped-field d-none ms-post-field">
                    <input name="ms_query_type" id="ms_query_type_post_tag" type="radio"
                        value="post_tag"
                        <?php if ( $ms_query_type == 'post_tag' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_query_type_post_tag">Tag</label>
                </div>

                <div class="ms-scoped-field d-none ms-product-field">
                    <input name="ms_query_type" id="ms_query_type_product_tag" type="radio"
                        value="product_tag"
                        <?php if ( $ms_query_type == 'product_tag' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_query_type_product_tag">Tag</label>
                </div>

                <div class="ms-scoped-field d-none ms-my-slide-field">
                    <input name="ms_query_type" id="ms_query_type_my_slide_tag" type="radio"
                        value="my_slide_tag"
                        <?php if ( $ms_query_type == 'my_slide_tag' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_query_type_my_slide_tag">Tag</label>
                </div>

                <div class="">
                    <input name="ms_query_type" id="ms_query_type_id" type="radio"
                        value="id"
                        <?php if ( $ms_query_type == 'id' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_query_type_id">ID</label>
                </div>

                <div class="ms-scoped-field d-none ms-product-field">
                    <input name="ms_query_type" id="ms_query_type_sku" type="radio"
                        value="sku"
                        <?php if ( $ms_query_type == 'sku' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_query_type_sku">SKU</label>
                </div>

                <div class="ms-scoped-field d-none ms-product-field">
                    <input name="ms_query_type" id="ms_query_type_latest" type="radio"
                        value="latest"
                        <?php if ( $ms_query_type == 'latest' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_query_type_latest">Latest Products</label>
                </div>

                <div class="ms-scoped-field d-none ms-product-field">
                    <input name="ms_query_type" id="ms_query_type_featured" type="radio"
                        value="featured"
                        <?php if ( $ms_query_type == 'featured' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_query_type_featured">Featured Products</label>
                </div>

                <div class="ms-scoped-field d-none ms-product-field">
                    <input name="ms_query_type" id="ms_query_type_onsale" type="radio"
                        value="onsale"
                        <?php if ( $ms_query_type == 'onsale' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_query_type_onsale">On-Sale Products</label>
                </div>

                <div class="ms-scoped-field d-none ms-product-field">
                    <input name="ms_query_type" id="ms_query_type_top_rated" type="radio"
                        value="top_rated"
                        <?php if ( $ms_query_type == 'top_rated' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_query_type_top_rated">Top-Rated Products</label>
                </div>

                <div class="ms-scoped-field d-none ms-product-field">
                    <input name="ms_query_type" id="ms_query_type_best_selling" type="radio"
                        value="best_selling"
                        <?php if ( $ms_query_type == 'best_selling' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_query_type_best_selling">Best Selling Products</label>
                </div>
                <a class="slide-button btn"></a>
            </div>
        </div>
    </div>

    <div class="field-wrapper">
        <span>Select Tag</span>
        <select name="ms_tag_query[]" id="tag_query" multiple="multiple" placeholder="Select Tag">
            <?php

            foreach ( $ms_tags as $post_type => $tags ):

                if ( ! empty( $tags ) ):
                    foreach ( $tags as $tag ):

            ?>
                        <option
                            class="<?php echo $post_type . '_tag_option' ?> ms_tag_option"
                            value="<?php echo $tag->term_id ?>"
                            <?php if ( in_array( $tag->term_id, explode( ',',  $ms_tag_query ) ) ) { echo "selected"; } ?>
                        >
                            <?php echo $tag->name ?>
                        </option>

            <?php

                    endforeach;
                endif;
            endforeach;

            ?>
        </select>
    </div>

    <div class="field-wrapper d-none" id="ms_query_wrapper">
        <span></span>
        <select name="ms_query[]" id="ms_query" multiple="multiple"></select>
    </div>

    <div class="field-wrapper">
        <span>Items to show</span>
        <input
            class="field"
            type="number"
            min="0"
            max="20"
            value="<?php echo empty( $ms_items_to_show ) ? '4' : $ms_items_to_show ?>"
            step="1"
            name="ms_items_to_show"
        />
    </div>

    <div class="field-wrapper">
        <span>Display Items</span>
        <input
            class="field"
            type="number"
            min="1"
            max="20"
            value="<?php echo empty( $ms_items_to_display ) ? '2' : $ms_items_to_display ?>"
            step="1"
            name="ms_items_to_display"
        />
    </div>

    <div class="field-wrapper">
        <span>Margin Between Items</span>
        <input
            class="field"
            type="number"
            value="<?php echo empty( $ms_margin_right ) ? '10' : $ms_margin_right ?>"
            step="1"
            name="ms_margin_right"
        />
    </div>

    <div class="field-wrapper">
        <span>Feature Image Size</span>
        <select class="field" id="ms_feature_img_size" name="ms_feature_img_size">
            <option
                value="thumbnail"
                <?php if($ms_feature_img_size == "thumbnail") { echo "selected"; } ?> 
            >
                <?php echo esc_html__('Thumbnail - 150 x 150','my-slider');?>
            </option>

            <option
                value="medium"
                <?php if($ms_feature_img_size == "medium") { echo "selected"; } ?>
            >
                <?php echo esc_html__('Medium - 300 x 300','my-slider');?>
            </option>

            <option
                value="medium_large"
                <?php if($ms_feature_img_size == "medium_large") { echo "selected"; } if(empty($ms_feature_img_size)) { echo "selected"; } ?> 
            >
                <?php echo esc_html__('Medium Large - 768 x 768','my-slider');?>
            </option>

            <option
                value="large"
                <?php if($ms_feature_img_size == "large") { echo "selected"; } ?>
            >
                <?php echo esc_html__('Large - 1024 x 1024','my-slider');?>
            </option>

            <option
                value="1536x1536"
                <?php if($ms_feature_img_size == "1536x1536") { echo "selected"; } ?>
            >
                <?php echo esc_html__('1536x1536 - 1536 x 1536','my-slider');?>
            </option>

            <option
                value="2048x2048"
                <?php if($ms_feature_img_size == "2048x2048") { echo "selected"; } ?>
            >
                <?php echo esc_html__('2048x2048 - 2048 x 2048','my-slider');?>
            </option>

            <option
                value="full"
                <?php if($ms_feature_img_size == "full") { echo "selected"; } ?>
            >
                <?php echo esc_html__('Full','my-slider');?>
            </option>

        </select>
    </div>

    <div class="field-wrapper ms-product-field ms-post-field ms-scoped-field d-none">
        <span>Feature Image Aspect Ratio</span>
        <select class="field" id="ms_feature_img_ratio" name="ms_feature_img_ratio">
            <option
                value="1:1"
                <?php if($ms_feature_img_ratio == "1:1") { echo "selected"; } ?> 
            >
                <?php echo esc_html__('1:1 - Sqaure','my-slider');?>
            </option>

            <option
                value="4:3"
                <?php if($ms_feature_img_ratio == "4:3") { echo "selected"; } ?>
            >
                <?php echo esc_html__('4:3 - Standard Landscape','my-slider');?>
            </option>

            <option
                value="3:2"
                <?php if($ms_feature_img_ratio == "3:2") { echo "selected"; } if(empty($ms_feature_img_ratio)) { echo "selected"; } ?> 
            >
                <?php echo esc_html__('3:2 - Photography','my-slider');?>
            </option>

            <option
                value="16:9"
                <?php if($ms_feature_img_ratio == "16:9") { echo "selected"; } ?>
            >
                <?php echo esc_html__('16:9 - Widescreen','my-slider');?>
            </option>

            <option
                value="2:1"
                <?php if($ms_feature_img_ratio == "2:1") { echo "selected"; } ?>
            >
                <?php echo esc_html__('2:1 - Panorama','my-slider');?>
            </option>
            
            <option
                value="3:4"
                <?php if($ms_feature_img_ratio == "3:4") { echo "selected"; } ?>
            >
                <?php echo esc_html__('3:4 - Portrait','my-slider');?>
            </option>

            <option
                value="4:5"
                <?php if($ms_feature_img_ratio == "4:5") { echo "selected"; } ?>
            >
                <?php echo esc_html__('4:5 - Social Portrait','my-slider');?>
            </option>

        </select>
    </div>

    <div class="field-wrapper">
        <span>Sort By</span>
        <select class="field" name="ms_order">
            <option
                value="ASC"
                <?php echo ( empty( $ms_order ) || $ms_order == 'ASC' ) ? 'selected' : '' ?>
            >
                Ascending Order
            </option>

            <option
                value="DESC"
                <?php echo ( ! empty( $ms_order ) && $ms_order == 'DESC' ) ? 'selected' : '' ?>
            >
                Descending Order
            </option>
        </select>
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Comments</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_show_comments" id="ms_show_comments_on" type="radio"
                    value="show"
                    <?php if ( empty( $ms_show_comments ) || $ms_show_comments == 'show' ) { echo 'checked'; } ?>
                />
                <label for="ms_show_comments_on" class="radioCheck">Show</label>
                <input name="ms_show_comments" id="ms_show_comments_off" type="radio"
                    value="hide"
                    <?php if ( $ms_show_comments == 'hide' ) { echo 'checked'; } ?>
                />
                <label for="ms_show_comments_off" class="radioCheck">Hide</label>
                <a class="slide-button btn"></a>
            </span>
        </div>
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Category</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_show_category" id="ms_show_category_on" type="radio"
                    value="show"
                    <?php if ( empty( $ms_show_category ) || $ms_show_category == 'show' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_category_on" class="radioCheck">Show</label>
                <input name="ms_show_category" id="ms_show_category_off" type="radio"
                    value="hide"
                    <?php if ( $ms_show_category == 'hide' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_category_off" class="radioCheck">Hide</label>
                <a class="slide-button btn"></a>
            </span>
        </div>
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Tags</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_show_tags" id="ms_show_tags_on" type="radio"
                    value="show"
                    <?php if ( empty( $ms_show_tags ) || $ms_show_tags == 'show' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_tags_on" class="radioCheck">Show</label>
                <input name="ms_show_tags" id="ms_show_tags_off" type="radio"
                    value="hide"
                    <?php if ( $ms_show_tags == 'hide' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_tags_off" class="radioCheck">Hide</label>
                <a class="slide-button btn"></a>
            </span>
        </div>
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Excerpt</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_show_excerpt" id="ms_show_excerpt_on" type="radio"
                    value="show"
                    <?php if ( empty( $ms_show_excerpt ) || $ms_show_excerpt == 'show' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_excerpt_on" class="radioCheck">Show</label>
                <input name="ms_show_excerpt" id="ms_show_excerpt_off" type="radio"
                    value="hide"
                    <?php if ( $ms_show_excerpt == 'hide' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_excerpt_off" class="radioCheck">Hide</label>
                <a class="slide-button btn"></a>
            </span>
        </div>
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Excerpt Length</span>
        <input
            class="field"
            type="number"
            min="1"
            value="<?php echo empty( $ms_excerpt_length ) ? '55' : $ms_excerpt_length ?>"
            step="1"
            name="ms_excerpt_length"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Read More Text</span>
        <input
            class="field"
            type="text"
            value="<?php echo empty( $ms_read_more_text ) ? 'Read More' : $ms_read_more_text ?>"
            name="ms_read_more_text"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Author</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_show_author" id="ms_show_author_on" type="radio"
                    value="show"
                    <?php if ( empty( $ms_show_author ) || $ms_show_author == 'show' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_author_on" class="radioCheck">Show</label>
                <input name="ms_show_author" id="ms_show_author_off" type="radio"
                    value="hide"
                    <?php if ( $ms_show_author == 'hide' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_author_off" class="radioCheck">Hide</label>
                <a class="slide-button btn"></a>
            </span>
        </div>
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Author Avatar</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_show_avatar" id="ms_show_avatar_on" type="radio"
                    value="show"
                    <?php if ( empty( $ms_show_avatar ) || $ms_show_avatar == 'show' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_avatar_on" class="radioCheck">Show</label>
                <input name="ms_show_avatar" id="ms_show_avatar_off" type="radio"
                    value="hide"
                    <?php if ( $ms_show_avatar == 'hide' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_avatar_off" class="radioCheck">Hide</label>
                <a class="slide-button btn"></a>
            </span>
        </div>
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Date</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_show_date" id="ms_show_date_on" type="radio"
                    value="show"
                    <?php if ( empty( $ms_show_date ) || $ms_show_date == 'show' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_date_on" class="radioCheck">Show</label>
                <input name="ms_show_date" id="ms_show_date_off" type="radio"
                    value="hide"
                    <?php if ( $ms_show_date == 'hide' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_date_off" class="radioCheck">Hide</label>
                <a class="slide-button btn"></a>
            </span>
        </div>
    </div>

    <div class="field-wrapper">
        <span>Loop</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_loop" id="ms_loop_on" type="radio"
                    value="true"
                    <?php if ( empty( $ms_loop ) || $ms_loop == 'true' ) { echo 'checked'; } ?>
                >
                <label for="ms_loop_on" class="radioCheck">Yes</label>
                <input name="ms_loop" id="ms_loop_off" type="radio"
                    value="false"
                    <?php if ( $ms_loop == 'false' ) { echo 'checked'; } ?>
                >
                <label for="ms_loop_off" class="radioCheck">No</label>
                <a class="slide-button btn"></a>
            </span>
        </div>
    </div>

    <div class="field-wrapper">
        <span>Centerize Items</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_center" id="ms_center_on" type="radio"
                    value="true"
                    <?php if ( $ms_center == 'true' ) { echo 'checked'; } ?>
                >
                <label for="ms_center_on" class="radioCheck">Yes</label>
                <input name="ms_center" id="ms_center_off" type="radio"
                    value="false"
                    <?php if ( empty( $ms_center ) || $ms_center == 'false' ) { echo 'checked'; } ?>
                >
                <label for="ms_center_off" class="radioCheck">No</label>
                <a class="slide-button btn"></a>
            </span>
        </div>
    </div>

    <div class="field-wrapper">
        <span>Show Navigation</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_show_nav" id="ms_show_nav_on" type="radio"
                    value="true"
                    <?php if ( empty( $ms_show_nav ) || $ms_show_nav == 'true' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_nav_on" class="radioCheck">Yes</label>
                <input name="ms_show_nav" id="ms_show_nav_off" type="radio"
                    value="false"
                    <?php if ( $ms_show_nav == 'false' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_nav_off" class="radioCheck">No</label>
                <a class="slide-button btn"></a>
            </span>
        </div>
    </div>


    <div class="field-wrapper">
        <span>Navigation Position</span>
        <select class="field" id="ms_nav_position" name="ms_nav_position">
            <option
                value="top-wide"
                <?php if($ms_nav_position == "top-wide") { echo "selected"; } ?> 
            >
                <?php echo esc_html__('Top','my-slider');?>
            </option>

            <option
                value="top-left"
                <?php if($ms_nav_position == "top-left") { echo "selected"; } ?> 
            >
                <?php echo esc_html__('Top Left','my-slider');?>
            </option>

            <option
                value="top-right"
                <?php if($ms_nav_position == "top-right") { echo "selected"; } ?> 
            >
                <?php echo esc_html__('Top Right','my-slider');?>
            </option>

            <option
                value="top-center"
                <?php if($ms_nav_position == "top-center") { echo "selected"; } ?> 
            >
                <?php echo esc_html__('Top Center','my-slider');?>
            </option>

            <option
                value="middle-wide"
                <?php if($ms_nav_position == "middle-wide") { echo "selected"; } if(empty($ms_nav_position)) { echo "selected"; } ?> 
            >
                <?php echo esc_html__('Middle','my-slider');?>
            </option>

            <option
                value="bottom-wide"
                <?php if($ms_nav_position == "bottom-wide") { echo "selected"; } ?> 
            >
                <?php echo esc_html__('Bottom','my-slider');?>
            </option>

            <option
                value="bottom-left"
                <?php if($ms_nav_position == "bottom-left") { echo "selected"; } ?> 
            >
                <?php echo esc_html__('Bottom Left','my-slider');?>
            </option>

            <option
                value="bottom-right"
                <?php if($ms_nav_position == "bottom-right") { echo "selected"; } ?> 
            >
                <?php echo esc_html__('Bottom Right','my-slider');?>
            </option>

            <option
                value="bottom-center"
                <?php if($ms_nav_position == "bottom-center") { echo "selected"; } ?> 
            >
                <?php echo esc_html__('Bottom Center','my-slider');?>
            </option>

        </select>
    </div>

    <div class="field-wrapper">
        <span>Navigation button border radius</span>
        <input
            class="field"
            type="number"
            min="0"
            max="50"
            value="<?php echo empty( $ms_nav_radius ) ? '2' : $ms_nav_radius ?>"
            step="1"
            name="ms_nav_radius"
        />
    </div>

    <div class="field-wrapper">
        <span>Show Dots</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_show_dots" id="ms_show_dots_on" type="radio"
                    value="true"
                    <?php if ( empty( $ms_show_dots ) || $ms_show_dots == 'true' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_dots_on" class="radioCheck">Yes</label>
                <input name="ms_show_dots" id="ms_show_dots_off" type="radio"
                    value="false"
                    <?php if ( $ms_show_dots == 'false' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_dots_off" class="radioCheck">No</label>
                <a class="slide-button btn"></a>
            </span>
        </div>
    </div>

    <div class="field-wrapper">
        <span>Show Dots For Each Item</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_show_dots_foreach" id="ms_show_dots_foreach_on" type="radio"
                    value="true"
                    <?php if ( $ms_show_dots_foreach == 'true' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_dots_foreach_on" class="radioCheck">Yes</label>
                <input name="ms_show_dots_foreach" id="ms_show_dots_foreach_off" type="radio"
                    value="false"
                    <?php if ( empty( $ms_show_dots_foreach ) || $ms_show_dots_foreach == 'false' ) { echo 'checked'; } ?>
                >
                <label for="ms_show_dots_foreach_off" class="radioCheck">No</label>
                <a class="slide-button btn"></a>
            </span>
        </div>
    </div>

    <div class="field-wrapper">
        <span>Autoplay Slides</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_autoplay" id="ms_autoplay_on" type="radio"
                    value="true"
                    <?php if ( empty( $ms_autoplay ) || $ms_autoplay == 'true' ) { echo 'checked'; } ?>
                >
                <label for="ms_autoplay_on" class="radioCheck">Yes</label>
                <input name="ms_autoplay" id="ms_autoplay_off" type="radio"
                    value="false"
                    <?php if ( $ms_autoplay == 'false' ) { echo 'checked'; } ?>
                >
                <label for="ms_autoplay_off" class="radioCheck">No</label>
                <a class="slide-button btn"></a>
            </span>
        </div>
    </div>

    <div class="field-wrapper">
        <span>Autoplay Timeout</span>
        <input
            class="field"
            type="number"
            value="<?php echo empty( $ms_autoplay_timeout ) ? '5000' : $ms_autoplay_timeout ?>"
            step="1"
            name="ms_autoplay_timeout"
        />
    </div>

    <div class="field-wrapper">
        <span>Autoplay Speed</span>
        <input
            class="field"
            type="number"
            value="<?php echo empty( $ms_autoplay_speed ) ? '700' : $ms_autoplay_speed ?>"
            step="1"
            name="ms_autoplay_speed"
        />
    </div>

    <div class="field-wrapper">
        <span>Pause Autoplay On Mouse Over</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_autoplay_hover_pause" id="ms_autoplay_hover_pause_on" type="radio"
                    value="true"
                    <?php if ( empty( $ms_autoplay_hover_pause ) || $ms_autoplay_hover_pause == 'true' ) { echo 'checked'; } ?>
                >
                <label for="ms_autoplay_hover_pause_on" class="radioCheck">Yes</label>
                <input name="ms_autoplay_hover_pause" id="ms_autoplay_hover_pause_off" type="radio"
                    value="false"
                    <?php if ( $ms_autoplay_hover_pause == 'false' ) { echo 'checked'; } ?>
                >
                <label for="ms_autoplay_hover_pause_off" class="radioCheck">No</label>
                <a class="slide-button btn"></a>
            </span>
        </div>
    </div>

    <div class="field-wrapper">
        <span>Slides Background Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_bg_color ) ? '#ffffff' : $ms_bg_color ?>"
            name="ms_bg_color"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Comments Icon Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_comment_icon_color ) ? '#000000' : $ms_comment_icon_color ?>"
            name="ms_comment_icon_color"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Comment Font Size</span>
        <input
            class="field"
            type="number"
            min="6"
            value="<?php echo empty( $ms_comment_fs ) ? '12' : $ms_comment_fs ?>"
            step="1"
            name="ms_comment_fs"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Comment Font Weight</span>
        <select
            class="field"
            name="ms_comment_fw"
        >
            <option
                value="200"
                <?php if ( ! empty( $ms_comment_fw ) && $ms_comment_fw == '200' ) { echo 'selected'; } ?>
            >
                Thin
            </option>

            <option
                value="500"
                <?php if ( empty( $ms_comment_fw ) || $ms_comment_fw == '500' ) { echo 'selected'; } ?>
            >
                Medium
            </option>

            <option
                value="700"
                <?php if ( ! empty( $ms_comment_fw ) && $ms_comment_fw == '700' ) { echo 'selected'; } ?>
            >
                Bold
            </option>

            <option
                value="1000"
                <?php if ( ! empty( $ms_comment_fw ) && $ms_comment_fw == '1000' ) { echo 'selected'; } ?>
            >
                Bolder
            </option>
        </select>
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Comments Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_comment_color ) ? '#000000' : $ms_comment_color ?>"
            name="ms_comment_color"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Category Icon Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_category_icon_color ) ? '#000000' : $ms_category_icon_color ?>"
            name="ms_category_icon_color"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Category Font Size</span>
        <input
            class="field"
            type="number"
            min="6"
            value="<?php echo empty( $ms_category_fs ) ? '12' : $ms_category_fs ?>"
            step="1"
            name="ms_category_fs"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Category Font Weight</span>
        <select
            class="field"
            name="ms_category_fw"
        >
            <option
                value="200"
                <?php if ( ! empty( $ms_category_fw ) && $ms_category_fw == '200' ) { echo 'selected'; } ?>
            >
                Thin
            </option>

            <option
                value="500"
                <?php if ( empty( $ms_category_fw ) || $ms_category_fw == '500' ) { echo 'selected'; } ?>
            >
                Medium
            </option>

            <option
                value="700"
                <?php if ( ! empty( $ms_category_fw ) && $ms_category_fw == '700' ) { echo 'selected'; } ?>
            >
                Bold
            </option>

            <option
                value="1000"
                <?php if ( ! empty( $ms_category_fw ) && $ms_category_fw == '1000' ) { echo 'selected'; } ?>
            >
                Bolder
            </option>
        </select>
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Category Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_category_color ) ? '#ffffff' : $ms_category_color ?>"
            name="ms_category_color"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Category Background Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_category_bg_color ) ? '#5E76BF' : $ms_category_bg_color ?>"
            name="ms_category_bg_color"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Tag Font Size</span>
        <input
            class="field"
            type="number"
            min="6"
            value="<?php echo empty( $ms_tag_fs ) ? '12' : $ms_tag_fs ?>"
            step="1"
            name="ms_tag_fs"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Tag Font Weight</span>
        <select
            class="field"
            name="ms_tag_fw"
        >
            <option
                value="200"
                <?php if ( ! empty( $ms_tag_fw ) && $ms_tag_fw == '200' ) { echo 'selected'; } ?>
            >
                Thin
            </option>

            <option
                value="500"
                <?php if ( empty( $ms_tag_fw ) || $ms_tag_fw == '500' ) { echo 'selected'; } ?>
            >
                Medium
            </option>

            <option
                value="700"
                <?php if ( ! empty( $ms_tag_fw ) && $ms_tag_fw == '700' ) { echo 'selected'; } ?>
            >
                Bold
            </option>

            <option
                value="1000"
                <?php if ( ! empty( $ms_tag_fw ) && $ms_tag_fw == '1000' ) { echo 'selected'; } ?>
            >
                Bolder
            </option>
        </select>
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Tag Icon Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_tag_icon_color ) ? '#000000' : $ms_tag_icon_color ?>"
            name="ms_tag_icon_color"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Tag Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_tag_color ) ? '#888888' : $ms_tag_color ?>"
            name="ms_tag_color"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Tag Background Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_tag_bg_color ) ? '#e9e9e9' : $ms_tag_bg_color ?>"
            name="ms_tag_bg_color"
        />
    </div>

    <div class="field-wrapper ms-product-field ms-post-field ms-scoped-field d-none">
        <span>Title Font Size</span>
        <input
            class="field"
            type="number"
            min="6"
            value="<?php echo empty( $ms_title_fs ) ? '18' : $ms_title_fs ?>"
            step="1"
            name="ms_title_fs"
        />
    </div>

    <div class="field-wrapper ms-product-field ms-post-field ms-scoped-field d-none">
        <span>Title Font Weight</span>
        <select
            class="field"
            name="ms_title_fw"
        >
            <option
                value="200"
                <?php if ( ! empty( $ms_title_fw ) && $ms_title_fw == '200' ) { echo 'selected'; } ?>
            >
                Thin
            </option>

            <option
                value="500"
                <?php if ( ! empty( $ms_title_fw ) && $ms_title_fw == '500' ) { echo 'selected'; } ?>
            >
                Medium
            </option>

            <option
                value="700"
                <?php if ( empty( $ms_title_fw ) || $ms_title_fw == '700' ) { echo 'selected'; } ?>
            >
                Bold
            </option>

            <option
                value="1000"
                <?php if ( ! empty( $ms_title_fw ) && $ms_title_fw == '1000' ) { echo 'selected'; } ?>
            >
                Bolder
            </option>
        </select>
    </div>

    <div class="field-wrapper ms-product-field ms-post-field ms-scoped-field d-none">
        <span>Title Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_title_color ) ? '#000000' : $ms_title_color ?>"
            name="ms_title_color"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Excerpt Font Size</span>
        <input
            class="field"
            type="number"
            min="6"
            value="<?php echo empty( $ms_excerpt_fs ) ? '12' : $ms_excerpt_fs ?>"
            step="1"
            name="ms_excerpt_fs"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Excerpt Font Weight</span>
        <select
            class="field"
            name="ms_excerpt_fw"
        >
            <option
                value="200"
                <?php if ( ! empty( $ms_excerpt_fw ) && $ms_excerpt_fw == '200' ) { echo 'selected'; } ?>
            >
                Thin
            </option>

            <option
                value="500"
                <?php if ( empty( $ms_excerpt_fw ) || $ms_excerpt_fw == '500' ) { echo 'selected'; } ?>
            >
                Medium
            </option>

            <option
                value="700"
                <?php if ( ! empty( $ms_excerpt_fw ) && $ms_excerpt_fw == '700' ) { echo 'selected'; } ?>
            >
                Bold
            </option>

            <option
                value="1000"
                <?php if ( ! empty( $ms_excerpt_fw ) && $ms_excerpt_fw == '1000' ) { echo 'selected'; } ?>
            >
                Bolder
            </option>
        </select>
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Excerpt Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_excerpt_color ) ? '#000000' : $ms_excerpt_color ?>"
            name="ms_excerpt_color"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Read More Text Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_read_more_color ) ? '#4c4c4c' : $ms_read_more_color ?>"
            name="ms_read_more_color"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Author Font Size</span>
        <input
            class="field"
            type="number"
            min="6"
            value="<?php echo empty( $ms_author_fs ) ? '12' : $ms_author_fs ?>"
            step="1"
            name="ms_author_fs"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Author Font Weight</span>
        <select
            class="field"
            name="ms_author_fw"
        >
            <option
                value="200"
                <?php if ( ! empty( $ms_author_fw ) && $ms_author_fw == '200' ) { echo 'selected'; } ?>
            >
                Thin
            </option>

            <option
                value="500"
                <?php if ( empty( $ms_author_fw ) || $ms_author_fw == '500' ) { echo 'selected'; } ?>
            >
                Medium
            </option>

            <option
                value="700"
                <?php if ( ! empty( $ms_author_fw ) && $ms_author_fw == '700' ) { echo 'selected'; } ?>
            >
                Bold
            </option>

            <option
                value="1000"
                <?php if ( ! empty( $ms_author_fw ) && $ms_author_fw == '1000' ) { echo 'selected'; } ?>
            >
                Bolder
            </option>
        </select>
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Author Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_author_color ) ? '#000000' : $ms_author_color ?>"
            name="ms_author_color"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Date Font Size</span>
        <input
            class="field"
            type="number"
            min="6"
            value="<?php echo empty( $ms_date_fs ) ? '12' : $ms_date_fs ?>"
            step="1"
            name="ms_date_fs"
        />
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Date Font Weight</span>
        <select
            class="field"
            name="ms_date_fw"
        >
            <option
                value="200"
                <?php if ( ! empty( $ms_date_fw ) && $ms_date_fw == '200' ) { echo 'selected'; } ?>
            >
                Thin
            </option>

            <option
                value="500"
                <?php if ( empty( $ms_date_fw ) || $ms_date_fw == '500' ) { echo 'selected'; } ?>
            >
                Medium
            </option>

            <option
                value="700"
                <?php if ( ! empty( $ms_date_fw ) && $ms_date_fw == '700' ) { echo 'selected'; } ?>
            >
                Bold
            </option>

            <option
                value="1000"
                <?php if ( ! empty( $ms_date_fw ) && $ms_date_fw == '1000' ) { echo 'selected'; } ?>
            >
                Bolder
            </option>
        </select>
    </div>

    <div class="field-wrapper ms-post-field ms-scoped-field d-none">
        <span>Date Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_date_color ) ? '#545d7a' : $ms_date_color ?>"
            name="ms_date_color"
        />
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Stock Status Font Size</span>
        <input
            class="field"
            type="number"
            min="6"
            value="<?php echo empty( $ms_stock_fs ) ? '12' : $ms_stock_fs ?>"
            step="1"
            name="ms_stock_fs"
        />
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Stock Status Font Weight</span>
        <select
            class="field"
            name="ms_stock_fw"
        >
            <option
                value="200"
                <?php if ( ! empty( $ms_stock_fw ) && $ms_stock_fw == '200' ) { echo 'selected'; } ?>
            >
                Thin
            </option>

            <option
                value="500"
                <?php if ( empty( $ms_stock_fw ) || $ms_stock_fw == '500' ) { echo 'selected'; } ?>
            >
                Medium
            </option>

            <option
                value="700"
                <?php if ( ! empty( $ms_stock_fw ) && $ms_stock_fw == '700' ) { echo 'selected'; } ?>
            >
                Bold
            </option>

            <option
                value="1000"
                <?php if ( ! empty( $ms_stock_fw ) && $ms_stock_fw == '1000' ) { echo 'selected'; } ?>
            >
                Bolder
            </option>
        </select>
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Stock Status Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_stock_color ) ? '#545d7a' : $ms_stock_color ?>"
            name="ms_stock_color"
        />
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Sales Count Font Size</span>
        <input
            class="field"
            type="number"
            min="6"
            value="<?php echo empty( $ms_sales_fs ) ? '12' : $ms_sales_fs ?>"
            step="1"
            name="ms_sales_fs"
        />
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Sales Count Font Weight</span>
        <select
            class="field"
            name="ms_sales_fw"
        >
            <option
                value="200"
                <?php if ( ! empty( $ms_sales_fw ) && $ms_sales_fw == '200' ) { echo 'selected'; } ?>
            >
                Thin
            </option>

            <option
                value="500"
                <?php if ( empty( $ms_sales_fw ) || $ms_sales_fw == '500' ) { echo 'selected'; } ?>
            >
                Medium
            </option>

            <option
                value="700"
                <?php if ( ! empty( $ms_sales_fw ) && $ms_sales_fw == '700' ) { echo 'selected'; } ?>
            >
                Bold
            </option>

            <option
                value="1000"
                <?php if ( ! empty( $ms_sales_fw ) && $ms_sales_fw == '1000' ) { echo 'selected'; } ?>
            >
                Bolder
            </option>
        </select>
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Sales Count Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_sales_color ) ? '#545d7a' : $ms_sales_color ?>"
            name="ms_sales_color"
        />
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Rating Star Font Size</span>
        <input
            class="field"
            type="number"
            min="6"
            value="<?php echo empty( $ms_review_fs ) ? '12' : $ms_review_fs ?>"
            step="1"
            name="ms_review_fs"
        />
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Rating Star Font Weight</span>
        <select
            class="field"
            name="ms_review_fw"
        >
            <option
                value="200"
                <?php if ( ! empty( $ms_review_fw ) && $ms_review_fw == '200' ) { echo 'selected'; } ?>
            >
                Thin
            </option>

            <option
                value="500"
                <?php if ( empty( $ms_review_fw ) || $ms_review_fw == '500' ) { echo 'selected'; } ?>
            >
                Medium
            </option>

            <option
                value="700"
                <?php if ( ! empty( $ms_review_fw ) && $ms_review_fw == '700' ) { echo 'selected'; } ?>
            >
                Bold
            </option>

            <option
                value="1000"
                <?php if ( ! empty( $ms_review_fw ) && $ms_review_fw == '1000' ) { echo 'selected'; } ?>
            >
                Bolder
            </option>
        </select>
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Rating Star Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_review_color ) ? '#545d7a' : $ms_review_color ?>"
            name="ms_review_color"
        />
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Active Price Font Size</span>
        <input
            class="field"
            type="number"
            min="6"
            value="<?php echo empty( $ms_active_price_fs ) ? '12' : $ms_active_price_fs ?>"
            step="1"
            name="ms_active_price_fs"
        />
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Active Price Font Weight</span>
        <select
            class="field"
            name="ms_active_price_fw"
        >
            <option
                value="200"
                <?php if ( ! empty( $ms_active_price_fw ) && $ms_active_price_fw == '200' ) { echo 'selected'; } ?>
            >
                Thin
            </option>

            <option
                value="500"
                <?php if ( empty( $ms_active_price_fw ) || $ms_active_price_fw == '500' ) { echo 'selected'; } ?>
            >
                Medium
            </option>

            <option
                value="700"
                <?php if ( ! empty( $ms_active_price_fw ) && $ms_active_price_fw == '700' ) { echo 'selected'; } ?>
            >
                Bold
            </option>

            <option
                value="1000"
                <?php if ( ! empty( $ms_active_price_fw ) && $ms_active_price_fw == '1000' ) { echo 'selected'; } ?>
            >
                Bolder
            </option>
        </select>
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Active Price Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_active_price_color ) ? '#545d7a' : $ms_active_price_color ?>"
            name="ms_active_price_color"
        />
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Previous Price Font Size</span>
        <input
            class="field"
            type="number"
            min="6"
            value="<?php echo empty( $ms_prev_price_fs ) ? '12' : $ms_prev_price_fs ?>"
            step="1"
            name="ms_prev_price_fs"
        />
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Previous Price Font Weight</span>
        <select
            class="field"
            name="ms_prev_price_fw"
        >
            <option
                value="200"
                <?php if ( ! empty( $ms_prev_price_fw ) && $ms_prev_price_fw == '200' ) { echo 'selected'; } ?>
            >
                Thin
            </option>

            <option
                value="500"
                <?php if ( empty( $ms_prev_price_fw ) || $ms_prev_price_fw == '500' ) { echo 'selected'; } ?>
            >
                Medium
            </option>

            <option
                value="700"
                <?php if ( ! empty( $ms_prev_price_fw ) && $ms_prev_price_fw == '700' ) { echo 'selected'; } ?>
            >
                Bold
            </option>

            <option
                value="1000"
                <?php if ( ! empty( $ms_prev_price_fw ) && $ms_prev_price_fw == '1000' ) { echo 'selected'; } ?>
            >
                Bolder
            </option>
        </select>
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Previous Price Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_prev_price_color ) ? '#545d7a' : $ms_prev_price_color ?>"
            name="ms_prev_price_color"
        />
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Button Font Size</span>
        <input
            class="field"
            type="number"
            min="6"
            value="<?php echo empty( $ms_woo_button_fs ) ? '12' : $ms_woo_button_fs ?>"
            step="1"
            name="ms_woo_button_fs"
        />
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Button Font Weight</span>
        <select
            class="field"
            name="ms_woo_button_fw"
        >
            <option
                value="200"
                <?php if ( ! empty( $ms_woo_button_fw ) && $ms_woo_button_fw == '200' ) { echo 'selected'; } ?>
            >
                Thin
            </option>

            <option
                value="500"
                <?php if ( empty( $ms_woo_button_fw ) || $ms_woo_button_fw == '500' ) { echo 'selected'; } ?>
            >
                Medium
            </option>

            <option
                value="700"
                <?php if ( ! empty( $ms_woo_button_fw ) && $ms_woo_button_fw == '700' ) { echo 'selected'; } ?>
            >
                Bold
            </option>

            <option
                value="1000"
                <?php if ( ! empty( $ms_woo_button_fw ) && $ms_woo_button_fw == '1000' ) { echo 'selected'; } ?>
            >
                Bolder
            </option>
        </select>
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Button Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_woo_button_color ) ? '#545d7a' : $ms_woo_button_color ?>"
            name="ms_woo_button_color"
        />
    </div>

    <div class="field-wrapper ms-product-field ms-scoped-field d-none">
        <span>Button Background Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_woo_button_bg_color ) ? '#545d7a' : $ms_woo_button_bg_color ?>"
            name="ms_woo_button_bg_color"
        />
    </div>

    <div class="field-wrapper">
        <span>Minimum Slide Height</span>
        <input
            class="field"
            type="number"
            min="0"
            step="5"
            value="<?php echo empty( $ms_min_height ) ? '500' : $ms_min_height ?>"
            name="ms_min_height"
        />
    </div>

    <div class="field-wrapper">
        <span>Slide Content Verticle Alignment</span>
        <select
            class="field"
            name="ms_verticle_align"
        >
            <option
                value="start"
                <?php if ( ! empty( $ms_verticle_align ) && $ms_verticle_align == 'start' ) { echo 'selected'; } ?>
            >
                Top
            </option>

            <option
                value="center"
                <?php if ( empty( $ms_verticle_align ) || $ms_verticle_align == 'center' ) { echo 'selected'; } ?>
                >
                Center
            </option>

            <option
                value="end"
                <?php if ( ! empty( $ms_verticle_align ) && $ms_verticle_align == 'end' ) { echo 'selected'; } ?>
            >
                Bottom
            </option>

            <option
                value="space-between"
                <?php if ( ! empty( $ms_verticle_align ) && $ms_verticle_align == 'space-between' ) { echo 'selected'; } ?>
            >
                Fit Container
            </option>
        </select>
    </div>

    <div class="field-wrapper">
        <span>Navigation Button Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_nav_color ) ? '#eeeeee' : $ms_nav_color ?>"
            name="ms_nav_color"
        />
    </div>

    <div class="field-wrapper">
        <span>Navigation Button Font Size</span>
        <input
            class="field"
            type="number"
            min="8"
            step="1"
            value="<?php echo empty( $ms_nav_fs ) ? '24' : $ms_nav_fs ?>"
            name="ms_nav_fs"
        />
    </div>

    <div class="field-wrapper">
        <span>Navigation Button Font Weight</span>
        <select
            class="field"
            name="ms_nav_fw"
        >
            <option
                value="200"
                <?php if ( ! empty( $ms_nav_fw ) && $ms_nav_fw == '200' ) { echo 'selected'; } ?>
            >
                Thin
            </option>

            <option
                value="500"
                <?php if ( empty( $ms_nav_fw ) || $ms_nav_fw == '500' ) { echo 'selected'; } ?>
            >
                Medium
            </option>

            <option
                value="700"
                <?php if ( ! empty( $ms_nav_fw ) && $ms_nav_fw == '700' ) { echo 'selected'; } ?>
            >
                Bold
            </option>

            <option
                value="1000"
                <?php if ( ! empty( $ms_nav_fw ) && $ms_nav_fw == '1000' ) { echo 'selected'; } ?>
            >
                Bolder
            </option>
        </select>
    </div>

    <div class="field-wrapper">
        <span>Navigation Button Background Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_nav_bg_color ) ? 'rgba(0, 0, 0, 0.5)' : $ms_nav_bg_color ?>"
            name="ms_nav_bg_color"
            data-alpha-enabled="true"
        />
    </div>

    <div class="field-wrapper">
        <span>Navigation Button Background Hover Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_nav_bg_hover_color ) ? 'rgba(0, 0, 0, 0.8)' : $ms_nav_bg_hover_color ?>"
            name="ms_nav_bg_hover_color"
            data-alpha-enabled="true"
        />
    </div>

    <div class="field-wrapper">
        <span>Navigation Dots Shape</span>
        <select
            class="field"
            name="ms_dot_shape"
        >
            <option
                value="round"
                <?php if ( empty( $ms_dot_shape ) || $ms_dot_shape == 'round' ) { echo 'selected'; } ?>
            >
                Round
            </option>

            <option
                value="bar"
                <?php if ( ! empty( $ms_dot_shape ) && $ms_dot_shape == 'bar' ) { echo 'selected'; } ?>
            >
                Bar
            </option>

            <option
                value="pill"
                <?php if ( ! empty( $ms_dot_shape ) && $ms_dot_shape == 'pill' ) { echo 'selected'; } ?>
            >
                Pill
            </option>
        </select>
    </div>

    <div class="field-wrapper">
        <span>Navigation Dots Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_dot_color ) ? '#e9e9e9' : $ms_dot_color ?>"
            name="ms_dot_color"
        />
    </div>

    <div class="field-wrapper">
        <span>Navigation Dots Active Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_dot_active_color ) ? '#cdcdcd' : $ms_dot_active_color ?>"
            name="ms_dot_active_color"
        />
    </div>
</div>

<script>
    jQuery(document).ready(function ($) {

        // destroy the selectize object for re-initialization on query type selection
        function resetSelectizeData() {
            let selectizeElem = $('#ms_query')[0].selectize

            if ( selectizeElem ) {
                selectizeElem.destroy()
            }
        }

        // render fields according to the selected post type
        function manageFieldRendering() {
            let postType = $('#ms_post_type').val()

            $('.ms-scoped-field').addClass('d-none')

            if ( postType == 'post' ) {
                $('.ms-post-field').removeClass('d-none')
            }

            if ( postType == 'product' ) {
                $('.ms-product-field').removeClass('d-none')
            }

            if ( postType == 'my_slide' ) {
                $('.ms-my-slide-field').removeClass('d-none')
            }
        }

        // function to run when key is pressed in the selectize search field
        function runOnLoad(query, callback) {
            let queryType = $('input[name=ms_query_type]:checked').val();

            let restrictedTypes = ['category', 'product_cat', 'post_tag', 'product_tag', 'my_slide_tag']

            if ( restrictedTypes.includes(queryType) ) {
                return callback()
            }

            if (query.length < 3) {
                return callback();
            }

            makeAjax(query, 'fetch_search', queryType, callback, true)
        }

        // function to run on selectize initialization
        function runOnInitialize() {
            let queryType = $('input[name=ms_query_type]:checked').val();

            if (queryType == 'id') {
                return
            }

            var selectizeElem = $('#ms_query')[0].selectize;

            makeAjax('', 'fetch_search', queryType, (res) => {
                selectizeElem.addOption(res);
                selectizeElem.refreshOptions(false);
            })
        }

        // making ajax request to fetch data
        function makeAjax( query, type, queryType, callback, isLoad = false ) {
            let postType = $('#ms_post_type').val()

            let data = {
                action: 'custom_search',
                postType: postType,
                type: type,
                queryType: queryType,
                query: query
            }

            $.ajax({
                url: ajaxurl,
                type: 'POST',
                dataType: 'json',
                data: data,
                success: function (response) {console.log(response.results)
                    callback(response.results);
                },
                error: function () {
                    if (isLoad) {
                        callback();
                    } else {
                        console.log("Failed to fetch data")
                    }
                }
            });
        }

        // selectize initialization data object
        const selectizeData = {
            valueField:         'id',
            labelField:         'name',
            searchField:        'name',
            placeholder:        'Search...',
            plugins:            ['remove_button'],
            maxOptions:         10,
            load:               (query, callback) => runOnLoad(query, callback),
            onInitialize:       () => runOnInitialize()
        }

        // after changing the post type render only the selected post type related fields and destroy the query selectize object if previously initialized
        $('#ms_post_type').on('afterChange', () => {
            $('input[name="ms_query_type"]:checked').prop('checked', false);
            resetSelectizeData()
            manageFieldRendering()

            $('#ms_query_wrapper').addClass('d-none')
        })

        // render the post type related fields on page load
        manageFieldRendering()

        // on query type change, re-initialize the selectize object and make it visible if it wasn't 
        $(document).on('change', 'input[name=ms_query_type]', () => {
            resetSelectizeData()

            $('#ms_query').selectize({...selectizeData});

            $('#ms_query_wrapper').removeClass('d-none')
        })

        let queryType = $('input[name=ms_query_type]:checked').val()

        // strictly for post edit page, signalled by the existing query type value on page load.
        // initialize the selectize object and fetch and populated it with the saved data on the database
        if (queryType && queryType.length) {
            $('#ms_query').selectize({...selectizeData});

            let query = '<?php echo $ms_query ?>'

            if ( query && query.length ) {

                makeAjax(query, 'fetch_query', queryType, (res) => {
                    let selectizeElem = $('#ms_query')[0].selectize
        
                    selectizeElem.addOption(res)
                    selectizeElem.refreshOptions(false)

                    let values = res.map(item => item.id)
                    values.forEach(val => selectizeElem.addItem(val))
                })
            }

            $('#ms_query_wrapper').removeClass('d-none')
        }

    })
</script>