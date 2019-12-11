function post_type_custom_taxonomy() {

  $labels = array(
    'name' => _x( 'Taxonomy', 'Taxonomy' ),
    'singular_name' => _x( 'Taxonomy', 'Taxonomy' ),
    'search_items' =>  __( 'Search Taxonomies' ),
    'all_items' => __( 'All Taxonomies' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Taxonomy' ),
    'update_item' => __( 'Refresh Taxonomy' ),
    'add_new_item' => __( 'New Taxonomy Item' ),
    'new_item_name' => __( 'New Taxonomy' ),
    'menu_name' => __( 'Taxonomy' ),
  );

  register_taxonomy('taxonomy',array('custom_post_type'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'taxonomy' ),
  ));
}

add_action( 'init', 'post_type_custom_taxonomy', 0 );
