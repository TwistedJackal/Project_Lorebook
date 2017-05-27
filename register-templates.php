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
