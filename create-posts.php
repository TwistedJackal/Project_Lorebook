<?php

// --------- Universes ---------
// Create Post
add_filter('acf/pre_save_post' , 'create_universe_form' );
function create_universe_form( $post_id ) {
  // bail early if not a new post
  if( $post_id !== 'new_universe' ) {
    return $post_id;
  }
  // vars
  $title = $_POST['fields']['field_590cecb75ba1b'];
  // Create a new post
  $post = array(
    'post_status'	=> 'publish',
    'post_type'		=> 'universe',
    'post_title'	=> $title,
  );
  // insert the post
  $post_id = wp_insert_post( $post );
  // Update $_POST Return
  $url = get_permalink($post_id);
	$_POST['return'] = ($url);
  // return the new ID
  return $post_id;
}

// --------- Locations ---------
// Create Post
add_filter('acf/pre_save_post' , 'create_location_form' );
function create_location_form( $post_id ) {
  // bail early if not a new post
  if( $post_id !== 'new_location' ) {
    return $post_id;
  }
  // vars
  $title = $_POST['fields']['field_590f86e9c509e'];
  // Create a new post
  $post = array(
    'post_status'	=> 'publish',
    'post_type'		=> 'location',
    'post_title'	=> $title,
  );
  // insert the post
  $post_id = wp_insert_post( $post );
  // Update $_POST Return
  $url = get_permalink($post_id);
	$_POST['return'] = ($url);
  // return the new ID
  return $post_id;
}

// --------- Items ---------
// Create Post
add_filter('acf/pre_save_post' , 'create_item_form' );
function create_item_form( $post_id ) {
  // bail early if not a new post
  if( $post_id !== 'new_item' ) {
    return $post_id;
  }
  // vars
  $title = $_POST['fields']['field_59287749fe6f3'];
  // Create a new post
  $post = array(
    'post_status'	=> 'publish',
    'post_type'		=> 'item',
    'post_title'	=> $title,
  );
  // insert the post
  $post_id = wp_insert_post( $post );
  // Update $_POST Return
  $url = get_permalink($post_id);
	$_POST['return'] = ($url);
  // return the new ID
  return $post_id;
}



// --------- Edit Posts ---------
function edit_title_slug( $post_id ) {
  if ( get_post_type() == 'universe' ) {
    $new_slug = get_field('universe-name', $post_id);
  } elseif (get_post_type() == 'location' ) {
    $new_slug = get_field('location-name', $post_id);
  } elseif (get_post_type() == 'item' ) {
    $new_slug = get_field('item-name', $post_id);
  }
  $my_post = array(
    'ID'          => $post_id,
    'post_name'   => $new_slug,
    'post_title'  => $new_slug,
  );
  remove_action('acf/save_post', 'edit_title_slug', 20);
  wp_update_post( $my_post );
  add_action('acf/save_post', 'edit_title_slug', 20);
  wp_redirect( get_permalink($post_id) );
  exit;
}

// run after ACF saves the $_POST['acf'] data
add_action('acf/save_post', 'edit_title_slug', 20);
