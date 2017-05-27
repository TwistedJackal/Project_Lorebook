<?php

/* ========== UNIVERSES ========== */
// Universe Single
if( !function_exists('get_universe_template') ):
 function get_universe_template($single_template) {
    global $wp_query, $post;
    if ($post->post_type == 'universe'){
        $single_template = plugin_dir_path(__FILE__) . '/templates/single-universe.php';
    }//end if universe
    return $single_template;
}//end get_universe_template function
endif;
add_filter( 'single_template', 'get_universe_template' ) ;

// Universes Archive
add_filter('archive_template', 'archive_universe_template');
function archive_universe_template($template) {
    global $wp_query;
    if (is_post_type_archive('universe')) {
        $templates[] = 'archive-universe.php';
        $template = lorebook_locate_plugin_template($templates);
    }
    return $template;
}
/* =============================== */


/* ========== LOCATIONS ========== */
// Location Single
if( !function_exists('get_location_template') ):
 function get_location_template($single_template) {
    global $wp_query, $post;
    if ($post->post_type == 'location'){
        $single_template = plugin_dir_path(__FILE__) . '/templates/single-location.php';
    }//end if location
    return $single_template;
}//end get_location_template function
endif;
add_filter( 'single_template', 'get_location_template' ) ;

// Locations Archive
add_filter('archive_template', 'archive_location_template');
function archive_location_template($template) {
    global $wp_query;
    if (is_post_type_archive('location')) {
        $templates[] = 'archive-location.php';
        $template = lorebook_locate_plugin_template($templates);
    }
    return $template;
}
/* =============================== */


/* ========== CHARACTERS ========== */
if( !function_exists('get_character_template') ):
 function get_character_template($single_template) {
    global $wp_query, $post;
    if ($post->post_type == 'character'){
        $single_template = plugin_dir_path(__FILE__) . '/templates/single-character.php';
    }//end if character
    return $single_template;
}//end get_character_template function
endif;
add_filter( 'single_template', 'get_character_template' ) ;

// Characters Archive
add_filter('archive_template', 'archive_character_template');
function archive_character_template($template) {
    global $wp_query;
    if (is_post_type_archive('character')) {
        $templates[] = 'archive-character.php';
        $template = lorebook_locate_plugin_template($templates);
    }
    return $template;
}
/* ================================ */


/* ========== ITEMS ========== */
if( !function_exists('get_item_template') ):
 function get_item_template($single_template) {
    global $wp_query, $post;
    if ($post->post_type == 'item'){
        $single_template = plugin_dir_path(__FILE__) . '/templates/single-item.php';
    }//end if item
    return $single_template;
}//end get_item_template function
endif;
add_filter( 'single_template', 'get_item_template' ) ;

// Items Archive
add_filter('archive_template', 'archive_item_template');
function archive_item_template($template) {
    global $wp_query;
    if (is_post_type_archive('item')) {
        $templates[] = 'archive-item.php';
        $template = lorebook_locate_plugin_template($templates);
    }
    return $template;
}
/* ================================ */


/* ========== MAGIC ========== */
if( !function_exists('get_magic_template') ):
 function get_magic_template($single_template) {
    global $wp_query, $post;
    if ($post->post_type == 'magic'){
        $single_template = plugin_dir_path(__FILE__) . '/templates/single-magic.php';
    }//end if magic
    return $single_template;
}//end get_magic_template function
endif;
add_filter( 'single_template', 'get_magic_template' ) ;

// Magic Archive
add_filter('archive_template', 'archive_magic_template');
function archive_magic_template($template) {
    global $wp_query;
    if (is_post_type_archive('magic')) {
        $templates[] = 'archive-magic.php';
        $template = lorebook_locate_plugin_template($templates);
    }
    return $template;
}
/* ================================ */


/* ========== CREATURES ========== */
if( !function_exists('get_creature_template') ):
 function get_creature_template($single_template) {
    global $wp_query, $post;
    if ($post->post_type == 'creature'){
        $single_template = plugin_dir_path(__FILE__) . '/templates/single-creature.php';
    }//end if creature
    return $single_template;
}//end get_creature_template function
endif;
add_filter( 'single_template', 'get_creature_template' ) ;

// Creatures Archive
add_filter('archive_template', 'archive_creature_template');
function archive_creature_template($template) {
    global $wp_query;
    if (is_post_type_archive('creature')) {
        $templates[] = 'archive-creature.php';
        $template = lorebook_locate_plugin_template($templates);
    }
    return $template;
}
/* ================================ */


