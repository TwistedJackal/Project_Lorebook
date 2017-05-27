<?php
/*
Template Name: Race
Template Post Type: race
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

  <a id="create-New" href="/create-race/">NEW</a>

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
        $race = array(
          'field_groups' => array('acf_race'),
          'submit_value' => 'Save'
        );

        acf_form( $race );
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
      <button id="tablink-4" class="tablink">Culture</button>
      <button id="tablink-5" class="tablink">History</button>
			<button id="tablink-6" class="tablink">Notes</button>
			<button id="tablink-7" class="tablink">Gallery</button>
    </div> <!-- End Tabs -->


    <!-- Overview -->
    <div id="tabcontent-1" class="tabcontent">

      <div id="race-name">
        <h2>Name</h2>
        <?php if(get_field('race-name')) { ?>
          <p><?php the_field('race-name'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

      <div id="race-other-names">
        <h2>Other Names</h2>
        <?php if(get_field('race-other-names')) { ?>
          <p><?php the_field('race-other-names'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What other names does this race have?</p><?php } ?>
      </div>

			<div id="race-universe">
				<h2>Universe</h2>
				<?php
				$universe = get_field('race-universe');

				if( $universe ):
					$post = $universe;
					setup_postdata( $post );
					?>
				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>

      <div id="race-description">
        <h2>Description</h2>
        <?php if(get_field('race-description')) { ?>
          <p><?php the_field('race-description'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How would you describe this race?</p><?php } ?>
      </div>

    </div> <!-- End Overview -->


    <!-- Looks -->
    <div id="tabcontent-2" class="tabcontent">

      <div id="race-body-shape">
        <h2>Body Shape</h2>
        <?php if(get_field('race-body-shape')) { ?>
          <p><?php the_field('race-body-shape'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What does the average body shape look like?</p><?php } ?>
      </div>

			<div id="race-skin-colors">
        <h2>Skin Colors</h2>
        <?php if(get_field('race-skin-colors')) { ?>
          <p><?php the_field('race-skin-colors'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What skin color(s) are common for this race?</p><?php } ?>
      </div>

      <div id="race-general-height">
        <h2>General Height</h2>
        <?php if(get_field('race-general-height')) { ?>
          <p><?php the_field('race-general-height'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How tall is this race on average?</p><?php } ?>
      </div>

      <div id="race-general-weight">
        <h2>General Weight</h2>
        <?php if(get_field('race-general-weight')) { ?>
          <p><?php the_field('race-general-weight'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How heavy is the average person of this race?</p><?php } ?>
      </div>

      <div id="race-notable-features">
        <h2>Notable Features</h2>
        <?php if(get_field('race-notable-features')) { ?>
          <p><?php the_field('race-notable-features'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What physical features are most noticeable for this race?</p><?php } ?>
      </div>

      <div id="race-physical-variance">
        <h2>Physical Variance</h2>
        <?php if(get_field('race-physical-variance')) { ?>
          <p><?php the_field('race-physical-variance'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How much variance is there between individuals of this race?</p><?php } ?>
      </div>

      <div id="race-typical-clothing">
        <h2>Typical Clothing</h2>
        <?php if(get_field('race-typical-clothing')) { ?>
          <p><?php the_field('race-typical-clothing'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What kind of clothing is common with the individuals of this race?</p><?php } ?>
      </div>

    </div> <!-- End Looks -->


    <!-- Traits -->
    <div id="tabcontent-3" class="tabcontent">

      <div id="race-strengths">
        <h2>Strengths</h2>
        <?php if(get_field('race-strengths')) { ?>
          <p><?php the_field('race-strengths'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What are the strengths of this race?</p><?php } ?>
      </div>

      <div id="race-weaknesses">
        <h2>Weaknesses</h2>
        <?php if(get_field('race-weaknesses')) { ?>
          <p><?php the_field('race-weaknesses'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What are the weaknesses of this race?</p><?php } ?>
      </div>

    </div> <!-- End Traits -->


		<!-- Culture -->
		<div id="tabcontent-4" class="tabcontent">

      <div id="race-famous-figures">
				<h2>Famous Figures</h2>
				<?php
						$figures = get_field('race-famous-figures');
						?>
						<?php if( $figures ): ?>
							<?php foreach( $figures as $figure ): ?>
								<li>
									<a href="<?php echo get_permalink( $figure->ID ); ?>">
										<?php echo get_the_title( $figure->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

      <div id="race-traditions">
        <h2>Traditions</h2>
        <?php if(get_field('race-traditions')) { ?>
          <p><?php the_field('race-traditions'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What traditions are common with this race?</p><?php } ?>
      </div>

      <div id="race-beliefs">
        <h2>Beliefs</h2>
        <?php if(get_field('race-beliefs')) { ?>
          <p><?php the_field('race-beliefs'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What beliefs are commonly held with this race?</p><?php } ?>
      </div>

      <div id="race-governments">
        <h2>Governments</h2>
        <?php if(get_field('race-governments')) { ?>
          <p><?php the_field('race-governments'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What governments are common with this race?</p><?php } ?>
      </div>

      <div id="race-technologies">
        <h2>Technologies</h2>
        <?php if(get_field('race-technologies')) { ?>
          <p><?php the_field('race-technologies'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What kinds of technologies does this race societies take advantage of?</p><?php } ?>
      </div>

      <div id="race-occupations">
        <h2>Occupations</h2>
        <?php if(get_field('race-occupations')) { ?>
          <p><?php the_field('race-occupations'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What occupations are common with this race?</p><?php } ?>
      </div>

      <div id="race-economics">
        <h2>Economics</h2>
        <?php if(get_field('race-economics')) { ?>
          <p><?php the_field('race-economics'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What does the economic situation look like for this race?</p><?php } ?>
      </div>

      <div id="race-favorite-foods">
        <h2>Favorite Foods</h2>
        <?php if(get_field('race-favorite-foods')) { ?>
          <p><?php the_field('race-favorite-foods'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What are the most common favorite foods of this race?</p><?php } ?>
      </div>

		</div> <!-- End Culture -->


    <!-- History -->
		<div id="tabcontent-5" class="tabcontent">

			<div id="race-notable-events">
				<h2>Notable Events</h2>
				<?php if(get_field('race-notable-events')) { ?>
					<p><?php the_field('race-notable-events'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What events are most important to this race?</p><?php } ?>
			</div>

		</div> <!-- End History -->


		<!-- Notes -->
    <div id="tabcontent-6" class="tabcontent">

      <div id="race-public">
        <h2>Public Notes</h2>
        <?php if(get_field('race-public')) { ?>
          <p><?php the_field('race-public'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

      <div id="race-private">
        <h2>Private Notes</h2>
        <?php if(get_field('race-private')) { ?>
          <p><?php the_field('race-private'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

    </div> <!-- End Notes -->


    <!-- Gallery -->
    <div id="tabcontent-7" class="tabcontent">

      <div id="race-gallery-field">
        <h2>Featured Image</h2>
        <?php if( get_field('race-featured') ): ?>
        	<img src="<?php the_field('race-featured'); ?>" />
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
