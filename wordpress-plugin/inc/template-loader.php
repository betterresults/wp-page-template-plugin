<?php
/**
 * Template Loader for ESN Page Templates
 */

class ESN_Template_Loader {

    public function __construct() {
        add_filter('page_template', array($this, 'load_custom_template'));
        add_filter('template_include', array($this, 'template_include'));
    }

    public function load_custom_template($template) {
        global $post;
        
        if (is_page()) {
            $custom_template = get_post_meta($post->ID, '_esn_page_template', true);
            
            if ($custom_template && $custom_template !== '') {
                $template_path = ESN_TEMPLATES_PLUGIN_PATH . 'templates/' . $custom_template . '.php';
                
                if (file_exists($template_path)) {
                    return $template_path;
                }
            }
        }
        
        return $template;
    }

    public function template_include($template) {
        global $post;
        
        if (is_page()) {
            $custom_template = get_post_meta($post->ID, '_esn_page_template', true);
            
            if ($custom_template && $custom_template !== '') {
                $template_path = ESN_TEMPLATES_PLUGIN_PATH . 'templates/' . $custom_template . '.php';
                
                if (file_exists($template_path)) {
                    return $template_path;
                }
            }
        }
        
        return $template;
    }
}