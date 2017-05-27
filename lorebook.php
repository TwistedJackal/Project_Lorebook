<?php

/**

* Plugin Name: Project Lorebook

* Plugin URI: http://twistedjackal.com/

* Description: A plugin test sandbox.

* Version: 1.0

* Author: Malachi Draven

* Author URI: http://twistedjackal.com/

*/

// CSS Styles
wp_enqueue_style('lorebook-css', plugin_dir_url(__FILE__) . 'style.css');

// jQuery Scripts
wp_register_script( 'edit_fields', plugins_url('/edit-fields.js', __FILE__), array('jquery'));
wp_enqueue_script( 'edit_fields' );

wp_register_script( 'tabs', plugins_url('/tabs.js', __FILE__), array('jquery'));
wp_enqueue_script( 'tabs' );

// Custom Post Types
require_once( plugin_dir_path( __FILE__ ) . 'create-posts.php' );
include_once( plugin_dir_path( __FILE__ ) . '/post-types/cpt-universes.php' );
include_once( plugin_dir_path( __FILE__ ) . '/post-types/cpt-locations.php' );
include_once( plugin_dir_path( __FILE__ ) . '/post-types/cpt-characters.php' );
include_once( plugin_dir_path( __FILE__ ) . '/post-types/cpt-items.php' );
include_once( plugin_dir_path( __FILE__ ) . '/post-types/cpt-races.php' );
include_once( plugin_dir_path( __FILE__ ) . '/post-types/cpt-scenes.php' );
include_once( plugin_dir_path( __FILE__ ) . '/post-types/cpt-languages.php' );
include_once( plugin_dir_path( __FILE__ ) . '/post-types/cpt-creatures.php' );
include_once( plugin_dir_path( __FILE__ ) . '/post-types/cpt-magic.php' );
include_once( plugin_dir_path( __FILE__ ) . '/post-types/cpt-groups.php' );
include_once( plugin_dir_path( __FILE__ ) . '/post-types/cpt-religions.php' );

// Post Templates
include_once( plugin_dir_path( __FILE__ ) . 'register-templates.php' );

// Admin Pages
include_once( plugin_dir_path( __FILE__ ) . 'admin.php' );

// Admin Menu
add_action( 'admin_menu', 'lbk_admin_menu' );
function lbk_admin_menu() {
    add_menu_page( 'Lorebook Title', 'Project Lorebook', 'manage_options', 'lorebook/admin-page.php', 'lorebook_admin_page', 'dashicons-tickets', 6);
    add_submenu_page( 'lorebook/admin-page.php', 'Universes', 'Universes', 'manage_options', 'edit.php?post_type=universe' );
    add_submenu_page( 'lorebook/admin-page.php', 'Locations', 'Locations', 'manage_options', 'edit.php?post_type=location' );
    add_submenu_page( 'lorebook/admin-page.php', 'Characters', 'Characters', 'manage_options', 'edit.php?post_type=character' );
    add_submenu_page( 'lorebook/admin-page.php', 'Items', 'Items', 'manage_options', 'edit.php?post_type=item' );
    add_submenu_page( 'lorebook/admin-page.php', 'Races', 'Races', 'manage_options', 'edit.php?post_type=item' );
    add_submenu_page( 'lorebook/admin-page.php', 'Scenes', 'Scenes', 'manage_options', 'edit.php?post_type=item' );
    add_submenu_page( 'lorebook/admin-page.php', 'Languages', 'Languages', 'manage_options', 'edit.php?post_type=item' );
    add_submenu_page( 'lorebook/admin-page.php', 'Creatures', 'Creatures', 'manage_options', 'edit.php?post_type=item' );
    add_submenu_page( 'lorebook/admin-page.php', 'Magic', 'Magic', 'manage_options', 'edit.php?post_type=item' );
    add_submenu_page( 'lorebook/admin-page.php', 'Groups', 'Groups', 'manage_options', 'edit.php?post_type=item' );
    add_submenu_page( 'lorebook/admin-page.php', 'Religions', 'Religions', 'manage_options', 'edit.php?post_type=item' );
}

