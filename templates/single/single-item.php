<?php
/*
Template Name: Item
Template Post Type: item
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

  <a id="create-New" href="/create-item/">NEW</a>

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
        $item = array(
          'field_groups' => array('acf_item'),
          'submit_value' => 'Save'
        );

        acf_form( $item );
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
      <button id="tablink-3" class="tablink">History</button>
      <button id="tablink-4" class="tablink">Abilities</button>
			<button id="tablink-5" class="tablink">Notes</button>
			<button id="tablink-6" class="tablink">Gallery</button>
    </div> <!-- End Tabs -->


    <!-- Overview -->
    <div id="tabcontent-1" class="tabcontent">

      <div id="item-name">
        <h2>Name</h2>
        <?php if(get_field('item-name')) { ?>
          <p><?php the_field('item-name'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is the name of this item?</p><?php } ?>
      </div>

      <div id="item-type">
        <h2>Type</h2>
        <?php if(get_field('item-type')) { ?>
          <p><?php the_field('item-type'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What type of item is this?</p><?php } ?>
      </div>

			<div id="item-universe">
				<h2>Universe</h2>
				<?php
				$universe = get_field('item-universe');

				if( $universe ):
					$post = $universe;
					setup_postdata( $post );
					?>
				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>

      <div id="item-description">
        <h2>Description</h2>
        <?php if(get_field('item-description')) { ?>
          <p><?php the_field('item-description'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Describe this item.</p><?php } ?>
      </div>

    </div> <!-- End Overview -->


    <!-- Looks -->
    <div id="tabcontent-2" class="tabcontent">

      <div id="item-materials">
        <h2>Materials</h2>
        <?php if(get_field('item-materials')) { ?>
          <p><?php the_field('item-materials'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this item made out of?</p><?php } ?>
      </div>

			<div id="item-weight">
        <h2>Weight</h2>
        <?php if(get_field('item-weight')) { ?>
          <p><?php the_field('item-weight'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How much does this item weigh?</p><?php } ?>
      </div>

    </div> <!-- End Looks -->


    <!-- History -->
    <div id="tabcontent-3" class="tabcontent">

      <div id="item-original-owners">
				<h2>Original Owners</h2>
				<?php
						$original_owners = get_field('item-original-owners');
						?>
						<?php if( $original_owners ): ?>
							<?php foreach( $original_owners as $original_owner ): ?>
								<li>
									<a href="<?php echo get_permalink( $original_owner->ID ); ?>">
										<?php echo get_the_title( $original_owner->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

			<div id="item-past-owners">
				<h2>Past Owners</h2>
				<?php
						$past_owners = get_field('item-past-owners');
						?>
						<?php if( $past_owners ): ?>
							<?php foreach( $past_owners as $past_owner ): ?>
								<li>
									<a href="<?php echo get_permalink( $past_owner->ID ); ?>">
										<?php echo get_the_title( $past_owner->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

			<div id="item-current-owners">
				<h2>Current Owners</h2>
				<?php
						$current_owners = get_field('item-current-owners');
						?>
						<?php if( $current_owners ): ?>
							<?php foreach( $current_owners as $current_owner ): ?>
								<li>
									<a href="<?php echo get_permalink( $current_owner->ID ); ?>">
										<?php echo get_the_title( $current_owner->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

      <div id="item-makers">
				<h2>Current Owners</h2>
				<?php
						$makers = get_field('item-makers');
						?>
						<?php if( $makers ): ?>
							<?php foreach( $makers as $maker ): ?>
								<li>
									<a href="<?php echo get_permalink( $maker->ID ); ?>">
										<?php echo get_the_title( $maker->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

      <div id="item-creation-date">
				<h2>Creation Date</h2>
				<?php if(get_field('item-creation-date')) { ?>
					<p><?php the_field('item-creation-date'); ?></p>
				<?php } else { ?>
					<p class="placeholder">When was this item created?</p><?php } ?>
			</div>

    </div> <!-- End History -->


		<!-- Abilities -->
		<div id="tabcontent-4" class="tabcontent">

			<div id="item-magic">
				<h2>Magic</h2>
				<?php if(get_field('item-magic')) { ?>
					<p><?php the_field('item-magic'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What kind of magic does this item possess?</p><?php } ?>
			</div>

		</div> <!-- End Abilities -->


		<!-- Notes -->
    <div id="tabcontent-5" class="tabcontent">

      <div id="item-public">
        <h2>Public Notes</h2>
        <?php if(get_field('item-public')) { ?>
          <p><?php the_field('item-public'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

      <div id="item-private">
        <h2>Private Notes</h2>
        <?php if(get_field('item-private')) { ?>
          <p><?php the_field('item-private'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

    </div> <!-- End Notes -->


    <!-- Gallery -->
    <div id="tabcontent-6" class="tabcontent">

      <div id="item-gallery-field">
        <h2>Featured Image</h2>
        <?php if( get_field('item-featured') ): ?>
        	<img src="<?php the_field('item-featured'); ?>" />
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
