<?php

$ms_ID                      = get_the_ID();

$ms_query_type              = get_post_meta( $ms_ID, 'ms_query_type', true );
$ms_query                   = get_post_meta( $ms_ID, 'ms_query', true );

$ms_tags                    = ms_get_all_tags();

$ms_post_type               = get_post_meta( $ms_ID, 'ms_post_type', true );
$ms_feature_img_size        = get_post_meta( $ms_ID, 'ms_feature_img_size', true );
$ms_feature_img_ratio       = get_post_meta( $ms_ID, 'ms_feature_img_ratio', true );
$ms_items_to_show           = get_post_meta( $ms_ID, 'ms_items_to_show', true );
$ms_items_to_display_sm     = get_post_meta( $ms_ID, 'ms_items_to_display_sm', true );
$ms_items_to_display_md     = get_post_meta( $ms_ID, 'ms_items_to_display_md', true );
$ms_items_to_display_lg     = get_post_meta( $ms_ID, 'ms_items_to_display_lg', true );
$ms_items_to_display_xl     = get_post_meta( $ms_ID, 'ms_items_to_display_xl', true );
$ms_animation_entrance      = get_post_meta( $ms_ID, 'ms_animation_entrance', true );
$ms_animation_exit          = get_post_meta( $ms_ID, 'ms_animation_exit', true );
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
$ms_show_nav_sm             = get_post_meta( $ms_ID, 'ms_show_nav_sm', true );
$ms_nav_position            = get_post_meta( $ms_ID, 'ms_nav_position', true );
$ms_nav_position_sm         = get_post_meta( $ms_ID, 'ms_nav_position_sm', true );
$ms_nav_radius              = get_post_meta( $ms_ID, 'ms_nav_radius', true );
$ms_show_dots               = get_post_meta( $ms_ID, 'ms_show_dots', true );
$ms_show_dots_sm            = get_post_meta( $ms_ID, 'ms_show_dots_sm', true );
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
$ms_horizontal_align        = get_post_meta( $ms_ID, 'ms_horizontal_align', true );
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

<div class="tab-index-wrapper">

	<div class="tab-wrapper">
		<ul class="tabs">
            <li class="tab-link active" data-tab="1">General Settings</li>
            <li class="tab-link" data-tab="2">Slider Settings</li>
            <li class="tab-link" data-tab="3">Autoplay Settings</li>
            <li class="tab-link" data-tab="4">Content & Typography</li>
		</ul>
	</div>

</div>

