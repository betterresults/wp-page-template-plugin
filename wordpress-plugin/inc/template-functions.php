<?php
/**
 * Template Functions for ESN Page Templates
 */

/**
 * Get custom field value for current page
 */
function esn_get_field($field_name, $default = '') {
    global $post;
    if (!$post) return $default;
    
    $value = get_post_meta($post->ID, '_' . $field_name, true);
    return !empty($value) ? $value : $default;
}

/**
 * Display custom field value
 */
function esn_the_field($field_name, $default = '') {
    echo esc_html(esn_get_field($field_name, $default));
}

/**
 * Get custom field value with HTML allowed
 */
function esn_get_field_html($field_name, $default = '') {
    global $post;
    if (!$post) return $default;
    
    $value = get_post_meta($post->ID, '_' . $field_name, true);
    return !empty($value) ? $value : $default;
}

/**
 * Display custom field value with HTML allowed
 */
function esn_the_field_html($field_name, $default = '') {
    echo wp_kses_post(esn_get_field_html($field_name, $default));
}

/**
 * Check if current page uses ESN template
 */
function esn_is_template_page($template_name = '') {
    global $post;
    if (!$post) return false;
    
    $current_template = get_post_meta($post->ID, '_esn_page_template', true);
    
    if ($template_name) {
        return $current_template === $template_name;
    }
    
    return !empty($current_template);
}

/**
 * Get page title for ESN template
 */
function esn_get_page_title() {
    $custom_title = esn_get_field('page_title');
    if (!empty($custom_title)) {
        return $custom_title;
    }
    return get_the_title();
}

/**
 * Get service areas array
 */
function esn_get_service_areas() {
    return array(
        "South Hornchurch",
        "Hornchurch", 
        "Upminster",
        "Rainham",
        "Elm Park",
        "Romford",
        "Gidea Park",
        "Harold Wood",
        "Harold Hill",
        "Emerson Park",
        "Cranham",
        "North Ockendon"
    );
}

/**
 * Get static FAQ questions
 */
function esn_get_static_faqs() {
    return array(
        array(
            'question' => 'Do I need to be present during the cleaning?',
            'answer' => 'No, you don\'t need to be present. Many of our clients prefer to hand over the keys and let us work undisturbed. We\'re fully insured and bonded for your peace of mind.'
        ),
        array(
            'question' => 'What cleaning products do you use?',
            'answer' => 'We use professional-grade, eco-friendly cleaning products that are safe for all surfaces. All equipment and supplies are provided by us - you don\'t need to prepare anything.'
        ),
        array(
            'question' => 'How much does a cleaning service cost?',
            'answer' => 'Prices vary based on property size and condition. We offer competitive rates with no hidden fees. Contact us for a free, no-obligation quote tailored to your specific needs.'
        )
    );
}