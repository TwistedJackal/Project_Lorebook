<?php
/*
Template Name: character
Template Post Type: character
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

  <a id="create-New" href="/create-character/">NEW</a>

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
        $character = array(
          'field_groups' => array('acf_character'),
          'submit_value' => 'Save'
        );

        acf_form( $character );
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
      <button id="tablink-3" class="tablink">Nature</button>
      <button id="tablink-4" class="tablink">Social</button>
      <button id="tablink-5" class="tablink">History</button>
      <button id="tablink-6" class="tablink">Family</button>
			<button id="tablink-7" class="tablink">Notes</button>
			<button id="tablink-8" class="tablink">Gallery</button>
    </div> <!-- End Tabs -->


    <!-- Overview -->
    <div id="tabcontent-1" class="tabcontent">

      <div id="character-name">
        <h2>Name</h2>
        <?php if(get_field('character-name')) { ?>
          <p><?php the_field('character-name'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this character's full name?</p><?php } ?>
      </div>

      <div id="character-role">
        <h2>Type</h2>
        <?php if(get_field('character-role')) { ?>
          <p><?php the_field('character-role'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this character's role in your story?</p><?php } ?>
      </div>

      <div id="character-other-names">
        <h2>Type</h2>
        <?php if(get_field('character-other-names')) { ?>
          <p><?php the_field('character-other-names'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What other aliases does this character go by?</p><?php } ?>
      </div>

      <div id="character-gender">
        <h2>Type</h2>
        <?php if(get_field('character-gender')) { ?>
          <p><?php the_field('character-gender'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this character's gender?</p><?php } ?>
      </div>

      <div id="character-age">
        <h2>Type</h2>
        <?php if(get_field('character-age')) { ?>
          <p><?php the_field('character-age'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How old is this character?</p><?php } ?>
      </div>

			<div id="character-universe">
				<h2>Universe</h2>
				<?php
				$universe = get_field('character-universe');

				if( $universe ):
					$post = $universe;
					setup_postdata( $post );
					?>
				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>

    </div> <!-- End Overview -->


    <!-- Looks -->
    <div id="tabcontent-2" class="tabcontent">

      <div id="character-weight">
        <h2>Weight</h2>
        <?php if(get_field('character-weight')) { ?>
          <p><?php the_field('character-weight'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How much does this character weigh?</p><?php } ?>
      </div>

			<div id="character-height">
        <h2>Height</h2>
        <?php if(get_field('character-height')) { ?>
          <p><?php the_field('character-height'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How tall is this character?</p><?php } ?>
      </div>

			<div id="character-hair-color">
        <h2>Hair Color</h2>
        <?php if(get_field('character-hair-color')) { ?>
          <p><?php the_field('character-hair-color'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What color is this character's hair?</p><?php } ?>
      </div>

			<div id="character-hair-style">
        <h2>Hair Style</h2>
        <?php if(get_field('character-hair-style')) { ?>
          <p><?php the_field('character-hair-style'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How does this character style their hair?</p><?php } ?>
      </div>

			<div id="character-facial-hair">
        <h2>Facial Hair</h2>
        <?php if(get_field('character-facial-hair')) { ?>
          <p><?php the_field('character-facial-hair'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What facial hair does this character have?</p><?php } ?>
      </div>

			<div id="character-eye-color">
        <h2>Eye Color</h2>
        <?php if(get_field('character-eye-color')) { ?>
          <p><?php the_field('character-eye-color'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this character's eye color?</p><?php } ?>
      </div>

      <div id="character-race">
        <h2>Race</h2>
        <?php if(get_field('character-race')) { ?>
          <p><?php the_field('character-race'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this character's race?</p><?php } ?>
      </div>

      <div id="character-skin-tone">
        <h2>Skin Tone</h2>
        <?php if(get_field('character-skin-tone')) { ?>
          <p><?php the_field('character-skin-tone'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What skin tone does this character have?</p><?php } ?>
      </div>

      <div id="character-body-type">
        <h2>Body Type</h2>
        <?php if(get_field('character-body-type')) { ?>
          <p><?php the_field('character-body-type'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this character's body type?</p><?php } ?>
      </div>

			<div id="character-races-select">
				<h2>Races</h2>
				<?php
						$races = get_field('character-races-select');
						?>
						<?php if( $races ): ?>
							<?php foreach( $races as $race ): ?>
								<li>
									<a href="<?php echo get_permalink( $race->ID ); ?>">
										<?php echo get_the_title( $race->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

    </div> <!-- End Looks -->


    <!-- Nature -->
    <div id="tabcontent-3" class="tabcontent">

      <div id="character-mannerisms">
        <h2>Mannerisms</h2>
        <?php if(get_field('character-mannerisms')) { ?>
          <p><?php the_field('character-mannerisms'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What mannerisms does this character have?</p><?php } ?>
      </div>

      <div id="character-motivations">
        <h2>Motivations</h2>
        <?php if(get_field('character-motivations')) { ?>
          <p><?php the_field('character-motivations'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What motivates this character most?</p><?php } ?>
      </div>

      <div id="character-flaws">
        <h2>Flaws</h2>
        <?php if(get_field('character-flaws')) { ?>
          <p><?php the_field('character-flaws'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What flaws does this character have?</p><?php } ?>
      </div>

      <div id="character-prejudices">
        <h2>Prejudices</h2>
        <?php if(get_field('character-prejudices')) { ?>
          <p><?php the_field('character-prejudices'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What prejudices does this character have?</p><?php } ?>
      </div>

      <div id="character-talents">
        <h2>Talents</h2>
        <?php if(get_field('character-talents')) { ?>
          <p><?php the_field('character-talents'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What talents does this character have?</p><?php } ?>
      </div>

      <div id="character-hobbies">
        <h2>Hobbies</h2>
        <?php if(get_field('character-hobbies')) { ?>
          <p><?php the_field('character-hobbies'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What hobbies does this character have?</p><?php } ?>
      </div>

      <div id="character-personality-type">
        <h2>Personality Type</h2>
        <?php if(get_field('character-personality-type')) { ?>
          <p><?php the_field('character-personality-type'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you want!</p><?php } ?>
      </div>

    </div> <!-- End Nature -->


		<!-- Social -->
		<div id="tabcontent-4" class="tabcontent">

      <div id="character-spoken-languages">
				<h2>Spoken Languages</h2>
				<?php
						$languages = get_field('character-spoken-languages');
						?>
						<?php if( $languages ): ?>
							<?php foreach( $languages as $language ): ?>
								<li>
									<a href="<?php echo get_permalink( $language->ID ); ?>">
										<?php echo get_the_title( $language->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

      <div id="character-best-friends">
				<h2>Best Friends</h2>
				<?php
						$friends = get_field('character-best-friends');
						?>
						<?php if( $friends ): ?>
							<?php foreach( $friends as $friend ): ?>
								<li>
									<a href="<?php echo get_permalink( $friend->ID ); ?>">
										<?php echo get_the_title( $friend->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

      <div id="character-archenemies">
				<h2>Archenemies</h2>
				<?php
						$archenemies = get_field('character-archenemies');
						?>
						<?php if( $archenemies ): ?>
							<?php foreach( $archenemies as $archenemy ): ?>
								<li>
									<a href="<?php echo get_permalink( $archenemy->ID ); ?>">
										<?php echo get_the_title( $archenemy->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

      <div id="character-religion">
				<h2>Religion</h2>
				<?php
				$religion = get_field('character-religion');

				if( $religion ):
					$post = $religion;
					setup_postdata( $post );
					?>
				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>

      <div id="character-politics">
        <h2>Politics</h2>
        <?php if(get_field('character-politics')) { ?>
          <p><?php the_field('character-politics'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What politics does this character have?</p><?php } ?>
      </div>

      <div id="character-occupation">
        <h2>Occupation</h2>
        <?php if(get_field('character-occupation')) { ?>
          <p><?php the_field('character-occupation'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this character's occupation?</p><?php } ?>
      </div>

      <div id="character-color">
        <h2>Color</h2>
        <?php if(get_field('character-color')) { ?>
          <p><?php the_field('character-color'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this character's favorite color?</p><?php } ?>
      </div>

      <div id="character-food">
        <h2>Favorite Food</h2>
        <?php if(get_field('character-food')) { ?>
          <p><?php the_field('character-food'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this character's favorite food?</p><?php } ?>
      </div>

      <div id="character-possession">
        <h2>Possesion</h2>
        <?php if(get_field('character-possession')) { ?>
          <p><?php the_field('character-possession'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this character's favorite possession?</p><?php } ?>
      </div>

      <div id="character-weapon">
        <h2>Weapon</h2>
        <?php if(get_field('character-weapon')) { ?>
          <p><?php the_field('character-weapon'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this character's favorite weapon?</p><?php } ?>
      </div>

      <div id="character-animal">
        <h2>Animal</h2>
        <?php if(get_field('character-animal')) { ?>
          <p><?php the_field('character-animal'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this character's favorite animal?</p><?php } ?>
      </div>

		</div> <!-- End Social -->


		<!-- History -->
    <div id="tabcontent-5" class="tabcontent">

      <div id="character-birthday">
        <h2>Birthday</h2>
        <?php if(get_field('character-birthday')) { ?>
          <p><?php the_field('character-birthday'); ?></p>
        <?php } else { ?>
          <p class="placeholder">When is this character's birthday?</p><?php } ?>
      </div>

      <div id="character-birthplace">
				<h2>Birthplace</h2>
				<?php
				$birthplace = get_field('character-birthplace');

				if( $birthplace ):
					$post = $birthplace;
					setup_postdata( $post );
					?>
				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>

      <div id="character-education">
        <h2>Education</h2>
        <?php if(get_field('character-education')) { ?>
          <p><?php the_field('character-education'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this character's level of education?</p><?php } ?>
      </div>

			<div id="character-background">
        <h2>Background</h2>
        <?php if(get_field('character-background')) { ?>
          <p><?php the_field('character-background'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this character's background?</p><?php } ?>
      </div>

    </div> <!-- End History -->


    <!-- Family -->
    <div id="tabcontent-6" class="tabcontent">

      <div id="character-mothers">
				<h2>Mothers</h2>
				<?php
						$mothers = get_field('character-mothers');
						?>
						<?php if( $mothers ): ?>
							<?php foreach( $mothers as $mother ): ?>
								<li>
									<a href="<?php echo get_permalink( $mother->ID ); ?>">
										<?php echo get_the_title( $mother->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

      <div id="character-fathers">
				<h2>Fathers</h2>
				<?php
						$fathers = get_field('character-fathers');
						?>
						<?php if( $fathers ): ?>
							<?php foreach( $fathers as $father ): ?>
								<li>
									<a href="<?php echo get_permalink( $father->ID ); ?>">
										<?php echo get_the_title( $father->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

      <div id="character-spouses">
				<h2>Spouses</h2>
				<?php
						$spouses = get_field('character-spouses');
						?>
						<?php if( $spouses ): ?>
							<?php foreach( $spouses as $spouse ): ?>
								<li>
									<a href="<?php echo get_permalink( $spouse->ID ); ?>">
										<?php echo get_the_title( $spouse->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

      <div id="character-siblings">
				<h2>Siblings</h2>
				<?php
						$siblings = get_field('character-siblings');
						?>
						<?php if( $siblings ): ?>
							<?php foreach( $siblings as $sibling ): ?>
								<li>
									<a href="<?php echo get_permalink( $sibling->ID ); ?>">
										<?php echo get_the_title( $sibling->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

      <div id="character-children">
				<h2>Children</h2>
				<?php
						$children = get_field('character-children');
						?>
						<?php if( $children ): ?>
							<?php foreach( $children as $child ): ?>
								<li>
									<a href="<?php echo get_permalink( $child->ID ); ?>">
										<?php echo get_the_title( $child->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

    </div> <!-- End Family -->


		<!-- Notes -->
    <div id="tabcontent-7" class="tabcontent">

      <div id="character-public">
        <h2>Public Notes</h2>
        <?php if(get_field('character-public')) { ?>
          <p><?php the_field('character-public'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

      <div id="character-private">
        <h2>Private Notes</h2>
        <?php if(get_field('character-private')) { ?>
          <p><?php the_field('character-private'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

    </div> <!-- End Notes -->


    <!-- Gallery -->
    <div id="tabcontent-8" class="tabcontent">

      <div id="character-gallery-field">
        <h2>Featured Image</h2>
        <?php if( get_field('character-featured') ): ?>
        	<img src="<?php the_field('character-featured'); ?>" />
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
