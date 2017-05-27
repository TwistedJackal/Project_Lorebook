<?php

// ========= CHARACTERS =========
add_action( 'init', 'character_custom_post_type' );
add_filter( 'post_updated_messages', 'characters_messages' );

function character_custom_post_type() {
    $labels = array(
        'name'               => 'Characters',
        'singular_name'      => 'Character',
        'menu_name'          => 'Characters',
        'name_admin_bar'     => 'Characters',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Character',
        'new_item'           => 'New Character',
        'edit_item'          => 'Edit Character',
        'view_item'          => 'View Character',
        'all_items'          => 'All Characters',
        'search_items'       => 'Search Characters',
        'parent_item_colon'  => 'Parent Characters:',
        'not_found'          => 'No characters found.',
        'not_found_in_trash' => 'No characters found in Trash.'
    );

    $args = array(
        'public'      => true,
        'labels'      => $labels,
        'rewrite'       => array( 'slug' => 'characters' ),
        'has_archive'   => true,
        'show_in_menu'  => false,
        'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' )
    );
        register_post_type( 'character', $args );
}

function characters_messages( $messages ) {
    $post = get_post();

    $messages['character'] = array(
        0  => '',
        1  => 'Character updated.',
        2  => 'Custom field updated.',
        3  => 'Custom field deleted.',
        4  => 'Character updated.',
        5  => isset( $_GET['revision'] ) ? sprintf( 'Character restored to revision from %s',wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => 'Character published.',
        7  => 'Character saved.',
        8  => 'Character submitted.',
        9  => sprintf(
            'Character scheduled for: <strong>%1$s</strong>.',
            date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) )
        ),
        10 => 'Character draft updated.'
    );

    return $messages;
}

// Fix Active Submenu When Creating/Editing
add_filter('parent_file', 'fix_admin_parent_file');
function fix_admin_parent_file($parent_file){
    global $submenu_file, $current_screen;

    if($current_screen->post_type == 'character') {
        $submenu_file = 'edit.php?post_type=character';
        $parent_file = 'lorebook/admin-page.php';
    }
    return $parent_file;
}

/*
// Permalinks
add_filter( 'post_type_link', 'character_post_type_link', 10, 4 );
function character_post_type_link( $post_link, $post, $leavename, $sample )
{
    if ( 'character' == $post->post_type ) {
        $authordata = get_userdata( $post->post_author );
        $author = $authordata->user_nicename;
        $post_link = str_replace( '%author%', $author, $post_link );
    }
    return $post_link;
}
*/
// =============================
