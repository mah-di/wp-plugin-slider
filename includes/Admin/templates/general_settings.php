<?php

$ms_ID                      = get_the_ID();

$ms_tags                    = ms_get_all_tags();

$ms_post_type               = get_post_meta( $ms_ID, 'ms_post_type', true );
$ms_tag_query               = get_post_meta( $ms_ID, 'ms_tag_query', true );
$ms_feature_img_size        = get_post_meta( $ms_ID, 'ms_feature_img_size', true );
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
$ms_show_dots               = get_post_meta( $ms_ID, 'ms_show_dots', true );
$ms_show_dots_foreach       = get_post_meta( $ms_ID, 'ms_show_dots_foreach', true );
$ms_autoplay                = get_post_meta( $ms_ID, 'ms_autoplay', true );
$ms_autoplay_timeout        = get_post_meta( $ms_ID, 'ms_autoplay_timeout', true );
$ms_autoplay_hover_pause    = get_post_meta( $ms_ID, 'ms_autoplay_hover_pause', true );
$ms_autoplay_speed          = get_post_meta( $ms_ID, 'ms_autoplay_speed', true );

$ms_bg_color                = get_post_meta( $ms_ID, 'ms_bg_color', true );
$ms_comment_icon_color      = get_post_meta( $ms_ID, 'ms_comment_icon_color', true );
$ms_comment_color           = get_post_meta( $ms_ID, 'ms_comment_color', true );
$ms_category_icon_color     = get_post_meta( $ms_ID, 'ms_category_icon_color', true );
$ms_category_color          = get_post_meta( $ms_ID, 'ms_category_color', true );
$ms_category_bg_color       = get_post_meta( $ms_ID, 'ms_category_bg_color', true );
$ms_tag_icon_color          = get_post_meta( $ms_ID, 'ms_tag_icon_color', true );
$ms_tag_color               = get_post_meta( $ms_ID, 'ms_tag_color', true );
$ms_tag_bg_color            = get_post_meta( $ms_ID, 'ms_tag_bg_color', true );
$ms_title_color             = get_post_meta( $ms_ID, 'ms_title_color', true );
$ms_excerpt_color           = get_post_meta( $ms_ID, 'ms_excerpt_color', true );
$ms_read_more_color         = get_post_meta( $ms_ID, 'ms_read_more_color', true );
$ms_author_color            = get_post_meta( $ms_ID, 'ms_author_color', true );
$ms_date_color              = get_post_meta( $ms_ID, 'ms_date_color', true );

$ms_nav_bg_color            = get_post_meta( $ms_ID, 'ms_nav_bg_color', true );
$ms_nav_bg_hover_color      = get_post_meta( $ms_ID, 'ms_nav_bg_hover_color', true );
$ms_nav_color               = get_post_meta( $ms_ID, 'ms_nav_color', true );
$ms_nav_font_size           = get_post_meta( $ms_ID, 'ms_nav_font_size', true );
$ms_nav_font_weight         = get_post_meta( $ms_ID, 'ms_nav_font_weight', true );

$ms_dot_shape               = get_post_meta( $ms_ID, 'ms_dot_shape', true );
$ms_dot_color               = get_post_meta( $ms_ID, 'ms_dot_color', true );
$ms_dot_active_color        = get_post_meta( $ms_ID, 'ms_dot_active_color', true );

?>

