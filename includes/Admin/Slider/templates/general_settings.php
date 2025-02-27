<?php

$cs_ID                      = get_the_ID();

$cs_query_type              = get_post_meta( $cs_ID, 'cs_query_type', true );
$cs_query                   = get_post_meta( $cs_ID, 'cs_query', true );

$cs_post_type               = get_post_meta( $cs_ID, 'cs_post_type', true );
$cs_feature_img_size        = get_post_meta( $cs_ID, 'cs_feature_img_size', true );
$cs_feature_img_ratio       = get_post_meta( $cs_ID, 'cs_feature_img_ratio', true );
$cs_items_to_show           = get_post_meta( $cs_ID, 'cs_items_to_show', true );
$cs_items_to_display_sm     = get_post_meta( $cs_ID, 'cs_items_to_display_sm', true );
$cs_items_to_display_md     = get_post_meta( $cs_ID, 'cs_items_to_display_md', true );
$cs_items_to_display_lg     = get_post_meta( $cs_ID, 'cs_items_to_display_lg', true );
$cs_items_to_display_xl     = get_post_meta( $cs_ID, 'cs_items_to_display_xl', true );
$cs_animation_entrance      = get_post_meta( $cs_ID, 'cs_animation_entrance', true );
$cs_animation_exit          = get_post_meta( $cs_ID, 'cs_animation_exit', true );
$cs_order                   = get_post_meta( $cs_ID, 'cs_order', true );
$cs_show_comments           = get_post_meta( $cs_ID, 'cs_show_comments', true );
$cs_show_category           = get_post_meta( $cs_ID, 'cs_show_category', true );
$cs_show_tags               = get_post_meta( $cs_ID, 'cs_show_tags', true );
$cs_show_excerpt            = get_post_meta( $cs_ID, 'cs_show_excerpt', true );
$cs_excerpt_length          = get_post_meta( $cs_ID, 'cs_excerpt_length', true );
$cs_read_more_text          = get_post_meta( $cs_ID, 'cs_read_more_text', true );
$cs_show_author             = get_post_meta( $cs_ID, 'cs_show_author', true );
$cs_show_avatar             = get_post_meta( $cs_ID, 'cs_show_avatar', true );
$cs_show_date               = get_post_meta( $cs_ID, 'cs_show_date', true );

$cs_margin_right            = get_post_meta( $cs_ID, 'cs_margin_right', true );
$cs_loop                    = get_post_meta( $cs_ID, 'cs_loop', true );
$cs_center                  = get_post_meta( $cs_ID, 'cs_center', true );
$cs_show_nav                = get_post_meta( $cs_ID, 'cs_show_nav', true );
$cs_show_nav_sm             = get_post_meta( $cs_ID, 'cs_show_nav_sm', true );
$cs_nav_position            = get_post_meta( $cs_ID, 'cs_nav_position', true );
$cs_nav_position_sm         = get_post_meta( $cs_ID, 'cs_nav_position_sm', true );
$cs_nav_radius              = get_post_meta( $cs_ID, 'cs_nav_radius', true );
$cs_show_dots               = get_post_meta( $cs_ID, 'cs_show_dots', true );
$cs_show_dots_sm            = get_post_meta( $cs_ID, 'cs_show_dots_sm', true );
$cs_show_dots_foreach       = get_post_meta( $cs_ID, 'cs_show_dots_foreach', true );
$cs_autoplay                = get_post_meta( $cs_ID, 'cs_autoplay', true );
$cs_autoplay_timeout        = get_post_meta( $cs_ID, 'cs_autoplay_timeout', true );
$cs_autoplay_hover_pause    = get_post_meta( $cs_ID, 'cs_autoplay_hover_pause', true );
$cs_autoplay_speed          = get_post_meta( $cs_ID, 'cs_autoplay_speed', true );

$cs_bg_color                = get_post_meta( $cs_ID, 'cs_bg_color', true );
$cs_meta_fs                 = get_post_meta( $cs_ID, 'cs_meta_fs', true );
$cs_comment_icon_color      = get_post_meta( $cs_ID, 'cs_comment_icon_color', true );
$cs_comment_fw              = get_post_meta( $cs_ID, 'cs_comment_fw', true );
$cs_comment_color           = get_post_meta( $cs_ID, 'cs_comment_color', true );
$cs_category_icon_color     = get_post_meta( $cs_ID, 'cs_category_icon_color', true );
$cs_category_fw             = get_post_meta( $cs_ID, 'cs_category_fw', true );
$cs_category_color          = get_post_meta( $cs_ID, 'cs_category_color', true );
$cs_category_bg_color       = get_post_meta( $cs_ID, 'cs_category_bg_color', true );
$cs_date_icon_color         = get_post_meta( $cs_ID, 'cs_date_icon_color', true );
$cs_date_fw                 = get_post_meta( $cs_ID, 'cs_date_fw', true );
$cs_date_color              = get_post_meta( $cs_ID, 'cs_date_color', true );
// $cs_tag_icon_color          = get_post_meta( $cs_ID, 'cs_tag_icon_color', true );
// $cs_tag_fs                  = get_post_meta( $cs_ID, 'cs_tag_fs', true );
// $cs_tag_fw                  = get_post_meta( $cs_ID, 'cs_tag_fw', true );
// $cs_tag_color               = get_post_meta( $cs_ID, 'cs_tag_color', true );
// $cs_tag_bg_color            = get_post_meta( $cs_ID, 'cs_tag_bg_color', true );
$cs_title_fs                = get_post_meta( $cs_ID, 'cs_title_fs', true );
$cs_title_fw                = get_post_meta( $cs_ID, 'cs_title_fw', true );
$cs_title_color             = get_post_meta( $cs_ID, 'cs_title_color', true );
$cs_excerpt_fs              = get_post_meta( $cs_ID, 'cs_excerpt_fs', true );
$cs_excerpt_fw              = get_post_meta( $cs_ID, 'cs_excerpt_fw', true );
$cs_excerpt_color           = get_post_meta( $cs_ID, 'cs_excerpt_color', true );
$cs_read_more_color         = get_post_meta( $cs_ID, 'cs_read_more_color', true );
$cs_author_fs               = get_post_meta( $cs_ID, 'cs_author_fs', true );
$cs_author_fw               = get_post_meta( $cs_ID, 'cs_author_fw', true );
$cs_author_color            = get_post_meta( $cs_ID, 'cs_author_color', true );

$cs_sales_fs                = get_post_meta( $cs_ID, 'cs_sales_fs', true );
$cs_sales_fw                = get_post_meta( $cs_ID, 'cs_sales_fw', true );
$cs_sales_color             = get_post_meta( $cs_ID, 'cs_sales_color', true );
$cs_review_fs               = get_post_meta( $cs_ID, 'cs_review_fs', true );
$cs_review_fw               = get_post_meta( $cs_ID, 'cs_review_fw', true );
$cs_review_color            = get_post_meta( $cs_ID, 'cs_review_color', true );
$cs_stock_fs                = get_post_meta( $cs_ID, 'cs_stock_fs', true );
$cs_stock_fw                = get_post_meta( $cs_ID, 'cs_stock_fw', true );
$cs_stock_color             = get_post_meta( $cs_ID, 'cs_stock_color', true );
$cs_active_price_fs         = get_post_meta( $cs_ID, 'cs_active_price_fs', true );
$cs_active_price_fw         = get_post_meta( $cs_ID, 'cs_active_price_fw', true );
$cs_active_price_color      = get_post_meta( $cs_ID, 'cs_active_price_color', true );
$cs_prev_price_fs           = get_post_meta( $cs_ID, 'cs_prev_price_fs', true );
$cs_prev_price_fw           = get_post_meta( $cs_ID, 'cs_prev_price_fw', true );
$cs_prev_price_color        = get_post_meta( $cs_ID, 'cs_prev_price_color', true );
$cs_woo_button_fs           = get_post_meta( $cs_ID, 'cs_woo_button_fs', true );
$cs_woo_button_fw           = get_post_meta( $cs_ID, 'cs_woo_button_fw', true );
$cs_woo_button_color        = get_post_meta( $cs_ID, 'cs_woo_button_color', true );
$cs_woo_button_bg_color     = get_post_meta( $cs_ID, 'cs_woo_button_bg_color', true );

$cs_min_height              = get_post_meta( $cs_ID, 'cs_min_height', true );
$cs_horizontal_align        = get_post_meta( $cs_ID, 'cs_horizontal_align', true );
$cs_verticle_align          = get_post_meta( $cs_ID, 'cs_verticle_align', true );

$cs_nav_bg_color            = get_post_meta( $cs_ID, 'cs_nav_bg_color', true );
$cs_nav_bg_hover_color      = get_post_meta( $cs_ID, 'cs_nav_bg_hover_color', true );
$cs_nav_color               = get_post_meta( $cs_ID, 'cs_nav_color', true );
$cs_nav_fs                  = get_post_meta( $cs_ID, 'cs_nav_fs', true );
$cs_nav_fw                  = get_post_meta( $cs_ID, 'cs_nav_fw', true );

