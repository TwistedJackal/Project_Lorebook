<?php
/*
Template Name: Creature
Template Post Type: creature
*/

acf_form_head();
get_header(); ?>


<!-- Only Show if Author -->
<?php
global $current_user;
get_currentuserinfo();
if (is_user_logged_in() && $current_user->ID == $post->post_author) {
?>


<div id="lorebook-main">

  <a id="create-New" href="/create-creature/">NEW</a>

  <ul id="lorebook-navigation">
    <li><a href="/universes"><i class="fa-phone"></i>Universes</a></li>
    <li><a href="/locations"><i class="fa-phone"></i>Locations</a></li>
    <li><a href="/characters"><i class="fa-phone"></i>Characters</a></li>
    <li><a href="/items"><i class="fa-phone"></i>Items</a></li>
    <li><a href="/magics"><i class="fa-phone"></i>Magics</a></li>
    <li><a href="/creatures"><i class="fa-phone"></i>Creatures</a></li>
    <li><a href="/races"><i class="fa-phone"></i>Races</a></li>
    <li><a href="/languages"><i class="fa-phone"></i>Languages</a></li>
    <li><a href="/religions"><i class="fa-phone"></i>Religions</a></li>
    <li><a href="/groups"><i class="fa-phone"></i>Groups</a></li>
    <li><a href="/scenes"><i class="fa-phone"></i>Scenes</a></li>
  </ul>

  <div id="lorebook-header">
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ); ?>
    <style>#lorebook-header { background-image: url('<?php echo $thumb['0'];?>'); }</style>
    <h1><?php the_title(); ?></h1>
  </div>


  <!-- ========= EDIT FIELDS ========= -->
  <div id="edit-Fields">

    <button id="cancel-Button">CANCEL</button>

    <?php
      if ( !is_user_logged_in() ){
          echo 'You are not logged in. <br /> <a href="http://lorebook.twistedjackal.com/wp-login.php">Log In &rarr;</a>';
      } else {
        $creature = array(
          'field_groups' => array('acf_creature'),
          'submit_value' => 'Save'
        );

        acf_form( $creature );
      }
    ?>

  </div>
  <!-- ========= END EDIT FIELDS ========= -->


  <!-- ========= DISPLAY FIELDS ========= -->
  <div id="display-Fields">

    <button id="edit-Button">EDIT</button>

    <!-- Tabs -->
    <div class="display-tabs">
      <button id="tablink-1" class="tablink">Overview</button>
      <button id="tablink-2" class="tablink">Looks</button>
      <button id="tablink-3" class="tablink">Traits</button>
      <button id="tablink-4" class="tablink">Habitat</button>
      <button id="tablink-5" class="tablink">Comparisons</button>
			<button id="tablink-6" class="tablink">Notes</button>
			<button id="tablink-7" class="tablink">Gallery</button>
    </div> <!-- End Tabs -->


    <!-- Overview -->
    <div id="tabcontent-1" class="tabcontent">

      <div id="creature-name">
        <h2>Name</h2>
        <?php if(get_field('creature-name')) { ?>
          <p><?php the_field('creature-name'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is the name of this creature?</p><?php } ?>
      </div>

      <div id="creature-type">
        <h2>Type</h2>
        <?php if(get_field('creature-type')) { ?>
          <p><?php the_field('creature-type'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What type of creature is this?</p><?php } ?>
      </div>

			<div id="creature-universe">
				<h2>Universe</h2>
				<?php
				$universe = get_field('creature-universe');

				if( $universe ):
					$post = $universe;
					setup_postdata( $post );
					?>
				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>

      <div id="creature-description">
        <h2>Description</h2>
        <?php if(get_field('creature-description')) { ?>
          <p><?php the_field('creature-description'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How would you describe this creature?</p><?php } ?>
      </div>

    </div> <!-- End Overview -->


    <!-- Looks -->
    <div id="tabcontent-2" class="tabcontent">

      <div id="creature-color">
        <h2>Color</h2>
        <?php if(get_field('creature-color')) { ?>
          <p><?php the_field('creature-color'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What colors does this creature come in?</p><?php } ?>
      </div>

			<div id="creature-shape">
        <h2>Shape</h2>
        <?php if(get_field('creature-shape')) { ?>
          <p><?php the_field('creature-shape'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How would you describe the shape of this creature?</p><?php } ?>
      </div>

      <div id="creature-size">
        <h2>Size</h2>
        <?php if(get_field('creature-size')) { ?>
          <p><?php the_field('creature-size'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How big (or small) is this creature usually?</p><?php } ?>
      </div>

      <div id="creature-notable-features">
        <h2>Notable Features</h2>
        <?php if(get_field('creature-notable-features')) { ?>
          <p><?php the_field('creature-notable-features'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What physical features are most notable for this creature?</p><?php } ?>
      </div>

      <div id="creature-materials">
        <h2>Materials</h2>
        <?php if(get_field('creature-materials')) { ?>
          <p><?php the_field('creature-materials'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What materials (feathers, scales, etc) is this creature made of?</p><?php } ?>
      </div>

    </div> <!-- End Looks -->


    <!-- Traits -->
    <div id="tabcontent-3" class="tabcontent">

      <div id="creature-aggressiveness">
        <h2>Aggressiveness</h2>
        <?php if(get_field('creature-aggressiveness')) { ?>
          <p><?php the_field('creature-aggressiveness'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How aggressive is this creature?</p><?php } ?>
      </div>

      <div id="creature-method-of-attack">
        <h2>Method of Attack</h2>
        <?php if(get_field('creature-method-of-attack')) { ?>
          <p><?php the_field('creature-method-of-attack'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What methods does this creature use to attack?</p><?php } ?>
      </div>

      <div id="creature-method-of-defense">
        <h2>Method of Defense</h2>
        <?php if(get_field('creature-method-of-defense')) { ?>
          <p><?php the_field('creature-method-of-defense'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How does this creature defend itself?</p><?php } ?>
      </div>

      <div id="creature-maximum-speed">
        <h2>Maximum Speed</h2>
        <?php if(get_field('creature-maximum-speed')) { ?>
          <p><?php the_field('creature-maximum-speed'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How fast can this creature move?</p><?php } ?>
      </div>

      <div id="creature-strengths">
				<h2>Strengths</h2>
				<?php if(get_field('creature-strengths')) { ?>
					<p><?php the_field('creature-strengths'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What are the notable strengths of this creature?</p><?php } ?>
			</div>

      <div id="creature-weakness">
				<h2>Weakness</h2>
				<?php if(get_field('creature-weakness')) { ?>
					<p><?php the_field('creature-weakness'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What are the notable weaknesses of this creature?</p><?php } ?>
			</div>

      <div id="creature-sounds">
				<h2>Sounds</h2>
				<?php if(get_field('creature-sounds')) { ?>
					<p><?php the_field('creature-sounds'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What sounds does this creature make?</p><?php } ?>
			</div>

      <div id="creature-spoils">
				<h2>Spoils</h2>
				<?php if(get_field('creature-spoils')) { ?>
					<p><?php the_field('creature-spoils'); ?></p>
				<?php } else { ?>
					<p class="placeholder">When hunted, what spoils does this creature leave behind?</p><?php } ?>
			</div>

    </div> <!-- End Traits -->


		<!-- Habitat -->
		<div id="tabcontent-4" class="tabcontent">

			<div id="creature-preferred-habitat">
				<h2>Preferred Habitat</h2>
				<?php if(get_field('creature-preferred-habitat')) { ?>
					<p><?php the_field('creature-preferred-habitat'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What kind of habitat is best for this creature?</p><?php } ?>
			</div>

      <div id="creature-habitats-select">
				<h2>Habitats</h2>
				<?php
						$habitats = get_field('creature-habitats-select');
						?>
						<?php if( $habitats ): ?>
							<?php foreach( $habitats as $habitat ): ?>
								<li>
									<a href="<?php echo get_permalink( $habitat->ID ); ?>">
										<?php echo get_the_title( $habitat->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

      <div id="creature-food-source">
				<h2>Food Source</h2>
				<?php if(get_field('creature-food-source')) { ?>
					<p><?php the_field('creature-food-source'); ?></p>
				<?php } else { ?>
					<p class="placeholder">Where does this creature find its food?</p><?php } ?>
			</div>

      <div id="creature-migratory-pattern">
				<h2>Migratory Pattern</h2>
				<?php if(get_field('creature-migratory-pattern')) { ?>
					<p><?php the_field('creature-migratory-pattern'); ?></p>
				<?php } else { ?>
					<p class="placeholder">Does this creature have any migratory patterns?</p><?php } ?>
			</div>

      <div id="creature-reproductive-patterns">
				<h2>Reproductive Patterns</h2>
				<?php if(get_field('creature-reproductive-patterns')) { ?>
					<p><?php the_field('creature-reproductive-patterns'); ?></p>
				<?php } else { ?>
					<p class="placeholder">How does this creature reproduce?</p><?php } ?>
			</div>

      <div id="creature-herding-pattern">
				<h2>Herding Pattern</h2>
				<?php if(get_field('creature-herding-pattern')) { ?>
					<p><?php the_field('creature-herding-pattern'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What herd patterns does this creature have?</p><?php } ?>
			</div>

		</div> <!-- End Habitat -->


    <!-- Comparisons -->
		<div id="tabcontent-5" class="tabcontent">

			<div id="creature-similar-creatures">
				<h2>Similar Creatures</h2>
				<?php if(get_field('creature-similar-creatures')) { ?>
					<p><?php the_field('creature-similar-creatures'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What other animals is this creature most like?</p><?php } ?>
			</div>

      <div id="creature-symbolisms">
				<h2>Symbolisms</h2>
				<?php if(get_field('creature-symbolisms')) { ?>
					<p><?php the_field('creature-symbolisms'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What symbolisms does this creature hold in your world?</p><?php } ?>
			</div>

      <div id="creature-related-creatures">
				<h2>Related Creatures</h2>
				<?php
						$related_creatures = get_field('creature-related-creatures');
						?>
						<?php if( $related_creatures ): ?>
							<?php foreach( $related_creatures as $related_creature ): ?>
								<li>
									<a href="<?php echo get_permalink( $related_creature->ID ); ?>">
										<?php echo get_the_title( $related_creature->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

		</div> <!-- End Comparisons -->


		<!-- Notes -->
    <div id="tabcontent-6" class="tabcontent">

      <div id="creature-public">
        <h2>Public Notes</h2>
        <?php if(get_field('creature-public')) { ?>
          <p><?php the_field('creature-public'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

      <div id="creature-private">
        <h2>Private Notes</h2>
        <?php if(get_field('creature-private')) { ?>
          <p><?php the_field('creature-private'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

    </div> <!-- End Notes -->


    <!-- Gallery -->
    <div id="tabcontent-7" class="tabcontent">

      <div id="creature-gallery-field">
        <h2>Featured Image</h2>
        <?php if( get_field('creature-featured') ): ?>
        	<img src="<?php the_field('creature-featured'); ?>" />
        <?php endif; ?>
      </div>

    </div> <!-- End Notes -->

  </div>
  <!-- ========= END DISPLAY FIELDS ========= -->

</div>


<?php // If Not Post Author
 } else { ?>
	 <h2>Sorry, you do not have permission to view this.</h2>
 <?php } ?>


<?php get_footer(); ?>
