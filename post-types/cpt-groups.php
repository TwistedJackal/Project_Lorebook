<?php

// ========= Groups =========
add_action( 'init', 'group_custom_post_type' );
add_filter( 'post_updated_messages', 'groups_messages' );

function group_custom_post_type() {
    $labels = array(
        'name'               => 'Groups',
        'singular_name'      => 'Group',
        'menu_name'          => 'Groups',
        'name_admin_bar'     => 'Groups',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Group',
        'new_item'           => 'New Group',
        'edit_item'          => 'Edit Group',
        'view_item'          => 'View Group',
        'all_items'          => 'All Groups',
        'search_items'       => 'Search Groups',
        'parent_item_colon'  => 'Parent Groups:',
        'not_found'          => 'No groups found.',
        'not_found_in_trash' => 'No groups found in Trash.'
    );

    $args = array(
        'public'      => true,
        'labels'      => $labels,
        'rewrite'       => array( 'slug' => 'groups' ),
        'has_archive'   => true,
        'show_in_menu'  => false,
        'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' )
    );
        register_post_type( 'group', $args );
}

function groups_messages( $messages ) {
    $post = get_post();

    $messages['group'] = array(
        0  => '',
        1  => 'Group updated.',
        2  => 'Custom field updated.',
        3  => 'Custom field deleted.',
        4  => 'Group updated.',
        5  => isset( $_GET['revision'] ) ? sprintf( 'Group restored to revision from %s',wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => 'Group published.',
        7  => 'Group saved.',
        8  => 'Group submitted.',
        9  => sprintf(
            'Group scheduled for: <strong>%1$s</strong>.',
            date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) )
        ),
        10 => 'Group draft updated.'
    );

    return $messages;
}

// Fix Active Submenu When Creating/Editing
add_filter('parent_file', 'fix_admin_parent_group');
function fix_admin_parent_group($parent_file){
    global $submenu_file, $current_screen;

    if($current_screen->post_type == 'group') {
        $submenu_file = 'edit.php?post_type=group';
        $parent_file = 'lorebook/admin-page.php';
    }
    return $parent_file;
}
// =============================