$cs_dot_shape               = get_post_meta( $cs_ID, 'cs_dot_shape', true );
$cs_dot_color               = get_post_meta( $cs_ID, 'cs_dot_color', true );
$cs_dot_active_color        = get_post_meta( $cs_ID, 'cs_dot_active_color', true );

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
            <div>
                <span>Slider Type</span>
                <br>
                <small>Select the slider type</small>
            </div>
            <select class="field" id="cs_post_type" name="cs_post_type">
                <option
                    value="post"
                    <?php echo ( empty( $cs_post_type ) || $cs_post_type == 'post' ) ? 'selected' : '' ?>
                >
                    Blog Post Slider
                </option>

                <?php if ( CS_WC_IS_ACTIVE ) : ?>
                <option
                    value="product"
                    <?php echo ( ! empty( $cs_post_type ) && $cs_post_type == 'product' ) ? 'selected' : '' ?>
                >
                    Woo Commerce Product Slider
                </option>
                <?php endif ?>

                <option
                    value="commerce_slide"
                    <?php echo ( ! empty( $cs_post_type ) && $cs_post_type == 'commerce_slide' ) ? 'selected' : '' ?>
                >
                    Custom Slider
                </option>
            </select>
        </div>

        <div class="field-wrapper">
            <div>
                <span>Load Content Using</span>
                <br>
                <small>Seelct how you want to load the slider content</small>
            </div>
            <div>
                <div class="switch-field">
                    <input type="hidden" id="cs_ajax_nonce" value="<?php echo esc_html( wp_create_nonce( 'cs-ajax-nonce' ) ) ?>">

                    <div class="cs-scoped-field d-none cs-post-field">
                        <input name="cs_query_type" id="cs_query_type_post_cat" type="radio"
                                value="category"
                                <?php if ( $cs_query_type == 'category' ) { echo 'checked'; } ?>
                            >
                            <label for="cs_query_type_post_cat">Category</label>
                    </div>

                    <div class="cs-scoped-field d-none cs-product-field">
                        <input name="cs_query_type" id="cs_query_type_product_cat" type="radio"
                                value="product_cat"
                                <?php if ( $cs_query_type == 'product_cat' ) { echo 'checked'; } ?>
                            >
                            <label for="cs_query_type_product_cat">Category</label>
                    </div>

                    <div class="cs-scoped-field d-none cs-post-field">
                        <input name="cs_query_type" id="cs_query_type_post_tag" type="radio"
                            value="post_tag"
                            <?php if ( $cs_query_type == 'post_tag' ) { echo 'checked'; } ?>
                        >
                        <label for="cs_query_type_post_tag">Tag</label>
                    </div>

                    <div class="cs-scoped-field d-none cs-product-field">
                        <input name="cs_query_type" id="cs_query_type_product_tag" type="radio"
                            value="product_tag"
                            <?php if ( $cs_query_type == 'product_tag' ) { echo 'checked'; } ?>
                        >
                        <label for="cs_query_type_product_tag">Tag</label>
                    </div>

                    <div class="cs-scoped-field d-none cs-commerce-slide-field">
                        <input name="cs_query_type" id="cs_query_type_commerce_slide_tag" type="radio"
                            value="commerce_slide_tag"
                            <?php if ( $cs_query_type == 'commerce_slide_tag' ) { echo 'checked'; } ?>
                        >
                        <label for="cs_query_type_commerce_slide_tag">Slide Group</label>
                    </div>

                    <div class="">
                        <input name="cs_query_type" id="cs_query_type_id" type="radio"
                            value="id"
                            <?php if ( $cs_query_type == 'id' ) { echo 'checked'; } ?>
                        >
                        <label for="cs_query_type_id">Name</label>
                    </div>

                    <div class="cs-scoped-field d-none cs-product-field">
                        <input name="cs_query_type" id="cs_query_type_sku" type="radio"
                            value="sku"
                            <?php if ( $cs_query_type == 'sku' ) { echo 'checked'; } ?>
                        >
                        <label for="cs_query_type_sku">SKU</label>
                    </div>

                    <div class="cs-scoped-field d-none cs-product-field">
                        <input name="cs_query_type" id="cs_query_type_latest" type="radio"
                            value="latest"
                            <?php if ( $cs_query_type == 'latest' ) { echo 'checked'; } ?>
                        >
                        <label for="cs_query_type_latest">Latest Products</label>
                    </div>

                    <div class="cs-scoped-field d-none cs-product-field">
                        <input name="cs_query_type" id="cs_query_type_featured" type="radio"
                            value="featured"
                            <?php if ( $cs_query_type == 'featured' ) { echo 'checked'; } ?>
                        >
                        <label for="cs_query_type_featured">Featured Products</label>
                    </div>

                    <div class="cs-scoped-field d-none cs-product-field">
                        <input name="cs_query_type" id="cs_query_type_onsale" type="radio"
                            value="onsale"
                            <?php if ( $cs_query_type == 'onsale' ) { echo 'checked'; } ?>
                        >
                        <label for="cs_query_type_onsale">On-Sale Products</label>
                    </div>

                    <div class="cs-scoped-field d-none cs-product-field">
                        <input name="cs_query_type" id="cs_query_type_top_rated" type="radio"
                            value="top_rated"
                            <?php if ( $cs_query_type == 'top_rated' ) { echo 'checked'; } ?>
                        >
                        <label for="cs_query_type_top_rated">Top-Rated Products</label>
                    </div>

                    <div class="cs-scoped-field d-none cs-product-field">
                        <input name="cs_query_type" id="cs_query_type_best_selling" type="radio"
                            value="best_selling"
                            <?php if ( $cs_query_type == 'best_selling' ) { echo 'checked'; } ?>
                        >
                        <label for="cs_query_type_best_selling">Best Selling Products</label>
                    </div>
                    <a class="slide-button btn"></a>
                </div>
            </div>
        </div>

        <div class="field-wrapper d-none" id="cs_query_wrapper">
            <div>
                <span>Select Contents</span>
            </div>
            <select name="cs_query[]" id="cs_query" multiple="multiple"></select>
        </div>

        <div class="field-wrapper">
            <div>
                <span>Feature Image Size</span>
                <br>
                <small>Select the feature image size to load</small>
            </div>
            <select class="field" id="cs_feature_img_size" name="cs_feature_img_size">
                <option
                    class="d-none"
                    value="" 
                >
                    Select An Option
                </option>

                <option
                    value="thumbnail"
                    <?php if($cs_feature_img_size == "thumbnail") { echo "selected"; } ?> 
                >
                    <?php echo esc_html__('Thumbnail - 150 x 150','commerce-slider');?>
                </option>

                <option
                    value="medium"
                    <?php if($cs_feature_img_size == "medium") { echo "selected"; } ?>
                >
                    <?php echo esc_html__('Medium - 300 x 300','commerce-slider');?>
                </option>

                <option
                    value="medium_large"
                    <?php if($cs_feature_img_size == "medium_large") { echo "selected"; } ?> 
                >
                    <?php echo esc_html__('Medium Large - 768 x 768','commerce-slider');?>
                </option>

                <option
                    value="large"
                    <?php if($cs_feature_img_size == "large") { echo "selected"; } ?>
                >
                    <?php echo esc_html__('Large - 1024 x 1024','commerce-slider');?>
                </option>

                <option
                    value="1536x1536"
                    <?php if($cs_feature_img_size == "1536x1536") { echo "selected"; } ?>
                >
                    <?php echo esc_html__('1536x1536 - 1536 x 1536','commerce-slider');?>
                </option>

                <option
                    value="2048x2048"
                    <?php if($cs_feature_img_size == "2048x2048") { echo "selected"; } ?>
                >
                    <?php echo esc_html__('2048x2048 - 2048 x 2048','commerce-slider');?>
                </option>

                <option
                    value="full"
                    <?php if($cs_feature_img_size == "full") { echo "selected"; } ?>
                >
                    <?php echo esc_html__('Full','commerce-slider');?>
                </option>

            </select>
        </div>

        <div class="field-wrapper">
            <div>
                <span>Feature Image Aspect Ratio</span>
            </div>
            <select class="field" id="cs_feature_img_ratio" name="cs_feature_img_ratio">
                <option
                    class="d-none"
                    value="" 
                >
                    Select An Option
                </option>

                <option
                    value="1:1"
                    <?php if($cs_feature_img_ratio == "1:1") { echo "selected"; } ?> 
                >
                    <?php echo esc_html__('1:1 - Sqaure','commerce-slider');?>
                </option>

                <option
                    value="4:3"
                    <?php if($cs_feature_img_ratio == "4:3") { echo "selected"; } ?>
                >
                    <?php echo esc_html__('4:3 - Standard Landscape','commerce-slider');?>
                </option>

                <option
                    value="3:2"
                    <?php if($cs_feature_img_ratio == "3:2") { echo "selected"; } ?> 
                >
                    <?php echo esc_html__('3:2 - Photography','commerce-slider');?>
                </option>

                <option
                    value="16:9"
                    <?php if($cs_feature_img_ratio == "16:9") { echo "selected"; } ?>
                >
                    <?php echo esc_html__('16:9 - Widescreen','commerce-slider');?>
                </option>

                <option
                    value="2:1"
                    <?php if($cs_feature_img_ratio == "2:1") { echo "selected"; } ?>
                >
                    <?php echo esc_html__('2:1 - Panorama','commerce-slider');?>
                </option>
                
                <option
                    value="3:4"
                    <?php if($cs_feature_img_ratio == "3:4") { echo "selected"; } ?>
                >
                    <?php echo esc_html__('3:4 - Portrait','commerce-slider');?>
                </option>

                <option
                    value="4:5"
                    <?php if($cs_feature_img_ratio == "4:5") { echo "selected"; } ?>
                >
                    <?php echo esc_html__('4:5 - Social Portrait','commerce-slider');?>
                </option>

            </select>
        </div>

        <div class="field-wrapper">
            <div>
                <span>Sort By</span>
                <br>
                <small>In which order items should be loaded</small>
                <br>
                <small>Default is Descending Order</small>
            </div>
            <select class="field" name="cs_order">
                <option
                    class="d-none"
                    value=""
                >
                    Select An Option
                </option>

                <option
                    value="ASC"
                    <?php echo ( ! empty( $cs_order ) && $cs_order == 'ASC' ) ? 'selected' : '' ?>
                >
                    Ascending Order
                </option>

                <option
                    value="DESC"
                    <?php echo ( ! empty( $cs_order ) && $cs_order == 'DESC' ) ? 'selected' : '' ?>
                >
                    Descending Order
                </option>
            </select>
        </div>
    
        <div class="field-wrapper">
            <div>
                <span>Loop</span>
                <br>
                <small>Should the slider run in a loop</small>
            </div>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="cs_loop" id="cs_loop_on" type="radio"
                        value="true"
                        <?php if ( $cs_loop == 'true' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_loop_on" class="radioCheck">Yes</label>
                    <input name="cs_loop" id="cs_loop_off" type="radio"
                        value="false"
                        <?php if ( $cs_loop == 'false' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_loop_off" class="radioCheck">No</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>
    
        <div class="field-wrapper">
            <div>
                <span>Centerize Items</span>
                <br>
                <small>Should the active item be displayed on the center</small>
                <br>
                <small>No by default, displayed at the start</small>
            </div>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="cs_center" id="cs_center_on" type="radio"
                        value="true"
                        <?php if ( $cs_center == 'true' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_center_on" class="radioCheck">Yes</label>
                    <input name="cs_center" id="cs_center_off" type="radio"
                        value="false"
                        <?php if ( $cs_center == 'false' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_center_off" class="radioCheck">No</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>
    
        <div class="field-wrapper">
            <div>
                <span>Navigation</span>
                <br>
                <small>Show/Hide navigation</small>
                <br>
                <small>Shown by default</small>
            </div>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="cs_show_nav" id="cs_show_nav_on" type="radio"
                        value="true"
                        <?php if ( $cs_show_nav == 'true' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_nav_on" class="radioCheck">Show</label>
                    <input name="cs_show_nav" id="cs_show_nav_off" type="radio"
                        value="false"
                        <?php if ( $cs_show_nav == 'false' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_nav_off" class="radioCheck">Hide</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>
    
        <div class="field-wrapper mt-20" id="cs_nav_settings">
            <span>Navigation Settings</span>
            <div class="field-group">
                <div class="field-wrapper">
                    <div>
                        <span>Position</span>
                        <br>
                        <small>Position of the nav buttons. Default - Middle</small>
                    </div>
                    <select class="field" id="cs_nav_position" name="cs_nav_position">
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="top-wide"
                            <?php if($cs_nav_position == "top-wide") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Top','commerce-slider');?>
                        </option>
        
                        <option
                            value="top-left"
                            <?php if($cs_nav_position == "top-left") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Top Left','commerce-slider');?>
                        </option>
        
                        <option
                            value="top-right"
                            <?php if($cs_nav_position == "top-right") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Top Right','commerce-slider');?>
                        </option>
        
                        <option
                            value="top-center"
                            <?php if($cs_nav_position == "top-center") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Top Center','commerce-slider');?>
                        </option>
        
                        <option
                            value="middle-wide"
                            <?php if($cs_nav_position == "middle-wide") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Middle','commerce-slider');?>
                        </option>
        
                        <option
                            value="bottom-wide"
                            <?php if($cs_nav_position == "bottom-wide") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Bottom','commerce-slider');?>
                        </option>
        
                        <option
                            value="bottom-left"
                            <?php if($cs_nav_position == "bottom-left") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Bottom Left','commerce-slider');?>
                        </option>
        
                        <option
                            value="bottom-right"
                            <?php if($cs_nav_position == "bottom-right") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Bottom Right','commerce-slider');?>
                        </option>
        
                        <option
                            value="bottom-center"
                            <?php if($cs_nav_position == "bottom-center") { echo "selected"; } ?> 
                        >
                            <?php echo esc_html__('Bottom Center','commerce-slider');?>
                        </option>
        
                    </select>
                </div>
    
                <div class="field-wrapper">
                    <div>
                        <span>Font Size</span>
                        <br>
                        <small>Nav button font size. Default - 12px</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        min="8"
                        step="1"
                        value="<?php if( ! empty( $cs_nav_fs ) ) { echo esc_html( $cs_nav_fs ); } ?>"
                        name="cs_nav_fs"
                    />
                </div>
    
                <div class="field-wrapper">
                    <div>
                        <span>Font Weight</span>
                        <br>
                        <small>Nav button font weight. Default - Medium</small>
                    </div>
                    <select
                        class="field"
                        name="cs_nav_fw"
                    >
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="200"
                            <?php if ( ! empty( $cs_nav_fw ) && $cs_nav_fw == '200' ) { echo 'selected'; } ?>
                        >
                            Thin
                        </option>
    
                        <option
                            value="500"
                            <?php if ( ! empty( $cs_nav_fw ) && $cs_nav_fw == '500' ) { echo 'selected'; } ?>
                        >
                            Medium
                        </option>
    
                        <option
                            value="700"
                            <?php if ( ! empty( $cs_nav_fw ) && $cs_nav_fw == '700' ) { echo 'selected'; } ?>
                        >
                            Bold
                        </option>
    
                        <option
                            value="1000"
                            <?php if ( ! empty( $cs_nav_fw ) && $cs_nav_fw == '1000' ) { echo 'selected'; } ?>
                        >
                            Bolder
                        </option>
                    </select>
                </div>
        
                <div class="field-wrapper">
                    <div>
                        <span>Border Radius</span>
                        <br>
                        <small>Nav button border radius. Default - 2%</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        min="0"
                        max="50"
                        value="<?php if( ! empty( $cs_nav_radius ) ) { echo esc_html( $cs_nav_radius ); } ?>"
                        step="1"
                        name="cs_nav_radius"
                    />
                </div>
    
                <div class="field-wrapper">
                    <div>
                        <span>Color</span>
                        <br>
                        <small>Nav button color. Default - "#FEFEFE"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_nav_color ) ) { echo esc_html( $cs_nav_color ); } ?>"
                        name="cs_nav_color"
                    />
                </div>
    
                <div class="field-wrapper">
                    <div>
                        <span>Background Color</span>
                        <br>
                        <small>Nav button background color. Default - rgba(0, 0, 0, 0.2)</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_nav_bg_color ) ) { echo esc_html( $cs_nav_bg_color ); } ?>"
                        name="cs_nav_bg_color"
                        data-alpha-enabled="true"
                    />
                </div>
    
                <div class="field-wrapper">
                    <div>
                        <span>Hover Background Color</span>
                        <br>
                        <small>Nav button background color on mouse over. Default - rgba(0, 0, 0, 0.5)</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_nav_bg_hover_color ) ) { echo esc_html( $cs_nav_bg_hover_color ); } ?>"
                        name="cs_nav_bg_hover_color"
                        data-alpha-enabled="true"
                    />
                </div>
            </div>
        </div>

        <div class="field-wrapper">
            <div>
                <span>Navigation On Small Devices</span>
                <br>
                <small>Show/Hide navigation on small devices (< 640px).</small>
                <br>
                <small>Hidden by default</small>
            </div>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="cs_show_nav_sm" id="cs_show_nav_sm_on" type="radio"
                        value="true"
                        <?php if ( $cs_show_nav_sm == 'true' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_nav_sm_on" class="radioCheck">Show</label>
                    <input name="cs_show_nav_sm" id="cs_show_nav_sm_off" type="radio"
                        value="false"
                        <?php if ( $cs_show_nav_sm == 'false' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_nav_sm_off" class="radioCheck">Hide</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>

        <div class="field-wrapper d-none" id="cs_nav_position_sm">
            <div>
                <span>Position On Small Devices</span>
                <br>
                <small>Nav position on small devices.</small>
            </div>
            <select class="field" id="cs_nav_position_sm" name="cs_nav_position_sm">
                <option
                    class="d-none"
                    value=""
                >
                    Select An Option
                </option>

                <option
                    value="top-wide"
                    <?php if($cs_nav_position_sm == "top-wide") { echo "selected"; } ?> 
                >
                    <?php echo esc_html__('Top','commerce-slider');?>
                </option>

                <option
                    value="top-left"
                    <?php if($cs_nav_position_sm == "top-left") { echo "selected"; } ?> 
                >
                    <?php echo esc_html__('Top Left','commerce-slider');?>
                </option>

                <option
                    value="top-right"
                    <?php if($cs_nav_position_sm == "top-right") { echo "selected"; } ?> 
                >
                    <?php echo esc_html__('Top Right','commerce-slider');?>
                </option>

                <option
                    value="top-center"
                    <?php if($cs_nav_position_sm == "top-center") { echo "selected"; } ?> 
                >
                    <?php echo esc_html__('Top Center','commerce-slider');?>
                </option>

                <option
                    value="middle-wide"
                    <?php if($cs_nav_position_sm == "middle-wide") { echo "selected"; } ?> 
                >
                    <?php echo esc_html__('Middle','commerce-slider');?>
                </option>

                <option
                    value="bottom-wide"
                    <?php if($cs_nav_position_sm == "bottom-wide") { echo "selected"; } ?> 
                >
                    <?php echo esc_html__('Bottom','commerce-slider');?>
                </option>

                <option
                    value="bottom-left"
                    <?php if($cs_nav_position_sm == "bottom-left") { echo "selected"; } ?> 
                >
                    <?php echo esc_html__('Bottom Left','commerce-slider');?>
                </option>

                <option
                    value="bottom-right"
                    <?php if($cs_nav_position_sm == "bottom-right") { echo "selected"; } ?> 
                >
                    <?php echo esc_html__('Bottom Right','commerce-slider');?>
                </option>

                <option
                    value="bottom-center"
                    <?php if($cs_nav_position_sm == "bottom-center") { echo "selected"; } ?> 
                >
                    <?php echo esc_html__('Bottom Center','commerce-slider');?>
                </option>

            </select>
        </div>
    
        <div class="field-wrapper">
            <div>
                <span>Dots</span>
                <br>
                <small>Show/Hide navigation dots</small>
                <br>
                <small>Shown by default.</small>
            </div>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="cs_show_dots" id="cs_show_dots_on" type="radio"
                        value="true"
                        <?php if ( $cs_show_dots == 'true' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_dots_on" class="radioCheck">Show</label>
                    <input name="cs_show_dots" id="cs_show_dots_off" type="radio"
                        value="false"
                        <?php if ( $cs_show_dots == 'false' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_dots_off" class="radioCheck">Hide</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>
    
        <div class="field-wrapper mt-20" id="cs_dots_settings">
            <span>Dots Settings</span>
            <div class="field-group">

                <div class="field-wrapper">
                    <div>
                        <span>Show For Each Item</span>
                        <br>
                        <small>Show a dot for every item while multiple items on display. Default - No</small>
                    </div>
                    <div>
                        <span class="switch radio-switch fixed-width-lg">
                            <input name="cs_show_dots_foreach" id="cs_show_dots_foreach_on" type="radio"
                                value="true"
                                <?php if ( $cs_show_dots_foreach == 'true' ) { echo 'checked'; } ?>
                            >
                            <label for="cs_show_dots_foreach_on" class="radioCheck">Yes</label>
                            <input name="cs_show_dots_foreach" id="cs_show_dots_foreach_off" type="radio"
                                value="false"
                                <?php if ( $cs_show_dots_foreach == 'false' ) { echo 'checked'; } ?>
                            >
                            <label for="cs_show_dots_foreach_off" class="radioCheck">No</label>
                            <a class="slide-button btn"></a>
                        </span>
                    </div>
                </div>
    
                <div class="field-wrapper">
                    <div>
                        <span>Shape</span>
                        <br>
                        <small>Dot shape. Default - Round</small>
                    </div>
                    <select
                        class="field"
                        name="cs_dot_shape"
                    >
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="round"
                            <?php if ( ! empty( $cs_dot_shape ) && $cs_dot_shape == 'round' ) { echo 'selected'; } ?>
                        >
                            Round
                        </option>
    
                        <option
                            value="bar"
                            <?php if ( ! empty( $cs_dot_shape ) && $cs_dot_shape == 'bar' ) { echo 'selected'; } ?>
                        >
                            Bar
                        </option>
    
                        <option
                            value="pill"
                            <?php if ( ! empty( $cs_dot_shape ) && $cs_dot_shape == 'pill' ) { echo 'selected'; } ?>
                        >
                            Pill
                        </option>
                    </select>
                </div>
    
                <div class="field-wrapper">
                    <div>
                        <span>Color</span>
                        <br>
                        <small>Dot color. Default - "#DDDDDD"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if ( ! empty( $cs_dot_color ) ) { echo esc_html( $cs_dot_color ); } ?>"
                        name="cs_dot_color"
                    />
                </div>
    
                <div class="field-wrapper">
                    <div>
                        <span>Active Color</span>
                        <br>
                        <small>Active dot color. Default - "#4A4A4A"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_dot_active_color ) ) { echo esc_html( $cs_dot_active_color ); } ?>"
                        name="cs_dot_active_color"
                    />
                </div>
    
            </div>
        </div>

        <div class="field-wrapper">
            <div>
                <span>Dots On Small Devices</span>
                <br>
                <small>Show/Hide nav dots on small devices (< 640px).</small>
                <br>
                <small>Hidden by default.</small>
            </div>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="cs_show_dots_sm" id="cs_show_dots_sm_on" type="radio"
                        value="true"
                        <?php if ( $cs_show_dots_sm == 'true' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_dots_sm_on" class="radioCheck">Show</label>
                    <input name="cs_show_dots_sm" id="cs_show_dots_sm_off" type="radio"
                        value="false"
                        <?php if ( $cs_show_dots_sm == 'false' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_dots_sm_off" class="radioCheck">Hide</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>

    </div>

    <!-- Slider Settings Tab -->
    <div id="tab-2" class="tab-content">

        <div class="field-wrapper">
            <div>
                <span>Items to show</span>
                <br>
                <small>Number of items to show on the slider. Default 6.</small>
            </div>
            <input
                class="field"
                type="number"
                placeholder="Number of items to load"
                min="0"
                max="20"
                value="<?php if( ! empty( $cs_items_to_show ) ) { echo esc_html( $cs_items_to_show ); } ?>"
                step="1"
                name="cs_items_to_show"
            />
        </div>

        <div class="field-wrapper">
            <div>
                <span>Display Items</span>
                <br>
                <small>Items on the screen at a time</small>
            </div>
            <div class="field-group">

                <div class="field-wrapper">
                    <div>
                        <span>Larger Screens</span>
                        <br>
                        <small class="cs-product-field cs-scoped-field d-none">Screen size larger than 1440px. Default 4</small>
                        <small class="cs-post-field cs-commerce-slide-field cs-scoped-field d-none">Screen size larger than 1440px. Default 1</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Number of items to display at a time on screens >= 1440px"
                        min="1"
                        max="20"
                        value="<?php if( ! empty( $cs_items_to_display_xl ) ) { echo esc_html( $cs_items_to_display_xl ); } ?>"
                        step="1"
                        name="cs_items_to_display_xl"
                    />
                </div>

                <div class="field-wrapper">
                    <div>
                        <span>Large Screens</span>
                        <br>
                        <small class="cs-product-field cs-scoped-field d-none">Screen size 1024px - 1440px. Default 3</small>
                        <small class="cs-post-field cs-commerce-slide-field cs-scoped-field d-none">Screen size 1024px - 1440px. Default 1</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Number of items to display at a time on screens 1024px - 1440px"
                        min="1"
                        max="20"
                        value="<?php if( ! empty( $cs_items_to_display_lg ) ) { echo esc_html( $cs_items_to_display_lg ); } ?>"
                        step="1"
                        name="cs_items_to_display_lg"
                    />
                </div>

                <div class="field-wrapper">
                    <div>
                        <span>Medium Screens</span>
                        <br>
                        <small class="cs-product-field cs-scoped-field d-none">Screen size 640px - 1024px. Default 2</small>
                        <small class="cs-post-field cs-commerce-slide-field cs-scoped-field d-none">Screen size 640px - 1024px. Default 1</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Number of items to display at a time on screens 640px - 1024px"
                        min="1"
                        max="20"
                        value="<?php if( ! empty( $cs_items_to_display_md ) ) { echo esc_html( $cs_items_to_display_md ); } ?>"
                        step="1"
                        name="cs_items_to_display_md"
                    />
                </div>

                <div class="field-wrapper">
                    <div>
                        <span>Small Screens</span>
                        <br>
                        <small class="cs-product-field cs-scoped-field d-none">Smaller size than 640px. Default 1</small>
                        <small class="cs-post-field cs-commerce-slide-field cs-scoped-field d-none">Smaller size than 640px. Default 1</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Number of items to display at a time on screens < 640px"
                        min="1"
                        max="20"
                        value="<?php if( ! empty( $cs_items_to_display_sm ) ) { echo esc_html( $cs_items_to_display_sm ); } ?>"
                        step="1"
                        name="cs_items_to_display_sm"
                    />
                </div>

            </div>
        </div>

        <div class="field-wrapper">
            <div>
                <span>Slide Entrance Animation</span>
            </div>
            <select
                id="cs_animation_entrance"
                name="cs_animation_entrance"
            >
                <option
                    class="d-none"
                    value=""
                >
                    Select An Option
                </option>

                <option
                    value="animate__slideInRight"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__slideInRight' ) { echo 'selected'; } ?>
                >
                    Slide Right
                </option>

                <option
                    value="animate__slideInLeft"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__slideInLeft' ) { echo 'selected'; } ?>
                >
                    Slide Left
                </option>

                <option
                    value="animate__slideInDown"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__slideInDown' ) { echo 'selected'; } ?>
                >
                    Slide Down
                </option>

                <option
                    value="animate__slideInUp"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__slideInUp' ) { echo 'selected'; } ?>
                >
                    Slide Up
                </option>

                <option
                    value="animate__fadeIn"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__fadeIn' ) { echo 'selected'; } ?>
                    >
                    Fade In
                </option>

                <option
                    value="animate__fadeInLeft"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__fadeInLeft' ) { echo 'selected'; } ?>
                    >
                    Fade Left
                </option>

                <option
                    value="animate__fadeInRight"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__fadeInRight' ) { echo 'selected'; } ?>
                    >
                    Fade Right
                </option>

                <option
                    value="animate__fadeInUp"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__fadeInUp' ) { echo 'selected'; } ?>
                    >
                    Fade Up
                </option>

                <option
                    value="animate__fadeInDown"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__fadeInDown' ) { echo 'selected'; } ?>
                    >
                    Fade Down
                </option>

                <option
                    value="animate__zoomIn"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__zoomIn' ) { echo 'selected'; } ?>
                >
                    Zoom In
                </option>

                <option
                    value="animate__zoomInLeft"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__zoomInLeft' ) { echo 'selected'; } ?>
                >
                    Zoom Left
                </option>

                <option
                    value="animate__zoomInRight"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__zoomInRight' ) { echo 'selected'; } ?>
                >
                    Zoom Right
                </option>

                <option
                    value="animate__zoomInUp"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__zoomInUp' ) { echo 'selected'; } ?>
                >
                    Zoom Up
                </option>

                <option
                    value="animate__zoomInDown"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__zoomInDown' ) { echo 'selected'; } ?>
                >
                    Zoom Down
                </option>

                <option
                    value="animate__bounceInLeft"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__bounceInLeft' ) { echo 'selected'; } ?>
                >
                    Bounce Left
                </option>

                <option
                    value="animate__bounceInRight"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__bounceInRight' ) { echo 'selected'; } ?>
                >
                    Bounce Right
                </option>

                <option
                    value="animate__bounceInUp"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__bounceInUp' ) { echo 'selected'; } ?>
                >
                    Bounce Up
                </option>

                <option
                    value="animate__bounceInDown"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__bounceInDown' ) { echo 'selected'; } ?>
                >
                    Bounce Down
                </option>

                <option
                    value="animate__backInLeft"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__backInLeft' ) { echo 'selected'; } ?>
                >
                    Back Left
                </option>

                <option
                    value="animate__backInRight"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__backInRight' ) { echo 'selected'; } ?>
                >
                    Back Right
                </option>

                <option
                    value="animate__backInUp"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__backInUp' ) { echo 'selected'; } ?>
                >
                    Back Up
                </option>

                <option
                    value="animate__backInDown"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__backInDown' ) { echo 'selected'; } ?>
                >
                    Back Down
                </option>

                <option
                    value="animate__rotateIn"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__rotateIn' ) { echo 'selected'; } ?>
                >
                    Rotate
                </option>

                <option
                    value="animate__rotateInUpLeft"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__rotateInUpLeft' ) { echo 'selected'; } ?>
                >
                    Rotate Up From Left
                </option>

                <option
                    value="animate__rotateInUpRight"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__rotateInUpRight' ) { echo 'selected'; } ?>
                >
                    Rotate Up From Right
                </option>

                <option
                    value="animate__rotateInDownLeft"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__rotateInDownLeft' ) { echo 'selected'; } ?>
                >
                    Rotate Down From Left
                </option>

                <option
                    value="animate__rotateInDownRight"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__rotateInDownRight' ) { echo 'selected'; } ?>
                >
                    Rotate Down From Right
                </option>

                <option
                    value="animate__flipIn"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__flipIn' ) { echo 'selected'; } ?>
                >
                    Flip
                </option>

                <option
                    value="animate__flipInX"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__flipInX' ) { echo 'selected'; } ?>
                >
                    Flip Horizontaly
                </option>

                <option
                    value="animate__flipInY"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__flipInY' ) { echo 'selected'; } ?>
                >
                    Flip Verticaly
                </option>

                <option
                    value="animate__lightSpeedInLeft"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__lightSpeedInLeft' ) { echo 'selected'; } ?>
                >
                    Lightspeed Left
                </option>

                <option
                    value="animate__lightSpeedInRight"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__lightSpeedInRight' ) { echo 'selected'; } ?>
                >
                    Lightspeed Right
                </option>

                <option
                    value="animate__rollIn"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__rollIn' ) { echo 'selected'; } ?>
                >
                    Roll In
                </option>

                <option
                    value="animate__jackInTheBox"
                    <?php if ( ! empty( $cs_animation_entrance ) && $cs_animation_entrance == 'animate__jackInTheBox' ) { echo 'selected'; } ?>
                >
                Jack In The Box
                </option>
            </select>
        </div>

        <div class="field-wrapper">
            <div>
                <span>Slide Exit Animation</span>
            </div>
            <select
                id="cs_animation_exit"
                name="cs_animation_exit"
            >
                <option
                    class="d-none"
                    value=""
                >
                    Select An Option
                </option>

                <option
                    value="animate__slideOutRight"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__slideOutRight' ) { echo 'selected'; } ?>
                >
                    Slide Right
                </option>

                <option
                    value="animate__slideOutLeft"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__slideOutLeft' ) { echo 'selected'; } ?>
                >
                    Slide Left
                </option>

                <option
                    value="animate__slideOutDown"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__slideOutDown' ) { echo 'selected'; } ?>
                >
                    Slide Down
                </option>

                <option
                    value="animate__slideOutUp"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__slideOutUp' ) { echo 'selected'; } ?>
                >
                    Slide Up
                </option>

                <option
                    value="animate__fadeOut"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__fadeOut' ) { echo 'selected'; } ?>
                    >
                    Fade Out
                </option>

                <option
                    value="animate__fadeOutLeft"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__fadeOutLeft' ) { echo 'selected'; } ?>
                    >
                    Fade Left
                </option>

                <option
                    value="animate__fadeOutRight"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__fadeOutRight' ) { echo 'selected'; } ?>
                    >
                    Fade Right
                </option>

                <option
                    value="animate__fadeOutUp"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__fadeOutUp' ) { echo 'selected'; } ?>
                    >
                    Fade Up
                </option>

                <option
                    value="animate__fadeOutDown"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__fadeOutDown' ) { echo 'selected'; } ?>
                    >
                    Fade Down
                </option>

                <option
                    value="animate__zoomOut"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__zoomOut' ) { echo 'selected'; } ?>
                >
                    Zoom Out
                </option>

                <option
                    value="animate__zoomOutLeft"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__zoomOutLeft' ) { echo 'selected'; } ?>
                >
                    Zoom Left
                </option>

                <option
                    value="animate__zoomOutRight"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__zoomOutRight' ) { echo 'selected'; } ?>
                >
                    Zoom Right
                </option>

                <option
                    value="animate__zoomOutUp"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__zoomOutUp' ) { echo 'selected'; } ?>
                >
                    Zoom Up
                </option>

                <option
                    value="animate__zoomOutDown"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__zoomOutDown' ) { echo 'selected'; } ?>
                >
                    Zoom Down
                </option>

                <option
                    value="animate__bounceOutLeft"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__bounceOutLeft' ) { echo 'selected'; } ?>
                >
                    Bounce Left
                </option>

                <option
                    value="animate__bounceOutRight"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__bounceOutRight' ) { echo 'selected'; } ?>
                >
                    Bounce Right
                </option>

                <option
                    value="animate__bounceOutUp"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__bounceOutUp' ) { echo 'selected'; } ?>
                >
                    Bounce Up
                </option>

                <option
                    value="animate__bounceOutDown"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__bounceOutDown' ) { echo 'selected'; } ?>
                >
                    Bounce Down
                </option>

                <option
                    value="animate__backOutLeft"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__backOutLeft' ) { echo 'selected'; } ?>
                >
                    Back Left
                </option>

                <option
                    value="animate__backOutRight"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__backOutRight' ) { echo 'selected'; } ?>
                >
                    Back Right
                </option>

                <option
                    value="animate__backOutUp"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__backOutUp' ) { echo 'selected'; } ?>
                >
                    Back Up
                </option>

                <option
                    value="animate__backOutDown"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__backOutDown' ) { echo 'selected'; } ?>
                >
                    Back Down
                </option>

                <option
                    value="animate__rotateOut"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__rotateOut' ) { echo 'selected'; } ?>
                >
                    Rotate
                </option>

                <option
                    value="animate__rotateOutUpLeft"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__rotateOutUpLeft' ) { echo 'selected'; } ?>
                >
                    Rotate Up From Left
                </option>

                <option
                    value="animate__rotateOutUpRight"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__rotateOutUpRight' ) { echo 'selected'; } ?>
                >
                    Rotate Up From Right
                </option>

                <option
                    value="animate__rotateOutDownLeft"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__rotateOutDownLeft' ) { echo 'selected'; } ?>
                >
                    Rotate Down From Left
                </option>

                <option
                    value="animate__rotateOutDownRight"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__rotateOutDownRight' ) { echo 'selected'; } ?>
                >
                    Rotate Down From Right
                </option>

                <option
                    value="animate__flipOut"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__flipOut' ) { echo 'selected'; } ?>
                >
                    Flip
                </option>

                <option
                    value="animate__flipOutX"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__flipOutX' ) { echo 'selected'; } ?>
                >
                    Flip Horizontaly
                </option>

                <option
                    value="animate__flipOutY"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__flipOutY' ) { echo 'selected'; } ?>
                >
                    Flip Verticaly
                </option>

                <option
                    value="animate__lightSpeedOutLeft"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__lightSpeedOutLeft' ) { echo 'selected'; } ?>
                >
                    Lightspeed Left
                </option>

                <option
                    value="animate__lightSpeedOutRight"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__lightSpeedOutRight' ) { echo 'selected'; } ?>
                >
                    Lightspeed Right
                </option>

                <option
                    value="animate__rollOut"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__rollOut' ) { echo 'selected'; } ?>
                >
                    Roll Out
                </option>

                <option
                    value="animate__hinge"
                    <?php if ( ! empty( $cs_animation_exit ) && $cs_animation_exit == 'animate__hinge' ) { echo 'selected'; } ?>
                >
                    Hinge
                </option>
            </select>
        </div>

        <div class="field-wrapper">
            <div>
                <span>Margin Between Items</span>
                <br>
                <small>Default 10px</small>
            </div>
            <input
                class="field"
                type="number"
                placeholder="Distance between items in pixels"
                value="<?php if( ! empty( $cs_margin_right ) ) { echo esc_html( $cs_margin_right ); } ?>"
                step="1"
                name="cs_margin_right"
            />
        </div>
        
        <div class="field-wrapper">
            <div>
                <span>Slides Background Color</span>
                <br>
                <small>Background color of the slides. Default - "#FFFFFF"</small>
            </div>
            <input
                class="cs-color-picker"
                type="text"
                placeholder="Background color of the slides"
                value="<?php if( ! empty( $cs_bg_color ) ) { echo esc_html( $cs_bg_color ); } ?>"
                name="cs_bg_color"
            />
        </div>

        <div class="field-wrapper">
            <div>
                <span>Minimum Slide Height</span>
                <br>
                <small>Default "auto"</small>
            </div>
            <input
                class="field"
                type="number"
                placeholder="Minimum height of the slides"
                min="0"
                step="5"
                value="<?php if( ! empty( $cs_min_height ) ) { echo esc_html( $cs_min_height ); } ?>"
                name="cs_min_height"
            />
        </div>

        <div class="field-wrapper">
            <div>
                <span>Slide Content Horizontal Alignment</span>
                <br>
                <small>Default - "Left"</small>
            </div>
            <select
                class="field"
                name="cs_horizontal_align"
            >
                <option
                    class="d-none"
                    value="" 
                >
                    Select An Option
                </option>

                <option
                    value="baseline"
                    <?php if ( ! empty( $cs_horizontal_align ) && $cs_horizontal_align == 'baseline' ) { echo 'selected'; } ?>
                >
                    Left
                </option>

                <option
                    value="center"
                    <?php if ( ! empty( $cs_horizontal_align ) && $cs_horizontal_align == 'center' ) { echo 'selected'; } ?>
                    >
                    Center
                </option>

                <option
                    value="end"
                    <?php if ( ! empty( $cs_horizontal_align ) && $cs_horizontal_align == 'end' ) { echo 'selected'; } ?>
                >
                    Right
                </option>
            </select>
        </div>

        <div class="field-wrapper">
            <div>
                <span>Slide Content Verticle Alignment</span>
                <br>
                <small>Default - "Top"</small>
            </div>
            <select
                class="field"
                name="cs_verticle_align"
            >
                <option
                    class="d-none"
                    value="" 
                >
                    Select An Option
                </option>
            
                <option
                    value="start"
                    <?php if ( ! empty( $cs_verticle_align ) && $cs_verticle_align == 'start' ) { echo 'selected'; } ?>
                >
                    Top
                </option>

                <option
                    value="center"
                    <?php if ( ! empty( $cs_verticle_align ) && $cs_verticle_align == 'center' ) { echo 'selected'; } ?>
                    >
                    Center
                </option>

                <option
                    value="end"
                    <?php if ( ! empty( $cs_verticle_align ) && $cs_verticle_align == 'end' ) { echo 'selected'; } ?>
                >
                    Bottom
                </option>

                <option
                    value="space-between"
                    <?php if ( ! empty( $cs_verticle_align ) && $cs_verticle_align == 'space-between' ) { echo 'selected'; } ?>
                >
                    Fit Container
                </option>
            </select>
        </div>

    </div>

    <!-- Autoplay Settings Tab -->
    <div id="tab-3" class="tab-content">

        <div class="field-wrapper">
            <div>
                <span>Autoplay</span>
                <br>
                <small>Autoplay slides. Default - "Off"</small>
            </div>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="cs_autoplay" id="cs_autoplay_on" type="radio"
                        value="true"
                        <?php if ( $cs_autoplay == 'true' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_autoplay_on" class="radioCheck">On</label>
                    <input name="cs_autoplay" id="cs_autoplay_off" type="radio"
                        value="false"
                        <?php if ( $cs_autoplay == 'false' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_autoplay_off" class="radioCheck">Off</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>

        <div class="field-wrapper mt-20" id="cs_autoplay_settings">
            <span></span>
            <div class="field-group">
                <div class="field-wrapper">
                    <div>
                        <span>Timeout</span>
                        <br>
                        <small>Time Between slide transitions in milliseconds. Default 5000 (5 seconds)</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Display duration of slides in milliseconds"
                        value="<?php if( ! empty( $cs_autoplay_timeout ) ) { echo esc_html( $cs_autoplay_timeout ); } ?>"
                        step="100"
                        name="cs_autoplay_timeout"
                    />
                </div>
            
                <div class="field-wrapper">
                    <div>
                        <span>Speed</span>
                        <br>
                        <small>Slide transition speed in milliseconds. Default - 1000 (1 second)</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Duration of moving to the next slide in milliseconds"
                        value="<?php if( ! empty( $cs_autoplay_speed ) ) { echo esc_html( $cs_autoplay_speed ); } ?>"
                        step="100"
                        name="cs_autoplay_speed"
                    />
                </div>
            
                <div class="field-wrapper">
                    <div>
                        <span>Pause On Mouse Over</span>
                        <br>
                        <small>Pause autoplay on mouse over. Default - "Yes"</small>
                    </div>
                    <div>
                        <span class="switch radio-switch fixed-width-lg">
                            <input name="cs_autoplay_hover_pause" id="cs_autoplay_hover_pause_on" type="radio"
                                value="true"
                                <?php if ( $cs_autoplay_hover_pause == 'true' ) { echo 'checked'; } ?>
                            >
                            <label for="cs_autoplay_hover_pause_on" class="radioCheck">Yes</label>
                            <input name="cs_autoplay_hover_pause" id="cs_autoplay_hover_pause_off" type="radio"
                                value="false"
                                <?php if ( $cs_autoplay_hover_pause == 'false' ) { echo 'checked'; } ?>
                            >
                            <label for="cs_autoplay_hover_pause_off" class="radioCheck">No</label>
                            <a class="slide-button btn"></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content & Typography Tab -->
    <div id="tab-4" class="tab-content">

        <div class="field-wrapper cs-product-field cs-post-field cs-scoped-field d-none">
            <div>
                <span>Title</span>
                <br>
                <small>Title settings</small>
            </div>
            <div class="field-group">

                <div class="field-wrapper cs-product-field cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Font Size</span>
                        <br>
                        <small>Default 18px</small>    
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Title font size"
                        min="6"
                        value="<?php if( ! empty( $cs_title_fs ) ) { echo esc_html( $cs_title_fs ); } ?>"
                        step="1"
                        name="cs_title_fs"
                    />
                </div>

                <div class="field-wrapper cs-product-field cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Font Weight</span>
                        <br>
                        <small>Default "Bold"</small>
                    </div>
                    <select
                        class="field"
                        name="cs_title_fw"
                    >
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="200"
                            <?php if ( ! empty( $cs_title_fw ) && $cs_title_fw == '200' ) { echo 'selected'; } ?>
                        >
                            Thin
                        </option>

                        <option
                            value="500"
                            <?php if ( ! empty( $cs_title_fw ) && $cs_title_fw == '500' ) { echo 'selected'; } ?>
                        >
                            Medium
                        </option>

                        <option
                            value="700"
                            <?php if ( ! empty( $cs_title_fw ) && $cs_title_fw == '700' ) { echo 'selected'; } ?>
                        >
                            Bold
                        </option>

                        <option
                            value="1000"
                            <?php if ( ! empty( $cs_title_fw ) && $cs_title_fw == '1000' ) { echo 'selected'; } ?>
                        >
                            Bolder
                        </option>
                    </select>
                </div>

                <div class="field-wrapper cs-product-field cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Color</span>
                        <br>
                        <small>Default Black</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_title_color ) ) { echo esc_html( $cs_title_color ); } ?>"
                        name="cs_title_color"
                    />
                </div>

            </div>
        </div>

        <div class="field-wrapper cs-post-field cs-scoped-field d-none">
            <div>
                <span>Meta Font Size</span>
                <br>
                <small>Font size for meta info above title</small>
            </div>
            <input
                class="field"
                type="number"
                placeholder="Post meta font size"
                min="6"
                value="<?php if( ! empty( $cs_metat_fs ) ) { echo esc_html( $cs_meta_fs ); } ?>"
                step="1"
                name="cs_meta_fs"
            />
        </div>

        <div class="field-wrapper cs-post-field cs-scoped-field d-none">
            <div>
                <span>Comment Count</span>
                <br>
                <small>Show/Hide comment count. Hidden by default</small>
            </div>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="cs_show_comments" id="cs_show_comments_on" type="radio"
                        value="show"
                        <?php if ( $cs_show_comments == 'show' ) { echo 'checked'; } ?>
                    />
                    <label for="cs_show_comments_on" class="radioCheck">Show</label>
                    <input name="cs_show_comments" id="cs_show_comments_off" type="radio"
                        value="hide"
                        <?php if ( $cs_show_comments == 'hide' ) { echo 'checked'; } ?>
                    />
                    <label for="cs_show_comments_off" class="radioCheck">Hide</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>

        <div class="field-wrapper mt-20 cs-post-field cs-scoped-field d-none" id="cs_comment_settings" data-default="show">
            <span></span>
            <div class="field-group">
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Icon Color</span>
                        <br>
                        <small>Comment count icon color. Default #333333</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_comment_icon_color ) ) { echo esc_html( $cs_comment_icon_color ); } ?>"
                        name="cs_comment_icon_color"
                    />
                </div>
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Font Weight</span>
                        <br>
                        <small>Default "Medium"</small>
                    </div>
                    <select
                        class="field"
                        name="cs_comment_fw"
                    >
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="200"
                            <?php if ( ! empty( $cs_comment_fw ) && $cs_comment_fw == '200' ) { echo 'selected'; } ?>
                        >
                            Thin
                        </option>
    
                        <option
                            value="500"
                            <?php if ( ! empty( $cs_comment_fw ) && $cs_comment_fw == '500' ) { echo 'selected'; } ?>
                        >
                            Medium
                        </option>
    
                        <option
                            value="700"
                            <?php if ( ! empty( $cs_comment_fw ) && $cs_comment_fw == '700' ) { echo 'selected'; } ?>
                        >
                            Bold
                        </option>
    
                        <option
                            value="1000"
                            <?php if ( ! empty( $cs_comment_fw ) && $cs_comment_fw == '1000' ) { echo 'selected'; } ?>
                        >
                            Bolder
                        </option>
                    </select>
                </div>
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Color</span>
                        <br>
                        <small>Default #333333</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_comment_color ) ) { echo esc_html( $cs_comment_color ); } ?>"
                        name="cs_comment_color"
                    />
                </div>
    
            </div>
        </div>

        <div class="field-wrapper cs-post-field cs-scoped-field d-none">
            <div>
                <span>Category</span>
                <br>
                <small>Show/Hide category. Shown by default</small>
            </div>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="cs_show_category" id="cs_show_category_on" type="radio"
                        value="show"
                        <?php if ( ! empty( $cs_show_category ) && $cs_show_category == 'show' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_category_on" class="radioCheck">Show</label>
                    <input name="cs_show_category" id="cs_show_category_off" type="radio"
                        value="hide"
                        <?php if ( ! empty( $cs_show_category ) && $cs_show_category == 'hide' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_category_off" class="radioCheck">Hide</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>

        <div class="field-wrapper mt-20 cs-post-field cs-scoped-field d-none" id="cs_category_settings">
            <span></span>
            <div class="field-group">
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Icon Color</span>
                        <br>
                        <small>Category icon color. Default - "#333333"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_category_icon_color ) ) { echo esc_html( $cs_category_icon_color ); } ?>"
                        name="cs_category_icon_color"
                    />
                </div>
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Font Weight</span>
                        <br>
                        <small>Category font weight. Default - "Medium"</small>
                    </div>
                    <select
                        class="field"
                        name="cs_category_fw"
                    >
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="200"
                            <?php if ( ! empty( $cs_category_fw ) && $cs_category_fw == '200' ) { echo 'selected'; } ?>
                        >
                            Thin
                        </option>
    
                        <option
                            value="500"
                            <?php if ( ! empty( $cs_category_fw ) && $cs_category_fw == '500' ) { echo 'selected'; } ?>
                        >
                            Medium
                        </option>
    
                        <option
                            value="700"
                            <?php if ( ! empty( $cs_category_fw ) && $cs_category_fw == '700' ) { echo 'selected'; } ?>
                        >
                            Bold
                        </option>
    
                        <option
                            value="1000"
                            <?php if ( ! empty( $cs_category_fw ) && $cs_category_fw == '1000' ) { echo 'selected'; } ?>
                        >
                            Bolder
                        </option>
                    </select>
                </div>
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Color</span>
                        <br>
                        <small>Category color. Default - "#333333"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_category_color ) ) { echo esc_html( $cs_category_color ); } ?>"
                        name="cs_category_color"
                    />
                </div>
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Background Color</span>
                        <br>
                        <small>Category background color. Default - "#EEEEEE"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_category_bg_color ) ) { echo esc_html( $cs_category_bg_color ); } ?>"
                        name="cs_category_bg_color"
                    />
                </div>
    
            </div>
        </div>

        <div class="field-wrapper cs-post-field cs-scoped-field d-none">
            <div>
                <span>Date</span>
                <br>
                <small>Show/Hide date. Shown by default.</small>
            </div>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="cs_show_date" id="cs_show_date_on" type="radio"
                        value="show"
                        <?php if ( ! empty( $cs_show_date ) && $cs_show_date == 'show' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_date_on" class="radioCheck">Show</label>
                    <input name="cs_show_date" id="cs_show_date_off" type="radio"
                        value="hide"
                        <?php if ( ! empty( $cs_show_date ) && $cs_show_date == 'hide' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_date_off" class="radioCheck">Hide</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>

        <div class="field-wrapper mt-20 cs-post-field cs-scoped-field d-none" id="cs_date_settings">
            <span></span>
            <div class="field-group">

                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Icon Color</span>
                        <br>
                        <small>Date icon color. Default - "#333333"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_date_icon_color ) ) { echo esc_html( $cs_date_icon_color ); } ?>"
                        name="cs_date_icon_color"
                    />
                </div>

                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Font Weight</span>
                        <br>
                        <small>Date font weight. Default - "Medium"</small>
                    </div>
                    <select
                        class="field"
                        name="cs_date_fw"
                    >
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="200"
                            <?php if ( ! empty( $cs_date_fw ) && $cs_date_fw == '200' ) { echo 'selected'; } ?>
                        >
                            Thin
                        </option>
    
                        <option
                            value="500"
                            <?php if ( ! empty( $cs_date_fw ) && $cs_date_fw == '500' ) { echo 'selected'; } ?>
                        >
                            Medium
                        </option>
    
                        <option
                            value="700"
                            <?php if ( ! empty( $cs_date_fw ) && $cs_date_fw == '700' ) { echo 'selected'; } ?>
                        >
                            Bold
                        </option>
    
                        <option
                            value="1000"
                            <?php if ( ! empty( $cs_date_fw ) && $cs_date_fw == '1000' ) { echo 'selected'; } ?>
                        >
                            Bolder
                        </option>
                    </select>
                </div>

                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Color</span>
                        <br>
                        <small>Date color. Default - "#333333"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_date_color ) ) { echo esc_html( $cs_date_color ); } ?>"
                        name="cs_date_color"
                    />
                </div>

            </div>
        </div>

        <!-- <div class="field-wrapper cs-post-field cs-scoped-field d-none">
            <span>Tags</span>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="cs_show_tags" id="cs_show_tags_on" type="radio"
                        value="show"
                        <?php // if ( ! empty( $cs_show_tags ) && $cs_show_tags == 'show' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_tags_on" class="radioCheck">Show</label>
                    <input name="cs_show_tags" id="cs_show_tags_off" type="radio"
                        value="hide"
                        <?php // if ( ! empty( $cs_show_tags ) && $cs_show_tags == 'hide' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_tags_off" class="radioCheck">Hide</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>

        <div class="field-wrapper mt-20 cs-post-field cs-scoped-field d-none" id="cs_tag_settings">
            <span></span>
            <div class="field-group">
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <span>Font Size</span>
                    <input
                        class="field"
                        type="number"
                        placeholder="Tags font size"
                        min="6"
                        value="<?php // if( ! empty( $cs_tag_fs ) ) { echo esc_html( $cs_tag_fs ); } ?>"
                        step="1"
                        name="cs_tag_fs"
                    />
                </div>
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <span>Font Weight</span>
                    <select
                        class="field"
                        name="cs_tag_fw"
                    >
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="200"
                            <?php // if ( ! empty( $cs_tag_fw ) && $cs_tag_fw == '200' ) { echo 'selected'; } ?>
                        >
                            Thin
                        </option>
    
                        <option
                            value="500"
                            <?php // if ( ! empty( $cs_tag_fw ) && $cs_tag_fw == '500' ) { echo 'selected'; } ?>
                        >
                            Medium
                        </option>
    
                        <option
                            value="700"
                            <?php // if ( ! empty( $cs_tag_fw ) && $cs_tag_fw == '700' ) { echo 'selected'; } ?>
                        >
                            Bold
                        </option>
    
                        <option
                            value="1000"
                            <?php // if ( ! empty( $cs_tag_fw ) && $cs_tag_fw == '1000' ) { echo 'selected'; } ?>
                        >
                            Bolder
                        </option>
                    </select>
                </div>
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <span>Icon Color</span>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php // if( ! empty( $cs_tag_icon_color ) ) { echo esc_html( $cs_tag_icon_color ); } ?>"
                        name="cs_tag_icon_color"
                    />
                </div>
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <span>Color</span>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php // if( ! empty( $cs_tag_color ) ) { echo esc_html( $cs_tag_color ); } ?>"
                        name="cs_tag_color"
                    />
                </div>
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <span>Background Color</span>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php // if( ! empty( $cs_tag_bg_color ) ) { echo esc_html( $cs_tag_bg_color ); } ?>"
                        name="cs_tag_bg_color"
                    />
                </div>
    
            </div>
        </div> -->

        <div class="field-wrapper cs-post-field cs-scoped-field d-none">
            <div>
                <span>Excerpt</span>
                <br>
                <small>Show/Hide excerpt. shown by default.</small>
            </div>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="cs_show_excerpt" id="cs_show_excerpt_on" type="radio"
                        value="show"
                        <?php if ( ! empty( $cs_show_excerpt ) && $cs_show_excerpt == 'show' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_excerpt_on" class="radioCheck">Show</label>
                    <input name="cs_show_excerpt" id="cs_show_excerpt_off" type="radio"
                        value="hide"
                        <?php if ( ! empty( $cs_show_excerpt ) && $cs_show_excerpt == 'hide' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_excerpt_off" class="radioCheck">Hide</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>

        <div class="field-wrapper mt-20 cs-post-field cs-scoped-field d-none" id="cs_excerpt_settings">
            <span></span>
            <div class="field-group">
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Length</span>
                        <br>
                        <small>Excerpt length in words. Default - 25</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Excerpt length"
                        min="1"
                        value="<?php if( ! empty( $cs_excerpt_length ) ) { echo esc_html( $cs_excerpt_length ); } ?>"
                        step="1"
                        name="cs_excerpt_length"
                    />
                </div>
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Read More Text</span>
                        <br>
                        <small>Default - "Read More"</small>
                    </div>
                    <input
                        class="field"
                        type="text"
                        placeholder="Read More"
                        value="<?php if( ! empty( $cs_read_more_text ) ) { echo esc_html( $cs_read_more_text ); } ?>"
                        name="cs_read_more_text"
                    />
                </div>
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Font Size</span>
                        <br>
                        <small>Excerpt font size. Default - "12px"</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Excerpt font size"
                        min="6"
                        value="<?php if( ! empty( $cs_excerpt_fs ) ) { echo esc_html( $cs_excerpt_fs ); } ?>"
                        step="1"
                        name="cs_excerpt_fs"
                    />
                </div>
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Font Weight</span>
                        <br>
                        <small>Excerpt font weight. Default - "Medium"</small>
                    </div>
                    <select
                        class="field"
                        name="cs_excerpt_fw"
                    >
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="200"
                            <?php if ( ! empty( $cs_excerpt_fw ) && $cs_excerpt_fw == '200' ) { echo 'selected'; } ?>
                        >
                            Thin
                        </option>
    
                        <option
                            value="500"
                            <?php if ( ! empty( $cs_excerpt_fw ) && $cs_excerpt_fw == '500' ) { echo 'selected'; } ?>
                        >
                            Medium
                        </option>
    
                        <option
                            value="700"
                            <?php if ( ! empty( $cs_excerpt_fw ) && $cs_excerpt_fw == '700' ) { echo 'selected'; } ?>
                        >
                            Bold
                        </option>
    
                        <option
                            value="1000"
                            <?php if ( ! empty( $cs_excerpt_fw ) && $cs_excerpt_fw == '1000' ) { echo 'selected'; } ?>
                        >
                            Bolder
                        </option>
                    </select>
                </div>
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Color</span>
                        <br>
                        <small>Excerpt color. Default - "#111111"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_excerpt_color ) ) { echo esc_html( $cs_excerpt_color ); } ?>"
                        name="cs_excerpt_color"
                    />
                </div>
    
                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Read More Text Color</span>
                        <br>
                        <small>Default - "#333333"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_read_more_color ) ) { echo esc_html( $cs_read_more_color ); } ?>"
                        name="cs_read_more_color"
                    />
                </div>
    
            </div>
        </div>

        <div class="field-wrapper cs-post-field cs-scoped-field d-none">
            <div>
                <span>Author</span>
                <br>
                <small>Show/Hide author. Shown by default.</small>
            </div>
            <div>
                <span class="switch radio-switch fixed-width-lg">
                    <input name="cs_show_author" id="cs_show_author_on" type="radio"
                        value="show"
                        <?php if ( ! empty( $cs_show_author ) && $cs_show_author == 'show' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_author_on" class="radioCheck">Show</label>
                    <input name="cs_show_author" id="cs_show_author_off" type="radio"
                        value="hide"
                        <?php if ( ! empty( $cs_show_author ) && $cs_show_author == 'hide' ) { echo 'checked'; } ?>
                    >
                    <label for="cs_show_author_off" class="radioCheck">Hide</label>
                    <a class="slide-button btn"></a>
                </span>
            </div>
        </div>

        <div class="field-wrapper mt-20 cs-post-field cs-scoped-field d-none" id="cs_author_settings">
            <span></span>
            <div class="field-group">

                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Avatar</span>
                        <br>
                        <small>Show/Hide author avatar. Shown by default</small>
                    </div>
                    <div>
                        <span class="switch radio-switch fixed-width-lg">
                            <input name="cs_show_avatar" id="cs_show_avatar_on" type="radio"
                                value="show"
                                <?php if ( ! empty( $cs_show_avatar ) && $cs_show_avatar == 'show' ) { echo 'checked'; } ?>
                            >
                            <label for="cs_show_avatar_on" class="radioCheck">Show</label>
                            <input name="cs_show_avatar" id="cs_show_avatar_off" type="radio"
                                value="hide"
                                <?php if ( ! empty( $cs_show_avatar ) && $cs_show_avatar == 'hide' ) { echo 'checked'; } ?>
                            >
                            <label for="cs_show_avatar_off" class="radioCheck">Hide</label>
                            <a class="slide-button btn"></a>
                        </span>
                    </div>
                </div>

                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Font Size</span>
                        <br>
                        <small>Author font size. Default - "12px"</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Author font size"
                        min="6"
                        value="<?php if( ! empty( $cs_author_fs ) ) { echo esc_html( $cs_author_fs ); } ?>"
                        step="1"
                        name="cs_author_fs"
                    />
                </div>

                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Font Weight</span>
                        <br>
                        <small>Author font weight. Default - "Medium"</small>
                    </div>
                    <select
                        class="field"
                        name="cs_author_fw"
                    >
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="200"
                            <?php if ( ! empty( $cs_author_fw ) && $cs_author_fw == '200' ) { echo 'selected'; } ?>
                        >
                            Thin
                        </option>
    
                        <option
                            value="500"
                            <?php if ( ! empty( $cs_author_fw ) && $cs_author_fw == '500' ) { echo 'selected'; } ?>
                        >
                            Medium
                        </option>
    
                        <option
                            value="700"
                            <?php if ( ! empty( $cs_author_fw ) && $cs_author_fw == '700' ) { echo 'selected'; } ?>
                        >
                            Bold
                        </option>
    
                        <option
                            value="1000"
                            <?php if ( ! empty( $cs_author_fw ) && $cs_author_fw == '1000' ) { echo 'selected'; } ?>
                        >
                            Bolder
                        </option>
                    </select>
                </div>

                <div class="field-wrapper cs-post-field cs-scoped-field d-none">
                    <div>
                        <span>Color</span>
                        <br>
                        <small>Author text color. Default - "#333333"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_author_color ) ) { echo esc_html( $cs_author_color ); } ?>"
                        name="cs_author_color"
                    />
                </div>

            </div>
        </div>

        <div class="field-wrapper cs-product-field cs-scoped-field d-none">
            <div>
                <span>Stock Status</span>
                <br>
                <small>Settings for stock status</small>
            </div>
            <div class="field-group">
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Font Size</span>
                        <br>
                        <small>Default - "12px"</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Stock status font size"
                        min="6"
                        value="<?php if( ! empty( $cs_stock_fs ) ) { echo esc_html( $cs_stock_fs ); } ?>"
                        step="1"
                        name="cs_stock_fs"
                    />
                </div>
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Font Weight</span>
                        <br>
                        <small>Default - "Medium"</small>
                    </div>
                    <select
                        class="field"
                        name="cs_stock_fw"
                    >
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="200"
                            <?php if ( ! empty( $cs_stock_fw ) && $cs_stock_fw == '200' ) { echo 'selected'; } ?>
                        >
                            Thin
                        </option>
    
                        <option
                            value="500"
                            <?php if ( ! empty( $cs_stock_fw ) && $cs_stock_fw == '500' ) { echo 'selected'; } ?>
                        >
                            Medium
                        </option>
    
                        <option
                            value="700"
                            <?php if ( ! empty( $cs_stock_fw ) && $cs_stock_fw == '700' ) { echo 'selected'; } ?>
                        >
                            Bold
                        </option>
    
                        <option
                            value="1000"
                            <?php if ( ! empty( $cs_stock_fw ) && $cs_stock_fw == '1000' ) { echo 'selected'; } ?>
                        >
                            Bolder
                        </option>
                    </select>
                </div>
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Color</span>
                        <br>
                        <small>Default - "#EA8A35"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_stock_color ) ) { echo esc_html( $cs_stock_color ); } ?>"
                        name="cs_stock_color"
                    />
                </div>
    
            </div>
        </div>

        <div class="field-wrapper cs-product-field cs-scoped-field d-none">
            <div>
                <span>Sales Count</span>
                <br>
                <small>Sales count related settings</small>
            </div>
            <div class="field-group">
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Font Size</span>
                        <br>
                        <small>Default - "12px"</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Sales count font size"
                        min="6"
                        value="<?php if( ! empty( $cs_sales_fs ) ) { echo esc_html( $cs_sales_fs ); } ?>"
                        step="1"
                        name="cs_sales_fs"
                    />
                </div>
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Font Weight</span>
                        <br>
                        <small>Default - "Medium"</small>
                    </div>
                    <select
                        class="field"
                        name="cs_sales_fw"
                    >
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="200"
                            <?php if ( ! empty( $cs_sales_fw ) && $cs_sales_fw == '200' ) { echo 'selected'; } ?>
                        >
                            Thin
                        </option>
    
                        <option
                            value="500"
                            <?php if ( ! empty( $cs_sales_fw ) && $cs_sales_fw == '500' ) { echo 'selected'; } ?>
                        >
                            Medium
                        </option>
    
                        <option
                            value="700"
                            <?php if ( ! empty( $cs_sales_fw ) && $cs_sales_fw == '700' ) { echo 'selected'; } ?>
                        >
                            Bold
                        </option>
    
                        <option
                            value="1000"
                            <?php if ( ! empty( $cs_sales_fw ) && $cs_sales_fw == '1000' ) { echo 'selected'; } ?>
                        >
                            Bolder
                        </option>
                    </select>
                </div>
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Color</span>
                        <br>
                        <small>Default - "#333333"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_sales_color ) ) { echo esc_html( $cs_sales_color ); } ?>"
                        name="cs_sales_color"
                    />
                </div>
    
            </div>
        </div>

        <div class="field-wrapper cs-product-field cs-scoped-field d-none">
            <div>
                <span>Rating Star</span>
                <br>
                <small>Rating star related settings</small>
            </div>
            <div class="field-group">
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Font Size</span>
                        <br>
                        <small>Default - "12px"</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Rating font size"
                        min="6"
                        value="<?php if( ! empty( $cs_review_fs ) ) { echo esc_html( $cs_review_fs ); } ?>"
                        step="1"
                        name="cs_review_fs"
                    />
                </div>
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Font Weight</span>
                        <br>
                        <small>Default - "Medium"</small>
                    </div>
                    <select
                        class="field"
                        name="cs_review_fw"
                    >
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="200"
                            <?php if ( ! empty( $cs_review_fw ) && $cs_review_fw == '200' ) { echo 'selected'; } ?>
                        >
                            Thin
                        </option>
    
                        <option
                            value="500"
                            <?php if ( ! empty( $cs_review_fw ) && $cs_review_fw == '500' ) { echo 'selected'; } ?>
                        >
                            Medium
                        </option>
    
                        <option
                            value="700"
                            <?php if ( ! empty( $cs_review_fw ) && $cs_review_fw == '700' ) { echo 'selected'; } ?>
                        >
                            Bold
                        </option>
    
                        <option
                            value="1000"
                            <?php if ( ! empty( $cs_review_fw ) && $cs_review_fw == '1000' ) { echo 'selected'; } ?>
                        >
                            Bolder
                        </option>
                    </select>
                </div>
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Color</span>
                        <br>
                        <small>Default - "#EA8A35"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_review_color ) ) { echo esc_html( $cs_review_color ); } ?>"
                        name="cs_review_color"
                    />
                </div>
    
            </div>
        </div>

        <div class="field-wrapper cs-product-field cs-scoped-field d-none">
            <div>
                <span>Pricing</span>
                <br>
                <small>Pricing related settings</small>
            </div>
            <div class="field-group">
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Active Font Size</span>
                        <br>
                        <small>Default - "12px"</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Active price font size"
                        min="6"
                        value="<?php if( ! empty( $cs_active_price_fs ) ) { echo esc_html( $cs_active_price_fs ); } ?>"
                        step="1"
                        name="cs_active_price_fs"
                    />
                </div>
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Active Font Weight</span>
                        <br>
                        <small>Default - "Bold"</small>
                    </div>
                    <select
                        class="field"
                        name="cs_active_price_fw"
                    >
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="200"
                            <?php if ( ! empty( $cs_active_price_fw ) && $cs_active_price_fw == '200' ) { echo 'selected'; } ?>
                        >
                            Thin
                        </option>
    
                        <option
                            value="500"
                            <?php if ( ! empty( $cs_active_price_fw ) && $cs_active_price_fw == '500' ) { echo 'selected'; } ?>
                        >
                            Medium
                        </option>
    
                        <option
                            value="700"
                            <?php if ( ! empty( $cs_active_price_fw ) && $cs_active_price_fw == '700' ) { echo 'selected'; } ?>
                        >
                            Bold
                        </option>
    
                        <option
                            value="1000"
                            <?php if ( ! empty( $cs_active_price_fw ) && $cs_active_price_fw == '1000' ) { echo 'selected'; } ?>
                        >
                            Bolder
                        </option>
                    </select>
                </div>
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Active Color</span>
                        <br>
                        <small>Default - "#EA8A35"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_active_price_color ) ) { echo esc_html( $cs_active_price_color ); } ?>"
                        name="cs_active_price_color"
                    />
                </div>
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Previous Font Size</span>
                        <br>
                        <small>Default - "10px"</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Previous price font size"
                        min="6"
                        value="<?php if( ! empty( $cs_prev_price_fs ) ) { echo esc_html( $cs_prev_price_fs ); } ?>"
                        step="1"
                        name="cs_prev_price_fs"
                    />
                </div>
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Previous Font Weight</span>
                        <br>
                        <small>Default - "Medium"</small>
                    </div>
                    <select
                        class="field"
                        name="cs_prev_price_fw"
                    >
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="200"
                            <?php if ( ! empty( $cs_prev_price_fw ) && $cs_prev_price_fw == '200' ) { echo 'selected'; } ?>
                        >
                            Thin
                        </option>
    
                        <option
                            value="500"
                            <?php if ( ! empty( $cs_prev_price_fw ) && $cs_prev_price_fw == '500' ) { echo 'selected'; } ?>
                        >
                            Medium
                        </option>
    
                        <option
                            value="700"
                            <?php if ( ! empty( $cs_prev_price_fw ) && $cs_prev_price_fw == '700' ) { echo 'selected'; } ?>
                        >
                            Bold
                        </option>
    
                        <option
                            value="1000"
                            <?php if ( ! empty( $cs_prev_price_fw ) && $cs_prev_price_fw == '1000' ) { echo 'selected'; } ?>
                        >
                            Bolder
                        </option>
                    </select>
                </div>
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Previous Color</span>
                        <br>
                        <small>Default - "#333333"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_prev_price_color ) ) { echo esc_html( $cs_prev_price_color ); } ?>"
                        name="cs_prev_price_color"
                    />
                </div>
    
            </div>
        </div>

        <div class="field-wrapper cs-product-field cs-scoped-field d-none">
            <div>
                <span>Cart Button</span>
                <br>
                <small>Add To Cart button related settings</small>
            </div>
            <div class="field-group">
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Font Size</span>
                        <br>
                        <small>Default - "12px"</small>
                    </div>
                    <input
                        class="field"
                        type="number"
                        placeholder="Cart button font size"
                        min="6"
                        value="<?php if( ! empty( $cs_woo_button_fs ) ) { echo esc_html( $cs_woo_button_fs ); } ?>"
                        step="1"
                        name="cs_woo_button_fs"
                    />
                </div>
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Font Weight</span>
                        <br>
                        <small>Default - "Medium"</small>
                    </div>
                    <select
                        class="field"
                        name="cs_woo_button_fw"
                    >
                        <option
                            class="d-none"
                            value="" 
                        >
                            Select An Option
                        </option>

                        <option
                            value="200"
                            <?php if ( ! empty( $cs_woo_button_fw ) && $cs_woo_button_fw == '200' ) { echo 'selected'; } ?>
                        >
                            Thin
                        </option>
    
                        <option
                            value="500"
                            <?php if ( ! empty( $cs_woo_button_fw ) && $cs_woo_button_fw == '500' ) { echo 'selected'; } ?>
                        >
                            Medium
                        </option>
    
                        <option
                            value="700"
                            <?php if ( ! empty( $cs_woo_button_fw ) && $cs_woo_button_fw == '700' ) { echo 'selected'; } ?>
                        >
                            Bold
                        </option>
    
                        <option
                            value="1000"
                            <?php if ( ! empty( $cs_woo_button_fw ) && $cs_woo_button_fw == '1000' ) { echo 'selected'; } ?>
                        >
                            Bolder
                        </option>
                    </select>
                </div>
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Color</span>
                        <br>
                        <small>Default - "#EA8A35"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_woo_button_color ) ) { echo esc_html( $cs_woo_button_color ); } ?>"
                        name="cs_woo_button_color"
                    />
                </div>
    
                <div class="field-wrapper cs-product-field cs-scoped-field d-none">
                    <div>
                        <span>Background Color</span>
                        <br>
                        <small>Default - "#FFFFFF"</small>
                    </div>
                    <input
                        class="cs-color-picker"
                        type="text"
                        value="<?php if( ! empty( $cs_woo_button_bg_color ) ) { echo esc_html( $cs_woo_button_bg_color ); } ?>"
                        name="cs_woo_button_bg_color"
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
            let selectizeElem = $('#cs_query')[0].selectize

            if ( selectizeElem ) {
                selectizeElem.destroy()
            }
        }

        // render fields according to the selected post type
        function manageFieldRendering() {
            let postType = $('#cs_post_type').val()

            $('.cs-scoped-field').addClass('d-none')

            if ( postType == 'post' ) {
                $('.cs-post-field').removeClass('d-none')
            }

            if ( postType == 'product' ) {
                $('.cs-product-field').removeClass('d-none')
            }

            if ( postType == 'commerce_slide' ) {
                $('.cs-commerce-slide-field').removeClass('d-none')
            }
        }

        // function to run when key is pressed in the selectize search field
        function runOnLoad(query, callback) {
            let queryType = $('input[name=cs_query_type]:checked').val();

            let restrictedTypes = ['category', 'product_cat', 'post_tag', 'product_tag', 'commerce_slide_tag']

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
            let queryType = $('input[name=cs_query_type]:checked').val();

            if (['id', 'sku'].includes(queryType)) {
                return
            }

            var selectizeElem = $('#cs_query')[0].selectize;

            makeAjax('', 'fetch_search', queryType, (res) => {
                selectizeElem.addOption(res);
                selectizeElem.refreshOptions(false);
            })
        }

        // making ajax request to fetch data
        function makeAjax( query, type, queryType, callback, isLoad = false ) {
            let postType = $('#cs_post_type').val()
            let nonce = $('#cs_ajax_nonce').val()

            let data = {
                action: 'custom_search',
                postType: postType,
                type: type,
                queryType: queryType,
                query: query,
                security: nonce
            }

            $.ajax({
                url: ajaxurl,
                type: 'POST',
                dataType: 'json',
                data: data,
                success: function (response) {
                    callback(response.results);
                },
                error: function () {
                    if (isLoad) {
                        callback();
                    } else {
                        console.log("Failed to fetch Commerce Slider data")
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
        $('#cs_post_type').on('afterChange', () => {
            $('input[name="cs_query_type"]:checked').prop('checked', false);
            resetSelectizeData()
            manageFieldRendering()

            $('#cs_query_wrapper').addClass('d-none')
        })

        // render the post type related fields on page load
        manageFieldRendering()

        // on query type change, re-initialize the selectize object and make it visible if it wasn't 
        $(document).on('change', 'input[name=cs_query_type]', () => {
            resetSelectizeData()

            $('#cs_query').selectize({...selectizeData});

            $('#cs_query_wrapper').removeClass('d-none')
        })

        let queryType = $('input[name=cs_query_type]:checked').val()

        // strictly for post edit page, signalled by the existing query type value on page load.
        // initialize the selectize object and fetch and populated it with the saved data on the database
        if (queryType && queryType.length) {
            $('#cs_query').selectize({...selectizeData});

            let query = '<?php echo esc_html( $cs_query ) ?>'

            if ( query && query.length ) {

                makeAjax(query, 'fetch_query', queryType, (res) => {
                    let selectizeElem = $('#cs_query')[0].selectize
        
                    selectizeElem.addOption(res)
                    selectizeElem.refreshOptions(false)

                    let values = res.map(item => item.id)
                    values.forEach(val => selectizeElem.addItem(val))
                })
            }

            $('#cs_query_wrapper').removeClass('d-none')
        }

    })
</script>