/* ========== RACES ========== */
if( !function_exists('get_race_template') ):
 function get_race_template($single_template) {
    global $wp_query, $post;
    if ($post->post_type == 'race'){
        $single_template = plugin_dir_path(__FILE__) . '/templates/single-race.php';
    }//end if race
    return $single_template;
}//end get_race_template function
endif;
add_filter( 'single_template', 'get_race_template' ) ;

// Races Archive
add_filter('archive_template', 'archive_race_template');
function archive_race_template($template) {
    global $wp_query;
    if (is_post_type_archive('race')) {
        $templates[] = 'archive-race.php';
        $template = lorebook_locate_plugin_template($templates);
    }
    return $template;
}
/* ================================ */


/* ========== LANGUAGES ========== */
if( !function_exists('get_language_template') ):
 function get_language_template($single_template) {
    global $wp_query, $post;
    if ($post->post_type == 'language'){
        $single_template = plugin_dir_path(__FILE__) . '/templates/single-language.php';
    }//end if language
    return $single_template;
}//end get_language_template function
endif;
add_filter( 'single_template', 'get_language_template' ) ;

// Languages Archive
add_filter('archive_template', 'archive_language_template');
function archive_language_template($template) {
    global $wp_query;
    if (is_post_type_archive('language')) {
        $templates[] = 'archive-language.php';
        $template = lorebook_locate_plugin_template($templates);
    }
    return $template;
}
/* ================================ */


/* ========== RELIGIONS ========== */
if( !function_exists('get_religion_template') ):
 function get_religion_template($single_template) {
    global $wp_query, $post;
    if ($post->post_type == 'religion'){
        $single_template = plugin_dir_path(__FILE__) . '/templates/single-religion.php';
    }//end if religion
    return $single_template;
}//end get_religion_template function
endif;
add_filter( 'single_template', 'get_religion_template' ) ;

// Religions Archive
add_filter('archive_template', 'archive_religion_template');
function archive_religion_template($template) {
    global $wp_query;
    if (is_post_type_archive('religion')) {
        $templates[] = 'archive-religion.php';
        $template = lorebook_locate_plugin_template($templates);
    }
    return $template;
}
/* ================================ */


/* ========== GROUPS ========== */
if( !function_exists('get_group_template') ):
 function get_group_template($single_template) {
    global $wp_query, $post;
    if ($post->post_type == 'group'){
        $single_template = plugin_dir_path(__FILE__) . '/templates/single-group.php';
    }//end if group
    return $single_template;
}//end get_group_template function
endif;
add_filter( 'single_template', 'get_group_template' ) ;

// Groups Archive
add_filter('archive_template', 'archive_group_template');
function archive_group_template($template) {
    global $wp_query;
    if (is_post_type_archive('group')) {
        $templates[] = 'archive-group.php';
        $template = lorebook_locate_plugin_template($templates);
    }
    return $template;
}
/* ================================ */


/* ========== SCENES ========== */
if( !function_exists('get_scene_template') ):
 function get_scene_template($single_template) {
    global $wp_query, $post;
    if ($post->post_type == 'scene'){
        $single_template = plugin_dir_path(__FILE__) . '/templates/single-scene.php';
    }//end if scene
    return $single_template;
}//end get_scene_template function
endif;
add_filter( 'single_template', 'get_scene_template' ) ;

// Scenes Archive
add_filter('archive_template', 'archive_scene_template');
function archive_scene_template($template) {
    global $wp_query;
    if (is_post_type_archive('scene')) {
        $templates[] = 'archive-scene.php';
        $template = lorebook_locate_plugin_template($templates);
    }
    return $template;
}
/* ================================ */


// -------------------------------------------------------


// ========= ARCHIVES =========
function lorebook_locate_plugin_template($template_names, $load = false, $require_once = true ) {
    if (!is_array($template_names)) {
        return '';
    }
    $located = '';
    $this_plugin_dir = plugin_dir_path(__FILE__);
    foreach ( $template_names as $template_name ) {
        if ( !$template_name )
            continue;
        if ( file_exists(get_stylesheet_directory . '/' . $template_name)) {
            $located = get_stylesheet_directory . '/' . $template_name;
            break;
        } elseif ( file_exists(get_template_directory . '/' . $template_name) ) {
            $located = get_template_directory . '/' . $template_name;
            break;
        } elseif ( file_exists( $this_plugin_dir . '/templates/' . $template_name) ) {
            $located =  $this_plugin_dir . '/templates/' . $template_name;
            break;
        }
    }
    if ( $load && $located != '' ) {
        load_template( $located, $require_once );
    }
    return $located;
}