<div class="form-wrapper">

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
        <label class="label" for="tag_query">Select Tag</label>
        <select class="field_small" name="ms_tag_query[]" id="tag_query" multiple="multiple" placeholder="Select Tag">
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

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
        <span>Margin Between Items</span>
        <input
            class="field"
            type="number"
            value="<?php echo empty( $ms_margin_right ) ? '10' : $ms_margin_right ?>"
            step="1"
            name="ms_margin_right"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Feature Image Size</span>
        <select class="field" id="ms_feature_img_size" name="ms_feature_img_size">
            <option
                value="thumbnail"
                <?php if($ms_feature_img_size == "thumbnail") { echo "selected"; } ?> 
            >
                <?php echo esc_html__('Thumbnail - 150 x 150','spice-post-slider');?>
            </option>

            <option
                value="medium"
                <?php if($ms_feature_img_size == "medium") { echo "selected"; } ?>
            >
                <?php echo esc_html__('Medium - 300 x 300','spice-post-slider');?>
            </option>

            <option
                value="medium_large"
                <?php if($ms_feature_img_size == "medium_large") { echo "selected"; } if(empty($ms_feature_img_size)) { echo "selected"; } ?> 
            >
                <?php echo esc_html__('Medium Large - 768 x 0','spice-post-slider');?>
            </option>

            <option
                value="large"
                <?php if($ms_feature_img_size == "large") { echo "selected"; } ?>
            >
                <?php echo esc_html__('Large - 1024 x 1024','spice-post-slider');?>
            </option>

            <option
                value="1536x1536"
                <?php if($ms_feature_img_size == "1536x1536") { echo "selected"; } ?>
            >
                <?php echo esc_html__('1536x1536 - 1536 x 1536','spice-post-slider');?>
            </option>

            <option
                value="2048x2048"
                <?php if($ms_feature_img_size == "2048x2048") { echo "selected"; } ?>
            >
                <?php echo esc_html__('2048x2048 - 2048 x 2048','spice-post-slider');?>
            </option>

            <option
                value="full"
                <?php if($ms_feature_img_size == "full") { echo "selected"; } ?>
            >
                <?php echo esc_html__('Full','spice-post-slider');?>
            </option>

        </select>
    </div>

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
        <span>Read More Text</span>
        <input
            class="field"
            type="text"
            value="<?php echo empty( $ms_read_more_text ) ? 'Read More' : $ms_read_more_text ?>"
            name="ms_read_more_text"
        />
    </div>

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
        <span>Centerize Items</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_center" id="ms_center_on" type="radio"
                    value="true"
                    <?php if ( empty( $ms_center ) || $ms_center == 'true' ) { echo 'checked'; } ?>
                >
                <label for="ms_center_on" class="radioCheck">Yes</label>
                <input name="ms_center" id="ms_center_off" type="radio"
                    value="false"
                    <?php if ( $ms_center == 'false' ) { echo 'checked'; } ?>
                >
                <label for="ms_center_off" class="radioCheck">No</label>
                <a class="slide-button btn"></a>
            </span>
        </div>
    </div>

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
        <span>Show Dots For Each Item</span>
        <div>
            <span class="switch radio-switch fixed-width-lg">
                <input name="ms_show_dots_foreach" id="ms_show_dots_foreach_on" type="radio"
                    value="true"
                    <?php if ( empty( $ms_show_dots_foreach ) || $ms_show_dots_foreach == 'true' ) { echo 'checked'; } ?>
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

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
        <span>Autoplay Timeout</span>
        <input
            class="field"
            type="number"
            value="<?php echo empty( $ms_autoplay_timeout ) ? '5000' : $ms_autoplay_timeout ?>"
            step="1"
            name="ms_autoplay_timeout"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Autoplay Speed</span>
        <input
            class="field"
            type="number"
            value="<?php echo empty( $ms_autoplay_speed ) ? '700' : $ms_autoplay_speed ?>"
            step="1"
            name="ms_autoplay_speed"
        />
    </div>

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
        <span>Slides Background Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_bg_color ) ? '#ffffff' : $ms_bg_color ?>"
            name="ms_bg_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Comments Icon Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_comment_icon_color ) ? '#000000' : $ms_comment_icon_color ?>"
            name="ms_comment_icon_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Comments Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_comment_color ) ? '#000000' : $ms_comment_color ?>"
            name="ms_comment_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Category Icon Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_category_icon_color ) ? '#000000' : $ms_category_icon_color ?>"
            name="ms_category_icon_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Category Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_category_color ) ? '#ffffff' : $ms_category_color ?>"
            name="ms_category_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Category Background Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_category_bg_color ) ? '#5E76BF' : $ms_category_bg_color ?>"
            name="ms_category_bg_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Tag Icon Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_tag_icon_color ) ? '#000000' : $ms_tag_icon_color ?>"
            name="ms_tag_icon_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Tag Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_tag_color ) ? '#888888' : $ms_tag_color ?>"
            name="ms_tag_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Tag Background Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_tag_bg_color ) ? '#e9e9e9' : $ms_tag_bg_color ?>"
            name="ms_tag_bg_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Title Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_title_color ) ? '#000000' : $ms_title_color ?>"
            name="ms_title_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Excerpt Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_excerpt_color ) ? '#000000' : $ms_excerpt_color ?>"
            name="ms_excerpt_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Read More Text Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_read_more_color ) ? '#4c4c4c' : $ms_read_more_color ?>"
            name="ms_read_more_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Author Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_author_color ) ? '#000000' : $ms_author_color ?>"
            name="ms_author_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Date Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_date_color ) ? '#545d7a' : $ms_date_color ?>"
            name="ms_date_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Navigation Button Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_nav_color ) ? '#eeeeee' : $ms_nav_color ?>"
            name="ms_nav_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Navigation Button Font Size</span>
        <input
            class="field"
            type="number"
            min="8"
            step="1"
            value="<?php echo empty( $ms_nav_font_size ) ? '24' : $ms_nav_font_size ?>"
            name="ms_nav_font_size"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Navigation Button Font Weight</span>
        <select
            class="field"
            name="ms_nav_font_weight"
        >
            <option
                value="200"
                <?php if ( ! empty( $ms_nav_font_weight ) && $ms_nav_font_weight == '200' ) { echo 'selected'; } ?>
            >
                Thin
            </option>

            <option
                value="500"
                <?php if ( empty( $ms_nav_font_weight ) || $ms_nav_font_weight == '500' ) { echo 'selected'; } ?>
            >
                Medium
            </option>

            <option
                value="700"
                <?php if ( ! empty( $ms_nav_font_weight ) && $ms_nav_font_weight == '700' ) { echo 'selected'; } ?>
            >
                Bold
            </option>

            <option
                value="1000"
                <?php if ( ! empty( $ms_nav_font_weight ) && $ms_nav_font_weight == '1000' ) { echo 'selected'; } ?>
            >
                Bolder
            </option>
        </select>
    </div>

    <div class="form-field field-wrapper">
        <span>Navigation Button Background Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_nav_bg_color ) ? 'rgba(0, 0, 0, 0.5)' : $ms_nav_bg_color ?>"
            name="ms_nav_bg_color"
            data-alpha-enabled="true"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Navigation Button Background Hover Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_nav_bg_hover_color ) ? 'rgba(0, 0, 0, 0.8)' : $ms_nav_bg_hover_color ?>"
            name="ms_nav_bg_hover_color"
            data-alpha-enabled="true"
        />
    </div>

    <div class="form-field field-wrapper">
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

    <div class="form-field field-wrapper">
        <span>Navigation Dots Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_dot_color ) ? '#e9e9e9' : $ms_dot_color ?>"
            name="ms_dot_color"
        />
    </div>

    <div class="form-field field-wrapper">
        <span>Navigation Dots Active Color</span>
        <input
            class="ms-color-picker"
            type="text"
            value="<?php echo empty( $ms_dot_active_color ) ? '#cdcdcd' : $ms_dot_active_color ?>"
            name="ms_dot_active_color"
        />
    </div>
</div>