<?php

// ========= itemS =========
add_action( 'init', 'item_custom_post_type' );
add_filter( 'post_updated_messages', 'items_messages' );

function item_custom_post_type() {
    $labels = array(
        'name'               => 'Items',
        'singular_name'      => 'Item',
        'menu_name'          => 'Items',
        'name_admin_bar'     => 'Items',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Item',
        'new_item'           => 'New Item',
        'edit_item'          => 'Edit Item',
        'view_item'          => 'View Item',
        'all_items'          => 'All Items',
        'search_items'       => 'Search Items',
        'parent_item_colon'  => 'Parent Items:',
        'not_found'          => 'No items found.',
        'not_found_in_trash' => 'No items found in Trash.'
    );

    $args = array(
        'public'      => true,
        'labels'      => $labels,
        'rewrite'       => array( 'slug' => 'item' ),
        'has_archive'   => true,
        'show_in_menu'  => false,
        'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' )
    );
        register_post_type( 'item', $args );
}

function items_messages( $messages ) {
    $post = get_post();

    $messages['item'] = array(
        0  => '',
        1  => 'Item updated.',
        2  => 'Custom field updated.',
        3  => 'Custom field deleted.',
        4  => 'Item updated.',
        5  => isset( $_GET['revision'] ) ? sprintf( 'Item restored to revision from %s',wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => 'Item published.',
        7  => 'Item saved.',
        8  => 'Item submitted.',
        9  => sprintf(
            'Item scheduled for: <strong>%1$s</strong>.',
            date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) )
        ),
        10 => 'Item draft updated.'
    );

    return $messages;
}

// Fix Active Submenu When Creating/Editing
add_filter('parent_file', 'fix_admin_parent_item');
function fix_admin_parent_item($parent_file){
    global $submenu_file, $current_screen;

    if($current_screen->post_type == 'item') {
        $submenu_file = 'edit.php?post_type=item';
        $parent_file = 'lorebook/admin-page.php';
    }
    return $parent_file;
}
// =============================
