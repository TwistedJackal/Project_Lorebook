<?php

// ========= UNIVERSES =========
add_action( 'init', 'universe_custom_post_type' );
add_filter( 'post_updated_messages', 'universes_messages' );

function universe_custom_post_type() {
    $labels = array(
        'name'               => 'Universes',
        'singular_name'      => 'Universe',
        'menu_name'          => 'Universes',
        'name_admin_bar'     => 'Universes',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Universe',
        'new_item'           => 'New Universe',
        'edit_item'          => 'Edit Universe',
        'view_item'          => 'View Universe',
        'all_items'          => 'All Universes',
        'search_items'       => 'Search Universes',
        'parent_item_colon'  => 'Parent Universes:',
        'not_found'          => 'No universes found.',
        'not_found_in_trash' => 'No universes found in Trash.'
    );

    $args = array(
        'public'      => true,
        'labels'      => $labels,
        'rewrite'       => array( 'slug' => 'universes' ),
        'has_archive'   => true,
        'show_in_menu'  => false,
        'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' )
    );
        register_post_type( 'universe', $args );
}

function universes_messages( $messages ) {
    $post = get_post();

    $messages['universe'] = array(
        0  => '',
        1  => 'Universe updated.',
        2  => 'Custom field updated.',
        3  => 'Custom field deleted.',
        4  => 'Universe updated.',
        5  => isset( $_GET['revision'] ) ? sprintf( 'Universe restored to revision from %s',wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => 'Universe published.',
        7  => 'Universe saved.',
        8  => 'Universe submitted.',
        9  => sprintf(
            'Universe scheduled for: <strong>%1$s</strong>.',
            date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) )
        ),
        10 => 'Universe draft updated.'
    );

    return $messages;
}

// Fix Active Submenu When Creating/Editing
add_filter('parent_file', 'fix_admin_parent_universe');
function fix_admin_parent_universe($parent_file){
    global $submenu_file, $current_screen;

    if($current_screen->post_type == 'universe') {
        $submenu_file = 'edit.php?post_type=universe';
        $parent_file = 'lorebook/admin-page.php';
    }
    return $parent_file;
}


/*
// Permalinks
add_filter( 'post_type_link', 'universe_post_type_link', 10, 4 );
function universe_post_type_link( $post_link, $post, $leavename, $sample )
{
    if ( 'universe' == $post->post_type ) {
        $authordata = get_userdata( $post->post_author );
        $author = $authordata->user_nicename;
        $post_link = str_replace( '%author%', $author, $post_link );
    }
    return $post_link;
}
*/

// =============================
