<?php

// Restrict Universe Selection to Current User
function universe_author_query( $args, $field, $post ) {
// modify the order
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$args['author']=$user_id;
$args['authors']=$user_id;
$args['post_type']='universe';
return $args;
}
// filter for every field
add_filter('acf/fields/post_object/query/name=location-universe', 'universe_author_query', 10, 3);



// Restrict Location Selection to Current User
function location_author_query( $args, $field, $post ) {
// modify the order
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$args['author']=$user_id;
$args['authors']=$user_id;
$args['post_type']='location';
return $args;
}
// filter for every field
add_filter('acf/fields/post_object/query/name=location-capital', 'location_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=location-largest-cities', 'location_author_query', 10, 3);
add_filter('acf/fields/post_object/query/name=location-notable-cities', 'location_author_query', 10, 3);



// Restrict Character Selection to Current User
function character_author_query( $args, $field, $post ) {
// modify the order
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$args['author']=$user_id;
$args['authors']=$user_id;
$args['post_type']='character';
return $args;
}
// filter for every field
add_filter('acf/fields/post_object/query/name=location-leaders', 'character_author_query', 10, 3);



// Restrict Language Selection to Current User
function language_author_query( $args, $field, $post ) {
// modify the order
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
$args['author']=$user_id;
$args['authors']=$user_id;
$args['post_type']='language';
return $args;
}
// filter for every field
add_filter('acf/fields/post_object/query/name=location-languages-select', 'language_author_query', 10, 3);
