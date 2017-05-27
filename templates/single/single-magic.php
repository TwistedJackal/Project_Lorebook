<?php
/*
Template Name: Magic
Template Post Type: magic
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

  <a id="create-New" href="/create-magic/">NEW</a>

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
        $magic = array(
          'field_groups' => array('acf_magic'),
          'submit_value' => 'Save'
        );

        acf_form( $magic );
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
      <button id="tablink-2" class="tablink">Appearance</button>
      <button id="tablink-3" class="tablink">Effects</button>
      <button id="tablink-4" class="tablink">Alignment</button>
      <button id="tablink-5" class="tablink">Requirements</button>
			<button id="tablink-6" class="tablink">Notes</button>
			<button id="tablink-7" class="tablink">Gallery</button>
    </div> <!-- End Tabs -->


    <!-- Overview -->
    <div id="tabcontent-1" class="tabcontent">

      <div id="magic-name">
        <h2>Name</h2>
        <?php if(get_field('magic-name')) { ?>
          <p><?php the_field('magic-name'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!?</p><?php } ?>
      </div>

      <div id="magic-type">
        <h2>Type</h2>
        <?php if(get_field('magic-type')) { ?>
          <p><?php the_field('magic-type'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What type of magic is this?</p><?php } ?>
      </div>

			<div id="magic-universe">
				<h2>Universe</h2>
				<?php
				$universe = get_field('magic-universe');

				if( $universe ):
					$post = $universe;
					setup_postdata( $post );
					?>
				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>

      <div id="magic-description">
        <h2>Description</h2>
        <?php if(get_field('magic-description')) { ?>
          <p><?php the_field('magic-description'); ?></p>
        <?php } else { ?>
          <p class="placeholder">How would you describe this magic?</p><?php } ?>
      </div>

    </div> <!-- End Overview -->


    <!-- Appearance -->
    <div id="tabcontent-2" class="tabcontent">

      <div id="magic-visuals">
        <h2>Visuals</h2>
        <?php if(get_field('magic-visuals')) { ?>
          <p><?php the_field('magic-visuals'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What do the visual effects of this magic look like?</p><?php } ?>
      </div>

			<div id="magic-effects">
        <h2>Effects</h2>
        <?php if(get_field('magic-effects')) { ?>
          <p><?php the_field('magic-effects'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What effects does this magic have?</p><?php } ?>
      </div>

    </div> <!-- End Appearance -->


    <!-- Effects -->
    <div id="tabcontent-3" class="tabcontent">

      <div id="magic-positive-effects">
        <h2>Positive Effects</h2>
        <?php if(get_field('magic-positive-effects')) { ?>
          <p><?php the_field('magic-positive-effects'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What positive effects does this magic have?</p><?php } ?>
      </div>

      <div id="magic-neutral-effects">
        <h2>Neutral Effects</h2>
        <?php if(get_field('magic-neutral-effects')) { ?>
          <p><?php the_field('magic-neutral-effects'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What neutral effects does this magic have?</p><?php } ?>
      </div>

      <div id="magic-negative-effects">
        <h2>Negative Effects</h2>
        <?php if(get_field('magic-negative-effects')) { ?>
          <p><?php the_field('magic-negative-effects'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What negative effects does this magic have?</p><?php } ?>
      </div>

    </div> <!-- End Effects -->


		<!-- Alignment -->
		<div id="tabcontent-4" class="tabcontent">

			<div id="magic-element">
				<h2>Element</h2>
				<?php if(get_field('magic-element')) { ?>
					<p><?php the_field('magic-element'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What element is this magic most closely aligned to?</p><?php } ?>
			</div>

      <div id="magic-deity">
				<h2>Deity</h2>
				<?php
				$deity = get_field('magic-deity');

				if( $deity ):
					$post = $deity;
					setup_postdata( $post );
					?>
				    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>

		</div> <!-- End Alignment -->


    <!-- Requirements -->
		<div id="tabcontent-5" class="tabcontent">

			<div id="magic-resource-costs">
				<h2>Resource Costs</h2>
				<?php if(get_field('magic-resource-costs')) { ?>
					<p><?php the_field('magic-resource-costs'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What resource costs are required to use this magic?</p><?php } ?>
			</div>

      <div id="magic-materials-required">
				<h2>Materials Required</h2>
				<?php if(get_field('magic-materials-required')) { ?>
					<p><?php the_field('magic-materials-required'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What materials are required to use this magic?</p><?php } ?>
			</div>

      <div id="magic-skills-required">
				<h2>Skills Required</h2>
				<?php if(get_field('magic-skills-required')) { ?>
					<p><?php the_field('magic-skills-required'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What skills are required to use this magic?</p><?php } ?>
			</div>

      <div id="magic-limitations">
				<h2>Limitations</h2>
				<?php if(get_field('magic-limitations')) { ?>
					<p><?php the_field('magic-limitations'); ?></p>
				<?php } else { ?>
					<p class="placeholder">What limitations does this magic have? What can't it do?</p><?php } ?>
			</div>

		</div> <!-- End Comparisons -->


		<!-- Notes -->
    <div id="tabcontent-6" class="tabcontent">

      <div id="magic-public">
        <h2>Public Notes</h2>
        <?php if(get_field('magic-public')) { ?>
          <p><?php the_field('magic-public'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

      <div id="magic-private">
        <h2>Private Notes</h2>
        <?php if(get_field('magic-private')) { ?>
          <p><?php the_field('magic-private'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

    </div> <!-- End Notes -->


    <!-- Gallery -->
    <div id="tabcontent-7" class="tabcontent">

      <div id="magic-gallery-field">
        <h2>Featured Image</h2>
        <?php if( get_field('magic-featured') ): ?>
        	<img src="<?php the_field('magic-featured'); ?>" />
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
