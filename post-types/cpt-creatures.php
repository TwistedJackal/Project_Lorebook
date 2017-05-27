<?php

// ========= Creatures =========
add_action( 'init', 'creature_custom_post_type' );
add_filter( 'post_updated_messages', 'creatures_messages' );

function creature_custom_post_type() {
    $labels = array(
        'name'               => 'Creatures',
        'singular_name'      => 'Creature',
        'menu_name'          => 'Creatures',
        'name_admin_bar'     => 'Creatures',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Creature',
        'new_item'           => 'New Creature',
        'edit_item'          => 'Edit Creature',
        'view_item'          => 'View Creature',
        'all_items'          => 'All Creatures',
        'search_items'       => 'Search Creatures',
        'parent_item_colon'  => 'Parent Creatures:',
        'not_found'          => 'No creatures found.',
        'not_found_in_trash' => 'No creatures found in Trash.'
    );

    $args = array(
        'public'      => true,
        'labels'      => $labels,
        'rewrite'       => array( 'slug' => 'creatures' ),
        'has_archive'   => true,
        'show_in_menu'  => false,
        'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' )
    );
        register_post_type( 'creature', $args );
}

function creatures_messages( $messages ) {
    $post = get_post();

    $messages['creature'] = array(
        0  => '',
        1  => 'Creature updated.',
        2  => 'Custom field updated.',
        3  => 'Custom field deleted.',
        4  => 'Creature updated.',
        5  => isset( $_GET['revision'] ) ? sprintf( 'Creature restored to revision from %s',wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => 'Creature published.',
        7  => 'Creature saved.',
        8  => 'Creature submitted.',
        9  => sprintf(
            'Creature scheduled for: <strong>%1$s</strong>.',
            date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) )
        ),
        10 => 'Creature draft updated.'
    );

    return $messages;
}

// Fix Active Submenu When Creating/Editing
add_filter('parent_file', 'fix_admin_parent_creature');
function fix_admin_parent_creature($parent_file){
    global $submenu_file, $current_screen;

    if($current_screen->post_type == 'creature') {
        $submenu_file = 'edit.php?post_type=creature';
        $parent_file = 'lorebook/admin-page.php';
    }
    return $parent_file;
}
// =============================
