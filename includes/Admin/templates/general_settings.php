<?php

$ms_ID = get_the_ID();
$ms_categories = get_terms( [
    'taxonomy' => 'category',
    'hide_empty' => false
] );

$ms_cat_query = get_post_meta( $ms_ID, 'ms_cat_query', true );
$ms_feature_img_size = get_post_meta( $ms_ID, 'ms_feature_img_size', true );
$ms_items_to_show = get_post_meta( $ms_ID, 'ms_items_to_show', true );
$ms_items_to_display = get_post_meta( $ms_ID, 'ms_items_to_display', true );
$ms_order = get_post_meta( $ms_ID, 'ms_order', true );
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
                    <option
                        value="<?php echo $category->term_id ?>"
                        <?php if ( in_array( $category->term_id, explode( ',',  $ms_cat_query ) ) ) { echo "selected"; } ?>
                    >
                        <?php echo $category->name ?>
                    </option>
        
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
            value="<?php echo empty( $ms_items_to_display ) ? '2' : $ms_items_to_display ?>"
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
</div>