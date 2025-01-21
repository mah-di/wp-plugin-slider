<?php

$ms_prefix = MS_SHORTCODE_PREFIX;
$ms_id = get_the_ID();

$ms_shortcode = "[{$ms_prefix} id={$ms_id}]";

?>

<div class="form-field">
    <p>
        Use This Shortcode to Display the Slider.
    </p>
    
    <input
        id="shortcode"
        type="text"
        readonly
        value="<?php echo $ms_shortcode; ?>"
    />
</div>