<?php
/**
 * Admin Dashboard for ESN Page Templates
 */

class ESN_Admin_Dashboard {

    public function __construct() {
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_init', array($this, 'register_settings'));
    }

    public function add_admin_menu() {
        add_menu_page(
            'ESN Templates',
            'ESN Templates',
            'manage_options',
            'esn-templates',
            array($this, 'admin_page'),
            'dashicons-layout',
            30
        );

        add_submenu_page(
            'esn-templates',
            'Template Overview',
            'Overview',
            'manage_options',
            'esn-templates',
            array($this, 'admin_page')
        );

        add_submenu_page(
            'esn-templates',
            'Settings',
            'Settings',
            'manage_options',
            'esn-templates-settings',
            array($this, 'settings_page')
        );
    }

    public function register_settings() {
        register_setting('esn_templates_settings', 'esn_default_template_name');
        register_setting('esn_templates_settings', 'esn_auto_image_optimization');
        register_setting('esn_templates_settings', 'esn_default_alt_text_format');
    }

    public function admin_page() {
        ?>
        <div class="wrap">
            <h1>ESN Page Templates - Overview</h1>
            
            <div class="esn-admin-grid">
                <div class="esn-admin-card">
                    <h2>Template Statistics</h2>
                    <?php $this->display_template_stats(); ?>
                </div>

                <div class="esn-admin-card">
                    <h2>Recent Template Pages</h2>
                    <?php $this->display_recent_pages(); ?>
                </div>

                <div class="esn-admin-card">
                    <h2>Quick Actions</h2>
                    <?php $this->display_quick_actions(); ?>
                </div>

                <div class="esn-admin-card">
                    <h2>All Template Pages</h2>
                    <?php $this->display_all_template_pages(); ?>
                </div>
            </div>
        </div>

        <style>
        .esn-admin-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 20px;
        }
        .esn-admin-card {
            background: #fff;
            border: 1px solid #ccd0d4;
            padding: 20px;
            border-radius: 4px;
        }
        .esn-admin-card h2 {
            margin-top: 0;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .esn-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
        }
        .esn-stat-item {
            text-align: center;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 4px;
        }
        .esn-stat-number {
            font-size: 24px;
            font-weight: bold;
            color: #0073aa;
        }
        .esn-stat-label {
            font-size: 12px;
            color: #666;
            text-transform: uppercase;
        }
        .esn-page-list {
            max-height: 300px;
            overflow-y: auto;
        }
        .esn-page-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        .esn-page-item:last-child {
            border-bottom: none;
        }
        .esn-quick-action {
            display: block;
            margin: 10px 0;
            text-decoration: none;
        }
        </style>
        <?php
    }

    public function settings_page() {
        ?>
        <div class="wrap">
            <h1>ESN Templates - Settings</h1>
            
            <form method="post" action="options.php">
                <?php
                settings_fields('esn_templates_settings');
                do_settings_sections('esn_templates_settings');
                ?>
                
                <table class="form-table">
                    <tr>
                        <th scope="row">Default Template Name</th>
                        <td>
                            <input type="text" name="esn_default_template_name" 
                                   value="<?php echo esc_attr(get_option('esn_default_template_name', 'Service Cleaning Template')); ?>" 
                                   class="regular-text" />
                            <p class="description">Default name for new templates</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Auto Image Optimization</th>
                        <td>
                            <label>
                                <input type="checkbox" name="esn_auto_image_optimization" 
                                       value="1" <?php checked(1, get_option('esn_auto_image_optimization', 1)); ?> />
                                Automatically optimize images from URLs
                            </label>
                            <p class="description">Download and rename images for SEO when URLs are provided</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Default Alt Text Format</th>
                        <td>
                            <input type="text" name="esn_default_alt_text_format" 
                                   value="<?php echo esc_attr(get_option('esn_default_alt_text_format', '{template} in {area} {borough}')); ?>" 
                                   class="regular-text" />
                            <p class="description">Format for auto-generated alt text. Use: {template}, {area}, {borough}, {title}</p>
                        </td>
                    </tr>
                </table>
                
                <?php submit_button(); ?>
            </form>

            <div class="esn-admin-card" style="margin-top: 30px;">
                <h2>Plugin Information</h2>
                <p><strong>Version:</strong> <?php echo ESN_TEMPLATES_VERSION; ?></p>
                <p><strong>Active Templates:</strong> <?php echo $this->count_active_templates(); ?></p>
                <p><strong>Total Template Pages:</strong> <?php echo $this->count_template_pages(); ?></p>
                
                <h3>Available Template Fields</h3>
                <ul>
                    <li>Page Title & Meta Description</li>
                    <li>Hero Section (H1, Image, Area, Borough)</li>
                    <li>Content Sections (H2, H3, H4 with paragraphs)</li>
                    <li>About Section (Heading & Description)</li>
                    <li>FAQ Fields (Questions & Answers)</li>
                    <li>SEO Image Optimization</li>
                </ul>
            </div>
        </div>
        <?php
    }

    private function display_template_stats() {
        $total_pages = $this->count_template_pages();
        $active_templates = $this->count_active_templates();
        $optimized_images = $this->count_optimized_images();
        
        echo '<div class="esn-stats-grid">';
        echo '<div class="esn-stat-item">';
        echo '<div class="esn-stat-number">' . $total_pages . '</div>';
        echo '<div class="esn-stat-label">Template Pages</div>';
        echo '</div>';
        
        echo '<div class="esn-stat-item">';
        echo '<div class="esn-stat-number">' . $active_templates . '</div>';
        echo '<div class="esn-stat-label">Active Templates</div>';
        echo '</div>';
        
        echo '<div class="esn-stat-item">';
        echo '<div class="esn-stat-number">' . $optimized_images . '</div>';
        echo '<div class="esn-stat-label">Optimized Images</div>';
        echo '</div>';
        echo '</div>';
    }

    private function display_recent_pages() {
        $pages = get_posts(array(
            'post_type' => 'page',
            'meta_key' => '_esn_page_template',
            'meta_compare' => 'EXISTS',
            'posts_per_page' => 5,
            'orderby' => 'modified',
            'order' => 'DESC'
        ));

        if (empty($pages)) {
            echo '<p>No template pages found. <a href="' . admin_url('post-new.php?post_type=page') . '">Create your first template page</a>.</p>';
            return;
        }

        echo '<div class="esn-page-list">';
        foreach ($pages as $page) {
            $template = get_post_meta($page->ID, '_esn_page_template', true);
            $template_name = get_post_meta($page->ID, '_esn_template_display_name', true) ?: 'Service Template';
            
            echo '<div class="esn-page-item">';
            echo '<div>';
            echo '<strong><a href="' . admin_url('post.php?post=' . $page->ID . '&action=edit') . '">' . esc_html($page->post_title) . '</a></strong><br>';
            echo '<small>' . esc_html($template_name) . ' • Modified: ' . get_the_modified_date('M j, Y', $page) . '</small>';
            echo '</div>';
            echo '<div>';
            echo '<a href="' . get_permalink($page->ID) . '" target="_blank" class="button button-small">View</a>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }

    private function display_quick_actions() {
        echo '<a href="' . admin_url('post-new.php?post_type=page') . '" class="esn-quick-action button button-primary">Create New Template Page</a>';
        echo '<a href="' . admin_url('admin.php?page=esn-templates-settings') . '" class="esn-quick-action button">Plugin Settings</a>';
        echo '<a href="' . admin_url('edit.php?post_type=page&meta_key=_esn_page_template&meta_compare=EXISTS') . '" class="esn-quick-action button">View All Template Pages</a>';
    }

    private function display_all_template_pages() {
        $pages = get_posts(array(
            'post_type' => 'page',
            'meta_key' => '_esn_page_template',
            'meta_compare' => 'EXISTS',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC'
        ));

        if (empty($pages)) {
            echo '<p>No template pages found.</p>';
            return;
        }

        echo '<div class="esn-page-list">';
        foreach ($pages as $page) {
            $template = get_post_meta($page->ID, '_esn_page_template', true);
            $template_name = get_post_meta($page->ID, '_esn_template_display_name', true) ?: 'Service Template';
            $page_area = get_post_meta($page->ID, '_page_area', true);
            $page_borough = get_post_meta($page->ID, '_page_borough', true);
            
            echo '<div class="esn-page-item">';
            echo '<div>';
            echo '<strong><a href="' . admin_url('post.php?post=' . $page->ID . '&action=edit') . '">' . esc_html($page->post_title) . '</a></strong><br>';
            echo '<small>' . esc_html($template_name);
            if ($page_area || $page_borough) {
                echo ' • ' . esc_html($page_area . ' ' . $page_borough);
            }
            echo '</small>';
            echo '</div>';
            echo '<div>';
            echo '<a href="' . get_permalink($page->ID) . '" target="_blank" class="button button-small">View</a> ';
            echo '<a href="' . admin_url('post.php?post=' . $page->ID . '&action=edit') . '" class="button button-small">Edit</a>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    }

    private function count_template_pages() {
        return count(get_posts(array(
            'post_type' => 'page',
            'meta_key' => '_esn_page_template',
            'meta_compare' => 'EXISTS',
            'posts_per_page' => -1
        )));
    }

    private function count_active_templates() {
        $pages = get_posts(array(
            'post_type' => 'page',
            'meta_key' => '_esn_page_template',
            'meta_compare' => 'EXISTS',
            'posts_per_page' => -1
        ));
        
        $templates = array();
        foreach ($pages as $page) {
            $template = get_post_meta($page->ID, '_esn_page_template', true);
            if (!empty($template)) {
                $templates[$template] = true;
            }
        }
        
        return count($templates);
    }

    private function count_optimized_images() {
        // This is a simplified count - in a real implementation, you'd track optimized images
        return get_posts(array(
            'post_type' => 'attachment',
            'post_mime_type' => 'image',
            'meta_key' => '_wp_attachment_image_alt',
            'meta_compare' => 'EXISTS',
            'posts_per_page' => -1
        )) ? count(get_posts(array(
            'post_type' => 'attachment',
            'post_mime_type' => 'image',
            'posts_per_page' => -1
        ))) : 0;
    }
}