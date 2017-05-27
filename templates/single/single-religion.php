<?php
/*
Template Name: Religion
Template Post Type: religion
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

  <a id="create-New" href="/create-religion/">NEW</a>

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
        $religion = array(
          'field_groups' => array('acf_religion'),
          'submit_value' => 'Save'
        );

        acf_form( $religion );
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
      <button id="tablink-2" class="tablink">History</button>
      <button id="tablink-3" class="tablink">Beliefs</button>
      <button id="tablink-4" class="tablink">Traditions</button>
      <button id="tablink-5" class="tablink">Spread</button>
			<button id="tablink-6" class="tablink">Notes</button>
			<button id="tablink-7" class="tablink">Gallery</button>
    </div> <!-- End Tabs -->


    <!-- Overview -->
    <div id="tabcontent-1" class="tabcontent">

      <div id="religion-name">
        <h2>Name</h2>
        <?php if(get_field('religion-name')) { ?>
          <p><?php the_field('religion-name'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is the name of this religion?</p><?php } ?>
      </div>

      <div id="religion-other-names">
        <h2>Other Names</h2>
        <?php if(get_field('religion-other-names')) { ?>
          <p><?php the_field('religion-other-names'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What other names is the religion known by?</p><?php } ?>
      </div>

			<div id="religion-universe">
				<h2>Universe</h2>
				<?php
				$universe = get_field('religion-universe');

				if( $universe ):
					$post = $universe;
					setup_postdata( $post );
					?>
				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>

      <div id="religion-description">
        <h2>Description</h2>
        <?php if(get_field('religion-description')) { ?>
          <p><?php the_field('religion-description'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How is this religion usually described?</p><?php } ?>
      </div>

    </div> <!-- End Overview -->


    <!-- History -->
    <div id="tabcontent-2" class="tabcontent">

      <div id="religion-origin-story">
        <h2>Origin Story</h2>
        <?php if(get_field('religion-origin-story')) { ?>
          <p><?php the_field('religion-origin-story'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How did this religion first come into existence?</p><?php } ?>
      </div>

      <div id="religion-notable-figures">
				<h2>Notable Figures</h2>
				<?php
						$figures = get_field('religion-notable-figures');
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

      <div id="religion-artifacts">
				<h2>Artifacts</h2>
				<?php
						$artifacts = get_field('religion-artifacts');
						?>
						<?php if( $artifacts ): ?>
							<?php foreach( $artifacts as $artifact ): ?>
								<li>
									<a href="<?php echo get_permalink( $artifact->ID ); ?>">
										<?php echo get_the_title( $artifact->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

    </div> <!-- End History -->


    <!-- Beliefs -->
    <div id="tabcontent-3" class="tabcontent">

      <div id="religion-deities">
				<h2>Deities</h2>
				<?php
						$deities = get_field('religion-deities');
						?>
						<?php if( $deities ): ?>
							<?php foreach( $deities as $deity ): ?>
								<li>
									<a href="<?php echo get_permalink( $deity->ID ); ?>">
										<?php echo get_the_title( $deity->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

      <div id="religion-teachings">
        <h2>Teachings</h2>
        <?php if(get_field('religion-teachings')) { ?>
          <p><?php the_field('religion-teachings'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What values does this religion teach?</p><?php } ?>
      </div>

      <div id="religion-prophecies">
        <h2>Prophecies</h2>
        <?php if(get_field('religion-prophecies')) { ?>
          <p><?php the_field('religion-prophecies'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What prophecies does this religion teach?</p><?php } ?>
      </div>

      <div id="religion-places-of-worship">
        <h2>Places of Worship</h2>
        <?php if(get_field('religion-places-of-worship')) { ?>
          <p><?php the_field('religion-places-of-worship'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Where does this religion worship happen?</p><?php } ?>
      </div>

      <div id="religion-worship-services">
        <h2>Worship Services</h2>
        <?php if(get_field('religion-worship-services')) { ?>
          <p><?php the_field('religion-worship-services'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What kind of worship services are common with this religion?</p><?php } ?>
      </div>

      <div id="religion-obligations">
        <h2>Obligations</h2>
        <?php if(get_field('religion-obligations')) { ?>
          <p><?php the_field('religion-obligations'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What kind of obligations are required of those who practice this religion?</p><?php } ?>
      </div>

      <div id="religion-vision-of-paradise">
        <h2>Vision of Paradise</h2>
        <?php if(get_field('religion-vision-of-paradise')) { ?>
          <p><?php the_field('religion-vision-of-paradise'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What does this religion's vision of paradise look like?</p><?php } ?>
      </div>

    </div> <!-- End Beliefs -->


		<!-- Traditions -->
		<div id="tabcontent-4" class="tabcontent">

      <div id="religion-initiation-process">
        <h2>Initiation Process</h2>
        <?php if(get_field('religion-initiation-process')) { ?>
          <p><?php the_field('religion-initiation-process'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What does this religions initiation process entail?</p><?php } ?>
      </div>

      <div id="religion-rituals">
        <h2>Rituals</h2>
        <?php if(get_field('religion-rituals')) { ?>
          <p><?php the_field('religion-rituals'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What rituals are common with this religion?</p><?php } ?>
      </div>

      <div id="religion-holidays">
        <h2>Holidays</h2>
        <?php if(get_field('religion-holidays')) { ?>
          <p><?php the_field('religion-holidays'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What are the religious holidays?</p><?php } ?>
      </div>

		</div> <!-- End Traditions -->


    <!-- Spread -->
		<div id="tabcontent-5" class="tabcontent">

      <div id="religion-locations">
				<h2>Locations</h2>
				<?php
						$locations = get_field('religion-locations');
						?>
						<?php if( $locations ): ?>
							<?php foreach( $locations as $location ): ?>
								<li>
									<a href="<?php echo get_permalink( $location->ID ); ?>">
										<?php echo get_the_title( $location->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

      <div id="religion-races">
				<h2>Races</h2>
				<?php
						$races = get_field('religion-races');
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

		</div> <!-- End Spread -->


		<!-- Notes -->
    <div id="tabcontent-6" class="tabcontent">

      <div id="religion-public">
        <h2>Public Notes</h2>
        <?php if(get_field('religion-public')) { ?>
          <p><?php the_field('religion-public'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

      <div id="religion-private">
        <h2>Private Notes</h2>
        <?php if(get_field('religion-private')) { ?>
          <p><?php the_field('religion-private'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

    </div> <!-- End Notes -->


    <!-- Gallery -->
    <div id="tabcontent-7" class="tabcontent">

      <div id="religion-gallery-field">
        <h2>Featured Image</h2>
        <?php if( get_field('religion-featured') ): ?>
        	<img src="<?php the_field('religion-featured'); ?>" />
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
