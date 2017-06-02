<?php
/*
Template Name: Universe
Template Post Type: universe
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

  <div id="create-Buttons">
    <ul>
      <a id="create-New" href="/create-universe/">+</a>
    </ul>
  </div>

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
    <?php if (get_field('universe-featured')) {
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ); ?>
      <style>#lorebook-header { background-image: url('<?php echo $thumb['0'];?>'); }</style>
      <?php } else {
          $default = plugin_dir_url( dirname( _FILE__ ) )  . '/Lorebook/assets/bg-universe.png'; ?>
          <style>#lorebook-header { background-image: url('<?php echo $default;?>'); }</style>
        <?php } ?>
    <h1><?php the_title(); ?></h1>
  </div>

  <!-- ========= create new page ========= -->
    <div class="dropdown">
     <button class="dropbtn">Create</button>
     <div class="dropdown-content">
       <a href="/create-scene/">Scenes</a>
       <a href="/create-group/">Groups</a>
       <a href="/create-religion/">Religions</a>
       <a href="/create-language/">Languages</a>
       <a href="/create-race/">Races</a>
       <a href="/create-creature/">Creatures</a>
       <a href="/create-magic/">Magics</a>
       <a href="/create-item/">Items</a>
       <a href="/create-character/">Characters</a>
       <a href="/create-location/">Locations</a>
       <a href="/create-universe/">Universe</a>
     </div>
    </div>

  <!-- ========= EDIT FIELDS ========= -->
  <div id="edit-Fields">

    <button id="cancel-Button">CANCEL</button>

    <?php
      if ( !is_user_logged_in() ){
          echo 'You are not logged in. <br /> <a href="http://lorebook.twistedjackal.com/wp-login.php">Log In &rarr;</a>';
      } else {
        $universe = array(
          'field_groups' => array('acf_universe'),
          'submit_value' => 'Save'
        );

        acf_form( $universe );
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
      <button id="tablink-3" class="tablink">Rules</button>
      <button id="tablink-4" class="tablink">Notes</button>
      <button id="tablink-5" class="tablink">Gallery</button>
    </div> <!-- End Tabs -->


    <!-- Overview -->
    <div id="tabcontent-1" class="tabcontent">

      <div id="universe-name">
        <h2>Name</h2>
        <?php if(get_field('universe-name')) { ?>
          <p><?php the_field('universe-name'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is the name of this universe?</p><?php } ?>
      </div>

      <div id="universe-genre">
        <h2>Genre</h2>
        <?php if(get_field('universe-genre')) { ?>
          <p><?php the_field('universe-genre'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

      <div id="universe-description">
        <h2>Description</h2>
        <?php if(get_field('universe-description')) { ?>
          <p><?php the_field('universe-description'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

    </div> <!-- End Overview -->


    <!-- History -->
    <div id="tabcontent-2" class="tabcontent">

      <div id="universe-history-field">
        <h2>History</h2>
        <?php if(get_field('universe-history')) { ?>
          <p><?php the_field('universe-history'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

    </div> <!-- End History -->


    <!-- Rules -->
    <div id="tabcontent-3" class="tabcontent">

      <div id="universe-physics">
        <h2>Laws of Physics</h2>
        <?php if(get_field('universe-physics')) { ?>
          <p><?php the_field('universe-physics'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What are the laws of physics like in this universe?</p><?php } ?>
      </div>

      <div id="universe-magic">
        <h2>Magic System</h2>
        <?php if(get_field('universe-magic')) { ?>
          <p><?php the_field('universe-magic'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is the magic system like in this universe?</p><?php } ?>
      </div>

      <div id="universe-technologies">
        <h2>Technologies</h2>
        <?php if(get_field('universe-technologies')) { ?>
          <p><?php the_field('universe-technologies'); ?></p>
        <?php } else { ?>
          <p class="placeholder">What is the level of technology in this universe?</p><?php } ?>
      </div>

    </div> <!-- End Rules -->


    <!-- Notes -->
    <div id="tabcontent-4" class="tabcontent">

      <div id="universe-public">
        <h2>Public Notes</h2>
        <?php if(get_field('universe-public')) { ?>
          <p><?php the_field('universe-public'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

      <div id="universe-private">
        <h2>Private Notes</h2>
        <?php if(get_field('universe-private')) { ?>
          <p><?php the_field('universe-private'); ?></p>
        <?php } else { ?>
          <p class="placeholder">Write as little or as much as you'd like!</p><?php } ?>
      </div>

    </div> <!-- End Notes -->


    <!-- Gallery -->
    <div id="tabcontent-5" class="tabcontent">

      <div id="universe-gallery-field">
        <h2>Featured Image</h2>
        <?php if( get_field('universe-featured') ): ?>
        	<img src="<?php the_field('universe-featured'); ?>" />
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
