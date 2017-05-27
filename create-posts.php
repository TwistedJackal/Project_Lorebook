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

// --------- Characters ---------
// Create Post
add_filter('acf/pre_save_post' , 'create_character_form' );
function create_character_form( $post_id ) {
  // bail early if not a new post
  if( $post_id !== 'new_character' ) {
    return $post_id;
  }
  // vars
  $title = $_POST['fields']['field_592870c3e8ceb'];
  // Create a new post
  $post = array(
    'post_status'	=> 'publish',
    'post_type'		=> 'character',
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

// --------- Magic ---------
// Create Post
add_filter('acf/pre_save_post' , 'create_magic_form' );
function create_magic_form( $post_id ) {
  // bail early if not a new post
  if( $post_id !== 'new_magic' ) {
    return $post_id;
  }
  // vars
  $title = $_POST['fields']['field_5929e3de2ae76'];
  // Create a new post
  $post = array(
    'post_status'	=> 'publish',
    'post_type'		=> 'magic',
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

// --------- Creatures ---------
// Create Post
add_filter('acf/pre_save_post' , 'create_creature_form' );
function create_creature_form( $post_id ) {
  // bail early if not a new post
  if( $post_id !== 'new_creature' ) {
    return $post_id;
  }
  // vars
  $title = $_POST['fields']['field_5929015a810f1'];
  // Create a new post
  $post = array(
    'post_status'	=> 'publish',
    'post_type'		=> 'creature',
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

// --------- Races ---------
// Create Post
add_filter('acf/pre_save_post' , 'create_race_form' );
function create_race_form( $post_id ) {
  // bail early if not a new post
  if( $post_id !== 'new_race' ) {
    return $post_id;
  }
  // vars
  $title = $_POST['fields']['field_5929e3a23c740'];
  // Create a new post
  $post = array(
    'post_status'	=> 'publish',
    'post_type'		=> 'race',
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

// --------- Languages ---------
// Create Post
add_filter('acf/pre_save_post' , 'create_language_form' );
function create_language_form( $post_id ) {
  // bail early if not a new post
  if( $post_id !== 'new_language' ) {
    return $post_id;
  }
  // vars
  $title = $_POST['fields']['field_5929f37b884c0'];
  // Create a new post
  $post = array(
    'post_status'	=> 'publish',
    'post_type'		=> 'language',
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

// --------- Religions ---------
// Create Post
add_filter('acf/pre_save_post' , 'create_religion_form' );
function create_religion_form( $post_id ) {
  // bail early if not a new post
  if( $post_id !== 'new_religion' ) {
    return $post_id;
  }
  // vars
  $title = $_POST['fields']['field_5929e936838a5'];
  // Create a new post
  $post = array(
    'post_status'	=> 'publish',
    'post_type'		=> 'religion',
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

// --------- Scenes ---------
// Create Post
add_filter('acf/pre_save_post' , 'create_scene_form' );
function create_scene_form( $post_id ) {
  // bail early if not a new post
  if( $post_id !== 'new_scene' ) {
    return $post_id;
  }
  // vars
  $title = $_POST['fields']['field_5929f6fdd39e3'];
  // Create a new post
  $post = array(
    'post_status'	=> 'publish',
    'post_type'		=> 'scene',
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
  } elseif (get_post_type() == 'character' ) {
    $new_slug = get_field('character-name', $post_id);
  } elseif (get_post_type() == 'item' ) {
    $new_slug = get_field('item-name', $post_id);
  } elseif (get_post_type() == 'magic' ) {
    $new_slug = get_field('magic-name', $post_id);
  } elseif (get_post_type() == 'creature' ) {
    $new_slug = get_field('creature-name', $post_id);
  } elseif (get_post_type() == 'race' ) {
    $new_slug = get_field('race-name', $post_id);
  } elseif (get_post_type() == 'language' ) {
    $new_slug = get_field('language-name', $post_id);
  } elseif (get_post_type() == 'religion' ) {
    $new_slug = get_field('religion-name', $post_id);
  } elseif (get_post_type() == 'scene' ) {
    $new_slug = get_field('scene-name', $post_id);
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
