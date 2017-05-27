<?php

// ========= RACES =========
add_action( 'init', 'race_custom_post_type' );
add_filter( 'post_updated_messages', 'races_messages' );

function race_custom_post_type() {
    $labels = array(
        'name'               => 'Races',
        'singular_name'      => 'Race',
        'menu_name'          => 'Races',
        'name_admin_bar'     => 'Races',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Race',
        'new_item'           => 'New Race',
        'edit_item'          => 'Edit Race',
        'view_item'          => 'View Race',
        'all_items'          => 'All Races',
        'search_items'       => 'Search Races',
        'parent_item_colon'  => 'Parent Races:',
        'not_found'          => 'No races found.',
        'not_found_in_trash' => 'No races found in Trash.'
    );

    $args = array(
        'public'      => true,
        'labels'      => $labels,
        'rewrite'       => array( 'slug' => 'races' ),
        'has_archive'   => true,
        'show_in_menu'  => false,
        'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' )
    );
        register_post_type( 'race', $args );
}

function races_messages( $messages ) {
    $post = get_post();

    $messages['race'] = array(
        0  => '',
        1  => 'Race updated.',
        2  => 'Custom field updated.',
        3  => 'Custom field deleted.',
        4  => 'Race updated.',
        5  => isset( $_GET['revision'] ) ? sprintf( 'Race restored to revision from %s',wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => 'Race published.',
        7  => 'Race saved.',
        8  => 'Race submitted.',
        9  => sprintf(
            'Race scheduled for: <strong>%1$s</strong>.',
            date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) )
        ),
        10 => 'Race draft updated.'
    );

    return $messages;
}

// Fix Active Submenu When Creating/Editing
add_filter('parent_file', 'fix_admin_parent_race');
function fix_admin_parent_race($parent_file){
    global $submenu_file, $current_screen;

    if($current_screen->post_type == 'race') {
        $submenu_file = 'edit.php?post_type=race';
        $parent_file = 'lorebook/admin-page.php';
    }
    return $parent_file;
}


/*
// Permalinks
add_filter( 'post_type_link', 'race_post_type_link', 10, 4 );
function race_post_type_link( $post_link, $post, $leavename, $sample )
{
    if ( 'race' == $post->post_type ) {
        $authordata = get_userdata( $post->post_author );
        $author = $authordata->user_nicename;
        $post_link = str_replace( '%author%', $author, $post_link );
    }
    return $post_link;
}
*/

// =============================
