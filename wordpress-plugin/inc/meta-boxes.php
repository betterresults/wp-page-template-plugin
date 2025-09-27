<?php
/**
 * Meta Boxes for ESN Page Templates
 */

class ESN_Meta_Boxes {

    public function __construct() {
        add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
        add_action('save_post', array($this, 'save_meta_boxes'));
    }

    public function add_meta_boxes() {
        add_meta_box(
            'esn_template_selector',
            'ESN Template Selector',
            array($this, 'template_selector_callback'),
            'page',
            'side',
            'high'
        );

        add_meta_box(
            'esn_page_content_fields',
            'Page Content Fields',
            array($this, 'content_fields_callback'),
            'page',
            'normal',
            'high'
        );
    }

    public function template_selector_callback($post) {
        wp_nonce_field('esn_meta_box_nonce', 'esn_meta_box_nonce');
        
        $selected_template = get_post_meta($post->ID, '_esn_page_template', true);
        
        $template_display_name = get_post_meta($post->ID, '_esn_template_display_name', true);
        if (empty($template_display_name)) {
            $template_display_name = 'Service Cleaning Template';
        }
        
        $templates = array(
            '' => 'Default Template',
            'service-cleaning-template' => $template_display_name,
        );
        
        echo '<label for="esn_page_template">Select Template:</label>';
        echo '<select name="esn_page_template" id="esn_page_template" class="widefat">';
        foreach ($templates as $value => $label) {
            echo '<option value="' . esc_attr($value) . '" ' . selected($selected_template, $value, false) . '>' . esc_html($label) . '</option>';
        }
        echo '</select>';
        
        echo '<br><br>';
        echo '<label for="esn_template_display_name">Template Display Name:</label>';
        echo '<input type="text" name="esn_template_display_name" id="esn_template_display_name" value="' . esc_attr($template_display_name) . '" class="widefat" placeholder="e.g., End of Tenancy Cleaning Template" />';
    }

    public function content_fields_callback($post) {
        $fields = array(
            'page_title' => 'Page Title (Browser Tab)',
            'meta_description' => 'Meta Description (SEO)',
            'page_h1' => 'Main Heading (H1)',
            'under_heading' => 'Under Heading Text',
            'hero_image' => 'Hero Background Image URL',
            'hero_image_name' => 'Hero Image Name (for filename)',
            'hero_image_alt' => 'Hero Image Alt Text (SEO)',
            'hero_image_desc' => 'Hero Image Description (SEO)',
            'page_area' => 'Service Area',
            'page_borough' => 'Borough',
            'page_subheading' => 'About Section Heading',
            'page_subheading_description' => 'About Section Description',
            'page_image' => 'Content Section Image URL',
            'page_image_name' => 'Content Image Name (for filename)',
            'page_image_alt' => 'Content Image Alt Text (SEO)',
            'page_image_desc' => 'Content Image Description (SEO)',
            'page_h2' => 'Content Section H2',
            'page_h2_paragraph' => 'Content Section H2 Paragraph',
            'page_h3' => 'Content Section H3',
            'page_h3_paragraph' => 'Content Section H3 Paragraph',
            'page_h4' => 'Content Section H4',
            'page_h4_paragraph_1' => 'Content Section H4 Paragraph 1',
            'page_h4_paragraph_2' => 'Content Section H4 Paragraph 2',
            'page_question_1' => 'FAQ Question 1',
            'page_answer_1' => 'FAQ Answer 1',
            'page_question_2' => 'FAQ Question 2',
            'page_answer_2' => 'FAQ Answer 2'
        );

        echo '<div id="esn-content-fields" style="display: none;">';
        echo '<table class="form-table">';
        
        foreach ($fields as $field_key => $field_label) {
            $field_value = get_post_meta($post->ID, '_' . $field_key, true);
            
            if (strpos($field_key, 'paragraph') !== false || strpos($field_key, 'description') !== false) {
                // Textarea for longer content
                echo '<tr>';
                echo '<th scope="row"><label for="' . $field_key . '">' . $field_label . '</label></th>';
                echo '<td><textarea name="' . $field_key . '" id="' . $field_key . '" class="widefat" rows="4">' . esc_textarea($field_value) . '</textarea></td>';
                echo '</tr>';
            } else {
                // Input field for shorter content
                echo '<tr>';
                echo '<th scope="row"><label for="' . $field_key . '">' . $field_label . '</label></th>';
                echo '<td><input type="text" name="' . $field_key . '" id="' . $field_key . '" value="' . esc_attr($field_value) . '" class="widefat" /></td>';
                echo '</tr>';
            }
        }
        
        echo '</table>';
        echo '</div>';
        
        // JavaScript to show/hide fields based on template selection
        echo '<script>
        jQuery(document).ready(function($) {
            function toggleFields() {
                var selectedTemplate = $("#esn_page_template").val();
                if (selectedTemplate !== "" && selectedTemplate !== "default") {
                    $("#esn-content-fields").show();
                } else {
                    $("#esn-content-fields").hide();
                }
            }
            
            $("#esn_page_template").change(toggleFields);
            toggleFields(); // Run on page load
        });
        </script>';
    }

    public function save_meta_boxes($post_id) {
        // Verify nonce
        if (!isset($_POST['esn_meta_box_nonce']) || !wp_verify_nonce($_POST['esn_meta_box_nonce'], 'esn_meta_box_nonce')) {
            return;
        }

        // Check if user has permission to edit
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }

        // Don't save during autosave
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return;
        }

        // Save template selection
        if (isset($_POST['esn_page_template'])) {
            update_post_meta($post_id, '_esn_page_template', sanitize_text_field($_POST['esn_page_template']));
        }
        
        // Save template display name
        if (isset($_POST['esn_template_display_name'])) {
            update_post_meta($post_id, '_esn_template_display_name', sanitize_text_field($_POST['esn_template_display_name']));
        }

        // Save content fields
        $fields = array(
            'page_title', 'meta_description', 'page_h1', 'under_heading', 
            'hero_image', 'hero_image_name', 'hero_image_alt', 'hero_image_desc',
            'page_area', 'page_borough', 'page_subheading', 'page_subheading_description', 
            'page_image', 'page_image_name', 'page_image_alt', 'page_image_desc',
            'page_h2', 'page_h2_paragraph', 'page_h3', 'page_h3_paragraph', 
            'page_h4', 'page_h4_paragraph_1', 'page_h4_paragraph_2',
            'page_question_1', 'page_answer_1', 'page_question_2', 'page_answer_2'
        );
        
        // Process image URLs for SEO optimization
        $image_fields = array('hero_image' => 'hero', 'page_image' => 'page');
        foreach ($image_fields as $image_field => $image_type) {
            if (isset($_POST[$image_field]) && !empty($_POST[$image_field])) {
                $image_url = sanitize_url($_POST[$image_field]);
                
                // Check if it's a URL (not already a local image)
                if (filter_var($image_url, FILTER_VALIDATE_URL) && strpos($image_url, site_url()) === false) {
                    // Process the image from URL
                    $processed_url = esn_process_image_from_url($image_url, $post_id, $image_type);
                    if ($processed_url) {
                        // Update with the new local URL
                        update_post_meta($post_id, '_' . $image_field, $processed_url);
                        continue; // Skip the normal saving for this field
                    }
                }
            }
        }
        foreach ($fields as $field) {
            if (isset($_POST[$field])) {
                if (strpos($field, 'paragraph') !== false || strpos($field, 'description') !== false) {
                    update_post_meta($post_id, '_' . $field, wp_kses_post($_POST[$field]));
                } else {
                    update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
                }
            }
        }
    }
}