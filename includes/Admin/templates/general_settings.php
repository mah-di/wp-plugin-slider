<?php

$ms_ID = get_the_ID();
$ms_categories = get_terms( [
    'taxonomy' => 'category',
    'hide_empty' => false
] );

$ms_feature_img_size = get_post_meta( $ms_ID, 'ms_feature_img_size', true );
$ms_items_to_show = get_post_meta( $ms_ID, 'ms_items_to_show', true );
$ms_items_to_display = get_post_meta( $ms_ID, 'ms_items_to_display', true );
$ms_order_by = get_post_meta( $ms_ID, 'ms_order_by', true );
$ms_show_comments = get_post_meta( $ms_ID, 'ms_show_comments', true );
$ms_show_category = get_post_meta( $ms_ID, 'ms_show_category', true );
$ms_show_tags = get_post_meta( $ms_ID, 'ms_show_tags', true );
$ms_show_author = get_post_meta( $ms_ID, 'ms_show_author', true );
$ms_show_avatar = get_post_meta( $ms_ID, 'ms_show_avatar', true );
$ms_show_date = get_post_meta( $ms_ID, 'ms_show_date', true );


?>

<div class="form-wrapper">
    <div class="form-field field-wrapper">
        <label class="label" for="cat_query">Select Category</label>
        <select class="field_small" name="ms_cat_query[]" id="cat_query" multiple="multiple" placeholder="Select Category">
            <?php
            
            if ( ! empty( $ms_categories ) ):
                foreach ( $ms_categories as $category ):
        
            ?>
                    <option value="<?php echo $category->term_id ?>"><?php echo $category->name ?></option>
        
            <?php
        
                endforeach;
            endif;
        
            ?>
        </select>
    </div>

    <div class="form-field field-wrapper">
        <label for="items">Items to show</label>
        <input
            class="field"
            type="number"
            id="items"
            min="0"
            max="20"
            value="<?php echo empty( $ms_items_to_show ) ? '4' : $ms_items_to_show ?>"
            step="1"
            name="ms_items_to_show"
        />
    </div>

    <div class="form-field field-wrapper">
        <label for="display_items">Display Items</label>
        <input
            class="field"
            type="number"
            id="display_items"
            min="1"
            max="20"
            value="1"
            step="1"
            name="ms_items_to_display"
        />
    </div>

    <div class="form-field field-wrapper">
        <label for="display_items">Display Items</label>
        <input
            class="field"
            type="number"
            id="display_items"
            min="1"
            max="20"
            value="1"
            step="1"
            name="ms_items_to_display"
        />
    </div>

    <div class="form-field field-wrapper">
        <span for="ms_feature_img_size">Feature Image Size</span>
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
        <select class="field" name="sps_orderby">
            <option
                value="ASC"
                <?php ( empty( $ms_order_by ) || $ms_order_by == 'ASC' ) ? 'selected' : '' ?>
            >
                Ascending Order
            </option>

            <option
                value="DESC"
                <?php ( ! empty( $ms_order_by ) && $ms_order_by == 'DESC' ) ? 'selected' : '' ?>
            >
                Descending Order
            </option>
        </select>
    </div>

    <div class="form-field field-wrapper">
        <span>Comments</span>
        <label class="switch">
            <input
                type="checkbox"
                id="show-comments"
                <?php echo ( empty( $ms_show_comments ) || $ms_show_comments ) ? 'checked' : '' ?>
            >
            <div class="slider round">
                <span class="on">ON</span>
                <span class="off">OFF</span>
            </div>
        </label>
    </div>

    <div class="form-field field-wrapper">
        <span>Category</span>
        <label class="switch">
            <input
                type="checkbox"
                id="show-category"
                <?php echo ( empty( $ms_show_category ) || $ms_show_category ) ? 'checked' : '' ?>
            >
            <div class="slider round">
                <span class="on">ON</span>
                <span class="off">OFF</span>
            </div>
        </label>
    </div>
    
    <div class="form-field field-wrapper">
        <span>Tags</span>
        <label class="switch">
            <input
                type="checkbox"
                id="show-tags"
                <?php echo ( empty( $ms_show_tags ) || $ms_show_tags ) ? 'checked' : '' ?>
            >
            <div class="slider round">
                <span class="on">ON</span>
                <span class="off">OFF</span>
            </div>
        </label>
    </div>

    <div class="form-field field-wrapper">
        <span>Author</span>
        <label class="switch">
            <input
                type="checkbox"
                id="show-author"
                <?php echo ( empty( $ms_show_author ) || $ms_show_author ) ? 'checked' : '' ?>
            >
            <div class="slider round">
                <span class="on">ON</span>
                <span class="off">OFF</span>
            </div>
        </label>
    </div>

    <div class="form-field field-wrapper">
        <span>Author Avatar</span>
        <label class="switch">
            <input
                type="checkbox"
                id="show-avatar"
                <?php echo ( empty( $ms_show_avatar ) || $ms_show_avatar ) ? 'checked' : '' ?>
            >
            <div class="slider round">
                <span class="on">ON</span>
                <span class="off">OFF</span>
            </div>
        </label>
    </div>

    <div class="form-field field-wrapper">
        <span>Date</span>
        <label class="switch">
            <input
                type="checkbox"
                id="show-date"
                <?php echo ( empty( $ms_show_date ) || $ms_show_date ) ? 'checked' : '' ?>
            >
            <div class="slider round">
                <span class="on">ON</span>
                <span class="off">OFF</span>
            </div>
        </label>
    </div>
</div>