<?php

$cs_prefix = CS_SHORTCODE_PREFIX;
$cs_id = get_the_ID();

$cs_shortcode = "[{$cs_prefix} id={$cs_id}]";

?>

<div class="form-field">
    <p>
        Use This Shortcode to Display the Slider.
    </p>
    
    <input
        id="shortcode"
        type="text"
        readonly
        value="<?php echo esc_html( $cs_shortcode ); ?>"
    />
</div>