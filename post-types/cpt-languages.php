<?php

// ========= Languages =========
add_action( 'init', 'language_custom_post_type' );
add_filter( 'post_updated_messages', 'languages_messages' );

function language_custom_post_type() {
    $labels = array(
        'name'               => 'Languages',
        'singular_name'      => 'Language',
        'menu_name'          => 'Languages',
        'name_admin_bar'     => 'Languages',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Language',
        'new_item'           => 'New Language',
        'edit_item'          => 'Edit Language',
        'view_item'          => 'View Language',
        'all_items'          => 'All Languages',
        'search_items'       => 'Search Languages',
        'parent_item_colon'  => 'Parent Languages:',
        'not_found'          => 'No languages found.',
        'not_found_in_trash' => 'No languages found in Trash.'
    );

    $args = array(
        'public'      => true,
        'labels'      => $labels,
        'rewrite'       => array( 'slug' => 'languages' ),
        'has_archive'   => true,
        'show_in_menu'  => false,
        'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' )
    );
        register_post_type( 'language', $args );
}

function languages_messages( $messages ) {
    $post = get_post();

    $messages['language'] = array(
        0  => '',
        1  => 'Language updated.',
        2  => 'Custom field updated.',
        3  => 'Custom field deleted.',
        4  => 'Language updated.',
        5  => isset( $_GET['revision'] ) ? sprintf( 'Language restored to revision from %s',wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => 'Language published.',
        7  => 'Language saved.',
        8  => 'Language submitted.',
        9  => sprintf(
            'Language scheduled for: <strong>%1$s</strong>.',
            date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) )
        ),
        10 => 'Language draft updated.'
    );

    return $messages;
}

// Fix Active Submenu When Creating/Editing
add_filter('parent_file', 'fix_admin_parent_language');
function fix_admin_parent_language($parent_file){
    global $submenu_file, $current_screen;

    if($current_screen->post_type == 'language') {
        $submenu_file = 'edit.php?post_type=language';
        $parent_file = 'lorebook/admin-page.php';
    }
    return $parent_file;
}


/*
// Permalinks
add_filter( 'post_type_link', 'language_post_type_link', 10, 4 );
function language_post_type_link( $post_link, $post, $leavename, $sample )
{
    if ( 'language' == $post->post_type ) {
        $authordata = get_userdata( $post->post_author );
        $author = $authordata->user_nicename;
        $post_link = str_replace( '%author%', $author, $post_link );
    }
    return $post_link;
}
*/

// =============================
