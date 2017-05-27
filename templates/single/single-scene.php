<?php
/*
Template Name: Scene
Template Post Type: scene
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

  <a id="create-New" href="/create-scene/">NEW</a>

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
        $scene = array(
          'field_groups' => array('acf_scene'),
          'submit_value' => 'Save'
        );

        acf_form( $scene );
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
      <button id="tablink-2" class="tablink">Members</button>
      <button id="tablink-3" class="tablink">Action</button>
      <button id="tablink-4" class="tablink">Notes</button>
      <button id="tablink-5" class="tablink">Gallery</button>
    </div> <!-- End Tabs -->


    <!-- Overview -->
    <div id="tabcontent-1" class="tabcontent">

      <div id="scene-name">
        <h2>Name</h2>
        <?php if(get_field('scene-name')) { ?>
          <p><?php the_field('scene-name'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is the name of this scene?</p><?php } ?>
      </div>

      <div id="scene-summary">
        <h2>Summary</h2>
        <?php if(get_field('scene-summary')) { ?>
          <p><?php the_field('scene-summary'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

    </div> <!-- End Overview -->


    <!-- Members -->
    <div id="tabcontent-2" class="tabcontent">

      <div id="scene-characters">
				<h2>Characters</h2>
				<?php
						$characters = get_field('scene-characters');
						?>
						<?php if( $characters ): ?>
							<?php foreach( $characters as $character ): ?>
								<li>
									<a href="<?php echo get_permalink( $character->ID ); ?>">
										<?php echo get_the_title( $character->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

      <div id="scene-locations">
				<h2>Locations</h2>
				<?php
						$locations = get_field('scene-locations');
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

      <div id="scene-items">
				<h2>Items</h2>
				<?php
						$items = get_field('scene-items');
						?>
						<?php if( $items ): ?>
							<?php foreach( $items as $item ): ?>
								<li>
									<a href="<?php echo get_permalink( $item->ID ); ?>">
										<?php echo get_the_title( $item->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

    </div> <!-- End Members -->


    <!-- Action -->
    <div id="tabcontent-3" class="tabcontent">

      <div id="scene-causation">
        <h2>Causation</h2>
        <?php if(get_field('scene-causation')) { ?>
          <p><?php the_field('scene-causation'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What caused this to happen?</p><?php } ?>
      </div>

      <div id="scene-description">
        <h2>Description</h2>
        <?php if(get_field('scene-description')) { ?>
          <p><?php the_field('scene-description'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

      <div id="scene-results">
        <h2>Results</h2>
        <?php if(get_field('scene-results')) { ?>
          <p><?php the_field('scene-results'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you want!</p><?php } ?>
      </div>

    </div> <!-- End Action -->


    <!-- Notes -->
    <div id="tabcontent-4" class="tabcontent">

      <div id="scene-public">
        <h2>Public Notes</h2>
        <?php if(get_field('scene-public')) { ?>
          <p><?php the_field('scene-public'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

      <div id="scene-private">
        <h2>Private Notes</h2>
        <?php if(get_field('scene-private')) { ?>
          <p><?php the_field('scene-private'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

    </div> <!-- End Notes -->


    <!-- Gallery -->
    <div id="tabcontent-5" class="tabcontent">

      <div id="scene-gallery-field">
        <h2>Featured Image</h2>
        <?php if( get_field('scene-featured') ): ?>
        	<img src="<?php the_field('scene-featured'); ?>" />
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
