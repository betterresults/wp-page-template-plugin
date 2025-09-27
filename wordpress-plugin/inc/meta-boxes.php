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
        
        $templates = array(
            '' => 'Default Template',
            'service-cleaning-template' => 'Service Cleaning Template',
            // Add more templates here as needed
        );
        
        echo '<label for="esn_page_template">Select Template:</label>';
        echo '<select name="esn_page_template" id="esn_page_template" class="widefat">';
        foreach ($templates as $value => $label) {
            echo '<option value="' . esc_attr($value) . '" ' . selected($selected_template, $value, false) . '>' . esc_html($label) . '</option>';
        }
        echo '</select>';
    }

    public function content_fields_callback($post) {
        $fields = array(
            'page_title' => 'Page Title (Browser Tab)',
            'meta_description' => 'Meta Description (SEO)',
            'page_h1' => 'Main Heading (H1)',
            'under_heading' => 'Under Heading Text',
            'hero_image' => 'Hero Background Image',
            'page_area' => 'Service Area',
            'page_borough' => 'Borough',
            'page_subheading' => 'About Section Heading',
            'page_subheading_description' => 'About Section Description',
            'page_image' => 'Content Section Image',
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
                if (selectedTemplate === "service-cleaning-template") {
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

        // Save content fields
        $fields = array(
            'page_title', 'meta_description', 'page_h1', 'under_heading', 'hero_image', 'page_area', 'page_borough',
            'page_subheading', 'page_subheading_description', 'page_image', 'page_h2', 'page_h2_paragraph',
            'page_h3', 'page_h3_paragraph', 'page_h4', 'page_h4_paragraph_1', 'page_h4_paragraph_2',
            'page_question_1', 'page_answer_1', 'page_question_2', 'page_answer_2'
        );

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