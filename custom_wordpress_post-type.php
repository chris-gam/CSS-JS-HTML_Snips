function custom_post_type_func() {
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );
    $labels = array(
        'name' => _x('CustomTypes', 'plural'),
        'singular_name' => _x('CustomType', 'singular'),
        'menu_name' => _x('CustomTypes', 'admin menu'),
        'name_admin_bar' => _x('CustomTypes', 'admin bar'),
        'add_new' => _x('New CustomType', 'new customtype'),
        'add_new_item' => __('Add CustomType'),
        'new_item' => __('New CustomTypes'),
        'edit_item' => __('Edit CustomTypes'),
        'view_item' => __('View CustomTypes'),
        'all_items' => __('All CustomTypes'),
        'search_items' => __('Search CustomTypes'),
        'not_found' => __('No CustomTypes found'),
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'customtypes'),
        'has_archive' => true,
        'hierarchical' => false,
    );
    register_post_type('customtypes', $args);
}
add_action('init', 'custom_post_type_func');
