<?php
//Add custom field value to post/page permalink {Wordpress}

function acf_save_posts( $post_id ) {
    //Exit if no ACF
    if( empty($_POST['acf']) ) {
        return;
    }
    // Add Field Key (you need to enable the view option to see the key in ACF panel)
    $new_slug = $_POST['acf']['field_5d9c8aa5d751d'];
    $the_name = get_the_title(  $post );
    $post = array(
        'ID' => $post_id,
        'post_name' => $the_name."/".$new_slug
    );
    wp_update_post($post);
}

// run before ACF saves the $_POST['acf'] data
add_action('acf/save_post', 'acf_save_posts', 1);

?>