// --------- Advanced Custom Fields ---------
define( 'ACF_LITE' , true );
include_once('advanced-custom-fields/acf.php' );

// Field Groups
include_once( plugin_dir_path( __FILE__ ) . '/field-groups/universe.php' );
include_once( plugin_dir_path( __FILE__ ) . '/field-groups/location.php' );
include_once( plugin_dir_path( __FILE__ ) . '/field-groups/character.php' );
include_once( plugin_dir_path( __FILE__ ) . '/field-groups/item.php' );

// Field Queries
include_once( plugin_dir_path( __FILE__ ) . 'field-queries.php' );

// ------------------------------------------

// --------- Create Pages ---------
// 'Create Universe' Page
function install_new_universe_pg(){
  $new_page_title = 'Create Universe';
  $new_page_content = '';
  $new_page_template = plugin_dir_path(__FILE__) . '/templates/new-universe.php';
  $page_check = get_page_by_title($new_page_title);
  $new_page = array(
          'post_type' => 'page',
          'post_title' => $new_page_title,
          'post_content' => $new_page_content,
          'post_status' => 'publish',
          'post_author' => 1,
  );
  if(!isset($page_check->ID)){
          $new_page_id = wp_insert_post($new_page);
          if(!empty($new_page_template)){
                  update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
          }
  }
}
register_activation_hook(__FILE__, 'install_new_universe_pg');

add_filter( 'page_template', 'new_universe_template' );
function new_universe_template( $page_template )
{
    if ( is_page( 'create-universe' ) ) {
        $page_template = plugin_dir_path(__FILE__) . '/templates/new-universe.php';
    }
    return $page_template;
}


// 'Create Location' Page
function install_new_location_pg(){
  $new_page_title = 'Create Location';
  $new_page_content = '';
  $new_page_template = plugin_dir_path(__FILE__) . '/templates/new-location.php';
  $page_check = get_page_by_title($new_page_title);
  $new_page = array(
          'post_type' => 'page',
          'post_title' => $new_page_title,
          'post_content' => $new_page_content,
          'post_status' => 'publish',
          'post_author' => 1,
  );
  if(!isset($page_check->ID)){
          $new_page_id = wp_insert_post($new_page);
          if(!empty($new_page_template)){
                  update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
          }
  }
}
register_activation_hook(__FILE__, 'install_new_location_pg');

add_filter( 'page_template', 'new_location_template' );
function new_location_template( $page_template )
{
    if ( is_page( 'create-location' ) ) {
        $page_template = plugin_dir_path(__FILE__) . '/templates/new-location.php';
    }
    return $page_template;
}


// 'Create Character' Page
function install_new_character_pg(){
  $new_page_title = 'Create Character';
  $new_page_content = '';
  $new_page_template = plugin_dir_path(__FILE__) . '/templates/new-character.php';
  $page_check = get_page_by_title($new_page_title);
  $new_page = array(
          'post_type' => 'page',
          'post_title' => $new_page_title,
          'post_content' => $new_page_content,
          'post_status' => 'publish',
          'post_author' => 1,
  );
  if(!isset($page_check->ID)){
          $new_page_id = wp_insert_post($new_page);
          if(!empty($new_page_template)){
                  update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
          }
  }
}
register_activation_hook(__FILE__, 'install_new_character_pg');

add_filter( 'page_template', 'new_character_template' );
function new_character_template( $page_template )
{
    if ( is_page( 'create-character' ) ) {
        $page_template = plugin_dir_path(__FILE__) . '/templates/new-character.php';
    }
    return $page_template;
}


// 'Create Item' Page
function install_new_item_pg(){
  $new_page_title = 'Create Item';
  $new_page_content = '';
  $new_page_template = plugin_dir_path(__FILE__) . '/templates/new-item.php';
  $page_check = get_page_by_title($new_page_title);
  $new_page = array(
          'post_type' => 'page',
          'post_title' => $new_page_title,
          'post_content' => $new_page_content,
          'post_status' => 'publish',
          'post_author' => 1,
  );
  if(!isset($page_check->ID)){
          $new_page_id = wp_insert_post($new_page);
          if(!empty($new_page_template)){
                  update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
          }
  }
}
register_activation_hook(__FILE__, 'install_new_item_pg');

