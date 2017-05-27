<?php

// ========= LOCATIONS =========
add_action( 'init', 'location_custom_post_type' );
add_filter( 'post_updated_messages', 'locations_messages' );

function location_custom_post_type() {
    $labels = array(
        'name'               => 'Locations',
        'singular_name'      => 'Location',
        'menu_name'          => 'Locations',
        'name_admin_bar'     => 'Locations',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Location',
        'new_item'           => 'New Location',
        'edit_item'          => 'Edit Location',
        'view_item'          => 'View Location',
        'all_items'          => 'All Locations',
        'search_items'       => 'Search Locations',
        'parent_item_colon'  => 'Parent Locations:',
        'not_found'          => 'No locations found.',
        'not_found_in_trash' => 'No locations found in Trash.'
    );

    $args = array(
        'public'      => true,
        'labels'      => $labels,
        'rewrite'       => array( 'slug' => 'locations' ),
        'has_archive'   => true,
        'show_in_menu'  => false,
        'show_ui'       => true,
        'hierarchical'  => true,
        'taxonomies'    => array( 'category' ),
        'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' )
    );
        register_post_type( 'location', $args );
}

function locations_messages( $messages ) {
    $post = get_post();

    $messages['location'] = array(
        0  => '',
        1  => 'Location updated.',
        2  => 'Custom field updated.',
        3  => 'Custom field deleted.',
        4  => 'Location updated.',
        5  => isset( $_GET['revision'] ) ? sprintf( 'Location restored to revision from %s',wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => 'Location published.',
        7  => 'Location saved.',
        8  => 'Location submitted.',
        9  => sprintf(
            'Location scheduled for: <strong>%1$s</strong>.',
            date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) )
        ),
        10 => 'Location draft updated.'
    );

    return $messages;
}

// Fix Active Submenu When Creating/Editing
add_filter('parent_file', 'fix_admin_parent_location');
function fix_admin_parent_location($parent_file){
    global $submenu_file, $current_screen;

    if($current_screen->post_type == 'location') {
        $submenu_file = 'edit.php?post_type=location';
        $parent_file = 'lorebook/admin-page.php';
    }
    return $parent_file;
}

// =============================
