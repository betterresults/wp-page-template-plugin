<?php
/**
 * Template Loader for ESN Page Templates
 */

class ESN_Template_Loader {

    public function __construct() {
        add_filter('theme_page_templates', array($this, 'add_page_templates'));
        add_filter('page_template', array($this, 'load_custom_template'));
        add_filter('template_include', array($this, 'template_include'));
    }

    public function add_page_templates($templates) {
        $templates['service-cleaning-template.php'] = 'Service Cleaning Template';
        return $templates;
    }

    public function load_custom_template($template) {
        global $post;
        
        if (is_page()) {
            $page_template = get_page_template_slug($post->ID);
            
            if ($page_template === 'service-cleaning-template.php') {
                $template_path = ESN_TEMPLATES_PLUGIN_PATH . 'templates/service-cleaning-template.php';
                
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
            $page_template = get_page_template_slug($post->ID);
            
            if ($page_template === 'service-cleaning-template.php') {
                $template_path = ESN_TEMPLATES_PLUGIN_PATH . 'templates/service-cleaning-template.php';
                
                if (file_exists($template_path)) {
                    return $template_path;
                }
            }
        }
        
        return $template;
    }
}