<div class="form-wrapper">

    <!-- General Settings Tab -->
    <div id="tab-1" class="tab-content active">

        <div class="field-wrapper">
            <span>Post Type</span>
            <select class="field" id="ms_post_type" name="ms_post_type">
                <option
                    value="post"
                    <?php echo ( empty( $ms_post_type ) || $ms_post_type == 'post' ) ? 'selected' : '' ?>
                >
                    Blog Post
                </option>

                <?php if ( MS_WC_IS_ACTIVE ) : ?>
                <option
                    value="product"
                    <?php echo ( ! empty( $ms_post_type ) && $ms_post_type == 'product' ) ? 'selected' : '' ?>
                >
                    Woo Commerce Product
                </option>
                <?php endif ?>

                <option
                    value="my_slide"
                    <?php echo ( ! empty( $ms_post_type ) && $ms_post_type == 'my_slide' ) ? 'selected' : '' ?>
                >
                    Slide
                </option>
            </select>
        </div>

        <div class="field-wrapper">
            <span>Load Content Using</span>
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
                        <label for="ms_query_type_my_slide_tag">Slide Group</label>
                    </div>

                    <div class="">
                        <input name="ms_query_type" id="ms_query_type_id" type="radio"
                            value="id"
                            <?php if ( $ms_query_type == 'id' ) { echo 'checked'; } ?>
                        >
                        <label for="ms_query_type_id">Name</label>
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

        <div class="field-wrapper d-none" id="ms_query_wrapper">
            <span></span>
            <select name="ms_query[]" id="ms_query" multiple="multiple"></select>
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

        <div class="field-wrapper">
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
            <span>Navigation</span>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="ms_show_nav" id="ms_show_nav_on" type="radio"
                        value="true"
                        <?php if ( $ms_show_nav == 'true' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_show_nav_on" class="radioCheck">Show</label>
                    <input name="ms_show_nav" id="ms_show_nav_off" type="radio"
                        value="false"
                        <?php if ( $ms_show_nav == 'false' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_show_nav_off" class="radioCheck">Hide</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>
    
        <div class="field-wrapper mt-20" id="ms_nav_settings">
            <span>Navigation Settings</span>
            <div class="field-group">
                <div class="field-wrapper">
                    <span>Position</span>
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
                            <?php if($ms_nav_position == "middle-wide") { echo "selected"; } ?> 
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
                    <span>Font Size</span>
                    <input
                        class="field"
                        type="number"
                        min="8"
                        step="1"
                        value="<?php if( ! empty( $ms_nav_fs ) ) { echo $ms_nav_fs; } ?>"
                        name="ms_nav_fs"
                    />
                </div>
    
                <div class="field-wrapper">
                    <span>Font Weight</span>
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
                            <?php if ( ! empty( $ms_nav_fw ) && $ms_nav_fw == '500' ) { echo 'selected'; } ?>
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
                    <span>Border Radius</span>
                    <input
                        class="field"
                        type="number"
                        min="0"
                        max="50"
                        value="<?php if( ! empty( $ms_nav_radius ) ) { echo $ms_nav_radius; } ?>"
                        step="1"
                        name="ms_nav_radius"
                    />
                </div>
    
                <div class="field-wrapper">
                    <span>Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php if( ! empty( $ms_nav_color ) ) { echo $ms_nav_color; } ?>"
                        name="ms_nav_color"
                    />
                </div>
    
                <div class="field-wrapper">
                    <span>Background Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php if( ! empty( $ms_nav_bg_color ) ) { echo $ms_nav_bg_color; } ?>"
                        name="ms_nav_bg_color"
                        data-alpha-enabled="true"
                    />
                </div>
    
                <div class="field-wrapper">
                    <span>Hover Background Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php if( ! empty( $ms_nav_bg_hover_color ) ) { echo $ms_nav_bg_hover_color; } ?>"
                        name="ms_nav_bg_hover_color"
                        data-alpha-enabled="true"
                    />
                </div>

                <div class="field-wrapper">
                    <span>Navigation On Small Devices</span>
                    <div>
                        <span class="switch radio-switch fixed-width-lg">
                            <input name="ms_show_nav_sm" id="ms_show_nav_sm_on" type="radio"
                                value="true"
                                <?php if ( $ms_show_nav_sm == 'true' ) { echo 'checked'; } ?>
                            >
                            <label for="ms_show_nav_sm_on" class="radioCheck">Show</label>
                            <input name="ms_show_nav_sm" id="ms_show_nav_sm_off" type="radio"
                                value="false"
                                <?php if ( $ms_show_nav_sm == 'false' ) { echo 'checked'; } ?>
                            >
                            <label for="ms_show_nav_sm_off" class="radioCheck">Hide</label>
                            <a class="slide-button btn"></a>
                        </span>
                    </div>
                </div>

                <div class="field-wrapper">
                    <span>Position On Small Devices</span>
                    <select class="field" id="ms_nav_position_sm" name="ms_nav_position_sm">
                        <option
                            value=""
                        >
                            Select An Option
                        </option>

                        <option
                            value="top-wide"
                            <?php if($ms_nav_position_sm == "top-wide") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Top','my-slider');?>
                        </option>
        
                        <option
                            value="top-left"
                            <?php if($ms_nav_position_sm == "top-left") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Top Left','my-slider');?>
                        </option>
        
                        <option
                            value="top-right"
                            <?php if($ms_nav_position_sm == "top-right") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Top Right','my-slider');?>
                        </option>
        
                        <option
                            value="top-center"
                            <?php if($ms_nav_position_sm == "top-center") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Top Center','my-slider');?>
                        </option>
        
                        <option
                            value="middle-wide"
                            <?php if($ms_nav_position_sm == "middle-wide") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Middle','my-slider');?>
                        </option>
        
                        <option
                            value="bottom-wide"
                            <?php if($ms_nav_position_sm == "bottom-wide") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Bottom','my-slider');?>
                        </option>
        
                        <option
                            value="bottom-left"
                            <?php if($ms_nav_position_sm == "bottom-left") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Bottom Left','my-slider');?>
                        </option>
        
                        <option
                            value="bottom-right"
                            <?php if($ms_nav_position_sm == "bottom-right") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Bottom Right','my-slider');?>
                        </option>
        
                        <option
                            value="bottom-center"
                            <?php if($ms_nav_position_sm == "bottom-center") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Bottom Center','my-slider');?>
                        </option>
        
                    </select>
                </div>
            </div>
        </div>
    
        <div class="field-wrapper">
            <span>Dots</span>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="ms_show_dots" id="ms_show_dots_on" type="radio"
                        value="true"
                        <?php if ( $ms_show_dots == 'true' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_show_dots_on" class="radioCheck">Show</label>
                    <input name="ms_show_dots" id="ms_show_dots_off" type="radio"
                        value="false"
                        <?php if ( $ms_show_dots == 'false' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_show_dots_off" class="radioCheck">Hide</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>
    
        <div class="field-wrapper mt-20" id="ms_dots_settings">
            <span>Dots Settings</span>
            <div class="field-group">

                <div class="field-wrapper">
                    <span>Show For Each Item</span>
                    <div>
                        <span class="switch radio-switch fixed-width-lg">
                            <input name="ms_show_dots_foreach" id="ms_show_dots_foreach_on" type="radio"
                                value="true"
                                <?php if ( $ms_show_dots_foreach == 'true' ) { echo 'checked'; } ?>
                            >
                            <label for="ms_show_dots_foreach_on" class="radioCheck">Yes</label>
                            <input name="ms_show_dots_foreach" id="ms_show_dots_foreach_off" type="radio"
                                value="false"
                                <?php if ( $ms_show_dots_foreach == 'false' ) { echo 'checked'; } ?>
                            >
                            <label for="ms_show_dots_foreach_off" class="radioCheck">No</label>
                            <a class="slide-button btn"></a>
                        </span>
                    </div>
                </div>
    
                <div class="field-wrapper">
                    <span>Shape</span>
                    <select
                        class="field"
                        name="ms_dot_shape"
                    >
                        <option
                            value="round"
                            <?php if ( ! empty( $ms_dot_shape ) && $ms_dot_shape == 'round' ) { echo 'selected'; } ?>
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
                    <span>Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php if ( ! empty( $ms_dot_color ) ) { echo $ms_dot_color; } ?>"
                        name="ms_dot_color"
                    />
                </div>
    
                <div class="field-wrapper">
                    <span>Active Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php if( ! empty( $ms_dot_active_color ) ) { echo $ms_dot_active_color; } ?>"
                        name="ms_dot_active_color"
                    />
                </div>
    
                <div class="field-wrapper">
                    <span>Dots On Small Devices</span>
                    <div>
                        <span class="switch radio-switch fixed-width-lg">
                            <input name="ms_show_dots_sm" id="ms_show_dots_sm_on" type="radio"
                                value="true"
                                <?php if ( $ms_show_dots_sm == 'true' ) { echo 'checked'; } ?>
                            >
                            <label for="ms_show_dots_sm_on" class="radioCheck">Show</label>
                            <input name="ms_show_dots_sm" id="ms_show_dots_sm_off" type="radio"
                                value="false"
                                <?php if ( $ms_show_dots_sm == 'false' ) { echo 'checked'; } ?>
                            >
                            <label for="ms_show_dots_sm_off" class="radioCheck">Hide</label>
                            <a class="slide-button btn"></a>
                        </span>
                    </div>
                </div>
    
            </div>
        </div>

    </div>

    <!-- Slider Settings Tab -->
    <div id="tab-2" class="tab-content">

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
            <div class="field-group">

                <div class="field-wrapper">
                    <div>
                        <span>Larger Screens</span>
                        <br>
                        <small>Screen size larger than 1440px</small>
                        <br>
                        <small>Default 4</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        min="1"
                        max="20"
                        value="<?php if( ! empty( $ms_items_to_display_xl ) ) { echo $ms_items_to_display_xl; } ?>"
                        step="1"
                        name="ms_items_to_display_xl"
                    />
                </div>

                <div class="field-wrapper">
                    <div>
                        <span>Large Screens</span>
                        <br>
                        <small>Screen size 1024px - 1440px</small>
                        <br>
                        <small>Default 3</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        min="1"
                        max="20"
                        value="<?php if( ! empty( $ms_items_to_display_lg ) ) { echo $ms_items_to_display_lg; } ?>"
                        step="1"
                        name="ms_items_to_display_lg"
                    />
                </div>

                <div class="field-wrapper">
                    <div>
                        <span>Medium Screens</span>
                        <br>
                        <small>Screen size 640px - 1024px</small>
                        <br>
                        <small>Default 2</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        min="1"
                        max="20"
                        value="<?php if( ! empty( $ms_items_to_display_md ) ) { echo $ms_items_to_display_md; } ?>"
                        step="1"
                        name="ms_items_to_display_md"
                    />
                </div>

                <div class="field-wrapper">
                    <div>
                        <span>Small Screens</span>
                        <br>
                        <small>Smaller size than 640px</small>
                        <br>
                        <small>Default 1</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        min="1"
                        max="20"
                        value="<?php if( ! empty( $ms_items_to_display_sm ) ) { echo $ms_items_to_display_sm; } ?>"
                        step="1"
                        name="ms_items_to_display_sm"
                    />
                </div>

            </div>
        </div>

        <div class="field-wrapper">
            <span>Slide Entrance Animation</span>
            <select
                id="ms_animation_entrance"
                name="ms_animation_entrance"
            >
                <option
                    value=""
                >
                    Select An Option
                </option>

                <option
                    value="animate__slideInRight"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__slideInRight' ) { echo 'selected'; } ?>
                >
                    Slide Right
                </option>

                <option
                    value="animate__slideInLeft"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__slideInLeft' ) { echo 'selected'; } ?>
                >
                    Slide Left
                </option>

                <option
                    value="animate__slideInDown"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__slideInDown' ) { echo 'selected'; } ?>
                >
                    Slide Down
                </option>

                <option
                    value="animate__slideInUp"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__slideInUp' ) { echo 'selected'; } ?>
                >
                    Slide Up
                </option>

                <option
                    value="animate__fadeIn"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__fadeIn' ) { echo 'selected'; } ?>
                    >
                    Fade In
                </option>

                <option
                    value="animate__fadeInLeft"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__fadeInLeft' ) { echo 'selected'; } ?>
                    >
                    Fade Left
                </option>

                <option
                    value="animate__fadeInRight"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__fadeInRight' ) { echo 'selected'; } ?>
                    >
                    Fade Right
                </option>

                <option
                    value="animate__fadeInUp"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__fadeInUp' ) { echo 'selected'; } ?>
                    >
                    Fade Up
                </option>

                <option
                    value="animate__fadeInDown"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__fadeInDown' ) { echo 'selected'; } ?>
                    >
                    Fade Down
                </option>

                <option
                    value="animate__zoomIn"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__zoomIn' ) { echo 'selected'; } ?>
                >
                    Zoom In
                </option>

                <option
                    value="animate__zoomInLeft"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__zoomInLeft' ) { echo 'selected'; } ?>
                >
                    Zoom Left
                </option>

                <option
                    value="animate__zoomInRight"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__zoomInRight' ) { echo 'selected'; } ?>
                >
                    Zoom Right
                </option>

                <option
                    value="animate__zoomInUp"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__zoomInUp' ) { echo 'selected'; } ?>
                >
                    Zoom Up
                </option>

                <option
                    value="animate__zoomInDown"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__zoomInDown' ) { echo 'selected'; } ?>
                >
                    Zoom Down
                </option>

                <option
                    value="animate__bounceInLeft"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__bounceInLeft' ) { echo 'selected'; } ?>
                >
                    Bounce Left
                </option>

                <option
                    value="animate__bounceInRight"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__bounceInRight' ) { echo 'selected'; } ?>
                >
                    Bounce Right
                </option>

                <option
                    value="animate__bounceInUp"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__bounceInUp' ) { echo 'selected'; } ?>
                >
                    Bounce Up
                </option>

                <option
                    value="animate__bounceInDown"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__bounceInDown' ) { echo 'selected'; } ?>
                >
                    Bounce Down
                </option>

                <option
                    value="animate__backInLeft"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__backInLeft' ) { echo 'selected'; } ?>
                >
                    Back Left
                </option>

                <option
                    value="animate__backInRight"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__backInRight' ) { echo 'selected'; } ?>
                >
                    Back Right
                </option>

                <option
                    value="animate__backInUp"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__backInUp' ) { echo 'selected'; } ?>
                >
                    Back Up
                </option>

                <option
                    value="animate__backInDown"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__backInDown' ) { echo 'selected'; } ?>
                >
                    Back Down
                </option>

                <option
                    value="animate__rotateIn"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__rotateIn' ) { echo 'selected'; } ?>
                >
                    Rotate
                </option>

                <option
                    value="animate__rotateInUpLeft"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__rotateInUpLeft' ) { echo 'selected'; } ?>
                >
                    Rotate Up From Left
                </option>

                <option
                    value="animate__rotateInUpRight"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__rotateInUpRight' ) { echo 'selected'; } ?>
                >
                    Rotate Up From Right
                </option>

                <option
                    value="animate__rotateInDownLeft"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__rotateInDownLeft' ) { echo 'selected'; } ?>
                >
                    Rotate Down From Left
                </option>

                <option
                    value="animate__rotateInDownRight"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__rotateInDownRight' ) { echo 'selected'; } ?>
                >
                    Rotate Down From Right
                </option>

                <option
                    value="animate__flipIn"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__flipIn' ) { echo 'selected'; } ?>
                >
                    Flip
                </option>

                <option
                    value="animate__flipInX"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__flipInX' ) { echo 'selected'; } ?>
                >
                    Flip Horizontaly
                </option>

                <option
                    value="animate__flipInY"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__flipInY' ) { echo 'selected'; } ?>
                >
                    Flip Verticaly
                </option>

                <option
                    value="animate__lightSpeedInLeft"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__lightSpeedInLeft' ) { echo 'selected'; } ?>
                >
                    Lightspeed Left
                </option>

                <option
                    value="animate__lightSpeedInRight"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__lightSpeedInRight' ) { echo 'selected'; } ?>
                >
                    Lightspeed Right
                </option>

                <option
                    value="animate__rollIn"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__rollIn' ) { echo 'selected'; } ?>
                >
                    Roll In
                </option>

                <option
                    value="animate__jackInTheBox"
                    <?php if ( ! empty( $ms_animation_entrance ) && $ms_animation_entrance == 'animate__jackInTheBox' ) { echo 'selected'; } ?>
                >
                Jack In The Box
                </option>
            </select>
        </div>

        <div class="field-wrapper">
            <span>Slide Exit Animation</span>
            <select
                id="ms_animation_exit"
                name="ms_animation_exit"
            >
                <option
                    value=""
                >
                    Select An Option
                </option>

                <option
                    value="animate__slideOutRight"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__slideOutRight' ) { echo 'selected'; } ?>
                >
                    Slide Right
                </option>

                <option
                    value="animate__slideOutLeft"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__slideOutLeft' ) { echo 'selected'; } ?>
                >
                    Slide Left
                </option>

                <option
                    value="animate__slideOutDown"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__slideOutDown' ) { echo 'selected'; } ?>
                >
                    Slide Down
                </option>

                <option
                    value="animate__slideOutUp"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__slideOutUp' ) { echo 'selected'; } ?>
                >
                    Slide Up
                </option>

                <option
                    value="animate__fadeOut"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__fadeOut' ) { echo 'selected'; } ?>
                    >
                    Fade Out
                </option>

                <option
                    value="animate__fadeOutLeft"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__fadeOutLeft' ) { echo 'selected'; } ?>
                    >
                    Fade Left
                </option>

                <option
                    value="animate__fadeOutRight"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__fadeOutRight' ) { echo 'selected'; } ?>
                    >
                    Fade Right
                </option>

                <option
                    value="animate__fadeOutUp"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__fadeOutUp' ) { echo 'selected'; } ?>
                    >
                    Fade Up
                </option>

                <option
                    value="animate__fadeOutDown"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__fadeOutDown' ) { echo 'selected'; } ?>
                    >
                    Fade Down
                </option>

                <option
                    value="animate__zoomOut"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__zoomOut' ) { echo 'selected'; } ?>
                >
                    Zoom Out
                </option>

                <option
                    value="animate__zoomOutLeft"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__zoomOutLeft' ) { echo 'selected'; } ?>
                >
                    Zoom Left
                </option>

                <option
                    value="animate__zoomOutRight"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__zoomOutRight' ) { echo 'selected'; } ?>
                >
                    Zoom Right
                </option>

                <option
                    value="animate__zoomOutUp"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__zoomOutUp' ) { echo 'selected'; } ?>
                >
                    Zoom Up
                </option>

                <option
                    value="animate__zoomOutDown"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__zoomOutDown' ) { echo 'selected'; } ?>
                >
                    Zoom Down
                </option>

                <option
                    value="animate__bounceOutLeft"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__bounceOutLeft' ) { echo 'selected'; } ?>
                >
                    Bounce Left
                </option>

                <option
                    value="animate__bounceOutRight"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__bounceOutRight' ) { echo 'selected'; } ?>
                >
                    Bounce Right
                </option>

                <option
                    value="animate__bounceOutUp"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__bounceOutUp' ) { echo 'selected'; } ?>
                >
                    Bounce Up
                </option>

                <option
                    value="animate__bounceOutDown"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__bounceOutDown' ) { echo 'selected'; } ?>
                >
                    Bounce Down
                </option>

                <option
                    value="animate__backOutLeft"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__backOutLeft' ) { echo 'selected'; } ?>
                >
                    Back Left
                </option>

                <option
                    value="animate__backOutRight"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__backOutRight' ) { echo 'selected'; } ?>
                >
                    Back Right
                </option>

                <option
                    value="animate__backOutUp"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__backOutUp' ) { echo 'selected'; } ?>
                >
                    Back Up
                </option>

                <option
                    value="animate__backOutDown"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__backOutDown' ) { echo 'selected'; } ?>
                >
                    Back Down
                </option>

                <option
                    value="animate__rotateOut"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__rotateOut' ) { echo 'selected'; } ?>
                >
                    Rotate
                </option>

                <option
                    value="animate__rotateOutUpLeft"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__rotateOutUpLeft' ) { echo 'selected'; } ?>
                >
                    Rotate Up From Left
                </option>

                <option
                    value="animate__rotateOutUpRight"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__rotateOutUpRight' ) { echo 'selected'; } ?>
                >
                    Rotate Up From Right
                </option>

                <option
                    value="animate__rotateOutDownLeft"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__rotateOutDownLeft' ) { echo 'selected'; } ?>
                >
                    Rotate Down From Left
                </option>

                <option
                    value="animate__rotateOutDownRight"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__rotateOutDownRight' ) { echo 'selected'; } ?>
                >
                    Rotate Down From Right
                </option>

                <option
                    value="animate__flipOut"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__flipOut' ) { echo 'selected'; } ?>
                >
                    Flip
                </option>

                <option
                    value="animate__flipOutX"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__flipOutX' ) { echo 'selected'; } ?>
                >
                    Flip Horizontaly
                </option>

                <option
                    value="animate__flipOutY"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__flipOutY' ) { echo 'selected'; } ?>
                >
                    Flip Verticaly
                </option>

                <option
                    value="animate__lightSpeedOutLeft"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__lightSpeedOutLeft' ) { echo 'selected'; } ?>
                >
                    Lightspeed Left
                </option>

                <option
                    value="animate__lightSpeedOutRight"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__lightSpeedOutRight' ) { echo 'selected'; } ?>
                >
                    Lightspeed Right
                </option>

                <option
                    value="animate__rollOut"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__rollOut' ) { echo 'selected'; } ?>
                >
                    Roll Out
                </option>

                <option
                    value="animate__hinge"
                    <?php if ( ! empty( $ms_animation_exit ) && $ms_animation_exit == 'animate__hinge' ) { echo 'selected'; } ?>
                >
                    Hinge
                </option>
            </select>
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
            <span>Slides Background Color</span>
            <input
                class="ms-color-picker"
                type="text"
                value="<?php echo empty( $ms_bg_color ) ? '#ffffff' : $ms_bg_color ?>"
                name="ms_bg_color"
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
            <span>Slide Content Horizontal Alignment</span>
            <select
                class="field"
                name="ms_horizontal_align"
            >
                <option
                    value="baseline"
                    <?php if ( ! empty( $ms_horizontal_align ) && $ms_horizontal_align == 'baseline' ) { echo 'selected'; } ?>
                >
                    Left
                </option>

                <option
                    value="center"
                    <?php if ( empty( $ms_horizontal_align ) || $ms_horizontal_align == 'center' ) { echo 'selected'; } ?>
                    >
                    Center
                </option>

                <option
                    value="end"
                    <?php if ( ! empty( $ms_horizontal_align ) && $ms_horizontal_align == 'end' ) { echo 'selected'; } ?>
                >
                    Right
                </option>
            </select>
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

    </div>

    <!-- Autoplay Settings Tab -->
    <div id="tab-3" class="tab-content">

        <div class="field-wrapper">
            <span>Autoplay</span>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="ms_autoplay" id="ms_autoplay_on" type="radio"
                        value="true"
                        <?php if ( empty( $ms_autoplay ) || $ms_autoplay == 'true' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_autoplay_on" class="radioCheck">On</label>
                    <input name="ms_autoplay" id="ms_autoplay_off" type="radio"
                        value="false"
                        <?php if ( $ms_autoplay == 'false' ) { echo 'checked'; } ?>
                    >
                    <label for="ms_autoplay_off" class="radioCheck">Off</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>

        <div class="field-wrapper mt-20" id="ms_autoplay_settings">
            <span></span>
            <div class="field-group">
                <div class="field-wrapper">
                    <span>Timeout</span>
                    <input
                        class="field"
                        type="number"
                        value="<?php echo empty( $ms_autoplay_timeout ) ? '5000' : $ms_autoplay_timeout ?>"
                        step="1"
                        name="ms_autoplay_timeout"
                    />
                </div>
            
                <div class="field-wrapper">
                    <span>Speed</span>
                    <input
                        class="field"
                        type="number"
                        value="<?php echo empty( $ms_autoplay_speed ) ? '700' : $ms_autoplay_speed ?>"
                        step="1"
                        name="ms_autoplay_speed"
                    />
                </div>
            
                <div class="field-wrapper">
                    <span>Pause On Mouse Over</span>
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
            </div>
        </div>

    </div>

    <!-- Content & Typography Tab -->
    <div id="tab-4" class="tab-content">

        <div class="field-wrapper ms-product-field ms-post-field ms-scoped-field d-none">
            <span>Title</span>
            <div class="field-group">

                <div class="field-wrapper ms-product-field ms-post-field ms-scoped-field d-none">
                    <span>Font Size</span>
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
                    <span>Font Weight</span>
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
                    <span>Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_title_color ) ? '#000000' : $ms_title_color ?>"
                        name="ms_title_color"
                    />
                </div>

            </div>
        </div>

        <div class="field-wrapper ms-post-field ms-scoped-field d-none">
            <span>Comment Count</span>
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

        <div class="field-wrapper mt-20 ms-post-field ms-scoped-field d-none" id="ms_comment_settings">
            <span></span>
            <div class="field-group">
    
                <div class="field-wrapper ms-post-field ms-scoped-field d-none">
                    <span>Icon Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_comment_icon_color ) ? '#000000' : $ms_comment_icon_color ?>"
                        name="ms_comment_icon_color"
                    />
                </div>
    
                <div class="field-wrapper ms-post-field ms-scoped-field d-none">
                    <span>Font Size</span>
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
                    <span>Font Weight</span>
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
                    <span>Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_comment_color ) ? '#000000' : $ms_comment_color ?>"
                        name="ms_comment_color"
                    />
                </div>
    
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

        <div class="field-wrapper mt-20 ms-post-field ms-scoped-field d-none" id="ms_category_settings">
            <span></span>
            <div class="field-group">
    
                <div class="field-wrapper ms-post-field ms-scoped-field d-none">
                    <span>Icon Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_category_icon_color ) ? '#000000' : $ms_category_icon_color ?>"
                        name="ms_category_icon_color"
                    />
                </div>
    
                <div class="field-wrapper ms-post-field ms-scoped-field d-none">
                    <span>Font Size</span>
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
                    <span>Font Weight</span>
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
                    <span>Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_category_color ) ? '#ffffff' : $ms_category_color ?>"
                        name="ms_category_color"
                    />
                </div>
    
                <div class="field-wrapper ms-post-field ms-scoped-field d-none">
                    <span>Background Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_category_bg_color ) ? '#5E76BF' : $ms_category_bg_color ?>"
                        name="ms_category_bg_color"
                    />
                </div>
    
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

        <div class="field-wrapper mt-20 ms-post-field ms-scoped-field d-none" id="ms_tag_settings">
            <span></span>
            <div class="field-group">
    
                <div class="field-wrapper ms-post-field ms-scoped-field d-none">
                    <span>Font Size</span>
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
                    <span>Font Weight</span>
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
                    <span>Icon Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_tag_icon_color ) ? '#000000' : $ms_tag_icon_color ?>"
                        name="ms_tag_icon_color"
                    />
                </div>
    
                <div class="field-wrapper ms-post-field ms-scoped-field d-none">
                    <span>Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_tag_color ) ? '#888888' : $ms_tag_color ?>"
                        name="ms_tag_color"
                    />
                </div>
    
                <div class="field-wrapper ms-post-field ms-scoped-field d-none">
                    <span>Background Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_tag_bg_color ) ? '#e9e9e9' : $ms_tag_bg_color ?>"
                        name="ms_tag_bg_color"
                    />
                </div>
    
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

        <div class="field-wrapper mt-20 ms-post-field ms-scoped-field d-none" id="ms_excerpt_settings">
            <span></span>
            <div class="field-group">
    
                <div class="field-wrapper ms-post-field ms-scoped-field d-none">
                    <span>Length</span>
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
                    <span>Font Size</span>
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
                    <span>Font Weight</span>
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
                    <span>Color</span>
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
    
            </div>
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

        <div class="field-wrapper mt-20 ms-post-field ms-scoped-field d-none" id="ms_author_settings">
            <span></span>
            <div class="field-group">
    
                <div class="field-wrapper ms-post-field ms-scoped-field d-none">
                    <span>Avatar</span>
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
                    <span>Font Size</span>
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
                    <span>Font Weight</span>
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
                    <span>Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_author_color ) ? '#000000' : $ms_author_color ?>"
                        name="ms_author_color"
                    />
                </div>
    
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

        <div class="field-wrapper mt-20 ms-post-field ms-scoped-field d-none" id="ms_date_settings">
            <span></span>
            <div class="field-group">
    
                <div class="field-wrapper ms-post-field ms-scoped-field d-none">
                    <span>Font Size</span>
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
                    <span>Font Weight</span>
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
                    <span>Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_date_color ) ? '#545d7a' : $ms_date_color ?>"
                        name="ms_date_color"
                    />
                </div>
    
            </div>
        </div>

        <div class="field-wrapper ms-product-field ms-scoped-field d-none">
            <span>Stock Status</span>
            <div class="field-group">
    
                <div class="field-wrapper ms-product-field ms-scoped-field d-none">
                    <span>Font Size</span>
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
                    <span>Font Weight</span>
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
                    <span>Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_stock_color ) ? '#545d7a' : $ms_stock_color ?>"
                        name="ms_stock_color"
                    />
                </div>
    
            </div>
        </div>

        <div class="field-wrapper ms-product-field ms-scoped-field d-none">
            <span>Sales Count</span>
            <div class="field-group">
    
                <div class="field-wrapper ms-product-field ms-scoped-field d-none">
                    <span>Font Size</span>
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
                    <span>Font Weight</span>
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
                    <span>Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_sales_color ) ? '#545d7a' : $ms_sales_color ?>"
                        name="ms_sales_color"
                    />
                </div>
    
            </div>
        </div>

        <div class="field-wrapper ms-product-field ms-scoped-field d-none">
            <span>Rating Star</span>
            <div class="field-group">
    
                <div class="field-wrapper ms-product-field ms-scoped-field d-none">
                    <span>Font Size</span>
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
                    <span>Font Weight</span>
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
                    <span>Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_review_color ) ? '#545d7a' : $ms_review_color ?>"
                        name="ms_review_color"
                    />
                </div>
    
            </div>
        </div>

        <div class="field-wrapper ms-product-field ms-scoped-field d-none">
            <span>Pricing</span>
            <div class="field-group">
    
                <div class="field-wrapper ms-product-field ms-scoped-field d-none">
                    <span>Active Font Size</span>
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
                    <span>Active Font Weight</span>
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
                    <span>Active Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_active_price_color ) ? '#545d7a' : $ms_active_price_color ?>"
                        name="ms_active_price_color"
                    />
                </div>
    
                <div class="field-wrapper ms-product-field ms-scoped-field d-none">
                    <span>Previous Font Size</span>
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
                    <span>Previous Font Weight</span>
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
                    <span>Previous Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_prev_price_color ) ? '#545d7a' : $ms_prev_price_color ?>"
                        name="ms_prev_price_color"
                    />
                </div>
    
            </div>
        </div>

        <div class="field-wrapper ms-product-field ms-scoped-field d-none">
            <span>Cart Button</span>
            <div class="field-group">
    
                <div class="field-wrapper ms-product-field ms-scoped-field d-none">
                    <span>Font Size</span>
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
                    <span>Font Weight</span>
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
                    <span>Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_woo_button_color ) ? '#545d7a' : $ms_woo_button_color ?>"
                        name="ms_woo_button_color"
                    />
                </div>
    
                <div class="field-wrapper ms-product-field ms-scoped-field d-none">
                    <span>Background Color</span>
                    <input
                        class="ms-color-picker"
                        type="text"
                        value="<?php echo empty( $ms_woo_button_bg_color ) ? '#545d7a' : $ms_woo_button_bg_color ?>"
                        name="ms_woo_button_bg_color"
                    />
                </div>
    
            </div>
        </div>

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

            if (['id', 'sku'].includes(queryType)) {
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

        // after changing the post type render only the selected post type related fields
        // as well as destroy the query selectize object if previously initialized
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