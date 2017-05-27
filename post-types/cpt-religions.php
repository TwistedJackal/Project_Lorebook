<?php

// ========= Religions =========
add_action( 'init', 'religion_custom_post_type' );
add_filter( 'post_updated_messages', 'religions_messages' );

function religion_custom_post_type() {
    $labels = array(
        'name'               => 'Religions',
        'singular_name'      => 'Religion',
        'menu_name'          => 'Religions',
        'name_admin_bar'     => 'Religions',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Religion',
        'new_item'           => 'New Religion',
        'edit_item'          => 'Edit Religion',
        'view_item'          => 'View Religion',
        'all_items'          => 'All Religions',
        'search_items'       => 'Search Religions',
        'parent_item_colon'  => 'Parent Religions:',
        'not_found'          => 'No religions found.',
        'not_found_in_trash' => 'No religions found in Trash.'
    );

    $args = array(
        'public'      => true,
        'labels'      => $labels,
        'rewrite'       => array( 'slug' => 'religions' ),
        'has_archive'   => true,
        'show_in_menu'  => false,
        'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' )
    );
        register_post_type( 'religion', $args );
}

function religions_messages( $messages ) {
    $post = get_post();

    $messages['religion'] = array(
        0  => '',
        1  => 'Religion updated.',
        2  => 'Custom field updated.',
        3  => 'Custom field deleted.',
        4  => 'Religion updated.',
        5  => isset( $_GET['revision'] ) ? sprintf( 'Religion restored to revision from %s',wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => 'Religion published.',
        7  => 'Religion saved.',
        8  => 'Religion submitted.',
        9  => sprintf(
            'Religion scheduled for: <strong>%1$s</strong>.',
            date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) )
        ),
        10 => 'Religion draft updated.'
    );

    return $messages;
}

// Fix Active Submenu When Creating/Editing
add_filter('parent_file', 'fix_admin_parent_religion');
function fix_admin_parent_religion($parent_file){
    global $submenu_file, $current_screen;

    if($current_screen->post_type == 'religion') {
        $submenu_file = 'edit.php?post_type=religion';
        $parent_file = 'lorebook/admin-page.php';
    }
    return $parent_file;
}
// =============================
