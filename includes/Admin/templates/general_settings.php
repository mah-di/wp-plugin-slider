<?php

$ms_ID = get_the_ID();
$ms_categories = get_terms( [
    'taxonomy' => 'category',
    'hide_empty' => false
] );

?>

<div class="form-field field-wrapper">
    <label class="label" for="cat_query">Select Category</label>
    <select class="field_small" name="ms_cat_query[]" id="cat_query" multiple="multiple" >
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
    <input type="number" id="items" min="0" max="20" step="1" name="ms_items_to_show" />
</div>
<div class="form-field field-wrapper">
    <label for="items">Items to show</label>
    <input type="number" id="items" min="0" max="20" step="1" name="ms_items_to_show" />
</div>