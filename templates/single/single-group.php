<?php
/*
Template Name: group
Template Post Type: group
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

  <a id="create-New" href="/create-group/">NEW</a>

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
        $group = array(
          'field_groups' => array('acf_group'),
          'submit_value' => 'Save'
        );

        acf_form( $group );
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
      <button id="tablink-2" class="tablink">Hierarchy</button>
      <button id="tablink-3" class="tablink">Locations</button>
      <button id="tablink-4" class="tablink">Purpose</button>
      <button id="tablink-5" class="tablink">Politics</button>
			<button id="tablink-6" class="tablink">Inventory</button>
      <button id="tablink-7" class="tablink">Notes</button>
			<button id="tablink-8" class="tablink">Gallery</button>
    </div> <!-- End Tabs -->


    <!-- Overview -->
    <div id="tabcontent-1" class="tabcontent">

      <div id="group-name">
        <h2>Name</h2>
        <?php if(get_field('group-name')) { ?>
          <p><?php the_field('group-name'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is the name of this group?</p><?php } ?>
      </div>

      <div id="group-description">
        <h2>Description</h2>
        <?php if(get_field('group-description')) { ?>
          <p><?php the_field('group-description'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How would you describe this group?</p><?php } ?>
      </div>

      <div id="group-other-names">
        <h2>Other Names</h2>
        <?php if(get_field('group-other-names')) { ?>
          <p><?php the_field('group-other-names'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What other names is this group known by?</p><?php } ?>
      </div>

			<div id="group-universe">
				<h2>Universe</h2>
				<?php
				$universe = get_field('group-universe');

				if( $universe ):
					$post = $universe;
					setup_postdata( $post );
					?>
				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>

    </div> <!-- End Overview -->


    <!-- Heirarchy -->
    <div id="tabcontent-2" class="tabcontent">

      <div id="group-organizational-structure">
        <h2>Organizational Structure</h2>
        <?php if(get_field('group-organizational-structure')) { ?>
          <p><?php the_field('group-organizational-structure'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you want!</p><?php } ?>
      </div>

      <div id="group-leaders">
        <h2>Leaders</h2>
        <?php
						$leaders = get_field('group-leaders');
						?>
						<?php if( $leaders ): ?>
							<?php foreach( $leaders as $leader ): ?>
								<li>
									<a href="<?php echo get_permalink( $leader->ID ); ?>">
										<?php echo get_the_title( $leader->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

      <div id="group-members">
        <h2>Members</h2>
        <?php
            $members = get_field('group-members');
            ?>
            <?php if( $members ): ?>
              <?php foreach( $members as $member ): ?>
                <li>
                  <a href="<?php echo get_permalink( $member->ID ); ?>">
                    <?php echo get_the_title( $member->ID ); ?>
                  </a>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
      </div>

      <div id="group-supergroups">
        <h2>Members</h2>
        <?php
            $supergroups = get_field('group-supergroups');
            ?>
            <?php if( $supergroups ): ?>
              <?php foreach( $supergroups as $supergroup ): ?>
                <li>
                  <a href="<?php echo get_permalink( $supergroup->ID ); ?>">
                    <?php echo get_the_title( $supergroup->ID ); ?>
                  </a>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
      </div>

      <div id="group-subgroups">
        <h2>Members</h2>
        <?php
            $subgroups = get_field('group-subgroups');
            ?>
            <?php if( $subgroups ): ?>
              <?php foreach( $subgroups as $subgroup ): ?>
                <li>
                  <a href="<?php echo get_permalink( $subgroup->ID ); ?>">
                    <?php echo get_the_title( $subgroup->ID ); ?>
                  </a>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
      </div>

      <div id="group-sistergroups">
        <h2>Members</h2>
        <?php
            $sistergroups = get_field('group-sistergroups');
            ?>
            <?php if( $sistergroups ): ?>
              <?php foreach( $sistergroups as $sistergroup ): ?>
                <li>
                  <a href="<?php echo get_permalink( $sistergroup->ID ); ?>">
                    <?php echo get_the_title( $sistergroup->ID ); ?>
                  </a>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
      </div>

    </div> <!-- End Heirarchy -->


    <!-- Locations -->
    <div id="tabcontent-3" class="tabcontent">

      <div id="group-locations">
        <h2>Members</h2>
        <?php
            $locations = get_field('group-locations');
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

      <div id="group-headquarters">
      				<h2>Headquarters</h2>
      				<?php
      				$universe = get_field('group-headquarters');

      				if( $universe ):
      					$post = $universe;
      					setup_postdata( $post );
      					?>
      				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      				<?php endif; ?>
      			</div>

      <div id="group-offices">
              <h2>Members</h2>
              <?php
                  $offices = get_field('group-offices');
                  ?>
                  <?php if( $offices ): ?>
                    <?php foreach( $offices as $office ): ?>
                      <li>
                        <a href="<?php echo get_permalink( $office->ID ); ?>">
                          <?php echo get_the_title( $office->ID ); ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  <?php endif; ?>
      </div>

    </div> <!-- End Locations -->


		<!-- Purpose -->
		<div id="tabcontent-4" class="tabcontent">

			<div id="group-motivations">
				<h2>Motivations</h2>
				<?php if(get_field('group-motivations')) { ?>
					<p><?php the_field('group-motivations'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What motivates this group?</p><?php } ?>
			</div>

      <div id="group-goals">
				<h2>Goals</h2>
				<?php if(get_field('group-goals')) { ?>
					<p><?php the_field('group-goals'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What is the primary goal of this group?</p><?php } ?>
			</div>

      <div id="group-obstacles">
        <h2>Obstacles</h2>
        <?php if(get_field('group-obstacles')) { ?>
          <p><?php the_field('group-obstacles'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What obstacles stand in the way of this group?</p><?php } ?>
      </div>

      <div id="group-obstacles">
        <h2>Risks</h2>
        <?php if(get_field('group-risks')) { ?>
          <p><?php the_field('group-risks'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What risks are on the line for this group?</p><?php } ?>
      </div>

		</div> <!-- End Purpose -->


		<!-- Politics -->
    <div id="tabcontent-5" class="tabcontent">

      <div id="group-allies">
              <h2>Allies</h2>
              <?php
                  $allies = get_field('group-allies');
                  ?>
                  <?php if( $allies ): ?>
                    <?php foreach( $allies as $ally ): ?>
                      <li>
                        <a href="<?php echo get_permalink( $ally->ID ); ?>">
                          <?php echo get_the_title( $ally->ID ); ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  <?php endif; ?>
      </div>

      <div id="group-enemies">
              <h2>Enemies</h2>
              <?php
                  $enemies = get_field('group-enemies');
                  ?>
                  <?php if( $enemies ): ?>
                    <?php foreach( $enemies as $enemy ): ?>
                      <li>
                        <a href="<?php echo get_permalink( $enemy->ID ); ?>">
                          <?php echo get_the_title( $enemy->ID ); ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  <?php endif; ?>
      </div>

      <div id="group-rivals">
              <h2>Rivals</h2>
              <?php
                  $rivals = get_field('group-rivals');
                  ?>
                  <?php if( $rivals ): ?>
                    <?php foreach( $rivals as $rival ): ?>
                      <li>
                        <a href="<?php echo get_permalink( $rival->ID ); ?>">
                          <?php echo get_the_title( $rival->ID ); ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  <?php endif; ?>
      </div>

      <div id="group-clients">
              <h2>Clients</h2>
              <?php
                  $clients = get_field('group-clients');
                  ?>
                  <?php if( $clients ): ?>
                    <?php foreach( $clients as $client ): ?>
                      <li>
                        <a href="<?php echo get_permalink( $client->ID ); ?>">
                          <?php echo get_the_title( $client->ID ); ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  <?php endif; ?>
      </div>

    </div> <!-- End Politics -->

    <!-- Inventory -->
    <div id="tabcontent-6" class="tabcontent">

      <div id="group-inventory">
        <h2>Inventory</h2>
        <?php if(get_field('group-inventory')) { ?>
          <p><?php the_field('group-inventory'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What kinds of items does this group keep in inventory?</p><?php } ?>
      </div>

      <div id="group-equipments">
              <h2>Equipment</h2>
              <?php
                  $equipments = get_field('group-equipments');
                  ?>
                  <?php if( $equipments ): ?>
                    <?php foreach( $equipments as $equipment ): ?>
                      <li>
                        <a href="<?php echo get_permalink( $equipment->ID ); ?>">
                          <?php echo get_the_title( $equipment->ID ); ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  <?php endif; ?>
      </div>

      <div id="group-key-items">
              <h2>Key Items</h2>
              <?php
                  $key_items = get_field('group-key-items');
                  ?>
                  <?php if( $key_items ): ?>
                    <?php foreach( $key_items as $key_item ): ?>
                      <li>
                        <a href="<?php echo get_permalink( $key_item->ID ); ?>">
                          <?php echo get_the_title( $key_item->ID ); ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  <?php endif; ?>
      </div>

      <div id="group-suppliers">
              <h2>Suppliers</h2>
              <?php
                  $suppliers = get_field('group-suppliers');
                  ?>
                  <?php if( $suppliers ): ?>
                    <?php foreach( $suppliers as $supplier ): ?>
                      <li>
                        <a href="<?php echo get_permalink( $supplier->ID ); ?>">
                          <?php echo get_the_title( $supplier->ID ); ?>
                        </a>
                      </li>
                    <?php endforeach; ?>
                  <?php endif; ?>
      </div>

    </div>  <!-- End Inventory -->

		<!-- Notes -->
    <div id="tabcontent-7" class="tabcontent">

      <div id="group-public">
        <h2>Public Notes</h2>
        <?php if(get_field('group-public')) { ?>
          <p><?php the_field('group-public'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you want!</p><?php } ?>
      </div>

      <div id="group-private">
        <h2>Private Notes</h2>
        <?php if(get_field('group-private')) { ?>
          <p><?php the_field('group-private'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you want!</p><?php } ?>
      </div>

    </div> <!-- End Notes -->


    <!-- Gallery -->
    <div id="tabcontent-8" class="tabcontent">

      <div id="group-gallery">
        <h2>Featured Image</h2>
        <?php if( get_field('group-gallery') ): ?>
        	<img src="<?php the_field('group-gallery'); ?>" />
        <?php endif; ?>
      </div>

    </div> <!-- End Gallery -->

  </div>
  <!-- ========= END DISPLAY FIELDS ========= -->

</div>


<?php // If Not Post Author
 } else { ?>
	 <h2>Sorry, you do not have permission to view this.</h2>
 <?php } ?>


<?php get_footer(); ?>
