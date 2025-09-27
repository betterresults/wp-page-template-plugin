<?php
/**
 * Admin Dashboard for ESN Page Templates
 */

class ESN_Admin_Dashboard {

    public function __construct() {
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_init', array($this, 'register_settings'));
        add_action('wp_ajax_esn_bulk_assign_template', array($this, 'handle_bulk_assign'));
        add_action('wp_ajax_esn_filter_pages', array($this, 'handle_filter_pages'));
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
    }

    public function register_settings() {
        register_setting('esn_templates_settings', 'esn_default_template_name');
    }

    public function admin_page() {
        ?>
        <div class="wrap esn-admin-wrap">
            <h1>ESN Page Templates</h1>
            
            <div class="esn-admin-container">
                <!-- Templates Section -->
                <div class="esn-section esn-templates-section">
                    <h2>Available Templates</h2>
                    <div class="esn-templates-grid">
                        <?php $this->render_templates(); ?>
                    </div>
                </div>

                <!-- Pages Management Section -->
                <div class="esn-section esn-pages-section">
                    <div class="esn-pages-header">
                        <h2>Pages Management</h2>
                        <div class="esn-filters">
                            <input type="text" id="esn-keyword-filter" placeholder="Search pages..." />
                            <select id="esn-category-filter">
                                <option value="">All Categories</option>
                                <?php $this->render_category_options(); ?>
                            </select>
                            <select id="esn-template-filter">
                                <option value="">All Templates</option>
                                <option value="service-cleaning-template.php">Service Cleaning Template</option>
                                <option value="no-template">No Template</option>
                            </select>
                            <button id="esn-filter-btn" class="button">Filter</button>
                        </div>
                    </div>

                    <div class="esn-bulk-actions">
                        <select id="esn-bulk-template">
                            <option value="">Select Template to Assign</option>
                            <option value="service-cleaning-template.php">Service Cleaning Template</option>
                            <option value="remove-template">Remove Template</option>
                        </select>
                        <button id="esn-bulk-assign" class="button button-primary" disabled>Apply to Selected</button>
                        <span class="esn-selected-count">0 pages selected</span>
                    </div>

                    <div id="esn-pages-list">
                        <?php $this->render_pages_list(); ?>
                    </div>
                </div>
            </div>
        </div>

        <style>
        .esn-admin-wrap {
            max-width: 1200px;
        }
        
        .esn-admin-container {
            display: flex;
            flex-direction: column;
            gap: 30px;
            margin-top: 20px;
        }
        
        .esn-section {
            background: #fff;
            border: 1px solid #ccd0d4;
            border-radius: 4px;
            padding: 20px;
        }
        
        .esn-section h2 {
            margin-top: 0;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        
        /* Templates Grid */
        .esn-templates-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .esn-template-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background: #f9f9f9;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        .esn-template-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .esn-template-preview {
            height: 200px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 16px;
            position: relative;
        }
        
        .esn-template-info {
            padding: 15px;
        }
        
        .esn-template-info h3 {
            margin: 0 0 10px 0;
            color: #333;
        }
        
        .esn-template-info p {
            margin: 0;
            color: #666;
            font-size: 14px;
        }
        
        .esn-template-stats {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 12px;
            color: #999;
        }
        
        /* Pages Section */
        .esn-pages-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .esn-filters {
            display: flex;
            gap: 10px;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .esn-filters input, .esn-filters select {
            min-width: 150px;
        }
        
        .esn-bulk-actions {
            background: #f1f1f1;
            padding: 15px;
            border-radius: 4px;
            margin: 20px 0;
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .esn-selected-count {
            color: #666;
            font-weight: 500;
        }
        
        /* Pages List */
        .esn-pages-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        .esn-pages-table th,
        .esn-pages-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        
        .esn-pages-table th {
            background: #f8f9fa;
            font-weight: 600;
        }
        
        .esn-pages-table tr:hover {
            background: #f8f9fa;
        }
        
        .esn-page-title {
            font-weight: 600;
        }
        
        .esn-page-title a {
            text-decoration: none;
            color: #0073aa;
        }
        
        .esn-page-title a:hover {
            color: #005177;
        }
        
        .esn-template-badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 3px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .esn-template-badge.has-template {
            background: #d4edda;
            color: #155724;
        }
        
        .esn-template-badge.no-template {
            background: #f8d7da;
            color: #721c24;
        }
        
        .esn-page-actions {
            display: flex;
            gap: 5px;
        }
        
        .esn-page-actions .button {
            padding: 4px 8px;
            font-size: 11px;
        }
        
        .esn-loading {
            text-align: center;
            padding: 40px;
            color: #666;
        }
        
        .esn-no-results {
            text-align: center;
            padding: 40px;
            color: #999;
        }
        
        @media (max-width: 768px) {
            .esn-pages-header {
                flex-direction: column;
                align-items: stretch;
            }
            
            .esn-filters {
                justify-content: stretch;
            }
            
            .esn-filters input, .esn-filters select {
                flex: 1;
                min-width: auto;
            }
            
            .esn-bulk-actions {
                flex-direction: column;
                align-items: stretch;
            }
        }
        </style>

        <script>
        jQuery(document).ready(function($) {
            let selectedPages = new Set();
            
            // Handle page selection
            $(document).on('change', '.esn-page-checkbox', function() {
                const pageId = $(this).val();
                if ($(this).is(':checked')) {
                    selectedPages.add(pageId);
                } else {
                    selectedPages.delete(pageId);
                }
                updateBulkActions();
            });
            
            // Handle select all
            $(document).on('change', '#esn-select-all', function() {
                const isChecked = $(this).is(':checked');
                $('.esn-page-checkbox').prop('checked', isChecked);
                
                selectedPages.clear();
                if (isChecked) {
                    $('.esn-page-checkbox').each(function() {
                        selectedPages.add($(this).val());
                    });
                }
                updateBulkActions();
            });
            
            // Update bulk actions state
            function updateBulkActions() {
                const count = selectedPages.size;
                $('.esn-selected-count').text(count + ' pages selected');
                $('#esn-bulk-assign').prop('disabled', count === 0 || $('#esn-bulk-template').val() === '');
            }
            
            // Handle bulk template assignment
            $('#esn-bulk-assign').click(function() {
                const template = $('#esn-bulk-template').val();
                const pageIds = Array.from(selectedPages);
                
                if (!template || pageIds.length === 0) return;
                
                const button = $(this);
                button.prop('disabled', true).text('Processing...');
                
                $.post(ajaxurl, {
                    action: 'esn_bulk_assign_template',
                    template: template,
                    page_ids: pageIds,
                    nonce: '<?php echo wp_create_nonce('esn_bulk_assign'); ?>'
                }, function(response) {
                    if (response.success) {
                        alert('Templates assigned successfully!');
                        filterPages(); // Refresh the list
                        selectedPages.clear();
                        $('.esn-page-checkbox, #esn-select-all').prop('checked', false);
                        updateBulkActions();
                    } else {
                        alert('Error: ' + response.data);
                    }
                }).always(function() {
                    button.prop('disabled', false).text('Apply to Selected');
                });
            });
            
            // Handle template selection change
            $('#esn-bulk-template').change(updateBulkActions);
            
            // Handle filtering
            $('#esn-filter-btn').click(filterPages);
            $('#esn-keyword-filter').keypress(function(e) {
                if (e.which === 13) filterPages();
            });
            
            function filterPages() {
                const keyword = $('#esn-keyword-filter').val();
                const category = $('#esn-category-filter').val();
                const template = $('#esn-template-filter').val();
                
                $('#esn-pages-list').html('<div class="esn-loading">Loading...</div>');
                
                $.post(ajaxurl, {
                    action: 'esn_filter_pages',
                    keyword: keyword,
                    category: category,
                    template: template,
                    nonce: '<?php echo wp_create_nonce('esn_filter_pages'); ?>'
                }, function(response) {
                    if (response.success) {
                        $('#esn-pages-list').html(response.data);
                        selectedPages.clear();
                        updateBulkActions();
                    } else {
                        $('#esn-pages-list').html('<div class="esn-no-results">Error loading pages</div>');
                    }
                });
            }
        });
        </script>
        <?php
    }

    private function render_templates() {
        $templates = array(
            'service-cleaning-template.php' => array(
                'name' => 'Service Cleaning Template',
                'description' => 'Perfect for cleaning service pages with hero section, about, content, FAQs, and service areas.',
                'pages_count' => $this->count_pages_using_template('service-cleaning-template.php')
            )
        );
        
        foreach ($templates as $template_key => $template_data) {
            ?>
            <div class="esn-template-card">
                <div class="esn-template-preview">
                    <div>
                        <strong><?php echo esc_html($template_data['name']); ?></strong><br>
                        <small>Template Preview</small>
                    </div>
                </div>
                <div class="esn-template-info">
                    <h3><?php echo esc_html($template_data['name']); ?></h3>
                    <p><?php echo esc_html($template_data['description']); ?></p>
                    <div class="esn-template-stats">
                        <span><?php echo $template_data['pages_count']; ?> pages using this template</span>
                        <span>Active</span>
                    </div>
                </div>
            </div>
            <?php
        }
    }

    private function render_category_options() {
        $categories = get_categories(array('hide_empty' => false));
        foreach ($categories as $category) {
            echo '<option value="' . esc_attr($category->term_id) . '">' . esc_html($category->name) . '</option>';
        }
    }

    private function render_pages_list() {
        $pages = get_posts(array(
            'post_type' => 'page',
            'posts_per_page' => -1,
            'post_status' => 'publish,draft',
            'orderby' => 'title',
            'order' => 'ASC'
        ));
        
        if (empty($pages)) {
            echo '<div class="esn-no-results">No pages found.</div>';
            return;
        }
        
        echo '<table class="esn-pages-table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th><input type="checkbox" id="esn-select-all" /></th>';
        echo '<th>Page Title</th>';
        echo '<th>Status</th>';
        echo '<th>Template</th>';
        echo '<th>Category</th>';
        echo '<th>Actions</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        
        foreach ($pages as $page) {
            $template = get_page_template_slug($page->ID);
            $has_template = $template === 'service-cleaning-template.php';
            $categories = wp_get_post_categories($page->ID, array('fields' => 'names'));
            $category_names = implode(', ', $categories);
            
            echo '<tr>';
            echo '<td><input type="checkbox" class="esn-page-checkbox" value="' . $page->ID . '" /></td>';
            echo '<td>';
            echo '<div class="esn-page-title">';
            echo '<a href="' . admin_url('post.php?post=' . $page->ID . '&action=edit') . '">' . esc_html($page->post_title) . '</a>';
            echo '</div>';
            echo '</td>';
            echo '<td>' . ucfirst($page->post_status) . '</td>';
            echo '<td>';
            if ($has_template) {
                echo '<span class="esn-template-badge has-template">Service Template</span>';
            } else {
                echo '<span class="esn-template-badge no-template">No Template</span>';
            }
            echo '</td>';
            echo '<td>' . esc_html($category_names ?: 'Uncategorized') . '</td>';
            echo '<td>';
            echo '<div class="esn-page-actions">';
            echo '<a href="' . admin_url('post.php?post=' . $page->ID . '&action=edit') . '" class="button button-small">Edit</a>';
            echo '<a href="' . get_permalink($page->ID) . '" target="_blank" class="button button-small">View</a>';
            echo '</div>';
            echo '</td>';
            echo '</tr>';
        }
        
        echo '</tbody>';
        echo '</table>';
    }

    public function handle_bulk_assign() {
        check_ajax_referer('esn_bulk_assign', 'nonce');
        
        if (!current_user_can('manage_options')) {
            wp_die('Insufficient permissions');
        }
        
        $template = sanitize_text_field($_POST['template']);
        $page_ids = array_map('intval', $_POST['page_ids']);
        
        $success_count = 0;
        
        foreach ($page_ids as $page_id) {
            if ($template === 'remove-template') {
                update_post_meta($page_id, '_wp_page_template', 'default');
                delete_post_meta($page_id, '_esn_page_template');
            } else {
                update_post_meta($page_id, '_wp_page_template', $template);
                update_post_meta($page_id, '_esn_page_template', $template);
            }
            $success_count++;
        }
        
        wp_send_json_success($success_count . ' pages updated successfully');
    }

    public function handle_filter_pages() {
        check_ajax_referer('esn_filter_pages', 'nonce');
        
        $keyword = sanitize_text_field($_POST['keyword']);
        $category = intval($_POST['category']);
        $template = sanitize_text_field($_POST['template']);
        
        $args = array(
            'post_type' => 'page',
            'posts_per_page' => -1,
            'post_status' => 'publish,draft',
            'orderby' => 'title',
            'order' => 'ASC'
        );
        
        if (!empty($keyword)) {
            $args['s'] = $keyword;
        }
        
        if (!empty($category)) {
            $args['category'] = $category;
        }
        
        $pages = get_posts($args);
        
        // Filter by template
        if (!empty($template)) {
            $pages = array_filter($pages, function($page) use ($template) {
                $page_template = get_page_template_slug($page->ID);
                if ($template === 'no-template') {
                    return $page_template !== 'service-cleaning-template.php';
                }
                return $page_template === $template;
            });
        }
        
        ob_start();
        
        if (empty($pages)) {
            echo '<div class="esn-no-results">No pages found matching your criteria.</div>';
        } else {
            echo '<table class="esn-pages-table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th><input type="checkbox" id="esn-select-all" /></th>';
            echo '<th>Page Title</th>';
            echo '<th>Status</th>';
            echo '<th>Template</th>';
            echo '<th>Category</th>';
            echo '<th>Actions</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            
            foreach ($pages as $page) {
                $template_slug = get_page_template_slug($page->ID);
                $has_template = $template_slug === 'service-cleaning-template.php';
                $categories = wp_get_post_categories($page->ID, array('fields' => 'names'));
                $category_names = implode(', ', $categories);
                
                echo '<tr>';
                echo '<td><input type="checkbox" class="esn-page-checkbox" value="' . $page->ID . '" /></td>';
                echo '<td>';
                echo '<div class="esn-page-title">';
                echo '<a href="' . admin_url('post.php?post=' . $page->ID . '&action=edit') . '">' . esc_html($page->post_title) . '</a>';
                echo '</div>';
                echo '</td>';
                echo '<td>' . ucfirst($page->post_status) . '</td>';
                echo '<td>';
                if ($has_template) {
                    echo '<span class="esn-template-badge has-template">Service Template</span>';
                } else {
                    echo '<span class="esn-template-badge no-template">No Template</span>';
                }
                echo '</td>';
                echo '<td>' . esc_html($category_names ?: 'Uncategorized') . '</td>';
                echo '<td>';
                echo '<div class="esn-page-actions">';
                echo '<a href="' . admin_url('post.php?post=' . $page->ID . '&action=edit') . '" class="button button-small">Edit</a>';
                echo '<a href="' . get_permalink($page->ID) . '" target="_blank" class="button button-small">View</a>';
                echo '</div>';
                echo '</td>';
                echo '</tr>';
            }
            
            echo '</tbody>';
            echo '</table>';
        }
        
        $output = ob_get_clean();
        wp_send_json_success($output);
    }

    private function count_pages_using_template($template) {
        return count(get_posts(array(
            'post_type' => 'page',
            'meta_key' => '_wp_page_template',
            'meta_value' => $template,
            'posts_per_page' => -1
        )));
    }
}