add_filter( 'page_template', 'new_item_template' );
function new_item_template( $page_template )
{
    if ( is_page( 'create-item' ) ) {
        $page_template = plugin_dir_path(__FILE__) . '/templates/new-item.php';
    }
    return $page_template;
}

// 'Create Group' Page
function install_new_group_pg(){
  $new_page_title = 'Create Group';
  $new_page_content = '';
  $new_page_template = plugin_dir_path(__FILE__) . '/templates/new-group.php';
  $page_check = get_page_by_title($new_page_title);
  $new_page = array(
          'post_type' => 'page',
          'post_title' => $new_page_title,
          'post_content' => $new_page_content,
          'post_status' => 'publish',
          'post_author' => 1,
  );
  if(!isset($page_check->ID)){
          $new_page_id = wp_insert_post($new_page);
          if(!empty($new_page_template)){
                  update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
          }
  }
}
register_activation_hook(__FILE__, 'install_new_group_pg');

add_filter( 'page_template', 'new_group_template' );
function new_group_template( $page_template )
{
    if ( is_page( 'create-group' ) ) {
        $page_template = plugin_dir_path(__FILE__) . '/templates/new-group.php';
    }
    return $page_template;
}

// 'Create Creature' Page
function install_new_creature_pg(){
  $new_page_title = 'Create Creature';
  $new_page_content = '';
  $new_page_template = plugin_dir_path(__FILE__) . '/templates/new-creature.php';
  $page_check = get_page_by_title($new_page_title);
  $new_page = array(
          'post_type' => 'page',
          'post_title' => $new_page_title,
          'post_content' => $new_page_content,
          'post_status' => 'publish',
          'post_author' => 1,
  );
  if(!isset($page_check->ID)){
          $new_page_id = wp_insert_post($new_page);
          if(!empty($new_page_template)){
                  update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
          }
  }
}
register_activation_hook(__FILE__, 'install_new_creature_pg');

add_filter( 'page_template', 'new_creature_template' );
function new_creature_template( $page_template )
{
    if ( is_page( 'create-creature' ) ) {
        $page_template = plugin_dir_path(__FILE__) . '/templates/new-creature.php';
    }
    return $page_template;
}

// 'Create Language' Page
function install_new_language_pg(){
  $new_page_title = 'Create Language';
  $new_page_content = '';
  $new_page_template = plugin_dir_path(__FILE__) . '/templates/new-language.php';
  $page_check = get_page_by_title($new_page_title);
  $new_page = array(
          'post_type' => 'page',
          'post_title' => $new_page_title,
          'post_content' => $new_page_content,
          'post_status' => 'publish',
          'post_author' => 1,
  );
  if(!isset($page_check->ID)){
          $new_page_id = wp_insert_post($new_page);
          if(!empty($new_page_template)){
                  update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
          }
  }
}
register_activation_hook(__FILE__, 'install_new_language_pg');

add_filter( 'page_template', 'new_language_template' );
function new_language_template( $page_template )
{
    if ( is_page( 'create-language' ) ) {
        $page_template = plugin_dir_path(__FILE__) . '/templates/new-language.php';
    }
    return $page_template;
}

// 'Create Magic' Page
function install_new_magic_pg(){
  $new_page_title = 'Create Magic';
  $new_page_content = '';
  $new_page_template = plugin_dir_path(__FILE__) . '/templates/new-magic.php';
  $page_check = get_page_by_title($new_page_title);
  $new_page = array(
          'post_type' => 'page',
          'post_title' => $new_page_title,
          'post_content' => $new_page_content,
          'post_status' => 'publish',
          'post_author' => 1,
  );
  if(!isset($page_check->ID)){
          $new_page_id = wp_insert_post($new_page);
          if(!empty($new_page_template)){
                  update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
          }
  }
}
register_activation_hook(__FILE__, 'install_new_magic_pg');

