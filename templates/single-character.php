<?php
/*
Template Name: character
Template Post Type: post, character
*/

acf_form_head();
get_header(); ?>




<button id="edit-button">Edit Button Test</button>

<div id="reg-Field">

			<?php while ( have_posts() ) : the_post(); ?>

				<h1><?php the_title(); ?></h1>
				<p>Description: <?php the_field('character-hair_color'); ?></p>
                                <p>Description: <?php the_field('character-role'); ?></p>

<div class="color-test">
<h2>Color Test</h2>
<div class="color-test-bg" style="width: 100px; height: 100px; background-color: <?php the_field('character-hair_color'); ?>;"></div>
</div>
<br />

<div class="tj-test">
	<h2>Image Test</h2>
<?php if( get_field('character-example') ): ?>

	<img src="<?php the_field('character-example'); ?>" />

<?php endif; ?>
</div>

<br />

<?php
$post_object = get_field('character-father');

if( $post_object ):
	// override $post
	$post = $post_object;
	setup_postdata( $post );
	?>
    <div>
    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>

<br />
</div>


<div id="edit-Field">
				<?php

 if ( !is_user_logged_in() ){
			  echo 'You are not logged in. <br /> <a href="' . get_permalink(31) .'">Log In &rarr;</a>';

 } else {

 $character_overview = array(
 'field_groups' => array('acf_character-overview'),
 'submit_value' => 'Save'
 );

 acf_form( $character_overview );


 $character_looks = array(
 'field_groups' => array('acf_character-looks'),
 'submit_value' => 'Save'
 );

 acf_form( $character_looks );
 }

 ?>


			<?php endwhile; ?>
</div>


<?php get_footer(); ?>
