<?php

// ========= Scenes =========
add_action( 'init', 'scene_custom_post_type' );
add_filter( 'post_updated_messages', 'scenes_messages' );

function scene_custom_post_type() {
    $labels = array(
        'name'               => 'Scenes',
        'singular_name'      => 'Scene',
        'menu_name'          => 'Scenes',
        'name_admin_bar'     => 'Scenes',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Scene',
        'new_item'           => 'New Scene',
        'edit_item'          => 'Edit Scene',
        'view_item'          => 'View Scene',
        'all_items'          => 'All Scenes',
        'search_items'       => 'Search Scenes',
        'parent_item_colon'  => 'Parent Scenes:',
        'not_found'          => 'No scenes found.',
        'not_found_in_trash' => 'No scenes found in Trash.'
    );

    $args = array(
        'public'      => true,
        'labels'      => $labels,
        'rewrite'       => array( 'slug' => 'scenes' ),
        'has_archive'   => true,
        'show_in_menu'  => false,
        'supports'      => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments' )
    );
        register_post_type( 'scene', $args );
}

function scenes_messages( $messages ) {
    $post = get_post();

    $messages['scene'] = array(
        0  => '',
        1  => 'Scene updated.',
        2  => 'Custom field updated.',
        3  => 'Custom field deleted.',
        4  => 'Scene updated.',
        5  => isset( $_GET['revision'] ) ? sprintf( 'Scene restored to revision from %s',wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6  => 'Scene published.',
        7  => 'Scene saved.',
        8  => 'Scene submitted.',
        9  => sprintf(
            'Scene scheduled for: <strong>%1$s</strong>.',
            date_i18n( 'M j, Y @ G:i', strtotime( $post->post_date ) )
        ),
        10 => 'Scene draft updated.'
    );

    return $messages;
}

// Fix Active Submenu When Creating/Editing
add_filter('parent_file', 'fix_admin_parent_scene');
function fix_admin_parent_scene($parent_file){
    global $submenu_file, $current_screen;

    if($current_screen->post_type == 'scene') {
        $submenu_file = 'edit.php?post_type=scene';
        $parent_file = 'lorebook/admin-page.php';
    }
    return $parent_file;
}


/*
// Permalinks
add_filter( 'post_type_link', 'scene_post_type_link', 10, 4 );
function scene_post_type_link( $post_link, $post, $leavename, $sample )
{
    if ( 'scene' == $post->post_type ) {
        $authordata = get_userdata( $post->post_author );
        $author = $authordata->user_nicename;
        $post_link = str_replace( '%author%', $author, $post_link );
    }
    return $post_link;
}
*/

// =============================
