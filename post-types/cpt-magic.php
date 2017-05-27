<?php

// ========= Magic =========
add_action( 'init', 'magic_custom_post_type' );
add_filter( 'post_updated_messages', 'magics_messages' );

function magic_custom_post_type() {
    $labels = array(
        'name'               => 'Magics',
        'singular_name'      => 'Magic',
        'menu_name'          => 'Magics',
        'name_admin_bar'     => 'Magics',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Magic',
        'new_item'           => 'New Magic',
        'edit_item'          => 'Edit Magic',
        'view_item'          => 'View Magic',
        'all_items'          => 'All Magics',
        'search_items'       => 'Search Magics',
        'parent_item_colon'  => 'Parent Magics:',
        'not_found'          => 'No magics found.',
        'not_found_in_trash' => 'No magics found in Trash.'
    );

    $args = array(
        'public'      => true,
        'labels'      => $labels,
        'rewrite'       => array( 'slug' => 'magics' ),
        'has_archive'   => true,
        'show_in_menu'  => false,
        'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' )
    );
        register_post_type( 'magic', $args );
}

function magics_messages( $messages ) {
    $post = get_post();

    $messages['magic'] = array(
        0  => '',
        1  => 'Magic updated.',
        2  => 'Custom field updated.',
        3  => 'Custom field deleted.',
        4  => 'Magic updated.',
        5  => isset( $_GET['revision'] ) ? sprintf( 'Magic restored to revision from %s',wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => 'Magic published.',
        7  => 'Magic saved.',
        8  => 'Magic submitted.',
        9  => sprintf(
            'Magic scheduled for: <strong>%1$s</strong>.',
            date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) )
        ),
        10 => 'Magic draft updated.'
    );

    return $messages;
}

// Fix Active Submenu When Creating/Editing
add_filter('parent_file', 'fix_admin_parent_magic');
function fix_admin_parent_magic($parent_file){
    global $submenu_file, $current_screen;

    if($current_screen->post_type == 'magic') {
        $submenu_file = 'edit.php?post_type=magic';
        $parent_file = 'lorebook/admin-page.php';
    }
    return $parent_file;
}
// =============================
