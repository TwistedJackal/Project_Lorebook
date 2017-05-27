<?php
/*
Template Name: location
Template Post Type: location
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

  <a id="create-New" href="create-location/">NEW</a>

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
        $location = array(
          'field_groups' => array('acf_location'),
          'submit_value' => 'Save'
        );

        acf_form( $location );
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
      <button id="tablink-2" class="tablink">Culture</button>
      <button id="tablink-3" class="tablink">Cities</button>
      <button id="tablink-4" class="tablink">Geography</button>
      <button id="tablink-5" class="tablink">History</button>
			<button id="tablink-6" class="tablink">Notes</button>
			<button id="tablink-7" class="tablink">Gallery</button>
    </div> <!-- End Tabs -->


    <!-- Overview -->
    <div id="tabcontent-1" class="tabcontent">

      <div id="location-name">
        <h2>Name</h2>
        <?php if(get_field('location-name')) { ?>
          <p><?php the_field('location-name'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is the name of this location?</p><?php } ?>
      </div>

      <div id="location-type">
        <h2>Type</h2>
        <?php if(get_field('location-type')) { ?>
          <p><?php the_field('location-type'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What type of location is this?</p><?php } ?>
      </div>

			<div id="location-universe">
				<h2>Universe</h2>
				<?php
				$universe = get_field('location-universe');

				if( $universe ):
					$post = $universe;
					setup_postdata( $post );
					?>
				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>

      <div id="location-description">
        <h2>Description</h2>
        <?php if(get_field('location-description')) { ?>
          <p><?php the_field('location-description'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

    </div> <!-- End Overview -->


    <!-- Culture -->
    <div id="tabcontent-2" class="tabcontent">

      <div id="location-culture">
        <h2>Language</h2>
        <?php if(get_field('location-language')) { ?>
          <p><?php the_field('location-language'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What language is spoken in this location?</p><?php } ?>
      </div>

			<div id="location-population">
        <h2>Population</h2>
        <?php if(get_field('location-populatino')) { ?>
          <p><?php the_field('location-population'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this location's population?</p><?php } ?>
      </div>

			<div id="location-currency">
        <h2>Currency</h2>
        <?php if(get_field('location-currency')) { ?>
          <p><?php the_field('location-currency'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What currency is used in this location?</p><?php } ?>
      </div>

			<div id="location-motto">
        <h2>Motto</h2>
        <?php if(get_field('location-motto')) { ?>
          <p><?php the_field('location-motto'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is this location's motto?</p><?php } ?>
      </div>

			<div id="location-laws">
        <h2>Laws</h2>
        <?php if(get_field('location-laws')) { ?>
          <p><?php the_field('location-laws'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What are the laws in this location?</p><?php } ?>
      </div>

			<div id="location-sports">
        <h2>Sports</h2>
        <?php if(get_field('location-sports')) { ?>
          <p><?php the_field('location-sports'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What sports are played in this location?</p><?php } ?>
      </div>

			<div id="location-leaders">
				<h2>Leaders</h2>
				<?php
						$leaders = get_field('location-leaders');
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

			<div id="location-languages-select">
				<h2>Languages</h2>
				<?php
						$languages = get_field('location-languages-select');
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

    </div> <!-- End Culture -->


    <!-- Cities -->
    <div id="tabcontent-3" class="tabcontent">

			<div id="location-capital">
				<h2>Capital City</h2>
				<?php
				$capital = get_field('location-capital');

				if( $capital ):
					$post = $capital;
					setup_postdata( $post );
					?>
				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>

			<div id="location-largest-cities">
				<h2>Largest Cities</h2>
				<?php
						$largest_cities = get_field('location-largest-cities');
						?>
						<?php if( $largest_cities ): ?>
							<?php foreach( $largest_cities as $largest_city ): ?>
								<li>
									<a href="<?php echo get_permalink( $largest_city->ID ); ?>">
										<?php echo get_the_title( $largest_city->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

			<div id="location-notable-cities">
				<h2>Notable Cities</h2>
				<?php
						$notable_cities = get_field('location-notable-cities');
						?>
						<?php if( $notable_cities ): ?>
							<?php foreach( $notable_cities as $notable_city ): ?>
								<li>
									<a href="<?php echo get_permalink( $notable_city->ID ); ?>">
										<?php echo get_the_title( $notable_city->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php endif; ?>
			</div>

    </div> <!-- End Cities -->


		<!-- Geography -->
		<div id="tabcontent-4" class="tabcontent">

			<div id="location-area">
				<h2>Area</h2>
				<?php if(get_field('location-area')) { ?>
					<p><?php the_field('location-area'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What kind of area is this location in?</p><?php } ?>
			</div>

			<div id="location-crops">
				<h2>Crops</h2>
				<?php if(get_field('location-crops')) { ?>
					<p><?php the_field('location-crops'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What crops grow in this area?</p><?php } ?>
			</div>

			<div id="location-located-at">
				<h2>Located At</h2>
				<?php if(get_field('location-located-at')) { ?>
					<p><?php the_field('location-located-at'); ?></p>
				<?php } else { ?>
					<p class="placeholder">Where is this location located?</p><?php } ?>
			</div>

			<div id="location-climate">
				<h2>Climate</h2>
				<?php if(get_field('location-climate')) { ?>
					<p><?php the_field('location-climate'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What is the climate like in this location?</p><?php } ?>
			</div>

		</div> <!-- End Geography -->


		<!-- History -->
    <div id="tabcontent-5" class="tabcontent">

      <div id="location-founding-date">
        <h2>Founding Date</h2>
        <?php if(get_field('location-founding-date')) { ?>
          <p><?php the_field('location-founding-date'); ?></p>
        <?php } else { ?>
          <p class="placeholder">When was this location established?</p><?php } ?>
      </div>

      <div id="location-founding-story">
        <h2>Founding Story</h2>
        <?php if(get_field('location-founding-story')) { ?>
          <p><?php the_field('location-founding-story'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How was this location founded?</p><?php } ?>
      </div>

			<div id="location-notable-wars">
        <h2>Notable Wars</h2>
        <?php if(get_field('location-notable-wars')) { ?>
          <p><?php the_field('location-notable-wars'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What notable wars has this location been involved in?</p><?php } ?>
      </div>

    </div> <!-- End History -->


		<!-- Notes -->
    <div id="tabcontent-6" class="tabcontent">

      <div id="location-public">
        <h2>Public Notes</h2>
        <?php if(get_field('location-public')) { ?>
          <p><?php the_field('location-public'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

      <div id="location-private">
        <h2>Private Notes</h2>
        <?php if(get_field('location-private')) { ?>
          <p><?php the_field('location-private'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

    </div> <!-- End Notes -->


    <!-- Gallery -->
    <div id="tabcontent-7" class="tabcontent">

      <div id="location-gallery-field">
        <h2>Featured Image</h2>
        <?php if( get_field('location-featured') ): ?>
        	<img src="<?php the_field('location-featured'); ?>" />
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