add_filter( 'page_template', 'new_magic_template' );
function new_magic_template( $page_template )
{
    if ( is_page( 'create-magic' ) ) {
        $page_template = plugin_dir_path(__FILE__) . '/templates/new-magic.php';
    }
    return $page_template;
}

// 'Create Race' Page
function install_new_race_pg(){
  $new_page_title = 'Create Race';
  $new_page_content = '';
  $new_page_template = plugin_dir_path(__FILE__) . '/templates/new-race.php';
  $page_check = get_page_by_title($new_page_title);
  $new_page = array(
          'post_type' => 'page',
          'post_title' => $new_page_title,
          'post_content' => $new_page_content,
          'post_status' => 'publish',
          'post_author' => 1,
  );
  if(!isset($page_check->ID)){
          $new_page_id = wp_insert_post($new_page);
          if(!empty($new_page_template)){
                  update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
          }
  }
}
register_activation_hook(__FILE__, 'install_new_race_pg');

add_filter( 'page_template', 'new_race_template' );
function new_race_template( $page_template )
{
    if ( is_page( 'create-race' ) ) {
        $page_template = plugin_dir_path(__FILE__) . '/templates/new-race.php';
    }
    return $page_template;
}

// 'Create Religion' Page
function install_new_religion_pg(){
  $new_page_title = 'Create Religion';
  $new_page_content = '';
  $new_page_template = plugin_dir_path(__FILE__) . '/templates/new-religion.php';
  $page_check = get_page_by_title($new_page_title);
  $new_page = array(
          'post_type' => 'page',
          'post_title' => $new_page_title,
          'post_content' => $new_page_content,
          'post_status' => 'publish',
          'post_author' => 1,
  );
  if(!isset($page_check->ID)){
          $new_page_id = wp_insert_post($new_page);
          if(!empty($new_page_template)){
                  update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
          }
  }
}
register_activation_hook(__FILE__, 'install_new_religion_pg');

add_filter( 'page_template', 'new_religion_template' );
function new_religion_template( $page_template )
{
    if ( is_page( 'create-religion' ) ) {
        $page_template = plugin_dir_path(__FILE__) . '/templates/new-religion.php';
    }
    return $page_template;
}

// 'Create Scene' Page
function install_new_scene_pg(){
  $new_page_title = 'Create Scene';
  $new_page_content = '';
  $new_page_template = plugin_dir_path(__FILE__) . '/templates/new-scene.php';
  $page_check = get_page_by_title($new_page_title);
  $new_page = array(
          'post_type' => 'page',
          'post_title' => $new_page_title,
          'post_content' => $new_page_content,
          'post_status' => 'publish',
          'post_author' => 1,
  );
  if(!isset($page_check->ID)){
          $new_page_id = wp_insert_post($new_page);
          if(!empty($new_page_template)){
                  update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
          }
  }
}
register_activation_hook(__FILE__, 'install_new_scene_pg');

add_filter( 'page_template', 'new_scene_template' );
function new_scene_template( $page_template )
{
    if ( is_page( 'create-scene' ) ) {
        $page_template = plugin_dir_path(__FILE__) . '/templates/new-scene.php';
    }
    return $page_template;
}

// Set Featured Images
function acf_set_featured_image( $value, $post_id, $field  ){
    if($value != ''){
      delete_post_thumbnail( $post_id);
	    //Add the value which is the image ID to the _thumbnail_id meta data for the current post
	    add_post_meta($post_id, '_thumbnail_id', $value);
    }
    return $value;
}
// acf/update_value/name={$field_name} - filter for a specific field based on it's name
add_filter('acf/update_value/name=universe-featured', 'acf_set_featured_image', 10, 3);
add_filter('acf/update_value/name=location-featured', 'acf_set_featured_image', 10, 3);

// i did make the change :)
