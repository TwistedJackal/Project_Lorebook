<?php

// --------- Restrict UNIVERSE Selection to Current User ---------
function universe_author_query( $args, $field, $post ) {
// modify the order
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$args['author']=$user_id;
$args['authors']=$user_id;
$args['post_type']='universe';
return $args;
}
// Filter for all the Universe Fields
add_filter('acf/fields/post_object/query/name=location-universe', 'universe_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=character-universe', 'universe_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=item-universe', 'universe_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=magic-universe', 'universe_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=creature-universe', 'universe_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=race-universe', 'universe_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=language-universe', 'universe_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=religion-universe', 'universe_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=group-universe', 'universe_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=scene-universe', 'universe_author_query', 10, 3);



// --------- Restrict LOCATION Selection to Current User ---------
function location_author_query( $args, $field, $post ) {
// modify the order
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$args['author']=$user_id;
$args['authors']=$user_id;
$args['post_type']='location';
return $args;
}
// Location field filters
add_filter('acf/fields/post_object/query/name=location-capital', 'location_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=location-largest-cities', 'location_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=location-notable-cities', 'location_author_query', 10, 3);
// Character field filters
add_filter('acf/fields/post_object/query/name=character-birthplace', 'location_author_query', 10, 3);
// Creature field filters
add_filter('acf/fields/post_object/query/name=creature-habitats-select', 'location_author_query', 10, 3);
// Religion field filters
add_filter('acf/fields/post_object/query/name=religion-locations', 'location_author_query', 10, 3);
// Group field filters
add_filter('acf/fields/post_object/query/name=group-locations', 'location_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=group-headquarters', 'location_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=group-offices', 'location_author_query', 10, 3);
// Scene field filters
add_filter('acf/fields/post_object/query/name=scene-locations', 'location_author_query', 10, 3);


// --------- Restrict CHARACTER Selection to Current User ---------
function character_author_query( $args, $field, $post ) {
// modify the order
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$args['author']=$user_id;
$args['authors']=$user_id;
$args['post_type']='character';
return $args;
}
// Location field filters
add_filter('acf/fields/post_object/query/name=location-leaders', 'character_author_query', 10, 3);
// Character field filters
add_filter('acf/fields/post_object/query/name=character-best-friends', 'character_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=character-archenemies', 'character_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=character-mothers', 'character_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=character-fathers', 'character_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=character-spouses', 'character_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=character-siblings', 'character_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=character-children', 'character_author_query', 10, 3);
// Item field filters
add_filter('acf/fields/post_object/query/name=item-original-owners', 'character_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=item-past-owners', 'character_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=item-current-owners', 'character_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=item-makers', 'character_author_query', 10, 3);
// Magic field filters
add_filter('acf/fields/post_object/query/name=magic-deity', 'character_author_query', 10, 3);
// Race field filters
add_filter('acf/fields/post_object/query/name=race-famous-figures', 'character_author_query', 10, 3);
// Religion field filters
add_filter('acf/fields/post_object/query/name=religion-notable-figures', 'character_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=religion-deities', 'character_author_query', 10, 3);
// Group field filters
add_filter('acf/fields/post_object/query/name=group-leaders', 'character_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=group-members', 'character_author_query', 10, 3);
// Scene field filters
add_filter('acf/fields/post_object/query/name=scene-characters', 'character_author_query', 10, 3);


// --------- Restrict ITEM Selection to Current User ---------
function item_author_query( $args, $field, $post ) {
// modify the order
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$args['author']=$user_id;
$args['authors']=$user_id;
$args['post_type']='item';
return $args;
}
// Religion field filters
add_filter('acf/fields/post_object/query/name=religion-artifacts', 'item_author_query', 10, 3);
// Group field filters
add_filter('acf/fields/post_object/query/name=group-equipment', 'item_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=group-key-items', 'item_author_query', 10, 3);
// Scene field filters
add_filter('acf/fields/post_object/query/name=scene-items', 'item_author_query', 10, 3);


// --------- Restrict MAGIC Selection to Current User ---------
function magic_author_query( $args, $field, $post ) {
// modify the order
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$args['author']=$user_id;
$args['authors']=$user_id;
$args['post_type']='magic';
return $args;
}
// X field filters
add_filter('acf/fields/post_object/query/name=TEMP-NAME', 'magic_author_query', 10, 3);


// --------- Restrict CREATURE Selection to Current User ---------
function creature_author_query( $args, $field, $post ) {
// modify the order
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$args['author']=$user_id;
$args['authors']=$user_id;
$args['post_type']='creature';
return $args;
}
// Creature field filters
add_filter('acf/fields/post_object/query/name=creature-related-creatures', 'creature_author_query', 10, 3);


// --------- Restrict RACE Selection to Current User ---------
function race_author_query( $args, $field, $post ) {
// modify the order
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$args['author']=$user_id;
$args['authors']=$user_id;
$args['post_type']='race';
return $args;
}
// Religion field filters
add_filter('acf/fields/post_object/query/name=religion-races', 'race_author_query', 10, 3);


// --------- Restrict LANGUAGE Selection to Current User ---------
function language_author_query( $args, $field, $post ) {
// modify the order
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$args['author']=$user_id;
$args['authors']=$user_id;
$args['post_type']='language';
return $args;
}
// Location field filters
add_filter('acf/fields/post_object/query/name=location-languages-select', 'language_author_query', 10, 3);


// --------- Restrict RELIGION Selection to Current User ---------
function religion_author_query( $args, $field, $post ) {
// modify the order
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$args['author']=$user_id;
$args['authors']=$user_id;
$args['post_type']='religion';
return $args;
}
// Character field filters
add_filter('acf/fields/post_object/query/name=character-religion', 'religion_author_query', 10, 3);


// --------- Restrict GROUP Selection to Current User ---------
function group_author_query( $args, $field, $post ) {
// modify the order
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$args['author']=$user_id;
$args['authors']=$user_id;
$args['post_type']='group';
return $args;
}
// Group field filters
add_filter('acf/fields/post_object/query/name=group-supergroups', 'group_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=group-subgroups', 'group_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=group-sistergroups', 'group_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=group-allies', 'group_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=group-enemies', 'group_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=group-rivals', 'group_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=group-clients', 'group_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=group-suppliers', 'group_author_query', 10, 3);


// --------- Restrict SCENE Selection to Current User ---------
function scene_author_query( $args, $field, $post ) {
// modify the order
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$args['author']=$user_id;
$args['authors']=$user_id;
$args['post_type']='scene';
return $args;
}
// X field filters
add_filter('acf/fields/post_object/query/name=TEMP-NAME', 'scene_author_query', 10, 3);
